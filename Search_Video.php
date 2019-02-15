<!DOCTYPE html>
<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";
ob_start();
session_start();
?>
<html>

<head>
<link rel="shortcut icon" href="Pics/2.jpg">
</head>

<title> Search Results </title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <link href="lightbox2-master\lightbox2-master\dist\css\lightbox.css" rel="stylesheet">
  
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}

body{
	background:#ECF0F1;
}

.navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
	  margin-left:-10px;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: orange !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: black !important;
  }
  .nav-tabs li a {
      color: #777;
  }
  .container {
      padding: 80px 120px;
  }
  input, select, textarea{
    color: black;
}

.container {
      padding: 80px 120px;
	  background:#17202A;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 5px 10px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .glyphicon.glyphicon-search {
    font-size: 10px;
	color:white;
	margin-top:2px;
	margin-bottom:6px;
}
.btn1 {
      background-color: #FDFEFE;
      color: black;
      border-radius: 0;
      transition: .2s;
  }
  .btn1:hover {
      background-color: teal;
      color: white;
  }
  footer {
      background-color: #78281F;
      color: #FDFEFE;
      padding: 32px;
	  margin-top:80px;
	  width:1170px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  
  #myCarousel{display:none;}
   #nav{display:none;}
    #bio{display:none;}
	 #content{display:none;}
		#share{display:none;}
		
.modal-open {
  padding-right: 0 !important;
}
html {
  overflow-y: scroll !important;
}
.modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }

.modal {
    bottom: 0;
    position: fixed;
    overflow-y: scroll;
    overflow-x: hidden;
    top: 0;
    width: 100%;
	color: black;
}
</style>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="content" style="margin-left:100px;margin-right:100px;">

<nav class="navbar navbar-default navbar-fixed-top" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Start.php">
	  <img class="img-zoom" style="width:200px; border-radius: 49%; margin-top: -70px; margin-right : 0px; margin-left : 0px; float: left;"
             src="Pics/4.png">
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="User.php">HOME</a></li>
        <li><a href="Coke.php">COKE STUDIO</a></li>
        <li><a href="Nescafe.php">NESCAFE BASEMENT</a></li>
        <li><a href="User_Profile.php" style="color: green !important;background-color: white !important;">
		<?php $user = strtoupper($_SESSION['fname']); echo "<strong>" . $user. "</strong>"; ?>
		</a></li>
        <li><a href="User_Circle.php" name="circle_btn">CIRCLE</a></li>
        <li><a href="User_Album.php">ALBUM</a></li></ul>
      <ul class="nav navbar-nav navbar-right">		
        <li>
		<form id="search" action="Search_Video.php" method="POST">
        <div id="input"><input type="text" name="search_name" style="width: 300px; height:25px; margin-top:10px; margin-right:10px;background:#CD6155;" id="search" placeholder="Enter search terms..." required></div>
		 <div id="label"><input type="submit" style="height:25px; margin-bottom:2px;" value="Search" class="btn1"></div>
    </form><span class="glyphicon glyphicon-search"></span>
		</li>
		</ul>
    </div>
  </div>
  <div class="w3-container w3-padding-0 w3-center">
  <span class="w3-opennav w3-xxlarge w3-right w3-margin-right" style="margin-top:-45px;margin-bottom:8px;" onclick="w3_open()"><i class="fa fa-bars" style="color:red;"></i></span>
</div>
</nav>

<?php
	if(!empty($_SESSION['fname']) && !empty($_SESSION['lname'])){
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	}
	else { }

	if (isset($_POST['circle_btn'])) {
	mysqli_query($con,$sql);
	header("location: User_Circle.php");
}
?>

<script>
$(function(){  // $(document).ready shorthand
  $('#myCarousel').fadeIn(1000);
  $('#nav').fadeIn(1000);
  $('#bio').fadeIn(1000);
  $('#content').fadeIn(1000);
  $('#share').fadeIn(1000);
});
</script>

<script>
var previousScroll = 0;
$(window).scroll(function(event){
   var scroll = $(this).scrollTop();
   if (scroll > previousScroll){
       $('.navbar').fadeOut();
   } else {
      $('.navbar').fadeIn();
   }
   previousScroll = scroll;
});
</script>

