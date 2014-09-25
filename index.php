<?php
	include 'include/DB_Functions.php';
	include 'hamming.php';
	include 'form.php';
	include 'flickr.php';
	include 'submit.php';
	include 'include/config.php';
	
	//noch keine Formulardaten
	$input = null;
	//neues Hamming Objekt
	$hamming = new Hamming();
	//rezeptidee leer
	$idee = "";
	// Gibt es Daten vom Formular?
	$aktion = Form::datenGesendet();
	$ergebnisse= null;
	$index=0;
	switch ($aktion){
		case "up":
			$db_obj=new DB_Functions();
			$id=$_POST['id'];
			$sql="UPDATE ".DB_TABLE. ' SET beliebt=beliebt + 1 WHERE id='.$id.";";
			mysql_query($sql);
			break;
		case "down": 
			$db_obj=new DB_Functions();
			$id=$_POST['id'];
			$sql="UPDATE ".DB_TABLE. ' SET beliebt= beliebt - 1 WHERE id='.$id.";";
			mysql_query($sql);	
		case "hamming":
			if($aktion == 'down'){
			
					$input['warm']=$_POST['0'];
					$input['zeit']=$_POST['1'];
					$input['personen']=$_POST['2'];
					$input['gesund']=$_POST['3'];
					$input['hunger']=$_POST['4'];
					$input['vegetarisch']=$_POST['5'];
					$input['kochen']=$_POST['6'];
				
			} else{
			$input = Form::auslesen();
			}
			$ergebnisse = $hamming->run($input);
			
			usort($ergebnisse, function($a, $b) {
			return $a['beliebt'] - $b['beliebt'];
			});
		
			//print_r($ergebnisse);


			$index = rand(5,9);
			$idee = '<h2>Unsere Idee: '.$ergebnisse[$index]['speise'].'</h2>'; 
			$id = $ergebnisse[$index]['id'];
			break;
		case "addSpeise":		
			$input = Form::auslesen();
			$neuesRezept=$_POST['infield'];
			$db = new DB_Functions();
			$db->addSpeise($input, $neuesRezept);
			break;
			
		case 'newSpeise':
			$input = Form::auslesen();
			break;
	}			

?>

<!DOCTYPE html>
<html lang="de" 
	<?php
	
	
	if($ergebnisse[$index]['flickr'] == null) {
		$ergebnisse[$index]['flickr'] = '6122735488';
	}
	$flickr = new Flickr($ergebnisse[$index]['flickr']);
	echo 'style="background: url('.$flickr->getImage().') no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;"';
	$author = $flickr->getAuthor();
	?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Speisen</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="select/css/bootstrap-select.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Unterstützung für Media Queries und HTML5-Elemente im Internet Explorer über HTML5 shim und Respond.js -->
    <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<div class="row">			
			<div class="col-md-8 col-md-offset-2 panel" style="padding:20px">
				<h1>Rezeptvorschlag</h1> 
				<?php
					if($aktion=='newSpeise') {
						Submit::createField($input);
					} else {
						if(($aktion == 'hamming')|| ($aktion == 'down')) {
						  echo'<form action="index.php" method="post">';
						  echo'<input type="hidden" value='.$id.' name="id">';
							$c=0;
							if (is_array($input)){
							foreach ($input as $val){
						   echo'<input type="hidden" value='.$val.' name='.$c.'>';
						   $c+=1;
							}}
							echo'	<table width=100%>
									<tr>
										<td width=85%>';echo $idee;
								  echo' </td>
										<td width=15%>';
								  echo '<button type="submit" class="btn btn-default btn-lg" name="thumb_up">
										<span class="glyphicon glyphicon-thumbs-up"></span>
										</button>
										<button type="submit" class="btn btn-default btn-lg" name="thumb_down">
										<span class="glyphicon glyphicon-thumbs-down"></span>
										</button>';
								  echo' </td>
									</tr>
								</table>
								</form>';
						}
						Form::create($input);
					}
				?>
				<hr>
				<p><small><a href="<?php echo $author['linkPicture']; ?>">Background picture by <?php echo $author['username']; ?> @flickr</a>. Used under Creative Commons - Attribution.</small></p>
			</div>
		</div>		
	</div>
    <!-- jQuery (wird für Bootstrap JavaScript-Plugins benötigt) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap select -->
	<script type="text/javascript" src="select/js/bootstrap-select.min.js"></script>
	<script>$('.selectpicker').selectpicker();</script>
	
	
  </body>
</html>
