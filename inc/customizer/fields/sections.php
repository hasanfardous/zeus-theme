<?php 
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 * Customizer panels & settings
 *
 */

/***********************************
 * Register customizer panels & settings
 ***********************************/

	// Zeus Theme Settings Panel
	$wp_customize->add_panel( 'zeus_theme_settings_panel' , array(
		'title'      	=> __( 'Zeus Theme Settings', 'zeus' ),
		'priority'   	=> 0,
	));

	// Remove the default header text color
	$wp_customize->remove_control("header_textcolor");
	
	// Zeus Theme Settings Sections
	$wp_customize->add_section( 'zeus_header_settings_section' , array(
		'title'      	=> __( 'Header button settings', 'zeus' ),
		'panel'		 	=>	'zeus_theme_settings_panel'
	));

	$wp_customize->add_section( 'zeus_banner_settings_section' , array(
		'title'      	=> __( 'Banner Settings Section', 'zeus' ),
		'panel'		 	=>	'zeus_theme_settings_panel'
	));

	$wp_customize->add_section( 'zeus_about_settings_section' , array(
		'title'      	=> __( 'About Settings Section', 'zeus' ),
		'panel'		 	=>	'zeus_theme_settings_panel'
	));

	$wp_customize->add_section( 'zeus_services_settings_section' , array(
		'title'      	=> __( 'Services Settings Section', 'zeus' ),
		'panel'		 	=>	'zeus_theme_settings_panel'
	));

	$wp_customize->add_section( 'zeus_clients_settings_section' , array(
		'title'      	=> __( 'Clients Settings Section', 'zeus' ),
		'panel'		 	=>	'zeus_theme_settings_panel'
	));

	$wp_customize->add_section( 'zeus_footer_settings_section' , array(
		'title'      	=> __( 'Footer Settings Section', 'zeus' ),
		'panel'		 	=>	'zeus_theme_settings_panel'
	));


?>