<script>
(function(window){

    // get vars
    var searchEl = document.querySelector("#input");
    var labelEl = document.querySelector("#label");

    // register clicks and toggle classes
    labelEl.addEventListener("click",function(){
        if (classie.has(searchEl,"focus")) {
            classie.remove(searchEl,"focus");
            classie.remove(labelEl,"active");
        } else {
            classie.add(searchEl,"focus");
            classie.add(labelEl,"active");
        }
    });

    // register clicks outisde search box, and toggle correct classes
    document.addEventListener("click",function(e){
        var clickedID = e.target.id;
        if (clickedID != "search-terms" && clickedID != "search-label") {
            if (classie.has(searchEl,"focus")) {
                classie.remove(searchEl,"focus");
                classie.remove(labelEl,"active");
            }
        }
    });
}(window));
</script>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<script>
window.onscroll = function (e) {  
 document.getElementById("mySidenav").style.display = "none";
}
</script>

<script>
$( '#upload' ).submit(function( event ) {
  event.preventDefault();
});

$('#lock').click(function($e) {
    $e.preventDefault();
    doSomething();
});

document.getElementById('#lock').addEventListener('click', function (e) {
    e.preventDefault();
    doSomething();
})
</script>

<!-- Sidenav -->
<nav class="w3-sidenav w3-red w3-card-2 w3-animate-right w3-right w3-large" style="display:none;height:auto;margin-left:900px;margin-top:-40px;padding-top:80px;padding:50px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xlarge w3-right w3-display-topright" style="padding:5px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <form method="post" action="Login_User.php">
  <button style="margin-left:65px;" type="submit" name="logout_btn" class="w3-btn w3-padding-16 w3-medium w3-margin-top w3-green"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;<b>Logout</b></a></form>
</nav>

<?php
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
if (isset($_POST['logout_btn'])) {
	mysqli_query($con,$sql);
	$_SESSION['logout_message'] = "You are now Logged Out, Come Back Soon!";
	if(!empty($_SESSION['fname']) && !empty($_SESSION['lname'])){
	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	}
	else { $_SESSION['fname'] = ""; $_SESSION['lname'] = "";}
	header("location: Logout.php");
}
?>

<?php 
if(isset($_GET['id'])) {
$user_id= $_GET['id'];
	
	$query_login = "SELECT * FROM users WHERE id='$user_id'";
		$result_login = $con->query($query_login);
		while($row = $result_login->fetch_assoc()) {
			$lname = $row['lname'];
			$fname = $row['fname'];
			$dp = $row['dp'];
			$user_email = $row['email'];
			$id = $row['id'];
		}
}
?>

<div style="margin-bottom:20px;margin-top:120px;color:white;" class="container text-left">
<div class="php"><h2><center>Search Results</center></h2>
<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";

$count = 0;

if(isset($_POST["search_name"])) {
$search_name = mysql_real_escape_string($_POST["search_name"]);
if (!empty($search_name)) {
	
$query = "SELECT lname,fname FROM users WHERE lname='$search_name' OR fname='$search_name'";
$result = $con->query($query);

if($result->num_rows>0) {
	echo $result->num_rows." Profiles Found for this Name:<br><br>";
	$query_fetch = "SELECT * FROM users WHERE lname='$search_name' OR fname='$search_name'";
	$result_fetch = $con->query($query_fetch);
    while($row = $result_fetch->fetch_assoc()) {
			$check_mail = $row['email'];
			$check_pass = $row['password'];
			$lname = $row['lname'];
			$fname = $row['fname'];
			$talent = $row['talent']."<br>";
			$gender = $row['gender'];
			$date = $row['dob'];
			$country = $row['country'];
			$city = $row['city'];
			$other = $row['other'];
			$bio = $row['bio'];
			$dp = $row['dp'];
		
		echo "<img src=".$row['dp']." class='w3-circle' alt='Person' style='width:70px;height:70px;'/>&nbsp;&nbsp;";
		echo "<a href='Profile_guest.php?id=" .$row['id']. "'>".$row["fname"]."&nbsp;".$row["lname"]."&nbsp;||".$row["country"]."&nbsp;||".$row["city"]."&nbsp;||".$row["talent"]. "</a><br><br>";
		$count = $count+1;
	} 
}
}

}

