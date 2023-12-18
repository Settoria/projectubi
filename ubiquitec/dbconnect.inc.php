<?php
session_start();

$database_hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "Project_Ubiquitec";

$dbconnect = mysqli_connect($database_hostname, $database_username, $database_password, $database_name);

if (!$dbconnect) {
    die("Unable to connect to the Database, please try again later.");
};
?>