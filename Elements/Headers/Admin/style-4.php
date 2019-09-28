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
            .'OxiAddonsHeaders-G-PS |' . sanitize_text_field($_POST['OxiAddonsHeaders-G-PS']) . '|' 
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-G-M') . ''
            . ' OxiAddonsHeaders-B-PS |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-PS']) . '|'
            . ' OxiAddonsHeaders-LS-BGC |' . sanitize_text_field($_POST['OxiAddonsHeaders-LS-BGC']) . '|'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-LS-P') . ''
            . '' . OxiAddonsBGImageSanitize('OxiAddonsHeaders-RS-BG') . '' 
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-S-H-FS') . ''
            . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-S-H-F') . ''
            . ' OxiAddonsHeaders-S-H-C |' . sanitize_hex_color($_POST['OxiAddonsHeaders-S-H-C']) . '|'
            . ' OxiAddonsHeaders-S-H-BG |' . sanitize_text_field($_POST['OxiAddonsHeaders-S-H-BG']) . '|'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-S-H-P') . ''
            . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-S-H-Animation') . '|'
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-H-FS') . ''
            . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-H-F') . ''
            . ' OxiAddonsHeaders-H-C |' . sanitize_hex_color($_POST['OxiAddonsHeaders-H-C']) . '|' 
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-H-P') . ''
            . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-H-Animation') . '|'
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-SD-FS') . ''
            . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-SD-F') . ''
            . ' OxiAddonsHeaders-SD-C |' . sanitize_hex_color($_POST['OxiAddonsHeaders-SD-C']) . '|'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-SD-P') . ''
            . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-SD-Animation') . '|'  
            . ' OxiAddonsHeaders-B-Tab |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-Tab']) . '|' 
            . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-B-FS') . ''
            . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-B-F') . ''
            . ' OxiAddonsHeaders-B-TC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-B-TC']) . '|'
            . ' OxiAddonsHeaders-B-BG |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-BG']) . '|'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-B-BR') . ''
            . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsHeaders-B-BS') . ''
            . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsHeaders-B-B') . ''
            . ' OxiAddonsHeaders-B-BC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-B-BC']) . '|'
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-B-P') . ''
            . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-B-M') . ''
            . ' OxiAddonsHeaders-B-HTC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-B-HTC']) . '|'
            . ' OxiAddonsHeaders-B-HBG |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-HBG']) . '|'
            . ' OxiAddonsHeaders-B-HBC |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-HBC']) . '|'
            . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsHeaders-B-HBS') . ''
            . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-B-Animation') . '|' 
            . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-G-Height') . ''
            . '||#||' 
            . ' OxiAddonsHeaders-S-H-TB ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-S-H-TB']) . '||#|| '
            . ' OxiAddonsHeaders-S-H-Letter ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-S-H-Letter']) . '||#|| '
            . ' OxiAddonsHeaders-H-TB ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-H-TB']) . '||#|| '
            . ' OxiAddonsHeaders-SD-TA ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-SD-TA']) . '||#|| ' 
            . ' OxiAddonsHeaders-B-BT ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-B-BT']) . '||#|| '
            . ' OxiAddonsHeaders-B-BL ||#||' . OxiAddonsAdminUrlConvert($_POST['OxiAddonsHeaders-B-BL']) . '||#|| '  
            . ' OxiAddonsHeaders-H-Letter ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-H-Letter']) . '||#|| '
            . ' ||#||';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$stylefiles = explode('||#||', $style['css']);
