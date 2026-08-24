<?php
$tag = block_value('toggle-tag');
if (! $tag) {
    $tag = 'p';
}
$tag = esc_attr($tag);
?>
<div class="toggle-item">
    <div class="toggle-title">
        <<?php echo $tag; ?>><?php echo esc_html(block_value('toggle-title')); ?></<?php echo $tag; ?>>
        <span class="toggle-icon">＋</span>
    </div>
    <div class="toggle-text">
        <p><span class="toggle-text2"><?php echo wpautop(wp_kses_post(block_value('toggle-text'))); ?></span></p>
    </div>
</div>