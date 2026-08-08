<?php get_header(); ?>

<!-- MV -->
<section class="Mv">

        <div class="introduction">

                <div class="title">
                        <img src="<?php echo get_theme_file_uri('img/clinic-img.webp'); ?>" alt="logo">
                        <div class="title-list">
                                <ul class="title-list-container">
                                        <li class="title-list-1">内視鏡検査</li>
                                        <li class="title-list-2">睡眠時無呼吸症候群</li>
                                        <li class="title-list-1">内科</li>
                                        <li class="title-list-2">胃腸科</li>
                                        <li class="title-list-1">外科</li>
                                        <li class="title-list-2">形成外科</li>
                                        <li class="title-list-1">皮膚科</li>
                                </ul>
                                <h1 class="title-text">地域に寄り添い、<span class="title-text-1">80</span>年。</h1>
                                <p class="title-text-top">これからもあなたの“かかりつけ医“として<br class="sp-hide-br">一人ひとりに寄り添いながら、安心して通えるクリニックを目指します。</p>
                                <p class="title-text-bottom">※ 1946年から2026年現在まで</p>
                        </div>
                </div>
                <div class="point">
                        <div class="point01">
                                <div class="point-text-row">
                                        <p class="point-text">POINT<span class="point-number">01</span></p>
                                </div>
                                <div class="point01-text">
                                        <h2 class="point-text-1">皆様のかかりつけ医として<br><span class="point-text-1-1">各診療科目に認定医が在中</span></h2>
                                        <p class="point-text-2">※日本消化器外科学会 認定医,日本外科学会 認定医,日本医師会 認定産業医,日本医師会 認定健康スポーツ医 大圃 弘<br>※日本外科学会 外科認定医,日本外科学会 認定登録医,日本医師会 認定産業医 大関 美穂<br>※日本内科学会 認定内科医 大圃 研,根岸 良充,伊藤 洋平</p>
                                </div>
                        </div>
                        <div class="point02">
                                <div class="point-text-row">
                                        <p class="point-text">POINT<span class="point-number">02</span></p>
                                </div>
                                <div class="point02-title">
                                        <h2 class="point-text-1"><span class="point-text-1-1">駅チカ・駐車場20台完備</span><br>で通院も安心</h2>
                                        <p class="point-text-3">下館駅から徒歩4分。クリニック前には15台分の駐車スペースもご用意しています。</p>
                                </div>
                        </div>
                        <div class="point03">
                                <div class="point-text-row">
                                        <p class="point-text">POINT<span class="point-number">03</span></p>
                                </div>
                                <div class="point03-text">
                                        <h2 class="point-text-1"><span class="point-text-1-1">土曜日</span>、診療・検査可能</h2>
                                        <div class="point03-text-bottom">
                                                <?php
                                                $schedule = [
                                                        "月" => ["am" => true,  "pm" => true],
                                                        "火" => ["am" => true,  "pm" => true],
                                                        "水" => ["am" => true,  "pm" => true],
                                                        "木" => ["am" => false,  "pm" => false],
                                                        "金" => ["am" => true,  "pm" => true],
                                                        "土" => ["am" => true,  "pm" => false],
                                                        "日" => ["am" => false, "pm" => false],
                                                ];

                                                function mark(bool $open): string
                                                {
                                                        return $open
                                                                ? "<span class=\"mark-open\">●</span>"
                                                                : "<span class=\"mark-closed\">×</span><br><span class=\"closed-label\">休診</span>";
                                                }
                                                ?>

                                                <div class="schedule-wrapper">
                                                        <table class="schedule-table">
                                                                <tr>
                                                                        <th>診療時間</th>
                                                                        <?php foreach (array_keys($schedule) as $day): ?>
                                                                                <th><?= htmlspecialchars($day) ?></th>
                                                                        <?php endforeach; ?>
                                                                </tr>
                                                                <tr>
                                                                        <td>9:00-12:30</td>
                                                                        <?php foreach ($schedule as $info): ?>
                                                                                <td><?= mark($info["am"]) ?></td>
                                                                        <?php endforeach; ?>
                                                                </tr>
                                                                <tr>
                                                                        <td>14:30-18:00</td>
                                                                        <?php foreach ($schedule as $info): ?>
                                                                                <td><?= mark($info["pm"]) ?></td>
                                                                        <?php endforeach; ?>
                                                                </tr>
                                                        </table>
                                                </div>
                                        </div>
                                        <p class="point-text-4">休診日：木曜、土曜午後、日曜、祝日</p>
                                </div>
                        </div>
                </div>
        </div>
