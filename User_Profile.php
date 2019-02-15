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

<title>Profile - <?php 
$user = $_SESSION['fname']; echo $user; ?></title>
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
      background-color: #FDFEFE;
      color: black;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover {
      background-color: teal;
      color: white;
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

#playlist{background:#D4E6F1;width:auto;margin-left:20px;height:auto;padding:20px;list-style-type: none;border:5px solid #666}
audio{background:#666;width:400px;padding:20px;margin-left:480px;}
#playlist .active a{color:blue;text-decoration:none;}
#playlist li a{color:#922B21;padding:5px;display:inline;}
#playlist li a:hover{color:black;text-decoration:none;}
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

<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";

	if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { }
	
if (isset($_POST['bio_btn'])) {
	
	
	$bio = mysql_real_escape_string($_POST['bio']);
	$success = "Bio Saved!";
	
		$sql = "UPDATE users SET bio = '$bio' WHERE email = '$email'";
		
		mysqli_query($con,$sql);
		$_SESSION['bio'] = $bio;
		$_SESSION['success'] = $success;
		//echo $a;
		
		//die();
		header("location: User_Profile.php");
		die();
	 }

?>

<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";
	
	if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { }
	$dp = $_SESSION['dp'];

	if (isset($_POST['image_btn'])){
		$target = "Pics/".basename($_FILES['image']['name']);
		
		$image = $_FILES['image']['name'];
		
		$sql = "UPDATE users SET dp = '$target' WHERE email = '$email'";
		$dp_change = "UPDATE upcoming SET dp = '$target' WHERE email = '$email'";
		
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
		$expensions= array("jpeg","jpg","png");
      
		if(in_array($file_ext,$expensions)=== false){
         $success ="Extension not allowed,<br> please choose a JPEG or PNG file.";
		}
		
		else if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$success = "Image Saved!";
		mysqli_query($con,$dp_change);
		mysqli_query($con,$sql);
		$_SESSION['dp'] = $target;
		}
		
		else {$success = "There was an Error Uploading Image";}
	   
		$_SESSION['success'] = $success;
		//echo $a;
		
		//die();
		header("location: User_Profile.php");
		die();
	}
?>

<!-- Sidenav -->
<nav class="w3-sidenav w3-red w3-card-2 w3-animate-right w3-right w3-large" style="display:none;height:auto;margin-left:900px;margin-top:80px;padding-top:80px;padding:50px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xlarge w3-right w3-display-topright" style="padding:5px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="#bio" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-user"></span>&nbsp;<b>Biography</b></a>
  <a href="#covers" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-music"></span>&nbsp;<b>Song Covers</b></a>
  <a href="#share" class="w3-text-white w3-hover-text-green w3-hover-white" style="font-family: Lato, sans-serif;padding:8px;"><span class="glyphicon glyphicon-share"></span>&nbsp;<b>Share</b></a>
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

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64 w3-center" id="bio">
<button style='margin-right:460px;margin-top:55px !important' class='w3-btn w3-padding-16 w3-large w3-green' data-toggle='modal' data-target='#myModal1'>Edit Photo</button>
  <h1 class="w3-center" style="margin-bottom:20px;margin-left:100px;margin-top:-10px;">Biography
  <?php
  
	$bio = $_SESSION['bio'];
	
	if($bio == ""){
	echo "<button style='margin-left:20px;margin-top:-5px !important' class='w3-btn w3-padding-16 w3-large w3-green w3-margin-top' data-toggle='modal' data-target='#myModal'>Add Biography</button>";
	}
	else {
	echo "<button style='margin-left:20px;margin-top:-5px !important' class='w3-btn w3-padding-16 w3-large w3-green w3-margin-top' data-toggle='modal' data-target='#myModal'>Edit Biography</button>";
	}
   ?>
  </h1>
  
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-section">
      <p style="margin-left:-100px;margin-top:-70px;"></p><br>
	<?php
	if(!empty($_SESSION['fname']) && !empty($_SESSION['lname'])){
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	}
	else { }
	$dp = $_SESSION['dp'];
	echo "<a href='".$dp."' data-lightbox='example-1' title='View Photo' data-title='".$fname." &nbsp; ".$lname."'>";
	
	?>

	<?php 
	$dp = $_SESSION['dp'];
	
	echo "<img src='".$dp."' style='width:280px;height:280px;margin-left:20px;border:2px solid black;' class='w3-circle' alt='Photo of Me'></a>";
	
	?>
	<div style="margin-top:-240px;margin-left:430px; text-align:left; height:200px; width:400px;
	background-color:#212F3C;color:white;padding:20px;">
	<h3 style="font: Arial, Helvetica, sans-serif !important;"><b>
	<?php
	$bio = $_SESSION['bio'];
	$bio = str_replace('\r\n','<br>',$bio);
	$bio = trim($bio);
	echo "<p>".$bio."</p>";
?></b></h3>
    </div>
    </div>

    <!-- Hide this text on small devices -->
  </div>
  
  <script>
  setTimeout(function(){
    document.getElementById('message').style.display = 'none';
    /* or
    var item = document.getElementById('info-message')
    item.parentNode.removeChild(item); 
    */
  }, 4000);
</script>

<script>
  setTimeout(function(){
    document.getElementById('message_success').style.display = 'none';
    /* or
    var item = document.getElementById('info-message')
    item.parentNode.removeChild(item); 
    */
  }, 4000);
</script>

  <h3 id="message"> 
  <?php
	if(!empty($_SESSION['success'])){
		$success = $_SESSION['success'];
		echo $success;
		unset($_SESSION['success']);
	}
	else { }
  //<$_SESSION['username']= $username; 
  ?></h3>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
          <h4><span class="glyphicon glyphicon-user"></span> Edit Biography</h4>
        </div>
        <div class="modal-body">
		  <form class="login-form" method="post" action="User_Profile.php">
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-pencil"></span> Your Text Here: </label>
              <div><textarea type="text" name="bio" cols="68"  rows="3"><?php if(!empty($_SESSION['bio'])){
				$bio = $_SESSION['bio'];
					}
				else { $bio = ""; }
				$bio = trim($bio);
				$bio=str_replace('\r\n','<br>',$bio);
				echo $bio;?>
			  </textarea>
			  </div>
            </div>
			<button type="submit" name="bio_btn" class="btn btn-block" style="background-color: #82E0AA";>Save Bio
                <span class="glyphicon glyphicon-ok"></span>
            </button>
    </form><br>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
          <h4><span class="glyphicon glyphicon-user"></span> Upload Image</h4>
        </div>
        <div class="modal-body">
		  <form class="login-form" method="post" action="User_Profile.php" enctype="multipart/form-data">
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-camera"></span> Choose Image </label>
              <input style="margin-left:70px;" type="file" name="image" id="image" onchange="imagepreview(this);" required>
			  <img id ="preview" style="margin-left:120px;width:50%;margin-top:10px;" />
            </div>
			<button type="submit" name="image_btn" class="btn btn-block" style="background-color: #82E0AA">Save Image
                <span class="glyphicon glyphicon-ok"></span>
            </button>
    </form><br>
      </div>
    </div>
  </div>
</div>

<script>
	function imagepreview(input) {
		if(input.files && input.files[0]){
			var filerd = new FileReader();
			filerd.onload = function (e)
			{
				$('#preview').attr('src', e.target.result);
			};
			filerd.readAsDataURL(input.files[0]);
		}
	}
</script>

<div style="margin-bottom:20px;color:white;" class="container text-left">
  <h3> 
  <?php
  //<$_SESSION['username']= $username;
	if(!empty($_SESSION['fname']) && !empty($_SESSION['lname'])){
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	echo "<div style='display: inline;float:left !Important;'>||Name: ".$fname."&nbsp;".$lname."</div>";
	}
	else { }
	
	if(!empty($_SESSION['gender'])){
	$gender = $_SESSION['gender'];
	echo "<div style='display: inline;float:left !Important;'>&nbsp;&nbsp;&nbsp;||Gender: ".$gender."</div>";
	}
	else { }
	
	if(!empty($_SESSION['dob'])){
	$date = $_SESSION['dob'];
	echo "<div style='display: inline;float:left !Important;'>&nbsp;&nbsp;&nbsp;||Birthday: ".$date."</div><br><br>";
	}
	else { }
	
	if(!empty($_SESSION['talent'])){
	$talent = $_SESSION['talent'];
	echo "<div style='display: inline;float:left !Important;'>&nbsp;&nbsp;&nbsp;||Talent: ".$talent."</div>";
	}
	else { }
	
	if(!empty($_SESSION['city'])){
	$city = $_SESSION['city'];
	if(!($city==""))
	echo "<div style='display: inline;float:left !Important;'>&nbsp;&nbsp;&nbsp;||City: ".$city."</div>";
	}
	else { }
	
	if(!empty($_SESSION['country'])){
	$country = $_SESSION['country'];
	if(!($country==""))
	echo "<div style='display: inline;float:left !Important;'>&nbsp;&nbsp;&nbsp;||Country: ".$country."</div>";
	}
	else { }
	
	if(!empty($_SESSION['other'])){
	$other = $_SESSION['other'];
	echo "<div style='display: inline;float:left !Important;'>&nbsp;&nbsp;&nbsp;||Other: ".$other."</div>";
	}
	else { }
  
  ?></h3></div>
  
  <!-- !PAGE CONTENT! -->
<br><br>
<div class="w3-container w3-center">
  <h2>SONG COVERS</h2>
  <p>Covered by <?php echo $fname; ?></p>
<div class="w3-container w3-center" id="covers">
<div class="w3-center" id="player">
  <span class="w3-xxlarge w3-center" style="cursor:pointer;color:#922B21;" id="list"><i class="fa fa-bars"></i></span>
</div>
</div>
</div>

<?php
if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { $email = ""; }
$prj= mysqli_query($con,"select * from upcoming where email='$email' AND check_song=0");
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;
        }
