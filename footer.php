<?php
/*
================================================================================================
Beyond Expectations - footer.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files
for a theme (the other header.php). The footer.php template file only displays the footer
section of this theme.

@package        Beyond Expectations WordPress Theme
@copyright      Copyright (C) 2016. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (http://lumiathemes.com/)
================================================================================================
*/
// For network. Shows network copyright.
?>
		</section>
	 <footer id="site-footer" class="site-footer">
		<div id="site-info" class="site-info">
			<div class="info-title">
				&copy; <?php _e( 'Copyright ', 'beyond-expectations-child-portal' ); ?> <?php echo date('Y'); ?> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			<?php if( function_exists( 'adrotate_group' ) ) { echo adrotate_group(5); } ?>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>