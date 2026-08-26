<div class="citation-container">
    <div class="citation-box">
        <div class="citation-top">
            <div class="citation-icon-bg">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="#00A5C3">
                    <circle cx="8" cy="8" r="3.5" />
                    <g transform="rotate(5, 8, 8)">
                        <path d="M6.5 6.6 C4.5 7.3 4.2 10.4 6.2 12.9 C7.7 14.7 10 15.7 11.2 15.3 C11.7 15.2 11.8 14.6 11.4 14.3 C9.2 12.7 7.8 10.7 7.9 8.7 C7.9 7.9 7.4 7.1 6.5 6.6 Z" />
                    </g>
                    <circle cx="17" cy="8" r="3.5" />
                    <g transform="rotate(5, 17, 8)">
                        <path d="M15.5 6.6 C13.5 7.3 13.2 10.4 15.2 12.9 C16.7 14.7 19 15.7 20.2 15.3 C20.7 15.2 20.8 14.6 20.4 14.3 C18.2 12.7 16.8 10.7 16.9 8.7 C16.9 7.9 16.4 7.1 15.5 6.6 Z" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="citation-text">
            <p><span class="citation-text2"><?php echo wpautop(wp_kses_post(block_value('citation-text'))); ?></span></p>
        </div>
        <div class="citation-bottom">
            <p class="citation-text3">引用</p>
            <a class="citation-btn" href="<?php echo esc_url(block_value('citation-url')); ?>"><?php echo esc_html(block_value('citation-url')); ?></a>
        </div>
    </div>
</div>