<?php
/**
* Template Name: Articles Template
*/
?> 
<!-- Enable header -->
<?php get_header('custom'); ?>
<!-- Main Content -->
<div class="main-container">
  <main id="main" class="site-main">

    <!-- Enable widget to display additional category meny(widget to make it optional for user) -->
    <?php 
    if ( is_active_sidebar( 'sidebar-8' ) ) :
      dynamic_sidebar( 'sidebar-8' );
    endif; ?>
    <!-- posts feed -->
    <?php
      // get all the categories from the database
    $cats = get_categories(); 
        // loop through the categries
    foreach ($cats as $cat) {
          // setup the cateogory ID
      $cat_id= $cat->term_id;
          // Make a header for the cateogry
      echo "<h1>".$cat->name."</h1>";
          // create a custom wordpress query
      query_posts("cat=$cat_id&posts_per_page=100");
          // start the wordpress loop!
      if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- post content -->
        <div class="post-wrap">
          <!-- Display post title with hyperlink -->
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <!-- Display post picture thumbnails -->
          <div class="post-thumb">
            <?php the_post_thumbnail('post-pic-size'); ?>
          </div>
          <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
          <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
          <!-- Display the Post's excerpt in a div box. -->
          <div class="entry">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <!-- If no posts created -->
      <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; } ?>
  </main><!-- #main -->

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
  <h1 style="color: red">THIS IS MAIN ARTICLE TEMPLATE</h1>