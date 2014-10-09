<?php
	include '../include/config.php';
	include '../include/DB_Functions.php';
	include '../hamming.php';
	include '../form.php';
		
	$input = Form::auslesen();
	$speise = $_POST['speise'];
	
	$result = null;
	$db = new DB_Functions();
	if(($speise != null) and ($speise != '')) {
		if($result['success'] = $db->addSpeise($input, $speise)) {
			$result['message'] = $speise.' wurde in die Datenbank eingetragen';
		} else {
			$result['message'] = 'Fehler beim Speichern in der Datenbank';		
		}
	} else {
		$result['success'] = false;
		$result['message'] = 'Keine Speise angegeben';
	}
	
	echo json_encode($result);