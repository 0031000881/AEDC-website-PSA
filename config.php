<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "workhohas1";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("unable to connect to database" . mysqli_connect_error());
};
?>