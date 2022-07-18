
<?php require_once("header_template.php")?>

    <section class="contact">
        <div class="container contact_container">
         <aside class="contact_aside">
            <div class="aside_image">
                <img src="../img/cont.jpg" alt="">
            </div>
            <h2>Nous Contacter</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Porro eligendi hic iure in veniam aspernatur et voluptate vel animi, fuga, accusamus, deserunt necessitatibus possimus dicta aliquid veritatis iste quae cumque.
            </p>
            <ul class="contact_details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>+228 70177354</h5>
                </li>
                <li>
                    <i class="uil uil-envelope"></i>
                    <h5>cyouroukou@gmail.com</h5>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>Kara, TOGO</h5>
                </li>
            </ul>
            <ul class="contact_socials">
                <li>
                    <a href="https://instagram.com">
                        <i class="uil uil-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="uil uil-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="uil uil-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="uil uil-linkedin"></i>
                    </a>
                </li>
            </ul>

         </aside>
            

         <form class="contact_form">
             <div class="form_name">
                 <input type="text" name="first name" placeholder="Votre Nom ici" required>
                 <input type="text" name="Last name" placeholder="Votre Prenom ici" required>
             </div>
             <input type="email" name="Email Adress" id="" placeholder="Votre adresse mail" required>
             <textarea name="Message" id="" cols="" rows="7" required placeholder="Votre Message"></textarea>
             <button type="submit" class="btn btn-primary">Envoyer</button>
         </form>
        </div>
    </section>
    <footer class="contact_form">
        <?php require_once("footer_template.php")?>
    </footer>


    <script src="../index.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
    
</body>
</html>