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
if ( isset($_POST['supplier_id']) ) {
    $sql="DELETE FROM supplier WHERE supplier_id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip'=>$_POST['supplier_id']));
    $_SESSION['success'] = "Supplier deleted";
    header( 'Location: deleteSupplier.php' );
    return;
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
  <h1>Delete A Supplier</h1>
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
  <div class="field-group">
      <div>
          <label for="supplier_id">ID to Delete:</label>
      </div>
      <div>
          <input type="text" name="supplier_id" class="input-field">
      </div>
  </div>
  <div class="field-group">
      <div>
          <input type="submit" class="form-submit-button" value="Delete"/>
          <input type="submit" class="form-submit-button" name="cancel" value="Cancel" >
      </div>
  </div>


</form>
</body>
</html>
