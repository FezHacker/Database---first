<?php // CRUD - Create, Read, Update and Delete
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// User(s) input
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$gender = $_POST["gender"];
		$age = $_POST["age"];
		$comments = $_POST["comments"];
		$password = $_POST["password"];
		
		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($password))
		{
			include("connection.php");

			mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gendner, age, comments, passowrd) VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments', '$password')");
			
			$registered = mysqli_affected_rows($dbc);
			echo $registered." row(s) is affected";

			$registered.flush();

		} else
		{
			$error_message_style =
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
					color: red;
					font-style: italic;
				}			                    
			</style>
			<center><h1><strong>ERROR_BLANK_fnd:</strong> Please fill all required fields</h1></center>
			";	
			
			echo $error_message_style;	
		}
	} else  
	{
		echo $error_message_style;
	} 
	
	
	/*
	ERROR_BLANK_fnd: Please fill all fields!
	*/
?>