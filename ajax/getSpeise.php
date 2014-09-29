<?php
	include '../include/config.php';
	include '../include/DB_Functions.php';
	include '../form.php';
	include '../hamming.php';
	include '../flickr.php';
	
	$input = Form::auslesen();
	
	$hamming = new Hamming();
	$ergebnisse = $hamming->run($input);
			
	usort($ergebnisse, function($a, $b) {
		return $a['beliebt'] - $b['beliebt'];
	});

	$index = rand(5,9);
	$result = null;
	
	if($ergebnisse[$index]['flickr'] == null) {
		$ergebnisse[$index]['flickr'] = '6122735488';
	}
	$flickr = new Flickr($ergebnisse[$index]['flickr']);
	
	$result["speise"] = $ergebnisse[$index]['speise'];
	$result['url'] = $flickr->getImage();
	$result['author'] = $flickr->getAuthor();
		
	echo json_encode($result);			