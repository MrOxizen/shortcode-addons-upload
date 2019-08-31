<?php
if (!defined('ABSPATH'))
    exit;
oxi_addons_user_capabilities();
global $wpdb;
$oxitype = sanitize_text_field($_GET['oxitype']);
$oxiid = (int) $_GET['styleid'];
$table_name = $wpdb->prefix . 'oxi_div_style';
$table_list = $wpdb->prefix . 'oxi_div_list';


if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}
$listid = '';
$listitemdata = array("", "", "", "", "", "", "", "", "", "");
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'OxiAddInfoBanner-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = '' . OxiAddonsADMHelpItemPerRowsSanitize('OxiAddIconBoxes-par-rows') . ''
                . 'OxiAddInfo-box-BG|' . sanitize_text_field($_POST['OxiAddInfo-box-BG']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-padding') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-margin') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddInfo-box-icon-size') . ''
                . '||'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddInfo-box-icon-weight') . ''
                . '||||'
                . '||||'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-icon-border-radius') . ''
                . 'OxiAddInfo-box-icon-position|' . sanitize_text_field($_POST['OxiAddInfo-box-icon-position']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-icon-padding') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddInfo-box-heading-size') . ''
                . ' OxiAddInfo-box-heading-color|' . sanitize_hex_color($_POST['OxiAddInfo-box-heading-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddInfo-box-heading') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-heading-padding') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddInfo-box-content-size') . ''
                . ' OxiAddInfo-box-content-color|' . sanitize_hex_color($_POST['OxiAddInfo-box-content-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddInfo-box-content') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-content-padding') . ''
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddInfo-box-BG-hover-shadow') . ''
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddInfo-box-animation') . ''
                . '||'
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddInfo-box-BG-shadow') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddInfo-box-BG-border') . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-BG-border-W') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-BG-border-radius') . ''
                . 'oxi-addons-preview-BG|' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddInfo-link-text-size') . ''
                . 'OxiAddInfo-link-text-color |' . sanitize_hex_color($_POST['OxiAddInfo-link-text-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddInfo-link-text-F') . ''
                . 'OxiAddInfo-link-BG|' . sanitize_text_field($_POST['OxiAddInfo-link-BG']) . '|'
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddInfo-link-border') . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-link-border-S') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-link-border-radius') . ''
                . 'Oxi-addons-link-opening |' . sanitize_text_field($_POST['Oxi-addons-link-opening']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-link-padding') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-icon-border-W') . ''
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddInfo-box-icon-border-C-T') . '|'
                . 'OxiAddInfobox-BG-hover-color|' . sanitize_text_field($_POST['OxiAddInfobox-BG-hover-color']) . '|'
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddInfo-box-border-hover-color') . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-box-border-radius') . ''
                . 'OxiAddInfobox-icon-BG-hover-color|' . sanitize_text_field($_POST['OxiAddInfobox-icon-BG-hover-color']) . '|'
                . '||'
                . '||||'
                . '||||||||||||||||'
                . '||||||||||||||||'
                . 'OxiAddInfo-heading-hover-text-color |' . sanitize_hex_color($_POST['OxiAddInfo-heading-hover-text-color']) . '|'
                . 'OxiAddInfo-content-hover-text-color |' . sanitize_hex_color($_POST['OxiAddInfo-content-hover-text-color']) . '|'
                . 'OxiAddInfo-link-hover-text-color |' . sanitize_hex_color($_POST['OxiAddInfo-link-hover-text-color']) . '|'
                . 'OxiAddInfo-link-hover-BG |' . sanitize_text_field($_POST['OxiAddInfo-link-hover-BG']) . '|'
                . '' . OxiAddonsADMHelpBorderSanitize('OxiAddInfo-link-border-hover-color') . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-link-border-hover-radius') . ''
                . ' OxiAddInfo-button-al |' . sanitize_text_field($_POST['OxiAddInfo-button-al']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfo-link-margin') . ''
                . '|||||||||';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}
