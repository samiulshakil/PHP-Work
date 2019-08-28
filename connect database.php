<?php

$conn = mysqli_connect('localhost','root','','test database');



// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>