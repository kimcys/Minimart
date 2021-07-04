<?php
require_once "pdo.php";
 ?>
 <html>
 <head>
  <title>Minimart Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
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
 h1{
   text-align: center;
 }
 body {
   font-family: Arial, Helvetica, sans-serif;
   margin: 0;
 }

 html {
   box-sizing: border-box;
 }

 *, *:before, *:after {
   box-sizing: inherit;
 }

 .column {
   float: left;
   width: 33.3%;
   margin-bottom: 16px;
   padding: 0 8px;
 }

 .card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   margin: 8px;
 }

 .about-section {
   padding: 50px;
   text-align: center;
   background-color: #474e5d;
   color: white;
 }

 .container {
   padding: 0 16px;
 }

 .container::after, .row::after {
   content: "";
   clear: both;
   display: table;
 }

 .title {
   color: grey;
 }

 .button {
   border: none;
   outline: 0;
   display: inline-block;
   padding: 8px;
   color: white;
   background-color: #000;
   text-align: center;
   cursor: pointer;
   width: 100%;
 }

 .button:hover {
   background-color: #555;
 }

 @media screen and (max-width: 650px) {
   .column {
     width: 100%;
     display: block;
   }
 }
 </style>
 </head>
 <body>

 <div class="about-section">
   <h1>Information Page</h1>
   <p>Our Minimart System Founder</p>
 </div>

 <div class="container">

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="CoopPic" data-slide-to="0" class="active"></li>
       <li data-target="BusinessHour" data-slide-to="1"></li>
       <li data-target="OurTagline" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
       <div class="item active">
         <img src="https://kuputra.com/wp-content/uploads/2018/11/IMG_20181116_115223.jpg" alt="Coop Pic" style="width:100%;">
       </div>

       <div class="item">
         <img src="https://image.freepik.com/free-vector/we-are-open-sign-concept_23-2148546188.jpg" alt="BusinessHour" style="width:100%;">
       </div>

     </div>
   </div>
 </div>


 <h2 style="text-align:center">Our Team</h2>
 <div class="row">
   <div class="column">
     <div class="card">
       <img src="1.jpeg.jpeg" alt="Hakim" style="width:100%">
       <div class="container">
         <h2>Aiman Hakim</h2>
         <p class="title">CEO & Founder</p>
         <p>Aiman Hakim Bin Azahari</p>
         <p>kimcy@gmail.com</p>
       </div>
     </div>
   </div>

   <div class="column">
     <div class="card">
       <img src="2s.jpeg" alt="Hafizan" style="width:100%">
       <div class="container">
         <h2>Hafizan Hassan</h2>
         <p class="title">Art Director</p>
         <p>Hafizan Bin Hassan</p>
         <p>Tatsutama@gmail.com</p>
       </div>
     </div>
   </div>

   <div class="column">
     <div class="card">
       <img src="3s.jpeg" alt="Akamal" style="width:100%">
       <div class="container">
         <h2>Akmal Hazim</h2>
         <p class="title">Designer</p>
         <p>Akmal Hazim Bin Zaki</p>
         <p>akmalhaziem1@gmail.com</p>
       </div>
     </div>
   </div>
 </div>



</body>
 </html>
