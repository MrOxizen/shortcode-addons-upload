<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Headers\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {
//        echo '<pre>';
//        print_r($style['sa_s_image_ribbon_pos']);
//        echo '</pre>';
//        echo $this->url_render('sa_dual_btn_left_link', $style);
      $sub_heading = $heading = $button  = $detail = '';

        if ($style['sa_headers_h_1'] != '') {
            $heading  = '
                <div class="oxi-addons-heading" ' . $this->animation_render('sa_headers_head_1_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_h_1']) . '
                </div>
            ';
        }

        if ($style['sa_headers_h_2'] != '') {
            $sub_heading  = '
                    <div class="oxi-addons-name" ' . $this->animation_render('sa_headers_head_2_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_h_2']) . '
                    </div>
            ';
        }


        if ($style['sa_headers_sd'] != '') {
            $detail = '
                    <div class="oxi-addons-short-detail" ' . $this->animation_render('sa_headers_sd_animation', $style) . '>
                        ' . $this->text_render($style['sa_headers_sd']) . '
                    </div>
            ';
        }

        if ($style['sa_headers_button_left_text'] != '' && $style['sa_headers_button_left_link-url'] != '') {
            $button = '
            
                <a ' . $this->url_render('sa_headers_button_left_link', $style) . ' class="oxi-addons-link"  ' . $this->animation_render('sa_headers_button_left_animation', $style) . '  >
                    ' . $this->text_render($style['sa_headers_button_left_text']) . '
                </a>
           
        ';
        } elseif ($style['sa_headers_button_left_text'] != '' && $style['sa_headers_button_left_link-url'] == '') {
            $button = '
     
            <div class="oxi-addons-link" ' . $this->animation_render('sa_headers_button_left_animation', $style) . '>
                ' . $this->text_render($style['sa_headers_button_left_text']) . '
            </div>
   
    ';
        }
          if ($style['sa_headers_position_rev'] == 'left') {
            $position = '
            left: 0;
        ';
        } else {
            $position = ' 
             right: 0;
         ';
        }
        echo '<div class="oxi-addons-headers-wrapper">
                <div class="oxi-addons-wrapper-left-side" style="'.$position.'"> 
                    <div class="oxi-addons-main"> 
                    ' . $sub_heading . '
                    ' . $heading . '
                    ' . $detail . '.
                        <div class="oxi-addons-main-button" >
                        ' . $button . '  
                        </div>
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
        $sub_heading = $heading = $button = $button_right = $detail = '';
        $css = '';
        if ($stylefiles[2] != '') {
            $sub_heading = '
                <div class="oxi-addons-name" ' . OxiAddonsAnimation($styledata, 75) . '>
                        ' . OxiAddonsTextConvert($stylefiles[2]) . '
                </div>
            ';
        }
        if ($stylefiles[6] != '') {
            $heading = '  
                <div class="oxi-addons-heading" ' . OxiAddonsAnimation($styledata, 108) . '>
                    ' . OxiAddonsTextConvert($stylefiles[6]) . '
                </div> 
            ';
        }
        if ($stylefiles[8] != '') {
            $detail = '
                    <div class="oxi-addons-short-detail" ' . OxiAddonsAnimation($styledata, 141) . '>
                        ' . OxiAddonsTextConvert($stylefiles[8]) . '
                    </div>
            ';
        }
        if ($stylefiles[10] != '' && $stylefiles[12] != '') {
            $button = ' 
                <a href="' . OxiAddonsUrlConvert($stylefiles[12]) . '" class="oxi-addons-link"  target="' . $styledata[146] . '" ' . OxiAddonsAnimation($styledata, 234) . '>
                    ' . OxiAddonsTextConvert($stylefiles[10]) . '
                </a> 
        ';
        } elseif ($stylefiles[10] != '' && $stylefiles[12] == '') {
            $button = ' 
            <div class="oxi-addons-link" ' . OxiAddonsAnimation($styledata, 234) . '>
                ' . OxiAddonsTextConvert($stylefiles[10]) . '
            </div> 
    ';
        }
        if ($styledata[3] == 'left') {
            $position = '
            left: 0;
        ';
        } else {
            $position = ' 
             right: 0;
         ';
        }
        echo '<div class="oxi-addons-container">
			<div class="oxi-addons-row">
				<div class="oxi-addons-wrapper-' . $oxiid . '">
					<div class="oxi-addons-wrapper-left-side"> 
						<div class="oxi-addons-main"> 
						' . $sub_heading . '
						' . $heading . '
						' . $detail . '.
							<div class="oxi-addons-main-button" >
							' . $button . '  
							</div>
						</div>
					</div> 
				</div>
            </div>
        </div>
        ';
        $css = '
        .oxi-addons-wrapper-' . $oxiid . '{ 
            width: 100%;
            float: left; 
            overflow: hidden; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
            ' . OxiAddonsBGImage($styledata, 41) . ';  
            position: relative;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main{
            width: 100%;
            float: left;
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{
            display: flex; 
            align-items: center; 
            position: absolute;
            ' . $position . '
            top: 0;
            width: 50%;
            height: 100%;
            float: left;
            background: ' . $styledata[23] . '; 
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . '; 
        }  
        .oxi-addons-wrapper-' . $oxiid . '::before{
            content: "";
            display: block;
            padding-bottom: ' . $styledata[239] . '%;
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name{ 
            font-size: ' . $styledata[45] . 'px; 
            ' . OxiAddonsFontSettings($styledata, 49) . ';
            color: ' . $styledata[55] . ';
            background: ' . $styledata[57] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . '; 
            letter-spacing: ' . $stylefiles[4] . 'px; 
            float: left; 
            width: 100%;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading{
            font-size: ' . $styledata[80] . 'px;
            ' . OxiAddonsFontSettings($styledata, 84) . ';
            color: ' . $styledata[90] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 92) . '; 
            letter-spacing: ' . $stylefiles[14] . 'px; 
            width: 100%;
            float: left;
         } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
            font-size: ' . $styledata[113] . 'px;
            ' . OxiAddonsFontSettings($styledata, 117) . ';
            color: ' . $styledata[123] . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
            width: 100%;
            float: left;
         } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
            width: 100%;
            float: left;
            text-align: ' . $styledata[21] . ';
        } 
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{
            background: ' . $styledata[160] . ';
            color: ' . $styledata[158] . ';
            display: inline-block;
            ' . OxiAddonsFontSettings($styledata, 152) . ';
            font-size: ' . $styledata[148] . 'px;
            border:  ' . $styledata[184] . 'px ' . $styledata[185] . ';
            border-color: ' . $styledata[188] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 162) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';
            margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 178) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link:hover{
            background: ' . $styledata[224] . ';
            color: ' . $styledata[222] . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 228) . ';
            border-color: ' . $styledata[226] . ';
        }  
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . '; 
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . '::before{ 
                padding-bottom: ' . $styledata[240] . '%;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{ 
                width: 100%;
                float: left; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 26) . ';
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name{
                font-size: ' . $styledata[46] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';  
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading{
                font-size: ' . $styledata[81] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';  
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
                font-size: ' . $styledata[114] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . '; 
             } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
                font-size: ' . $styledata[149] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 163) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . '; 
            }  
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
                display: block;
            }
            .oxi-addons-wrapper-' . $oxiid . '::before{ 
                padding-bottom: ' . $styledata[241] . '%;
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-wrapper-left-side{ 
                width: 100%;
                float: left; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            } 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-name{
                font-size: ' . $styledata[47] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';  
                text-align: center;
             }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-heading{
                font-size: ' . $styledata[82] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';  
                text-align: center;
             }
     
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-short-detail{
                font-size: ' . $styledata[115] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . '; 
                text-align: center;
             }
             .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button{
                width: 100%;
                float: left;
                text-align: center;
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-button .oxi-addons-link{ 
                font-size: ' . $styledata[150] . 'px; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 164) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . '; 
            }  
        }
    ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
