<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="webDesign.css">
</head>

<body>
	<div style = "text-align:center;"><img src="https://i.imgur.com/KVyTWVb.png" width="1000" height="400"><div/>

<div>
	<center>
	<table width="50%" border="1" style="text-align: center;">
    <tr>
        <td><h3>Name</h3></td>
        <td><h3>Attending?</h3></td>
    </tr>
	<?php
	$file_handle = fopen("RSVPList.txt", "rb");

	while (!feof($file_handle) ) {
	    $line_of_text = fgets($file_handle);
	    $parts = explode(':', $line_of_text);
	    echo "<tr><td>$parts[0]</td><td>$parts[1]</td></tr>";
	}
	fclose($file_handle);
	?>
	</table>
	</center>
</div>

<div>
	<button class="button" style="vertical-align:middle" onclick="location.href='signIn.html'"><span>Login</span></button>
	<button class="button" style="vertical-align:middle" onclick="location.href='register.html'"><span>Sign-Up</span></button>
</div>

</body>

</html>