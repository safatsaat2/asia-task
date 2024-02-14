<section class="team_sec" id="team">
    <div class="container-fluid">
        <p class="sm_heading">CREATING</p>
        <h4 class="lg_heading">OUR TEAM OF GAME
            <br> DEVELOPMENT GENIUSES
        </h4>
            <div class="card_pr">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'team',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'paged' => '',
                );
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <div class="card_wrapper">
                        <div class="img_wrapper">
                            <?php the_post_thumbnail('team'); ?>
                        </div>
                        <p class="name">
                            <?php the_title();?>
                        </p>
                        <p class="title">
                            <?php
                            $title = get_post_meta(get_the_ID(), 'title', true);
                            echo esc_attr($title);
                            ?>
                        </p>
                        
                        <div>

                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>

    </div>
</section>