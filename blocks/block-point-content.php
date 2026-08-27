<?php
$tag = block_value( 'point-content-title-tag' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );

$switch = block_value( 'point-content-change' ); 
$switch = ( $switch === 'right' ) ? 'right' : 'left';
?>
<div class="point-content-container">
    <div class="point-content-box" data-switch="<?php echo esc_attr( $switch ); ?>">
        <div class="point-content-box1">
            <?php
            $img_id = block_value('point-content-img');
            if ($img_id) :
                $img_url = wp_get_attachment_image_url($img_id, 'large');
                if ($img_url) :
            ?>
                    <img width="420px" height="420px" class="point-content-box-img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(block_value('point-content-title')); ?>" loading="lazy">
            <?php endif;
            endif; ?>
        </div>
        <div class="point-content-box2">
            <div class="point-content-point">
                <p class="point-content-point-letter"><?php echo esc_html(block_value('point-content-letter')); ?></p>
                <p class="point-content-point-number"><?php echo esc_html(block_value('point-content-number')); ?></p>
            </div>
            <<?php echo $tag; ?> class="point-content-box-title"><?php echo esc_html(block_value('point-content-title')); ?></<?php echo $tag; ?>>
            <div class="point-content-box-bottom">
                <?php echo wpautop(wp_kses_post(block_value('point-content-text'))); ?>
            </div>
        </div>
    </div>
</div>