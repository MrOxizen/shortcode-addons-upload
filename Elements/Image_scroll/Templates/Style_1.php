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

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {
        
        $img = '';
        
        $repeater =  (array_key_exists('sa_is_image_repeater', $style) && is_array($style['sa_is_image_repeater'])) ? $style['sa_is_image_repeater'] : [];
        foreach ($repeater as $key => $value) {
            
        $img = '<a ' . $this->url_render('sa_is_image_url', $value) . ' class="oxi-link sa_is_image_repeater_' . $key . '">
                    <div class="oxi-addons-image-main" id="oxi-addons-image-main-' . $key . '" >
                        <div class="oxi-addons-img">
                            <img class="oxi-img" id="oxi-img-' . $key . '" src="' . $this->media_render('sa_is_image_media', $value) . '" alt="image" />
                        </div>
                    </div> 
                </a>';
        
            echo '<div class="' . $this->column_render('sa_is_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">
                        <div class="oxi-addons-is" >  
                            ' . $img . '
                        </div>';
            echo '</div>';
        }
    }
    
    
     public function inline_public_jquery() {
        $jquery = '';
        $style = $this->style;
        $repeater =  (array_key_exists('sa_is_image_repeater', $style) && is_array($style['sa_is_image_repeater'])) ? $style['sa_is_image_repeater'] : [];
        foreach ($repeater as $key => $value) {
         if ($value['sa_is_image_view'] == 'top-to-bottom') {
                $jquery .= 'jQuery("#oxi-img-' . $key . '").mouseover(function(){
                    var imgHeight= jQuery(this).height();  
                    var outerHeight = jQuery("#oxi-addons-image-main-' . $key . '").outerHeight(); 
                    var height = imgHeight-outerHeight; 
                    jQuery(this).css({"transform":"translateY(-" + height + "px)"});
                });  
                jQuery("#oxi-img-' . $key . '").mouseout(function(){ 
                    jQuery(this).css({"transform":"translateY(0px)"});
                });   
            ';
            }
            elseif ($value['sa_is_image_view'] == 'bottom-to-top') {
                $jquery .= 'jQuery("#oxi-img-' . $key . '").css({
                        "position" : "absolute",
                        "bottom" : "0",
                        "left" : "0",
                        "Top" : "auto",
                    }); 
                    jQuery("#oxi-img-' . $key . '").mouseover(function(){
                            var imgHeight= jQuery(this).height();  
                            var outerHeight = jQuery("#oxi-addons-image-main-' . $key . '").outerHeight(); 
                            var height = imgHeight-outerHeight; 
                            jQuery(this).css({"transform":"translateY(" + height + "px)"});
                        });  
                        jQuery("#oxi-img-' . $key . '").mouseout(function(){ 
                            jQuery(this).css({"transform":"translateY(0px)"});
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
                $flink = '<a href="' . OxiAddonsUrlConvert($data[3]) . '" class="oxi-link" target="' . $styledata[64] . '">';

                $lastlink = '</a>';
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

            echo ' <div class="oxi-addons-main-wrapper-' . $oxiid . '  ' . OxiAddonsItemRows($styledata, 66) . '  ">
                        <div class="oxi-addons-wrapper-' . $oxiid . '" >  
                            ' . $img . '
                        </div>';
            echo '</div>';
            if ($data[5] == 'top') {
                $jquery .= 'jQuery("#oxi-img-' . $value['id'] . '").mouseover(function(){
                    var imgHeight= jQuery(this).height();  
                    var outerHeight = jQuery("#oxi-addons-image-main-' . $value['id'] . '").outerHeight(); 
                    var height = imgHeight-outerHeight; 
                    jQuery(this).css({"transform":"translateY(-" + height + "px)"});
                });  
                jQuery("#oxi-img-' . $value['id'] . '").mouseout(function(){ 
                    jQuery(this).css({"transform":"translateY(0px)"});
                });   
            ';
            } elseif ($data[5] == 'bottom') {
                $jquery .= 'jQuery("#oxi-img-' . $value['id'] . '").css({
                        "position" : "absolute",
                        "bottom" : "0",
                        "left" : "0",
                        "Top" : "auto",
                    }); 
                    jQuery("#oxi-img-' . $value['id'] . '").mouseover(function(){
                            var imgHeight= jQuery(this).height();  
                            var outerHeight = jQuery("#oxi-addons-image-main-' . $value['id'] . '").outerHeight(); 
                            var height = imgHeight-outerHeight; 
                            jQuery(this).css({"transform":"translateY(" + height + "px)"});
                        });  
                        jQuery("#oxi-img-' . $value['id'] . '").mouseout(function(){ 
                            jQuery(this).css({"transform":"translateY(0px)"});
                        });   
                    ';
            }
        }
        echo ' </div></div>';



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
        }
       
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-img{
            width: 100%;
            max-width: 100%;
            height:auto;
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
