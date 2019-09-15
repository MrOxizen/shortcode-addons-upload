<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_boxes\Templates;

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
        foreach ($child as $v) {
        $value = json_decode($v['rawdata'], true);
        $link = $endlink = $heading = $image = '';
        if ($value['sa_ib_url-url'] != '') {
                $link .= '<a class="oxi-addons-link" ' . $this->url_render('sa_ib_url', $value) . '>';
                $endlink .= '</a>';
        }
        if ($value['sa_ib_heading'] != '') {
                $heading .= '<div class="oxi-addons-heading">
                                ' . $this->text_render($value['sa_ib_heading']) . '
                             </div>';
        }
        if ($this->media_render('sa_ib_media', $value) != '') {
                $image .= '<div class="oxi-addons-image">
                                <img class="oxi-addons-img" src="' . $this->media_render('sa_ib_media', $value) . '">
                            </div>';
        }
        if ($style['sa-ib-content-position'] == 'heading') {
                $headingposition = '
                <div class="oxi-addons-icon-box  ">
                    <div class="oxi-addons-icon-body">
                        '.$link.'      
                        '.$heading.'      
                        '.$image.'     
                        '.$endlink.'   
                     </div>
                </div>';
        }else{
            $imageposition = '
                <div class="oxi-addons-icon-box ">
                    <div class="oxi-addons-icon-body">
                        '.$link.'
                        '.$image.'
                        '.$heading.'     
                        '.$endlink.'   
                     </div>
                </div>';
        }
        
        
        
        echo '<div class="oxi-addons-icon-boxes-main ' . $this->column_render('sa-ib-content-box-col', $style) . '">
                    <div class="oxi-addons-icon-boxes-area '.($admin == 'admin'? 'oxi-addons-admin-edit-list' : '').'">
                        '.$headingposition.'
                        '.$imageposition.'
                    ';

        if ($admin == 'admin') :
                    echo'<div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                            </div>
                        </div>';
                endif;
        echo '</div></div> ';
        }
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
    $oxiid = $styledata['id'];
    $stylefiles = explode('||#||', $styledata['css']);
    $styledata = explode('|', $stylefiles[0]);
    echo '<div class="oxi-addons-container"><div class="oxi-addons-row">';
    foreach ($listdata as $value) {
        $firstlink = $lastlink = $heading = $image = '';
        $data = explode('||#||', $value['files']);
 
        if ($data[5] != '') {
            $firstlink = '<a class="oxi-addons-link" href="' . OxiAddonsUrlConvert($data[5]) . '" target="' . $styledata[55] . '">';
            $lastlink = '</a>';
        }
        if ($data[1] != '') {
            $heading = '<div class="oxi-addons-heading">
                            ' . OxiAddonsTextConvert($data[1]) . '
                        </div>';
        }
        if ($data[3] != '') {
            $image = '<div class="oxi-addons-image" ' . OxiAddonsAnimation($styledata, 135) . '>
                         <img class="oxi-addons-img" src="' . OxiAddonsUrlConvert($data[3]) . '" alt="icon box image">
                    </div>';
        }

        $loopdata = '';
        $rearrange = explode(',', $styledata[151]);
        foreach ($rearrange as $arrange) {
            $loopdata .= $$arrange;
        }
        echo '<div class="' . OxiAddonsItemRows($styledata, 3) . '  ' . OxiAddonsAdminDefine($user) . '">
                    ' . $firstlink . '
                        <div class="oxi-addons-icon-boxes-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 95) . '>
                            <div class="oxi-addons-icon-box">
                                <div class="oxi-addons-icon-body">
                                   ' . $loopdata . '
                                </div>
                            </div>
                        </div>
                    ' . $lastlink . '

                    ';

        
        echo '</div> ';
    }
    echo ' </div></div>
        ';

    $css = '
        .oxi-addons-link{
            display: block;
            width: 100%;
        }
        .oxi-addons-icon-boxes-' . $oxiid . '{
            width: 100%;
            max-width: ' . $styledata[7] . 'px;
            margin: 0 auto;
            position: relative;
            display: -webkit-box;
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 73) . ';
            transition: 0.5s all !important; 
        }
        .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box{
            position: relative;
            width: 100%;
            float: left; 
            ' . OxiAddonsBGImage($styledata, 15) . '
            border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 19) . ';
            border-style:' . $styledata[35] . '; 
            border-color:' . $styledata[36] . ';
            border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 39) . ';
            overflow: hidden;
            ' . OxiAddonsBoxShadowSanitize($styledata, 89) . '

        } 
        .oxi-addons-icon-boxes-' . $oxiid . ':hover .oxi-addons-icon-box{ 
            ' . OxiAddonsBoxShadowSanitize($styledata, 145) . ' 
            ' . OxiAddonsBGImage($styledata, 141) . '
            border-color: ' . $styledata[153] . ';
        } 
        .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box::after{
            content: "";
            display: block;
            padding-bottom: ' . ($styledata[11] / $styledata[7] * 100) . '%;
        } 
        .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box .oxi-addons-icon-body .oxi-addons-heading{
            width: 100%;
            float: left;
            color: ' . $styledata[103] . ';
            font-size: ' . $styledata[99] . 'px;
            ' . OxiAddonsFontSettings($styledata, 105) . '    
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 111) . ';  
            line-height: 1;
        }
        .oxi-addons-icon-boxes-' . $oxiid . ':hover .oxi-addons-icon-box .oxi-addons-icon-body .oxi-addons-heading{
            color: ' . $styledata[139] . '; 
        }
        .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box .oxi-addons-icon-body{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 57) . ';
            width: 100%;
        }
        .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-image{
             width: 100%; 
             float: left;
             text-align: center;
        }
        .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-image .oxi-addons-img{
           width: ' . $styledata[127] . 'px; 
           height: ' . $styledata[131] . 'px;
        }
        @media only screen and (min-width : 669px) and (max-width : 993px){
            .oxi-addons-icon-boxes-' . $oxiid . '{ 
                max-width: ' . $styledata[8] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 74) . '; 
            }
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box{ 
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 20) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 40) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 58) . '; 
            }  
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box::after{ 
                padding-bottom: ' . ($styledata[12] / $styledata[8] * 100) . '%;
            } 
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box .oxi-addons-icon-body .oxi-addons-heading{ 
                font-size: ' . $styledata[100] . 'px; 
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 112) . ';  
            } 
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-image .oxi-addons-img{
               width: ' . $styledata[128] . 'px; 
               height: ' . $styledata[132] . 'px;
            }
        }
        @media only screen and (max-width : 668px){ 
            .oxi-addons-icon-boxes-' . $oxiid . '{ 
                max-width: ' . $styledata[9] . 'px; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 75) . '; 
            }
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box{ 
                border-width: ' . OxiAddonsPaddingMarginSanitize($styledata, 21) . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 41) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . '; 
            }  
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box::after{ 
                padding-bottom: ' . ($styledata[13] / $styledata[9] * 100) . '%;
            } 
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-icon-box .oxi-addons-icon-body .oxi-addons-heading{ 
                font-size: ' . $styledata[101] . 'px; 
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 113) . ';  
            } 
            .oxi-addons-icon-boxes-' . $oxiid . ' .oxi-addons-image .oxi-addons-img{
               width: ' . $styledata[129] . 'px; 
               height: ' . $styledata[133] . 'px;
            }
        }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
