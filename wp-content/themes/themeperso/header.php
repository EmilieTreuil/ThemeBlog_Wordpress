<!doctype html>
<html lang="fr">

<head>
<meta charset="<?php bloginfo('charset'); ?>">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
  </head>
    
<body <?php body_class(); ?>>


    <div class="container-fluid">
        <div class="row">

            <div class="col-md-1 logo">

                <?php dynamic_sidebar('logo'); ?>

            </div>

            <div class="col-md-10 menuheader section-elementor">

                <?php wp_nav_menu( array('container_class'=>'menu-header','theme_location' => 'primary')); ?>

            </div>

            <div class="col-md-1 logo"></div>

        </div>
    </div>


    <div class="container-fluid">


        <div class="row">
                <div class="col-md-12 entete">
                    <?php dynamic_sidebar('entete'); ?>
                </div>
        </div>
       
       
        <div class="row">

            <div class="col-md-3 haut-gauche">
                <?php dynamic_sidebar('haut-gauche'); ?>
            </div> 
        
            <div class="col-md-6 haut-milieu">
                <?php dynamic_sidebar('haut-milieu'); ?>
            </div>
            
            <div class="col-md-3 haut-droit">    
                <?php dynamic_sidebar('haut-droit'); ?>
            </div> 

        </div>
       
       
        <?php
            single_cat_title('<h2 class="page-title">', '</h2>');
           if (category_description()) : // Show an optional category description ?>
                    <div class="archive-meta"><?php echo category_description(); ?></div>
        <?php endif; ?>
 
    </div>
       
   
 <div class="container-fluid">
    <section>