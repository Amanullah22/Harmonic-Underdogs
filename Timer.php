<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="lightbox2-master\lightbox2-master\dist\css\lightbox.css" rel="stylesheet">
    <link rel="shortcut icon" href="2.jpg">

    <title>Harmonic Underdogs</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  </head>
  
  <style>
  body {
    overflow:hidden;
}
  #circle1 {
      width: 120px;
      height: 120px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 50%;
	  border:5px solid white;
	  text-align: center;
      vertical-align: middle;
	  line-height: 110px; 
    }
	#circle2 {
      width: 120px;
      height: 120px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 50%;
	  border:5px solid white;
	  text-align: center;
      vertical-align: middle;
	  line-height: 110px; 
    }
	#circle3 {
      width: 120px;
      height: 120px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 50%;
	  border:5px solid white;
	  text-align: center;
      vertical-align: middle;
	  line-height: 110px; 
    }
	#circle4 {
      width: 120px;
      height: 120px;
      -webkit-border-radius: 25px;
      -moz-border-radius: 25px;
      border-radius: 50%;
	  border:5px solid white;
	  text-align: center;
      vertical-align: middle;
	  line-height: 110px; 
    }
	#poster{
		width:70px;
		position:center;
		margin-top:50px;
		border:2px solid white;
		float:right;
		margin-right:5px;
	}
  </style>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>HarmonicUnderdogs.com</b> is coming soon...</h1>
            </header>
            <!-- START TIMER -->
            <div id="clockdiv" data-animated="FadeIn" style="overflow: hidden;">
                <p>Our Website is in Process</p>
                <b><center><div id="circle1" style="float: left;margin-left: 250px;"><span class="days"></span>&nbsp;Days</div>
                <div id="circle2" style="margin-left: -200px;"><span class="hours"></span>&nbsp;Hours</div>
                <div id="circle3" style="float: right;margin-right: 450px;margin-top: -118px;"><span class="minutes"></span>&nbsp;Minutes</div>
                <div id="circle4" style="float: right;margin-right: -300px;margin-top: -118px;"><span class="seconds"></span>&nbsp;Seconds</div></center></b>
            </div>
            <!-- END TIMER -->
            <div class="col-lg-4 col-lg-offset-4 mt centered">
            	<h4>SUBSCRIBE</h4>
				<form class="form-inline" role="form" method="POST" action="Thankyou.php">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail2">Email address</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
				  </div>
				  <button type="submit" class="btn btn-info" name="submit">Submit</button>
				 </form>
				 <br>
				 <p>Powered by Harmonic Underdogs<br>
				 All Rights Reserved &copy 2016</p>
			</div>
			
			<a href="Pics/Harmonic Underdogs.jpg" data-lightbox="example-1" title="View Poster" data-title="Harmonic Underdogs Poster">
			<img src="Pics/Harmonic Underdogs.jpg" id="poster" class="example-image">
			</a>
            
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="Music_slide.jpg">
                <img src="Pics/Music_slide.jpg">
              </li>
              <li data-transition="slideright" data-slotamount="1" data-thumb="Music_slide2.jpg">
                <img src="Pics/Music_slide2.jpg">
              </li>
              <li data-transition="slideup" data-slotamount="1" data-thumb="Music_slide3.jpg">
                <img src="Pics/Music_slide3.jpg">
              </li>
              <li data-transition="slidedown" data-slotamount="1" data-thumb="Music_slide4.jpg">
                <img src="Pics/Music_slide4.jpg">
              </li>
            </ul>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->
	
	<script>
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = 'December 20 2016';
initializeClock('clockdiv', deadline);
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
	<script src="lightbox2-master\lightbox2-master\dist\js\lightbox.js"></script>
  </body>
  <!-- END BODY -->
</html>
