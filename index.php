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

	//  Call Header
	get_header();

	/**
	 * 
	 * Hook for Blog, single, page, search, archive pages
	 * wrapper start with wrapper div, container, row.
	 *
	 * Hook zeus_wrp_start
	 *
	 * @Hooked zeus_wrp_start_cb
	 *  
	 */
	do_action( 'zeus_wrp_start' );
	
	/**
	 * 
	 * Hook for Blog, single, search, archive pages
	 * column start.
	 *
	 * Hook zeus_blog_col_start
	 *
	 * @Hooked zeus_blog_col_start_cb
	 *  
	 */
	do_action( 'zeus_blog_col_start' );


	if( have_posts() ){
		while( have_posts() ){
			the_post();
			// Post Contant
			get_template_part( 'templates/content', get_post_format() );
		}
		// Pagination
		get_template_part( 'templates/pagination' );
		// Reset Data
		wp_reset_postdata();
	}else{
		get_template_part( 'templates/content', 'none' );
	}


	
	/**
	 * 
	 * Hook for Blog, single, search, archive pages
	 * column end.
	 *
	 * Hook zeus_blog_col_end
	 *
	 * @Hooked zeus_blog_col_end_cb
	 *  
	 */
	do_action( 'zeus_blog_col_end' );
	
	/**
	 * 
	 * Hook for Blog, single blog, search, archive pages sidebar.
	 *
	 * Hook zeus_blog_sidebar
	 *
	 * @Hooked zeus_blog_sidebar_cb
	 *  
	 */
	do_action( 'zeus_blog_sidebar' );
 	
 	/**
	 * Hook for Blog, single, page, search, archive pages
	 * wrapper end with wrapper div, container, row.
 	 *
 	 * Hook zeus_wrp_end
 	 * @Hooked  zeus_wrp_end_cb
 	 *
 	 */
 	do_action( 'zeus_wrp_end' );
 	
	 // Call Footer
	 get_footer();
