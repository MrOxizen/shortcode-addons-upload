<?php

if (!defined('ABSPATH')) {
	exit;
}

function oxi_bullet_list_style_3_shortcode($styledata = false, $listdata = false, $user = 'user') {
	$oxiid = $styledata['id'];
	$stylefiles = explode('||#||', $styledata['css']);
	$styledata = explode('|', $stylefiles[0]);
	$css = '';
	
                echo '
                    <div class="oxi-addons-container">
                        <div class=" oxi-addons-row"> 
                            <div class=" oxi-addons-bullet-list-' . $oxiid . '"> 
                                    <div class="oxi-addons-bullet-list-full-content"> 
                                            <div class="oxi-addons-list-type-1">
                                                    <ol class="oxi-addons-list-ol ">';
                                            ?><?php

                            foreach ($listdata as $one_item) {

                                    $a_tag = $content = '';
                                    $listfiles = explode('||#||', $one_item['files']);

                                    if(!empty($listfiles[5])){
                                    $content = '"\\'.$listfiles[5].'"';
                                    }		
                                    if(!empty($listfiles[1])){
                                            $a_tag = '<a href="' . OxiAddonsUrlConvert($listfiles[3]) . '" class="oxi-BL-link oxi-BL-link-'.$one_item['id'].'">' . OxiAddonsTextConvert($listfiles[1]) . '</a>';
                                    }
                                    echo'
                                                            <li class="oxi-addons-list-li ' . OxiAddonsAdminDefine($user) . ' ">'.$a_tag.'
                                                            ';
                                    if ($user == 'admin') {
                                            echo '  <div class="oxi-addons-admin-absulote">
                                                                    <div class="oxi-addons-admin-absulate-edit">
                                                                            <form method="post"> ' . wp_nonce_field("OxiAddonsListFileEditbullet_listdata") . '
                                                                                    <input type="hidden" name="oxi-item-id" value="' . $one_item['id'] . '">
                                                                                    <button class="btn btn-primary" type="submit" value="edit" name="OxiAddonsListFileEdit">Edit</button>
                                                                            </form>
                                                                    </div>
                                                                    <div class="oxi-addons-admin-absulate-delete">
                                                                            <form method="post">  ' . wp_nonce_field("OxiAddonsListFileDeletebullet_listdata") . '
                                                                                    <input type="hidden" name="oxi-item-id" value="' . $one_item['id'] . '">
                                                                                    <button class="btn btn-danger " type="submit" value="delete" name="OxiAddonsListFileDelete">Delete</button>
                                                                            </form>
                                                                    </div>
                                                            </div>';
                                    }
                                    echo '</li>';
                                    $css.= '.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link.oxi-BL-link-'.$one_item['id'].':before{
                                            content: '.$content .';
                                    }';
                            }
                                    echo'</ol>
                                            </div> 
                                    </div>
                            </div>
                    </div>
                </div>
	';
	

	$css .= '
	
		.oxi-addons-bullet-list-' . $oxiid . '{
			width:100%;
			display: flex;
			justify-content: center;
		}
		.oxi-addons-bullet-list-'. $oxiid .' .oxi-addons-bullet-list-full-content{
			background : transparent;
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1{
			width:100%;
			float: left;
			max-width: ' . $styledata[175] . 'px; 				 
			margin : 0 0 0 0;
			padding :' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol{
			width:100%;
			float: left;
			counter-reset: li;
			list-style: none;
			Padding :' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
			margin : 0 0 0 0;
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol li.oxi-addons-list-li{
			padding : 0 0 0 0;
			margin  : ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link{
			position: relative;
			display: block;
			Padding :' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
			margin : 0 0 0 0;
			color:' . $styledata[85] . ';
			background:' . $styledata[87] . ';
			text-decoration: none;
			font-size: ' . $styledata[81] . 'px;
			transition: all .2s ease-in-out;
		    ' . OxiAddonsFontSettings($styledata, 89) . '
			 transform-origin: 0% 0%;
			 border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:hover{
			
			color:' . $styledata[127] . ';
			background:' . $styledata[129] . ';
			text-decoration:none;
			transform: scale(' . $styledata[171] . ');
		}

	.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:before{
            font-family: "Font Awesome\ 5 Free";  
            font-weight: 900;
			position: absolute;
			right: 100%;
			top: 50%;
			color:' . $styledata[73] . ';
			background:' . $styledata[75] . ';
			height : '.$styledata[183].'px;
			width: '.$styledata[179].'px;
			border-radius : 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			Padding : 0;
			font-size: ' . $styledata[43] . 'px;
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 131) . ';
			border-style: ' . $styledata[147] . ';
			border-color: ' . $styledata[148] . ';
			transform: translateY(-50%);
			margin :' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
			text-align: center!important;
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:hover:before{
			color:' . $styledata[77] . ';
			background:' . $styledata[79] . ';
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
			border-style: ' . $styledata[167] . ';
			border-color: ' . $styledata[168] . ';
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-bullet-list {
			width: 100%;
			float:left;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-bullet-list oxi-addons-bullet-list-full-content{
			width: 100%;
			float:left;	
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-bullet-list-full-content ul.oxi-addons-bl-ul{
			list-style-type : disc;
			list-style-position : inside;
			list-style-image: black;
		}
	@media only screen and (min-width : 669px) and (max-width : 993px){
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1{
			max-width: ' . $styledata[176] . 'px; 
				padding :' . OxiAddonsPaddingMarginSanitize($styledata, 22) . ';
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol{
			Padding :' . OxiAddonsPaddingMarginSanitize($styledata, 6) . ';
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol li.oxi-addons-list-li{
			margin  : ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link{
			Padding :' . OxiAddonsPaddingMarginSanitize($styledata, 96) . ';
			font-size: ' . $styledata[82] . 'px;
			 border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
			
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:before{
			margin :' . OxiAddonsPaddingMarginSanitize($styledata, 58) . ';
			font-size: ' . $styledata[44] . 'px;
			width :	'.$styledata[180].'px;
			height : '.$styledata[184].'px;'
			. 'border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 132) . ';
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:hover:before{
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
		}
	}
	@media only screen and (max-width : 668px){
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1{
			max-width: ' . $styledata[177] . 'px; 
				padding :' . OxiAddonsPaddingMarginSanitize($styledata, 23) . ';
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol{
			Padding :' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';
		}

		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 ol.oxi-addons-list-ol li.oxi-addons-list-li{
			margin  : ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';
		}
			.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link{
			Padding :' . OxiAddonsPaddingMarginSanitize($styledata, 97) . ';
			font-size: ' . $styledata[83] . 'px;
				 border-radius : ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
		}



		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:before{
			margin :' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';
			font-size: ' . $styledata[45] . 'px;
				width : '.$styledata[181].'px;
					height : '.$styledata[185].'px;
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 133) . ';
		}
		.oxi-addons-bullet-list-' . $oxiid . ' .oxi-addons-list-type-1 a.oxi-BL-link:hover:before{
			border-width : ' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
		}

	}
	';
      echo OxiAddonsInlineCSSData($css);
}
