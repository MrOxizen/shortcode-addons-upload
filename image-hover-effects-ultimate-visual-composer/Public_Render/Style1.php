<?php

namespace OXI_FLIP_BOX_PLUGINS\Public_Render;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

/**
 * Description of Create
 *
 * @author biplo
 */
use OXI_FLIP_BOX_PLUGINS\Page\Public_Render;

class Style1 extends Public_Render {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($child as $key => $val) {
            $value = json_decode(stripslashes($val['rawdata']), true);

            $icon = $image = $backinfo = $heading = $button = $img_icon = $bt = $bc = '';
            if ($this->media_render('sa_flip_boxes_media', $value) != '') {
                $image = ' <img src="' . $this->media_render('sa_flip_boxes_media', $value) . '">';
            }
            if ($value['sa_flip_boxes_icon'] != '') {
                $icon = '<div class="oxi-addons-flip-box-front-image-icon">
                    ' . $this->font_awesome_render($value['sa_flip_boxes_icon']) . '
                </div>';
            }
            if ($value['sa_flip_boxes_heading'] != '') {
                $heading = ' <div class="oxi-addons-flip-box-front-heading">
                        <div class="oxi-addons-flip-box-front-heading-data">
                        ' . $this->text_render($value['sa_flip_boxes_heading']) . '
                       </div>
                    </div>';
            }
            if ($value['sa_flip_boxes_button_text'] != '') {
                $button = ' <a ' . $this->url_render('sa_flip_boxes_button_link', $value) . '">
                                <div class="oxi-addons-flip-box-back-button">
                                    <div class="oxi-addons-flip-box-back-button-data">
                                        ' . $this->text_render($value['sa_flip_boxes_button_text']) . '  
                                    </div>
                                </div>
                            </a>';
            } elseif ($this->url_render('sa_flip_boxes_button_link', $value) != '') {
                $bt = '<a ' . $this->url_render('sa_flip_boxes_button_link', $value) . '">';
                $bc = '</a>';
            }
            if ($value['sa_flip_boxes_description'] != '') {
                $backinfo = '   <div class="oxi-addons-flip-box-back-info">
                            ' . $this->text_render($value['sa_flip_boxes_description']) . '   
                       </div>';
            }
            echo'<div class="oxi-flip-box-col ' . $this->column_render('sa-flip-boxes-col', $style) . ' ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . '" >
                        <div class="oxi-addons-flip-box-style-1">' . $bt . '
                            <div class="oxi-addons-flip-boxes-body" ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-style-1">
                                                        <div class="oxi-addons-flip-box-front-section">
                                                            <div class="oxi-addons-flip-box-front-image">
                                                                ' . $image . '
                                                                ' . $icon . '
                                                            </div>
                                                            ' . $heading . '
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-style-1">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            <div class="oxi-addons-flip-box-back-file">
                                                              ' . $backinfo . '
                                                                ' . $button . '              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>' . $bc . '
                        </div>';

            if ($admin == 'admin') :
                echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $val['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $val['id'] . '">Delete</button>
                                </div>
                            </div>';
            endif;
            echo ' </div>';
        }
    }

