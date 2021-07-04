<html lang="en">
<!DOCTYPE html>
<head>
  <title>Minimart App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
<style>
  body {
   background-image: url("https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_toystory_16x9_8461039f.jpeg");
   background-attachment: fixed;
 }
 .navbar {
  background:#000000;
 }
 .nav-link,
 .navbar-brand {
  color: #ffffff;
  cursor: pointer;
  margin-left: 1em !important;
 }
 .nav-link {
  margin-right: 1em !important;

 }
 .nav-link:hover {
  color: #000;
 }
 .navbar-collapse {
  justify-content: flex-end;
 }
</style>
</head>

<body>


  <!-- navigator start -->
  <nav class="navbar navbar-expand-md" id="home">
    <!-- Brand start-->
    <a class="navbar-brand" href="#">Inventory App</a>
    <!-- Brand end -->

    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="signups.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logan.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Admin</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- navigator section end -->

<div class="container features">
 <div class="row">
 <div class="col-lg-4 col-md-4 col-sm-12">
 <h3 class="feature-title">Minimart GUC</h3>
 <img src="https://15uyg71m8dnysyc6w1eu5zg1-wpengine.netdna-ssl.com/wp-content/uploads/sites/78/2020/02/MM2.jpg.jpg" alt="1" class="img-fluid">
 <p>Galeri Usahawan Canselor (GUC) is one of minimart that operate at UPM, Serdang campus, GUC help student to find some groceries or stationery.
   This to make sure they can find groceries or stationery near the college. GUC operate by students and the price is affordable for students.</p>
 </div>

 <div class="col-lg-4 col-md-4 col-sm-12">
 <h3 class="feature-title">Open Hours</h3>
 <img src="https://lh3.googleusercontent.com/-_acW5TcV8bvYaUt3YUAL2Yz6lnYhrrGVAxuScPb6ENZHwbTAtow_joiRf3RpZVxHnZgzjnnS88uZvyu=w1080-h608-p-no-v0" alt="2" class="img-fluid">
 <p>Open from 8.00 A.M until 7.00 P.M.</p>
 </div>

 <div class="col-lg-4 col-md-4 col-sm-12">
 <h3 class="feature-title">Place</h3>
 <img src="https://richcafe.com.my/wp-content/uploads/2019/11/a-6-min-1024x576.png" alt="2" class="img-fluid">
 <p>This minimart is located at Kolej Canselor in front of baseball field.</p>
 </div>


  <script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="main.js"></script>

</body>
</html>
