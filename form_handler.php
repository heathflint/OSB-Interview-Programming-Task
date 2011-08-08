<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Results</title>
<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/global.css" media="screen">
</head>

<body>



<?php

// define database and connect
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', 'testalpha');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'test1');
	
	$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
	
	?>

<div id="wrapper">
	<div id="main">
	<form><fieldset><legend>My Form</legend><div align="center">
    <br />
    <br />
    <br />
	<?
	// Variable for data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$message = $_POST['message'];
	$full_name = $first_name .' '. $last_name;
	
	// add to db
	$q = "INSERT INTO forms (first_name, last_name, message) VALUES ('$first_name', '$last_name', '$message')";
	
	$r = @mysqli_query ($dbc, $q);
	
	if ($r) {
		echo "<p>Thanks for your message $full_name.</p>";
	} else {
		echo "System Error";
	}
	
	
	
	exit();
	
	
		
		
	?>
    </fieldset>
    </form></div>
    </div>
    </div>
</body>
</html>