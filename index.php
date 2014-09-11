<?php
	include 'include/DB_Functions.php';
	include 'hamming.php';
	include 'form.php';
	
	$input = null;
	$hamming = new Hamming();
	// Gibt es Daten vom Formular?
	if (Form::datenGesendet()){
		echo "JUHU, DATEN!";
		$input = Form::auslesen();
		echo "<hr>";
		$hamming->run($input);		
		echo "<hr>";
	}
	
	
	Form::create($input);

?>