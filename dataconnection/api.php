<?php

$hostname = "mysql.npbendre.com";   // eg. mysql.yourdomain.com (unique)
$username = "npbendre";   // the username specified when setting-up the database
$password = "#pushkar1";   // the password specified when setting-up the database
$database = "rhokcausecompass";   // the database name chosen when setting-up the database (unique)

// Connecting to the database
$link = mysql_connect($hostname,$username,$password);
$mysqlObj = mysql_select_db($database) or die("Unable to select database");

if (!$link)
{
	die('Could not connect: ' . mysql_error());
}

//print_r("CauseCompass!");



//$rohit = get_all_charities();
//$rohit1 = get_charity_list(1,1,1);
//print_r($rohit1);

function get_charity($charity_id)
{
	// json query to return contents of database
	$result = mysql_query("SELECT * FROM charitytable where charity_id=".$charity_id.";");
	//print_r($result);
	$rows = array();
	while($r = mysql_fetch_assoc($result)) 
	{
	    $rows[] = $r;
	}	
	$data = json_encode($rows);
	return $data;	
}

function get_all_charities()
{
	// json query to return contents of database
	$result = mysql_query("SELECT * FROM charitytable");
	$rows = array();
	while($r = mysql_fetch_assoc($result)) 
	{
	    $rows[] = $r;
	}	
	$data = json_encode($rows);
	return $data;	
}
function get_all_cause()
{
	// json query to return contents of database
	$result = mysql_query("SELECT * FROM causetable");
	$rows = array();
	while($r = mysql_fetch_assoc($result)) 
	{
	    $rows[] = $r;
	}	
	$data = json_encode($rows);
	return $data;	
}
function get_all_locations()
{
	// json query to return contents of database
	$result = mysql_query("SELECT distinct(State) FROM charitytable");
	$rows = array();
	while($r = mysql_fetch_assoc($result)) 
	{
	    $rows[] = $r;
	}	
	$data = json_encode($rows);
	return $data;	
}
function get_donation_types()
{
	// json query to return contents of database
	$result = mysql_query("SELECT * FROM charitytype");
	$rows = array();
	while($r = mysql_fetch_assoc($result)) 
	{
	    $rows[] = $r;
	}	
	$data = json_encode($rows);
	return $data;	
}

function get_charity_list($cause_id,$city_name,$charity_type)
{
	 //print_r("in the function..");
	// json query to return contents of database
	$relations_table = "causecharity";
	
	 

    $query = "SELECT * FROM charitytable cty inner join causecharity cc on cc.charity_id = cty.charity_id where cty.State like '%".$city_name."' and cause_id=".$cause_id." and charity_type=".$charity_type.";";
    	
	//print_r("Printing relations query. Query:",$query);
	//print_r($query);
	//return $query;
	
	
	$result = mysql_query($query);
	$rows = array();
	while($r = mysql_fetch_assoc($result)) 
	{
	    $rows[] = $r;
	}	
	
	$data = json_encode($rows);
	
	//$data = $query;
	return $data;	
}



$possible_url = array("get_charity_list","get_all_charities", "get_all_cause","get_charity","get_all_locations","get_donation_types");

$value = "An error has occurred";
/*
print_r($_GET["action"]);
print_r($_GET["cause_id"]);
print_r($_GET["city_name"]);
print_r($_GET["charity_type"]);
*/

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  //print_r("in if..");	
  switch ($_GET["action"])
    {
      case "get_charity_list":
      	//print_r("in switch..");
      	if (isset($_GET["cause_id"]) && isset($_GET["state"]) && isset($_GET["charity_type"]))
          $value = get_charity_list($_GET["cause_id"],$_GET["state"],$_GET["charity_type"]);
        else
          $value = "Missing argument";	
        break;
      case "get_all_charities":
        $value = get_all_charities();
        break;
      case "get_all_locations":
        $value = get_all_locations();
        break;
      case "get_donation_types":
        $value = get_donation_types();
        break;
      case "get_charity":
      	//print_r("in switch");
      	if (isset($_GET["charity_id"]))
        	$value = get_charity($_GET["charity_id"]);
        else
          $value = "Missing argument";
        break;
      case "get_all_cause":
        $value = get_all_cause();
        break;
      case "get_all_charities":
        if (isset($_GET["id"]))
          $value = get_user_by_id($_GET["id"]);
        else
          $value = "Missing argument";
        break;
    }
}

/*
print_r("call back is ..");
print_r($_GET['callback']);
print_r("the value is ");
print_r($value);
print_r("jsonp result is");
*/

$jsonVal = $_GET['callback']."(".$value.");";


return print_r($jsonVal);

?>