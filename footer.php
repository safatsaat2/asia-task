<section  class="footer1 srs_footer" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="title-wrapper">
                    <div class="title-wrap">
                        <h2 class="mbr-section-title mbr-fonts-style display-5">VIDEO</h2>
                        <div class="logo-wrap">
                        <?php
                if (current_theme_supports("custom-logo")) {
                    the_custom_logo();}
                ?>
                        </div>
                        <h2 class="mbr-section-title mbr-fonts-style display-5">
                            GAME</h2>
                    </div>
                </div>
                <div class="nav-wrapper">
                <?php 
                if (has_nav_menu('topmenu')) {
                    // Display the navigation menu
                    wp_nav_menu(array(
                        'theme_location' => 'topmenu', 
                        'menu_class' => 'navbar-nav nav-dropdown',
                    ));
                }
                ?>
                </div>
                <div class="soc-wrapper">
                    <div class="social-row">
                        <div class="soc-item">
                            <a href="#" target="_blank">
                            <span class="dashicons dashicons-youtube"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                            <span class="dashicons dashicons-twitch"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                            <span class="dashicons dashicons-facebook-alt"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                            <span class="dashicons dashicons-twitter"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="copy-wrapper">
                    <p class="mbr-fonts-style copyright display-7">
                        © Copyright 2024 - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>

</html>