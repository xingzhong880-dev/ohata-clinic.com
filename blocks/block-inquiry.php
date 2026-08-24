<div class="inquiry-box">
    <div class="inquiry-box1">
        <?php echo esc_html(block_value('inquiry-letter')); ?>
    </div>
    <div class="inquiry-box2">
        <?php echo esc_html(block_value('inquiry-title')); ?>
    </div>
    <div class="inquiry-box3">
        <?php echo wpautop(wp_kses_post(block_value('inquiry-text'))); ?>
    </div>
    <div class="inquiry-box-bottom-btn-wrap">
        <a class="inquiry-box-bottom-btn1" href="<?php echo esc_url(block_value('inquiry-btn')); ?>">
            <div class="inquiry-box-bottom-btn-circle1">
                <i class="fa-regular fa-calendar-days  inquiry-calendar"></i>
            </div>
            <div class="inquiry-box-bottom-btn-text">
                <p class="inquiry-box-bottom-btn1-text">24時間受付！お気軽にご来院ください！</p>
                <p class="inquiry-box-bottom-btn1-text2">ご予約・ご相談はこちら</p>
            </div>
            <svg width="30" height="30" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path d="M40 35 L60 50 L40 65" stroke="#ffffff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
            </svg>
        </a>
        <a class="inquiry-box-bottom-btn2" href="<?php echo esc_url(block_value('inquiry-btn-2')); ?>">
            <div class="inquiry-box-bottom-btn-container">
                <div class="inquiry-box-bottom-btn-circle2">
                    <i class="fa-solid fa-phone inquiry-phone"></i>
                </div>
                <p class="inquiry-box-bottom-btn1-text3">0296-21-0123</p>
            </div>
            <p class="inquiry-box-bottom-btn1-text4">[午前]9:30~12:30[午後]14:30~18:00 [休診日]木曜、土曜午後、日曜、祝日</p>
        </a>
    </div>
</div>