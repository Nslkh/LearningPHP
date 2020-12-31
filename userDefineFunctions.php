<!DOCTYPE html>
<html>
<head>
	<title>User Define Functions </title>
</head>
<body>

<?php  
/*
function Welcome() {
	echo "Welcome to php course<br>";
}

Welcome();
echo "<hr>";

function Addition() {
	$a = 5;
	$b = 2;
	$c =$a + $b;
	echo "Addition is {$c}<br>";
}
Addition();
echo "<hr>";
function Addition_Using_Function_Param($x,$y){
	$Result = $x+$y;

echo "Addition_Using_Function_Param is:{$Result}<br>";
}
Addition_Using_Function_Param(12,3);
Addition_Using_Function_Param(144,3);
echo "<hr>";
function Addition_Using_Return($S,$Z) {
	$F = $S+$Z;
	return $F;
}
$Total =Addition_Using_Return(100,100);
$Total1 = Addition_Using_Return($Total,100);
echo $Total1;
echo "<br>";


// This code executes errors we can not redeclare
/* 
function Addition() {
	$a = 5;
	$b = 2;
	$c =$a + $b;
	echo "Addition is {$c}<br>";
}
Addition();
*/
echo "<br>";
echo "Reusability";
echo "<hr>";

function Hello(){
	echo "Hello World";
}
Hello();
?>	

</body>
</html>