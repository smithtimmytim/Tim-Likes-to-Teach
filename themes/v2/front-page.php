  <?php get_header( 'home' ); ?>

  <section class="main-content" role="main">
    <div class="contain">

      <?php 
        $the_query = new WP_Query(array(
          'post_type' => 'testimonials',
          'showposts' => '2',
          'orderby' => 'rand'   
        )); 
      ?>

      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
        <figure class="testimonial">
          <?php the_post_thumbnail(); ?>
          <blockquote><?php the_content(); ?></blockquote>
          <figcaption>&mdash;<?php the_title(); ?></figcaption>
        </figure>

      <?php endwhile; ?>
    </div><!-- end .contain -->
  </section> <!-- end .main-content -->

  <?php get_footer( 'home' ); ?>