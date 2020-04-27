  
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


// Add New Book To Book Database Table
$sql = "INSERT INTO Book (bookIsbn, bookAuthor, bookEdition)
VALUES (Isbn, Author, Edition)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
