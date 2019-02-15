<!DOCTYPE html>
<?php 
  require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";
  ob_start();
  session_start(); ?>
<html>

<head>
<link rel="shortcut icon" href="Pics/2.jpg">
</head>

<title>Singers</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body class="w3-content" style="max-width:1300px">

<style>
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
  #nav{display:none;}
	 #about{display:none;}
	 #share{display:none;}
  footer {
      background-color: #78281F;
	  font-family: "Lato", sans-serif;
      color: #FDFEFE;
      padding: 32px;
	  margin-top:80px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .flexcroll{
    scrollbar-face-color: #367CD2;
    scrollbar-shadow-color: #FFFFFF;
    scrollbar-highlight-color: #FFFFFF;
    scrollbar-3dlight-color: #FFFFFF;
    scrollbar-darkshadow-color: #FFFFFF;
    scrollbar-track-color: #FFFFFF;
    scrollbar-arrow-color: #FFFFFF;
}

/* Let's get this party started */
.flexcroll::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
.flexcroll::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
.flexcroll::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: orange; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
</style>

<script>
$(function(){  // $(document).ready shorthand
  $('#nav').fadeIn(1000);
  $('#about').fadeIn(1000);
  $('#share').fadeIn(1000);
});
</script>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        <li><a href="User_Profile.php" name="user_btn" style="color: green !important;background-color: white !important;">
		<?php $user = strtoupper($_SESSION['fname']); echo "<strong>" . $user. "</strong>";
		$email = $_SESSION['email'];
		$query = "SELECT email FROM upcoming WHERE email='$email' AND check_song=0";
		$result = $con->query($query);
		if($result->num_rows>0) {
		echo "&nbsp;"; echo "<i class='fa fa-circle' aria-hidden='true'>".$result->num_rows."</i>";}
		?>
        <li class="active"><a href="User_Circle.php">CIRCLE</a></li>
        <li><a href="User_Album.php">ALBUM</a></li></ul>
      <ul class="nav navbar-nav navbar-right">		
        <li>
		<form id="search" action="Search_Video.php" method="POST">
        <div id="input"><input type="text" name="search_name" style="width: 300px; height:25px; margin-top:10px; margin-right:10px;background:#CD6155;" id="search" placeholder="Enter search terms..." required></div>
		 <div id="label"><input type="submit" style="height:26px; margin-bottom:2px;" value="Search" class="btn1"></div>
    </form><span class="glyphicon glyphicon-search"></span>
		</li>
		</ul>
    </div>
  </div>
  <div class="w3-container w3-padding-0 w3-center" style="width:1349px;margin-top:3px;">
  <span class="w3-opennav w3-xxlarge w3-right w3-margin-right" style="margin-top:-50px;margin-bottom:6px;" onclick="w3_open()"><i class="fa fa-bars" style="color:red;"></i></span>
</div>
</nav>

<div class="content" style="margin-left:100px;margin-right:100px;">

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

<!-- Sidenav -->
<nav class="w3-sidenav w3-red w3-card-2 w3-animate-right w3-right w3-large" style="display:none;height:auto;margin-left:880px; margin-top:80px;padding-top:80px;padding:50px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xlarge w3-right w3-display-topright" style="padding:5px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="User_Circle.php" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b>My Circle</b></a>
  <a href="Singers.php" name="singer_btn" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b>Singers</b></a>
  <a href="Guitarists.php" name="guitarist_btn" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b>Guitarists</b></a>
  <a href="Drummers.php" name="drummer_btn" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b>Drummers</b></a>
  <a href="Pianists.php" name="pianist_btn" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b>Pianists</b></a>
  <form method="post" action="Login_User.php">
  <button style="margin-left:65px;" type="submit" name="logout_btn" class="w3-btn w3-padding-16 w3-medium w3-margin-top w3-green"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;<b>Logout</b></a></form>
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

	if (isset($_POST['singer_btn'])) {
	mysqli_query($con,$sql);
	header("location: Singers.php");
}

	if (isset($_POST['drummer_btn'])) {
	mysqli_query($con,$sql);
	header("location: Drummers.php");
}
	
	if (isset($_POST['pianist_btn'])) {
	mysqli_query($con,$sql);
	header("location: Pianists.php");
}

	if (isset($_POST['other_btn'])) {
	mysqli_query($con,$sql);
	header("location: Others.php");
}
?>

<?php
if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { }
	
	$email_friend = mysqli_query($con,"select distinct email from friends where friend_of = '$email'");
        while($rew = mysqli_fetch_array($email_friend)){
		$var[] = $rew['email'];
	}
		
		if($email_friend->num_rows==0)
		{
		$prj= mysqli_query($con,"SELECT *
		FROM users
		WHERE talent='Singer' AND email <> '$email'");
		$record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }
	}
		
		else{
		$result = "'".implode("', '", $var)."'";

		$prj= mysqli_query($con,"SELECT *
		FROM users
		WHERE email NOT IN ($result) AND talent='Singer' AND email <> '$email'");
		$record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }}
?>

<!-- First Grid: Logo & About -->
<div class="w3-row" id="about">
  <div class="w3-half w3-blue-grey w3-container flexcroll" style="height:660px;overflow-y:scroll;">
    <div class="w3-padding-64 w3-center" style="margin-top:40px;">
      <h1>SINGERS</h1>
	  <?php foreach($record as $rec){
	  echo "<div style='float:left;margin-left:15px;'>";
      echo "<img src='".$rec['dp']."' class='w3-circle' alt='Person' style='width:70px;height:70px;'><br><br>";
	  echo "<a href='Profile_guest.php?id=" .$rec['id']. "'; style='margin-bottom:10px !Important' class='w3-btn w3-padding-16 w3-small w3-green'>".$rec['fname']." ".$rec['lname']."</a></div>"; }	  
	  ?>
    </div>
  </div>
  <div class="w3-half w3-white w3-container w3-center" style="height:620px;margin-top:40px;">
    <div class="w3-padding-64">
      <img class="img-zoom" style="width:190px; margin-top: 30px; margin-bottom: 30px; margin-left : 210px; float: left;"
             src="Pics/logo.jpg">
    </div>
    <div>
      <a href="Guitarists.php" class="w3-btn w3-btn-block w3-hover-teal w3-padding-16">Guitarists&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
    </div>
	<div>
      <a href="User_Circle.php" class="w3-btn w3-btn-block w3-hover-teal w3-padding-16"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp;My Circle</a>
    </div>
  </div>
</div>

<script>
// Toggle grid padding
function myFunction() {
    var x = document.getElementById("myGrid");
    if (x.className.indexOf("w3-row-padding") == -1) {
        x.className += " w3-row-padding";
    } else {
        x.className = x.className.replace(" w3-row-padding", "");
    }
}

// Open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.width = "25%";
    document.getElementById("mySidenav").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>

<script>
window.onscroll = function (e) {  
 document.getElementById("mySidenav").style.display = "none";
}
</script>

<footer class="w3-container w3-padding-32 w3-center" id="footer">
   <img src="Pics/circle.jpg" style="width:120px;margin-top:-30px;-webkit-transform: rotate(180deg)">
  <b><div class="w3-xlarge w3-padding-32" id="share">Share<br>
   <a href="https://www.facebook.com/sharer/sharer.php?u=www.harmonicunderdogs.com" target="_blank" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="https://twitter.com/share?url=www.harmonicunderdogs.com"  target="_blank" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
 </div>
 <p>Powered by Harmonic Underdogs</p>
 <p>All Rights Reserved &copy 2016</p>
 <a href="#myPage" style="margin-left:900px;"><span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;Back to Top</a></b>
</footer>

</div>
</body>
</html>
