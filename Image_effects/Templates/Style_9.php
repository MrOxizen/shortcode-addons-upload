<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_effects\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_9 extends Templates {

    public function public_css() {
        wp_enqueue_style('Image_effects_global_css', SA_ADDONS_UPLOAD_URL . '/Image_effects/File/Css/Style.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_style('css_handaller_file_dive-effects_css', SA_ADDONS_UPLOAD_URL . '/Image_effects/File/Css/Style-dive-effects.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {
//        $class = '';
//        if ($style['sa-max-w-condition'] == 'dynamic') {
//            $class = 'sa-max-w-dynamic';
//        } elseif ($style['sa-max-w-condition'] == 'default') {
//            $class = '';
//        }




        $target_blank = '';
        if ($style['sa-ie-link-opening'] == 'yes') {
            $target_blank = 'target="_blank"';
        }

//            echo $alignments;
//            echo '<pre>';
//            print_r($style);
//            echo '</pre>';


        $all_data = (array_key_exists('sa_icon_effects_data', $style) && is_array($style['sa_icon_effects_data'])) ? $style['sa_icon_effects_data'] : [];

        foreach ($all_data as $key => $data) {



//            echo '<pre>';   
//            print_r($data);   
//            echo '</pre>';

            $valueurllast = $valueurl1st = $heading = $valueurlbtn = $content = '';

            if (array_key_exists('sa_el_image_effect_url-url', $data) && $data['sa_el_image_effect_url-url'] != '') {
                if (array_key_exists('sa_el_image_effect_btn_text', $data) && $data['sa_el_image_effect_btn_text'] != '') {
                    $valueurlbtn = '<div class="oxi-addons-image-effects-button"><a ' . $this->url_render('sa_el_image_effect_url', $data) . '  ' . $target_blank . '" class="img-btn ihewc-button "    ' . $this->animation_render('sa-ie-button-side-animation', $style) . '>' . $this->text_render($data['sa_el_image_effect_btn_text']) . '</a></div>';
                } else {
                    $valueurl1st = '<a ' . $this->url_render('sa_el_image_effect_url', $data) . '   " ' . $target_blank . '>';
                    $valueurllast = '</a>';
                }
            }
            if (array_key_exists('sa_el_image_effect_title', $data) && $data['sa_el_image_effect_title'] != '') {
                $heading = '<h3 class="ihewc-heading ihewc-delay-sm  ' . $style['sa-ie-heading-animation-class'] . ' ">' . $this->text_render($data['sa_el_image_effect_title']) . '</h3>';
            }
            if (array_key_exists('sa_el_image_effect_descriptions', $data) && $data['sa_el_image_effect_descriptions'] != '') {
                $content = '<div class="ihewc-content ihewc-delay-sm  ' . $style['sa-ie-descriptions-animation-class'] . '  ">' . $this->text_render($data['sa_el_image_effect_descriptions']) . '</div>';
            }



            echo '<div class="' . $this->column_render('sa-ac-column', $style) . ' " >';
            echo '<div class="sa_ie_temp_9 ihewc-hover-padding-9 oxi-m-width" ' . $this->animation_render('sa-ie-main-box-animation', $style) . '>
                <div class="sa_for_margin">
                ' . $valueurl1st . '
                    <div class="ihewc-hover sa_image_effect_temp_9 sa_image_effect_temp_9_' . $key . '  ' . $style['sa_effects_select_icon'] . '">
                        <div class="ihewc-hover-figure">
                            <div class="ihewc-hover-image">
                                <img class="oxi-img-w-h" src="' . $this->media_render('sa_el_ie_box_image', $data) . '">
                            </div>
                            <div class="ihewc-hover-figure-caption">
                                <div class="ihewc-hover-figure-caption-table">
                                    <div class="ihewc-hover-figure-caption-content   ' . $style['sa_effects_select_content'] . '">
                                        ' . $heading . '
                                        ' . $content . '
                                        ' . $valueurlbtn . '
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                ' . $valueurllast . '
                    </div>
              </div>';
            echo '</div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo oxi_addons_elements_stylejs('css/style-blinds-effects', 'image_effects', 'css', 'image-style-blinds-effects');
        echo oxi_addons_elements_stylejs('css/style', 'image_effects', 'css', 'image-effects');

        echo '<div class="oxi-addons-container">
                 <div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $valuefile = explode('||#||', $value['files']);
            $valueurl1st = $valueurllast = $heading = $valueurlbtn = $content = '';
            if (!empty($valuefile[7])) {
                if (!empty($valuefile[5])) {
                    $valueurlbtn = '<div class="oxi-addons-image-effects-button"><a href="' . OxiAddonsUrlConvert($valuefile[7]) . '"  target="' . $styledata[249] . '" class="img-btn ihewc-button ' . $styledata[129] . '">' . oxi_addons_html_decode($valuefile[5]) . '</a></div>';
                } else {
                    $valueurl1st = '<a href="' . OxiAddonsUrlConvert($valuefile[7]) . '" target="' . $styledata[249] . '">';
                    $valueurllast = '</a>';
                }
            }

            if (!empty($valuefile[1])) {
                $heading = '<h3 class="ihewc-heading ihewc-delay-sm ' . $styledata[69] . '">' . OxiAddonsTextConvert($valuefile[1]) . '</h3>';
            }
            if (!empty($valuefile[3])) {
                $content = '<div class="ihewc-content ihewc-delay-sm ' . $styledata[99] . '">' . OxiAddonsTextConvert($valuefile[3]) . '</div>';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 7) . ' " >';
            echo '<div class="ihewc-hover-padding-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 51) . '>
                ' . $valueurl1st . '
                <div class="ihewc-hover ihewc-hover-' . $oxiid . ' ' . $styledata[3] . '">
                    <div class="ihewc-hover-figure">
                        <div class="ihewc-hover-image">
                            <img src="' . OxiAddonsUrlConvert($valuefile[9]) . '">
                        </div>
                        <div class="ihewc-hover-figure-caption">
                            <div class="ihewc-hover-figure-caption-table">
                                <div class="ihewc-hover-figure-caption-content ' . $styledata[5] . '">
                                    ' . $heading . '
                                    ' . $content . '
                                    ' . $valueurlbtn . '
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                ' . $valueurllast . '  
              </div>';
            echo '</div>';
        }


        echo '    </div>
          </div>';
        $css = '.ihewc-hover-padding-' . $oxiid . '{
                max-width:    ' . $styledata[11] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';
                margin: 0 auto;
            }
            .ihewc-hover-' . $oxiid . '{
               ' . OxiAddonsBoxShadowSanitize($styledata, 55) . '
               overflow: hidden;
            }
            .ihewc-hover-' . $oxiid . ':hover,
            .ihewc-hover-' . $oxiid . '.oxi-touch{
               ' . OxiAddonsBoxShadowSanitize($styledata, 63) . '
            }
            .ihewc-hover-' . $oxiid . ':hover:before,
            .ihewc-hover-' . $oxiid . ':hover:after,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure-caption,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure-caption:before,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure-caption:after {
                   background: ' . $styledata[15] . '
            }
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-image:after{
                padding-bottom: ' . ($styledata[13] / $styledata[11] * 100) . '%;
                display: block;
                content: "";
            }
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption-content{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
            }
            .ihewc-hover-' . $oxiid . ',
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure,
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-image,
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-image img,  
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption,
            .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption-content {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 251) . ';
            }
            .ihewc-hover-' . $oxiid . ':hover,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-image,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-image img,  
            .ihewc-hover-' . $oxiid . ':hover.ihewc-hover-figure .ihewc-hover-figure-caption,
            .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure .ihewc-hover-figure-caption-content {
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 267) . ';
            }
            
            .ihewc-hover-' . $oxiid . ' h3.ihewc-heading{
                font-size:' . $styledata[71] . 'px;
                color: ' . $styledata[75] . ';
                ' . OxiAddonsFontSettings($styledata, 77) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                margin:0px;
            }
            .ihewc-hover-' . $oxiid . ' .ihewc-content{
                font-size:' . $styledata[101] . 'px;
                color: ' . $styledata[105] . ';
                ' . OxiAddonsFontSettings($styledata, 107) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
                margin:0px;
            }
            .ihewc-hover-' . $oxiid . ' .oxi-addons-image-effects-button{
                text-align:' . (explode(":", $styledata[179])[0]) . ';
            }
             .ihewc-hover-' . $oxiid . '  .img-btn.ihewc-button {
                font-size:' . $styledata[131] . 'px;
                color: ' . $styledata[135] . ';
                background: ' . $styledata[137] . ';
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
                border-color: ' . $styledata[156] . ';
                border-style: ' . $styledata[155] . ';
                ' . OxiAddonsFontSettings($styledata, 175) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 181) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 237) . '
                text-align:center;
                display:inline-block;
            }
            .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:hover,
            .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:focus, 
            .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:active {
                color: ' . $styledata[213] . ';
                background: ' . $styledata[215] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 221) . ';
                border-color: ' . $styledata[218] . ';
                border-style: ' . $styledata[217] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 243) . '

            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .ihewc-hover-padding-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 36) . ';
                }
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption-content{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . ';
                }
                .ihewc-hover-' . $oxiid . ',
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure,
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-image,
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-image img,  
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption,
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption-content {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 252) . ';
                }
                .ihewc-hover-' . $oxiid . ':hover,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-image,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-image img,  
                .ihewc-hover-' . $oxiid . ':hover.ihewc-hover-figure .ihewc-hover-figure-caption,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure .ihewc-hover-figure-caption-content {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 268) . ';
                }

                .ihewc-hover-' . $oxiid . ' h3.ihewc-heading{
                    font-size:' . $styledata[72] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';
                }
                .ihewc-hover-' . $oxiid . ' .ihewc-content{
                    font-size:' . $styledata[102] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 114) . ';
                }
                 .ihewc-hover-' . $oxiid . '  .img-btn.ihewc-button {
                    font-size:' . $styledata[132] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 140) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 182) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
                }
                .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:hover,
                .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:focus, 
                .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:active {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 222) . ';
                }
            }
            @media only screen and (max-width : 668px){
                .ihewc-hover-padding-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
                }
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption-content{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
                }
                .ihewc-hover-' . $oxiid . ',
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure,
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-image,
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-image img,  
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption,
                .ihewc-hover-' . $oxiid . ' .ihewc-hover-figure .ihewc-hover-figure-caption-content {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . ';
                }
                .ihewc-hover-' . $oxiid . ':hover,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-image,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-image img,  
                .ihewc-hover-' . $oxiid . ':hover.ihewc-hover-figure .ihewc-hover-figure-caption,
                .ihewc-hover-' . $oxiid . ':hover .ihewc-hover-figure .ihewc-hover-figure-caption-content {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
                }

                .ihewc-hover-' . $oxiid . ' h3.ihewc-heading{
                    font-size:' . $styledata[73] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
                }
                .ihewc-hover-' . $oxiid . ' .ihewc-content{
                    font-size:' . $styledata[103] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
                }
                 .ihewc-hover-' . $oxiid . '  .img-btn.ihewc-button {
                    font-size:' . $styledata[133] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 141) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 183) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
                }
                .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:hover,
                .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:focus, 
                .ihewc-hover-' . $oxiid . ' .ihewc-button.img-btn:active {
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 223) . ';
                }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
        echo oxi_addons_elements_stylejs('css/style', 'image_effects', 'css', 'image-effects');
        echo oxi_addons_elements_stylejs('css/style-border-reveal-effects', 'image_effects', 'css', 'image-style-border-reveal-effects');
        echo OxiAddonsInlineCSSData($css);
    }

}
