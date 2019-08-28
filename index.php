<!DOCTYPE html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
	  First name:<br>
	  <input type="text" name="name" required="">
	  <br>
	  Email: <br>
	  <input type="email" name="email" value="">
	  <br><br>
	  <input type="submit" value="Submit">
</form>

	<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST ['name'];
		$email = $_POST ['email'];

		

		echo "<br>";
		echo $name . "<br>";
		echo "<br>";
		echo $email . "<br>";
	}

	?>



</body>
</html>