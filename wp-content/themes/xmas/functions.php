<?php

add_action('wp_enqueue_scripts', 'xmas_add_scripts');
function xmas_add_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
  wp_enqueue_style('swiper', '//unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_style('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css');

  // <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  // <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
  // <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  // <script src="js/main.js"></script>
  wp_enqueue_script('swiper', '//unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0', true);

  // jquery
  wp_deregister_script( 'jquery-core' );
  wp_register_script( 'jquery-core', '//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js');
  wp_enqueue_script( 'jquery' );

  wp_enqueue_script('script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}