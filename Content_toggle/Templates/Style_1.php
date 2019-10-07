<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_toggle\Templates;

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
        $before = $after = $content_one = $content_two = '';
        if (!empty($style['sa_before_ct_text'])) {
            $before = '<div class="oxi-addons-before-text  oxi-addons-text">' . $this->text_render($style['sa_before_ct_text']) . '</div>';
        }
        if (!empty($style['sa_after_ct_text'])) {
            $after = '<div class="oxi-addons-after-text oxi-addons-text">' . $this->text_render($style['sa_after_ct_text']) . '</div>';
        }
        if (!empty($style['sa_ct_first_content'])) {
            $content_one = '<div class="oxi-addons-CT-1-content-One">' . $this->text_render($style['sa_ct_first_content']) . '</div>';
        }
        if (!empty($style['sa_ct_second_content'])) {
            $content_two = '<div class="oxi-addons-CT-1-content-two">' . $this->text_render($style['sa_ct_second_content']) . '</div>';
        }
        echo '<div class="oxi-addons-CT-1">
                    <div class="oxi-addons-CT-1-row">
			<div class="oxi-addons-CT-1-Switch-area">
                            ' . $before . '
                            <div class="oxi-addons-CT-1-Switch">
				<input class="oxi-addons-CT-1-checkbox" type="checkbox" name="oxi-addons-switch" class="checkbox" />  
				<div class="oxi-addons-switch"></div> 
                            </div>
                            ' . $after . '
                        </div>
                        <div class="oxi-addons-CT-1-main-content">
                            ' . $content_one . '
                            ' . $content_two . '
                        </div>
                    </div>
             </div>';
    }

    public function inline_public_jquery() {
        
         $jquery = 'jQuery(document).ready(function () {
            jQuery(".oxi-addons-CT-1 .oxi-addons-switch").click(function () {
                jQuery(this).toggleClass("oxi-addons-switchOn");
                jQuery(".oxi-addons-CT-1 .oxi-addons-CT-1-content-One").toggleClass("oxi-active");
                jQuery(".oxi-addons-CT-1 .oxi-addons-CT-1-content-two").toggleClass("oxi-active");
            });
            jQuery(".oxi-addons-CT-1 .oxi-addons-text").click(function () {
                jQuery(".oxi-addons-CT-1 .oxi-addons-switch").toggleClass("oxi-addons-switchOn");
                jQuery(".oxi-addons-CT-1 .oxi-addons-CT-1-content-One").toggleClass("oxi-active");
                jQuery(".oxi-addons-CT-1 .oxi-addons-CT-1-content-two").toggleClass("oxi-active");
            });
             
        });';
        return $jquery;
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $before = $after = $content_one = $content_two = '';
        if (!empty($stylefiles[2])) {
            $before = '<div class="oxi-addons-before-text  oxi-addons-text">' . OxiAddonsTextConvert($stylefiles[2]) . '</div>';
        }
        if (!empty($stylefiles[4])) {
            $after = '<div class="oxi-addons-after-text oxi-addons-text">' . OxiAddonsTextConvert($stylefiles[4]) . '</div>';
        }
        if (!empty($stylefiles[6])) {
            $content_one = '<div class="oxi-addons-CT-content-One">' . OxiAddonsTextConvert($stylefiles[6]) . '</div>';
        }
        if (!empty($stylefiles[8])) {
            $content_two = '<div class="oxi-addons-CT-content-two">' . OxiAddonsTextConvert($stylefiles[8]) . '</div>';
        }
        echo ' <div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-CT-' . $oxiid . ' ">
					<div class="oxi-addons-CT-row">
						<div class="oxi-addons-CT-Switch-area">
							' . $before . '
							<div class="oxi-addons-CT-Switch">
								<input class="oxi-addons-CT-checkbox" type="checkbox" name="oxi-addons-switch" class="checkbox" />  
								<div class="oxi-addons-switch"></div> 
							</div>
							' . $after . '
						</div>
						<div class="oxi-addons-CT-main-content">
							 ' . $content_one . '
							 ' . $content_two . '
						</div>
					</div>
				</div>
            </div>
        </div>';
        $css = '
        .oxi-addons-CT-' . $oxiid . '{
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 159) . ';
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-row{
            width: 100%;
            text-align: center;
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-Switch-area{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-before-text{
            font-size: ' . $styledata[3] . 'px;
            color: ' . $styledata[7] . ';
            ' . OxiAddonsFontSettings($styledata, 9) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . '; 
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-after-text{
            font-size: ' . $styledata[31] . 'px;
            color: ' . $styledata[35] . ';
            ' . OxiAddonsFontSettings($styledata, 37) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . '; 
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-main-content{
            width: 100%;
            float: left;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . ';
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-checkbox{
            display: none !important;
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-One{
            display: block;
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-One.oxi-active{
            display: none;
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-two{
            display: none;
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-two.oxi-active{
            display: block;
        } 
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch{  
            width:' . $styledata[61] . 'px;
            height:' . $styledata[65] . 'px;  
            background:' . $styledata[59] . ';
            border: ' . $styledata[69] . 'px ' . $styledata[70] . '  ' . $styledata[73] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . '; 
            z-index:0;  
            margin:0;  
            padding:0;   
            appearance:none;    
            cursor:pointer;  
            position:relative;  
             
        }  
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch::before{  
            content:"";  
            position:absolute;  
            left:5px;
            width:' . $styledata[109] . 'px;
            height:' . $styledata[113] . 'px;
            top: 50%;
            transform: translateY(-50%);   
            z-index:1;  
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . '; 
        }  
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch::after{  
            content:"";
            background:' . $styledata[107] . ';  
            width:' . $styledata[109] . 'px;
            height:' . $styledata[113] . 'px;  
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 123) . ';
            transition-duration:500ms;
            z-index:2;  
            position:absolute;   
            top: 50%;
            transform: translateY(-50%);
            left:5px;  
            ' . OxiAddonsBoxShadowSanitize($styledata, 117) . ';  
        }   
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switchOn:after{  
            left:' . $styledata[139] . 'px;   
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-CT-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 160) . ';
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-before-text{
            font-size: ' . $styledata[4] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . '; 
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-after-text{
            font-size: ' . $styledata[32] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . '; 
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-main-content{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . ';
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch{  
            width:' . $styledata[62] . 'px;
            height:' . $styledata[66] . 'px;  
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 76) . ';       
        }  
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch::before{  
            width:' . $styledata[110] . 'px;
            height:' . $styledata[114] . 'px; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 124) . '; 
        }  
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch::after{  
            width:' . $styledata[110] . 'px;
            height:' . $styledata[114] . 'px;  
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 124) . ';   
        }   
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switchOn:after{  
            left:' . $styledata[140] . 'px;   
        }
           
    }
    @media only screen and (max-width : 668px){
       .oxi-addons-CT-' . $oxiid . '{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 161) . ';
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-before-text{
            font-size: ' . $styledata[5] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . '; 
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-after-text{
            font-size: ' . $styledata[33] . 'px;
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . '; 
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-main-content{
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
        }
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch{  
            width:' . $styledata[63] . 'px;
            height:' . $styledata[67] . 'px;  
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';       
        }  
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch::before{  
            width:' . $styledata[111] . 'px;
            height:' . $styledata[115] . 'px; 
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . '; 
        }  
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch::after{  
            width:' . $styledata[111] . 'px;
            height:' . $styledata[115] . 'px;  
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';   
        }   
        .oxi-addons-CT-' . $oxiid . ' .oxi-addons-switchOn:after{  
            left:' . $styledata[141] . 'px;   
        }
    }';

        $jquery = 'jQuery(document).ready(function () {
            jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch").click(function () {
                jQuery(this).toggleClass("oxi-addons-switchOn");
                jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-One").toggleClass("oxi-active");
                jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-two").toggleClass("oxi-active");
            });
            jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-text").click(function () {
                jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-switch").toggleClass("oxi-addons-switchOn");
                jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-One").toggleClass("oxi-active");
                jQuery(".oxi-addons-CT-' . $oxiid . ' .oxi-addons-CT-content-two").toggleClass("oxi-active");
            });
             
        });';


        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }

}
