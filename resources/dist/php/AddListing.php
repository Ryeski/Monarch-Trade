 
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


// Add New Listing To Database
$sql = "INSERT INTO Item (itemTitle, itemImage, itemDescription, itemPrice, itemUserId, itemPostDate, itemPrefMeetingLocation)
VALUES (Title, Image, Description, Price, UserId, PostDate, PrefML)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
