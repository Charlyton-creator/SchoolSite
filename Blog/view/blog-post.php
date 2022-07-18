<?php require_once('../../utilities/fonctions.php') ?>
<?php require_once('../blog_utilities/dbconfig.php') ?>
<?php require_once('template_header.php') ?>
            <!-- Page Content-->
            <?php 
            $article = getArticleById('articles', $_GET['Id']);
             ?>
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <h3>Auteur(trice)</h3>
                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img class="img-fluid rounded-circle" src="../../AdminSchoolPanel/Dashboard/img/undraw_profile.svg" alt="..." width="100" height="20"/>
                                <div class="ms-3">
                                    <div class="fw-bold"><?= $article['Author'] ?></div>
                                    <div class="text-muted"><?= $article['Categorie'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">Bienvenu nous esperons que cet article vous plaira</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2"><?= $article['Date_poste'] ?></div>
                                    <!-- Post categories-->
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Commentaires <span class="badge bg-secondary"><?= $Nombrecommentaires = countCommentairesReçus($_GET['Id']); $Nombrecommentaires ?> </span> </a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><?= "<img class='card-img-top' src=\"$article[Description]\" alt='...' />"?></figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                    <p class="fs-5 mb-4"><?= $article['Contenu'] ?></p>
                                    <p class="fs-5 mb-4"></p>
                                    <p class="fs-5 mb-4"></p>
                                    <h2 class="fw-bolder mb-4 mt-5"></h2>
                                    <p class="fs-5 mb-4"></p>
                                    <p class="fs-5 mb-4"></p>
                                </section>
                            </article>
                            <?php 
                            ?>
                            <!-- Comments section-->
                            <section>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h2 align="center">Un commentaire?</h2><br>
                                        <!-- Comment form-->
                                        <form class="mb-4" method="POST" action="../../utilities/receiveComment.php">
                                            <div class="row g-3">
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Votre nom & Prenom" aria-label="Votre nom & Prenom" name="identity" required>
                                                </div>
                                                <div class="col">
                                                    <input type="email" class="form-control" placeholder="Votre Email" aria-label="Votre Email" name="email" required>
                                                </div>
                                                <div class="col">
                                                    <input type="hidden" class="form-control" placeholder="" value="<?= $_GET['Id']?>" name="Id" required>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control" rows="3" placeholder="Rejoignez la discussion et laisser nous un commentaire!" name="commentaire"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary" >Envoyer votre commentaire</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                        <!-- Comment with nested comments-->
                                       
                                        <!-- Single comment-->
                                        <div>
                                            <h3>Commentaires Récents sur cet article</h3>
                            
                                        </div>
                                        <?php

                                        $commentaires = getListofCommentaires($_GET['Id']);

                                        foreach($commentaires as $commentaire):
                                        ?>
                                        
                                        <div class="d-flex">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="../../AdminSchoolPanel/Dashboard/img/undraw_profile_3.svg" alt="..." width="100" height="50"/></div>
                                            <div class="ms-3">
                                                <div class="fw-bold"><?= $commentaire['Auteur_commentaire'] ?></div>
                                                <?= $commentaire['commentaire'] ?>
                                            </div>
                                        </div>
                                        <?php
                                        ?>
                                        <?php endforeach?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
<?php require_once('template_footer.php') ?>