<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jong";

function sanitizeInput($data) {
    // Implement your sanitization logic here
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn = new mysqli($servername, $username, $password, $dbname);


// ตอนใช้งาน
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $user = sanitizeInput($_POST["user"]);
    $password = sanitizeInput($_POST["pass"]);

    // ต่อไปทำการใช้ตัวแปร $user และ $password ต่อไป...
}

    // Hash the password (you should use a more secure hashing algorithm)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO admin (user, pass) VALUES ('$user', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";

        // Redirect to another page
        header("Location: admin.php");
        exit(); // Make sure to exit after the header to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


// Close the database connection
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">

    <label for = "user">Username</label>
    <input type = "taxt" name = "user" placeholder = "Enter your username" require>
    <br>
    <label for = "pass">Password</label>
    <input type = "taxt" name = "pass" placeholder = "Enter your password" require>
    <br>  
    <input type = "submit" name = "submit" placeholder = "Submit">

    </form>

</body>
</html>