<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon\Templates;

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

class Style_3 extends Templates {

    public function default_render($style, $child, $admin) {

        foreach ($child as $v) {
            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
            $icon = '';
            if (array_key_exists('sa_icon_link-url', $value) && $value['sa_icon_link-url'] != '') {
                $icon = '<a ' . $this->url_render('sa_icon_link', $value) . ' class="oxi_addons__icon">
                ' . $this->font_awesome_render($value['sa_icon_fontawesome']) . '
            </a>';
            } else {
                $icon = '<div class="oxi_addons__icon" ' . ($value['sa_icon_link-id'] != '' ? 'id="' . $value['sa_icon_link-id'] . '"' : '') . '>
                ' . $this->font_awesome_render($value['sa_icon_fontawesome']) . '
            </div>';
            }


            echo '  <div class="oxi_addons__icon_main_wrapper ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . ' ' . $this->column_render('sa_icon_column', $style) . '">
                            <div class="oxi_addons__icon_main">
                                ' . $icon . '
                            </div>
                        ';
            if ($admin == 'admin') :
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                </div>
                            </div>';
            endif;
            echo ' </div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        echo '<div class="oxi-addons-container">';
        echo '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $listfiles = explode('||#||', $value['files']);
            echo '<div class="' . OxiAddonsItemRows($styledata, 37) . ' oxi-addons-center" ' . OxiAddonsAnimation($styledata, 23) . '>';
            if ($listfiles[7] != '') {
                $hreffirst = '<a href="' . OxiAddonsUrlConvert($listfiles[7]) . '" target = "' . $styledata[1] . '"  class="oxi-icon oxi-icon-' . $oxiid . '" id="' . $listfiles[5] . '">';
                $hreflast = '</a>';
            } else {
                $hreffirst = '<div  class="oxi-icon oxi-icon-' . $oxiid . '" id="' . $listfiles[5] . '">';
                $hreflast = '</div>';
            }
            echo $hreffirst;
            echo '' . oxi_addons_font_awesome($listfiles[3]) . '';
            echo $hreflast;
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        $css = '.oxi-addons-container .oxi-icon-' . $oxiid . '{
                        max-width: ' . $styledata[15] . 'px;
                        width: 100%;
                        position:relative;
                        height: ' . $styledata[15] . 'px;                                      
                        margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                        border-radius:' . $styledata[27] . 'px; 
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':hover,
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':focus,
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':active{
                        max-width: ' . $styledata[15] . 'px;
                        width: 100%;
                        height: ' . $styledata[15] . 'px;                  
                        margin: ' . $styledata[7] . 'px ' . $styledata[11] . 'px;
                        animation-duration: ' . $styledata[25] . 's;  
                        border-radius:' . $styledata[27] . 'px;
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . ':after{  
                        pointer-events: none;
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        left:0;
                        top:0;
                        border-radius:' . $styledata[27] . 'px;
                        content: "";
                        -webkit-box-sizing: content-box;
                        -moz-box-sizing: content-box;
                        box-sizing: content-box;
                        box-shadow: 0 0 0 ' . $styledata[33] . 'px ' . $styledata[31] . ';
                    }
                    .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                         font-size: ' . $styledata[3] . 'px;
                         color:' . $styledata[19] . ';
                         line-height: ' . $styledata[15] . 'px; 
                    }
                    @media only screen and (min-width : 669px) and (max-width : 993px){
                        .oxi-addons-container .oxi-icon-' . $oxiid . '{
                            max-width: ' . $styledata[16] . 'px;                  
                            height: ' . $styledata[16] . 'px;              
                            margin: ' . $styledata[8] . 'px ' . $styledata[12] . 'px;
                        }
                        .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                             line-height: ' . $styledata[16] . 'px; 
                        }
                        .oxi-addons-container .oxi-icon-' . $oxiid . ':after{  
                           box-shadow: 0 0 0 ' . $styledata[34] . 'px ' . $styledata[31] . ';
                        }
                    }
                    @media only screen and (max-width : 668px){
                        .oxi-addons-container .oxi-icon-' . $oxiid . '{
                            max-width: ' . $styledata[17] . 'px;                  
                            height: ' . $styledata[17] . 'px;              
                            margin: ' . $styledata[9] . 'px ' . $styledata[13] . 'px;
                        }
                        .oxi-addons-container .oxi-icon-' . $oxiid . '  .oxi-icons {
                             line-height: ' . $styledata[17] . 'px; 
                        }
                        .oxi-addons-container .oxi-icon-' . $oxiid . ':after{  
                           box-shadow: 0 0 0 ' . $styledata[35] . 'px ' . $styledata[31] . ';
                        }
                    }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
