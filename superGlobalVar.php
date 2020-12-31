<!DOCTYPE html>
<html>
<head>
	<title>Super Global Variables</title>
</head>
<body>

<?php  
$x = 25;
$y = 75;
function Addition() {

	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'] ;
}

Addition();
echo $z;
?>	
</body>
</html>