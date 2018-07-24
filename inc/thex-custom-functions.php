<?php
/**
 * TheX custom functions and definitions
 *
 * @package TheX
 */


/* custom excetpt & readmore */

// custom excerpt length
if ( ! function_exists( 'thex_custom_excerpt_length' ){
      function thex_custom_excerpt_length( $length ) {
   `     return 20;
      }
   add_filter( 'excerpt_length', 'thex_custom_excerpt_length', 999 );
}
      // add more link to excerpt

 if ( ! function_exists( 'thex_custom_excerpt_more' ){
      function thex_custom_excerpt_more($more) {
         global $post;
         return '... <a class="more-link" href="'. get_permalink($post->ID) . '">'. __(' <button class="readmore"><i class="fa fa-angle-double-right"></i> Read More</button>', 'thex') .'</a>';
      }
    add_filter('excerpt_more', 'thex_custom_excerpt_more');
}
