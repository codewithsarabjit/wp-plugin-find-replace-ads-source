<div class="wrap">

<h2>Find Replace Ads Plugin Settings</h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'find-replace-ads-code-group' ); ?>
        <?php do_settings_sections( 'find-replace-ads-code-group' ); ?>
        <table class="form-table">
            <tr valign="top">
            <th scope="row">Specific URL (to replace iframe source)</th>
            <td><input type="text" size="50" name="find_replace_ads_code_iframe_src" value="<?php echo esc_attr( get_option('find_replace_ads_code_iframe_src') ); ?>" /></td>
            </tr>
            
            <tr valign="top">
            <th scope="row">Specific URL (for floating iframe in case no iframe found)</th>
            <td><input type="text" size="50" name="find_replace_ads_code_floating_iframe_src" value="<?php echo esc_attr( get_option('find_replace_ads_code_floating_iframe_src') ); ?>" /></td>
            </tr>
    
        </table>

        <?php submit_button(); ?>

    </form>
</div>