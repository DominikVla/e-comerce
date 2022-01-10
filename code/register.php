<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <!-- Section-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="wrapper fadeInDown">
                  <div id="formContent" style="width: 900px;">
                    <!-- Login Form -->
                    <form style="width: 900px;" action="registration.php" method="POST">
                      <h2 style="color: #949194;">Register</h2><br>
                      <input type="text" id="login" class="fadeIn second" name="fname" placeholder="First Name" style="width:40%;">
                      <input type="text" id="login" class="fadeIn third" name="lname" placeholder="Last Name" style="width:40%;"><br>
                      <input type="text" id="login" class="fadeIn fourth" name="login" placeholder="Email" style="width:40%">
                      <input type="text" id="password" class="fadeIn fifth" name="password" placeholder="password" style="width:40%"><br>
                      <input type="text" id="password" class="fadeIn fifth" name="address" placeholder="Address" style="width:50%"><br>
                      <input type="submit" class="fadeIn sixth" value="Log In">
                    </form>

                    <!-- Login Redirect -->
                    <div id="formFooter">
                      <a class="underlineHover" href="login.php">Already have an account? Login!</a>
                    </div>

                  </div>
                </div>
            </div>
        <!-- Footer-->
        <?php include 'footer.php';?>
    </body>
</html>

