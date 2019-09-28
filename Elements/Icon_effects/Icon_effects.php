<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_effects;

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

class Icon_effects extends Elements_Frontend
{

    public function pre_active()
    {
        return array('Style_1');
    }

    public function templates()
    {
        return array(
            'Style 1OXIIMPORTicon_effectsOXIIMPORTstyle-1OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(161,5,5,1.00)|oxi_addons-icon-animation||.5:false:false:500:10:0.2|.5//| oxi-addons-icon-border-radius |50| oxi-addons-preview-BG || oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(145,9,9,1.00)| oxi_addons-icon-padding |5|5|5| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 2OXIIMPORTicon_effectsOXIIMPORTstyle-2OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(10,194,56,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG || oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(6,92,21,1.00)| oxi_addons-icon-padding |5|5|5| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 3OXIIMPORTicon_effectsOXIIMPORTstyle-3OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(14,39,230,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(9,13,117,1.00)| oxi_addons-icon-padding |5|5|5| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||||#||oxi_addons-icon-link ||#||||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 4OXIIMPORTicon_effectsOXIIMPORTstyle-4OXIIMPORToxi_addons-icon-link-opening |_blank| oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(168,12,207,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#7f0485| oxi_addons-icon-hover-border-color |#7f0485| |||| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 5OXIIMPORTicon_effectsOXIIMPORTstyle-5OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(4,166,207,1.00)|oxi_addons-icon-animation||.5:false:false:500:10:0.2|.5//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#066a73| oxi_addons-icon-hover-border-color |#066a73| |||| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 6OXIIMPORTicon_effectsOXIIMPORTstyle-6OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(255, 123, 0, 1)|oxi_addons-icon-animation||.5:false:false:500:10:0.2|.5//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG || oxi_addons-icon-hover-color |#ad590a| oxi_addons-icon-hover-bg-color |#ad590a| |||| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 7OXIIMPORTicon_effectsOXIIMPORTstyle-7OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#b35656| oxi_addons-icon-border-color |#b35656|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#993838| oxi_addons-icon-border-hover-color |#993838| oxi_addons-icon-hover-border |5|oxi_addons-icon-hover-border-type|dashed| oxi_addons-icon-border |5|oxi_addons-icon-border-type|solid|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 8OXIIMPORTicon_effectsOXIIMPORTstyle-8OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#5050a3| oxi_addons-icon-border-color |#5050a3|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#2d2d85| oxi_addons-icon-border-hover-color |#2d2d85| oxi_addons-icon-hover-border |5|oxi_addons-icon-hover-border-type|dashed| oxi_addons-icon-border |5|oxi_addons-icon-border-type|solid|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 9OXIIMPORTicon_effectsOXIIMPORTstyle-9OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(82,158,91,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#529e59| oxi_addons-icon-border-color |#529e59| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-hover-border |5|5|5| oxi_addons-icon-hover-hover-color |#306635|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 10OXIIMPORTicon_effectsOXIIMPORTstyle-10OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(166, 87, 162, 1)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#a657a2| oxi_addons-icon-border-color |#a657a2| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-hover-border |10|10|10| oxi_addons-icon-hover-hover-color |#963990|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 11OXIIMPORTicon_effectsOXIIMPORTstyle-11OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(80,149,153,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#509599| oxi_addons-icon-border-color |#509599| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-hover-border |10|10|10| oxi_addons-icon-hover-hover-color |#357175|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 12OXIIMPORTicon_effectsOXIIMPORTstyle-12OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(140,124,79,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#8c7c4f| oxi_addons-icon-border-color |#8c7c4f| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-hover-border |10|10|10| oxi_addons-icon-hover-hover-color |#6b5d32|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 13OXIIMPORTicon_effectsOXIIMPORTstyle-13OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(245,49,140,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#f5318c| oxi_addons-icon-border-color |#f5318c| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-hover-border |10|10|10| oxi_addons-icon-hover-hover-color |#d1196c|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 14OXIIMPORTicon_effectsOXIIMPORTstyle-14OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(23,140,235,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#178ceb| oxi_addons-icon-hover-border-color |#178ceb| |||| oxi_addons-icon-border |5||5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 15OXIIMPORTicon_effectsOXIIMPORTstyle-15OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#37b857| oxi_addons-icon-border-color |#37b857|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#23913e| oxi_addons-icon-hover-border-color |#23913e| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-padding-top |10|8|8| oxi_addons-icon-padding-left |10|8|8|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 16OXIIMPORTicon_effectsOXIIMPORTstyle-16OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffbb00| oxi_addons-icon-border-color |#ffbb00|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#ba8d07| oxi_addons-icon-hover-border-color |#ba8d07| |||| oxi_addons-icon-border |5|5|5| oxi_addons-icon-padding-top |10|8|8| oxi_addons-icon-padding-left |10|8|8|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 17OXIIMPORTicon_effectsOXIIMPORTstyle-17OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(12,209,186,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(4,140,126,1.00)| oxi_addons-icon-padding |0|0|0| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
        );
    }
}
