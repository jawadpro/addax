<?php get_header(); ?>

<div class="row">
<div class="container">

<?php
  if( have_posts() ) : while( have_posts() ) : the_post();
 ?>

    <h2><?php __( the_title() , 'addax' );  ?></h2>
    <div class="ab-meta">
        <span>by <a href="">Aurthor Name</a></span>
        <span>April 29, 2017</span>
    </div>

    <p>
      <?php the_content(); ?>
    </p>

<?php endwhile; endif; ?>

</div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
