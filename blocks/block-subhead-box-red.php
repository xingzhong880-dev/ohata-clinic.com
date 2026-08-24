<?php
$tag = block_value( 'subhead-box-tag-red' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );
?>
<div class="wp-block-paragraph-red">
    <div class="subhead-box-top-red">
        <<?php echo $tag; ?> class="subhead-box-top-red-title">
            <?php echo esc_html( block_value( 'subhead-box-title-red' ) ); ?>
        </<?php echo $tag; ?>>
    </div>
    <div class="subhead-box-bottom-red">
        <?php echo wpautop( wp_kses_post( block_value( 'subhead-box-text-red' ) ) ); ?>
    </div>
</div>