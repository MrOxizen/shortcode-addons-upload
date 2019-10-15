<?php

namespace SHORTCODE_ADDONS_UPLOAD\Hover_effects\Templates;

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

class Style_29 extends Templates {

    public function default_render($style, $child, $admin) {

        $repeater = (array_key_exists('sa_he_repeater', $style) && is_array($style['sa_he_repeater'])) ? $style['sa_he_repeater'] : [];
        foreach ($repeater as $key => $value) {
            $link = $linkcls = '';
            if ($value['sa_he_btn_text'] == '' && $value['sa_he_link_url-url'] != '') {
                $link = '<a ' . $this->url_render('sa_he_link_url', $value) . '>';
            }
            if ($value['sa_he_btn_text'] == '' && $value['sa_he_link_url-url'] != '') {
                $linkcls = '</a>';
            }

            echo '<div class="' . $this->column_render('sa_he_col', $style) . ' ' . ($admin == 'admin' ? 'oxi-addons-admin-edit-list ' : '') . '">';
            echo '<div class="oxi-hover-effects-style29 oxi-hover-effects-style29-' . $key . '"  ' . $this->animation_render('sa_he_animation', $value) . '>';
            echo $link;
            echo '  <div class="oxi-hover-effects-map-style29">
                    <div class="oxi-hover-effects-map-body">
                        <div class="oxi-hover-effects">
                            <div class="oxi-hover-img">
                                 <img src="' . $this->media_render('sa_he_image', $value) . '">
                            </div>
                            <div class="oxi-hover-info">';
            if (!empty($value['sa_he_title_text'])) {
                echo ' <h3 class="oxi-button-heading ' . $value['sa_he_title_animation'] . '">' . $this->text_render($value['sa_he_title_text']) . '</h3>';
                echo ' <div class="headingunderline-body ' . $value['sa_he_title_animation'] . '"><div class="headingunderline"></div></div>';
            }
            if (!empty($value['sa_he_description_text'])) {
                echo ' <div class="oxi-button-content ' . $value['sa_he_des_animation'] . '">' . $this->text_render($value['sa_he_description_text']) . '</div>';
            }
            if (!empty($value['sa_he_btn_text'])) {
                echo ' <div class="oxi-hover-info-button">'
                . '<a ' . $this->url_render('sa_he_link_url', $value) . ' class="oxi-he-button ' . $value['sa_he_btn_animation'] . '">' . $this->text_render($value['sa_he_btn_text']) . '</a></div>';
            }
            echo '              </div>
                        </div>
                    </div>
                </div>';

            echo $linkcls;
            echo ' </div>';
            echo ' </div>';
        }
        wp_enqueue_style('style', SA_ADDONS_UPLOAD_URL . '/Hover_effects/file/css/style.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function old_render() {
        $style = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        wp_enqueue_style('style', SA_ADDONS_UPLOAD_URL . '/Hover_effects/file/css/style.css', false, SA_ADDONS_PLUGIN_VERSION);

        echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">';

        foreach ($listdata as $value) {
            $valuefile = explode('||#||', $value['files']);
            echo '<div class="oxi-hover-effects-' . $oxiid . ' ' . OxiAddonsItemRows($styledata, 7) . '  "  ' . OxiAddonsAnimation($styledata, 45) . '>';
            if ($valuefile[5] == '' && $valuefile[7] != '') {
                echo '<a target="' . $styledata[11] . '" href="' . OxiAddonsUrlConvert($valuefile[7]) . '">';
            }
            echo '  <div class="oxi-hover-effects-map-' . $oxiid . '">
                    <div class="oxi-hover-effects-map-body">
                        <div class="oxi-hover-effects">
                            <div class="oxi-hover-img">
                                 <img src="' . OxiAddonsUrlConvert($valuefile[9]) . '">
                            </div>
                            <div class="oxi-hover-info">';
            if ($valuefile[1] != '') {
                echo ' <h3 class="oxi-button-heading ' . $styledata[215] . '">' . oxi_addons_html_decode($valuefile[1]) . '</h3>';
                echo ' <div class="headingunderline-body ' . $styledata[215] . '"><div class="headingunderline"></div></div>';
            }
            if ($valuefile[3] != '') {
                echo ' <div class="oxi-button-content ' . $styledata[245] . '">' . oxi_addons_html_decode($valuefile[3]) . '</div>';
            }
            if ($valuefile[5] != '' && $valuefile[7] != '') {
                echo ' <div class="oxi-hover-info-button">'
                . '<a href="' . OxiAddonsUrlConvert($valuefile[7]) . '"  class=" ' . $styledata[213] . '" target="' . $styledata[11] . '">' . oxi_addons_html_decode($valuefile[5]) . '</a></div>';
            }
            echo '              </div>
                        </div>
                    </div>
                </div>';
            if ($valuefile[5] == '' && $valuefile[7] != '') {
                echo '</a>';
            }
           
            echo ' </div>';
        }

        echo '      </div>
            </div>';
        $css = '.oxi-hover-effects-' . $oxiid . '{
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects-map-' . $oxiid . '{
                max-width: ' . $styledata[63] . 'px;
                width: 100%;
                margin: 0 auto;
                position: relative;
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects-map-' . $oxiid . ':after{
                padding-bottom: ' . ($styledata[65] / $styledata[63] * 100) . '%;
                content: "";
                display: block;
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects-map-body{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: block;
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects{
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                -webkit-transition: all .35s ease-in-out;
                -moz-transition: all .35s ease-in-out;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects:hover{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
            }
            
           .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img,
           .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img img{
                position: absolute;
                display: block;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100% !important;
                height: 100% !important;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
            }
            
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:hover,
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:hover img{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:before{
                ' . OxiAddonsBoxShadowSanitize($styledata, 49) . '
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
            }
            .oxi-hover-effects-' . $oxiid . ':hover .oxi-hover-img:before{
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info{
                display:flex;
                ' . $styledata[5] . '
                position: absolute;
                flex-direction: column;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity:1;
                ' . OxiAddonsBGImage($styledata, 67) . '
                ' . OxiAddonsBoxShadowSanitize($styledata, 56) . '
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 71) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects:hover .oxi-hover-info{
                opacity:0;
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 87) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info h3.oxi-button-heading{
                width: 100%;
                font-size: ' . $styledata[217] . 'px;
                color: ' . $styledata[221] . ';
                ' . OxiAddonsFontSettings($styledata, 223) . '
                margin: 0 !important;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 229) . ';
                flex-direction: column;
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .headingunderline-body{
                width: 100%; 
                display:inline-block;
                text-align:' . (explode(':', $styledata[227])[0]) . ';
                line-height: 0;
                font-size: 0px;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 287) . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .headingunderline{
                display:inline-block;
                width: ' . $styledata[275] . 'px;
                border-bottom: ' . $styledata[279] . 'px ' . $styledata[283] . ' ' . $styledata[284] . ';
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .oxi-button-content{
                width: 100%;
                font-size: ' . $styledata[247] . 'px;
                color: ' . $styledata[251] . ';
                ' . OxiAddonsFontSettings($styledata, 253) . '
                margin: 0 !important;
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 259) . ';
            }
           .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects  .oxi-hover-info-button{
               width: 100%;
               text-align:' . (explode(':', $styledata[211])[0]) . '
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects a{
                background: ' . $styledata[113] . ';
                color: ' . $styledata[111] . ';
                font-size: ' . $styledata[103] . 'px;
                text-align: center;
                text-decoration: none;
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ';
                border-color:' . $styledata[132] . ';
                border-style:' . $styledata[131] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 135) . ';
                padding:' . OxiAddonsPaddingMarginSanitize($styledata, 191) . ';
                margin:' . OxiAddonsPaddingMarginSanitize($styledata, 151) . ';
                ' . OxiAddonsFontSettings($styledata, 207) . '
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
            .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects a:hover{
                background: ' . $styledata[169] . ';
                color: ' . $styledata[167] . ';
                border-color:' . $styledata[172] . ';
                border-style:' . $styledata[171] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 175) . ';
            }
            @media only screen and (min-width : 669px) and (max-width : 993px){
                .oxi-hover-effects-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 30) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects{
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects:hover{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
                }
               .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img,
               .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img img{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:hover,
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:hover img{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 14) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info h3.oxi-button-heading{
                    font-size: ' . $styledata[218] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 230) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .headingunderline-body{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 288) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .headingunderline{
                    width: ' . $styledata[276] . 'px;
                    border-bottom: ' . $styledata[280] . 'px ' . $styledata[283] . ' ' . $styledata[284] . ';
                  
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .oxi-button-content{
                    font-size: ' . $styledata[248] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 260) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects a{
                    font-size: ' . $styledata[104] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 136) . ';
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 152) . ';
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 192) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects a:hover{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 176) . ';
                }.oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:before{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 72) . ';
                }
                .oxi-hover-effects-' . $oxiid . ':hover .oxi-hover-img:before{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 88) . ';
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:before{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                }
                .oxi-hover-effects-' . $oxiid . ':hover .oxi-hover-img:before{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                }
                .oxi-hover-effects-' . $oxiid . '{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 31) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects{
                   border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects:hover{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                }
               .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img,
               .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img img{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:hover,
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-img:hover img{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info{
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 15) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info h3.oxi-button-heading{
                    font-size: ' . $styledata[219] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 231) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .headingunderline-body{
                     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 289) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info  .headingunderline{
                    width: ' . $styledata[277] . 'px;
                    border-bottom: ' . $styledata[281] . 'px ' . $styledata[283] . ' ' . $styledata[284] . ';
                   
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-info .oxi-button-content{
                    font-size: ' . $styledata[248] . 'px;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 260) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects a{
                    font-size: ' . $styledata[105] . 'px;
                    width: ' . $styledata[109] . 'px;
                    height: ' . $styledata[109] . 'px;
                    border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ';
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 137) . ';
                    margin:' . OxiAddonsPaddingMarginSanitize($styledata, 153) . ';
                    padding:' . OxiAddonsPaddingMarginSanitize($styledata, 193) . ';
                }
                .oxi-hover-effects-' . $oxiid . ' .oxi-hover-effects a:hover{
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . ';
                }
            }';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
