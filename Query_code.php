<?php
$hostName='localhost';
$authName='root';
$pass='';
$dbname='inventory';

$conn=new mysqli($hostName,$authName,$pass,$dbname);
if ( isset($_POST['cashier_name']) && isset($_POST['cashier_email'])&& isset($_POST['cashier_password']) ) {
  switch ($_POST['action']) {
    case 'registration':
      $cashier_name= $_POST['cashier_name'];
      $cashier_email= $_POST['cashier_email'];
      $cashier_password=password_hash($_POST['cashier_password'],PASSWORD_DEFAULT);
      $sql= "INSERT INTO cashier (cashier_name, cashier_email, cashier_password) VALUES ('$cashier_name','$cashier_email','$cashier_password')";
      $run_qry = mysqli_query($conn,$sql);
      if($run_qry){
        header("location:index.php");

      }
      break;
    default:
      // code...
      break;
  }
}

?>
