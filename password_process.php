<?php

	require('db.php');
	include("auth.php");

						$oldpassword = md5($_POST['oldpassword']);
						$newpassword = md5($_POST['newpassword']);
						$confirmnewpassword = md5($_POST['confirmnewpassword']);

						

						$sql = "SELECT user_pwd FROM users WHERE user_id = $user_id ;"; 

						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);
						$row = mysqli_fetch_assoc($result);
								$oldpassworddb = $row["user_pwd"];
								echo $oldpassworddb."<br>";
						
								echo $oldpassword;
								if ($oldpassword == $oldpassworddb)
								{
									
									if ($newpassword == $confirmnewpassword) {
										# code...
										$query = "UPDATE `users` SET `user_pwd` = '$newpassword' WHERE `users`.`user_id` = $user_id;"; 
										$result = mysqli_query($conn,$query) ;

										session_start();
										session_unset();
										session_destroy();
										header("Location: ../index.php");
										exit();
									}
									else{
										die ("new password dont match");
									}

								}
								else {
									die ("password dont match");
								}

							
						

							?>					