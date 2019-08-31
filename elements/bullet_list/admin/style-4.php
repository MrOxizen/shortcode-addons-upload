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
$listitemdata = array("", "", "", "", "", "", "", "");
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'OxiAddInfoBanner-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|' 
                . ' OxiAddInfoBanner-G-PS |' . sanitize_text_field($_POST['OxiAddInfoBanner-G-PS']) . '|' 
                . '' . OxiAddonsBGImageSanitize('OxiAddInfoBanner-G-BG') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-G-P') . '' 
                . '||' 
                . '||||'
                . '  ||'
				. '||||||||||||||||'
                . '||||'
                . '||'
                . '||||'
                . '||'
                . '||||||||||||||||'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-CB-padding') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-CB-margin') . '' 
                . '||||||'
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddInfoBanner-animation') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddInfoBanner-icon-size') . ''
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddInfoBanner-icon-width') . ''
                . ' OxiAddInfoBanner-icon-color |' . sanitize_hex_color($_POST['OxiAddInfoBanner-icon-color']) . '|' 
                . ' OxiAddInfoBanner-icon-Bg |' . sanitize_text_field($_POST['OxiAddInfoBanner-icon-Bg']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-icon-radius') . ''
                . ' OxiAddInfoBanner-icon-position |' . sanitize_text_field($_POST['OxiAddInfoBanner-icon-position']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-icon-padding') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-icon-margin') . ''
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddInfoBanner-icon-box-shadow') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddInfoBanner-heading-size') . ''
                . ' OxiAddInfoBanner-heading-color |' . sanitize_hex_color($_POST['OxiAddInfoBanner-heading-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddInfoBanner-heading') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-heading-padding') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddInfoBanner-content-size') . ''
                . ' OxiAddInfoBanner-content-color |' . sanitize_hex_color($_POST['OxiAddInfoBanner-content-color']) . '|'
                . '' . OxiAddonsADMHelpFontSettingsSanitize('OxiAddInfoBanner-content') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddInfoBanner-content-padding') . ''   
                . '' . oxi_addons_adm_help_number_dtm_senitize('OxiAddInfoBanner-icon-height') . ''
                . '' . OxiAddonsADMHelpBorderSizeType('OxiAddInfoBanner-icon-B') . ''
                . ' OxiAddInfoBanner-icon-BC |' . sanitize_hex_color($_POST['OxiAddInfoBanner-icon-BC']) . '|'
                . ' OxiAddonsBanner-icon-HTC |' . sanitize_hex_color($_POST['OxiAddonsBanner-icon-HTC']) . '|'
                . ' OxiAddonsBanner-icon-HBG |' . sanitize_text_field($_POST['OxiAddonsBanner-icon-HBG']) . '|'
                . ' OxiAddonsBanner-icon-HBC |' . sanitize_hex_color($_POST['OxiAddonsBanner-icon-HBC']) . '|'
                . '' . OxiAddonsADMBoxShadowSanitize('OxiAddonsBanner-icon-HBS') . ''
                
                . '' . oxi_addons_adm_help_single_size('OxiAddInfoBanner-max-width') . ''
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
        $oxilistid = (int) $_POST['oxilistid'];
        $data = ' OxiAddonsInfoBanner-H-TB ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsInfoBanner-H-TB']) . '||#||' 
                . 'OxiAddonsInfoBanner-SD-TA ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddonsInfoBanner-SD-TA']) . '||#||' 
                . 'OxiAddInfoBanner-i-class ||#||' . OxiAddonsAdminFontAwesomeSenitize($_POST['OxiAddInfoBanner-i-class']) . '||#||' 
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
?>
<div class="wrap">    
    <?php echo OxiAddonsAdmAdminMenu($oxitype, '','',''); ?>
    <div class="oxi-addons-wrapper">
        <div class="oxi-addons-row">
            <div class="oxi-addons-style-20-spacer"></div>
            <div class="oxi-addons-style-left">
                <form method="post" id="oxi-addons-form-submit">
                    <div class="oxi-addons-style-settings">
                        
                       
                            <div class="oxi-addons-tabs-content-tabs" id="oxi-tabs-id-1">
                                <div class="oxi-addons-col-6">
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            General Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php 
                                            echo oxi_addons_adm_help_true_false('OxiAddInfoBanner-G-PS',  $styledata[3], 'Left', 'left', 'Right', 'right', 'Icon Position', 'Set Your Icon Position', 'false');
                                             echo oxi_addons_adm_help_number_dtm('OxiAddInfoBanner-max-width', $styledata[265], $styledata[266], $styledata[267], 1, 'Max Width', 'Set Your Max Width', 'false', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-icon-last', 'max-width');
                                           echo OxiAddonsADMHelpBGImage('OxiAddInfoBanner-G-BG', $styledata, 5, 'true',' .oxi-addons-main-wrapper-' . $oxiid . '','background');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-G-P', 9, $styledata, 1, 'Padding', 'Set Banner  padding', 'true',' .oxi-addons-main-wrapper-' . $oxiid . '','padding');
                                            echo OxiAddonsADMHelpNoJquery(
                                                array(
                                                    array('OxiAddInfoBanner-G-PS','Position Reverse'), 
                                                )
                                            );
                                            ?>
                                        </div> 
                                    </div>
                                  
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Content Box Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                              echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-CB-padding', 77, $styledata, 1, 'Padding', 'Set Your Content Boxes Padding', 'false', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main', 'padding');
                                             echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-CB-margin', 93, $styledata, 1, 'Margin', 'Set Your Content Boxes  Margin','true', '.oxi-addons-content-boxes-' . $oxiid . '', 'padding');
                                            ?>
                                        </div> 
                                    </div> 
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Animation
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_Animation('OxiAddInfoBanner-animation', 115, $styledata, 'true', '.oxi-addons-content-boxes-' . $oxiid . '');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Heading Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfoBanner-heading-size', $styledata[187], $styledata[188], $styledata[189], 1, 'Font Size', 'Set Your Heading Font Size', 'false', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfoBanner-heading-color', $styledata[191], '', 'Color', 'Set Your Heading Color', 'false', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddInfoBanner-heading', 193, $styledata, 'true', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-heading-padding', 199, $styledata, 1, 'Padding', 'Set Your Heading Padding', 'true', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="oxi-addons-col-6">  
                                
                                <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Content Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfoBanner-content-size', $styledata[215], $styledata[216], $styledata[217], 1, 'Font Size', 'Set Your Content Font Size', 'false', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content', 'font-size');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfoBanner-content-color', $styledata[219], '', 'Color', 'Set Your Content Color', 'false', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content', 'color');
                                            echo OxiAddonsADMHelpFontSettings('OxiAddInfoBanner-content', 221, $styledata, 'true', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-content-padding', 227, $styledata, 1, 'Padding', 'Set Your Content Padding', 'true', '.oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content', 'padding');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="oxi-addons-content-div">
                                        <div class="oxi-head">
                                            Icon Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfoBanner-icon-size', $styledata[119], $styledata[120], $styledata[121], 1, 'Font Size', 'Set Your Icon Font Size', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'font-size');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfoBanner-icon-width', $styledata[123], $styledata[124], $styledata[125], 1, 'Width', 'Set Your Icon Width', 'true');
                                            echo oxi_addons_adm_help_number_dtm('OxiAddInfoBanner-icon-height', $styledata[243], $styledata[244], $styledata[125], 1, 'Height', 'Set Your Icon  Height', 'true');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfoBanner-icon-color', $styledata[127], '', 'Color', 'Set Your Icon Color', 'false', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfoBanner-icon-Bg', $styledata[129], 'rgba', 'Background Color', 'Set Your Icon Background Color', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'background');
                                            echo oxi_addons_adm_help_border('OxiAddInfoBanner-icon-B', $styledata[247], $styledata[248], 'Border', 'Set Your Icon Border Size and Type', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons','border');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddInfoBanner-icon-BC', $styledata[251], '', 'Border Color', 'Set your Icon Border color', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'border-color');
                                             echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-icon-radius', 131, $styledata, 1, 'Border Radius', 'Set Your Icon Border Radius', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'border-radius');
                                            echo oxi_addons_adm_help_true_false('OxiAddInfoBanner-icon-position', $styledata[147], 'Left', 'left', 'Right', 'right', 'Icon Position', 'Set Image and content position of banner', 'false');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-icon-padding', 149, $styledata, 1, 'Padding', 'Set Your Icon Padding', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'padding');
                                            echo oxi_addons_adm_help_padding_margin('OxiAddInfoBanner-icon-margin', 165, $styledata, 1, 'Margin', 'Set Your Icon Padding', 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons', 'margin');
                                            echo OxiAddonsADMhelpBoxShadow('OxiAddInfoBanner-icon-box-shadow', 181, $styledata, 'true', '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons');
                                            echo OxiAddonsADMHelpNoJquery(
                                                array(
                                                    array('OxiAddInfoBanner-icon-width','width'), 
                                                    array('OxiAddInfoBanner-icon-height','height'), 
                                                    array('OxiAddInfoBanner-icon-position','Icon Position'), 
                                                )
                                            );
                                            ?>
                                        </div>
                                        <div class="oxi-head">
                                                Icon hover Settings
                                        </div>
                                        <div class="oxi-addons-content-div-body">
                                            <?php
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsBanner-icon-HTC', $styledata[253], '', 'Color', 'Set Your Icon  Hover Text color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link:hover', 'color');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsBanner-icon-HBG', $styledata[255], 'rgba', 'Background Color', 'Set Your Icon  Hover Background color', 'false', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link:hover', 'background');
                                            echo oxi_addons_adm_help_MiniColor('OxiAddonsBanner-icon-HBC', $styledata[257], '', 'Border Color', 'Set Your Icon  Hover Border color', 'true', '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link:hover', 'border-color');
                                            ?>
                                        </div>
                                            <div class="oxi-head">
                                                Icon Hover Box Shadow
                                            </div>
                                            <div class="oxi-addons-content-div-body">
                                                <?php
                                                echo OxiAddonsADMhelpBoxShadow('OxiAddonsBanner-icon-HBS', 259, $styledata,'true','.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-content-wrapper .oxi-addons-button .oxi-addons-button-link:hover');
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
                        <?php echo oxi_addons_adm_help_preview_color($styledata[1]); ?>
                    </div>
                </div>
                <div class="oxi-addons-preview-data" id="oxi-addons-preview-data">
                    <?php echo oxi_bullet_list_style_4_shortcode($style, $listdata, 'admin') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="oxi-addons-list-data-modal" >
    <form method="post">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">                    
                    <h4 class="modal-title">Data Settings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php
                    echo oxi_addons_adm_help_textbox('OxiAddonsInfoBanner-H-TB', $listitemdata[1], 'Heading Text', 'Write Bullet List Heading', 'false');
                    echo oxi_addons_adm_help_form_textarea('OxiAddonsInfoBanner-SD-TA', $listitemdata[3],'Short Details', 'Write Your Bullet List Short Details','false'); 
                    echo oxi_addons_adm_help_textbox('OxiAddInfoBanner-i-class', $listitemdata[5], 'Icon Class', 'Write Icon Class name Or Full Icon Tag copy and paste ');
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









