
<div class="addax-single-post-box">

      <?php
       $post_thumbnail_url = get_the_post_thumbnail_url( get_the_ID() , 'addax-post-thumbnail');
       $post_category = get_the_category();
       $post_year  = get_the_time('Y');
       $post_month = get_the_time('m');
       $post_day   = get_the_time('d');
      ?>

        <div class="addax-post-image">
        <?php if( !empty( $post_category[0]->cat_name  ) ) : ?>
        <a class="addax-single-post-cat" href="<?php echo get_category_link( $post_category[0]->term_id ); ?>">
          <?php echo $post_category[0]->cat_name; ?>
        </a>
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo $post_thumbnail_url; ?>">
        </a>
      </div>

      <div class="addax-post-data">
        <a href="<?php the_permalink(); ?>"><h3 class="addax-post-title"><?php the_title(); ?></h3></a>
        <p class="addax-single-post-meta">
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo get_the_author(); ?></a> |
          &nbsp;<a href="<?php echo get_day_link( $post_year, $post_month, $post_day); ?>"<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date('M-d-Y'); ?></a> |
          &nbsp;<a href="<?php echo comments_link(); ?>"><i class="fa fa-comments" aria-hidden="true"></i> <?php echo comments_number(); ?></a>
        </p>
        <p><?php the_excerpt(); ?></p>
      </div>

</div>
