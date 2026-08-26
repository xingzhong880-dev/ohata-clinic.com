<?php
$tag = block_value('feature-tag');
if (! $tag) {
    $tag = 'p';
}
$tag = esc_attr($tag);
?>
<div class="feature-container">
    <div class="feature-item">
        <div class="feature-box">
            <p class="feature-clinic"><?php echo esc_html(block_value('feature-clinic')); ?></p>
            <<?php echo $tag; ?> class="feature-title"><?php echo esc_html(block_value('feature-title')); ?></<?php echo $tag; ?>>
        </div>
        <div class="feature-text">
            <p><span class="feature-text2"><?php echo wpautop(wp_kses_post(block_value('feature-text'))); ?></span></p>
        </div>
    </div>
</div>