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

class Style_4 extends Templates {

    public function default_render($style, $child, $admin) {
        $oxiid = $this->oxiid;
        echo '<div class="map-position-style4 map-position-' . $oxiid . '" ' . $this->animation_render('sa_gm_animation', $style) . '>
                  <div class ="map-style4"   id="map-' . $oxiid . '"></div>
                  <div class ="pan-style4"   id="pan-' . $oxiid . '"></div>
              </div>
         ';
        $key = $title = $lat = $lng = "";
        if ($style['sa_gm_api'] != "" && $style['sa_gm_Longitude'] != "" && $style['sa_gm_latitude'] != "") {
            $key = $style['sa_gm_api'];
            $lat = $style['sa_gm_latitude'];
            $lng = $style['sa_gm_Longitude'];
        } else {
            echo '<script type="text/javascript">alert("Please give your correct APi key, latitude and longitude. ")</script>';
        }
        $title = $this->text_render($style['sa_gm_place_title']);

        echo '   
       
        <script>
          function initMap() {

            var uluru = { lat: parseFloat(' . $lat . ') , lng:  parseFloat(' . $lng . ') };
            var map = new google.maps.Map(
              document.getElementById("map-' . $oxiid . '"), { zoom: ' . $style['sa_gm_place_zoom'] . ', center: uluru }
            );
            marker = new google.maps.Marker({
              map: map,
              position: uluru,
              title: "' . $title . '",
              animation: google.maps.Animation.DROP
            });
              var panorama = new google.maps.StreetViewPanorama(
                  document.getElementById("pan-' . $oxiid . '"), {
                    position: uluru,
                    pov: {
                      heading: 34,
                      pitch: 10
                    }
                  });
              map.setStreetView(panorama);


            var contentString =`<div class="oxi_add_gmap_location_info-style4 oxi_add_gmap_location_info-' . $oxiid . '">
                                  <div class="oxi_add_gmap_location_info_body-style4 oxi_add_gmap_location_info_body-' . $oxiid . '">' . $this->text_render($style['sa_gm_place_location_info']) . '</div>
                               </div>
                                  `;



            var infoWindow = new google.maps.InfoWindow({
              content: contentString
            })
            marker.addListener("click", function () {
              infoWindow.open(map, marker);
            });

            

          }

        </script>';

        echo '<script src="https://maps.googleapis.com/maps/api/js?key=' . $key . '&callback=initMap"  async defer></script>';
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
                  <div   id="pan' . $oxiid . '"></div>
                </div>
            </div>
         </div>
        ';
        $key = $title = $lat = $lng = "";
        if ($styledata[63] != "" && $styledata[59] != "" && $styledata[61] != "") {
            $key = $styledata[63];
            $lat = $styledata[59];
            $lng = $styledata[61];
        } else {
            echo '<script type="text/javascript">alert("Please give your correct APi key, latitude and longitude. Otherwise always show your default data.")</script>';
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
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById("pan' . $oxiid . '"), {
              position: uluru,
              pov: {
                heading: 34,
                pitch: 10
              }
            });
        map.setStreetView(panorama);


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
                width: 50%;
                float: left;
                height: ' . $styledata[7] . 'px;`
               }
            #pan' . $oxiid . '{
                height: ' . $styledata[7] . 'px;
                width: 50%;
                float: left;
            }
            .map-position-' . $oxiid . '{

                float: left;
                height: ' . $styledata[7] . 'px;  /* The height is 400 pixels */
                width: ' . $styledata[3] . '%;  /* The width is the width of the web page */
                display: block;
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
