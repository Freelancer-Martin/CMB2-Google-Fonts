Wordpress-CMB2-Drag-and-Drop-Clone-type-field

CMB2 Google Fonts lets you add google font for every title or text you like, simple and easy to use
    Contributors: Freelancer Martin
    Homepage: http://developerforwebsites.com
    Tags: CMB2 Field Type: Drag and Drop(Clone)
    Requires at least: 3.8.0
    Tested up to: 4.9.1
    Stable tag: 1.0.1
    License: GPLv2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html

<img src="https://github.com/Freelancer-Martin/CMB2-Google-Fonts/blob/master/includes/img/google-font-back-end.png"/>

Contribution

Development occurs on Github, and all contributions welcome.
Installation

If including the library in your plugin or theme:

    Upload or Intall the entire plugin to /wp-content/plugins/cmb2-google-font directory.
    Upload the entire plugin directory to the /wp-content/plugins/ directory.
    Activate Plugin through the 'Plugins' menu in WordPress.
    Install CMB2 plugin
    Go -> Google Font API menu options page
    Insert API key to box to start using thsi plugin
    Copy (and rename if desired) example-functions.php into to your theme or plugin's directory.
    Field option example added (Examples Below:

    $cmb_demo->add_field(array(

      'name' => 'Google Fonts',
      'desc' => 'Custom Google Fonts',
      'id'   => 'CMB2-google-fonts',
      'type' => 'CMB2_google_fonts',

    ) );


    Edit to only include the fields you need and rename the functions (CMB2 directory should be left unedited in order to easily update the library).
    Profit.

Features
