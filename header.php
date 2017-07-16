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
  <?php
  addax_header();
  addax_page_slider();
  ?>
