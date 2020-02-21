<?php
/**
 * uza functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uza
 */


 /**
  * Setup.
  */
 require get_template_directory() . '/inc/setup.php';

/**
 * Helpers.
 */
require get_template_directory() . '/inc/helper.php';

/**
 * Widgets init.
 */
require get_template_directory() . '/inc/widgets/widgets_init.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/post-types/portfolio.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/classes/uza-walker-nav-menu-class.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/front/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
