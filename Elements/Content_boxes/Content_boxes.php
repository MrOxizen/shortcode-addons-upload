<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Content_boxes;

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

class Content_boxes extends Elements_Frontend {

    public function pre_active() {
        return array('style-1');
    }

    public function templates() {
        return array(
            'Style 1 OXIIMPORTcontent_boxesOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|OxiAddCB-width|300|300|300|||||OxiAddCB-body|rgba(117, 80, 186, 1)|||OxiAddCB-border-top |0|0|0|OxiAddCB-border-bottom |0|0|0|OxiAddCB-border-left |0|0|0|OxiAddCB-border-right |0|0|0|OxiAddCB-border |dashed|#ffffff||OxiAddCB-radius-top |2|2|2|OxiAddCB-radius-bottom |2|2|2|OxiAddCB-radius-left |2|2|2|OxiAddCB-radius-right |2|2|2|OxiAddCB-padding-top |40|40|40|OxiAddCB-padding-bottom |40|40|40|OxiAddCB-padding-left |20|20|20|OxiAddCB-padding-right |20|20|20|OxiAddCB-margin-top |10|10|10|OxiAddCB-margin-bottom |10|10|10|OxiAddCB-margin-left |10|10|10|OxiAddCB-margin-right |10|10|10|OxiAddCB-box-shadow |rgba(191, 191, 191, 1)|0|15|18|0|OxiAddCB-animation||2:false:false:500:10:0.2|0//|OxiAddCB-button-size|16|16|16| OxiAddCB-button-color |#ffffff| OxiAddCB-button-al |center|OxiAddCB-button-padding-top |9|9|9|OxiAddCB-button-padding-bottom |9|9|9|OxiAddCB-button-padding-left |20|20|20|OxiAddCB-button-padding-right |20|20|20|OxiAddCB-heading-size|22|22|22| OxiAddCB-heading-color |#ffffff|OxiAddCB-heading-family |Open+Sans|600|OxiAddCB-heading-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddCB-heading-padding-top |10|10|10|OxiAddCB-heading-padding-bottom |10|10|10|OxiAddCB-heading-padding-left |5|5|5|OxiAddCB-heading-padding-right |5|5|5|OxiAddCB-content-size|16|16|16| OxiAddCB-content-color |#ffffff|OxiAddCB-content-family |Open+Sans|300|OxiAddCB-content-style |normal:1.5|center:0()0()0()#ffffff:|OxiAddCB-content-padding-top |10|10|10|OxiAddCB-content-padding-bottom |10|10|10|OxiAddCB-content-padding-left |5|5|5|OxiAddCB-content-padding-right |5|5|5|OxiAddCB-i-animation||2:false:false:500:10:0.2|0//| OxiAddCB-button-hover-color |#886bbf| OxiAddCB-button-bgcolor |rgba(136, 107, 191, 1)| OxiAddCB-button-hover-bgcolor |rgba(255,255,255,1.00)|OxiAddCB-button-margin-top |20|20|20|OxiAddCB-button-margin-bottom |20|20|20|OxiAddCB-button-margin-left |20|20|20|OxiAddCB-button-margin-right |20|20|20|OxiAddCB-button-family |Open+Sans|500|OxiAddCB-button-style |normal:1.5|center:0()0()0()#ffffff:|OxiAddCB-button-border-top |0|0|0|OxiAddCB-button-border-bottom |0|0|0|OxiAddCB-button-border-left |0|0|0|OxiAddCB-button-border-right |0|0|0|OxiAddCB-button-border |solid|#0776ad||OxiAddCB-button-radius-top |5|5|5|OxiAddCB-button-radius-bottom |5|5|5|OxiAddCB-button-radius-left |5|5|5|OxiAddCB-button-radius-right |5|5|5|OxiAddCB-hover-button-border-top |0|0|0|OxiAddCB-hover-button-border-bottom |0|0|0|OxiAddCB-hover-button-border-left |0|0|0|OxiAddCB-hover-button-border-right |0|0|0|OxiAddCB-hover-button-border |solid|#0776ad||OxiAddCB-hover-button-radius-top |5|5|5|OxiAddCB-hover-button-radius-bottom |5|5|5|OxiAddCB-hover-button-radius-left |5|5|5|OxiAddCB-hover-button-radius-right |5|5|5| OxiAddCB-button-link-opening |_blank|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1|||#|| ||#|||##OXISTYLE####OXIDATA####OXIDATA####OXIDATA##',
            'Style 2 Layout 2OXIIMPORTheadersOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |right|OxiAddonsHeaders-G-M-top |0|0|0|OxiAddonsHeaders-G-M-bottom |0|0|0|OxiAddonsHeaders-G-M-left |0|0|0|OxiAddonsHeaders-G-M-right |0|0|0| OxiAddonsHeaders-LS-BGC |linear-gradient(45deg, rgba(255,92,149,1.00) 0%,rgba(206,43,255,1.00) 99%)|OxiAddonsHeaders-LS-P-top |100|100|100|OxiAddonsHeaders-LS-P-bottom |100|100|100|OxiAddonsHeaders-LS-P-left |20|20|20|OxiAddonsHeaders-LS-P-right |20|20|20|OxiAddonsHeaders-RS-BG|linear-gradient(315deg, rgba(115,240,57,0.79) 0%,rgba(199,24,120,0.50) 97%)|https://www.oxilab.org/wp-content/uploads/2019/01/asadas.jpeg||OxiAddonsHeaders-RS-P-top |100|100|100|OxiAddonsHeaders-RS-P-bottom |100|100|100|OxiAddonsHeaders-RS-P-left |20|20|20|OxiAddonsHeaders-RS-P-right |20|20|20|OxiAddonsHeaders-I-FS |80|80|80| OxiAddonsHeaders-I-TC |#ffffff| OxiAddonsHeaders-I-HTC |#c630d1|OxiAddonsHeaders-I-P-top |0|0|0|OxiAddonsHeaders-I-P-bottom |0|0|0|OxiAddonsHeaders-I-P-left |0|0|0|OxiAddonsHeaders-I-P-right |0|0|0| OxiAddonsHeaders-I-Animation||0.5|0.5//|| OxiAddonsHeaders-I-PS |center|OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Lato|100|OxiAddonsHeaders-SD-F-style |normal:1.3|left:0()0()0()#ffffff| OxiAddonsHeaders-SD-C |#e8e8e8|OxiAddonsHeaders-SD-P-top |10|10|10|OxiAddonsHeaders-SD-P-bottom |20|20|20|OxiAddonsHeaders-SD-P-left |0|0|0|OxiAddonsHeaders-SD-P-right |0|0|0| OxiAddonsHeaders-SD-Animation||0.5|0.5//||OxiAddonsHeaders-H-T-FS |45|45|45|OxiAddonsHeaders-H-T-F-family |Lato|700|OxiAddonsHeaders-H-T-F-style |normal:1.3|left:0()0()0()#ffffff| OxiAddonsHeaders-H-T-C |#ffffff|OxiAddonsHeaders-H-T-P-top |10|10|10|OxiAddonsHeaders-H-T-P-bottom |15|15|15|OxiAddonsHeaders-H-T-P-left |0|0|0|OxiAddonsHeaders-H-T-P-right |0|0|0| OxiAddonsHeaders-H-T-Animation||0.5|0.5//||OxiAddonsHeaders-H-O-FS |18|18|18|OxiAddonsHeaders-H-O-F-family |Lato|bold|OxiAddonsHeaders-H-O-F-style |normal:1.3|left:0()0()0()#ffffff| OxiAddonsHeaders-H-O-C |#ffffff|OxiAddonsHeaders-H-O-P-top |5|5|5|OxiAddonsHeaders-H-O-P-bottom |5|5|5|OxiAddonsHeaders-H-O-P-left |0|0|0|OxiAddonsHeaders-H-O-P-right |0|0|0| OxiAddonsHeaders-H-O-Animation||0.5|0.5//||OxiAddonsHeaders-Line-W |20|20|20|OxiAddonsHeaders-Line-H |2|2|2| OxiAddonsHeaders-Line-BG |#ffffff| OxiAddonsHeaders-Line-Animation||0.5|0.5//|| OxiAddonsHeaders-B-Tab || OxiAddonsHeaders-B-PS |left|OxiAddonsHeaders-B-FS |16|16|16|OxiAddonsHeaders-B-F-family |Lato|100|OxiAddonsHeaders-B-F-style |normal|| OxiAddonsHeaders-B-TC |#303030| OxiAddonsHeaders-B-BG |rgba(255,255,255,1.00)|OxiAddonsHeaders-B-BR-top |50|50|50|OxiAddonsHeaders-B-BR-bottom |50|50|50|OxiAddonsHeaders-B-BR-left |50|50|50|OxiAddonsHeaders-B-BR-right |50|50|50|OxiAddonsHeaders-B-BS |rgba(74, 74, 74, 1)|0|5|10|-2|OxiAddonsHeaders-B-B |1|none|| OxiAddonsHeaders-B-BC |#919191|OxiAddonsHeaders-B-P-top |10|10|10|OxiAddonsHeaders-B-P-bottom |10|10|10|OxiAddonsHeaders-B-P-left |30|30|30|OxiAddonsHeaders-B-P-right |30|30|30|OxiAddonsHeaders-B-M-top |5|5|5|OxiAddonsHeaders-B-M-bottom |5|5|5|OxiAddonsHeaders-B-M-left |5|5|5|OxiAddonsHeaders-B-M-right |5|5|5| OxiAddonsHeaders-B-HTC |#ffffff| OxiAddonsHeaders-B-HBG |rgba(65,219,196,1.00)| OxiAddonsHeaders-B-HBC |#a6a6a6|OxiAddonsHeaders-B-HBS |rgba(87, 87, 87, 1)|0|5|12|-3| OxiAddonsHeaders-B-Animation||0.5|0.5//||OxiAddonsHeaders-I-width |100|100|100|OxiAddonsHeaders-I-height |100|100|100| OxiAddonsHeaders-I-Bg |rgba(255,255,255,0.00)|OxiAddonsHeaders-I-B |0|none|| OxiAddonsHeaders-I-BC |#d1d1d1|OxiAddonsHeaders-I-radius-top |0|0|0|OxiAddonsHeaders-I-radius-bottom |0|0|0|OxiAddonsHeaders-I-radius-left |0|0|0|OxiAddonsHeaders-I-radius-right |0|0|0|OxiAddonsHeaders-I-BS |rgba(196, 196, 196, 0)|0|0|0|0| OxiAddonsHeaders-I-HTC |#c630d1| OxiAddonsHeaders-I-HBG |rgba(224,27,27,0.00)| OxiAddonsHeaders-I-HBC |#c4c4c4| OxiAddonsHeaders-I-Tab ||OxiAddonsHeaders-I-HBS |rgba(255, 255, 255, 0)|0|0|0|0|OxiAddonsHeaders-Line-position|left|||#|| OxiAddonsHeaders-I-IB ||#||fas fa-play-circle||#|| OxiAddonsHeaders-SD-TA ||#||Through brand strategy and design, we craft experiences that help brands stand out as well as stand for something.||#|| OxiAddonsHeaders-H-T-TB ||#||Designing World with Togetherness.||#|| OxiAddonsHeaders-H-O-TB ||#||DESIGN AGENCY||#|| OxiAddonsHeaders-B-BT ||#||learn more||#|| OxiAddonsHeaders-B-BL ||#||#||#|| OxiAddonsHeaders-I-ID ||#||iconplay||#|| OxiAddonsHeaders-I-Link ||#||#||#|| OxiAddonsHeaders-H-O-Letter ||#||6||#|| ||#||',
        );
    }

}
