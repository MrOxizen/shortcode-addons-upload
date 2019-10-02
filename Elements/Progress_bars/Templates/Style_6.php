<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Progress_bars\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_6 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-6', SA_ADDONS_UPLOAD_URL . '/Elements/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        foreach ($styledata['sa_image_progress_bar_data'] as $key => $value) {

            $textheading = '';
            echo '<div class="oxi-addons-parent-wrapper-style-6 oxi-addons-parent-wrapper-style-6-' . $id . '-' . $key . ' ' . $this->column_render('sa-progress-bar-content-box-col', $style) . ' ">';
            echo '<div class="oxi-addons-main-wrapper-style-6" ' . $this->animation_render('sa_image_progress_bar_animation', $style) . '>
                        <div class="oxi-addons-progress-bar-main"  role="oxi-progress" data-goal="' . $value['sa_image_progress_bar_data_parcent-size'] . '" data-speed="' . $value['sa_image_progress_bar_data_animate_speed-size'] . '"> 
                            <div class="oxi-addons-heading">
                                <div class="oxi-addons-progress-title-' . $key . ' oxi-addons-progress-title">' . $this->text_render($value['sa_image_progress_bar_data_name']) . '</div>
                                <div class="oxi-addons-progress-percentage-' . $key . ' oxi-addons-progress-percentage oxi-progress__label"></div>
                            </div>
                            <div class="oxi-addons-progress-bar" style="background: ' . $value['sa_image_progress_bar_data_back-color'] . '">
                                <div class="oxi-addons-progress-line oxi-progress__bar" style="background: ' . $value['sa_image_progress_bar_data_front-color'] . '"></div>
                            </div>
                        </div> 
                    </div>';

            echo '</div>';
        }
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-asProgressdfs-style-6-js';
        echo oxi_addons_public_waypoints();
        wp_enqueue_script('jquery-asProgressdfs-style-6-js', SA_ADDONS_UPLOAD_URL . '/Elements/Progress_bars/File/jquery-asProgress.min.js', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $jquery = '';
        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        foreach ($styledata['sa_image_progress_bar_data'] as $key => $value) {

            $jquery .= '$(".oxi-addons-parent-wrapper-style-6-' . $id . '-' . $key . ' .oxi-addons-progress-bar-main").waypoint(function () {
                    $(".oxi-addons-parent-wrapper-style-6-' . $id . '-' . $key . ' .oxi-addons-progress-bar-main").asProgress({"namespace": "oxi-progress"});
                    $(".oxi-addons-parent-wrapper-style-6-' . $id . '-' . $key . ' .oxi-addons-progress-bar-main").asProgress("start");
                }, {
                    offset: "80%"
                });';
        }
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo oxi_addons_public_waypoints();
        wp_enqueue_script('jquery-asProgress-style-6', SA_ADDONS_UPLOAD_URL . '/Elements/Progress_bars/File/jquery-asProgress.min.js', true, SA_ADDONS_PLUGIN_VERSION);
        $css = '';
        $jquery = '';

        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            echo '<div class="oxi-addons-parent-wrapper-' . $oxiid . ' oxi-addons-parent-wrapper-' . $oxiid . '-' . $value['id'] . ' ' . OxiAddonsItemRows($styledata, 3) . '  ' . OxiAddonsAdminDefine($user) . '">';
            echo '<div class="oxi-addons-main-wrapper-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 39) . '>
                        <div class="oxi-addons-progress-bar-main"  role="oxi-progress" data-goal="' . $data[1] . '" data-speed="' . $data[9] . '"> 
                            <div class="oxi-addons-heading">
                                <div class="oxi-addons-progress-title">' . $data[3] . '</div>
                                <div class="oxi-addons-progress-percentage oxi-progress__label"></div>
                            </div>
                            <div class="oxi-addons-progress-bar" style="background: ' . $data[5] . '">
                                <div class="oxi-addons-progress-line oxi-progress__bar" style="background: ' . $data[7] . '"></div>
                            </div>
                        </div> 
                    </div>';
            $jquery .= 'jQuery(".oxi-addons-parent-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-progress-bar-main").waypoint(function () {
                    jQuery(".oxi-addons-parent-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-progress-bar-main").asProgress({"namespace": "oxi-progress"});
                    jQuery(".oxi-addons-parent-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-progress-bar-main").asProgress("start");
                }, {
                    offset: "80%"
                });';
            if ($user == 'admin') {
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEditprogress_barsdata") . '
                                        <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                        <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEdit">Edit</button>
                                    </form>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                    <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeleteprogress_barsdata") . '
                                        <input type="hidden" name="oxi-item-id" value="' . $value['id'] . '">
                                        <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                                    </form>
                                </div>
                            </div>';
            }
            echo '</div>';
        }
        echo '</div>
        </div>';

        $css .= '
    .oxi-addons-parent-wrapper-' . $oxiid . '{
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . '; 
    }
    .oxi-addons-main-wrapper-' . $oxiid . '{   
        width: 100%;
        float: left; 
        padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
        background: ' . $styledata[50] . '; 
        ' . OxiAddonsBoxShadowSanitize($styledata, 44) . ';
    } 
    .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-progress-bar-main{   
        width: 100%;
        float: left; 
    } 
    .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-heading{
         display: flex;
         justify-content: space-between;
    }
    .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-title{
        font-size: ' . $styledata[52] . 'px;
        ' . OxiAddonsFontSettings($styledata, 56) . ';
        color: ' . $styledata[62] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . '; 
        text-align: center;
    } 
    .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-percentage{
        font-size: ' . $styledata[84] . 'px;
        ' . OxiAddonsFontSettings($styledata, 88) . ';
        color: ' . $styledata[94] . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ';    
    }
    .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-bar{
        width: 100%;
        float: left;
        padding: ' . $styledata[112] . 'px;
        display: block;
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . '; 
        ' . OxiAddonsBoxShadowSanitize($styledata, 152) . ';
    }
    .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-line{
        height: ' . $styledata[116] . 'px;
        display: block;
        border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';
        width: 0; 
    } 
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-parent-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . '{    
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-title{
            font-size: ' . $styledata[53] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-percentage{
            font-size: ' . $styledata[85] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';    
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-bar{ 
            padding: ' . $styledata[113] . 'px; 
            border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';  
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-line{
            height: ' . $styledata[117] . 'px; 
            border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . '; 
        } 
    }
    @media only screen and (max-width : 668px){
        .oxi-addons-parent-wrapper-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . '; 
        }
        .oxi-addons-main-wrapper-' . $oxiid . '{    
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-title{
            font-size: ' . $styledata[54] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';  
        } 
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-percentage{
            font-size: ' . $styledata[86] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . ';    
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-bar{ 
            padding: ' . $styledata[114] . 'px; 
            border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';  
        }
        .oxi-addons-main-wrapper-' . $oxiid . '  .oxi-addons-progress-line{
            height: ' . $styledata[118] . 'px; 
            border-radius:  ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . '; 
        }
    }';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('jquery-asProgress-style-6', $jquery);
    }

}
