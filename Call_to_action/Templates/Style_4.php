<?php

namespace SHORTCODE_ADDONS_UPLOAD\Call_to_action\Templates;

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

class Style_4 extends Templates
{
	public function default_render($style, $child, $admin)
	{
		$heading = $sub_heading = $button = $link = $leftbutton = $rightbutton = $line = '';
		if ($style['sa_cta_h_text'] != '') {
			$heading .= '<div class="sa_addons_cta_heading">' . $this->text_render($style['sa_cta_h_text']) . '</div>';
		}
		if ($style['sa_cta_s_h_text'] != '') {
			$sub_heading .= '<div class="sa_addons_cta_sub_heading">' . $this->text_render($style['sa_cta_s_h_text']) . '</div>';
		}
		if (array_key_exists('sa_cta_line_on_off', $style) && $style['sa_cta_line_on_off'] != '0') {
			$line .= 'sa_cta_line_yes';
		}
		if (array_key_exists('sa_cta_btn_link_on_off', $style) && $style['sa_cta_btn_link_on_off'] != '0') {
			if ($style['sa_cta_btn_link-url'] != '') {
				$link .= $this->url_render('sa_cta_btn_link', $style);
			}
		}
		if ($style['sa_cta_btn_text'] != '') {
			$button .= '<div class="sa_addons_cta_btn_content">
						<a ' . $link . ' class="sa_addons_cta_btn" ' . $this->animation_render('sa_cta_btn_animation', $style) . '>
							' . $this->text_render($style['sa_cta_btn_text']) . '
						</a>
					</div>';
		}
		if ($style['sa_cta_btn_posi'] == 'left') {
			$leftbutton .= '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">' . $button . ' </div>';
		} else {
			$rightbutton .= '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">' . $button . ' </div>';
		}

		echo '<div class="sa_addons_cta_style_4 ' . $line . '">
			<div class="sa_addons_cta_full_content">
			' . $leftbutton . '
				<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12">
					' . $sub_heading . '
					' . $heading . '
				</div>
				' . $rightbutton . '
			</div>
		</div>';
	}

	public function old_render()
	{
		$styledata = $this->dbdata;
		$oxiid = $styledata['id'];
		$stylefiles = explode('||#||', $styledata['css']);
		$styledata = explode('|', $stylefiles[0]);
		$leftbutton = $rightbutton = $heading = $sub_heading = '';
		$css = '';
		if (!empty($stylefiles[6])) {
			$heading = '<h1 class="oxi-addons-call-to-action-heading">
						' . OxiAddonsTextConvert($stylefiles[6]) . '
					</h1>';
		}
		if (!empty($stylefiles[8])) {
			$sub_heading = '<div class="oxi-addons-call-to-action-sub-heading">
						' . OxiAddonsTextConvert($stylefiles[8]) . '
					</div>';
		}
		if ($styledata[229] == 'left') {
			$leftbutton .= '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12" ' . OxiAddonsAnimation($styledata, 117) . '> 
							<div class="oxi-addons-call-to-action-button-section">
								<a href="' . OxiAddonsUrlConvert($stylefiles[4]) . '" class="oxi-addons-call-to-action-button" target="' . $styledata[3] . '">' . OxiAddonsTextConvert($stylefiles[2]) . '</a>
							</div>
						</div>';
		} else {
			$rightbutton .= '<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12" ' . OxiAddonsAnimation($styledata, 117) . '> 
							<div class="oxi-addons-call-to-action-button-section">
								<a href="' . OxiAddonsUrlConvert($stylefiles[4]) . '" class="oxi-addons-call-to-action-button" target="' . $styledata[3] . '">' . OxiAddonsTextConvert($stylefiles[2]) . '</a>
							</div>
						</div>';
		}
		if ($styledata[267] == 'on' && !empty($stylefiles[2])) {
			$line_display = 'block';
		} else {
			$line_display = 'none';
		}

		echo '<div class="oxi-addons-container"> 
                <div class="oxi-addons-row">
                    <div class="oxi-addons-call-to-action-' . $oxiid . '">
			<div class="oxi-addons-call-to-action-full-content">';
		if (!empty($stylefiles[2])) {
			echo $leftbutton;
		}
		echo '
			<div class="oxi-bt-col-lg-6 oxi-bt-col-md-12 oxi-bt-col-sm-12"> 
				' . $sub_heading . '
				' . $heading . '
			</div>';
		if (!empty($stylefiles[2])) {
			echo $rightbutton;
		}
		echo '	</div></div></div>
		</div>';
		$buttontext = explode(":", $styledata[47]);
		$css = '
	.oxi-addons-call-to-action-' . $oxiid . ' {
		width: 100%;
		float:left;
		padding :' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
			
	}
	.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content{
		width: 100%;
		height : auto;
		padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . ';
		' . OxiAddonsBGImage($styledata, 121) . ';
		display: flex;
		justify-content: center;
		align-items: center;
		max-width : ' . $styledata[247] . 'px;
		position :relative;
		margin : 0 auto;
		 ' . OxiAddonsBoxShadowSanitize($styledata, 251) . ';
	}
	
	.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content:after{
		content : "";
		position :absolute;
		left : 50%;
		top : 50%;
		width :' . $styledata[257] . 'px; 
		height : ' . $styledata[261] . 'px; 
		background : ' . $styledata[265] . ';
		transform: translate(-50%,-50%);
		display : ' . $line_display . ' ;
	}
	.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-sub-heading{
		width: 100%;
		float:left;
		font-size: ' . $styledata[187] . 'px;
		color: ' . $styledata[185] . ';
		' . OxiAddonsFontSettings($styledata, 191) . ';		
		padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 197) . ';
		margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 213) . ';
	}
		.oxi-addons-call-to-action-' . $oxiid . ' h1.oxi-addons-call-to-action-heading{
		width: 100%;
		float:left;
		font-size: ' . $styledata[143] . 'px;
		color: ' . $styledata[141] . ';
		' . OxiAddonsFontSettings($styledata, 147) . ';		
		padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
		margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
		letter-spacing : 1px;
	}
	.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section{
		width: 100%;
		float:left;
		display: inline-block;
		padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
		text-align:  ' . $buttontext[0] . ';
	}
	.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section a.oxi-addons-call-to-action-button{
		font-size: ' . $styledata[11] . 'px;
		color: ' . $styledata[15] . ';
		background: ' . $styledata[17] . ';
		border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';;
		border-style: ' . $styledata[39] . ';
		border-color: ' . $styledata[40] . ';
		' . OxiAddonsFontSettings($styledata, 43) . ';
			text-align:center;
		border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 49) . ';
		padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
		transition: 0.4s ease-in-out;
		

	}
	.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section a.oxi-addons-call-to-action-button:hover{
		color: ' . $styledata[19] . ';
		background: ' . $styledata[21] . ';
		border-style: ' . $styledata[97] . ';
		border-color: ' . $styledata[98] . ';
		border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
	}	
	
