<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "sistema_crud";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("falha". $conn->connect_error);
}
?>