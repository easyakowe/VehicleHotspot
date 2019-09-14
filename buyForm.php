<?php
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Vehicle Hotspot | Services :: Purchase</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
</head>
<body>
<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.php"><img src="images/carlogo1.png" alt=""></a>
		 </div>
		 <div class="cart">
			<ul class="ph-no">
				<li class="item  first_item">
					<div class="item_html">
						<span class="text1">Order delivery:</span>
						<span class="text2">+234 9026669396</span>
					 </div>
				</li>
			</ul>
			<div id="reg-login" class="authentication" style="">
                <a href="signupForm.php" style="">Register</a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="loginForm.php" style="">Login</a>

                <style type="text/css">

                	.authentication {
                		text-align: right;
                		font-weight: bold;
                		background-color: none;
                	}
                	.authentication a{        		
                		color: #ffffff;
                		font-weight: normal;
                		font-size: 19px;
                	}
                </style>
            </div>
            <!-- Logout block -->
      <div style="display: none; color:#ffcc00;" class="logout">
        <a style="color: yellow;" href="logout.php"><?php echo "Hi, "; echo $_SESSION['u_name'];?></a>
        <br>
      	<a style="font-size: 16px;" href="#">Logout</a>

      	<style type="text/css">
      		.logout {
      			text-align: right;
                font-weight: bold;
      		}
      		.logout a {
      			color: #ffffff;
      			font-weight: normal;
                font-size: 18px;
                text-align: right;
      		}
      	</style>
      </div> 
<!-- //Logout block -->
		    <div class="menu-main">
			   <ul class="dc_css3_menu">
					 <li><a href="index.php">Home</a></li>
					 <li><a href="about.php">About</a></li>
					 <li class="active"><a href="services.php">Purchase</a></li>
					 <li><a href="contact.php">Tips</a></li>
		     	</ul>
			 <div class="clear"></div>
			</div>				
		</div>	
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="main-box">
			<div class="filter-wrapper ">
				<div class="category">
					<strong>Categories: </strong>
					<ul id="filters" class="filter nav nav-pills">
						
						<li><a href="services.php" data-count="1" data-filter=".services-category">Show all</a></li>						
						<li><a href="cars.php" data-count="4" data-filter=".services-category-1">Cars</a></li>
						<li><a href="suvs.php" data-count="4" data-filter=".services-category-1">SUVs</a></li>
						<li><a href="trucks.php" data-count="8" data-filter=".services-category-2">Trucks</a></li>
						<li><a href="buses.php" data-count="5" data-filter=".services-category-3">Buses</a></li>
						<li><a href="motorcycles.php" data-count="5" data-filter=".services-category-4">Motorcycles</a></li>
						<li class="active"><a href="buyForm.php" data-count="5" data-filter=".services-category-4">Buy now</a></li>	
					</ul>
					<div class="clear"></div>
				</div>
			</div>


<!-- The check transaction area -->
<div class="purchase-area">
	<form action="buyForm.php" method="POST">
		<p>
		<label>Enter transaction ID</label>
		<input type="text" name="t_id">
		</p>
		<p>
			<button name="view">View Transaction</button>

			<!-- <button name="delete">Delete</button> -->
		</p>
	</form>
</div>
<br>
<br>

<div class="leave-comment"><a href="#" name="comment">Your Transactions</div>
				<div class="purchase-area">
					<div style="overflow-x: auto;">
					<table class="purchase-table">
						<thead>
							<tr>
								<th>Transaction_ID</th>
								<th>Vehicle type</th>
								<th>Manufacturer</th>
								<th>Vehicle name</th>
								<th>Model</th>
								<th>Quantity</th>
								<th>Delivery Address</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include "db.php";

							if (isset($_POST['view'])) {

								$t_id = $_POST['t_id'];

								$sql2 = "SELECT * FROM purchase WHERE tran_id = '$t_id'";
								$result2 = mysqli_query($conn, $sql2);
							 	while($row = mysqli_fetch_array($result2))
							 {	
							  ?>
							 <tr>
							 	<td><?php echo $row['transaction_ID']; ?></td>
							 	<td><?php echo $row['vehicletype']; ?></td>
							 	<td><?php echo $row['manufacturer']; ?></td>
							 	<td><?php echo $row['vehiclename']; ?></td>
							 	<td><?php echo $row['model']; ?></td>
							 	<td><?php echo $row['quantity']; ?></td>
							 	<td><?php echo $row['delivery']; ?></td>
							 	<td><?php echo $row['price']; ?></td>
							 </tr>
							 <?php
							 }
							 }
							 ?>
							
						</tbody>
							<?php
								if (isset($_POST['delete'])) {
									
									$t_id = $_POST['t_id'];

									$sql3 = "DELETE FROM purchase WHERE tran_id = '$t_id'";
									$result3 = mysqli_query($conn, $sql3);

									if ($result3) {
										echo '<script>alert("Deleted successfully");</script>';
									}else{
										echo '<script>alert("Delete failed");</script>';
									}
								
								}
							?>

					</table>
					</div>
				</div>
<!-- //The check transaction area -->


<!-- The purchase area -->

