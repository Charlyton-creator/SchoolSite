<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/adminstyle.css">
    <title>MyphiladelphieBlogAdmin</title>
</head>
<body>

<!-----  Sidebar ---->
<input type="checbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h1><span class="lab la-accusoft">BlogAdmin</span></h1>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="" class="active"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                <span>Récemment posté</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                <span>Articles</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                <span>Commentaires</span></a>
            </li>
            <li>
                <a href=""><span class="las la-receipt"></span>
                <span>Inventaire</span></a>
            </li>
        </ul>
    </div>
</div>




<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
                Dashboard
            </label>
        </h2>
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" name="" id="" placeholder="Taper pour rechercher">
        </div>
        <div class="user-wrapper">
            <img src="../../AdminSchoolPanel/Dashboard/img/undraw_profile.svg" alt="" width="40px" height="40px">
            <div>
                <h4></h4>
                <small>Directeur Administratif</small>
            </div>
        </div>
    </header>
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h2></h2>
                    <span>Articles Postés</span>
                </div> 
                <div>
                    <span class="las la-users"></span>
                </div> 
            </div> 

            <div class="card-single">
                <div>
                    <h2></h2>
                    <span>Commentaires Reçus</span>
                </div> 
                <div>
                    <span class="las la-users"></span>
                </div> 
            </div> 

            <div class="card-single">
                <div>
                    <h2></h2>
                    <span>Visiteurs</span>
                </div> 
                <div>
                    <span class="las la-users"></span>
                </div> 
            </div> 

            <div class="card-single">
                <div>
                    <h2></h2>
                    <span>Total des catégories</span>
                </div> 
                <div>
                    <span class="las la-users"></span>
                </div> 
            </div> 
        </div>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>Articles du Blog</h3>
                        <button>Voir tous les articles <span class="las la-arrow-right">

                        </span></button>

                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Titre de l'Article</td>
                                    <td>Catégorie</td>
                                    <td>Contenu</td>
                                    <td>Statut</td>
                                    <td>Nombre de commentaires</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            ?>
                                <tr>
                                    <td>Le taux d'education an hausse au togo</td>
                                    <td>Education</td>
                                    <td>
                                        <a href="http://">Cliquer ici pour lire le contenu</a>
                                    </td>
                                    <td>
                                        <span class="status orange"></span>
                                    </td>
                                    <td>5</td>
                                </tr>
                            <?php
                            ?>
                            </tbody>

                        </table>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="customers">
            <div class="card">
                    <div class="card-header">
                        <h3>Visiteurs</h3>
                        <button>Voir tout<span class="las la-arrow-right">

                        </span></button>

                    </div>
                    <div class="card-body">
                    <?php

                    ?>
                            <div class="customer">
                                <div class="info">
                                    <img src="../../AdminSchoolPanel/Dashboard/img/undraw_profile_2.svg" alt="" width="40px" height="40px">
                                <div>
                                    <h4>Baya B.</h4>
                                    <small>Professeur de SVT</small>
                                </div>
                              </div> 
                              <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-user-comment"></span>
                                <span class="las la-user-phone"></span>
                            </div>
                            </div>
                        <?php
                        ?>
                    </div>
                </div>  
            </div>

            </div>
        </div>
    </main>
</div>
    
</body>
</html>