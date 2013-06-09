<?php get_header(); ?>

<section class="main-content" role="main">
  <div class="contain">
    <div <?php post_class(); ?>>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="module">
          
          <?php
            $product_name = get_field('integration_slug');
            if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>

            <?php else : ?>

              <div class="signup-cta">
                <p>Get access to this course and others for $8.99/month. <a href="https://anythingoes.memberful.com/orders/new?subscription=27">Sign Up</a></p>
              </div>
            <?php endif; ?>

          <div class="text">
            <div class="video-preview">
              <?php the_field('video_preview'); ?>
            </div>
            <h2><?php the_title(); ?></h2>
            <p class="course-meta"><?php the_field('total_course_videos'); ?> Total Videos</p>
            <p class="lead"><?php the_field('course_lead'); ?></p>
            <hr>

            <?php
            $product_name = get_field('integration_slug');
            if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>        

            <?php
              // Find connected posts
              $connected = new WP_Query( array(
              'connected_type' => 'courses_to_videos',
              'connected_items' => get_queried_object(),
              'nopaging' => true,
              ) );

              // Display connected posts
              if ( $connected->have_posts() ) : ?>
                

                <div class="video-list">
                <h3>Course Videos</h3>
                <ul class="course-videos">
                  <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
                  <li>
                    <a class="btn secondary" href="<?php the_permalink(); ?>">Watch</a>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php the_field('video_length'); ?></p>
                  </li>
                  <?php endwhile; ?>
                </ul>
                </div><!-- end .video-list -->


            <?php 
            // Prevent weirdness
            wp_reset_postdata();
            endif; ?>

            <?php else : ?>
              <?php the_content (); ?>
           <?php endif; ?>
          </div><!-- end .text -->

          <div class="col-1">

            <h3>Difficulty Level</h3>
            <p><?php the_field('difficulty_level'); ?></p>
            <h3>Course Length</h3>
            <p><?php the_field('course_length'); ?></p>
            
            <?php
            $product_name = get_field('integration_slug');
            if ( has_memberful_subscription ( '27-tim-likes-to-teach-subscription' ) || has_memberful_product ( $product_name ) ) : ?>
              <?php if ( get_field ('course_download') ) : ?>
                <h3>Course Files</h3>
                <p><a href="<?php the_field('course_download'); ?>">Download from Github</a></p>
              <?php endif; ?>
            <?php endif; ?>

            <h3>Feedback</h3>
            <p>I'd love to hear your feedback! I invite you to <a href="/help">get in touch</a>, and tell me your thoughts on the course.</p>
          </div><!-- end .col-1 -->
        </article>


      <?php endwhile; endif; ?>
      

    </div><!-- end .post-class -->
  </div><!-- end .contain -->
</section><!-- end .main-content -->

<?php get_footer(); ?>