?>

<ul id="playlist">
<!-- First Div -->
        <div style="margin-left:10px;">
		<?php
		if($prj->num_rows==0)
			echo "No Upcoming Song Covers";
		else
		foreach($record as $rec){
		echo "<li style='margin-bottom:10px;'>";
        echo "<span class='glyphicon glyphicon-play'></span><b>&nbsp;&nbsp; ".$rec['song_name']." || ".$rec['film_name']." || ".$rec['date']."";
	    echo "&nbsp;&nbsp;&nbsp;<a href='Image.php?id=".$rec['id']."' style='background-color: #82E0AA' class='btn btn-block' data-toggle='modal'> Upload &nbsp;&nbsp;<span class='glyphicon glyphicon-upload' style='color:green;'></span></b></a>";
		echo "</li>"; } ?>
		</div>
</ul>

<div class="modal fade" id="myModal30" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
          <h4><span class="glyphicon glyphicon-user"></span> Upload Video</h4>
        </div>
		<?php
			if(!empty($_POST['rowid'])){
			$id = $_POST['rowid'];
			}
			else { $id = "Amaan"; }
			echo $id;
			?>
        <div class="modal-body">
		  <form class="login-form" method="post" action="User_Profile.php" enctype="multipart/form-data">
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-film"></span> Choose Video </label>
              <input style="margin-left:70px;" type="file" name="image" id="image" onchange="imagepreview(this);" required>
			  <img id ="preview" style="margin-left:120px;width:50%;margin-top:10px;" />
            </div>
			<button type="submit" name="image_btn" class="btn btn-block" style="background-color: #82E0AA";>Save Video
                <span class="glyphicon glyphicon-ok"></span>
            </button>
    </form><br>
      </div>
    </div>
  </div>
