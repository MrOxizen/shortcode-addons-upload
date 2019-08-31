<?php
if (!defined('ABSPATH')) {
    exit;
}

$oxitype = sanitize_text_field($_GET['oxitype']);
$oxiimpport = '';
if(!empty($_GET['oxiimpport'])){
    $oxiimpport = sanitize_text_field($_GET['oxiimpport']);
}

oxi_addons_user_capabilities();
OxiDataAdminImport($oxitype);
global $wpdb;
$table_name = $wpdb->prefix . 'oxi_div_style';
$table_import = $wpdb->prefix . 'oxi_div_import';
$importstyle = $wpdb->get_results("SELECT * FROM $table_import WHERE type = '$oxitype' ORDER BY id DESC", ARRAY_A);
$freeimport =array('style-1');
if (count($importstyle) < 1) {
    foreach ($freeimport as $value) {
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_import} (type, name) VALUES (%s, %s )", array($oxitype, $value)));
    }
    $js = 'location.reload();';
    wp_add_inline_script('oxi-addons-vendor', $js);
}
  $file = array(
                    'Style 1OXIIMPORTbullet_listOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(255,255,255,1.00)|||oxi-BL-Padding-top |0|0|0|oxi-BL-Padding-bottom |0|0|0|oxi-BL-Padding-left |0|0|0|oxi-BL-Padding-right |0|0|0|oxi-BL-margin-top |0|0|0|oxi-BL-margin-bottom |0|0|0|oxi-BL-margin-left |28|20|23|oxi-BL-margin-right |0|0|0|||||||oxi-BL-number-font-size |16|13|12|||||oxi-BL-number-font-family |Roboto|700|oxi-BL-number-font-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0)|oxi-BL-number-padding-top |10|7|8|oxi-BL-number-padding-bottom |10|7|8|oxi-BL-number-padding-left |10|7|8|oxi-BL-number-padding-right |10|7|8|oxi-BL-number-color |#ffffff|xi-BL-number-bg-color |rgba(51, 147, 212, 1)|oxi-BL-number-h-color |#ffffff|oxi-BL-number-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-content-font-size |16|14|13|oxi-BL-content-color |#ffffff|oxi-BL-content-bg-color |rgba(51, 147, 212, 1)|oxi-BL-content-font-family |Roboto|500|oxi-BL-content-font-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0.04)|oxi-BL-content-padding-top |10|7|8|oxi-BL-content-padding-bottom |10|7|8|oxi-BL-content-padding-left |10|7|8|oxi-BL-content-padding-right |10|7|8|oxi-BL-content-margin-top |12|7|8|oxi-BL-content-margin-bottom |12|7|8|oxi-BL-content-margin-left |12|7|8|oxi-BL-content-margin-right |12|7|8|oxi-BL-content-h-color |#ffffff|oxi-BL-content-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-number-border-width-top |2|2|2|oxi-BL-number-border-width-bottom |2|2|2|oxi-BL-number-border-width-left |2|2|2|oxi-BL-number-border-width-right |2|2|2|oxi-BL-number-border |solid|#ffffff||oxi-BL-number-h-border-width-top |2|2|2|oxi-BL-number-h-border-width-bottom |2|2|2|oxi-BL-number-h-border-width-left |2|2|2|oxi-BL-number-h-border-width-right |2|2|2|oxi-BL-number-h-border |solid|#ffffff||oxi-BL-content-hover-scale |1.01|||oxi-BL-max-width |501|400|300|||#||##OXISTYLE##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing .||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing .||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing .||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing .||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##',
                    'Style 2OXIIMPORTbullet_listOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG |rgba(255,255,255,1.00)|||oxi-BL-Padding-top |5|5|5|oxi-BL-Padding-bottom |5|5|5|oxi-BL-Padding-left |5|5|5|oxi-BL-Padding-right |5|5|5|oxi-BL-margin-top |0|0|0|oxi-BL-margin-bottom |0|0|0|oxi-BL-margin-left |7|7|7|oxi-BL-margin-right |0|0|0|||||||oxi-BL-number-font-size |15|15|15|||||oxi-BL-number-font-family |Roboto|500|oxi-BL-number-font-style |normal:1.3|left:0()0()0()#ffffff:|oxi-BL-number-margin-top |0|0|0|oxi-BL-number-margin-bottom |0|0|0|oxi-BL-number-margin-left |0|0|0|oxi-BL-number-margin-right |-17|-17|-17|oxi-BL-number-color |#ffffff|xi-BL-number-bg-color |rgba(240, 151, 34, 1)|oxi-BL-number-h-color |#ffffff|oxi-BL-number-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-content-font-size |16|16|16|oxi-BL-content-color |#ffffff|oxi-BL-content-bg-color |rgba(240, 151, 34, 1)|oxi-BL-content-font-family |Roboto|500|oxi-BL-content-font-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0.04):|oxi-BL-content-padding-top |8|8|8|oxi-BL-content-padding-bottom |8|8|8|oxi-BL-content-padding-left |25|25|25|oxi-BL-content-padding-right |17|17|17|oxi-BL-content-margin-top |12|7|8|oxi-BL-content-margin-bottom |12|7|8|oxi-BL-content-margin-left |12|7|8|oxi-BL-content-margin-right |12|7|8|oxi-BL-content-h-color |#ffffff|oxi-BL-content-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-number-border-width-top |2|2|2|oxi-BL-number-border-width-bottom |2|2|2|oxi-BL-number-border-width-left |2|2|2|oxi-BL-number-border-width-right |2|2|2|oxi-BL-number-border |solid|#ffffff||oxi-BL-number-h-border-width-top |2|2|2|oxi-BL-number-h-border-width-bottom |2|2|2|oxi-BL-number-h-border-width-left |2|2|2|oxi-BL-number-h-border-width-right |2|2|2|oxi-BL-number-h-border |solid|#ffffff||oxi-BL-content-hover-scale |1.03|||oxi-BL-max-width |501|400|300|oxi-BL-number-line-width|35|35|35|oxi-BL-number-line-height|35|35|35|oxi-BL-number-border-radius-top |67|67|67|oxi-BL-number-border-radius-bottom |67|67|67|oxi-BL-number-border-radius-left |67|67|67|oxi-BL-number-border-radius-right |67|67|67|||#||##OXISTYLE##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#$||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#||##OXIDATA##',
                    'Style 3OXIIMPORTbullet_listOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG |rgba(255,255,255,1.00)|||oxi-BL-Padding-top |5|5|5|oxi-BL-Padding-bottom |5|5|5|oxi-BL-Padding-left |5|5|5|oxi-BL-Padding-right |5|5|5|oxi-BL-margin-top |0|0|0|oxi-BL-margin-bottom |0|0|0|oxi-BL-margin-left |7|7|7|oxi-BL-margin-right |0|0|0|||||||oxi-BL-number-font-size |17|15|14|||||||||||oxi-BL-number-margin-top |0|0|0|oxi-BL-number-margin-bottom |0|0|0|oxi-BL-number-margin-left |0|0|0|oxi-BL-number-margin-right |2|2|2|oxi-BL-number-color |#ffffff|xi-BL-number-bg-color |linear-gradient(90deg, rgba(99,161,247,1.00) 0%,rgba(59,197,212,1.00) 97%)|oxi-BL-number-h-color |#ffffff|oxi-BL-number-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-content-font-size |16|14|13|oxi-BL-content-color |#ffffff|oxi-BL-content-bg-color |linear-gradient(90deg, rgba(99,161,247,1) 0%,rgba(59,197,212,1) 97%)|oxi-BL-content-font-family |Roboto|500|oxi-BL-content-font-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0.04):|oxi-BL-content-padding-top |10|10|10|oxi-BL-content-padding-bottom |10|10|10|oxi-BL-content-padding-left |25|25|25|oxi-BL-content-padding-right |25|25|25|oxi-BL-content-margin-top |12|7|8|oxi-BL-content-margin-bottom |12|7|8|oxi-BL-content-margin-left |12|7|8|oxi-BL-content-margin-right |12|7|8|oxi-BL-content-h-color |#ffffff|oxi-BL-content-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-number-border-width-top |2|2|2|oxi-BL-number-border-width-bottom |2|2|2|oxi-BL-number-border-width-left |2|2|2|oxi-BL-number-border-width-right |2|2|2|oxi-BL-number-border |solid|#ffffff||oxi-BL-number-h-border-width-top |2|2|2|oxi-BL-number-h-border-width-bottom |2|2|2|oxi-BL-number-h-border-width-left |2|2|2|oxi-BL-number-h-border-width-right |2|2|2|oxi-BL-number-h-border |solid|#ffffff||oxi-BL-content-hover-scale |1.03|||oxi-BL-max-width |501|400|300|oxi-BL-number-line-width|45|40|35|oxi-BL-number-line-height|44|42|35|oxi-BL-number-border-radius-top |0|0|0|oxi-BL-number-border-radius-bottom |0|0|0|oxi-BL-number-border-radius-left |0|0|0|oxi-BL-number-border-radius-right |0|0|0|||#||##OXISTYLE##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#|| oxi-BL-content-icon ||#||f0f3||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#|| oxi-BL-content-icon ||#||f2b9||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#|| oxi-BL-content-icon ||#||f00d||#||##OXIDATA##oxi-BL-content-textbox ||#||Lorem Ipsum is simply dummy text of the printing.||#|| oxi-BL-content-link ||#||#||#|| oxi-BL-content-icon ||#||f058||#||##OXIDATA##',
                    'Style 4OXIIMPORTbullet_listOXIIMPORTstyle-4OXIIMPORToxi-addons-preview-BG || OxiAddInfoBanner-G-PS |left|OxiAddInfoBanner-G-BG|rgba(255,255,255,0)|||OxiAddInfoBanner-G-P-top |0|0|0|OxiAddInfoBanner-G-P-bottom |0|0|0|OxiAddInfoBanner-G-P-left |0|0|0|OxiAddInfoBanner-G-P-right |0|0|0||||||| ||||||||||||||||||||||||||||||||||||||||||||||OxiAddInfoBanner-CB-padding-top |10|10|10|OxiAddInfoBanner-CB-padding-bottom |10|10|10|OxiAddInfoBanner-CB-padding-left |10|10|10|OxiAddInfoBanner-CB-padding-right |10|10|10|OxiAddInfoBanner-CB-margin-top |10|10|10|OxiAddInfoBanner-CB-margin-bottom |10|10|10|OxiAddInfoBanner-CB-margin-left |10|10|10|OxiAddInfoBanner-CB-margin-right |10|10|10|||||||OxiAddInfoBanner-animation||0.5:false:false:500:10:0.2|0.4//|OxiAddInfoBanner-icon-size|23|23|23|OxiAddInfoBanner-icon-width |46|46|46| OxiAddInfoBanner-icon-color |#45b2ed| OxiAddInfoBanner-icon-Bg |rgba(255,255,255,1.00)|OxiAddInfoBanner-icon-radius-top |30|30|30|OxiAddInfoBanner-icon-radius-bottom |30|30|30|OxiAddInfoBanner-icon-radius-left |30|30|30|OxiAddInfoBanner-icon-radius-right |30|30|30| OxiAddInfoBanner-icon-position |right|OxiAddInfoBanner-icon-padding-top |5|5|5|OxiAddInfoBanner-icon-padding-bottom |5|5|5|OxiAddInfoBanner-icon-padding-left |15|15|15|OxiAddInfoBanner-icon-padding-right |15|15|15|OxiAddInfoBanner-icon-margin-top |5|5|5|OxiAddInfoBanner-icon-margin-bottom |5|5|5|OxiAddInfoBanner-icon-margin-left |0|0|0|OxiAddInfoBanner-icon-margin-right |0|0|0|OxiAddInfoBanner-icon-box-shadow |rgba(255, 255, 255, 1)|0|0|0|0|OxiAddInfoBanner-heading-size|20|20|20| OxiAddInfoBanner-heading-color |#828282|OxiAddInfoBanner-heading-family |Lato|bold|OxiAddInfoBanner-heading-style |normal:1.3|left:0()0()0()#ffffff:1|OxiAddInfoBanner-heading-padding-top |5|5|5|OxiAddInfoBanner-heading-padding-bottom |5|5|5|OxiAddInfoBanner-heading-padding-left |0|0|0|OxiAddInfoBanner-heading-padding-right |20|20|20|OxiAddInfoBanner-content-size|14|14|14| OxiAddInfoBanner-content-color |#b0b0b0|OxiAddInfoBanner-content-family |Lato|400|OxiAddInfoBanner-content-style |normal:1.3|left:0()0()0()#ffffff:1|OxiAddInfoBanner-content-padding-top |5|5|5|OxiAddInfoBanner-content-padding-bottom |5|5|5|OxiAddInfoBanner-content-padding-left |0|0|0|OxiAddInfoBanner-content-padding-right |20|20|20|OxiAddInfoBanner-icon-height |75|75|46|OxiAddInfoBanner-icon-B |2|solid|| OxiAddInfoBanner-icon-BC |#bababa| OxiAddonsBanner-icon-HTC |#ffffff| OxiAddonsBanner-icon-HBG |rgba(69, 178, 237, 1)| OxiAddonsBanner-icon-HBC |#45b2ed|OxiAddonsBanner-icon-HBS |rgba(255, 255, 255, 1)|0|0|0|0|OxiAddInfoBanner-max-width|500|500|500|||#|| ||#||##OXISTYLE##OxiAddonsInfoBanner-H-TB ||#||Heading Six||#||OxiAddonsInfoBanner-SD-TA ||#||When you visit our site, pre-selected companies may access||#||OxiAddInfoBanner-i-class ||#||fas fa-brain||#|| ||#||##OXIDATA##OxiAddonsInfoBanner-H-TB ||#||Heading Five||#||OxiAddonsInfoBanner-SD-TA ||#||When you visit our site, pre-selected companies may access||#||OxiAddInfoBanner-i-class ||#||fas fa-pencil-alt||#|| ||#||##OXIDATA##OxiAddonsInfoBanner-H-TB ||#||Heading Four||#||OxiAddonsInfoBanner-SD-TA ||#||When you visit our site, pre-selected companies may access||#||OxiAddInfoBanner-i-class ||#||fab fa-app-store||#|| ||#||##OXIDATA##OxiAddonsInfoBanner-H-TB ||#||Heading Three||#||OxiAddonsInfoBanner-SD-TA ||#||When you visit our site, pre your device to serve relevant ads||#||OxiAddInfoBanner-i-class ||#||fab fa-android||#|| ||#||##OXIDATA##OxiAddonsInfoBanner-H-TB ||#||Heading Two||#||OxiAddonsInfoBanner-SD-TA ||#||When you visit our site, pre-selected companies may access||#||OxiAddInfoBanner-i-class ||#||fas fa-apple-alt||#|| ||#||##OXIDATA##OxiAddonsInfoBanner-H-TB ||#||Heading One||#||OxiAddonsInfoBanner-SD-TA ||#||When you visit our site, pre-selected companies may access||#||OxiAddInfoBanner-i-class ||#||fas fa-adjust||#|| ||#||##OXIDATA##'
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
                        echo '<div class="oxi-addons-col-1" id="'.$expludedata[2].'"><div class="oxi-addons-style-preview"><div class="oxi-addons-style-preview-top oxi-addons-center">';
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
