<?php
$tag = block_value( 'subhead-box-tag-simple' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );
?>
<div class="subhead-box-box-simple">
    <div class="subhead-box-top-simple">
        <<?php echo $tag; ?> class="subhead-box-top-simple-title">
            <?php echo esc_html( block_value( 'subhead-box-title-simple' ) ); ?>
        </<?php echo $tag; ?>>
    </div>
    <div class="subhead-box-bottom-simple">
        <?php echo wpautop( wp_kses_post( block_value( 'subhead-box-text-simple' ) ) ); ?>
    </div>
</div>