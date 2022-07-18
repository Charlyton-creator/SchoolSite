
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inscription</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <img src="../../img/footer-news1.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <?php if(isset($_GET['message']) && $_GET['message'] == 'passwordswrong'){
                                ?>
                                    <div class="alert alert-danger" role="alert" id="message">
                                        Les mots de passes ne correspondent pas!!!!!!!!!. <a href="register.php">Cliquer pour quitter</a>
                                    </div>
                                <?php
                                ?>
                                <?php } else if(isset($_GET['message']) && $_GET['message'] == 'successfull'){
                                    ?>
                                    <div class="alert alert-success" role="alert" id="message">
                                        Demande d'inscription reçu avec succès!!!!!. Vous aurez un mail si il y a une suite favorable
                                        <a href="register.php">Cliquer pour quitter</a>
                                    </div>
                                    <?php
                                    ?>
                                    <?php }?>
                                <h1 class="h4 text-gray-900 mb-4">Veuillez remplir ce formulaire</h1>
                            </div>
                            <form class="user" method="POST" action="../../utilities/demande.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Votre Nom" name="nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Votre prenom" name="prenom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user"
                                            id="" placeholder="Indiquer votre age" name="age">
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-user form-select" name="sexe">
                                            <option selected>Veuillez selectionner un élément</option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="Feminin">Féminin</option>
                                            <option value="Autre non préciser">Autre non precisé</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Adresse email" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="form-control form-select form-control-user" name="classe_antérieure">
                                            <option selected>Veuillez selectionner une classe</option>
                                            <option value="sixième">6ème</option>
                                            <option value="cinquième">5ème</option>
                                            <option value="quatrième">4ème</option>
                                            <option value="troisième">3ème</option>
                                            <option value="seconde s">Seconde S</option>
                                            <option value="première A4">Première A4</option>
                                            <option value="première D">Première D</option>
                                            <option value="terminale A4">Terminale A4</option>
                                            <option value="terminale D">Terminale D</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Votre moyenne annuelle" name="moyenne_annuelle">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Choisissez un mot de passe pour votre compte" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Retaper le meme mot de passe" name="passwordconfirm">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Envoyer sa demande
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Vous etes dejà eleve de philadephie? Connecter vous!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>