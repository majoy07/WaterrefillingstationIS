<?php

	require('db.php');
	include("auth.php");
	$status = "";
			if(isset($_POST['save'])){
				
				$customer_no = mysqli_real_escape_string($con, $_POST['customers']);
				$sale = mysqli_real_escape_string($con, $_POST['sale']);
						
				$numberOfcheckbox = count($_POST['check']);
				
				$number = count($_POST['quantity']);
				
				$i = 0;
				$j=0;
				
				while($i<$number){
					
					$quantity = mysqli_real_escape_string($con, $_POST['quantity'][$i]);
					$price = mysqli_real_escape_string($con, $_POST['price'][$i]);			
					
					if(empty($quantity)){
						$i++;
					}else{
						$check = mysqli_real_escape_string($con, $_POST['check'][$j]);
						
						$sql = "INSERT INTO `sales_product` (`sales_id`, `product_id`, `Price`, `quantity`) VALUES ($sale, '$check', $price, $quantity);";
						mysqli_query($con, $sql);
						$i++;
						$j++;
					}
				}
				
				header("Location: salesview.php?id=$sales&no=$customer_no");
				
			}