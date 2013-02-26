<?php
/*
Template Name: Help Page
*/
get_header();?>

<section class="main-content" role="main">

  <div class="entry">
    <div class="content-col">
      <h2>Help &amp; Support</h2>
      <p>I'm so glad you're wanting to get in touch! If you have questions about the videos, suggestions for future courses, feedback on current ones or would like to talk about special purchasing options, please fill out the form below.</p>
      <?php gravity_form(1, false, false, false, '', false); ?>
    </div>

    <aside role="complementary" class="sidebar">
      <h3>Frequently Asked Questions</h3>
      <h4>Can I get a refund?</h4>
      <p>All sales are final and refunds are not available. If you have a special situation, fill out the form. I'll try to help out.</p>
      <h4>I'm stuck. Can you help?</h4>
      <p>Why sure! If you need help or have questions about one of the courses, fill out the form. I'll get back to you in a jiffy!</p>
      <h4>Can I share the videos?</h4>
      <p>I'd really appreciate if you didn't. Share the site and and have them buy their own copies.</p>
      <h4>I lost my videos. How do I get them again?</h4>
      <p>Fill out the form and let me know. Have no fear, I'll hook you up homie.</p>
    </aside>

  </div>


</section> <!-- end .main-content -->

<?php get_footer(); ?>