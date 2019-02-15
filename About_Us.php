<!DOCTYPE html>
<?php 
  require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";
  ob_start();
  session_start(); ?>
  
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="Pics/2.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - <?php $user = $_SESSION['fname']; echo $user; ?></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
  }
  body{
	background:#ECF0F1;
}
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
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
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      background-color: #fff;
      color: #000;
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
  .modalVideo-body {
      padding: 40px 20px;
  }
  .modalVideo-header {
      padding: 40px 50px;
	  background-color: #C0392B;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
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
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
	  height:93px;
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
  footer {
      background-color: #78281F;
      color: #FDFEFE;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  input, select, textarea{
    color: black;
}
.fa-search{
	color:white;
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
  #myCarousel{display:none;}
   #nav{display:none;}
    #band{display:none;}
	 #tour{display:none;}
	  #contact{display:none;}
	   #footer{display:none;}
	    #googleMap{display:none;}

.modal-open {
  padding-right: 0 !important;
}
html {
  overflow-y: scroll !important;
}
  </style>

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
$(function(){  // $(document).ready shorthand
  $('#myCarousel').fadeIn(1000);
  $('#nav').fadeIn(1000);
  $('#band').fadeIn(1000);
  $('#tour').fadeIn(1000);
  $('#footer').fadeIn(1000);
  $('#contact').fadeIn(1000);
  $('#googleMap').fadeIn(1000);
});
</script>

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

<script>
window.onscroll = function (e) {  
 document.getElementById("mySidenav").style.display = "none";
}
</script>

<script>
$('.close-modal').click(function (e) {
    e.preventDefault();
    $('#modal').toggle();
    $('body').css("position", "static");
    $('body').animate({scrollTop: scrollTo}, 0);
});
$(function(){
    $('#video').click(function(){      
        $('iframe').attr('src', $('iframe').attr('src'));
    });
	$('#video2').click(function(){      
        $('iframe').attr('src', $('iframe').attr('src'));
    });
	$('#video3').click(function(){      
        $('iframe').attr('src', $('iframe').attr('src'));
    });
});
$(document).click(function(e) { 
    // Check for left button
    if (e.button == 0) {
        $('iframe').attr('src', $('iframe').attr('src'));
    }
});
</script>

<script>
$('#lock').click(function($e) {
    $e.preventDefault();
    doSomething();
});

document.getElementById('#lock').addEventListener('click', function (e) {
    e.preventDefault();
    doSomething();
})
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

<?php
if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { $email = ""; }
	
$prj= mysqli_query($con,"select * from upcoming where email='$email'");
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }
?>

<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";


//$sql = "INSERT INTO users(username,email,password) VALUES('asd','avc','abv')";
		//$con = mysqli_connect("localhost","root","","authentication");
	//	$a = mysqli_query($con,$sql);
	//	$_SESSION['message'] = "Your account has been Registered Successfully!";
	//	$_SESSION['username'] = $username;
	//	echo $a;
		
	//	die();
		
if (isset($_POST['song_btn'])) {
	
	$song = mysql_real_escape_string($_POST['song_name']);
	$film = mysql_real_escape_string($_POST['film_name']);
	if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { }
	
	if(!empty($_SESSION['fname'])){
	$fname = $_SESSION['fname'];
	}
	else { }
	
	if(!empty($_SESSION['lname'])){
	$lname = $_SESSION['lname'];
	}
	else { }
	
	if(!empty($_SESSION['dp'])){
	$dp = $_SESSION['dp'];
	}
	else { }
	
	if(isset($_POST['ins_name']) && !empty($_POST['ins_name'])){
		$instrument = mysql_real_escape_string($_POST['ins_name']);
	}
	else{ $instrument="";}
	
	if(isset($_POST['date']) && !empty($_POST['date'])){
	$date = date('Y-m-d', strtotime($_POST['date']));
	}
	else{ $date="";}
	
	if(isset($_POST['other']) && !empty($_POST['other'])){
	$other = mysql_real_escape_string($_POST['other']);
	}
	else{ $other="";}
	
	$success = "Event Saved!";

		$sql = "INSERT INTO upcoming(email,fname,lname,dp,song_name,film_name,date,instrument) VALUES('$email','$fname','$lname','$dp','$song','$film','$date','$instrument')";
		
		mysqli_query($con,$sql);
		$_SESSION['success'] = $success;
		//echo $a;
		
		//die();
	header("location: User.php");
    die(); 
}
?>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container">
		<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Pics/Music_slide.jpg" alt="PLAY THE MOMENTS" width="1200" height="700">
        <div class="carousel-caption">
          <h3><b>PLAY THE MOMENTS</b></h3>
          <!--<p>The atmosphere in New York is lorem ipsum.</p>-->
        </div>
      </div>
	  <div class="item">
        <img src="Pics/Music_slide2.jpg" alt="PAUSE THE MEMORIES" width="1200" height="700">
        <div class="carousel-caption">
          <h3><b>PAUSE THE MEMORIES</b></h3>
          <!--<p>The atmosphere in New York is lorem ipsum.</p>-->
        </div>
      </div>
	  <div class="item">
        <img src="Pics/Music_slide3.jpg" alt="STOP THE PAIN" width="1200" height="700">
        <div class="carousel-caption">
          <h3><b>STOP THE PAIN</b></h3>
          <!--<p>The atmosphere in New York is lorem ipsum.</p>-->
        </div>
      </div>
	  <div class="item">
        <img src="Pics/Music_slide4.jpg" alt="REWIND THE HAPPINESS" width="1200" height="700">
        <div class="carousel-caption">
          <h3><b>REWIND THE HAPPINESS</b></h3>
          <!--<p>The atmosphere in New York is lorem ipsum.</p>-->
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
			<nav class="navbar navbar-default navbar-fixed-top" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Login_User(new).php">
	  <img class="img-zoom" style="width:200px; border-radius: 49%; margin-top: -70px; margin-right : 0px; margin-left : 0px; float: left;"
             src="Pics/4.png">
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="Login_User.php">HOME</a></li>
        <li><a href="Coke.php">COKE STUDIO</a></li>
        <li><a href="Nescafe.php">NESCAFE BASEMENT</a></li>
        <li><a href="User_Profile.php" style="color: green !important;background-color: white !important;">
		<?php $user = strtoupper($_SESSION['fname']); echo "<strong>" . $user. "</strong>";
		$email = $_SESSION['email'];
		$query = "SELECT email FROM upcoming WHERE email='$email'";
		$result = $con->query($query);
		if($result->num_rows>0) {
		echo "&nbsp;"; echo "<i class='fa fa-circle' aria-hidden='true'>".$result->num_rows."</i>";}
		?>
		</a></li>
        <li><a href="User_Circle.php" name="circle_btn">CIRCLE</a></li>
		<li><a href="User_Album.php">ALBUM</a></li>
		<li class="active"><a href="About_Us.php">ABOUT US</a></li></ul>
      <ul class="nav navbar-nav navbar-right">		
        <li>
		<form id="search" action="Search_Video.php" method="POST">
        <div id="input"><input type="text" name="search_name" style="width: 300px; margin-top:10px; margin-right:10px;background:#CD6155;" id="search" placeholder="Enter search terms..." required></div>
		 <div id="label"><input type="submit" value="Search" class="btn1"></div>
    </form><i class="fa fa-search"></i>
		</li>
		</ul>
    </div>
  </div>
</nav>

<div style="margin-top:40px;color: green !important" class="text-center">
  <h3>Welcome 
  <?php
    $fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
    $message = $_SESSION['message'];
	//header("location: User_Profile.php");
  //<$_SESSION['username']= $username; 
  echo "<strong>" .$fname. "</strong>"; echo "&nbsp"; echo "<strong>" .$lname. "</strong>"; echo"<br>";?></h3></div>

<!-- Container (The Band Section) -->
<div id="band" style="margin-top:60px;" class="text-center">
  <h3>Founder of HarmonicUnderdogs.com</h3>
  <p><em>We love music!</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Mr.KHAN</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="Pics/main.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>
		<!-- Container (TOUR Section) -->
	
	<div id="contact" class="bg-1" style="padding:30px; margin-top:100px;">
  <h3 class="text-center">Give Feedback</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  
  <div class="row">
    <div style="padding:10px;background-color:white;color:black;"class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Karachi, Pakistan</p>
      <p><span class="glyphicon glyphicon-phone"></span>Facebook Page: www.facebook.com/harmonic.underdogs</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: underdogs@yahoo.com</p>
    </div>
	
	<form method="POST" action="User_Feedback.php" >
    <div style="padding:10px;" class="col-md-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  <br>
  <h3 class="text-center">From The Blog</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Miss.Adnan</a></li>
    <li><a data-toggle="tab" href="#menu1">Mr.Khan</a></li>
    <li><a data-toggle="tab" href="#menu2">Mr.Qureshi</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Miss.Adnan, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Mr.Khan, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Mr.Qureshi, Content Writer</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<div id="googleMap"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(24.8632417, 66.9986521);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
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

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center" id="footer">
   <img src="Pics/circle.jpg" style="width:120px;margin-top:-30px;-webkit-transform: rotate(180deg)">
  <div class="w3-xlarge w3-padding-32" id="share">Share<br>
   <a href="https://www.facebook.com/sharer/sharer.php?u=www.harmonicunderdogs.com" target="_blank" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="https://twitter.com/share?url=www.harmonicunderdogs.com"  target="_blank" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
 </div>
 <p>Powered by Harmonic Underdogs</p>
 <p>All Rights Reserved &copy 2018</p>
 <a href="#myPage" style="float:right;"><span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;Back to Top</a>
</footer>

		
			
		</div>
		<div class="col-md-1"></div>
	</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
	
  </body>
</html>
