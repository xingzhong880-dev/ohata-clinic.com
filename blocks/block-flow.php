<?php
$tag = block_value('flow-title-tag');
if (! $tag) {
    $tag = 'p';
}
$tag = esc_attr($tag);

$has_next = block_value('flow-step') === 'yes';
?>
<div class="flow-box">
    <div class="flow-box1">
        <div class="flow-box-left-wrap<?php echo $has_next ? ' has-next' : ''; ?>">
            <div class="flow-box-left">
                <p class="flow-box-left-letter"><?php echo esc_html(block_value('flow-letter')); ?></p>
                <p class="flow-box-left-number"><?php echo esc_html(block_value('flow-number')); ?></p>
            </div>
        </div>
        <div class="flow-box-container">
            <div class="flow-box-img">
                <?php
                $img_id = block_value('flow-img');
                if ($img_id) :
                    $img_url = wp_get_attachment_image_url($img_id, 'large');
                    if ($img_url) :
                ?>
                        <img width="270px" height="170px" class="flow-box-img1" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('flow-title')); ?>" loading=”lazy”>
                <?php endif;
                endif; ?>
            </div>
            <div class="flow-box-right">
                <div class="flow-box-right-bottom1">
                    <<?php echo $tag; ?> class="flow-box-right-title"><?php echo esc_html(block_value('flow-title')); ?></<?php echo $tag; ?>>
                </div>
                <div class="flow-box-right-bottom2">
                    <?php echo wpautop(wp_kses_post(block_value('flow-text'))); ?>
                </div>
            </div>
        </div>
    </div>
</div>