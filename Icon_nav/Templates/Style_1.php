<?php

namespace SHORTCODE_ADDONS_UPLOAD\Icon_nav\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin){
        $styledata = $this->style;
        $branding = $texttooltip = '';
        
        wp_enqueue_script("tooltipster-bundle-min", SA_ADDONS_UPLOAD_URL . 'Icon_nav/File/tooltipster.bundle.min.js',  ['jquery'], '', true);
        wp_enqueue_style("tooltipster-bundle-min-css", SA_ADDONS_UPLOAD_URL . 'Icon_nav/File/tooltipster.bundle.min.css',  null, '', FALSE);
        
        if($this->media_render('sa_icon_nav_branding_image', $styledata) != '' && $styledata['sa_icon_nav_branding'] == 'yes'){
           $branding = '<div class="sa_icon_nav_branding">
                        <div class="sa_icon_nav_logo">
                            <img src="'.$this->media_render('sa_icon_nav_branding_image', $styledata).'" />
                        </div>
                    </div>';
        }
        
        echo '
            <div class="sa_icon_nav_style_1 '.$styledata['sa_icon_nav_icon_nav_position'].'">
                <div class="sa_icon_nav_bar">
                    '.$branding.'
                    ';
                    foreach ($styledata['sa_icon_nav_data_style_1'] as $key => $value) {
                        $texttooltip = $satooltip = '';
                        if($styledata['sa_icon_nav_menu_text'] == 'show_under_icon'){
                            $texttooltip = '<span class="sa_icon_nav_text">'.$this->text_render($value['sa_icon_nav_title']).'</span>';  
                          }else{
                              $satooltip = 'class="sa-tooltip" title="'.$this->text_render($value['sa_icon_nav_title']).'"';
                          }
                        echo ' <ul class="sa_icon_nav_menu">
                                    <li '.$satooltip.'>
                                        <a '.$this->url_render('sa_icon_nav_url', $value).'>
                                            <span>'.$this->font_awesome_render($value['sa_icon_nav_icon']).'</span>
                                            '.$texttooltip.'
                                        </a>
                                    </li>
                               </ul>';
                    }
               echo '</div>
            </div>
        ';
    }
    public function inline_public_jquery()
    {
        $jquery = '';

        $jquery .= 'jQuery(document).ready(function(){
                        $(".sa-tooltip").tooltipster({
                           theme: ["tooltipster-noir", "tooltipster-noir-customized"]

                        });
                    });
                    ';
        return $jquery;
    }
    public function inline_public_css() {
       $styledata = $this->style;
       $css = '';
       
       $css .= '.tooltipster-sidetip.tooltipster-noir.tooltipster-noir-customized .tooltipster-box {
                     background:'.$styledata['sa_icon_nav_icon_tooltip_bg'].' !important;
                     border: 0px !important;
                     border-radius: '.$styledata['sa_icon_nav_icon_tooltip_br-size'].' !important;
                }
                .tooltipster-sidetip.tooltipster-noir.tooltipster-noir-customized .tooltipster-content{
                    color: '.$styledata['sa_icon_nav_icon_tooltip_color'].' !important;
                }
                .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background{
                     border-top-color: '.$styledata['sa_icon_nav_icon_tooltip_bg'].' !important;
                }';
       
       return $css;
    }
   
}