</section>
<section class="Information">
        <div class="Information-container">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="Information-left">
                        <div class="Information-left-img">
                                <img src="<?php echo get_theme_file_uri('img/doctor-1.webp'); ?>" alt="doctor">
                        </div>
                        <div class="Information-left-text">
                                <div class="Information-left-text-container">
                                        <div class="Information-left-text-1">
                                                <p class="Information-left-text-1-1">日本消化器内視鏡学会</p>
                                                <p class="Information-left-text-1-2">消化器内視鏡専門医<span class="Information-left-text-1-4">による</span><br>負担<span class="Information-left-text-1-4">の</span>少ない内視鏡検査</p>
                                                <p class="Information-left-text-1-3">※日本消化器内視鏡学会 専門医 大圃 研、根岸 良充、伊藤 洋平</p>
                                        </div>
                                        <p class="Information-left-text-2">胃カメラ<br>大腸カメラ</p>
                                </div>
                        </div>
                        <div class="Information-left-induction">
                                <span class="Information-left-induction-1">内視鏡検査についてはこちらから</span>
                        </div>
                </a>
                <div class="Information-right">
                        <h2 class="Information-right-title">
                                <i class="fa-solid fa-volume-high"></i>
                                お知らせ
                        </h2>
                        <?php
                        $oshirase_query = new WP_Query(array(
                                'post_type'      => 'post',
                                'posts_per_page' => 3,
                                'category_name'  => 'information',
                        ));
                        if ($oshirase_query->have_posts()) : ?>
                                <ul class="oshirase-list">
                                        <?php while ($oshirase_query->have_posts()) : $oshirase_query->the_post(); ?>
                                                <li>
                                                        <div class="oshirase-top">
                                                                <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                                                                <?php if ($oshirase_query->current_post === 0) : ?>
                                                                        <span class="new-badge">NEW</span>
                                                                <?php endif; ?>
                                                        </div>
                                                        <div class="oshirase-bottom">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </div>
                                                </li>
                                        <?php endwhile; ?>
                                </ul>
                                <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                                <p>お知らせはありません</p>
                        <?php endif; ?>
                </div>
        </div>
        <div class="oval-1"></div>
