<?php get_header(); ?>

<section class="main-content" role="main">

  <div <?php post_class(); ?>>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="entry">
        <div class="col-1">
          <?php the_post_thumbnail('post-art'); ?>

          <div class="price">
            <p>&#x0024;<?php the_field('price'); ?>.00</p>
            <a href="<?php the_field('payment_link'); ?>" target="_blank" class="button" title="Buy Course">Buy Course</a>
          </div>

          <h3>Difficulty Level</h3>
          <p><?php the_field('difficulty_level'); ?></p>
          <h3>Course Length</h3>
          <p><?php the_field('course_length'); ?></p>
          <h3>Course Files</h3>
          <p>You can get all or most of the files used in this course, in the .zip you received after purchasing.</p>
          <h3>Feedback</h3>
          <p>I'd love hear your feedback! I invite you to <a href="/help">get in touch</a> and tell me how awesome the course was.</p>
        </div><!-- end .col-1 -->

        <div class="text">
          <h2><?php the_title(); ?></h2>
          <p class="lead"><?php the_field('course_lead'); ?></p>
          <hr>
          <?php the_content (); ?>
        </div><!-- end .text -->
      </article>

    <?php endwhile; endif; ?>

  </div><!-- end .post-class -->

</section><!-- end .main-content -->

<?php get_footer(); ?>