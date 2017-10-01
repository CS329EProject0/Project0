<?php
	    $userName = $_POST["userName"]; //You have to get the form data
	    $password = $_POST["password"];
	    $confirmPassword = $_POST["confirmPassword"];
	    $filename = 'userList.txt';

	    if ($password === $confirmPassword) {
	    	$fp = fopen($filename, 'a+'); //Open your .txt file
	    	fwrite($fp , $userName . ":" . $password . "\n"); 
	  		fclose($fp); 
	    	header('Location: member.php');
	    }
    	die();
	?>