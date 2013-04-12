<?php get_header(); ?>

<section class="main-content" role="main">

  <div <?php post_class(); ?>>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <div class="video-container">
        <?php the_field('video_embed'); ?>
      </div>

      <div class="yoast-breadcrumb">
        <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?>
      </div>

      <div class="entry">
        <div class="text">
          <div class="video-preview">
            <?php the_field('video_preview'); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <p><strong>Video Length:</strong> <?php the_field('video_length'); ?></p>
          <?php the_content(); ?>
        </div><!-- end .text -->
      </div><!-- end .entry -->




    <?php endwhile; endif; ?>

  </div><!-- end .post-class -->

</section><!-- end .main-content -->

<?php get_footer(); ?>