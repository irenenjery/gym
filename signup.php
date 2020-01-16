<?php 

session_start();
include ("includes/db.php");
include ("functions/functions.php");

?>
<html>
<head>
	<title>IMARISHA GYM | Signup</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>
	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="header_wrapper">
			<!--<a href="index.php"><img src="images/logo.jpg"></a>
			<!-- <img src="images/add2card.jpg" style="float: right"> -->
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
							<h2 style="color:darkgrey; text-align: center;">Signup for free</h2>
							<form action="signup.php" method="post">
								 <input type="text" id="name" name="user_name" placeholder="Prefered username..">
								 <input type="email" id="email" name="user_email" placeholder="Your email..">
								 <input type="password" id="password" name="user_pass" placeholder="Your password..">
								
								 <input type="text" id="contact" name="user_contact" placeholder="Your contact number..">
								 <input type="submit" value="Submit" name="user_signup">
								  Already a member? <a href="login.php">Log in</a>
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
      header('location: index.php');
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End


//Sign Up Script Start
  if (isset($_POST['user_signup']))
  {
    $user_name= ($_POST['user_name']);
    $user_email= ($_POST['user_email']);
    $user_password= ($_POST['user_pass']);
    $user_contact= ($_POST['user_contact']);
    

    //Validations
    if($user_name==''){
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($user_email=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($user_password=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
   
    elseif ($user_contact=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    else{
      $insert_user="INSERT INTO users(user_name, user_email,user_pass,user_contact) VALUES('$user_name','$user_email','$user_password','$user_contact')";
      $run_user=mysqli_query($con, $insert_user);
      if ($run_user) {
      	$_SESSION['user_email']=$user_email; //create session variable
      header('location: login.php');
        echo "<script>alert('Registered Seccussfully..')</script>";
      }
    }
  }  //Sign Up Script End


?>


