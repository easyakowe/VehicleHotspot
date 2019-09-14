<?php
	include "db.php";

	session_start();

	if (isset($_POST['send'])) {

		$username = $_POST['userName'];
		$useremail = $_POST['userEmail'];
		$usermessage = $_POST['userMsg'];

		$sql = "INSERT INTO contact(username, useremail, usermessage) VALUES ('$username', '$useremail', '$usermessage')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo '<script>alert("Message sent successfully");</script>';
		}else{
			echo '<script>alert("Message not sent");</script>';
		}
		
	}else{
		echo '<script>alert("Error");</script>';
	}

?>