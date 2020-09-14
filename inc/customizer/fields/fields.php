<?php 
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 * Customizer settings fields
 *
 */

/***********************************
 * Header Button Settings Fields
 ***********************************/

    $wp_customize->add_setting('zeus_header_btn_label', array(
        'default'	=> __( 'Buy Now', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
    ));

    $wp_customize->add_control('zeus_header_btn_label_control', array(
        'label'		=> __( 'Button Label', 'zeus' ),
        'section'	=> 'zeus_header_settings_section',
        'settings'	=> 'zeus_header_btn_label',
        'type'		=> 'text',
	));
	
    $wp_customize->add_setting('zeus_header_btn_url', array(
        'default'	=> __( '#', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'esc_url_raw'
		)
    ));

    $wp_customize->add_control('zeus_header_btn_url_control', array(
        'label'		=> __( 'Button URL', 'zeus' ),
        'section'	=> 'zeus_header_settings_section',
        'settings'	=> 'zeus_header_btn_url',
        'type'		=> 'url',
	));


	// Color options
	$wp_customize->add_setting('zeus_header_color_settings', array(
        'default'	=> __( 'Header Color Settings', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));
	
	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_header_color_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_header_settings_section',
		'settings' 	=> 'zeus_header_color_settings',
	) ) );

    $wp_customize->add_setting('header_top_btn_bg_color', array(
		'label'		=> __( 'Header Button BG Color', 'zeus' ),
		'default'	=> '#1539e9',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_top_btn_bg_color_control', array(
        'label' => __( 'Button BG Color', 'zeus' ),
        'section' => 'zeus_header_settings_section',
        'settings' => 'header_top_btn_bg_color'
	) ) );

    $wp_customize->add_setting('header_top_btn_hover_color', array(
		'label'		=> __( 'Header Button Hover Color', 'zeus' ),
		'default'	=> '#1539e9',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_top_btn_hover_color_control', array(
        'label' => __( 'Button Hover Color', 'zeus' ),
        'section' => 'zeus_header_settings_section',
        'settings' => 'header_top_btn_hover_color'
	) ) );
	

/***********************************
 * Color Settings Fields
 ***********************************/
	
	// Theme color
	$wp_customize->add_setting('zeus_theme_color', array(
		'label'		=> __( 'Theme Color', 'zeus' ),
		'default'	=> '#1539e9',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zeus_theme_color_control', array(
		'label' => __( 'Theme Color', 'zeus' ),
		'section' => 'colors',
		'settings' => 'zeus_theme_color',
		'priority'		=> 1
	) ) );
	
	// Sticky header bg color
	$wp_customize->add_setting('header_top_bar_bg_color', array(
		'label'		=> __( 'Sticky Header BG Color', 'zeus' ),
		'default'	=> '#ffffff',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_top_bar_bg_color_control', array(
		'label' => __( 'Sticky Header Bg Color', 'zeus' ),
		'section' => 'colors',
		'settings' => 'header_top_bar_bg_color',
		'priority'		=> 1
	) ) );

	// Header Menu Color
	$wp_customize->add_setting('header_menu_color', array(
		'label'		=> __( 'Header Menu Color', 'zeus' ),
		'default'	=> '#000000',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_menu_color_control', array(
		'label' => __( 'Header Menu Color', 'zeus' ),
		'section' => 'colors',
		'settings' => 'header_menu_color',
		'priority'		=> 1
	) ) );

	// Header Menu Hover Color
	$wp_customize->add_setting('header_menu_hover_color', array(
		'label'		=> __( 'Header Menu Color', 'zeus' ),
		'default'	=> '#1539e9',
		array(
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_menu_hover_color_control', array(
		'label' => __( 'Header Menu Hover Color', 'zeus' ),
		'section' => 'colors',
		'settings' => 'header_menu_hover_color',
		'priority'		=> 1
	) ) );



