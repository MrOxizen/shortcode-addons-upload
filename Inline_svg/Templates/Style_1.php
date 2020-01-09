<?php

namespace SHORTCODE_ADDONS_UPLOAD\Inline_svg\Templates;

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

    public function prepare_svg($svg, $style) {
        if (array_key_exists('oxi_inline_svg_aspect_ratio', $style) && $style['oxi_inline_svg_aspect_ratio'] != 'yes') {
            $svg = preg_replace('[preserveAspectRatio\s*?=\s*?"\s*?.*?\s*?"]', '', $svg);
            $svg = preg_replace('[<svg]', '<svg preserveAspectRatio="none"', $svg);
        }

        if (array_key_exists('oxi_inline_svg_inline_css', $style) && $style['oxi_inline_svg_inline_css'] == 'yes') {
            $svg = preg_replace('[style\s*?=\s*?"\s*?.*?\s*?"]', '', $svg);
        }

        if (array_key_exists('oxi_inline_svg_custom_color', $style) && $style['oxi_inline_svg_custom_color'] == 'yes') {
            $svg = preg_replace('[fill\s*?=\s*?("(?!(?:\s*?none\s*?)")[^"]*")]', 'fill="currentColor"', $svg);
            $svg = preg_replace('[stroke\s*?=\s*?("(?!(?:\s*?none\s*?)")[^"]*")]', 'stroke="currentColor"', $svg);
        }

        return $svg;
    }

    public function get_attr_string($attr = array()) {

        if (empty($attr) || !is_array($attr)) {
            return;
        }

        $result = '';

        foreach ($attr as $key => $value) {
            $result .= sprintf(' %s="%s"', esc_attr($key), esc_attr($value));
        }

        return $result;
    }

    public function get_image_by_url($url = null, $attr = array()) {

        $url = esc_url($url);

//        echo $url;
        if (empty($url)) {
            return;
        }

        $ext = pathinfo($url, PATHINFO_EXTENSION);
        $attr = array_merge(array('alt' => ''), $attr);

        if ('svg' !== $ext) {
            return sprintf('<img src="%1$s"%2$s>', $url, $this->get_attr_string($attr));
        }


        $base_url = site_url('/');
        $svg_path = str_replace($base_url, ABSPATH, $url);
        $key = md5($svg_path);
        $svg = get_transient($key);

        if (!$svg) {
            $svg = file_get_contents($svg_path);
        }

        if (!$svg) {
            return sprintf('<img src="%1$s"%2$s>', $url, $this->get_attr_string($attr));
        }

        set_transient($key, $svg, DAY_IN_SECONDS);

        unset($attr['alt']);

        return sprintf('<div%2$s>%1$s</div>', $svg, $this->get_attr_string($attr));
    }

    public function default_render($style, $child, $admin) {
        $svg = $link_url = $custom_width = $custom_color = $ext = $svg_link = "" ;
        $svg_link = $this->media_render('oxi_inline_svg_svg', $style);
        $tag = 'div';
        $svg = $this->get_image_by_url($svg_link, array('class' => 'oxi-inline-svg__inner'));
       


        $url = esc_url($svg_link);

        if (empty($url)) {
            return;
        }

        $ext = pathinfo($url, PATHINFO_EXTENSION);

        if ('svg' !== $ext) {
            return printf('<h5 class="oxi-inline-svg__error">%s</h5>', esc_html__('Please choose a SVG file format.', 'sa-el-elements'));
        }
//
        $svg = $this->prepare_svg($svg, $style);
     
//
//        $this->add_render_attribute('svg_wrap', 'class', 'oxi-inline-svg');
//
        if (!empty($style['oxi_inline_svg_link-url'])) {
            $tag = 'a';
            $link_url =  $this->url_render('oxi_inline_svg_link', $style);

            
        }
        

        if (array_key_exists('oxi_inline_svg_custom_width', $style) &&  'yes' === $settings['oxi_inline_svg_custom_width']) {
            $custom_width =  'oxi-inline-svg--custom-width';
        }
        if (array_key_exists('oxi_inline_svg_custom_color', $style) &&  'yes' === $settings['oxi_inline_svg_custom_color']) {
            $custom_color =  'oxi-inline-svg--custom-color';
        }

        echo '<div class="oxi-inline-svg-style-1 ">
                <div class="oxi-inline-svg__wrapper">
                    <' . $tag . ' class="oxi-inline-svg " ' . $this->animation_render('oxi_inline_svg_animation', $style) . ' '.$link_url.'>';
                     echo $svg;
                echo '</' . $tag . '>
                </div>
              </div>';
    }

}
