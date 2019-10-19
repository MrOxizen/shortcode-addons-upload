<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form;

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

class Contact_form extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1','Style_2');
    }

    public function templates() {
        return array(
         );
    }

}
