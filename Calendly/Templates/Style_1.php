<?php

namespace SHORTCODE_ADDONS_UPLOAD\Calendly\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Templates;

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {

        $username = $style['sa_calendly_username'];
        $calendly_time = ($style['sa_calendly_time'] != '' ? $style['sa_calendly_time'] : '');
        $details = (array_key_exists('sa_calendly_details', $style) && $style['sa_calendly_details'] == 'yes' ? 'hide_event_type_details=1' : '');
        $text_color = str_replace('#', '', $style['sa_calendly_text_color']);
        $button_link_color = str_replace('#', '', $style['sa_calendly_button_color']);
        $bg_color = str_replace('#', '', $style['sa_calendly_bg_color']);

        echo '<div class="oxi_addons_calendly">';
        if ($username != ''):
            echo ' <div class="calendly-inline-widget"
                 data-url="https://calendly.com/' . $username . '/' . $calendly_time . '/?' . $details . '&text_color=' . $text_color . '&primary_color=' . $button_link_color . '&background_color=' . $bg_color . '"
                 style="min-width:320px;"></div>
                 <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                  ';
        
        endif;
        echo '</div>';
    }

}
