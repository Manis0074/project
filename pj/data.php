<!DOCTYPE html>
<html lang="th">
<head>
    <title>เว็บไซต์ของฉัน</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <style>
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: center;
        }

        th:nth-child(4), td:nth-child(4),
        th:nth-child(5), td:nth-child(5) {
            width: 20%;
        }

        .search-form {
            position: absolute;
            top: 0;
            right: 0;
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="banner">
    <img src="image/แบนเนอร์.png" alt="แบนเนอร์">
    <!-- ปุ่มภายในแบนเนอร์ -->
    <div class="btn-group">
      <a href="index.php"><button class="btn">หน้าหลัก</button></a>
      <a href="wash.php"><button class="btn">เครื่องปรับอากาศ</button></a>
      <a href="price.php"><button class="btn">จองคิว</button></a>
      <a href="data.php"><button class="btn">เช็คการจองคิว</button></a>
    </div>

    <div class="search-form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="search">Search:</label>
            <input type="text" name="search" id="search" placeholder="Enter keyword">
            <input type="submit" name="submit" value="Search">
        </form>
    </div>
    <!-- แบบฟอร์มค้นหา -->

</div>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
    </tr>


    
    <?php
    // รายละเอียดการเชื่อมต่อฐานข้อมูล
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

    // ดึงข้อมูลทั้งหมดจากฐานข้อมูล
    $sql = "SELECT * FROM webjong";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // แสดงข้อมูลของแต่ละแถว
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['ser'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td><button>Edit</button></td>"; // เพิ่มปุ่มแก้ไข
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No data found</td></tr>";
    }

    // ปิดการเชื่อมต่อ
    $conn->close();
    ?>
</table>

</body>
</html>
