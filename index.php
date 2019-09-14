
<!DOCTYPE HTML>
<html>
<head>
<title>Vehicle Hotspot | Home :: Welcome</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
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
						<span class="text2">+800-0005-5289</span>
					 </div>
				</li>
			</ul>

			<div id="reg-login" class="authentication" style="">
                <a href="signupForm.php" style="">Register</a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="loginForm.php" style="">Login</a>

                <style type="text/css">

                	.authentication {
                		text-align: right;
                		font-weight: bold;
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
                background-color: none;
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
					 <li class="active"><a href="index.php">Home</a></li>
					 <li><a href="about.php">About</a></li>
					 <li><a href="services.php">Purchase</a></li>
					 <li><a href="contact.php">Tips</a></li>
		     	</ul>
			 <div class="clear"></div>
			</div>				
		</div>	
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>





<div class="main">
	<div class="content-box1">
		<div class="wrap">
			<div class="banner2">
		                
	      			</div>
			</div>
	</div>
</div>

<div class="main-content">
	<div class="wrap">
		<div class="main-box">
		   <div class="box_wrapper"><h1>Latest Products</h1></div>
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/x6index.jpg" alt=""/>
					<div class="grid_desc">

						<?php 
						include "db.php";

						$sql = "SELECT * FROM vehicledetails WHERE vehicle_id = '5'";
						$result = mysqli_query($conn, $sql);
						 
						if ($row = mysqli_fetch_array($result)) {
							
						
						?>


						<p class="title"><?php echo $row['name']; ?></p>
						<p class="title1"><?php echo $row['description']; ?></p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;<?php echo $row['price']; ?></span>
							<span class="actual">&#8358;12M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>

				     <?php
					}
					?>

				</div>
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/pic21.jpg" alt=""/>
					<div class="grid_desc">
						

						<?php 
						include "db.php";

						$sql = "SELECT * FROM vehicledetails WHERE vehicle_id = '2'";
						$result = mysqli_query($conn, $sql);
						 
						if ($row = mysqli_fetch_array($result)) {
							
						
						?>


						<p class="title"><?php echo $row['name']; ?></p>
						<p class="title1"><?php echo $row['description']; ?></p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;<?php echo $row['price']; ?></span>
							<span class="actual">&#8358;12M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>

				     <?php
					}
					?>


				</div>
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/pic2.jpg" alt=""/>
					<div class="grid_desc">
						<p class="title">Toyota Solara 2017</p>
						<p class="title1"></p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;110 Million</span>
							<span class="actual">&#8358;88M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/pic3.jpg" alt=""/>
					<div class="grid_desc">
						<p class="title">Suberu 2017 Sedan</p>
						<p class="title1"></p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;1.2 Million</span>
							<span class="actual">900K</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/pic5.jpg" alt=""/>
					<div class="grid_desc">
						<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
						<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;150 Million</span>
							<span class="actual">&#8358;100M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/pic4.jpg" alt=""/>
					<div class="grid_desc">
						<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
						<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;160 Million</span>
							<span class="actual">&#8358;110M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>

				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/pic1.jpg" alt=""/>
					<div class="grid_desc">
						<p class="title">Chevrolet Camaro 2017</p>
						<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;80 Million</span>
							<span class="actual">&#8358;20M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				
				 
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/pic7.jpg" alt=""/>
					<div class="grid_desc">
						<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
						<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
						<div class="price1" style="height: 19px;">
							<span class="reducedfrom">&#8358;190 Million</span>
							<span class="actual">&#8358;55M</span>
						</div>
					</div>
					<div class="Details">
				     <a href="single.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				<div class="clear"></div>
			</div>
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

    	
    	
            