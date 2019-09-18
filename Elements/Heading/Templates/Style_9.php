<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Heading\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_9
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_9 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style);
//        echo '</pre>';
//      print_r($this->media_render('sa_head_image',$style)) ;

        if ($style['sa_head_text'] != '') {
            $heading = '<' . $style['sa_head_heading_tag'] . ' class="oxi-addons-heading-text"> 
                              ' . $this->text_render($style['sa_head_text']) . '
                        </' . $style['sa_head_heading_tag'] . '>';
        }
        if ($style['sa_sub_heading_tag']) {
            $content = ' <' . $style['sa_sub_heading_tag'] . '  class="oxi-addons-sub-heading-text"> 
                            ' . $this->text_render($style['sa_sub_head_text']) . '
                        </' . $style['sa_sub_heading_tag'] . '>';
        }

        echo ' <div class="oxi-addons-heading-container"  '.$this->animation_render('sa_head_animation', $style).' >
                    <div class="oxi-addons-sub-heading">
                        ' . $content . '
                    </div>
                    <div class="oxi-addons-heading">
                        ' . $heading . '
                    </div>
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $heading = $content = '';
        if ($stylefiles[3] != '') {
            $heading = '<' . $styledata[39] . ' class="oxi-addons-Heading-text"> 
                                ' . OxiAddonsTextConvert($stylefiles[3]) . '
                        </' . $styledata[39] . '>';
        }
        if ($stylefiles[5]) {
            $content = ' <p class="oxi-addons-Content-text"> 
                            ' . OxiAddonsTextConvert($stylefiles[5]) . '
                        </p>';
        }

        echo '  <div class="oxi-addons-container">
                    <div class="oxi-addons-row" >
                        <div class="OxiAddons-Heading-' . $oxiid . '"' . OxiAddonsAnimation($styledata, 95) . '>
                            <div class="oxi-addons-Content-body-' . $oxiid . '">
                                ' . $content . '
                            </div>
                            <div class="oxi-addons-Heading-body-' . $oxiid . '">
                                ' . $heading . '
                            </div>
                        </div>
                    </div>
                </div>';

        $css .= '
                .OxiAddons-Heading-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    }
                .oxi-addons-Heading-body-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    display: block;
                    text-align: center;

                }
                .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                    position: relative;
                    font-size: ' . $styledata[35] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 43) . '; 
                    color: ' . $styledata[41] . ';
                    margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
                    display: inline-block;
                }
                .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text::before{
                    background: ' . $styledata[105] . ' none repeat scroll 0 0;
                    content: "";
                    left: 0;
                    position: absolute;
                    top: 50%;
                    width: ' . $styledata[107] . 'px;
                    height: ' . $styledata[111] . 'px;
                    transform: translateX(-100%);
                }
                .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text::after {
                    background: ' . $styledata[105] . ' none repeat scroll 0 0;
                    content: "";
                    right: 0;
                    position: absolute;
                    top: 50%;
                    width: ' . $styledata[107] . 'px;
                    height: ' . $styledata[111] . 'px;
                    transform: translateX(100%);
                }

                .oxi-addons-Content-body-' . $oxiid . '{
                    width: 100%;
                    float: left;
                    display: block;
                }
                .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                    width: 100%;
                    height: auto;
                    font-size: ' . $styledata[65] . 'px;
                    ' . OxiAddonsFontSettings($styledata, 73) . '; 
                    color: ' . $styledata[71] . ';
                        margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){

                    .oxi-addons-Heading-body-' . $oxiid . '{
                        width: 100%;
                        height: auto;
                        text-align: center;
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                        position: relative;
                        font-size: ' . $styledata[36] . 'px;
                        margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
                        display: inline-block;
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text::before{
                        content: "";
                        left: 0;
                        position: absolute;
                        top: 50%;
                        width: ' . $styledata[108] . 'px;
                        height: ' . $styledata[112] . 'px;
                        transform: translateX(-100%);
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text::after {
                        content: "";
                        right: 0;
                        position: absolute;
                        top: 50%;
                        width: ' . $styledata[108] . 'px;
                        height: ' . $styledata[112] . 'px;
                        transform: translateX(100%);
                    }
                    .oxi-addons-Content-body-' . $oxiid . '{
                        width: 100%;
                        height: auto;
                    }
                    .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                        width: 100%;
                        height: auto;
                        font-size: ' . $styledata[66] . 'px;
                        margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
                    }
                }      
                @media only screen and (max-width : 668px){
                    .oxi-addons-Heading-body-' . $oxiid . '{
                        width: 100%;
                        height: auto;
                        text-align: center;
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                        position: relative;
                        font-size: ' . $styledata[37] . 'px;
                        margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                        display: inline-block;
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text::before{
                        content: "";
                        left: 0;
                        position: absolute;
                        top: 50%;
                        width: ' . $styledata[109] . 'px;
                        height: ' . $styledata[113] . 'px;
                        transform: translateX(-100%);
                    }
                    .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text::after {
                        content: "";
                        right: 0;
                        position: absolute;
                        top: 50%;
                        width: ' . $styledata[109] . 'px;
                        height: ' . $styledata[113] . 'px;
                        transform: translateX(100%);
                    }
                    .oxi-addons-Content-body-' . $oxiid . '{
                        width: 100%;
                        height: auto;
                    }
                    .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                        width: 100%;
                        height: auto;
                        font-size: ' . $styledata[67] . 'px;
                        margin: 0;
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                    }
                }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
