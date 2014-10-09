<?php
	include '../include/config.php';
	include '../flickr.php';
	$id = $_POST['id'];
	
	if($id == null || $id == 0) {
		$id = '6122735488';
	}
	$flickr = new Flickr($id);
	
	$result = null;
	$result['url'] = $flickr->getImage();
	$result['author'] = $flickr->getAuthor();
		
	echo json_encode($result);