</section>
<section class="Access">
        <div class="Access-container">
                <div class="top-title">
                        <h2 class="Access-title-1">診療時間・アクセス</h2>
                        <p class="Access-title-2">Information</p>
                </div>
                <div class="Access-table">
                        <div class="Access-table-1">
                                <?php
                                $schedule = [
                                        "月" => ["am" => true,  "pm" => true],
                                        "火" => ["am" => true,  "pm" => true],
                                        "水" => ["am" => true,  "pm" => true],
                                        "木" => ["am" => false, "pm" => false],
                                        "金" => ["am" => true,  "pm" => true],
                                        "土" => ["am" => true,  "pm" => false],
                                        "日・祝" => ["am" => false, "pm" => false],
                                ];
                                $symbols = [
                                        "月" => ["am" => ["◆\u{FE0E}", "diamond"], "pm" => ["◆\u{FE0E}", "diamond"]],
                                        "火" => ["am" => ["⬟", "pentagon"],         "pm" => ["⬟", "pentagon"]],
                                        "水" => ["am" => ["◆\u{FE0E}", "diamond"], "pm" => ["◆\u{FE0E}", "diamond"]],
                                        "金" => ["am" => ["◆\u{FE0E}", "diamond"], "pm" => [["◆\u{FE0E}", "diamond"], ["★", "star"]]],
                                        "土" => ["am" => ["●", "circle"],            "pm" => null],
                                ];

                                function mark_v2(bool $open, $symbol = null): string
                                {
                                        if ($open) {
                                                if ($symbol !== null) {
                                                        $isMulti = is_array($symbol) && is_array($symbol[0]);
                                                        $items = $isMulti ? $symbol : [$symbol];

                                                        $spans = implode('', array_map(
                                                                fn($s) => "<span class=\"mark_v2-symbol mark_v2-symbol--{$s[1]}\">{$s[0]}</span>",
                                                                $items
                                                        ));
                                                        return "<span class=\"mark_v2-symbol-group\">{$spans}</span>";
                                                }
                                                return "<span class=\"mark_v2-open\">●</span>";
                                        }
                                        return "<span class=\"mark_v2-closed\">×</span><br><span class=\"closed-label\">休診</span>";
                                }
                                ?>

                                <div class="schedule-wrapper-1">
                                        <table class="schedule-table-2">
                                                <tr>
                                                        <th>診療時間</th>
                                                        <?php foreach (array_keys($schedule) as $day): ?>
                                                                <th><?= htmlspecialchars($day) ?></th>
                                                        <?php endforeach; ?>
                                                </tr>
                                                <tr>
                                                        <td>9:00-12:30<br><span class="schedule-table-3">(受付13:00まで)</span></td>
                                                        <?php foreach ($schedule as $day => $info): ?>
                                                                <td><?= mark_v2($info["am"], $symbols[$day]["am"] ?? null) ?></td>
                                                        <?php endforeach; ?>
                                                </tr>
                                                <tr>
                                                        <td>14:30-18:00<br><span class="schedule-table-3">(受付18:30まで)</span></td>
                                                        <?php foreach ($schedule as $day => $info): ?>
                                                                <td><?= mark_v2($info["pm"], $symbols[$day]["pm"] ?? null) ?></td>
                                                        <?php endforeach; ?>
                                                </tr>
                                        </table>
                                </div>
                        </div>
                </div>
                <ul class="Access-list">
                        <li class="Access-list-1">
                                <span class="mark_v2-symbol mark_v2-symbol--circle">●</span>
                                <span class="Access-list-text">院長</span>
                        </li>
                        <li class="Access-list-1">
                                <span class="mark_v2-symbol mark_v2-symbol--diamond">◆<span class="visually-hidden"></span></span>
                                <span class="Access-list-text">大関医師</span></li>
                        <li class="Access-list-1">
                                <span class="mark_v2-symbol mark_v2-symbol--pentagon">⬟</span>
                                <span class="Access-list-text">消化器内科医師（根岸/伊藤）</span>
                        </li>
                        <li class="Access-list-1">
                                <span class="mark_v2-symbol mark_v2-symbol--star">★</span>
                                <span class="Access-list-text">形成外科医師（第1、3週）</span>
                        </li>
                </ul>
                <p class="Access-text">※消化器内科医師は第1、3、5週が伊藤医師。第2、4週が根岸医師担当となります。<br>※ 院長は原則として院内におります。御用の際は、お申し出ください。</p>
                <div class="Access-content">
                        <div class="Access-left">
                                <dl class="Access-left-1">
                                        <dt class="Access-left-text-1">休診日</dt>
                                        <dd class="Access-left-text-2">木曜、土曜午後、日曜、祝日<br>曜日によって、医師が変更になる事がありますので、詳しくは直接クリニックまでお問い合わせください。</dd>
                                        <dt class="Access-left-text-1">住所</dt>
                                        <dd class="Access-left-text-2">〒308-0031 茨城県筑西市丙153-4</dd>
                                        <dt class="Access-left-text-1">駐車場</dt>
                                        <dd class="Access-left-text-2">15台</dd>
                                        <dt class="Access-left-text-1">アクセス</dt>
                                        <dd class="Access-left-text-2">JR水戸線 下館駅北口より徒歩4分<br><a href="https://www.google.co.jp/maps/place/%E5%A4%A7%E5%9C%83%E3%82%AF%E3%83%AA%E3%83%8B%E3%83%83%E3%82%AF/@36.306508,139.9779237,17z/data=!3m1!4b1!4m6!3m5!1s0x601f551ef4ceaae1:0x87efc751136cd83a!8m2!3d36.306508!4d139.9804986!16s%2Fg%2F1tdjr723" target="_blank" rel="noopener noreferrer" class="Access-left-btn"><i class="fa-solid fa-location-dot"></i> GoogleMAPで行き方を確認する</a></dd>
                                </dl>
                        </div>
                        <div class="Access-right">
                                <img src="<?php echo get_theme_file_uri('img/map.webp'); ?>" alt="map">
                        </div>
                </div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="Access-bottom-btn">診療時間・アクセスはこちら</a>
                <div class="Access-bottom">
                        <p class="Access-bottom-text1"><img src="<?php echo get_theme_file_uri('img/sick.webp'); ?>" alt="sick-icon"> 発熱・風邪症状のある方へ</p>
                        <p class="Access-bottom-text2">発熱・風邪症状のある患者さんの診療・各種検査を行っております。<br>発熱外来は１５時からの予約制なので、必ず事前のお電話をお願いいたします。</p>
                </div>
        </div>
        <div class="oval-2"></div>
