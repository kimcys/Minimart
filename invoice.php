<?php
require_once "pdo.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Minimart System</title>
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
    background: #3a96d6;
    border: 0;
    padding: 5px 0px;
    border-radius: 7px;
    color: #FFF;
    text-transform: uppercase;
    width: 30%;
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

		<h1>Restock Bill</h1>


		<?php
		$totalprice=0;
		$sum=0;
		echo '<table class="layout display responsive-table"><tr><th> Supplier ID</th><th>Supplier Name</th><th>Product Code</th><th>Product Name</th><th>Price(RM)</th><th>Quantity</th></th><th>Total Price (RM)</th></tr>';
		$stmt = $pdo->query("SELECT supplier.supplier_id,supplier.supplier_name, product.ProductCode, product.ProductName, product.Price, product.Quantity  FROM Supplier join Product On supplier.supplier_id = Product.supplier_id ");
		while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
		echo "<tr><td>".$row['supplier_id']."</td><td>".$row['supplier_name']."</td><td>".$row['ProductCode']."</td><td>".$row['ProductName']."</td>
		<td>".$row['Price']."</td><td>".$row['Quantity']."</td><td>".$totalprice=(htmlentities($row['Quantity']))*(htmlentities($row['Price']));"</td>";
		echo "</td></tr>\n";
		$sum=$totalprice+$sum;
		}
		echo "</table><h4>";
		echo "Total Monthly Bill: ";
		echo  $sum;
		echo "</h4>";
		?>

</div>
</div>

  </body>
</html>
