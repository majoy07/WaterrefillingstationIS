<?php

	require('db.php');
	include("auth.php");
	$status = "";
			if(isset($_GET['save'])){
				
				$customer_no = mysqli_real_escape_string($con, $_GET['customers']);
				$sale = mysqli_real_escape_string($con, $_GET['sale']);
						
				$numberOfcheckbox = count($_GET['check']);
				echo $numberOfcheckbox;
				
				$i = 0;
				while($i<$numberOfcheckbox){
					
					$check = mysqli_real_escape_string($con, $_GET['check'][$i]);
					$quantity = mysqli_real_escape_string($con, $_GET['quantity'][$i]);
					$price = mysqli_real_escape_string($con, $_GET['price'][$i]);					
					$sql = "INSERT INTO `sales_product` (`sales_id`, `product_id`, `Price`, `quantity`) VALUES ('$sale', '$check', '$price', '$quantity');";
					mysqli_query($con, $sql);
				$i++;
				}
				
				header("Location: salesview.php?id=$sales&no=$customer_no");
				
			}