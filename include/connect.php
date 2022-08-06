<?php

$server_name = "localhost";
$user_name = "orsch_user";
$password = "123456";
$database = "orsch_PROJECT";

$conn = new mysqli($server_name, $user_name, $password, $database);
if ($conn->connect_error) {
    die("Error connecting: " . $conn->connect_error);
}

?>