<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Button;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Button extends Elements_Frontend {

    public function pre_active() {
        return array('style-1', 'style-2', 'style-3');
    }

    public function templates() {
        return array(
            'Style 1OXIIMPORTheadersOXIIMPORTstyle-1OXIIMPORT',
            'Style 2OXIIMPORTheadersOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |right|OxiAddonsHeaders-G-M-top |0|0|0|OxiAddonsHeaders-G-M-bottom |0|0|0|OxiAddonsHeaders-G-M-left |0|0|0|OxiAddonsHeaders-G-M-right |0|0|0| OxiAddonsHeaders-LS-BGC |rgba(21,92,70,1.00)|OxiAddonsHeaders-LS-P-top |50|40|30|OxiAddonsHeaders-LS-P-bottom |70|30|40|OxiAddonsHeaders-LS-P-left |100|70|20|OxiAddonsHeaders-LS-P-right |100|70|20|OxiAddonsHeaders-RS-BG|rgba(37,124,222,0.00)|https://images.pexels.com/photos/53350/seoul-skyscraper-building-architecture-53350.jpeg||OxiAddonsHeaders-Line-position|center|||||||||||||||OxiAddonsHeaders-I-FS |80|80|80| OxiAddonsHeaders-I-TC |#f7f7f7| OxiAddonsHeaders-I-HTC |#999999|OxiAddonsHeaders-I-P-top |0|0|0|OxiAddonsHeaders-I-P-bottom |0|0|0|OxiAddonsHeaders-I-P-left |0|0|0|OxiAddonsHeaders-I-P-right |0|0|0| OxiAddonsHeaders-I-Animation||0.5|0.5//|| OxiAddonsHeaders-I-PS |center|OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Lato|100|OxiAddonsHeaders-SD-F-style |normal:1.3|center:0()0()0()#ffffff| OxiAddonsHeaders-SD-C |#f2f2f2|OxiAddonsHeaders-SD-P-top |10|10|10|OxiAddonsHeaders-SD-P-bottom |20|20|20|OxiAddonsHeaders-SD-P-left |0|0|0|OxiAddonsHeaders-SD-P-right |0|0|0| OxiAddonsHeaders-SD-Animation||0.5|0.5//||OxiAddonsHeaders-H-T-FS |45|45|45|OxiAddonsHeaders-H-T-F-family |Lato|700|OxiAddonsHeaders-H-T-F-style |normal:1.3|center:0()0()0()#ffffff| OxiAddonsHeaders-H-T-C |#ffffff|OxiAddonsHeaders-H-T-P-top |10|10|10|OxiAddonsHeaders-H-T-P-bottom |15|15|15|OxiAddonsHeaders-H-T-P-left |0|0|0|OxiAddonsHeaders-H-T-P-right |0|0|0| OxiAddonsHeaders-H-T-Animation||0.5|0.5//||OxiAddonsHeaders-H-O-FS |18|18|18|OxiAddonsHeaders-H-O-F-family |Lato|bold|OxiAddonsHeaders-H-O-F-style |normal:1.3|center:0()0()0()#ffffff| OxiAddonsHeaders-H-O-C |#e3e3e3|OxiAddonsHeaders-H-O-P-top |5|5|5|OxiAddonsHeaders-H-O-P-bottom |5|5|5|OxiAddonsHeaders-H-O-P-left |0|0|0|OxiAddonsHeaders-H-O-P-right |0|0|0| OxiAddonsHeaders-H-O-Animation||0.5|0.5//||OxiAddonsHeaders-Line-W |20|20|20|OxiAddonsHeaders-Line-H |2|2|2| OxiAddonsHeaders-Line-BG |#ffffff| OxiAddonsHeaders-Line-Animation||0.5|0.5//|| OxiAddonsHeaders-B-Tab || OxiAddonsHeaders-B-PS |center|OxiAddonsHeaders-B-FS |16|16|16|OxiAddonsHeaders-B-F-family |Lato|100|OxiAddonsHeaders-B-F-style |normal|| OxiAddonsHeaders-B-TC |#ffffff| OxiAddonsHeaders-B-BG |rgba(214,197,197,0.00)|OxiAddonsHeaders-B-BR-top |50|50|50|OxiAddonsHeaders-B-BR-bottom |50|50|50|OxiAddonsHeaders-B-BR-left |50|50|50|OxiAddonsHeaders-B-BR-right |50|50|50|OxiAddonsHeaders-B-BS |rgba(189, 59, 59, 1)|0|0|0|0|OxiAddonsHeaders-B-B |2|solid|| OxiAddonsHeaders-B-BC |#ffffff|OxiAddonsHeaders-B-P-top |15|15|15|OxiAddonsHeaders-B-P-bottom |15|15|15|OxiAddonsHeaders-B-P-left |50|50|50|OxiAddonsHeaders-B-P-right |50|50|50|OxiAddonsHeaders-B-M-top |5|5|5|OxiAddonsHeaders-B-M-bottom |5|5|5|OxiAddonsHeaders-B-M-left |5|5|5|OxiAddonsHeaders-B-M-right |5|5|5| OxiAddonsHeaders-B-HTC |#242424| OxiAddonsHeaders-B-HBG |rgba(255,255,255,1.00)| OxiAddonsHeaders-B-HBC |#ffffff|OxiAddonsHeaders-B-HBS |rgba(201, 106, 102, 0)|0|0|0|0| OxiAddonsHeaders-B-Animation||0.5|0.5//||OxiAddonsHeaders-I-width |100|100|100|OxiAddonsHeaders-I-height |100|100|100| OxiAddonsHeaders-I-Bg |rgba(255,255,255,0.00)|OxiAddonsHeaders-I-B |0|none|| OxiAddonsHeaders-I-BC |#d1d1d1|OxiAddonsHeaders-I-radius-top |0|0|0|OxiAddonsHeaders-I-radius-bottom |0|0|0|OxiAddonsHeaders-I-radius-left |0|0|0|OxiAddonsHeaders-I-radius-right |0|0|0|OxiAddonsHeaders-I-BS |rgba(196, 196, 196, 0)|0|0|0|0| OxiAddonsHeaders-I-HTC |#999999| OxiAddonsHeaders-I-HBG |rgba(224,224,224,0.00)| OxiAddonsHeaders-I-HBC |#c4c4c4| OxiAddonsHeaders-I-Tab ||OxiAddonsHeaders-I-HBS |rgba(255, 255, 255, 0)|0|0|0|0|OxiAddonsHeaders-I-M-top |5|5|5|OxiAddonsHeaders-I-M-bottom |50|50|50|OxiAddonsHeaders-I-M-left |5|5|5|OxiAddonsHeaders-I-M-right |5|5|5|||#|| OxiAddonsHeaders-I-IB ||#||fab fa-pinterest||#|| OxiAddonsHeaders-SD-TA ||#||We make pancakes better than Barack Obama. To succeed in your mission, you must have single-minded devotion to your goal.||#|| OxiAddonsHeaders-H-T-TB ||#||Business||#|| OxiAddonsHeaders-H-O-TB ||#||TAKING CARE OF||#|| OxiAddonsHeaders-B-BT ||#||learn more||#|| OxiAddonsHeaders-B-BL ||#||#||#|| OxiAddonsHeaders-I-ID ||#||iconplay||#|| OxiAddonsHeaders-I-Link ||#||#||#|| OxiAddonsHeaders-H-O-Letter ||#||6||#|| ||#||',
            'Style 3OXIIMPORTheadersOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |left|OxiAddonsHeaders-G-M-top |0|0|0|OxiAddonsHeaders-G-M-bottom |0|0|0|OxiAddonsHeaders-G-M-left |0|0|0|OxiAddonsHeaders-G-M-right |0|0|0| OxiAddonsHeaders-B-PS |left| OxiAddonsHeaders-LS-BGC |rgba(242,242,242,1.00)|OxiAddonsHeaders-LS-P-top |70|70|50|OxiAddonsHeaders-LS-P-bottom |70|70|50|OxiAddonsHeaders-LS-P-left |120|60|20|OxiAddonsHeaders-LS-P-right |120|60|20|OxiAddonsHeaders-RS-BG|rgba(37,124,222,0.00)|https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg||OxiAddonsHeaders-N-FS |18|17|18|OxiAddonsHeaders-N-F-family |Lato|100|OxiAddonsHeaders-N-F-style |normal:1.3|left:0()0()0()#ffffff:| OxiAddonsHeaders-N-C |#ffffff| OxiAddonsHeaders-N-BG |rgba(130,17,222,1.00)|OxiAddonsHeaders-N-P-top |5|5|5|OxiAddonsHeaders-N-P-bottom |5|5|5|OxiAddonsHeaders-N-P-left |10|10|10|OxiAddonsHeaders-N-P-right |5|5|5| OxiAddonsHeaders-N-Animation||0.5:false:false:500:10:0.2|0.5//||OxiAddonsHeaders-H-FS |36|32|26|OxiAddonsHeaders-H-F-family |Lato|bold|OxiAddonsHeaders-H-F-style |normal:1.3|left:0()0()0()#ffffff:| OxiAddonsHeaders-H-C |#0a0a0a|OxiAddonsHeaders-H-P-top |50|50|30|OxiAddonsHeaders-H-P-bottom |10|10|5|OxiAddonsHeaders-H-P-left |0|0|0|OxiAddonsHeaders-H-P-right |0|0|0| OxiAddonsHeaders-H-Animation||0.5:false:false:500:10:0.2|0.5//||OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Lato|100|OxiAddonsHeaders-SD-F-style |normal:1.3|left:0()0()0()#ffffff:| OxiAddonsHeaders-SD-C |#787878|OxiAddonsHeaders-SD-P-top |10|10|10|OxiAddonsHeaders-SD-P-bottom |20|20|20|OxiAddonsHeaders-SD-P-left |0|0|0|OxiAddonsHeaders-SD-P-right |0|0|0| OxiAddonsHeaders-SD-Animation||0.5:false:false:500:10:0.2|0.5//|| OxiAddonsHeaders-B-L-Tab ||OxiAddonsHeaders-B-L-FS |16|16|16|OxiAddonsHeaders-B-L-F-family |Lato|100|OxiAddonsHeaders-B-L-F-style |normal|::| OxiAddonsHeaders-B-L-TC |#ffffff| OxiAddonsHeaders-B-L-BG |rgba(20, 181, 250, 0.98)|OxiAddonsHeaders-B-L-BR-top |50|50|50|OxiAddonsHeaders-B-L-BR-bottom |50|50|50|OxiAddonsHeaders-B-L-BR-left |50|50|50|OxiAddonsHeaders-B-L-BR-right |50|50|50|OxiAddonsHeaders-B-L-BS |rgba(105, 173, 232, 0.36)|0|5|15|4|OxiAddonsHeaders-B-L-B |2|none|| OxiAddonsHeaders-B-L-BC |#303030|OxiAddonsHeaders-B-L-P-top |8|8|8|OxiAddonsHeaders-B-L-P-bottom |8|8|8|OxiAddonsHeaders-B-L-P-left |20|20|20|OxiAddonsHeaders-B-L-P-right |20|20|20|OxiAddonsHeaders-B-L-M-top |5|5|5|OxiAddonsHeaders-B-L-M-bottom |5|5|5|OxiAddonsHeaders-B-L-M-left |5|5|5|OxiAddonsHeaders-B-L-M-right |5|5|5| OxiAddonsHeaders-B-L-HTC |#ffffff| OxiAddonsHeaders-B-L-HBG |rgba(20,181,250,1.00)| OxiAddonsHeaders-B-L-HBC |#636363|OxiAddonsHeaders-B-L-HBS |rgba(56, 56, 56, 1)|0|0|0|0| OxiAddonsHeaders-B-L-Animation||0.5:false:false:500:10:0.2|0.5//|| OxiAddonsHeaders-B-L-Tab ||OxiAddonsHeaders-B-R-FS |16|16|16|OxiAddonsHeaders-B-R-F-family |Lato|100|OxiAddonsHeaders-B-R-F-style |normal|::| OxiAddonsHeaders-B-R-TC |#019fff| OxiAddonsHeaders-B-R-BG |rgba(255,255,255,1.00)|OxiAddonsHeaders-B-R-BR-top |50|50|50|OxiAddonsHeaders-B-R-BR-bottom |50|50|50|OxiAddonsHeaders-B-R-BR-left |50|50|50|OxiAddonsHeaders-B-R-BR-right |50|50|50|OxiAddonsHeaders-B-R-BS |rgba(191, 191, 191, 0.44)|0|5|15|5|OxiAddonsHeaders-B-R-B |2|none|| OxiAddonsHeaders-B-R-BC |#000000|OxiAddonsHeaders-B-R-P-top |8|8|8|OxiAddonsHeaders-B-R-P-bottom |8|8|8|OxiAddonsHeaders-B-R-P-left |20|20|20|OxiAddonsHeaders-B-R-P-right |20|20|20|OxiAddonsHeaders-B-R-M-top |5|5|5|OxiAddonsHeaders-B-R-M-bottom |5|5|5|OxiAddonsHeaders-B-R-M-left |5|5|5|OxiAddonsHeaders-B-R-M-right |5|5|5| OxiAddonsHeaders-B-R-HTC |#ffffff| OxiAddonsHeaders-B-R-HBG |rgba(20, 181, 250, 0.98)| OxiAddonsHeaders-B-R-HBC |#523bd9|OxiAddonsHeaders-B-R-HBS |rgba(255, 255, 255, 1)|0|0|0|0| OxiAddonsHeaders-B-R-Animation||0.5:false:false:500:10:0.2|0.5//||OxiAddonsHeaders-N-M-top |25|25|25|OxiAddonsHeaders-N-M-bottom |0|0|0|OxiAddonsHeaders-N-M-left |0|0|0|OxiAddonsHeaders-N-M-right |0|0|0|||#|| OxiAddonsHeaders-N-TB ||#||DR. NEIL CAMBRONERO||#|| ||#|| ||#|| OxiAddonsHeaders-H-TB ||#||I’m a Doctor & I Love my Job.||#|| OxiAddonsHeaders-SD-TA ||#||Dr. Neil Cambronero is a heart surgeon who specializes in neonatal, pediatric and adult heart surgery for congenital heart defects. He also has expertise in adults with acquired heart disease.||#|| OxiAddonsHeaders-B-L-BT ||#||Contact Me||#|| OxiAddonsHeaders-B-L-BL ||#||#||#|| OxiAddonsHeaders-B-R-BT ||#||learn more||#|| OxiAddonsHeaders-B-R-BL ||#||#||#|| ||#||',
            'style 4OXIIMPORTheadersOXIIMPORTstyle-4OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |left|OxiAddonsHeaders-G-M-top |5|5|5|OxiAddonsHeaders-G-M-bottom |5|5|5|OxiAddonsHeaders-G-M-left |5|5|5|OxiAddonsHeaders-G-M-right |5|5|5| OxiAddonsHeaders-B-PS |left| OxiAddonsHeaders-LS-BGC |rgba(71,70,70,0.84)|OxiAddonsHeaders-LS-P-top |100|100|50|OxiAddonsHeaders-LS-P-bottom |100|100|50|OxiAddonsHeaders-LS-P-left |90|90|30|OxiAddonsHeaders-LS-P-right |90|90|30|OxiAddonsHeaders-RS-BG|rgba(37,124,222,0.00)|https://images.pexels.com/photos/845434/pexels-photo-845434.jpeg||OxiAddonsHeaders-S-H-FS |18|17|18|OxiAddonsHeaders-S-H-F-family |Montserrat|100| OxiAddonsHeaders-S-H-F-style |normal|left| OxiAddonsHeaders-S-H-C |#ffffff| OxiAddonsHeaders-S-H-BG |rgba(0,0,0,0.00)|OxiAddonsHeaders-S-H-P-top |5|5|5|OxiAddonsHeaders-S-H-P-bottom |10|10|10|OxiAddonsHeaders-S-H-P-left |0|0|0|OxiAddonsHeaders-S-H-P-right |5|5|5| OxiAddonsHeaders-S-H-Animation||0.5|0.5//||OxiAddonsHeaders-H-FS |40|40|26|OxiAddonsHeaders-H-F-family |Oswald|bold| OxiAddonsHeaders-H-F-style |normal|left| OxiAddonsHeaders-H-C |#ffffff|OxiAddonsHeaders-H-P-top |10|10|5|OxiAddonsHeaders-H-P-bottom |10|10|5|OxiAddonsHeaders-H-P-left |0|0|0|OxiAddonsHeaders-H-P-right |0|0|0| OxiAddonsHeaders-H-Animation||0.5|0.5//||OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Montserrat|100| OxiAddonsHeaders-SD-F-style |normal|left| OxiAddonsHeaders-SD-C |#dbdbdb|OxiAddonsHeaders-SD-P-top |10|10|5|OxiAddonsHeaders-SD-P-bottom |10|10|5|OxiAddonsHeaders-SD-P-left |0|0|0|OxiAddonsHeaders-SD-P-right |0|0|0| OxiAddonsHeaders-SD-Animation||0.5|0.5//|| OxiAddonsHeaders-B-Tab ||OxiAddonsHeaders-B-FS |16|16|16|OxiAddonsHeaders-B-F-family |Lato|100| OxiAddonsHeaders-B-F-style |normal|center| OxiAddonsHeaders-B-TC |#ffffff| OxiAddonsHeaders-B-BG |rgba(20,175,252,0.00)|OxiAddonsHeaders-B-BR-top |50|50|50|OxiAddonsHeaders-B-BR-bottom |50|50|50|OxiAddonsHeaders-B-BR-left |50|50|50|OxiAddonsHeaders-B-BR-right |50|50|50|OxiAddonsHeaders-B-BS |rgba(61, 61, 61, 0.36)|0|5|15|4|OxiAddonsHeaders-B-B |2|solid|| OxiAddonsHeaders-B-BC |#ffffff|OxiAddonsHeaders-B-P-top |10|10|10|OxiAddonsHeaders-B-P-bottom |10|10|10|OxiAddonsHeaders-B-P-left |30|30|30|OxiAddonsHeaders-B-P-right |30|30|30|OxiAddonsHeaders-B-M-top |0|0|0|OxiAddonsHeaders-B-M-bottom |0|0|0|OxiAddonsHeaders-B-M-left |0|0|0|OxiAddonsHeaders-B-M-right |0|0|0| OxiAddonsHeaders-B-HTC |#474747| OxiAddonsHeaders-B-HBG |rgba(255,255,255,1.00)| OxiAddonsHeaders-B-HBC |#ffffff|OxiAddonsHeaders-B-HBS |rgba(56, 56, 56, 1)|0|0|0|0| OxiAddonsHeaders-B-Animation||0.5|0.5//||OxiAddonsHeaders-G-Height |50|50|120|||#|| OxiAddonsHeaders-S-H-TB ||#||NATURE PHOTOGRAPHY||#|| OxiAddonsHeaders-S-H-Letter ||#||6||#|| OxiAddonsHeaders-H-TB ||#||DAVID REMBRANT||#|| OxiAddonsHeaders-SD-TA ||#||Dr. Neil Cambronero is a heart surgeon who specializes in neonatal, pediatric and adult heart surgery for congenital heart defects. He also has expertise in adults with acquired heart disease.||#|| OxiAddonsHeaders-B-BT ||#||VIEW PHOTOS||#|| OxiAddonsHeaders-B-BL ||#||#||#|| OxiAddonsHeaders-H-Letter ||#||6||#|| ||#||',
            'style 5OXIIMPORTheadersOXIIMPORTstyle-5OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-PS |left|OxiAddonsHeaders-G-M-top |100|80|50|OxiAddonsHeaders-G-M-bottom |100|80|50|OxiAddonsHeaders-G-M-left |100|80|50|OxiAddonsHeaders-G-M-right |100|80|50| OxiAddonsHeaders-B-L-PS |left| OxiAddonsHeaders-LS-BGC |rgba(255,255,255,0.95)|OxiAddonsHeaders-LS-P-top |40|30|20|OxiAddonsHeaders-LS-P-bottom |40|30|20|OxiAddonsHeaders-LS-P-left |50|40|20|OxiAddonsHeaders-LS-P-right |50|40|20|OxiAddonsHeaders-RS-BG|rgba(61,144,245,0.00)|https://images.pexels.com/photos/1586973/pexels-photo-1586973.jpeg||OxiAddonsHeaders-S-H-FS |18|17|18|OxiAddonsHeaders-S-H-F-family |Montserrat|100| OxiAddonsHeaders-S-H-F-style |normal|left| OxiAddonsHeaders-S-H-C |#949494| OxiAddonsHeaders-S-H-BG |rgba(0,0,0,0.00)|OxiAddonsHeaders-S-H-P-top |5|5|5|OxiAddonsHeaders-S-H-P-bottom |10|10|10|OxiAddonsHeaders-S-H-P-left |0|0|0|OxiAddonsHeaders-S-H-P-right |5|5|5| OxiAddonsHeaders-S-H-Animation||0.5|0.5//||OxiAddonsHeaders-H-FS |40|40|26|OxiAddonsHeaders-H-F-family |Oswald|bold| OxiAddonsHeaders-H-F-style |normal|left| OxiAddonsHeaders-H-C |#595959|OxiAddonsHeaders-H-P-top |10|10|5|OxiAddonsHeaders-H-P-bottom |10|10|5|OxiAddonsHeaders-H-P-left |0|0|0|OxiAddonsHeaders-H-P-right |0|0|0| OxiAddonsHeaders-H-Animation||0.5|0.5//||OxiAddonsHeaders-SD-FS |16|16|16|OxiAddonsHeaders-SD-F-family |Montserrat|100| OxiAddonsHeaders-SD-F-style |normal|left| OxiAddonsHeaders-SD-C |#8f8f8f|OxiAddonsHeaders-SD-P-top |10|10|5|OxiAddonsHeaders-SD-P-bottom |10|10|5|OxiAddonsHeaders-SD-P-left |0|0|0|OxiAddonsHeaders-SD-P-right |0|0|0| OxiAddonsHeaders-SD-Animation||0.5|0.5//|| OxiAddonsHeaders-B-L-Tab ||OxiAddonsHeaders-B-L-FS |16|16|16|OxiAddonsHeaders-B-L-F-family |Lato|100| OxiAddonsHeaders-B-L-F-style |normal|center| OxiAddonsHeaders-B-L-TC |#ffffff| OxiAddonsHeaders-B-L-BG |rgba(48,122,171,1.00)|OxiAddonsHeaders-B-L-BR-top |1|1|1|OxiAddonsHeaders-B-L-BR-bottom |1|1|1|OxiAddonsHeaders-B-L-BR-left |1|1|1|OxiAddonsHeaders-B-L-BR-right |1|1|1|OxiAddonsHeaders-B-L-BS |rgba(179, 179, 179, 0.36)|0|5|15|4|OxiAddonsHeaders-B-L-B |2|none|| OxiAddonsHeaders-B-L-BC |#737373|OxiAddonsHeaders-B-L-P-top |10|10|10|OxiAddonsHeaders-B-L-P-bottom |10|10|10|OxiAddonsHeaders-B-L-P-left |30|30|30|OxiAddonsHeaders-B-L-P-right |30|30|30|OxiAddonsHeaders-B-L-M-top |0|0|0|OxiAddonsHeaders-B-L-M-bottom |0|0|0|OxiAddonsHeaders-B-L-M-left |0|0|0|OxiAddonsHeaders-B-L-M-right |0|0|0| OxiAddonsHeaders-B-L-HTC |#ffffff| OxiAddonsHeaders-B-L-HBG |rgba(64,117,207,0.60)| OxiAddonsHeaders-B-L-HBC |#ffffff|OxiAddonsHeaders-B-L-HBS |rgba(56, 56, 56, 1)|0|0|0|0| OxiAddonsHeaders-B-L-Animation||0.5|0.5//||OxiAddonsHeaders-G-Height |50|50|120|OxiAddonsHeaders-LS-M-top |50|30|20|OxiAddonsHeaders-LS-M-bottom |50|30|20|OxiAddonsHeaders-LS-M-left |50|30|20|OxiAddonsHeaders-LS-M-right |50|30|20| OxiAddonsHeaders-B-L-Tab ||OxiAddonsHeaders-B-R-FS |18|18|18|OxiAddonsHeaders-B-R-F-family |Lato|100| OxiAddonsHeaders-B-R-F-style |normal|center| OxiAddonsHeaders-B-R-TC |#000000| OxiAddonsHeaders-B-R-BG |rgba(20,175,252,0.00)|OxiAddonsHeaders-B-R-BR-top |50|50|50|OxiAddonsHeaders-B-R-BR-bottom |50|50|50|OxiAddonsHeaders-B-R-BR-left |50|50|50|OxiAddonsHeaders-B-R-BR-right |50|50|50|OxiAddonsHeaders-B-R-BS ||50|50||50|OxiAddonsHeaders-B-R-B |2|none|| OxiAddonsHeaders-B-R-BC |#ffffff|OxiAddonsHeaders-B-R-P-top |10|10|10|OxiAddonsHeaders-B-R-P-bottom |10|10|10|OxiAddonsHeaders-B-R-P-left |30|30|30|OxiAddonsHeaders-B-R-P-right |30|30|30|OxiAddonsHeaders-B-R-M-top |0|0|0|OxiAddonsHeaders-B-R-M-bottom |0|0|0|OxiAddonsHeaders-B-R-M-left |0|0|0|OxiAddonsHeaders-B-R-M-right |0|0|0| OxiAddonsHeaders-B-R-HTC |#474747| OxiAddonsHeaders-B-R-HBG |rgba(255,255,255,0.00)| OxiAddonsHeaders-B-R-HBC |#ffffff|OxiAddonsHeaders-B-R-HBS |rgba(242, 242, 242, 0)|0|0|0|0| OxiAddonsHeaders-B-R-Animation||0.5|0.5//||OxiAddonsHeaders-G-Width |60|50|120|||#|| OxiAddonsHeaders-S-H-TB ||#||NATURE PHOTOGRAPHY||#|| OxiAddonsHeaders-S-H-Letter ||#||2||#|| OxiAddonsHeaders-H-TB ||#||DAVID REMBRANT||#|| OxiAddonsHeaders-SD-TA ||#||Dr. Neil Cambronero is a heart surgeon who specializes in neonatal, pediatric and adult heart surgery for congenital heart defects. He also has expertise in adults with acquired heart disease.||#|| OxiAddonsHeaders-B-L-BT ||#||VIEW PHOTOS||#|| OxiAddonsHeaders-B-L-BL ||#||#||#|| OxiAddonsHeaders-H-Letter ||#||2||#|| OxiAddonsHeaders-B-R-BT ||#||VIEW PHOTOS||#|| OxiAddonsHeaders-B-R-BL ||#||#||#|| ||#||',
            'style 6OXIIMPORTheadersOXIIMPORTstyle-6OXIIMPORToxi-addons-preview-BG ||OxiAddonsHeaders-G-Height |50|||OxiAddonsHeaders-G-BG|rgba(18,18,18,0.27)|https://images.pexels.com/photos/906024/pexels-photo-906024.jpeg|| OxiAddonsHeaders-G-HBG |rgba(0,30,59,0.35)|OxiAddonsHeaders-I-width |100|100|100|OxiAddonsHeaders-I-height |100|100|100| OxiAddonsHeaders-I-Tab ||OxiAddonsHeaders-I-FS |60|60|60| OxiAddonsHeaders-I-TC |#ffffff| OxiAddonsHeaders-I-Bg |rgba(255,255,255,0.00)|OxiAddonsHeaders-I-B |1|none|| OxiAddonsHeaders-I-BC |#ffffff|OxiAddonsHeaders-I-P-top |10|10|10|OxiAddonsHeaders-I-P-bottom |10|10|10|OxiAddonsHeaders-I-P-left |10|10|10|OxiAddonsHeaders-I-P-right |10|10|10|OxiAddonsHeaders-I-M-top |10|10|10|OxiAddonsHeaders-I-M-bottom |10|10|10|OxiAddonsHeaders-I-M-left |10|10|10|OxiAddonsHeaders-I-M-right |10|10|10|OxiAddonsHeaders-I-radius-top |1|1|1|OxiAddonsHeaders-I-radius-bottom |1|1|1|OxiAddonsHeaders-I-radius-left |1|1|1|OxiAddonsHeaders-I-radius-right |1|1|1|OxiAddonsHeaders-I-BS |rgba(255, 255, 255, 0)|0|0|0|0| OxiAddonsHeaders-I-HTC |#bababa| OxiAddonsHeaders-I-HBG |rgba(217,52,46,0.00)| OxiAddonsHeaders-I-HBC |#ffffff|OxiAddonsHeaders-I-HBS |rgba(201, 63, 58, 0)|0|0|0|0| OxiAddonsHeaders-I-Animation||0.5|0.5//||||#|| OxiAddonsHeaders-I-IB ||#||far fa-play-circle||#|| OxiAddonsHeaders-I-ID ||#||iconplay||#|| OxiAddonsHeaders-I-Link ||#||#||#|| ||#||',
        );
    }

    public function template_rendar($expludedata = array(), $value = '') {
        return '<div class="oxi-addons-col-6" id="' . $expludedata[2] . '">
                                <div class="oxi-addons-style-preview">
                                    <div class="oxi-addons-style-preview-top oxi-addons-center">
                                    ' . ($this->Shortcode($value)) . '
                                    </div>
                                    <div class="oxi-addons-style-preview-bottom">
                                        <div class="oxi-addons-style-preview-bottom-left">
                                        ' . $this->ShortcodeName($value) . '
                                        </div>
                                        ' . $this->ShortcodeControl($value) . '
                                    </div>
                                </div>
                             </div>';
    }

}