<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css.css">
  <style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000; /* สีดำ */
    }

    .carousel-control-prev,
    .carousel-control-next {
        color: #fff; /* สีของไอคอน */
    }
</style>
<style>
        #myCarousel .carousel-inner .carousel-item img {
            height: 700px; /* กำหนดความสูงของรูปภาพ */
            width: 150px; /* ให้ความกว้างปรับตามสูงของรูปภาพ */
            margin: auto; /* จัดวางตรงกลาง */
        }
    </style>
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

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/เเอร์.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/แอร์2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/แอร์3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/แอร์4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/แอร์5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/แอร์6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="image/แอร์7.jpg" class="d-block w-100" alt="...">
        </div>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
