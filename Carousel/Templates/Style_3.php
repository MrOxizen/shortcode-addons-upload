<?php

namespace SHORTCODE_ADDONS_UPLOAD\Carousel\Templates;

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

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $styledata = $this->style;
        $oxiid = $this->oxiid;
        $all_data = (array_key_exists('sa_carousel_data', $styledata) && is_array($styledata['sa_carousel_data'])) ? $styledata['sa_carousel_data'] : [];
        echo '<div class="sa_addons_carousel_style_3 sa_addons_carousel_style_3_' . $oxiid . '  ' . $styledata['sa_carousel_dot_posi'] . '  ' . $styledata['sa_carousel_dot_view'] . '  ' . $styledata['sa_carousel_nav_style_posi'] . '  ' . $styledata['sa_carousel_nav_style'] . '">';
        foreach ($all_data as $value) {
            $image = $text = $shortcode = '';
            if ($value['sa_carousel_type'] == 'sa_carousel_shortcode') {
                if ($value['sa_carousel_item_shortcode'] != '') {
                    $shortcode .= $this->text_render($value['sa_carousel_item_shortcode']);
                }
            } elseif ($value['sa_carousel_type'] == 'sa_carousel_img') {
                if ($this->media_render('sa_carousel_item_img', $value) != '') {
                    $image .= '<img class="sa_addons_carousel_img" src="' . $this->media_render('sa_carousel_item_img', $value) . '" >';
                }
            } else {
                $text .= '<div class="sa_addons_carousel_item_text">
                            ' . $this->text_render($value['sa_carousel_item_text']) . '
                        </div>';
            }
            echo '
                <div class="sa_addons_carousel_item oxi-item ">
                    ' . $shortcode . '
                    ' . $image . '
                    ' . $text . '
                </div> 
            ';
        }
        echo '</div>';
        if ($styledata['sa_carousel_cen_mod_on_off'] == 'true') {
            $this->inline_css .= '.' . $this->WRAPPER . ' .sa_addons_carousel_style_3 .oxi-owl-item, 
                            ' . $this->WRAPPER . ' .sa_addons_carousel_style_3 .oxi-owl-item{
                opacity:0.8;
                transform:scale(0.94);
            }
            .' . $this->WRAPPER . ' .sa_addons_carousel_style_3 .oxi-owl-item.active.center{
                opacity:1;
                transform:scale(1);
            }
         ';
        }
    }
    public function public_css()
    {
        wp_enqueue_style('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Carousel/File/owl.carousel.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function public_jquery()
    {
        $this->JSHANDLE = 'owl.carousel';
        wp_enqueue_script('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Carousel/File/owl.carousel.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery()
    {
        $jquery = $navtext = '';
        $styledata = $this->style;
        $oxiid = $this->oxiid;
        $navtext .= '[\'' . $this->font_awesome_render($styledata['sa_carousel_nav_left'] != ''  ? $styledata['sa_carousel_nav_left'] : '') . '\', \'' . $this->font_awesome_render($styledata['sa_carousel_nav_right'] != ''  ? $styledata['sa_carousel_nav_right'] : '') . '\' ]';
        $jquery = 'jQuery(".sa_addons_carousel_style_3_' . $oxiid . '").OxiAddowlCarousel({
            loop: ' . $styledata['sa_carousel_infin_loop_on_off'] . ',
            margin:0,
            autoplay:' . $styledata['sa_carousel_a_p_on_off'] . ',
            autoplayTimeout: ' . ($styledata['sa_carousel_a_p_dur'] * 1000) . ',
            center: ' . $styledata['sa_carousel_cen_mod_on_off'] . ',
            autoplayHoverPause:' . $styledata['sa_carousel_pau_hov_on_off'] . ',
            mouseDrag:' . $styledata['sa_carousel_mou_dragg_on_off'] . ',
            rtl:' . $styledata['sa_carousel_rig_left_on_off'] . ',
            stagePadding: ' . $styledata['sa_carousel_stage_p'] . ',
            merge:' . $styledata['sa_carousel_mar_on_off'] . ',
            autoHeight: ' . $styledata['sa_carousel_au_hei_on_off'] . ',
            autoHeightClass: "oxi-owl-height",
            animateOut: "' . $styledata['sa_carousel_anim_out'] . '",
            animateIn: "' . $styledata['sa_carousel_anim_in'] . '",
            nav: ' . $styledata['sa_carousel_nav_on_off'] . ',
            navText: ' . $navtext . ',
            dots: ' . $styledata['sa_carousel_dot_on_off'] . ',
            responsive: {
                0: {
                    merge:false,
                    items: ' . $this->saAddonsCarouselItemCol($styledata['sa_carousel_col-mob']) . ',
                },
                668: {
                    merge:false,
                    items: ' . $this->saAddonsCarouselItemCol($styledata['sa_carousel_col-tab']) . ',
                },
                1000: {
                    merge:' . $styledata['sa_carousel_mar_on_off'] . ',
                    items: ' . $this->saAddonsCarouselItemCol($styledata['sa_carousel_col-lap']) . ',
                },
            },
        });';
        return $jquery;
    }
    public function saAddonsCarouselItemCol($data)
    {
        if ($data == 'sa_carousel_show_1') {
            $datareturn = '1';
        } elseif ($data == 'sa_carousel_show_2') {
            $datareturn = '2';
        } elseif ($data == 'sa_carousel_show_3') {
            $datareturn = '3';
        } elseif ($data == 'sa_carousel_show_4') {
            $datareturn = '4';
        } elseif ($data == 'sa_carousel_show_5') {
            $datareturn = '5';
        } elseif ($data == 'sa_carousel_show_6') {
            $datareturn = '6';
        } elseif ($data == 'sa_carousel_show_7') {
            $datareturn = '7';
        } elseif ($data == 'sa_carousel_show_8') {
            $datareturn = '8';
        } elseif ($data == 'sa_carousel_show_9') {
            $datareturn = '9';
        } elseif ($data == 'sa_carousel_show_10') {
            $datareturn = '10';
        }
        return $datareturn;
    }
    public function old_render()
    {

        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $navleft = $navright = $eualdata = $navright = $navlefttab = $navrighttab = $navleftmobile = $navrightmobile = '';
        wp_enqueue_style('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Carousel/File/owl.carousel.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Carousel/File/owl.carousel.js', false, SA_ADDONS_PLUGIN_VERSION);
        echo '<div class="oxi-addons-container">
             <div class="oxi-addons-row">
                <div class="oxi-addons-carousel-' . $oxiid . '">';
        foreach ($listdata as $value) {
            $file = explode('||#||', $value['files']);
            echo '<div class="oxi-item  ">';
            echo '' . OxiAddonsTextConvert($file[1]) . '';
            echo '</div>';
        }
        echo '</div></div></div>';
        if ($styledata[121] == 'icon') {
            $navtext = '["<i class=\'' . $stylefiles[2] . ' oxi-icons\'></i>", "<i class=\'' . $stylefiles[4] . ' oxi-icons\'></i>"]';
            $eualdata = ' OxiAddonsEqualHeightWidth(jQuery(".oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-icons"))';
        } else {
            $css .= '.oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev .oxi-icons,
                .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next .oxi-icons{
                   ' . OxiAddonsFontSettings($styledata, 163) . '    
                }';
            $navtext = '["<div class=\'oxi-icons\'>' . $stylefiles[2] . '</div>", "<div class=\'oxi-icons\'>' . $stylefiles[4] . '</div>"]';
        }

        $jquery = 'jQuery(".oxi-addons-carousel-' . $oxiid . '").OxiAddowlCarousel({
                    loop: ' . $styledata[15] . ',
                    margin:0,
                    autoplay:' . $styledata[7] . ',
                    autoplayTimeout: ' . ($styledata[9] * 1000) . ',
                    center: ' . $styledata[11] . ',
                    autoplayHoverPause:' . $styledata[13] . ',
                    mouseDrag:' . $styledata[17] . ',
                    rtl:' . $styledata[19] . ',
                    stagePadding: ' . $styledata[235] . ',
                    merge:' . $styledata[233] . ',
                    autoHeight: ' . $styledata[237] . ',
                    animateOut: "' . $styledata[247] . '",
                    animateIn: "' . $styledata[245] . '",
                    autoHeightClass: "oxi-owl-height",
                    nav: ' . $styledata[119] . ',
                    navText: ' . $navtext . ',
                    dots: ' . $styledata[39] . ',
                        
                    responsive: {
                        0: {
                            merge:false,
                            items: ' . $this->OxiAddonscolReplacecarousel1($styledata[5]) . '
                        },
                        668: {
                            merge:false,
                            items: ' . $this->OxiAddonscolReplacecarousel1($styledata[4]) . '
                        },
                        1000: {
                            merge:' . $styledata[233] . ',
                            items: ' . $this->OxiAddonscolReplacecarousel1($styledata[3]) . '
                        }
                    }
                });
               ' . $eualdata . '';

        $css .= '   .oxi-addons-carousel-' . $oxiid . ' {
                    display: none;
                    width: 100%;
                    -webkit-tap-highlight-color: transparent;
                    position: relative;
                    z-index: 1;  
                    padding-left:' . $styledata[31] . 'px;
                    padding-right:' . $styledata[35] . 'px;    
                }
                .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage-outer{ 
                    padding-top:' . $styledata[23] . 'px;
                    padding-bottom:' . $styledata[27] . 'px;    
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-carousel-' . $oxiid . ' {
                       padding-left:' . $styledata[32] . 'px;
                       padding-right:' . $styledata[36] . 'px;    
                   }
                   .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage-outer{ 
                       padding-top:' . $styledata[24] . 'px;
                       padding-bottom:' . $styledata[28] . 'px;    
                   }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-carousel-' . $oxiid . ' {
                       padding-left:' . $styledata[33] . 'px;
                       padding-right:' . $styledata[37] . 'px;    
                    }
                   .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage-outer{ 
                       padding-top:' . $styledata[25] . 'px;
                       padding-bottom:' . $styledata[29] . 'px;    
                   }
                }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage {
                position: relative;
                -ms-touch-action: pan-Y;
                touch-action: manipulation;
                -moz-backface-visibility: hidden;
                display:flex;
                align-items: ' . $styledata[21] . '
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage-outer.oxi-owl-height .oxi-owl-stage {
                display:block;
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage:after {
                content: ".";
                display: block;
                clear: both;
                visibility: hidden;
                line-height: 0;
                height: 0; }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-stage-outer {
                position: relative;
                overflow: hidden;
                -webkit-transform: translate3d(0px, 0px, 0px); }
            .oxi-addons-carousel-' . $oxiid . ' .owl-wrapper,
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-item {
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -ms-backface-visibility: hidden;
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0); }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-item {
                position: relative;
                min-height: 1px;
                float: left;
                -webkit-backface-visibility: hidden;
                -webkit-tap-highlight-color: transparent;
                -webkit-touch-callout: none;
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav.disabled,
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dots.disabled {
                display: none; 
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav{
              opacity:' . $styledata[239] . ';  
              line-height: 1;    
            }
            .oxi-addons-carousel-' . $oxiid . ':hover .oxi-owl-nav{
              opacity:1;  
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dots{
              opacity:' . $styledata[241] . ';  
            }
            .oxi-addons-carousel-' . $oxiid . ':hover .oxi-owl-dots{
              opacity:1;  
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev,
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next,
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot {
                cursor: pointer;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none; 
                display:flex;
                line-height:1;
            }
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev,
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next,
            .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot {
                background: none;
                color: inherit;
                border: none;
                padding: 0;
                font: inherit;
            }
            .oxi-addons-carousel-' . $oxiid . '.oxi-owl-loaded {
                display: block; 
            }
            .oxi-addons-carousel-' . $oxiid . '.oxi-owl-loading {
                opacity: 0;
                display: block; 
            }
            .oxi-addons-carousel-' . $oxiid . '.owl-hidden {
                opacity: 0; 
            }
            .oxi-addons-carousel-' . $oxiid . '.owl-refresh .oxi-owl-item {
                visibility: hidden;
            }
            .oxi-addons-carousel-' . $oxiid . '.owl-drag .oxi-owl-item {
                -ms-touch-action: pan-y;
                touch-action: pan-y;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            .oxi-addons-carousel-' . $oxiid . '.oxi-owl-grab {
                cursor: move;
                cursor: grab; 
            }
            .oxi-addons-carousel-' . $oxiid . '.oxi-owl-rtl {
                direction: rtl; 
            }
            .oxi-addons-carousel-' . $oxiid . '.oxi-owl-rtl .oxi-owl-item {
                float: right; 
            }
            .no-js .oxi-addons-carousel-' . $oxiid . ' {
                display: block; }

            .oxi-addons-carousel-' . $oxiid . ' .animated {
                animation-duration: 1000ms;
                animation-fill-mode: both; 
            }

            .oxi-addons-carousel-' . $oxiid . ' .owl-animated-in {
                z-index: 0; 
            }

            .oxi-addons-carousel-' . $oxiid . ' .owl-animated-out {
                z-index: 1; 
            }

            .oxi-addons-carousel-' . $oxiid . ' .fadeOut {
                animation-name: fadeOut; }

            @keyframes fadeOut {
                0% {
                    opacity: 1; }
                100% {
                    opacity: 0; } }

            .oxi-owl-height {
                transition: height 500ms ease-in-out;
            }';
        if ($styledata[11] == 'true') {
            $css .= '.oxi-addons-carousel-' . $oxiid . ' .oxi-owl-item.active, .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-item{
                            opacity:0.8;
                            transform:scale(0.94);
                         }
                         .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-item.active.center{
                            opacity:1;
                            transform:scale(1);
                         }';
        }
        if ($styledata[41] == 'top-left') {
            $dotsposition = 'top: ' . $styledata[43] . 'px; left: ' . $styledata[47] . 'px;';
            $dotspositiontab = 'top: ' . $styledata[44] . 'px; left: ' . $styledata[48] . 'px;';
            $dotspositionmobile = 'top: ' . $styledata[45] . 'px; left: ' . $styledata[49] . 'px;';
        } else if ($styledata[41] == 'top-middle') {
            $dotsposition = 'top: ' . $styledata[43] . 'px; left: 50%;transform:translateX(-50%)';
            $dotspositiontab = 'top: ' . $styledata[44] . 'px; left: 50%;transform:translateX(-50%)';
            $dotspositionmobile = 'top: ' . $styledata[44] . 'px; left: 50%;transform:translateX(-50%)';
        } elseif ($styledata[41] == 'top-right') {
            $dotsposition = 'top: ' . $styledata[43] . 'px; right: ' . $styledata[47] . 'px;';
            $dotspositiontab = 'top: ' . $styledata[44] . 'px; right: ' . $styledata[48] . 'px;';
            $dotspositionmobile = 'top: ' . $styledata[45] . 'px; right: ' . $styledata[49] . 'px;';
        } elseif ($styledata[41] == 'bottom-left') {
            $dotsposition = 'bottom: ' . $styledata[43] . 'px; left: ' . $styledata[47] . 'px;';
            $dotspositiontab = 'bottom: ' . $styledata[44] . 'px; left: ' . $styledata[48] . 'px;';
            $dotspositionmobile = 'bottom: ' . $styledata[45] . 'px; left: ' . $styledata[49] . 'px;';
        } elseif ($styledata[41] == 'bottom-right') {
            $dotsposition = 'bottom: ' . $styledata[43] . 'px; right: ' . $styledata[47] . 'px;';
            $dotspositiontab = 'bottom: ' . $styledata[44] . 'px; right: ' . $styledata[48] . 'px;';
            $dotspositionmobile = 'bottom: ' . $styledata[45] . 'px; right: ' . $styledata[49] . 'px;';
        } else {
            $dotsposition = 'bottom: ' . $styledata[43] . 'px; left: 50%;transform:translateX(-50%)';
            $dotspositiontab = 'bottom: ' . $styledata[44] . 'px; left: 50%;transform:translateX(-50%)';
            $dotspositionmobile = 'bottom: ' . $styledata[45] . 'px; left: 50%;transform:translateX(-50%)';
        }
        $css .= '.oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dots{
                    position: absolute;
                    display: flex;
                    z-index: 100;
                    ' . $dotsposition . '
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dots{
                        ' . $dotspositiontab . '
                    }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dots{
                       ' . $dotspositionmobile . '
                   }
                }
                .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                }
                
                .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot span{
                   background: ' . $styledata[51] . ';
                   padding:' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 55) . ';
                }
                .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot:hover span,
                .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot.active span{
                   background: ' . $styledata[53] . ';
                   border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
                   transform:scale(' . $styledata[243] . ') ;
                }
                 @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 104) . ';
                    }

                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot span{
                       padding:' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
                       border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 56) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot:hover span,
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot.active span{
                       border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
                    }
                }
                @media only screen and (max-width : 668px){
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 105) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot span{
                       padding:' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                       border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot:hover span,
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-dot.active span{
                       border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                    }
                }';
        if ($styledata[127] == 'style-2') {
            if ($styledata[129] == 'top-left') {
                $navposition = 'top: ' . $styledata[131] . 'px; left: ' . $styledata[135] . 'px;';
                $navpositiontab = 'top: ' . $styledata[132] . 'px; left: ' . $styledata[136] . 'px;';
                $navpositionmobile = 'top: ' . $styledata[133] . 'px; left: ' . $styledata[137] . 'px;';
            } else if ($styledata[129] == 'top-middle') {
                $navposition = 'top: ' . $styledata[131] . 'px; left: 50%;transform:translateX(-50%)';
                $navpositiontab = 'top: ' . $styledata[132] . 'px; left: 50%;transform:translateX(-50%)';
                $navpositionmobile = 'top: ' . $styledata[133] . 'px; left: 50%;transform:translateX(-50%)';
            } elseif ($styledata[129] == 'top-right') {
                $navposition = 'top: ' . $styledata[131] . 'px; right: ' . $styledata[135] . 'px;';
                $navpositiontab = 'top: ' . $styledata[132] . 'px; right: ' . $styledata[136] . 'px;';
                $navpositionmobile = 'top: ' . $styledata[133] . 'px; right: ' . $styledata[137] . 'px;';
            } elseif ($styledata[129] == 'bottom-left') {
                $navposition = 'bottom: ' . $styledata[131] . 'px; left: ' . $styledata[135] . 'px;';
                $navpositiontab = 'bottom: ' . $styledata[132] . 'px; left: ' . $styledata[136] . 'px;';
                $navpositionmobile = 'bottom: ' . $styledata[133] . 'px; left: ' . $styledata[136] . 'px;';
            } elseif ($styledata[129] == 'bottom-right') {
                $navposition = 'bottom: ' . $styledata[131] . 'px; right: ' . $styledata[135] . 'px;';
                $navpositiontab = 'bottom: ' . $styledata[132] . 'px; right: ' . $styledata[136] . 'px;';
                $navpositionmobile = 'bottom: ' . $styledata[133] . 'px; right: ' . $styledata[137] . 'px;';
            } else {
                $navposition = 'bottom: ' . $styledata[131] . 'px; left: 50%;transform:translateX(-50%)';
                $navpositiontab = 'bottom: ' . $styledata[132] . 'px; left: 50%;transform:translateX(-50%)';
                $navpositionmobile = 'bottom: ' . $styledata[133] . 'px; left: 50%;transform:translateX(-50%)';
            }
        } else {
            $navposition = 'width:100%;top: ' . $styledata[131] . '%; transform: translateY(-' . $styledata[131] . '%); left: 0%;';
            $navpositiontab = 'top: ' . $styledata[132] . '%; transform: translateY(-' . $styledata[132] . '%); left: 0%;';
            $navpositionmobile = 'top: ' . $styledata[133] . '%; transform: translateY(-' . $styledata[133] . '%); left: 0%;';
            $navleft = 'float:left; margin-left:' . $styledata[135] . '%;';
            $navright = 'float:right; margin-right:' . $styledata[135] . '%;';
            $navlefttab = 'float:left; margin-left:' . $styledata[136] . '%;';
            $navrighttab = 'float:right; margin-right:' . $styledata[136] . '%;';
            $navleftmobile = 'float:left; margin-left:' . $styledata[137] . '%;';
            $navrightmobile = 'float:right; margin-right:' . $styledata[137] . '%;';
        }
        $css .= '.oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav{
                    position: absolute;
                    z-index: 100;
                    ' . $navposition . '
             }
             
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev{
                 ' . $navleft . '
                 background: ' . $styledata[147] . ';
                 border: ' . $styledata[151] . 'px ' . $styledata[152] . ' ' . $styledata[155] . ';
                 border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
                 padding:' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';
                 margin:' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ';
                 ' . OxiAddonsBoxShadowSanitize($styledata, 249) . '    
             }
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next{
                 ' . $navright . '
                 background: ' . $styledata[147] . ';
                 border: ' . $styledata[151] . 'px ' . $styledata[152] . ' ' . $styledata[155] . ';
                 border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 169) . ';
                 padding:' . OxiAddonsPaddingMarginSanitize($styledata, 201) . ';
                 margin:' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ';
                 ' . OxiAddonsBoxShadowSanitize($styledata, 249) . '      
             }
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev .oxi-icons,
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next .oxi-icons{
                 font-size: ' . $styledata[139] . 'px;
                 line-height:1;
                 color:' . $styledata[143] . ';
                
             }
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev:hover,
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next:hover{
                 background: ' . $styledata[149] . ';
                 border: ' . $styledata[157] . 'px ' . $styledata[158] . ' ' . $styledata[161] . ';
                 border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
                 ' . OxiAddonsBoxShadowSanitize($styledata, 255) . '  
              }
              @media only screen and (min-width : 669px) and (max-width : 993px){
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav{
                         ' . $navpositiontab . '
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev{
                        ' . $navlefttab . '
                        border: ' . $styledata[152] . 'px ' . $styledata[152] . ' ' . $styledata[155] . ';
                        border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 202) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 218) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next{
                        ' . $navrighttab . '
                        border: ' . $styledata[152] . 'px ' . $styledata[152] . ' ' . $styledata[155] . ';
                        border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 170) . ';
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 202) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 218) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev .oxi-icons,
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next .oxi-icons{
                        font-size: ' . $styledata[140] . 'px;
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev:hover,
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next:hover{
                        border: ' . $styledata[158] . 'px ' . $styledata[158] . ' ' . $styledata[161] . ';
                        border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                     }
             }
             @media only screen and (max-width : 668px){
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav{
                         ' . $navpositionmobile . '
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev{
                        ' . $navleftmobile . '
                        border: ' . $styledata[153] . 'px ' . $styledata[152] . ' ' . $styledata[155] . ';
                        border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next{
                        ' . $navrightmobile . '
                        border: ' . $styledata[153] . 'px ' . $styledata[152] . ' ' . $styledata[155] . ';
                        border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 171) . ';
                        padding:' . OxiAddonsPaddingMarginSanitize($styledata, 203) . ';
                        margin:' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev .oxi-icons,
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next .oxi-icons{
                        font-size: ' . $styledata[141] . 'px;
                    }
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev:hover,
                    .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next:hover{
                        border: ' . $styledata[159] . 'px ' . $styledata[158] . ' ' . $styledata[161] . ';
                        border-radius:' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                     }
             }
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-prev:hover .oxi-icons,
             .oxi-addons-carousel-' . $oxiid . ' .oxi-owl-nav .oxi-owl-next:hover .oxi-icons{
                 color:' . $styledata[145] . ';
             }';

        wp_add_inline_style('owl.carousel', $css);
        wp_add_inline_script('owl.carousel', $jquery);
    }
    public function OxiAddonscolReplacecarousel1($data)
    {
        if ($data == 'oxi-addons-lg-col-1' || $data == 'oxi-addons-md-col-1' || $data == 'oxi-addons-xs-col-1') {
            $datareturn = '1';
        } elseif ($data == 'oxi-addons-lg-col-2' || $data == 'oxi-addons-md-col-2' || $data == 'oxi-addons-xs-col-2') {
            $datareturn = '2';
        } elseif ($data == 'oxi-addons-lg-col-3' || $data == 'oxi-addons-md-col-3' || $data == 'oxi-addons-xs-col-3') {
            $datareturn = '3';
        } elseif ($data == 'oxi-addons-lg-col-4' || $data == 'oxi-addons-md-col-4' || $data == 'oxi-addons-xs-col-4') {
            $datareturn = '4';
        } elseif ($data == 'oxi-addons-lg-col-5' || $data == 'oxi-addons-md-col-5' || $data == 'oxi-addons-xs-col-5') {
            $datareturn = '5';
        } elseif ($data == 'oxi-addons-lg-col-6' || $data == 'oxi-addons-md-col-6' || $data == 'oxi-addons-xs-col-6') {
            $datareturn = '6';
        }
        return $datareturn;
    }
}
