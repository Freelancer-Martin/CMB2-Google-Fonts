<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       Freelancer Martin developerforwebsites@gmail.com
 * @since      1.0.0
 *
 * @package    CMB2_Google_Fonts
 * @subpackage CMB2_Google_Fonts/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @since      1.0.0
 * @package    CMB2_Google_Fonts
 * @subpackage CMB2_Google_Fonts/includes
 * @author     Freelancer Martin developerforwebsites@gmail.com
 */
class CMB2_Google_Font_Function {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
    $this->api_request_amd_decode();


	}

  public function my_error_notice() {
      ?>
        <div class="error notice">
            <p><?php _e( '1. Go -> Google Font API menu options page 2. -> Insert API key to box to start using thsi plugin  ' ); ?></p>
        </div>
      <?php
  }



  public function api_request_amd_decode() {
      $api_key = get_option('google_font_option_page');
        if ( ! empty($api_key['api_key']) ) {
          $request = wp_remote_get('https://www.googleapis.com/webfonts/v1/webfonts?key='.$api_key['api_key'].'');
          $response = json_decode( $request['body'], true );
        } else {
          add_action( 'admin_notices', array($this, 'my_error_notice') );
        }

      return $response;
      //print_r($request);
    }


  public function display() {
      $option_values = get_post_custom();
      $option_values_keys = array_keys($option_values);
      array_flip($option_values_keys);
      array_multisort($option_values_keys);
      //print_r($option_values_keys);
      for ($x = 0; $x <= ( count($option_values_keys) -3); $x++) {
        array_multisort($option_values_keys);
        if( ! empty( $option_values_keys ) ){
          $a1=array_fill(0,1,$option_values_keys);
          $array_values = array_values($a1);

          foreach ($array_values as $key => $value) {
               $css_tag =  get_post_meta( get_the_ID(), $value[$x], true );
               $font_family = $css_tag['font-family'];
               $font_family_replaced = preg_replace('/\s+/', '+', $font_family);
               $font_request = '<link href="https://fonts.googleapis.com/css?family='.$font_family_replaced.'" rel="stylesheet">';
               print_r($font_request);


               $new_css_field = new CMB2_Google_Font_Style($css_tag['css_tag'], '2', '3' , $css_tag['color'] , $css_tag['font-family'], $css_tag['font-size'], $css_tag['font-weight'],
               $css_tag['font-transform'], $css_tag['font-style'], $css_tag['font-decoration'], $css_tag['line-height'], $css_tag['letter-spacing'] );
               print_r($new_css_field->Display_CSS_Tag_Field());

          } // ned of foreach loop[]
        } // end of if statement
      } // end of for loop

  } // end of display function

}
