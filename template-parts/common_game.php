<section class="common_game_sec" id="game">
    <div class="section_pr">
        <div class="img_wrapper">
        <?php
                if (is_active_sidebar("common-game-section-left")) {
                    dynamic_sidebar("common-game-section-left");
                }; ?>
        </div>
        <div class="content_wrapper">
        <?php
                if (is_active_sidebar("common-game-section-right")) {
                    dynamic_sidebar("common-game-section-right");
                }; ?>
        </div>
        </div>
    </div>
</section>