    public function old_render() {
        $styleid = $this->oxiid;
        $styledata = explode('|', $this->dbdata['css']);
        $listdata = $this->child;
        ?>
        <div class="oxilab-flip-box-wrapper">
            <?php
            foreach ($listdata as $value) {
                if (!empty($value['files'])):
                    $filesdata = explode("{#}|{#}", $value['files']);
                    ?>
                    <div class="<?php echo $styledata[43]; ?> oxilab-flip-box-padding-<?php echo $styleid; ?>" 
                         sa-data-animation="<?php echo $styledata[55]; ?>"
                         sa-data-animation-offset="100%"
                         sa-data-animation-delay="0ms"
                         sa-data-animation-duration=" <?php echo ($styledata[57] * 1000); ?>ms"
                         >
                        <div class="oxilab-flip-box-body-<?php echo $styleid; ?> oxilab-flip-box-body-<?php echo $styleid; ?>-<?php echo $value['id']; ?>">
                            <?php
                            if ($filesdata[9] == '' && $filesdata[11] != '') {
                                echo '<a href="' . $this->text_render($filesdata[11]) . '" target="' . $styledata[53] . '">';
                                $fileslinkend = '</a>';
                            } else {
                                $fileslinkend = '';
                            }
                            ?>
                            <div class="oxilab-flip-box-body-absulote">
                                <div class="<?php echo $styledata[1]; ?>">
                                    <div class="oxilab-flip-box-style-data <?php echo $styledata[3]; ?>">
                                        <div class="oxilab-flip-box-style">
                                            <div class="oxilab-flip-box-front">
                                                <div class="oxilab-flip-box-<?php echo $styleid; ?>">
                                                    <div class="oxilab-flip-box-<?php echo $styleid; ?>-data">
                                                        <div class="oxilab-flip-box-<?php echo $styleid; ?>-image">
                                                            <img src="<?php echo $this->text_render($filesdata[5]); ?>">
                                                            <div class="oxilab-flip-box-<?php echo $styleid; ?>-image-icon">
                                                                <?php echo $this->font_awesome_render($filesdata[3]) ?>
                                                            </div>
                                                        </div>
                                                        <div class="oxilab-flip-box-<?php echo $styleid; ?>-heading">
                                                            <div class="oxilab-flip-box-<?php echo $styleid; ?>-heading-data">
                                                                <?php echo $this->text_render($filesdata[1]); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="oxilab-flip-box-back">
                                                <div class="oxilab-flip-box-back-<?php echo $styleid; ?>">
                                                    <div class="oxilab-flip-box-back-<?php echo $styleid; ?>-data">
                                                        <div class="oxilab-flip-box-back-<?php echo $styleid; ?>-file">
                                                            <div class="oxilab-info">
                                                                <?php echo $this->text_render($filesdata[7]); ?>
                                                            </div>
                                                            <?php
                                                            if ($filesdata[9] != '') {
                                                                echo '<a href="' . $this->text_render($filesdata[11]) . '" target="' . $styledata[53] . '">';
                                                                echo '<div class="oxilab-button">
                                                                    <div class="oxilab-button-data">
                                                                    ' . $this->text_render($filesdata[9]) . '
                                                                    </div>
                                                                </div>';
                                                                echo '</a>';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $fileslinkend; ?>
                        </div>
                        <style>
                <?php
                if ($filesdata[13] == '') {
                    echo '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-back-' . $styleid . '-data{
background-color: ' . $styledata[15] . ';}';
                } else {
                    echo '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-back-' . $styleid . '-data{
background: linear-gradient(' . $styledata[15] . ', ' . $styledata[15] . '), url("' . $filesdata[13] . '");
-moz-background-size: 100% 100%;
-o-background-size: 100% 100%;
background-size: 100% 100%;
}';
                }
                ?> </style>
                    </div>        
                    <?php
                endif;
            }
            ?>
            <style>
                .oxilab-flip-box-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[49]; ?>px <?php echo $styledata[51]; ?>px;
                }
                .oxilab-flip-box-body-<?php echo $styleid; ?>{
                    max-width: <?php echo $styledata[45]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;   
                }
                .oxilab-flip-box-body-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[47] / $styledata[45] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%; 
                    display: block;
                    border: 1px solid <?php echo $styledata[5]; ?>;
                    background-color: <?php echo $styledata[7]; ?>;
                    -webkit-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -moz-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -ms-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -o-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-data{
                    position: absolute;
                    top: 0;
                    left: 0;            
                    background: <?php echo $styledata[5]; ?>;  
                    width: calc(100% - <?php echo $styledata[75] * 2; ?>px);
                    height: calc(100% - <?php echo $styledata[75] * 2; ?>px);
                    margin: <?php echo $styledata[75]; ?>px;
                    padding: <?php echo $styledata[71]; ?>px <?php echo $styledata[73]; ?>px;
                    display: block;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-image{
                    max-width: 100%;
                    width: 100%;
                    float: left;            
                    position: relative;   
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-image:after {
                    padding-bottom: <?php echo $styledata[69]; ?>%;
                    content: "";
                    display: block;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-image img{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    display: block;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-image-icon{
                    position: absolute;
                    left: 50%;
                    background: <?php echo $styledata[11]; ?>;   
                    border: 1px solid <?php echo $styledata[5]; ?>; 
                    height: <?php echo $styledata[79]; ?>px;
                    width: <?php echo $styledata[79]; ?>px;
                    bottom: -<?php echo $styledata[79] / 2; ?>px; 
                    -webkit-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    -moz-transform: translateX(-50%);
                    -ms-transform: translateX(-50%);
                    -o-transform: translateX(-50%);
                    transform: translateX(-50%);       
                    text-align: center;
                    -webkit-border-radius:<?php echo $styledata[81]; ?>px;
                    -moz-border-radius:<?php echo $styledata[81]; ?>px;
                    -ms-border-radius:<?php echo $styledata[81]; ?>px;
                    -o-border-radius:<?php echo $styledata[81]; ?>px;
                    border-radius:<?php echo $styledata[81]; ?>px;
                    -webkit-backface-visibility: hidden;
                    -moz-backface-visibility: hidden;
                    -ms-backface-visibility: hidden;
                    -o-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-image-icon .oxi-icons{
                    line-height: <?php echo $styledata[79]; ?>px;            
                    color: <?php echo $styledata[9]; ?>;    
                    font-size: <?php echo $styledata[77]; ?>px;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-heading{
                    width: 100%;
                    float: left;       
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-heading-data{
                    margin-top: <?php echo $styledata[79] / 2; ?>px;
                    color: <?php echo $styledata[13]; ?>;
                    width: 100%;
                    float: left;
                    text-align: <?php echo $styledata[91]; ?>;            
                    font-size: <?php echo $styledata[83]; ?>px;
                    font-family: <?php echo $this->font_familly($styledata[85]); ?>;
                    font-weight: <?php echo $styledata[89]; ?>;
                    font-style:<?php echo $styledata[87]; ?>;
                    padding: <?php echo $styledata[93]; ?>px <?php echo $styledata[99]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px;            
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;       
                    display: block;
                    border: 1px solid;
                    border-color: <?php echo $styledata[15]; ?>;
                    background-color: <?php echo $styledata[17]; ?>;
                    -webkit-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -moz-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -ms-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -o-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;

                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: calc(100% - <?php echo $styledata[105] * 2; ?>px);
                    height: calc(100% - <?php echo $styledata[105] * 2; ?>px);
                    margin: <?php echo $styledata[105]; ?>px;
                    padding: <?php echo $styledata[101]; ?>px <?php echo $styledata[103]; ?>px;
                    display: block;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-file{
                    position: absolute;
                    left: 0%;
                    top: 50%;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -o-transform: translateY(-50%);
                    transform: translateY(-50%);
                    width: 100%;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data .oxilab-info{
                    width: 100%;
                    float: left;
                    color: <?php echo $styledata[19]; ?>;
                    text-align: <?php echo $styledata[115]; ?>;            
                    font-size: <?php echo $styledata[107]; ?>px;          
                    font-family: <?php echo $this->font_familly($styledata[109]); ?>;
                    font-weight: <?php echo $styledata[113]; ?>;
                    font-style:<?php echo $styledata[111]; ?>;
                    padding: <?php echo $styledata[117]; ?>px <?php echo $styledata[123]; ?>px <?php echo $styledata[119]; ?>px <?php echo $styledata[121]; ?>px;            
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data .oxilab-button{
                    width: 100%;
                    float: left;
                    text-align: <?php echo $styledata[139]; ?>; 
                    padding: <?php echo $styledata[141]; ?>px <?php echo $styledata[147]; ?>px <?php echo $styledata[143]; ?>px <?php echo $styledata[145]; ?>px;  
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data .oxilab-button-data{
                    display: inline-block;     
                    color: <?php echo $styledata[21]; ?>;
                    background-color:  <?php echo $styledata[23]; ?>;
                    font-size: <?php echo $styledata[125]; ?>px;
                    font-family: <?php echo $this->font_familly($styledata[127]); ?>;
                    font-weight: <?php echo $styledata[131]; ?>;
                    font-style:<?php echo $styledata[129]; ?>;
                    padding: <?php echo $styledata[133]; ?>px <?php echo $styledata[135]; ?>px; 
                    -webkit-border-radius:<?php echo $styledata[137]; ?>px;
                    -moz-border-radius:<?php echo $styledata[137]; ?>px;
                    -ms-border-radius:<?php echo $styledata[137]; ?>px;
                    -o-border-radius:<?php echo $styledata[137]; ?>px;
                    border-radius: <?php echo $styledata[137]; ?>px;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data .oxilab-button-data:hover{
                    background-color: <?php echo $styledata[27]; ?>;
                    color:  <?php echo $styledata[25]; ?>;
                }
                <?php echo $styledata[149]; ?>
            </style>
        </div>
        <?php
    }

}
