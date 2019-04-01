<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Index</title>
</head>

<body>
	<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="form">
	<br/><br/>
	<div class="sidebar">
	  
	  <a href="dashboard.php"><i class="fa fa-fw fa-wrench"></i>Profile</a>
	  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
	</div>
	</center>
</body>
</html>