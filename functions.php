<?php  
// ce fichier est nécessaire pour établir le zoning des pages WP. C'est grace à lui que du contenu pourra etre injecté sur les pages à partir du back-office

//  add_action est un hook, un crochet
//  il demande deux arguments
//  que veux-tu accrocher (la fonction predefinie widgets_i,it qui appartient à WP)
//  ou veux-tu les utiliser 
//  dans ma fonction utilisateur que je nomme techstore_init_sidebar
add_action('widgets_init', 'techstore_init_sidebar');

// j'utilise, j'appelle ma fonction utilisateur déclarée au dessus
function techstore_init_sidebar (){
    // on récupère de widgets_init, la fonction predefenie register_sidebar,qui va enregistrer les informations dans un tableau
    register_sidebar( array(
        // trois infos
        // le nom de cette zone
        'name' => __('logo', 'techstore'), 
        // son id
        'id' => ('logo'),
        // une breve description
        'description' => __('Zone pour le logo', 'techstore')
    )
    );

    register_sidebar(array(
        'name' => __('coord', 'techstore'),
        'id' => ('coord'),
        'description' => __('Zone pour les coordonnées du site', 'techstore')
    )
    );

    register_sidebar(array(
        'name' => __('navigation pied de page', 'techstore'),
        'id' => ('pied-de-page'),
        'description' => __('Zone pour la navigation pied de page', 'techstore')
    )
    );

}

// hook/crochet pour récupérer le contenu de la fonction prédéfinie init() pour les utiliser dans ma fonction utilisateur techstore_init_menu
add_action('init', 'techstore_init_menu');

// J'utilise la fonction prédéfinie register_nav_menu, extraite de init()
//  Je lui donne deux arguments : son id puis son nom tel qu'il apparaîtra dans le back-office
function techstore_init_menu(){
    register_nav_menu('primary', __('Menu Principal', 'techstore'));
    
}







