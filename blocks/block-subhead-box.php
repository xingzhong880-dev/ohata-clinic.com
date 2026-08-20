<div class="wp-block-paragraph">
    <div class="subhead-box-top">
        <p><?php echo esc_html( block_value( 'subhead-box-title' ) ); ?></p>
    </div>
    <div class="subhead-box-bottom">
        <?php echo wpautop( wp_kses_post( block_value( 'subhead-box-text' ) ) ); ?>
    </div>
</div>