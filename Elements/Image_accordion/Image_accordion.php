<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_accordion;

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

class Image_accordion extends Elements_Frontend
{

    public function pre_active()
    {
        return array('style-1', 'style-2', 'style-3', 'style-4', 'style-5', 'style-6', 'style-7', 'style-8');
    }

    public function templates()
    {
        return array(
            'Style 1OXIIMPORTicon_effectsOXIIMPORTstyle-1OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(161,5,5,1.00)|oxi_addons-icon-animation||.5:false:false:500:10:0.2|.5//| oxi-addons-icon-border-radius |50| oxi-addons-preview-BG || oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(145,9,9,1.00)| oxi_addons-icon-padding |5|5|5| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
            'Style 17OXIIMPORTicon_effectsOXIIMPORTstyle-17OXIIMPORToxi_addons-icon-link-opening || oxi_addons-icon-font-size |50|45|40| oxi_addons-icon-margin-top |0|0|0| oxi_addons-icon-margin-left |0|0|0| oxi_addons-icon-width |100|90|80| oxi_addons-icon-color |#ffffff| oxi_addons-icon-bg-color |rgba(12,209,186,1.00)|oxi_addons-icon-animation||:false:false:500:10:0.2|10//| oxi-addons-icon-border-radius |90| oxi-addons-preview-BG |#ffffff| oxi_addons-icon-hover-color |#ffffff| oxi_addons-icon-hover-bg-color |rgba(4,140,126,1.00)| oxi_addons-icon-padding |0|0|0| oxi_addons-icon-border |5|5|5|OxiAddIconBoxes-rows |oxi-addons-lg-col-3|oxi-addons-md-col-1|oxi-addons-xs-col-1||##OXISTYLE##oxi_addons-icon-class ||#||fab fa-youtube||#||oxi_addons-icon-id ||#||btn1||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-facebook||#||oxi_addons-icon-id ||#||btn2||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##oxi_addons-icon-class ||#||fab fa-linkedin||#||oxi_addons-icon-id ||#||btn3||#||oxi_addons-icon-link ||#||#||#|| ||#||##OXIDATA##',
        );
    }
}
