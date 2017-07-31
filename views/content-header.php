<?php
/*
* Addax Header Content
*/

 global $addax_theme_options;
 $header_layout = ( isset( $addax_theme_options['header-layout'] ) ) ? $addax_theme_options['header-layout'] : 'style1';
 $addax_logo = ( isset( $addax_theme_options['addax-logo']['url'] ) && !empty( $addax_theme_options['addax-logo']['url'] ) )  ? $addax_theme_options['addax-logo']['url'] : get_template_directory_uri(). '/assets/img/logo-sticky.png' ;
 $addax_sticky_logo = ( isset( $addax_theme_options['addax-sticky-logo']['url'] ) && !empty( $addax_theme_options['addax-sticky-logo']['url'] ) ) ? $addax_theme_options['addax-sticky-logo']['url'] : get_template_directory_uri(). '/assets/img/logo-sticky.png' ;
 $addax_header_tranparent = ( $addax_theme_options['transparent-header-checkbox'] == true ) ? 'transparent' : '';
 $addax_topbar =  ( isset( $addax_theme_options['addax-topbar'] ) && !empty( $addax_theme_options['addax-topbar'] ) ) ? $addax_theme_options['addax-topbar'] : '';
 $addax_topbar_text = ( isset( $addax_theme_options['topbar-text'] ) && !empty( $addax_theme_options['topbar-text'] ) ) ? $addax_theme_options['topbar-text'] : '';
 $addax_topbar_number = ( isset( $addax_theme_options['topbar-phone'] ) && !empty( $addax_theme_options['topbar-phone'] ) ) ? $addax_theme_options['topbar-phone'] : '';
 $addax_topbar_email = ( isset( $addax_theme_options['topbar-email'] ) && !empty( $addax_theme_options['topbar-email'] ) ) ? $addax_theme_options['topbar-email'] : '';
 $addax_topbar_social = ( isset( $addax_theme_options['topbar-social'] ) ) ? $addax_theme_options['topbar-social'] : '';
 $addax_search = ( isset( $addax_theme_options['header-search'] ) ) ? $addax_theme_options['header-search'] : '';
?>

 <!-- header starts here // style 1 // style 2 -->
 <header id="addax-header" class="<?php echo $header_layout .' '. $addax_header_tranparent; ?>">

  <?php if( $addax_topbar == true ): ?>

   <div class="topBar"><!--topbar-->

     <div class="container">

       <div class="tb-left">

         <div class="contact-details">

           <ul>
             <li><?php echo esc_html( $addax_topbar_text ); ?> <?php echo esc_html( $addax_topbar_number ); ?></li>
             <li><a href="mailto:<?php echo esc_html( $addax_topbar_email ); ?>"><?php echo esc_html( $addax_topbar_email ); ?></a></li>
           </ul>

         </div>

      </div>


      <div class="tb-right">

          <?php if(  $addax_topbar_social == true ) : ?>
         <div class="social-icons">
           <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
           <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
           <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google"><i class="fa fa-google"></i></a>
           <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
           <a href="#" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
         </div>
       <?php endif; ?>

      </div>


     </div>

   </div><!-- topBar ends -->

  <?php endif; ?>

   <!-- addax nav bar -->
   <div class="navbar navbar-default" role="navigation" id="addax-navBar">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">
           <img src="<?php echo $addax_logo; ?>" class="main-logo">
           <img src="<?php echo $addax_sticky_logo; ?>" class="sticky-logo">
         </a>
       </div>
       <div class="navbar-collapse collapse">


         <!-- Right nav -->
         <ul class="nav navbar-nav navbar-right">
          <?php addax_main_menu(); ?>
          <?php if( $addax_search == true ): ?>
             <li class="h-icon s-toggle"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          <?php endif; ?>
         </ul>

       </div><!--/.nav-collapse -->
     </div><!--/.container -->
   </div>



   <div class="addax-search">
       <div class="container">

         <input type="text" placeholder="Type here to search">

         <div class="s-icons">
           <a href="#" class="s-search"><i class="fa fa-search" aria-hidden="true"></i></a>
           <a href="#" class="s-toggle"><i class="fa fa-times" aria-hidden="true"></i></a>

         </div>

       </div>
   </div>


 </header>
 <!-- header ends here -->

 <?php echo do_shortcode(''); ?>
