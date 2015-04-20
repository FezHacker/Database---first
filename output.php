<?php 
	include("connection.php");

	$r = mysqli_query("SELECT * FROM users");

	while($row = mysqli_fetch_array($r))
	{
		echo $row["first_name"]."/".$row["last_name"]."/".$row["password"];
	}
?>