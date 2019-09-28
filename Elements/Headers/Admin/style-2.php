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
    if (!wp_verify_nonce($nonce, 'oxi-addons-eventwidgets-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . 'OxiAddonsHeaders-G-PS |' . sanitize_text_field($_POST['OxiAddonsHeaders-G-PS']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-G-M') . ''
                . ' OxiAddonsHeaders-LS-BGC |' . sanitize_text_field($_POST['OxiAddonsHeaders-LS-BGC']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-LS-P') . ''
                . '' . OxiAddonsBGImageSanitize('OxiAddonsHeaders-RS-BG') . ''
                . 'OxiAddonsHeaders-Line-position|' . sanitize_text_field($_POST['OxiAddonsHeaders-Line-position']) . '|'
                . '||||||||||||||'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-I-FS') . ''
                . ' OxiAddonsHeaders-I-TC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-TC']) . '|'
                . ' OxiAddonsHeaders-I-HTC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-HTC']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-I-P') . ''
                . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-I-Animation') . '|'
                . ' OxiAddonsHeaders-I-PS |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-PS']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-SD-FS') . ''
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-SD-F') . ''
                . ' OxiAddonsHeaders-SD-C |' . sanitize_hex_color($_POST['OxiAddonsHeaders-SD-C']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-SD-P') . ''
                . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-SD-Animation') . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-H-T-FS') . ''
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-H-T-F') . ''
                . ' OxiAddonsHeaders-H-T-C |' . sanitize_hex_color($_POST['OxiAddonsHeaders-H-T-C']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-H-T-P') . ''
                . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-H-T-Animation') . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-H-O-FS') . ''
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddonsHeaders-H-O-F') . ''
                . ' OxiAddonsHeaders-H-O-C |' . sanitize_hex_color($_POST['OxiAddonsHeaders-H-O-C']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-H-O-P') . ''
                . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-H-O-Animation') . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-Line-W') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-Line-H') . ''
                . ' OxiAddonsHeaders-Line-BG |' . sanitize_text_field($_POST['OxiAddonsHeaders-Line-BG']) . '|'
                . ' ' . oxi_addons_adm_help_animation_senitize('OxiAddonsHeaders-Line-Animation') . '|'
                . ' OxiAddonsHeaders-B-Tab |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-Tab']) . '|'
                . ' OxiAddonsHeaders-B-PS |' . sanitize_text_field($_POST['OxiAddonsHeaders-B-PS']) . '|'
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
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-I-width') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsHeaders-I-height') . ''
                . ' OxiAddonsHeaders-I-Bg |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-Bg']) . '|'
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsHeaders-I-B') . ''
                . ' OxiAddonsHeaders-I-BC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-BC']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-I-radius') . ''
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsHeaders-I-BS') . ''
                . ' OxiAddonsHeaders-I-HTC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-HTC']) . '|'
                . ' OxiAddonsHeaders-I-HBG |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-HBG']) . '|'
                . ' OxiAddonsHeaders-I-HBC |' . sanitize_hex_color($_POST['OxiAddonsHeaders-I-HBC']) . '|'
                . ' OxiAddonsHeaders-I-Tab |' . sanitize_text_field($_POST['OxiAddonsHeaders-I-Tab']) . '|'
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsHeaders-I-HBS') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsHeaders-I-M') . ''
                . '||#||'
                . ' OxiAddonsHeaders-I-IB ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['OxiAddonsHeaders-I-IB']) . '||#|| '
                . ' OxiAddonsHeaders-SD-TA ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-SD-TA']) . '||#|| '
                . ' OxiAddonsHeaders-H-T-TB ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-H-T-TB']) . '||#|| '
                . ' OxiAddonsHeaders-H-O-TB ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-H-O-TB']) . '||#|| '
                . ' OxiAddonsHeaders-B-BT ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-B-BT']) . '||#|| '
                . ' OxiAddonsHeaders-B-BL ||#||' . OxiAddonsAdminUrlConvert($_POST['OxiAddonsHeaders-B-BL']) . '||#|| '
                . ' OxiAddonsHeaders-I-ID ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-I-ID']) . '||#|| '
                . ' OxiAddonsHeaders-I-Link ||#||' . OxiAddonsAdminUrlConvert($_POST['OxiAddonsHeaders-I-Link']) . '||#|| '
                . ' OxiAddonsHeaders-H-O-Letter ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsHeaders-H-O-Letter']) . '||#|| '
                . ' ||#||';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$stylefiles = explode('||#||', $style['css']);
