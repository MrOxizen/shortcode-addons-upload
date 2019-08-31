<?php
if (!defined('ABSPATH'))
    exit;
oxi_addons_user_capabilities();
global $wpdb;
$oxitype = sanitize_text_field($_GET['oxitype']);
$oxiid = (int) $_GET['styleid'];
$table_name = $wpdb->prefix . 'oxi_div_style';

if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}

if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'OxiAddDropCaps-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . ' OxiADDCD-date |' . sanitize_text_field($_POST['OxiADDCD-date']) . '|'
                . ' OxiADDCD-time |' . sanitize_text_field($_POST['OxiADDCD-time']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiADDCD-padding') . ''
                . '||||||||||||||||||||||||||||||||||||||||'
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddCD-animation') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiADDCD-N-font-size') . ''
                . ' OxiADDCD-N-color |' . sanitize_text_field($_POST['OxiADDCD-N-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddCD-N') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddCD-N-margin') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiADDCD-N-width') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiADDCD-N-radius') . ''
                . '' . OxiAddonsBGImageSanitize('OxiADDCD-N-bg') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddCD-N-border') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddCD-N-border') . '|'
                . '||||||||'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddCD-T-font-size') . ''
                . ' OxiADDCD-T-color |' . sanitize_text_field($_POST['OxiAddCD-T-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddCD-T') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddCD-T-padding') . ''
                . '||||||||||||||||||||||||||||||||||||||||'
                . ' OxiADDCD-days |' . sanitize_text_field($_POST['OxiADDCD-days']) . '|'
                . ' OxiADDCD-D-N-color |' . sanitize_text_field($_POST['OxiADDCD-D-N-color']) . '|'
                . ' OxiADDCD-D-T-color |' . sanitize_text_field($_POST['OxiADDCD-D-T-color']) . '|'
                . '' . OxiAddonsBGImageSanitize('OxiADDCD-D-N-bg') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddCD-D-N-border') . '|'
                . '||||||||||||||||||||||||||||||||'
                . ' OxiADDCD-hours |' . sanitize_text_field($_POST['OxiADDCD-hours']) . '|'
                . ' OxiADDCD-H-N-color |' . sanitize_text_field($_POST['OxiADDCD-H-N-color']) . '|'
                . ' OxiADDCD-H-T-color |' . sanitize_text_field($_POST['OxiADDCD-H-T-color']) . '|'
                . '' . OxiAddonsBGImageSanitize('OxiADDCD-H-N-bg') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddCD-H-N-border') . '|'
                . '||||||||||||||||||||||||||||||||'
                . ' OxiADDCD-minutes |' . sanitize_text_field($_POST['OxiADDCD-minutes']) . '|'
                . ' OxiADDCD-M-N-color |' . sanitize_text_field($_POST['OxiADDCD-M-N-color']) . '|'
                . ' OxiADDCD-M-T-color |' . sanitize_text_field($_POST['OxiADDCD-M-T-color']) . '|'
                . '' . OxiAddonsBGImageSanitize('OxiADDCD-M-N-bg') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddCD-M-N-border') . '|'
                . '||||||||||||||||||||||||||||||||'
                . ' OxiADDCD-seconds |' . sanitize_text_field($_POST['OxiADDCD-seconds']) . '|'
                . ' OxiADDCD-S-N-color |' . sanitize_text_field($_POST['OxiADDCD-S-N-color']) . '|'
                . ' OxiADDCD-S-T-color |' . sanitize_text_field($_POST['OxiADDCD-S-T-color']) . '|'
                . '' . OxiAddonsBGImageSanitize('OxiADDCD-S-N-bg') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddCD-S-N-border') . '|'
                . '||||||||||||||||||||||||||||||||'
                . '||#||  ||#||'
                . 'OxiADDCD-days-text||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiADDCD-days-text']) . '||#||'
                . 'OxiADDCD-hours-text||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiADDCD-hours-text']) . '||#||'
                . 'OxiADDCD-minutes-text||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiADDCD-minutes-text']) . '||#||'
                . 'OxiADDCD-seconds-text||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiADDCD-seconds-text']) . '||#||'
                . '|';
        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$stylefiles = explode('||#||', $style['css']);
