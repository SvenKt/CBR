<!DOCTYPE html>
<html lang="de">	
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
	<div id="wrap">
		<div class="background"></div>
		<div class="background"></div>
	</div>
	<div style="display:hidden;"><img class="hidden" /></div>
	<div class="container">
		<div class="row">			
			<div class="col-md-8 col-md-offset-2 panel" style="padding:20px">
				<h1>Rezeptvorschlag</h1>
				<div class="alert alert-success" id="alert-speichern-success" role="alert"></div>
				<div class="alert alert-success" id="alert-voting-success" role="alert">Danke für das Feedback.</div>
				<h2 class="pull-left"></h2>
				<div class="pull-right voting">
					<button onClick="voting(1)" class="btn btn-default btn-lg" id="thumb_up">
						<span class="glyphicon glyphicon-thumbs-up"></span>
					</button>
					<button onClick="voting(-1)" class="btn btn-default btn-lg" id="thumb_down">
						<span class="glyphicon glyphicon-thumbs-down"></span>
					</button>
				</div>
				<div class="clearfix"></div>
				
				<form action="#" method="post" id="anfrage">
					<?php
					include 'hamming.php';
					foreach(Hamming::$attribute as $attribut) {
						echo '<div class="row" style="padding-bottom:10px"><div class="col-sm-5">';
						echo $attribut['title'];
						echo '</div><div class="col-sm-7">';
						echo '<select class="selectpicker" name="'.$attribut['spalte'].'" id="'.$attribut['spalte'].'">';
							echo '<option value="1">'.$attribut['select'][0].'</option>';
							echo '<option value="0">'.$attribut['select'][1].'</option>';
						echo '</select><br>';
						echo '</div></div>';
					}
					?>
				</form>
				<button class="btn btn-success" name="hamming" id="hamming">Submit</button>			
				<button class="btn btn-warning" name="newSpeise" data-toggle="modal" data-target="#addSpeiseModal">Oder Speise einfügen!</button>
				
				<!-- Modal -->
				<div class="modal fade" id="addSpeiseModal" tabindex="-1" role="dialog" aria-labelledby="addSpeiseModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="addSpeiseModalLabel">Neue Speise hinzufügen</h4>
							</div>
							<div class="modal-body">
								<div class="alert alert-danger" id="alert-speichern" role="alert">Fehler beim Speichern</div>
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-cutlery"></span>
									</span>
									<input type="text" id="neueSpeise" class="form-control" placeholder="Die Neue Speise">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
								<button type="button" class="btn btn-primary" id="addSpeise">Speise eintragen</button>
							</div>
						</div>
					</div>
				</div>
				
				<hr>
				<p><small><a id="linkPicture" href="#">Background picture by <span id="author"></span> @flickr</a>. Used under Creative Commons - Attribution.</small></p>
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
	
	<script type="text/javascript" src="ajax/ajax.js"></script>
  </body>
</html>
