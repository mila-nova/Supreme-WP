
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


</aside><!-- #secondary -->



