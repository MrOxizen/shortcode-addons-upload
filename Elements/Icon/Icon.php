<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Accordion
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Icon extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1');
    }

    public function templates() {
        return array(
            'Style 1 Layout 1OXIIMPORTheadersOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |left|OxiAddonsHeaders-G-M-top |0|0|0|OxiAddonsHeaders-G-M-bottom |0|0|0|OxiAddonsHeaders-G-M-left |0|0|0|OxiAddonsHeaders-G-M-right |0|0|0| OxiAddonsHeaders-LS-BGC |rgba(217, 217, 217, 1)|OxiAddonsHeaders-LS-P-top |100|100|100|OxiAddonsHeaders-LS-P-bottom |100|100|100|OxiAddonsHeaders-LS-P-left |20|20|20|OxiAddonsHeaders-LS-P-right |20|20|20|OxiAddonsHeaders-RS-BG|rgba(37, 130, 222, 0.55)|https://www.oxilab.org/wp-content/uploads/2018/12/pexels-photo-1069798.jpeg||OxiAddonsHeaders-RS-P-top |100|100|100|OxiAddonsHeaders-RS-P-bottom |100|100|100|OxiAddonsHeaders-RS-P-left |20|20|20|OxiAddonsHeaders-RS-P-right |20|20|20|OxiAddonsHeaders-I-FS |80|80|80| OxiAddonsHeaders-I-TC |#f7f7f7| OxiAddonsHeaders-I-HTC |#999999|OxiAddonsHeaders-I-P-top |0|0|0|OxiAddonsHeaders-I-P-bottom |0|0|0|OxiAddonsHeaders-I-P-left |0|0|0|OxiAddonsHeaders-I-P-right |0|0|0| OxiAddonsHeaders-I-Animation||0.5|0.5//|| OxiAddonsHeaders-I-PS |center|OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Lato|200|OxiAddonsHeaders-SD-F-style |normal:1.3|left:0()0()0()#ffffff:1| OxiAddonsHeaders-SD-C |#787878|OxiAddonsHeaders-SD-P-top |10|10|10|OxiAddonsHeaders-SD-P-bottom |20|20|20|OxiAddonsHeaders-SD-P-left |5|5|5|OxiAddonsHeaders-SD-P-right |5|5|5| OxiAddonsHeaders-SD-Animation||0.5|0.5//||OxiAddonsHeaders-H-T-FS |45|45|45|OxiAddonsHeaders-H-T-F-family |Open+Sans|700|OxiAddonsHeaders-H-T-F-style |normal:1.3|left:0()0()0()#ffffff:1| OxiAddonsHeaders-H-T-C |#1a1a1a|OxiAddonsHeaders-H-T-P-top |10|10|10|OxiAddonsHeaders-H-T-P-bottom |15|15|15|OxiAddonsHeaders-H-T-P-left |0|0|0|OxiAddonsHeaders-H-T-P-right |0|0|0| OxiAddonsHeaders-H-T-Animation||0.5|0.5//||OxiAddonsHeaders-H-O-FS |18|18|18|OxiAddonsHeaders-H-O-F-family |Roboto|bold|OxiAddonsHeaders-H-O-F-style |normal:1.3|left:0()0()0()#ffffff:1| OxiAddonsHeaders-H-O-C |#6b6b6b|OxiAddonsHeaders-H-O-P-top |5|5|5|OxiAddonsHeaders-H-O-P-bottom |5|5|5|OxiAddonsHeaders-H-O-P-left |0|0|0|OxiAddonsHeaders-H-O-P-right |0|0|0| OxiAddonsHeaders-H-O-Animation||0.5|0.5//||OxiAddonsHeaders-Line-W |20|20|20|OxiAddonsHeaders-Line-H |2|2|2| OxiAddonsHeaders-Line-BG |#404040| OxiAddonsHeaders-Line-Animation||0.5|0.5//|| OxiAddonsHeaders-B-Tab || OxiAddonsHeaders-B-PS |left|OxiAddonsHeaders-B-FS |16|16|16|OxiAddonsHeaders-B-F-family |Roboto|400|OxiAddonsHeaders-B-F-style |normal|::| OxiAddonsHeaders-B-TC |#ffffff| OxiAddonsHeaders-B-BG |rgba(69, 69, 69, 1)|OxiAddonsHeaders-B-BR-top |0|0|0|OxiAddonsHeaders-B-BR-bottom |0|0|0|OxiAddonsHeaders-B-BR-left |0|0|0|OxiAddonsHeaders-B-BR-right |0|0|0|OxiAddonsHeaders-B-BS |rgba(189, 59, 59, 1)|0|0|0|0|OxiAddonsHeaders-B-B |1|none|| OxiAddonsHeaders-B-BC |#919191|OxiAddonsHeaders-B-P-top |10|10|10|OxiAddonsHeaders-B-P-bottom |10|10|10|OxiAddonsHeaders-B-P-left |30|30|30|OxiAddonsHeaders-B-P-right |30|30|30|OxiAddonsHeaders-B-M-top |5|5|5|OxiAddonsHeaders-B-M-bottom |5|5|5|OxiAddonsHeaders-B-M-left |5|5|5|OxiAddonsHeaders-B-M-right |5|5|5| OxiAddonsHeaders-B-HTC |#ffffff| OxiAddonsHeaders-B-HBG |rgba(133, 133, 133, 1)| OxiAddonsHeaders-B-HBC |#a6a6a6|OxiAddonsHeaders-B-HBS |rgba(201, 102, 102, 1)|0|0|0|0| OxiAddonsHeaders-B-Animation||0.5|0.5//||OxiAddonsHeaders-I-width |100|100|100|OxiAddonsHeaders-I-height |100|100|100| OxiAddonsHeaders-I-Bg |rgba(255, 255, 255, 0)|OxiAddonsHeaders-I-B |0|none|| OxiAddonsHeaders-I-BC |#d1d1d1|OxiAddonsHeaders-I-radius-top |0|0|0|OxiAddonsHeaders-I-radius-bottom |0|0|0|OxiAddonsHeaders-I-radius-left |0|0|0|OxiAddonsHeaders-I-radius-right |0|0|0|OxiAddonsHeaders-I-BS |rgba(196, 196, 196, 0)|0|0|0|0| OxiAddonsHeaders-I-HTC |#999999| OxiAddonsHeaders-I-HBG |rgba(224, 224, 224, 0)| OxiAddonsHeaders-I-HBC |#c4c4c4| OxiAddonsHeaders-I-Tab ||OxiAddonsHeaders-I-HBS |rgba(255, 255, 255, 0)|0|0|0|0|OxiAddonsHeaders-Line-position|left|||#|| OxiAddonsHeaders-I-IB ||#||fas fa-play-circle||#|| OxiAddonsHeaders-SD-TA ||#||Through brand strategy and design, we craft experiences that help brands stand out as well as stand for something.||#|| OxiAddonsHeaders-H-T-TB ||#||Designing World with Togetherness.||#|| OxiAddonsHeaders-H-O-TB ||#||DESIGN AGENCY||#|| OxiAddonsHeaders-B-BT ||#||Learn More||#|| OxiAddonsHeaders-B-BL ||#||#||#|| OxiAddonsHeaders-I-ID ||#||iconplay||#|| OxiAddonsHeaders-I-Link ||#||#||#|| OxiAddonsHeaders-H-O-Letter ||#||6||#|| ||#||',
            'Style 2 Layout 2OXIIMPORTheadersOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |right|OxiAddonsHeaders-G-M-top |0|0|0|OxiAddonsHeaders-G-M-bottom |0|0|0|OxiAddonsHeaders-G-M-left |0|0|0|OxiAddonsHeaders-G-M-right |0|0|0| OxiAddonsHeaders-LS-BGC |linear-gradient(45deg, rgba(255,92,149,1.00) 0%,rgba(206,43,255,1.00) 99%)|OxiAddonsHeaders-LS-P-top |100|100|100|OxiAddonsHeaders-LS-P-bottom |100|100|100|OxiAddonsHeaders-LS-P-left |20|20|20|OxiAddonsHeaders-LS-P-right |20|20|20|OxiAddonsHeaders-RS-BG|linear-gradient(315deg, rgba(115,240,57,0.79) 0%,rgba(199,24,120,0.50) 97%)|https://www.oxilab.org/wp-content/uploads/2019/01/asadas.jpeg||OxiAddonsHeaders-RS-P-top |100|100|100|OxiAddonsHeaders-RS-P-bottom |100|100|100|OxiAddonsHeaders-RS-P-left |20|20|20|OxiAddonsHeaders-RS-P-right |20|20|20|OxiAddonsHeaders-I-FS |80|80|80| OxiAddonsHeaders-I-TC |#ffffff| OxiAddonsHeaders-I-HTC |#c630d1|OxiAddonsHeaders-I-P-top |0|0|0|OxiAddonsHeaders-I-P-bottom |0|0|0|OxiAddonsHeaders-I-P-left |0|0|0|OxiAddonsHeaders-I-P-right |0|0|0| OxiAddonsHeaders-I-Animation||0.5|0.5//|| OxiAddonsHeaders-I-PS |center|OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Lato|100|OxiAddonsHeaders-SD-F-style |normal:1.3|left:0()0()0()#ffffff| OxiAddonsHeaders-SD-C |#e8e8e8|OxiAddonsHeaders-SD-P-top |10|10|10|OxiAddonsHeaders-SD-P-bottom |20|20|20|OxiAddonsHeaders-SD-P-left |0|0|0|OxiAddonsHeaders-SD-P-right |0|0|0| OxiAddonsHeaders-SD-Animation||0.5|0.5//||OxiAddonsHeaders-H-T-FS |45|45|45|OxiAddonsHeaders-H-T-F-family |Lato|700|OxiAddonsHeaders-H-T-F-style |normal:1.3|left:0()0()0()#ffffff| OxiAddonsHeaders-H-T-C |#ffffff|OxiAddonsHeaders-H-T-P-top |10|10|10|OxiAddonsHeaders-H-T-P-bottom |15|15|15|OxiAddonsHeaders-H-T-P-left |0|0|0|OxiAddonsHeaders-H-T-P-right |0|0|0| OxiAddonsHeaders-H-T-Animation||0.5|0.5//||OxiAddonsHeaders-H-O-FS |18|18|18|OxiAddonsHeaders-H-O-F-family |Lato|bold|OxiAddonsHeaders-H-O-F-style |normal:1.3|left:0()0()0()#ffffff| OxiAddonsHeaders-H-O-C |#ffffff|OxiAddonsHeaders-H-O-P-top |5|5|5|OxiAddonsHeaders-H-O-P-bottom |5|5|5|OxiAddonsHeaders-H-O-P-left |0|0|0|OxiAddonsHeaders-H-O-P-right |0|0|0| OxiAddonsHeaders-H-O-Animation||0.5|0.5//||OxiAddonsHeaders-Line-W |20|20|20|OxiAddonsHeaders-Line-H |2|2|2| OxiAddonsHeaders-Line-BG |#ffffff| OxiAddonsHeaders-Line-Animation||0.5|0.5//|| OxiAddonsHeaders-B-Tab || OxiAddonsHeaders-B-PS |left|OxiAddonsHeaders-B-FS |16|16|16|OxiAddonsHeaders-B-F-family |Lato|100|OxiAddonsHeaders-B-F-style |normal|| OxiAddonsHeaders-B-TC |#303030| OxiAddonsHeaders-B-BG |rgba(255,255,255,1.00)|OxiAddonsHeaders-B-BR-top |50|50|50|OxiAddonsHeaders-B-BR-bottom |50|50|50|OxiAddonsHeaders-B-BR-left |50|50|50|OxiAddonsHeaders-B-BR-right |50|50|50|OxiAddonsHeaders-B-BS |rgba(74, 74, 74, 1)|0|5|10|-2|OxiAddonsHeaders-B-B |1|none|| OxiAddonsHeaders-B-BC |#919191|OxiAddonsHeaders-B-P-top |10|10|10|OxiAddonsHeaders-B-P-bottom |10|10|10|OxiAddonsHeaders-B-P-left |30|30|30|OxiAddonsHeaders-B-P-right |30|30|30|OxiAddonsHeaders-B-M-top |5|5|5|OxiAddonsHeaders-B-M-bottom |5|5|5|OxiAddonsHeaders-B-M-left |5|5|5|OxiAddonsHeaders-B-M-right |5|5|5| OxiAddonsHeaders-B-HTC |#ffffff| OxiAddonsHeaders-B-HBG |rgba(65,219,196,1.00)| OxiAddonsHeaders-B-HBC |#a6a6a6|OxiAddonsHeaders-B-HBS |rgba(87, 87, 87, 1)|0|5|12|-3| OxiAddonsHeaders-B-Animation||0.5|0.5//||OxiAddonsHeaders-I-width |100|100|100|OxiAddonsHeaders-I-height |100|100|100| OxiAddonsHeaders-I-Bg |rgba(255,255,255,0.00)|OxiAddonsHeaders-I-B |0|none|| OxiAddonsHeaders-I-BC |#d1d1d1|OxiAddonsHeaders-I-radius-top |0|0|0|OxiAddonsHeaders-I-radius-bottom |0|0|0|OxiAddonsHeaders-I-radius-left |0|0|0|OxiAddonsHeaders-I-radius-right |0|0|0|OxiAddonsHeaders-I-BS |rgba(196, 196, 196, 0)|0|0|0|0| OxiAddonsHeaders-I-HTC |#c630d1| OxiAddonsHeaders-I-HBG |rgba(224,27,27,0.00)| OxiAddonsHeaders-I-HBC |#c4c4c4| OxiAddonsHeaders-I-Tab ||OxiAddonsHeaders-I-HBS |rgba(255, 255, 255, 0)|0|0|0|0|OxiAddonsHeaders-Line-position|left|||#|| OxiAddonsHeaders-I-IB ||#||fas fa-play-circle||#|| OxiAddonsHeaders-SD-TA ||#||Through brand strategy and design, we craft experiences that help brands stand out as well as stand for something.||#|| OxiAddonsHeaders-H-T-TB ||#||Designing World with Togetherness.||#|| OxiAddonsHeaders-H-O-TB ||#||DESIGN AGENCY||#|| OxiAddonsHeaders-B-BT ||#||learn more||#|| OxiAddonsHeaders-B-BL ||#||#||#|| OxiAddonsHeaders-I-ID ||#||iconplay||#|| OxiAddonsHeaders-I-Link ||#||#||#|| OxiAddonsHeaders-H-O-Letter ||#||6||#|| ||#||',
        );
    }

}