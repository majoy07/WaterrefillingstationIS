<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM customer WHERE customer_num=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: customer.php"); 
?>