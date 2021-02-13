<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >
	<title>Coding Challenge</title>
</head>
<body>
	<h1 class="lead text-center my-2">Write what you think should be the class name, the names of the properties for the first and last name, and the name of the method that returns hello</h1>

	<h1 class="lead">class name: User</h1>
 
	<h1 class="lead">class properties: $firstName, $lastName</h1>
 
	<h1 class="lead">class method: hello()</h1>
	<hr>
	<h1 class="lead text-center my-2">Write the class User and add the properties:</h1>
	<?php 
	class User {
		public $firstName;
		public $lastName;
	}
	?>
	<hr>
	<h1 class="lead text-center my-2">Add the method that says hello:</h1>
	<?php 
	class User1 {
		public $firstName;
		public $lastName;

		public function hello ()
		{
			return "hello";
		}
	}
	?>
	<hr>
	<h1 class="lead text-center my-2">Create the first instance, and call it $user1. Use the new keyword to create an object from the class.</h1>
	<?php  
	class User2{
		public $firstName;
		public $lastName;

		public function hello()
		{
			return "hello";
		}
	}

	$user1 = new User();

	?>
	<hr>
	<h1 class="lead text-center my-2">Set the values for the first and last name to $user1. Name John Doe</h1>
	<?php 
	class User3 {
		public $firstName;
		public $lastName;

		public function hello()
		{
			return "hello";
		}
	}

	$user1 = new User3();
	$user1->firstName = "John Doe";
	$user1->lastName = " Doe";
	?>
	<hr>
	<h1 class="lead text-center my-2">Get the user first and last name, and print it to the screen with echo.</h1>
	<?php 
	class User4 {
		public $firstName;
		public $lastName;

		public function hello()
		{
			return "hello";
		}
	}

	$user1 = new User4();
	$user1->firstName = "John ";
	$user1->lastName = " Doe";
	echo $user1->firstName . " " .$user1->lastName;
	?>
	<hr>
	<h1 class="lead text-center my-2">Use the hello() method with the first and last name variables in order to say hello to the user:</h1>
	<?php 
		class User5 {
		  public $firstName;
		  public $lastName;
		 
		  public function hello()
		  {
		    return "hello";
		  }
		}

		 
		 
		$user1 = new User5();
		$user1->firstName = 'John';
		$user1->lastName  = 'Doe';
		 
		$hello = $user1->hello();
		 
		echo $hello . ",  " . $user1->firstName . " " . $user1->lastName;

	?>
	<hr>
	<h1 class="lead text-center my-2"></h1>
	<h1 class="lead text-center my-2"></h1>

</body>
</html>

