<?php
require('db.php');
include("auth.php");
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
	<title>View Records</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body background="images/drops-of-water-water-nature-liquid-40784.jpeg" alt="Responsive background-image">
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
							   <li class='last'><a href='sales2.php'><span>Add Sales</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'><span>About</span></a></li>
				   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
				</ul>
			</div>
	<center>
		<br/><br/><div>
			<h2><font face="Britannic Bold">View Records</font></h2>
			</div>
		<div style="width:900px;">
		<table width="100%" border="1" style="border-collapse:collapse;" class="table table-striped table-dark">
		<thead>
		<tr class="bg-danger">
			<th><strong>Number</strong></th>
			<th><strong>Sales ID</strong></th>
			<th><strong>Customer Name</strong></th>
			<th><strong>Date/Time</strong></th>
			<th><strong>View</strong></th>
			<th><strong>Delete</strong></th>
		</tr>
		</thead>
		<tbody>
		</div>
			</center>
			<?php
			$count=1;
			$sel_query="Select * from sales, customer WHERE sales.customer_num = customer.customer_num ;";
			$result = mysqli_query($con,$sel_query);
			$total= 0;
			while($row = mysqli_fetch_assoc($result)) {


		

				?>
			<tr>
				<td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["sales_id"]; ?></td>
				<td align="center"><?php echo $row["firstname"]; echo " "; echo $row["surname"]; ?></td>
				<td align="center"><?php echo $row["date_time"]; ?></td>
				<td align="center">
					<a href="customersalesview.php?id=<?php echo $row["sales_id"]; ?>">View</a>
				</td>
				<td align="center">
					<a href="deletesalesview.php?id=<?php echo $row["sales_id"]; ?>">Delete</a>
				</td>
			</tr>
			<?php $count++; } ?>
		</tbody>
</table>

</body>
</html>
