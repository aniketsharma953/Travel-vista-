<?php

if(isset($_POST['save']))
{
	
$email=$_POST['email'];

$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$servername="localhost";
$username="root";
$password="";
$dbname="travelvista";
$conn=new mysqli($servername,$username,$password,$dbname);



if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}


$sql="insert into signup(email,password,confirmpassword)values('$email','$password','$confirmpassword')";
if($conn->query($sql)==True)
{
	?><h3 class="msg"><?php echo "Record inserted successfully";
	
	?></h3><?php
	header("Location: login.php");
	
}
else
{
	?><h3 class="msg"><?php echo "Error".$sql."<br/>".$conn->error;?></h3><?php
}
$conn->close();
}

?>





<html>
<head>
<title>form</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" type="text/css" href="bootstrap.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
a#vis {
  color: white;
}

a#vis:hover {
  color: powderblue;
}
.scrolled {
  background-color: rgba(37, 125, 199, 1) !important;
}
</style>
<body style="background-color:#257DC7">
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background:rgba(0,0,0,0);">
<div class="container">
<a href="#" class="navbar-brand"><img src="lg.png">TRAVEL VISTA</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarid">
<ul class="navbar-nav text-center ml-auto">
<li class="nav-items">
<a href="index.html" class="nav-link" id="vis">Home</a>
</li>
<li class="nav-items">
<a href="about.html" class="nav-link" id="vis">About Us</a>
</li>
<li class="nav-items">
<a href="servecies.html" class="nav-link" id="vis">Services</a>
</li>


<li class="nav-items">
<a href="login.php" class="nav-link" id="vis">login</a>
</li>
<li class="nav-items">
<a href="signup.php" class="nav-link" id="vis">signup</a>
</li>
<li class="nav-items">
<a href="contact.php" class="nav-link" id="vis">Mail Us</a>
</li>
</ul>
</div>
</div>
</nav><br><br><br><br>
<div class="container">
<center>
<div class="col-12">
<div style="height:55%; width:280px; border-radius: 5px; background-color: white; padding:20px; margin-top:20px;">
<h2 style="text-align:center;">Signup</h2>
<form method="POST">
    <input type="text" name="email" placeholder="Enter your email" style="width: 100%; padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
    <input type="text" id="password" name="password" placeholder="Create a password" style="width: 100%; padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
	<input type="text" id="password" name="confirmpassword" placeholder="Confirm your password" style=" width: 100%; padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
    <label style="color: #666; margin-bottom: 8px;">
    <input type="checkbox" name="remember" style="margin-right: 5px;">Remember Me
    </label>
    <input type="submit" value="Submit" name="save" style=" width: 100%; background-color:#257DC7 ; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px;">
  </form>
 <small>Alerady have an acount?<a href="Login.html" style=" text-decoration:none; color:#257DC7;">Login</a></small>
  </div>
  </div>
  </center>
  </div>
<footer class="footer" style="background-color:#257DC7; margin-top:40px">
<div class="container-fluid" style="padding-top:40px;">
<center>
<div class="row">
<div class="col-xl-3">
<div style="width:250px height:350px">
<img width="200px" height="200px" src="logo.png">
</div>
</div>
<div class="col-xl-2">
<div style="width:250px height:350px">
<h4 style="color:white; text-align:left;">Get Started</h4>
<ul style="list-style-type:none; text-align:left;">
<li><a style="color:white; text-decoration:none; hover=color:black;" href="navcol.html">Home</a></li>
<li><a style="color:white; text-decoration:none;" href="formdiv.html">Sing Up</a></li>
<li><a style="color:white; text-decoration:none;" href="#download">Download</a></li>
</ul>
</div>
</div>
<div class="col-xl-2">
<div style="width:250px height:350px">
<h4 style="color:white; text-align:left;">About Us</h4>
<ul style="list-style-type:none; text-align:left;">
<li><a style="color:white; text-decoration:none;"href="about.html">Company Information</a></li>
<li><a style="color:white; text-decoration:none;"href="contact.html">Contact Us</a></li>
<li><a style="color:white; text-decoration:none;"href="#reviews">Reviews</a></li>
</ul>
</div>
</div>
<div class="col-xl-2">
<div style="width:250px height:350px">
<h4 style="color:white; text-align:left;">Support </h4>
<ul style="list-style-type:none; text-align:left;">
<li><a style="color:white; text-decoration:none;"href="#home">FAQ</a></li>
<li><a style="color:white; text-decoration:none;"href="contact.html">Help Desk</a></li>
<li><a style="color:white; text-decoration:none;"href="#download">Fourms</a></li>
</ul>
</div>
</div>
<div class="col-xl-3">
<div style="width:250px height:350px">
<a href="#"><img width="30px" height="30px" src="twi.png"></a>
<a href="#"><img width="30px" height="30px" src="fc.png"></a>
<a href="#"><img width="30px" height="30px" src="gp.png"></a><br><br>
<a href="contact.html"button style="border:none; background:white; border-radius:18px; padding:10px; margin-left:px;">Contact Us</button></a>
</div>
</div>
</div>
<div class="col-12">
<small style="color:white;"><img width="20px" height="20px" src="co.png">2023 copyrights All right reserved by aniket sharma</small>
</div>
</center>
</div>
</footer>
<!-- Your rest of the content here -->
<script>
$(document).ready(function() {
  // Function to check if the navbar needs to be scrolled
  function checkScroll() {
    var scrollPos = $(document).scrollTop();

    if (scrollPos > 50) {
      // If the user has scrolled down more than 50 pixels, add the "scrolled" class to the navbar
      $('.navbar').addClass('scrolled');
    } else {
      // If the user has scrolled back to the top, remove the "scrolled" class from the navbar
      $('.navbar').removeClass('scrolled');
    }
  }

  // Call the checkScroll function on page load
  checkScroll();

  // Call the checkScroll function every time the user scrolls
  $(window).on('scroll', function() {
    checkScroll();
  });
});
</script>
</body>
</html>

