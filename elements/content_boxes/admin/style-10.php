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
                . OxiAddonsADMHelpItemPerRowsSanitize('oxi-contentbox-rows')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-contentbox-width')
                . OxiAddonsBGImageSanitize('oxi-contentbox-bg')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-border')
                . OxiAddonsADMHelpBorderSanitize('oxi-contentbox-border')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-radius')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-margin')
                . OxiAddonsADMBoxShadowSanitize('oxi-contentbox-box-shadow')
                . oxi_addons_adm_help_animation_senitize('oxi-contentbox-animation')
                . 'oxi-contentbox-hover-bgcolor |' . sanitize_text_field($_POST['oxi-contentbox-hover-bgcolor']) . '|'
                . oxi_addons_adm_help_number_dtm_senitize('oxi-contentbox-icon-font')
                . 'oxi-contentbox-icon-color |' . sanitize_text_field($_POST['oxi-contentbox-icon-color']) . '|'
                . 'oxi-contentbox-icon-align |' . sanitize_text_field($_POST['oxi-contentbox-icon-align']) . '|'
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-icon-padding')
                . '||||'
                . oxi_addons_adm_help_number_dtm_senitize('oxi-contentbox-heading-size')
                . 'oxi-contentbox-heading-color |' . sanitize_text_field($_POST['oxi-contentbox-heading-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxi-contentbox-heading')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-heading-padding')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-contentbox-content-size')
                . 'oxi-contentbox-content-color |' . sanitize_text_field($_POST['oxi-contentbox-content-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxi-contentbox-content')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-content-padding')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-contentbox-box-icon-size')
                . 'oxi-contentbox-box-align |' . sanitize_text_field($_POST['oxi-contentbox-box-align']) . '|'
                . 'oxi-contentbox-box-icon-color |' . sanitize_text_field($_POST['oxi-contentbox-box-icon-color']) . '|'
                . 'oxi-contentbox-box-bgcolor |' . sanitize_text_field($_POST['oxi-contentbox-box-bgcolor']) . '|'
                . oxi_addons_adm_help_number_dtm_senitize('oxi-contentbox-box-height-width')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-contentbox-box-padding')
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
        $data = ' oxi-contentbox-box-link ||#||' . OxiAddonsAdminUrlConvert($_POST['oxi-contentbox-box-link']) . '||#||'
                . ' oxi-contentbox-icon ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['oxi-contentbox-icon']) . '||#||'
                . ' oxi-contentbox-heading-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-contentbox-heading-text']) . '||#||'
                . 'oxi-contentbox-content ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-contentbox-content']) . '||#||'
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
                                        General Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMHelpItemPerRows('oxi-contentbox-rows', $styledata, 3, false, '.oxi-contentbox-class');
                                        echo oxi_addons_adm_help_number_dtm('oxi-contentbox-width', $styledata[7], $styledata[8], $styledata[9], 1, 'Width', 'Set Your Content Boxes Max Width', false, '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main', 'width');
                                        echo OxiAddonsADMHelpBGImage('oxi-contentbox-bg', $styledata, 11, true, '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main', 'background');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-border', 15, $styledata, 1, 'Border-width', 'Set Your Content Boxes Border', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main', 'border-width');
                                        echo OxiAddonsADMhelpBorder('oxi-contentbox-border', 31, $styledata, 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main ', '');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-radius', 34, $styledata, 1, 'Border Radius', 'Set Your Content Boxes Border Radius', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-padding', 50, $styledata, 1, 'Padding', 'Set Your Content Boxes  Padding', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-body', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-margin', 66, $styledata, 1, 'Margin', 'Set Your Content Boxes  Margin', 'true', '.oxi-contentbox-' . $oxiid . '', 'padding');
                                        ?>
                                    </div> 
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMhelpBoxShadow('oxi-contentbox-box-shadow', 82, $styledata, 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main ');
                                        ?>
                                    </div> 

                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('oxi-contentbox-animation', 88, $styledata, 'true', 'oxi-contentbox-icon');
                                        ?>
                                    </div>
                                </div>  
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Hover Background
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('oxi-contentbox-hover-bgcolor', $styledata[92], 'rgba', 'Background Color', 'Select Your Background Color', 'false', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-main:hover', 'background');
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
                                        echo oxi_addons_adm_help_number_dtm('oxi-contentbox-icon-font', $styledata[94], $styledata[95], $styledata[96], '1', 'Icon Size', 'Set Icon size', false, '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon-icon', 'font-size', 'px', 8, 1000);
                                        echo oxi_addons_adm_help_MiniColor('oxi-contentbox-icon-color', $styledata[98], '', 'Icon Color', 'Set Your Icon Color', true, '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon-icon', 'color');
                                        echo oxi_addons_adm_help_Text_Align('oxi-contentbox-icon-align', $styledata[100], 'Icon Align', 'Set Your Icon Align', true, ' .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon', 'text-align');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-icon-padding', 102, $styledata, 1, 'Padding', 'Set Your Icon Padding', true, '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-icon-icon', 'padding');
                                        ?>
                                    </div>
                                   
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Heading Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-contentbox-heading-size', $styledata[122], $styledata[123], $styledata[124], 1, 'Font Size', 'Select Your Heading Font Size', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title', 'font-size', 'px');
                                        echo oxi_addons_adm_help_MiniColor('oxi-contentbox-heading-color', $styledata[126], '', 'Color', 'Select Your Heading Color', 'false', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title', 'color');
                                        echo OxiAddonsADMHelpFontSettings('oxi-contentbox-heading', 128, $styledata, 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title', '');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-heading-padding', 134, $styledata, 1, 'Padding', 'Set Your Heading Padding', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-title', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Description Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-contentbox-content-size', $styledata[150], $styledata[151], $styledata[152], 1, 'Font Size', 'Select Your Content Font Size', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description', 'font-size', 'px');
                                        echo oxi_addons_adm_help_MiniColor('oxi-contentbox-content-color', $styledata[154], '', 'Color', 'Select Your Content Color', 'false', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description', 'color');
                                        echo OxiAddonsADMHelpFontSettings('oxi-contentbox-content', 156, $styledata, 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-content-padding', 162, $styledata, 1, 'Padding', 'Set Your Content Padding', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-description', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Button Box Setting
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-contentbox-box-icon-size', $styledata[178], $styledata[179], $styledata[180], 1, 'Box Icon Size', 'Select Your Icon Size', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-icon', 'font-size', 'px');
                                        echo oxi_addons_adm_help_number_dtm('oxi-contentbox-box-height-width', $styledata[188], $styledata[189], $styledata[190], 1, 'Box Heigth Width', 'Select Your Height Width', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-arrow', 'width', 'px');
                                        echo oxi_addons_adm_help_MiniColor('oxi-contentbox-box-bgcolor', $styledata[186], 'rgba', 'Background Color', 'Select Your Background Color', 'false', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-arrow', 'background');
                                        echo oxi_addons_adm_help_MiniColor('oxi-contentbox-box-icon-color', $styledata[184], '', 'Box Icon Color Color', 'Set Your Box Icon Color', 'true', '.oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow-icon', 'color');
                                        echo oxi_addons_adm_help_Text_Align('oxi-contentbox-box-align', $styledata[182], 'Box Align', 'Set Your Box Align', true, ' .oxi-contentbox-' . $oxiid . ' .oxi-contentbox-arrow ', 'text-align');
                                        echo oxi_addons_adm_help_padding_margin('oxi-contentbox-box-padding', 192, $styledata, 1, 'Margin', 'Set Your BOx Margin', 'true', '.oxi-contentbox-'.$oxiid.' .oxi-contentbox-arrow', 'padding');
                                        $NOJS = array(
                                            array('oxi-contentbox-box-height-width', 'Width & Height'),
                                        );
                                        echo OxiAddonsADMHelpNoJquery($NOJS);
                                        ?>
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
                echo oxi_addons_list_rearrange('Content Boxes Rearrange', $listdata, 5, 'title');
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
                    <?php echo oxi_content_boxes_style_10_shortcode($style, $listdata, 'admin') ?>
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
                    echo oxi_addons_adm_help_textbox('oxi-contentbox-box-link', $listitemdata[1], 'Link', 'Set Link', 'false', '', '');
                    echo oxi_addons_adm_help_textbox('oxi-contentbox-icon', $listitemdata[3], 'Icon Html Code', 'Set Your Icon', 'false', '', '');
                    echo oxi_addons_adm_help_textbox('oxi-contentbox-heading-text', $listitemdata[5], 'Heading Text', 'Set your Heading text');
                    echo oxi_addons_adm_help_form_textarea('oxi-contentbox-content', $listitemdata[7], 'Content', 'Write your content box short details', 'false');
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
