<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	
   <form method="POST" action="password_process.php">
      <div>
         <label style="color:blue;">Old Password</label>
         <input type="password" name="old_password" placeholder="Old Password . . . . .">
      </div>
      <div>
         <label style="color:blue;">New Password</label>
         <input type="password" name="new_password" placeholder="New Password . . . . .">
      </div>
      <div>
         <label style="color:blue;">Re-Type New Password</label>
         <input type="password" name="confirm_password" placeholder="Re-Type New Password . . . . .">
      </div>
      <button type="submit" name="save">Submit</button>
	</div>
	</form>

</body>
</html>