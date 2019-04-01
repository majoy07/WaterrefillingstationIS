<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM employee WHERE emp_num=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: employees.php"); 
?>