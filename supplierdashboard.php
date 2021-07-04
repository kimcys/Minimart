<?php
session_start();

require_once "authCookieSessionValidates.php";

if(!$isLoggedIn) {
    header("Location: ./");
}
?>

<html>
<head>
  <title>Minimart App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
<style>
.container{
  text-align: center;
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
.member-dashboard {
    padding: 40px;
    background: #D2EDD5;
    color: #555;
    border-radius: 4px;
    display: inline-block;
}

.member-dashboard a {
    color: #09F;
    text-decoration: none;
}
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

</style>
</head>
<body>
<nav class="navbar navbar-expand-md">
  <a class="navbar-brand" href="#">Inventory App</a>
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

<div class="container">
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
</div>
<div class="container features">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Add New Supplier</h3>
<img src="https://www.ariba.com/-/media/aribacom/page-images/02-solutions/022000_solutions-overview/0221000_supplier-management/herosuppliermanagementsimple.jpg?h=650&la=en-US&w=1600&hash=92A7DEC3012D1E74D3A9DACD06040D23BFBED886" alt="1" class="img-fluid">
<p>Register new supplier and save their details</p>
<p><button onclick="location.href='supplierCash.php'" type="button" class="button">Supplier</button></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Product</h3>
<img src="https://cdn.corporatefinanceinstitute.com/assets/product-mix3.jpeg" alt="2" class="img-fluid">
<p>Register new product and save the details</p>
<p><button onclick="location.href='productCash.php'" type="button" class="button">Product</button></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Information</h3>
<img src="https://www.icoresolutions.com/media/1521/adobestock_137926093_information_overload-converted.png?rnd=636858396900000000&crop=0,0,0,0&cropmode=percentage&center=&width=960&height=688&mode=crop&upscale=false&quality=64" alt="2" class="img-fluid">
<p>Display details about the application.</p>
<p><button onclick="location.href='Information.php'" type="button" class="button">Information</button></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Invoice</h3>
<img src="https://image.freepik.com/free-vector/invoice-flat-icon-document_149152-401.jpg" alt="2" class="img-fluid">
<p>Display details of the monthly restock</p>
<p><button onclick="location.href='invoice.php'" type="button" class="button">Billing</button></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12">
<h3 class="feature-title">Punch Card</h3>
<img src="https://img.flaticon.com/icons/png/512/2005/2005659.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF" alt="2" class="img-fluid">
<p>Attendace of cashier's time duty</p>
<p><button onclick="location.href='punchcard.php'" type="button" class="button">Punch Card</button></p>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="main.js"></script>

</body>
</html>
