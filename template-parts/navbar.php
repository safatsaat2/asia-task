<section class="navbar_background">
    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="menu_box container-fluid">
            <div class="navbar-brand d-flex srs_responsive">
                <span class="navbar-logo">
                    <a href="/">
                    <?php
                if (current_theme_supports("custom-logo")) {
                    the_custom_logo();}
                ?>
                
                        
                
                    </a>
                </span>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <?php 
                if (has_nav_menu('topmenu')) {
                    // Display the navigation menu
                    wp_nav_menu(array(
                        'theme_location' => 'topmenu', 
                        'menu_class' => 'navbar-nav nav-dropdown',
                    ));
                }
                ?>
                <div class="icons-menu-main">
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    
                </div>

                <!-- <div class="mbr-section-btn-main" role="tablist">
                    <a class="btn btn-primary-outline display-4" href="#">
                        BUY NOW
                    </a>
                </div> -->
            </div>
            <div class="offcanvas_box">
                <button class="btn_offcanvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="visibility: hidden;" aria-hidden="true">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        
                        <h3 class="mbr-section-subtitle mbr-fonts-style display-2">VIDEO GAME</h3>
                        <div class="offcanvas_contact">
                            <p class="mbr-text mbr-fonts-style display-7">
                                The game is designed with beautiful graphics and immersive gameplay that transports
                                you to different eras and locations. You must travel through time, solving puzzles
                                and battling enemies, all while ensuring that history stays on course.
                            </p>
                            <p class="text_widget mbr-fonts-style display-4">
                                <a href="#" class="text-primary">MOBI@RISE.COM</a>
                                <br><br>
                                <a href="tel:12345678900" class="text-primary">+1 234-567-8900</a>
                            </p>
                        </div>
                        <div class="icons-menu">
                            <a class="iconfont-wrapper" href="#" target="_blank">
                                <span class="p-2 mbr-iconfont socicon-youtube socicon"></span>
                            </a>
                            <a class="iconfont-wrapper" href="#" target="_blank">
                                <span class="p-2 mbr-iconfont socicon-twitch socicon"></span>
                            </a>
                            <a class="iconfont-wrapper" href="#" target="_blank">
                                <span class="p-2 mbr-iconfont socicon-discord socicon"></span>
                            </a>
                            
                        </div>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary-outline display-4" href="#">
                                DOWNLOAD
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </section>