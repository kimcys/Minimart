<?php
session_start();

require_once "Auth.php";
require_once "Util.php";

$auth = new Auth();
$db_handle = new DBController();
$util = new Util();

require_once "authCookieSessionValidate.php";

if ($isLoggedIn) {
    $util->redirect("dashboard.php");
}

if (isset($_SESSION['error']) ){
  echo('<p style= "color: red;text-align: center;">'.htmlentities($_SESSION['error'])."</p>\n");
  unset($_SESSION['error']);
} elseif (isset($_SESSION['success'])) {
  echo('<p style= "color: green;text-align: center;">'.htmlentities($_SESSION['success'])."</p>\n");
  unset($_SESSION['success']);
}

if (! empty($_POST["login"])) {
    $isAuthenticated = false;

    $username = $_POST["staff_name"];
    $password = $_POST["staff_password"];

    $user = $auth->getMemberByUsername($username);
    if (password_verify($password, $user[0]["staff_password"])) {
        $isAuthenticated = true;
    }

    if ($isAuthenticated) {
        $_SESSION["staff_id"] = $user[0]["staff_id"];

        // Set Auth Cookies if 'Remember Me' checked
        if (! empty($_POST["remember"])) {
            setcookie("staff_login", $username, $cookie_expiration_time);

            $random_password = $util->getToken(16);
            setcookie("random_password", $random_password, $cookie_expiration_time);

            $random_selector = $util->getToken(32);
            setcookie("random_selector", $random_selector, $cookie_expiration_time);

            $random_password_hash = password_hash($random_password, PASSWORD_DEFAULT);
            $random_selector_hash = password_hash($random_selector, PASSWORD_DEFAULT);

            $expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);

            // mark existing token as expired
            $userToken = $auth->getTokenByUsername($username, 0);
            if (! empty($userToken[0]["id"])) {
                $auth->markAsExpired($userToken[0]["id"]);
            }
            // Insert new token
            $auth->insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date);
        } else {
            $util->clearAuthCookie();
        }
        $util->redirect("dashboard.php");
    } else {
        $message = "Invalid Login";
    }
}
?>
<html>
<head>
  <title>MINIMART APPS</title>
<style>
body {
    font-family: Arial;
    background-image: url('https://lumiere-a.akamaihd.net/v1/images/sa_pixar_virtualbg_toystory_16x9_8461039f.jpeg');

}

#frmLogin {
  background-color: white;
	max-width: 340px;
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
    padding: 10px 10px;
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
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="" method="post" id="frmLogin">
      <h1 id="title" class="hidden"><span id="logo">Log In Admin</h1>
      <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
      <div class="field-group">
        <div>
          <label for="login">Username</label>
        </div>
        <div>
          <input name="staff_name" type="text"
          value="<?php if(isset($_COOKIE["staff_login"])) { echo $_COOKIE["staff_login"]; } ?>"
          class="input-field">
        </div>
      </div>
      <div class="field-group">
        <div>
          <label for="password">Password</label>
        </div>
        <div>
          <input name="staff_password" type="password"
          value="<?php if(isset($_COOKIE["staff_password"])) { echo $_COOKIE["staff_password"]; } ?>"
          class="input-field">
        </div>
      </div>
      <div class="field-group">
        <div>
          <input type="checkbox" name="remember" id="remember"
          <?php if(isset($_COOKIE["staff_login"])) { ?> checked
          <?php } ?> /> <label for="remember-me">Remember me</label>
        </div>
      </div>
      <div class="field-group">
        <div>
          <input type="submit" name="login" value="Login"
          class="form-submit-button"></span>
            <button onclick="location.href='index.php'" type="button" class="form-submit-button">Cancel</button>
        </div>
      </div>
    </form>
</body>
</html>
