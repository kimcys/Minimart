<?php
require_once "pdo.php";

if (isset($_SESSION['success'])) {
  echo('<p style= "color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
  unset($_SESSION['success']);
}
  session_start();

  if( isset($_POST['cancel'])){
  session_destroy();
  header('Location: productCash.php');
  return;
}
if ( isset($_POST['ProductCode']) && isset($_POST['supplier_id'])
    && isset($_POST['ProductName']) && isset($_POST['ProductType'])&& isset($_POST['Price'])&& isset($_POST['quantity'])) {
  $sql = "INSERT INTO Product (ProductCode,supplier_id, ProductName, ProductType,Price, Quantity)
             VALUES (:ProductCode, :supplier_id, :ProductName, :ProductType, :Price, :quantity)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
      ':ProductCode' => $_POST['ProductCode'],
      ':supplier_id' => $_POST['supplier_id'],
      ':ProductName' => $_POST['ProductName'],
      ':ProductType' => $_POST['ProductType'],
      ':Price' => $_POST['Price'],
      ':quantity' => $_POST['quantity']));
  $_SESSION['success'] = "New product added";
  header( 'Location: supplierdashboard.php' );
    return;
}
?>
<title>Minimart System</title>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>
body {
   background-image: url("https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_toystory_16x9_8461039f.jpeg");
   background-attachment: fixed;
 }
 #frmLogin {
  background-color: white;
  max-width: 500px;
  margin: 0 auto;
  position: relative;
  top: 80px;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 5px 50px rgba(0,0,0,0.4);
  text-align: center;
 }

 .field-group {
     margin-top: 15px;
     align: center;
 }

 .input-field {
     padding: 7px 10px;
     width: 100%;
     border: #A3C3E7 1px solid;
     border-radius: 7px;
     margin-top: 5px
 }

 .form-submit-button {
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

 .error-message {
     text-align: center;
     color: #FF0000;
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
 <body>
    <nav class="navbar navbar-expand-md" id="home">
      <!-- Brand start-->
      <a class="navbar-brand" href="supplierdashboard.php">Inventory App</a>
      <!-- Brand end -->

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
    <form method="post" id="frmLogin">
      <h1>Add A New Product</h1>

      <div class="field-group">
          <div>
              <label for="ProductCode">Product code:</label>
          </div>
          <div>
              <input type="text" class="input-field" name="ProductCode">
          </div>
      </div>
      <div class="field-group">
          <div>
              <label for="supplier_id">Supplier ID:</label>
          </div>
          <div>
              <input type="text" class="input-field" name="supplier_id">
          </div>
      </div>
      <div class="field-group">
          <div>
              <label for="ProductName">Product Name:</label>
          </div>
          <div>
              <input type="text" class="input-field" name="ProductName">
          </div>
      </div>
      <div class="field-group">
          <div>
              <label for="ProductType">Product Type:</label>
          </div>
          <div>
              <input type="text" class="input-field" name="ProductType">
          </div>
      </div>
      <div class="field-group">
          <div>
              <label for="Price">Price:</label>
          </div>
          <div>
              <input type="text" class="input-field" name="Price">
          </div>
      </div>
      <div class="field-group">
          <div>
              <label for="quantity">Quantity:</label>
          </div>
          <div>
              <input type="text" class="input-field" name="quantity">
          </div>
      </div>
      <div class="field-group">
          <div>
            <input type="submit" class="form-submit-button" value="Add New"/ >
            <input type="submit" class="form-submit-button" name="cancel" value="Cancel" >
          </div>
      </div>
    </form>

</body>
</html>
