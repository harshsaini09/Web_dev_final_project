<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$servername = "localhost";

$username = "root";

$password = "Harsh@2001";

$DB = "final_project";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $DB);

 

// Check connection

if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully \n";

$sql = "INSERT INTO Database_Final_Project(name,email,phone_no,feedback)

VALUES ('$_POST[name]', '$_POST[email]','$_POST[phone]','$_POST[FB]')";

if ($conn->query($sql) === TRUE) {

    header("Location: Done.html?DONE");

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
}