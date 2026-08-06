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
                                                // 診療時間の設定(true=診療あり, false=休診)
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
<section class="Announce">
        <div class="Announce-container">
                <div class="Announce-left">
                        <div class="Announce-left-img">
                                <img src="<?php echo get_theme_file_uri('img/doctor-1.webp'); ?>" alt="doctor">
                        </div>
                        <div class="Announce-left-text">
                                <div class="Announce-left-text-container">
                                        <div class="Announce-left-text-1">
                                                <p class="Announce-left-text-1-1">日本消化器内視鏡学会</p>
                                                <p class="Announce-left-text-1-2">消化器内視鏡専門医による<br>負担の少ない内視鏡検査</p>
                                                <p class="Announce-left-text-1-3">※日本消化器内視鏡学会 専門医 大圃 研、根岸 良充、伊藤 洋平</p>
                                        </div>
                                        <p class="Announce-left-text-2">胃カメラ<br>大腸カメラ</p>
                                </div>
                        </div>
                        <div class="Announce-left-induction">
                                <a class="Announce-left-induction-1">内視鏡検査についてはこちらから</a>
                        </div>
                </div>
                <div class="Announce-right">
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
                                                        <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </li>
                                        <?php endwhile; ?>
                                </ul>
                                <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                                <p>お知らせはありません</p>
                        <?php endif; ?>
                </div>
        </div>
</section>

        <?php get_footer(); ?>