/***********************************
 * Banner Settings Fields
 ***********************************/

	$wp_customize->add_setting('zeus_banner_left_contents', array(
		'default'	=> '<span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">new generation</span><h3 class="wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay=".2s">Make things slightly stylish and cool.</h3>',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_banner_left_contents_control', array(
		'label'		=> __( 'Banner Left Contents', 'zeus' ),
		'section'	=> 'zeus_banner_settings_section',
		'settings'	=> 'zeus_banner_left_contents',
		'type'		=> 'textarea',
	));
	
	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_banner_line_separator_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_banner_settings_section',
		'settings' 	=> 'zeus_banner_left_contents',
	) ) );

	$wp_customize->add_setting('zeus_banner_right_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'banner-img.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_banner_right_contents_control', array(
		'label' => __( 'Upload Banner Right Image', 'zeus' ),
		'section' => 'zeus_banner_settings_section',
		'settings' => 'zeus_banner_right_contents',
		'width'		=> 809,
		'height'	=> 701,
	) ) );
	
	
/***********************************
 * About Settings Fields
 ***********************************/

	$wp_customize->add_setting('zeus_about_left_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'about-img.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_about_left_contents_control', array(
		'label' 	=> __( 'Upload About Left Image', 'zeus' ),
		'section' 	=> 'zeus_about_settings_section',
		'settings' 	=> 'zeus_about_left_contents',
		'width'		=> 825,
		'height'	=> 759,
	) ) );

	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_about_line_separator_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_about_settings_section',
		'settings' 	=> 'zeus_about_left_contents',
	) ) );

	$wp_customize->add_setting('zeus_about_sec_title', array(
		'default'	=> '<span>About Us</span>',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_about_sec_title_control', array(
		'label'		=> __( 'About Section Title', 'zeus' ),
		'section'	=> 'zeus_about_settings_section',
		'settings'	=> 'zeus_about_sec_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_about_big_title', array(
		'default'	=> '<h3>Dig into new styles and <br> new tools to make <br> performance</h3>',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_about_big_title_control', array(
		'label'		=> __( 'About Big Title', 'zeus' ),
		'section'	=> 'zeus_about_settings_section',
		'settings'	=> 'zeus_about_big_title',
		'type'		=> 'textarea',
	));

	$wp_customize->add_setting('zeus_about_texts', array(
		'default'	=> 'Real performance comes from investing in learning and focusing on both long and short term goals, with measures that aren’t always convenient or obvious.',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_about_texts_control', array(
		'label'		=> __( 'About Texts', 'zeus' ),
		'section'	=> 'zeus_about_settings_section',
		'settings'	=> 'zeus_about_texts',
		'type'		=> 'textarea',
	));

	$wp_customize->add_setting('zeus_about_anchor_texts', array(
		'default'	=> __( 'Explore', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_about_anchor_texts_control', array(
		'label'		=> __( 'About Anchor Text', 'zeus' ),
		'section'	=> 'zeus_about_settings_section',
		'settings'	=> 'zeus_about_anchor_texts',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_about_anchor_url', array(
		'default'	=> '#',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'esc_url_raw'
		)
	));

	$wp_customize->add_control('zeus_about_anchor_url_control', array(
		'label'		=> __( 'About Anchor URL', 'zeus' ),
		'section'	=> 'zeus_about_settings_section',
		'settings'	=> 'zeus_about_anchor_url',
		'type'		=> 'url',
	));


		
/***********************************
 * Services Settings Fields
 ***********************************/

	$wp_customize->add_setting('zeus_service_sec_big_title', array(
		'default'	=> 'Dig into new styles and <br> new tools to make <br> performanc',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_sec_big_title_control', array(
		'label'		=> __( 'Service Big Title', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_sec_big_title',
		'type'		=> 'textarea',
	));

	$wp_customize->add_setting('zeus_service_sec_text_setting', array(
		'default'	=> 'Real performance comes from investing in <br> learning and focusing on both long and short  <br>term goals, with measures that aren’t always <br> convenient or obvious.',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_sec_text_control', array(
		'label'		=> __( 'Service Text', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_sec_text_setting',
		'type'		=> 'textarea',
	));

	$wp_customize->add_setting('zeus_service_btn_label_setting', array(
		'default'	=> __( 'Learn More', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_sec_btn_label_control', array(
		'label'		=> __( 'Service Button Text', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_btn_label_setting',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_service_btn_url_setting', array(
		'default'	=> '#',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'esc_url_raw'
		)
	));

	$wp_customize->add_control('zeus_service_sec_btn_url_control', array(
		'label'		=> __( 'Service Button URL', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_btn_url_setting',
		'type'		=> 'url',
	));
	

	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_service_left_line_separator_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_service_sec_big_title',
	) ) );

	// Service item 1
	$wp_customize->add_setting('zeus_service_item1_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'icon-1.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_service_item1_control', array(
		'label' 	=> __( 'Upload Service Item 1 Icon', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_service_item1_contents',
		'width'		=> 42,
		'height'	=> 42,
	) ) );

	$wp_customize->add_setting('zeus_service_1_title', array(
		'default'	=> 'Explore',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_1_title_control', array(
		'label'		=> __( 'Service Item 1 Title', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_1_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_service_1_txt', array(
		'default'	=> 'Real performance comes from investing in learning and focusing on both long.',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_1_txt_control', array(
		'label'		=> __( 'Service Item 1 Text', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_1_txt',
		'type'		=> 'textarea',
	));

	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_service_item1_separator_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_about_left_contents',
	) ) );

	// Service item 2
	$wp_customize->add_setting('zeus_service_item2_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'icon-2.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_service_item2_control', array(
		'label' 	=> __( 'Upload Service Item 2 Icon', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_service_item2_contents',
		'width'		=> 42,
		'height'	=> 42,
	) ) );

	$wp_customize->add_setting('zeus_service_2_title', array(
		'default'	=> 'Design',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_2_title_control', array(
		'label'		=> __( 'Service Item 2 Title', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_2_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_service_2_txt', array(
		'default'	=> 'Real performance comes from investing in learning and focusing on both long.',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_2_txt_control', array(
		'label'		=> __( 'Service Item 2 Ttext', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_2_txt',
		'type'		=> 'textarea',
	));

	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_service_item2_separator_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_about_left_contents',
	) ) );

	// Service item 3
	$wp_customize->add_setting('zeus_service_item3_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'icon-3.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_service_item3_control', array(
		'label' 	=> __( 'Upload Service Item 3 Icon', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_service_item3_contents',
		'width'		=> 42,
		'height'	=> 42,
	) ) );

	$wp_customize->add_setting('zeus_service_3_title', array(
		'default'	=> 'Build',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_3_title_control', array(
		'label'		=> __( 'Service Item 3 Title', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_3_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_service_3_txt', array(
		'default'	=> 'Real performance comes from investing in learning and focusing on both long.',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_3_txt_control', array(
		'label'		=> __( 'Service Item 3 Text', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_3_txt',
		'type'		=> 'textarea',
	));

	$wp_customize->add_control( new Zeus_Line_Separator( $wp_customize, 'zeus_service_item3_separator_control', array(
		'label' 	=> __( 'line separator', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_about_left_contents',
	) ) );

	// Service item 4
	$wp_customize->add_setting('zeus_service_item4_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'icon-4.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_service_item4_control', array(
		'label' 	=> __( 'Upload Service Item 4 Icon', 'zeus' ),
		'section' 	=> 'zeus_services_settings_section',
		'settings' 	=> 'zeus_service_item4_contents',
		'width'		=> 42,
		'height'	=> 42,
	) ) );

	$wp_customize->add_setting('zeus_service_4_title', array(
		'default'	=> 'Improve',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_4_title_control', array(
		'label'		=> __( 'Service Item 4 Title', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_4_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_service_4_txt', array(
		'default'	=> 'Real performance comes from investing in learning and focusing on both long.',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_service_4_txt_control', array(
		'label'		=> __( 'Service Item 4 Ttext', 'zeus' ),
		'section'	=> 'zeus_services_settings_section',
		'settings'	=> 'zeus_service_4_txt',
		'type'		=> 'textarea',
	));


			
/***********************************
 * Clients Settings Fields
 ***********************************/

	$wp_customize->add_setting('zeus_clients_section_big_title', array(
		'default'	=> __( 'Our Clients', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_clients_section_big_title_control', array(
		'label'		=> __( 'Section Title', 'zeus' ),
		'section'	=> 'zeus_clients_settings_section',
		'settings'	=> 'zeus_clients_section_big_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_clients_section_small_title', array(
		'default'	=> __( 'We worked with', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_clients_section_small_title_control', array(
		'label'		=> __( 'Right Section Small Title', 'zeus' ),
		'section'	=> 'zeus_clients_settings_section',
		'settings'	=> 'zeus_clients_section_small_title',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('zeus_clients_section_texts', array(
		'default'	=> __( 'Real performance comes from investing in learning and focusing on both long <br> and short term goals.', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_clients_section_texts_control', array(
		'label'		=> __( 'Right Section Texts', 'zeus' ),
		'section'	=> 'zeus_clients_settings_section',
		'settings'	=> 'zeus_clients_section_texts',
		'type'		=> 'textarea',
	));

	// Clients logos
	$wp_customize->add_setting('zeus_client_1_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-1.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_1_logo_control', array(
		'label' 	=> __( 'Upload Client 1 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_1_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_2_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-2.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_2_logo_control', array(
		'label' 	=> __( 'Upload Client 2 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_2_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_3_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-3.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_3_logo_control', array(
		'label' 	=> __( 'Upload Client 3 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_3_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_4_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-4.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_4_logo_control', array(
		'label' 	=> __( 'Upload Client 4 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_4_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_5_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-5.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_5_logo_control', array(
		'label' 	=> __( 'Upload Client 5 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_5_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_6_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-6.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_6_logo_control', array(
		'label' 	=> __( 'Upload Client 6 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_6_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_7_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-7.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_7_logo_control', array(
		'label' 	=> __( 'Upload Client 7 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_7_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	$wp_customize->add_setting('zeus_client_8_logo', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'clients/client-8.jpg',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_client_8_logo_control', array(
		'label' 	=> __( 'Upload Client 8 Logo', 'zeus' ),
		'section' 	=> 'zeus_clients_settings_section',
		'settings' 	=> 'zeus_client_8_logo',
		'width'		=> 190,
		'height'	=> 55,
	) ) );

	
/***********************************
 * Footer Settings Fields
 ***********************************/
	$wp_customize->add_setting('zeus_footer_widget_toggle', array(
		'default'	=> 'show',
		'transport'	=> 'refresh',
		array(
			'sanitize_callback' => 'zeus_sanitize_radio'
		)
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'zeus_footer_widget_toggle_control',
			array(
				'label'          => __( 'Show or Hide Footer Widget', 'zeus' ),
				'section'        => 'zeus_footer_settings_section',
				'settings'       => 'zeus_footer_widget_toggle',
				'type'           => 'radio',
				'choices'        => array(
					'show'   => __( 'Show', 'zeus' ),
					'hide'  => __( 'Hide', 'zeus' )
				)
			)
		)
	);

	$wp_customize->add_setting('zeus_footer_logo_contents', array(
		'default'	=> ZEUS_DIR_IMGS_URI . 'footer-logo.png',
		'transport'	=> 'refresh',
		'mime_type' => 'image',
		array(
			'sanitize_callback'	=> 'zeus_sanitize_file'
		)
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'zeus_footer_logo_contents_control', array(
		'label' => __( 'Upload Footer Logo Image', 'zeus' ),
		'section' => 'zeus_footer_settings_section',
		'settings' => 'zeus_footer_logo_contents',
		'width' => 80,
		'height' => 20,
	) ) );

	$wp_customize->add_setting('zeus_footer_copyright_text', array(
		'default'	=> __( 'Gaya UI Kit that can help you design easy  <br>entire websites in Sketch & Photoshop.', 'zeus' ),
		'transport'	=> 'refresh',
		array(
			'sanitize_callback'	=> 'wp_kses_post'
		)
	));

	$wp_customize->add_control('zeus_copyright_txt_control', array(
		'label'		=> __( 'Copyright text', 'zeus' ),
		'section'	=> 'zeus_footer_settings_section',
		'settings'	=> 'zeus_footer_copyright_text',
		'type'		=> 'textarea',
	));