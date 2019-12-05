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

class Style19 extends Public_Render {

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        foreach ($child as $key => $val) {
            $value = json_decode(stripslashes($val['rawdata']), true);

            $image = $back_hadding = $backinfo = $button = $bt = $bc = '';
            if ($this->media_render('sa_flip_boxes_media', $value) != '') {
                $image = ' <img src="' . $this->media_render('sa_flip_boxes_media', $value) . '">';
            }
            if ($value['sa_flip_back_boxes_heading'] != '') {
                $back_hadding .= '<div class="oxi-addons-flip-box-back-headding">
                            ' . $this->text_render($value['sa_flip_back_boxes_heading']) . '
                            </div>';
            }
            if ($value['sa_flip_boxes_back_description'] != '') {
                $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                        ' . $this->text_render($value['sa_flip_boxes_back_description']) . '
                        </div>';
            }
            if ($value['sa_flip_boxes_icon'] != '') {
                $button .= '<div class="oxi-addons-flip-box-back-button">
                            <a ' . $this->url_render('sa_flip_boxes_button_link', $value) . ' class="oxi-addons-flip-box-back-link" >' . $this->font_awesome_render($value['sa_flip_boxes_icon']) . ' </a>
                        </div>';
            } elseif ($value['sa_flip_boxes_icon'] == '' && $this->url_render('sa_flip_boxes_button_link', $value) != '') {
                $bt = '<a ' . $this->url_render('sa_flip_boxes_button_link', $value) . '">';
                $bc = '</a>';
            }
            echo '  <div class="oxi-flip-box-col-style-19 ' . $this->column_render('sa-flip-boxes-col', $style) . ' ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . '">
                        <div class="oxi-addons-flip-box-style-19">
                            ' . $bt . '
                            <div class="oxi-addons-flip-boxes-body"  ' . $this->animation_render('sa-flip-boxes-animation', $style) . '>
                                <div class="oxi-addons-flip-boxes-body-data">
                                    <div class="oxi-addons-flip-box-flip ' . $styledata['sa-ac-flip_boxes_flip_direction'] . '">
                                        <div class="oxi-addons-flip-box-flip-data ' . $styledata['sa-ac-flip_boxes_flip_effects'] . '">
                                            <div class="oxi-addons-flip-box-style">
                                                <div class="oxi-addons-flip-box-front">
                                                    <div class="oxi-addons-flip-box-front-section-box">
                                                        <div class="oxi-addons-flip-box-front-section oxi-addons-flip-box-front-section-' . $val['id'] . '">
                                                            ' . $image . '
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="oxi-addons-flip-box-back">
                                                    <div class="oxi-addons-flip-box-back-section-box">
                                                        <div class="oxi-addons-flip-box-back-section">
                                                            <div class="oxi-addons-flip-box-back-section-content">
                                                                ' . $back_hadding . '
                                                                ' . $backinfo . '
                                                            </div>
                                                            ' . $button . '
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ' . $bc . '
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

            $this->inline_css .= '.' . $this->WRAPPER . ' .oxi-addons-flip-box-style-19 .oxi-addons-flip-box-front-section-' . $val['id'] . ':before{
                        background: ' . $value['sa_flip_boxes_overlay_color'] . ';
                    }';
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
                            if ($filesdata[3] == '' && $filesdata[11] != '') {
                                echo '<a href="' . $filesdata[11] . '" target="' . $styledata[53] . '">';
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
                                                    <img src="<?php echo $filesdata[5]; ?>">
                                                </div>
                                            </div>
                                            <div class="oxilab-flip-box-back">
                                                <div class="oxilab-flip-box-back-<?php echo $styleid; ?>">
                                                    <div class="oxilab-flip-box-back-<?php echo $styleid; ?>-data">
                                                        <div class="oxilab-heading">
                                                            <?php echo $this->text_render($filesdata[17]); ?>
                                                        </div>
                                                        <div class="oxilab-info">
                                                            <?php echo $this->text_render($filesdata[7]); ?>
                                                        </div>  
                                                    </div>
                                                    <?php
                                                    if ($filesdata[3] != '') {
                                                        echo '<a href="' . $filesdata[11] . '" target="' . $styledata[53] . '">';
                                                        echo '<div class="oxilab-button">
                                                                    ' . $this->font_awesome_render($filesdata[3]) . '
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
                            <?php echo $fileslinkend; ?>
                        </div>
                        <style>
                <?php
                if ($filesdata[13] != '') {
                    echo '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-back-' . $styleid . '{
background: linear-gradient(' . $styledata[5] . ', ' . $styledata[5] . '), url("' . $filesdata[13] . '");
-moz-background-size: 100% 100%;
-o-background-size: 100% 100%;
background-size: 100% 100%;
}';
                }
                ?>
                        </style>
                    </div>
                    <?php
                endif;
            }
            ?>

