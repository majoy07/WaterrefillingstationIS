<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from employee where emp_num='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
   <title>employeesEdit</title>
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
						  <li class='has-sub'><a href='#'><span>Sales</span></a>
							<ul>
							   <li><a href='salesview.php'><span>View Sales</span></a></li>
							   <li class='last'><a href='sales2.php'><span>Add sales2</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'><span>About</span></a></li>
				   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
				</ul>
			</div>	
<br/><br/><br/><br/>
	<div class="form">
	<h1>Update Record</h1>
	<?php
	$status = "";
	if(isset($_POST['submit']) && $_POST['new']==1)
	{
	$id=$_REQUEST['id'];
	$fname =$_POST['first'];
	$lname =$_POST['last'];
	$ext =$_POST['extend'];
	$position =$_POST['position'];
	$update="update employee set
	Firstname='".$fname."', Lastname='".$lname."',
	Name_extension='".$ext."',Position='".$position."' where emp_num='".$id."'";
	mysqli_query($con, $update); 
	$status = "Record Updated Successfully.";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
	}else {
	?>
	<div>
		<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<input name="id" type="hidden" value="<?php echo $row['emp_num'];?>" />
			<p><input type="text" name="first" placeholder="Enter Firstname" 
			required value="<?php echo $row['Firstname'];?>" /></p>
			<p><input type="text" name="last" placeholder="Enter Lastname" 
			required value="<?php echo $row['Lastname'];?>" /></p>
			<p><input type="text" name="extend" placeholder="Enter extension" 
			required value="<?php echo $row['Name_extension'];?>" /></p>
			<p><input type="text" name="position" placeholder="Enter Position" 
			required value="<?php echo $row['Position'];?>" /></p>
			<p><input name="submit" type="submit" value="Update" /></p>
		</form>
	<?php } ?>
	</div>
	</div>
</body>
</html>