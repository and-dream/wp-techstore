<!DOCTYPE html>
<html>
    <!-- pour coordonner la langue du site avec le back-office de WP -->
<head <?php language_attributes() ?>>
    <!-- bloginfo avec l'argument charset permet une fois de plus de rendre cette fonctionnalit dynanique -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bloginfo renseigné de name permet désormais de modifier le nom du site à partir de l'onglet reglages du back-office de WP. Ce nom doit etre modifiable de manière dynamique. Si il est écrit ici en dur, alors il restera figé -->
    <title><?php bloginfo('name') ?></title>

    <!-- CDN CSS BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- mon css -->
    <!-- en programmation WP, il faut ajouter wp-content/themes/techstore devant style.css pour que celui ci soit bien relié et afficher la mise en page, sinon, inconnu pour la mise en page -->
    <!-- <link rel="stylesheet" href="wp-content/themes/techstore/style.css"> -->

    <!-- bloginfo, renseigner de l'argument template directory, permettra d'avoir ce même chemin pour que le css soit opérationnel -->
    <!-- ?php bloginfo('template_directory')?> affichera le chemin http://localhost/wp-techstore/wp-content/themes/techstore  -->  
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?> /style.css">

    <!-- wp_head() va libéer l'espace nécessaire pour afficher la barre d'admin mais en plus permet de récupérer des propriétés CSS supplémentaires -->
    <?php wp_head() ?>
</head>
<!-- body_class dans la balise body permet de récupérer encore plus de fonctionnalités wordpress exploitables tout le long de notre projet -->
<!--  php echo "<pre>"; var_dump(get_defined_vars()) ;echo "<pre/>";-->

<body <?= body_class() ?>>

   
   <!-- .row>.col*3  -->
   <!-- une div avec une classe row parent de 3 div avec une class col -->
<header>
    <!-- row au-dessus de la baree de navigation du site -->
    <div class="row p-3 d-flex align-items-center">
    <!-- les trois colonnes qui vont respectivement accueillir : le logo, le nom du site, les coordonnées du site -->
        <div class="col-1"><a href='<?= get_option('home') ?>'><?php dynamic_sidebar('logo') ?></a></div>
        
        <!-- get_option('home') permet de retourner à l'index du site -->
        <div class="col-6"><h1><a href="<?= get_option('home')?>"><?php bloginfo() ?></a></h1></div>
        <div class="col-5"><?php dynamic_sidebar('coord') ?></div>
    </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
        
</header>

<main class="container my-5">



<section>
    <img src="..." class="img-fluid" alt="...">
</section>

