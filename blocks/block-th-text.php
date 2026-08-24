<?php
$tag = block_value( 'th-text-tag' );
if ( ! $tag ) {
    $tag = 'p';
}
$tag = esc_attr( $tag );
?>
<table class="gcb-side-table">
    <tbody>
        <tr>
            <<?php echo $tag; ?>>
                <th><?php echo esc_html( block_value( 'th-left-text' ) ); ?></th>
            </<?php echo $tag; ?>>
            <td><?php echo esc_html( wp_strip_all_tags( block_value( 'td-right-text' ) ) ); ?></td>
        </tr>
    </tbody>
</table>