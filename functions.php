<?php

function ms_theme_support() {
  add_theme_support('title-tag');
  // add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'ms_theme_support');

function ms_register_styles () {
  wp_enqueue_style('ms-css', get_template_directory_uri() . '/assets/css/styles.css');
//  wp_enqueue_style('ms-block-styles', get_template_directory_uri() . '/assets/css/blocks.css');
//  wp_enqueue_style('ms-simple-scroll-animations', 'https://cdn.jsdelivr.net/gh/Michal-Skoula/simple-scroll-animations@master/release/latest/styles.css');
  wp_enqueue_style('ms-swiperjs-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
}
add_action( 'wp_enqueue_scripts', 'ms_register_styles');

function ms_register_scripts () {
  wp_enqueue_script('ms-swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', args: array( 'strategy' => 'defer' ));
  wp_enqueue_script('ms-simple-scroll-animations', 'https://cdn.jsdelivr.net/gh/Michal-Skoula/simple-scroll-animations@master/release/latest/script.js', args: array( 'strategy' => 'defer' ));
  wp_enqueue_script('ms-website-scripts', get_template_directory_uri() . '/assets/js/script.js', args: array( 'strategy' => 'defer' ));

}
add_action( 'wp_enqueue_scripts', 'ms_register_scripts');

/**
 * Initialization of all ACF blocks
 */
function ms_register_acf_blocks() {

  register_block_type( __DIR__ . '/blocks/hero' );
  register_block_type( __DIR__ . '/blocks/highlightstart' );
  register_block_type( __DIR__ . '/blocks/highlightend' );
  register_block_type( __DIR__ . '/blocks/testimonials' );
  register_block_type( __DIR__ . '/blocks/faq' );
  register_block_type( __DIR__ . '/blocks/contact');
  register_block_type( __DIR__ . '/blocks/projects');


}
add_action( 'init', 'ms_register_acf_blocks' );
 
/**
 * Outputs the URL of an image located in the /assets/images/ directory.
 * @param string $path Name of the image file in /assets/images/ without
 * trailing slash (/).
 */
function image(String $path): string {
  return esc_url(get_template_directory_uri() . '/assets/images/' . $path);
}