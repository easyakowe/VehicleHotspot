<?php
	include "db.php";

	session_start();

	if (isset($_POST['register'])) {

		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$email = $_POST['email'];
		$sex = $_POST['sex'];
		$city = $_POST['city'];
		$u_name = $_POST['u_name'];
		$p_word = $_POST['p_word'];	

		//Error handlers
		
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo '<script>alert("Invalid email!");</script>';
				exit();
				}else{
					$sql = "SELECT * FROM users WHERE u_name='$u_name'";
					$result1 = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result1);

					if ($resultCheck > 0) {
						echo '<script>alert("the username is already taken!");</script>';
						echo '<script>window.Location.href("signupForm.php");</script>';
				exit();
					}else{
					//hashing the password
					$hashedpwd = password_hash($p_word, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users(f_name, l_name, email, sex, city, u_name, p_word) VALUES ('$f_name', '$l_name', '$email', '$sex', '$city', '$u_name', '$hashedpwd')";
					$result = mysqli_query($conn, $sql);

					if ($result) {
						$_SESSION['image'] = $row['image'];
						$_SESSION['u_id'] = $row['user_ID'];
						$_SESSION['u_first'] = $row['user_first'] = "$f_name";
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'] = "$email";
						$_SESSION['u_name'] = $row['user_name'] = "$u_name";
						
					echo '<script>alert("Registration Successful")</script>';	
					header("Location: index.php");
					}

					}
				}
			} else{
				echo '<script>alert("Unable to register");</script>';
				exit();
			}


 ?>
<!-- 
 <script>
 	window.Location.href="signupForm.php";
 </script> -->