</div> 


<script type="text/javascript">
$('#playlist').hide();
$('#list').click(function() {
   $('#playlist').slideToggle("slow");
      event.stopPropagation();
});

</script>

<div style="margin-left:20px;" id="myCarousel" class="carousel slide" data-ride="carousel">
<center><h3 id="message_success"> 
  <?php
	if(!empty($_SESSION['video_success'])){
		$success = $_SESSION['video_success'];
		echo $success;
		unset($_SESSION['video_success']);
	}
	else { }
  //<$_SESSION['username']= $username; 
  ?></h3></center>
    <!-- Indicators -->
	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
	
<?php
if(!empty($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
	else { $email = ""; }
$prj= mysqli_query($con,"select * from upcoming where email='$email' AND check_song=1");
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $video[] = $row;
        }
?>
	
	<!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
    <div style="margin-right:30px;" class="row text-center">
	  <?php
		  if($prj->num_rows==0)
			echo "No Song Covers";
		  else
		  foreach($video as $vid){
		  echo "<div class='col-sm-4'>";
		  echo "<div class='thumbnail'>";
          echo "<img src='Pics/logo.jpg' alt='Paris' width='100' height='50'>";
          echo "<p><strong>".$vid['song_name']."</strong></p>";
          echo "<p>".$vid['film_name']."</p>";
          echo "<a href='Video.php?id=".$vid['id']."' class='btn'>Play</a>";  
		  echo "</div>";
		  echo "</div>";
		  } ?>
    </div>
  </div>
</div>
		 <!-- SECOND DIV -->
	  
	  <div class="item">
        <div class="container">
    <div style="margin-right:30px;" class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="Paris" width="100" height="50">
          <p><strong>Tm Hi Ho</strong></p>
          <p>ASHIQUI 2</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="New York" width="100" height="50">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
	  <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
	  <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
	  <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
         <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
    </div>
  </div>
 </div>
  <!-- THIRD DIV -->
	  
	  <div class="item">
        <div class="container">
    <div style="margin-right:30px;" class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="Paris" width="100" height="50">
          <p><strong>Tm Hi Ho</strong></p>
          <p>ASHIQUI 2</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="New York" width="100" height="50">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
	  <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
	  <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
	  <div class="col-sm-4">
        <div class="thumbnail">
          <img src="Pics/logo.jpg" alt="San Francisco" width="100" height="50">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <a href="Video.php" class="btn" target="_blank">Play</a>
        </div>
      </div>
    </div>
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

<!-- Footer -->
<footer style="background-image:url('pics/footer.jpg');margin-top:30px;" class="w3-container w3-padding-32 w3-center" id="footer">
  <img src="Pics/circle.jpg" style="width:120px;margin-top:-30px;-webkit-transform: rotate(180deg)">
  <div class="w3-xlarge w3-padding-32" id="share">Share<br>
   <a href="https://www.facebook.com/sharer/sharer.php?u=www.harmonicunderdogs.com" target="_blank" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="https://twitter.com/share?url=www.harmonicunderdogs.com"  target="_blank" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
 </div>
 <p>Powered by Harmonic Underdogs</p>
 <p>All Rights Reserved &copy 2018</p>
 <a href="#myPage" style="float:right;"><span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;Back to Top</a>
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
  

</div>
</body>
</html>
