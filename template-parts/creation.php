<?php
$creation_header = get_post_meta(get_the_ID(), 'Creation Header', true);
?>

<section class="creation_sec">
    <div class="creation_card_pr">
        <div class="creation_card_child">
            <p class="sm_heading">CREATION</p>
            <h4 class="lg_heading"><?php echo esc_attr($creation_header); ?></h4>
            <p class="creation_des">Once upon a time, there was a young game developer named Mark who had a passion for creating video games. He spent countless hours tinkering with code, designing levels, and coming up with new ideas for games.</p>
        </div>
        <div class="creation_card_child">
        <a href="#">
            <img src="http://localhost/wordpress/wp-content/uploads/2024/02/image14.jpg" alt="">
        </a>
        </div>
        <div class="creation_card_child">
        <a href="#">
            <img src="http://localhost/wordpress/wp-content/uploads/2024/02/image11.jpg" alt="">
        </a>
        </div>
        
    </div>
</section>