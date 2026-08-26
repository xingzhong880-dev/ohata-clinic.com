<?php
$switch = block_value( 'feature-content-change' ); 
$switch = ( $switch === 'blue' ) ? 'blue' : 'green';
?>
<div class="feature-content-item" data-switch="<?php echo esc_attr( $switch ); ?>">
    <div class="feature-content-title">
        <div class="feature-content-box"></div>
        <div class="feature-content-text">
            <p><span class="feature-content-text2"><?php echo wpautop(wp_kses_post(block_value('feature-content-text'))); ?></span></p>
        </div>
    </div>
</div>