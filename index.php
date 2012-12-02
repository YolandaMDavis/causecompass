<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;UTF-8"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css"/>
<link type="text/css" rel="stylesheet" href="jquery/jquery-bootstrap/jquery-ui-1.8.16.custom.css"/>
<link type="text/css" rel="stylesheet" href="css/causecompass.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="jquery/jquery.tools.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="google-code-prettify/prettify.css" />
<script type="text/javascript" src="google-code-prettify/prettify.js"></script>

<!--Javascript library api  for google-->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/causes.js"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7Vh5Fpo4NTBsqzOe_3XujusI8jMqvr3A&sensor=false"> </script>
<title>Cause Compass</title>
</head>
<body>

<div class="light"></div>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://causecompass.herokuapp.com/">Cause Compass</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/about/">About Us</a></li>			               
            </ul>
          </div>
        </div>
      </div>
</div>  

<div id="masthead">
<div id="logo"></div>
</div>

 <div class="container" id="searchWizard">

	<div id="myCarousel" class="carousel slide">
	  <!-- Carousel items -->
	  <div class="carousel-inner">
		<div class="active item" id="causeTypeDiv">
			<div class="slide-title">Select a Cause...</div>
		</div>
		<div class="item" id="searchContainerDiv">
		  
		  <div class="slide-title">	  
		  <span class="span1">
		  <a class="btn backBtn" href="#"><i class="icon-arrow-left"></i></a>
		  </span>
		  <span class="span4">
		  What kind of donation are you giving?
		  </span>
		  </div>
		</div>   
		<div class="item" id="donationTypeDiv"> 
		  <div class="slide-title">	 
		  <span class="span1">
		  <a class="btn backBtn" href="#"><i class="icon-arrow-left"></i></a>
		  </span>
		  <span class="span4">
		  Where do you want to give?
		  </span>
		  </div>
		  
		</div>
	  </div>  
	</div>	
	
</div>

<div class="container hide" id="mapResults">
<!---Begin Google Map-->	
	<div class="row">
		<div class="span2">	   
			<table id="charityTable"></table>	  
		</div>	  
		<div class="span10">
			<div id="charityMap" style="width: 100%; height: 75%">	  
			</div>
		</div>
	</div>
</div>
 
<div style="display:none;" class="nav_up" id="nav_up"></div>
<div style="display:none;" class="nav_down" id="nav_down"></div> 
<script type="text/javascript">
		$('#nav_up').fadeIn('slow');
		$('#nav_down').fadeIn('slow');  
		var $elem = $('body');
		$('#nav_down').click(
			function (e) {
				$('html, body').animate({'scrollTop': $elem.height()},2000);
			}
		);
		$('#nav_up').click(
			function (e) {
				$('html, body').animate({scrollTop: '0px'}, 1500);
			}
		);
</script>

<div id="page_count">
<?php

	if (file_exists('count')) 
	{
		$fil = fopen('count', r);
		$dat = fread($fil, filesize('count')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('count', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count', w);
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}
?>
</div>

</body>
</html>
