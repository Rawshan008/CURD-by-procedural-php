<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_database = "student";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
if(!$conn){
    die("Connection Fail!".mysqli_connect_error());
}