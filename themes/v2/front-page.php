<?php get_header(); ?>

<section class="main-content" role="main">
  <div class="contain">
    <h2>Courses</h2>

    <?php 
      $the_query = new WP_Query(array(
        'post_type' => 'courses',
        'posts_per_page' => 5   
      )); 
    ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

      <article class="entry">
        <?php the_post_thumbnail('post-art'); ?>
        <div class="text">
          <h3><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_field('course_lead'); ?></p>
          <a href="<?php the_permalink(); ?>" class="button" title="Permanent Link to <?php the_title(); ?>">Learn More</a>
        </div><!-- end .text -->
      </article>

    <?php endwhile; ?>
  </div><!-- end .contain -->
</section> <!-- end .main-content -->

<?php get_footer(); ?>