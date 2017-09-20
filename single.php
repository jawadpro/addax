<?php get_header(); ?>

<br><br>
  <div class="container">

    <div class="row">

      <div class="col-md-8">

        <?php
          if( have_posts() ) : while( have_posts() ) : the_post();
          $post_thumbnail = get_the_post_thumbnail_url();
           $post_category = get_the_category();
           $term_id = ( !empty( $post_category ) ) ?  $post_category[0]->term_id : '' ;
           $cat_name = ( !empty( $post_category ) ) ?  $post_category[0]->cat_name : '' ;
           $cat_link = ( !empty( $term_id ) ) ?  get_category_link($term_id) : '' ;
        ?>

          <?php if( !empty( $post_thumbnail ) ) : ?>
          <div class="container-single-post">
            <img class="addax-single-post-thumb" alt="<?php the_title(); ?>" src="<?php echo $post_thumbnail; ?>">
          </div>
          <?php endif; ?>

          <h2> <?php the_title(); ?></h2>
          <div class="addax-single-post-meta addax-single-meta">
             <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php echo get_the_author(); ?></a>
            <?php echo '<a href="' . $cat_link . '"><i class="fa fa-tags" aria-hidden="true"></i> ' . $cat_name . '</a>'; ?>
            <a href="<?php echo comments_link(); ?>"><i class="fa fa-comments" aria-hidden="true"></i> <?php echo comments_number(); ?></a>
          </div>
          <br>
          <?php the_content(); ?>
          <div class="addax-share-button">
                        <a href="#">Share this Post</a>
                        <div class="icon-wrapper">
                            <ul>
                                <li><a target="_blank" href="https://twitter.com/share" data-url="{{ content.absolute_url }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://facebook.com/sharer/sharer.php?" data-url="{{ content.absolute_url }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#" onclick="javascript:window.open('https://www.linkedin.com/shareArticle?mini=true&amp;url={{ content.absolute_url }}&amp;title=','popup','width=600,height=600');"><i class="fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://plus.google.com/share?url={{ content.absolute_url }}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="close-social-icons"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="clearfix"></div>
                    <div class="addax-next-pre">
                      <?php
                      $prev = get_permalink(get_adjacent_post(false,'',false));
                      $next = get_permalink(get_adjacent_post(false,'',true));
                      if($prev != get_permalink()) { ?>
                          <a class="pull-left" href="<?php echo $prev; ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous Post</a>
                      <?php } if($next != get_permalink()) {?>
                          <a class="pull-right" href="<?php echo $next; ?>">Next Post <i class="fa fa-arrow-right" aria-hidden="true"> </i></i></a>
                      <?php } ?>
                    </div>

        <?php endwhile; endif; ?>
        <div class="clearfix"></div>


        <?php
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        ?>

      </div> <!---col-md-8 Ends---->

      <?php get_sidebar(); ?>

    </div> <!---Row Ends---->

  </div> <!---Container Ends---->

<?php get_footer(); ?>
