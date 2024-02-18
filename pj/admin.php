<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            text-align: right;
            margin-top: 10px;
        }

        /* Style for modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="search-form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="search">Search:</label>
            <input type="text" name="search" id="search" placeholder="Enter keyword">
            <input type="submit" name="submit" value="Search">
        </form>
    </div>

    <table border="1">
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>อีเมล</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>แก้ไข</th>
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

        // การค้นหา
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST["search"];
            $sql = "SELECT * FROM webjong WHERE name LIKE '%$search%' OR email LIKE '%$search%' OR address LIKE '%$search%' OR phone LIKE '%$search%'";
            $result = $conn->query($sql);
        } else {
            // ดึงข้อมูลทั้งหมดจากฐานข้อมูล
            $sql = "SELECT * FROM webjong";
            $result = $conn->query($sql);
        }

        if ($result->num_rows > 0) {
            // แสดงข้อมูลของแต่ละแถว
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td><button onclick='openModal(
                \"{$row['id']}\", 
                \"{$row['name']}\",
                 \"{$row['email']}\", 
                \"{$row['address']}\", 
                \"{$row['phone']}\",
                \"{$row['ser']}\",
                \"{$row['data']}\",
                \"{$row['date']}\",
                \"{$row['time']}\",
                \"{$row['dress']}\", 
                )'>Edit</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }

        // ปิดการเชื่อมต่อ
        $conn->close();
        ?>

        

    </table>

    <!-- Modal -->
<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Edit Details</h2>
        <form id="editForm">
            <!-- Your form fields go here -->
            <label for="editName">Name :</label>
            <input type="text" id="editName" name="editName" value="">
            <td>
            <label for="editEmail">Email :</label>
            <input type="text" id="editEmail" name="editEmail" value="">
            <td>
            <label for="editAddress">Address :</label>
            <input type="text" id="editAddress" name="editAddress" value="">
            <td>
            <label for="editPhone">Phone :</label>
            <input type="text" id="editPhone" name="editPhone" value="">
            <td>
            <label for="editService">Service :</label>
            <input type="text" id="editService" name="editService" value="">
            <br><br>
            <label for="editDetail">Detail :</label>
            <input type="text" id="editDetail" name="editDetail" value="">
            <td>
            <label for="editDay">Day :</label>
            <input type="text" id="editDay" name="editDay" value="">
            <td>
            <label for="editTime">Time :</label>
            <input type="text" id="editTime" name="editTime" value="">
            <td>
            <label for="editWork address">Word Address :</label>
            <input type="text" id="editWork_address" name="Work_address" value="">
            <br><br>
            <input type="button" value="Save" onclick="saveChanges()">
            <input type="button" value="Delete" onclick="deleteRecord()">
        </form>
    </div>
</div>

<script>
    function openModal(id, name, email, address, phone, ser, data, date, time, dress ) {
        document.getElementById("myModal").style.display = "block";
        // Populate the form fields with the data
        document.getElementById("editName").value = name;
        document.getElementById("editEmail").value = email;
        document.getElementById("editAddress").value = address;
        document.getElementById("editPhone").value = phone;
        document.getElementById("editService").value = ser;
        document.getElementById("editDetail").value = data;
        document.getElementById("editDay").value = date;
        document.getElementById("editTime").value = time;
        document.getElementById("editWork_address").value = dress;
        // Set a custom attribute on the form to store the ID
        document.getElementById("editForm").setAttribute("data-id", id);
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    function saveChanges() {
        // Get the form data
        var id = document.getElementById("editForm").getAttribute("data-id");
        var name = document.getElementById("editName").value;
        var email = document.getElementById("editEmail").value;
        var address = document.getElementById("editAddress").value;
        var phone = document.getElementById("editPhone").value;
        var ser = document.getElementById("editService").value;
        var data = document.getElementById("editDetail").value;
        var date = document.getElementById("editDay").value;
        var time = document.getElementById("editTime").value;
        var dress = document.getElementById("editWork_address").value;

        // Use AJAX to send the updated data to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_changes.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
                closeModal();
                // Reload the page or update the table content as needed
                location.reload();
            }
        };
        xhr.send("id=" + id + 
                 "&name=" + name + 
                 "&email=" + email + 
                 "&address=" + address + 
                 "&phone=" + phone + 
                 "&ser=" + ser + 
                 "&data=" + data + 
                 "&date=" + date + 
                 "&time=" + time + 
                 "&dress=" + dress);
    }

    function deleteRecord() {
        // Get the ID
        var id = document.getElementById("editForm").getAttribute("data-id");

        // Use AJAX to send the record ID to the server for deletion
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_record.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
                closeModal();
                // Reload the page or update the table content as needed
                location.reload();
            }
        };
        xhr.send("id=" + id);
    }
</script>

</body>
</html>
