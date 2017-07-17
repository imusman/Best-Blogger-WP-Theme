<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Best_Blogger
 */

?>

	</div><!-- #content -->

        <?php get_sidebar( 'footer' ); ?>    
        
    	<footer id="colophon" class="site-footer">
		<div class="site-info">
                    <nav id="" class="social-menu">
                        <?php
				wp_nav_menu( array(
					'theme_location' => 'social_menu',
					'menu_id'        => 'social-menu',
				) );
			?>
                    </nav>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'best-blogger' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'best-blogger' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'best-blogger' ), 'best-blogger', '<a href="https://automattic.com/">Usman Ali</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
