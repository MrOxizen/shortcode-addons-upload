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
    'Style-1 OXIIMPORTinteractive_cardsOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(230,230,230,1.00)|oxi-cards-max-width |600|600|600|oxi-cards-full-margin-top |0|0|0|oxi-cards-full-margin-bottom |0|0|0|oxi-cards-full-margin-left |0|0|0|oxi-cards-full-margin-right |0|0|0|oxi-cards-full-box-shadow |rgba(255, 255, 255, 0)|||||oxi-call-button-animation||:false:false:500:10:0.2|250//|oxi-cards-front-bg-color |rgba(13,13,13,1.00)|oxi-cards-front-image-width |250|250|250|oxi-cards-front-image-height |250|250|250|oxi-cards-front-padding-top |180|100|100|oxi-cards-front-padding-bottom |180|180|180|oxi-cards-front-padding-left |0|100|0|oxi-cards-front-padding-right |0|0|25|oxi-cards-CI-position |top_right|oxi-cards-CI-W |25|25|25|oxi-cards-CI-H |25|25|25|oxi-cards-front-C |#000000|oxi-cards-front-CI-BC |rgba(255,255,255,0.00)|oxi-cards-front-CI-FS |18|18|18|oxi-cards-front-CI-BR-top |50|50|50|oxi-cards-front-CI-BR-bottom |50|50|50|oxi-cards-front-CI-BR-left |50|50|50|oxi-cards-front-CI-BR-right |50|50|50|oxi-cards-front-CI-P-top |10|10|10|oxi-cards-front-CI-P-bottom |0|0|0|oxi-cards-front-CI-P-left |0|0|0|oxi-cards-front-CI-P-right |6|6|6|oxi-addons-loader-on-off |on|oxi-addons-loader-style |style-3|oxi-addons-loader-color |#ff6600|oxi-addons-loader-speed |3000|||#||oxi-cards-front-image ||#||https://www.oxilab.org/wp-content/uploads/2019/04/my_logo.png||#||oxi-cards-front-CI ||#||fa fa-times||#||oxi-cards-shortcode ||#||||#||',
    'Style-2 OXIIMPORTinteractive_cardsOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG |rgba(230,230,230,1.00)|oxi-cards-max-width |600|600|600|oxi-cards-full-margin-top |0|0|0|oxi-cards-full-margin-bottom |0|0|0|oxi-cards-full-margin-left |0|0|0|oxi-cards-full-margin-right |0|0|0|oxi-cards-full-box-shadow |rgba(255, 255, 255, 0)|||||oxi-call-button-animation||:false:false:500:10:0.2|250//|||||||||||||||||||||||||||oxi-cards-CI-position |top_right|oxi-cards-CI-W |25|25|25|oxi-cards-CI-H |25|25|25|oxi-cards-front-C |#ffffff|oxi-cards-front-CI-BC |rgba(26,26,26,1.00)|oxi-cards-front-CI-FS |15|15|15|oxi-cards-front-CI-BR-top |50|50|50|oxi-cards-front-CI-BR-bottom |50|50|50|oxi-cards-front-CI-BR-left |50|50|50|oxi-cards-front-CI-BR-right |50|50|50|oxi-cards-front-CI-P-top |17|17|17|oxi-cards-front-CI-P-bottom |0|0|0|oxi-cards-front-CI-P-left |0|0|0|oxi-cards-front-CI-P-right |17|17|17|oxi-addons-loader-on-off |on|oxi-addons-loader-style |style-2|oxi-addons-loader-color |#780000|oxi-addons-loader-speed |2500|||#||||#|| ||#||oxi-cards-front-CI ||#||fa fa-times||#||oxi-cards-shortcode ||#||||#||oxi-cards-front-shortcode ||#||||#||',
    'Style-3 OXIIMPORTinteractive_cardsOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG |rgba(230,230,230,1.00)|oxi-cards-max-width |600|600|600|oxi-cards-full-margin-top |0|0|0|oxi-cards-full-margin-bottom |0|0|0|oxi-cards-full-margin-left |0|0|0|oxi-cards-full-margin-right |0|0|0|oxi-cards-full-box-shadow |rgba(255, 255, 255, 0)|||||oxi-call-button-animation||:false:false:500:10:0.2|250//|oxi-cards-front-bg-color |rgba(15,15,15,1.00)|oxi-cards-front-image-width |471|471|471|oxi-cards-front-image-height |250|250|250|oxi-cards-front-padding-top |180|100|100|oxi-cards-front-padding-bottom |180|180|180|oxi-cards-front-padding-left |0|100|0|oxi-cards-front-padding-right |0|0|25|oxi-cards-CI-position |top_right|oxi-cards-CI-W |25|25|25|oxi-cards-CI-H |25|25|25|oxi-cards-front-C |#ffffff|oxi-cards-front-CI-BC |rgba(0,0,0,0.44)|oxi-cards-front-CI-FS |14|14|14|oxi-cards-front-CI-BR-top |50|50|50|oxi-cards-front-CI-BR-bottom |50|50|50|oxi-cards-front-CI-BR-left |50|50|50|oxi-cards-front-CI-BR-right |50|50|50|oxi-cards-front-CI-P-top |10|10|10|oxi-cards-front-CI-P-bottom |0|0|0|oxi-cards-front-CI-P-left |0|0|0|oxi-cards-front-CI-P-right |6|6|6|||||oxi-cards-back-image-height-ratio |60|60|60|oxi-cards-button-opening-type |_blank|oxi-cards-back-heading-font-size |28|28|28|oxi-cards-back-heading-color |#292929|oxi-cards-back-heading-font-family |Open+Sans|700|oxi-cards-back-heading-font-style |normal:1.3|left:0()0()0()#ffffff:|oxi-cards-back-heading-padding-top |10|10|10|oxi-cards-back-heading-padding-bottom |10|10|10|oxi-cards-back-heading-padding-left |10|10|10|oxi-cards-back-heading-padding-right |10|10|10|oxi-cards-back-sub-heading-font-size |14|14|14|oxi-cards-back-sub-heading-color |#4d4d4d|oxi-cards-back-sub-heading-font-family |Lato|500|oxi-cards-back-sub-heading-font-style |normal:1.3|left:0()0()0()#ffffff:|oxi-cards-back-sub-heading-padding-top |10|10|10|oxi-cards-back-sub-heading-padding-bottom |10|10|10|oxi-cards-back-sub-heading-padding-left |10|10|10|oxi-cards-back-sub-heading-padding-right |10|10|10|oxi-cards-button-font-size |16|16|16| oxi-cards-button-color|#ffffff|oxi-cards-button-bg-color |rgba(22,172,227,1.00)|oxi-cards-button-border-width-top |0|0|0|oxi-cards-button-border-width-bottom |0|0|0|oxi-cards-button-border-width-left |0|0|0|oxi-cards-button-border-width-right |0|0|0|oxi-cards-button-border |dotted|#225500||oxi-cards-button-font-family |Roboto|500|oxi-cards-button-font-style |normal:1.3|left:0()0()0()#ffffff:|oxi-cards-button-border-radius-top |0|0|0|oxi-cards-button-border-radius-bottom |0|0|0|oxi-cards-button-border-radius-left |0|0|0|oxi-cards-button-border-radius-right |0|0|0|oxi-cards-button-padding-top |12|12|12|oxi-cards-button-padding-bottom |12|12|12|oxi-cards-button-padding-left |20|20|20|oxi-cards-button-padding-right |20|20|20|oxi-cards-button-margin-top |5|5|5|oxi-cards-button-margin-bottom |5|5|5|oxi-cards-button-margin-left |5|5|5|oxi-cards-button-margin-right |5|5|5| oxi-cards-button-H-color|#ffffff|oxi-cards-button-H-bg-color |rgba(194,21,217,1.00)|oxi-cards-button-border-hover |dotted|#00eaff||oxi-cards-button-H-border-radius-top |0|0|0|oxi-cards-button-H-border-radius-bottom |0|0|0|oxi-cards-button-H-border-radius-left |0|0|0|oxi-cards-button-H-border-radius-right |0|0|0|oxi-cards-back-full-content-color |#ffffff|oxi-cards-back-full-content-padding-top |20|20|20|oxi-cards-back-full-content-padding-bottom |20|20|20|oxi-cards-back-full-content-padding-left |20|20|20|oxi-cards-back-full-content-padding-right |20|20|20|oxi-cards-button-align |left|oxi-addons-loader-on-off |on|oxi-addons-loader-style |style-2|oxi-addons-loader-color |#1aa3e9|oxi-addons-loader-speed |3000|||#||oxi-cards-front-image ||#||https://www.oxilab.org/wp-content/uploads/2019/05/580b57fcd9996e24bc43c466.png||#||oxi-cards-front-CI ||#||fa fa-times||#|| ||#||||#||oxi-cards-button-text ||#||Get It Now||#||oxi-cards-button-url ||#||#||#||oxi-cards-back-heading ||#||Shortcode Addons||#||oxi-cards-back-sub-heading ||#||The ultimate elements bundle for WordPress Page Builder. Lots of useful and premium elements to complete your website quickly. Stunning design with endless customization options. Outstanding support to assist you 24/7.||#||oxi-cards-back-image ||#||https://www.oxilab.org/wp-content/uploads/2019/04/beautiful-beauty-blue-414612.jpg||#||',
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

