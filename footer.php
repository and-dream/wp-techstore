</main>

<!-- va activer, afficher la barre d'administration en haut du site (espace libéré grâve à wp_head ) codé à la fin de la balise <head> dans header.php -->
    <!-- peut être positionner au dessus de la balise <footer> ou à l'intérieur -->
<?php  wp_footer()?>


<footer class="mt-5 text-center">
    <!-- row qui va contenir le menu footer et la navigation réseaux sociaux -->
    <div class="row">
        <div class="col6"><?php dynamic_sidebar('pied-de-page') ?></div>
        <div class="col6"></div>
    </div>
        <!-- bloginfo sans argument permet de récupérer pour afficher le nom du site -->
        <h3>&copy; - <?= bloginfo() ?> - <?= date('Y')  ?></h3>
</footer>


<!-- bundle BS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>