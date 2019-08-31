
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
$freeimport = array('style-1', 'style-2', 'style-3');
if (count($importstyle) < 1) {
    foreach ($freeimport as $value) {
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_import} (type, name) VALUES (%s, %s )", array($oxitype, $value)));
    }
    $js = 'location.reload();';
    wp_add_inline_script('oxi-addons-vendor', $js);
}
$file = Array(
    ' Style 1 OXIIMPORTsection_dividerOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |bottom| OASection-Zindex |1| || OASection-scrolling |yes| OASection-color |ffffff| OASection-width |100|OASection-height|121|0|1|||',
    'Style 2OXIIMPORTsection_dividerOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |bottom| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|30|0|1|||',
    'Style 3OXIIMPORTsection_dividerOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|100|0|1|||',
    'Style 4OXIIMPORTsection_dividerOXIIMPORTstyle-4OXIIMPORT oxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |bottom| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|100|0|1|||',
    'Style 5OXIIMPORTsection_dividerOXIIMPORTstyle-5OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|50|0|1|||',
    'Style 6OXIIMPORTsection_dividerOXIIMPORTstyle-6OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|50|0|1|||',
    'Style 7OXIIMPORTsection_dividerOXIIMPORTstyle-7OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
    'Style 8OXIIMPORTsection_dividerOXIIMPORTstyle-8OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
    'Style 9OXIIMPORTsection_dividerOXIIMPORTstyle-9OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
    'Style 10OXIIMPORTsection_dividerOXIIMPORTstyle-10OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
    'Style 11OXIIMPORTsection_dividerOXIIMPORTstyle-11OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
    'Style 12OXIIMPORTsection_dividerOXIIMPORTstyle-12OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
    'Style 13OXIIMPORTsection_dividerOXIIMPORTstyle-13OXIIMPORToxi-addons-preview-color |rgba(142, 0, 219, 1)| OASection-position |top| OASection-Zindex |1| || OASection-scrolling |no| OASection-color |ffffff| OASection-width |100|OASection-height|80|0|1|||',
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
                        $styledata = explode('OXIIMPORT', $value);
                        $styledata = explode('|', $styledata[3]);
                        echo '<div class="oxi-addons-demo-section-divider">';
                        if ($styledata[3] == 'bottom') {
                            echo '<div class="oxi-addons-demo-frist-section" style="background-color:' . $styledata[1] . '">';
                            echo OxiDataAdminShortcode($oxitype, $value);
                            echo '</div>';
                            echo ' <div class="oxi-addons-demo-second-section" style="background-color:#' . $styledata[11] . '">';
                            echo '</div>';
                        } else {
                            echo '<div class="oxi-addons-demo-frist-section" style="background-color:#' . $styledata[11] . '">';
                            echo '</div>';
                            echo ' <div class="oxi-addons-demo-second-section" style="background-color:' . $styledata[1] . '">';
                            echo OxiDataAdminShortcode($oxitype, $value);
                            echo '</div>';
                        }
                        echo '</div>';
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
                        $styledata = explode('OXIIMPORT', $value);
                        $styledata = explode('|', $styledata[3]);
                        echo '<div class="oxi-addons-demo-section-divider">';
                        if ($styledata[3] == 'bottom') {
                            echo '<div class="oxi-addons-demo-frist-section" style="background-color:' . $styledata[1] . '">';
                            echo OxiDataAdminShortcode($oxitype, $value);
                            echo '</div>';
                            echo ' <div class="oxi-addons-demo-second-section" style="background-color:#' . $styledata[11] . '">';
                            echo '</div>';
                        } else {
                            echo '<div class="oxi-addons-demo-frist-section" style="background-color:#' . $styledata[11] . '">';
                            echo '</div>';
                            echo ' <div class="oxi-addons-demo-second-section" style="background-color:' . $styledata[1] . '">';
                            echo OxiDataAdminShortcode($oxitype, $value);
                            echo '</div>';
                        }
                        echo '</div>';

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