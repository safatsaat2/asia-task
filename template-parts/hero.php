<?php
$hero_header = get_post_meta(get_the_ID(), 'Hero Header', true);
?>
<section class="hero_area">

<div class="container-fluid background_image_wrapper">
<div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(202, 202, 202);">
        </div>
<div class="hero-content-wrapper">
    <h2>
    <strong><?php echo esc_attr($hero_header); ?></strong>
    </h2>
    <p>
    Today's modern gaming industry is a multi-billion dollar business,
    <br>
with new technologies constantly pushing the boundaries of what's possible.
    </p>
    <a class="btn btn-primary-outline display-4" href="#">
                            VIEW MORE
                        </a>
</div>
</div>

</section>

<?php
?>