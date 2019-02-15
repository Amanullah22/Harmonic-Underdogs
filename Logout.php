<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="Pics/2.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Harmonic Underdogs</title>

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
/* Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Tablet Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
body{
	background:#ECF0F1;
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

#back{
	background-image: url('Pics/greet.jpg');
}
.content {display:none;}
.preload { 
	width:50%;
    height:50%;
    position: fixed;
    top: 24%;
    left: 39%;}

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

.modal-open {
  padding-right: 0 !important;
}
html {
  overflow-y: scroll !important;
}

#try{
	width:400px;
}

#try option{
  width:50px;   
}
</style>

<script>
$(function() {
    $(".preload").fadeOut(5000, function() {
        $(".content").fadeIn(1000);        
    });
});
</script>

<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
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
$( '#upload' ).submit(function( event ) {
  event.preventDefault();
});
</script>

<script>
var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          playerVars: { 'autoplay': 1, 'controls': 1,'autohide':1,'wmode':'opaque' },
          videoId: 'JW5meKfy3fY',
          events: {
            'onReady': onPlayerReady}
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.mute();
      }
</script>

<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";


//$sql = "INSERT INTO users(username,email,password) VALUES('asd','avc','abv')";
		//$con = mysqli_connect("localhost","root","","authentication");
	//	$a = mysqli_query($con,$sql);
	//	$_SESSION['message'] = "Your account has been Registered Successfully!";
	//	$_SESSION['username'] = $username;
	//	echo $a;
		
	//	die();
		
if (isset($_POST['register_btn'])) {
	
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);
	if(isset($_POST['gender']) && !empty($_POST['gender'])){
		$gender = mysql_real_escape_string($_POST['gender']);
	}
	else{ $gender="";}
	if(isset($_POST['date']) && !empty($_POST['date'])){
	$date = date('Y-m-d', strtotime($_POST['date']));
	}
	else{ $date="";}
	$country = mysql_real_escape_string($_POST['country']);
	$city = mysql_real_escape_string($_POST['city']);
	if(isset($_POST['talent']) && !empty($_POST['talent'])){
		$talent = mysql_real_escape_string($_POST['talent']);
	}
	else{ $talent="";}
	$other = mysql_real_escape_string($_POST['other']);
	
	$unique_user = $fname;
	for ($i = 0; $i<7; $i++) 
	{
    $unique_user .= mt_rand(0,9);
	}
	
	if(isset($_POST['bio']) && !empty($_POST['bio'])){
	$bio = "";
	}
	else{ $bio = "";}
	
	if($gender == "Male")
	{
		$dp = "Pics/male.png";
	}
	else { $dp = "Pics/female.png";}
	
	$query_mail = "SELECT * FROM users WHERE email='$email'";
	$result_mail = $con->query($query_mail);
	
    if($result_mail->num_rows>0) {
        echo "<div class='container text-center'><h3>An account is already registered on this email,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";
    }
	else{
	if($password == $password2)
	{
		$sql = "INSERT INTO users(fname,lname,unique_user,email,password,bio,gender,dp,dob,country,city,talent,other) VALUES('$fname','$lname','$unique_user','$email','$password','$bio','$gender','$dp','$date','$country','$city','$talent','$other')";
		
		mysqli_query($con,$sql);
		$_SESSION['message'] = "Your account has been Registered Successfully!";
		$_SESSION['fname'] = $fname;
		$_SESSION['lname'] = $lname;
		$_SESSION['gender'] = $gender;
		$_SESSION['dob'] = $date;
		$_SESSION['country'] = $country;
		$_SESSION['city'] = $city;
		$_SESSION['talent'] = $talent;
		$_SESSION['other'] = $other;
		$_SESSION['email'] = $email;
		$_SESSION['bio'] = $bio;
		$_SESSION['dp'] = $dp;
		//echo $a;
		
		//die();
		header("location: Register_User(new).php");
	} else{ echo "<div class='container text-center'><h3>The two passwords does not match,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";}
}
    die(); 
}
?>

<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";

if (isset($_POST['login_btn'])) {
	$login_email = mysql_real_escape_string($_POST['login_email']);
	$login_password = $_POST['login_password'];
	
	$query = "SELECT email FROM users WHERE email='$login_email'";
	$result = $con->query($query);
	if($result->num_rows==1) {
        $query_login = "SELECT * FROM users WHERE email='$login_email'";
		$result_login = $con->query($query_login);
		while($row = $result_login->fetch_assoc()) {
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
		}
		if($login_email == $check_mail && $login_password == $check_pass)
		{
			$_SESSION['login_message'] = "Welcome Back,";
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['gender'] = $gender;
			$_SESSION['dob'] = $date;
			$_SESSION['country'] = $country;
			$_SESSION['city'] = $city;
			$_SESSION['talent'] = $talent;
			$_SESSION['other'] = $other;
			$_SESSION['email'] = $login_email;
			$_SESSION['bio'] = $bio;
			$_SESSION['dp'] = $dp;
			header("location: Login_User(new).php");
		}
		else{ echo "<div class='container text-center'><h3>Invalid Username or Password,<br><a href='Start(new).php' style='color:blue;'>Please Try Again!</h3></div>";}
    }else{ echo "<div class='container text-center'><h3>The account does not Exist,<br><a href='Start(new).php' style='color:blue;'>Please Try Again!</h3></div>";}
	die();
}
?>

<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";

if (isset($_POST['login_btn'])) {
	$login_email = mysql_real_escape_string($_POST['login_email']);
	$login_password = mysql_real_escape_string($_POST['login_password']);
	
	$query = "SELECT email FROM users WHERE email='$login_email'";
	$result = $con->query($query);
	if($result->num_rows==1) {
        $query_login = "SELECT * FROM users WHERE email='$login_email'";
		$result_login = $con->query($query_login);
		while($row = $result_login->fetch_assoc()) {
			$check_mail = $row['email'];
			$check_pass = $row['password'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$talent = $row['talent']."<br>";
			$gender = $row['gender'];
			$date = $row['dob'];
			$country = $row['country'];
			$city = $row['city'];
			$other = $row['other'];
			$bio = $row['bio'];
			$dp = $row['dp'];
		}
		if($login_email == $check_mail && $login_password == $check_pass)
		{
			$_SESSION['login_message'] = "Welcome Back,";
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['gender'] = $gender;
			$_SESSION['dob'] = $date;
			$_SESSION['country'] = $country;
			$_SESSION['city'] = $city;
			$_SESSION['talent'] = $talent;
			$_SESSION['other'] = $other;
			$_SESSION['email'] = $check_mail;
			$_SESSION['bio'] = $bio;
			$_SESSION['dp'] = $dp;
			header("location: User_Profile.php");
		}
		else{ echo "<div class='container text-center'><h3>Invalid Username or Password,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";}
    }else{ echo "<div class='container text-center'><h3>The account does not Exist,<br><a href='Start.php' style='color:blue;'>Please Try Again!</h3></div>";}
	die();
}
?>

  <body>
    <div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="preload"><img src="Pics/HU.gif"></div>
			<div class="col-md-10 content">
			
			<div class="w3-container w3-center w3-padding-128" style="background-image: url(Pics/back.jpg)" id="header">
				<h1 class="w3-margin w3-jumbo" style="color:white;">HARMONIC UNDERDOGS</h1>
				<p class="w3-xlarge" style="color:white;">Where the Music Begins</p>
				<button onclick="location.href='Home.php'" class="w3-btn w3-padding-16 w3-large w3-green w3-margin-top">Free Roam</button>
				<button style="margin-left:20px" class="w3-btn w3-padding-16 w3-large w3-green w3-margin-top" data-toggle="modal" data-target="#myModal">Login</button>
				<button style="margin-left:20px" class="w3-btn w3-padding-16 w3-large w3-green w3-margin-top" data-toggle="modal" data-target="#myModal1">Sign Up</button>
			</div>
			

<div class="container-fluid text-center">
  <h3>
  <?php
    if(!empty($_SESSION['fname']) && !empty($_SESSION['lname'])){
		$fname = $_SESSION['fname'];
		$lname = $_SESSION['lname'];
	}
	else{ $fname=""; $lname="";}
	if(!empty($_SESSION['logout_message'])){
		$logout_message = $_SESSION['logout_message'];
		echo "Thank You, "; echo $fname; echo"&nbsp;"; echo $lname; echo".<br>"; echo $logout_message;
		unset($_SESSION['logout_message']);
	}
	else{ $logout_message="";}	
  //<$_SESSION['username']= $username; 
    session_destroy();?></h3></div>

			
			<!-- First Grid -->
			<div class="w3-row-padding w3-padding-32 w3-container" id="mission">
				<div class="w3-content">
				<div>
				<h1>The Admin</h1>
				<!--<h5 class="w3-padding-32">This Website is dedicated to Music Lovers.</h5>-->
				<p class="w3-text-grey">
				<iframe id="player" style="float:right;margin-left:20px;border:3px solid seagreen;" width="380" height="250" src="https://www.youtube.com/embed/hhxM3RJxJK0?autoplay=1" frameborder="10" allowfullscreen></iframe>
				Hello Guys, looking for music? Well, you have come to the right place.This site gives you
				all the harmonious action from the most famous Musicians of the world.I am proud to dedicate
				this site to those people who consider music as a reason to move on in their lives.This
				site has a couple of Songs done by great Musicians and information on how they started their Musical Career.
				It has all in one place and I hope you will enjoy Surfing it, GOODLUCK :)</p>
				</div>
				</div>
			</div>
			
			<div class="w3-container w3-center w3-padding-64" id="back">
    <h1 class="w3-margin w3-xlarge"><label id="lblGreetings"></label>
	<p id="demo"></p></h1></div>
	
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content w3-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login to Your Account</h4>
        </div>
        <div class="modal-body">
		  <form class="login-form" method="post" action="Start(new).php">
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <div><input style="width:200px;" type="email" name="login_email" required/></div>
            </div>
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-lock"></span> Password</label>
              <div><input style="width:200px;" type="password" name="login_password" required/></div>
            </div><br>
			<button type="submit" name="login_btn" class="btn btn-block" style="background-color: #82E0AA";>Done
                <span class="glyphicon glyphicon-ok"></span>
            </button>
    </form><br>
	 <br><p>Dont have an Account? Go back and click Sign Up!</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
     <!-- Modal content-->
      <div class="modal-content w3-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
          <h4><span class="glyphicon glyphicon-lock"></span> Create a New Account</h4>
        </div>
        <div class="modal-body">
           <form class="login-form" method="post" action="Start(new).php" enctype="multipart/form-data">
		   <div class="form-group">
              <label><i class="fa fa-user" aria-hidden="true"></i> First Name</label>
              <div><input style="width:250px;" type="text" name="fname" required/></div>
            </div>
			<div class="form-group">
              <label><i class="fa fa-user" aria-hidden="true"></i> Last Name</label>
              <div><input style="width:250px;" type="text" name="lname" required/></div>
            </div>
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <div><input style="width:250px;" type="email" name="email" required/></div>
            </div>
		<div class="form-group">
              <label><span class="glyphicon glyphicon-lock"></span> Password</label>
              <div><input style="width:250px;" type="password" name="password" required/></div>
          </div>
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-lock"></span> Confirm Password</label>
              <div><input style="width:250px;" type="password" name="password2" required/></div>
            </div>
			<div class="form-group">
              <label><i class="fa fa-group" aria-hidden="true"></i> Gender</label>
              <div><input type="radio" name="gender" value="Male" required> Male
			  <input type="radio" name="gender" value="Female"> Female
			  </div>
            </div><br>
			<div class="form-group">
              <label><span class="glyphicon glyphicon-calendar"></span> D.O.B</label>
              <div><input style="width:250px;" type="date" value="yyyy-mm-dd" name="date" class="input-medium search-query" onkeypress="return false"></div>
            </div><br>
			<div class="form-group">
              <label><i class="fa fa-flag" aria-hidden="true"></i> Country</label><br>
              <select name="country" id="try">
	<option value=""></option>
	<option value="AFG">Afghanistan</option>
	<option value="ALA">Åland Islands</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AND">Andorra</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla</option>
	<option value="ATA">Antarctica</option>
	<option value="ATG">Antigua and Barbuda</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia, Plurinational State of</option>
	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BVT">Bouvet Island</option>
	<option value="BRA">Brazil</option>
	<option value="IOT">British Indian Ocean Territory</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BDI">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island</option>
	<option value="CCK">Cocos (Keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo, the Democratic Republic of the</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Côte d'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CUW">Curaçao</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands (Malvinas)</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="ATF">French Southern Territories</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GGY">Guernsey</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HMD">Heard Island and McDonald Islands</option>
	<option value="VAT">Holy See (Vatican City State)</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran, Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland</option>
	<option value="IMN">Isle of Man</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JEY">Jersey</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea, Democratic People's Republic of</option>
	<option value="KOR">Korea, Republic of</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libya</option>
	<option value="LIE">Liechtenstein</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macao</option>
	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia, Federated States of</option>
	<option value="MDA">Moldova, Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestinian Territory, Occupied</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="PCN">Pitcairn</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Réunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="BLM">Saint Barthélemy</option>
	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KNA">Saint Kitts and Nevis</option>
	<option value="LCA">Saint Lucia</option>
	<option value="MAF">Saint Martin (French part)</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="VCT">Saint Vincent and the Grenadines</option>
	<option value="WSM">Samoa</option>
	<option value="SMR">San Marino</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SXM">Sint Maarten (Dutch part)</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="SGS">South Georgia and the South Sandwich Islands</option>
	<option value="SSD">South Sudan</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SJM">Svalbard and Jan Mayen</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan, Province of China</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania, United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-Leste</option>
	<option value="TGO">Togo</option>
	<option value="TKL">Tokelau</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="UMI">United States Minor Outlying Islands</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela, Bolivarian Republic of</option>
	<option value="VNM">Viet Nam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, U.S.</option>
	<option value="WLF">Wallis and Futuna</option>
	<option value="ESH">Western Sahara</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>
</select>
            </div>
			 <div class="form-group">
              <label><i class="fa fa-location-arrow" aria-hidden="true"></i> City</label>
              <div><input style="width:250px;" type="text" name="city"/></div>
            </div><br>
			<div class="form-group">
              <label><span class="glyphicon glyphicon-star"></span> Major Talent</label>
			  <div>
              <input type="radio" name="talent" value="Singer"> Singer
			  <input type="radio" name="talent" value="Guitarist"> Guitarist
			  <input type="radio" name="talent" value="Drummer"> Drummer
			  <input type="radio" name="talent" value="Pianist"> Pianist
			  <div>Other: <input type="text" name="other" /></div>
			  </div>
            </div><br>
			<button type="submit" name="register_btn" class="btn btn-block" style="background-color: #82E0AA">Done
                <span class="glyphicon glyphicon-ok"></span>
              </button>
    </form><br>
        </div>
      </div>
    </div>
  </div>
			
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	<script>
var day;
switch (new Date().getDay()) {
    case 0:
        day = "Without music, life would be a mistake. <br> Friedrich Nietzsche, Twilight of the Idols";
        break;
    case 1:
        day = "One good thing about music, when it hits you, you feel no pain. <br> Bob Marley";
        break;
    case 2:
        day = "Music expresses that which cannot be put into words and that which cannot remain silent. <br> Victor Hugo";
        break;
    case 3:
        day = "And those who were seen dancing were thought to be insane by those who could not hear the music. <br> Friedrich Nietzsche";
        break;
    case 4:
        day = "This above all: to thine own self be true, <br>And it must follow, as the night the day, <br>Thou canst not then be false to any man. <br> William Shakespeare, Hamlet";
        break;
    case 5:
        day = "And, in the end<br>The love you take<br>is equal to the love you make. <br>  Paul McCartney, The Beatles Illustrated Lyrics";
        break;
    case  6:
        day = "If music be the food of love, play on,<br>Give me excess of it; that surfeiting,<br>The appetite may sicken, and so die. <br> William Shakespeare, Twelfth Night";
}
document.getElementById("demo").innerHTML = "Quote of the Day: " + day;
document.getElementById("demo").style.color = "black";
</script>


<script>

    var myDate = new Date();
    var hrs = myDate.getHours();
	var imageID=0;

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';


    document.getElementById('lblGreetings').innerHTML =
        '<b>' + greet;

</script>
	
	<!-- Footer -->
		<footer class="w3-container w3-center w3-padding-64" id="footer">
			<p><b>Powered by Harmonic Underdogs</p>
			<p>All Rights Reserved &copy 2018</p>
		</footer>
  </body>
</html>
