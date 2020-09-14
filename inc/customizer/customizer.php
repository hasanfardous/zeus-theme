<?php
/**
 * zeus Theme Customizer
 *
 * @package zeus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zeus_customize_register( $wp_customize ) {

    //file input sanitization function
    function zeus_sanitize_file( $file, $setting ) {
        
        //allowed file types
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png'
        );
            
        //check file type from file name
        $file_ext = wp_check_filetype( $file, $mimes );
            
        //if file has a valid mime type return it, otherwise return default
        return ( $file_ext['ext'] ? $file : $setting->default );
    }


    //radio box sanitization function
    function zeus_sanitize_radio( $input, $setting ){
        
        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible radio box options 
        $choices = $setting->manager->get_control( $setting->id )->choices;
                            
        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
            
    }


    // Load customizer sections & fields
    require_once( ZEUS_DIR_PATH_INC . 'customizer/fields/sections.php' );
    require_once( ZEUS_DIR_PATH_INC . 'customizer/fields/fields.php' );

}
add_action( 'customize_register', 'zeus_customize_register' );