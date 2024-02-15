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
                }else{
                    echo '<h1>Add Text</h1>';
                }; ?>
                </div>
        </div>
        <div class="creation_card_child">
            <a href="#">
                <?php
                if (is_active_sidebar("creation-section-left-photo")) {
                    dynamic_sidebar("creation-section-left-photo");
                }else{
                    echo '<img src="https://i.postimg.cc/6QMhx45P/Frame-1000004141.png" alt="">';
                }; ?>
            </a>
        </div>
        <div class="creation_card_child">
            <a href="#">
                <?php
                if (is_active_sidebar("creation-section-right-photo")) {
                    dynamic_sidebar("creation-section-right-photo");
                }else{
                    echo '<img src="https://i.postimg.cc/6QMhx45P/Frame-1000004141.png" alt="">';
                }; ?>
            </a>
        </div>

    </div>
</section>