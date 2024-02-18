<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jong";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากการ POST
$id = $_POST['id'];

// สร้างคำสั่ง SQL สำหรับการลบข้อมูล
$sql = "DELETE FROM webjong WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
