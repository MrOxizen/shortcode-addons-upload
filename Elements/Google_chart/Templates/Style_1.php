<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Google_chart\Templates;

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
    public function public_css() {
        wp_enqueue_style('jquery_google_chart_css', SA_ADDONS_UPLOAD_URL . '/Elements/Google_chart/File/chart-min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        $oxiid = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-chart-style-1">
                    <div class="oxi-addons-chart-' . $oxiid . '" ' . $this->animation_render('sa-google-chart-body-animation', $styledata) . '>
                         <canvas id="oxi_addons_bar_chart_' . $oxiid . '" width="' . $styledata['sa-google-chart-body-width'] . 'px" height="' . $styledata[27] . 'px"></canvas>
                   </div>
            </div>';
    }
    
    public function inline_public_jquery() {
        $jquery = '';
        $listdata = $this->style;
        $oxiid = $styledata['shortcode-addons-elements-id'];
        
        $oxi_addons_labels = '';
        
        foreach ($listdata as $value) {
            if ($value[2] != '' && $value[4] != '' && $value[6] != '' && $value[8] != '') {
                $oxi_addons_labels .= "'" . $data[2] . "', ";
            }
        }
        $oxi_addons_BG_C = '';
        foreach ($listdata as $value) {
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_BG_C .= "'" . $data[4] . "', ";
            }
        }
        $oxi_addons_B_C = '';
        foreach ($listdata as $value) {
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_B_C .= "'" . $data[6] . "', ";
            }
        }
        $oxi_addons_data = '';
        foreach ($listdata as $value) {
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_data .= "'" . $data[8] . "', ";
            }
        }
        
        $jquery .= "var ctx = document.getElementById('oxi_addons_bar_chart_$oxiid');
        var oxi_addons_bar_chart_$oxiid = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:[$oxi_addons_labels],
            datasets: [{
                label: '" . OxiAddonsTextConvert($stylefiles[2]) . "',
                data: [
                    $oxi_addons_data
                ],
                backgroundColor: [
                    $oxi_addons_BG_C
                ],
                borderColor: [
                    $oxi_addons_B_C
                ],
                borderWidth: $styledata[90]
            }],
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: '$styledata[68]',
                        fontSize: $styledata[64]
                    },
                    
                }],
                xAxes: [{
                    ticks: {
                        fontColor: '$styledata[74]',
                        fontSize: $styledata[70]
                    },
                    
                }]
            },
            legend: {
                display: true,
                labels: {
                    fontColor: '$styledata[35]',
                    fontSize: $styledata[31]
                }
            },
            tooltips: {   
                    backgroundColor: '$styledata[76]',
                    titleFontColor: '$styledata[78]',
                    titleFontSize: $styledata[80],
                    bodyFontColor: '$styledata[84]',
                    bodyFontSize: $styledata[86]
                    },
            
        }
    })";
       
             
    return $jquery;
    }

    
    public function public_jquery() {
        $this->JSHANDLE = 'jquery_google_chart_js';
        wp_enqueue_script('jquery_google_chart_js', SA_ADDONS_UPLOAD_URL . '/Elements/Google_chart/File/chart-min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        echo wp_enqueue_media();
        wp_enqueue_style('jquery_google_chart_css', SA_ADDONS_UPLOAD_URL . '/Elements/Google_chart/File/chart-min.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery_google_chart_js', SA_ADDONS_UPLOAD_URL . '/Elements/Google_chart/File/chart-min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $css = '';
        $jquery = '';


echo ' <div class="oxi-addons-container">
            <div class="oxi-addons-row">
               <div class="oxi-addons-chart-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 59) . '>
                   <canvas id="oxi_addons_bar_chart_' . $oxiid . '" width="' . $styledata[23] . 'px" height="' . $styledata[27] . 'px"></canvas>
                </div>
              </div>
        </div>';

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
    }';
        $oxi_addons_labels = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_labels .= "'" . $data[2] . "', ";
            }
        }
        $oxi_addons_BG_C = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_BG_C .= "'" . $data[4] . "', ";
            }
        }
        $oxi_addons_B_C = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_B_C .= "'" . $data[6] . "', ";
            }
        }
        $oxi_addons_data = '';
        foreach ($listdata as $value) {
            $data = explode("||#||", $value['files']);
            if ($data[2] != '' && $data[4] != '' && $data[6] != '' && $data[8] != '') {
                $oxi_addons_data .= "'" . $data[8] . "', ";
            }
        }
        $jquery .= "var ctx = document.getElementById('oxi_addons_bar_chart_$oxiid');
        var oxi_addons_bar_chart_$oxiid = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:[$oxi_addons_labels],
            datasets: [{
                label: '" . OxiAddonsTextConvert($stylefiles[2]) . "',
                data: [
                    $oxi_addons_data
                ],
                backgroundColor: [
                    $oxi_addons_BG_C
                ],
                borderColor: [
                    $oxi_addons_B_C
                ],
                borderWidth: $styledata[90]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: '$styledata[68]',
                        fontSize: $styledata[64]
                    },
                    
                }],
                xAxes: [{
                    ticks: {
                        fontColor: '$styledata[74]',
                        fontSize: $styledata[70]
                    },
                    
                }]
            },
            legend: {
                display: true,
                labels: {
                    fontColor: '$styledata[35]',
                    fontSize: $styledata[31]
                }
            },
            tooltips: {   
                    backgroundColor: '$styledata[76]',
                    titleFontColor: '$styledata[78]',
                    titleFontSize: $styledata[80],
                    bodyFontColor: '$styledata[84]',
                    bodyFontSize: $styledata[86]
                    },
            
        }
    })";
        wp_add_inline_style('jquery_google_chart_css', $css);
        wp_add_inline_script('jquery_google_chart_js', $jquery);
    }

}