if (!empty($_POST['OxiAddonsListFile']) && $_POST['OxiAddonsListFile'] == 'Submit') {
    if (!wp_verify_nonce($nonce, 'OxiAddonsListData-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxilistid = (int) $_POST['oxilistid'];
        $data = ' OxiAddInfoBanner-heading-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddInfoBanner-heading-text']) . '||#||'
                . 'OxiAddInfoBanner-content ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddInfoBanner-content']) . '||#||'
                . 'OxiAddInfoBanner-i-class ||#||' . OxiAddonsAdminUrlConvert($_POST['OxiAddInfoBanner-i-class']) . '||#||'
                . 'Oxi-addons-info-link-link ||#||' . OxiAddonsAdminUrlConvert($_POST['Oxi-addons-info-link-link']) . '||#||'
                . 'Oxi-addons-info-link-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['Oxi-addons-info-link-text']) . '||#||'
                . '  ||#||';

        $data = sanitize_text_field($data);
        if ($oxilistid > 0) {
            $wpdb->query($wpdb->prepare("UPDATE $table_list SET files = %s WHERE id = %d", $data, $oxilistid));
        } else {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, type, files) VALUES (%d, %s, %s )", array($oxiid, 'oxi-addons', $data)));
        }
    }
}
if (!empty($_POST['OxiAddonsListFileDelete']) && is_numeric($_POST['oxi-item-id'])) {
    if (!wp_verify_nonce($nonce, 'OxiAddonsListFileDelete' . $oxitype . 'data')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['oxi-item-id'];
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
    }
}
if (!empty($_POST['OxiAddonsListFileEditdata']) && is_numeric($_POST['oxi-item-id'])) {
    if (!wp_verify_nonce($nonce, 'OxiAddonsListFileEdit' . $oxitype . 'data')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['oxi-item-id'];
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
        $listitemdata = explode('||#||', $data['files']);
        $listid = $data['id'];
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxi-addons-list-data-modal").modal("show")  }, 500); });</script>';
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ", $oxiid), ARRAY_A);
$stylefiles = explode('||#||', $style['css']);
$styledata = explode('|', $stylefiles[0]);
//echo '<pre>';
//print_r($styledata);
//echo '</pre>';
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
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-tabs-id-1">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Info Box Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMHelpItemPerRows('OxiAddIconBoxes-par-rows', $styledata, 1, 'false', '');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-box-BG', $styledata[5], 'rgba', 'Background color', 'Set info box Background Color', '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body', 'background');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-BG-border-W', 169, $styledata, 1, 'Border', 'set Info box border', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body', 'border-width');
                                            echo OxiAddonsADMhelpBorder('OxiAddInfo-box-BG-border', 165, $styledata, '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-BG-border-radius', 185, $styledata, 1, 'Border Radius', 'Set info Box border radius', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body', 'border-radius');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-padding', 7, $styledata, 1, 'Padding', 'Set Your Info Box Padding', 'true', '.oxi-add-info-box-' . $oxiid . '-padding', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-margin', 23, $styledata, 1, 'Margin', 'Set Your Info Box  Margin', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body', 'padding');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Info Box Hover Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfobox-BG-hover-color', $styledata[291], 'rgba', 'Box Hover color', 'Set your Box background hover Color', '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover', 'background');
                                            echo OxiAddonsADMhelpBorder('OxiAddInfo-box-border-hover-color', 293, $styledata, '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover', 'border-style');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-border-radius', 297, $styledata, 1, 'Hover Border Radius', 'Set Your box hover Border Radius', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover', 'border-radius');
                                            ?>
                                        </div>
                                    </div>                               
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddInfo-box-animation', 153, $styledata, 'true', '');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddInfo-box-BG-shadow', 159, $styledata, 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Hover Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddInfo-box-BG-hover-shadow', 147, $styledata, 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-col-6"> 
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Image Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfo-box-icon-size', $styledata[39], $styledata[40], $styledata[41], 1, 'Font Size', 'Select Your Icon Font Size', 'false', '.oxi-add-info-box' . $oxiid . ' .oxi-info-icon', 'font-size');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfo-box-icon-weight', $styledata[45], $styledata[44], $styledata[45], 1, 'Width & Height', 'Set your icon width', '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-icon .oxi-icons', 'height');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-icon-border-W', 271, $styledata, 1, 'Border', 'set Info box border', 'true', ' .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons', 'border-width');
                                            echo OxiAddonsADMhelpBorder('OxiAddInfo-box-icon-border-C-T', 287, $styledata, '', ' .oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons','border-style');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-icon-border-radius', 57, $styledata, 1, 'Border Radius', 'Set Your icon Border Radius','true','.oxi-add-info-box' . $oxiid . ' .oxi-info-icon-icons','border-radius');
                                            echo oxi_addons_adm_help_Text_Align('OxiAddInfo-box-icon-position', $styledata[73], 'Align', 'Select Your Icon Postion','true','.oxi-add-info-box' . $oxiid . ' .oxi-info-icon','justify-content');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-icon-padding', 75, $styledata, 1, ' Padding', 'Set icon Padding','true','.oxi-add-info-box' . $oxiid . ' .oxi-info-icon','padding');
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                            Image Hover Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfobox-icon-BG-hover-color', $styledata[313], 'rgba', 'Image Overlay ', 'Set your  Overlay Color', '','.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-icon-icons','background');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Heading Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfo-box-heading-size', $styledata[91], $styledata[92], $styledata[93], 1, 'Font Size', 'Select Your Heading Font Size', '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-title', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-box-heading-color', $styledata[95], '', 'Color', 'Select Your Heading Color', 'false', '.oxi-add-info-box' . $oxiid . ' .oxi-info-title', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-heading-hover-text-color', $styledata[353], '', 'Hover Color', 'Set Heading hover color', 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-title','color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddInfo-box-heading', 97, $styledata, 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-title');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-heading-padding', 103, $styledata, 1, 'Padding', 'Set Your Heading Padding', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-title', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Content Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfo-box-content-size', $styledata[119], $styledata[120], $styledata[121], 1, 'Font Size', 'Select Your Content Font Size', '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-contetn', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-box-content-color', $styledata[123], '', 'Text Color', 'Select Your Content Color', 'false', '.oxi-add-info-box' . $oxiid . ' .oxi-info-contetn', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-content-hover-text-color', $styledata[355], '', 'Hover Color', 'Set content hover color', 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-body:hover .oxi-info-contetn','color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddInfo-box-content', 125, $styledata, 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-contetn');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-box-content-padding', 131, $styledata, 1, 'Padding', 'Set Your Content Padding', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-contetn.oxi-add-info-box' . $oxiid . ' .oxi-info-contetn', 'padding');
                                            ?>
                                        </div>
                                    </div> 
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Information
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfo-link-text-size', $styledata[203], $styledata[204], $styledata[205], 1, 'Text size', 'Set your link text Size', '','.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text','font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-link-text-color', $styledata[207], '', 'Text Color', 'Set Link text color', 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text','color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddInfo-link-text-F', 209, $styledata, 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-link-BG', $styledata[215], 'rgba', 'Button Color', 'Set your button color', '','.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text','background');
                                            echo OxiAddonsADMhelpBorder('OxiAddInfo-link-border', 217, $styledata, 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text','border-style');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-link-border-S', 221, $styledata, 1, 'Border', 'set Info box border','true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text', 'border-width');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-link-border-radius', 237, $styledata, 1, 'Border Radius', 'Set Your icon Border Radius', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text', 'border-radius');
                                            echo oxi_addons_adm_help_true_false('Oxi-addons-link-opening', $styledata[253], 'Normal', '', 'New Tab', '_blank', 'Link Opening', 'Customize your Link Opening Style', 'true');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-link-padding', 255, $styledata, 1, 'Padding', 'Set button padding', 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-link-text','padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-link-margin', 383, $styledata, 1, 'Margin', 'Set button Margin', 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-link','padding');
                                            echo oxi_addons_adm_help_Text_Align('OxiAddInfo-button-al', $styledata[381], 'Button Align', 'Set Your Button Align', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-link', 'justify-content');
                                            ?>
                                        </div>    
                                        <div class="oxi-head">
                                            Button Hover Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-link-hover-text-color', $styledata[357], '', 'Text Color', 'Set Button hover text color', 'true','.oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text','color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfo-link-hover-BG', $styledata[359], 'rgba', 'Button Color', 'Set your button color', '','.oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text','background');
                                            echo OxiAddonsADMhelpBorder('OxiAddInfo-link-border-hover-color', 361, $styledata, '', '.oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text','border-color');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfo-link-border-hover-radius', 365, $styledata, 1, 'Border Radius', 'Set Your icon Border Radius', 'true', '.oxi-add-info-box' . $oxiid . ' .oxi-info-link a:hover .oxi-info-link-text', 'border-radius');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="oxi-addons-setting-save">
                                            <?php echo oxiaddonssettingsavedtmmode(); ?>
                            <button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
                            <input type="hidden"  id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php echo $styledata[201]; ?>">
                            <input type="submit" class="btn btn-success" name="data-submit" value="Save">
                                            <?php wp_nonce_field("OxiAddInfoBanner-nonce") ?>
                        </div>

                    </div>

                </form>

            </div>
            <div class="oxi-addons-style-right">
<?php
echo oxi_addons_list_modal_open();
echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
echo oxi_addons_shortcode_call($oxitype, $oxiid);
echo oxi_addons_list_rearrange('Icon Boxes Rearrange', $listdata, 1, 'title');
?>
            </div>
            <div class="oxi-addons-style-left-preview">
                <div class="oxi-addons-style-left-preview-heading">
                    <div class="oxi-addons-style-left-preview-heading-left">
                        Preview
                    </div>
                    <div class="oxi-addons-style-left-preview-heading-right">
                <?php echo oxi_addons_adm_help_preview_color($styledata[201]); ?>
                    </div>
                </div>
                <div class="oxi-addons-preview-data" id="oxi-addons-preview-data">
<?php echo oxi_info_boxes_style_7_shortcode($style, $listdata, 'admin') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="oxi-addons-list-data-modal" >
    <form method="post">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">                    
                    <h4 class="modal-title">Data Settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <?php
                echo oxi_addons_adm_help_textbox('OxiAddInfoBanner-heading-text', $listitemdata[1], 'Heading Text', 'Set your Heading text');
                echo oxi_addons_adm_help_form_textarea('OxiAddInfoBanner-content', $listitemdata[3], 'Content', 'Write your content box short details', 'false');
                echo oxi_addons_adm_help_image_upload('OxiAddInfoBanner-i-class', $listitemdata[5], 'Image', 'Set your Image') ;                
                echo oxi_addons_adm_help_textbox('Oxi-addons-info-link-link', $listitemdata[7], 'Link', 'Write If you want to Add and Link into Your Link');
                echo oxi_addons_adm_help_textbox('Oxi-addons-info-link-text', $listitemdata[9], 'Link Text', 'Write your Link Text Here');
                ?>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="oxilistid" name="oxilistid" value="<?php echo $listid; ?>">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="OxiAddonsListFile" id="OxiAddonsListFile" value="Submit">
                    <?php wp_nonce_field("OxiAddonsListData-nonce") ?>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    jQuery("#OxiAddInfo-box-icon-weight").on("change", function () {
        var value1 = jQuery(this).val();
        jQuery("<style type='text/css'> #oxi-addons-preview-data .oxi-add-info-box-<?php echo $oxiid ?> .oxi-info-icon,  #oxi-addons-preview-data .oxi-icons{height:" + value1 + "px; } </style>").appendTo("#oxi-addons-preview-data");
        jQuery("<style type='text/css'> #oxi-addons-preview-data .oxi-add-info-box-<?php echo $oxiid ?> .oxi-info-icon,  #oxi-addons-preview-data .oxi-icons{width:" + value1 + "px; } </style>").appendTo("#oxi-addons-preview-data");
    });
</script>
