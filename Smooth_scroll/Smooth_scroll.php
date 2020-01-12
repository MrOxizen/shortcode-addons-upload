<?php

namespace SHORTCODE_ADDONS_UPLOAD\Smooth_scroll;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Heading
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Smooth_scroll extends Elements_Frontend {

    public function pre_active() {
        return array('Style_1','Style_2');
    }

    public function templates() {
        return array(
            '{"style":{"id":"625","type":"Smooth_scroll","name":"Style 1","style_name":"Style_1","rawdata":"{\"sa_ss_frame_rate-size\":\"350\",\"sa_ss_anitmation_time-size\":\"1000\",\"sa_ss_step_size-size\":\"150\",\"sa_ss_ps-size\":\"4\",\"sa_ss_pn-size\":\"1\",\"sa_ss_ad-size\":\"50\",\"sa_ss_am-size\":\"3\",\"sa_ss_as-size\":\"100\",\"shortcode-addons-2-0-preview\":\"\",\"shortcode-addons-elements-name\":\"Smooth_scroll\",\"shortcode-addons-elements-id\":\"625\",\"shortcode-addons-elements-template\":\"Style_1\",\"sa_ss_pa\":\"0\",\"sa_ss_ke\":\"0\",\"sa_ss_tps\":\"0\",\"sa_ss_fs\":\"0\",\"sa_ss_rss\":\"0\"}","stylesheet":"","font_family":"[]"},"child":[]}',
          );
    }

}
