<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button\Templates;

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
       $text = '<div class="sa-button-text">' . $this->text_render($style['sa_btn_text']) . '</div>';

        echo '  <div class="oxi-addons-align-btn4">
                   <a ' . $this->animation_render('sa_btn_animation', $style) . ' ' . $this->url_render('sa_btn_link', $style) . ' class="oxi-button-btn4 ' . (array_key_exists('sa_btn_width_choose', $style) && $style['sa_btn_width_choose'] != '0' ? $style['sa_btn_width_choose'] : '') . ' '.$style['sa_btn_effect_position'].' " >' . $text . '</a>
                </div>';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $css = '';
        $styledata = explode('|', $stylefiles[0]);
        $href = '';
        $target = '';
        if ($stylefiles[7] != '') {
            $href = 'href="' . OxiAddonsUrlConvert($stylefiles[7]) . '"';
            if ($styledata[3] != '') {
                $target = 'target="' . $styledata[3] . '"';
            }
        }
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="oxi-addons-align-' . $oxiid . '">
                    <div class="oxi-addons-button-body">
                    <div class="roman">
                        <div class="oxi-addons-button-align" ' . OxiAddonsAnimation($styledata, 39) . '>';
        echo '              <a ' . $target . ' ' . $href . ' class="OxiAddons-Btn-' . $oxiid . ' OxiAddons-Btn-style" id="' . $stylefiles[5] . '">' . OxiAddonsTextConvert($stylefiles[3]) . '</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          </div>';


        $textalign = explode(':', $styledata[59]);
        $css .= '.oxi-addons-align-' . $oxiid . ' {   
                    float: left;
                    width: 100%;
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                --def: ' . $styledata[45] . '; 	
        		--inv: ' . $styledata[43] . ';
        		--hobg: ' . $styledata[49] . ';
        		float: left;
                display: inline-block;
                text-align: ' . $textalign[0] . ';
                width: 100%;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
            }
            .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-align{
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: ' . $styledata[47] . ';
                transition:  .5s ease, -webkit-transform .2s ease;
                transition:  .5s ease, transform .2s ease;
                transition:  .5s ease, transform .2s ease, -webkit-transform .2s ease;
                will-change: transform;
                box-shadow: none;
                

            }
            
            .OxiAddons-Btn-' . $oxiid . ' {		
                position: relative;	
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
                font-size: ' . $styledata[51] . 'px;
                color: var(--inv);
                ' . OxiAddonsFontSettings($styledata, 55) . '
                text-align: center;
                transition: all 600ms cubic-bezier(0.77, 0, 0.175, 1);	
                cursor: pointer;
                user-select: none;
                width: ' . $styledata[65] . 'px;
                max-width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .OxiAddons-Btn-' . $oxiid . ':before, .OxiAddons-Btn-' . $oxiid . ':after {
                    content: "";
                    position: absolute;	
                    transition: inherit;
                    z-index: -1;
            }

            .OxiAddons-Btn-' . $oxiid . ':hover {
                    color: var(--def);
                    transition-delay: .6s;
            }

            .OxiAddons-Btn-' . $oxiid . ':hover:before {
                    transition-delay: 0s;
            }

            .OxiAddons-Btn-' . $oxiid . ':hover:after {
                    background: var(--hobg);
                    transition-delay: .4s;
            }
            ';


        if ($styledata[5] == 1) {

            $css .= '
        .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before, 
	   .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
    		left: 0;
    		height: 0;
    		width: 100%;
	}

	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before {
		bottom: 0;	
		border: ' . $styledata[61] . 'px solid var(--hobg);
		border-top: 0;
		border-bottom: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
		top: 0;
		height: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:before,
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:after {
		height: 100%;
	}';
        } elseif ($styledata[5] == 2) {

            $css .= '
        .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before, 
	   .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
    		top: 0;
    		width: 0;
    		height: 100%;
	}

	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before {
		right: 0;
		border: ' . $styledata[61] . 'px solid var(--hobg);
		border-left: 0;
		border-right: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
		left: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:before,
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:after {
		width: 100%;
	}';
        } elseif ($styledata[5] == 3) {

            $css .= '
        .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before, 
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
		top: 0;
		width: 0;
		height: 100%;
	}

	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before {
		left: 0;
		border: ' . $styledata[61] . 'px solid var(--hobg);
		border-left: 0;
		border-right: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
		right: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:before,
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:after {
		width: 100%;
	}';
        } elseif ($styledata[5] == 4) {

            $css .= '
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before {
		top: 0;
                left: 50%;
                height:100%;
                width:0;
		border: ' . $styledata[61] . 'px solid var(--hobg);
		border-left: 0;
		border-right: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
		left: 0;
                bottom:0;
                height:0;
                width:100%;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:before{
                left:0;
                width:100%;
            }
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:after {
		height: 100%;
                top:0;
	}';
        } else {

            $css .= '
        .oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before, 
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
		left:0;
                height:0;
                width:100%;
	}

	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:before {
		top: 0;
		border: ' . $styledata[61] . 'px solid var(--hobg);
		border-top: 0;
		border-bottom: 0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:after {
                bottom:0;
                height:0;
	}
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:before,
	.oxi-addons-align-' . $oxiid . ' .OxiAddons-Btn-style:hover:after {
		height: 100%;
               
	}';
        }







        $css .= '@media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-addons-align-' . $oxiid . ' {   
                        float: left;
                        width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';
                }
                .OxiAddons-Btn-' . $oxiid . ' {		
                    position: relative;	
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . ';
                    font-size: ' . $styledata[52] . 'px;
                    text-transform: uppercase;
                    transition: all 600ms cubic-bezier(0.77, 0, 0.175, 1);	
                    cursor: pointer;
                    user-select: none;
                    width: ' . $styledata[66] . 'px;
                max-width: 100%;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-align-' . $oxiid . ' {   
                        float: left;
                        width: 100%;
                }
                .oxi-addons-align-' . $oxiid . ' .oxi-addons-button-body{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';
                }
                .OxiAddons-Btn-' . $oxiid . ' {		
                    position: relative;	
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . ';
                    font-size: ' . $styledata[53] . 'px;
                    text-transform: uppercase;
                    transition: all 600ms cubic-bezier(0.77, 0, 0.175, 1);	
                    cursor: pointer;
                    user-select: none;
                    width: ' . $styledata[67] . 'px;
                max-width: 100%;
                }
            }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
