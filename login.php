<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Project Title</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body id="login">
  <!-- <div id="bg"></div> -->

  <h1>Login Page</h1>
  <?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

  <?php } ?>

  <div id="coat">
    <form action="LoginConfirmation.php" name="SignIN" target="_blank" method="post">
      <br>

      <div class="form-css-login">
        <input type="email" placeholder="Email" name="email" required />
      </div>

      <div class="form-css-login">
        <input type="password" placeholder="Password" name="pwd" required minlength="8" />
      </div>

      <h5 style="color: white">
        Don't have an account?&nbsp; <a href="register.php"> Register here. </a>
      </h5>
      <!-- &nbsp; is to add a space between things -->

      <div class="form-css-login">
        <button class="btn" type="submit" style="margin-bottom: 6px;">LogIn</button>
      </div>
    </form>
  </div>
</body>

</html>