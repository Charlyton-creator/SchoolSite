
<?php
require_once('../../utilities/init.php');
if(isset($_GET['action']) && $_GET['action'] == "deconnexion"){
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--ICONSCOUT ICON  LINK   -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONTS (MONTSERRAT)  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300; 400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- SWIPER JS  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <link rel="stylesheet" href="../../style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="">







<nav>
        <div class="container nav_container">
            <a href="index.php"><h4>MyPhiladelphie</h4></a>
            <ul class="nav_menu">
                <li><a href="../../views/index.php">Home</a></li>
                <li><a href="http://">Formations</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="../AdminSchoolPanel/Dashboard/login.php">Espace Membre</a></li>
                <li><a href="../../views/about.php">A Propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <div class="container" id="login_container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-transparent">
                                <img src="../../img/school.jpg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenu!</h1>
                                    </div>
                                    <form class="user" method="POST" action="../../utilities/getConnected.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="" aria-describedby="emailHelp"
                                                placeholder="Enter your status" name="statut">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" name="manager" type="submit" value="manager">
                                            Login
                                        </button>
                                        <hr>
                                        <button href="index.php" class="btn btn-google btn-user btn-block" name="eleve" value="eleve">
                                            <i class="fab fa-google fa-fw"></i> Se connecter en tant que élève
                                        </button>
                                        <button href="index.php" class="btn btn-facebook btn-user btn-block" name="professeur" value="professeur">
                                            <i class="fab fa-facebook-f fa-fw"></i> Se connecter en tant que professeur
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php" name="message" value="forgot">Vous avez oublié votre mot de passe?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Faites votre demande d'inscription maintenant!!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <footer class="contact_form">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.php" class="footer_logo"><h4>MYPHILADELPHIE</h4></a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, delectus!
                </p>
            </div>

            <div class="footer_2">
                <h4>Liens Rapides</h4>
                <ul class="permalinks">
                    <li><a href="http://"></a></li>
                    <li><a href="http://"></a></li>
                    <li><a href="http://"></a></li>
                    <li><a href="http://"></a></li>
                    <li><a href="http://"></a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="http://">Privacy Policy</a></li>
                    <li><a href="http://">Terms and Conditions</a></li>
                    <li><a href="http://"></a>Refund Policy</li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Nous contacter</h4>
                <div>
                    <p>+228 70 17 73 54</p>
                    <p>cyuroukou@gmail.com</p>
                </div>
                <ul class="footer_socials">
                    <li><a href="http://"><i clas="uil uil-facebook-f"></i></a></li>
                    <li><a href="http://"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="http://"></a><i class="uil uil-twitter"></i></li>
                    <li><a href="http://"></a><i class="uil uil-linkedin-alt"></i></li>
                </ul>
            </div>  
        </div>
        <div class="footer_copyright"><small>Copyright &copy; MYPHILADELPHIE School Website</small></div>
    </footer>












  <script src="../../index.js"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>