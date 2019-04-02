<?php

	require('db.php');
	include("auth.php");
						$username = $_SESSION['username'];
						$old = md5($_POST['old_password']);
						$new = md5($_POST['new_password']);
						$confirm = md5($_POST['confirm_password']);

						

						$sql = "SELECT pass FROM users WHERE username = $username ;"; 

						$result = mysqli_query($con, $sql);
						$resultCheck = mysqli_num_rows($result);
						$row = mysqli_fetch_assoc($result);
								$oldpassword = $row["pass"];
								echo $oldpassword."<br>";
					
								if ($old == $oldpassword)
								{
									echo $old;
									
									if ($new == $confirm) {
										# code...
										$query = "UPDATE `users` SET `pass` = '$new' WHERE `users`.`username` = $username;"; 
										$result = mysqli_query($con,$query) ;

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