<?php
$userN = $_POST['userName'];
$passW = $_POST['password'];
$admin = "admin";
$userlist = file('userList.txt');

    if ($userN === $admin AND $passW === $admin) {
        $success = true;
        header("Location:adminPage.php");
    }

$success = false;
foreach ($userlist as $user) {
    $user_details = explode(':', $user);
    if ($user_details[0] === $userN AND $user_details[1] === $passW) {
        $success = true;
        header("Location:member.php");
    }
}

if ($success) {
    echo "<br> Hi $userN you have been logged in. <br>";
} else {
    echo "<center> You have entered an inccorect username or password. Please <a href='signIn.html'>try again</a>.<br>Or <a href='register.html'>create an account</a><center>";
}

?>