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

class Style_11 extends Templates {

    public function inline_public_css() {
        $style = $this->style;
        $color = str_replace('#', '', $style['sa_sd_color']);
        $css = '.' . $this->WRAPPER . ' .oxi-addons-divider-sd11 .oxi-addons-divider{
                background-image: url("data:image/svg+xml,%3Csvg width=\'100%25\' height=\'100%25\' viewBox=\'0 0 1280 140\' preserveAspectRatio=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23' . $color . '\'%3E%3Cpath d=\'M0 51.76c36.21-2.25 77.57-3.58 126.42-3.58 320 0 320 57 640 57 271.15 0 312.58-40.91 513.58-53.4V0H0z\' fill-opacity=\'.3\'/%3E%3Cpath d=\'M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V0H0z\' fill-opacity=\'.5\'/%3E%3Cpath d=\'M0 0v3.4C28.2 1.6 59.4.59 94.42.59c320 0 320 84.3 640 84.3 285 0 316.17-66.85 545.58-81.49V0z\'/%3E%3C/g%3E%3C/svg%3E");
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

        echo '  <div class="oxi-addons-divider-sd11 ' . $style['sa_sd_align'] . '">
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
                background-image: url("data:image/svg+xml,%3Csvg width='100%25' height='100%25' viewBox='0 0 1280 140' preserveAspectRatio='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23<?php echo $styledata[11]; ?>'%3E%3Cpath d='M0 51.76c36.21-2.25 77.57-3.58 126.42-3.58 320 0 320 57 640 57 271.15 0 312.58-40.91 513.58-53.4V0H0z' fill-opacity='.3'/%3E%3Cpath d='M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V0H0z' fill-opacity='.5'/%3E%3Cpath d='M0 0v3.4C28.2 1.6 59.4.59 94.42.59c320 0 320 84.3 640 84.3 285 0 316.17-66.85 545.58-81.49V0z'/%3E%3C/g%3E%3C/svg%3E");
                background-repeat:  repeat-x;
            } 
            <?php
            echo '.oxi-addons-divider-' . $oxiid . ' .oxi-addons-divider{';
            if ($styledata[3] == 'bottom') {
                echo '-webkit-transform: translate(0%, 0) scaleX(-1) scaleY(1) !important;;
                            -ms-transform: translate(0%, 0) scaleX(-1) scaleY(1) !important;;
                            -o-transform: translate(0%, 0) scaleX(-1) scaleY(1) !important;;
                            transform: translate(0%, 0) scaleX(-1) scaleY(1) !important;;';
            } else {
                echo '-webkit-transform: translate(0%, 0) scaleX(-1) !important;;
                        -ms-transform: translate(0%, 0) scaleX(-1) !important;;
                        -o-transform: translate(0%, 0) scaleX(-1) !important;;
                        transform: translate(0%, 0) scaleX(-1) !important;;';
            }
            echo '}';
            ?>
        </style>
        <?php
        echo '</div>';
        $css .= '
             .oxi-addons-divider-' . $oxiid . '{
                display: block;
                position: absolute;
                width: ' . $styledata[13] . '%;
                height: ' . $styledata[15] . 'px;
                pointer-events: none;
                margin-top: -1px;
                top:auto;
                bottom:auto;
                ' . $styledata[3] . ':0;
                z-index: 1;
             ';
        if ($styledata[3] == 'bottom') {
            $css .= '-webkit-transform: translate(0%, 0) scaleX(-1);
                        -ms-transform: translate(0%, 0) scaleX(-1);
                        -o-transform: translate(0%, 0) scaleX(-1);
                        transform: translate(0%, 0) scale(-1);';
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
        if ($styledata[9] == 'yes') {
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
