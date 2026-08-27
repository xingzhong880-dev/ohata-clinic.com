<div class="supervisor-toggle-item">
    <div class="supervisor-toggle-title">
        <div class="supervisor-toggle-title1">
            <div class="supervisor-toggle-box-top">
                <?php
                $img_id = block_value('supervisor-toggle-img');
                if ($img_id) :
                    $img_url = wp_get_attachment_image_url($img_id, 'large');
                    if ($img_url) :
                ?>
                        <img width="96px" height="96px" class="supervisor-toggle-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('supervisor-toggle-name')); ?>" loading=”lazy”>
                <?php endif;
                endif; ?>
            </div>
            <div class="supervisor-toggle-box-text">
                <p class="supervisor-toggle-box-text1"><?php echo esc_html(block_value('supervisor-toggle-position')); ?></p>
                <p class="supervisor-toggle-box-text2"><?php echo esc_html(block_value('supervisor-toggle-name')); ?></p>
            </div>
        </div>
        <span class="supervisor-toggle-icon">＋</span>
    </div>
    <div class="supervisor-toggle-text">
        <p><span class="supervisor-toggle-text2"><?php echo wpautop(wp_kses_post(block_value('supervisor-toggle-text'))); ?></span></p>
    </div>
</div>