</section>
<section class="Medical-menu">
        <div class="Medical-menu-container">
                <div class="top-title-2">
                        <h2 class="Medical-menu-title-1">診療案内</h2>
                        <p class="Medical-menu-title-2">Medical menu</p>
                </div>
                <div class="Medical-menu-list">
                        <ul class="Medical-menu-list1">
                                <li class="Medical-menu-list1-1">
                                        <div class="Medical-menu-circle">
                                                <img src="<?php echo get_theme_file_uri('img/Rectangle1.webp'); ?>" alt="内科">
                                        </div>
                                        <div class="Medical-menu-text">
                                                <h3 class="Medical-menu-text-title">内科</h3>
                                                <p> この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。 </p>
                                        </div>
                                </li>
                                <li class="Medical-menu-list1-1">
                                        <div class="Medical-menu-circle">
                                                <img src="<?php echo get_theme_file_uri('img/Rectangle2.webp'); ?>" alt="睡眠時無呼吸症候群">
                                        </div>
                                        <div class="Medical-menu-text">
                                                <h3 class="Medical-menu-text-title">睡眠時無呼吸症候群</h3>
                                                <p> この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。 </p>
                                        </div>        
                                </li>
                                <li class="Medical-menu-list1-1">
                                        <div class="Medical-menu-circle">
                                                <img src="<?php echo get_theme_file_uri('img/Rectangle3.webp'); ?>" alt="CPAP治療">
                                        </div>
                                        <div class="Medical-menu-text">
                                                <h3 class="Medical-menu-text-title">CPAP治療</h3>
                                                <p> この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。 </p>
                                        </div>        
                                </li>
                                <li class="Medical-menu-list1-1">
                                        <div class="Medical-menu-circle">
                                                <img src="<?php echo get_theme_file_uri('img/Rectangle4.webp'); ?>" alt="呼吸器内科">
                                        </div>
                                        <div class="Medical-menu-text">
                                                <h3 class="Medical-menu-text-title">呼吸器内科</h3>
                                                <p> この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。 </p>
                                        </div>        
                                </li>
                                <li class="Medical-menu-list1-1">
                                        <div class="Medical-menu-circle">
                                                <img src="<?php echo get_theme_file_uri('img/Rectangle5.webp'); ?>" alt="生活習慣病">
                                        </div>
                                        <div class="Medical-menu-text">
                                                <h3 class="Medical-menu-text-title">生活習慣病</h3>
                                                <p> この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。 </p>
                                        </div>        
                                </li>
                                <li class="Medical-menu-list1-1">
                                        <div class="Medical-menu-circle">
                                                <img src="<?php echo get_theme_file_uri('img/Rectangle6.webp'); ?>" alt="形成外科">
                                        </div>
                                        <div class="Medical-menu-text">
                                                <h3 class="Medical-menu-text-title">形成外科</h3>
                                                <p> この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。 </p>
                                        </div>
                                </li>
                        </ul>
                </div>
        </div>
