<?php

namespace SHORTCODE_ADDONS_UPLOAD\Heading\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_7
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_7 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style);
//        echo '</pre>';
//      print_r($this->media_render('sa_head_image',$style)) ;
        $heading = $content = $img = '';
        if ($style['sa_head_text'] != '') {
            $heading = '<div class="oxi-addons-heading-style-7">
                        <' . $style['sa_head_heading_tag'] . ' class="oxi-addons-heading-text"> 
                                ' . $this->text_render($style['sa_head_text']) . '
                        </' . $style['sa_head_heading_tag'] . '>
                    </div>';
        }
        if ($style['sa_sub_head_text'] != '') {
            $content = '<div class="oxi-addons-sub-heading-style-7">
                        <p class="oxi-addons-sub-heading-text"> 
                            ' . $this->text_render($style['sa_sub_head_text']) . '
                        </p>
                    </div>';
        }
        if ($this->media_render('sa_head_image', $style) != '') {
            $img = '<div class="oxi-addons-img-body-wrapper-style-7">
                        <div class="oxi-addons-img-body-style-7">
                            <img class="oxi-image" src="' . $this->media_render('sa_head_image', $style) . '">
                        </div>
                    </div>';
        }
        if ($style['sa_head_style'] == 1) {
            $fulldata = $content . $heading . $img;
        } else if ($style['sa_head_style'] == 2) {
            $fulldata = $content . $img . $heading;
        } else {
            $fulldata = $img . $content . $heading;
        }

        echo '  <div class="oxi-addons-body-container" '.$this->animation_render('sa_head_animation', $style).'>
                ' . $fulldata . '
            </div>    ';
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $css = '';
        $styledata = explode('|', $stylefiles[0]);
//    echo '<pre>';
//    print_r($styledata);
//    echo '</pre>';
        $heading = $content = $img = '';
        if ($stylefiles[3] != '') {
            $heading = '<div class="oxi-addons-Heading-body-' . $oxiid . '">
                            <' . $styledata[39] . ' class="oxi-addons-Heading-text"> 
                                    ' . OxiAddonsTextConvert($stylefiles[3]) . '
                            </' . $styledata[39] . '>
                        </div>';
        }
        if ($stylefiles[5] != '') {
            $content = '<div class="oxi-addons-Content-body-' . $oxiid . '">
                            <p class="oxi-addons-Content-text"> 
                                ' . OxiAddonsTextConvert($stylefiles[5]) . '
                            </p>
                        </div>';
        }
        if ($styledata[7] != '') {
            $img = '<div class="oxi-addons-img-body-' . $oxiid . '">
                        <div class="oxi-addons-img-body">
                            <img class="oxi-image" src="' . OxiAddonsUrlConvert($stylefiles[7]) . '">
                        </div>  
                    </div>';
        }
        if ($styledata[127] == 1) {
            $fulldata = $content . $heading . $img;
        } else if ($styledata[127] == 2) {
            $fulldata = $content . $img . $heading;
        } else {
            $fulldata = $img . $content . $heading;
        }

        echo '<div class="oxi-addons-container">
                    <div class="oxi-addons-row">
                        <div class="oxi-addons-body-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 95) . '>
                            ' . $fulldata . '
                        </div>
                    </div>
                </div>';
        $css .= '
                .oxi-addons-body-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    display: block;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
                }
                .oxi-addons-img-body-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    text-align: ' . $styledata[117] . ';
                    display: block;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';
                }
                .oxi-addons-img-body-' . $oxiid . ' .oxi-addons-img-body{
                    display:inline-block;
                    max-width:100%;
                    width: ' . $styledata[119] . 'px;
                    margin: 0;
                    position:relative;
                }
                .oxi-addons-img-body-' . $oxiid . ' .oxi-addons-img-body:after{
                    display:block;
                    content:"";
                    margin: 0;
                    padding-bottom: ' . ($styledata[123] / $styledata[119] * 100) . '%;
                }
                .oxi-addons-img-body-' . $oxiid . ' .oxi-image{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
                .oxi-addons-Heading-body-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    display: block;
                }
                .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                    width: 100%;
                    float: left;
                    display: block;
                    font-size: ' . $styledata[35] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 43) . '; 
                    color: ' . $styledata[41] . ';
                    margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
                }
                .oxi-addons-Content-body-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    display: block;
                }
                .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                    width: 100%;
                    font-size: ' . $styledata[65] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 73) . '; 
                    color: ' . $styledata[71] . ';
                    margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){

                    .oxi-addons-img-body-' . $oxiid . '{
                        display: block;
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';
                    }
                    .oxi-addons-img-body-' . $oxiid . ' .oxi-addons-img-body{
                        display:inline-block;
                        max-width:100%;
                        width: ' . $styledata[120] . 'px;
                        position:relative;
                    }
                    .oxi-addons-img-body-' . $oxiid . ' .oxi-addons-img-body:after{
                        display:block;
                        content:"";
                        margin: 0;
                        padding-bottom: ' . ($styledata[124] / $styledata[120] * 100) . '%;
                    }
                    .oxi-addons-img-body-' . $oxiid . ' .oxi-image{
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                        width: 100%;
                        height: auto;   
                        font-size: ' . $styledata[36] . 'px;
                            margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
                    }
                    .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                        width: 100%;
                        height: auto;
                        font-size: ' . $styledata[66] . 'px;
                            margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';
                    }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-img-body-' . $oxiid . '{
                        display: block;
                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                    }
                    .oxi-addons-img-body-' . $oxiid . ' .oxi-addons-img-body{
                        display:inline-block;
                        max-width:100%;
                        width: ' . $styledata[121] . 'px;
                        position:relative;
                    }
                    .oxi-addons-img-body-' . $oxiid . ' .oxi-addons-img-body:after{
                        display:block;
                        content:"";
                        padding-bottom: ' . ($styledata[125] / $styledata[121] * 100) . '%;
                    }
                    .oxi-addons-img-body-' . $oxiid . ' .oxi-image{
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                        width: 100%;
                        height: auto;   
                        font-size: ' . $styledata[37] . 'px;
                            margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                    }
                    .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                        width: 100%;
                        height: auto;
                        font-size: ' . $styledata[67] . 'px;
                            margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                    }
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
