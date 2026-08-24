<?php
$tag = block_value( 'merit-demerit-title-tag' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );

$switch = block_value( 'merit-demerit-change' ); 
$switch = ( $switch === 'Demerit' ) ? 'Demerit' : 'Merit';
?>
<div class="merit-demerit-container">
    <div class="merit-demerit-box" data-switch="<?php echo esc_attr( $switch ); ?>">
        <span class="merit-demerit-badge"><?php echo esc_html( $switch ); ?></span>
        <<?php echo $tag; ?> class="merit-demerit-box-title"><?php echo esc_html(block_value('merit-demerit-title')); ?></<?php echo $tag; ?>>
        <div class="merit-demerit-box2">
            <?php echo wpautop(wp_kses_post(block_value('merit-demerit-text'))); ?>
        </div>
    </div>
</div>