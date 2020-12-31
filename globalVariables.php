<!DOCTYPE html>
<html>
<head>
	<title>Global Variables</title>
</head>
<body>
<?php  

$myNum = 12222;
function Addition() {
	Global $myNum;
	$a =5;
	$b =3;
	$c =$a + $b;
	echo $myNum."<br>";
	echo "New Global Addition" .($myNum +$c)."<br>";
	echo "Addition is {$c}<br>";
}
Addition();
echo "<hr>";

echo "SUPER GLOBAL VAR";

?>	

</body>
</html>