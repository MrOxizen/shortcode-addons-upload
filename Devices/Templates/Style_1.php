<?php

namespace SHORTCODE_ADDONS_UPLOAD\Devices\Templates;

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
        wp_enqueue_script('video-player-min', SA_ADDONS_UPLOAD_URL . '/Devices/File/video-player.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('iphone-inline-video-min', SA_ADDONS_UPLOAD_URL . '/Devices/File/iphone-inline-video.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery-appear-min', SA_ADDONS_UPLOAD_URL . '/Devices/File/jquery-appear.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'jquery-appear-min';
    }

    public function default_render($style, $child, $admin) {
        $devicetype = $style['sa_devices_type'];
        $skin = $style['sa_device_skin'];
        $style['sa-el-device-orientation-landscape'] = '';
        
        echo ' <div class="oxi-addons-wrapper-device">
                    <div class = "sa-el-device-wrapper sa-el-device-type-'.$devicetype.' ' . $style['sa-el-device-orientation-landscape'].'">
                        <div class="sa-el-device sa-el-device-skin-'.$skin.'">
                            <div class="sa-el-device__shape" data-device-shape="' . $style['sa_devices_type'] . '">
                            </div>
                            <div class="sa-el-device__media">
                                <div class="sa-el-device__media__inner">
                                    <div class="sa-el-device__media__screen">
                                        <div class="sa-el-device__media__screen">';
                                            if($style['sa_devices_media_type'] == "image"){
                                             echo '<img src="' . $this->media_render('sa_devices_image', $style).'" />';
                                            }else{
                                               echo $this->video_render($style, $child, $admin); 
                                            }
                                       echo ' </div>
                                    </div>
                                <div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>';
    }
    public function video_render($style, $child, $admin)
    {
        $video_type = 'self';
        $hosted_url = $image = $video_params = $video_link = '';
        if ($this->file_render('sa_video_box_video_link', $style) != '') {
            $video_link .= $this->file_render('sa_video_box_video_link', $style);
        }
        if ($video_link != '') {
            if (array_key_exists('sa_video_box_image_switcher', $style) && $style['sa_video_box_image_switcher'] == 'yes') {
                if ($this->media_render('sa_video_box_image', $style) != '') {
                    $image = $this->media_render('sa_video_box_image', $style);
                }
            }
            $hosted_url .= $this->file_render('sa_video_box_video_link', $style);
            $mute = $style['sa_video_box_mute'];
            $loop = $style['sa_video_box_loop'];
            $controls = $style['sa_video_box_controls'];
            if ($style['sa_video_box_start'] != '' || $style['sa_video_box_end'] != '') {
                $hosted_url .= '#t=';
                if ($style['sa_video_box_start'] != '') {
                    $hosted_url .= $style['sa_video_box_start'];
                }
                if ($style['sa_video_box_end'] != '') {
                    $hosted_url .= ',' . $style['sa_video_box_end'];
                }
            }
            if ($controls == 'yes') {
                $autoplay = $style['sa_video_box_self_autoplay'];
                if ($controls) {
                    $video_params .= 'controls ';
                }
                if ($mute) {
                    $video_params .= 'muted ';
                }
                if ($loop) {
                    $video_params .= 'loop ';
                }
                if ($autoplay) {
                    $video_params .= 'autoplay';
                }
            }
        }
        echo '<div class="oxi-addons-device-container-style-3">
                <div class="sa-aspect-ratio-' . $style['aspect_ratio'] . '">
                    <div id="oxi-addons-device-container-' . $this->oxiid . '" class="oxi-addons-device-container" data-overlay="' . (($style['sa_video_box_image_switcher'] == 'yes') ? 'true' : 'false') . '" data-type="' . $video_type . '">
                        <div class="oxi-addons-device-video-container" >
                            <video src="' . $hosted_url . '"  ' . $video_params . '></video>
                        </div>
                        <div class="oxi-addons-device-image-container" style="background-image: url(' . $image . ')">
                        </div>';
        if ($style['sa_video_box_play_icon_switcher'] == 'yes') :
            echo '
                        <div class="oxi-addons-device-play-icon-container">
                            <i class="oxi-addons-device-play-icon fa fa-play fa-lg"></i>
                        </div>';
        endif;
        echo '
                    </div>
                </div>
            </div>';
    }

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';
        $jquery .= '
           
            var videoBoxElement = $(".' . $this->WRAPPER . ' .oxi-addons-device-container-style-3 .oxi-addons-device-container"),
            videoContainer = videoBoxElement.find(".oxi-addons-device-video-container"),
            type = videoBoxElement.data("type"),
            video = videoContainer.find("video"),
            vidSrc = video.attr("src");
            console.log(vidSrc);
            if (vidSrc != "") {
                videoBoxElement.on("click", function() {
                    $(video)
                        .get(0)
                        .play();
                    videoContainer.css({
                        opacity: "1",
                        visibility: "visible"
                    });
                    videoBoxElement.find(".oxi-addons-device-image-container").remove();
                });
            }
        ';
        ?>
        <script>

            setTimeout(function () {
                var SADevices = (function ($) {
                    var $wrapper = $('.<?php echo $this->WRAPPER; ?> .sa-el-device-wrapper'),
                            $device = $wrapper.find('.sa-el-device'),
                            $shape = $wrapper.find('.sa-el-device__shape'),
                            url = null,
                            device_type = null,
                            svg = null;

                    if (!$wrapper.find('.sa-el-device__shape').data('device-shape')) {
                        device_type = 'phone';
                    } else {
                        device_type = $wrapper.find('.sa-el-device__shape').data('device-shape');
                    }
                    url = shortcode_addons_data.saupload + 'Devices/Shape/' + device_type + '.svg';
                    $.get(url, function (data) {
                        $shape.html(data.childNodes[0]);
                        svg = $shape.find("svg.devices-elementor-svg").get(0);
                    });
        //                    SAVideoPlayer($scope);

                })(jQuery);

            }, 2000);
        </script>
        <?php
        
        return $jquery;
    }

}

//
//        $sss = ''
//                . '<div class="sa-el-device__orientation far" data-device-orientation="' . $style['sa_devices_orientation'] . '"></div>
//                                    <div class="sa-el-device__media__screen">
//                                        <div class="sa-el-device__media__screen__inner">
//                                            
//                                        </div>
//                                    </div>';
