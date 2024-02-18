<?php include 'connect.php'; ?>


<?php
// database.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    // TODO: Process and insert data into the database
    // Example:
    $conn = mysqli_connect("localhost", "root", "", "jong");
    $query = "INSERT INTO webjong (name, email, address, phone) VALUES ('$name', '$email', '$address', '$phone')";
    mysqli_query($conn, $query);
    mysqli_close($conn);

    // Redirect to data.php with URL parameters
    header("Location: data.php?name=$name&email=$email&address=$address&phone=$phone");
    exit();
}

// Fetch data from the database (assuming you have a connection)
// Example:
// $dbConnection = mysqli_connect("hostname", "username", "password", "database");
// $selectQuery = "SELECT * FROM tableName";
// $result = mysqli_query($dbConnection, $selectQuery);
// $data = mysqli_fetch_assoc($result);
// mysqli_close($dbConnection);
?>