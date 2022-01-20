<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h2 class="titre"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="col-md-6 mx-auto separateur"></div>

  <div class="entry">
      <?php the_content(); ?>
  </div>

<?php endwhile; else: ?>
    <p>Contenue non trouvée</p>
<?php endif; ?>    

<?php get_footer(); ?>