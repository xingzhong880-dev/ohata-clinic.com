<div class="supervisor-box">
    <div class="supervisor-box1">
        <p class="supervisor-box-title"><?php echo esc_html(block_value('supervisor-title')); ?></p>
        <div class="supervisor-box-1">
            <div class="supervisor-box-top">
                <?php
                $img_id = block_value('supervisor-img');
                if ($img_id) :
                    $img_url = wp_get_attachment_image_url($img_id, 'large');
                    if ($img_url) :
                ?>
                        <img width="229px" height="268px" class="supervisor-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('supervisor-title')); ?>" loading=”lazy”>
                <?php endif;
                endif; ?>

                <div class="supervisor-box-text">
                    <p class="supervisor-box-text1"><?php echo esc_html(block_value('supervisor-position')); ?></p>
                    <p class="supervisor-box-text2"><?php echo esc_html(block_value('supervisor-name')); ?></p>
                </div>
            </div>
            <div class="supervisor-box-bottom">
                <div class="supervisor-box-bottom2">
                    <?php echo wpautop(wp_kses_post(block_value('supervisor-text'))); ?>
                </div>
                <div class="supervisor-box-bottom-btn-wrap">
                    <a class="supervisor-box-bottom-btn" href="<?php echo esc_url(block_value('supervisor-url')); ?>">
                        詳しく見る
                        <span class="supervisor-box-bottom-btn-circle">
                            <span class="supervisor-box-bottom-btn-arrow"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>