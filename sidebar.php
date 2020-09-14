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

// Sidebar
if( is_active_sidebar( 'zeus-post-sidebar' ) ){
	
	echo '<div class="col-lg-4 sidebar-widgets"><div class="blog_right_sidebar">';
		dynamic_sidebar( 'zeus-post-sidebar' );
	echo '</div></div>';
}
 

?>