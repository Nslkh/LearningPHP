<!DOCTYPE html>
<html>
<head>
	<title>Inside Job | Pointers</title>
</head>
<body>
<?php 	 
$numbers = array(1, 3, 4, 44, 77,33);
print_r($numbers);
echo "<hr>";

echo current($numbers). "<br>";
echo next($numbers). "<br>";
next($numbers);
echo next($numbers). "<br>";

reset($numbers). "<br>";
echo current($numbers). "<br>";
end($numbers). "<br>";
echo current($numbers). "<br>";
 echo next($numbers). "<br>";
?>


</body>
</html>