<?php

/*
Plugin Name: WordCamp Kyoto 2017
Plugin URI: http://e-yota.com/wckyoto2017
Description: WordPressがWordCamp Kyoto 2017に変わります。
Version: 1.0
Author URI: http://e-yota.com
License: GPLv2
*/

add_filter( 'the_content', function($content){
  return str_replace('WordPress', '<a href="https://2017.kyoto.wordcamp.org/"><span class="wckyoto2017">WordCamp Kyoto 2017</span></a>', $content);
});

add_action( 'wp_enqueue_scripts', function() {
  if ( is_admin() ) {
    return;
  }
  $cssurl = plugins_url('style.css', __FILE__);
  wp_enqueue_style( 'wckyoto2017', $cssurl);
});
