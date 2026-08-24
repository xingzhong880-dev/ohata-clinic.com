<div class="citation-container">
    <div class="citation-box">
        <div class="citation-text">
            <p><span class="citation-text2"><?php echo wpautop(wp_kses_post(block_value('citation-text'))); ?></span></p>
        </div>
        <div class="citation-bottom">
            <p class="citation-text3">引用</p>
            <a class="citation-btn" href="<?php echo esc_url(block_value('citation-url')); ?>"><?php echo esc_html(block_value('citation-url')); ?></a>
        </div>
    </div>
</div>