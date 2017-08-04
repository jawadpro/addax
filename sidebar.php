<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Addax
 * @since Addax 1.0
 */
?>

<?php if ( is_active_sidebar( 'default_sidebar' )  ) : ?>
	<div class="col-md-4">
    <div class="addax-sidebar style2">
		    <?php dynamic_sidebar( 'default_sidebar' ); ?>
    </div>
	</div><!-- .sidebar .widget-area -->
<?php endif; ?>
