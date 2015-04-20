<!DOCTYPE html>
<html>
	<head>
		<title>User_DATABASE</title>
		<style>
			input[type="submit"]
			{
				background-color: white; /* #0066FF */
				border-color: black; /* #00CC00 */
				font-size: 20px;
				height: 50px;
				width: 100px;
			}
			input[type="submit"]:hover
			{
				background-color: black; /* #00CC00 */
				border-color: white; /* #0066FF */
				color: white
			}
			input[type="text"]
			{
				background-color: white; /* #0066FF */
				border-color: black; /* #00CC00 */
				font-size: 20px;
			}
			input[type="password"]
			{
				background-color: white; /* #0066FF */
				border-color: black; /* #00CC00 */
				font-size: 20px;
			}
			textarea
			{
				background-color: white; /* #0066FF */
				border-color: black; /* #00CC00 */
				font-size: 20px;
			}
			p
			{
				color: #0066FF;
				font-size: 20px;
			}
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
		</style>
	</head>
	<body>
		<center><h1>Sign up Form - MLT</h1></center>
		<form action="processing.php" method="post">
		<center><p>First Name:</p><input type="text" name="fname" size="20" maxlength="50" /></center>
		<br /><hr />
		<center><p>Last Name:</p><input type="text" name="lname" size="20" maxlength="50" /></center>
		<br /><hr />
		<center><p>Email:</p><input type="text" name="email" size="40" maxlength="50" /></center>
		<br /><hr />
			<center><p>Gender: <input type="radio" name="gender" value="M" /> Male 
			<input type="radio" name="gender" value="F" /> Female</p>
			<br /><hr />
			<p>Age: <select name="age">
					<option value="0-29">Under 30</option>
					<option value="30-60">Between 30 and 60</option>
					<option value="60+">Over 60</option>
			   </select></p>
			   <br /><hr />
			<p>Comments: <br /><textarea name="comments" rows="3" cols="40" maxlength="200"></textarea></p>
			<br /><hr /></center>
    <center><p>Password:</p><input type="password" name="password" maxlength="50"></p></center>
      	<br /><hr />		
			<center><p><input type="submit" name="submit" value="Submit" /></p></center>
		</form>

		<a href="output.php">Check all <em>Currect_Records</em> for the Datadase</a>

</body>
</html>