<?php
get_header('custom');
?>
<div class="main-container">
<main id="main" class="site-main">

<h1><?php echo 'Posts by: ' . get_the_author_meta('display_name'); ?></h1>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="post-wrap">
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
	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</main><!-- #main -->


<?php get_sidebar('short'); ?>
<?php get_footer(); ?>
<!-- <h1 style="color: red">THIS IS AUTHOR TEMPLATE</h1> -->
