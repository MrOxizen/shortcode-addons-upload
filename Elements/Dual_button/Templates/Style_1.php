<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Dual_button\Templates;

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
        $href = '';
        $target = '';
        $middle_text = $href_left = $left_btn_text = $icon_left = $icon_text = $href_right = $target_right = $right_btn_text = $pos = $icon_right = $middle_text = '';
        if ($style['sa_dual_btn_left_link-url'] != '') {
            $href_left = $this->url_render('sa_dual_btn_left_link', $style);
        }
        if ($style['sa_dual_btn_left_text'] != '') {
            $left_btn_text = '<span class="oxi-text">' . $this->text_render($style['sa_dual_btn_left_text']) . '</span>';
        }
        if ($this->font_awesome_render($style['ssa_dual_btn_left_icon']) != '') {
            $icon_left = $this->font_awesome_render($style['ssa_dual_btn_left_icon']);
        }
        if ($style['sa_dual_btn_left_position'] == 'left') {
            $icon_text = $icon_left . $left_btn_text;
        } else {
            $icon_text = $left_btn_text . $icon_left;
        }

        //right
        if ($style['sa_dual_btn_right_link-url'] != '') {
            $href_right = $this->url_render('sa_dual_btn_right_link', $style);
        }

        if ($style['sa_dual_btn_right_text'] != '') {
            $right_btn_text = '<span class="oxi-text">' . $this->text_render($style['sa_dual_btn_right_text']) . '</span>';
        }

        if ($this->font_awesome_render($style['ssa_dual_btn_right_icon']) != '') {
            $icon_right = $this->font_awesome_render($style['ssa_dual_btn_right_icon']);
        }
        if ($style['sa_dual_btn_mid_icon'] != '' || $style['sa_dual_btn_mid_text'] != '') {
            if ($style['sa_dual_btn_mid_text_icon'] == 'text') {
                $middle_text = $this->text_render($style['sa_dual_btn_mid_text']);
            } else {
                $middle_text = $this->font_awesome_render($style['sa_dual_btn_mid_icon']);
            }
            $middle_text = '<div class="oxi-addons-btn-group-before OxiAddonsEqualHeightWidth" > ' . $middle_text . '</div>';
        }
        if ($style['sa_dual_btn_right_position'] == 'left') {
            $icon_text_right = $icon_right . $right_btn_text;
        } else {
            $icon_text_right = $right_btn_text . $icon_right;
        }
        echo '<div class=" oxi-dual-button" ' . $this->animation_render('sa_s_image_animation', $style) . '>
                         <div class="oxi-addons-dual-button-align">
                            <div class="oxi-addons-btn-group " >
                                    <a ' . $href_left . '   id="' . $style['sa_dual_btn_left_id'] . '"><div class="oxi-left-icon">' . $icon_text . '</div> 
                                            ' . $middle_text . '</a>
                                    <a ' . $target_right . ' ' . $href_right . '  id="' . $style['sa_dual_btn_right_id'] . '">' . $icon_text_right . ' </a>
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

        $href = '';
        $target = '';
        $middle_text = $href_left = $target_left = $left_btn_text = $icon_left = $icon_text = $href_right = $target_right = $right_btn_text = $pos = $icon_right = $middle_text = '';
        if ($stylefiles[17] != '') {
            $href_left = 'href="' . OxiAddonsUrlConvert($stylefiles[17]) . '"';
        }
        if ($styledata[25] != '') {
            $target_left = 'target="' . $styledata[25] . '"';
        }
        if ($styledata[3] != '') {
            $left_btn_text = '<span class="oxi-text">' . $stylefiles[3] . '</span>';
        }
        if ($styledata[9] != '') {
            $icon_left = oxi_addons_font_awesome($stylefiles[9]);
        }
        if ($styledata[157] == 'left') {
            $icon_text = $icon_left . $left_btn_text;
        } else {
            $icon_text = $left_btn_text . $icon_left;
        }

        //right
        if ($stylefiles[19] != '') {
            $href_right = 'href="' . OxiAddonsUrlConvert($stylefiles[19]) . '"';
        }
        if ($styledata[27] != '') {
            $target_right = 'target="' . $styledata[27] . '"';
        }
        if ($styledata[5] != '') {
            $right_btn_text = '<span class="oxi-text">' . $stylefiles[5] . '</span>';
        }
        if ($styledata[3] == 'left') {
            $pos = 'flex-start';
        } elseif ($styledata[3] == 'center') {
            $pos = 'center';
        } else {
            $pos = 'flex-end';
        }
        if ($styledata[11] != '') {
            $icon_right = oxi_addons_font_awesome($stylefiles[11]);
        }
        if ($stylefiles[7] != '') {
            if ($styledata[347] == 'text') {
                $middle_text = $stylefiles[7];
            } else {
                $middle_text = oxi_addons_font_awesome($stylefiles[7]);
            }
            $middle_text = '<div class="oxi-addons-btn-group-before OxiAddonsEqualHeightWidth" > ' . $middle_text . '</div>';
        }
        if ($styledata[289] == 'left') {
            $icon_text_right = $icon_right . $right_btn_text;
        } else {
            $icon_text_right = $right_btn_text . $icon_right;
        }
        echo '
                <div class="oxi-addons-row">
                    <div class=" oxi-button-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 21) . '>
                         <div class="oxi-addons-align-' . $oxiid . '">
                            <div class="oxi-addons-btn-group " >
                                    <a ' . $target_left . ' ' . $href_left . '   id="' . $stylefiles[13] . '"><div class="oxi-left-icon">' . $icon_text . '</div> 
                                            ' . $middle_text . '</a>
                                    <a ' . $target_right . ' ' . $href_right . '  id="' . $stylefiles[15] . '">' . $icon_text_right . ' </a>
                             </div>
                        </div>
                    </div>
                 </div>
		 ';
        ?>


        <?php

        $css .= ' .oxi-addons-align-' . $oxiid . '{
				width :100%;
				float :left ;
				text-align : ' . $styledata[3] . ';
			}
			.oxi-addons-align-' . $oxiid . ' *{
				transition : none ;
			}
		   .oxi-button-' . $oxiid . '{
			  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
			}
           .oxi-button-' . $oxiid . ' .oxi-text{
               display: inline-block;
            }
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group { 
				display:inline-flex;
				justify-content :' . $pos . ';
				max-width : ' . $styledata[343] . 'px;			 
			}
			.oxi-button-' . $oxiid . ' .oxi-addons-btn-group-before {
			   color:' . $styledata[297] . ';
			   display:block;
			   font-size: ' . $styledata[293] . 'px;
               ' . OxiAddonsFontSettings($styledata, 301) . '    
			   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 307) . ';
			   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 323) . ';
			   background:' . $styledata[299] . ';
			   position:absolute;
			   left:100%;
			   top:50%;
			   height:100%;
			   transform: translate(-50%,-50%);
			   overflow: hidden;
			   display: flex;
			   align-items: center;
			   justify-content: center;
		   }

			.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a {
			   display:inline-block;
			   text-decoration:none;
		    }
			.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1) .oxi-left-icon .oxi-icons {
			    color:' . $styledata[151] . ';
			   font-size: ' . $styledata[153] . 'px;
				padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';			
			}
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1).oxi-addons-btn-group-before .oxi-icons {
			    padding: 0;
			}
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1):hover .oxi-icons {
			    color:' . $styledata[159] . ';
			}
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1) {
			   font-size: ' . $styledata[29] . 'px;
			   background:' . $styledata[35] . ';
			   color:' . $styledata[33] . ';
			   border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 37) . ';
			   border-style :  ' . $styledata[53] . ';
			   border-color :  ' . $styledata[54] . ';
			   border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                   ' . OxiAddonsFontSettings($styledata, 73) . '    
			   padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 79) . ';
			   position:relative;
			   transition: none !important;
				align-items: center;
				display: flex;
				justify-content: center; 
		   }
		   .oxi-button-' . $oxiid . ' .oxi-icons{
				transition: none !important;
			} 
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1):hover {
			   background:' . $styledata[113] . ';
			   color:' . $styledata[111] . ';
			   border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
			   border-style :  ' . $styledata[131] . ';
			   border-color :  ' . $styledata[132] . ';
			   border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';
			   
		   }

		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2) {
			     font-size: ' . $styledata[161] . 'px;
			   background:' . $styledata[167] . ';
			   color:' . $styledata[165] . ';
			   border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
			   border-style :  ' . $styledata[185] . ';
			   border-color :  ' . $styledata[186] . ';
			   border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
                   ' . OxiAddonsFontSettings($styledata, 205) . '    
			   padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 211) . ';
				align-items: center;
				display: flex;
				justify-content: center;
		   }

		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2) .oxi-icons {
			    color:' . $styledata[283] . ';
			   font-size: ' . $styledata[285] . 'px;
			   padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . ';
			}
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2):hover .oxi-icons {
			    color:' . $styledata[291] . ';
			  
			}
		   .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2):hover {
			   color:' . $styledata[243] . ';
			   background:' . $styledata[245] . ';
				    border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 247) . ';
			   border-style :  ' . $styledata[263] . ';
			   border-color :  ' . $styledata[264] . ';
			   border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 267) . ';
		   }
            
            @media only screen and (min-width : 669px) and (max-width : 993px){  
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group {
					max-width : ' . $styledata[344] . 'px;
					  padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';
				 } 
				 .oxi-button-' . $oxiid . ' .oxi-addons-btn-group-before {
					font-size: ' . $styledata[294] . 'px;
					' . OxiAddonsFontSettings($styledata, 302) . '    
					padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 308) . ';
					border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 324) . ';
				} 
				 .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a + a {
					margin-left: ' . $styledata[340] . 'px;
				} 
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1) .oxi-icons {
					font-size: ' . $styledata[154] . 'px;
					 padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ';			
				 }
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1) {
					font-size: ' . $styledata[30] . 'px;
					border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 38) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';
						' . OxiAddonsFontSettings($styledata, 74) . '    
					padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 80) . ';

				} 
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1):hover {
					border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';
				} 
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2) {
					  font-size: ' . $styledata[162] . 'px;
					border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 190) . ';
						' . OxiAddonsFontSettings($styledata, 206) . '    
					padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 212) . ';
				} 
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2) .oxi-icons {
					font-size: ' . $styledata[286] . 'px;
					padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 228) . ';
				 }
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2):hover {
				    border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 248) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 268) . ';
				}

            }
            @media only screen and (max-width : 668px){
               	
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group { 
					 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
					max-width : ' . $styledata[345] . 'px;
				 } 
				 .oxi-button-' . $oxiid . ' .oxi-addons-btn-group-before {
					font-size: ' . $styledata[295] . 'px;
					' . OxiAddonsFontSettings($styledata, 303) . '    
					padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 309) . ';
					border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 325) . ';
				} 
				 .oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a + a {
					margin-left: ' . $styledata[341] . 'px;
				} 
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1) .oxi-icons {
					font-size: ' . $styledata[155] . 'px;
					 padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';			
				 }
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1) {
					font-size: ' . $styledata[31] . 'px;
					border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
						' . OxiAddonsFontSettings($styledata, 75) . '    
					padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';

				} 
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(1):hover {
					border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
				}

				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2) {
					  font-size: ' . $styledata[163] . 'px;
					border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
						' . OxiAddonsFontSettings($styledata, 207) . '    
					padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 213) . ';
				}

				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2) .oxi-icons {
					font-size: ' . $styledata[287] . 'px;
					padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
				 }
				.oxi-button-' . $oxiid . ' .oxi-addons-btn-group > a:nth-of-type(2):hover {
				    border-width :  ' . OxiAddonsPaddingMarginSanitize($styledata, 249) . ';
					border-radius :  ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
				}
            }
			';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
