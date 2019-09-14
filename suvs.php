
<!DOCTYPE HTML>
<html>
<head>
<title>Vehicle Hotspot | Home :: Services</title>
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
						<li class="active"><a href="suvs.php" data-count="4" data-filter=".services-category-1">SUVs</a></li>
						<li><a href="trucks.php" data-count="8" data-filter=".services-category-2">Trucks</a></li>
						<li><a href="buses.php" data-count="5" data-filter=".services-category-3">Buses</a></li>
						<li><a href="motorcycles.php" data-count="5" data-filter=".services-category-4">Motorcycles</a></li>
						<li><a href="buyForm.php" data-count="5" data-filter=".services-category-4">Buy now</a></li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>


			<!-- The SUVs category -->
			<div>
			<p style="font-size: 19px; font-weight: bold;">SUVs</p>
			</div>
			<br>
			<div id="cars">
				<div class="gallery-grids">
		          		<div class="gallery-grid">
							<a href="images/audiSuv.jpg"><img src="images/audiSuv.jpg" alt=""></a>
							<h4>Audi 2017 Q7</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
						
						<div class="gallery-grid grid2">
							<a href="images/range.jpg"><img src="images/range.jpg" alt=""></a>
							<h4>Range Rover Sport 2017</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
						<div class="gallery-grid">
							<a href="images/gwagon.jpg"><img src="images/gwagon.jpg" alt=""></a>
							<h4>Mercedes G-Wagon 2017</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
						<div class="clear"> </div>
					</div>
					 <div class="gallery-grids">
						<div class="gallery-grid">
							<a href="images/lexus.jpg"><img src="images/lexus.jpg" alt=""></a>
							<h4>2017 Lexus RX350</h4>
							<h6>Dealer:<span> BMW </span></h6>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
						<div class="gallery-grid grid2">
							<a href="images/bmwx6.jpg"><img src="images/bmwx6.jpg" alt=""></a>
							<h4>2017 BMW X6</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
						<div class="gallery-grid">
							<a href="images/edge.jpg"><img src="images/edge.jpg" alt=""></a>
							<h4>Ford Edge 2017</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</p>
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!-- //The SUVs category -->




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

    	
    	
            