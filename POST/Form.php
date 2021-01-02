<?php 
if(isset($_POST['Submit'])) { 
$Username = $_POST["Username"];
$Password = $_POST["Password"];

if($Username =="Ali" && $Password == "Aliya"){
	echo "Welcome: {$_POST["Username"]}";
}else {
	echo "<h2>Account Doesn't Exists |Try again</h2>";
}
}
else{
	echo "<h2>Login Required</h2>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<fieldset>
    <legend>Simple Form</legend>
    <form  action="" method="POST" >
<label for="Username">Username:</label>
<input id="Username" type="text" name="Username"><br><br>
<label for="Password">Password:</label>
&nbsp;
<input id="Password" type="Password" name="Password"><br><br><br>
<input type="Submit" name="Submit" value="Submitted">
    </form>
    </fieldset>

</body>
</html>