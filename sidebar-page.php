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
if( is_active_sidebar( 'zeus-page-sidebar' ) ){
	
	echo '<aside class="page--sidebar col-md-3">';
		dynamic_sidebar( 'zeus-page-sidebar' );
	echo '</aside>';
}
 

?>