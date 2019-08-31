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
    if (!wp_verify_nonce($nonce, 'OxiAddDropCaps-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddDropCaps-padding') . ''
                . '' . oxi_addons_adm_help_padding_margin_senitize('OxiAddDropCaps-margin') . ''
                . '' . oxi_addons_adm_help_animation_senitize('OxiAddDropCaps-animation') . ''
                . '' . oxi_addons_adm_help_single_size('OxiAddDropCaps-font-size') . ''
                . ' OxiAddDropCaps-color |' . sanitize_hex_color($_POST['OxiAddDropCaps-color']) . '|'
                . ' OxiAddDropCaps-family |' . sanitize_text_field($_POST['OxiAddDropCaps-family']) . '|'
                . ' OxiAddDropCaps-font-weight |' . sanitize_text_field($_POST['OxiAddDropCaps-font-weight']) . '|'
                . ' OxiAddDropCaps-font-style |' . sanitize_text_field($_POST['OxiAddDropCaps-font-style']) . '|'
                . '||#||  ||#||'
                . 'OxiAddDropCaps-text ||#||' . OxiAddonsADMHelpTextSenitize($_POST['OxiAddDropCaps-text']) . '||#||'
                . '||#||  ||#||'
                . 'OxiAddDropCaps-position ||#||' . sanitize_text_field($_POST['OxiAddDropCaps-position']) . '||#||'
                . '|';
        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
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
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-1">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Drop Caps Information
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_textbox('OxiAddDropCaps-text', $stylefiles[3], 'Text', 'Write your Drop Caps Text Here','false','.oxi-addons-drop-caps-' . $oxiid . '');
                                        echo oxi_addons_adm_help_true_false('OxiAddDropCaps-position', $stylefiles[7], 'Left', 'left', 'Right', 'right', 'Position', 'Set Dorp Caps Position ','false');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddDropCaps-padding', 3, $styledata, 1, 'Padding', 'Set Your Button Padding Top Bottom and Left ', 'true', '.oxi-addons-drop-caps-' . $oxiid . '', 'padding');
                                        echo oxi_addons_adm_help_padding_margin('OxiAddDropCaps-margin', 19, $styledata, 1, 'Margin', 'Set Your Button  Margin Top Bottom and Left Right', 'true', '.oxi-addons-drop-caps-' . $oxiid . '', 'margin');
                                        ?>
                                    </div>                                               
                                </div>
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Animation
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_Animation('OxiAddDropCaps-animation', 35, $styledata, 'true', '.oxi-addons-drop-caps-' . $oxiid . '');
                                        ?>
                                    </div>
                                </div>


                            </div>
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        General
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_number_dtm('OxiAddDropCaps-font-size', $styledata[39], $styledata[40], $styledata[41], 1, 'Font Size', 'Your Drop Caps Font Size', 'false', '.oxi-addons-drop-caps-' . $oxiid . '', 'font-size');
                                        echo oxi_addons_adm_help_MiniColor('OxiAddDropCaps-color', $styledata[43], '', 'Color', 'Select Your Drop Caps Color', 'false', '.oxi-addons-drop-caps-' . $oxiid . '', 'color');
                                        echo oxi_addons_adm_help_Font_Family('OxiAddDropCaps-family', $styledata[45], 'Font Family', 'Select Your Font Family', 'true', '.oxi-addons-drop-caps-' . $oxiid . '');
                                        echo oxi_addons_adm_help_Font_Weight('OxiAddDropCaps-font-weight', $styledata[47], 'Font Weight', 'Select Your Font Wight', 'true', '.oxi-addons-drop-caps-' . $oxiid . '');
                                        echo oxi_addons_adm_help_Font_Style('OxiAddDropCaps-font-style', $styledata[49], 'Font Style', 'Select Your Font Style', 'true', '.oxi-addons-drop-caps-' . $oxiid . '');
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
                            <?php wp_nonce_field("OxiAddDropCaps-nonce") ?>
                        </div>
                    </div> 
                </form>

            </div>
            <div class="oxi-addons-style-right">
                <?php
                echo oxi_addons_shortcode_namechange($oxiid, $style['name']);
                echo oxi_addons_shortcode_call($oxitype, $oxiid);
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
