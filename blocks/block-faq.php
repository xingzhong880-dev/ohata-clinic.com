<?php
$tag = block_value('faq-tag');
if (! $tag) {
    $tag = 'p';
}
$tag = esc_attr($tag);
?>
<div class="faq-item">
    <div class="faq-question">
        <<?php echo $tag; ?>><span class="faq-qa-mark">Q</span><?php echo esc_html(block_value('faq-question')); ?></<?php echo $tag; ?>>
        <span class="faq-icon">＋</span>
    </div>
    <div class="faq-answer">
        <p><span class="faq-qa-mark-2">A</span><span class="faq-answer-text"><?php echo wpautop(wp_kses_post(block_value('faq-answer'))); ?></span></p>
    </div>
</div>