<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class CMB2_Google_Font_CMB2_Field {

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
    $this->cmb2_get_font_family();
    $this->cmb2_get_google_font_weight();
    $this->cmb2_get_google_font_style();
    $this->cmb2_get_google_font_decoration();

	}


  /**
   * Returns options markup for a state select field.
   * @param  mixed $value Selected/saved state
   * @return string       html string containing all state options
   */
    public function cmb2_get_font_family( $value = false ) {

			$m = new CMB2_Google_Font_Function('CMB2-Google-Fonts', '1.0.0');
			$display_list = $m->api_request_amd_decode();

    	$item_list = $display_list['items'];
			$api_key = get_option('google_font_option_page');
				if ( ! empty($api_key['api_key']) ) {
			    	$font_family = '';
			    	foreach ( $item_list as $abrev => $family ) {
								$font_family .= '<option value="'. $family['family'] .'" '. selected( $value, $family['family'], false ) .'>'. $family['family'] .'</option>';
						}
				}
    	return $font_family;
    }



    function cmb2_get_google_font_weight( $value = false ) {

    	$font_weight_list = array('default', 'bold', 'Normal', '100', '200', '300', '400', '500', '600', '700', '800', '900');


    	$font_weight = '';
    	foreach ( $font_weight_list as $abrev => $weight ) {

    			 $font_weight .= '<option value="'. $weight .'" '. selected( $value, $weight, false ) .'>'. $weight .'</option>';

    	}

    	return $font_weight;
    }



    function cmb2_get_google_font_style( $value = false ) {

    	$font_style_list = array('default' ,'Normal', 'Italic', 'Oblique');


    	$font_style = '';
    	foreach ( $font_style_list as $abrev => $style ) {

    			 $font_style .= '<option value="'. $style .'" '. selected( $value, $style, false ) .'>'. $style .'</option>';

    	}

    	return $font_style;
    }



    function cmb2_get_google_font_decoration( $value = false ) {

    	$font_style_decoration = array('default', 'underline', 'underline overline', 'line-through', 'overline');


    	$font_decoration = '';
    	foreach ( $font_style_decoration as $abrev => $decoration ) {

    			 $font_decoration .= '<option value="'. $decoration .'" '. selected( $value, $decoration, false ) .'>'. $decoration .'</option>';

    	}

    	return $font_decoration;
    }

    /**
     * Render Address Field
     */
    function cmb2_render_google_fonts_field_callback( $field, $value, $object_id, $object_type, $field_type ) {

    	// make sure we specify each part of the value we need.
    	$value = wp_parse_args( $value, array(
    		'api_key'           => '',
    		'css_tag'           => '',
        'color'           => '',
    		'font_family'       => '',
    		'font-size'         => '',
    		'font-weight'	      => '',
    		'font-style' 		    => '',
    		'font-decoration'   => '',
    		'line-height'       => '',
    		'letter-spacing'    => '',
    	) );

    	?>
    	<div ><p><label for="<?php echo $field_type->_id( '_css_tag' ); ?>'">Insert CSS Tag</label></p>
    	<?php echo $field_type->input( array(
    			'name'  => $field_type->_name( '[css_tag]' ),
    			'id'    => $field_type->_id( '_css_tag' ),
    			'value' => $value['css_tag'],
    			'desc'  => ' 2. Insert CSS tag name to display these font settings (Example: .site-main)',
    		) ); ?>
    	</div>
    	<div ><p><label for="<?php echo $field_type->_id( '_font_family' ); ?>'">Font Family</label></p>
    	<?php echo $field_type->select( array(
    		'name'    => $field_type->_name( '[font-family]' ),
    		'id'      => $field_type->_id( '_font_family' ),
    		'options' => $this->cmb2_get_font_family( $value['font-family'] ),
    		'desc'    => '',
    	) ); ?>
    	</div>
      <div class="google-font-colorpicker" ><p><label for="<?php echo $field_type->_id( '_color' ); ?>'">Font Color</label></p>
      	<?php echo $field_type->input( array(
          'name'  => $field_type->_name( '[color]' ),
    			'id'    => $field_type->_id( '_color' ),
    			'class' => 'cmb2-colorpicker color-picker',
          'value' => $value['color'],
    			'data-default-color' => $field_type->args( 'default' ),
    			'data-alpha'         => 'true',
          //'value' => $value['color'],

    		) ); ?>
       </div>
    	<div class="slider-wrapper" ><p><label for="<?php echo $field_type->_id( 'font-size-range-slider' ); ?>'">Font Size</label></p>
    	<?php echo $field_type->input( array(
    			'name'  => $field_type->_name( '[font-size]' ),
    			'id'    => $field_type->_id( 'font-size-range-slider' ),
    			'value' => $value['font-size'],
    			'type' => 'range',
    			'class' => 'fluid-slider',
    			'min' => '0',
    			'max' => '100',
    			'desc' => '',

    	) ); ?>
    	<span id="range-label" class="range-label"><?php echo $value['font-size']; ?>px</span>
    	</div>
    	<div><p><label for="<?php echo $field_type->_id( '_font_weight' ); ?>'">Font Weight</label></p>
    		<?php echo $field_type->select( array(
    			'name'    => $field_type->_name( '[font-weight]' ),
    			'id'      => $field_type->_id( '_font_weight' ),
    			'options' => $this->cmb2_get_google_font_weight( $value['font-weight'] ),
    			'class' => 'font-weight-input-field',
    			'desc'  => '',
    		) ); ?>
    	</div>
    	<div><p><label for="<?php echo $field_type->_id( '_font_style' ); ?>'">Font Style</label></p>
    		<?php echo $field_type->select( array(
    			'name'    => $field_type->_name( '[font-style]' ),
    			'id'      => $field_type->_id( '_font_style' ),
    			'options' => $this->cmb2_get_google_font_style( $value['font-style'] ),
    			'class' => 'font-style-input-field',
    			'desc'  => '',
    		) ); ?>
    	</div>
    	<div><p><label for="<?php echo $field_type->_id( '_font_decoration' ); ?>'">Font Decoration</label></p>
    		<?php echo $field_type->select( array(
    			'name'    => $field_type->_name( '[font-decoration]' ),
    			'id'      => $field_type->_id( '_font_decoration' ),
    			'options' => $this->cmb2_get_google_font_decoration( $value['font-decoration'] ),
    			'value' => $value['font-decoration'],
    			'class' => 'font-decoration-input-field',
    			'desc'  => '',
    		) ); ?>
    	</div>
    	<div class="line-height-wrapper" ><p><label for="<?php echo $field_type->_id( 'line-height-range-slider' ); ?>'">Line Height</label></p>
    	<?php echo $field_type->input( array(
    			'name'  => $field_type->_name( '[line-height]' ),
    			'id'    => $field_type->_id( 'line-height-range-slider' ),
    			'value' => $value['line-height'],
    			'type' => 'range',
    			'class' => 'line-height-slider',
    			'min' => '0.00',
    			'max' => '10.00',
    			'step' => '0.1',
    			'desc' => '',

    	) ); ?>
    	<span id="line-height-id" class="class-line-height"><?php echo $value['line-height']; ?>px</span>
    	</div>
    	<div class="letter-spacing-wrapper" ><p><label for="<?php echo $field_type->_id( 'letter-spacing-range-slider' ); ?>'">Letter Spacing</label></p>
    	<?php echo $field_type->input( array(
    			'name'  => $field_type->_name( '[letter-spacing]' ),
    			'id'    => $field_type->_id( 'letter-spacing-range-slider' ),
    			'value' => $value['letter-spacing'],
    			'type' => 'range',
    			'class' => 'letter-spacing-slider',
    			'min' => '0',
    			'max' => '10',
    			'step' => '0.1',
    			'desc' => '',

    	) ); ?>
    	<span id="letter-spacing-id" class="class-letter-spacing"><?php echo $value['letter-spacing']; ?>px</span>
    	</div>
    	<br class="clear">
    	<?php
    	echo $field_type->_desc( true );

    }


}
