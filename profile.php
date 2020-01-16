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
				<li><a href="my_account.php">Back</a></li>
				<!--<li><a href="index.php">Trainer</a></li>-->
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
							<h2 style="color:darkgrey; text-align: center;">Create/Update Profile</h2>
							<form action="profile.php" method="post">
							          
		      		<input type="text" id="name" name="f_name" placeholder="Your First Name..">
		      <input type="text" id="name" name="l_name" placeholder="Your Last Name..">
		      <input type="text" id="height" name="height" placeholder="Your height..">
		       <input type="text" id="bmi" name="bmi" placeholder="Your BMI..">
										 								  
							       <div class="input-group">  <p>
             <label>chronic diseases</label>
             <select id = "myList" name="ailments">		
                           <option value = "one">None</option>
                 <option value = "two">Cancer</option>
               <option value = "three">Diabeties</option>
               <option value = "four">HBP</option>
                <option value = "five">Asthma</option>
                         </select>
                         </p>
                         </div>
                 <div class="input-group">    <p>
             <label>greatest painpoint</label>
             <select id = "myList">
              <option value = "one">None</option>
               <option value = "two">Fat tummy</option>
                 <option value = "three">Overweight</option>
               <option value = "four">Bodybuilding</option>
                <option value = "five">Fat tummy</option>
                                       </select>
          </p>
      </div>
								 
														
<input type="submit" value="Submit" name="user_profile">
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
	
//Sign Up Script Start
  if (isset($_POST['user_profile']))
  {
  	$ailments=$_POST['ailments'];
    $f_name= ($_POST['f_name']);
    $l_name= ($_POST['l_name']);
     $height= ($_POST['height']);
    $bmi= ($_POST['bmi']);
    $chronic_diseases= ($_POST['chronic_diseases']);
    $greatest_painpoint= ($_POST['greatest_painpoint']);
    

    //Validations
    if($f_name==''){
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($l_name=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($height=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($bmi=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($chronic_diseases=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    elseif ($greatest_painpoint=='') {
      echo "<script>alert('Please fill out this field')</script>";
      exit();
    }
    
    else{
      $insert_user="INSERT INTO infor (f_name, l_name,height,bmi,chronic_diseases,greatest_painpoint) VALUES('$f_name','$l_name','$height','$bmi','chronic_diseases','greatest_painpoint')";
      $run_user=mysqli_query($con, $insert_user);
      if ($run_user) {
      	 //create session variable
      header('location: my_account.php');
        echo "<script>alert('Registered Seccussfully..')</script>";
      }
    }
  }  //Sign Up Script End


?>


