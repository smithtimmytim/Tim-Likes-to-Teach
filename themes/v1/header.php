<!DOCTYPE html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php bloginfo('name'); ?> » <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsify.css"/>

<!-- Typekit Code -->
<script type="text/javascript" src="//use.typekit.net/eam5ytk.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--WP Generated Header -->
  <?php wp_head(); ?>
<!--End WP Generated Header -->

</head>

<body <?php body_class($class); ?>>

  <header role="banner">
    <div class="contain">
      <a href="/" title="Back to the homepage" class="logo">
      <img src="<?php bloginfo('template_url'); ?>/img/supersmith.svg" alt="Supersmith Logo" />
      <h1>timlikestoteach.com</h1>
      </a>

      <nav role="navigation">
        <a href="<?php echo memberful_sign_in_url(); ?>" title="">Sign In</a>
        <a href="/help">Help</a>
      </nav>
    </div><!-- end .contain -->
  </header>

  <section class="statement">
    <div class="contain">
      <h1>Learn Web Design, Front-End Development, WordPress, Scss, and more with Your Pal, <a href="http://timothybsmith.com" title="Tim Smith">Tim Smith</a></h1>
    </div> <!-- end .contain -->
  </section><!-- end .statement -->