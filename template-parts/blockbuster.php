<section class="blockbuster" >


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                <?php
                if (is_active_sidebar("blockbuster-image")) {
                    dynamic_sidebar("blockbuster-image");
                }
                else{
                    echo '<img src="https://i.postimg.cc/6QMhx45P/Frame-1000004141.png" alt="">';
                };
                 ?>
                
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="title-wrapper">
                    <div class="title-wrap">
                        <h3 class="subtitle">
                        <?php
                if (is_active_sidebar("blockbuster-subtitle")) {
                    dynamic_sidebar("blockbuster-subtitle");
                }else{
                    echo '<h1>Add Text</h1>';
                }; ?>
                        </h3>
                        <h2 class="mbr-section-title mbr-fonts-style display-2">
                        <?php
                if (is_active_sidebar("blockbuster-title")) {
                    dynamic_sidebar("blockbuster-title");
                }else{
                    echo '<h1>Add Text</h1>';
                }; ?>
                        </h2>
                        <div class="mbr-text mbr-fonts-style display-7">
                        <?php
                if (is_active_sidebar("blockbuster-des")) {
                    dynamic_sidebar("blockbuster-des");
                }else{
                    echo '<h1>Add Text</h1>';
                }; ?>
                        </div>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary-outline" href="#">
                                DOWNLOAD
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></section>