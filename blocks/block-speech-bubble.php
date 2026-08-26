<?php
$switch = block_value( 'speech-bubble-change' ); 
$switch = ( $switch === 'right' ) ? 'right' : 'left';
?>
<div class="speech-bubble-item" data-switch="<?php echo esc_attr( $switch ); ?>">
    <div class="speech-bubble-title">
        <div class="speech-bubble-box-top">
            <?php
            $img_id = block_value('speech-bubble-img');
            if ($img_id) :
                $img_url = wp_get_attachment_image_url($img_id, 'large');
                if ($img_url) :
            ?>
                    <img class="speech-bubble-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('speech-bubble-name')); ?>">
            <?php endif;
            endif; ?>
        </div>
        <div class="speech-bubble-box-text">
            <p class="speech-bubble-box-text1"><?php echo esc_html(block_value('speech-bubble-position')); ?></p>
            <p class="speech-bubble-box-text2"><?php echo esc_html(block_value('speech-bubble-name')); ?></p>
        </div>
    </div>
    <div class="speech-bubble-text">
        <p><span class="speech-bubble-text2"><?php echo wpautop(wp_kses_post(block_value('speech-bubble-text'))); ?></span></p>
    </div>
</div>