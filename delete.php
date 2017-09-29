<?php
	
	$filename = 'RSVPList.txt';
	$fp = fopen($filename, 'a+'); //open text file
	flock($fp, LOCK_EX);
	$lines = explode(PHP_EOL, $text);
	foreach ($lines as $line) {
		
	}

?>