<div class="wp-block-paragraph-simple">
    <div class="subhead-box-top-simple">
        <p><?php echo esc_html( block_value( 'subhead-box-title-simple' ) ); ?></p>
    </div>
    <div class="subhead-box-bottom">
        <?php echo wpautop( wp_kses_post( block_value( 'subhead-box-text' ) ) ); ?>
    </div>
</div>