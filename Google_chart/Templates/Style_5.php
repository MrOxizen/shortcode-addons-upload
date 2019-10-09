<?php

namespace SHORTCODE_ADDONS_UPLOAD\Google_chart\Templates;

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

class Style_5 extends Templates {

    public function public_css() {
        wp_enqueue_style('jquery_google_style_5_css', SA_ADDONS_UPLOAD_URL . '/Google_chart/File/chart-min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
//        echo '<pre>';
//        print_r($styledata);
//        echo '</pre>';
        $oxiid = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-chart-style-5">
                    <div class="oxi-addons-chart-' . $oxiid . '" ' . $this->animation_render('sa-google-chart-body-animation', $styledata) . '>
                         <canvas id="oxi-addons-doughnut-' . $oxiid . '" width="' . $styledata['sa-google_chart_body_max_width-size'] . 'px" height="' . $styledata['sa-google_chart_body_max_height-size'] . 'px"></canvas>
                   </div>
            </div>';
    }

    public function inline_public_jquery() {
        $jquery = '';
        $listdata = $this->style;
        $oxiid = $listdata['shortcode-addons-elements-id'];

        $oxi_addons_labels = '';

        foreach ($listdata['sa_google_chart_data_style_5'] as $key => $value) {
            if ($value['sa_google_chart_text_name'] != '' && $value['sa-google_chart_background_color'] != '' && $value['sa-google_chart_color'] != '' && $value['sa_google_chart_value-size'] != '') {
                $oxi_addons_labels .= "'" . $this->text_render($value['sa_google_chart_text_name']) . "',";
            }
        }
        $oxi_addons_BG_C = '';
        foreach ($listdata['sa_google_chart_data_style_5'] as $key => $value) {
            if ($value['sa_google_chart_text_name'] != '' && $value['sa-google_chart_background_color'] != '' && $value['sa-google_chart_color'] != '' && $value['sa_google_chart_value-size'] != '') {
                $oxi_addons_BG_C .= "'" . $value['sa-google_chart_background_color'] . "', ";
            }
        }
        $oxi_addons_B_C = '';
        foreach ($listdata['sa_google_chart_data_style_5'] as $key => $value) {
            if ($value['sa_google_chart_text_name'] != '' && $value['sa-google_chart_background_color'] != '' && $value['sa-google_chart_color'] != '' && $value['sa_google_chart_value-size'] != '') {
                $oxi_addons_B_C .= "'" . $value['sa-google_chart_color'] . "', ";
            }
        }
        $oxi_addons_data = '';
        foreach ($listdata['sa_google_chart_data_style_5'] as $key => $value) {
            if ($value['sa_google_chart_text_name'] != '' && $value['sa-google_chart_color'] != '' && $value['sa-google_chart_background_color'] != '' && $value['sa_google_chart_value-size'] != '') {
                $oxi_addons_data .= "'" . $value['sa_google_chart_value-size'] . "', ";
            }
        }
        $oxi_border = $listdata['sa-google_chart_pointer_border_width-size'];


        $oxi_text_fontcolor = $listdata['sa-google_chart_top_text_color'];
        $oxi_text_fontsize = $listdata['sa-google_chart_top_text_font_size-size'];

        $oxi_top_fontcolor = $listdata['sa-google_chart_top_text_color'];
        $oxi_top_fontsize = $listdata['sa-google_chart_top_text_font_size-size'];


        $oxi_tooltip_backgroundColor = $listdata['sa-google_chart_tooltip_background'];
        $oxi_tooltip_bodyFontColor = $listdata['sa-google_chart_tooltip_body_color'];
        $oxi_tooltip_bodyFontSize = $listdata['sa-google_chart_tooltip_body_font-size'];



        $jquery .= "new Chart(document.getElementById('oxi-addons-doughnut-$oxiid'), {
                    type: 'doughnut',
                    data: {
                      labels: [$oxi_addons_labels] ,
                      datasets: [
                        {
                          backgroundColor: [$oxi_addons_BG_C],
                          data: [$oxi_addons_data],
                          borderColor: [$oxi_addons_B_C],
                          borderWidth: $oxi_border,
                          fontColor: '$oxi_top_fontcolor',
                        }
                      ]
                    },
                    options: {
                       
                      tooltips: {   
                                backgroundColor: '$oxi_tooltip_backgroundColor',
                                bodyFontColor: '$oxi_tooltip_bodyFontColor',
                                bodyFontSize: $oxi_tooltip_bodyFontSize
                            },
                        legend: {
                            labels: {
                                fontColor: '$oxi_top_fontcolor',
                                fontSize: $oxi_top_fontsize
                            }
                        }
                    }
                })";


        return $jquery;
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery_google_style_2_js';
        wp_enqueue_script('jquery_google_style_2_js', SA_ADDONS_UPLOAD_URL . '/Google_chart/File/chart-min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo wp_enqueue_media();
        wp_enqueue_style('jquery_google_chart_css', SA_ADDONS_UPLOAD_URL . '/Google_chart/File/chart-min.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery_google_chart_js', SA_ADDONS_UPLOAD_URL . '/Google_chart/File/chart-min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $css = '';
        $jquery = '';


        echo '
<div class="oxi-addons-container">
    <div class="oxi-addons-row">';
        
        echo '<div class="oxi-addons-chart-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 59) . '>
           <canvas id="oxi-addons-doughnut-' . $oxiid . '" width="' . $styledata[23] . 'px" height="' . $styledata[27] . 'px"></canvas>
        </div>
      </div>
</div>
  
';

        $css = '.oxi-addons-chart-' . $oxiid . '{
     width: 100%;
     margin: 0 auto;
     max-width: ' . $styledata[3] . 'px;
     padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . ';           
    }
    .oxi-addons-show-chartlist-' . $oxiid . '{
      width: 100%;
      float: left;
    }
    .oxi-addons-show-chartlist-' . $oxiid . ' .oxi-addons-google-chart{
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding: 10px;
        background: #efefef;
        margin-bottom: 20px;
    }
    .oxi-addons-show-chartlist-' . $oxiid . ' ul li{
        border-bottom: 0.8px solid #666;
        padding: 7px;
    }


    ';
        $oxi_addons_G_labels = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_G_labels .= "'" . $data[2] . "', ";
            }
        }
        $oxi_addons_G_BG = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_G_BG .= "'" . $data[4] . "', ";
            }
        }
        $oxi_addons_G_b_c = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_G_b_c .= "'" . $data[6] . "', ";
            }
        }
        $oxi_addons_G_data = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_G_data .= "'" . $data[8] . "', ";
            }
        }
        $jquery .= "new Chart(document.getElementById('oxi-addons-doughnut-$oxiid'), {
                    type: 'doughnut',
                    data: {
                      labels: [$oxi_addons_G_labels] ,
                      datasets: [
                        {
                          backgroundColor: [$oxi_addons_G_BG],
                          data: [$oxi_addons_G_data],
                          borderColor: [$oxi_addons_G_b_c],
                          borderWidth: $styledata[90],
                          fontColor: '$styledata[35]',
                        }
                      ]
                    },
                    options: {
                       
                      tooltips: {   
                            backgroundColor: '$styledata[76]',
                            bodyFontColor: '$styledata[84]',
                            bodyFontSize: $styledata[86],
                            },
                        legend: {
                            labels: {
                                fontColor: '$styledata[35]',
                                fontSize: $styledata[31]
                            }
                        }
                    }
                });";

        wp_add_inline_style('jquery_google_chart_css', $css);
        wp_add_inline_script('jquery_google_chart_js', $jquery);
    }

}
