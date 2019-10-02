<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_scroll\Templates;

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

    public function default_render($style, $child, $admin) {

        $img = '';

        $repeater = (array_key_exists('sa_is_image_repeater', $style) && is_array($style['sa_is_image_repeater'])) ? $style['sa_is_image_repeater'] : [];
        foreach ($repeater as $key => $value) {

            $img = '<a ' . $this->url_render('sa_is_image_url', $value) . ' class="oxi-link sa_is_image_repeater_' . $key . '">
                    <div class="oxi-addons-image-main" id="oxi-addons-IS2-image-main-' . $key . '" >
                        <div class="oxi-addons-img">
                            <img class="oxi-img" id="oxi-IS2-img-' . $key . '" src="' . $this->media_render('sa_is_image_media', $value) . '" alt="image" />
                        </div>
                    </div> 
                </a>';

            echo '<div class="' . $this->column_render('sa_is_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                        <div class="oxi-addons-image-scroll-style-2" ' . $this->animation_render('sa_is_animation', $style) . ' >  
                            ' . $img . '
                        </div>';
            echo '</div>';
        }
    }

    public function inline_public_jquery() {
        $jquery = '';
        $style = $this->style;
        $repeater = (array_key_exists('sa_is_image_repeater', $style) && is_array($style['sa_is_image_repeater'])) ? $style['sa_is_image_repeater'] : [];
        foreach ($repeater as $key => $value) {
            if ($value['sa_is_image_view'] == 'left_to_right') {
                $jquery .= ' 
                jQuery("#oxi-IS2-img-' . $key . '").mouseover (function(){
                    var imgWidth = jQuery(this).width();  
                    var outerWidth = jQuery("#oxi-addons-IS2-image-main-' . $key . '").outerWidth(); 
                    var height = imgWidth-outerWidth; 
                    jQuery(this).css({"transform":"translateX(-" + height + "px)"});
                });  
                jQuery("#oxi-IS2-img-' . $key . '").mouseout(function(){ 
                    jQuery(this).css({"transform":"translateX(0px)"});
                });   
            ';
            } elseif ($value['sa_is_image_view'] == 'right_to_left') {
                $jquery .= '  
                    jQuery("#oxi-IS2-img-' . $key . '").css({
                        "position" : "absolute",
                        "right" : "0",
                        "top" : "0"
                    }); 
                jQuery("#oxi-IS2-img-' . $key . '").mouseover (function(){
                    var imgWidth = jQuery(this).width();  
                    var outerWidth = jQuery("#oxi-addons-IS2-image-main-' . $key . '").outerWidth(); 
                    var height = imgWidth-outerWidth; 
                    jQuery(this).css({"transform":"translateX(" + height + "px)"});
                });  
                jQuery("#oxi-IS2-img-' . $key . '").mouseout(function(){ 
                    jQuery(this).css({"transform":"translateX(0px)"});
                });   
            ';
            }
        }
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $jquery = '';
        echo '<div class="oxi-addons-container">'
        . '<div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $img = $flink = $lastlink = '';
            if ($data[3] != '') {
                $flink = '
              <a href="' . OxiAddonsUrlConvert($data[3]) . '" class="oxi-link" target="' . $styledata[64] . '">
        ';

                $lastlink = '
            </a>
        ';
            }
            if ($data[1] != '') {
                $img = ' 
            ' . $flink . '
                <div class="oxi-addons-image-main" id="oxi-addons-image-main-' . $value['id'] . '" >
                    <div class="oxi-addons-img">
                        <img class="oxi-img" id="oxi-img-' . $value['id'] . '" src="' . OxiAddonsUrlConvert($data[1]) . '" alt="image" />
                    </div>
                </div> 
           ' . $lastlink . '
        ';
            }

            echo '
        <div class="oxi-addons-main-wrapper-' . $oxiid . '  ' . OxiAddonsItemRows($styledata, 66) . ' ">
            <div class="oxi-addons-wrapper-' . $oxiid . '" >  
                ' . $img . '
            </div>';

            echo '</div></div>';
            if ($data[5] == 'top') {
                $jquery .= ' 
                jQuery("#oxi-img-' . $value['id'] . '").mouseover (function(){
                    var imgWidth = jQuery(this).width();  
                    var outerWidth = jQuery("#oxi-addons-image-main-' . $value['id'] . '").outerWidth(); 
                    var height = imgWidth-outerWidth; 
                    jQuery(this).css({"transform":"translateX(-" + height + "px)"});
                });  
                jQuery("#oxi-img-' . $value['id'] . '").mouseout(function(){ 
                    jQuery(this).css({"transform":"translateX(0px)"});
                });   
            ';
            } elseif ($data[5] == 'bottom') {
                $jquery .= '  
                    jQuery("#oxi-img-' . $value['id'] . '").css({
                        "position" : "absolute",
                        "right" : "0",
                        "top" : "0"
                    }); 
                jQuery("#oxi-img-' . $value['id'] . '").mouseover (function(){
                    var imgWidth = jQuery(this).width();  
                    var outerWidth = jQuery("#oxi-addons-image-main-' . $value['id'] . '").outerWidth(); 
                    var height = imgWidth-outerWidth; 
                    jQuery(this).css({"transform":"translateX(" + height + "px)"});
                });  
                jQuery("#oxi-img-' . $value['id'] . '").mouseout(function(){ 
                    jQuery(this).css({"transform":"translateX(0px)"});
                });   
            ';
            }
        }
        echo ' </div>';



        $css = ' 
        
        .oxi-addons-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . '; 
            overflow: hidden; 
             display: flex;
            align-items: center;
            justify-content: center;
        }  
       .oxi-addons-wrapper-' . $oxiid . ' .oxi-link{ 
            width: 100%;
            float: left;  
             display: flex;
            align-items: center;
            justify-content: center;
        }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image-main{
            width: ' . $styledata[19] . 'px;
            height: ' . $styledata[23] . 'px;
            max-width: 100%; 
            overflow: hidden;  
               ' . OxiAddonsBoxShadowSanitize($styledata, 34) . ';
               position: relative; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . '; 
              transition: all 0.5s;
        }
          .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image-main:hover{ 
                ' . OxiAddonsBoxShadowSanitize($styledata, 42) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-img{
            width: 100%;
            float: left; 
            height: 100%;
        }
       
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-img{
            width: auto !important; 
            max-width: none !important; 
            height: 100%;
            max-height: 100%;
            transition: all ' . $styledata[27] . 's ; 
        }  

        @media only screen and (min-width : 669px) and (max-width : 993px){ 
            .oxi-addons-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';  
               
            }  
             .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image-main{
                width: ' . $styledata[20] . 'px;
                height: ' . $styledata[24] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . '; 
            }   
        }
        @media only screen and (max-width : 668px){  
               .oxi-addons-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';  
            }  
             .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image-main{
                width: ' . $styledata[21] . 'px;
                height: ' . $styledata[25] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . '; 
            }   
        }';

        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
