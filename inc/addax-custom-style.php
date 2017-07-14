<?php

  add_action( 'wp_head', 'addax_custom_styles', 15 );
  function addax_custom_styles(){

	global $addax_theme_options;

  echo '<style type="text/css">';

  if(isset( $addax_theme_options['topbar-background-color'] ))
  {
    $top_bg_color = $addax_theme_options['topbar-background-color'];
    echo 'header .topBar{ background:'. $top_bg_color .' !important; }';
  }

  if(isset( $addax_theme_options['topbar-text-color'] ))
  {
    $top_text_color = $addax_theme_options['topbar-text-color'];
    echo 'header .topBar{ background:'. $top_text_color .' !important; }';
  }

  echo '</style>';
 }

 ?>