@media only screen and (min-width : 669px) and (max-width : 993px){
		.oxi-addons-call-to-action-' . $oxiid . ' {		
			padding :' . OxiAddonsPaddingMarginSanitize($styledata, 232) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content{
			flex-direction: column;
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . ';
			max-width : ' . $styledata[248] . 'px;;
		}
		.oxi-addons-call-to-action-' . $oxiid . ' h1.oxi-addons-call-to-action-heading{
		font-size: ' . $styledata[144] . 'px;
		padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 154) . ';
		margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-sub-heading{			
			font-size: ' . $styledata[188] . 'px;	
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 198) . ';
			margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 214) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section{
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section a.oxi-addons-call-to-action-button{
			font-size: ' . $styledata[12] . 'px;
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 24) . ';							
			border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 50) . ';
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section a.oxi-addons-call-to-action-button:hover{
			border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
		}	
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content:after{
			width :' . $styledata[258] . 'px; 
			height : ' . $styledata[262] . 'px; 
			display :none;
		}
	
	
	}
	@media only screen and (max-width : 668px){
		.oxi-addons-call-to-action-' . $oxiid . ' {		
			padding :' . OxiAddonsPaddingMarginSanitize($styledata, 233) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content{
		    flex-direction: column;
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . ';
			max-width : ' . $styledata[249] . 'px;
		}  
		.oxi-addons-call-to-action-' . $oxiid . ' h1.oxi-addons-call-to-action-heading{
			font-size: ' . $styledata[145] . 'px;
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 155) . ';
			margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-sub-heading{
			
			font-size: ' . $styledata[189] . 'px;	
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 199) . ';
			margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 215) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section{
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section a.oxi-addons-call-to-action-button{
			font-size: ' . $styledata[13] . 'px;
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 25) . ';							
			border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 51) . ';
			padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-button-section a.oxi-addons-call-to-action-button:hover{
			border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
		}	
			
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content:after{
			width :' . $styledata[259] . 'px; 
			height : ' . $styledata[263] . 'px; 
		}
		.oxi-addons-call-to-action-' . $oxiid . '  .oxi-addons-call-to-action-full-content:after{
			display : none;	
		}
	}
	
	';
		wp_add_inline_style('shortcode-addons-style', $css);
	}
}
