




<?php 
require_once("header_template.php");
require_once('../utilities/init.php');
?>



    <header>  
        <div class="container header_container">
            <div class="header_left">
                <h1>Faites former vos enfants dans une ecole prestigieuse</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem et ex, eaque eligendi deleniti ut in. Facilis maiores, deleniti nesciunt necessitatibus laudantium quis obcaecati illum commodi aliquid odio distinctio rerum?</p>
                <a href="../AdminSchoolPanel/Dashboard/register.php" class="btn btn-primary">Débuter</a>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="../img/school.jpg" alt="">
                </div>
            </div>
        </div>
    </header> 







    <section class="categories">
        <form action="">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Categories de nos Formations</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum beatae eos amet quidem dolor,
                    nostrum doloribus optio consequuntur earum vitae 
                    </p>
                <a href="http://" class="btn">En savoir plus</a>
            </div>
            <div class="categories_right">
                <?php 
                    $formations = getFormations();

                    foreach($formations as $formation):
                        ?>
                           <article class="category">
                                <span class="category_icon"><i class="<?= $formation['Icon']?>"></i></span>
                                <a href="formations.php?id=<?= $formation['Id']?>"><h5><?= $formation['Titre']?></h5></a> 
                                <p><?= $formation['Description']?></p>
                            </article>

                        <?php

                ?>
                <?php endforeach;?>              
            </div>
        </div>
    </section>
    </form>




    <section class="courses">
        <h2>Nous avons un bon cadre d'études</h2>
        <div class="container courses_container">
        <article class="course">
                <div class="course_image">
                    <img src="../img/im4.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Cours d'arts plastique et de musique</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus sint, alias ipsum aut rem quod laboriosam, deserunt at, quas nam fuga aliquid. Architecto, adipisci recusandae ex optio obcaecati corporis aliquid.</p>
                    <a href="formations.php"class="btn btn-primary">En savoir plus</a>
                </div>
            </article>
            <article class="course">
                <div class="course_image">
                    <img src="../img/im3.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Cours d'informatique</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus sint, alias ipsum aut rem quod laboriosam, deserunt at, quas nam fuga aliquid. Architecto, adipisci recusandae ex optio obcaecati corporis aliquid.</p>
                    <a href="formations.php"class="btn btn-primary">En savoir plus</a>
                </div>
              
            </article>
            <article class="course">
                <div class="course_image">
                    <img src="../img/im2.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Une bibliotheque pour vos enfants</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus sint, alias ipsum aut rem quod laboriosam, deserunt at, quas nam fuga aliquid. Architecto, adipisci recusandae ex optio obcaecati corporis aliquid.</p>
                    <a href="formations.php"class="btn btn-primary">En savoir plus</a>
                </div>
            </article>
        </div>
        </div>
    </section>






    <section class="faqs">
        <h2>Les questions que les parents se posent souvent</h2>
        <div class="container faqs_container">
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Comment savoir que vous etes l'ecole parfaite pour la formation de mon enfant? </h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere maiores laborum voluptas ab obcaecati quidem, adipisci nam ducimus laudantium incidunt
                         distinctio omnis temporibus quos nobis modi consequatur nostrum facilis pariatur!
                        </p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Qu'est ce votre ecole offre de différent </h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere maiores laborum voluptas ab obcaecati quidem, adipisci nam ducimus laudantium incidunt
                         distinctio omnis temporibus quos nobis modi consequatur nostrum facilis pariatur!
                        </p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Quels sont les modalités d'inscription dans votre etablissement?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere maiores laborum voluptas ab obcaecati quidem, adipisci nam ducimus laudantium incidunt
                         distinctio omnis temporibus quos nobis modi consequatur nostrum facilis pariatur!
                        </p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Acordez vous des bourses?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere maiores laborum voluptas ab obcaecati quidem, adipisci nam ducimus laudantium incidunt
                         distinctio omnis temporibus quos nobis modi consequatur nostrum facilis pariatur!
                        </p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Quels sont les modalités de payements des frais scolaires?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere maiores laborum voluptas ab obcaecati quidem, adipisci nam ducimus laudantium incidunt
                         distinctio omnis temporibus quos nobis modi consequatur nostrum facilis pariatur!
                        </p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="uil uil-plus"></i></div>
                <div class="question_answer">
                    <h4>Acceptez vous tous type de religion?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere maiores laborum voluptas ab obcaecati quidem, adipisci nam ducimus laudantium incidunt
                         distinctio omnis temporibus quos nobis modi consequatur nostrum facilis pariatur!
                        </p>
                </div>
            </article>
        </div>
    </section>






    <section class="container testimonials_container mySwiper">
        <h2>Les témoignages des eleves</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../img/footer-news2.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Name</h5>
                    <small>Student</small>
                    <div class="testimonial_body">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Neque eaque delectus illum placeat alias repellat hic porro pariatur dolorum similique velit nobis debitis, numquam laboriosam eum
                            inventore fuga. Laudantium, eveniet?
                        </p>
                    </div>
                </div>
            </article>
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../img/footer-news2.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Name</h5>
                    <small>Student</small>
                    <div class="testimonial_body">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Neque eaque delectus illum placeat alias repellat hic porro pariatur dolorum similique velit nobis debitis, numquam laboriosam eum
                            inventore fuga. Laudantium, eveniet?
                        </p>
                    </div>
                </div>
            </article>
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../img/footer-news2.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Name</h5>
                    <small>Student</small>
                    <div class="testimonial_body">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Neque eaque delectus illum placeat alias repellat hic porro pariatur dolorum similique velit nobis debitis, numquam laboriosam eum
                            inventore fuga. Laudantium, eveniet?
                        </p>
                    </div>
                </div>
            </article>
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../img/footer-news2.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Name</h5>
                    <small>Student</small>
                    <div class="testimonial_body">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Neque eaque delectus illum placeat alias repellat hic porro pariatur dolorum similique velit nobis debitis, numquam laboriosam eum
                            inventore fuga. Laudantium, eveniet?
                        </p>
                    </div>
                </div>
            </article>
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="../img/footer-news2.jpg" alt="">
                </div>
                <div class="testimonial_info">
                    <h5>Name</h5>
                    <small>Student</small>
                    <div class="testimonial_body">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Neque eaque delectus illum placeat alias repellat hic porro pariatur dolorum similique velit nobis debitis, numquam laboriosam eum
                            inventore fuga. Laudantium, eveniet?
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>






    <footer>
        <?php require_once("footer_template.php")?>
    </footer>
    <script src="../index.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPreview: 1,
            spaceBetween:30,
            pagination:{
              el: ".swiper-pagination",
              clickable:true,  
            },
            //
            breakpoints :{
                600:{
                    slidesPreview:2
                }

            }
        })
    </script>
</body>
</html>