<?php

namespace SHORTCODE_ADDONS_UPLOAD\Section_divider\Templates;

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

class Style_2 extends Templates {

    public function inline_public_css() {
        $style = $this->style;
        $color = str_replace('#', '', $style['sa_sd_color']);
        $css = '.' . $this->WRAPPER . ' .oxi-addons-divider-sd2 .oxi-addons-divider{
                background-image: url("data:image/svg+xml,%3Csvg  xmlns=\'http://www.w3.org/2000/svg\' version=\'1.0\' width=\'100%25\' fill=\'%23' . $color . '\' height=\'100%25\' viewBox=\'0 0 1200 30\' preserveAspectRatio=\'none\'%3E%3Cpath d=\'M0,0S1.209,1.508,200.671,7.031C375.088,15.751,454.658,30,600,30V0H0ZM1200,0s-90.21,1.511-200.671,7.034C824.911,15.751,745.342,30,600,30V0h600Z\'%3E%3C/path%3E%3C/svg%3E");
                background-repeat:  repeat-x;
            } ';

        if (is_admin()):
            if ($this->style['sa_sd_align'] == 'sa_sd_top'):
                $css .= '.oxi-addons-preview-data#oxi-addons-preview-data {
                            padding-bottom: ' . ($style['sa_sd_height-lap-size'] + 50) . 'px !important;
                                    background-color: rgb(156, 63, 112);
                                    padding: 0;
                         }';
            else:
                $css .= '.oxi-addons-preview-data#oxi-addons-preview-data {
                            padding-top: ' . ($style['sa_sd_height-lap-size'] + 50) . 'px !important;
                                    background-color: rgb(156, 63, 112);
                                    padding: 0;
                         }';
            endif;
        endif;
        return $css;
    }

    public function default_render($style, $child, $admin) {

        echo '  <div class="oxi-addons-divider-sd2 ' . $style['sa_sd_align'] . '">
                     <div class="oxi-addons-divider ' . (array_key_exists('sa_sd_scroll', $style) && $style['sa_sd_scroll'] != '0' ? $style['sa_sd_scroll'] : '') . '">
                </div>
             
            ';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        echo '<div class="oxi-addons-divider-' . $oxiid . '">
                 <div class="oxi-addons-divider">
                 </div>
            ';
        ?>
        <style>
            .oxi-addons-divider-<?php echo $oxiid; ?> .oxi-addons-divider{
                background-image: url("data:image/svg+xml,%3Csvg  xmlns='http://www.w3.org/2000/svg' version='1.0' width='100%25' fill='%23<?php echo $style[11]; ?>' height='100%25' viewBox='0 0 1200 30' preserveAspectRatio='none'%3E%3Cpath d='M0,0S1.209,1.508,200.671,7.031C375.088,15.751,454.658,30,600,30V0H0ZM1200,0s-90.21,1.511-200.671,7.034C824.911,15.751,745.342,30,600,30V0h600Z'%3E%3C/path%3E%3C/svg%3E");
                background-repeat:  repeat-x;
            } 
        </style>
        <?php
        echo '</div>';
        $css .= '
             .oxi-addons-divider-' . $oxiid . '{
                display: block;
                position: absolute;
                width: ' . $style[13] . '%;
                height: ' . $style[15] . 'px;
                pointer-events: none;
                margin-top: -1px;
                top:auto;
                bottom:auto;
                ' . $style[3] . ':0;
                z-index: 1;
             ';
        if ($style[3] == 'bottom') {
            $css .= '-webkit-transform: translate(0%, 0) scaleX(-1);
                        -ms-transform: translate(0%, 0) scaleX(-1);
                        -o-transform: translate(0%, 0) scaleX(-1);
                       
                        transform: translate(0%, 0) scale(-1);
                        margin-bottom: -1px;';
        } else {
            $css .= '-webkit-transform: translate(0%, 0) scaleX(1);
                        -ms-transform: translate(0%, 0) scaleX(1);
                        -o-transform: translate(0%, 0) scaleX(1);
                        transform: translate(0%, 0) scale(1);';
        }
        $css .= '} .oxi-addons-divider-' . $oxiid . ' .oxi-addons-divider{
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
                background-size: 100% 100%;
                top: 0;
                bottom: 0;';
        if ($style[9] == 'yes') {
            $css .= '
                -webkit-animation: scroll 150s linear infinite;
                -moz-animation: scroll 150s linear infinite;
                -ms-animation: scroll 150s linear infinite;
                -o-animation: scroll 150s linear infinite;
                animation: scroll 150s linear infinite;';
        }

        $css .= '}
                @-webkit-keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }

                @-moz-keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }

                @-o-keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }

                @keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}