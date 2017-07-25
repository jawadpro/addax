<?php

   /* ================ ADDAX HEADER FUNCTION ============== */

  if ( ! function_exists( 'addax_header' ) ) {
      function addax_header() {
              get_template_part( 'views/content' , 'header' );
          }
  }


  /* ================ ADDAX FOOTER FUNCTION ============== */

 if ( ! function_exists( 'addax_footer' ) ) {
     function addax_footer() {
             get_template_part( 'views/content' , 'footer' );
         }
 }

   /* ================ ADDAX SLIDER FUNCTION ============== */

  if ( ! function_exists( 'addax_page_slider' ) ) {
      function addax_page_slider() {
            global $post;
            $slider_page_meta = esc_attr( get_post_meta( $post->ID , 'page_header_shortcode' ,true ) );
            if( !empty( $slider_page_meta ) )
            {
              echo do_shortcode($slider_page_meta);

            }
      }
  }


  /* ================ ADDAX MAIN MENU ============== */

  if ( ! function_exists( 'addax_main_menu' ) ) {
      function addax_main_menu()
      {
        $locations = get_nav_menu_locations();

          $addax_header_one = array(
            'theme_location' => 'main-menu',
            'container' => '',
            'fallback_cb' => true,
            'items_wrap' => '%3$s',
            'walker' => new Addax_walker_nav_menu(),
          );
          wp_nav_menu( $addax_header_one );

      }
  }


  /* ================ ADDAX PAGE TITLE BAR ============== */

  if ( ! function_exists( 'addax_title_bar' ) ) {
      function addax_title_bar()
      {
        ob_start();
        ?>

        <div id="addax-page-title" class="left" style="background:#f00;">

          <div class="container">

            <h1>Addax Elements</h1>
            <h4>Subtitle Goes here</h4>

          </div>
        </div>

        <?php
        return ob_get_clean();
      }
  }

  /* ================ ADDAX SUBSCRIPTION ============== */

  add_action( "wp_ajax_subscription_form_callback", "subscription_form_callback" );
  add_action( "wp_ajax_nopriv_subscription_form_callback", "subscription_form_callback" );
    function subscription_form_callback()
    {
          $data = [
        'email'     => 'shayaan.pro@gmail.com',
        'status'    => 'subscribed',
          ];

      addax_mailchimp_subscribe_request($data);

      die();
    }


    function addax_mailchimp_subscribe_request( $data )
    {
      $apiKey = '';
      $listId = 'd5efd40a59';

  $data = array(
		'apikey'        => $apiKey,
    'email_address' => $data['email'],
		'status'        => $data['status'],
	);
	$mch_api = curl_init(); // initialize cURL connection

	curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($apiKey,strpos($apiKey,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . md5(strtolower($data['email'])));
	curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$apiKey )));
	curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
	curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
	curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
	curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
	curl_setopt($mch_api, CURLOPT_POST, true);
	curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json

	$result = curl_exec($mch_api);
	$titlt_result =  json_decode($result)->title;
  $jsn_result = json_decode($result);

  if( !empty( $jsn_result ) || $jsn_result !== 'NULL' )
  {

  }
  elseif( $jsn_result == 'NULL' ) {
    echo "Please enter your mailchimp api to make this form working";
  }



}
?>
