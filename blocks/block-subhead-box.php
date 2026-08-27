<?php
$tag = block_value( 'subhead-box-tag' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );
?>
<div class="subhead-box-box">
    <div class="subhead-box-top">
        <<?php echo $tag; ?> class="subhead-box-top-title">
            <?php echo esc_html( block_value( 'subhead-box-title' ) ); ?>
        </<?php echo $tag; ?>>
    </div>
    <div class="subhead-box-bottom">
        <?php echo wpautop( wp_kses_post( block_value( 'subhead-box-text' ) ) ); ?>
    </div>
</div>