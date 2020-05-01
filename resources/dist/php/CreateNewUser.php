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
$Name = $POST['username']
$Email = $POST['email']
$Password = $POST['password']

$sql = "INSERT INTO User (userName, userEmail, userPassword)
VALUES ('$Name', '$Email', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("refresh:2; url=accountRegistration.html")
    
$conn->close();
?>
