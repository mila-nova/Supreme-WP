<?php
/*
* Template Name: Simple and Short Aside
*/
?>
<?php get_header('custom'); ?>
<div class="main-container">
	<main id="main-single-page">

		
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div class="post-wrap" id="single-post">
			<!-- DIsplay post title -->
			<h1><?php the_title(); ?></h1>
			<!-- Display post picture thumbnails -->
			<div class="post-thumb">
				<?php the_post_thumbnail('post-banner-size'); ?>
				<!-- Display picture Caption -->
				<p class="pic-caption"><?php the_post_thumbnail_caption() ?></p>
			</div>
			<!-- Display the Post's content in a div box. -->
			<div class="post-content">
				<?php the_content(); ?>
			</div>

		</div>
		<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		</main><!-- #main -->
		<?php get_sidebar('short'); ?>
		<?php get_footer(); ?>
<!-- 		<h1 style="color: red">simple AND !!!! SHORT !!!!ASIDE template here</h1> -->