<?php
	include '../include/config.php';
	include '../include/DB_Functions.php';
	include '../form.php';
	include '../hamming.php';
	
	$input = Form::auslesen();
	
	$hamming = new Hamming();
	$ergebnisse = $hamming->run($input);
	
	usort($ergebnisse, function($a, $b) {
		return $a['beliebt'] - $b['beliebt'];
	});

	$index = rand(5,9);
	$result = null;
		
	$result['id'] = (int) $ergebnisse[$index]['id'];
	$result['speise'] = $ergebnisse[$index]['speise'];
	$result['flickr'] = $ergebnisse[$index]['flickr'];
		
	echo json_encode($result);			