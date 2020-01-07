<?php

namespace SHORTCODE_ADDONS_UPLOAD\Cookie_consent\Templates;

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

class Style_1 extends Templates
{
    public function public_css()
    {
        wp_enqueue_style('sa_cookieconsent', SA_ADDONS_UPLOAD_URL . '/Cookie_consent/file/cookieconsent.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function public_jquery()
    {
        $this->JSHANDLE = 'cookieconsent.min';
        wp_enqueue_script('cookieconsent.min', SA_ADDONS_UPLOAD_URL . '/Cookie_consent/file/cookieconsent.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin)
    {
        $message = $learn_more = $all_data = $button = '';

        if ($style['sa_cookie_consent_mess'] != '') {
            $message = $this->text_render($style['sa_cookie_consent_mess']);
        }
        if ($style['sa_cookie_consent_learn_more_text'] != '') {
            $learn_more = $this->text_render($style['sa_cookie_consent_learn_more_text']);
        }
        if ($style['sa_cookie_consent_button_text'] != '') {
            $button = $this->text_render($style['sa_cookie_consent_button_text']);
        }
        $all_data = wp_json_encode(array_filter([
            "position" => $style["position"],
            "static" => ("top" == $style["position"] and ($style["pushdown"]) == 'yes' ? true : false),
            "content" => [
                "message" => $message,
                "dismiss" => $button,
                "link" => $learn_more,
                "href" => $style['sa_cookie_consent_link'],
            ],
            "expiryDays" => $style["sa_cookie_consent_days-size"],
        ]));
        echo '<div class="sa_cookie_consent_container_style_1">
                <div class="sa_cookie_consent" data-settings=\'' . $all_data . '\'>
                </div>
            </div>';
    }


    public function inline_public_jquery()
    {

        $jquery = '
            var $cookieConsent = $(".' . $this->WRAPPER . ' .sa_cookie_consent_container_style_1 .sa_cookie_consent"),
                $settings = $cookieConsent.data("settings");
            if (!$cookieConsent.length) {
                return;
            }
            window.cookieconsent.initialise($settings);
        ';
        return $jquery;
    }
}
