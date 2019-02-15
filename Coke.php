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

<title>Coke Studio</title>
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
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    line-height: 1.8;
}
body{
	background:#ECF0F1;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('Pics/pic4.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("Pics/pic1.jpeg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("Pics/img_parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%);
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
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
  footer {
      background-color: #78281F;
      color: #FDFEFE;
      padding: 32px;
	  margin-top:20px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }

#playlist{background:#D4E6F1;width:955px;height:350px;padding:20px;margin-left:90px;list-style-type: none;border:5px solid #666}
audio{background:#666;width:400px;padding:20px;margin-left:480px;}
#playlist .active a{color:blue;text-decoration:none;}
#playlist li a{color:#922B21;padding:5px;display:inline;}
#playlist li a:hover{color:black;text-decoration:none;}

.fa-search{
	color:white;
}

.btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
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
    #image{display:none;}
	 #about{display:none;}
	  #ok1{display:none;}
	   #ok2{display:none;}
	    #ok3{display:none;}
		#model01{display:none;}
	 #footer{display:none;}

</style>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="bgimg-1 w3-opacity w3-display-container" id="ok1">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <img class="img-zoom" style="width:300px; margin-top: 430px; margin-bottom: 30px; margin-left : 800px; float: left;"
             src="Pics/ok1.png">
  </div>
</div>

<div class="content" style="margin-left:100px;margin-right:100px;">

<script>
$(function(){  // $(document).ready shorthand
  $('#myCarousel').fadeIn(1000);
  $('#nav').fadeIn(1000);
  $('#about').fadeIn(1000);
  $('#ok1').fadeIn(1000);
  $('#footer').fadeIn(1000);
  $('#ok2').fadeIn(1000);
  $('#ok3').fadeIn(1000);
  $('#image').fadeIn(1000);
  $('#model01').fadeIn(1000);
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
        <li><a href="User.php">HOME</a></li>
        <li class="active"><a href="Coke.php">COKE STUDIO</a></li>
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
<nav class="w3-sidenav w3-red w3-card-2 w3-animate-right w3-right w3-large" style="display:none;height:auto;margin-left:1000px;margin-top:80px;padding:50px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xlarge w3-right w3-display-topright" style="padding:2px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="#about" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;<b>About</b></a>
  <a href="#player" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;&nbsp;<b>Audio Player</b></a>
  <a href="#share" onclick="w3_close()" class="w3-text-white w3-hover-text-green w3-hover-white"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;<b>Share</b></a>
</nav>

<script>
window.onscroll = function (e) {  
 document.getElementById("mySidenav").style.display = "none";
}
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

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT</h3>
  <p>Coke Studio is a Pakistani music television series which features live studio-recorded music performances by various artists. 
  The show was produced by Rohail Hyatt until Season 6, and is now produced by the Pakistani band Strings. 
  It is sponsored by Coca Cola Pakistan. 
  Starting in 2008, Coke Studio has been popular throughout the country, receiving critical acclaim and frequently being rebroadcast on numerous television and radio stations.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-section">
      <p><b>Studio</b></p><br>
      <img src="Pics/pic3.jpg" style="width:300px;" class="w3-circle" alt="Photo of Me"></img>
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-section">
      <p>The program focuses on a fusion of the diverse musical influences in Pakistan, 
	  including eastern classical, folk, qawwali, ghazal, bhangra, Sufi and contemporary hip hop, rock and pop music. 
	  The show provides a platform for renowned as well as upcoming and less mainstream artists, 
	  of various genres, regions and languages, to collaborate musically in live studio recording sessions.</p>
    </div>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container" id="ok2">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div style="margin-top:40px;" class="w3-content w3-container" id="ok3">
  <h3 class="w3-center">AUDIO PLAYER</h3>
  <p class="w3-center"><em>Play Live Music!<br>Click to Expand.</em></p>

<!--<audio id="audio" preload="auto" tabindex="0" controls="" style="color:red;">
</audio>-->

<div class="w3-center" id="player">
  <h4><span class="w3-xxlarge w3-center" style="cursor:pointer;color:#922B21;" id="list"><i class="fa fa-bars"></i></span></h4>
</div></div>

<script>
// get the actual pathname:
var path = location.pathname;
// filter menu items to find one that has anchor tag with matching href:
$('#playlist li').filter(function(){
    return '/' + $('a', this).attr('href') === path;
// add class active to the item:
}).addClass('active');
</script>

<ul id="playlist">
<!-- First Div -->
        <div style="margin-left:10px;">
		<li>
            <a href="Coke Studio/Aye Rah-e-Haq- Ke Shaheedo.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span><b>&nbsp;&nbsp;Aye Rah-e-Haq ke Shaheedo - Tribute
            </a>
			<a href="Coke Studio/Aye Rah-e-Haq- Ke Shaheedo.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></b></a>
		</li>
		<li>
            <a href="Coke Studio/Sasu Mangay.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Sasu Mangay - S09E01
            </a>
			<a href="Coke Studio/Sasu Mangay.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
        <li>
            <a href="Coke Studio/Janay Na Tu.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Janay Na Tu - S09E01
            </a>
			<a href="Coke Studio/Janay Na Tu.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
        <li>
            <a href="Coke Studio/Aaja Re Moray Saiyaan.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Aaja Re Moray Saiyaan - S09E01
            </a>
			<a href="Coke Studio/Aaja Re Moray Saiyaan.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
        <li>
            <a href="Coke Studio/Aaqa.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Aaqa - S09E01
            </a>
			<a href="Coke Studio/Aaqa.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Bholay Bhalay.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Bholay Bhalay - S09E02
            </a>
			<a href="Coke Studio/Bholay Bhalay.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Afreen Afreen.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Afreen Afreen - S09E02
            </a>
			<a href="Coke Studio/Afreen Afreen.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
        <li>
            <a href="Coke Studio/Baliye.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Baliye (Laung Gawacha) - S09E02
            </a>
			<a href="Coke Studio/Baliye.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Man Kunto Maula.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Man Kunto Maula - S09E02
            </a>
			<a href="Coke Studio/Man Kunto Maula.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Khaki Banda.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Khaki Banda - S09E03
            </a>
			<a href="Coke Studio/Khaki Banda.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Dilruba Na Raazi.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Dilruba Na Raazi - S09E03
            </a>
			<a href="Coke Studio/Dilruba Na Raazi.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		</div>

<!-- Second Div -->
		<div style="margin-left:370px; margin-top:-297px;">
		<li>
            <a href="Coke Studio/Tu Hi Tu.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Tu Hi Tu - S09E03
            </a>
			<a href="Coke Studio/Tu Hi Tu.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Maula-e-Kull.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Maula-e-Kull - S09E03
            </a>
			<a href="Coke Studio/Maula-e-Kull.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Uddi Ja.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Uddi Ja - S09E04
            </a>
			<a href="Coke Studio/Uddi Ja.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Aaya Laariye.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Ayaa Laariye - S09E04
            </a>
			<a href="Coke Studio/Aaya Laariye.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Paar Chanaa De.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Paar Chanaa De - S09E04
            </a>
			<a href="Coke Studio/Paar Chanaa De.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Ala Baali.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Ala Baali - S09E04
            </a>
			<a href="Coke Studio/Ala Baali.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Main Raasta.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Main Raasta - S09E05
            </a>
			<a href="Coke Studio/Main Raasta.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Shamaan Pai Gaiyaan.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Shamaan Pai Gaiyaan - S09E05
            </a>
			<a href="Coke Studio/Shamaan Pai Gaiyaan.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
				<li>
            <a href="Coke Studio/Sadaa.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Sadaa - S09E05
            </a>
			<a href="Coke Studio/Sadaa.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Jhalliya.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Jhalliya - S09E05
            </a>
			<a href="Coke Studio/Jhalliya.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Meri Meri.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Meri Meri - S09E06
            </a>
			<a href="Coke Studio/Meri Meri.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		</div>
		
<!-- Third Div -->
		<div style="margin-left:680px; margin-top:-298px;">
		<li>
            <a href="Coke Studio/Tera Woh Pyar.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Tera Woh Pyar - S09E06
            </a>
			<a href="Coke Studio/Tera Woh Pyar.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Anokha Laadla.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Anokha Laadla - S09E06
            </a>
			<a href="Coke Studio/Anokha Laadla.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Lagi Bina.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Lagi Bina - S09E06
            </a>
			<a href="Coke Studio/Lagi Bina.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Sab Jag Soye.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Sab Jag Soye - SF
            </a>
			<a href="Coke Studio/Sab Jag Soye.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
				<li>
            <a href="Coke Studio/Tu Kuja Man Kuja.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Tu Kuja Man Kuja - SF
            </a>
			<a href="Coke Studio/Tu Kuja Man Kuja.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Nimma Nimma.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Nimma Nimma - SF
            </a>
			<a href="Coke Studio/Nimma Nimma.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/O Re.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;O Re - SF
            </a>
			<a href="Coke Studio/O Re.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Dil Kamla.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Dil Kamla - SF
            </a>
			<a href="Coke Studio/Dil Kamla.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		<li>
            <a href="Coke Studio/Rang.mp3" target="_blank" title="Play Song">
                <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;Rang - SF
            </a>
			<a href="Coke Studio/Rang.mp3" target="_blank" download>&nbsp;&nbsp;<span class="glyphicon glyphicon-download" title="Download Song" style="color:green;"></span></a>
        </li>
		</div>
    </ul>
	
<script type="text/javascript">
$('#playlist').hide();
$('#list').click(function() {
   $('#playlist').slideToggle("slow");
      event.stopPropagation();
});

</script>

<script>
    $("#playlist li").on("click", function() {
      $("#playlist li").removeClass("active");
      $(this).addClass("active");
    });
</script>
	
<script>
init();
function init(){
    var current = 0;
    var audio = $('#audio');
    var playlist = $('#playlist');
    var tracks = playlist.find('li a');
    var len = tracks.length - 1;
    audio[0].volume = .10;
    audio[0].play();
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        //run($(link),audio[0]);
    });
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        player.load();
        player.play();
}
</script>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="Pics/img01" style="max-width:100%">
  </div>
</div>
 
<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

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

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
<footer class="w3-container w3-padding-32 w3-center">
<img src="Pics/circle.jpg" style="width:120px;margin-top:-40px;-webkit-transform: rotate(180deg)"></img>
  <div class="w3-xlarge w3-padding-32" id="share"><b>Share<br>
   <a href="https://www.facebook.com/sharer/sharer.php?u=www.harmonicunderdogs.com" target="_blank" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="https://twitter.com/share?url=www.harmonicunderdogs.com" target="_blank" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
 </div>
 <p>Powered by Harmonic Underdogs</p>
 <p>All Rights Reserved &copy 2016</p>
 <a href="#myPage" style="margin-left:1000px;"><span class="glyphicon glyphicon-chevron-up"></span>&nbsp;&nbsp;Back to Top</a></b>
</footer>

</div>
</body>

</html>
