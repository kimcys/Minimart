<html>
<?php
session_start();

require_once "authCookieSessionValidate.php";

if(!$isLoggedIn) {
    header("Location: ./");
}


?>
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
 .button {
   background: #000000;
   border: 0;
   padding: 5px 5px;
   border-radius: 7px;
   color: #FFF;
   text-transform: uppercase;
   width: 30%;
   overflow: hidden;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: fit-content;

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
<nav class="navbar navbar-expand-md">
  <a class="navbar-brand" href="dashboard.php">Inventory App</a>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<?php
if ( isset($_SESSION['failure']) )
{
  // Look closely at the use of single and double quotes
  echo('<p style="color: red;">'.htmlentities($_SESSION['failure'])."</p>\n");
  unset($_SESSION['failure']);
}
else if (isset($_SESSION['success']))
{
  echo('<p style="color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
  unset($_SESSION['success']);
}
?>


<div class="container features">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Product</h3>
<img src="https://www.quantzig.com/wp-content/uploads/2019/06/benefits-supplier-performance-management.jpg" alt="1" class="img-fluid">
<p>Add New Product</p>
<p>Edit New Product</p>
<p>Delete New Product</p>
<p><button onclick="location.href='product.php'" type="button" class="button">Product</button></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Supplier</h3>
<img src="https://productmanagementfestival.com/wp-content/uploads/2017/01/sell-your-product-online.jpg" alt="2" class="img-fluid">
<p>Add New Supplier</p>
<p>Edit New Supplier</p>
<p>Delete New Supplier</p>
<p><button onclick="location.href='supplier.php'" type="button" class="button">Supplier</button></p>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="main.js"></script>

</body>
</html>
