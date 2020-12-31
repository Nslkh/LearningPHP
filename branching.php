<!DOCTYPE html>
<html>
<head>
	<title>Branching Statement</title>
</head>
<body>
<?php  
$Names = array('Ali','Aliya', 'Bilal', 'Narzullo');
for ($i=0; $i <=3 ; $i++) { 
	if($Names[$i] == "Aliya") {
		break;
	}
	echo $Names[$i].	"<br>";	
}




?>


</body>
</html>