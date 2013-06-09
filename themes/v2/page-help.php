<?php
/*
Template Name: Help Page
*/
get_header();?>

<section class="main-content" role="main">
  <div class="contain">

  <div class="module">
    <div class="content-col">
      <h2>Help &amp; Support</h2>
      <p>If you have questions, suggestions for future courses, or feedback on current ones, please fill out the form below.</p>
      <?php gravity_form(1, false, false, false, '', false); ?>
    </div>

    <aside role="complementary" class="sidebar">
      <h3>Frequently Asked Questions</h3>
      <h4>Can I get a refund?</h4>
      <p>All sales are final and refunds are not available. If you have a special situation, fill out the form. I'll try to help out.</p>
      <h4>I'm stuck. Can you help?</h4>
      <p>Why sure! If you need help or have questions about one of the courses, fill out the form. I'll get back to you in a jiffy!</p>
      <h4>Can I share the videos?</h4>
      <p>I'd really appreciate if you didn't. Encourage others to sign up for their own membership.</p>
    </aside>
  </div><!-- end .module -->

  </div><!-- end .contain -->
</section> <!-- end .main-content -->

<?php get_footer(); ?>