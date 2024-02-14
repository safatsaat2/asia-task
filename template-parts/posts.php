<section class="post_sec">
    <div class="card_pr">
        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'custom posts',
            'post_status' => 'publish',
            'order' => 'ASC',
            'paged' => '',
        );
        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) :
            $the_query->the_post();
        ?>

            <div>
                <div class="img_wrapper">
                    <?php the_post_thumbnail('custom posts'); ?>
                </div>
                <p class="title"><?php the_title(); ?></p>
                <p class="title">
                    <?php
                    $title = get_post_meta(get_the_ID(), 'title', true);
                    echo esc_attr($title);
                    ?>
                </p>
                <p class="date"><?php
               echo get_the_date('F j, Y')
                ?></p>
                <a href="#" class="btn">More</a>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</section>