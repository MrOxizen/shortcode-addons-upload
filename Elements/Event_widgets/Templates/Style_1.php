<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Event_widgets\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
       
    }
    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
  $date = $month = $heading = $content = $button = '';
    $css = '';
    echo ' <div class="oxi-addons-container">';
    echo ' <div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $listitemdata = explode('||#||', $value['files']);
        if ($listitemdata[2] != '') {
            $date = '<div class="oxi-addons-EW-D-date">' . OxiAddonsTextConvert($listitemdata[2]) . '</div>';
        }
        if ($listitemdata[4] != '') {
            $month = '<div class="oxi-addons-EW-D-month">' . OxiAddonsTextConvert($listitemdata[4]) . '</div>';
        }
        if ($listitemdata[8] != '') {
            $heading = '<div class="oxi-addons-EW-C-heading">
                               ' . OxiAddonsTextConvert($listitemdata[8]) . '
                            </div>';
        }
        if ($listitemdata[10] != '') {
            $content = '<div class="oxi-addons-EW-C-text">
                               ' . OxiAddonsTextConvert($listitemdata[10]) . '
                            </div>';
        }
        if ($listitemdata[14] != '' && $listitemdata[12] != '') {
            $button = '<div class="oxi-addons-EW-C-button">
                                <a href="' . OxiAddonsUrlConvert($listitemdata[14]) . '" target="' . $styledata[231] . '"  class="oxi-addons-EW-C-button-link">' . OxiAddonsTextConvert($listitemdata[12]) . '</a>
                            </div>';
        } elseif ($listitemdata[14] == '' && $listitemdata[12] != '') {
            $button = '<div class="oxi-addons-EW-C-button">
                                <div  class="oxi-addons-EW-C-button-link">' . OxiAddonsTextConvert($listitemdata[12]) . '</div>
                            </div>';
        }

        echo '<div class="' . OxiAddonsItemRows($styledata, 307) . '">
                  <div class="oxi-addons-EW-wrapper-' . $oxiid . ' oxi-addons-EW-wrapper-' . $oxiid . '-' . $value['id'] . '">
                    <div class="oxi-addons-EW-row" ' . OxiAddonsAnimation($styledata, 61) . '>
                        <div class="oxi-addons-EW-image">
                            <div class="oxi-addons-EW-image-body">
                                <div class="oxi-addons-EW-image-date">
                                    <div class="oxi-addons-EW-image-date-table-cell">
                                        ' . $date . '
                                        ' . $month . '
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oxi-addons-EW-content">
                            ' . $heading . '
                            ' . $content . '
                            ' . $button . '
                        </div>
                    </div>
                </div> 
            </div>'; 
        $css .= '.oxi-addons-EW-wrapper-' . $oxiid . '.oxi-addons-EW-wrapper-' . $oxiid . '-' . $value['id'] . ' .oxi-addons-EW-image-body{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: url(\'' . OxiAddonsUrlConvert($listitemdata[6]) . '\');
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }';
    }
    echo '  </div>';
    echo '  </div>';
    $css .= '.oxi-addons-EW-wrapper-' . $oxiid . '{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
            width: 100%;
            float: left;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 55) . '
            overflow: hidden;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image{
            width: 100%;
            float: left;
            position: relative;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image:after{
            display: block;
            content: "";
            padding-bottom:' . $styledata[173] . '%;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-date{
            position: absolute;
            display:table;
            bottom: 0;
            ' . $styledata[65] . ': 0;
            width: ' . $styledata[67] . 'px;
            height: ' . $styledata[71] . 'px;
            ' . OxiAddonsBGImage($styledata, 75) . '
            border: ' . $styledata[79] . 'px ' . $styledata[80] . ' ' . $styledata[83] . ';
            border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 85) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-date-table-cell{
            display:table-cell;
            vertical-align: middle;
            text-align:center;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-D-date{
            font-size: ' . $styledata[117] . 'px;
            color: ' . $styledata[121] . ';
            ' . OxiAddonsFontSettings($styledata, 123) . '
             margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';
             line-height: 1;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-D-month{
            font-size: ' . $styledata[145] . 'px;
            color: ' . $styledata[149] . ';
            ' . OxiAddonsFontSettings($styledata, 151) . '
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 157) . ';
            line-height: 1;
        }
        .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-content{
            width: 100%;
            float: left;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            ' . OxiAddonsBGImage($styledata, 3) . '
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-heading{
            width: 100%;
            float: left;
            font-size: ' . $styledata[175] . 'px;
            color: ' . $styledata[179] . ';
            ' . OxiAddonsFontSettings($styledata, 181) . '
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-text{
            width: 100%;
            float: left;
            font-size: ' . $styledata[203] . 'px;
            color: ' . $styledata[207] . ';
            ' . OxiAddonsFontSettings($styledata, 209) . '
             padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button{
            width: 100%;
            float:left;
            text-align: ' . explode(':', $styledata[249])[0] . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button-link{
            display:inline-block;
            font-size: ' . $styledata[233] . 'px;
            color: ' . $styledata[237] . ';
            background-color: ' . $styledata[239] . ';
            ' . OxiAddonsFontSettings($styledata, 245) . '
            text-align:center;
            border: ' . $styledata[251] . 'px ' . $styledata[252] . ' ;
            border-color: ' . $styledata[255] . ' ;
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 259) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 275) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 291) . ';
        }
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button-link:hover,
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button-link:focus,
        .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button-link:active{
            color: ' . $styledata[241] . ';
            background-color: ' . $styledata[243] . ';
            border-color: ' . $styledata[257] . ' ;
         } 
         @media only screen and (min-width : 669px) and (max-width : 993px){ 
           .oxi-addons-EW-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-date{
                width: ' . $styledata[68] . 'px;
                height: ' . $styledata[72] . 'px;
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 86) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-D-date{
                font-size: ' . $styledata[118] . 'px;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 130) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-D-month{
                font-size: ' . $styledata[146] . 'px;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-content{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-heading{
                font-size: ' . $styledata[176] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-text{
                font-size: ' . $styledata[204] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 216) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button-link{
                font-size: ' . $styledata[234] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 260) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 276) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 292) . ';
            } 
         }
         @media only screen and (max-width : 668px){
           .oxi-addons-EW-wrapper-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-row{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-image-date{
                width: ' . $styledata[69] . 'px;
                height: ' . $styledata[73] . 'px;
                border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-D-date{
                font-size: ' . $styledata[119] . 'px;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-D-month{
                font-size: ' . $styledata[147] . 'px;
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . ' .oxi-addons-EW-content{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-heading{
                font-size: ' . $styledata[177] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-text{
                font-size: ' . $styledata[205] . 'px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ';
            }
            .oxi-addons-EW-wrapper-' . $oxiid . '  .oxi-addons-EW-C-button-link{
                font-size: ' . $styledata[235] . 'px;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 261) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 277) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 293) . ';
            } 
         }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
