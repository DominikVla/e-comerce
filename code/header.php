        <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        ?>
        <head>
            <title>Online Store</title>
        </head>
        <!-- Navigation-->
        <style type="text/css">
            .hide {
                visibility: hidden;
                max-width: 1px !important;
            }
        </style>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Online Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <!--
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                        !-->
                        <?php
                        session_start();
                        if (isset($_SESSION['status'])) {
                            if ($_SESSION['status']=="loggedIn"){
                                //cart
                                echo '<button class="btn btn-outline-dark" type="submit">';
                                echo    '<i class="bi bi-cart"></i>';
                                echo    'Cart';
                                echo    '<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>';
                                echo '</button>';
                                //logout
                                echo '<button type="button" class="hide">a</button>';
                                echo '<a class="btn btn-dark" type="submit" href="logout.php">';
                                echo    '<i class="bi bi-box-arrow-in-left"></i>';
                                echo    'Logout';
                                echo '</a>';
                            }
                        }   else{
                            //Register
                            echo '<a class="btn btn-outline-dark" type="submit" href="register.php">';
                            echo    '<i class="bi bi-pencil-square"></i>';
                            echo    'Register';
                            echo '</a>';
                            //login
                            echo '<button type="button" class="hide">a</button>';
                            echo '<a class="btn btn-dark" type="submit" href="login.php">';
                            echo    '<i class="bi bi-box-arrow-right"></i>
';
                            echo    'Login';
                            echo '</a>';
                            }

                        ?>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>