<?php
	echo $_FILES['image']['name'].'<br>';
	echo $_FILES['image']['size'].'<br>';
	echo $_FILES['image']['tmp_name'].'<br>';
	
	$filename= 'upload/'.$_FILES['image']['name'];
	
	move_uploaded_file($_FILES['image']['tmp_name'],$filename);
?>