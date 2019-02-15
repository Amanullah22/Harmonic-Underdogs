<!DOCTYPE html>
<?php
require "C:/xampp/htdocs/Harmonic_Underdogs/Connect_Users.php";
ob_start();
session_start();
if(isset($_GET['id'])) {
$id = $_GET['id'];
$_SESSION['key'] = $id;
}
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
	background:url('Pics/video.jpg');
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

#playlist{background:#D4E6F1;width:auto;margin-left:20px;height:auto;padding:20px;list-style-type: none;border:5px solid #666}
audio{background:#666;width:400px;padding:20px;margin-left:480px;}
#playlist .active a{color:blue;text-decoration:none;}
#playlist li a{color:#922B21;padding:5px;display:inline;}
#playlist li a:hover{color:black;text-decoration:none;}
</style>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="content" style="margin-left:100px;margin-right:100px;">

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
	
	if(!empty($_SESSION['key'])){
	$id = $_SESSION['key'];}
	else { }
	

	if (isset($_POST['video_btn'])){
		
		$target = "Videos/".basename($_FILES['video']['name']);
		
		$video = $_FILES['video']['name'];
		
		$sql = "UPDATE upcoming SET link = '$target',check_song ='1' WHERE id = '$id'";
		
		$file_ext=strtolower(end(explode('.',$_FILES['video']['name'])));
      
		$expensions= array("mp4","mov","3gp");
      
		if(in_array($file_ext,$expensions)=== false){
         $success ="Extension not allowed, please choose a mp4,mov or 3gp file.";
		}
		
		else if (move_uploaded_file($_FILES['video']['tmp_name'], $target)){
		$success = "Video Saved!";
		mysqli_query($con,$sql);
		}
		else {$success = "There was an Error Uploading Video";}
	    

		$_SESSION['video_success'] = $success;
		//echo $a;
		
		//die();
		header("location: User_Profile.php");
		die();
	}
?>

    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <a href="User_Profile.php" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></a>
          <h4><span class="glyphicon glyphicon-user"></span> Upload Video</h4>
        </div>
		<?php
			if(isset($_GET['id'])) {
			$user_id= $_GET['id'];
	
			$query_login = "SELECT * FROM upcoming WHERE id='$user_id'";
			$result_login = $con->query($query_login);
			while($row = $result_login->fetch_assoc()) {
			$song = $row['song_name'];
			$film = $row['film_name'];
			$date = $row['date'];
			$instrument = $row['instrument'];
			}}
			echo "<center><h3>&nbsp;&nbsp;<span class='glyphicon glyphicon-play'></span><b>&nbsp;&nbsp; $song || $film || <br>$date || $instrument</h3></center>";
			?>
        <div class="modal-body">
		  <form class="login-form" method="post" action="Image.php" enctype="multipart/form-data">
		  <div class="form-group">
              <label><span class="glyphicon glyphicon-film"></span> Choose Video </label>
              <input style="margin-left:70px;" type="file" name="video" id="video" onchange="imagepreview(this);" required>
			  <img id ="preview" style="margin-left:120px;width:50%;margin-top:10px;" />
            </div>
			<button type="submit" name="video_btn" class="btn btn-block" style="background-color: #82E0AA";>Save Video
                <span class="glyphicon glyphicon-ok"></span>
            </button>
    </form><br>
      </div>
    </div>
  </div> 


<script type="text/javascript">
$('#playlist').hide();
$('#list').click(function() {
   $('#playlist').slideToggle("slow");
      event.stopPropagation();
});
  

</div>
</body>
</html>
