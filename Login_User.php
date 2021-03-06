<!DOCTYPE html>
<?php 
  require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";
  ob_start();
  session_start(); ?>
  
<html lang="en">

<head>
<link rel="shortcut icon" href="Pics/2.jpg">
</head>

<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Home - <?php $user = $_SESSION['fname']; echo $user; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
      color: #111;
  }
  .container {
      padding: 80px 120px;
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
</head>
<body style="margin-left:100px;margin-right:100px;" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        <li class="active"><a href="Login_User.php">HOME</a></li>
        <li><a href="Coke.php">COKE STUDIO</a></li>
        <li><a href="Nescafe.php">NESCAFE BASEMENT</a></li>
        <li><a href="User_Profile.php" style="color: green !important;background-color: white !important;">
		<?php $user = strtoupper($_SESSION['fname']); echo "<strong>" . $user. "</strong>";
		$email = $_SESSION['email'];
		$query = "SELECT email FROM upcoming WHERE email='$email' AND check_song=0";
		$result = $con->query($query);
		if($result->num_rows>0) {
		echo "&nbsp;"; echo "<i class='fa fa-circle' aria-hidden='true'>".$result->num_rows."</i>";}
		?>
		</a></li>
        <li><a href="User_Circle.php" name="circle_btn">CIRCLE</a></li>
		<li><a href="User_Album.php">ALBUM</a></li></ul>
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
  <div class="w3-container w3-padding-0 w3-center">
  <span class="w3-opennav w3-xxlarge w3-right w3-margin-right" style="margin-top:-50px;" onclick="w3_open()"><i class="fa fa-bars" style="color:red;"></i></span>
</div>
</nav>

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

<!-- Sidenav -->
<nav class="w3-sidenav w3-red w3-card-2 w3-animate-right w3-right w3-large" style="display:none;height:auto;margin-left:900px;margin-top:80px;padding:50px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xlarge w3-right w3-display-topright" style="padding:2px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="#band" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b>Contributors</b></a>
  <a href="#tour" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;<b>Upcoming Covers</b></a>
  <a href="#contact" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;<b>Give Feedback</b></a>
  <a href="#share" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;<b>Share</b></a>
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
window.onscroll = function (e) {  
 document.getElementById("mySidenav").style.display = "none";
}
</script>

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

<div style="margin-bottom:-70px;" class="container text-center">
  <h3> 
  <?php
    $fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
    $message = $_SESSION['login_message'];  	
  //<$_SESSION['username']= $username; 
  echo $message; echo"<br>"; echo $fname; echo"&nbsp;"; echo $lname; echo "!";?></h3></div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>Contributors of HarmonicUnderdogs.com</h3>
  <p><em>We love music!</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Miss.ADNAN</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="Pics/ka.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
	  <div id="demo" class="collapse">
        <p>Manager</p>
        <p>12 November 1993</p>
        <p>Karachi, Pakistan</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Mr.KHAN</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="Pics/ak.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
	  <div id="demo2" class="collapse">
        <p>Guitarist</p>
        <p>22nd July 1996</p>
        <p>Karachi, Pakistan</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Mr.QURESHI</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="Pics/nq.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
	  <div id="demo3" class="collapse">
        <p>Content Writer</p>
        <p>11th November 1994</p>
        <p>Karachi, Pakistan</p>
      </div>
    </div>
  </div>
</div>

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

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">UPCOMING COVERS FROM YOUR CIRCLE</h3>
    <p class="text-center">We'll play you some music.<br></p>
	<button style='margin-left:375px;margin-bottom:20px !important;' class='w3-btn w3-padding-16 w3-large w3-green' data-toggle='modal' data-target='#myModal20'>Upload Your Event</button>
    <div class="w3-center">
	<h3 id="info-message"> 
	<?php
    if(!empty($_SESSION['success'])){
	$success = $_SESSION['success'];
	}
	else { $success = ""; }  	
  //<$_SESSION['username']= $username; 
    echo $success;?></h3></div>
	
	<?php
if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { $email = ""; }
	
		$email_friend = mysqli_query($con,"select * from friends where friend_of='$email'");
        $record_friend = array();
        while($row_friend = mysqli_fetch_assoc($email_friend)){
            $record_friend[] = $row_friend;
	}
	
		foreach($record_friend as $recf){
			$out = $recf['email'];
			$upcoming_friend = mysqli_query($con,"select * from upcoming where email='$out'");
			$record_upcoming = array();
			while($row_upcoming = mysqli_fetch_assoc($upcoming_friend)){
            $record_upcoming[] = $row_upcoming;
			}
		echo "<ul class='list-group'>";
	
		foreach($record_upcoming as $recu){?>
		<h3><li style="background-color:black; !important;" class="list-group-item" width="50px"><span class="label label-danger" style="color:black; !important;">
		<img src="<?php echo $recu['dp'];?>" class="w3-circle" alt="Person" style="width:70px;height:70px;border:3px solid white;background-color:black;">
		&nbsp;<?php echo $recu['fname']; echo "&nbsp;"; echo $recu['lname'];?> || <?php echo $recu['date'];?> || 
		<br><?php echo"&nbsp;"; echo $recu['song_name'];?> || <?php echo $recu['film_name'];?> 
		<br><?php echo"&nbsp;"; echo $recu['instrument']; if(!empty($recu['other'])){
		$other = $recu['other'];
		echo "&nbsp;+"; echo $other;
		}
		else { } echo"(Cover)";?></span>
		<?php 
		if($recu['check_song'] == 1)
		echo "<a href='Video.php?id=".$recu['id']."' style='margin-left:375px;margin-bottom:20px !important;' class='w3-btn w3-padding-16 w3-small w3-green'>Play</a>"; ?>
		</li></h3><?php } 
		echo "</ul>";	
		}
?>

		<ul class="list-group">
	<?php
	foreach($record as $rec){?>
      <h3><li style="background-color:black; !important;" class="list-group-item" width="50px"><span class="label label-danger" style="color:black; !important;">
	  <img src="<?php echo $rec['dp'];?>" class="w3-circle" alt="Person" style="width:70px;height:70px;border:3px solid white;background-color:black;">
	  &nbsp;<?php echo $rec['fname']; echo "&nbsp;"; echo $rec['lname'];?> || <?php echo $rec['date'];?> || 
	  <br><?php echo"&nbsp;"; echo $rec['song_name'];?> || <?php echo $rec['film_name'];?> 
	<br><?php echo"&nbsp;"; echo $rec['instrument']; if(!empty($rec['other'])){
	$other = $rec['other'];
	echo "&nbsp;+"; echo $other;
	}
	else { } echo"(Cover)";?></span>
	<?php 
		if($rec['check_song'] == 1)
		echo "<a href='Video.php?id=".$rec['id']."' style='margin-left:375px;margin-bottom:20px !important;' class='w3-btn w3-padding-16 w3-small w3-green'>Play</a>"; ?>
	</li></h3><?php } ?>
    </ul>
	
	
	
	<div class="modal fade" id="myModal20" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content w3-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
          <h4><span class="glyphicon glyphicon-lock"></span> Details</h4>
        </div>
        <div class="modal-body">
		  <form class="login-form" method="post" action="User.php">
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-music"></span> Song Name</label>
              <div><input style="width:250px;" type="text" name="song_name" required/></div>
            </div>
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-film"></span> Film/Singles Name</label>
              <div><input style="width:250px;" type="text" name="film_name" /></div>
            </div>
			<div class="form-group">
              <label><span class="glyphicon glyphicon-calendar"></span> Expected Date</label>
              <div><input type="date" style="width:250px;" name="date" id ="date" value="yyyy-mm-dd" class="input-medium search-query" onkeypress="return false" required></div>
            </div>
			<div class="form-group">
              <label><span class="glyphicon glyphicon-star"></span> Instrument</label>
			  <div><input type="radio" name="ins_name" value="Vocals" required> Just Vocals
              <input type="radio" name="ins_name" value="Guitar" > Guitar
			  <input type="radio" name="ins_name" value="Drum"> Drum
			  <input type="radio" name="ins_name" value="Piano"> Piano
			  </div>
            </div>
			<div class="form-group">
              <label><span class="glyphicon glyphicon-star-empty"></span> Other Instrument</label>
              <div><input style="width:250px;" type="text" name="Other"/></div>
            </div>
			<br>
			<button type="submit" name="song_btn" class="btn btn-block" style="background-color: #82E0AA";>Done
                <span class="glyphicon glyphicon-ok"></span>
            </button>
    </form><br>
      </div>
    </div>
  </div>
</div>

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
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Details</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-play"></span> Will Be Covering</label>
              <div style="border:1px solid black" ><b><center>Tm Hi Ho</div>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-facetime-video"></span> From the Movie</label>
			  <div style="border:1px solid black" ><b><center>Ashiqui 2</div>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Sung By</label>
			  <div style="border:1px solid black" ><b><center>Arijit Singh</div>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-calendar"></span> Date</label>
			  <div style="border:1px solid black" ><b><center>20/07/2016</div>
            </div>
              <button type="submit" id="lock" class="btn btn-block" data-dismiss="modal">Done
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2-->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Details</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-play"></span> Will Be Covering</label>
              <div style="border:1px solid black" ><b><center>Hum Jee Lenge</div>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-facetime-video"></span> From the Movie</label>
			  <div style="border:1px solid black" ><b><center>Murder 3</div>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Sung By</label>
			  <div style="border:1px solid black" ><b><center>Mustafa Zahid</div>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-calendar"></span> Date</label>
			  <div style="border:1px solid black" ><b><center>04/09/2016</div>
            </div>
              <button type="submit" id="lock" class="btn btn-block" data-dismiss="modal">Done
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Details</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-play"></span> Will Be Covering</label>
              <div style="border:1px solid black" ><b><center>Bachana</div>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-facetime-video"></span> From Singles Album</label>
			  <div style="border:1px solid black" ><b><center>Maktoob</div>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Sung By</label>
			  <div style="border:1px solid black" ><b><center>Bilal Khan</div>
            </div>
			<div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-calendar"></span> Date</label>
			  <div style="border:1px solid black" ><b><center>04/09/2016</div>
            </div>
              <button type="submit" id="lock" class="btn btn-block" data-dismiss="modal">Done
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modalVideo-header">
          <button type="button" id="video" class="close" data-dismiss="modal">×</button>
          <h5><span class="glyphicon glyphicon-play"></span> Tm Hi Ho(Cover)</h5>
        </div>
        <div class="modalVideo-body">
          <iframe id="iframe" width="560" height="315" src="https://www.youtube.com/embed/8367ETnagHo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modalVideo-header">
          <button type="button" id="video2" class="close" data-dismiss="modal">×</button>
          <h5><span class="glyphicon glyphicon-play"></span> Hum Jee Lenge(Cover)</h5>
        </div>
        <div class="modalVideo-body">
          <iframe id="iframe" width="560" height="315" src="https://www.youtube.com/embed/8367ETnagHo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modalVideo-header">
          <button type="button" id="video3" class="close" data-dismiss="modal">×</button>
          <h5><span class="glyphicon glyphicon-play"></span> Bachana(Cover)</h5>
        </div>
        <div class="modalVideo-body">
          <iframe id="iframe" width="560" height="315" src="https://www.youtube.com/embed/8367ETnagHo" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

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

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Give Feedback</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  
  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Karachi, Pakistan</p>
      <p><span class="glyphicon glyphicon-phone"></span>Facebook Page: www.facebook.com/harmonic.underdogs</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: underdogs@yahoo.com</p>
    </div>
	
	<form method="POST" action="User_Feedback.php" >
    <div class="col-md-8">
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
 <p>All Rights Reserved &copy 2016</p>
 <a href="#myPage" style="margin-left:1000px;"><span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;Back to Top</a>
</footer>

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

</body>
</html>
