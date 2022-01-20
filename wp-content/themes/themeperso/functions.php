<?php

add_action('widgets_init','themeperso_init_sidebar');

add_action('init','themeperso_init_menu');

add_action( 'after_setup_theme', 'themeperso_post_thumbnails' );


function themeperso_init_sidebar()
{

    register_sidebar(array(
        'name' =>__('haut gauche','themeperso'),
        'id' =>'haut-gauche',
        'description' =>__('Région en haut a gauche','themeperso')
    ));

    register_sidebar(array(
        'name' =>__('haut milieu','themeperso'),
        'id' =>'haut-milieu',
        'description' =>__('Région en haut-milieu','themeperso')
    ));

    register_sidebar(array(
        'name' =>__('haut droit','themeperso'),
        'id' =>'haut-droit',
        'description' =>__('Région en haut-droit','themeperso')
    ));

    register_sidebar(array(
        'name' =>__('en-tête','themeperso'),
        'id' =>'entete',
        'description' =>__('Région en-tête','themeperso')
    ));

    register_sidebar(array(
        'name' =>__('bas gauche','themeperso'),
        'id' =>'bas-gauche',
        'description' =>__('Région bas-gauche','themeperso')
    ));

    register_sidebar(array(
        'name' =>__('bas droite','themeperso'),
        'id' =>'bas-droite',
        'description' =>__('Région bas-droite','themeperso')
    ));
    register_sidebar(array(
        'name' =>__('logo','themeperso'),
        'id' =>'logo',
        'description' =>__('Région du logo','themeperso')
    ));
}


function themeperso_init_menu()
{

    register_nav_menu('primary',__('Primary Menu','themeperso'));

}

function themeperso_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
?>