<!DOCTYPE html>
<html>
<head>
	<title>Switch statement</title>
</head>
<body>
<?php  

$weather = "sth";
switch ($weather) {
	case 'Sunny':
		echo "Weather is quite pleasent";
		break;
		case 'Rainy':
		echo "Its raining outside now";
		break;
	
		default:
		echo "Can not be forcast the weather";		
		
}
echo "<hr>";
$weather = "Sunny";
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

$Restricted_Area = 'Ali';
switch ($Restricted_Area) {
	case 'Guard':
		echo "Permission Granted";
		break;
	case 'Office boy':
	case 'Public':
	case 'Media':
		echo "Permission Denied";
		break;	
	
	default:
		echo "Chose EdutheDevs and start earning money $$$";
		break;
}

?>	

</body>
</html>