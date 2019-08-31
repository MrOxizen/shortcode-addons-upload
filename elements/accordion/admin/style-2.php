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
                . ' OxiAddonsAC-2-G-initial-open |' . sanitize_text_field($_POST['OxiAddonsAC-2-G-initial-open']) . '|'
                . '' . OxiAddonsBGImageSanitize('OxiAddonsAC-2-G-BG') . ''
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsAC-2-G-B') . ''
                . ' OxiAddonsAC-2-G-BC |' . sanitize_hex_color($_POST['OxiAddonsAC-2-G-BC']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-2-G-BR') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-2-G-P') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-2-G-M') . ''
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsAC-2-G-Shadow') . ''
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddonsAC-2-animation') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddons-AC-2-T-FS') . ''
                . ' OxiAddons-AC-2-T-C |' . sanitize_hex_color($_POST['OxiAddons-AC-2-T-C']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddons-AC-2-T2') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-2-T-P') . ''
                
                . ' OxiAddonsAC-2-OI-BG |' . sanitize_text_field($_POST['OxiAddonsAC-2-OI-BG']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsAC-2-OI-FS') . ''
                . ' OxiAddonsAC-2-OI-C |' . sanitize_hex_color($_POST['OxiAddonsAC-2-OI-C']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-2-OI-P') . ''
                
                . ' OxiAddonsAC-2-CI-BG |' . sanitize_text_field($_POST['OxiAddonsAC-2-CI-BG']) . '|'
                . '  ||'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsAC-2-CI-FS') . ''
                . '||||'
                . ' OxiAddonsAC-2-CI-C |' . sanitize_hex_color($_POST['OxiAddonsAC-2-CI-C']) . '|'
                . '||||'
                . ' ||'
                . ' ||||||||||||||||'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-2-CI-M') . ''
                . ' OxiAddons-AC-2-D-BC |' . sanitize_text_field($_POST['OxiAddons-AC-2-D-BC']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddons-AC-2-D-FS') . ''
                . ' OxiAddons-AC-2-D-C |' . sanitize_hex_color($_POST['OxiAddons-AC-2-D-C']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddons-AC-2-D2') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-2-D-P') . ''
                . ' OxiAddonsAC-2-G-opening-type |' . sanitize_text_field($_POST['OxiAddonsAC-2-G-opening-type']) . '|'
                
                . '||#||'
                . ' OxiAddons-AC-2-OI ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['OxiAddons-AC-2-OI']) . '||#|| '
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
        $data = ' ||#||OxiAddons-AC-2-T ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddons-AC-2-T']) . '||#|| '
                . ' OxiAddons-AC-2-IN ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddons-AC-2-IN']) . '||#|| ';
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
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxi-addons-list-data-modal").modal("show")  }, 500); });</script>';
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
     <?php echo OxiAddonsAdmAdminMenu($oxitype, '', '', 'yes'); ?>
    <div class="oxi-addons-wrapper">
        <div class="oxi-addons-row">
            <div class="oxi-addons-style-20-spacer"></div>
            <div class="oxi-addons-style-left">
                <form method="post" id="oxi-addons-form-submit">
                    <div class="oxi-addons-style-settings">
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-2">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Initial Opening
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsAdminInitialOpen('OxiAddonsAC-2-G-initial-open', $styledata[3], 'Initial Opening', 'Set Which Events You want to Open Initially', 'false');
                                        ?>
                                        <div class="form-group row">
                                            <label for="OxiAddonsAC-2-G-opening-type" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="" >Opening Type</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="OxiAddonsAC-2-G-opening-type" name="OxiAddonsAC-2-G-opening-type">
                                                    <option value="one-by-one" <?php
                                                    if ($styledata[207] == 'one-by-one') {
                                                        echo 'selected';
                                                    };
                                                    ?>>One by One</option>
                                                    <option value="randomly"    <?php
                                                    if ($styledata[207] == 'randomly') {
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
                                        echo OxiAddonsADMHelpBGImage('OxiAddonsAC-2-G-BG', $styledata, 5, 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-content', 'background');
                                        echo oxi_addons_adm_help_border('OxiAddonsAC-2-G-B', $styledata[9], $styledata[10], 'Border', 'Set your Body Border Size and Type', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-2-G-BC', $styledata[13], '', 'Border Color', 'Set Your Body  Border Color', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '', 'border-color');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-2-G-BR', 15, $styledata, '1', 'Border Radius', 'Set Your body Border Radius', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-2-G-P', 31, $styledata, '1', 'Padding', 'Set Your body Padding', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-2-G-M', 47, $styledata, '1', 'Margin', 'Set Your body Margin', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . '', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMhelpBoxShadow('OxiAddonsAC-2-G-Shadow', 63, $styledata, 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('OxiAddonsAC-2-animation', 69, $styledata, 'true', '.oxi-addonsAC-wrapper-' . $oxiid . '');
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
                                        echo oxi_addons_adm_help_number_dtm('OxiAddons-AC-2-T-FS', $styledata[73], $styledata[74], $styledata[75], '1', 'Font Size', 'Set Your Title Font Size', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-2-T-C', $styledata[77], '', 'Color', 'Set Your Title Color', 'false', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddons-AC-2-T2', 79, $styledata, 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-2-T-P', 85, $styledata, '1', 'Padding', 'Set your Title Padding', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-heading-data', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Description
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-2-D-BC', $styledata[177], 'rgba', 'Background', 'Set Your Description Color', 'false', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details', 'background');
                                        echo oxi_addons_adm_help_number_dtm('OxiAddons-AC-2-D-FS', $styledata[179], $styledata[180], $styledata[181], '1', 'Font Size', 'Set Your Description Font Size', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-2-D-C', $styledata[183], '', 'Color', 'Set Your Description Color', 'false', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddons-AC-2-D2', 185, $styledata, 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-2-D-P', 191, $styledata, '1', 'Padding', 'Set your Description Padding', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '-details', 'padding');
                                        
                                        ?>
                                    </div>
                                </div>
                               <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Opening Icon
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_textbox('OxiAddons-AC-2-OI', $stylefiles[2], 'Icon Class', 'Set Your Opening Icon, Supported native Language', 'false');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-2-OI-BG', $styledata[101], 'rgba', 'Background', 'Set Your Opening Icon Hover Background', 'false', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon', 'background');
                                        echo oxi_addons_adm_help_number_dtm('OxiAddonsAC-2-OI-FS', $styledata[103], $styledata[104], $styledata[105], '1', 'Icon Size', 'Set Your Opening Icon Font Size', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-2-OI-C', $styledata[107], '', 'Icon Color', 'Set Your Button  Color', 'false', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon', 'color');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-2-OI-P', 109, $styledata, '1', 'Padding', 'Set your Opening Icon Padding', 'true', '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . '.oxi-active .oxi-addonsAC-2-icon', 'padding');
                                        
                                        ?>
                                    </div>
                                    <div class="oxi-head">
                                        Closing Icon
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-2-CI-BG', $styledata[125], 'rgba', 'Background', 'Set Your Closing Icon Hover Background', 'false', '.oxi-addons-AC-' . $oxiid . '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon', 'background');
                                        echo oxi_addons_adm_help_number_dtm('OxiAddonsAC-2-CI-FS', $styledata[129], $styledata[130], $styledata[131], '1', 'Icon Size', 'Set Your Closing Icon Font Size', 'true', '.oxi-addons-AC-' . $oxiid . '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-2-CI-C', $styledata[137], '', 'Icon Color', 'Set Your Closing Icon Color', 'false', '.oxi-addons-AC-' . $oxiid . '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon', 'color');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-2-CI-M', 161, $styledata, '1', 'padding', 'Set your Closing Icon Padding', 'true', '.oxi-addons-AC-' . $oxiid . '.oxi-addonsAC-wrapper-' . $oxiid . ' .oxi-addonsAC-' . $oxiid . ' .oxi-addonsAC-2-icon', 'padding');
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
                    <?php echo oxi_accordion_style_2_shortcode($style, $listdata, 'admin'); ?>
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
                    echo oxi_addons_adm_help_textbox('OxiAddons-AC-2-T', $listitemdata[2], 'Title', 'Set Your Title, Supported native Language', 'false');
                    echo oxi_addons_adm_help_model_rich_text_box('OxiAddons-AC-2-IN', $listitemdata[4], 'Info Text', 'Give Your Info text Here', 'false');
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
