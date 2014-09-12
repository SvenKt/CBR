<?php
	include 'include/config.php';
	include 'flickr.php';
	
	$flickr = new Flickr('8175276708');
	echo $flickr->getImage();
	
	print_r($flickr->getAuthor());
	

?>