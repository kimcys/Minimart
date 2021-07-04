<?php
require_once "pdo.php";

if (isset($_SESSION['success'])) {
  echo('<p style= "color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
  unset($_SESSION['success']);
}
  session_start();

  if( isset($_POST['cancel'])){
  session_destroy();
  header('Location: supplier.php');
  return;
}
if (isset($_POST['supplier_id']) && isset($_POST['supplier_name']) && isset($_POST['supplier_phoneno']) && isset($_POST['supplier_email']) && isset($_POST['supplier_nobank'])) {
$sql="UPDATE supplier SET supplier_name=:supplier_name, supplier_email=:supplier_email,  supplier_phoneno=:supplier_phoneno,  supplier_nobank=:supplier_nobank WHERE supplier_id=:supplier_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':supplier_id' => $_POST['supplier_id'],
        ':supplier_name' => $_POST['supplier_name'],
        ':supplier_email' => $_POST['supplier_email'],
        ':supplier_phoneno' => $_POST['supplier_phoneno'],
        ':supplier_nobank' => $_POST['supplier_nobank']));
    $_SESSION['success'] = 'Record updated';
    header( 'Location: editSupplier.php' ) ;
    return;
}
$stmt = $pdo->prepare("SELECT * FROM supplier where supplier_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['supplier_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for Supplier ID';
    header( 'Location: supplier.php' ) ;
    return;
}
$a = htmlentities($row['supplier_id']);
$p = htmlentities($row['supplier_name']);
$n = htmlentities($row['supplier_email']);
$e = htmlentities($row['supplier_nobank']);
$s = htmlentities($row['supplier_phoneno']);
$supplier_id = $row['supplier_id'];
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

<form method="post" id="frmLogin">
  <h1>Edit Supplier</h1>
  <div class="field-group">
      <div>
          <label for="supplier_id">ID:</label>
      </div>
      <div>
          <input type="text" class="input-field" name="supplier_id" value="<?= $a ?>">
      </div>
  </div>
  <div class="field-group">
      <div>
          <label for="supplier_name">Name:</label>
      </div>
      <div>
          <input type="text" class="input-field" name="supplier_name" value="<?= $p ?>">
      </div>
  </div>
  <div class="field-group">
      <div>
          <label for="supplier_email">Email:</label>
      </div>
      <div>
          <input type="text" class="input-field" name="supplier_email" value="<?= $n ?>">
      </div>
  </div>
  <div class="field-group">
      <div>
          <label for="supplier_email">Phone No:</label>
      </div>
      <div>
          <input type="text" class="input-field" name="supplier_phoneno" value="<?= $s?>">
      </div>
  </div>
  <div class="field-group">
      <div>
          <label for="supplier_email">No Bank:</label>
      </div>
      <div>
          <input type="text" class="input-field" name="supplier_nobank" value="<?= $e ?>">
      </div>
  </div>
  <div class="field-group">
      <div>
          <input type="submit" class="form-submit-button" value="Update"/>
          <input type="submit" class="form-submit-button" name="cancel" value="Cancel" >
      </div>
  </div>


<input type="hidden" name="supplier_id" value="<?= $supplier_id ?>">


</form>
</body>
</html>
