<?php

namespace SHORTCODE_ADDONS_UPLOAD\Section_divider\Templates;

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

class Style_10 extends Templates {

    public function inline_public_css() {
        $style = $this->style;
        $color = str_replace('#', '', $style['sa_sd_color']);
        $css = '.' . $this->WRAPPER . ' .oxi-addons-divider-sd10 .oxi-addons-divider{
                background-image: url("data:image/svg+xml,%3Csvg class=\'rocket-separator debris_svg_separator\' xmlns=\'http://www.w3.org/2000/svg\' version=\'1.0\' width=\'100%25\' fill=\'%23' . $color. '\' height=\'100%25\' viewBox=\'0 0 1920 50\' preserveAspectRatio=\'none\'%3E%3Cpath d=\'M1920,0h-7.97l-5.79,8.357L1920,6.571V0ZM1606.81,32.054l-19.8,8.661L1603.46,49h0.01ZM1532.56,0l0.98,12.3L1544.87,0h-12.31Zm-71.74,0,3.02,1.4,0.74-1.4h-3.76ZM1385.4,0l0.97,12.3L1397.71,0H1385.4ZM706.6,0l11.333,12.3L718.907,0H706.6ZM639.734,0l0.741,1.4L643.488,0h-3.754ZM559.45,0l11.333,12.3L571.758,0H559.45ZM517.309,40.715l-19.8-8.661L500.853,49h0.01ZM122.566,0L133.9,12.3,134.874,0H122.566ZM55.7,0l0.74,1.4L59.455,0H55.7ZM12.551,28.431l9.388-16.565-15.755.643ZM3.99,4.792l16.7-3.307L20.47,0H6.946ZM35.211,7.715L50.965,8.358,46.227,0H38.3ZM78.375,1.047L63.362,13.64,77.891,26.234Zm6.8,1.874,12.631,9.429L98.867,0H89.544Zm28.307,26.808-1.344-16.962L94.3,32.13ZM108.345,6.665l10.32,1.715L111.524,0h-2.4ZM160.9,23.691l8.191-11.824L143.5,15.189ZM141.013,0.076l20.936,6.844L163.493,0H141.239Zm43.035,23.162-9.484-4.415-4.3,8.149ZM172.53,5.035l25.584,3.322L192.323,0h-9.488ZM203.591,1.4L206.6,0H202.85Zm10.647,25.44-1.63-18.967L199.977,17.3Zm9.974-4.132,9.256-10.866-10.32,1.715ZM242.7,0h-9.323L229,2.92l12.631,9.429Zm9.478,6.666,10.32,1.715L255.353,0h-2.4Zm27.584,31.171,2.888-19.1-16.705-3.307ZM277.728,12.3L278.7,0H266.4Zm25.8,16.129,1.527-17.87-15.859.6Zm-8.56-23.639,16.7-3.307L311.447,0H297.924Zm23.254,4.274,15.86,0.6L333.256,0h-7.509Zm-5.686,16.726,20.947-6.57-10.6-7.268Zm28.621,1.824L324.244,29.6l20.041,17.075Zm20.229-.776L359.757,7.874,347.126,17.3ZM351.909,8.269L362.509,1l-3.2-1H345.724ZM376.152,2.92l12.631,9.429L389.844,0h-9.322ZM371.36,22.709l9.256-10.866L370.3,13.558ZM399.323,6.665L406.165,7.8l0.333-.23-0.141.262,3.286,0.546L402.5,0h-2.4Zm-21.308,20.62,19.18-2.4,9.162-17.049L406.165,7.8Zm51.779-8.545-16.7-3.307,13.817,22.4Zm5.125-6.508,0.374-.01L428.724,0H417.242Zm0,0-4.482.121,21.845,10.455,7.185-11.239-24.174.654,0.231,0.429Zm7.2-7.44,16.705-3.307L458.6,0H445.073Zm17.347,3.079,29.03,0.785L482.957,0h-7.04Zm1.779,19.1,13.783-3.734-9.483-4.415Zm25.821,0.645L470.15,29.6l20.041,17.075Zm7.5-26.216L497.582,0h-3.754Zm12.724,25.44L505.663,7.874,493.032,17.3ZM522.058,2.92l12.631,9.429L535.75,0h-9.322Zm-4.792,19.789,9.256-10.866L516.2,13.558ZM541.757,7.922L523.921,27.285l19.18-2.4Zm3.472-1.256,10.32,1.715L548.408,0H546Zm51.354,21.765,9.389-16.565-15.755.643ZM588.022,4.792l16.7-3.307L604.5,0H590.979Zm31.221,2.923L635,8.358,630.26,0h-7.931Zm43.164-6.668L647.4,13.64l14.528,12.594Zm6.8,1.874,12.631,9.429L682.9,0h-9.323Zm28.307,26.808-1.345-16.962L678.334,32.13ZM692.377,6.665L702.7,8.381,695.556,0h-2.4ZM744.93,23.691l8.19-11.824-25.584,3.323ZM725.046,0.076l20.936,6.844L747.525,0H725.271ZM768.08,23.238L758.6,18.823l-4.3,8.149Zm-11.518-18.2,25.585,3.322L776.356,0h-9.488ZM787.623,1.4L790.636,0h-3.753Zm10.647,25.44L796.641,7.874,784.01,17.3Zm9.974-4.132L817.5,11.843l-10.32,1.715ZM826.728,0h-9.323l-4.369,2.92,12.631,9.429Zm9.479,6.666,10.32,1.715L839.385,0h-2.4Zm27.584,31.171,2.887-19.1-16.7-3.307ZM861.761,12.3L862.736,0H850.428Zm25.8,16.129,1.527-17.87-15.86.6ZM879,4.792l16.705-3.307L895.48,0H881.956Zm23.254,4.274,15.86,0.6L917.288,0h-7.509Zm36.187,2.078-15.325,3.684,9.345,14.389ZM896.569,25.793l20.947-6.57-10.6-7.268Zm28.621,1.824L908.276,29.6l20.041,17.075Zm5.882-19.2,12.607-2.5L936.786,0h-7.744ZM960.185,2.92l12.631,9.429L973.877,0h-9.323Zm-4.792,19.789,9.256-10.866-10.32,1.715ZM983.355,6.665L990.2,7.8l0.332-.23-0.141.262,3.286,0.546L986.534,0h-2.4Zm-21.307,20.62,19.18-2.4,9.161-17.049L990.2,7.8Zm51.782-8.545-16.708-3.307,13.818,22.4Zm5.12-6.508,0.38-.01L1012.76,0h-11.49Zm0,0-4.48.121,21.84,10.455,7.19-11.239-24.17.654,0.23,0.429Zm6.72-10.83,0.74-1.4h-3.75Zm0.48,3.391,16.7-3.307L1042.63,0H1029.1Zm17.35,3.079,29.03,0.785L1066.99,0h-7.04Zm24.46,14.935,21.85-10.454-29.03-.785ZM1078.6,1.4l3.01-1.4h-3.75Zm14.74,36.435,13.82-22.4-16.71,3.307Zm0.52-35.071,17.08-2.7L1110.91,0H1095.2Zm16.75,5.615,3.28-.546-0.14-.262,0.33,0.23,6.85-1.138L1120.15,0h-2.4Zm12.45,16.5,19.18,2.4L1114.08,7.8l-0.19.031Zm25.83-2.175,1.07-9.151-10.32-1.715Zm-17.42-10.36L1144.1,2.92,1139.73,0h-9.32Zm29.14-6.434,12.61,2.5L1175.25,0h-7.75Zm25.56,3.749,15.87-.6L1194.51,0H1187Zm11.21,2.29-10.61,7.268,20.95,6.57Zm-31.53-.81,5.98,18.073,9.34-14.388Zm13.25,16.473-3.13,19.058L1196.01,29.6Zm37.63,0.814,14.33-17.273-15.86-.6Zm-8.14-26.945,16.7,3.307L1222.34,0h-13.53Zm31.91,36.351,13.82-22.4-16.7,3.307Zm2.03-25.534L1253.87,0h-12.31Zm15.24-3.921,10.32-1.715L1267.31,0h-2.4Zm38.28,14.328,1.07-9.151-10.32-1.715Zm-17.42-10.36,12.63-9.429L1286.89,0h-9.32Zm27.4,14.492,14.26-9.537-12.63-9.43ZM1316.68,1.4l0.74-1.4h-3.76Zm19.54,21.837,13.79,3.734-4.3-8.149ZM1322.15,8.357l25.59-3.322L1337.43,0h-9.48Zm37.22,15.334,17.4-8.5-25.59-3.323Zm-1.05-16.771,20.94-6.844L1379.03,0h-22.25Zm43.29,1.46,10.32-1.715L1411.16,0h-2.41Zm5.18,21.347,19.19,2.4-17.84-19.364Zm15.68-17.379L1435.1,2.92,1430.73,0h-9.32Zm34.45,1.291L1441.9,1.047l0.49,25.188Zm12.4-5.282,15.75-.643L1481.99,0h-7.94Zm38.41,20.073,6.37-15.922-15.76-.643Zm-8.14-26.945,16.71,3.307L1513.34,0h-13.53Zm49.18,6.9,10.32-1.715L1558.32,0h-2.41Zm20.86,3.968,12.63-9.429L1577.89,0h-9.32Zm-8.41,12.535,19.18,2.4L1562.56,7.922Zm26.9-11.325-10.32-1.715,9.26,10.866Zm8.91,13.283,14.26-9.537-12.63-9.43ZM1609.76,1.4L1610.5,0h-3.76Zm4.37,45.274L1634.18,29.6l-16.92-1.983Zm24.66-27.852-9.49,4.415,13.79,3.734ZM1615.83,8.656l29.04-.785L1628.41,0h-7.04Zm29.68-7.171,16.7,3.307L1659.26,0h-13.53Zm45.73,13.947-16.7,3.307,2.88,19.1Zm-22.2-3.211,0.37,0.01L1687.09,0h-11.48Zm0,0-24.18-.654,7.19,11.239,21.84-10.454-4.48-.121-0.6.418Zm25.65-3.841,3.29-.546-0.14-.262,0.33,0.23,6.84-1.138L1704.24,0h-2.41Zm12.45,16.5,19.18,2.4L1698.17,7.8l-0.19.031Zm25.84-2.175,1.06-9.151-10.32-1.715Zm-17.43-10.36,12.63-9.429L1723.81,0h-9.32Zm27.4,14.492,14.26-9.537-12.63-9.43ZM1745.03,0l-3.2,1,10.6,7.266L1758.61,0h-13.58Zm25.23,9.664,15.86-.6L1778.59,0h-7.51Zm-10.21,37.011L1780.1,29.6l-16.92-1.983Zm21.41-34.721-10.6,7.268,20.94,6.57Zm19.35,16.476,14.34-17.273-15.86-.6Zm-8.14-26.945,16.7,3.307L1806.42,0h-13.53Zm31.92,36.351,13.81-22.4-16.7,3.307Zm2.03-25.534L1837.95,0h-12.31Zm15.23-3.921,10.32-1.715L1851.4,0h-2.41Zm38.29,14.328,1.06-9.151-10.32-1.715Zm-17.43-10.36,12.63-9.429L1870.97,0h-9.32Zm27.4,14.492,14.26-9.537-12.63-9.43ZM1900.76,1.4L1901.5,0h-3.75ZM1043.19,32l9.99-9,20,11Z\'%3E%3C/path%3E%3C/svg%3E");
                background-repeat:  repeat-x;
            } ';
        
