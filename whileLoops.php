<!DOCTYPE html>
<html>
<head>
	<title>While loop</title>
</head>
<body>
<?php  
$p = 1;
while ($p <= 10) {
	echo "something<br>";
	$p++;
}  
echo "<hr>";
echo "The difference of them";
 for ($i=1; $i <10 ; $i++) { 
 	echo $i;
 	echo "<br>";
}

 echo "<hr>";
 echo "Fpreach loops<br>";

 $numbers = array(3, 4,66, 78, 233);
 foreach ($numbers as $num ) {
 	echo "Nubers: {$num} <br>";
 }
 echo "<hr>";
 $food = array(
 	"item_num"=>100,
 	"name"=>"Pizza",
 	"region"=>"USA",
 	"side_food"=>"Pasta",
 	"drink"=>"Cola",
 	"package_price"=>null
 );
foreach ($food as $key => $value) {
 	$data = ucwords( str_replace('_', " ", $key));
 	if($key == "package_price") {
 		if(is_null($value)) {
	 		}else
	 		{
	 	$value ="Can not be determined";
				
 	}
} 	

 	echo "{$data} : {$value}<br>";
}


?>


</body>
</html>