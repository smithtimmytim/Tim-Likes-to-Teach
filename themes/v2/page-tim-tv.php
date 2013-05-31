<?php get_header(); ?>

<section class="main-content" role="main">
  <div class="type-timtv">
    <div class="contain">
      <h2 class="page-title">Tim TV</h2>

        <?php 
          $the_query = new WP_Query(array(
            'post_type' => 'timtv',
            'posts_per_page' => 5   
          )); 
        ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
        <div class="tim-tv-entry">
          <div class="video-container">
            <?php the_field('video_embed'); ?>
          </div>
          <div class="module">
            <h2><a href="<?php the_permalink();?>" title="Permanent Link to <?php the_title();?>"><?php the_title(); ?></a></h2>
            <p class="video_length"><strong>Video Length:</strong> <?php the_field('video_length'); ?></p>
            <?php the_content(); ?>
          </div><!-- end .module -->
        </div><!-- end .tim-tv-entry -->

        <?php endwhile;?>

    </div><!-- end .contain -->
  </div><!-- end .type-tim-tv -->
</section>

<?php get_footer(); ?>