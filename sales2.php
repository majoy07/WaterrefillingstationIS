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
				   <li><a href='#'><span>About</span></a></li>
				   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
				</ul>
			</div>
	<center>
	<br/><br/>
		<h2><font face="Britannic Bold">View Records</font></h2>
		<div style="width:900px;">
				
		<form action = "sales2.php" method="GET">
		
		<br/><br/>
		<select name="customers" id="customer">
		<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM customer;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["customer_num"];  ?>"><?php echo $row["firstname"]; echo " "; echo $row["surname"]; ?></option>
				<?php		}
				
				}
				?>
		</select><br/><br/>
	
		<br/>
		<input type="submit" value="submit" name="save" >
		</div>	
	</form>
		<?php
			if(isset($_GET['save'])){
				
				$customer_no = mysqli_real_escape_string($con, $_GET['customers']);
				$sql = "INSERT INTO `sales` (`sales_id`, `customer_num`, `date_time`) VALUES (NULL, '$customer_no', CURRENT_TIMESTAMP);";
				mysqli_query($con, $sql);

				
					$sql = "SELECT * 
									FROM sales;";
							$result = mysqli_query($con, $sql);
							$resultCheck = mysqli_num_rows($result);
							
							if ($resultCheck > 0) {
								while ($row = mysqli_fetch_assoc($result)) {	
								$sales_id = $row["sales_id"];
								
								
								
							header("Location: addsales_product.php?id=$sales_id&no=$customer_no");
							}}
			}
		?>
	
	
</body>
</html>