if(isset($_POST["search_name"])) {
$search_name = mysql_real_escape_string($_POST["search_name"]);
if (!empty($search_name)) {
	
$query = "SELECT talent FROM users WHERE talent='$search_name'";
$result = $con->query($query);

if($result->num_rows>0) {
	echo $result->num_rows." Profile Found for this Talent:<br><br>";
	$query_fetch = "SELECT * FROM users WHERE talent='$search_name'";
	$result_fetch = $con->query($query_fetch);
    while($row = $result_fetch->fetch_assoc()) {
			$check_mail = $row['email'];
			$check_pass = $row['password'];
			$lname = $row['lname'];
			$fname = $row['fname'];
			$talent = $row['talent']."<br>";
			$gender = $row['gender'];
			$date = $row['dob'];
			$country = $row['country'];
			$city = $row['city'];
			$other = $row['other'];
			$bio = $row['bio'];
			$dp = $row['dp'];
		
		echo "<img src=".$row['dp']." class='w3-circle' alt='Person' style='width:70px;height:70px;'/>&nbsp;&nbsp;";
		echo "<a href='Profile_guest.php?id=" .$row['id']. "'>".$row["fname"]."&nbsp;".$row["lname"]."&nbsp;||".$row["country"]."&nbsp;||".$row["city"]."&nbsp;||".$row["talent"]. "</a><br><br>";
		$count = $count+1;
	} 
}
}

}

if(isset($_POST["search_name"])) {
$search_name = mysql_real_escape_string($_POST["search_name"]);
if (!empty($search_name)) {
	
$query = "SELECT email FROM users WHERE email='$search_name'";
$result = $con->query($query);

if($result->num_rows>0) {
	echo $result->num_rows." Profile Found for this Email:<br><br>";
	$query_fetch = "SELECT * FROM users WHERE email='$search_name'";
	$result_fetch = $con->query($query_fetch);
    while($row = $result_fetch->fetch_assoc()) {
			$check_mail = $row['email'];
			$check_pass = $row['password'];
			$lname = $row['lname'];
			$fname = $row['fname'];
			$talent = $row['talent']."<br>";
			$gender = $row['gender'];
			$date = $row['dob'];
			$country = $row['country'];
			$city = $row['city'];
			$other = $row['other'];
			$bio = $row['bio'];
			$dp = $row['dp'];
		
		echo "<img src=".$row['dp']." class='w3-circle' alt='Person' style='width:70px;height:70px;'/>&nbsp;&nbsp;";
		echo "<a href='Profile_guest.php?id=" .$row['id']. "'>".$row["fname"]."&nbsp;".$row["lname"]."&nbsp;||".$row["country"]."&nbsp;||".$row["city"]."&nbsp;||".$row["talent"]. "</a><br><br>";
		$count = $count+1;
	} 
}
}

}

if(isset($_POST["search_name"])) {
$search_name = mysql_real_escape_string($_POST["search_name"]);
if (!empty($search_name)) {
	
$query = "SELECT city FROM users WHERE city='$search_name'";
$result = $con->query($query);

if($result->num_rows>0) {
	echo $result->num_rows." Profile Found for this City:<br><br>";
	$query_fetch = "SELECT * FROM users WHERE city='$search_name'";
	$result_fetch = $con->query($query_fetch);
    while($row = $result_fetch->fetch_assoc()) {
			$check_mail = $row['email'];
			$check_pass = $row['password'];
			$lname = $row['lname'];
			$fname = $row['fname'];
			$talent = $row['talent']."<br>";
			$gender = $row['gender'];
			$date = $row['dob'];
			$country = $row['country'];
			$city = $row['city'];
			$other = $row['other'];
			$bio = $row['bio'];
			$dp = $row['dp'];
	
		echo "<img src=".$row['dp']." class='w3-circle' alt='Person' style='width:70px;height:70px;'/>&nbsp;&nbsp;";
		echo "<a href='Profile_guest.php?id=" .$row['id']. "'>".$row["fname"]."&nbsp;".$row["lname"]."&nbsp;||".$row["country"]."&nbsp;||".$row["city"]."&nbsp;||".$row["talent"]. "</a><br><br>";
		$count = $count+1;
	} 
}
}

}

