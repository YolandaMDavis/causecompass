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
    <div class="active item" id="causeTypeDiv">
		<div class="slide-title">Select a Cause...</div>
		<button class="btn" id="cancer" >Cancer</button>
		<button class="btn" id="hurricane">Hurricane Sandy</button>
		<button class="btn" id="children">Children</button>
		<button class="btn" id="orphanage">Orphanage</button>
		<button class="btn" id="earthquake"> Earthquake</button>
		<button class="btn" id="education">Education</button>
		<button class="btn" id="hunger">Hunger & Proverty</button>
		<button class="btn" id="flood">Flood Relief</button>
		<button class="btn" id="veterans">Veterans</button>
		<button class="btn" id="oldage">Old Age Homes</button>
		<button class="btn" id="animal">Animal Relief</button>
		<button class="btn" id="environmental">Environmental Relief</button>
		<button class="btn" id="international">International Development NGO's</button>
		<button class="btn" id="patient">Patient & Family Support</button>
		<button class="btn" id="performing">Performing Arts</button>
		<button class="btn" id="libraries">Libraries & Historical Societies</button>
		<button class="btn" id="public">Public Broadcasting and Media</button>
		<button class="btn" id="peace">Peace & Human Rights</button>
		<button class="btn" id="disaster">Disaster Relief</button>
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
	  
	  <button class="btn" id="monetaryBtn">Monetary</button>	  
	  <button class="btn" id="inkindBtn">In-Kind</button>
	  
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
	  <br>
	  <div class="span3">
      <form class="form-horizontal" id="locationForm">
		  <div class="control-group">
			<label class="control-label" for="city">City</label>
			<div class="controls">
				<input id="city" name="city" type="text" placeholder="City" class="input-large"/>
			</div>
		  </div>
		<div class="control-group">	
		<label class="control-label" for="inputEmail">State</label>
			<div class="controls">
			  <select name="stateCode" id="stateCode">
					<option value="">Select...</option>	
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AS">American Samoa</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="AE">Armed Forces</option>
					<option value="AA">Armed Forces (Americas)</option>
					<option value="AP">Armed Forces (Pacific)</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="GU">Guam</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="PR">Puerto Rico</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VI">Virgin Islands</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>				
			</div>
		</div>				
	  </form>
	  </div>
	  <div>
	  <button type="button" class="btn">Sign in</button>
	  </div>
    </div>
  </div>  
</div>

</div>
 
</div>

<script type="text/javascript">
$('.carousel').carousel('pause');

$('#causeTypeDiv .btn').click(function(){
	//this.id should be used to get val	
	$('#myCarousel').carousel('next');
});

$('#donationTypeBtn').click(function(){
	//this.id should be used to get val	
	$('#myCarousel').carousel('next');
});

$('#monetaryBtn').click(function(){
	//this.id should be used to get val	
	$('#myCarousel').carousel('next');
});

$('#inkindBtn').click(function(){
	//this.id should be used to get val	
	$('#myCarousel').carousel('next');
});

$('.backBtn').click(function(){
	//this.id should be used to get val	
	$('#myCarousel').carousel('prev');
});

</script>


</body>
</html>