</section>
<section class="Greeting">
        <div class="oval-3"></div>
        <div class="Greeting-container">
                <div class="top-title">
                        <h2 class="Greeting-title-1">院長ごあいさつ</h2>
                        <p class="Greeting-title-2">Greeting</p>
                </div>
                <div class="Greeting-top">
                        <p>当院のホームページをご覧いただきありがとうございます。<br><br>
                        大圃クリニックは、これまで長きにわたり、地域の皆様の健康を支える「身近な医療機関」として歩んできました。現在では、私の息子を含む複数の内視鏡専門医が診療を担当し、幅広い年代の患者さんに安心して検査・治療を受けていただける体制を整えています。<br><br>
                        私自身、長年にわたり外科・内科の両面から地域医療に携わってまいりましたが、医療技術は日々進化しており、それを現場に反映させる努力は今も変わりません。<br><br>
                        特に、近年力を入れている内視鏡診療は、「早期発見・早期治療」において非常に重要な取組の一つです。<br><br>
                        クリニックであっても、高度な診断力と温かい対応を両立する。<br>それが、私たちが目指す「地域のかかりつけ医」のあり方です。これからも変わらぬ姿勢で、皆様にとって頼れる医療機関であり続けたいと考えております。</p>
                        <div class="Greeting-top-img">
                                <img src="<?php echo get_theme_file_uri('img/Frame.webp'); ?>" alt="大圃クリニック院長">
                                <p class="Greeting-top-name">大圃クリニック 院長<br><span class="Greeting-top-name1">大圃 弘</span><br><span class="Greeting-top-name2">Ohata Hiroshi</span></p>
                        </div>
                </div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="Greeting-bottom">医師紹介はこちら</a>
        </div>
