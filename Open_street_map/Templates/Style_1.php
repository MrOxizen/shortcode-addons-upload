<?php

namespace SHORTCODE_ADDONS_UPLOAD\Open_street_map\Templates;

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

    public function public_jquery() {
        wp_enqueue_script('leaflet-min', SA_ADDONS_UPLOAD_URL . '/Open_street_map/File/leaflet.min.js', false, SA_ADDONS_PLUGIN_VERSION, false);
        $this->JSHANDLE = 'leaflet-min';
    }

    public function inline_public_jquery() {

        return 'var N = jQuery(\'body\').find(".sa-open-street-map"),
                    T = N.data("settings"),
                    A = N.data("map_markers");
            if (N.length) {
                var R = L.map(N[0], {
                    zoomControl: T.zoomControl,
                    scrollWheelZoom: T.scrollWheelZoom
                }).setView([T.lat, T.lng], T.zoom);
                L.tileLayer("https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=" + T.osmAccessToken, {
                    maxZoom: 18,
                    attribution: \'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>\',
                    id: "mapbox.streets"
                }).addTo(R);
                var I = L.Icon.extend({
                    options: {
                        iconSize: [38, 95],
                        iconAnchor: [22, 94],
                        shadowAnchor: [4, 62],
                        popupAnchor: [-3, -76]
                    }
                });
                for (var P in A) {
                    var S = new I({
                        iconUrl: A[P].iconUrl
                    });
                    L.marker([A[P].lat, A[P].lng], {
                        icon: S
                    }).bindPopup(A[P].infoWindow).addTo(R)
                }
             
            };';
    }

    public function default_render($style, $child, $admin) {


        if ($style['oxi_addons_street_map_api'] != ''):
            $counter = 0;
            $marker_settings = [];
            $settings = [];
            $map_settings['osmAccessToken'] = $style['oxi_addons_street_map_api'];
            foreach ($style['oxi_addons_street_map_marker'] as $key => $value) {
                $settings['lat'] = ( $value['oxi_addons_street_map_latitude'] ) ? $value['oxi_addons_street_map_latitude'] : '';
                $settings['lng'] = ( $value['oxi_addons_street_map_Longitude'] ) ? $value['oxi_addons_street_map_Longitude'] : '';
                $settings['title'] = ( $value['oxi_addons_street_map_title'] ) ? $value['oxi_addons_street_map_title'] : '';
                $settings['iconUrl'] = ( $this->media_render('oxi_addons_street_map_marker_image', $value) != '') ? $this->media_render('oxi_addons_street_map_marker_image', $value) : '#';
                $settings['infoWindow'] = ( $value['oxi_addons_street_map_desc'] ) ? $value['oxi_addons_street_map_desc'] : '';
                if (0 === $counter):
                    $map_settings['lat'] = ( $value['oxi_addons_street_map_latitude'] ) ? $value['oxi_addons_street_map_latitude'] : '';
                    $map_settings['lng'] = ( $value['oxi_addons_street_map_Longitude'] ) ? $value['oxi_addons_street_map_Longitude'] : '';
                endif;
                $counter++;
                $marker_settings[] = $settings;
            }
            $map_settings['zoomControl'] = ( $style['oxi_addons_street_map_zoom_control'] == 'yes') ? true : false;
            $map_settings['zoom'] = $style['oxi_addons_street_map_zoom-size'];
            $map_settings['scrollWheelZoom'] = ( $style['oxi_addons_street_map_scroll_wheel_zoom'] == 'yes') ? true : false;
            ?>

            <div class="open_street_map_style_1">
                <div id="sa-open-street-map"  class="sa-open-street-map" data-settings='<?php echo wp_json_encode($map_settings); ?>' data-map_markers='<?php echo wp_json_encode($marker_settings); ?>'></div>
            </div>
            <?php
        endif;
    }

}
