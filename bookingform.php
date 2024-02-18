<html>
<head>
<title>Contact</title>
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
<a href="afterindex.html" class="nav-link" id="vis">Home</a>
</li>
<li class="nav-items">
<a href="afterabout.html" class="nav-link" id="vis">About Us</a>
</li>
<li class="nav-items">
<a href="afterservecies.html" class="nav-link" id="vis">Services</a>
</li>
<li class="nav-items">
<a href="bookingform.php" class="nav-link" id="vis">Booking</a>
</li>

<li class="nav-items">
<a href="index.html" class="nav-link" id="vis">Logout</a>
</li>

</ul>
</div>
</div>
</nav><br><br><br>
<div class="container-fluid">
  <div class="col-xl-12">
    <div style="height: 700px; width: 100%; max-width: 500px; border-radius: 5px; background-color: #257DC7; margin: 6% auto 0; padding: 20px;">
      <h1 style="text-align: center; color: white;">Book Your Travel</h1>

      <form>
        <label for="fname" style="color: white;">First Name</label>
        <input type="text" id="fname" name="fname" style="width: 100%; padding: 12px 20px; background-color: #257DC7; margin: 8px 0; box-sizing: border-box; border: none; border-bottom: 2px solid white;" required>

        <label for="lname" style="color: white;">Last Name</label>
        <input type="text" id="lname" name="lname" style="width: 100%; padding: 12px 20px; background-color: #257DC7; margin: 8px 0; box-sizing: border-box; border: none; border-bottom: 2px solid white;" required>

        <label for="destination" style="color: white;">Destination</label>
        <select id="destination" name="destination" style="width: 100%; padding: 12px 20px; background-color: #257DC7; margin: 8px 0; color:white; box-sizing: border-box; border: none; border-bottom: 2px solid white;" required>
          <option value="" disabled selected >Select a destination</option>
          <option value="paris">Amer Fort</option>
          <option value="newyork">Hawa Mahal</option>
          <option value="tokyo"> City Palace</option>
        </select>

        <label for="checkin" style="color: white;">Check-in Date</label>
        <input type="date" style="width: 100%; padding: 12px 20px; background-color: #257DC7; color:white; margin: 8px 0; box-sizing: border-box; border: none; border-bottom: 2px solid white;" required>

        <label for="checkout" style="color: white;">Check-out Date</label>
        <input type="date" style="width: 100%; padding: 12px 20px; background-color: #257DC7; color:white; margin: 8px 0; box-sizing: border-box; border: none; border-bottom: 2px solid white;" required>

        

        <center>
          <input type="submit" value="Book Now" style="width: 300px; background-color: white; color: #257DC7; padding: 14px 20px; margin: 20px 0; border: none; border-radius: 10px;">
        </center>
      </form>
    </div>
  </div>
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
<li><a style="color:white; text-decoration:none;" href="servecies.html">Gallery</a></li>
</ul>
</div>
</div>
<div class="col-xl-2">
<div style="width:250px height:350px">
<h4 style="color:white; text-align:left;">About Us</h4>
<ul style="list-style-type:none; text-align:left;">
<li><a style="color:white; text-decoration:none;"href="#company information">Company Information</a></li>
<li><a style="color:white; text-decoration:none;"href="#contact Us">Contact Us</a></li>
<li><a style="color:white; text-decoration:none;"href="#reviews">Reviews</a></li>
</ul>
</div>
</div>
<div class="col-xl-2">
<div style="width:250px height:350px">
<h4 style="color:white; text-align:left;">Support </h4>
<ul style="list-style-type:none; text-align:left;">
<li><a style="color:white; text-decoration:none;"href="#home">FAQ</a></li>
<li><a style="color:white; text-decoration:none;"href="#sinup">Help Desk</a></li>
<li><a style="color:white; text-decoration:none;"href="#download">Fourms</a></li>
</ul>
</div>
</div>
<div class="col-xl-3">
<div style="width:250px height:350px">
<a href="#"><img width="30px" height="30px" src="twi.png"></a>
<a href="#"><img width="30px" height="30px" src="fc.png"></a>
<a href="#"><img width="30px" height="30px" src="gp.png"></a><br><br>
<h6 style="color:white;">contact:<br>+91 123 456 7890</h6>
<button style="border:none; background:white; border-radius:18px; padding:10px; margin-left:px;">Contact Us</button>
<h6 style="color:white;">Address:<br>126-a street 120 foot rd.opp methis collection</h6>
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
