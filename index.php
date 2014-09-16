<?php
	include 'include/DB_Functions.php';
	include 'hamming.php';
	include 'form.php';
	include 'flickr.php';
	
	$input = null;
	$hamming = new Hamming();
	$idee = "";
	// Gibt es Daten vom Formular?
	if (Form::datenGesendet()){
		$input = Form::auslesen();
		$ergebnisse = $hamming->run($input);
		$index = rand(0,4);
		$idee = '<h2>Unsere Idee: '.$ergebnisse[$index]['speise'].'</h2>';
		//echo $index;
		/*
		foreach($ergebnisse as $ergebnis) {
			echo $ergebnis['speise'].' '.$ergebnis['wert'].'<br>';
		}*/
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
>
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
					echo $idee;					
					Form::create($input);
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
