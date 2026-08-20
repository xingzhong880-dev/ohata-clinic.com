<div class="strengths-box">
    <div class="strengths-box1">
        <div class="strengths-box-top">
            <?php
            $img_id = block_value('strengths-img');
            if ($img_id) :
                $img_url = wp_get_attachment_image_url($img_id, 'large');
                if ($img_url) :
            ?>
                    <img class="strengths-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('strengths-title')); ?>">
            <?php endif;
            endif; ?>

            <div class="strengths-box-point">
                <p class="strengths-box-point-label"><?php echo esc_html(block_value('strengths-point')); ?></p>
                <p class="strengths-box-point-number"><?php echo esc_html(block_value('strengths-number')); ?></p>
            </div>
        </div>

        <div class="strengths-box-bottom">
            <p class="strengths-box-title"><?php echo esc_html(block_value('strengths-title')); ?></p>
            <div class="strengths-box-bottom2">
                <?php echo wpautop(wp_kses_post(block_value('strengths-text'))); ?>
            </div>
            <div class="strengths-box-bottom-btn-wrap">
                <a class="strengths-box-bottom-btn" href="<?php echo esc_url(block_value('strengths-btn')); ?>">
                    詳しく見る
                    <span class="strengths-box-bottom-btn-circle">
                        <span class="strengths-box-bottom-btn-arrow"></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>