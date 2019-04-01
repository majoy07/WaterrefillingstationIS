<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Records</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
</head>
<body >
	<center>
		<br/><br/><div>
			<p><a href="dashboard.php"><button type="button" class="btn btn-primary">Dashboard</button></a> 
				<a href="customerInsert.php"><button type="button" class="btn btn-primary">Add Customer</button></a>
				<a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a></p>
			<h2><font face="Britannic Bold">View Records</font></h2>
			</div>
		<div style="width:900px;">
		<table width="100%" border="1" style="border-collapse:collapse;" class="table table-striped table-dark">
		<thead>
		<tr>
			<th><strong>Number</strong></th>
			<th><strong>Customer #</strong></th>
			<th><strong>Firstname</strong></th>
			<th><strong>Surname</strong></th>
			<th><strong>Contact #</strong></th>
			<th><strong>Address</strong></th>
			<th><strong>Edit</strong></th>
			<th><strong>Delete</strong></th>
		</tr>
		</thead>
		<tbody>
		</div>
	</center>
<?php
$count=1;
$sel_query="Select * from customer ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["customer_num"]; ?></td>
	<td align="center"><?php echo $row["firstname"]; ?></td>
	<td align="center"><?php echo $row["surname"]; ?></td>
	<td align="center"><?php echo $row["contact_num"]; ?></td>
	<td align="center"><?php echo $row["address"]; ?></td>
	<td align="center">
		<a href="productsEdit.php?id=<?php echo $row["customer_num"]; ?>">Edit</a>
	</td>
	<td align="center">
		<a href="productsDelete.php?id=<?php echo $row["customer_num"]; ?>">Delete</a>
	</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
