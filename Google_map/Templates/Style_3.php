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

class Style_3 extends Templates {

    public function default_render($style, $child, $admin) {



        echo'<div class="map-position-style3" ' . $this->animation_render('sa_gm_animation', $style) . '>
                          <div class ="map-style3" id="map-' . $this->oxiid . '"></div>
                        </div>
                        ';

        $lat = [];
        $lng = [];
        $title = [];
        $info = [];
        $icon = [];
        $repeater = (array_key_exists('sa_gm_repeater', $style) && is_array($style['sa_gm_repeater'])) ? $style['sa_gm_repeater'] : [];
        foreach ($repeater as $key => $value) {

            $lat[] = ['lat' => $this->text_render($value['sa_gm_latitude'])];
            $lng[] = ['lng' => $this->text_render($value['sa_gm_Longitude'])];
            $title[] = ['title' => $this->text_render($value['sa_gm_locatio_title'])];
            $info[] = ['info' => $this->text_render($value['sa_gm_locatio_info'])];
            $icon[] = ['icon' => $this->media_render('sa_gm_icon_media', $value)];
        }
//                            echo '<pre>';
//                            print_r($icon);
//                            echo '</pre>';

        echo ' 
       
  <script>
    function initMap() {
       
      var style1 = "";
      if( ' . $style['sa_gm_color_theme'] . ' == 1){
          style1 =[]
      }
      else if( ' . $style['sa_gm_color_theme'] . ' == 2){
       style1 =[{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
        }
        else if(' . $style['sa_gm_color_theme'] . ' == 3){
         style1 = [{"elementType":"geometry","stylers":[{"color":"#ebe3cd"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#523735"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f1e6"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#c9b2a6"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"color":"#dcd2be"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#ae9e90"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#93817c"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#a5b076"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#447530"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#f5f1e6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fdfcf8"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#f8c967"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#e9bc62"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#e98d58"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#db8555"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#806b63"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"transit.line","elementType":"labels.text.fill","stylers":[{"color":"#8f7d77"}]},{"featureType":"transit.line","elementType":"labels.text.stroke","stylers":[{"color":"#ebe3cd"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#b9d3c2"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#92998d"}]}]
        } 
        else if(' . $style['sa_gm_color_theme'] . ' == 4){
         style1 =[{"elementType":"geometry","stylers":[{"color":"#212121"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#212121"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#757575"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"administrative.land_parcel","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#181818"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"poi.park","elementType":"labels.text.stroke","stylers":[{"color":"#1b1b1b"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#2c2c2c"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#8a8a8a"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#373737"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#3c3c3c"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#3d3d3d"}]}];
        }
        else if(' . $style['sa_gm_color_theme'] . ' == 5){
         style1 = [{"elementType":"geometry","stylers":[{"color":"#242f3e"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#746855"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#242f3e"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#263c3f"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#6b9a76"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#38414e"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#212a37"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#9ca5b3"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#746855"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#1f2835"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#f3d19c"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#2f3948"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#17263c"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#515c6d"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#17263c"}]}];
        } 
        else {
         style1 = [{"elementType":"geometry","stylers":[{"color":"#1d2c4d"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#8ec3b9"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#1a3646"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"color":"#4b6878"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#64779e"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"color":"#4b6878"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#334e87"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#023e58"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#283d6a"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#6f9ba5"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#023e58"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#3C7680"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#304a7d"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#98a5be"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#2c6675"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#255763"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#b0d5ce"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#023e58"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"color":"#98a5be"}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#283d6a"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#3a4762"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#0e1626"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#4e6d70"}]}];
        }; 
      
     // The location of Uluru , 
        var L1 = parseFloat(' . $lat[0]['lat'] . ');
        var L2 = parseFloat(' . $lng[0]['lng'] . ');

        var uluru = { lat: L1, lng: L2 };
     
        var map = new google.maps.Map(
        document.getElementById("map-' . $this->oxiid . '"), { 
            zoom: ' . $style['sa_gm_place_zoom'] . ',
            center: uluru,
            disableDefaultUI: ' . (array_key_exists('sa_gm_map_ui', $style) && $style['sa_gm_map_ui'] != '0' ? 'true' : 'false') . ',
            styles: style1
            }
      );
      
      var obj = [
                    {
                        lat: ' . json_encode($lat) . ',
                        lng: ' . json_encode($lng) . ',
                        title: ' . json_encode($title) . ',
                        info: ' . json_encode($info) . ',
                        icon: ' . json_encode($icon) . '
                    }
                ]
      obj.forEach(function(value){
            var lat = value.lat;
            var lng = value.lng;
            var title = value.title;
            var info = value.info;
            var icon = value.icon; 
            lat.forEach(function(latValue, itemkey){  
                    addMarker({
                        position:{ lat: parseFloat(latValue.lat), lng: parseFloat(lng[itemkey].lng) },
                        iconImg:icon[itemkey].icon,
                        title: title[itemkey].title, 
                        content: info[itemkey].info
                    });

            });
       })
        
    
      function addMarker(porps){
            var marker = new google.maps.Marker({
                map: map,
                position: porps.position,
                //icon: porps.iconImg,
                title: porps.title,
                //content:props.content,
                //draggable: true,
                animation: google.maps.Animation.DROP
            })
            if( porps.iconImg){
                marker.setIcon(porps.iconImg);
            }
            
            if( porps.content){
                var infoWindow = new google.maps.InfoWindow({
                  content: porps.content
                })
                marker.addListener("click", function () {
                    infoWindow.open(map, marker);
                });
            }
        }
    }
        </script>';

        $key = '';
        if ($this->text_render($style['sa_gm_api']) != 'AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo' && $this->text_render($style['sa_gm_api']) != '') {
            $key = $this->text_render($style['sa_gm_api']);
        } else {
            $key = 'AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo';
        }

        echo '
          <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=' . $key . '&callback=initMap">
          </script>

        ';
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $stylename = $styledata['style_name'];
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);

        $css = $image = '';
        echo '  <div class="oxi-addons-container" > 
                <div class="oxi-addons-row">
                    ';


        echo '<div class="oxi-addons-col-12 oxi_add_user_info-' . $oxiid . '">
                   <div class= "oxi_add_user_info_body-' . $oxiid . '">
                        <div class="oxi_add_gMap_info">
                            <h3>Edit or Delete your Maps information</h3><br><br>
                        </div>';
        foreach ($listdata as $value) {
            $files = explode('||#||', $value['files']);


            echo '  <div class="" >
                                            <div class="oxi-info-body-' . $oxiid . '">
                                                <div class="oxi-info-contetn-' . $oxiid . '">
                                                    Name : ' . OxiAddonsTextConvert($files[11]) . '
                                                </div>
                                                <div class="oxi-info-contetn-' . $oxiid . '">
                                                     Title : ' . OxiAddonsTextConvert($files[5]) . '
                                                </div>
                                                
                                            </div>';

            // edit button

            echo '</div>';
        }

        echo'           </div>
                   </div>
            
                        <div class="map-position" ' . OxiAddonsAnimation($styledata, 45) . '>
                          <div id="map"></div>
                        </div>
                        ';

        $lat = [];
        $lng = [];
        $title = [];
        $info = [];
        $icon = [];
        foreach ($listdata as $key => $value) {
            $files = explode('||#||', $value['files']);
            $lat[] = ['lat' => json_decode(OxiAddonsTextConvert($files[1]))];
            $lng[] = ['lng' => json_decode(OxiAddonsTextConvert($files[3]))];
            $title[] = ['title' => OxiAddonsTextConvert($files[5])];
            $info[] = ['info' => OxiAddonsTextConvert($files[7])];
            $icon[] = ['icon' => OxiAddonsTextConvert($files[9])];
        }
//                            echo '<pre>';
//                            print_r($title);
//                            echo '</pre>';
        echo'       
                </div>
            </div>';

        echo ' 
       
  <script>
    function initMap() {
       
      var style1 = "";
      if( ' . $styledata[65] . ' == 1){
          style1 =[]
      }
      else if( ' . $styledata[65] . ' == 1){
       style1 =[
                {
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#f5f5f5"
                    }
                  ]
                },
                {
                  "elementType": "labels.icon",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#616161"
                    }
                  ]
                },
                {
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    {
                      "color": "#f5f5f5"
                    }
                  ]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#bdbdbd"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#eeeeee"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#757575"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#e5e5e5"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#ffffff"
                    }
                  ]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#757575"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#dadada"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#616161"
                    }
                  ]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                },
                {
                  "featureType": "transit.line",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#e5e5e5"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#eeeeee"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#c9c9c9"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                }
              ];
        }
        else if(' . $styledata[65] . ' == 2){
         style1 = [
                    {
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#ebe3cd"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#523735"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#f5f1e6"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#c9b2a6"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.land_parcel",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#dcd2be"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.land_parcel",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#ae9e90"
                        }
                      ]
                    },
                    {
                      "featureType": "landscape.natural",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#93817c"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#a5b076"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#447530"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#f5f1e6"
                        }
                      ]
                    },
                    {
                      "featureType": "road.arterial",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#fdfcf8"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#f8c967"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#e9bc62"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway.controlled_access",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#e98d58"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway.controlled_access",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#db8555"
                        }
                      ]
                    },
                    {
                      "featureType": "road.local",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#806b63"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#8f7d77"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#ebe3cd"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.station",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#b9d3c2"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#92998d"
                        }
                      ]
                    }
                  ];
        } 
        else if(' . $styledata[65] . ' == 3){
         style1 = [
                    {
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#212121"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.icon",
                      "stylers": [
                        {
                          "visibility": "off"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#757575"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#212121"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#757575"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.country",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#9e9e9e"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.land_parcel",
                      "stylers": [
                        {
                          "visibility": "off"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.locality",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#bdbdbd"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#757575"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#181818"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#616161"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#1b1b1b"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#2c2c2c"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#8a8a8a"
                        }
                      ]
                    },
                    {
                      "featureType": "road.arterial",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#373737"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#3c3c3c"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway.controlled_access",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#4e4e4e"
                        }
                      ]
                    },
                    {
                      "featureType": "road.local",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#616161"
                        }
                      ]
                    },
                    {
                      "featureType": "transit",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#757575"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#000000"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#3d3d3d"
                        }
                      ]
                    }
                  ];
        }
        else if(' . $styledata[65] . ' == 4
        ){
         style1 = [
                    {
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#242f3e"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#746855"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#242f3e"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.locality",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#d59563"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#d59563"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#263c3f"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#6b9a76"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#38414e"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#212a37"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#9ca5b3"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#746855"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#1f2835"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#f3d19c"
                        }
                      ]
                    },
                    {
                      "featureType": "transit",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#2f3948"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.station",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#d59563"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#17263c"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#515c6d"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#17263c"
                        }
                      ]
                    }
                  ];
        } 
        else {
         style1 = [
                    {
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#1d2c4d"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#8ec3b9"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#1a3646"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.country",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#4b6878"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.land_parcel",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#64779e"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.province",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#4b6878"
                        }
                      ]
                    },
                    {
                      "featureType": "landscape.man_made",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#334e87"
                        }
                      ]
                    },
                    {
                      "featureType": "landscape.natural",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#023e58"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#283d6a"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#6f9ba5"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#1d2c4d"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#023e58"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#3C7680"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#304a7d"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#98a5be"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#1d2c4d"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#2c6675"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#255763"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#b0d5ce"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#023e58"
                        }
                      ]
                    },
                    {
                      "featureType": "transit",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#98a5be"
                        }
                      ]
                    },
                    {
                      "featureType": "transit",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#1d2c4d"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#283d6a"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.station",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#3a4762"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#0e1626"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#4e6d70"
                        }
                      ]
                    }
                  ];
        }; 
      
     // The location of Uluru , 
        var L1 = ' . OxiAddonsTextConvert($files[1]) . '
        var L2 = ' . OxiAddonsTextConvert($files[3]) . '
         
        var uluru = { lat: L1, lng: L2 };
     
        var map = new google.maps.Map(
        document.getElementById("map"), { 
            zoom: ' . $styledata[49] . ',
            center: uluru,
            disableDefaultUI: ' . $styledata[67] . ',
            styles: style1
            }
      );
      
      var obj = [
                    {
                        lng: ' . json_encode($lng) . ',
                        lat: ' . json_encode($lat) . ',
                        title: ' . json_encode($title) . ',
                        info: ' . json_encode($info) . ',
                        icon: ' . json_encode($icon) . '
                    }
                ]
      obj.forEach(function(value){
            var lat = value.lat;
            var lng = value.lng;
            var title = value.title;
            var info = value.info;
            var icon = value.icon; 
            
            lat.forEach(function(latValue, itemkey){  
                   console.log(icon[itemkey].icon);
                   addMarker({
                        position:{ lat: latValue.lat, lng: lng[itemkey].lng },
                        iconImg:icon[itemkey].icon,
                        title: title[itemkey].title, 
                        content: info[itemkey].info
                    });

            });
       })
        
    
      function addMarker(porps){
            var marker = new google.maps.Marker({
                map: map,
                position: porps.position,
                //icon: porps.iconImg,
                title: porps.title,
                //content:props.content,
                //draggable: true,
                animation: google.maps.Animation.DROP
            })
            if( porps.iconImg){
                marker.setIcon(porps.iconImg);
            }
            
            if( porps.content){
                var infoWindow = new google.maps.InfoWindow({
                  content: porps.content
                })
                marker.addListener("click", function () {
                    infoWindow.open(map, marker);
                });
            }
        }
    }
