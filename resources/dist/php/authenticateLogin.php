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


// Query the database for user information
$Name = $POST['username']
$Password = $POST['password']

$result = mysql_query("select * from users where username = '$Name' and password = '$Password' ")
    or die ("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if(row['username'] == $Name && $row['password'] == $Password ){
  echo "Login Successful! " Welcome To Monarch Trade ", $row['username'];
} 
  else { 
        echo "Failed to authenticate credentials!";
  }
        
$conn->close();
?>
