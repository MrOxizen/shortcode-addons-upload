<?php
if (!defined('ABSPATH')) {
    exit;
}

$oxitype = sanitize_text_field($_GET['oxitype']);
$oxiimpport = '';
if (!empty($_GET['oxiimpport'])) {
    $oxiimpport = sanitize_text_field($_GET['oxiimpport']);
}

oxi_addons_user_capabilities();
OxiDataAdminImport($oxitype);
global $wpdb;
$table_name = $wpdb->prefix . 'oxi_div_style';
$table_import = $wpdb->prefix . 'oxi_div_import';
$importstyle = $wpdb->get_results("SELECT * FROM $table_import WHERE type = '$oxitype' ORDER BY id DESC", ARRAY_A);
$freeimport = array('style-1');
if (count($importstyle) < 1) {
    foreach ($freeimport as $value) {
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_import} (type, name) VALUES (%s, %s )", array($oxitype, $value)));
    }
    $js = 'location.reload();';
    wp_add_inline_script('oxi-addons-vendor', $js);
}
$file = array(
    array(
        'style 1OXIIMPORTdrop_capsOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|OxiAddDropCaps-padding-top |5|5|5|OxiAddDropCaps-padding-bottom |5|5|5|OxiAddDropCaps-padding-left |5|5|5|OxiAddDropCaps-padding-right |5|5|5|OxiAddDropCaps-margin-top |2|2|2|OxiAddDropCaps-margin-bottom |2|2|2|OxiAddDropCaps-margin-left |2|2|2|OxiAddDropCaps-margin-right |2|2|2|OxiAddDropCaps-animation||.5:false:false:500:10:0.2|.5//|OxiAddDropCaps-font-size|78|70|65| OxiAddDropCaps-color |#db00c9| OxiAddDropCaps-family |Roboto| OxiAddDropCaps-font-weight |600| OxiAddDropCaps-font-style |normal|||#|| ||#||OxiAddDropCaps-text ||#||A||#||||#|| ||#||OxiAddDropCaps-position ||#||left||#|||',
        'lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ultricies neque, sed ultricies lorem. Donec vel sapien eu leo vulputate egestas vel ut eros. In nec nisi nibh. Mauris tincidunt commodo convallis. Aliquam vitae odio convallis nisi fermentum rhoncus. Cras maximus accumsan lorem, eu feugiat augue mollis sit amet.'
    ),
    array(
        'style 2OXIIMPORTdrop_capsOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|OxiAddDropCaps-padding-top |5|5|5|OxiAddDropCaps-padding-bottom |10|5|5|OxiAddDropCaps-padding-left |10|5|5|OxiAddDropCaps-padding-right |10|5|5|OxiAddDropCaps-margin-top |2|2|2|OxiAddDropCaps-margin-bottom |2|2|2|OxiAddDropCaps-margin-left |5|2|2|OxiAddDropCaps-margin-right |5|2|2|OxiAddDropCaps-animation||.5:false:false:500:10:0.2|.5//|OxiAddDropCaps-font-size|60|60|55| OxiAddDropCaps-color |#ffffff| OxiAddDropCaps-family |Oxygen| OxiAddDropCaps-font-weight |600| OxiAddDropCaps-font-style |normal| OxiAddDropCaps-bg-color |rgba(178, 0, 184, 1)| OxiAddDropCaps-border-radius |50|||#|| ||#||OxiAddDropCaps-text ||#||A||#|| ||#|| ||#||OxiAddDropCaps-position ||#||left||#|||',
        'donec quis tellus tempor, consectetur velit et, sagittis est. Fusce elementum ornare sollicitudin. In hac habitasse platea dictumst. Pellentesque sit amet lorem tempor ipsum sodales tincidunt. Vestibulum venenatis in nisi nec tempor. Cras vel nibh blandit, consectetur sapien sit amet, pellentesque ex. Fusce elementum ornare sollicitudin.'
    ),
    array(
        'style 3OXIIMPORTdrop_capsOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|OxiAddDropCaps-padding-top |5|5|5|OxiAddDropCaps-padding-bottom |10|5|5|OxiAddDropCaps-padding-left |10|5|5|OxiAddDropCaps-padding-right |10|5|5|OxiAddDropCaps-margin-top |2|2|2|OxiAddDropCaps-margin-bottom |2|2|2|OxiAddDropCaps-margin-left |5|2|2|OxiAddDropCaps-margin-right |5|2|2|OxiAddDropCaps-animation||0.5:false:false:500:10:0.2|0.5//|OxiAddDropCaps-font-size|60|60|55| OxiAddDropCaps-color |#9b00d4| OxiAddDropCaps-family |Oxygen| OxiAddDropCaps-font-weight |600| OxiAddDropCaps-font-style |normal| || OxiAddDropCaps-border-radius |0|OxiAddDropCaps-border-top |2|2|2|OxiAddDropCaps-border-bottom |2|2|2|OxiAddDropCaps-border-left |2|2|2|OxiAddDropCaps-border-right |2|2|2| OxiAddDropCaps-border||double|#9b00d4|||#|| ||#||OxiAddDropCaps-text ||#||A||#||||#|| ||#||OxiAddDropCaps-position ||#||left||#|||',
        'sed nec dolor commodo, pulvinar tortor et, facilisis ex. Suspendisse fringilla justo et eros egestas, eget molestie mi pharetra. Nunc efficitur euismod leo a tempor. Cras eu lobortis nunc. Sed luctus, leo sed lobortis feugiat, felis nisi pharetra tellus, nec pretium diam ipsum a leo. Nam ultrices orci sed lacinia vestibulum.'
    ),
    array(
        'Style 4 OXIIMPORTdrop_capsOXIIMPORTstyle-4OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|OxiAddDropCaps-padding-top |20|20|20|OxiAddDropCaps-padding-bottom |25|25|25|OxiAddDropCaps-padding-left |20|20|20|OxiAddDropCaps-padding-right |20|20|20|OxiAddDropCaps-margin-top |4|4|4|OxiAddDropCaps-margin-bottom |4|4|4|OxiAddDropCaps-margin-left |4|4|4|OxiAddDropCaps-margin-right |4|4|4|OxiAddDropCaps-animation||0.5:false:false:500:10:0.2|0.5//|OxiAddDropCaps-font-size|59|59|59| OxiAddDropCaps-color |#000000| OxiAddDropCaps-family |Oxygen| OxiAddDropCaps-font-weight |600| OxiAddDropCaps-font-style |normal| || OxiAddDropCaps-border-radius |0|OxiAddDropCaps-border-top |0|0|0|OxiAddDropCaps-border-bottom |0|0|0|OxiAddDropCaps-border-left |0|0|0|OxiAddDropCaps-border-right |0|0|0| OxiAddDropCaps-border||solid|#ffffff|||||oxi-addons-bg-image-overlay |rgba(186,23,23,0.00)|||#|| ||#||OxiAddDropCaps-text ||#||A||#|| ||#|| ||#||OxiAddDropCaps-position ||#||left||#||OxiAddons-drop-caps-IMG ||#||https://www.oxilab.org/wp-content/uploads/2019/03/063f69c09a51aa1dd340767887214d14-caligraphy-ornaments-frame-by-vexels.png||#|||',
        'sed nec dolor commodo, pulvinar tortor et, facilisis ex. Suspendisse fringilla justo et eros egestas, eget molestie mi pharetra. Nunc efficitur euismod leo a tempor. Cras eu lobortis nunc. Sed luctus, leo sed lobortis feugiat, felis nisi pharetra tellus, nec pretium diam ipsum a leo. Nam ultrices orci sed lacinia vestibulum.Sed nec dolor commodo, pulvinar tortor et, facilisis ex.'
    )
);
if ($oxiimpport == 'import') {
    ?>
    <div class="wrap">
        <?php
        echo OxiAddonsAdmAdminMenu($oxitype, '', '', 'yes');
        echo '<div class="oxi-addons-wrapper">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-view-more-demo" style=" padding-top: 35px; padding-bottom: 35px; ">
                        <div class="oxi-addons-view-more-demo-data" >
                            <div class="oxi-addons-view-more-demo-icon">
                                <i class="fas fa-bullhorn oxi-icons"></i>
                            </div>
                            <div class="oxi-addons-view-more-demo-text">
                                <div class="oxi-addons-view-more-demo-heading">
                                    More Layouts
                                </div>
                                <div class="oxi-addons-view-more-demo-content">
                                    Thank you for using Shortcode Addons. As limitation of viewing Layouts or Design we added some layouts. Kindly check more  <a target="_blank" href="https://www.oxilab.org/shortcode-addons-features/' . str_replace('_', '-', $oxitype) . '" >' . oxi_addons_shortcode_name_converter($oxitype) . '</a> design from Oxilab.org. Copy <strong>export</strong> code and <strong>import</strong> it, get your preferable layouts.
                                </div>
                            </div>
                            <div class="oxi-addons-view-more-demo-button">
                                <a target="_blank" class="oxi-addons-more-layouts" href="https://www.oxilab.org/shortcode-addons-features/' . str_replace('_', '-', $oxitype) . '" >View layouts</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>';
        ?>

        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-row ">
                <?php
                foreach ($file as $value) {
                    $expludedata = explode('OXIIMPORT', $value[0]);
                    $datatrue = '';
                    foreach ($importstyle as $vals) {
                        if ($vals['name'] == $expludedata[2]) {
                            $datatrue = 'true';
                        }
                    }
                    if ($datatrue != 'true') {
                        $number = rand();
                        echo '<div class="oxi-addons-col-1"><div class="oxi-addons-style-preview"><div class="oxi-addons-style-preview-top oxi-addons-center">';
                        echo OxiDataAdminShortcode($oxitype, $value[0]);
                        echo $value[1];
                        echo '</div>
                         <div class="oxi-addons-style-preview-bottom">
                            <div class="oxi-addons-style-preview-bottom-left">';
                        echo OxiDataAdminShortcodeName($value[0]);
                        echo '       </div>';
                        echo '  <div class="oxi-addons-style-preview-bottom-right">
                                    <form method="post" style=" display: inline-block; ">
                                        ' . wp_nonce_field("oxi-addons-$expludedata[1]-style-active-nonce") . '
                                        <input type="hidden" name="oxiactivestyle" value="' . $expludedata[2] . '">
                                        <button class="btn btn-success" title="Active"  type="submit" value="Active" name="addonsstyleactive">Import Style</button>  
                                    </form> 
                                </div>';
                        echo '            </div>
                   </div>
                </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
} else {
    $data = $wpdb->get_results("SELECT * FROM $table_name WHERE type = '$oxitype' ORDER BY id DESC", ARRAY_A);
    ?>
    <div class="wrap">
        <?php echo OxiAddonsAdmAdminMenu($oxitype, '', '', 'yes'); ?>
        <?php echo OxiAddonsAdmAdminShortcodeTable($data, $oxitype); ?>
        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-row">
                <?php
                foreach ($file as $value) {
                    $expludedata = explode('OXIIMPORT', $value[0]);
                    $datatrue = '';
                    foreach ($importstyle as $vals) {
                        if ($vals['name'] == $expludedata[2]) {
                            $datatrue = 'true';
                        }
                    }
                    if ($datatrue == 'true') {
                        $number = rand();
                        echo '<div class="oxi-addons-col-6" id="' . $expludedata[2] . '"><div class="oxi-addons-style-preview"><div class="oxi-addons-style-preview-top">';
                        echo OxiDataAdminShortcode($oxitype, $value[0]);
                        echo $value[1];
                        echo '</div>
                         <div class="oxi-addons-style-preview-bottom">
                            <div class="oxi-addons-style-preview-bottom-left">';
                        echo OxiDataAdminShortcodeName($value[0]);
                        echo '       </div>';
                        echo OxiDataAdminShortcodeControl($number, $value[0], $freeimport);
                        echo '            </div>
                   </div>
                </div>';
                    }
                }
                ?>
                <div class="oxi-addons-col-1 oxi-import">
                    <div class="oxi-addons-style-preview">
                        <div class="oxilab-admin-style-preview-top">
                            <a href="<?php echo admin_url("admin.php?page=oxi-addons&oxitype=$oxitype&oxiimpport=import"); ?>">
                                <div class="oxilab-admin-add-new-item">
                                    <span>
                                        <i class="fas fa-plus-circle oxi-icons"></i>
                                        Add More Templates
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    echo OxiDataAdminShortcodeModal($oxitype);
}