</script>';

        $key = '';
        if (OxiAddonsTextConvert($styledata[3]) != 'AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo' && OxiAddonsTextConvert($styledata[3]) != '') {
            $key = OxiAddonsTextConvert($styledata[3]);
        } else {
            $key = 'AIzaSyDd40qP9Qll71WJ0IBZtUrtAs--klcYLNo';
        }

        echo '
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=' . $key . '&callback=initMap">
  </script>
    
';

        $css .= '       
            #map {
                width: ' . $styledata[5] . '%;
                height: ' . $styledata[9] . 'px;
              }
            .oxi_add_user_info-' . $oxiid . '{
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;
                    padding: 20px;

            }
            .oxi_add_user_info_body-' . $oxiid . '{
                    background: #fff;
                    padding: 20px;
                    border-width: 2px;
                    border-color: black;
                    border-style: solid;
                    border-radius: 10px;
            }
            .oxi-info-body-' . $oxiid . '{
                    background: #e2e2e28a;
                    padding: 10px 10px;
                    margin: 5px;
                        border-radius: 5px;

            }
            .oxi-info-contetn-' . $oxiid . '{
                padding: 0px 0px 5px 0px;
                font-size: 15px;
                color:#000;
            }
            
            .gm-style .gm-style-iw-d {
                box-sizing: border-box;
                overflow: auto;
                width: ' . $styledata[53] . 'px;
                font-size: ' . $styledata[51] . 'px;
                color: ' . $styledata[57] . ';
                ' . OxiAddonsFontSettings($styledata, 59) . '
            }
            .gm-style .gm-style-iw-d h1,
            .gm-style .gm-style-iw-d h2,
            .gm-style .gm-style-iw-d h3,
            .gm-style .gm-style-iw-d h4,
            .gm-style .gm-style-iw-d h5,
            .gm-style .gm-style-iw-d h6{
                text-align: center;
                display: block;
            }
       ';
        wp_add_inline_style('shortcode-addons-style', $css);
    }

}
