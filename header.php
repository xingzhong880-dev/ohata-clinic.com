<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大圃クリニック</title>
    <!-- favicon OGP-->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.webp" type="image/webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300&family=DM+Sans:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta property="og:title" content="大圃クリニック">
    <meta property="og:description" content="地域に寄り添い開院79年。下館駅北口から徒歩4分の総合診療クリニック。駐車場15台完備。土曜日診療可能。内科認定医・内視鏡専門医在籍。昇降機完備のバリアフリー。内視鏡検査・睡眠時無呼吸症候群・内科・胃腸科・外科・形成外科・皮膚科など幅広い診療に対応。">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/clinic-img.webp">
    <?php get_template_part('/json/json-basic'); ?>
    <?php get_template_part('/json/json-faq'); ?>
    <?php if (is_single()) {
        get_template_part('/json/json-column');
    }; ?>
</head>

<body>
    <header>
        <div class="header__inner">
            <div class="top-address">
                <div class="top-address-left">
                    <p>茨城県筑西市の内科なら大圃クリニック｜内科学会認定医在籍</p>
                    <p>〒308-0031 茨城県筑西市丙１５３−４　JR水戸線 下館駅北口より徒歩4分</p>
                </div>
                <div class="top-address-right">
                    <div class="top-address-text">
                        <p>診療時間　9:00-12:30 / 14:30〜18:00</p>
                        <p>休診日　　木曜、土曜午後、日曜、祝日</p>
                    </div>
                    <div class="top-address-telephone">
                        <p><i class="fa-solid fa-phone"></i> 0296-21-0123</p>
                    </div>
                </div>
            </div>
            <div class="header__inner2">
                <div class="header_logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.webp" alt="大圃クリニック"></a>
                </div>
                <nav class="header__nav">
                    <ul class="header__nav-list">
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">診療時間・アクセス</a></li>
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">医師紹介</a></li>
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">診療内容一覧 <span>∨</span></a></li>
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">お知らせ</a></li>
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">クリニック紹介</a></li>
                        <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">当院の内視鏡検査について</a></li>
                        <li class="header__nav-item2"><a href="<?php echo esc_url(home_url('/')); ?>">診療予約</a></li>
                    </ul>
                    <div class="nav-address">
                        <div class="nav-address-telephone">
                            <p><i class="fa-solid fa-phone"></i> 0296-21-0123</p>
                        </div>
                        <div class="nav-address-text">
                            <p><span class="nav-address-label">午前</span> 9:00-12:30</p>
                            <p><span class="nav-address-label">午後</span> 14:30〜18:00</p>
                            <p><span class="nav-address-label">休診日</span> 木、土曜午後、日、祝</p>
                        </div>
                    </div>
                </nav>
            </div>
            <button class="hamburger" type="button" aria-label="メニューを開く">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <p class="hamburger-text">MENU</p>
                <p class="hamburger-text">Close</p>
            </button>
        </div>
        <div class="nav-overlay"></div>
    </header>
    <main>