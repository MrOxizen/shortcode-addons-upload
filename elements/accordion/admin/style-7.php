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
$listitemdata = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
$listid = '';
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'oxi-addons-accordion-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . ' OxiAddonsAC-7-G-initial-open |' . sanitize_text_field($_POST['OxiAddonsAC-7-G-initial-open']) . '|'
                . ' OxiAddonsAC-7-G-opening-type |' . sanitize_text_field($_POST['OxiAddonsAC-7-G-opening-type']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-7-G-BR') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-7-G-P') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-7-G-M') . ''
                . ' ||||||'
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddonsAC-7-animation') . ''
                
                . '' . OxiAddonsBGImageSanitize('OxiAddonsAC-7-OA-BG') . ''
                . ' OxiAddonsAC-7-OA-C |' . sanitize_hex_color($_POST['OxiAddonsAC-7-OA-C']) . '|'
                
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddons-AC-7-T-FS') . ''
                . ' ||'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddons-AC-7-T2') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-7-T-P') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddons-AC-7-D-FS') . ''
                . ' OxiAddons-AC-7-D-C |' . sanitize_hex_color($_POST['OxiAddons-AC-7-D-C']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddons-AC-7-D2') . ''

                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-7-D-P') . ''
                
                . ' OxiAddonsAC-7-OI-BG |' . sanitize_text_field($_POST['OxiAddonsAC-7-OI-BG']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsAC-7-OI-FS') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsAC-7-OI-WH') . ''
                . ' OxiAddonsAC-7-OI-C |' . sanitize_hex_color($_POST['OxiAddonsAC-7-OI-C']) . '|'
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsAC-7-OI-B') . ''
                . ' OxiAddonsAC-7-OI-BC |' . sanitize_hex_color($_POST['OxiAddonsAC-7-OI-BC']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-7-OI-BR') . ''
                . ' OxiAddons-AC-7-D-BBC |' . sanitize_hex_color($_POST['OxiAddons-AC-7-D-BBC']) . '|'
                . ' OxiAddonsAC-7-boxshadow |' . sanitize_text_field($_POST['OxiAddonsAC-7-boxshadow']) . '|'
                . '||#||'
                . ' ||#||';

        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}

if (!empty($_POST['OxiAddonsListFile']) && $_POST['OxiAddonsListFile'] == 'Submit') {
    if (!wp_verify_nonce($nonce, 'OxiAddonsListData-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxilistid = sanitize_textarea_field($_POST['oxilistid']);
        $data = ' ||#||OxiAddons-AC-SV-T ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddons-AC-SV-T']) . '||#|| '
                . ' OxiAddons-AC-SV-IN ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddons-SV-AC-IN']) . '||#|| '
                . ' OxiAddons-AC-7-OI ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['OxiAddons-AC-7-OI']) . '||#|| ';
        if ($oxilistid > 0) {
            $data = sanitize_text_field($data);
            $wpdb->query($wpdb->prepare("UPDATE $table_list SET files = %s WHERE id = %d", $data, $oxilistid));
        } else {
            $data = sanitize_text_field($data);
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, type, files) VALUES (%d, %s, %s )", array($oxiid, 'oxi-addons', $data)));
        }
    }
}
if (!empty($_POST['OxiAddonsListFileEdit']) && is_numeric($_POST['oxi-item-id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'OxiAddonsListFileEdit' . $oxitype . 'data')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['oxi-item-id'];
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
        $listitemdata = explode('||#||', $data['files']);
        $listid = $data['id'];
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxi-addons-list-data-modal").modal("show")  }, 700); });</script>';
    }
}
if (!empty($_POST['OxiAddonsListFileDelete']) && is_numeric($_POST['oxi-item-id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'OxiAddonsListFileDelete' . $oxitype . 'data')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['oxi-item-id'];
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER BY id ASC", $oxiid), ARRAY_A);
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
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-7">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Initial Opening
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsAdminInitialOpen('OxiAddonsAC-7-G-initial-open', $styledata[3], 'Initial Opening', 'Set Which Events You want to Open Initially', 'false');
                                        ?>
                                        <div class="form-group row">
                                            <label for="OxiAddonsAC-7-G-opening-type" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="" >Opening Type</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="OxiAddonsAC-7-G-opening-type" name="OxiAddonsAC-7-G-opening-type">
                                                    <option value="one-by-one" <?php
                                                    if ($styledata[5] == 'one-by-one') {
                                                        echo 'selected';
                                                    };
                                                    ?>>One by One</option>
                                                    <option value="randomly"    <?php
                                                    if ($styledata[5] == 'randomly') {
                                                        echo 'selected';
                                                    };
                                                    ?>>Randomly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        General
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMHelpBGImage('OxiAddonsAC-7-OA-BG', $styledata, 65, 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel', 'background');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-7-G-BR', 7, $styledata, '7', 'Border Radius', 'Set your body Border Radius', 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-7-G-P', 23, $styledata, '7', 'Padding', 'Set your body Padding', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-7-G-M', 39, $styledata, '7', 'Margin', 'Set your body Margin', 'true', '.oxi-addons-AC-SV-' . $oxiid . '', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-7-boxshadow', $styledata[163], 'rgba', 'Box Shadow', 'Set Your box shadow Color', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-panel:active', 'box-shadow');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('OxiAddonsAC-7-animation', 61, $styledata, 'true', '.oxi-addons-AC-SV-' . $oxiid . '');
                                        ?>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="oxi-addons-col-6">
                                 <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Title
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-7-OA-C', $styledata[69], '', 'Color', 'Set Your Title Font Color', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header', 'color');
                                        echo oxi_addons_adm_help_number_dtm('OxiAddons-AC-7-T-FS', $styledata[71], $styledata[72], $styledata[73], '1', 'Font Size', 'Set Your Title Font Size', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header', 'font-size');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddons-AC-7-T2', 77, $styledata, 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-7-T-P', 83, $styledata, '7', 'Padding', 'Set your Title Padding', 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-header', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Description
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiAddons-AC-7-D-FS', $styledata[99], $styledata[100], $styledata[101], '1', 'Font Size', 'Set Your Description Font Size', 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details ', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-7-D-C', $styledata[103], '', 'Color', 'Set Your Description Color', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details ', 'color');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-7-D-BBC', $styledata[161], '', 'Border Color', 'Set Your Border Bottom Color', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details ', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddons-AC-7-D2', 105, $styledata, 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details ');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-7-D-P', 111, $styledata, '7', 'Padding', 'Set your Description Padding', 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-details ', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Icon
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiAddonsAC-7-OI-WH', $styledata[133], $styledata[134], $styledata[135], '1', 'Icon Widht', 'Set Your Icon Font Size', 'true');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-7-OI-BG', $styledata[127], '', 'Background', 'Set Your Icon Hover Background', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon', 'background');
                                        echo oxi_addons_adm_help_number_dtm('OxiAddonsAC-7-OI-FS', $styledata[129], $styledata[130], $styledata[131], '1', 'Icon Size', 'Set Your Icon Font Size', 'true', '.oxi-addons-AC-' . $oxiid . '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-7-OI-C', $styledata[137], '', 'Icon Color', 'Set Your Icon  Color', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon', 'color');
                                        echo oxi_addons_adm_help_border('OxiAddonsAC-7-OI-B', $styledata[139], $styledata[140], 'Border', 'Set your Icon Border Size and Type', 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-7-OI-BC', $styledata[143], '', 'Border Color', 'Set Your Icon  Border Color', 'false', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon', 'border-color');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-7-OI-BR', 145, $styledata, '1', 'Border Radius', 'Set your Icon Border Radius', 'true', '.oxi-addons-AC-SV-' . $oxiid . ' .oxi-addons-AC-SV-icon', 'border-radius');
                                        $NOJS = array(
                                            array('OxiAddonsAC-7-OI-WH', 'Icon Width')
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
                            <input type="submit" class="btn btn-success" name="data-submit" value="Save">
                            <input type="hidden"  id="oxi-addons-preview-BG" name="oxi-addons-preview-BG" value="<?php echo $styledata[1]; ?>">
                            <?php wp_nonce_field("oxi-addons-accordion-nonce") ?>
                        </div>
                    </div>
                </form>
            </div>
            <div class="oxi-addons-style-right">
                <?php
                echo oxi_addons_list_modal_open();
                echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
                echo oxi_addons_shortcode_call($oxitype, $oxiid);
                echo oxi_addons_list_rearrange('Accordion Rearrange', $listdata, 2, 'title');
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
                    <?php echo oxi_accordion_style_7_shortcode($style, $listdata, 'admin'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="oxi-addons-list-data-modal" >
    <form method="post">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">                    
                    <h4 class="modal-title">Accordion Settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php
                    echo oxi_addons_adm_help_textbox('OxiAddons-AC-7-OI', $listitemdata[6], 'Icon Class', 'Set Your Icon', 'false');
                    echo oxi_addons_adm_help_textbox('OxiAddons-AC-SV-T', $listitemdata[2], 'Title', 'Set Your Title, Supported native Language', 'false');
                    echo oxi_addons_adm_help_model_rich_text_box('OxiAddons-SV-AC-IN', $listitemdata[4], 'Info Text', 'Give Your Info text Here', 'false');
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