        if (is_admin()):
            if ($this->style['sa_sd_align'] == 'sa_sd_top'):
                $css .= '.oxi-addons-preview-data#oxi-addons-preview-data {
                            padding-bottom: ' . ($style['sa_sd_height-lap-size'] + 50) . 'px !important;
                                    background-color: rgb(156, 63, 112);
                                    padding: 0;
                         }';
            else:
                $css .= '.oxi-addons-preview-data#oxi-addons-preview-data {
                            padding-top: ' . ($style['sa_sd_height-lap-size'] + 50) . 'px !important;
                                    background-color: rgb(156, 63, 112);
                                    padding: 0;
                         }';
            endif;
        endif;
        
        
         return $css;
    }

    public function default_render($style, $child, $admin) {

        echo '  <div class="oxi-addons-divider-sd10 ' . $style['sa_sd_align'] . '">
                     <div class="oxi-addons-divider ' . (array_key_exists('sa_sd_scroll', $style) && $style['sa_sd_scroll'] != '0' ? $style['sa_sd_scroll'] : '') . '">
                </div>
             
            ';
    }

    public function old_render() {
        $style = $this->dbdata;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = '';
        echo '<div class="oxi-addons-divider-' . $oxiid . '">
                 <div class="oxi-addons-divider">
                 </div>
            ';
        ?>
        <style>
            .oxi-addons-divider-<?php echo $oxiid; ?> .oxi-addons-divider{
                background-image: url("data:image/svg+xml,%3Csvg class='rocket-separator debris_svg_separator' xmlns='http://www.w3.org/2000/svg' version='1.0' width='100%25' fill='%23<?php echo $style[11]; ?>' height='100%25' viewBox='0 0 1920 50' preserveAspectRatio='none'%3E%3Cpath d='M1920,0h-7.97l-5.79,8.357L1920,6.571V0ZM1606.81,32.054l-19.8,8.661L1603.46,49h0.01ZM1532.56,0l0.98,12.3L1544.87,0h-12.31Zm-71.74,0,3.02,1.4,0.74-1.4h-3.76ZM1385.4,0l0.97,12.3L1397.71,0H1385.4ZM706.6,0l11.333,12.3L718.907,0H706.6ZM639.734,0l0.741,1.4L643.488,0h-3.754ZM559.45,0l11.333,12.3L571.758,0H559.45ZM517.309,40.715l-19.8-8.661L500.853,49h0.01ZM122.566,0L133.9,12.3,134.874,0H122.566ZM55.7,0l0.74,1.4L59.455,0H55.7ZM12.551,28.431l9.388-16.565-15.755.643ZM3.99,4.792l16.7-3.307L20.47,0H6.946ZM35.211,7.715L50.965,8.358,46.227,0H38.3ZM78.375,1.047L63.362,13.64,77.891,26.234Zm6.8,1.874,12.631,9.429L98.867,0H89.544Zm28.307,26.808-1.344-16.962L94.3,32.13ZM108.345,6.665l10.32,1.715L111.524,0h-2.4ZM160.9,23.691l8.191-11.824L143.5,15.189ZM141.013,0.076l20.936,6.844L163.493,0H141.239Zm43.035,23.162-9.484-4.415-4.3,8.149ZM172.53,5.035l25.584,3.322L192.323,0h-9.488ZM203.591,1.4L206.6,0H202.85Zm10.647,25.44-1.63-18.967L199.977,17.3Zm9.974-4.132,9.256-10.866-10.32,1.715ZM242.7,0h-9.323L229,2.92l12.631,9.429Zm9.478,6.666,10.32,1.715L255.353,0h-2.4Zm27.584,31.171,2.888-19.1-16.705-3.307ZM277.728,12.3L278.7,0H266.4Zm25.8,16.129,1.527-17.87-15.859.6Zm-8.56-23.639,16.7-3.307L311.447,0H297.924Zm23.254,4.274,15.86,0.6L333.256,0h-7.509Zm-5.686,16.726,20.947-6.57-10.6-7.268Zm28.621,1.824L324.244,29.6l20.041,17.075Zm20.229-.776L359.757,7.874,347.126,17.3ZM351.909,8.269L362.509,1l-3.2-1H345.724ZM376.152,2.92l12.631,9.429L389.844,0h-9.322ZM371.36,22.709l9.256-10.866L370.3,13.558ZM399.323,6.665L406.165,7.8l0.333-.23-0.141.262,3.286,0.546L402.5,0h-2.4Zm-21.308,20.62,19.18-2.4,9.162-17.049L406.165,7.8Zm51.779-8.545-16.7-3.307,13.817,22.4Zm5.125-6.508,0.374-.01L428.724,0H417.242Zm0,0-4.482.121,21.845,10.455,7.185-11.239-24.174.654,0.231,0.429Zm7.2-7.44,16.705-3.307L458.6,0H445.073Zm17.347,3.079,29.03,0.785L482.957,0h-7.04Zm1.779,19.1,13.783-3.734-9.483-4.415Zm25.821,0.645L470.15,29.6l20.041,17.075Zm7.5-26.216L497.582,0h-3.754Zm12.724,25.44L505.663,7.874,493.032,17.3ZM522.058,2.92l12.631,9.429L535.75,0h-9.322Zm-4.792,19.789,9.256-10.866L516.2,13.558ZM541.757,7.922L523.921,27.285l19.18-2.4Zm3.472-1.256,10.32,1.715L548.408,0H546Zm51.354,21.765,9.389-16.565-15.755.643ZM588.022,4.792l16.7-3.307L604.5,0H590.979Zm31.221,2.923L635,8.358,630.26,0h-7.931Zm43.164-6.668L647.4,13.64l14.528,12.594Zm6.8,1.874,12.631,9.429L682.9,0h-9.323Zm28.307,26.808-1.345-16.962L678.334,32.13ZM692.377,6.665L702.7,8.381,695.556,0h-2.4ZM744.93,23.691l8.19-11.824-25.584,3.323ZM725.046,0.076l20.936,6.844L747.525,0H725.271ZM768.08,23.238L758.6,18.823l-4.3,8.149Zm-11.518-18.2,25.585,3.322L776.356,0h-9.488ZM787.623,1.4L790.636,0h-3.753Zm10.647,25.44L796.641,7.874,784.01,17.3Zm9.974-4.132L817.5,11.843l-10.32,1.715ZM826.728,0h-9.323l-4.369,2.92,12.631,9.429Zm9.479,6.666,10.32,1.715L839.385,0h-2.4Zm27.584,31.171,2.887-19.1-16.7-3.307ZM861.761,12.3L862.736,0H850.428Zm25.8,16.129,1.527-17.87-15.86.6ZM879,4.792l16.705-3.307L895.48,0H881.956Zm23.254,4.274,15.86,0.6L917.288,0h-7.509Zm36.187,2.078-15.325,3.684,9.345,14.389ZM896.569,25.793l20.947-6.57-10.6-7.268Zm28.621,1.824L908.276,29.6l20.041,17.075Zm5.882-19.2,12.607-2.5L936.786,0h-7.744ZM960.185,2.92l12.631,9.429L973.877,0h-9.323Zm-4.792,19.789,9.256-10.866-10.32,1.715ZM983.355,6.665L990.2,7.8l0.332-.23-0.141.262,3.286,0.546L986.534,0h-2.4Zm-21.307,20.62,19.18-2.4,9.161-17.049L990.2,7.8Zm51.782-8.545-16.708-3.307,13.818,22.4Zm5.12-6.508,0.38-.01L1012.76,0h-11.49Zm0,0-4.48.121,21.84,10.455,7.19-11.239-24.17.654,0.23,0.429Zm6.72-10.83,0.74-1.4h-3.75Zm0.48,3.391,16.7-3.307L1042.63,0H1029.1Zm17.35,3.079,29.03,0.785L1066.99,0h-7.04Zm24.46,14.935,21.85-10.454-29.03-.785ZM1078.6,1.4l3.01-1.4h-3.75Zm14.74,36.435,13.82-22.4-16.71,3.307Zm0.52-35.071,17.08-2.7L1110.91,0H1095.2Zm16.75,5.615,3.28-.546-0.14-.262,0.33,0.23,6.85-1.138L1120.15,0h-2.4Zm12.45,16.5,19.18,2.4L1114.08,7.8l-0.19.031Zm25.83-2.175,1.07-9.151-10.32-1.715Zm-17.42-10.36L1144.1,2.92,1139.73,0h-9.32Zm29.14-6.434,12.61,2.5L1175.25,0h-7.75Zm25.56,3.749,15.87-.6L1194.51,0H1187Zm11.21,2.29-10.61,7.268,20.95,6.57Zm-31.53-.81,5.98,18.073,9.34-14.388Zm13.25,16.473-3.13,19.058L1196.01,29.6Zm37.63,0.814,14.33-17.273-15.86-.6Zm-8.14-26.945,16.7,3.307L1222.34,0h-13.53Zm31.91,36.351,13.82-22.4-16.7,3.307Zm2.03-25.534L1253.87,0h-12.31Zm15.24-3.921,10.32-1.715L1267.31,0h-2.4Zm38.28,14.328,1.07-9.151-10.32-1.715Zm-17.42-10.36,12.63-9.429L1286.89,0h-9.32Zm27.4,14.492,14.26-9.537-12.63-9.43ZM1316.68,1.4l0.74-1.4h-3.76Zm19.54,21.837,13.79,3.734-4.3-8.149ZM1322.15,8.357l25.59-3.322L1337.43,0h-9.48Zm37.22,15.334,17.4-8.5-25.59-3.323Zm-1.05-16.771,20.94-6.844L1379.03,0h-22.25Zm43.29,1.46,10.32-1.715L1411.16,0h-2.41Zm5.18,21.347,19.19,2.4-17.84-19.364Zm15.68-17.379L1435.1,2.92,1430.73,0h-9.32Zm34.45,1.291L1441.9,1.047l0.49,25.188Zm12.4-5.282,15.75-.643L1481.99,0h-7.94Zm38.41,20.073,6.37-15.922-15.76-.643Zm-8.14-26.945,16.71,3.307L1513.34,0h-13.53Zm49.18,6.9,10.32-1.715L1558.32,0h-2.41Zm20.86,3.968,12.63-9.429L1577.89,0h-9.32Zm-8.41,12.535,19.18,2.4L1562.56,7.922Zm26.9-11.325-10.32-1.715,9.26,10.866Zm8.91,13.283,14.26-9.537-12.63-9.43ZM1609.76,1.4L1610.5,0h-3.76Zm4.37,45.274L1634.18,29.6l-16.92-1.983Zm24.66-27.852-9.49,4.415,13.79,3.734ZM1615.83,8.656l29.04-.785L1628.41,0h-7.04Zm29.68-7.171,16.7,3.307L1659.26,0h-13.53Zm45.73,13.947-16.7,3.307,2.88,19.1Zm-22.2-3.211,0.37,0.01L1687.09,0h-11.48Zm0,0-24.18-.654,7.19,11.239,21.84-10.454-4.48-.121-0.6.418Zm25.65-3.841,3.29-.546-0.14-.262,0.33,0.23,6.84-1.138L1704.24,0h-2.41Zm12.45,16.5,19.18,2.4L1698.17,7.8l-0.19.031Zm25.84-2.175,1.06-9.151-10.32-1.715Zm-17.43-10.36,12.63-9.429L1723.81,0h-9.32Zm27.4,14.492,14.26-9.537-12.63-9.43ZM1745.03,0l-3.2,1,10.6,7.266L1758.61,0h-13.58Zm25.23,9.664,15.86-.6L1778.59,0h-7.51Zm-10.21,37.011L1780.1,29.6l-16.92-1.983Zm21.41-34.721-10.6,7.268,20.94,6.57Zm19.35,16.476,14.34-17.273-15.86-.6Zm-8.14-26.945,16.7,3.307L1806.42,0h-13.53Zm31.92,36.351,13.81-22.4-16.7,3.307Zm2.03-25.534L1837.95,0h-12.31Zm15.23-3.921,10.32-1.715L1851.4,0h-2.41Zm38.29,14.328,1.06-9.151-10.32-1.715Zm-17.43-10.36,12.63-9.429L1870.97,0h-9.32Zm27.4,14.492,14.26-9.537-12.63-9.43ZM1900.76,1.4L1901.5,0h-3.75ZM1043.19,32l9.99-9,20,11Z'%3E%3C/path%3E%3C/svg%3E");
                background-repeat:  repeat-x;
            } 
        </style>
        <?php
        echo '</div>';
        $css .= '
             .oxi-addons-divider-' . $oxiid . '{
                display: block;
                position: absolute;
                width: ' . $style[13] . '%;
                height: ' . $style[15] . 'px;
                pointer-events: none;
                margin-top: -1px;
                top:auto;
                bottom:auto;
                ' . $style[3] . ':0;
                z-index: 1;
             ';
        if ($style[3] == 'bottom') {
            $css .= '-webkit-transform: translate(0%, 0) scaleX(-1);
                        -ms-transform: translate(0%, 0) scaleX(-1);
                        -o-transform: translate(0%, 0) scaleX(-1);
                        transform: translate(0%, 0) scale(-1);';
        } else {
            $css .= '-webkit-transform: translate(0%, 0) scaleX(1);
                        -ms-transform: translate(0%, 0) scaleX(1);
                        -o-transform: translate(0%, 0) scaleX(1);
                        transform: translate(0%, 0) scale(1);';
        }
        $css .= '} .oxi-addons-divider-' . $oxiid . ' .oxi-addons-divider{
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                pointer-events: none;
                background-size: 100% 100%;
                top: 0;
                bottom: 0;';
        if ($style[9] == 'yes') {
            $css .= '
                -webkit-animation: scroll 150s linear infinite;
                -moz-animation: scroll 150s linear infinite;
                -ms-animation: scroll 150s linear infinite;
                -o-animation: scroll 150s linear infinite;
                animation: scroll 150s linear infinite;';
        }

        $css .= '}
                @-webkit-keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }

                @-moz-keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }

                @-o-keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }

                @keyframes scroll {
                    100%{
                        background-position: 10000px center;
                    }
                }';

        wp_add_inline_style('shortcode-addons-style', $css);
    }

}