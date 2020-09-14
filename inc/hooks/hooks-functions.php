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

	// Header menu hook function
	if( !function_exists( 'zeus_header_cb' ) ){
		function zeus_header_cb(){
			get_template_part( 'templates/header', 'top' );

			if( !is_page_template( 'template-builder.php' ) ){
				get_template_part( 'templates/header', 'bottom' );
			}
		}
	}

	// Banner area hook function
	if( !function_exists( 'zeus_banner_part_cb' ) ){
		function zeus_banner_part_cb(){
			// Banner contents
			$banner_left_content 	= zeus_opt( 'zeus_banner_left_contents' );
			$banner_right_img 		= empty( zeus_opt( 'zeus_banner_right_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'banner-img.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_banner_right_contents' ) , 'zeus_banner_thumb_809x701' )[0];
			$banner_left_content 	= zeus_opt( 'zeus_banner_left_contents' );
			?>
			<!-- banner_area_start -->
			<div class="banner_area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="banner_text">
								<?php
									if ( empty( $banner_left_content ) ) {
										?>
										<span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">new generation</span>
										<h3 class="wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay=".2s">Make things slightly stylish and cool.</h3>
										<?php
									} else {
										echo wp_kses_post( $banner_left_content );
									}
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="banner_product wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".2s" >
								<img class="img-fluid" src="<?php echo esc_url( $banner_right_img ); ?>" alt="banner right image">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- banner_area_end -->
			<?php
		}
	}

	// About area hook function
	if( !function_exists( 'zeus_about_part_cb' ) ){
		function zeus_about_part_cb(){
			// About contents
			$about_left_img 		= empty( zeus_opt( 'zeus_about_left_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'about-img.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_about_left_contents' ) , 'zeus_about_thumb_825x759' )[0];
			$zeus_about_sec_title 	= zeus_opt( 'zeus_about_sec_title' );
			$zeus_about_big_title 	= zeus_opt( 'zeus_about_big_title' );
			$zeus_about_texts 		= zeus_opt( 'zeus_about_texts' );
			$zeus_about_anchor_texts= zeus_opt( 'zeus_about_anchor_texts' );
			$zeus_about_anchor_url 	= zeus_opt( 'zeus_about_anchor_url' );
			?>
			<!-- about_area::start  -->
			<div class="about_area section_padding">
				<div class="about_area_left">
					<div class="banner_thumb">
						<img class="img-fluid" src="<?php echo esc_url( $about_left_img ); ?>" alt="about left image">
					</div>
				</div>
				<div class="about_area_right">
					<div class="about_info">
						<div class="section_title">
							<?php
								if ( empty( $zeus_about_sec_title ) && empty( $zeus_about_big_title ) ) {
									?>
									<span>About Us</span>
									<h3>Dig into new styles and <br> new tools to make <br> performance</h3>
									<?php
								} else {
									echo wp_kses_post( $zeus_about_sec_title );
									echo '<h3>'.wp_kses_post( $zeus_about_big_title ).'</h3>';
								}
							?>
						</div>
						<div class="about_content">
							<?php
								if ( empty( $zeus_about_texts ) && empty( $zeus_about_anchor_texts )  && empty( $zeus_about_anchor_url )) {
									?>
									<p>Real performance comes from investing in learning and focusing on both long and short term goals, with measures that aren’t always convenient or obvious.</p>
									<a href="#" class="line_btn ">Explore <i class="ti-angle-right"></i> </a>
									<?php
								} else {
									echo '<p>'. wp_kses_post( $zeus_about_texts ) . '</p>';
									echo '<a href="'.esc_url( $zeus_about_anchor_url ).'" class="line_btn ">'.esc_html( $zeus_about_anchor_texts ).' <i class="ti-angle-right"></i> </a>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- about_area::end  -->
			<?php
		}
	}


	// Service area hook function
	if( !function_exists( 'zeus_service_part_cb' ) ){
		function zeus_service_part_cb(){
			// Service contents
			$zeus_service_sec_big_title 	= zeus_opt( 'zeus_service_sec_big_title' );
			$zeus_service_sec_text_setting 	= zeus_opt( 'zeus_service_sec_text_setting' );
			$zeus_service_btn_label_setting = zeus_opt( 'zeus_service_btn_label_setting' );
			$zeus_service_btn_url_setting 	= zeus_opt( 'zeus_service_btn_url_setting' );

			// Item 1
			$icon1_img 						= empty( zeus_opt( 'zeus_service_item1_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'icon-1.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_service_item1_contents' ) , 'zeus_service_icon_42x42' )[0];
			$zeus_service_1_title 	= zeus_opt( 'zeus_service_1_title' );
			$zeus_service_1_txt 	= zeus_opt( 'zeus_service_1_txt' );
			// Item 2
			$icon2_img 						= empty( zeus_opt( 'zeus_service_item2_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'icon-2.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_service_item2_contents' ) , 'zeus_service_icon_42x42' )[0];
			$zeus_service_2_title 	= zeus_opt( 'zeus_service_2_title' );
			$zeus_service_2_txt 	= zeus_opt( 'zeus_service_2_txt' );
			// Item 3
			$icon3_img 						= empty( zeus_opt( 'zeus_service_item3_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'icon-3.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_service_item3_contents' ) , 'zeus_service_icon_42x42' )[0];
			$zeus_service_3_title 	= zeus_opt( 'zeus_service_3_title' );
			$zeus_service_3_txt 	= zeus_opt( 'zeus_service_3_txt' );
			// Item 4
			$icon4_img 						= empty( zeus_opt( 'zeus_service_item4_contents' ) ) ? ZEUS_DIR_IMGS_URI . 'icon-4.png' : wp_get_attachment_image_src( zeus_opt( 'zeus_service_item4_contents' ) , 'zeus_service_icon_42x42' )[0];
			$zeus_service_4_title 	= zeus_opt( 'zeus_service_4_title' );
			$zeus_service_4_txt 	= zeus_opt( 'zeus_service_4_txt' );
			?>
			<!-- service::start -->
			<div class="service_area black_bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="section_title white_text">
								<?php
									if ( empty( $zeus_service_sec_big_title ) && empty( $zeus_service_sec_text_setting ) && empty( $zeus_service_btn_label_setting ) ) {
										?>
										<h3>Dig into new styles and <br> new tools to make <br> performance</h3>
										<p class="text_white mb-40 mt_30">Real performance comes from investing in <br> learning and focusing on both long and short  <br>
											term goals, with measures that aren’t always <br> convenient or obvious.</p>
										<a href="#" class="boxed_btn2">Learn More</a>
										<?php
									} else {
										echo '<h3>' .wp_kses_post( $zeus_service_sec_big_title ) . '</h3>';
										echo '<p class="text_white mb-40 mt_30">' . wp_kses_post( $zeus_service_sec_text_setting ) . '</p>';
										echo '<a href="'.esc_url( $zeus_service_btn_url_setting ).'" class="boxed_btn2">'.esc_html( $zeus_service_btn_label_setting ).'</a>';
									}
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="servie_group">
								<div class="single_service">
									<div class="icon_img">
										<img src="<?php echo esc_url( $icon1_img )?>" alt="service item 1 icon">
									</div>
									
									<?php
										if ( empty( $zeus_service_1_title ) && empty( $zeus_service_1_txt ) ) {
											?>
											<h3>Explore</h3>
											<p>Real performance comes from investing in learning and focusing on both long.</p>
											<?php
										} else {
											echo '<h3>' .wp_kses_post( $zeus_service_1_title ) . '</h3>';
											echo '<p>' . wp_kses_post( $zeus_service_1_txt ) . '</p>';
										}
									?>
								</div>
								<div class="single_service">
									<div class="icon_img">
										<img src="<?php echo esc_url( $icon2_img )?>" alt="service item 2 icon">
									</div>
									
									<?php
										if ( empty( $zeus_service_2_title ) && empty( $zeus_service_2_txt ) ) {
											?>
											<h3>Design</h3>
											<p>Real performance comes from investing in learning and focusing on both long.</p>
											<?php
										} else {
											echo '<h3>' .wp_kses_post( $zeus_service_2_title ) . '</h3>';
											echo '<p>' . wp_kses_post( $zeus_service_2_txt ) . '</p>';
										}
									?>
								</div>
								<div class="single_service">
									<div class="icon_img">
										<img src="<?php echo esc_url( $icon3_img )?>" alt="service item 3 icon">
									</div>
									
									<?php
										if ( empty( $zeus_service_3_title ) && empty( $zeus_service_3_txt ) ) {
											?>
											<h3>Build</h3>
											<p>Real performance comes from investing in learning and focusing on both long.</p>
											<?php
										} else {
											echo '<h3>' .wp_kses_post( $zeus_service_3_title ) . '</h3>';
											echo '<p>' . wp_kses_post( $zeus_service_3_txt ) . '</p>';
										}
									?>
								</div>
								<div class="single_service">
									<div class="icon_img">
										<img src="<?php echo esc_url( $icon4_img )?>" alt="service item 4 icon">
									</div>
									
									<?php
										if ( empty( $zeus_service_4_title ) && empty( $zeus_service_4_txt ) ) {
											?>
											<h3>Improve</h3>
											<p>Real performance comes from investing in learning and focusing on both long.</p>
											<?php
										} else {
											echo '<h3>' .wp_kses_post( $zeus_service_4_title ) . '</h3>';
											echo '<p>' . wp_kses_post( $zeus_service_4_txt ) . '</p>';
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- service::end -->
			<?php
		}
	}


	// Clients area hook function
	if( !function_exists( 'zeus_clients_part_cb' ) ){
		function zeus_clients_part_cb(){
			// Clients contents
			$zeus_clients_big_title 	= zeus_opt( 'zeus_clients_section_big_title' );
			$zeus_clients_small_title 	= zeus_opt( 'zeus_clients_section_small_title' );
			$zeus_clients_texts 		= zeus_opt( 'zeus_clients_section_texts' );
			?>
			<!-- client_area::start  -->
			<div class="client_area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="section_title mb-40">
								<?php
									if ( empty( $zeus_clients_big_title ) ) {
										?>
										<h3>Our Clients</h3>
										<?php
									} else {
										echo '<h3>' .wp_kses_post( $zeus_clients_big_title ) . '</h3>';
									}
								?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="section_title_2">
								<?php
									if ( empty( $zeus_clients_small_title ) && empty( $zeus_clients_texts ) ) {
										?>
										<h3>We worked with</h3>
										<p>Real performance comes from investing in learning and focusing on both long <br> and short term goals.</p>
										<?php
									} else {
										echo '<h3>' .wp_kses_post( $zeus_clients_small_title ) . '</h3>';
										echo '<p>' .wp_kses_post( $zeus_clients_texts ) . '</p>';
									}
								?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="brand_wrap">
								<?php
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_1_logo' ), 1 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_2_logo' ), 2 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_3_logo' ), 3 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_4_logo' ), 4 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_5_logo' ), 5 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_6_logo' ), 6 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_7_logo' ), 7 );
									echo zeus_get_client_logo( zeus_opt( 'zeus_client_8_logo' ), 8 );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- client_area::end  -->
			<?php
		}
	}

	// Footer area hook function
	if( !function_exists( 'zeus_footer_area' ) ){
		function zeus_footer_area(){
			echo '<footer>';

			// Footer widgets
			if( zeus_opt( 'zeus_footer_widget_toggle' ) == 'show' ){
				get_template_part( 'templates/footer', 'widgets' );
			}
			
			// Footer bottom
			get_template_part( 'templates/footer', 'bottom' );	
			echo '</footer>';
		}
	}


	// Blog, single, page, search, archive pages wrapper start hook function.
	if( !function_exists('zeus_wrp_start_cb') ){
		function zeus_wrp_start_cb(){
			$zeus_wrp_start_class = is_home() ? ' blog_area' : ' search-page';
			echo '<section class="section-padding'.esc_attr($zeus_wrp_start_class).'"><div class="container"><div class="row">';
		}
	}
	// Blog, single, page, search, archive pages wrapper end hook function.
	if( !function_exists('zeus_wrp_end_cb') ){
		function zeus_wrp_end_cb(){
			echo '</div></div></section>';
		}
	}
	// Blog, single, search, archive pages column start hook function.
	if( !function_exists('zeus_blog_col_start_cb') ){
		function zeus_blog_col_start_cb(){
			
			$sidebarOpt = zeus_sidebar_opt();
								
			//
			if( !is_page() ){
				$pullRight  = zeus_pull_right( $sidebarOpt , '3' );

				if( $sidebarOpt != '1' ){
					$col = '8'.$pullRight;
				}else{

					if( !is_single() ){
						$col = '12';
					}else{
						$col = '10 offset-lg-1';
					}

				}
			}else{
				$col = '8';
				
			}

			// single page should be p-b-80
			echo '<div class="col-lg-8 mb-5 mb-lg-0"><div class="blog_left_sidebar">';
		}
	}
	// Blog, single, search, archive pages column end hook function.
	if( !function_exists('zeus_blog_col_end_cb') ){
		function zeus_blog_col_end_cb(){
			echo '</div></div>';
		}
	}

	// Blog post thumbnail hook function.
	if( !function_exists('zeus_blog_posts_thumb_cb') ){
		function zeus_blog_posts_thumb_cb(){
			// Thumbnail Show
			if( has_post_thumbnail() ){
						
				if( !is_single() ){
				
					$html = '';
					$html .= '<div class="blog_item_img">';
					$html .= '<a href="'.esc_url( get_the_permalink() ).'" class="item-blog-img pos-relative dis-block hov-img-zoom">';
					$html .= zeus_img_tag(
						array(
							'url' => esc_url( get_the_post_thumbnail_url() ),
							'class' => 'card-img rounded-0 wp-post-image'
						)
					);
					$html .= '</a>';
					$html .= '<a href="'. esc_url( zeus_blog_date_permalink() ) .'" class="blog_item_date"><h3>'.  get_the_time( 'd' ) .'</h3><p>'. get_the_time('M') .'</p></a>';
					$html .= '</div>';
				
				}else{
					
					$html = '';
					$html .= '<div class="blog-post-thumb">';
					$html .= zeus_img_tag(
						array(
							'url' => esc_url( get_the_post_thumbnail_url() ),
							'class' => 'card-img rounded-0 wp-post-image'
						)
					);
					$html .= '</div>';

				}
				echo wp_kses_post( $html );
				

			}
			// Thumbnail check and video and audio thumb show
			if( !is_single() && !has_post_thumbnail() ){
				$html = '';
				if( has_post_format( array( 'video' ) ) ){
					
					$html .= '<div class="blog-post-thumb">';
					$html .= zeus_embedded_media( array( 'video', 'iframe' ) );
					$html .= '</div>';

				}else{

					if( has_post_format( array( 'audio' ) ) ){
						
						$html .= '<div class="blog-post-thumb">';
						$html .= zeus_embedded_media( array( 'audio', 'iframe' ) );
						$html .= '</div>';
					}
				}
				
				echo apply_filters( 'zeus_audio_embedded_media', $html );

			}
		}
	}

	// Blog details wrapper start hook function.
	if( !function_exists('zeus_blog_details_wrap_start_cb') ){
		function zeus_blog_details_wrap_start_cb(){

			echo '<div class="blog_details">';
		}
	}
	// Blog details wrapper end hook function.
	if( !function_exists('zeus_blog_details_wrap_end_cb') ){
		function zeus_blog_details_wrap_end_cb(){
			echo '</div>';
		}
	}

	// Blog post title hook function.
	if( !function_exists('zeus_blog_posts_title_cb') ){
		function zeus_blog_posts_title_cb(){
			if( get_the_title() ){

				$html = '';
				if( !is_single() ){
					$html .= '<a class="d-inline-block" href="'.esc_url( get_the_permalink() ).'"><h2 class="p_title">'.esc_html( get_the_title() ).'</h2></a>';
				}else{
					$html .= '<h2 class="p_title">'.esc_html( get_the_title() ).'</h2>';
				}
				
				echo wp_kses_post( $html );

			}
		}
	}

	// Blog posts meta hook function.
	if( !function_exists('zeus_blog_posts_meta_cb') ){
		function zeus_blog_posts_meta_cb(){

			echo '<div class="post-meta"><h6>';
			// Author
			if( get_the_author() ){
				echo esc_html__( 'By ', 'zeus' ).'<a href="'.esc_url( get_author_posts_url( get_the_author_meta('ID') ) ).'">'.esc_html( get_the_author() ).',</a>';
			}
			// Date
			if( get_the_date() ){
				$postData = '<a href="'.esc_url( zeus_blog_date_permalink() ).'">'.esc_html( get_the_date() ).',</a>';
				echo wp_kses_post( $postData );
			}
			
			// Post category
			$cats = get_the_category();
			$categories = '';
			if( is_array( $cats ) && count( $cats ) > 0 ){
				
				foreach( $cats as $cat ){
				   $categories .= '<a href="'.esc_url( get_category_link( $cat->term_id ) ).'" class="category-link">'.esc_html( $cat->name ).',</a>';
				}
			}
							
			echo wp_kses_post( $categories );

			comments_popup_link( esc_html__( '0 Comment', 'zeus' ), esc_html__( '1 Comment','zeus' ), esc_html__('% Comments','zeus'));
			
			$featured = '';
			if( is_sticky() ){
				$featured = '<span class="featured">'.esc_html__( 'Featured', 'zeus' ).'</span>';
			}

			echo '</h6>'.wp_kses_post( $featured ).'</div>';

		
			
		}
	}

	// Blog posts excerpt hook function.
	if( !function_exists('zeus_blog_posts_excerpt_cb') ){
		function zeus_blog_posts_excerpt_cb(){
			?>
			<div class="blog-postexcerpt">
				<?php 
				// Post excerpt
				echo zeus_excerpt_length( esc_html( zeus_opt('zeus_excerpt_length') ) );

				// Link Pages
				zeus_link_pages();
				?>
			</div>			
			<?php
		}
	}

	// Blog read more hook function.
	if( !function_exists('zeus_blog_read_more_cb') ){
		function zeus_blog_read_more_cb(){
			?>
			<a href="<?php the_permalink(); ?>">
				<?php esc_html_e( 'Read More', 'zeus' ); ?>
			</a>			
			<?php
		}
	}

	// Blog posts info links hook function.
	if( !function_exists('zeus_blog_posts_info_link_cb') ){
		function zeus_blog_posts_info_link_cb(){
			if( zeus_opt( 'zeus_blog_meta' ) == 1 ) {
				$zeus_blog_info_link_class = is_single() ? 'blog-info-link mt-3 mb-4' : 'blog-info-link';
				?>
				<ul class="<?php echo esc_attr( $zeus_blog_info_link_class )?>">
					<li><i class="fa fa-tags"></i> <?php echo zeus_featured_post_cat(); ?></li>
					<li><i class="ti-comments"></i> <?php echo zeus_posted_comments(); ?></li>
				</ul>
				<?php
			}
		}
	}

	// Blog posts content hook function.
	if( !function_exists('zeus_blog_posts_content_cb') ){
		function zeus_blog_posts_content_cb(){

				the_content();
				// Link Pages
				zeus_link_pages();


		}
	}

	// Page content hook function.
	if( !function_exists('zeus_page_content_cb') ){
		function zeus_page_content_cb(){
			?>
			<div class="page--content single-blog">
				<?php 
				the_content();

				// Link Pages
				zeus_link_pages();
				?>

			</div>
			<?php
			// comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	}

	// Blog page sidebar hook function.
	if( !function_exists('zeus_blog_sidebar_cb') ){
		function zeus_blog_sidebar_cb(){
			
			// $sidebarOpt = zeus_sidebar_opt();
					
			// if( $sidebarOpt != '1'  || is_page()  ){
				get_sidebar();
			// }
			
				
		}
	}


	// Blog single post  social share hook function.
	if( !function_exists('zeus_blog_posts_share_cb') ){
		function zeus_blog_posts_share_cb(){
			?>
			<div class="navigation-top">
				<?php
				if( zeus_opt('zeus_like_btn') == 1 || zeus_opt('zeus_blog_share') == 1 ) {
					?>
					<div class="d-sm-flex justify-content-between text-center">
						<?php
						if ( zeus_opt( 'zeus_like_btn' ) == 1 ) {
							echo get_simple_likes_button( get_the_ID() );
						}

						if ( zeus_opt( 'zeus_blog_share' ) == 1 ) {
							echo zeus_social_sharing_buttons( 'social-icons' );
						}
						?>
					</div>

					<?php
				}

				// Post Navigation
				zeus_blog_single_post_navigation(); ?>
			</div>	
			<?php	
		}
	}


	/**
	 * Blog single post meta category, tag, next-previous link, comments form and biography hook function.
	 */
	if( !function_exists('zeus_blog_single_meta_cb') ){
		function zeus_blog_single_meta_cb(){
						
			$tags = zeus_post_tags();
	
			if( $tags ){
				echo '<div class="wrap-tags">';
					echo '<span class="tag-title">'.esc_html__( 'Post Tags:', 'zeus' ).'</span>';
					echo '<div class="tags-items">';
					// single post tag
					echo wp_kses_post( $tags );
					
					echo '</div>';
				echo '</div>';
			}

			// Author biography
			if( '' !== get_the_author_meta('description') ){
				get_template_part( 'templates/biography' );
			}
	
		}
	}

	// Blog 404 page hook function.
	if( !function_exists('zeus_fof_cb') ){
		function zeus_fof_cb(){
			get_template_part( 'templates/404' );			
		}
	}



?>