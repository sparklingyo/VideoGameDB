<?php

$developer_id = $_POST["developer_id"];

$servername = "localhost";
$username = "root";
$password = "PASSWORD";
$dbname = "gamedb";

/* connect to database */
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed.";
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM Developer WHERE developer_id = $developer_id"; 
if($conn->query($sql) === TRUE){ 
	echo "Record was deleted successfully."; 
} 
else{ 
	echo "ERROR: Could not able to execute $sql. " 
								. $conn->error; 
} 

$conn->close();

?> 
