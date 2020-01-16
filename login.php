<?php 

session_start();
include ("includes/db.php");
include ("functions/functions.php");

?>
<html>
<head>
	<title>IMARISHA GYM | Login</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>
	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		
			<div id="headline_content">
						<h1 style="color: #1767d5; text-align:center;"><center>IMARISHA GYM</center></h1><!--<a href="index.php"><img src="images/logo2.ppg" sizes="120"></a>-->
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
		<div id="navbar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Trainee</a></li>
				<li><a href="index.php">Trainer</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>

			<div id="login-btn-signup">
					<!-- <li><a href="login.php">Login</a></li> -->
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
						<h1 style="color: #1767d5; text-align:center;"><center>No pain no gain</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-image: url(images/bg1.jpg)">
						<div id="frm">
								<h2 style="color:darkgrey; text-align: center;">Login</h2>
								<form action="login.php" method="post">
								    <label for="fname">Username</label>
								    <input type="email" id="fname" name="user_email" placeholder="Your email..">
								    <label for="lname">Password</label>
								    <input type="password" id="lname" name="user_pass" placeholder="Your password..">
								    <input type="submit" value="Submit" name="user_login">
								    Not yet a member? <a href="signup.php">Sign up</a>
								</form>
						</div>
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

<?php 
	//Login Script Start
  if (isset($_POST['user_login'])){
    $user_email= ($_POST['user_email']);
    $user_password= ($_POST['user_pass']);
    $select_user="SELECT * FROM users WHERE user_email='$user_email' AND user_pass='$user_password'";
    $run_user=mysqli_query($con, $select_user);
    $row_count=mysqli_num_rows($run_user);
    if ($row_count==1) {
      $_SESSION['user_email']=$user_email; //create session variable
      header('location: my_account.php');
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End
?>