$styledata = explode('|', $stylefiles[0]);
// echo "<pre>";
// print_r($stylefiles);
// echo "</pre>";
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
                                <li ref="#oxi-addons-tabs-2">Button</li>
                            </ul>
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-1">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            General Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_true_false('OxiAddonsHeaders-G-PS', $styledata[3], 'Left', 'left', 'Right', 'right', 'Position Reverse', 'Set Image and content position of The Headers Image and Content', 'false');
                                            echo OxiAddonsADMHelpBGImage('OxiAddonsHeaders-RS-BG', $styledata, 41, 'true', '.oxi-addons-wrapper-' . $oxiid . '', 'background');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-G-Height', $styledata[239], $styledata[240], $styledata[241], '1', 'Height', 'Set Headers Height', 'true', '.oxi-addons-wrapper-' . $oxiid . '::before', 'padding-bottom');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-G-M', 5, $styledata, 1, 'Padding', 'Set Headers Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . '', 'padding');
                                           
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Content box
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-LS-BGC', $styledata[23], 'rgba', 'Background Color', 'Set Headers Button Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side', 'background');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-LS-P', 25, $styledata, 1, 'Padding', 'Set headers Content box  padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Sub Heading
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-S-H-TB', $stylefiles[2], 'Name', 'Write a Sub Heading', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-S-H-Letter', $stylefiles[4], 'Letter Space', 'Set Sub Heading  Letter Space ', 'false');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-S-H-FS', $styledata[45], $styledata[46], $styledata[47], '1', 'Font Size', 'Set Headers Sub Heading Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-S-H-C', $styledata[55], '', 'Color', 'Set Sub Heading Text color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-S-H-BG', $styledata[57], 'rgba', 'Background Color', 'Set Sub Heading Background color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddonsHeaders-S-H-F', 49, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-S-H-P', 59, $styledata, 1, 'Padding', 'Set  Sub Heading Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name', 'padding');
                                             ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                              echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-S-H-Animation', 75, $styledata, 'true', '.oxi-addons-heading-two');
                                              ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Heading
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-H-TB', $stylefiles[6], 'Heading', 'Set Headers Heading', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-H-Letter', $stylefiles[4], 'Letter Space', 'Set Heading Letter Space ', 'false');
                                           echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-H-FS', $styledata[80], $styledata[81], $styledata[82], '1', 'Font Size', 'Set Headers Heading Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-H-C', $styledata[90], '', 'Color', 'Set Headers Heading Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddonsHeaders-H-F', 84, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-H-P', 92, $styledata, 1, 'Padding', 'Set Headers  Heading Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading', 'padding');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                           echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-H-Animation', 108, $styledata, 'true', '.oxi-addons-heading-two');
                                           ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Short Details
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textarea('OxiAddonsHeaders-SD-TA', $stylefiles[8], 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-SD-FS', $styledata[113], $styledata[114], $styledata[115], '2', 'Font Size', 'Set Headers Short details Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-SD-C', $styledata[123], '', 'Color', 'Set Headers Short Details Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddonsHeaders-SD-F', 117, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-SD-P', 125, $styledata, 1, 'Padding', 'Set Headers Short Details Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail', 'padding');
                                             ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                          echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-SD-Animation', 141, $styledata, 'true', '.oxi-addons-short-detail');
                                          ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-2">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-B-BT', $stylefiles[10], 'Button Text', 'Set Headers Button Text', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'padding');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-B-BL', $stylefiles[12], 'Button Link', 'Set Headers Button Link', 'false');
                                            echo oxi_addons_adm_help_true_false('OxiAddonsHeaders-B-Tab', $styledata[146], 'Normal', '', 'New Tab', '_blank', 'Link Opening Style', 'Link Open same tab or new tab', 'true');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-B-P', 190, $styledata, 1, 'Padding', 'Set Headers Button padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-B-M', 206, $styledata, 1, 'Margin', 'Set Headers Button margin', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'margin');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-B-FS', $styledata[148], $styledata[149], $styledata[150], '', 'Font Size', 'Set Headers Button Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-TC', $styledata[158], '', 'Text Color', 'Set Headers Button Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-BG', $styledata[160], 'rgba', 'Background Color', 'Set Headers Button background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'background');
                                            echo oxi_addons_adm_help_border('OxiAddonsHeaders-B-B', $styledata[184], $styledata[185], 'Border', 'Set Headers Border Size and Type', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-BC', $styledata[188], '', 'Border Color', 'Set Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'border-color');
                                            echo OxiAddonsADMHelpButtonFontSettings('OxiAddonsHeaders-B-F', 152, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-B-BR', 162, $styledata, 1, 'Border Radius', 'Set Headers Button Border Radius', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'border-radius');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-col-6">

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Position
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                                echo oxi_addons_adm_help_Text_Align('OxiAddonsHeaders-B-PS', $styledata[21], 'Position', 'Set Headers button Position', 'false','.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button','text-align');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-B-Animation', 234, $styledata, 'true', '.oxi-addons-main-button');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-B-BS', 178, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Hover Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-HTC', $styledata[222], '', 'Color', 'Set Headers Button Hover Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-HBG', $styledata[224], 'rgba', 'Background Color', 'Set Headers Button Hover Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover', 'background');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-HBC', $styledata[226], '', 'Border Color', 'Set Headers Button Hover Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover', 'true');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Hover Box shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-B-HBS', 228, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover');
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