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
    'Style 1 OXIIMPORTcount_downOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)| OxiADDCD-date |2020-10-17| OxiADDCD-time |04:30|OxiADDCD-padding-top |0|0|0|OxiADDCD-padding-bottom |0|0|0|OxiADDCD-padding-left |0|0|0|OxiADDCD-padding-right |0|0|0|||||||||||||||||||||||||||||||||||||||||OxiAddCD-animation||2:false:false:500:10:0.2|0//infinite|OxiADDCD-N-font-size |50|35|30| OxiADDCD-N-color |#db3328|OxiAddCD-N-family |Open Sans|600|OxiAddCD-N-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCD-N-padding-top |5|5|5|OxiAddCD-N-padding-bottom |5|5|5|OxiAddCD-N-padding-left |5|5|5|OxiAddCD-N-padding-right |5|5|5|||||||||||||||||||||||||||||||||||||||||OxiAddCD-T-font-size |20|18|16| OxiADDCD-T-color |#545454|OxiAddCD-T-family |Open Sans|600|OxiAddCD-T-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCD-T-padding-top |5|5|5|OxiAddCD-T-padding-bottom |5|5|5|OxiAddCD-T-padding-left |5|5|5|OxiAddCD-T-padding-right |5|5|5||||||||||||||||||||||||||||||||||||||||| OxiADDCD-days || OxiADDCD-D-N-color |#f29993| OxiADDCD-D-T-color |#545454||||||||||||||||||||||||||||||||||||||||| OxiADDCD-hours || OxiADDCD-H-N-color |#f29993| OxiADDCD-H-T-color |#545454||||||||||||||||||||||||||||||||||||||||| OxiADDCD-minutes || OxiADDCD-M-N-color |#f29993| OxiADDCD-M-T-color |#545454||||||||||||||||||||||||||||||||||||||||| OxiADDCD-seconds || OxiADDCD-S-N-color |#f29993| OxiADDCD-S-T-color |#545454|||||||||||||||||||||||||||||||||||||||||||#|| ||#||OxiADDCD-days-text||#||Days||#||OxiADDCD-hours-text||#||Hours||#||OxiADDCD-minutes-text||#||Minutes||#||OxiADDCD-seconds-text||#||Second||#|||',
    'Style 2 OXIIMPORTcount_downOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG |rgba(255,255,255,1.00)| OxiADDCD-date |2022-12-24| OxiADDCD-time |04:30|OxiADDCD-padding-top |0|0|0|OxiADDCD-padding-bottom |0|0|0|OxiADDCD-padding-left |0|0|0|OxiADDCD-padding-right |0|0|0|||||||||||||||||||||||||||||||||||||||||OxiAddCD-animation||2:false:false:500:10:0.2|0//infinite|OxiADDCD-N-font-size |40|30|27| OxiADDCD-N-color |#212121|OxiAddCD-N-family |Oswald|600|OxiAddCD-N-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCD-N-margin-top |10|10|5|OxiAddCD-N-margin-bottom |10|10|5|OxiAddCD-N-margin-left |10|10|5|OxiAddCD-N-margin-right |10|10|5|OxiADDCD-N-width |135|110|80|OxiADDCD-N-radius |0|||OxiADDCD-N-bg|rgba(255,223,0,1.00)|||OxiAddCD-N-border-top |0|0|0|OxiAddCD-N-border-bottom |0|0|0|OxiAddCD-N-border-left |0|0|0|OxiAddCD-N-border-right |0|0|0|OxiAddCD-N-border |dotted|||||||||||OxiAddCD-T-font-size |20|18|14| OxiADDCD-T-color |#212121|OxiAddCD-T-family |Open Sans|600|OxiAddCD-T-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCD-T-padding-top |10|10|5|OxiAddCD-T-padding-bottom |10|10|5|OxiAddCD-T-padding-left |10|10|5|OxiAddCD-T-padding-right |10|10|5||||||||||||||||||||||||||||||||||||||||| OxiADDCD-days || OxiADDCD-D-N-color |#ffffff| OxiADDCD-D-T-color |#c75910|OxiADDCD-D-N-bg|rgba(199, 89, 16, 1)|||OxiAddCD-D-N-border |dotted|#ffffff|||||||||||||||||||||||||||||||||| OxiADDCD-hours || OxiADDCD-H-N-color |#ffffff| OxiADDCD-H-T-color |#859900|OxiADDCD-H-N-bg|rgba(133, 153, 0, 1)|||OxiAddCD-H-N-border |dotted|#b53131|||||||||||||||||||||||||||||||||| OxiADDCD-minutes || OxiADDCD-M-N-color |#ffffff| OxiADDCD-M-T-color |#e62055|OxiADDCD-M-N-bg|rgba(181, 27, 89, 1)|||OxiAddCD-M-N-border |dotted||||||||||||||||||||||||||||||||||| OxiADDCD-seconds || OxiADDCD-S-N-color |#ffffff| OxiADDCD-S-T-color |#1a8eb5|OxiADDCD-S-N-bg|rgba(181, 27, 89, 1)|||OxiAddCD-S-N-border |dotted|||||||||||||||||||||||||||||||||||||#|| ||#||OxiADDCD-days-text||#||Days||#||OxiADDCD-hours-text||#||Hours||#||OxiADDCD-minutes-text||#||Minutes||#||OxiADDCD-seconds-text||#||Second||#|||',
    'Style 3 OXIIMPORTcount_downOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG |rgba(20,20,20,1.00)| OxiADDCD-date |2019-10-24| OxiADDCD-time |04:30|OxiADDCD-padding-top |5|5|5|OxiADDCD-padding-bottom |5|5|5|OxiADDCD-padding-left |5|5|5|OxiADDCD-padding-right |5|5|5|OxiADDCD-margin-top |0|0|0|OxiADDCD-margin-bottom |0|0|0|OxiADDCD-margin-left |0|0|0|OxiADDCD-margin-right |0|0|0|||||||||||||||||||||||||OxiAddCD-animation||2:false:false:500:10:0.2|0//infinite|OxiADDCD-N-font-size |37|34|30| OxiADDCD-N-color |#292929|OxiAddCD-N-family |Francois+One|700|OxiAddCD-N-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCD-N-padding-top |40|20|10|OxiAddCD-N-padding-bottom |0|20|10|OxiAddCD-N-padding-left |10|20|10|OxiAddCD-N-padding-right |10|20|10|OxiADDCD-width |170|150|100|OxiADDCD-radius |100|||OxiADDCD-bg|linear-gradient(135deg, rgba(241,167,241,1.00) 0%,rgba(250,208,196,1.00) 97%)|https://www.oxilab.org/wp-content/uploads/2018/10/BackGround.png||OxiAddCD-border-top |0|0|0|OxiAddCD-border-bottom |0|0|0|OxiAddCD-border-left |0|0|0|OxiAddCD-border-right |0|0|0|OxiAddCD-border |solid|#691bbd||||||||||OxiAddCD-T-font-size |20|18|16| OxiADDCD-T-color |#292929|OxiAddCD-T-family |Open Sans|600|OxiAddCD-T-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCD-T-padding-top |15|10|5|OxiAddCD-T-padding-bottom |10|10|5|OxiAddCD-T-padding-left |10|10|5|OxiAddCD-T-padding-right |10|10|5||||||||||||||||||||||||||||||||||||||||| OxiADDCD-days || OxiADDCD-D-N-color |#ffffff| OxiADDCD-D-T-color |#c70067|OxiADDCD-D-N-bg|rgba(66, 59, 62, 1)|||OxiAddCD-D-N-border |solid|#bd6f6f|||||||||||||||||||||||||||||||||| OxiADDCD-hours || OxiADDCD-H-N-color |#ffffff| OxiADDCD-H-T-color |#c7005d|OxiADDCD-H-N-bg|rgba(0, 199, 186, 1)|||OxiAddCD-H-N-border |dotted|#b53131|||||||||||||||||||||||||||||||||| OxiADDCD-minutes || OxiADDCD-M-N-color |#ffffff| OxiADDCD-M-T-color |#07c700|OxiADDCD-M-N-bg|rgba(23, 0, 199, 0)|https://www.oxilab.org/wp-content/uploads/2018/10/BackGround.png||OxiAddCD-M-N-border |solid|#691bbd|||||||||||||||||||||||||||||||||| OxiADDCD-seconds || OxiADDCD-S-N-color |#ffffff| OxiADDCD-S-T-color |#c700a6|OxiADDCD-S-N-bg|rgba(23, 0, 199, 0)|https://www.oxilab.org/wp-content/uploads/2018/10/BackGround.png||OxiAddCD-S-N-border |solid|#691bbd||||||||||||||||||||||||||||||||||||#|| ||#||OxiADDCD-days-text||#||Days||#||OxiADDCD-hours-text||#||Hours||#||OxiADDCD-minutes-text||#||Minutes||#||OxiADDCD-seconds-text||#||Second||#|||',
    'Style 4 OXIIMPORTcount_downOXIIMPORTstyle-4OXIIMPORToxi-addons-preview-BG |rgba(255,255,255,1.00)| OxiADDCD-date |2019-07-01| OxiADDCD-time |04:30|OxiADDCD-width |140|140|140|OxiADDCD-bg|rgba(255,255,255,0.00)|||OxiAddCD-border-width-top |4|4|4|OxiAddCD-border-width-bottom |4|4|4|OxiAddCD-border-width-left |4|4|4|OxiAddCD-border-width-right |4|4|4|OxiAddCD-border |solid|#ff4760||OxiADDCD-border-radius-top |100|100|100|OxiADDCD-border-radius-bottom |100|100|100|OxiADDCD-border-radius-left |100|100|100|OxiADDCD-border-radius-right |100|100|100|||||||||||||||||OxiADDCD-margin-top |5|5|5|OxiADDCD-margin-bottom |5|5|5|OxiADDCD-margin-left |30|30|10|OxiADDCD-margin-right |30|30|10|OxiADDCD-N-font-size |50|50|50| OxiADDCD-N-color |#fc518a|OxiAddCD-N-F-family |Bree Serif|100|OxiAddCD-N-F-style |normal:1.3|left:0()0()0()#ffffff:|||||||||||||||||OxiAddCD-T-font-size |18|18|18| OxiAddCD-T-color |#fc518a|OxiAddCD-T-F-family |Bree Serif|100|OxiAddCD-T-F-style |normal:1.3|center:0()0()0()#ffffff:|OxiADDCD-BS |rgba(18, 18, 18, 0.44)|0|3|6|0|||#|| ||#|||'
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
            <div class="oxi-addons-row">
                <?php
                foreach ($file as $value) {
                    $expludedata = explode('OXIIMPORT', $value);
                    $datatrue = '';
                    foreach ($importstyle as $vals) {
                        if ($vals['name'] == $expludedata[2]) {
                            $datatrue = 'true';
                        }
                    }
                    if ($datatrue != 'true') {
                        $number = rand();
                        echo '<div class="oxi-addons-col-1"><div class="oxi-addons-style-preview"><div class="oxi-addons-style-preview-top oxi-addons-center">';
                        echo OxiDataAdminShortcode($oxitype, $value);
                        echo '</div>
                         <div class="oxi-addons-style-preview-bottom">
                            <div class="oxi-addons-style-preview-bottom-left">';
                        echo OxiDataAdminShortcodeName($value);
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
                    $expludedata = explode('OXIIMPORT', $value);
                    $datatrue = '';
                    foreach ($importstyle as $vals) {
                        if ($vals['name'] == $expludedata[2]) {
                            $datatrue = 'true';
                        }
                    }
                    if ($datatrue == 'true') {
                        $number = rand();
                        echo '<div class="oxi-addons-col-1" id="' . $expludedata[2] . '"><div class="oxi-addons-style-preview"><div class="oxi-addons-style-preview-top oxi-addons-center">';
                        echo OxiDataAdminShortcode($oxitype, $value);
                        echo '</div>
                         <div class="oxi-addons-style-preview-bottom">
                            <div class="oxi-addons-style-preview-bottom-left">';
                        echo OxiDataAdminShortcodeName($value);
                        echo '       </div>';
                        echo OxiDataAdminShortcodeControl($number, $value, $freeimport);
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
