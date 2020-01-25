<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_scroll\Templates;

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

    public function default_render($style, $child, $admin) {

        $img = $btn = $title = '';

        $repeater = (array_key_exists('sa_is_image_repeater', $style) && is_array($style['sa_is_image_repeater'])) ? $style['sa_is_image_repeater'] : [];
        foreach ($repeater as $key => $value) {

            $img = '<img class="oxi-img oxi-IS4-image-' . $key . '"  src="' . $this->media_render('sa_is_image_media', $value) . '" alt="image" />';
            
            $linkstart = '';
            $linkend = '';
            if (array_key_exists('sa_is_btn_on', $value) && $value['sa_is_btn_on'] != '0') {    
                
                $btn = ' <div class="oxi-addons-main-button"> 
                            <a ' . $this->url_render('sa_is_btn_link', $value) . ' class="oxi-addons-link">
                                     ' . $this->text_render($value['sa_is_btn_text']) . '
                            </a>
                        </div>';
               
            } else {
                $linkstart = ' <a ' . $this->url_render('sa_is_btn_link', $value) . '>';
                $linkend = ' </a>';
            }
            
            if (array_key_exists('sa_is_title_on', $value) && $value['sa_is_title_on'] != '0') {
                
                $title = ' <div class="oxi-addons-title">  ' . $this->text_render($value['sa_is_title']) . '</div>';
            }
            
            echo '<div class="' . $this->column_render('sa_is_col', $style) . ' oxi-addons-coloum">
                        <div class="oxi-addons-image-scroll-4" ' . $this->animation_render('sa_is_animation', $value) . '>  
                            <div class="oxi-addons-image-main" id="oxi-addons-IS4-image-main-' . $key . '" >
                                    ' . $linkstart . '
                                <div class="oxi-addons-img" id="oxi-IS4-img-' . $key . '">
                                    ' . $img . '
                                    ' . $btn . '
                                </div>
                                    ' . $title . '
                                    ' . $linkend . '
                            </div> 
                        </div>';
            echo '</div>';
        }
    }

    public function inline_public_jquery() {
        $jquery = '';
        $style = $this->style;
        $repeater = (array_key_exists('sa_is_image_repeater', $style) && is_array($style['sa_is_image_repeater'])) ? $style['sa_is_image_repeater'] : [];
        foreach ($repeater as $key => $value) {
            if ($value['sa_is_image_view'] == 'top-to-bottom') {
                 $jquery .= 'jQuery(".'.$this->WRAPPER.' #oxi-IS4-img-' . $key . '").mouseover(function(){ 
                    var imgHeight= jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").height();  
                    var outerHeight = jQuery(".'.$this->WRAPPER.' #oxi-addons-IS4-image-main-' . $key . '").outerHeight(); 
                    var height = imgHeight-outerHeight; 
                    jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").css({"transform":"translateY(-" + height + "px)"});
                });  
                jQuery(".'.$this->WRAPPER.' #oxi-IS4-img-' . $key . '").mouseout(function(){ 
                    jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").css({"transform":"translateY(0px)"});
                });   
            ';
           
            } elseif ($value['sa_is_image_view'] == 'bottom-to-top') {
                $jquery .= 'jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").css({
                        "position" : "absolute",
                        "bottom" : "0",
                        "left" : "0",
                        "Top" : "auto",
                    }); 
                    jQuery(".'.$this->WRAPPER.' #oxi-IS4-img-' . $key . '").mouseover(function(){
                            var imgHeight= jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").height();  
                            var outerHeight = jQuery(".'.$this->WRAPPER.' #oxi-addons-IS4-image-main-' . $key . '").outerHeight(); 
                            var height = imgHeight-outerHeight; 
                            jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").css({"transform":"translateY(" + height + "px)"});
                        });  
                        jQuery(".'.$this->WRAPPER.' #oxi-IS4-img-' . $key . '").mouseout(function(){ 
                            jQuery(".'.$this->WRAPPER.' .oxi-IS4-image-' . $key . '").css({"transform":"translateY(0px)"});
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
            $img = $flink = $lastlink = $button = $title = '';
            if ($stylefiles[2] != '' && $data[3] != '') {
                $button = '
            <div class="oxi-addons-main-button"  id="oxi-img-' . $value['id'] . '"> 
                <a href="' . OxiAddonsUrlConvert($data[3]) . '" class="oxi-addons-link"  target="' . $styledata[98] . '">
                    ' . OxiAddonsTextConvert($stylefiles[2]) . '
                </a>
            </div>
        ';
            } elseif ($stylefiles[2] != '' && $data[3] == '') {
                $button = '
        <div class="oxi-addons-main-button">
            <div class="oxi-addons-link">
                ' . OxiAddonsTextConvert($stylefiles[2]) . '
            </div>
        </div>
    ';
            }
            if ($data[1] != '') {
                $img = '  
                    <div class="oxi-addons-img" >
                        <img class="oxi-img oxi-image-' . $value['id'] . '" src="' . OxiAddonsUrlConvert($data[1]) . '" alt="image" />
                             ' . $button . '
                   </div>  
        ';
            }
            if ($data[7] != '') {
                $title = '  
                    <div class="oxi-addons-title">  ' . OxiAddonsTextConvert($data[7]) . '</div>  
        ';
            }


            echo '
        <div class="oxi-addons-main-wrapper-' . $oxiid . ' ">
            <div class="oxi-addons-wrapper-' . $oxiid . '" >  
             <div class="oxi-addons-image-main" id="oxi-addons-image-main-' . $value['id'] . '" >
                ' . $img . '   
                ' . $title . '
            </div>  
        </div>';
            echo '</div>';
            if ($data[5] == 'top') {
                $jquery .= 'jQuery("#oxi-img-' . $value['id'] . '").mouseover(function(){ 
                    var imgHeight= jQuery(".oxi-image-' . $value['id'] . '").height();  
                    var outerHeight = jQuery("#oxi-addons-image-main-' . $value['id'] . '").outerHeight(); 
                    var height = imgHeight-outerHeight; 
                    jQuery(".oxi-image-' . $value['id'] . '").css({"transform":"translateY(-" + height + "px)"});
                });  
                jQuery("#oxi-img-' . $value['id'] . '").mouseout(function(){ 
                    jQuery(".oxi-image-' . $value['id'] . '").css({"transform":"translateY(0px)"});
                });   
            ';
            } elseif ($data[5] == 'bottom') {
                $jquery .= 'jQuery(".oxi-image-' . $value['id'] . '").css({
                        "position" : "absolute",
                        "bottom" : "0",
                        "left" : "0",
                        "Top" : "auto",
                    }); 
                    jQuery("#oxi-img-' . $value['id'] . '").mouseover(function(){
                            var imgHeight= jQuery(".oxi-image-' . $value['id'] . '").height();  
                            var outerHeight = jQuery("#oxi-addons-image-main-' . $value['id'] . '").outerHeight(); 
                            var height = imgHeight-outerHeight; 
                            jQuery(".oxi-image-' . $value['id'] . '").css({"transform":"translateY(" + height + "px)"});
                        });  
                        jQuery("#oxi-img-' . $value['id'] . '").mouseout(function(){ 
                            jQuery(".oxi-image-' . $value['id'] . '").css({"transform":"translateY(0px)"});
                        });   
                    ';
            }
        }
        echo ' </div>'
        . '</div>';



        $css = ' 
        
       .oxi-addons-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . '; 
            overflow: hidden; 
             display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
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
               ' . OxiAddonsBoxShadowSanitize($styledata, 34) . ';
               position: relative; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 48) . '; 
              transition: all 0.5s;
        }
          .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image-main:hover{ 
                ' . OxiAddonsBoxShadowSanitize($styledata, 42) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-img{
            width: ' . $styledata[19] . 'px;
            height: ' . $styledata[23] . 'px;
            position: relative;
            max-width: 100%;  
            float: left;
            overflow: hidden;  
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
           font-size: ' . $styledata[70] . 'px;
            ' . OxiAddonsFontSettings($styledata, 74) . ';
            Background: ' . $styledata[174] . ';
            color: ' . $styledata[80] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . '; 
            width: 100%;
            float: left; 
        }
       
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-img{
            width: 100%;
            max-width: 100%;
            height:auto;
            transition: all ' . $styledata[27] . 's ; 
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
            position: absolute;
            left:0;
            top: 0; 
           Background: ' . $styledata[176] . ';
            width: 100%;
            height: 100%;
            opacity: 0;  
            visibility: hidden;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-image-main:hover  .oxi-addons-main-button{ 
            opacity: 1;
            visibility: visible; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
            background: ' . $styledata[112] . ';
            color: ' . $styledata[110] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 104) . ';
            font-size: ' . $styledata[100] . 'px;
            border:  ' . $styledata[114] . 'px ' . $styledata[115] . ';
            border-color: ' . $styledata[118] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 120) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';  

            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{
            background: ' . $styledata[154] . ';
            color: ' . $styledata[152] . '; 
            border-color: ' . $styledata[156] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 158) . ';
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
              .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-img{
            width: ' . $styledata[20] . 'px;
            height: ' . $styledata[24] . 'px; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
           font-size: ' . $styledata[71] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';  
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
            font-size: ' . $styledata[101] . 'px; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 121) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';   
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{ 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
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
                   .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-img{
            width: ' . $styledata[21] . 'px;
            height: ' . $styledata[25] . 'px; 
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
           font-size: ' . $styledata[72] . 'px; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 84) . ';  
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
            font-size: ' . $styledata[102] . 'px; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 122) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . ';   
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{ 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
        } 
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
