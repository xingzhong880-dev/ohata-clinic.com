<?php get_header(); ?>

<!-- MV -->
<section class="Mv">

        <div class="introduction">
                
                <div class="title">
                        <div class="title-list">
                                <ul class="title-list-container">
                                        <li class="title-list-1">内視鏡検査</li>
                                        <li class="title-list-2">内科</li>
                                        <li class="title-list-1">胃腸科</li>
                                        <li class="title-list-2">外科</li>
                                        <li class="title-list-1">形成外科</li>
                                        <li class="title-list-2">皮膚科</li>
                                        <li class="title-list-1">睡眠時無呼吸症候群</li>
                                </ul>
                        </div>
                        <h1 class="title-text">地域に寄り添い、80年。</h1>
                        <p class="title-text-top">これからもあなたの“かかりつけ医“として<br>一人ひとりに寄り添いながら、安心して通えるクリニックを目指します。</p>
                        <p class="title-text-bottom">※ 1946年から2026年現在まで</p>
                </div>
                <div class="point">
                        <div class="point01">
                                <p class="point-text">POINT 01</p>
                                <div class="point01-text">
                                        <h2>皆様のかかりつけ医として<br>各診療科目に認定医が在中</h2>
                                        <p>※日本消化器外科学会 認定医,日本外科学会 認定医,日本医師会 認定産業医,日本医師会 認定健康スポーツ医 大圃 弘<br>※日本外科学会 外科認定医,日本外科学会 認定登録医,日本医師会 認定産業医 大関 美穂<br>※日本内科学会 認定内科医 大圃 研,根岸 良充,伊藤 洋平</p>
                                </div>
                        </div>
                        <div class="point02">
                                <p class="point-text">POINT 02</p>
                                <div class="point02-title">
                                        <h2>駅チカ・駐車場20台完備<br>で通院も安心</h2>
                                        <p>下館駅から徒歩4分。クリニック前には15台分の駐車スペースもご用意しています。</p>
                                </div>
                        </div>
                        <div class="point03">
                                <p class="point-text">POINT 03</p>
                                <div class="point03-text">
                                        <h2>土曜日、診療・検査可能</h2>
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
                                                        return $open ? "●" : "×<br>休診";
                                                }
                                                ?>

                                                <div class="schedule-wrapper">
                                                        <table>
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
                                </div>
                        </div>
                </div>
        </div>
</section>

<?php get_footer(); ?>