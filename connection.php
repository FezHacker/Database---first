<?php

	$hostname = "localhost";
	$username = "root";
	$password_one = "";
	$dbname = "myfirstdatabase";

	// Connection to mySQL DATABASE
	$dbc = mysqli_connect($hostname, $username, $password_one, $dbname) OR die("Connection to _DATABASE lost! DB_ERROR_ALERT: ".mysqli_connect_error());
	
	// encoding UTF-8
	mysqli_set_charset($dbc, "utf8");
	
	# echo "Connection successful, connected to: connect_".$dbname."_DATABASE";
	
	$style = 
	"
	<style>
		h1 {
			border-style: solid;
			border-color: black;
			font-size: 20px;
			height: 100px;
			vertical-align: middle;
			line-height: 100px;
		}
		h1:hover {
			border-color: white;
			color: white;
			background-color: black;
		}
		strong {
			font-style: italic;
			color: limegreen;
		}
	</style>
	<center><h1><em>Connection successful</em>, connected to: <strong>connect_".$dbname."_DATABASE</strong>";
	
	echo $style;
	
?>