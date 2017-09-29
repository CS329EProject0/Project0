<!DOCTYPE html>
<html>

<!-- calling the webDesign-->
<link rel="stylesheet" href="webDesign.css">

<head>
<!--page contents -->
	<title>Member Page</title>
  <link rel="stylesheet" href="webDesign.css">
</head>
<body>
	<div style = "text-align:center;">

    	<h1>Welcome to Pauline's Potluck Party Page</h1>
    	<h4>Make sure you setup your profile<h4/>
    	<button class="button" style="vertical-align:middle" onclick="location.href='yourProfile.html'"><span>Profile</span></button>
    	
    	<h4>View Attendees</h4>
    	<button class="button" style="vertical-align:middle" onclick="location.href='attendees.php'"><span>View Attendees</span></button>
    <div/>

  <center>
      <div>
    <table id="attendanceTable" width="90%" style="text-align: center;">
        <tr>
            <td>Name</td>
            <td>Attendance</td>
            <td>Item You'll Bring</td>
            <td></td>
        </tr>
        <tr>
		<form action="memberAdd.php" method="post">
            <td>
        		<input type="text" name="Name" placeholder="First & Last Name">
            </td>
            <td>
            	<input type="radio" name="attendance" value="Yes">Yes
            	<input type="radio" name="attendance" value="No">No
            </td>
            <td>
                <select name="item">
                    <option value="None">None</option>
                    <option value="Cups">Cups</option>
                    <option value="Soda">Soda</option>
                    <option value="Paper Towels">Paper Towels</option>
                    <option value="Snacks">Snacks</option>
                    <option value="Other">Other</option>
                </select>
            </td>
            <td>
                <button class="button" type="Submit" style="vertical-align:middle"><span>RSVP now</span></button>
            </td>
        </form>
        </tr>
    </table>
  </center>


</body>
</html>