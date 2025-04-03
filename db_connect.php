<?php

$servername = "localhost";  // sets the servername for the database
$username = "rza";  // sets the username for the database user
$password = "rza";  // sets the password for the database user
$dbname = "rza";  // sets the database name to connect to

// this is the most secure I can make it in the environment i have
// password in plain text isnt ideal, i would use environment variables
// if i could, but not available to me in this local system

try { // try to connect to the database with the above credentials
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwor  ;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // sets error
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}