            <style>
                .oxilab-flip-box-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[49]; ?>px <?php echo $styledata[51]; ?>px;
                    -webkit-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -moz-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -ms-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -o-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -webkit-animation-duration: <?php echo $styledata[57]; ?>s;
                    -moz-animation-duration: <?php echo $styledata[57]; ?>s;
                    -ms-animation-duration: <?php echo $styledata[57]; ?>s;
                    -o-animation-duration: <?php echo $styledata[57]; ?>s;
                    animation-duration: <?php echo $styledata[57]; ?>s;
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
                    right: 0;
                    bottom: 0;
                    display: block;
                    -webkit-border-radius: <?php echo $styledata[153]; ?>px;
                    -moz-border-radius: <?php echo $styledata[153]; ?>px;
                    -ms-border-radius: <?php echo $styledata[153]; ?>px;
                    -o-border-radius: <?php echo $styledata[153]; ?>px;
                    border-radius: <?php echo $styledata[153]; ?>px;
                    overflow: hidden;
                    -webkit-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -moz-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -ms-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -o-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                }
                .oxilab-flip-box-<?php echo $styleid; ?> img{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    display: block;
                    -webkit-border-radius: <?php echo $styledata[153]; ?>px;
                    -moz-border-radius: <?php echo $styledata[153]; ?>px;
                    -ms-border-radius: <?php echo $styledata[153]; ?>px;
                    -o-border-radius: <?php echo $styledata[153]; ?>px;
                    border-radius: <?php echo $styledata[153]; ?>px;
                    overflow: hidden;
                    width: 100%;
                    height: 100%;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    display: block;
                    background-color: <?php echo $styledata[5]; ?>;
                    -webkit-border-radius: <?php echo $styledata[153]; ?>px;
                    -moz-border-radius: <?php echo $styledata[153]; ?>px;
                    -ms-border-radius: <?php echo $styledata[153]; ?>px;
                    -o-border-radius: <?php echo $styledata[153]; ?>px;
                    border-radius: <?php echo $styledata[153]; ?>px;
                    overflow: hidden;
                    -webkit-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -moz-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -ms-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -o-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data{           
                    position: absolute;
                    left: 0%;
                    right: 0;
                    top: 50%;            
                    padding: <?php echo $styledata[101]; ?>px <?php echo $styledata[103]; ?>px;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    -o-transform: translateY(-50%);
                    transform: translateY(-50%);           
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data .oxilab-heading{
                    display: block;
                    color:  <?php echo $styledata[13]; ?>;
                    text-align: <?php echo $styledata[189]; ?>;            
                    font-size: <?php echo $styledata[181]; ?>px;          
                    font-family: <?php echo $this->font_familly($styledata[183]); ?>;
                    font-weight: <?php echo $styledata[187]; ?>;
                    font-style:<?php echo $styledata[185]; ?>;
                    padding:<?php echo $styledata[191]; ?>px <?php echo $styledata[197]; ?>px <?php echo $styledata[193]; ?>px <?php echo $styledata[195]; ?>px;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data .oxilab-info{
                    display: block;
                    color: <?php echo $styledata[7]; ?>;
                    text-align: <?php echo $styledata[115]; ?>;            
                    font-size: <?php echo $styledata[107]; ?>px;          
                    font-family: <?php echo $this->font_familly($styledata[109]); ?>;
                    font-weight: <?php echo $styledata[113]; ?>;
                    font-style:<?php echo $styledata[111]; ?>;
                    padding:<?php echo $styledata[117]; ?>px <?php echo $styledata[123]; ?>px <?php echo $styledata[119]; ?>px <?php echo $styledata[121]; ?>px;           
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?> .oxilab-button{
                    display: block;
                    position: absolute;
                    right: 0;
                    bottom: 0;
                    padding: <?php echo $styledata[141]; ?>px <?php echo $styledata[147]; ?>px <?php echo $styledata[143]; ?>px <?php echo $styledata[145]; ?>px;  
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?> .oxilab-button .oxi-icons{
                    display: inline-block;     
                    color: <?php echo $styledata[9]; ?>;
                    font-size: <?php echo $styledata[125]; ?>px;
                    padding: <?php echo $styledata[133]; ?>px <?php echo $styledata[135]; ?>px;  
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?> .oxilab-button .oxi-icons:hover{
                    color:  <?php echo $styledata[11]; ?>;
                }
                <?php echo $styledata[199]; ?>;
            </style>
        </div>
        <?php
    }

}