$styledata = explode('|', $stylefiles[0]);
//echo '<pre>';
//print_r($styledata);
//echo '</pre>';
?>
<div class="wrap">
    <?php echo OxiAddonsAdmAdminMenu($oxitype, '', '', 'yes'); ?>
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
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-G-M', 5, $styledata, 1, 'Margin', 'Set Headers margin', 'true', '.oxi-addons-wrapper-' . $oxiid . '', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Left side Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-LS-BGC', $styledata[21], 'rgba', 'Background Color', 'Set Headers Button Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side', 'background');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-LS-P', 23, $styledata, 1, 'Padding', 'Set headers  padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Right Side Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMHelpBGImage('OxiAddonsHeaders-RS-BG', $styledata, 39, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-right-side', 'background');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-I-IB', $stylefiles[2], 'Icon', 'Set FontAwesome Icon class Name for Button', 'false');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-I-ID', $stylefiles[14], 'Icon Id', 'Icon Id for Popup', 'false');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-I-Link', $stylefiles[16], 'Link', 'Set Icon Link', 'false');
                                            echo oxi_addons_adm_help_true_false('OxiAddonsHeaders-I-Tab', $styledata[343], 'Normal', '', 'New Tab', '_blank', 'Link Opening Style', 'Link Open same tab or new tab', 'true');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-I-width', $styledata[299], $styledata[300], $styledata[301], 1, 'Width', 'Set Your Icon Width', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-I-height', $styledata[303], $styledata[304], $styledata[305], 1, 'Height', 'Set Your Icon  Height', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            echo oxi_addons_adm_help_Text_Align('OxiAddonsHeaders-I-PS', $styledata[88], 'Position', 'Set Headers Icon Position', 'true');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-I-FS', $styledata[59], $styledata[60], $styledata[61], '', 'Font Size', 'Set Headers Icon Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-TC', $styledata[63], '', 'Icon Color', 'Set Headers Icon color', 'false', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-Bg', $styledata[307], 'rgba', 'Background Color', 'Set Your Icon Background Color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'background');
                                            echo oxi_addons_adm_help_border('OxiAddonsHeaders-I-B', $styledata[309], $styledata[310], 'Border', 'Set Your Icon Border Size and Type', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'border');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-BC', $styledata[313], '', 'Border Color', 'Set your Icon Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'border-color');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-I-radius', 315, $styledata, 1, 'Border Radius', 'Set Your Icon Border Radius', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'border-radius');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-I-P', 67, $styledata, 1, 'Padding', 'Set Headers icon padding', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-I-M', 351, $styledata, 1, 'Margin', 'Set Headers icon Margin', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon', 'padding');
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-I-Animation', 83, $styledata, 'true', '.oxi-addons-icon');
                                            echo OxiAddonsADMHelpNoJquery(
                                                    array(
                                                        array('OxiAddonsHeaders-I-PS', 'Position'),
                                                    )
                                            );
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-I-BS', 331, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Icon Hover Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-I-HBS', 345, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Icon hover Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-HTC', $styledata[337], '', 'Hover Color', 'Set Headers Hover Icon color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons .oxi-icons:hover', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-HBG', $styledata[339], 'rgba', 'Background Color', 'Set Your Icon  Hover Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons:hover', 'background');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-I-HBC', $styledata[341], '', 'Border Color', 'Set Your Icon  Hover Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-icons:hover', 'border-color');
                                            ?>
                                        </div>
                                    </div>  
                                </div>
                                <div class="oxi-addons-col-6"> 
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Line
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_double_dtm('OxiAddonsHeaders-Line-W', $styledata[189], $styledata[190], $styledata[191], 'OxiAddonsHeaders-Line-H', $styledata[193], $styledata[194], $styledata[195], 1, 'Width Height', 'Set Headers Line width and height | example: width:5px; height: 100%', 'true');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-Line-BG', $styledata[197], '', 'Background', 'Set Headers Line Background Color', 'false', '.oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-line::after', 'background');
                                            echo oxi_addons_adm_help_Text_Align('OxiAddonsHeaders-Line-position', $styledata[43], 'Line Position', 'Set Headers Line position', 'true', '', '');
                                            echo OxiAddonsADMHelpNoJquery(
                                                    array(
                                                        array('OxiAddonsHeaders-Line-W', 'width'),
                                                        array('OxiAddonsHeaders-Line-H', 'height'),
                                                    )
                                            );
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-Line-Animation', 199, $styledata, 'true', '.oxi-addons-line');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Heading One
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-H-O-TB', $stylefiles[8], 'Heading One', 'Set Headers Heading', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-H-O-Letter', $stylefiles[18], 'Letter Space', 'Set Headers Letter Space ', 'false');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-H-O-FS', $styledata[156], $styledata[157], $styledata[158], '1', 'Font Size', 'Set Headers Heading Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-H-O-C', $styledata[166], '', 'Color', 'Set Headers Heading Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddonsHeaders-H-O-F', 160, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-H-O-P', 168, $styledata, 1, 'Padding', 'Set Headers  Headers Heading Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-one', 'padding');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-H-O-Animation', 184, $styledata, 'true', '.oxi-addons-heading-one');
                                            ?>
                                        </div>
                                    </div>

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Heading Two
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-H-T-TB', $stylefiles[6], 'Heading Two', 'Set Headers Heading', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-H-T-FS', $styledata[123], $styledata[124], $styledata[125], '1', 'Font Size', 'Set Headers Heading Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-H-T-C', $styledata[133], '', 'Color', 'Set Headers Heading Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddonsHeaders-H-T-F', 127, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-H-T-P', 135, $styledata, 1, 'Padding', 'Set Headers  Headers Heading Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading-two', 'padding');
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-H-T-Animation', 151, $styledata, 'true', '.oxi-addons-heading-two');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-H-T-Animation', 151, $styledata, 'true', '.oxi-addons-heading-two');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Short Details
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_textarea('OxiAddonsHeaders-SD-TA', $stylefiles[4], 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-SD-FS', $styledata[90], $styledata[91], $styledata[92], '2', 'Font Size', 'Set Headers Short details Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-SD-C', $styledata[100], '', 'Color', 'Set Headers Short Details Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddonsHeaders-SD-F', 94, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-SD-P', 102, $styledata, 1, 'Padding', 'Set Headers Short Details Padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail', 'padding');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-SD-Animation', 118, $styledata, 'true', '.oxi-addons-short-detail');
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
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-B-BT', $stylefiles[10], 'Button Text', 'Set Headers Button Text', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            echo oxi_addons_adm_help_textbox('OxiAddonsHeaders-B-BL', $stylefiles[12], 'Button Link', 'Set Headers Button Link', 'false');
                                            echo oxi_addons_adm_help_true_false('OxiAddonsHeaders-B-Tab', $styledata[204], 'Normal', '', 'New Tab', '_blank', 'Link Opening Style', 'Link Open same tab or new tab', 'true');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-B-P', 250, $styledata, 1, 'Padding', 'Set Headers Button padding', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-B-M', 266, $styledata, 1, 'Margin', 'Set Headers Button margin', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'margin');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Position
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Text_Align('OxiAddonsHeaders-B-PS', $styledata[206], 'Position', 'Set Headers button Position', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button', 'text-align');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddonsHeaders-B-FS', $styledata[208], $styledata[209], $styledata[210], '', 'Font Size', 'Set Headers Button Font Size', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-TC', $styledata[218], '', 'Text Color', 'Set Headers Button Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-BG', $styledata[220], 'rgba', 'Background Color', 'Set Headers Button background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'background');
                                            echo oxi_addons_adm_help_border('OxiAddonsHeaders-B-B', $styledata[244], $styledata[245], 'Border', 'Set Headers Border Size and Type', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-BC', $styledata[248], '', 'Border Color', 'Set Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'border-color');
                                            echo OxiAddonsADMHelpButtonFontSettings('OxiAddonsHeaders-B-F', 212, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddonsHeaders-B-BR', 222, $styledata, 1, 'Border Radius', 'Set Headers Button Border Radius', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link', 'border-radius');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-col-6">

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddonsHeaders-B-Animation', 294, $styledata, 'true', '.oxi-addons-main-button');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-B-BS', 238, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Hover Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-HTC', $styledata[282], '', 'Color', 'Set Headers Button Hover Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-HBG', $styledata[284], 'rgba', 'Background Color', 'Set Headers Button Hover Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover', 'background');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsHeaders-B-HBC', $styledata[286], '', 'Border Color', 'Set Headers Button Hover Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover', 'true');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Hover Box shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddonsHeaders-B-HBS', 288, $styledata, 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover');
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
                            <?php wp_nonce_field("oxi-addons-eventwidgets-nonce") ?>
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