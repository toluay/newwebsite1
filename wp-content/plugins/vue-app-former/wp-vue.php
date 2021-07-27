<?php
/**
 * Plugin Name: WordPress Vue Tutorial
 * Description: A demo on how to use Vue in WordPress.
 */

//Add shortscode
function func_wp_vue(){
    $str= "<div id='divWpVue'>"
    ."Message from Vue: "
    ."</div>";
  return $str;
 }
 add_shortcode( 'wpvue', 'func_wp_vue' );






?>