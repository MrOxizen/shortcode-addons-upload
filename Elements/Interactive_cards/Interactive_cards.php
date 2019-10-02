<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Interactive_cards;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Interactive_cards
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Interactive_cards extends Elements_Frontend {

    public function pre_active() {
        return array('style_1');
    }
    public function templates() {
        return array(
            '',
        );
    }

}