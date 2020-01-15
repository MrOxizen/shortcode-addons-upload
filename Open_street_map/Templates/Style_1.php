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
    public function maplink(){
        echo '<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>';
    }
    
    public function default_render($style, $child, $admin) {
        ?>
        <?php
        echo '<style>
                    #map {position: absolute; top: 0; bottom: 0; left: 0; right: 0;};
                </style>';
        
        echo '<div id="map"></div>';

//        $key = $title = $lat = $lng = "";
//        $key = $style['oxi_addons_street_map_api'];
//            $lat = $style['sa_gm_latitude'];
//            $lng = $style['sa_gm_Longitude'];
//        if ($style['oxi_addons_street_map_api'] != "" && $style['sa_gm_Longitude'] != "" && $style['sa_gm_latitude'] != "") {
//            
//        } else {
//            echo '<script type="text/javascript">alert("Please give your correct APi key, latitude and longitude.")</script>';
//        }
        //$title = $this->text_render($style['sa_gm_place_title']);

        ?>
        
        <script type="text/javascript">
            var endPointLocation = new L.LatLng(40.7401, -73.9891);
            var map = new L.Map("map", {
                center: endPointLocation,
                zoom: 12,
                layers: new L.TileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png")
            });
            var marker = new L.Marker(endPointLocation);
            marker.bindPopup("End Point Corporation");
            map.addLayer(marker);
        </script>
        
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<?php
    }
}
