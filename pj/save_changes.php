<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jong";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$ser = $_POST["ser"];
$data = $_POST["data"];
$date = $_POST["date"];
$time = $_POST["time"];
$dress = $_POST["dress"];

// Update data in the database
$sql = "UPDATE webjong SET 
        name='$name', 
        email='$email', 
        address='$address', 
        phone='$phone', 
        ser='$ser', 
        data='$data', 
        date='$date', 
        time='$time', 
        dress='$dress' 
        WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
