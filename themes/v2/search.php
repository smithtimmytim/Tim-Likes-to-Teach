<?php get_header(); ?>

<section class="main-content" role="main">
  <div class="contain">
    
    <h2 class="page-title">Search Results For: <?php the_search_query(); ?></h2>

    <div class="module">
      <div class="search-form page-search">
        <?php get_search_form(); ?>
      </div><!-- .search -->
    </div>

    <div class="module">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <article class="result">
        <h2><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
      </article>

    <?php endwhile; ?>

    <?php else : ?>
      <article class="result">
        <p>No results found. Try another search?</p>
      </article> 
    <?php endif; ?>
    
    </div><!-- .module -->

  </div><!-- contain -->
</section> <!-- end .main-content -->

<?php get_footer(); ?>