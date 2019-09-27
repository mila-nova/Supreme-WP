<?php
get_header('custom');
?>
<div class="main-container">
	<main id="main-single-page" class="print-content">

		<?php

		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="post-wrap" id="single-post">
				<!-- Post title -->
				<div class="post-title"> <h1><?php the_title(); ?></h1></div>
				<!-- Display post picture thumbnails -->
				<div class="post-thumb">
					<?php the_post_thumbnail('post-pic-size'); ?>
									<!-- Display picture Caption -->
				<p class="pic-caption"><?php the_post_thumbnail_caption() ?></p>
				</div>
				<!-- Display the Post's content in a div box. -->
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
				<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
			</div>
		<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- <h1 style="color: red">!!!!Single template here!!!!</h1> -->
