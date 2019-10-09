<?php

namespace SHORTCODE_ADDONS_UPLOAD\Bullet_list\Templates;

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
        if ($style['sa-bl-g-max-width-control'] == 'max-width') {
            $class = 'sa-bl-width-auto';
        }

        echo ' <div class="oxi-addons-main-wrapper-full-area ">
                        <div class="oxi-icon-last ' . $class . '">';
                            foreach ($child as $v) {
                                $value = $this->Json_Decode($v['rawdata']);
                                $icon = $heading = $textarea = '';
                                if (array_key_exists('sa_bl_four_icon', $value) && $value['sa_bl_four_icon'] != '') {
                                    $icon = '<div class="oxi-addons-content-boxes-icon">
                                                    ' . $this->font_awesome_render($value['sa_bl_four_icon']) . '
                                                </div>';
                                }
                                if (array_key_exists('sa_bl_four_text', $value) && $value['sa_bl_four_text'] != '') {
                                     $heading .= '<div class="oxi-addons-content-boxes-heading">
                                                            ' . $this->text_render($value['sa_bl_four_text']) . '
                                                    </div>';
                                }
                                if (array_key_exists('sa_bl_four_textarea', $value) && $value['sa_bl_four_textarea'] != '') {
                                     $textarea .= '<div class="oxi-addons-content-boxes-content">
                                                        ' . $this->text_render($value['sa_bl_four_textarea']) . '
                                                    </div>';
                                }
                                
                                echo '<div class=" oxi-info-banner-style-4-static ">
                                        <div class="oxi-addons-content-boxes-list ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '">
                                            <div class="oxi-addons-box">
                                                ' .$icon. '
                                                <div class="oxi-addons-header-content">  
                                                    ' .$heading. '
                                                    ' .$textarea. '   
                                                </div>
                                            </div>';
                                        if ($admin == 'admin'):
                                            echo '  <div class="oxi-addons-admin-absulote">
                                                        <div class="oxi-addons-admin-absulate-edit">
                                                            <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                                        </div>
                                                        <div class="oxi-addons-admin-absulate-delete">
                                                           <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                                         </div>
                                                    </div>';
                                             endif;
                                 echo '</div>
                                    </div>';
        }

        echo '  </div>
            </div>';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';

        $iconboxfirst = $iconboxlast = '';
        $datacount = count($listdata);
        echo '<div class="oxi-addons-container">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-main-wrapper-' . $oxiid . ' ">
                        <div class="oxi-icon-last">';

        foreach ($listdata as $one_item) {
            $listfiles = explode('||#||', $one_item['files']);

            $icon = $heading = $content = '';
            if ($listfiles[5] != '') {
                $icon = '
                <div class=" oxi-addons-content-boxes-icon">
                ' . oxi_addons_font_awesome($listfiles[5]) . '
                </div>  
            ';
            }
            if ($listfiles[1] != '') {
                $heading = '
                    <div class="oxi-addons-content-boxes-heading">
                        ' . OxiAddonsTextConvert($listfiles[1]) . '
                    </div>
                ';
            }
            if ($listfiles[3] != '') {
                $content = '
                    <div class="oxi-addons-content-boxes-content">
                    ' . OxiAddonsTextConvert($listfiles[3]) . '
                    </div>  
                ';
            }

            echo '<div class=" oxi-info-banner-style-4-static ">'
            . '<div class="oxi-addons-content-boxes-' . $oxiid . '  ' . OxiAddonsAdminDefine($user) . ' " ' . OxiAddonsAnimation($styledata, 115) . '>
                    <div class="oxi-addons-content-boxes-main">                        
			<div class="oxi-addons-box">';

            if ($styledata[3] == 'left') {
                echo ' ' . $icon .
                '<div class="oxi-addons-header-content">
					' . $heading . '
					' . $content . '     
                                    </div> 
										   ';
            } else {
                echo ' <div class="oxi-addons-header-content">
                                                ' . $heading . '
                                                ' . $content . '     
                                            </div> 
                                            ' . $icon . '
                                            ';
            }

            echo '</div>
		</div>';
            echo '</div></div>';
        }
        echo '          </div>
                     </div>
                </div>
            </div>';



        $css .= ' 
        .oxi-info-banner-style-7-static{
            overflow:hidden;
        }
        .oxi-addons-main-wrapper-' . $oxiid . '{
            width: 100%;
			margin : 0 auto;
            ' . OxiAddonsBGImage($styledata, 5) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
            overflow: hidden;
            display: flex;
            align-items: center;
            background-size: cover;
			
			max-width : ' . $styledata[265] . 'px;
        }
        .oxi-addons-box{
            display: flex;
            position: relative;
        }
		

        .oxi-addons-content-boxes-' . $oxiid . '{
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
            display: inline-block;
            width:100%;
            float:left;
        }
        .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{
            width: 100%;
            float:left; 
            background: ' . $styledata[53] . ';
            border:  ' . $styledata[55] . 'px ' . $styledata[56] . ';
            border-color: ' . $styledata[59] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 109) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 77) . ';  
        } 
        .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-right-side{
            width: 100%;
            float:left;  
        } 

        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-header-content{
            width: 100%;
            float:left; 
            flex: 4;
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading{
            width: 100%;
            float:left;
            font-size: ' . $styledata[187] . 'px;
            color: ' . $styledata[191] . ';
            ' . OxiAddonsFontSettings($styledata, 193) . ';    
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';   
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content{
            width: 100%;
            float:left;
            font-size: ' . $styledata[215] . 'px;
            color: ' . $styledata[219] . ';
            ' . OxiAddonsFontSettings($styledata, 221) . ';    
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . ';    
        }
 
        .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{ 
            width: 100%;
            float:left;  
            position:relative;
            display: flex;  
            justify-content:center;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';  
            flex: 1;
        } 
         .oxi-info-banner-style-4-static{
			width :100%;
			float :left;
		}
        .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon:before{
            position: absolute;
            content:"";
            left: 50%;
            transform:translateX(-50%)translateY(-100%);
            top: 25%;
            width: 2px;
            border-left: 2px solid; 
            height: 100%;
            display: block;
            z-index: 1;
             border-color: ' . $styledata[251] . ';
        }
        .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-info-banner-style-4-static:first-child  .oxi-addons-content-boxes-icon:before{
           
        }
      
      
        .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon:after{
            position: absolute;
            content:"";
            left: 50%;
            transform:translateX(-50%)translateY(25%);
            top: 25%;
            width: 2px;
            border-left: 2px solid; 
            height: 100%;
            display: block;
            z-index: 1;
             border-color: ' . $styledata[251] . ';
        }
		.oxi-info-banner-style-4-static:last-child .oxi-addons-content-boxes-icon:after {
            display :none ;
        }
		.oxi-info-banner-style-4-static:first-child .oxi-addons-content-boxes-icon:before {
            display :none ;
		}

        .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: ' . $styledata[119] . 'px; 
            line-height:1;
            color: ' . $styledata[127] . ';
            background: ' . $styledata[129] . ';
            border:  ' . $styledata[247] . 'px ' . $styledata[248] . ';
            border-color: ' . $styledata[251] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
            ' . OxiAddonsBoxShadowSanitize($styledata, 181) . '
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . ';   
            width: ' . $styledata[123] . 'px;
            height: ' . $styledata[243] . 'px;   
            z-index: 3;
            overflow: hidden;
        } 
        .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-icon .oxi-icons{ 
            color: ' . $styledata[253] . ';
            background: ' . $styledata[255] . '; 
            border-color: ' . $styledata[257] . '; 
            ' . OxiAddonsBoxShadowSanitize($styledata, 259) . ' 
        }
        .oxi-addons-admin-absulote{
            top:0px;
        }
     
                
        @media only screen and (min-width : 669px) and (max-width : 993px){ 
            .oxi-addons-main-wrapper-' . $oxiid . '{ 
                display: block; 
				max-width : ' . $styledata[266] . 'px;
            }
            .oxi-addons-main-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 10) . '; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 34) . ';  
            } 
            .oxi-addons-content-boxes-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . '; 
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 78) . ';  
            }  
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading{ 
                font-size: ' . $styledata[188] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 200) . ';   
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content{ 
                font-size: ' . $styledata[216] . 'px;    
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 228) . ';    
            }
     
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';  
            } 
             
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{ 
                font-size: ' . $styledata[120] . 'px;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . ';   
                width: ' . $styledata[124] . 'px;
                height: ' . $styledata[244] . 'px;    
            }   
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-main-wrapper-' . $oxiid . '{ 
                display: block; 
				
				max-width : ' . $styledata[267] . 'px;
            }
            .oxi-addons-main-wrapper-' . $oxiid . '{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . '; 
            } 
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-image-body{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 35) . ';  
            } 
            .oxi-addons-content-boxes-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . '; 
            }
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-main{  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';  
            }  
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-heading{ 
                font-size: ' . $styledata[189] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';   
            }
            .oxi-addons-main-wrapper-' . $oxiid . ' .oxi-addons-content-boxes-content{ 
                font-size: ' . $styledata[216] . 'px;    
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 228) . ';    
            }
     
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon{  
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';  
            } 
             
            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-icon .oxi-icons{ 
                font-size: ' . $styledata[121] . 'px;  
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . '; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';   
                width: ' . $styledata[125] . 'px;
                height: ' . $styledata[245] . 'px;    
        
            }   
        }
        ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
