<?php 

session_start();



include ("includes/db.php");
include ("functions/functions.php");
?>

<html>
<head>
	<title>IMARISHA GYM | Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>
	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="main_wrapper">
		
		<!-- Header Start -->
		
			<div id="headline_content">
						<h1 style="color: #1767d5; text-align:center;"><center>IMARISHA GYM</center></h1><!--<a href="index.php"><img src="images/logo2.ppg" sizes="120"></a>-->
		</div>
			<!--<a href="index.php"><img src="images/logo.jpg"></a>-->
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
		<div id="navbar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Trainee</a></li>
				<li><a href="index.php">Trainer</a></li>
				<li><a href="index.php">Contact Us</a></li>
			</ul>

			<div id="login-btn-signup">
					<li><a href="logout.php">Logout</a></li>
			</div>
		</div>
		<!-- NavBar End -->
		
		<!-- Content Start -->
		<div class="content_wrapper">
			<div id="left_sidebar">
				<div id="sidebar_title">Days</div>
				<ul id="days">
					<?php  
						getDays();
					?>
				</ul>

				<div id="sidebar_title">Exercises</div>
				<ul id="days">
					<?php 
						getExercise();
					?>
				</ul>
			</div>
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: yellow; text-align:center;"><center>No pain no gain</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-image: url(images/bg2.jpg)">
						<?php
							get_All_Exercises();
							get_Day_Exercises();
							get_Exer_Exercises();
						?>
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2020 all rights reserved | Developed By: <a href="https://www.facebook.com/baashna514">Irene Njeri</a></h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>