<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Project Title</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="login">
    <!-- <div id="bg"></div> -->
    <!-- <div class="title">
            <h1 style="color:brown; align-self: flex-start; font-size: xxx-large;"> Register </h1>
        </div> -->
    <h1>Registeration Page</h1>
    <?php if (isset($_GET['error2'])) { ?>

        <p class="error2"><?php echo $_GET['error2']; ?></p>

    <?php } ?>
    <div id="coat" style="height: 350px; padding-top: 15px; ">
        <form action="RegisterConfirmation.php" name="SignUp" method="post">

            <div class="form-css">
                <input type="text" name="Uname" placeholder="Username" required />
            </div>
            <div class="form-css">
                <input type="email" name="email" placeholder="Email" required />
            </div>

            <div class="form-css">
                <input type="password" name="pwd" placeholder="Password" required min="6" />
            </div>

            <div class="form-css">
                <input type="password" name="cpwd" placeholder="Confirm Your Password" required min="6" />
            </div>

            <div class="form-css">
                <button class="btn" type="submit" style="margin-top: 5px;">SignUp</button>
            </div>
        </form>
    </div>
</body>

</html>