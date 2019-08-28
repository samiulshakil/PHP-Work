<?php
echo 'hi i am shakil samiul';

if(!isset($_SESSION['shakil'] )){
	header("location: login.php");
}

?>