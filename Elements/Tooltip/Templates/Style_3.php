<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Tooltip\Templates;

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

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_tooltip_data', $styledata) && is_array($styledata['sa_tooltip_data'])) ? $styledata['sa_tooltip_data'] : [];
        foreach ($all_data as $key => $value) {
            $short_code = $tooltip = $link = $endlink = '';
            if (array_key_exists('sa_tooltip_text', $value) && $value['sa_tooltip_text'] != '') {
                $tooltip .= '<div class="sa_addons_tooltip_text">' . $this->text_render($value['sa_tooltip_text']) . '</div>';
            }
            if ($value['sa_tooltip_shortcode'] != '') {
                $short_code .= $this->text_render($value['sa_tooltip_shortcode']) ;
            }else {
                $short_code .= '<h3 style = "padding:52px 30px; color : red "> *Add Shortcode For Tooltip.</h3>';
                $tooltip = '';
            }
            
            if (array_key_exists('sa_tooltip_url_open', $value) && $value['sa_tooltip_url_open'] != '0') {
                if ($value['sa_tooltip_url-url'] != '') {
                    $link .= '<a ' . $this->url_render('sa_tooltip_url', $value) . ' class="sa_tooltip_link">';
                    $endlink .= '</a>';
                }
            }
            echo '<div class="sa_addons_tooltip_colum ' . $this->column_render('sa_tooltip_col', $styledata) . '">';
            echo $link;
            echo '<div class="sa_addons_tooltip_container_style_3">
                        <div class="sa_addons_tooltip_style_3 sa_tooltip_unique_' . $key . ' ' . $value['sa_tooltip_posi'] . '">
                            ' . $short_code . '
                            ' . $tooltip . '
                        </div>
                    </div>';
            echo $endlink;
            echo '</div>';
        }
    }

    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $pos = $afterpos = '';
        if ($styledata[113] == 'top') {
            $pos = 'top: 0%;
				left: 50%;
				transform : translate(-50%,-100%);';
            $afterpos = '	top: 100%;
				left: 50%;
				border-color: ' . $styledata[143] . ' transparent transparent transparent;
				transform : translateX(-50%);';
        }
        if ($styledata[113] == 'right') {
            $pos = 'top: 50%;
				left: 100%;
				transform : translateY(-50%);';
            $afterpos = '	top: 50%;
				left: 0%;
				border-color: transparent ' . $styledata[143] . '  transparent transparent;
				transform: translateY(-50%) translateX(-100%);';
        }
        if ($styledata[113] == 'left') {
            $pos = 'top: 50%;
				left: 0%;
				transform : translate(-100%,-50%);';
            $afterpos = '	top: 50%;
				left: 100%;
				border-color: transparent   transparent transparent  ' . $styledata[143] . ' ;
				transform: translateY(-50%) translateX(0%);';
        }
        if ($styledata[113] == 'bottom') {
            $pos = 'top: 100%;
				left: 50%; 
				transform : translateX(-50%);';
            $afterpos = '	top: 0%;
				left:50%;
				border-color: transparent   transparent ' . $styledata[143] . ' transparent;
				transform: translateY(-100%) translateX(-50%);';
        }
        if ($styledata[113] == 'center') {
            $pos = 'top: 50%;
				left: 50%;
				
				transform : translate(-50%,-50%);';
            $afterpos = 'display : none;';
        }
        echo '
