<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
</head>
<body background="images/pexels-photo-63340.jpeg" alt="Responsive background-image"  >
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and pass='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<br/><br/><br/><br/><br/><br/>
<center>
	<div class="form">
		<h1><font face="Britannic Bold">Log In</font></h1>
			<form action="" method="post" name="login">
			<label>Username:</label>
			<input type="text" name="username" placeholder="Username" required /><br/><br/>
			<label>Password: </label>
			<input type="password" name="password" placeholder="Password" required /><br/><br/>
			<input name="submit" type="submit" value="Login" />
		</form><br/>
	</div>
	</center>
<?php } ?>
</body>
</html>