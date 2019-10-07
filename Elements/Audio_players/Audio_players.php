<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Audio_players;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Icon_boxes
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Audio_players extends Elements_Frontend
{

    public function pre_active()
    {
        return array('Style_1');
    }

    public function templates()
    {
        return array(
            'Style 01OXIIMPORTaudio_playersOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG ||OxiAddonsAudio-G-BG|linear-gradient(0deg, rgba(7,129,135,1.00) 0%,rgba(14,214,232,0.54) 47%,rgba(42,161,191,0.81) 100%)|||OxiAddonsAudio-G-W |500|500|500|OxiAddonsAudio-G-P-top |5|5|5|OxiAddonsAudio-G-P-bottom |5|5|5|OxiAddonsAudio-G-P-left |5|5|5|OxiAddonsAudio-G-P-right |5|5|5| OxiAddonsAudio-G-Animation|bounce|0.5:false:false:500:10:0.2|0.5//|| OxiAddonsAudio-audio-BG |rgba(0,180,189,1.00)| OxiAddonsAudio-audio-playpause |true| OxiAddonsAudio-audio-current |true| OxiAddonsAudio-audio-volume |true| OxiAddonsAudio-audio-progress |true|OxiAddonsAudio-audio-H |100|100|100|||||||||||||OxiAddonsAudio-G-R-top |0|0|0|OxiAddonsAudio-G-R-bottom |0|0|0|OxiAddonsAudio-G-R-left |0|0|0|OxiAddonsAudio-G-R-right |0|0|0|OxiAddonsAudio-PBTN-FS |18|18|18| OxiAddonsAudio-PBTN-C |#fafafa|OxiAddonsAudio-tooltip-R-top |1|1|1|OxiAddonsAudio-tooltip-R-bottom |1|1|1|OxiAddonsAudio-tooltip-R-left |1|1|1|OxiAddonsAudio-tooltip-R-right |1|1|1|OxiAddonsAudio-PBTN-M-top |0|0|0|OxiAddonsAudio-PBTN-M-bottom |0|0|0|OxiAddonsAudio-PBTN-M-left |0|0|0|OxiAddonsAudio-PBTN-M-right |0|0|0|OxiAddonsAudio-SBTN-FS |18|18|18| OxiAddonsAudio-SBTN-C |#ffffff|OxiAddonsAudio-time-FS |12|12|12| OxiAddonsAudio-time-C |#ffffff|OxiAddonsAudio-time-F-family |Open+Sans|100|OxiAddonsAudio-time-F-style |normal:1.3|left:0()0()2()#ffffff:|OxiAddonsAudio-time-P-top |5|5|0|OxiAddonsAudio-time-P-bottom |5|5|0|OxiAddonsAudio-time-P-left |5|5|0|OxiAddonsAudio-time-P-right |5|5|0|OxiAddonsAudio-time-M-top |5|5|4|OxiAddonsAudio-time-M-bottom |5|5|5|OxiAddonsAudio-time-M-left |5|5|4|OxiAddonsAudio-time-M-right |5|5|4| OxiAddonsAudio-progress-BG |#ffffff|OxiAddonsAudio-progress-P-top |100|100|100|OxiAddonsAudio-progress-P-bottom |100|100|100|OxiAddonsAudio-progress-P-left |100|100|100|OxiAddonsAudio-progress-P-right |100|100|100|OxiAddonsAudio-progress-M-top |5|5|5|OxiAddonsAudio-progress-M-bottom |5|5|5|OxiAddonsAudio-progress-M-left |5|5|5|OxiAddonsAudio-progress-M-right |5|5|5|OxiAddonsAudio-TH-W |20|20|20|OxiAddonsAudio-TH-H |20|20|20|OxiAddonsAudio-TH-LR |-5|-5|-5|OxiAddonsAudio-TH-TB |-5|-5|-5| OxiAddonsAudio-TH-BG |rgba(255, 255, 255, 1)|OxiAddonsAudio-TH-B |2|solid|| OxiAddonsAudio-TH-BC |#ffffff|OxiAddonsAudio-TH-BR-top |50|50|50|OxiAddonsAudio-TH-BR-bottom |50|50|50|OxiAddonsAudio-TH-BR-left |50|50|50|OxiAddonsAudio-TH-BR-right |50|50|50| OxiAddonsAudio-loading-BG |#f78b8b| OxiAddonsAudio-current-BG |#ffdbeb| ||OxiAddonsAudio-tooltip-FS |16|16|16| OxiAddonsAudio-tooltip-BG |rgba(255, 255, 255, 1)| OxiAddonsAudio-tooltip-C |#333333|OxiAddonsAudio-tooltip-F-family |Open+Sans|100|OxiAddonsAudio-tooltip-F-style |normal:1.3|left:0()0()2()#ffffff:|||||||||OxiAddonsAudio-tooltip-W |70|70|70|OxiAddonsAudio-tooltip-H |25|25|25|OxiAddonsAudio-tooltip-M-top |0|0|0|OxiAddonsAudio-tooltip-M-bottom |10|10|10|OxiAddonsAudio-tooltip-M-left |0|0|0|OxiAddonsAudio-tooltip-M-right |0|0|0|OxiAddonsAudio-PV-FS |16|16|16| OxiAddonsAudio-PV-C |#ffffff|||||||||||||||||OxiAddonsAudio-PV-M-top |0|0|0|OxiAddonsAudio-PV-M-bottom |0|0|0|OxiAddonsAudio-PV-M-left |5|5|5|OxiAddonsAudio-PV-M-right |5|5|5|OxiAddonsAudio-volume-FS |16|16|16| OxiAddonsAudio-volume-C |#ffffff| OxiAddonsAudio-v-progress-BG |#e6e6e6|||||||||OxiAddonsAudio-V-W |100|80|50|OxiAddonsAudio-V-H |10|10|10|OxiAddonsAudio-v-progress-M-top |-4|-4|-4|OxiAddonsAudio-v-progress-M-bottom |-4|-4|-4|OxiAddonsAudio-v-progress-M-left |-4|-4|-4|OxiAddonsAudio-v-progress-M-right |-4|-4|-4| OxiAddonsAudio-v-progress-active-BG |#ffffff|OxiAddonsAudio-VH-W |18|18|18|OxiAddonsAudio-VH-H |18|18|18|||||OxiAddonsAudio-VH-TB |-4|-4|-4| OxiAddonsAudio-VH-BG |rgba(255, 255, 255, 1)|OxiAddonsAudio-VH-B |1|none|| OxiAddonsAudio-VH-BC |#ffffff|OxiAddonsAudio-VH-BR-top |50|50|50|OxiAddonsAudio-VH-BR-bottom |50|50|50|OxiAddonsAudio-VH-BR-left |50|50|50|OxiAddonsAudio-VH-BR-right |50|50|50|OxiAddonsAudio-FR-W |200|200|200|OxiAddonsAudio-FR-H |200|200|200| OxiAddonsAudio-TH-handle |true| OxiAddonsAudio-VH-handle |true|OxiAddonsAudio-progress-H |10|10|10|OxiAddonsAudio-v-progress-R-top |7|7|7|OxiAddonsAudio-v-progress-R-bottom |7|7|7|OxiAddonsAudio-v-progress-R-left |7|7|7|OxiAddonsAudio-v-progress-R-right |7|7|7|OxiAddonsAudio-FR-P-top |30|30|30|OxiAddonsAudio-FR-P-bottom |16|16|16|OxiAddonsAudio-FR-P-left |16|16|16|OxiAddonsAudio-FR-P-right |16|16|16|OxiAddonsAudio-FR-BR-top |100|100|100|OxiAddonsAudio-FR-BR-bottom |100|100|100|OxiAddonsAudio-FR-BR-left |100|100|100|OxiAddonsAudio-FR-BR-right |100|100|100|OxiAddonsAudio-G-BS |rgba(125, 125, 125, 0.75)|0|6|12|-5|OxiAddonsAudio-title-FS |30|30|30|OxiAddonsAudio-title-F-family |Bree+Serif|800|OxiAddonsAudio-title-F-style |normal:1.3|center:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-title-C |#000000|OxiAddonsAudio-title-P-top |10|10|10|OxiAddonsAudio-title-P-bottom |0|0|0|OxiAddonsAudio-title-P-left |6|6|6|OxiAddonsAudio-title-P-right |5|5|5|OxiAddonsAudio-author-FS |16|16|16|OxiAddonsAudio-author-F-family |Montserrat|100|OxiAddonsAudio-author-F-style |normal:1.3|center:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-author-C |#5c5c5c|OxiAddonsAudio-author-P-top |0|0|0|OxiAddonsAudio-author-P-bottom |15|15|15|OxiAddonsAudio-author-P-left |5|5|5|OxiAddonsAudio-author-P-right |5|5|5|||#|| OxiAddonsAudio-upload-audio ||#||https://www.oxilab.org/wp-content/uploads/2019/03/Vuelve_Intro-632585.mp3||#|| OxiAddonsAudio-PBTN-I ||#||f04c||#|| OxiAddonsAudio-SBTN-I ||#||f04b||#|| OxiAddonsAudio-PV-I ||#||f6a9||#|| OxiAddonsAudio-volume-I ||#||f028||#|| OxiAddonsAudio-title-TA ||#||Love Story||#|| OxiAddonsAudio-author-TA ||#||By: Taylor Swift||#|| OxiAddonsAudio-FR-img ||#||https://www.oxilab.org/wp-content/uploads/2019/04/er-wsfs-f.jpg||#|| ||#||',
            'Style 02OXIIMPORTaudio_playersOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG ||OxiAddonsAudio-G-BG|rgba(68,138,255,1.00)|||OxiAddonsAudio-G-W |500|500|500|OxiAddonsAudio-G-P-top |5|5|5|OxiAddonsAudio-G-P-bottom |5|5|5|OxiAddonsAudio-G-P-left |5|5|5|OxiAddonsAudio-G-P-right |5|5|5| OxiAddonsAudio-G-Animation|bounce|0.5:false:false:500:10:0.2|0.5//|| OxiAddonsAudio-audio-BG |rgba(0,94,203,1.00)| OxiAddonsAudio-audio-playpause |true| OxiAddonsAudio-audio-current |true| OxiAddonsAudio-audio-volume |true| OxiAddonsAudio-audio-progress |true|OxiAddonsAudio-audio-H |70|70|70|||||||||||||OxiAddonsAudio-G-R-top |0|0|0|OxiAddonsAudio-G-R-bottom |0|0|0|OxiAddonsAudio-G-R-left |0|0|0|OxiAddonsAudio-G-R-right |0|0|0|OxiAddonsAudio-PBTN-FS |18|18|18| OxiAddonsAudio-PBTN-C |#fafafa|OxiAddonsAudio-tooltip-R-top |1|1|1|OxiAddonsAudio-tooltip-R-bottom |1|1|1|OxiAddonsAudio-tooltip-R-left |1|1|1|OxiAddonsAudio-tooltip-R-right |1|1|1|OxiAddonsAudio-PBTN-M-top |0|0|0|OxiAddonsAudio-PBTN-M-bottom |0|0|0|OxiAddonsAudio-PBTN-M-left |0|0|0|OxiAddonsAudio-PBTN-M-right |0|0|0|OxiAddonsAudio-SBTN-FS |18|18|18| OxiAddonsAudio-SBTN-C |#ffffff|OxiAddonsAudio-time-FS |16|16|16| OxiAddonsAudio-time-C |#ffffff|OxiAddonsAudio-time-F-family |Open+Sans|100|OxiAddonsAudio-time-F-style |normal:1.3|left:0()0()2()#ffffff:|OxiAddonsAudio-time-LR |80|80|80|OxiAddonsAudio-time-TB |8|8|8||||||||||||||||||||||||| OxiAddonsAudio-progress-BG |#ffffff|OxiAddonsAudio-progress-P-top |100|100|100|OxiAddonsAudio-progress-P-bottom |100|100|100|OxiAddonsAudio-progress-P-left |100|100|100|OxiAddonsAudio-progress-P-right |100|100|100|OxiAddonsAudio-progress-M-top |0|0|0|OxiAddonsAudio-progress-M-bottom |0|0|0|OxiAddonsAudio-progress-M-left |10|10|10|OxiAddonsAudio-progress-M-right |10|10|10|OxiAddonsAudio-TH-W |20|20|20|OxiAddonsAudio-TH-H |20|20|20|OxiAddonsAudio-TH-LR |-5|-5|-5|OxiAddonsAudio-TH-TB |-5|-5|-5| OxiAddonsAudio-TH-BG |rgba(0, 157, 219, 1)|OxiAddonsAudio-TH-B |2|solid|| OxiAddonsAudio-TH-BC |#ffffff|OxiAddonsAudio-TH-BR-top |50|50|50|OxiAddonsAudio-TH-BR-bottom |50|50|50|OxiAddonsAudio-TH-BR-left |50|50|50|OxiAddonsAudio-TH-BR-right |50|50|50| OxiAddonsAudio-loading-BG |#e6e6e6| OxiAddonsAudio-current-BG |#009ddb| ||OxiAddonsAudio-tooltip-FS |16|16|16| OxiAddonsAudio-tooltip-BG |rgba(255, 255, 255, 1)| OxiAddonsAudio-tooltip-C |#333333|OxiAddonsAudio-tooltip-F-family |Open+Sans|100|OxiAddonsAudio-tooltip-F-style |normal:1.3|left:0()0()2()#ffffff:|||||||||OxiAddonsAudio-tooltip-W |70|70|70|OxiAddonsAudio-tooltip-H |25|25|25|OxiAddonsAudio-tooltip-M-top |0|0|0|OxiAddonsAudio-tooltip-M-bottom |10|10|10|OxiAddonsAudio-tooltip-M-left |0|0|0|OxiAddonsAudio-tooltip-M-right |0|0|0|OxiAddonsAudio-PV-FS |16|16|16| OxiAddonsAudio-PV-C |#ffffff|OxiAddonsAudio-PV-LR |6|6|6|OxiAddonsAudio-PV-TB |-6|-6|-6|||||||||OxiAddonsAudio-PV-M-top |4|4|4|OxiAddonsAudio-PV-M-bottom |0|0|0|OxiAddonsAudio-PV-M-left |5|5|5|OxiAddonsAudio-PV-M-right |5|5|5|OxiAddonsAudio-volume-FS |16|16|16| OxiAddonsAudio-volume-C |#ffffff| OxiAddonsAudio-v-progress-BG |#fafafa|||||||||OxiAddonsAudio-V-W |100|80|50|OxiAddonsAudio-V-H |10|10|10|OxiAddonsAudio-v-progress-M-top |-6|-6|-6|OxiAddonsAudio-v-progress-M-bottom |-6|-6|-6|OxiAddonsAudio-v-progress-M-left |-6|-6|-6|OxiAddonsAudio-v-progress-M-right |-6|-6|-6| OxiAddonsAudio-v-progress-active-BG |#24bdff|OxiAddonsAudio-VH-W |18|18|18|OxiAddonsAudio-VH-H |18|18|18|||||OxiAddonsAudio-VH-TB |-4|-4|-4| OxiAddonsAudio-VH-BG |rgba(255, 255, 255, 1)|OxiAddonsAudio-VH-B |1|none|| OxiAddonsAudio-VH-BC |#ffffff|OxiAddonsAudio-VH-BR-top |50|50|50|OxiAddonsAudio-VH-BR-bottom |50|50|50|OxiAddonsAudio-VH-BR-left |50|50|50|OxiAddonsAudio-VH-BR-right |50|50|50|OxiAddonsAudio-FR-W |200|200|200|OxiAddonsAudio-FR-H |200|200|200| OxiAddonsAudio-TH-handle |false| OxiAddonsAudio-VH-handle |false|OxiAddonsAudio-progress-H |10|10|10|OxiAddonsAudio-v-progress-R-top |7|7|7|OxiAddonsAudio-v-progress-R-bottom |7|7|7|OxiAddonsAudio-v-progress-R-left |7|7|7|OxiAddonsAudio-v-progress-R-right |7|7|7|OxiAddonsAudio-FR-P-top |30|30|30|OxiAddonsAudio-FR-P-bottom |5|5|5|OxiAddonsAudio-FR-P-left |5|5|5|OxiAddonsAudio-FR-P-right |5|5|5|OxiAddonsAudio-FR-BR-top |100|100|100|OxiAddonsAudio-FR-BR-bottom |100|100|100|OxiAddonsAudio-FR-BR-left |100|100|100|OxiAddonsAudio-FR-BR-right |100|100|100|OxiAddonsAudio-G-BS |rgba(125, 125, 125, 0.75)|0|6|12|-5|OxiAddonsAudio-title-FS |28|28|28|OxiAddonsAudio-title-F-family |Hammersmith+One|100|OxiAddonsAudio-title-F-style |normal:1.3|center:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-title-C |#ffffff|OxiAddonsAudio-title-P-top |10|10|10|OxiAddonsAudio-title-P-bottom |0|0|0|OxiAddonsAudio-title-P-left |6|6|6|OxiAddonsAudio-title-P-right |5|5|5|OxiAddonsAudio-author-FS |16|16|16|OxiAddonsAudio-author-F-family |Open+Sans|100|OxiAddonsAudio-author-F-style |normal:1.3|center:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-author-C |#fff2f2|OxiAddonsAudio-author-P-top |0|0|0|OxiAddonsAudio-author-P-bottom |15|15|15|OxiAddonsAudio-author-P-left |5|5|5|OxiAddonsAudio-author-P-right |5|5|5|OxiAddonsAudio-PBTN-W |70|70|70|OxiAddonsAudio-PBTN-H |70|70|70| OxiAddonsAudio-PBTN-BG |rgba(131,185,255,1.00)|||#|| OxiAddonsAudio-upload-audio ||#||https://www.oxilab.org/wp-content/uploads/2019/03/Despacito_Marimba_Cover-632227.mp3||#|| OxiAddonsAudio-PBTN-I ||#||f04c||#|| OxiAddonsAudio-SBTN-I ||#||f04b||#|| OxiAddonsAudio-PV-I ||#||f6a9||#|| OxiAddonsAudio-volume-I ||#||f028||#|| OxiAddonsAudio-title-TA ||#||I Took a Pill in Ibiza||#|| OxiAddonsAudio-author-TA ||#||By: Mike Posner||#|| OxiAddonsAudio-FR-img ||#||https://www.oxilab.org/wp-content/uploads/2019/02/pic.jpg||#|| ||#||',
            'Style 03OXIIMPORTaudio_playersOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG ||OxiAddonsAudio-G-BG|linear-gradient(90deg, rgba(56,55,55,1.00) 0%,rgba(58,68,128,1.00) 100%)|||OxiAddonsAudio-G-W |500|500|500|OxiAddonsAudio-G-P-top |5|5|5|OxiAddonsAudio-G-P-bottom |5|5|5|OxiAddonsAudio-G-P-left |5|5|5|OxiAddonsAudio-G-P-right |5|5|5| OxiAddonsAudio-G-Animation|bounce|0.5:false:false:500:10:0.2|0.5//|| OxiAddonsAudio-audio-BG |rgba(191,19,131,0.00)| OxiAddonsAudio-audio-playpause |true| OxiAddonsAudio-audio-current |true| OxiAddonsAudio-audio-volume |true| OxiAddonsAudio-audio-progress |true|OxiAddonsAudio-audio-H |80|80|80|||||||||||||OxiAddonsAudio-G-R-top |0|0|0|OxiAddonsAudio-G-R-bottom |0|0|0|OxiAddonsAudio-G-R-left |0|0|0|OxiAddonsAudio-G-R-right |0|0|0|OxiAddonsAudio-PBTN-FS |22|22|22| OxiAddonsAudio-PBTN-C |#fafafa|OxiAddonsAudio-tooltip-R-top |1|1|1|OxiAddonsAudio-tooltip-R-bottom |1|1|1|OxiAddonsAudio-tooltip-R-left |1|1|1|OxiAddonsAudio-tooltip-R-right |1|1|1|OxiAddonsAudio-PBTN-M-top |0|0|0|OxiAddonsAudio-PBTN-M-bottom |0|0|0|OxiAddonsAudio-PBTN-M-left |0|0|0|OxiAddonsAudio-PBTN-M-right |0|0|0|OxiAddonsAudio-SBTN-FS |22|22|22| OxiAddonsAudio-SBTN-C |#ffffff|OxiAddonsAudio-time-FS |16|16|16| OxiAddonsAudio-time-C |#ffffff|OxiAddonsAudio-time-F-family |Open+Sans|100|OxiAddonsAudio-time-F-style |normal:1.3|left:0()0()2()#ffffff:|OxiAddonsAudio-time-LR |70|70|70|OxiAddonsAudio-time-TB |10|10|10||||||||||||||||||||||||| OxiAddonsAudio-progress-BG |#ffffff|OxiAddonsAudio-progress-P-top |0|0|0|OxiAddonsAudio-progress-P-bottom |0|0|0|OxiAddonsAudio-progress-P-left |0|0|0|OxiAddonsAudio-progress-P-right |0|0|0|OxiAddonsAudio-progress-M-top |0|0|0|OxiAddonsAudio-progress-M-bottom |0|0|0|OxiAddonsAudio-progress-M-left |10|10|10|OxiAddonsAudio-progress-M-right |10|10|10|OxiAddonsAudio-TH-W |15|15|15|OxiAddonsAudio-TH-H |15|15|15|OxiAddonsAudio-TH-LR |-5|-5|-5|OxiAddonsAudio-TH-TB |-5|-5|-5| OxiAddonsAudio-TH-BG |rgba(245,245,245,1.00)|OxiAddonsAudio-TH-B |2|solid|| OxiAddonsAudio-TH-BC |#ffffff|OxiAddonsAudio-TH-BR-top |50|50|50|OxiAddonsAudio-TH-BR-bottom |50|50|50|OxiAddonsAudio-TH-BR-left |50|50|50|OxiAddonsAudio-TH-BR-right |50|50|50| OxiAddonsAudio-loading-BG |#e6e6e6| OxiAddonsAudio-current-BG |#ff6f00| ||OxiAddonsAudio-tooltip-FS |16|16|16| OxiAddonsAudio-tooltip-BG |rgba(255, 255, 255, 1)| OxiAddonsAudio-tooltip-C |#333333|OxiAddonsAudio-tooltip-F-family |Open+Sans|100|OxiAddonsAudio-tooltip-F-style |normal:1.3|left:0()0()2()#ffffff:|||||||||OxiAddonsAudio-tooltip-W |70|70|70|OxiAddonsAudio-tooltip-H |25|25|25|OxiAddonsAudio-tooltip-M-top |0|0|0|OxiAddonsAudio-tooltip-M-bottom |10|10|10|OxiAddonsAudio-tooltip-M-left |0|0|0|OxiAddonsAudio-tooltip-M-right |0|0|0|OxiAddonsAudio-PV-FS |16|16|16| OxiAddonsAudio-PV-C |#ffffff|OxiAddonsAudio-PV-LR |6|6|6|OxiAddonsAudio-PV-TB |-6|-6|-6|||||||||OxiAddonsAudio-PV-M-top |0|0|0|OxiAddonsAudio-PV-M-bottom |0|0|0|OxiAddonsAudio-PV-M-left |5|5|5|OxiAddonsAudio-PV-M-right |5|5|5|OxiAddonsAudio-volume-FS |16|16|16| OxiAddonsAudio-volume-C |#ffffff| OxiAddonsAudio-v-progress-BG |#e6e6e6|||||||||OxiAddonsAudio-V-W |80|60|40|OxiAddonsAudio-V-H |5|5|5|OxiAddonsAudio-v-progress-M-top |-4|-4|-4|OxiAddonsAudio-v-progress-M-bottom |-4|-4|-4|OxiAddonsAudio-v-progress-M-left |-4|-4|-4|OxiAddonsAudio-v-progress-M-right |-4|-4|-4| OxiAddonsAudio-v-progress-active-BG |#ffffff|OxiAddonsAudio-VH-W |15|15|15|OxiAddonsAudio-VH-H |15|15|15|||||OxiAddonsAudio-VH-TB |-5|-5|-5| OxiAddonsAudio-VH-BG |rgba(255, 255, 255, 1)|OxiAddonsAudio-VH-B |1|none|| OxiAddonsAudio-VH-BC |#ffffff|OxiAddonsAudio-VH-BR-top |50|50|50|OxiAddonsAudio-VH-BR-bottom |50|50|50|OxiAddonsAudio-VH-BR-left |50|50|50|OxiAddonsAudio-VH-BR-right |50|50|50|OxiAddonsAudio-FR-W |300|300|300|OxiAddonsAudio-FR-H |170|170|170| OxiAddonsAudio-TH-handle |false| OxiAddonsAudio-VH-handle |false|OxiAddonsAudio-progress-H |5|5|5|OxiAddonsAudio-v-progress-R-top |0|0|0|OxiAddonsAudio-v-progress-R-bottom |0|0|0|OxiAddonsAudio-v-progress-R-left |0|0|0|OxiAddonsAudio-v-progress-R-right |0|0|0|||||||||||||||||OxiAddonsAudio-FR-BR-top |0|0|0|OxiAddonsAudio-FR-BR-bottom |0|0|0|OxiAddonsAudio-FR-BR-left |0|0|0|OxiAddonsAudio-FR-BR-right |0|0|0|OxiAddonsAudio-G-BS |rgba(125, 125, 125, 0.75)|0|6|12|-5|OxiAddonsAudio-title-FS |32|26|18|OxiAddonsAudio-title-F-family |Nunito|lighter|OxiAddonsAudio-title-F-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-title-C |#ffffff|OxiAddonsAudio-title-P-top |10|10|10|OxiAddonsAudio-title-P-bottom |0|0|0|OxiAddonsAudio-title-P-left |20|20|20|OxiAddonsAudio-title-P-right |5|5|5|OxiAddonsAudio-author-FS |16|16|16|OxiAddonsAudio-author-F-family |Lato|100|OxiAddonsAudio-author-F-style |Open+Sans:1.3|left:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-author-C |#ffffff|OxiAddonsAudio-author-P-top |15|15|15|OxiAddonsAudio-author-P-bottom |0|0|0|OxiAddonsAudio-author-P-left |20|20|20|OxiAddonsAudio-author-P-right |5|5|5|OxiAddonsAudio-PBTN-W |60|60|60|OxiAddonsAudio-PBTN-H |60|60|60| OxiAddonsAudio-PBTN-BG |rgba(255,115,0,0.00)|||#|| OxiAddonsAudio-upload-audio ||#||https://www.oxilab.org/wp-content/uploads/2019/03/Despacito_Marimba_Cover-632227.mp3||#|| OxiAddonsAudio-PBTN-I ||#||f28b||#|| OxiAddonsAudio-SBTN-I ||#||f144||#|| OxiAddonsAudio-PV-I ||#||f6a9||#|| OxiAddonsAudio-volume-I ||#||f028||#|| OxiAddonsAudio-title-TA ||#||Girls Like You||#|| OxiAddonsAudio-author-TA ||#||By: Maroon 5||#|| OxiAddonsAudio-FR-img ||#||https://www.oxilab.org/wp-content/uploads/2019/01/asadas.jpeg||#|| ||#||',
            'Style 04OXIIMPORTaudio_playersOXIIMPORTstyle-4OXIIMPORToxi-addons-preview-BG ||OxiAddonsAudio-G-BG|rgba(0,0,0,0.60)|https://www.oxilab.org/wp-content/uploads/2019/02/8-1-1170x750.jpg||OxiAddonsAudio-G-W |500|500|500|OxiAddonsAudio-G-P-top |5|5|5|OxiAddonsAudio-G-P-bottom |5|5|5|OxiAddonsAudio-G-P-left |5|5|5|OxiAddonsAudio-G-P-right |5|5|5| OxiAddonsAudio-G-Animation|bounce|0.5:false:false:500:10:0.2|0.5//|| OxiAddonsAudio-audio-BG |rgba(242,242,242,1.00)| OxiAddonsAudio-audio-playpause |true| OxiAddonsAudio-audio-current |true| OxiAddonsAudio-audio-volume |true| OxiAddonsAudio-audio-progress |true|OxiAddonsAudio-audio-H |200|200|200|||||||||||||OxiAddonsAudio-G-R-top |0|0|0|OxiAddonsAudio-G-R-bottom |0|0|0|OxiAddonsAudio-G-R-left |0|0|0|OxiAddonsAudio-G-R-right |0|0|0|OxiAddonsAudio-PBTN-FS |18|18|18| OxiAddonsAudio-PBTN-C |#fafafa|OxiAddonsAudio-tooltip-R-top |1|1|1|OxiAddonsAudio-tooltip-R-bottom |1|1|1|OxiAddonsAudio-tooltip-R-left |1|1|1|OxiAddonsAudio-tooltip-R-right |1|1|1|OxiAddonsAudio-PBTN-M-top |0|0|0|OxiAddonsAudio-PBTN-M-bottom |0|0|0|OxiAddonsAudio-PBTN-M-left |0|0|0|OxiAddonsAudio-PBTN-M-right |0|0|0|OxiAddonsAudio-SBTN-FS |18|18|18| OxiAddonsAudio-SBTN-C |#ffffff|OxiAddonsAudio-time-FS |60|60|32| OxiAddonsAudio-time-C |#ffffff|OxiAddonsAudio-time-F-family |Open+Sans|100|OxiAddonsAudio-time-F-style |normal:1.3|left:0()0()2()#ffffff:|OxiAddonsAudio-time-LR |35|35|38|OxiAddonsAudio-time-TB |40|40|40||||||||||||||||||||||||| OxiAddonsAudio-progress-BG |#ffffff|OxiAddonsAudio-progress-P-top |100|100|100|OxiAddonsAudio-progress-P-bottom |100|100|100|OxiAddonsAudio-progress-P-left |100|100|100|OxiAddonsAudio-progress-P-right |100|100|100|OxiAddonsAudio-progress-M-top |0|0|0|OxiAddonsAudio-progress-M-bottom |0|0|0|OxiAddonsAudio-progress-M-left |10|10|10|OxiAddonsAudio-progress-M-right |0|0|0|OxiAddonsAudio-TH-W |15|15|15|OxiAddonsAudio-TH-H |15|15|15|OxiAddonsAudio-TH-LR |-5|-5|-5|OxiAddonsAudio-TH-TB |-5|-5|-5| OxiAddonsAudio-TH-BG |rgba(245,245,245,1.00)|OxiAddonsAudio-TH-B |2|solid|| OxiAddonsAudio-TH-BC |#ffffff|OxiAddonsAudio-TH-BR-top |50|50|50|OxiAddonsAudio-TH-BR-bottom |50|50|50|OxiAddonsAudio-TH-BR-left |50|50|50|OxiAddonsAudio-TH-BR-right |50|50|50| OxiAddonsAudio-loading-BG |#e6e6e6| OxiAddonsAudio-current-BG |#ff6f00| ||OxiAddonsAudio-tooltip-FS |16|16|16| OxiAddonsAudio-tooltip-BG |rgba(255, 255, 255, 1)| OxiAddonsAudio-tooltip-C |#333333|OxiAddonsAudio-tooltip-F-family |Open+Sans|100|OxiAddonsAudio-tooltip-F-style |normal:1.3|left:0()0()2()#ffffff:|||||||||OxiAddonsAudio-tooltip-W |70|70|70|OxiAddonsAudio-tooltip-H |25|25|25|OxiAddonsAudio-tooltip-M-top |0|0|0|OxiAddonsAudio-tooltip-M-bottom |10|10|10|OxiAddonsAudio-tooltip-M-left |0|0|0|OxiAddonsAudio-tooltip-M-right |0|0|0|OxiAddonsAudio-PV-FS |16|16|16| OxiAddonsAudio-PV-C |#ffffff|||||||||||||||||OxiAddonsAudio-PV-M-top |0|0|0|OxiAddonsAudio-PV-M-bottom |0|0|0|OxiAddonsAudio-PV-M-left |5|5|5|OxiAddonsAudio-PV-M-right |5|5|5|OxiAddonsAudio-volume-FS |16|16|16| OxiAddonsAudio-volume-C |#ffffff| OxiAddonsAudio-v-progress-BG |#e6e6e6|||||||||OxiAddonsAudio-V-W |80|60|40|OxiAddonsAudio-V-H |5|5|5|OxiAddonsAudio-v-progress-M-top |-4|-4|-4|OxiAddonsAudio-v-progress-M-bottom |-4|-4|-4|OxiAddonsAudio-v-progress-M-left |-4|-4|-4|OxiAddonsAudio-v-progress-M-right |-4|-4|-4| OxiAddonsAudio-v-progress-active-BG |#ffffff|OxiAddonsAudio-VH-W |15|15|15|OxiAddonsAudio-VH-H |15|15|15|||||OxiAddonsAudio-VH-TB |-5|-5|-5| OxiAddonsAudio-VH-BG |rgba(255, 255, 255, 1)|OxiAddonsAudio-VH-B |1|none|| OxiAddonsAudio-VH-BC |#ffffff|OxiAddonsAudio-VH-BR-top |50|50|50|OxiAddonsAudio-VH-BR-bottom |50|50|50|OxiAddonsAudio-VH-BR-left |50|50|50|OxiAddonsAudio-VH-BR-right |50|50|50||||||||| OxiAddonsAudio-TH-handle |true| OxiAddonsAudio-VH-handle |true|OxiAddonsAudio-progress-H |5|5|5|OxiAddonsAudio-v-progress-R-top |7|7|7|OxiAddonsAudio-v-progress-R-bottom |7|7|7|OxiAddonsAudio-v-progress-R-left |7|7|7|OxiAddonsAudio-v-progress-R-right |7|7|7|||||||||||||||||||||||||||||||||OxiAddonsAudio-G-BS |rgba(125, 125, 125, 0.75)|0|6|12|-5|OxiAddonsAudio-title-FS |26|26|22|OxiAddonsAudio-title-F-family |Ubuntu|bold|OxiAddonsAudio-title-F-style |normal:1.3|left:0()0()2()#ffffff:| OxiAddonsAudio-title-C |#303030|OxiAddonsAudio-title-P-top |10|10|10|OxiAddonsAudio-title-P-bottom |0|0|0|OxiAddonsAudio-title-P-left |10|10|10|OxiAddonsAudio-title-P-right |5|5|5|OxiAddonsAudio-author-FS |16|18|14|OxiAddonsAudio-author-F-family |Lato|100|OxiAddonsAudio-author-F-style |normal:1.3|left:0()0()2()#ffffff:| OxiAddonsAudio-author-C |#7a7a7a|OxiAddonsAudio-author-P-top |5|5|5|OxiAddonsAudio-author-P-bottom |15|15|15|OxiAddonsAudio-author-P-left |10|10|10|OxiAddonsAudio-author-P-right |5|5|5|OxiAddonsAudio-PBTN-W |40|40|40|OxiAddonsAudio-PBTN-H |40|40|40| OxiAddonsAudio-PBTN-BG |rgba(3,130,128,0.09)|||#|| OxiAddonsAudio-upload-audio ||#||https://www.oxilab.org/wp-content/uploads/2019/03/Despacito_Marimba_Cover-632227.mp3||#|| OxiAddonsAudio-PBTN-I ||#||f04c||#|| OxiAddonsAudio-SBTN-I ||#||f04b||#|| OxiAddonsAudio-PV-I ||#||f6a9||#|| OxiAddonsAudio-volume-I ||#||f028||#|| OxiAddonsAudio-title-TA ||#||Closer||#|| OxiAddonsAudio-author-TA ||#||By: Chainsmokers - ft. Halsey||#|| ||#||',
            'Style 05OXIIMPORTaudio_playersOXIIMPORTstyle-5OXIIMPORToxi-addons-preview-BG ||OxiAddonsAudio-G-BG|linear-gradient(90deg, rgba(100,220,250,1.00) 13%,rgba(90,96,181,1.00) 79%)|||OxiAddonsAudio-G-W |550|550|550|OxiAddonsAudio-G-P-top |20|20|20|OxiAddonsAudio-G-P-bottom |20|20|20|OxiAddonsAudio-G-P-left |20|20|20|OxiAddonsAudio-G-P-right |20|20|20| OxiAddonsAudio-G-Animation|bounce|0.5:false:false:500:10:0.2|0.5//|| OxiAddonsAudio-audio-BG |rgba(191,19,131,0.00)| OxiAddonsAudio-audio-playpause |true| OxiAddonsAudio-audio-current |true| OxiAddonsAudio-audio-volume |true| OxiAddonsAudio-audio-progress |true|OxiAddonsAudio-audio-H |50|50|50|||||||||||||OxiAddonsAudio-G-R-top |0|0|0|OxiAddonsAudio-G-R-bottom |0|0|0|OxiAddonsAudio-G-R-left |0|0|0|OxiAddonsAudio-G-R-right |0|0|0|OxiAddonsAudio-PBTN-FS |40|40|28| OxiAddonsAudio-PBTN-C |#fafafa|OxiAddonsAudio-tooltip-R-top |1|1|1|OxiAddonsAudio-tooltip-R-bottom |1|1|1|OxiAddonsAudio-tooltip-R-left |1|1|1|OxiAddonsAudio-tooltip-R-right |1|1|1|OxiAddonsAudio-PBTN-M-top |0|0|0|OxiAddonsAudio-PBTN-M-bottom |0|0|0|OxiAddonsAudio-PBTN-M-left |0|0|0|OxiAddonsAudio-PBTN-M-right |0|0|0|OxiAddonsAudio-SBTN-FS |40|40|40| OxiAddonsAudio-SBTN-C |#ffffff||||||||||||||||||||||||||||||||||||||||||||| OxiAddonsAudio-progress-BG |#ffffff|OxiAddonsAudio-progress-P-top |0|0|0|OxiAddonsAudio-progress-P-bottom |0|0|0|OxiAddonsAudio-progress-P-left |0|0|0|OxiAddonsAudio-progress-P-right |0|0|0|OxiAddonsAudio-progress-M-top |0|0|0|OxiAddonsAudio-progress-M-bottom |0|0|0|OxiAddonsAudio-progress-M-left |15|15|15|OxiAddonsAudio-progress-M-right |10|10|10|OxiAddonsAudio-TH-W |15|15|15|OxiAddonsAudio-TH-H |15|15|15|OxiAddonsAudio-TH-LR |-5|-5|-5|OxiAddonsAudio-TH-TB |-5|-5|-5| OxiAddonsAudio-TH-BG |rgba(245,245,245,1.00)|OxiAddonsAudio-TH-B |2|solid|| OxiAddonsAudio-TH-BC |#ffffff|OxiAddonsAudio-TH-BR-top |50|50|50|OxiAddonsAudio-TH-BR-bottom |50|50|50|OxiAddonsAudio-TH-BR-left |50|50|50|OxiAddonsAudio-TH-BR-right |50|50|50| OxiAddonsAudio-loading-BG |#e6e6e6| OxiAddonsAudio-current-BG |#00a6ff| ||OxiAddonsAudio-tooltip-FS |16|16|16| OxiAddonsAudio-tooltip-BG |rgba(255, 255, 255, 1)| OxiAddonsAudio-tooltip-C |#333333|OxiAddonsAudio-tooltip-F-family |Open+Sans|100|OxiAddonsAudio-tooltip-F-style |normal:1.3|left:0()0()2()#ffffff:|||||||||OxiAddonsAudio-tooltip-W |70|70|70|OxiAddonsAudio-tooltip-H |25|25|25|OxiAddonsAudio-tooltip-M-top |0|0|0|OxiAddonsAudio-tooltip-M-bottom |10|10|10|OxiAddonsAudio-tooltip-M-left |0|0|0|OxiAddonsAudio-tooltip-M-right |0|0|0|OxiAddonsAudio-PV-FS |16|16|16| OxiAddonsAudio-PV-C |#ffffff|||||||||||||||||OxiAddonsAudio-PV-M-top |0|0|0|OxiAddonsAudio-PV-M-bottom |0|0|0|OxiAddonsAudio-PV-M-left |5|5|5|OxiAddonsAudio-PV-M-right |5|5|5|OxiAddonsAudio-volume-FS |16|16|16| OxiAddonsAudio-volume-C |#ffffff| ||||||||||||||||||||||||||||||||||||OxiAddonsAudio-PBTN-LR |-25|-25|-25|OxiAddonsAudio-PBTN-TB |40|40|40|||||||||||||||||||||||||||||||||OxiAddonsAudio-FR-W |200|200|200|OxiAddonsAudio-FR-H |130|130|130|||||OxiAddonsAudio-progress-H |5|5||||||||||||||||||||||||||||||||||OxiAddonsAudio-FR-BR-top |0|0|0|OxiAddonsAudio-FR-BR-bottom |0|0|0|OxiAddonsAudio-FR-BR-left |0|0|0|OxiAddonsAudio-FR-BR-right |0|0|0|OxiAddonsAudio-G-BS |rgba(133, 133, 133, 1)|0|5|12|-3|OxiAddonsAudio-title-FS |26|18||OxiAddonsAudio-title-F-family |Oswald|normal|OxiAddonsAudio-title-F-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-title-C |#000000|OxiAddonsAudio-title-P-top |10|10|0|OxiAddonsAudio-title-P-bottom |0|0|0|OxiAddonsAudio-title-P-left |15|15|15|OxiAddonsAudio-title-P-right |5|5|0|OxiAddonsAudio-author-FS |16|16|16|OxiAddonsAudio-author-F-family |Lato|100|OxiAddonsAudio-author-F-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0):| OxiAddonsAudio-author-C |#000000|OxiAddonsAudio-author-P-top |5|5|5|OxiAddonsAudio-author-P-bottom |0|0|0|OxiAddonsAudio-author-P-left |15|15|15|OxiAddonsAudio-author-P-right |5|5|0|OxiAddonsAudio-PBTN-W |60|60||OxiAddonsAudio-PBTN-H |60|60|| OxiAddonsAudio-PBTN-BG |rgba(89,89,89,0.04)|||#|| OxiAddonsAudio-upload-audio ||#||https://www.oxilab.org/wp-content/uploads/2019/03/Despacito_Marimba_Cover-632227.mp3||#|| OxiAddonsAudio-PBTN-I ||#||f28b||#|| OxiAddonsAudio-SBTN-I ||#||f144||#|| OxiAddonsAudio-PV-I ||#||f6a9||#|| OxiAddonsAudio-volume-I ||#||f028||#|| OxiAddonsAudio-title-TA ||#||Galway Girl||#|| OxiAddonsAudio-author-TA ||#||By: Ed Sheeran||#|| OxiAddonsAudio-FR-img ||#||https://www.oxilab.org/wp-content/uploads/2019/04/EdSheeranDivide.jpg||#|| ||#||',
        );
    }
}
