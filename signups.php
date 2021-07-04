
<html>
<head>
  <title>Signup</title>
  <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style>
  body {
  background-image: url('https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_toystory_16x9_8461039f.jpeg');
}

#frmLogin {
  background-color: white;
	max-width: 400px;
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
  padding: 10px 10px;
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

</style>
</head>
<body>

<form action="Query_code.php" method="POST" autocomplete="off" id="frmLogin">
  <h1 id="title" class="hidden"><span id="logo">Sign Up Cashier</h1>

  <input type="hidden" name="action" value="registration">
  <div class="field-group">
    <div>
      <label for="cashier_name">Username</label>
    </div>
  </div>
  <div class="field-group">
    <div>
      <input type="text" name="cashier_name" class="input-field">
    </div>
  </div>
  <div class="field-group">
    <div>
      <label for="cashier_email">Email</label>
    </div>
  </div>
  <div class="field-group">
    <div>
      <input type="text" name="cashier_email" class="input-field">
    </div>
  </div>
  <div class="field-group">
    <div>
      <label for="cashier_password">Password</label>
    </div>
  </div>
  <div class="field-group">
    <div>
      <input type="password" name="cashier_password" class="input-field">
    </div>
  </div>

  <div class="field-group">
    <div>
      <input type="submit" name="submit" value="submit" class="form-submit-button">

      <button onclick="location.href='index.php'" type="button" class="form-submit-button">Cancel</button>

    </div>
  </div>
</form>
  </body>
  </html>
