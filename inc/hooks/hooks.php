<?php 
/**
 * @Packge       : Zeus
 * @Version      : 1.0
 * @Author       : Hasan Fardous
 * @Author URI 	 : https://github.com/hasanfardous
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 * Header
	 *
	 * @Header Top
	 * @Header Bottom
	 * 
	 */

	add_action( 'zeus_header', 'zeus_header_cb', 10 );

	/**
	 * Hook for banner part
	 *
	 */
	add_action( 'zeus_banner_part', 'zeus_banner_part_cb', 10 );

	/**
	 * Hook for about part
	 *
	 */
	add_action( 'zeus_about_part', 'zeus_about_part_cb', 10 );

	/**
	 * Hook for service part
	 *
	 */
	add_action( 'zeus_service_part', 'zeus_service_part_cb', 10 );

	/**
	 * Hook for clients part
	 *
	 */
	add_action( 'zeus_clients_part', 'zeus_clients_part_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'zeus_footer', 'zeus_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'zeus_wrp_start', 'zeus_wrp_start_cb', 10 );
	add_action( 'zeus_wrp_end', 'zeus_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'zeus_blog_col_start', 'zeus_blog_col_start_cb', 10 );
	add_action( 'zeus_blog_col_end', 'zeus_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'zeus_blog_posts_thumb', 'zeus_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'zeus_blog_details_wrap_start', 'zeus_blog_details_wrap_start_cb', 10 );
	add_action( 'zeus_blog_details_wrap_end', 'zeus_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'zeus_blog_posts_title', 'zeus_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'zeus_blog_posts_meta', 'zeus_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'zeus_blog_posts_excerpt', 'zeus_blog_posts_excerpt_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'zeus_blog_posts_info_link', 'zeus_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'zeus_blog_posts_content', 'zeus_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'zeus_blog_posts_share', 'zeus_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'zeus_blog_sidebar', 'zeus_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'zeus_blog_single_meta', 'zeus_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'zeus_page_content', 'zeus_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'zeus_fof', 'zeus_fof_cb', 10 );

	

?>