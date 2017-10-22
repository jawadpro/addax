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
 $addax_widget_one_icon = ( isset( $addax_theme_options['widget-one-icon'] ) ) ? esc_attr__( $addax_theme_options['widget-one-icon'] , 'addax' ) : '';
 $addax_widget_one_title = ( isset( $addax_theme_options['widget-one-title'] ) ) ? esc_attr__( $addax_theme_options['widget-one-title'] , 'addax' ) : '';
 $addax_widget_one_sub_title = ( isset( $addax_theme_options['widget-one-subtitle'] ) ) ? esc_attr__( $addax_theme_options['widget-one-subtitle'] , 'addax' ) : '';
 $addax_widget_two_icon = ( isset( $addax_theme_options['widget-two-icon'] ) ) ? esc_attr__( $addax_theme_options['widget-two-icon'] , 'addax' ) : '';
 $addax_widget_two_title = ( isset( $addax_theme_options['widget-two-title'] ) ) ? esc_attr__( $addax_theme_options['widget-two-title'] , 'addax' ) : '';
 $addax_widget_two_sub_title = ( isset( $addax_theme_options['widget-two-subtitle'] ) ) ? esc_attr__( $addax_theme_options['widget-two-subtitle'] , 'addax' ) : '';
 $addax_widget_three_icon = ( isset( $addax_theme_options['widget-three-icon'] ) ) ? esc_attr__( $addax_theme_options['widget-three-icon'] , 'addax' ) : '';
 $addax_widget_three_title = ( isset( $addax_theme_options['widget-three-title'] ) ) ? esc_attr__( $addax_theme_options['widget-three-title'] , 'addax' ) : '';
 $addax_widget_three_sub_title = ( isset( $addax_theme_options['widget-three-subtitle'] ) ) ? esc_attr__( $addax_theme_options['widget-three-subtitle'] , 'addax' ) : '';
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

          <?php
            if(  $addax_topbar_social == true ) :
            addax_social_icons();
            endif;
           ?>

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
         <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
           <img src="<?php echo $addax_logo; ?>" class="main-logo">
           <img src="<?php echo $addax_sticky_logo; ?>" class="sticky-logo">
         </a>

         <?php if( $header_layout == 'style3' ) :  ?>
         <!--header info box-->
         <div class="header-infoBox">
           <ul>

             <?php if( !empty( $addax_widget_one_title ) ) : ?>
             <li>
               <div class="hi-icon"><i class="<?php echo $addax_widget_one_icon; ?>" aria-hidden="true"></i></div>
               <div class="hi-text">
                 <h4><?php echo $addax_widget_one_title; ?></h4>
                 <p><?php echo $addax_widget_one_sub_title; ?></p>
               </div>
             </li>
             <?php endif; ?>

             <?php if( !empty( $addax_widget_two_title ) ) : ?>
             <li>
               <div class="hi-icon"><i class="<?php echo $addax_widget_two_icon; ?>" aria-hidden="true"></i></div>
               <div class="hi-text">
                 <h4><?php echo $addax_widget_two_title; ?></h4>
                 <p><?php echo $addax_widget_two_sub_title; ?></p>
               </div>
             </li>
             <?php endif; ?>

             <?php if( !empty( $addax_widget_three_title ) ) : ?>
             <li>
               <div class="hi-icon"><i class="<?php echo $addax_widget_three_icon; ?>" aria-hidden="true"></i></div>
               <div class="hi-text">
                 <h4><?php echo $addax_widget_three_title; ?></h4>
                 <p><?php echo $addax_widget_three_sub_title; ?></p>
               </div>
             </li>
            <?php endif; ?>

           </ul>
         </div>
         <!--end of header info box-->

       <?php endif; ?>

       </div>
       <div class="navbar-collapse collapse">


         <!-- Right nav -->
         <ul class="nav navbar-nav navbar-right dropStyle1 dropLight">
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
         <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
         <input type="text" value="<?php get_search_query(); ?>" name="s" placeholder="Type here to search">

         <div class="s-icons">
           <button class="s-search"><i class="fa fa-search" aria-hidden="true"></i></button>
           <a href="#" class="s-toggle"><i class="fa fa-times" aria-hidden="true"></i></a>
         </div>
         </form>
       </div>
   </div>


 </header>
 <!-- header ends here -->
