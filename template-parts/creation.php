<?php
$creation_header = get_post_meta(get_the_ID(), 'Creation Header', true);
?>

<section class="creation_sec">
    <div class="creation_card_pr">
        <div class="creation_card_child">
            <p class="sm_heading">CREATION</p>
            <h4 class="lg_heading"><?php echo esc_attr($creation_header); ?></h4>
            <div class="creation_des">
                <?php
                if (is_active_sidebar("creation-section-left-description")) {
                    dynamic_sidebar("creation-section-left-description");
                }; ?>
                </div>
        </div>
        <div class="creation_card_child">
            <a href="#">
                <?php
                if (is_active_sidebar("creation-section-left-photo")) {
                    dynamic_sidebar("creation-section-left-photo");
                }; ?>
            </a>
        </div>
        <div class="creation_card_child">
            <a href="#">
                <?php
                if (is_active_sidebar("creation-section-right-photo")) {
                    dynamic_sidebar("creation-section-right-photo");
                }; ?>
            </a>
        </div>

    </div>
</section>