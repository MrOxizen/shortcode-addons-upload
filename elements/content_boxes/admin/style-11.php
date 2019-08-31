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
                . OxiAddonsADMHelpItemPerRowsSanitize('oxi-cb11-rows')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-cb11-width')
                . OxiAddonsBGImageSanitize('oxi-cb11-bg')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-border')
                . OxiAddonsADMHelpBorderSanitize('oxi-cb11-border')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-radius')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-padding')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-margin')
                . OxiAddonsADMBoxShadowSanitize('oxi-cb11-box-shadow')
                . oxi_addons_adm_help_animation_senitize('oxi-cb11-animation')
                . 'oxi-cb11-hover-bgcolor |' . sanitize_text_field($_POST['oxi-cb11-hover-bgcolor']) . '|'
                . oxi_addons_adm_help_number_dtm_senitize('oxi-cb11-icon-font')
                . 'oxi-cb11-icon-color |' . sanitize_text_field($_POST['oxi-cb11-icon-color']) . '|'
                . 'oxi-cb11-icon-align |' . sanitize_text_field($_POST['oxi-cb11-icon-align']) . '|'
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-icon-padding')
                . 'oxi-cb11-box-bgcolor |' . sanitize_text_field($_POST['oxi-cb11-box-bgcolor']) . '|'
                . 'oxi-cb11-box-align |' . sanitize_text_field($_POST['oxi-cb11-box-align']) . '|'
                . oxi_addons_adm_help_number_dtm_senitize('oxi-cb11-box-width')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-cb11-box-height')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-box-padding')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-cb11-heading-size')
                . 'oxi-cb11-heading-color |' . sanitize_text_field($_POST['oxi-cb11-heading-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxi-cb11-heading')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-heading-padding')
                . oxi_addons_adm_help_number_dtm_senitize('oxi-cb11-content-size')
                . 'oxi-cb11-content-color |' . sanitize_text_field($_POST['oxi-cb11-content-color']) . '|'
                . OxiAddonsADMHelpFontSettingsSanitize('oxi-cb11-content')
                . oxi_addons_adm_help_padding_margin_senitize('oxi-cb11-content-padding')
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
        $data = ' oxi-cb11-icon ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['oxi-cb11-icon']) . '||#||'
                . ' oxi-cb11-heading-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-cb11-heading-text']) . '||#||'
                . 'oxi-cb11-content ||#||' . OxiAddonsADMHelpTextSenitize($_POST['oxi-cb11-content']) . '||#||'
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
                                        echo OxiAddonsADMHelpItemPerRows('oxi-cb11-rows', $styledata, 3, false, '.oxi-cb11');
                                        echo oxi_addons_adm_help_number_dtm('oxi-cb11-width', $styledata[7], $styledata[8], $styledata[9], 1, 'Width', 'Set Your Content Boxes Max Width', false, '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body', 'width');
                                        echo OxiAddonsADMHelpBGImage('oxi-cb11-bg', $styledata, 11, true, '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body', 'background');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-border', 15, $styledata, 1, 'Border-width', 'Set Your Content Boxes Border', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body', 'border-width');
                                        echo OxiAddonsADMhelpBorder('oxi-cb11-border', 31, $styledata, 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body', '');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-radius', 34, $styledata, 1, 'Border Radius', 'Set Your Content Boxes Border Radius', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-padding', 50, $styledata, 1, 'Padding', 'Set Your Content Boxes  Padding', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-margin', 66, $styledata, 1, 'Margin', 'Set Your Content Boxes  Margin', 'true', '.oxi-cb11-main-'.$oxiid.'', 'padding');
                                         $NOJS = array(
                                                array('oxi-cb11-bg', 'Backgrond Image'),
                                            );
                                            echo OxiAddonsADMHelpNoJquery($NOJS);
                                        ?>
                                    </div> 
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMhelpBoxShadow('oxi-cb11-box-shadow', 82, $styledata, 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-body');
                                        ?>
                                    </div> 

                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('oxi-cb11-animation', 88, $styledata, 'true', 'oxi-cb11-body');
                                        $NOJS = array(
                                                array('oxi-cb11-animation', 'Animation'),
                                            );
                                            echo OxiAddonsADMHelpNoJquery($NOJS);
                                        ?>
                                    </div>
                                </div>  
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Hover Background
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('oxi-cb11-hover-bgcolor', $styledata[92], 'rgba', 'Background Color', 'Select Your Background Color', 'false', ' .oxi-cb11-body:hover', 'background');
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
                                        echo oxi_addons_adm_help_number_dtm('oxi-cb11-icon-font', $styledata[94], $styledata[95], $styledata[96], '1', 'Icon Size', 'Set Icon size', false, '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-icon-icon', 'font-size', 'px', 8, 1000);
                                        echo oxi_addons_adm_help_MiniColor('oxi-cb11-icon-color', $styledata[98], '', 'Icon Color', 'Set Your Icon Color', true, '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-icon-icon', 'color');
                                        echo oxi_addons_adm_help_Text_Align('oxi-cb11-icon-align', $styledata[100], 'Icon Align', 'Set Your Icon Align', true, ' .oxi-cb11-main-'.$oxiid.' .oxi-cb11-icon', 'text-align');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-icon-padding', 102, $styledata, 1, 'Padding', 'Set Your Icon Padding', true, '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-icon-icon', 'padding');
                                        ?>
                                    </div>

                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Underline Box Setting
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('oxi-cb11-box-bgcolor', $styledata[118], 'rgba', 'Color', 'Select  Color', 'false', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-hrbox-box', 'background');
                                        echo oxi_addons_adm_help_number_dtm('oxi-cb11-box-width', $styledata[122], $styledata[123], $styledata[124], 1, 'Width Ratio', 'Set Box Width Ratio', 'false', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-hrbox-box', 'width', '%', 5, 100);
                                        echo oxi_addons_adm_help_number_dtm('oxi-cb11-box-height', $styledata[126], $styledata[127], $styledata[128], 0.1, 'Box Heigth', 'Set Height ', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-hrbox-box', 'height', 'px', 0, 1000);
                                        echo oxi_addons_adm_help_Text_Align('oxi-cb11-box-align', $styledata[120], 'Box Align', 'Set Your Box Align', true, '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-hrbox', 'text-align');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-box-padding', 130, $styledata, 1, 'Padding', 'Set Your BOx Padding', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-hrbox ', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Heading Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-cb11-heading-size', $styledata[146], $styledata[147], $styledata[148], 1, 'Font Size', 'Select Your Heading Font Size', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-title', 'font-size', 'px');
                                        echo oxi_addons_adm_help_MiniColor('oxi-cb11-heading-color', $styledata[150], '', 'Color', 'Select Your Heading Color', 'false', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-title', 'color');
                                        echo OxiAddonsADMHelpFontSettings('oxi-cb11-heading', 152, $styledata, 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-title', '');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-heading-padding', 158, $styledata, 1, 'Padding', 'Set Your Heading Padding', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-title', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Description Settings
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('oxi-cb11-content-size', $styledata[174], $styledata[175], $styledata[176], 1, 'Font Size', 'Select Your Content Font Size', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-description', 'font-size', 'px');
                                        echo oxi_addons_adm_help_MiniColor('oxi-cb11-content-color', $styledata[178], '', 'Color', 'Select Your Content Color', 'false', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-description', 'color');
                                        echo OxiAddonsADMHelpFontSettings('oxi-cb11-content', 180, $styledata, 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-description');
                                        echo oxi_addons_adm_help_padding_margin('oxi-cb11-content-padding', 186, $styledata, 1, 'Padding', 'Set Your Content Padding', 'true', '.oxi-cb11-main-'.$oxiid.' .oxi-cb11-description', 'padding');
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
                echo oxi_addons_list_rearrange('Content Boxes Rearrange', $listdata, 1, 'icon');
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
                    <?php echo oxi_content_boxes_style_11_shortcode($style, $listdata, 'admin') ?>
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
                    echo oxi_addons_adm_help_textbox('oxi-cb11-icon', $listitemdata[1], 'Icon Html Code', 'Set Your Icon', 'false', '', '');
                    echo oxi_addons_adm_help_textbox('oxi-cb11-heading-text', $listitemdata[3], 'Heading Text', 'Set your Heading text');
                    echo oxi_addons_adm_help_form_textarea('oxi-cb11-content', $listitemdata[5], 'Content', 'Write your content box short details', 'false');
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
