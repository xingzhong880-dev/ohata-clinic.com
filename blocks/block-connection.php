<div class="connection-box">
    <a class="connection-box1" href="<?php echo esc_url(block_value('connection-url')); ?>">
        <div class="connection-box2">
            <div class="connection-box-top">
                <?php
                $img_id = block_value('connection-img');
                if ($img_id) :
                    $img_url = wp_get_attachment_image_url($img_id, 'large');
                    if ($img_url) :
                ?>
                        <img class="connection-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('connection-title')); ?>">
                <?php endif;
                endif; ?>
            </div>
            <div class="connection-box-bottom">
                <?php echo wpautop(wp_kses_post(block_value('connection-text'))); ?>
            </div>
        </div>
        <span class="connection-box-bottom-btn-circle">
            <span class="connection-box-bottom-btn-arrow"></span>
        </span>
    </a>
</div>