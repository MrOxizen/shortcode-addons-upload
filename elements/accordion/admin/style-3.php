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
                . ' OxiAddonsAC-3-G-initial-open |' . sanitize_text_field($_POST['OxiAddonsAC-3-G-initial-open']) . '|'
                . ' OxiAddonsAC-3-G-opening-type |' . sanitize_text_field($_POST['OxiAddonsAC-3-G-opening-type']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-3-G-BR') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-3-G-P') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-3-G-M') . ''
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsAC-3-G-Shadow') . ''
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddonsAC-3-animation') . ''
                
                . '' . OxiAddonsBGImageSanitize('OxiAddonsAC-3-OA-BG') . ''
                . ' OxiAddonsAC-3-OA-C |' . sanitize_hex_color($_POST['OxiAddonsAC-3-OA-C']) . '|'
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsAC-3-OA-B') . ''
                . ' OxiAddonsAC-3-OA-BC |' . sanitize_hex_color($_POST['OxiAddonsAC-3-OA-BC']) . '|'
                . '' . OxiAddonsBGImageSanitize('OxiAddonsAC-3-CA-BG') . ''
                . ' OxiAddonsAC-3-CA-C |' . sanitize_hex_color($_POST['OxiAddonsAC-3-CA-C']) . '|'
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsAC-3-CA-B') . ''
                . ' OxiAddonsAC-3-CA-BC |' . sanitize_hex_color($_POST['OxiAddonsAC-3-CA-BC']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddonsAC-3-AI-FS') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddonsAC-3-AI-M') . ''
                
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddons-AC-3-T-FS') . ''
                . ' ||'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddons-AC-3-T2') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-3-T-P') . ''
                . ' OxiAddons-AC-3-D-BC |' . sanitize_text_field($_POST['OxiAddons-AC-3-D-BC']) . '|'
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddons-AC-3-D-FS') . ''
                . ' OxiAddons-AC-3-D-C |' . sanitize_hex_color($_POST['OxiAddons-AC-3-D-C']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddons-AC-3-D2') . ''
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsAC-3-D-Shadow') . ''
                
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddonsAC-3-D-B') . ''
                . ' OxiAddonsAC-3-D-BC |' . sanitize_hex_color($_POST['OxiAddonsAC-3-D-BC']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-3-D-BR') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-3-D-P') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddons-AC-3-D-M') . ''
                
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
        $data = ' ||#||OxiAddons-AC-I ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['OxiAddons-AC-I']) . '||#||'
                . 'OxiAddons-AC-T ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddons-AC-T']) . '||#|| '
                . ' OxiAddons-AC-IN ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddons-AC-IN']) . '||#|| ';
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
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-3">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Initial Opening
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsAdminInitialOpen('OxiAddonsAC-3-G-initial-open', $styledata[3], 'Initial Opening', 'Set Which Events You want to Open Initially', 'false');
                                        ?>
                                        <div class="form-group row">
                                            <label for="OxiAddonsAC-3-G-opening-type" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="" >Opening Type</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="OxiAddonsAC-3-G-opening-type" name="OxiAddonsAC-3-G-opening-type">
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
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-3-G-BR', 7, $styledata, '3', 'Border Radius', 'Set yor body Border Radius', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-3-G-P', 23, $styledata, '3', 'Padding', 'Set yor body Padding', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-3-G-M', 39, $styledata, '3', 'Margin', 'Set yor body Margin', 'true', '.oxi-addonsAC-T-' . $oxiid . '', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Description
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-3-D-BC', $styledata[137], 'rgba', 'Background', 'Set Your Description Color', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details', 'background');
                                        echo oxi_addons_adm_help_number_dtm('OxiAddons-AC-3-D-FS', $styledata[139], $styledata[140], $styledata[141], '1', 'Font Size', 'Set Your Description Font Size', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddons-AC-3-D-C', $styledata[143], '', 'Color', 'Set Your Description Color', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details', 'color');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddons-AC-3-D2', 145, $styledata, 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details');
                                        echo OxiAddonsADMhelpBoxShadow('OxiAddonsAC-3-D-Shadow', 151, $styledata, 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details');
                                        echo oxi_addons_adm_help_border('OxiAddonsAC-3-D-B', $styledata[157], $styledata[158], 'Border', 'Set your Description Border Size and Type', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-3-D-BC', $styledata[161], '', 'Border Color', 'Set Your Description Border Color', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details', 'border-color');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-3-D-BR', 163, $styledata, '3', 'Border Radius', 'Set your Description Padding', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details', 'border-radius');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-3-D-P', 179, $styledata, '3', 'Padding', 'Set your Description Padding', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-Content-details', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-3-D-M', 195, $styledata, '3', 'Margin', 'Set your Description Margin', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-content-' . $oxiid . '', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Box Shadow
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMhelpBoxShadow('OxiAddonsAC-3-G-Shadow', 55, $styledata, 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('OxiAddonsAC-3-animation', 61, $styledata, 'true', '.oxi-addonsAC-T-' . $oxiid . '');
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
                                        echo oxi_addons_adm_help_number_dtm('OxiAddons-AC-3-T-FS', $styledata[109], $styledata[110], $styledata[111], '1', 'Font Size', 'Set Your Title Font Size', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-title', 'font-size');
                                        echo OxiAddonsADMHelpFontSettings('OxiAddons-AC-3-T2', 115, $styledata, 'true', '.oxi-addons-AC-' . $oxiid . ' .oxi-addons-ac-H-' . $oxiid . ' .heading-data');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddons-AC-3-T-P', 121, $styledata, '3', 'Padding', 'Set your Title Padding', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-title', 'padding');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Opening Accordion
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMHelpBGImage('OxiAddonsAC-3-OA-BG', $styledata, 65, 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '.oxi-active', 'background');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-3-OA-C', $styledata[69], '', 'Color', 'Set Your Opening Accordion Icon and Font Color', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '.oxi-active', 'color');
                                        echo oxi_addons_adm_help_border('OxiAddonsAC-3-OA-B', $styledata[71], $styledata[72], 'Border', 'Set your Opening Accordion Border Size and Type', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '.oxi-active');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-3-OA-BC', $styledata[75], '', 'Border Color', 'Set Your Opening Accordion Border Color', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '.oxi-active', 'border-color');
                                        ?>
                                    </div>
                                     <div class="oxi-head">
                                        Closing Accordion
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo OxiAddonsADMHelpBGImage('OxiAddonsAC-3-CA-BG', $styledata, 77, 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '', 'background');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-3-CA-C', $styledata[81], '', 'Color', 'Set Your Closing Accordion Icon and Font Color', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '', 'color');
                                        echo oxi_addons_adm_help_border('OxiAddonsAC-3-CA-B', $styledata[83], $styledata[84], 'Border', 'Set your Closing Accordion Border Size and Type', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddonsAC-3-CA-BC', $styledata[87], '', 'Border Color', 'Set Your Closing Accordion  Border Color', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-heading-' . $oxiid . '', 'border-color');
                                        ?>
                                    </div>
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                       Icon
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiAddonsAC-3-AI-FS', $styledata[89], $styledata[90], $styledata[91], '1', 'Icon Size', 'Set Your Icon Size', 'false', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-icon', 'font-size');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddonsAC-3-AI-M', 93, $styledata, '3', 'Margin', 'Set your Icon Padding', 'true', '.oxi-addonsAC-T-' . $oxiid . ' .oxi-addonsAC-icon', 'padding');
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
                echo oxi_addons_list_rearrange('Accordion Rearrange', $listdata, 4, 'title');
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
                    <?php echo oxi_accordion_style_3_shortcode($style, $listdata, 'admin'); ?>
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
                    echo oxi_addons_adm_help_textbox('OxiAddons-AC-I', $listitemdata[2], 'Icon Class', 'Set Your Title, Supported native Language', 'false');
                    echo oxi_addons_adm_help_textbox('OxiAddons-AC-T', $listitemdata[4], 'Title', 'Set Your Title, Supported native Language', 'false');
                    echo oxi_addons_adm_help_model_rich_text_box('OxiAddons-AC-IN', $listitemdata[6], 'Info Text', 'Give Your Info text Here', 'false');
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
