<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $num =$_REQUEST['number'];
    $first = $_REQUEST['fname'];
	$last =$_REQUEST['lname'];
    $cont = $_REQUEST['contact'];
	$address = $_REQUEST['add'];
    $ins_query="insert into customer (customer_num,firstname,surname,contact_num,address) values
    ('$num','$first','$last','$cont','$address')";
    mysqli_query($con,$ins_query)
    or die(mysqli_affected_rows());
    $status = "New Record Inserted Successfully.
    </br></br><a href='customer.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insert New Record</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<br/><br/><br/><br/><div class="form">
		<p><a href="dashboard.php">Dashboard</a> 
		| <a href="customer.php">View Records</a> 
		| <a href="logout.php">Logout</a></p>
		<div>
		<h2><font face="Britannic Bold">Insert New Record</font></h2>
		<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<p><input type="text" name="number" placeholder="Enter Customer #" required /></p>
			<p><input type="text" name="fname" placeholder="Enter Firstname" required /></p>
			<p><input type="text" name="lname" placeholder="Enter Surname" required /></p>
			<p><input type="text" name="contact" placeholder="Enter Contact #" required /></p>
			<p><input type="text" name="add" placeholder="Enter Address" required /></p>
			<p><input name="submit" type="submit" value="Submit" /></p>
		</form>
		<p style="color:#FF0000;"><?php echo $status; ?></p>
		</div>
		</div>
	</body>
</html>