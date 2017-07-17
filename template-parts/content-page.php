<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Best_Blogger
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php
            if( has_post_thumbnail() ){ ?>
        <figure class="featured-image full-bleed">
            <?php
                the_post_thumbnail( 'best_blogger_full_bleed' );
            ?>
        </figure>
        
        <?php    } ?>
        
        <div class="entry-content post-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'best-blogger' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
        
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'best-blogger' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
            <?php get_sidebar( 'page' );  ?>    
</article><!-- #post-<?php the_ID(); ?> -->
