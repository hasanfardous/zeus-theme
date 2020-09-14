<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 */
 
 
// enqueue css
function zeus_common_custom_css(){
    
    wp_enqueue_style( 'zeus-common', get_template_directory_uri().'/assets/css/common.css' );

		$themeColor     		  	= zeus_opt( 'zeus_theme_color' );

		$headerButtonBgColor		= zeus_opt( 'header_top_btn_bg_color' ) != '#1539e9' ? zeus_opt('header_top_btn_bg_color') : $themeColor;
		
		$headerButtonHoverColor		= zeus_opt( 'header_top_btn_hover_color' ) != '#1539e9' ? zeus_opt('header_top_btn_hover_color') : $themeColor;

		$stickyHeaderBgColor   		= zeus_opt( 'header_top_bar_bg_color');
		
		$menuColor          	  	= zeus_opt( 'header_menu_color' ) != '#000000' ? zeus_opt('header_menu_color') : '';
		$menuHoverColor           	= zeus_opt( 'header_menu_hover_color' ) != '#1539e9' ? zeus_opt('header_menu_hover_color') : $themeColor;

		$customcss ="			
			
			.header_area.navbar_fixed {
				background: {$stickyHeaderBgColor};
			}

			.header_area .main_menu ul li a {
				color: {$menuColor};
			}
			.header_area .main_menu ul li a:hover {
				color: {$menuHoverColor};
			}

			.header_area .boxed_btn {
				background: {$headerButtonBgColor};
			}
			.header_area .boxed_btn:hover {
				background: inherit;
				color: {$headerButtonHoverColor};
				border-color: {$headerButtonHoverColor};
			}

			.about_area .line_btn i {
				color: {$themeColor};
			}

			.service_area .boxed_btn2, #back-top a {
				background: {$themeColor};
			}
			.service_area .boxed_btn2:hover {
				color: {$themeColor};
				border-color: {$themeColor};
				background: inherit;
			}

        ";
       
    wp_add_inline_style( 'zeus-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'zeus_common_custom_css', 50 );