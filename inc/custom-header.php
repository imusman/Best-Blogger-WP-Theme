<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Best_Blogger
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses best_blogger_header_style()
 */
function best_blogger_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'best_blogger_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1200,
		'height'                 => 450,
		'flex-height'            => true,
		'wp-head-callback'       => 'best_blogger_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'best_blogger_custom_header_setup' );

