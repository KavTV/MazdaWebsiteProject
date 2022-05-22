<?php
session_start();

if(isset($_SESSION['username'])){
  header("Location: mymazda.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles/allPageStyle.css">
  <link rel="stylesheet" href="Styles/loginPage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Document</title>
</head>

<body>

<?php
if (isset($_POST['username']) && !empty($_POST['password'])) {
  $url = sprintf("https://localhost:44307/api/User?username=%s&password=%s", $_POST['username'], $_POST['password']);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
  $response = curl_exec($ch);
  curl_close($ch);

  if ($response == "true") {
    $_SESSION['username'] = $_POST['username'];
    header("Location: mymazda.php");
  }
  else{
    $loginError = 'Forkert login';
  }
}
?>

  <div class="login-page">
    <div class="form">
      <form action="signup.php" method="POST" class="register-form">
        <input type="text" name="username" placeholder="name" />
        <input type="password" name="password"   placeholder="password" />
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form action="" method="POST" class="login-form">
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <h3 style="color: red;"><?php echo $loginError;?></h3>
        <button type="submit">login</button>
        <p class="message" id="create">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>



  <script type="text/javascript" src="JS/loginPage.js"></script>
</body>

</html>