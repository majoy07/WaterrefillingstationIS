<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $first = $_REQUEST['fname'];
	$last =$_REQUEST['lname'];
    $cont = $_REQUEST['contact'];
	$address = $_REQUEST['add'];
    $ins_query="insert into customer (firstname,surname,contact_num,address) values
    ('$first','$last','$cont','$address')";
    mysqli_query($con,$ins_query)
    or die(mysqli_affected_rows());
    $status = "New Record Inserted Successfully.";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	   <link rel="stylesheet" href="styles.css">
	   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	   <script src="script.js"></script>
		<title>Insert New Record</title>
		<link rel="stylesheet" href="style.css" />
	</head>
<body background="images/pexels-photo-1615011.jpeg" alt="Responsive background-image">
		<div id='cssmenu'>
					<ul>
				   <li><a href='dashboard.php'><span>Home</span></a></li>
				   <li class='active has-sub'><a href='#'><span>Products</span></a>
					  <ul>
						 <li class='has-sub'><a href='#'><span>Products</span></a>
							<ul>
							   <li><a href='Products.php'><span>View Product</span></a></li>
							   <li class='last'><a href='prductsInsert.php'><span>Add Product</span></a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'><span>Customer</span></a>
							<ul>
							   <li><a href='customer.php'><span>View Customer</span></a></li>
							   <li class='last'><a href='customerInsert.php'><span>Add Customer</span></a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'><span>Employee</span></a>
							<ul>
							   <li><a href='Employees.php'><span>View Employee</span></a></li>
							   <li class='last'><a href='EmployeesInsert.php'><span>Add Employee</span></a></li>
							</ul>
						 </li>
						  <li class='has-sub'><a href='salesview.php'><span>Sales</span></a>
							<ul>
							   <li><a href='#'><span>View Sales</span></a></li>
							   <li class='last'><a href='sales2.php'><span>Add sales2</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'><span>About</span></a></li>
				   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
				</ul>
		</div><br/><br/><br/><br/>
		<center>
		<h2><font face="Britannic Bold">Insert New Record</font></h2>
		<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<p><input type="text" name="fname" placeholder="Enter Firstname" required /></p>
			<p><input type="text" name="lname" placeholder="Enter Surname" required /></p>
			<p><input type="text" name="contact" placeholder="Enter Contact #" required /></p>
			<p><input type="text" name="add" placeholder="Enter Address" required /></p>
			<p><input name="submit" type="submit" value="Submit" /></p>
		</form>
		</center>
		<p style="color:#FF0000;"><?php echo $status; ?></p>
		</div>
		</div>
	</body>
</html>