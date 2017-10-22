<?php
/**
 * The template for displaying the header
 * @package WordPress
 * @subpackage Addax
 * @since Addax 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <!-- <div id="addax-loader">
      <div class="leftEye"></div>
      <div class="rightEye"></div>
      <div class="mouth"></div>
    </div> -->
    <!-- loader ends
  <?php

  addax_header();
  addax_title_bar();
  addax_page_slider();

  ?>
