
<?php if(is_home()) { get_header(); } else { get_header('custom'); } wp_head(); ?>
	
<div class="main-container">
<main id="main" class="site-main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="post-wrap">
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<!-- Display post picture thumbnails -->
<div class="post-thumb">
	<?php the_post_thumbnail('post-pic-size'); ?>
</div>

 <!-- Display the date (November 16th, 2009 format) -->
 <small><?php the_time('F jS, Y'); ?></small>

<!-- Display the Post's excerpt in a div box. -->
 	<div class="entry">
 	<?php the_excerpt(); ?>
 	</div>
</div>
	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



	<!-- Display only on home page -->
<div class="yellow-bar">
<p class="icon"><i class="far fa-comment-alt"></i></p>

<?php if ( is_home() ) {  
if ( is_active_sidebar( 'sidebar-6' ) ) :
    dynamic_sidebar( 'sidebar-6' );
endif; } ?>


</div>
<div class="purple-bar">
	<p class="icon"><i class="fas fa-external-link-alt"></i></p>

<?php if ( is_home() ) {  
if ( is_active_sidebar( 'sidebar-7' ) ) :
    dynamic_sidebar( 'sidebar-7' );
endif; } ?>

</div>

</main><!-- #main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- <h1 style="color: red">THIS IS INDEX TEMPLATE</h1> -->
