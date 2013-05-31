<?php get_header(); ?>

<section class="main-content" role="main">
  <div class="contain">
    
    <h2 class="page-title">Search Results For: <?php the_search_query(); ?></h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <article class="entry">
        <?php the_post_thumbnail('post-art'); ?>
        <div class="text">
          <h3><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_field('course_lead'); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn secondary" title="Permanent Link to <?php the_title(); ?>">Learn More</a>
        </div><!-- end .text -->
      </article>

    <?php endwhile; endif; ?>
  </div><!-- contain -->
</section> <!-- end .main-content -->

<?php get_footer(); ?>