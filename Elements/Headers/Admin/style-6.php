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
    if (!wp_verify_nonce($nonce, 'oxi-addons-eventwidgets-S-Honce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|' 
        . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-G-Height') . ''
            . '' . OxiAddonsBGImageSanitize('OxiAddonsHeaders-G-BG') . ''  
            . ' OxiAddonsHeaders-G-HBG |' . sanitize_text_field($_POST['OxiAddonsHeaders-G-HBG']) . '|'
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-I-width') . ''
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-I-height') . ''
            . ' OxiAddonsHeaders-I-Tab |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-Tab']) . '|'
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-I-FS') . ''
            . ' OxiAddonsHeaders-I-TC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-TC']) . '|'
            . ' OxiAddonsHeaders-I-Bg |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-Bg']) . '|'
            . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsHeaders-I-B') . ''
            . ' OxiAddonsHeaders-I-BC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-BC']) . '|' 
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-I-P') . ''
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-I-M') . '' 
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-I-radius') . ''
            . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsHeaders-I-BS') . ''
            . ' OxiAddonsHeaders-I-HTC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-HTC']) . '|'
            . ' OxiAddonsHeaders-I-HBG |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-HBG']) . '|'
            . ' OxiAddonsHeaders-I-HBC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-HBC']) . '|' 
            . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsHeaders-I-HBS') . ''
            . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-I-Animation') . '|' 
            . '||#||' 
            . ' OxiAddonsHeaders-I-IB ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['OxiAddonsHeaders-I-IB']) . '||#|| ' 
            . ' OxiAddonsHeaders-I-ID ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-I-ID']) . '||#|| '
            . ' OxiAddonsHeaders-I-Link ||#||' . OxiAddonsAdminUrlConvert($_POST['OxiAddonsHeaders-I-Link']) . '||#|| '
            . ' ||#||';

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
    <?php echo OxiAddonsAdmAdminMenu($oxitype, '', '', ''); ?>
    <div class="oxi-addons-wrapper">
        <div class="oxi-addons-row">
            <div class="oxi-addons-style-20-spacer"></div>
            <div class="oxi-addons-style-left">
                <form method="post" id="oxi-addons-form-submit">
                    <div class="oxi-addons-style-settings">
                        <div class="oxi-addons-tabs-wrapper">
                            <ul class="oxi-addons-tabs-ul">
                                <li ref="#oxi-addons-tabs-1">General Setting</li>
                            </ul>
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-1">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            General Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                             echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-G-Height', $styledata[3], $styledata[8], $styledata[9], '1', 'Height', 'Set Headers Height', 'true', '.oxi-addons-wrapper-' . $oxiid . '::before', 'padding-bottom');
                                             echo OxiAddonsADMHelpBGImage('OxiAddonsHeaders-G-BG', $styledata, 7, 'true', '.oxi-addons-wrapper-' . $oxiid . '', 'background');
                                             echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-G-HBG', $styledata[11], 'rgba', 'Hover Background Color', 'Set Your Icon Background Color', 'true', '.oxi-addons-wrapper-' . $oxiid . ':hover::after', 'background');
                                        
                                            ?>
                                        </div>
                                    </div>

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Text_Align('OxiAddonsHeaders-I-PS', $styledata[88], 'Position', 'Set Headers Icon Position', 'true');
                                             echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-I-IB', $stylefiles[2], 'Icon', 'Set FontAwesome Icon class Name for Button', 'false');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-I-ID', $stylefiles[4], 'Icon Id', 'Icon Id for Popup', 'false');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-I-Link', $stylefiles[6], 'Link', 'Set Icon Link', 'false');
                                            echo oxi_addons_adm_help_true_false('OxiAddonsHeaders-I-Tab', $styledata[21], 'Normal', '', 'New Tab', '_blank', 'Link Opening Style', 'Link Open same tab or new tab', 'true');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-I-width', $styledata[13], $styledata[14], $styledata[15], 1, 'Width', 'Set Your Icon Width', 'true','.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-I-height', $styledata[17], $styledata[18], $styledata[19], 1, 'Height', 'Set Your Icon  Height', 'true','.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                           echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-I-FS', $styledata[23], $styledata[24], $styledata[25], '', 'Font Size', 'Set Headers Icon Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-TC', $styledata[27], '', 'Icon Color', 'Set Headers Icon color', 'false', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-Bg', $styledata[29], 'rgba', 'Background Color', 'Set Your Icon Background Color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'background');
                                            echo oxi_addons_adm_help_border('OxiAddonsHeaders-I-B', $styledata[31], $styledata[32], 'Border', 'Set Your Icon Border Size and Type', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'border');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-BC', $styledata[35], '', 'Border Color', 'Set your Icon Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'border-color');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-I-radius', 69, $styledata, 1, 'Border Radius', 'Set Your Icon Border Radius', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'border-radius');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-I-P', 37, $styledata, 1, 'Padding', 'Set Headers icon padding', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-I-M', 53, $styledata, 1, 'Margin', 'Set Headers icon Margin', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon', 'padding');
                                           echo OxiAddonsADMHelpNoJquery(
                                                array(
                                                    array('OxiAddonsHeaders-I-PS', 'Position'), 
                                                )
                                            );
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Icon
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                                echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-I-Animation', 103, $styledata, 'true', '.oxi-addons-icon');
                                                ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-I-BS', 85, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon hover Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-HTC', $styledata[91], '', 'Hover Color', 'Set Headers Hover Icon color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons .oxi-icons:hover', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-HBG', $styledata[93], 'rgba', 'Background Color', 'Set Your Icon  Hover Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons:hover', 'background');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-HBC', $styledata[95], '', 'Border Color', 'Set Your Icon  Hover Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons:hover', 'border-color');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon Hover Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-I-HBS', 97, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oxi-addons-setting-save">
                            <?php echo oxiaddonssettingsavedtmmode(); ?>
                            <button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
                            <input type="hidden" id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php echo $styledata[1]; ?>">
                            <input type="submit" class="btn btn-success" name="data-submit" value="Save">
                            <?php wp_nonce_field("oxi-addons-eventwidgets-S-Honce") ?>
                        </div>

                    </div>

                </form>

            </div>
            <div class="oxi-addons-style-right">
                <?php
                echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
                echo oxi_addons_shortcode_call($oxitype, $oxiid);
                echo oxi_addons_quick_tutorials('yPu6qV5byu4');
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