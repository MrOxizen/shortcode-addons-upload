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
$listitemdata = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'OxiAddCB-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . OxiAddonsADMHelpItemPerRowsSanitize('oxievent1-rows')
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-width')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-border')
                . OxiAddonsADMHelpBorderSanitize('oxievent1-border')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-radius')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-margin')
                . OxiAddonsADMBoxShadowSanitize('oxievent1-box-shadow')
                . oxi_addons_adm_help_animation_senitize('oxievent1-animation')
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-image-height')
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-icon-font')
                . 'oxievent1-icon-color |' . sanitize_text_field($_POST['oxievent1-icon-color']) . '|'
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-icon-width')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-icon-border-redius')
                . OxiAddonsADMHelpBorderSanitize('oxievent1-icon-border-style')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-icon-border-width')
                . 'oxievent1-icon-bgcolor |' . sanitize_text_field($_POST['oxievent1-icon-bgcolor']) . '|'
                . 'oxievent1-content-bgcolor |' . sanitize_text_field($_POST['oxievent1-content-bgcolor']) . '|'
                . '||||'
                . '||||'
                . '||||'
                . oxi_addons_adm_help_animation_senitize('oxievent1-icon-animation')
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-heading-size')
                . 'oxievent1-heading-color |' . sanitize_text_field($_POST['oxievent1-heading-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxievent1-heading')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-heading-padding')
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-content-size')
                . 'oxievent1-content-color |' . sanitize_text_field($_POST['oxievent1-content-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxievent1-content')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-content-padding')
                . 'oxievent1-button-link-opening |' . sanitize_text_field($_POST['oxievent1-button-link-opening']) . '|'
                . 'oxievent1-button-al |' . sanitize_text_field($_POST['oxievent1-button-al']) . '|'
                . oxi_addons_adm_help_animation_senitize('oxievent1-button-animation')
                . oxi_addons_adm_help_number_dtm_senitize('oxievent1-button-size')
                . 'oxievent1-button-color |' . sanitize_text_field($_POST['oxievent1-button-color']) . '|'
                . 'oxievent1-button-bgcolor |' . sanitize_text_field($_POST['oxievent1-button-bgcolor']) . '|'
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-button-border')
                . OxiAddonsADMHelpBorderSanitize('oxievent1-button-border')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-button-radius')
                . OxiAddonsADMHelpFontSettingsSanitize('oxievent1-button')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-button-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-button-margin')
                . 'oxievent1-button-hover-color |' . sanitize_text_field($_POST['oxievent1-button-hover-color']) . '|'
                . 'oxievent1-button-hover-bgcolor |' . sanitize_text_field($_POST['oxievent1-button-hover-bgcolor']) . '|'
                . OxiAddonsADMHelpBorderSanitize('oxievent1-hover-button-border')
                . oxi_addons_adm_help_padding_margin_senitize('oxievent1-hover-button-radius')
                . '||#|| ';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}


if (!empty($_POST['OxiAddonsListFile']) && $_POST['OxiAddonsListFile'] == 'Submit') {
    if (!wp_verify_nonce($nonce, 'OxiAddonsListData-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxilistid = (int) $_POST['oxilistid'];
        $data = ' oxievent1-image ||#||' . OxiAddonsAdminUrlConvert($_POST['oxievent1-image']) . '||#||'
                . ' oxievent1-icon ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['oxievent1-icon']) . '||#||'
                . ' oxievent1-heading-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxievent1-heading-text']) . '||#||'
                . 'oxievent1-content ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxievent1-content']) . '||#||'
                . 'oxievent1-button ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxievent1-button']) . '||#||'
                . 'oxievent1-button-link ||#||' . OxiAddonsAdminUrlConvert($_POST['oxievent1-button-link']) . '||#||'
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
if (!empty($_POST['OxiAddonsListFileEdit']) && is_numeric($_POST['oxi-item-id'])) {
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
    <?php echo OxiAddonsAdmAdminMenu($oxitype, '', '', 'yes'); ?>
    <div class="oxi-addons-wrapper">
        <div class="oxi-addons-row">
            <div class="oxi-addons-style-20-spacer"></div>
            <div class="oxi-addons-style-left">
                <form method="post" id="oxi-addons-form-submit">
                    <div class="oxi-addons-style-settings">
                        <div class="oxi-addons-tabs-wrapper">
                            <ul class="oxi-addons-tabs-ul">
                                <li ref="#oxi-tabs-id-1">General</li>
                                <li  ref="#oxi-tabs-id-2">Button</li>
                            </ul>
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-tabs-id-1">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            General Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMHelpItemPerRows('oxievent1-rows', $styledata, 3, false, '.oxi-event1-class');
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-width', $styledata[7], $styledata[8], $styledata[9], 1, 'Width', 'Set Your Content Boxes Max Width', false, '.oxi-event1-' . $oxiid . ' .oxi-event1-id', 'width');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-border', 11, $styledata, 1, 'Border-width', 'Set Your Content Boxes Border', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-main', 'border-width');
                                            echo OxiAddonsADMhelpBorder('oxievent1-border', 27, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-main', '');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-radius', 30, $styledata, 1, 'Border Radius', 'Set Your Content Boxes Border Radius', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-main', 'border-radius');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-margin', 62, $styledata, 1, 'Margin', 'Set Your Content Boxes  Margin', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-id', 'padding');
                                            ?>
                                        </div> 
                                        <div class="oxi-head">
                                            Box Shadow
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo OxiAddonsADMhelpBoxShadow('oxievent1-box-shadow', 78, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-main');
                                            ?>
                                        </div> 

                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('oxievent1-animation', 84, $styledata, 'true', '');
                                            ?>
                                        </div>
                                    </div>  

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Image Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-image-height', $styledata[88], $styledata[89], $styledata[90], 1, 'Height Ratio', 'Select Your Heading Font Size', false, '.oxi-event1-' . $oxiid . ' .oxi-event1-image::after', 'padding-bottom', '%', 20, 200);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Content Body
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-content-bgcolor', $styledata[139], 'rgba', 'Background Color', 'Set Your Content Background Color', false, '.oxi-event1-' . $oxiid . ' .oxi-event1-content-body ', 'background');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-padding', 46, $styledata, 1, 'Padding', 'Set Your Content Boxes Padding', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-content-body', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-col-6"> 

                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon Setting
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-icon-font', $styledata[92], $styledata[93], $styledata[94], '1', 'Icon Size', 'Set Icon size', false, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', 'font-size', 'px', 8, 100);
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-icon-color', $styledata[96], '', 'Icon Color', 'Set Your Icon Color', false, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', 'color');
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-icon-bgcolor', $styledata[137], 'rgba', 'Icon Background Color', 'Set Your Icon Background Color', true, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', 'background');
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-icon-width', $styledata[98], $styledata[99], $styledata[100], '1', 'Height Width', 'Set Icon Width', true, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', 'width', 'px', 10, 1000);
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-icon-border-redius', 102, $styledata, 1, 'Border Redius', 'Set Your Border Redius', true, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', 'border-radius');
                                            echo OxiAddonsADMhelpBorder('oxievent1-icon-border-style', 118, $styledata, true, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', '', 'Border Style');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-icon-border-width', 121, $styledata, 1, 'Border Width', 'Set Your Border Width', true, '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-icon-icon', 'border-width');
                                            $NOJS = array(
                                                array('oxievent1-icon-width', 'Width & Height'),
                                            );
                                            echo OxiAddonsADMHelpNoJquery($NOJS);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('oxievent1-icon-animation', 153, $styledata, true, '', '');
                                            $NOJS = array(
                                                array('oxievent1-icon-animation', 'Animation'),
                                            );
                                            echo OxiAddonsADMHelpNoJquery($NOJS);
                                             ?>

                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Heading Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-heading-size', $styledata[157], $styledata[158], $styledata[159], 1, 'Font Size', 'Select Your Heading Font Size', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-title', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-heading-color', $styledata[161], '', 'Color', 'Select Your Heading Color', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-title', 'color');
                                            echo OxiAddonsADMHelpFontSettings('oxievent1-heading', 163, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-title', '');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-heading-padding', 169, $styledata, 1, 'Padding', 'Set Your Heading Padding', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-title', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Description Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-content-size', $styledata[185], $styledata[186], $styledata[187], 1, 'Font Size', 'Select Your Content Font Size', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-description', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-content-color', $styledata[189], '', 'Color', 'Select Your Content Color', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-description', 'color');
                                            echo OxiAddonsADMHelpFontSettings('oxievent1-content', 191, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-description');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-content-padding', 197, $styledata, 1, 'Padding', 'Set Your Content Padding', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-description', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-tabs-id-2">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Info
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_true_false('oxievent1-button-link-opening', $styledata[213], 'Normal', '', 'New Tab', '_blank', 'Link Opening', 'Customize your Link Opening Style');
                                            echo oxi_addons_adm_help_Text_Align('oxievent1-button-al', $styledata[215], 'Button Align', 'Set Your Button Align', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button', 'text-align');
                                            ?>
                                        </div>
                                    </div> 
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Button Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('oxievent1-button-size', $styledata[221], $styledata[222], $styledata[223], 1, 'Button Size', 'Select Your Button Text Size', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', ' font-size');
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-button-color', $styledata[225], '', 'Color', 'Select Your Icon Color', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', 'color');
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-button-bgcolor', $styledata[227], 'rgba', 'Background Color', 'Select Your Button Background Color', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', 'background');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-button-border', 229, $styledata, 1, 'Border width', 'Set Your Content Boxes Border width', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', 'border-width');
                                            echo OxiAddonsADMhelpBorder('oxievent1-button-border', 245, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', '');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-button-radius', 248, $styledata, 1, 'Border Radius', 'Set Your Content Boxes Border Radius', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', 'border-radius');
                                            echo OxiAddonsADMHelpFontSettings('oxievent1-button', 264, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', '');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-button-padding', 270, $styledata, 1, 'Padding', 'Set Your Button Padding', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-button-margin', 286, $styledata, 1, 'Margin', 'Set Your Heading Margin', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('oxievent1-button-animation', 217, $styledata, 'true', '.oxi-event1-' . $oxiid . '.oxi-event1-conten-button');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Hover Button Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-button-hover-color', $styledata[302], '', 'Color', 'Select Your Button Hover Text Color', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover' , 'color');
                                            echo oxi_addons_adm_help_MiniColor('oxievent1-button-hover-bgcolor', $styledata[304], 'rgba', 'Background Color', 'Select Your Button Hover Background Color', 'false', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover' , 'background');
                                            echo OxiAddonsADMhelpBorder('oxievent1-hover-button-border', 306, $styledata, 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover' , '');
                                            echo oxi_addons_adm_help_padding_margin('oxievent1-hover-button-radius', 309, $styledata, 1, 'Border Radius', 'Set Your Content Boxes Hover Border Radius', 'true', '.oxi-event1-' . $oxiid . ' .oxi-event1-conten-button-name:hover' , 'border-radius');
                                            ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="oxi-addons-setting-save">
                            <?php echo oxiaddonssettingsavedtmmode(); ?>
                            <button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
                            <input type="hidden"  id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php echo $styledata[1]; ?>">
                            <input type="submit" class="btn btn-success" name="data-submit" value="Save">
                            <?php wp_nonce_field("OxiAddCB-nonce") ?>
                        </div>

                    </div>

                </form>

            </div>
            <div class="oxi-addons-style-right">
                <?php
                echo oxi_addons_list_modal_open();
                echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
                echo oxi_addons_shortcode_call($oxitype, $oxiid);
                echo oxi_addons_list_rearrange('Content Boxes Rearrange', $listdata, 3, 'icon');
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
                    <?php echo oxi_content_boxes_style_9_shortcode($style, $listdata, 'admin') ?>
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
                    echo oxi_addons_adm_help_model_image_upload('oxievent1-image', $listitemdata[1], 'Image', 'Set Image', false);
                    echo oxi_addons_adm_help_textbox('oxievent1-icon', $listitemdata[3], 'Icon Html Code', 'Set Your Icon', 'false', '', '');
                    echo oxi_addons_adm_help_textbox('oxievent1-heading-text', $listitemdata[5], 'Heading Text', 'Set your Heading text');
                    echo oxi_addons_adm_help_form_textarea('oxievent1-content', $listitemdata[7], 'Content', 'Write your content box short details', 'false');
                    echo oxi_addons_adm_help_textbox('oxievent1-button', $listitemdata[9], 'Button Text', 'Set your Button Text');
                    echo oxi_addons_adm_help_textbox('oxievent1-button-link', $listitemdata[11], 'Desire Link', 'Write If you want to Add and Link into Your Button');
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