if(isset($_POST["search_name"])) {
$search_name = mysql_real_escape_string($_POST["search_name"]);
if (!empty($search_name)) {
	
$query = "SELECT country FROM users WHERE country='$search_name'";
$result = $con->query($query);

if($result->num_rows>0) {
	echo $result->num_rows." Profile Found for this Country:<br><br>";
	$query_fetch = "SELECT * FROM users WHERE country='$search_name'";
	$result_fetch = $con->query($query_fetch);
    while($row = $result_fetch->fetch_assoc()) {
			$check_mail = $row['email'];
			$check_pass = $row['password'];
			$lname = $row['lname'];
			$fname = $row['fname'];
			$talent = $row['talent']."<br>";
			$gender = $row['gender'];
			$date = $row['dob'];
			$country = $row['country'];
			$city = $row['city'];
			$other = $row['other'];
			$bio = $row['bio'];
			$dp = $row['dp'];
	
		echo "<img src=".$row['dp']." class='w3-circle' alt='Person' style='width:70px;height:70px;'/>&nbsp;&nbsp;";
		echo "<a href='Profile_guest.php?id=" .$row['id']. "'>".$row["fname"]."&nbsp;".$row["lname"]."&nbsp;||".$row["country"]."&nbsp;||".$row["city"]."&nbsp;||".$row["talent"]. "</a><br><br>";
		$count = $count+1;
	} 
}
}

}

if(isset($_POST["search_name"])) {
$search_name = mysql_real_escape_string($_POST["search_name"]);
if (!empty($search_name)) {
	
$query = "SELECT song_name FROM upcoming WHERE song_name='$search_name'";
$result = $con->query($query);

if($result->num_rows>0) {
	echo $result->num_rows." Songs Found for this Search:<br><br>";
	$query_fetch = "SELECT * FROM upcoming WHERE song_name='$search_name'";
	$result_fetch = $con->query($query_fetch);
    while($row = $result_fetch->fetch_assoc()) {
			$lname = $row['lname'];
			$fname = $row['fname'];
			$ins = $row['instrument']."<br>";
			$date = $row['date'];
			$dp = $row['dp'];
			$id = $row['id'];
	
		echo "<img src=".$row['dp']." class='w3-circle' alt='Person' style='width:70px;height:70px;'/>&nbsp;&nbsp;";
		echo "<a href='Video.php?id=" .$row['id']. "'>".$row["song_name"]."&nbsp;||".$row["fname"]."&nbsp;".$row["lname"]."&nbsp;||".$row["instrument"]." (Cover)&nbsp;||".$row["date"]."</a><br><br>";
		$count = $count+1;
	} 
}
}

}

if($count==0)
{
	echo "No Results Found.";
}

?>
</div>
</div>

<footer class="w3-container w3-padding-32 w3-center" id="footer">
   <img src="Pics/circle.jpg" style="width:120px;margin-top:-30px;-webkit-transform: rotate(180deg)">
  <b><div class="w3-xlarge w3-padding-32" id="share">Share<br>
   <a href="https://www.facebook.com/sharer/sharer.php?u=www.harmonicunderdogs.com" target="_blank" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="https://twitter.com/share?url=www.harmonicunderdogs.com"  target="_blank" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
 </div>
 <p>Powered by Harmonic Underdogs</p>
 <p>All Rights Reserved &copy 2016</p>
 <a href="#myPage" style="margin-left:1000px;"><span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;Back to Top</a></b>
</footer>

<script>
// Open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.width = "25%";
    document.getElementById("mySidenav").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
<script src="lightbox2-master\lightbox2-master\dist\js\lightbox.js"></script>


</div>
</body>
</html>
