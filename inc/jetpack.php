<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package the worlds greatest theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function the_worlds_greatest_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'the_worlds_greatest_theme_jetpack_setup' );
