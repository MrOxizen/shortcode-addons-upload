<?php

namespace SHORTCODE_ADDONS_UPLOAD\Counter\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_5 extends Templates {

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-counterup-min';
        wp_enqueue_script('jquery-counterup-min', SA_ADDONS_UPLOAD_URL . '/Counter/file/jquery-counterup-min', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $jquery = 'jQuery(".oxi-number-style5").counterUp({
                    delay: ' . $style['sa_counter_delay-size'] . ',
                    time: ' . $style['sa_counter_duration-size'] . '
                })';
        return $jquery;
        ;
    }

    public function default_render($style, $child, $admin) {
        $repeater = (array_key_exists('sa_counter_repeater', $style) && is_array($style['sa_counter_repeater'])) ? $style['sa_counter_repeater'] : [];
        foreach ($repeater as $key => $value) {

            if (array_key_exists('sa_counter_icon', $style) && $style['sa_counter_icon'] != '0') {
                $icon = '<div class="oxi-addons-counter-body-data"> 
                            <div class="oxi-addons-counter-icon">
                                ' . $this->font_awesome_render($value['sa_counter_icon_class']) . '
                            </div>
                        </div>';
            }
            if (array_key_exists('sa_counter_text_on', $style) && $style['sa_counter_text_on'] != '0') {
                $title = '<div class="oxi-addons-counter-body-data">
                                <div class="oxi-addons-counter-title">
                                    ' . $this->text_render($value['sa_counter_title_text']) . '
                                </div>
                         </div>';
            }
            if (array_key_exists('sa_counter_divider_on', $style) && $style['sa_counter_divider_on'] != '0') {
                $divider = '<div class="oxi-addons-counter-body-data"> 
                                <div class="oxi-addons-counter-divider">
                                    <div class="oxi-divider-left">
                                        <div class="oxi-divider"></div>
                                    </div>
                                </div>
                            </div>';
            }
            if (array_key_exists('sa_counter_number_on', $style) && $style['sa_counter_number_on'] != '0') {
                $number = '<div class="oxi-addons-counter-body-data">
                                <div class="oxi-addons-counter-number">
                                    <span class="oxi-number-style5">'
                        . $this->text_render($value['sa_counter_number']) . '
                                     </span> 
                                     ' . $value['sa_counter_number_sign'] . '
                                </div>
                            </div>';
            }


            echo '<div class = "' . $this->column_render('sa_counter_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '" ' . $this->animation_render('sa_counter_animation', $style) . '>
                    <div class="oxi-addons-counter-style5 style5-' . $key . ' ' . $style['sa_counter_align'] . '"> 
                       <div class="oxi-addons-counter-row">';

            
            $rearrange = explode(',', $style['sa_counter_rearrange']);
               foreach ($rearrange as $arrange) {
                    if ($arrange != ''):
                        if (isset($$arrange)) {
                            echo $$arrange;
                        }
                    endif;
                }
          
            echo '      </div>
                    </div>
                </div>';
        }
          
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $datatype = $styledata['type'] . 'data';
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        echo '
    <div class="oxi-addons-container">
        <div class="oxi-addons-row">
            <div class="oxi-addons-wrapper-' . $oxiid . '">';
        foreach ($listdata as $key => $value) {
            $listfiles = explode('||#||', $value['files']);
            $title = $number = $icon = $count = '';
            if ($styledata[173] == 'true') {
                $count = $stylefiles[2];
            } else {
                if ($key == $styledata[171]) {
                    $count = $stylefiles[2];
                }
            }

            if (!empty($listfiles[1])) {
                $number = '<div class="oxi-addons-number"> <span class="oxi-number-' . $oxiid . '">' . OxiAddonsTextConvert($listfiles[1]) . ' </span> ' . $count . '</div>';
            }
            if (!empty($listfiles[3])) {
                $title = '<div class="oxi-addons-title">' . OxiAddonsTextConvert($listfiles[3]) . '</div>';
            }
            if (!empty($listfiles[5])) {
                $icon = '<div class="oxi-addons-main-icon">' . oxi_addons_font_awesome($listfiles[5]) . '</div>';
            }
            echo '<div class = "' . OxiAddonsItemRows($styledata, 3) . '">
                            <div class="oxi-addons-counter-' . $oxiid . '"> 
                                <div class="oxi-addons-counter"> 
                                    ' . $icon . '
                                    ' . $number . '
                                    ' . $title . '
                                </div>';

            echo '</div>
                </div>';
        }
        echo '</div>
        </div></div>';
        $css .= '  
        
        .oxi-addons-wrapper-' . $oxiid . '{
            width: 100%;
            float: left; 
            overflow: hidden;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-admin-absulote{
            top: 0;
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter-' . $oxiid . '{
            width: 100%;
            float: left;  
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-counter {
            width: 100%;
            float: left;  
            ' . OxiAddonsBGImage($styledata, 7) . ';
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
             ' . OxiAddonsBoxShadowSanitize($styledata, 43) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-number{
            float:left;
            width:100%;
            font-size: ' . $styledata[53] . 'px;
            color:' . $styledata[63] . ';
            ' . OxiAddonsFontSettings($styledata, 57) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ';
        }
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{
            position: relative;
            float:left;
            width:100%;
            font-size: ' . $styledata[81] . 'px;
            color:' . $styledata[91] . ';
            ' . OxiAddonsFontSettings($styledata, 85) . '
            padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 93) . ';
        }';
        $explode = explode(':', $styledata[89]);
        $line = '';
        if ($explode[0] == 'left') {
            $line = '
                left:0; 
            ';
        } elseif ($explode[0] == 'center') {
            $line = '
                left: 50%;
                transform: translateX(-50%);
            ';
        } else {
            $line = '
                right: 0; 
            ';
        }
        $css .= '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title::after{
            content: "";
            position: absolute;
            top: 0; 
            ' . $line . '
            width:  ' . $styledata[155] . 'px;
            height:  ' . $styledata[159] . 'px;
            background:' . $styledata[163] . '; 
        }';
        $align = '';
        if ($styledata[109] == 'left') {
            $align = 'justify-content: flex-start;';
        } elseif ($styledata[109] == 'center') {
            $align = 'justify-content: center;';
        } else {
            $align = 'justify-content: flex-end;';
        }
        $css .= '.oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-main-icon{
              position: relative;
            width: 100%; 
            display: flex;
            ' . $align . '
        }
         .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{  
            color: ' . $styledata[119] . '; 
            font-size: ' . $styledata[111] . 'px;    
            height: ' . $styledata[115] . 'px ;
            width: ' . $styledata[115] . 'px ; 
            background: ' . $styledata[121] . ';
            border:  ' . $styledata[123] . 'px ' . $styledata[124] . '; 
            border-color: ' . $styledata[127] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 129) . ';   
            align-items: center;
            display: flex;
            justify-content: center;  
            text-decoration:none;   
             transition: .5s all ease-in-out !important;
          }  
           
          .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter:hover  .oxi-icons{ 
             background: ' . $styledata[147] . ';
            color: ' . $styledata[145] . '; 
            border-color: ' . $styledata[153] . ';
          }
        @media only screen and (min-width : 669px) and (max-width : 993px){ 
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-counter { 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-number{ 
                font-size: ' . $styledata[54] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 66) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                font-size: ' . $styledata[82] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 94) . ';
            }  
        .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title::after{ 
                width:  ' . $styledata[156] . 'px;
                height:  ' . $styledata[160] . 'px; 
            } 
         .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{   
            font-size: ' . $styledata[112] . 'px;    
            height: ' . $styledata[116] . 'px ;
            width: ' . $styledata[116] . 'px ;  
          }  
        }
        @media only screen and (max-width : 668px){
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-counter-' . $oxiid . '{ 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . '  .oxi-addons-counter { 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . '; 
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-number{ 
                font-size: ' . $styledata[55] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 67) . ';
            }
            .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title{ 
                font-size: ' . $styledata[83] . 'px; 
                padding:  ' . OxiAddonsPaddingMarginSanitize($styledata, 95) . ';
            }
               .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-title::after{ 
                width:  ' . $styledata[157] . 'px;
                height:  ' . $styledata[161] . 'px; 
            } 
         .oxi-addons-wrapper-' . $oxiid . '  .oxi-icons{   
            font-size: ' . $styledata[113] . 'px;    
            height: ' . $styledata[117] . 'px ;
            width: ' . $styledata[117] . 'px ;  
          }    
        }';
        $jquery = 'jQuery(".oxi-number-' . $oxiid . '").counterUp({
                        delay: ' . ($styledata[51] * 1000) . ',
                        time: ' . ($styledata[49] * 1000) . '
                })';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_enqueue_script('jquery-counterup-min', SA_ADDONS_UPLOAD_URL . '/Counter/file/jquery-counterup-min', false, SA_ADDONS_PLUGIN_VERSION);
        wp_add_inline_script('jquery.countdown.min', $jquery);
    }

}
