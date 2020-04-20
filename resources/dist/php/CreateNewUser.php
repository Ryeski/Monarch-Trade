<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "MonarchTrade";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Add New User To Site
$sql = "INSERT INTO User (userFirstName, userLastName, userUIN, userType, userEmail)
VALUES (firstName, lastname, uin, type, email)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>