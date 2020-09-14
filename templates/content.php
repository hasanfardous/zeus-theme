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

// Post Item Start

?>

<article id="<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>
	<?php 
	/**
	 * Blog Post thumbnail
	 * @Hook  zeus_blog_posts_thumb
	 *
	 * @Hooked zeus_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'zeus_blog_posts_thumb' );

	/**
	 * 
	 * Blog details wrapper start hook function.
	 * column end.
	 *
	 * Hook zeus_blog_details_wrap_start
	 *
	 * @Hooked zeus_blog_details_wrap_start_cb
	 *  
	 */
	do_action( 'zeus_blog_details_wrap_start' );
	
	/**
	 * Blog Post Meta
	 * @Hook  zeus_blog_posts_meta
	 *
	 * @Hooked zeus_blog_posts_meta_cb
	 * 
	 *
	 */
	// do_action( 'zeus_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  zeus_blog_posts_title
	 *
	 * @Hooked zeus_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'zeus_blog_posts_title' );		
	
	/**
	 * Blog Excerpt With read more button
	 * @Hook  zeus_blog_posts_excerpt
	 *
	 * @Hooked zeus_blog_posts_excerpt_cb
	 * @Hooked zeus_blog_read_more_cb
	 * 
	 *
	 */
	do_action( 'zeus_blog_posts_excerpt' );
	
	/**
	 * Blog posts info links hook function.
	 * @Hook  zeus_blog_posts_info_link
	 *
	 * @Hooked zeus_blog_posts_info_link_cb
	 * 
	 *
	 */
	do_action( 'zeus_blog_posts_info_link' );

	/**
	 * 
	 * Blog details wrapper end hook function.
	 * column end.
	 *
	 * Hook zeus_blog_details_wrap_end
	 *
	 * @Hooked zeus_blog_details_wrap_end_cb
	 *  
	 */
	do_action( 'zeus_blog_details_wrap_end' );
	
	?>
</article>