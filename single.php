<?php get_header(); ?>

<div class="row">
<div class="container">

<?php
  if( have_posts() ) : while( have_posts() ) : the_post();
 ?>


    <div class="row">
      <div class="col-md-4" style="font-size:20px;color:#ccc;text-align:center;"><i class="fa fa-user-o" aria-hidden="true"></i> By: Author</span></div>
    </div>

    <p>
      <?php the_content(); ?>
    </p>

<?php endwhile; endif; ?>

</div>
</div>
<div class="clearfix"></div>




<?php

// If comments are open or we have at least one comment, load up the comment template.
                    			if ( comments_open() || get_comments_number() ) {
                    				comments_template();
                    			}




get_footer(); ?>
