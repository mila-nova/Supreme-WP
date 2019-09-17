</div> <!-- class="main-container" -->

<footer class="site-footer">

	<?php wp_footer() ?> 	<!-- makes menu to display -->
<div class="footer-bar">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>

		<div class="site-info">
	
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mila' ), 'Mila', '<a href="#">Mila Kononova</a>' );
				?>

<div class="validation">
	<p>
	    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
      </div>
				<div class="copyright">
<p class="copyright-span">&copy;&nbsp;<?php dynamic_sidebar( 'sidebar-3' ); ?>, <?php dynamic_date(); ?>. All Right Reserved.
</div>
				</div><!-- .site-info -->
				
	

	</footer>
</div><!-- wrapper -->
	</body>
</html>