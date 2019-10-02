<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Heading\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_10
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_10 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style);
//        echo '</pre>';
//        echo  $style['sa_head_animation'];
//      print_r($this->media_render('sa_head_image',$style)) ;
$align = '';
        if($style['sa_head_line_style'] == 'oxi_line_top_left' || $style['sa_head_line_style'] == 'oxi_line_btm_left'){
            $align = 'text-align : left';
        }else if ($style['sa_head_line_style'] == 'oxi_line_top_right' ||  $style['sa_head_line_style'] == 'oxi_line_btm_right') {
            $align = 'text-align : right';
        }else{
            $align = 'text-align : center';
        }
        if ($style['sa_head_text'] != '') {
            $heading = '<' . $style['sa_head_heading_tag'] . ' class="oxi-addons-heading-text" style="'.$align.'"> 
                              ' . $this->text_render($style['sa_head_text']) . '
                        </' . $style['sa_head_heading_tag'] . '>';
        }
        if ($style['sa_sub_heading_tag']) {
            $content = ' <' . $style['sa_sub_heading_tag'] . '  class="oxi-addons-sub-heading-text '.$style['sa_head_line_style'].'" style="'.$align.'"> 
                            ' . $this->text_render($style['sa_sub_head_text']) . '
                        </' . $style['sa_sub_heading_tag'] . '>';
        }
        echo '  <div class="oxi-addons-heading-container"   >
                    <div class="oxi-addons-main-heading-body"  '.$this->animation_render('sa_head_animation', $style).'>
                        <div class="oxi-addons-sub-heading-style-10 ">
                            ' . $content . '
                        </div>
                        <div class="oxi-addons-heading-style-10">
                            ' . $heading . '
                        </div>
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
       
    $heading = $content = $WM = '';
    if ($stylefiles[3] != '') {
        $heading = '<' . $styledata[39] . ' class="oxi-addons-Heading-text"> 
                            ' . OxiAddonsTextConvert($stylefiles[3]) . '
                    </' . $styledata[39] . '>';
    }
    if ($stylefiles[5]) {
        $content = ' <p class="oxi-addons-Content-text"> 
                        ' . OxiAddonsTextConvert($stylefiles[5])  . '
                    </p>';
    }


    $textalign = explode(":", $styledata[113]);

    echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="OxiAddons-Heading-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 95) . '>
                        <div class="oxi-addons-main-heading-body' . $oxiid . '">
                            <div class="oxi-addons-Content-body-' . $oxiid . '">
                                ' . $content . '
                            </div>
                            <div class="oxi-addons-Heading-body-' . $oxiid . '">
                                ' . $heading . '
                            </div>
                        </div>
                    </div>
                </div>
            </div>';




    $css .= '.OxiAddons-Heading-' . $oxiid . '{
                width: 100%;
                float: left;
                }
            .oxi-addons-Heading-body-' . $oxiid . '{
                width: 100%;
                float: left;
                display: block;
            }
            .oxi-addons-main-heading-body' . $oxiid . '{
                position: relative;
                width: 100%;
                height: auto;
                text-align: center;
                z-index: 1; 
            }
            .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                width: 100%;
                height: auto;   
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
                height: auto;
                position: relative;
                font-size: ' . $styledata[65] . 'px;
                ' . OxiAddonsFontSettings($styledata, 73) . '; 
                color: ' . $styledata[71] . ';
                    margin: 0;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
            }';

    if ($styledata[107] == 1) {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::before{
                background: ' . $styledata[101] . ' none repeat scroll 0 0;
                content: "";
                left: 0%;
                position: absolute;
                width: ' . $styledata[103] . 'px;
                height: ' . $styledata[105] . 'px;
                transform: translateX(-100%);
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
             }';
    } elseif ($styledata[107] == 2) {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::before{
                background: ' . $styledata[101] . ' none repeat scroll 0 0;
                content: "";
                right: 0%;
                position: absolute;
                width: ' . $styledata[103] . 'px;
                height: ' . $styledata[105] . 'px;
                transform: translateX(0%);
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
             }';
    } elseif ($styledata[107] == 3) {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::after{
                    background: ' . $styledata[101] . ' none repeat scroll 0 0;
                    content: "";
                    top: 100%;
                    bottom: 0;
                    left: 50%;
                    position: absolute;
                    width: ' . $styledata[103] . 'px;
                    height: ' . $styledata[105] . 'px;
                    transform: translateX(-50%);
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
                
             }';
    } elseif ($styledata[107] == 4) {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::after{
                background: ' . $styledata[101] . ' none repeat scroll 0 0;
                content: "";
                top: 100%;
                bottom: 0;
                left: 0;
                position: absolute;
                width: ' . $styledata[103] . 'px;
                height: ' . $styledata[105] . 'px;
                transform: translateX(0%);
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
        }';
    } else {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::after{
                background: ' . $styledata[101] . ' none repeat scroll 0 0;
                content: "";
                top: 100%;
                bottom: 0;
                right: 0;
                position: absolute;
                width: ' . $styledata[103] . 'px;
                height: ' . $styledata[105] . 'px;
                transform: translateX(0%);
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
        }';
    }


    $css .= ' @media only screen and (min-width : 669px) and (max-width : 993px){
                
                .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                    font-size: ' . $styledata[36] . 'px;
                        margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
                    text-align:center;
                }
                
                .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                    font-size: ' . $styledata[66] . 'px;
                    margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';
                    text-align:center;
                    position: relative;
                }';
    if ($styledata[107] == 3 || $styledata[107] == 4 || $styledata[107] == 5) {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::after{
                            background: ' . $styledata[101] . ' none repeat scroll 0 0;
                            content: "";
                            top: 100%;
                            bottom: 0;
                            left: 50%;
                            position: absolute;
                            width: ' . $styledata[103] . 'px;
                            height: ' . $styledata[105] . 'px;
                            transform: translateX(-50%);
                            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';

                     }';
    }
    $css .=  '}      
            @media only screen and (max-width : 668px){
                
                .oxi-addons-Heading-body-' . $oxiid . ' .oxi-addons-Heading-text{
                    font-size: ' . $styledata[37] . 'px;
                        margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
                    text-align:center;
                }
                
                .oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text{
                    font-size: ' . $styledata[67] . 'px;
                        margin: 0;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                    text-align:center;
                    position: relative;
                }';
    if ($styledata[107] == 3 || $styledata[107] == 4 || $styledata[107] == 5) {
        $css .= '.oxi-addons-Content-body-' . $oxiid . '  .oxi-addons-Content-text::after{
                            background: ' . $styledata[101] . ' none repeat scroll 0 0;
                            content: "";
                            top: 100%;
                            bottom: 0;
                            left: 50%;
                            position: absolute;
                            width: ' . $styledata[103] . 'px;
                            height: ' . $styledata[105] . 'px;
                            transform: translateX(-50%);
                            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';

                     }';
    }
    $css .= '}';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
