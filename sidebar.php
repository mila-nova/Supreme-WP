
<aside id="secondary" class="widget-area">

<div class="social-menu-aside">
				
			<?php
			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_id'        => 'cosial-sidebar',
			) );
			?>
</div>

<div class="main-side-bar">	
<?php 
// Main side bar
if ( is_active_sidebar( 'sidebar-1' ) ) :
   dynamic_sidebar( 'sidebar-1' ); 
endif;
?>

</div>


<!-- Orange side bar -->
<div class="orange-side-bar">
<p class="icon"><i class="fas fa-globe"></i></p>
<?php if ( is_active_sidebar( 'sidebar-4' ) ) :
 dynamic_sidebar( 'sidebar-4' );
endif; ?>
</div>

<!-- Blue side bar -->
<div class="blue-side-bar">
<p class="icon"><i class="fas fa-quote-left"></i></p>
<?php if ( is_active_sidebar( 'sidebar-5' ) ) :
    dynamic_sidebar( 'sidebar-5' );
endif; ?> 
</div>

</aside><!-- #secondary -->



