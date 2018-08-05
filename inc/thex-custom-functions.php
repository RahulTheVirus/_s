<?php
/**
 * TheX custom functions and definitions
 *
 * @package TheX
 */


/* custom excetpt & readmore */

// custom excerpt length
if ( ! function_exists( 'thex_custom_excerpt_length' )):
      function thex_custom_excerpt_length( $length ) {
         return 20;
      } 
   add_filter( 'excerpt_length', 'thex_custom_excerpt_length', 999 );
     
      // add more link to excerpt
    function thex_custom_excerpt_more($more) {
         global $post;
         return '... <a class="more-link" href="'. get_permalink($post->ID) . '">'. __(' <button class="readmore"><i class="fa fa-angle-double-right"></i> Read More</button>', 'thex') .'</a>';
      }
    add_filter('excerpt_more', 'thex_custom_excerpt_more');
endif;

// Back to top button 
if ( ! function_exists( 'thex_back_to_top' )){
    function thex_back_to_top() {
        wp_enqueue_script('back-to-top', get_stylesheet_directory_uri() . '/js/backtopbtn.js');
    }
}
add_action( 'wp_enqueue_scripts', 'thex_back_to_top' );

