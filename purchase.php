<?php
	session_start();

	include "db.php";

	if (isset($_POST['purchase'])) {

		if (!$_SESSION['u_name'] == "admin") {
			echo '<script>alert("Please register or login");</script>';
		}else{
		
		$vehicletype = $_POST['type'];
		$manufacturer = $_POST['manufacturer'];
		$vehiclename = $_POST['vehiclename'];
		$model = $_POST['model'];
		$delivery = $_POST['delivery'];
		$quantity = $_POST['quantity'];

		$sql = "INSERT INTO purchase(vehicletype, manufacturer, vehiclename, model, delivery, quantity) VALUES ('$vehicletype', '$manufacturer', '$vehiclename', 'model', '$delivery', '$quantity')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo '<script>alert("Purchase success");</script>';
		}else{
			echo '<script>alert("Purchase failed");</script>';
		}

	  }
	}
?>