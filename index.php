<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;UTF-8"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css"/>
<link type="text/css" rel="stylesheet" href="jquery/jquery-bootstrap/jquery-ui-1.8.16.custom.css"/>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="jquery/jquery.tools.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="tutorial.js"></script>
<link type="text/css" rel="stylesheet" href="google-code-prettify/prettify.css" />
<script type="text/javascript" src="google-code-prettify/prettify.js"></script>

<!--Javascript library api  for google-->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<title>Google Chart API Tutorial</title>
</head>
<body>
<script type="text/javascript">
$('.carousel').carousel('pause');

$('#causeTypeDiv button').click(function(){
	//this.id should be used to get val
	$('#myCarousel').carousel('next');
});
</script>
<div class="light"></div>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        
     
        </div>
      </div>
</div>
<div id="masthead">
<div id="logo"></div>

</div>
 <div id="wrap">
 <div class="container">

<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
  <div class="slide-title">SLIDE TITLE</div>
    <div class="active item" id="causeTypeDiv">
    <button id="cancer" >Cancer</button>
    <button id="hurricane">Hurricane Sandy</button>
    <button id="children">Children</button>
    <button id="orphanage">Orphanage</button>
    <button id="earthquake"> Earthquake</button>
    <button id="education">Education</button>
    <button id="hunger">Hunger & Proverty</button>
    <button id="flood">Flood Relief</button>
    <button id="veterans">Veterans</button>
    <button id="oldage">Old Age Homes</button>
    <button id="animal">Animal Relief</button>
    <button id="environmental">Environmental Relief</button>
    <button id="international">International Development NGO's</button>
    <button id="patient">Patient & Family Support</button>
    <button id="performing">Performing Arts</button>
    <button id="libraries">Libraries & Historical Societies</button>
    <button id="public">Public Broadcasting and Media</button>
    <button id="peace">Peace & Human Rights</button>
    <button id="disaster">Disaster Relief</button>
  <div id="splash_search_container">
  <div id="big_search" class="searchbox clearfix">
  <form accept-charset="UTF-8" action="/search" class="search" method="get">
  <input autocomplete="off" class="text q " id="splash_q" name="q" placeholder="Enter any mood, genre, or artist" type="text">
  <input type="submit" class="search_submit" value=" "/>
  </form>
  </div>

  </div>
  
    </div>
    
    <div class="item" id="donationTypeDiv"> 
    <button id="monetary">Monetary</button>
    <button id="kind">Kind</button>
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div></div>
 <style type="text/css">
 body{background:url(http://2f-design.fr/themes/j_day_v1_3/images/patterns_dark/pattern_12.png)}
 
.light{ width: 100%;
height: 630px;
top: 0;
left: 0;
z-index: 0;
position: absolute;
background:url(images/light_bg.png) no-repeat 50% 0%;
}

#masthead {
padding-top: 60px;
margin: 0 auto;
text-align: center;
}

#logo{
	background:url(images/CCLogo.png);
	width:266px;
	height: 131px;
	margin: 0 auto;
	}

#wrap .container{padding: 20px 15px 40px 15px;
margin: 30px auto 40px auto;
width: 584px;
border: 1px solid rgba(0, 0, 0, 0.2);
background: rgba(0, 0, 0, 0.05);
box-shadow: inset 0 1px 12px rgba(0, 0, 0, 0.15),0 1px 1px rgba(255, 255, 255, 0.1);
text-align: center;
border-radius: 10px;
min-height:303px;
}

.slide-title{
	font-size: 20px;
margin-bottom: 18px;
border-bottom: 1px solid rgba(255, 255, 255, 0.26);
font-weight: normal;
color:white;
padding: 5px 0;
line-height: 36px;
height: 46px;
	}

button{
	color: white;
padding: 8px 10px;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
border: 1px solid #3D3D3D;
background-color: #01294B;
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #013764), color-stop(100%, #011B32));
background-image: -webkit-linear-gradient(top, #484949, rgba(45, 47, 49, 0.91));
background-image: -moz-linear-gradient(top, #013764, #011B32);
background-image: -ms-linear-gradient(top, #013764, #011B32);
background-image: -o-linear-gradient(top, #013764, #011B32);
background-image: linear-gradient(top, #013764, #011B32);
margin: 4px 2px;
border-radius: 2px;
	}
	
	
	#splash_search_container{
		position:relative;}
		
		#splash_search #big_search {
width: 355px;
position: relative;
left: 50%;
margin-left: -177px;
text-align: center;
margin-bottom: 5px;
}


	
	#search{
		width: 355px;
position: relative;
left: 50%;
margin-left: -177px;
text-align: center;
margin-bottom: 5px;
		
		}
		
		
		
		input.search_submit{display: block;
border: 0px none;
position: absolute;
top: 0px;
right: 0px;
width: 43px;
height: 36px;
background: transparent none;
cursor: pointer;}
</style>
</div>
</body>
</html>
