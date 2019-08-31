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
    if (!wp_verify_nonce($nonce, 'OASection-nonce')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $data = 'oxi-addons-preview-BG |' . sanitize_text_field($_POST['oxi-addons-preview-BG']) . '|'
                . ' OASection-position |' . sanitize_text_field($_POST['OASection-position']) . '|'
                . ' OASection-Zindex |' . sanitize_text_field($_POST['OASection-Zindex']) . '|'
                . ' ||'
                . ' OASection-scrolling |' . sanitize_text_field($_POST['OASection-scrolling']) . '|'
                . ' OASection-color |' . sanitize_hex_color_no_hash($_POST['OASection-color']) . '|'
                . ' OASection-width |' . sanitize_text_field($_POST['OASection-width']) . '|'
                . '' . oxi_addons_adm_help_single_size('OASection-height') . ''
                . '||';
        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $oxiid));
    }
}
OxiDataAdminStyleNameChange();
$style = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $oxiid), ARRAY_A);
$styledata = explode('|', $style['css']);

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
                        <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-1">
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Divider Information
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_true_false('OASection-position', $styledata[3], 'Top', 'top', 'Bottom', 'bottom', 'Position', 'Set Your Section Divider Position');
                                        echo oxi_addons_adm_help_number('OASection-Zindex', $styledata[5], 1, 'Z-Index', 'set Z-Index value', '', '');
                                        echo oxi_addons_adm_help_true_false('OASection-scrolling', $styledata[9], 'Yes', 'yes', 'No', 'no', 'Scrolling', 'Set Your Section Divider Scrolling');
                                        echo OxiAddonsADMHelpNoJquery(
                                            array(
                                                array('OASection-Zindex','Z-Index'),  
                                            )
                                        );
                                        ?>
                                    </div>                                               
                                </div>
                            </div>
                            <div class="oxi-addons-col-6">
                                <div class="oxi-addons-content-div">
                                    <div class="oxi-head">
                                        Color & Size
                                    </div>
                                    <div class="oxi-addons-content-div-body">
                                        <?php
                                        echo oxi_addons_adm_help_MiniColor('OASection-color', '#' . $styledata[11], '', 'Color', 'Select Your Divider Color', '', '');
                                        echo oxi_addons_adm_help_number('OASection-width', $styledata[13], 1, 'Width', 'Set your Section Width based on percentise', '', '');
                                        echo oxi_addons_adm_help_number_dtm('OASection-height', $styledata[15], $styledata[16], $styledata[17], 1, 'Height', 'Your Divider Height', '', '');
                                        echo OxiAddonsADMHelpNoJquery(
                                            array(
                                                array('OASection-color','color'),  
                                                array('OASection-width','Width'),  
                                                array('OASection-height','Height'),  
                                            )
                                        );
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
                            <?php wp_nonce_field("OASection-nonce") ?>
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
                <div class="oxi-addons-preview-data" id="oxi-addons-preview-data" style="padding: 0 0;">
                    <div class="oxi-addons-demo-section-divider">
                        <?php
                        if ($styledata[3] == 'bottom') {
                            echo '<div class="oxi-addons-demo-frist-section" style="background-color:' . $styledata[1] . '">';
                            echo do_shortcode('[oxi_addons  id="' . $oxiid . '"]');
                            echo '</div>';
                            echo ' <div class="oxi-addons-demo-second-section" style="background-color:#' . $styledata[11] . '">';
                            echo '</div>';
                        } else {
                            echo '<div class="oxi-addons-demo-frist-section" style="background-color:#' . $styledata[11] . '">';
                            echo '</div>';
                            echo ' <div class="oxi-addons-demo-second-section" style="background-color:' . $styledata[1] . '">';
                            echo do_shortcode('[oxi_addons  id="' . $oxiid . '"]');
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