</section>
<section class="Reasons">
        <div class="oval-4"></div>
        <div class="Reasons-container">
                <div class="top-title">
                        <h2 class="Greeting-title-1">当院の内視鏡検査が選ばれる理由</h2>
                        <p class="Greeting-title-2">Reasons</p>
                </div>
                <div class="Reasons-box">
                        <div class="Reasons-box1">
                                <div class="Reasons-box1-bg"></div>
                                <div class="Reasons-box2">
                                        <div class="Reasons-box2-1">
                                                <img src="<?php echo get_theme_file_uri('img/img_reason-1.webp'); ?>" alt="Medical menu">
                                        </div>
                                        <div class="Reasons-box2-2">
                                                <p class="Reasons-box2-top">01</p>
                                                <p class="Reasons-box2-middle">幅広い診療科を備えた<br>地域のかかりつけ医</p>
                                                <p class="Reasons-box2-bottom">当院では、内科・外科・胃腸科・皮膚科・形成外科・理学療法の診療に対応しており、風邪や腹痛などの日常的な症状から外傷、皮膚のトラブル、手術後のリハビリまで、幅広い医療を提供しています。<br><br>ひとつのクリニック内で複数の診療科を受診できるため、症状によりどの診療科を受診すればいいか不安な患者さんでも安心してご来院いただける環境を整えております。</p>
                                        </div>
                                </div>
                        </div>
                        <div class="Reasons-box3">
                                <div class="Reasons-box3-bg"></div>
                                <div class="Reasons-box4">
                                        <div class="Reasons-box4-1">
                                                <img src="<?php echo get_theme_file_uri('img/img_reason-1.webp'); ?>" alt="Medical menu">
                                        </div>
                                        <div class="Reasons-box4-2">
                                                <p class="Reasons-box4-top">01</p>
                                                <p class="Reasons-box4-middle">幅広い診療科を備えた<br>地域のかかりつけ医</p>
                                                <p class="Reasons-box2-bottom">当院では、内科・外科・胃腸科・皮膚科・形成外科・理学療法の診療に対応しており、風邪や腹痛などの日常的な症状から外傷、皮膚のトラブル、手術後のリハビリまで、幅広い医療を提供しています。<br><br>ひとつのクリニック内で複数の診療科を受診できるため、症状によりどの診療科を受診すればいいか不安な患者さんでも安心してご来院いただける環境を整えております。</p>
                                        </div>
                                </div>
                        </div>
                        <div class="Reasons-box1">
                                <div class="Reasons-box1-bg"></div>
                                <div class="Reasons-box2">
                                        <div class="Reasons-box2-1">
                                                <img src="<?php echo get_theme_file_uri('img/img_reason-1.webp'); ?>" alt="Medical menu">
                                        </div>
                                        <div class="Reasons-box2-2">
                                                <p class="Reasons-box2-top">01</p>
                                                <p class="Reasons-box2-middle">幅広い診療科を備えた<br>地域のかかりつけ医</p>
                                                <p class="Reasons-box2-bottom">当院では、内科・外科・胃腸科・皮膚科・形成外科・理学療法の診療に対応しており、風邪や腹痛などの日常的な症状から外傷、皮膚のトラブル、手術後のリハビリまで、幅広い医療を提供しています。<br><br>ひとつのクリニック内で複数の診療科を受診できるため、症状によりどの診療科を受診すればいいか不安な患者さんでも安心してご来院いただける環境を整えております。</p>
                                        </div>
                                </div>
                        </div>
                        <div class="Reasons-box3">
                                <div class="Reasons-box3-bg"></div>
                                <div class="Reasons-box4">
                                        <div class="Reasons-box4-1">
                                                <img src="<?php echo get_theme_file_uri('img/img_reason-1.webp'); ?>" alt="Medical menu">
                                        </div>
                                        <div class="Reasons-box4-2">
                                                <p class="Reasons-box4-top">01</p>
                                                <p class="Reasons-box4-middle">幅広い診療科を備えた<br>地域のかかりつけ医</p>
                                                <p class="Reasons-box2-bottom">当院では、内科・外科・胃腸科・皮膚科・形成外科・理学療法の診療に対応しており、風邪や腹痛などの日常的な症状から外傷、皮膚のトラブル、手術後のリハビリまで、幅広い医療を提供しています。<br><br>ひとつのクリニック内で複数の診療科を受診できるため、症状によりどの診療科を受診すればいいか不安な患者さんでも安心してご来院いただける環境を整えております。</p>
                                        </div>
                                </div>
                        </div>
                        <div class="Reasons-box1">
                                <div class="Reasons-box1-bg"></div>
                                <div class="Reasons-box2">
                                        <div class="Reasons-box2-1">
                                                <img src="<?php echo get_theme_file_uri('img/img_reason-1.webp'); ?>" alt="Medical menu">
                                        </div>
                                        <div class="Reasons-box2-2">
                                                <p class="Reasons-box2-top">01</p>
                                                <p class="Reasons-box2-middle">幅広い診療科を備えた<br>地域のかかりつけ医</p>
                                                <p class="Reasons-box2-bottom">当院では、内科・外科・胃腸科・皮膚科・形成外科・理学療法の診療に対応しており、風邪や腹痛などの日常的な症状から外傷、皮膚のトラブル、手術後のリハビリまで、幅広い医療を提供しています。<br><br>ひとつのクリニック内で複数の診療科を受診できるため、症状によりどの診療科を受診すればいいか不安な患者さんでも安心してご来院いただける環境を整えております。</p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<?php get_footer(); ?>