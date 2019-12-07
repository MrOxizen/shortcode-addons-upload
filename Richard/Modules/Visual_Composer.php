<?php

namespace OXI_FLIP_BOX_PLUGINS\Modules;

/**
 * Description of Visual_Composer
 *
 * @author biplo
 */
class Visual_Composer {

    public function __construct() {
        add_action('vc_before_init', [$this, 'VC_extension']);
        add_shortcode('oxilab_flip_box_VC', [$this, 'VC_Shortcode']);
    }

    public function VC_Shortcode($atts) {
        extract(shortcode_atts(array(
            'id' => ''
                        ), $atts));
        $styleid = $atts['id'];
        ob_start();
        echo \OXI_FLIP_BOX_PLUGINS\Classes\Bootstrap::instance()->shortcode_render($styleid, 'user');
        return ob_get_clean();
    }

    public function VC_extension() {
        vc_map(array(
            "name" => __("Flip Boxes and Image Overlay"),
            "base" => "oxilab_flip_box_VC",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => __("ID"),
                    "param_name" => "id",
                    "description" => __("Input your Flip ID in input box")
                ),
            )
        ));
    }

}
