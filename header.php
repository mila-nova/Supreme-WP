<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?> <!-- wp shows panel -->
		
	</head>

		<body class="wp-custom-logo customize-partial-edit-shortcuts-shown custom-background">
		
		<div id="wrapper"><!-- closes in footer -->

		<header id="masthead" class="site-header">
		
		<div class="home-icon" id="home-icon"><a href="<?php echo get_home_url(); ?>" title="Hem Sida"><i class="fas fa-home"></i></a></div>
		
		<div class="site-banner">
		
		<div class="site-logo-pic">	
			<?php
			echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ); /* instead of calling the logo using the_custom_logo() - gets u a link, call it this way instead:*/
		?>
		</div>
			<div class="header-text-area">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php $mila_description = get_bloginfo( 'description', 'display' );
			if ( $mila_description || is_customize_preview() ) :?>
				
				<p class="site-description"><?php echo $mila_description; ?></p>
			<?php endif; ?>
			<p class="header-button"><a href="http://localhost/wordpress/artiklar/" class="read-more-header">Läs mer</a></p>
		</div><!-- header text area -->
		</div><!-- .site-banner -->
		
		<nav id="site-navigation" class="main-navigation">
			<div class="current-menu-item home-icon-nav" id="home-icon-nav"><a href="<?php echo get_home_url(); ?>"><i class="fas fa-home"></i></a></div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

