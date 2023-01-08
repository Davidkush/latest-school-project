<?php
// Connect to the database
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bank_db";

// Create connection
if(!$con = mysqli_connect($host, $username, $password, $dbname))
{
    die("Failed to connect");
}else{
    print("Connection is successful");
}

// Check connection
