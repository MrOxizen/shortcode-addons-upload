<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Logo_showcase;

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

class Logo_showcase extends Elements_Frontend
{

    public function pre_active()
    {
        return array('style-1');
    }

    public function templates()
    {
        return array(
            'Style 1OXIIMPORTlogo_showcaseOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG ||OxiAddonsLogoShowcase-rows |oxi-addons-lg-col-4|oxi-addons-md-col-2|oxi-addons-xs-col-1|OxiAddonsLogoShowcase-width|200|200|200|OxiAddonsLogoShowcase-Height|80|80|80|OxiAddonsLogoShowcase-padding-top |15|15|15|OxiAddonsLogoShowcase-padding-bottom |15|15|15|OxiAddonsLogoShowcase-padding-left |15|15|15|OxiAddonsLogoShowcase-padding-right |15|15|15|OxiAddonsLogoShowcase-margin-top |0|0|0|OxiAddonsLogoShowcase-margin-bottom |0|0|0|OxiAddonsLogoShowcase-margin-left |0|0|0|OxiAddonsLogoShowcase-margin-right |0|0|0| OxiAddonsLogoShowcase-animation||:false:false:500:10:0.2|//|| oxi_addons-icon-link-opening |_blank|OxiAddonsTestimonial-BS |rgba(189, 189, 189, 0)|0|5|10|0||##OXISTYLE##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/524px-JQuery_logo.svg_-200x49.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/elementor-logo-e1526055782474-200x68.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/logo2x-200x42.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/bb-logo-2x-200x42.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##',
            'Style 2OXIIMPORTlogo_showcaseOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG ||OxiAddonsLogoShowcase-rows |oxi-addons-lg-col-5|oxi-addons-md-col-2|oxi-addons-xs-col-1|OxiAddonsLogoShowcase-width|400|400|400|OxiAddonsLogoShowcase-Height|220|220|220|OxiAddonsLogoShowcase-padding-top |20|20|20|OxiAddonsLogoShowcase-padding-bottom |20|20|20|OxiAddonsLogoShowcase-padding-left |20|20|20|OxiAddonsLogoShowcase-padding-right |20|20|20|OxiAddonsLogoShowcase-margin-top |0|0|0|OxiAddonsLogoShowcase-margin-bottom |0|0|0|OxiAddonsLogoShowcase-margin-left |0|0|0|OxiAddonsLogoShowcase-margin-right |0|0|0| OxiAddonsLogoShowcase-animation||1:false:false:500:10:0.2|0.2//|| oxi_addons-icon-link-opening ||OxiAddonsTestimonial-BS |rgba(222, 222, 222, 1)|0|0|0|1| OxiAddonsLogoShowcase-grayscale |0| OxiAddonsLogoShowcase-hover-grayscale |100||##OXISTYLE##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/04/gieE69kzT.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/bb-logo-2x-200x42.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/04/111.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/04/avg-technologies-logo.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/elementor-logo-e1526055782474-200x68.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##',
            'Style 3OXIIMPORTlogo_showcaseOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG ||OxiAddonsLogoShowcase-rows |oxi-addons-lg-col-4|oxi-addons-md-col-2|oxi-addons-xs-col-1|OxiAddonsLogoShowcase-width|400|400|400|OxiAddonsLogoShowcase-Height|150|150|150|OxiAddonsLogoShowcase-padding-top |20|20|20|OxiAddonsLogoShowcase-padding-bottom |20|20|20|OxiAddonsLogoShowcase-padding-left |20|20|20|OxiAddonsLogoShowcase-padding-right |20|20|20|OxiAddonsLogoShowcase-margin-top |10|10|10|OxiAddonsLogoShowcase-margin-bottom |10|10|10|OxiAddonsLogoShowcase-margin-left |10|10|10|OxiAddonsLogoShowcase-margin-right |10|10|10| OxiAddonsLogoShowcase-animation||2:false:false:500:10:0.2|0.8//|| oxi_addons-icon-link-opening |_blank|OxiAddonsTestimonial-BS |rgba(191, 191, 191, 0.61)|1|2|5|1| OxiAddonsLogoShowcase-grayscale |10| OxiAddonsLogoShowcase-hover-grayscale |100| OxiAddonsLogoShowcase-scale |1| OxiAddonsLogoShowcase-scale-duration |0.2| OxiAddonsLogoShowcase-hover-scale |1.12| OxiAddlogoshowcase-bgcolor|rgba(255, 255, 255, 1)|OxiAddlogoshowcase-border-top |1|1|1|OxiAddlogoshowcase-border-bottom |1|1|1|OxiAddlogoshowcase-border-left |1|1|1|OxiAddlogoshowcase-border-right |1|1|1|OxiAddlogoshowcase-border |solid|#22631a||OxiAddlogoshowcase-radius-top |0|0|0|OxiAddlogoshowcase-radius-bottom |0|0|0|OxiAddlogoshowcase-radius-left |0|0|0|OxiAddlogoshowcase-radius-right |0|0|0||##OXISTYLE##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/524px-JQuery_logo.svg_-200x49.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/logo2x-200x42.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/Envato_Logo.svg_-200x38.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##OxiAddonsLogoShowcase-BG ||#||https://www.oxilab.org/wp-content/uploads/2019/02/bb-logo-2x-200x42.png||#|| OxiAddonsLogoShowcase-BGL ||#||#||#|| ||#||##OXIDATA##',
        );
    }
}
