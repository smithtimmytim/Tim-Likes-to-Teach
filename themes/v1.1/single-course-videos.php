<?php get_header(); ?>

<section class="main-content" role="main">

  <div <?php post_class(); ?>>

    <div class="contain">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php
          $product_name = get_field('integration_slug');
          if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>

            <div class="video-container">
              <?php the_field('video_embed'); ?>
            </div>

          <?php else : ?>

            <div class="video-container-anon">
              <h2>Become a Member <small>To Watch this Video</small></h2>
              <a href="https://anythingoes.memberful.com/orders/new?subscription=27" class="btn">Sign Up</a>
            </div>

          <?php endif; ?>
        
        <div class="video-meta-bar">
            <?php breadcrumb_trail( array( 
                'before' => '',
                'separator' => '&rsaquo;'

                // Need to come back to this
              ) ); ?>

          <?php
          $product_name = get_field('integration_slug');
          if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>
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
          <?php else : ?>

          <?php endif; ?>

        </div><!-- end .video-meta-bar -->

        <div class="entry">
          <h2><?php the_title(); ?></h2>
          <p class="video_length"><strong>Video Length:</strong> <?php the_field('video_length'); ?></p>
          <?php the_content(); ?>
        </div><!-- end .entry -->

      <?php endwhile; endif; ?>
    
    </div><!-- end .contain -->

  </div><!-- end .post-class -->

</section><!-- end .main-content -->

<?php get_footer(); ?>