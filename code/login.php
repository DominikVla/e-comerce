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
            <div class="container px-4 px-lg-5 mt-5" style="border-color: red;">
                <div class="wrapper fadeInDown">
                  <div id="formContent">
                    <!-- Login Form -->
                    <form action="verify.php" method="POST">
                        <h2 style="color: #949194;">Login</h2><br>
                      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
                      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
                      <input type="submit" class="fadeIn fourth" value="Log In">
                    </form>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                      <a class="underlineHover" href="register.html">New? Register Now!</a>
                    </div>

                  </div>
                </div>
            </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