$styledata = explode('|', $stylefiles[0]);
?>
<div class="wrap">    
    <?php echo OxiAddonsAdmAdminMenu($oxitype, ''); ?>
    <div class="oxi-addons-wrapper">
        <div class="oxi-addons-row">
            <div class="oxi-addons-style-20-spacer"></div>
            <div class="oxi-addons-style-left">
                <form method="post" id="oxi-addons-form-submit">
                    <div class="oxi-addons-style-settings">
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-1">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Time Information
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_date_picker('OxiADDCD', 3, $styledata);
                                        ?>
                                    </div>                                               
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        General Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_padding_margin('OxiADDCD-padding', 7, $styledata, 1, 'Padding', 'Set Your Count Down Padding Size Top Bottom and Left Right', 'false', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-section', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Number Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiADDCD-N-font-size', $styledata[67], $styledata[68], $styledata[69], 1, 'Font Size', 'Set Your Count Down Number Font Size', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount', 'font-size');
                                        echo oxi_addons_adm_help_number_dtm('OxiADDCD-N-width', $styledata[95], $styledata[96], $styledata[97], 1, 'Width Height', 'Set Your Count Down Number Width Height', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount', 'width');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-N-color', $styledata[71], '', 'Color', 'Select Your Number Color', '', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount', 'color');
                                        echo OxiAddonsADMHelpBGImage('OxiADDCD-N-bg', $styledata, 103, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddCD-N', 73, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddCD-N-border', 107, $styledata, 1, 'Border', 'Set Your Count Down Border Size Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount', 'border-width');
                                        echo OxiAddonsADMhelpBorder('OxiAddCD-N-border', 123, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount');
                                        echo oxi_addons_adm_help_number_dtm('OxiADDCD-N-radius', $styledata[99], $styledata[100], $styledata[101], 1, 'Border Radius', 'Set Your Count Down Border Radius Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddCD-N-margin', 79, $styledata, 1, 'Margin', 'Set Your Number Margin Size Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-amount', 'margin');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Text Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiAddCD-T-font-size', $styledata[135], $styledata[136], $styledata[137], 1, 'Font Size', 'Set Your Count Down Heading Font Size', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddCD-T-color', $styledata[139], '', 'Color', 'Select Your Heading Color', '', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddCD-T', 141, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddCD-T-padding', 147, $styledata, 1, 'Padding', 'Set Your Heading Padding Size Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-countdown-period', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('OxiAddCD-animation', 63, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . '');
                                        ?>
                                    </div>
                                </div>

                            </div>
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Days Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_textbox('OxiADDCD-days-text', $stylefiles[3], 'Text', 'Set Your Days text');
                                        echo oxi_addons_adm_help_true_false('OxiADDCD-days', $styledata[203], 'Yes', 'yes', 'No', '', 'Separate Settings', 'Set Yes for Separating color and No for Single color', 'true');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-D-N-color', $styledata[205], '', 'Number Color', 'Select Your Number Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-amount', 'color');
                                        echo OxiAddonsADMHelpBGImage('OxiADDCD-D-N-bg', $styledata, 209, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-amount');
                                        echo OxiAddonsADMhelpBorder('OxiAddCD-D-N-border', 213, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-amount');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-D-T-color', $styledata[207], '', 'Text Color', 'Select Your Heading Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-days .oxi-countdown-period', 'color');
                                        ?>
                                    </div>                                               
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Hours Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_textbox('OxiADDCD-hours-text', $stylefiles[5], 'Text', 'Set Your Hours Text');
                                        echo oxi_addons_adm_help_true_false('OxiADDCD-hours', $styledata[249], 'Yes', 'yes', 'No', '', 'Separate Settings', 'Set Yes for Separating color and No for Single color', 'true');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-H-N-color', $styledata[251], '', 'Number Color', 'Select Your Number Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-amount', 'color');
                                        echo OxiAddonsADMHelpBGImage('OxiADDCD-H-N-bg', $styledata, 255, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-amount');
                                        echo OxiAddonsADMhelpBorder('OxiAddCD-H-N-border', 259, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-amount');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-H-T-color', $styledata[253], '', 'Text Color', 'Select Your Heading Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-hours .oxi-countdown-period', 'color');
                                        ?>
                                    </div>                                               
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Minutes Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_textbox('OxiADDCD-minutes-text', $stylefiles[7], 'Text', 'Set Your Minutes Text');
                                        echo oxi_addons_adm_help_true_false('OxiADDCD-minutes', $styledata[295], 'Yes', 'yes', 'No', '', 'Separate Settings', 'Set Yes for Separating color and No for Single color', 'true');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-M-N-color', $styledata[297], '', 'Number Color', 'Select Your Number Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-amount', 'color');
                                        echo OxiAddonsADMHelpBGImage('OxiADDCD-M-N-bg', $styledata, 301, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-amount');
                                        echo OxiAddonsADMhelpBorder('OxiAddCD-M-N-border', 305, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-amount');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-M-T-color', $styledata[299], '', 'Text Color', 'Select Your Heading Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-minutes .oxi-countdown-period', 'color');
                                        ?>
                                    </div>                                               
                                </div>     
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Seconds Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_textbox('OxiADDCD-seconds-text', $stylefiles[9], 'Text', 'Set Your Seconds Text');
                                        echo oxi_addons_adm_help_true_false('OxiADDCD-seconds', $styledata[341], 'Yes', 'yes', 'No', '', 'Separate Settings', 'Set Yes for Separating color and No for Single color', 'true');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-S-N-color', $styledata[343], '', 'Number Color', 'Select Your Number Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-amount', 'color');
                                        echo OxiAddonsADMHelpBGImage('OxiADDCD-S-N-bg', $styledata, 347, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-amount');
                                        echo OxiAddonsADMhelpBorder('OxiAddCD-S-N-border', 351, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-amount');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-S-T-color', $styledata[345], '', 'Text Color', 'Select Your Heading Color', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-seconds .oxi-countdown-period', 'color');
                                        ?>
                                    </div>                                               
                                </div>
                            </div>
                        </div>
                        <div class="oxi-addons-setting-save">
                            <?php echo oxiaddonssettingsavedtmmode(); ?>
                            <button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
                            <input type="submit" class="btn btn-success" name="data-submit" value="Save">
                            <input type="hidden"  id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php echo $styledata[1]; ?>">
                            <?php wp_nonce_field("OxiAddDropCaps-nonce") ?>
                        </div>

                    </div>

                </form>

            </div>
            <div class="oxi-addons-style-right">
                <?php
                echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
                echo oxi_addons_shortcode_call($oxitype, $oxiid);
                ?>
            </div>
            <div class="oxi-addons-style-left-preview">
                <div class="oxi-addons-style-left-preview-heading">
                    <div class="oxi-addons-style-left-preview-heading-left">
                        Preview
                    </div>
                    <div class="oxi-addons-style-left-preview-heading-right">
                        <?php echo oxi_addons_adm_help_preview_color($styledata[1]); ?>
                    </div>
                </div>
                <div class="oxi-addons-preview-data" id="oxi-addons-preview-data">
                    <?php echo do_shortcode('[oxi_addons  id="' . $oxiid . '"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
