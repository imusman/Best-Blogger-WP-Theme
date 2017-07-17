<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Best_Blogger
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        if( has_post_thumbnail() ) : ?>
    <figure class="featured-image index-image">
        <a href="<?php esc_url( the_permalink() ); ?> " rel="bookmark" >
            <?php
                the_post_thumbnail();
            ?>
        </a>
    </figure>    
    
    
   <?php endif ?>
    
    <div class="post__content">
        
            <header class="entry-header">
                <?php best_blogger_categories(); ?>
                    <?php
                    if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                            <?php best_blogger_posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php
                    endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                    <?php
                        
                    $excerpt_length = get_theme_mod( 'length_setting' );
                    
                    if( 'excerpt'   === $excerpt_length  ){
                           the_excerpt();
                    }else{
                        the_content();
                    }
                        
                    ?>
            </div><!-- .entry-content -->
            <?php 

                $read_more_link =  sprintf(
                                    wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __( 'Continue Reading<span class="screen-reader-text"> "%s"</span>', 'best-blogger' ),
                                            array(
                                                    'span' => array(
                                                            'class' => array(),
                                                    ),
                                            )
                                    ),
                                    get_the_title()
                            );

            ?>



            <footer class="entry-footer">
                    <?php best_blogger_entry_footer(); ?>
            </footer><!-- .entry-footer -->
            <div class="continue-reading">
                <a href="<?php echo get_permalink(); ?>" rel="bookmark"> <?php echo $read_more_link; ?> </a>
            </div>        
    </div> 
</article><!-- #post-<?php the_ID(); ?> -->
