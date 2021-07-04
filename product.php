<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
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
  table th,
table td{
  text-align: left;
}
table.layout{
  width: 80%;
  border-collapse: collapse;
}
table.display{
  margin: 1em 0;
}
table.display th,
table.display td{
  border: 1px solid #82c8e6;
  padding: .5em 1em;
}

table.display th{ background: #82c8e6; }
table.display td{ background: #fff; }

table.responsive-table{
  box-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
}
  </style>

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
  <h1>Product Details</h1>
  <?php
  require_once "pdo.php";


  echo '<table class="layout display responsive-table"><tr><th> Product Code</th><th>Supplier ID</th><th>Product Name</th><th>Product Type</th><th>Price</th><th>Quantity</th></tr>';
  $stmt = $pdo->query("SELECT ProductCode,supplier_id, ProductName, ProductType,Price, quantity FROM Product");
  while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo("<tr><td>");
    echo(htmlentities($row['ProductCode']));
    echo("</td><td>");
    echo(htmlentities($row['supplier_id']));
    echo("</td><td>");
    echo(htmlentities($row['ProductName']));
    echo("</td><td>");
    echo(htmlentities($row['ProductType']));
    echo("</td><td>");
    echo(htmlentities($row['Price']));
    echo("</td><td>");
    echo(htmlentities($row['quantity']));
    echo("</td><td>");
    echo('<a href="editProduct.php?ProductCode='.$row['ProductCode'].'" class="btn btn-secondary">Edit</a> ');

  }
  ?>
</table>
<div class="col-lg-4 col-md-4 col-sm-12">
    <button onclick="document.location='addproduct.php'" class="button">Add product</button>
    <button onclick="document.location='deleteProduct.php'" class="button">Delete product</button>
  </div>
  </body>
  </html>
