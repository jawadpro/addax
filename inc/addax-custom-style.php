<?php

  add_action( 'wp_head', 'addax_custom_styles', 15 );
  function addax_custom_styles(){

	global $addax_theme_options;

  echo '<style type="text/css">';

  // Header Styling

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

  if(isset( $addax_theme_options['topbar-link-color'] ))
  {
    $top_link_color = $addax_theme_options['topbar-link-color'];
    echo 'header .topBar a{ color:'. $top_link_color .' !important; }';
  }

  if(isset( $addax_theme_options['header-background-color'] ))
  {
    $header_bg_color = $addax_theme_options['header-background-color'];
    echo '.navbar-default{ background-color:'. $header_bg_color .' !important; }';
  }

  if(isset( $addax_theme_options['header-menu-color'] ))
  {
    $header_menu_color = $addax_theme_options['header-menu-color'];
    echo '#addax-header .navbar-nav > li > a{ color:'. $header_menu_color .' !important; }';
  }

  if( $addax_theme_options['transparent-header-checkbox'] == true )
  {
      echo '#addax-header{ color:#fff; }';
      echo '#addax-header.style3 .navbar-collapse{border-top:1px solid rgba(255,255,255,.1) !important; }';
  }

  // Footer Styling

  if(isset( $addax_theme_options['footer-background'] ))
  {
    $footer_bg_color = $addax_theme_options['footer-background'];
    echo '#addax-footer{ background:'. $footer_bg_color .' !important; }';
  }

  if(isset( $addax_theme_options['footer-text-color'] ))
  {
    $footer_txt_color = $addax_theme_options['footer-text-color'];
    echo '#addax-footer p , #addax-footer h2 { color:'. $footer_txt_color .' !important; }';
  }

  if(isset( $addax_theme_options['footer-links-color'] ))
  {
    $footer_links_color = $addax_theme_options['footer-links-color'];
    echo '#addax-footer a{ color:'. $footer_links_color .' !important; }';
  }

  if(isset( $addax_theme_options['menu-typography'] ))
  {
    echo $addax_theme_options['menu-typography'];
  }

  echo '</style>';
 }

 ?>
