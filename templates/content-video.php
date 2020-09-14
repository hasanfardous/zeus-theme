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

<div id="<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
	<div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
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
		 * Blog Post Meta
		 * @Hook  zeus_blog_posts_meta
		 *
		 * @Hooked zeus_blog_posts_meta_cb
		 * 
		 *
		 */
		do_action( 'zeus_blog_posts_meta' );

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
		 * 
		 *
		 */
		do_action( 'zeus_blog_posts_excerpt' );
		
		?>
	</div>
</div>