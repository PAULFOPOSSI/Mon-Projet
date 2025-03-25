<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "newbd";

// connecton a la bd 
$conn = new mysqli($host, $username, $password, $database);
if ($conn -> connect_error) {
    die("failed to connect".$conn -> connect_error);
}

echo "Succesfully Conneted"

?>