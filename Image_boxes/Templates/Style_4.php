<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_boxes\Templates;

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

        $datas = (array_key_exists('sa_image_boxes_data_style_4', $style) && is_array($style['sa_image_boxes_data_style_4']) ? $style['sa_image_boxes_data_style_4'] : []);
      
        foreach ($datas  as $key => $value) {
            $heading = $content = $icon = '';
            if (array_key_exists('sa_image_boxes_icon', $value) && $value['sa_image_boxes_icon'] != '') {
                $icon = '<div class="oxi-addons-content-boxes-four-area-icon">
                            ' . $this->font_awesome_render($value['sa_image_boxes_icon']) . '
                        </div>';
            }
            if (array_key_exists('sa_image_boxes_heading', $value) && $value['sa_image_boxes_heading'] != '') {
                $heading = '<div class="oxi-addons-content-boxes-heading">
                                ' . $this->text_render($value['sa_image_boxes_heading']) . '
                            </div>';
            }
            if (array_key_exists('sa_image_boxes_s_description', $value) && $value['sa_image_boxes_s_description'] != '') {
                $content = '<div class="oxi-addons-content-boxes-content">
                                ' . $this->text_render($value['sa_image_boxes_s_description']) . '
                            </div> ';
            }
            echo ' <div class="oxi-addons-content-boxes-four-colum ' . $this->column_render('sa-image-boxes-four-col', $style) . '   ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list' : '') . '">
                                    <div class="oxi-addons-content-boxes-four-area">
					<div class="oxi-addons-content-boxes-full " ' . $this->animation_render('sa-image-boxes-four-animation', $style) . '>
						<div class="oxi-addons-content-boxes-four-area-image_content">
							<div class="oxi-addons-content-boxes-images " style="background-image: url(\'' . $this->media_render('sa_image_boxes_media', $value) . '\');">
                       
                                                        </div> 
						</div>  
						<div class="oxi-addons-content-boxes-four-area-data"> 
                                                    ' . $icon . '
                                                    <div class="oxi-addons-content-boxes-four-area-content">
                                                    ' . $heading . '
                                                    ' . $content . '
                                                    </div>    
						</div>
					</div>
                                    </div>';
            
            echo '</div>';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '<div class="oxi-addons-container"><div class="oxi-addons-row">';
        foreach ($listdata as $value) {
            $data = explode('||#||', $value['files']);
            $heading = $content = $img = '';
            if ($data[3] != '') {
                $heading = '
                    <div class="oxi-addons-content-boxes-heading">
                        ' . OxiAddonsTextConvert($data[3]) . '
                    </div>
                ';
            }
            if ($data[5] != '') {
                $content = '
                    <div class="oxi-addons-content-boxes-content">
                    ' . OxiAddonsTextConvert($data[5]) . '
                </div>  
                ';
            }
            if ($data[1] != '') {
                $img = '
                    <div class="oxi-addons-content-boxes-images  oxi-addons-content-boxes-images-' . $value['id'] . '">
                       
                    </div>
                ';
                $css .= '.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images-' . $value['id'] . '{
                            background: linear-gradient(rgba(255, 255, 255, 0.00), rgba(255, 255, 255, 0.00)), url("' . OxiAddonsUrlConvert($data[1]) . '");
                            -moz-background-size: 100% 100%;
                            -o-background-size: 100% 100%;
                            background-size: 100% 100%;
                        }';
            }
            echo '<div class="' . OxiAddonsItemRows($styledata, 127) . '">';
            echo ' 
                <div class="oxi-addons-content-boxes-' . $oxiid . ' " ' . OxiAddonsAnimation($styledata, 53) . '>
					<div class="oxi-addons-content-boxes-full " >
						<div class="oxi-addons-content-boxes-' . $oxiid . '-image_content">
							' . $img . ' 
						  </div>  
						<div class="oxi-addons-content-boxes-' . $oxiid . '-data">  

							<div class="oxi-addons-content-boxes-' . $oxiid . '-icon">
							' . oxi_addons_font_awesome($data[7]) . '
							</div>
							<div class="oxi-addons-content-boxes-' . $oxiid . '-content">
							  ' . $heading . '
							  ' . $content . ' 
							</div>    
						</div>
					</div>
                </div>';

            echo '</div>';
        }
        echo '</div></div>';
        $css .= '.oxi-addons-content-boxes-' . $oxiid . '{
                    width: 100%;
                    position: relative;
                    max-width: ' . $styledata[3] . 'px;
                    margin: 0 auto;
			
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-full{

                        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . '-image_content{
                    width: 100%;
                    float: left;
                    position: relative;
                    left : 0;
                    top : 0;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
                    transition: all .3s linear;
                }
                .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-' . $oxiid . '-image_content{
                    transition: all .3s linear;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-data{
                    width: 100%;
                    float:left;
                    background:' . $styledata[121] . ';                   
                     margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 47) . ';
                    z-index : 9;
                    position : relative;
                    display : flex;
                    align-items :center;
                    justify-content :center;
                    transition: all .3s linear;
						
                }
		.oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-' . $oxiid . '-data{                  
                    margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
                    background : ' . $styledata[149] . ';
                        transition: all .3s linear;
		}
			
                .oxi-addons-content-boxes-' . $oxiid . '-data .oxi-addons-content-boxes-' . $oxiid . '-icon .oxi-icons {
                    color :  ' . $styledata[171] . ';
                    font-size : ' . $styledata[167] . 'px;
                    padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
		}
                .oxi-addons-content-boxes-' . $oxiid . '-data .oxi-addons-content-boxes-' . $oxiid . '-icon:hover .oxi-icons {
                        color :  ' . $styledata[173] . ';
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{
                    width:100%; 
                    height:' . $styledata[117] . 'px; 
                    float:left;
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                    width:100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                    float:left;
                } 
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[63] . ';
                   font-size: ' . $styledata[59] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 65) . '    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';   
                }
                .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                   width: 100%;
                   float:left;
                   color: ' . $styledata[91] . ';
                   font-size: ' . $styledata[87] . 'px;
                   ' . OxiAddonsFontSettings($styledata, 93) . ';    
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . ';   
                }   

                @media only screen and (min-width : 669px) and (max-width : 993px){
                            .oxi-addons-content-boxes-' . $oxiid . '{
                              max-width: ' . $styledata[4] . 'px;
			    }
                            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-full{
                                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 32) . ';
                            }
                            .oxi-addons-content-boxes-' . $oxiid . '-image_content{
                                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
                            }
                            .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-' . $oxiid . '-image_content{
                                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 208) . ';
                            }
                            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-data{             
                                margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 134) . ';
                             }  
                            .oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-' . $oxiid . '-data{                  
                                margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
                            }
                            .oxi-addons-content-boxes-' . $oxiid . '-data .oxi-addons-content-boxes-' . $oxiid . '-icon .oxi-icons {
                                 padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
                            }
                            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{ 
                                height:' . $styledata[118] . 'px;  
                            } 
                            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
                                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 16) . ';
                            } 
                            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
                               font-size: ' . $styledata[60] . 'px;    
                               padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';   
                            }
                            .oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
                                font-size: ' . $styledata[88] . 'px;
                                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 100) . ';   
			   } 
			 }
                @media only screen and (max-width : 668px){
                  .oxi-addons-content-boxes-' . $oxiid . '{
				   max-width: ' . $styledata[5] . 'px;
			    }
				.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-full{

					margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 33) . ';
				}
				.oxi-addons-content-boxes-' . $oxiid . '-image_content{
				
				    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 193) . ';
				}
				.oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-' . $oxiid . '-image_content{
				    
					 margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . ';
				}
				
				.oxi-addons-content-boxes-' . $oxiid . '-data{            
					margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';
				}   
				.oxi-addons-content-boxes-' . $oxiid . ':hover .oxi-addons-content-boxes-' . $oxiid . '-data{                  
                    margin:  ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
				}
				.oxi-addons-content-boxes-' . $oxiid . '-data .oxi-addons-content-boxes-' . $oxiid . '-icon .oxi-icons {
				    padding :  ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
				}
				.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-images{ 
				   height:' . $styledata[119] . 'px;  
			    } 
				.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-' . $oxiid . '-content{
					padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 17) . ';
				} 
				.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-heading{
				   font-size: ' . $styledata[61] . 'px;    
				   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';   
				}
				.oxi-addons-content-boxes-' . $oxiid . ' .oxi-addons-content-boxes-content{
				   font-size: ' . $styledata[89] . 'px;
				   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';   
				}  

                
                }
                ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
