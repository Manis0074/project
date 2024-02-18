<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css.css">
</head>
<body>

  

<div class="banner">
    <img src="image/แบนเนอร์.png" alt="Banner">
    <!-- Buttons inside the banner -->
    <div class="btn-group">
    <a href="index.php"><button class="btn">หน้าหลัก</button></a>
      <a href="wash.php"><button class="btn">เครื่องปรับอากาศ</button></a>
      <a href="price.php"><button class="btn">จองคิว</button></a>
      <a href="data.php"><button class="btn">เช็คการจองคิว</button></a>
    </div>
</div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- <h1>กรอกข้อมูล</h1> -->
        <form method ="POST" action = "database.php">
        <div class="mb-3">
            <label for="roomType" class="form-label">เลือกบริการที่ท่านต้องการ:</label>
            <select class="form-control" id="ser" name="ser">
              <option value="price1">ซ่อมแอร์ด่วน</option>
              <option value="price2">ล้างแอร์</option>
              <option value="price3">ติดตั้งแอร์</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">กรุณาใส่รายละเอียดของงานให้มากที่สุด เพื่อช่างของทางเราจะแจ้งราคาได้ใกล้เคียงค่าใช่จ่ายจริงได้มากที่สุด(รุ่น ยี่ห้อแอร์ ขนาดบีทียูแอร์ แอร์ติดผนังหรือ แอร์แขวน)</label>
            <input type="text" class="form-control" id="data" name="data">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">วันที่นัด:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">เวลานัด</label>
            <input type="time" class="form-control" id="time" name="time">
          </div>
          <div class="mb-3">
            <label for="checkInDate" class="form-label">สถานที่ให้บริการ (ถนน ซอย เขต)</label>
            <input type="text" class="form-control" id="address1" name="checkInDate">
          </div>
          <div class="mb-3">
            <label for="roomType" class="form-label">งบประมาณของท่าน:</label>
            <select class="form-control" id="roomType" name="budget">
              <option value="price1">400-500 บาท</option>
              <option value="price2">400-1000 บาท</option>
              <option value="price3">900-2000 บาท</option>
              <option value="price4">2000-3000 บาท</option>
              <option value="price5">3000-4000 บาท</option>
              <option value="price6">4000-5000 บาท</option>
              <option value="price6">5000-10000 บาท</option>
              <option value="price7">10000-20000 บาท</option>
              <option value="price8">20000-30000 บาท</option>
              <option value="price9">30000-50000 บาท</option>
              <option value="price10">มากกว่า 5 หมื่อนบาท</option>
            </select>
          </div>
          <div class="col-md-6">
        <h1>กรอกข้อมูล</h1>
          <div>ข้อมูลการติดต่อ</div><br>
          </div>

          <form method="post" action="database.php">
    <div>
        <label for="name">ชื่อผู้ติดต่อ</label>
    </div>
    <input type="text" class="form-control" id="name" name="name">

    <div>
        <label for="email">E-mail</label>
    </div>
    <input type="email" class="form-control" id="email" name="email">

    <div>
        <label for="address">ที่อยู่ เขต ถนน</label>
    </div>
    <input type="text" class="form-control" id="address" name="address">

    <div>
        <label for="phone">โทรศัพท์</label>
    </div>
    <input type="tel" class="form-control" id="phone" name="phone">

    <div>
      <br/>
        <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
    </div>
</form>

    </div>
    </div>
  </div>


  </body>
  </html>