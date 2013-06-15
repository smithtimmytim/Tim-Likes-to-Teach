<!DOCTYPE html>
  <head>

    <!-- 

    @@@@@@@@@@@@@@@@@  @@@   @@@          @@@ 
    @@@@@@@@@@@@@@@@@  @@@   @@@@        @@@@
           @@@         @@@   @@@ @      @ @@@
           @@@         @@@   @@@  @@  @@  @@@
           @@@         @@@   @@@   @@@    @@@
           @@@         @@@   @@@          @@@
           @@@         @@@   @@@          @@@
           @@@         @@@   @@@          @@@
  
    How much does a polar bear weigh? Just enough to break the ice.

    Made with love in beautiful Saint Paul, Minnesota.
    Tim Likes to Teach © 2013 Anythin’ Goes LLC and Timothy B. Smith.

    -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php bloginfo('name'); ?> » <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/global.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsify.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.css"/>

<!-- Typekit Code -->
<script type="text/javascript" src="//use.typekit.net/eam5ytk.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!--WP Generated Header -->
  <?php wp_head(); ?>
<!--End WP Generated Header -->

</head>

<body <?php body_class($class); ?>>
  
<div class="wrap">
  <header role="banner">
    <div class="contain">
      <a href="/" title="Back to the homepage" class="logo">
      <img src="<?php bloginfo('template_url'); ?>/img/supersmith.svg" alt="Supersmith Logo" />
      </a>
      
      <div class="mobile-container">
        <nav role="navigation" class="header-nav">
          <a href="/courses">Courses</a>
          <a href="/tim-tv">Tim TV</a>
          <a href="/help">Help</a>
        </nav>
        
        <div class="search-form">
          <?php get_search_form(); ?>
        </div><!-- .search -->
      </div><!-- end .mobile-container -->

      <div class="signed-in-status">
        <?php if ( is_user_logged_in() ) : ?>

          <div class="profile-box signed-in">
            <a class="profile" href="<?php echo memberful_account_url(); ?>">
              <?php echo get_avatar( wp_get_current_user()->user_email, 25 ); ?>
              <?php echo wp_get_current_user()->display_name; ?>
            </a>
            <a class="sign-out" href="<?php echo memberful_sign_out_url(); ?>">Sign out</a>
          </div>

          <?php else : ?>
          <div class="profile-box signed-out">
            <a title="Sign in" class="btn sign-in" href="<?php echo memberful_sign_in_url(); ?>">Sign In</a>
            <a title="Sign up" class="btn" href="https://anythingoes.memberful.com/orders/new?subscription=27">Sign Up</a>
          </div>

        <?php endif; ?>
      </div><!-- end .signed-in-status -->

    </div><!-- end .contain -->
  </header>

  <section class="statement">
    <div class="contain">
      <h1>A Friendly Way to Learn the Web</h1>
      <p>Learn web design, front-end development, and other geekery with your pal, <a href="http://ttimsmith.com" title="Tim Smith">Tim Smith</a>.</p>
      <?php if ( is_user_logged_in() ) : ?>

      <?php else : ?>
      <a href="https://anythingoes.memberful.com/orders/new?subscription=27" class="btn">Sign Up</a>
      <?php endif; ?>
      <div class="innershadow"></div>
      <div class="video-wrapper">
        <a class="fancybox-media play-btn" href="#"><img src="<?php bloginfo('template_url');?>/img/play-icon.svg"/></a>
        <img src="<?php bloginfo('template_url');?>/img/video-screenshot.png" alt="video screenshot">
      </div>
    </div> <!-- end .contain -->
  </section><!-- end .statement -->