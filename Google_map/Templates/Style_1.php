<?php

namespace SHORTCODE_ADDONS_UPLOAD\Google_map\Templates;

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
       
        
    }

    public function inline_public_jquery() {
        

        $jquery .= "";


        return $jquery;
    }

    

    public function old_render() {
        $styledata = $this->dbdata;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $css = '';
        $styledata = explode('|', $stylefiles[0]);
        echo '<div class="oxi-addons-container">
            <div class="oxi-addons-row">
                <div class="map-position-' . $oxiid . '" ' . OxiAddonsAnimation($styledata, 53) . '>
                  <div   id="map' . $oxiid . '"></div>
                </div>
            </div>
         </div>
        ';
        $key = $title = $lat = $lng = "";
        if ($styledata[63] != "" && $styledata[59] != "" && $styledata[61] != "") {
            if ($styledata[63] !== 'AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo') {
                $key = $styledata[63];
                $lat = $styledata[59];
                $lng = $styledata[61];
            } else {
                $key = "AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo";
                $lat = 1.361827;
                $lng = 103.853342;
                //echo '<script type="text/javascript">alert("Please give your  correct APi key.")</script>';
            }
        } else {
            $key = "AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo";
            $lat = 1.361827;
            $lng = 103.853342;
            //echo '<script type="text/javascript">alert("Please give your correct APi key, latitude and longitude. Otherwise always show your default data.")</script>';
        }
        $title = OxiAddonsTextConvert($stylefiles[5]);


        echo '   
       
  <script>
    function initMap() {
      
      var uluru = { lat: ' . $lat . ', lng: ' . $lng . ' };
      var map = new google.maps.Map(
        document.getElementById("map' . $oxiid . '"), { zoom: ' . $styledata[57] . ', center: uluru }
      );
      marker = new google.maps.Marker({
        map: map,
        position: uluru,
        title: "' . OxiAddonsTextConvert($stylefiles[5]) . '",
        animation: google.maps.Animation.DROP
      });


      var contentString =`<div class="oxi_add_gmap_location_info-' . $oxiid . '">
                            <div class="oxi_add_gmap_location_info_body-' . $oxiid . '">' . OxiAddonsTextConvert($stylefiles[7]) . '</div>
                         </div>
                            `;



      var infoWindow = new google.maps.InfoWindow({
        content: contentString
      })
      marker.addListener("click", function () {
        infoWindow.open(map, marker);
      });

      marker.addListener("click", toggleBounce);

    }

    function toggleBounce() {
        if(' . $styledata[65] . ' == 1){
          if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
          } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
          }
        }else{
            marker.setAnimation(null);
        }
    }

  </script>';

        echo '<script src="https://maps.googleapis.com/maps/api/js?key=' . $key . '&callback=initMap"  async defer></script>';

        $css .= '       
            #map' . $oxiid . ' {
                height: ' . $styledata[7] . 'px;  /* The height is 400 pixels */
                width: ' . $styledata[3] . '%;  /* The width is the width of the web page */
               }
            .map-position-' . $oxiid . '{

                 display: flex;
                 justify-content: center;
                 flex-direction: column;
                 align-items: center;
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
                 margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
            }
            .oxi_add_gmap_location_info-' . $oxiid . '{
                
                width: ' . $styledata[69] . 'px;
                height: ' . $styledata[71] . 'px;
            }
            .oxi_add_gmap_location_info_body-' . $oxiid . '{
                font-size: ' . $styledata[67] . 'px;
                color: ' . $styledata[73] . ';
                ' . OxiAddonsFontSettings($styledata, 47) . '
            }
            .oxi_add_gmap_location_info_body-' . $oxiid . ' h1,
            .oxi_add_gmap_location_info_body-' . $oxiid . ' h2,
            .oxi_add_gmap_location_info_body-' . $oxiid . ' h3,
            .oxi_add_gmap_location_info_body-' . $oxiid . ' h4,
            .oxi_add_gmap_location_info_body-' . $oxiid . ' h5,
            .oxi_add_gmap_location_info_body-' . $oxiid . ' h6{
                text-align: center;
                display: block;
            }
                
            
       ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
