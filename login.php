
<?php
	session_start();

	include "db.php";

	if (isset($_POST['login'])) {

		$u_name = $_POST['u_name'];
		$p_word = $_POST['p_word'];


		//Error handlers
		if (empty($u_name) || empty($p_word)) {
			header("Location: ../error.php?login=empty");
			exit();
		}else{

			$sql = "SELECT * FROM users WHERE u_name = '$u_name'"; 
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				echo '<script>alert("Invalid Username or password");</script>';
				echo '<script>windows.location="loginForm.php";</script>';
			exit();
			}else{
				if ($row = mysqli_fetch_assoc($result)) {
					//De-hashing the password
					$hashedPwdCheck = password_verify($p_word, $row['p_word']);
					if ($hashedPwdCheck == false) {
					echo '<script>alert("Invalid Username or password");</script>';
					exit();
					}elseif ($hashedPwdCheck == true) {
						//Log in the user here
						$_SESSION['u_id'] = $row['user_ID'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_name'] = $row['user_name'] = "$u_name";

						echo '<script>alert("Welcome!")</script>';					
						header("Location: index.php");

					}
				}
			}
		}
		
	}else{
		header("Location: loginForm.php");
		exit();
}

?> 

