<article class="addax-blog-card">

  <div class="ab-img">
      <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"</a>
  </div>

  <div class="ab-content">
    <p class="ab-cat"><a href="#"><?php the_category( '/' ); ?></a></p>
    <h2><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h2>
    <div class="ab-meta">
      <span>by <a href=""><?php echo get_the_author(); ?></a></span>
      <span><?php the_date(); ?></span>
    </div>
    <p class="post-con"><?php the_excerpt(); ?></p>

    <div class="share-icons">
        <ul>
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
      </div>

    </div>

</article>
