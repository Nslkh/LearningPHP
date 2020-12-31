<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
</head>
<body>
<?php  

$firstNumber = 3;
$secondNumber = 5;
$thirdNumber = 4.4;
echo $thirdNumber+1-2;
?><br>
ceil: <?php echo ceil($thirdNumber) ;  ?><br>
floor: <?php echo floor($thirdNumber) ;  ?><br>

<?php echo "is [$firstNumber] : integer", is_int($firstNumber); ?><br>
<?php echo "is [$thirdNumber] : integer", is_int($thirdNumber); ?><br>
<?php echo "is [$thirdNumber] : boolean", is_float($thirdNumber); ?><br>
<?php echo "is [$firstNumber] : boolean", is_numeric($firstNumber); ?><br>
Binary<?php echo decbin(3); ?><br>
Decimal<?php echo bindec(11); ?><br>
Sqoor root<?php echo sqrt(11); ?><br>
Modulas<?php echo fmod(15, 7); ?><br>
Absolute<?php echo abs(-50+110); ?><br>

Power<?php echo pow(2, 3) ; ?><br>
Random<?php echo  rand(); ?><br>
Random with in 1 and 10<?php echo rand(1, 10) ; ?><br>
<?php echo $secondNumber+=3; ?><br>
Increment: <?php ++$secondNumber; echo $secondNumber; ?><br>>
Decrement: <?php $secondNumber--; echo $secondNumber; ?>
</body>
</html>p