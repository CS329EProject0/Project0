<?php
header('Location: index.php');
die();
$DELETE = $_POST[];

     $data = file("./foo.txt");

     $out = array();

     foreach($data as $line) {
         if(trim($line) != $DELETE) {
             $out[] = $line;
         }
     }

     $fp = fopen("./foo.txt", "w+");
     flock($fp, LOCK_EX);
     foreach($out as $line) {
         fwrite($fp, $line);
     }
     flock($fp, LOCK_UN);
     fclose($fp);


     	$name = $_POST["Name"]; //You have to get the form data
	    $attending = $_POST["attendance"];
	    $item = $_POST["item"];
	    $filename = 'RSVPList.txt';

	    $fp = fopen($filename, 'a+'); //Open your .txt file
	    fwrite($fp , $name . ":" . $attending . ":" . $item . "\n"); //Now lets write it in there
	    
	    fclose($fp); //Finally close our .txt
	    header('Location: attendees.php'); 
    	die();
?>