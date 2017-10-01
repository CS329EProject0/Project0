<!DOCTYPE html>
<html>

<head>

    <title>Member Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>  
  <link rel="stylesheet" href="webDesign.css">

</head>
<body>
<div class="container">
    	<div style = "text-align:center;">

        	<h1>Welcome to Pauline's Potluck Party Page</h1>
        </div>  
    <div class="row center" style="text-align: center; margin: 30px;">
        <div class="col-lg-6 col-sm-6">
        	<h4>Make sure you setup your profile</h4>
        	<button class="button" style="vertical-align:middle" onclick="location.href='yourProfile.html'"><span>Profile</span></button>
        </div>
        <div class="col-lg-6 col-sm-6">
        	<h4>View Attendees</h4>
        	<button class="button" style="vertical-align:middle" onclick="location.href='attendees.php'"><span>View Attendees</span></button>
        </div>
    </div>

      <center>
        <div class="col-sm-12 col-lg-12 col-xs-12">
        <table id="attendanceTable"  style="text-align: center;" class="table-hover table-striped">
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
        </div> 
      </center>

</div>
</body>
</html>