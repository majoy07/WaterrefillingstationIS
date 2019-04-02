<?php
	require('db.php');
	include("auth.php");
	$status = "";
	/*if(isset($_POST['representatives']))
	{
		$checkbox = $_POST['representatives'];
		$quantity = $_POST['quantity'];
		$qty = "('" . implode( "','", $quantity ) . "');" ;
		$id = "('" . implode( "','", $checkbox ) . "');" ;
		echo $id.", ".$qty;
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta charset="windows-1252">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/> 
   <link rel="stylesheet" href="styles.css"/>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="javajs.js"></script>
 
	<title>View Records</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body background="images/pexels-photo-1615011.jpeg" alt="Responsive background-image" >
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
							   <li class='last'><a href='sales2.php'><span>Add Sales</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href='#'><span>Change Password</span></a></li>
				   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
				</ul>
			</div>
	<center>
	<br/><br/>
		<h2><font face="Britannic Bold">View Records</font></h2>
		<div style="width:900px;">
				
		<form action = "sales_save.php" method="POST">
		<?php 
		$customer = $_GET["no"];
		$sale = $_GET["id"];
		
		$sel_query="Select * from customer WHERE customer_num = $customer;";
			$result = mysqli_query($con,$sel_query);
			
			while($row = mysqli_fetch_assoc($result)) {
			
				

				
		
		?>
		
		<input type="text" name="customers" id="customer" value=<?php echo $row["firstname"]; echo " "; echo $row["surname"];
		
		}?> readonly >
		<input type="hidden" name="sale" id="customer" value=<?php echo $sale;?>  >
		
		
		<br/>
		<br/><br/>
		<div style="width:900px;">
		<table width="100%" border="1" style="border-collapse:collapse;" class="table table-striped table-dark">
		<thead>
		<tr class="bg-danger">
			<th><strong>Product ID</strong></th>
			<th><strong>Description</strong></th>
			<th><strong>Price</strong></th>
			<th><strong>Unit</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Check me</strong></th>

		</tr>
		</thead>
			<tbody>
		</div>
				</center>
				
			<?php
			$count=1;
			$sel_query="Select * from Products";
			$result = mysqli_query($con,$sel_query);
			$count = mysqli_num_rows($result); // Count table rows
			while ($row = $result->fetch_object())
            {
                // set up a row for each record
                echo "<tr>";
                echo "<td>" . $row->Product_id . "</td>";
                echo "<td>".$row->Description."</td>"; 
                echo "<td><input type='text' style='order: none; border-color: transparent;' name='price[]' id='checkbox' value='".$row->Price ."' readonly /></td>";
                echo "<td coslpan ='5'>" . $row->Unit." </td>";
                echo '<td> <input type="text" name="quantity[]" id = "quantity" style="width:70px; height:30px"/> </td>';
                echo "<td><input type='checkbox' name='check[]' id='checkbox' style='width:70px; height:30px' value='".$row->Product_id ."' /></td>";
				
                echo "</tr>";
            } ?>
			
		</tbody>
		</table>
		<br/>
		<input type="submit" value="submit" name="save" >
		</div>	
		
	</form>
	
	
</body>
</html>