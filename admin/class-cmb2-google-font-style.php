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
class CMB2_Google_Font_Style {

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

   public $color;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $font_family;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $font_size;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $font_weight;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $font_transform;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $font_style;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $font_decoration;


   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $line_height;

   /**
    * Initialize the class and set its properties.
    *
    * @since    1.0.0
    * @param      string    $plugin_name       The name of this plugin.
    * @param      string    $version    The version of this plugin.
    */

     public $letter_spacing;

     /**
      * Initialize the class and set its properties.
      *
      * @since    1.0.0
      * @param      string    $plugin_name       The name of this plugin.
      * @param      string    $version    The version of this plugin.
      */

       public $CSS_tag;




	public function __construct( $CSS_tag, $plugin_name, $version,$color, $font_family, $font_size, $font_weight, $font_transform, $font_style, $font_decoration, $line_height, $letter_spacing  ) {

    $this->CSS_tag = $CSS_tag;
		$this->plugin_name = $plugin_name;
		$this->version = $version;
    $this->color = $color;
    $this->font_family = $font_family;
    $this->font_size = $font_size;
    $this->font_weight = $font_weight;
    $this->font_transform = $font_transform;
    $this->font_style = $font_style;
    $this->font_decoration = $font_decoration;
    $this->line_height = $line_height;
    $this->letter_spacing = $letter_spacing;

	}

	public function __toString()
    {
        return $this->foo;
				return $this->CSS_tag;
				return $this->plugin_name;
				return $this->version;
		    return $this->color;
		    return $this->font_family;
		    return $this->font_size;
		    return $this->font_weight;
		    return $this->font_transform;
		    return $this->font_style;
		    return $this->font_decoration;
		    return $this->line_height;
		    return $this->letter_spacing;
    }

  public function Display_CSS_Tag_Field() {

    $display_css_field = '';
    $display_css_field = '
		<style>
      '.$this->CSS_tag.'
        {
          color: '.$this->color.';
          font-family: '.$this->font_family.';
          font-size: '.$this->font_size.'px;
          font-weight: '.$this->font_weight.';
          transform: '.$this->font_transform.';
          font-style: '.$this->font_style.';
          text-decoration: '.$this->font_decoration.';
          line-height: '.$this->line_height.'px;
          letter-spacing: '.$this->letter_spacing.'px;
        }
		</style>
    ';

    return $display_css_field;


  }

}

//$CMB2_Google_Font_Style = new CMB2_Google_Font_Style;
