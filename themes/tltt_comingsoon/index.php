<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name') ?></title>
    <meta name="description" content="Learn Web Design, Front-End Development, WordPress, Scss, and more with Tim Smith.">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/global.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsify.css">

    <!-- TypeKit Code -->
    <script type="text/javascript" src="//use.typekit.net/eam5ytk.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!--WP Generated Header -->
      <?php wp_head(); ?>
    <!--End WP Generated Header -->
  </head>
  <body>

    <header role="banner">
      <div class="contain">
        <img class="logo" src="<?php bloginfo('template_url') ?>/img/supersmith.svg" alt="Supersmith Logo">
        <h1><a href="/" title="Link to the Homepage">TimLikesToTeach.com</a></h1>
      </div><!-- end .contain -->
    </header><!-- /header -->

    <section class="main-content" role="main">
      <div class="contain">
        <h2>Learn Web Design, Front-End Development, WordPress, Scss, and more with Your Pal, <a href="http://timothybsmith.com" title="Tim Smith">Tim Smith</a>.</h2>
        
        <div class="video-pusher">
          <!-- video embed here -->
          <iframe src="http://player.vimeo.com/video/60409948" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div> <!-- end .video-pusher -->

        <!-- Campaign Monitor Form -->
        <div class="newsletter">
          <form action="http://anythingoes.createsend.com/t/t/s/btuld/" method="post" id="subForm">
            <div>
            <label class="screen-reader-text" for="btuld-btuld">Email:</label>
            <input class="email-field" type="text" name="cm-btuld-btuld" id="btuld-btuld" placeholder="E-mail Address" />
            <input class="submit" type="submit" value="Notify Me" />
            </div>
          </form>
        </div><!-- end .newsletter -->
      </div><!-- end .contain -->
    </section>

    <footer class="footer" role="contentinfo">
      <div class="contain">
        <small><em>Tim Likes To Teach</em> &copy; <?php echo date('Y') ?> Anythin&rsquo; Goes LLC.</small>
      </div>
    </footer>

    <!-- FitVids -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/stuff-ck.js"></script>

    <!--WP Generated Footer -->
    <?php wp_footer(); ?>
    <!--End WP Generated Footer -->
  </body>
</html>