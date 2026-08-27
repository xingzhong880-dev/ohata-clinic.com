<?php
$tag = block_value('cta-tag');
if (! $tag) {
    $tag = 'p';
}
$tag = esc_attr($tag);
?>
<div class="cta-container">
    <div class="cta-item">
        <div class="cta-box">
            <p class="cta-clinic"><?php echo esc_html(block_value('cta-clinic')); ?></p>
            <<?php echo $tag; ?> class="cta-title"><?php echo esc_html(block_value('cta-title')); ?></<?php echo $tag; ?>>
        </div>
        <div class="cta-box1">
            <div class="cta-box1-1">
                <?php
                $img_id = block_value('cta-img');
                if ($img_id) :
                    $img_url = wp_get_attachment_image_url($img_id, 'large');
                    if ($img_url) :
                ?>
                        <img width="270px" height="270px" class="cta-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('cta-title')); ?>" loading=”lazy”>
                <?php endif;
                endif; ?>
            </div>
            <div class="cta-box1-2">
                <p class="cta-box1-2-text">地域に寄り添い、<span class="cta-box1-2-text2">80</span>年。</p>
                <div class="cta-box1-2-1">
                    <div class="cta-box1-2-box1">
                        <div class="cta-circle1">
                            <i class="fa-solid fa-stethoscope cta-icon1"></i>
                        </div>
                        <p class="cta-box1-2-box2-text">専門医複数名<br>在籍</p>
                    </div>
                    <div class="cta-box1-2-box1">
                        <div class="cta-circle1">
                            <i class="fa-solid fa-car cta-icon2"></i>
                        </div>
                        <p class="cta-box1-2-box2-text">下館駅、徒歩4分<br>駐車場完備</p>
                    </div>
                    <div class="cta-box1-2-box1">
                        <div class="cta-circle1">
                            <i class="fa-regular fa-calendar-check cta-icon3"></i>
                        </div>
                        <p class="cta-box1-2-box2-text">土曜日<br>12:30まで診療</p>
                    </div>
                </div>
                <div class="cta-box1-2-2">
                    <div class="cta-box1-2-row">
                        <span class="cta-box1-2-mark">※</span>
                        <span class="cta-box1-2-text3">日本消化器外科学会 認定医,日本外科学会 認定医,日本医師会 認定産業医,日本医師会 認定健康スポーツ医 大圃 弘</span>
                    </div>
                    <div class="cta-box1-2-row">
                        <span class="cta-box1-2-mark">※</span>
                        <span class="cta-box1-2-text3">日本外科学会 外科認定医,日本外科学会 認定登録医,日本医師会 認定産業医 大関 美穂</span>
                    </div>
                    <div class="cta-box1-2-row">
                        <span class="cta-box1-2-mark">※</span>
                        <span class="cta-box1-2-text3">日本内科学会 認定内科医 大圃 研,根岸 良充,伊藤 洋平</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-text">
            <p><span class="cta-text2"><?php echo wpautop(wp_kses_post(block_value('cta-text'))); ?></span></p>
        </div>
        <div class="cta-box-bottom-btn-wrap">
            <div class="cta-box-bottom-btn-wrap1">
                <a class="cta-box-bottom-btn1" href="<?php echo esc_url(block_value('cta-btn')); ?>">
                    <div class="cta-box-bottom-btn-circle1">
                        <i class="fa-regular fa-calendar-days  cta-calendar"></i>
                    </div>
                    <div class="cta-box-bottom-btn-text">
                        <p class="cta-box-bottom-btn1-text2">ご予約・ご相談はこちら</p>
                    </div>
                    <svg width="30" height="30" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 35 L60 50 L40 65" stroke="#ffffff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    </svg>
                </a>
                <p class="cta-box-bottom-btn1-text">24時間受付！お気軽にご来院ください！ </p>
            </div>
            <div class="cta-box-bottom-btn-wrap1">
                <a class="cta-box-bottom-btn2" href="<?php echo esc_url(block_value('cta-btn-2')); ?>">
                    <div class="cta-box-bottom-btn-container">
                        <div class="cta-box-bottom-btn-circle2">
                            <i class="fa-solid fa-phone cta-phone"></i>
                        </div>
                        <p class="cta-box-bottom-btn1-text3">0296-21-0123</p>
                    </div>
                </a>
                <p class="cta-box-bottom-btn1-text4">診療時間　9:00-12:30 / 14:30-18:00｜休診日　木曜、土曜午後、日曜、祝日</p>
            </div>
        </div>
    </div>
</div>