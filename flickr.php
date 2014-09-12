<?php
class Flickr {
	private $id = null;

	function __construct($id) {
       $this->id = $id;
	}
	
	function getImage() {
		$sizes = $this->erzeugeAnfrage('flickr.photos.getSizes')['sizes']['size'];
		$groesste_size = $sizes[count($sizes)-1];
		return $groesste_size['source'];
	}
	
	function getAuthor() {
		$author = $this->erzeugeAnfrage('flickr.photos.getInfo')['photo']['owner'];
		$result['username'] = $author['username'];
		$result['path_alias'] = $author['path_alias'];
		$result['link'] = 'https://www.flickr.com/photos/'.$author['path_alias'];
		return $result;
	}
	
	
	private function erzeugeAnfrage($method){
		#
		# API-URL für den Aufruf erstellen
		#
		$params = array(
			'api_key'	=> FLICKR_KEY,
			'method'	=> $method,
			'photo_id'	=> $this->id,
			'format'	=> 'php_serial',
		);
		$encoded_params = array();

		foreach ($params as $k => $v){
			$encoded_params[] = urlencode($k).'='.urlencode($v);
		}

		#
		# API aufrufen und Antwort entschlüsseln
		#
		$url = "https://api.flickr.com/services/rest/?".implode('&', $encoded_params);
		$rsp = file_get_contents($url);
		$rsp_obj = unserialize($rsp);
		return $rsp_obj;
	}
}
?>