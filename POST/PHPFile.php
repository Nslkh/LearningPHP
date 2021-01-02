<!DOCTYPE html>
<html>
<head>
	<title>PHP File</title>
</head>
<body>
<?php 
print_r($_POST);


$Username =$_POST["Username"];
$Password =$_POST["Password"];
$Submit =$_POST["Submit"];
if(isset($_POST["Submit"])) {
	echo "Successfull Login<br>";
	echo "Welcome: {$Username}";
	echo "<br>";
	echo "Password: {$Password}";
}
/*
echo "<hr>";
if(isset($Username)&& !empty($Username)) {
	echo "Username is set with the name of: {$Username}";
}else{
	echo "No username detected<br>";
}
echo "<br>";

if(isset($Password)&& !empty($Password)) {
	echo "Password is set with the name of: {$Password}";
}else{
	echo "No password detected<br>";
}
*/

if(isset($POST["Username"])) {
	$Username = $_POST["Username"];
	echo "$Username<br>";
}
else{
	$Username= "";
}

if(isset($POST["Password"])) {
	$Password = $_POST["Password"];
	echo "$Password<br>";
}
else{
	$Password= "";
}

?>
</body>
</html>