<?php
$tag = block_value( 'strengths-title-tag-beside' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );
?>
<div class="strengths-box-beside">
    <div class="strengths-box1-beside">
        <div class="strengths-box-top-beside">
            <?php
            $img_id = block_value('strengths-img-beside');
            if ($img_id) :
                $img_url = wp_get_attachment_image_url($img_id, 'large');
                if ($img_url) :
            ?>
                    <img width="280px" height="179px" class="strengths-box-img-beside" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('strengths-title-beside')); ?>" loading=”lazy”>
            <?php endif;
            endif; ?>
        </div>

        <div class="strengths-box-bottom-beside">
            <<?php echo $tag; ?> class="strengths-box-title-beside"><?php echo esc_html(block_value('strengths-title-beside')); ?></<?php echo $tag; ?>>
            <div class="strengths-box-bottom2-beside">
                <?php echo wpautop(wp_kses_post(block_value('strengths-text-beside'))); ?>
            </div>
            <div class="strengths-box-bottom-btn-wrap-beside">
                <a class="strengths-box-bottom-btn-beside" href="<?php echo esc_url(block_value('strengths-btn-beside')); ?>">
                    詳しく見る
                    <span class="strengths-box-bottom-btn-circle-beside">
                        <span class="strengths-box-bottom-btn-arrow-beside"></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>