<?php
if (!defined('ABSPATH'))
    exit;
oxi_addons_user_capabilities();
global $wpdb;
$oxitype = sanitize_text_field($_GET['oxitype']);
$oxiid = (int)$_GET['styleid'];
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
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiADDCD-width') . ''
            . '' . OxiAddonsBGImageSanitize('OxiADDCD-bg') . ''
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddCD-border-width') . ''
            . '' . OxiAddonsADMHelpBorderSanitize('OxiAddCD-border') . '|'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiADDCD-border-radius') . ''
            . '||||||||||||||||'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiADDCD-margin') . ''
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiADDCD-N-font-size') . ''
            . ' OxiADDCD-N-color |' . sanitize_text_field($_POST['OxiADDCD-N-color']) . '|'
            . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddCD-N-F') . ''
            . '||||||||||||||||'
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddCD-T-font-size') . ''
            . ' OxiAddCD-T-color |' . sanitize_text_field($_POST['OxiAddCD-T-color']) . '|'
            . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddCD-T-F') . ''
            . '' . OxiAddonsADMBoxShadowSanitize('OxiADDCD-BS') . ''
            . '||#||  ||#||'
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
                                        echo oxi_addons_adm_help_number_dtm('OxiADDCD-width', $styledata[7], $styledata[8], $styledata[9], 1, 'Width Height', 'Set Your Count Down Width and Height', 'true', '');
                                        echo OxiAddonsADMHelpBGImage('OxiADDCD-bg', $styledata, 11, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddCD-border-width', 15, $styledata, 1, 'Border', 'Set Your Size Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block', 'border-width');
                                        echo OxiAddonsADMhelpBorder('OxiAddCD-border', 31, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block');
                                        echo oxi_addons_adm_help_padding_margin('OxiADDCD-border-radius', 35, $styledata, 1, 'Border Radius', 'Set Your Count Down Size Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('OxiADDCD-margin', 67, $styledata, 1, 'Margin', 'Set Your Count Down Size Top Bottom and Left Right', 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block', 'margin');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMhelpBoxShadow('OxiADDCD-BS', 123, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block');
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Number Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiADDCD-N-font-size', $styledata[83], $styledata[84], $styledata[85], 1, 'Font Size', 'Set Your Count Down Number Font Size', '', '.oxi-addons-counter-' . $oxiid . '  .oxi-addons-counter-block .oxi-addons-main-counter  .oxi-addons-number', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiADDCD-N-color', $styledata[87], '', 'Color', 'Select Your Heading Color', '', '.oxi-addons-counter-' . $oxiid . '  .oxi-addons-counter-block .oxi-addons-main-counter  .oxi-addons-number', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddCD-N-F', 89, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . '  .oxi-addons-counter-block .oxi-addons-main-counter  .oxi-addons-number');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Title Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiAddCD-T-font-size', $styledata[111], $styledata[112], $styledata[113], 1, 'Font Size', 'Set Your Count Down Heading Font Size', '', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-counter-caption', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddCD-T-color', $styledata[115], '', 'Color', 'Select Your Heading Color', '', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-counter-caption', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddCD-T-F', 117, $styledata, 'true', '.oxi-addons-counter-' . $oxiid . ' .oxi-addons-counter-block .oxi-addons-counter-caption');
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oxi-addons-setting-save">
                            <?php echo oxiaddonssettingsavedtmmode(); ?>
                            <button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
                            <input type="hidden" id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php echo $styledata[1]; ?>">
                            <input type="submit" class="btn btn-success" name="data-submit" value="Save">
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