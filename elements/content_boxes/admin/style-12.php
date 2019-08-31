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
                . oxi_addons_adm_help_single_size('oxi-addons-box-width')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-margin')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-border-radius')
                . OxiAddonsADMBoxShadowSanitize('oxi-addons-box-shadow')
                . oxi_addons_adm_help_single_size('oxi-addons-box-icon-font-size')
                . 'oxi-addons-box-icon-color |' . sanitize_text_field($_POST['oxi-addons-box-icon-color']) . '|'
                . 'oxi-addons-box-icon-align |' . sanitize_text_field($_POST['oxi-addons-box-icon-align']) . '|'
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-icon-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-icon-margin')
                . oxi_addons_adm_help_single_size('oxi-addons-box-heading-font-size')
                . 'oxi-addons-box-heading-color |' . sanitize_text_field($_POST['oxi-addons-box-heading-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxi-addons-box-heading-font-settings')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-heading-padding')
                . oxi_addons_adm_help_single_size('oxi-addons-box-desc-font-size')
                . 'oxi-addons-box-desc-color |' . sanitize_text_field($_POST['oxi-addons-box-desc-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxi-addons-box-desc-font-settings')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-desc-padding')
                . oxi_addons_adm_help_single_size('oxi-addons-box-array-font-size')
                . 'oxi-addons-box-array-color |' . sanitize_text_field($_POST['oxi-addons-box-array-color']) . '|'
                . 'oxi-addons-box-array-align |' . sanitize_text_field($_POST['oxi-addons-box-array-align']) . '|'
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-array-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-addons-box-array-margin')
                . OxiAddonsADMHelpItemPerRowsSanitize('oxi-addons-box-row')
                . 'oxi-addons-box-hover-bg-color |' . sanitize_text_field($_POST['oxi-addons-box-hover-bg-color']) . '|'
                . '' . oxi_addons_adm_help_animation_senitize('oxi-addons-box-animation') . ''
                . '' . oxi_addons_adm_help_animation_senitize('oxi-addons-arrow-animation') . ''
                . oxi_addons_adm_help_single_size('oxi-addons-box-height')
                . '||#||';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}


if (!empty($_POST['OxiAddonsListFile']) && $_POST['OxiAddonsListFile'] == 'Submit') {
    if (!wp_verify_nonce($nonce, 'OxiAddonsListData-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxilistid = (int) $_POST['oxilistid'];
        $data = ' oxi-addons-box-image ||#||' . OxiAddonsAdminUrlConvert($_POST['oxi-addons-box-image']) . '||#|| '
                . 'oxi-addons-box-icon-code ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-addons-box-icon-code']) . '||#|| '
                . 'oxi-addons-box-heading-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-addons-box-heading-text']) . '||#|| '
                . 'oxi-addons-box-desc-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-addons-box-desc-text']) . '||#|| '
                . 'oxi-adddons-box-arrow-code ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-adddons-box-arrow-code']) . '||#|| '
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
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-1">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Box Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMHelpItemPerRows('oxi-addons-box-row', $styledata, 197, 'false', '.oxi-box-wrap-' . $oxiid . '');
                                        echo oxi_addons_adm_help_number_dtm('oxi-addons-box-width', $styledata[3], $styledata[4], $styledata[5], 1, 'Width', 'Set Your Box Width', false, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box', 'max-width', 'px', 100, 1000);
                                        echo oxi_addons_adm_help_number_dtm('oxi-addons-box-height', $styledata[211], $styledata[212], $styledata[213], 1, 'Height', 'Set Your box Height', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box', 'height', 'px', '', '');
                                        echo oxi_addons_adm_help_MiniColor('oxi-addons-box-hover-bg-color', $styledata[201], 'rgba', 'Hover Background', 'Set Your Box Hover Background Color', true, '.oxi-box-wrap-'.$oxiid.' .oxi-addons-box:hover .oxi-addons-box-inner', 'background');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-padding', 7, $styledata, '1', 'Padding', 'Set your Box Padding', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-margin', 23, $styledata, '1', 'Margin', 'Set your Box Margin', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer', 'margin');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-border-radius', 39, $styledata, 1, 'Border Radius', 'Set Your Box Border Radius ', 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer', 'border-radius');
                                        ?>
                                    </div>
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMhelpBoxShadow('oxi-addons-box-shadow', 55, $styledata, 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-outer');
                                        ?>
                                    </div>
                                    <div class="oxi-head">
                                        Box Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('oxi-addons-box-animation', 203, $styledata, 'true', '');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Icon Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-addons-box-icon-font-size', $styledata[61], $styledata[62], $styledata[63], 1, 'Font Size', 'Select Your Icon Font Size', 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon', 'font-size', 'px', '', '');
                                        echo oxi_addons_adm_help_MiniColor('oxi-addons-box-icon-color', $styledata[65], '', 'Color', 'Set Your Icon Color', 'false', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon', 'color');
                                        echo oxi_addons_adm_help_Text_Align('oxi-addons-box-icon-align', $styledata[67], 'Icon Align', 'Set Your Incon Align', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon', 'text-align');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-icon-padding', 69, $styledata, 1, 'Padding', 'Set Your Icon Padding', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-icon-margin', 85, $styledata, 1, 'Margin', 'Set Your Icon Margin', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-icon', 'margin');
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Heading Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-addons-box-heading-font-size', $styledata[101], $styledata[102], $styledata[103], 1, 'Font Size', 'Select Your Heading Font Size', 'false', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name', 'font-size', 'px', 0, '');
                                        echo oxi_addons_adm_help_MiniColor('oxi-addons-box-heading-color', $styledata[105], '', 'Color', 'Set Your Heading Color', 'false', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name', 'color');
                                        echo OxiAddonsADMHelpFontSettings('oxi-addons-box-heading-font-settings', 107, $styledata, 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-heading-padding', 113, $styledata, 1, 'Padding', 'Set Your Heading Padding ', 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-name', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Descriptions Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-addons-box-desc-font-size', $styledata[129], $styledata[130], $styledata[131], 1, 'Font Size', 'Select Your Descriptions Font Size', 'false', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc', 'font-size', 'px', '', '');
                                        echo oxi_addons_adm_help_MiniColor('oxi-addons-box-desc-color', $styledata[133], '', 'Color', 'Set Your Descriptions Color', 'false', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc', 'color');
                                        echo OxiAddonsADMHelpFontSettings('oxi-addons-box-desc-font-settings', 135, $styledata, 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-desc-padding', 141, $styledata, 1, 'Padding', 'Set Your Descriptions Padding ', 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-desc', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Arrow Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-addons-box-array-font-size', $styledata[157], $styledata[158], $styledata[159], 1, 'Font Size', 'Set your arrays Font size', 'true', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow', 'font-size', 'px', '', '');
                                        echo oxi_addons_adm_help_MiniColor('oxi-addons-box-array-color', $styledata[161], '', 'Color', 'Set Your Array Color', 'false', '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow', 'color');
                                        echo oxi_addons_adm_help_Text_Align('oxi-addons-box-array-align', $styledata[163], 'Arrow Align', 'Set Your Arrow Align', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow', 'text-align');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-array-padding', 165, $styledata, 1, 'Padding', 'Set Your Array Padding', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('oxi-addons-box-array-margin', 181, $styledata, 1, 'Margin', 'Set Your Array Margin', true, '.oxi-box-wrap-' . $oxiid . ' .oxi-addons-box-arrow', 'margin');
                                        ?>
                                    </div>
                                    <div class="oxi-head">
                                        Arrow Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('oxi-addons-arrow-animation', 207, $styledata, 'true');
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
                    <?php echo oxi_content_boxes_style_12_shortcode($style, $listdata, 'admin') ?>
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
                    echo oxi_addons_adm_help_model_image_upload('oxi-addons-box-image', $listitemdata[1], 'Image', 'Set Image', false);
                    echo oxi_addons_adm_help_textbox('oxi-addons-box-icon-code', $listitemdata[3], 'Icon Class', 'Write your Icon Class', false);
                    echo oxi_addons_adm_help_textbox('oxi-addons-box-heading-text', $listitemdata[5], 'Heading Text', 'Write your Heading Text', false);
                    echo oxi_addons_adm_help_textbox('oxi-addons-box-desc-text', $listitemdata[7], 'Descriptions Text', 'Write your Descriptions Text', false);
                    echo oxi_addons_adm_help_textbox('oxi-adddons-box-arrow-code', $listitemdata[9], 'Arrow Icon Class', 'Write your Icon Class', false);
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
