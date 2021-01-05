<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File-2</title>
</head>
<body>
<?php
echo "<pre>"; 
print_r($_GET);
$name = $_GET['name'];
echo "</pre>";
echo "<br>"; 
$Position = $_GET['Position'];
echo "</pre>"; 

echo $Position;
?>	
	
</body>
</html>
