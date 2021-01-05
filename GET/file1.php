<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File 1 </title>
</head>
<body>
<?php  

$name = "Aliya";
$Position = "Software Engineer & Mentor?";
?>
<a href="file2.php?name=<?php echo $name; ?>">Click</a> <br>
<a href="file2.php?name=<?php echo $name; ?>& <?php echo $Position ?>">Click2</a> <br>
<a href="file2.php?name=<?php echo $name; ?>&Position= <?php echo urlencode($Position) ?>">Click3</a>



	
</body>
</html>