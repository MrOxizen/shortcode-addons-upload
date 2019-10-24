<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text\Templates;

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

class Style_4 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {
        $text1 = $text2 = '';

        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-animet-text-style-4">
                        <div class="oxi-animet-text-body">
                            <div class="oxi-text-text oxi-text-middle">'; 
                            $str =  $this->text_render($style['sa_animated_text']);
                            $p = (explode(" ",$str)); 
                            foreach ($p as  $value) {
                                for ($i = 0; $i <= strlen($value) - 1; $i++) {
                                    if ($i == 0) {
                                        echo '<span>&nbsp' . $value[$i] . '</span>';
                                    } else {
                                        echo '<span class="oxi-text-hidden">' . $value[$i] . '</span>';
                                    }
                                    echo "<br>";
                                }
                            }
               echo '       </div>
                        </div>
                    </div>';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);


    echo '<div class="oxi-addons-container">  
                <div class="oxi-addons-row">
                    <div class="oxi-addons-animet-text-' . $oxiid . '">
                        <div class="oxi-animet-text-body">
                            <div class="oxi-text-text oxi-text-middle">'; 
                            $str =  $stylefiles[3];
                            $p = (explode(" ",$str)); 
                            foreach ($p as  $value) {
                                for ($i = 0; $i <= strlen($value) - 1; $i++) {
                                    if ($i == 0) {
                                        echo '<span>&nbsp' . $value[$i] . '</span>';
                                    } else {
                                        echo '<span class="oxi-text-hidden">' . $value[$i] . '</span>';
                                    }
                                    echo "<br>";
                                }
                            }
               echo '       </div>
                        </div>
                    </div>
                </div>
            
        </div>';
               
    $css = '
            .oxi-addons-animet-text-' . $oxiid . '{
                width: 100%;
                height:auto;
                float: left;
            }
            .oxi-animet-text-body{
                width: 100%;
                height: auto;
                float: left;
            }
            .oxi-text-middle{
                width: 100%;
                display: flex;
                justify-content: center;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
            }
            .oxi-text-text {
                color: '.$styledata[5].';
                font-size: '.$styledata[7].'px;
                ' . OxiAddonsFontSettings($styledata, 11) . '; 
                cursor: pointer;
            }
            .oxi-text-hidden{
                max-width: 0;
                opacity: 0;
                transition: '.$styledata[3].'s ease-in;
            }
            .oxi-text-text:hover .oxi-text-hidden{
                opacity: 1;
                max-width: 1em;
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                
                .oxi-text-middle{
                    display: flex;
                    justify-content: center;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 18) . ';
                }
                .oxi-text-text {
                    font-size: '.$styledata[8].'px;
                    cursor: pointer;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-text-middle{
                    display: flex;
                    justify-content: center;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
                }
                .oxi-text-text {
                    font-size: '.$styledata[9].'px;
                    cursor: pointer;
                }
            }
            ';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
