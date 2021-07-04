<?php
session_start();
if(isset($_POST['reset'])){
  $_SESSION['attendance'] = array();
  header("Location: punchcard.php");
  return;
}
if(isset($_POST['checkin'])){
  if ( !isset ($_SESSION['attendance']) )
  $_SESSION['attendance'] = array();
  $_SESSION['attendance'] [] = array(
    "CashierName" => $_POST['CashierName'],
    "datetime" => $_POST['DateTime']);
    header("Location: punchcard.php");
    return;
  }
  ?>
  <html>
  <head>
    <title>Minimart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
    body {
      background-image: url("https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_toystory_16x9_8461039f.jpeg");
      text-align: center;
    }
    h1 {
      margin-top: 4%;
      text-align: center;
      color: #fff;
      font-family: monospace;
      font-size: 30px;
    }
    p{
      text-align: center;
      font-family: monospace;
      font-size: 15px;
      color: #fff;
    }
    form {
      display: inline-block;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }
    input {
      width: 100%;
      height: 25px;
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
      <a class="navbar-brand" href="supplierdashboard.php">Inventory App</a>
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
    <h1>Attendance Record</h1>
    <form method="POST" action="punchcard.php">
      <p><label for="name">Cashier Name</label></p>
      <p><input type="text" name="CashierName"></p>
      <p><label for="datetime">Date & Time</label></p>
      <p><input type="datetime-local" name="DateTime"></p>
      <button type="submit" name="checkin" >Check-in</button>
      <button type="submit" name="reset" onclick="return confirm('Are you sure want to reset?')" >Reset</button>
    </form>

    <div id="currentattandancelist">
        <img src="https://i.pinimg.com/originals/26/af/26/26af26707d7d0da6d5bc930788cfc868.gif" height="80px" width="100px" alt="Loading..."/>
      </div>
      <script type="text/javascript" src="jquery.min.js"></script>
      <script type="text/javascript">
          function updateAttandance() {
              window.console && console.log('Requesting JSON');
              $.getJSON('attendancelist.php', function(rowz){
               window.console && console.log('JSON Received');
                 window.console && console.log(rowz);
                 $('#currentattandancelist').empty();
                for (var i = 0; i < rowz.length; i++) {
                    entry = rowz[i];
                      $('#currentattandancelist').append(
                        '<p>&nbsp;&nbsp;'+(i+1) +
                        '-<br/>&nbsp;&nbsp;Cashier Name:'+entry["CashierName"] +
                        '<br/>&nbsp;&nbsp;Date:'+entry["datetime"] + "</p>\n");
                 }
                 setTimeout('updateAttandance()', 4000);
            });
        }

        $(document).ready(function() {
            $.ajaxSetup({ cache: false });
            updateAttandance();
        });
      </script>
</body>
</html>