<br>
<br>
<br>			<div class="leave-comment"><a href="#" name="comment">Buy Vehicle</a></div>
				<div class="purchase-area">
					<form action="buyForm.php" method="POST">
						<p>
							<label>Your Name</label>
							<input type="text" name="myname">
						</p>
						<p>
							<label>Type</label>
							<select name="type">
								<option>...</option>
								<option>Car</option>
								<option>SUV</option>
								<option>Truck</option>
								<option>Bus</option>
								<option>Motorcycle</option>

							</select>
						</p>
						<p>
							<label>Vehicle Manufacturer</label>
							<select name="manufacturer">
								<option>...</option>
								<option>Ford</option>
								<option>Ashok leyland</option>
								<option>Toyota</option>
								<option>Nissan</option>
								<option>Honda</option>
								<option>Mitsubuishi</option>
								<option>Jaguar</option>
								<option>Mazda</option>
								<option>Audi</option>
								<option>BMW</option>
								<option>Volkswagen</option>
								<option>Chevrolet</option>
								<option>Kawasaki</option>
								<option>Dodge</option>
								<option>Rover</option>
								<option>Mercedes Benz</option>
								<option>Ducati</option>

							</select>
						</p>
						<p>
							<label>Vehicle Name</label>
							<input type="text" name="vehiclename">
						</p>
						<p>
							<label>Production Year</label>
							<select name="model">
								<option>...</option>
								<option>2017</option>
								<option>2016</option>
								<option>2015</option>
							</select>
						</p>
						<p>
							<label>Delivery Address</label>
							<textarea type="text" name="delivery"></textarea>
						</p>
						<p>
							<label>Quantity</label>
							<input type="text" name="quantity">
						</p>
						<p>
						<button type="submit" name="purchase">Purchase vehicle</button>
						</p>
					</form>
				</div>
<?php
	include "db.php";

	if (isset($_POST['purchase'])) {

		
		$myname = $_POST['myname'];
		$vehicletype = $_POST['type'];
		$manufacturer = $_POST['manufacturer'];
		$vehiclename = $_POST['vehiclename'];
		$model = $_POST['model'];
		$delivery = $_POST['delivery'];
		$quantity = $_POST['quantity'];
		$tran_ID1 = substr($_POST['manufacturer'], 0, 3);
		$tran_ID2 = substr($_POST['vehiclename'], 1, 2);
		$transaction_id = $tran_ID1 + $tran_ID2;


		$sql = "INSERT INTO purchase(tran_id, myname, vehicletype, manufacturer, vehiclename, model, delivery, quantity) VALUES ('$transaction_id','$myname', '$vehicletype', '$manufacturer', '$vehiclename', '$model', '$delivery', '$quantity')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo '<script>alert("Purchase Success");</script>';
		}else{
			echo '<script>alert("Purchase failed");</script>';
		}
	  }
	
?>


<!-- The view transaction area -->

				
<!-- //The purchase area -->

<style type="text/css">
								.purchase-area select {
									width: 600px;
									padding: 7px 15px;
									color: #222;
									font-size: 13px;
									border: none;
									background: #F0F0F0;
									outline: none;
									display: block;
								}
								.purchase-area button {
									padding: 8px 15px;
									color: #667;
									background: #F1F1F1;
									float: left;
									border: 1px solid #BBB;
									
									box-shadow: 0 0 6px #999;
									
									cursor: pointer;
									
								}
								.purchase-area {
									margin-top: 50px;
									color:#333;
									text-align: center;
								}
								.purchase-area p {
									position: relative;
									padding:0px 0 10px;
								}
								.purchase-area label {
									display: block;
									font-size: 13px;
									padding: 5px 0;
									text-align: left;
								}
								.purchase-area span {
									color: #A60000;
									position: absolute;
									left: 4px;
									top: 30px;
								}
								.purchase-area input[type="text"], textarea {
									padding: 7px 15px;
									width: 47%;
									color: #222;
									font-size: 13px;
									border: none;
									background: #F0F0F0;
									outline: none;
									display: block;
								}



								table {
									border-collapse: collapse;
									width: 100%;
								}



								
								th {
									height: 20px;
									background-color: #4caf50;
									color: white;
								}
								th, td {
									padding: 10px;
									text-align: center;
									border-bottom: 1px solid #ddd;
								}
								table th, td {
									
								}
								tr:nth-child(even) {
									background-color: #f2f2f2;
								}
							</style>


			</div>
		</div>
</div>




<div class="footer">
	<div class="wrap">
	   <div class="footer-top">
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
				<h3>Latest Tweets</h3>
				<p><label>@Lorem ipsum</label>dolor sit amet, consectetur adipisicing elit.</p>
				<span>10 minutes ago</span>
				<p><label>@consectetur</label>dolor sit amet, consectetur adipisicing elit.</p>
				<span>15 minutes ago</span>
			</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid center-grid">
				<h3>Recent posts</h3>
				<ul>
					<li><a href="#">eiusmod temporinc</a></li>
					<li><a href="#">adipisicing elit, sed</a></li>
					<li><a href="#">mod tempor incididunt</a></li>
					<li><a href="#">dipisicing elit, sed do</a></li>
					<li><a href="#">eiusmod temporinc</a></li>
				</ul>
			</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>About your Company Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
						     	  <li>Terms &amp; conditions Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
						     </ul>
						</div>
				   </div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="call_info">
						<p class="txt_3">Call us toll free:</p>
						<p class="txt_4">1 800 234 23456</p>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+234 9026669396</p>
						<span>support(at)vehicleHotspot.com</span>
					</div>
				</div>
				<div class="clear"></div>
		</div>
	</div>
</div>		

</body>
</html>

    	
    	
            