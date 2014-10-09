<?php
include_once "../flickr.php";

class FlickrTest extends PHPUnit_Framework_TestCase {

	public function testGetImage(){
		$flickr = new Flickr(6122735488);
		$this->assertEquals('https://farm7.staticflickr.com/6202/6122735488_cb711a2d3f_o.jpg',$flickr->getImage(), 'Falsch/Keine Url erhalten');
	}
	
	public function testGetAuthor(){
		$flickr = new Flickr(6122735488);
		$author = $flickr->getAuthor();
		$this->assertEquals('kubina',$author['username'], 'Falschen/Keinen Author erhalten');
		$this->assertEquals('https://www.flickr.com/photos/kubina/6122735488',$author['linkPicture'], 'Falsches/Kein linkPicture erhalten');
	}
}