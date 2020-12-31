<!DOCTYPE html>
<html>
<head>
	<title>If statements</title>
</head>
<body>
<?php  

$weather = "Sun";
if($weather == "Sunny") {
	echo "Weather is pleasent<br>";
}elseif($weather == "Rainy") {
	echo "Its raining";
}elseif ($weather == "Cloudy") {
	echo "Cloud pleasent";
}else {
	echo "Its hard to forecast the weather";
}
echo "<hr>";
$Bought_Product = false;
if($Bought_Product) {
	echo "<h1>Thank you</h1>";
	echo "<p>Your product will be dispatch soon</p>";
}else {
	echo "<h1>Please wait </h1>";
	echo "<p>Your payment is in processing</p>";
}

echo "<hr>";

$a = 4;
$b = 2;
$c = " Resultcan no be out";
if ($b <5 && $a>0) {
	$c = $a/$b;
}
echo $c;

?>	

</body>
</html>