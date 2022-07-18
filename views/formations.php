<?php 
require_once("header_template.php");
require_once('../utilities/init.php');
?>

<section class="team">
    <div class="container categories_container">
        <h1 align="center">Philadelphie forme vos enfants:</h1>
        <?php 
            if(isset($_GET['id'])){
                $formation = getformationById($_GET['id']);

                ?>

                    
                <?php
            }
        ?>
    </div>
</section>
<footer>
    <?php require_once("footer_template.php")?> 
</footer>

</body>
</html>