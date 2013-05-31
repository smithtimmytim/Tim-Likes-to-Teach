<?php get_header(); ?>

<section class="main-content" role="main">

  <div <?php post_class(); ?>>

    <div class="contain">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="video-container">
        <?php the_field('video_embed'); ?>
      </div>

      <div class="video-meta-bar">

        <div class="breadcrumb">
          <a href="<?php bloginfo('url');?>" rel="home">Home</a>
          <span class="sep">&rsaquo;</span>
          <a href="<?php bloginfo('url');?>/tim-tv" rel="tag">Tim TV</a>
          <span class="sep">&rsaquo;</span>
          <span class="trail-end"><?php the_title(); ?></span>
        </div>

        <nav class="video-nav">
          <?php previous_post_link('%link', 'Previous Video', TRUE); ?>
          <?php if(!get_adjacent_post(true, '', true)) { 
            echo '<span class="inactive">Previous Video</span>'; 
          } ?>
          &mdash;
          <?php next_post_link('%link', 'Next Video', TRUE); ?>
          <?php if(!get_adjacent_post(true, '', false)) { 
            echo '<span class="inactive">Next Video</span>'; 
          } ?>
        </nav>
        
      </div><!-- end .video-meta-bar -->

      <div class="module">
        <h2><?php the_title(); ?></h2>
        <p class="video_length"><strong>Video Length:</strong> <?php the_field('video_length'); ?></p>
        <?php the_content(); ?>
      </div><!-- end .module -->

      <?php endwhile; endif; ?>
    
    </div><!-- end .contain -->

  </div><!-- end .post-class -->

</section><!-- end .main-content -->

<?php get_footer(); ?>