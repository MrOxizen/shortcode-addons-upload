<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_boxes;

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

class Image_boxes extends Elements_Frontend {

    public function pre_active() {
        return array('style-1');
    }

    public function templates() {
        return array(
            'Style 1OXIIMPORTbullet_listOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|||oxi-BL-Padding-top |0|0|0|oxi-BL-Padding-bottom |0|0|0|oxi-BL-Padding-left |0|0|0|oxi-BL-Padding-right |0|0|0|oxi-BL-margin-top |0|0|0|oxi-BL-margin-bottom |0|0|0|oxi-BL-margin-left |28|20|23|oxi-BL-margin-right |0|0|0|||||||oxi-BL-number-font-size |16|13|12|||||oxi-BL-number-font-family |Roboto|700|oxi-BL-number-font-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0):|oxi-BL-number-padding-top |10|7|8|oxi-BL-number-padding-bottom |10|7|8|oxi-BL-number-padding-left |10|7|8|oxi-BL-number-padding-right |10|7|8|oxi-BL-number-color |#ffffff|xi-BL-number-bg-color |rgba(51, 147, 212, 1)|oxi-BL-number-h-color |#ffffff|oxi-BL-number-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-content-font-size |16|14|13|oxi-BL-content-color |#ffffff|oxi-BL-content-bg-color |rgba(51, 147, 212, 1)|oxi-BL-content-font-family |Roboto|500|oxi-BL-content-font-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0.04):|oxi-BL-content-padding-top |10|7|8|oxi-BL-content-padding-bottom |10|7|8|oxi-BL-content-padding-left |10|7|8|oxi-BL-content-padding-right |10|7|8|oxi-BL-content-margin-top |12|7|8|oxi-BL-content-margin-bottom |12|7|8|oxi-BL-content-margin-left |12|7|8|oxi-BL-content-margin-right |12|7|8|oxi-BL-content-h-color |#ffffff|oxi-BL-content-h-bg-color |rgba(71, 71, 71, 1)|oxi-BL-number-border-width-top |2|2|2|oxi-BL-number-border-width-bottom |2|2|2|oxi-BL-number-border-width-left |2|2|2|oxi-BL-number-border-width-right |2|2|2|oxi-BL-number-border |solid|#ffffff||oxi-BL-number-h-border-width-top |2|2|2|oxi-BL-number-h-border-width-bottom |2|2|2|oxi-BL-number-h-border-width-left |2|2|2|oxi-BL-number-h-border-width-right |2|2|2|oxi-BL-number-h-border |solid|#ffffff||oxi-BL-content-hover-scale |1.8|||oxi-BL-max-width |501|400|300|||#||##OXISTYLE####OXIDATA####OXIDATA####OXIDATA##',
           );
    }

}
