<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;UTF-8"/>
<meta http-equiv="Content-Style-Type" content="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="/css/causecompass.css"/>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<link type="text/css" rel="stylesheet" href="/bootstrap/css/bootstrap-responsive.min.css"/>
<link type="text/css" rel="stylesheet" href="/jquery/jquery-bootstrap/jquery-ui-1.8.16.custom.css"/>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="/jquery/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="/jquery/jquery.tools.min.js"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="/google-code-prettify/prettify.css" />
<script type="text/javascript" src="/google-code-prettify/prettify.js"></script>

<!--Javascript library api  for google-->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

<!-- Javascript for this page specifically -->
<script type="text/javascript" src="/js/charity.js"></script>
<script type="text/javascript">
/**
 * Note: this page requires being passed the parameter ?c={id}
 *       in absence of this parameter it will redirect back to
 *       /index.php
 */
var charityId = "<?=$_GET["c"]?>";
var donationType = "<?=$_GET["t"]?>";
if(!charityId || !donationType) {
	//window.location.href = "/";
	console.log("error loading charity page");
}

CHARITY(charityId);

//yup a hack....but it's a hackthon!
if(donationType == '2'){
	$('#donateBtn').removeClass('hide');
}
</script>

<title>Cause Compass</title>
</head>
<body>

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
              <li><a href="#">About Us</a></li>			               
            </ul>
          </div>
        </div>
      </div>
</div>   
<div class="container" id="charityDescription">		
	<h1 id="name"></h1>	
	<br>
	<h3 id="desc"></h3>	
	<br>
	<h5>Phone Number:<span id="phone"></span></h5>	
	<br>
	<h5>Web Site:<span id="link"><a></a></span></h5>
	<br>
	<button class="btn btn-large btn-primary hide center" type="button" id="donateBtn">Donate Now!</button>
	<div id="inKindModal" class="modal hide fade" data-backdrop="static">
		<div class="modal-header">
			<h2>Submit In-Kind Donation</h2>
		</div>
		<div class="modal-body">
		INSERT FORM CONTENT
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" id="cancelBtn">Cancel</button>
			<button class="btn btn-primary" id="submitBtn">Submit</button>
		</div>
	</div>

</div>

 
</body>
</html>
