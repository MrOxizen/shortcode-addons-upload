<?php

namespace SHORTCODE_ADDONS_UPLOAD\Single_image\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates {

    public function public_jquery() {
        $this->JSHANDLE = 'MagnificPopup';
        wp_enqueue_script('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Single_image/file/MagnificPopup.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_css() {
        wp_enqueue_style('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Single_image/file/MagnificPopup.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $style = $this->style;
//        echo $this->WRAPPER;
        if ($style['sa_s_image_light_or_link'] == 'lightbox') {
            return 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-single-image-icon-data").OximagnificPopup({
                        items: [
                            {
                                src: "' . $this->media_render('sa_s_image_light_img', $style) . '",
                            }
                        ],
                        type: "image",
                        mainClass: "' . $this->WRAPPER . '",
                        callbacks: {
                                    beforeChange: function() {
                                     this.items[0].src = this.items[0].src + "?=" + Math.random(); 
                                    }
                        },
                        closeBtnInside: true,
                        closeOnContentClick: true,
                        tLoading: "",
                    });';
        }
    }

    public function inline_public_css() {
        $style = $this->style;
        if ($style['sa_s_image_light_or_link'] == 'lightbox') {
            return '.shortcode-addons-wrapper-' . $this->oxiid . '.Oximfp-bg{
                        background: ' . $style['sa_s_image_light_bg_color'] . ';
                        z-index: ' . ($style['sa_s_image_light_z_ind'] - 1) . ';
                      }
                  .shortcode-addons-wrapper-' . $this->oxiid . '.Oximfp-wrap{
                   z-index: ' . $style['sa_s_image_light_z_ind'] . ';
                  }
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-content{
                    z-index: ' . ($style['sa_s_image_light_z_ind'] + 2) . ';
                    }
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-close{
                      z-index: ' . ($style['sa_s_image_light_z_ind'] + 3) . ';
                  }

                 .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-image-holder .Oximfp-close, 
                 .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-iframe-holder .Oximfp-close{
                     color: ' . $style['sa_s_image_light_cls_clr'] . ';
                  }
                 
                  .shortcode-addons-wrapper-' . $this->oxiid . ' .Oximfp-preloader{
                     background: ' . $style['sa_s_image_light_pre_clr'] . ';
                  }';
        }
    }

    public function default_render($style, $child, $admin) {

        $deg = $jquery = $css = '';
        if (array_key_exists('sa_s_image_ribbon', $style) && $style['sa_s_image_ribbon'] != '0' && $style['sa_s_image_ribbon_pos'] != '') {
            if ($style['sa_s_image_ribbon_pos'] == 'sa_info_image_img_alignment_left') {
                $deg = 'transform: rotate(-45deg); left : ' . $style['sa_s_image_ribbon_left'] . 'px; ';
            } else {
                $deg = 'transform: rotate(45deg);right : ' . $style['sa_s_image_ribbon_right'] . 'px; ';
            }
        }
        $ribbon = '';
        if (array_key_exists('sa_s_image_ribbon', $style) && $style['sa_s_image_ribbon'] != '0') {
            $ribbon .= '<div class="oxi-addons-single-image-ribbon" style="' . $deg . '">
                            <div class="oxi-addons-single-image-ribbon-position">
                                <div class="oxi-addons-single-image-ribbon-content">' . $this->text_render($style['sa_s_image_ribbon_text']) . '</div>
                            </div>
                        </div>';
        }
        if ($this->media_render('sa_s_image_img', $style) != '') {
            echo '  <div class="oxi-addons-single-image-container-style-2"  id="' . $style['sa_s_image_ID'] . '">
                    <div class="oxi-addons-single-image-row">
                        <div class="oxi-addons-single-image">
                            <img src="' . $this->media_render('sa_s_image_img', $style) . '">
                            <div class="oxi-addons-single-image-icon">
                                ' . ($style['sa_s_image_light_or_link'] == 'link' ? '<a  ' . $this->url_render('sa_s_image_link_url', $style) . '><div class="oxi-addons-single-image-icon-data">' . $this->font_awesome_render($style['sa_s_image_icon']) . ' </div></a>' : '<div class="oxi-addons-single-image-icon-data">' . $this->font_awesome_render($style['sa_s_image_icon']) . ' </div>') . '
                            </div>
                        </div>
                        ' . $ribbon . '
                    </div>
                </div>';
        } else {
            echo '<div style="color : red;">Please Upload an Image !</div>';
        }
    }

    public function old_render() {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $css = '';
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $jquery = '';

        echo '  <div class="oxi-addons-container ">
                <div class="oxi-addons-row">
                    <div class="oxi-addons-single-image-container-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 159) . ' id="' . $stylefiles[3] . '">
                        <div class="oxi-addons-single-image-row">
                            <div class="oxi-addons-single-image">
                                <img src="' . OxiAddonsUrlConvert($stylefiles[5]) . '">
                                <div class="oxi-addons-single-image-icon">';
        if ($styledata[245] == 'link') {
            echo '<a href="' . OxiAddonsUrlConvert($stylefiles[11]) . '" target="' . $styledata[247] . '"><div class="oxi-addons-single-image-icon-data">' . oxi_addons_font_awesome($stylefiles[9]) . ' </div></a>';
        } else {

            echo '<div class="oxi-addons-single-image-icon-data">' . oxi_addons_font_awesome($stylefiles[9]) . ' </div>';
            $jquery .= 'jQuery(".oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data").OximagnificPopup({
                        items: [
                            {
                                src: "' . OxiAddonsUrlConvert($stylefiles[13]) . '",
                            }
                        ],
                        type: "image",
                        mainClass: "oxi-addons-lightbox-' . $oxiid . '",
                        callbacks: {
                                    beforeChange: function() {
                                     this.items[0].src = this.items[0].src + "?=" + Math.random(); 
                                    }
                        },
                        closeBtnInside: true,
                        closeOnContentClick: true,
                        tLoading: "",
                    });';
            $css .= '.oxi-addons-lightbox-' . $oxiid . '.Oximfp-bg{
                    background: ' . $styledata[251] . ';
                    z-index: ' . ($styledata[249] - 1) . ';
                  }
                  .oxi-addons-lightbox-' . $oxiid . '.Oximfp-wrap{
                   z-index: ' . $styledata[249] . ';
                  }
                  .oxi-addons-lightbox-' . $oxiid . ' .Oximfp-content{
                    z-index: ' . ($styledata[249] + 2) . ';
                    }
                  
                  .oxi-addons-lightbox-' . $oxiid . ' .Oximfp-close{
                      z-index: ' . ($styledata[249] + 3) . ';
                  }
                  .oxi-addons-lightbox-' . $oxiid . ' .Oximfp-figure::after{
                      ' . OxiAddonsBoxShadowSanitize($styledata, 257) . '
                  }
                 .oxi-addons-lightbox-' . $oxiid . ' .Oximfp-image-holder .Oximfp-close, 
                 .oxi-addons-lightbox-' . $oxiid . ' .Oximfp-iframe-holder .Oximfp-close{
                     color: ' . $styledata[253] . ';
                  }
                  .oxi-addons-lightbox-' . $oxiid . ' .Oximfp-preloader{
                     background: ' . $styledata[255] . ';
                  }';
        }
        echo '</div>
                        </div>
                        <div class="oxi-addons-single-image-ribbon">
                            <div class="oxi-addons-single-image-ribbon-position">
                                <div class="oxi-addons-single-image-ribbon-content">' . $stylefiles[7] . '</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>';
        if ($styledata[165] == 'left') {
            $ribbonpo = '-';
        } else {
            $ribbonpo = '';
        }
        $css .= '.oxi-addons-single-image-container-' . $oxiid . '{
                    display: inline-block;
                    overflow: hidden;
                    vertical-align: middle;
                    max-width: 100%;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';   
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                    display: block;
                    overflow: hidden;
                    vertical-align: middle;
                    max-width: 100%;
                    position: relative;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 3) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                    display: block;
                    width: 100%;
                    position: relative;
                    overflow: hidden;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
                    border-style:' . $styledata[57] . '; 
                    border-color:' . $styledata[58] . ';
                    ' . OxiAddonsBoxShadowSanitize($styledata, 35) . '
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image img{
                    display: block;
                    width: 100%;
                    height: auto;
                    -webkit-filter: grayscale(' . $styledata[153] . '%);
                    filter: grayscale(' . $styledata[153] . '%);
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon{
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: ' . $styledata[163] . ';
                    box-shadow: inset 0px 0px 0px ' . $styledata[79] . 'px ' . $styledata[77] . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ':hover .oxi-addons-single-image-icon{
                    background: ' . $styledata[157] . ';
                    box-shadow: inset 0px 0px 0px ' . $styledata[119] . 'px ' . $styledata[117] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data{
                    width: ' . $styledata[177] . 'px;
                    height: ' . $styledata[177] . 'px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor:pointer;
                    opacity:0;
                    background: ' . $styledata[183] . ';
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 185) . ';
                    border-style:' . $styledata[201] . '; 
                    border-color:' . $styledata[202] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 205) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ':hover .oxi-addons-single-image-icon-data{
                    opacity:1;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data .oxi-icons{
                    color: ' . $styledata[181] . ';
                    font-size: ' . $styledata[173] . 'px;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data:hover{
                    background: ' . $styledata[223] . ';
                    border-style:' . $styledata[225] . '; 
                    border-color:' . $styledata[226] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data:hover .oxi-icons{
                    color: ' . $styledata[221] . ';
                }
                 .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 81) . ';
                    border-style:' . $styledata[97] . '; 
                    border-color:' . $styledata[98] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover img{
                    -webkit-filter: grayscale(' . $styledata[155] . '%);
                    filter: grayscale(' . $styledata[155] . '%);
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover.oxi-addons-single-image-icon{
                    box-shadow: inset 0px 0px 0px ' . $styledata[119] . 'px ' . $styledata[117] . ';
                    background: ' . $styledata[157] . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 101) . ';
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon{
                    position: absolute;
                    white-space: nowrap;
                    display: ' . $styledata[121] . ';
                    z-index: 999;
                    width: ' . $styledata[167] . 'px;
                    margin: 0;
                    ' . $styledata[165] . ': ' . $styledata[171] . 'px;
                    top: ' . $styledata[169] . 'px;
                    transform: rotate(' . $ribbonpo . '45deg);
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon:before{
                    display: block;
                    position: absolute;
                    content: "";
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-color: ' . $styledata[129] . ';
                    left: 0;
                    border-width: 15px 15px 0 0;
                    border-left-color: transparent !important;
                    border-right-color: transparent !important;
                    border-bottom-color: transparent !important;
                    bottom: -14px;
                    z-index: -1;    
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon:after{
                    display: block;
                    position: absolute;
                    content: "";
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-color: ' . $styledata[129] . ';
                    right: 0;
                    border-width: 15px 0 0 15px;
                    border-left-color: transparent !important;
                    border-right-color: transparent !important;
                    border-bottom-color: transparent !important;
                    bottom: -14px;
                    z-index: -1;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-position{
                    display: table;
                    width: 100%;
                    height: 100%;
                    z-index: 2;
                    position: relative;
                }
                .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-content{  
                    display: table-cell;
                    width: 100%;
                    height: 100%;
                    font-size:' . $styledata[123] . 'px;
                    color:' . $styledata[127] . ';    
                    background: ' . $styledata[129] . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
                    overflow: hidden;
                    vertical-align: middle;
                    
                    ' . OxiAddonsFontSettings($styledata, 131) . '
                }
                @media only screen and (min-width : 669px) and (max-width : 993px){
                   .oxi-addons-single-image-container-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . ';   
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 4) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 42) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 62) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data{
                        width: ' . $styledata[178] . 'px;
                        height: ' . $styledata[178] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 186) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 206) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data .oxi-icons{
                         font-size: ' . $styledata[174] . 'px;
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data:hover{
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 82) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 102) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-content{  
                       font-size:' . $styledata[124] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 138) . ';
                    }
                }
                @media only screen and (max-width : 668px){
                  .oxi-addons-single-image-container-' . $oxiid . '{
                        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . ';   
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-row{
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 5) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image{
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data{
                        width: ' . $styledata[179] . 'px;
                        height: ' . $styledata[179] . 'px;
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 207) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data .oxi-icons{
                         font-size: ' . $styledata[175] . 'px;
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-icon-data:hover{
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image:hover{
                        border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 83) . ';
                        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 103) . ';
                    }
                    .oxi-addons-single-image-container-' . $oxiid . ' .oxi-addons-single-image-ribbon-content{  
                       font-size:' . $styledata[125] . 'px;
                       padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 139) . ';
                    }
                }
                ';
        $jquery .= '';

        wp_enqueue_style('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Single_image/file/MagnificPopup.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_add_inline_style('MagnificPopup', $css);
        wp_enqueue_script('MagnificPopup', SA_ADDONS_UPLOAD_URL . '/Single_image/file/MagnificPopup.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_add_inline_script('MagnificPopup', $jquery);
    }

}
