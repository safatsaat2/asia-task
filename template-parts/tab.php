<section class="tabs1 tav_sec" id="tabs1-c">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item first mbr-fonts-style"><a class="nav-link mbr-fonts-style show display-4 active" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-c_tab0" aria-selected="true">
                            YOUTUBE
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-c_tab1" aria-selected="false">
                            STEAM
                        </a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style display-4" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-c_tab2" aria-selected="false">
                           REDDIT
                        </a></li>
                    
                    
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content">
                    <div id="tabs1-c_tab0" class="tab-pane in active" role="tabpanel">
                        <div class="image-wrapper">
                        <?php
                if (is_active_sidebar("tab-youtube")) {
                    dynamic_sidebar("tab-youtube");
                }; ?>
                        </div>
                    </div>
                    <div id="tabs1-c_tab1" class="tab-pane" role="tabpanel">
                        <div class="image-wrapper">
                        <?php
                if (is_active_sidebar("tab-steam")) {
                    dynamic_sidebar("tab-steam");
                }; ?>
                        </div>
                    </div>
                    <div id="tabs1-c_tab2" class="tab-pane" role="tabpanel">
                        <div class="image-wrapper"><?php
                if (is_active_sidebar("tab-reddit")) {
                    dynamic_sidebar("tab-reddit");
                }; ?>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>