<div class="oxi-addons-container ">
    <div class="oxi-addons-row">
        <div class="oxi-addons-vr-tooltip-section ">
            <div class="oxi-addons-vr-tooltip-full-content oxi-addons-vr-' . $oxiid . '">
                    ';
        foreach ($listdata as $one_item) {
            $shortcode = $tooltiptext = '';
            $listfiles = explode('||#||', $one_item['files']);
            if (!empty($listfiles[3])) {
                $tooltiptext = '<span class="oxi-addons-vr-tooltiptext">' . OxiAddonsTextConvert($listfiles[3]) . '</span>';
            }
            if (!empty($listfiles[1])) {
                $shortcode = '<div class="oxi-addons-tt-SC-section">
						' . OxiAddonsTextConvert($listfiles[1]) . '
					</div>';
            } else {
                $shortcode = '<div class="oxi-addons-tt-SC-section">
						<h3 style = "padding:52px 30px; color : red "> *Add Shortcode For Tooltip.</h3>	
					</div>';
                $tooltiptext = '';
            }
            echo '
                    <div class="' . OxiAddonsItemRows($styledata, 161) . 'oxi-addons-tt-' . $oxiid . '-' . $one_item['id'] . ' ">				
                            <div class="oxi-tt-center">

                             <a href="' . OxiAddonsUrlConvert($listfiles[5]) . '" target="' . $styledata[181] . '">
                                    <div class="oxi-addons-vr-tooltip">
					<div class="oxi-addons-tt-img">
						<div class="oxi-addons-tt-img-section">
							' . $shortcode . '
							' . $tooltiptext . '
						</div>
					</div>
                                    </div>
                            </a>	';

            echo '</div>';
            echo '</div>';
        }
        echo '</div>
        </div>
    </div>
</div>';
        $css .= '
	.oxi-addons-vr-' . $oxiid . '{
		width :100%;
		float : left ;
	}
	.oxi-tt-center{
		width :100%;
		float : left ;
		text-align : center;
	}
		.oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip-section{
		width: 100%;
		float:left;
		padding : 0;
	}
	.oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip-full-content{
		width: 100%;
		float:left;
		text-align: center;
		}
	.oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip {
		display :inline-block;
		position: relative;
		background : ' . $styledata[63] . ';
			
                ' . OxiAddonsBoxShadowSanitize($styledata, 55) . ';
		margin :' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
	}
	.oxi-addons-vr-' . $oxiid . ' .oxi-addons-tt-SC-section{
		width :100%;
		float :left;
		max-width : ' . $styledata[183] . 'px;
		position:relative;
		
	}
	
	
	 .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip span.oxi-addons-vr-tooltiptext {
		width : 100%;
		display:none;
		color:' . $styledata[115] . ';
		background:' . $styledata[143] . ';
		text-align: center;
		padding :' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
		margin :' . OxiAddonsPaddingMarginSanitize($styledata, 165) . ';
		position: absolute;
		z-index: 1;
		' . $pos . '
		' . OxiAddonsFontSettings($styledata, 140) . '
		font-size : ' . $styledata[133] . 'px;
		max-width : ' . $styledata[187] . 'px;
		border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 145) . ';
			
	  }

	 .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip .oxi-addons-vr-tooltiptext::after {
		content: "";
		position: absolute;
		' . $afterpos . '
		border-width: 5px;
		border-style: solid;
	  }

	 .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip:hover .oxi-addons-vr-tooltiptext {
		display:block;
	  }
	@media only screen and (min-width : 669px) and (max-width : 993px){
		.oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip {
			margin :' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
		}
		.oxi-addons-vr-' . $oxiid . ' .oxi-addons-tt-SC-section{
		max-width : ' . $styledata[184] . 'px;
		}
		
	 .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip span.oxi-addons-vr-tooltiptext {
		padding :' . OxiAddonsPaddingMarginSanitize($styledata, 118) . ';
		margin :' . OxiAddonsPaddingMarginSanitize($styledata, 166) . ';
		font-size : ' . $styledata[134] . 'px;
		max-width : ' . $styledata[188] . 'px;
		border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 146) . ';
			
	  }
	}
	@media only screen and (max-width : 668px){
		.oxi-addons-vr-' . $oxiid . ' .oxi-addons-vr-tooltip {
			margin :' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
		}
		.oxi-addons-vr-' . $oxiid . ' .oxi-addons-tt-SC-section{
		max-width : ' . $styledata[185] . 'px;
		}
		
	 .oxi-addons-vr-' . $oxiid . '  .oxi-addons-vr-tooltip span.oxi-addons-vr-tooltiptext {
		padding :' . OxiAddonsPaddingMarginSanitize($styledata, 119) . ';
		margin :' . OxiAddonsPaddingMarginSanitize($styledata, 167) . ';
		font-size : ' . $styledata[135] . 'px;
		max-width : ' . $styledata[189] . 'px;
		border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 147) . ';
			
	  }
	}
	';
        wp_add_inline_style('shortcode-addons-style', $css);
    }
}
