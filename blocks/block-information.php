<table class="information-table">
    <tbody>
        <tr class="information-table2">
            <th><?php echo esc_html( block_value( 'information-title' ) ); ?></th>
            <td><?php echo wp_kses_post( block_value( 'information-text' ) ); ?></td>
        </tr>
    </tbody>
</table>