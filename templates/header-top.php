<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header_start -->
<header>
    <div id="sticky-header" class="header_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="header__wrapper">
                        <!-- header__left__start  -->
                        <div class="header__left">
                            <div class="logo_img">
                                <?php
                                    echo zeus_theme_logo( 'navbar-brand' );
                                ?>
                            </div>
                            <!-- main_menu_start  -->
                            <div class="main_menu text-center d-none d-lg-block">
                                <nav>
                                    <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'           => 'primary-menu',
                                            'theme_location' => 'primary-menu',
                                            'menu_id'        => 'mobile-menu',
                                            'container'      => false,
                                            'menu_class'     => null,
                                            'depth'          => 1
                                        ));
                                    }
                                    ?>
                                </nav>
                            </div>
                            <!-- main_menu_start  -->
                        </div>
                        <!-- header__left__start  -->

                        <?php
                        // Quote button
                        if( zeus_opt( 'zeus_header_btn_label' ) ){
                            $buy_btn_label = !empty( zeus_opt( 'zeus_header_btn_label' ) ) ? zeus_opt( 'zeus_header_btn_label' ) : '';
                            $buy_btn_url   = !empty( zeus_opt( 'zeus_header_btn_url' ) ) ? zeus_opt( 'zeus_header_btn_url' ) : '';
                            ?>
                            <!-- header__right_start  -->
                            <div class="header__right">
                                <div class="contact_wrap d-flex align-items-center">
                                    <div class="contact_btn d-none d-lg-block">
                                        <a href="<?php echo esc_url($buy_btn_url)?>" class="boxed_btn"><?php echo esc_html($buy_btn_label)?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- header__right_end  -->
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header_end -->