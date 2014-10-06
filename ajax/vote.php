<?php
	include '../include/config.php';
	include '../include/DB_Functions.php';
		
	$speise = $_POST['speise'];
	$alt = $_POST['alt'];
	$neu = $_POST['neu'];
	
	if($speise == -1) {
		$result['success'] = false;	
		$result['message'] = 'Keine Speise gefunden.';
		return;
	}
	
	$add = 0;
	// Wenn zweimal hintereinander das Gleiche ausgewählt wurde (Auswahl aufheben):
	if($neu == $alt) {
		$add = - $neu;
	} else {
		$add = $neu - $alt;
	}
	
	$db =new DB_Functions();
	if($db->changeBeliebt($speise, $add)) {
		$result['success'] = true;
	} else {
		$result['success'] = false;	
		$result['message'] = 'Bewertung konnte nicht bearbeitet werden.';
	}	
	echo json_encode($result);