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
		$ergebnisse = $hamming->run($input, 5);
		foreach($ergebnisse as $ergebnis) {
			echo $ergebnis['speise'].'<br>'; 
			// für Anzeige inklusive Zahlen:
			//echo $ergebnis['speise'].' '.$ergebnis['wert'].'<br>';
		}
		echo "<hr>";
	}
	
	
	Form::create($input);

?>