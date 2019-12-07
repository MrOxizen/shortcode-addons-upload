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

class Style_2 extends Templates {

    public function default_render($style, $child, $admin) {

        echo '<div class="map-position-style2 map-position-' . $this->oxiid . '" ' . $this->animation_render('sa_gm_animation', $style) . '>
                  <div  class="map-style2" id="map' . $this->oxiid . '"></div>
              </div>
         ';

        $key = $title = $lat = $lng = "";
        if ($style['sa_gm_api'] != "" && $style['sa_gm_Longitude'] != "" && $style['sa_gm_latitude'] != "") {
            $key = $style['sa_gm_api'];
            $lat = $style['sa_gm_latitude'];
            $lng = $style['sa_gm_Longitude'];
        } else {
            echo '<script type="text/javascript">alert("Please give your correct APi key, latitude and longitude.")</script>';
        }
        $title = $this->text_render($style['sa_gm_place_title']);

        $oxiid = $this->oxiid;
        $jquery = '';
        $jquery .= ' <script>
                  function initMap() {

                    var loglat = { lat: parseFloat(' . $lat . ') , lng:  parseFloat(' . $lng . ') };
                    var map = new google.maps.StreetViewPanorama(
                      document.getElementById("map' . $oxiid . '"), { '
                . '             zoom: ' . $style['sa_gm_place_zoom'] . ', 
                                center: loglat,
                                position: loglat,
                             }
                    );
                    marker = new google.maps.Marker({
                      map: map,
                      position: loglat,
                      title: "' . $title . '",
                      animation: google.maps.Animation.DROP
                    });


                    var contentString =`<div class="oxi_add_gmap_location_info-style2 oxi_add_gmap_location_info-' . $oxiid . '">
                                          <div class="oxi_add_gmap_location_info_body-style2 oxi_add_gmap_location_info_body-' . $oxiid . '">' . $this->text_render($style['sa_gm_place_location_info']) . '</div>
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

        $jquery .= '<script src="https://maps.googleapis.com/maps/api/js?key=' . $key . '&callback=initMap"  async defer></script>';



        echo $jquery;
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
                  <div id="map1' . $oxiid . '"></div>
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
      var map = new google.maps.StreetViewPanorama(
        document.getElementById("map1' . $oxiid . '"), {
                zoom: ' . $styledata[57] . ',
                center: uluru ,
                position: uluru
                }
      );
      
      var image = "";
      marker = new google.maps.Marker({
        map: map,
        position: uluru,
        icon: image,
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
            #map1' . $oxiid . ' {
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
       ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
