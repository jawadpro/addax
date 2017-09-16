<?php
/**
 * The template for displaying the header
 * @package WordPress
 * @subpackage Addax
 * @since Addax 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php  wp_title( '|' , true , 'right' );  echo get_bloginfo('name') ?></title>
    
  <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <!-- <div id="addax-loader">
      <div class="leftEye"></div>
      <div class="rightEye"></div>
      <div class="mouth"></div>
    </div>
    <!-- loader ends -->
  <?php
  global $post;
  addax_header();
  addax_title_bar( $post->ID );
  addax_page_slider();
  ?>
