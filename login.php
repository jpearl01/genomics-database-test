<?php 
$error = '';
if (isset($_POST['login'])) {
  session_start();
  $username = trim($_POST['username']);
  $password = sha1($username . $_POST['pwd']);
  // location of usernames and passwords
  $userlist = '/var/www/html/genomics/encrypted.txt';
  // location to redirect on success
  $redirect = 'http://10.255.6.123/genomics/genomics2/view_records/hs_records.php';
  require_once('/var/www/html/genomics/includes/authenticate.inc.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<?php
if ($error) {
  echo "<p>$error</p>";
} elseif (isset($_GET['expired'])) {
?>
<p>Your session has expired. Please log in again.</p>
<?php } ?>
<h1><a href="http://10.255.6.123/genomics/register.php">Register Here</a></h1>
<form id="form1" method="post" action="">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" id="pwd">
    </p>
    <p>
        <input name="login" type="submit" id="login" value="Log in">
    </p>
</form>
</body>
</html>
