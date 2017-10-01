<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="webDesign.css">
</head>

<body>
	<div style = "text-align:center;"><img src="https://imgur.com/kpNpKOK.png" width="100%" height="auto"><div/>

<div class="col-xs-12">
	<center>
	<table width="75%" class="table-striped table-hover" style="text-align: center;">
    <thead>
    <tr>
        <td><h3>Name</h3></td>
        <td><h3>Attending?</h3></td>
    </tr>
    </thead>
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