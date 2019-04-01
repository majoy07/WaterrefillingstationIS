<?php
require('db.php');
$id=$_GET['id'];
$query = "DELETE FROM sales WHERE sales_id = $id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: salesview.php"); 
?>