<?php get_header(); ?>

<section class="main-content" role="main">
  <div class="entry">

    <?php the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>


  </div><!-- end .entry -->
</section>

<?php get_footer(); ?>