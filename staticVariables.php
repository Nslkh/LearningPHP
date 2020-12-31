<!DOCTYPE html>
<html>
<head>
	<title>Static Variables</title>
</head>
<body>
<?php  
function NormalV() {
	$value = 1;
	echo $value."<br>";
	 $value++;
}

NormalV();
NormalV();
NormalV();

 function staticVar(){
 	static $value = "1";
	echo $value." Static<br>";
	$value++;
 }
 staticVar();
 staticVar();
 staticVar();
?>


</body>
</html>