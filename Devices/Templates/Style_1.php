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
        $style['sa-el-device-orientation-landscape'] = '';
        echo ' <div class="oxi-addons-wrapper-device">
                    <div class = "sa-el-device-wrapper ' . $style['sa-el-device-orientation-landscape'].'">
                        <div class="sa-el-device">
                            <div class="sa-el-device__orientation far" data-device-orientation="' . $style['sa_devices_orientation'] . '"></div>
                            <div class="sa-el-device__shape" data-device-shape="' . $style['sa_devices_type'] . '">
                            </div>
                            <div class="sa-el-device__media">
                                <div class="sa-el-device__media__inner">
                                    <div class="sa-el-device__media__screen">
                                        <div class="sa-el-device__media__screen">
                                             <img src="https://www.shortcode-addons.com/wp-content/uploads/2019/06/small-1.jpeg" />
                                        </div>
                                    </div>
                                    <div class="sa-el-device__media__screen">
                                        <div class="sa-el-device__media__screen__inner">
                                            
                                        </div>
                                    </div>
                                <div>
                            </div>
                        </div>
                    </div>
                </div>';
    }

    public function inline_public_jquery() {
        $arraykey = $this->style;
        $jquery = '';
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

                    if ('yes' === $wrapper.find('.sa-el-device__orientation').data('device-orientation')) {
                        $wrapper.find('.sa-el-device__orientation').on('click', function () {
                            $wrapper.toggleClass('sa-el-device-orientation-landscape');
                        });
                    }
        //                    SAVideoPlayer($scope);

                })(jQuery);



                var SAVideoPlayer = function ($scope, $) {
                    $scope.elementSettings = sa.getElementSettings($scope);

                    var $video = $scope.find('.sa-el-video-player'),
                            videoPlayerArgs = {
                                playOnViewport: 'yes' === $scope.elementSettings.video_play_viewport,
                                stopOffViewport: 'yes' === $scope.elementSettings.video_stop_viewport,
                                endAtLastFrame: 'yes' === $scope.elementSettings.video_end_at_last_frame,
                                restartOnPause: 'yes' === $scope.elementSettings.video_restart_on_pause,
                                stopOthersOnPlay: 'yes' === $scope.elementSettings.video_stop_others,
                            };

                    if ('undefined' !== typeof $scope.elementSettings.video_speed) {
                        videoPlayerArgs.speed = $scope.elementSettings.video_speed.size;
                    }

                    if (!$video.length)
                        return;

                    $scope.init = function () {
                        if ('undefined' !== typeof $scope.elementSettings.video_volume) {
                            videoPlayerArgs.volume = $scope.elementSettings.video_volume.size;
                        }

                        $video.SAVideoPlayer(videoPlayerArgs);
                    };

                    $scope.init();
                };
            }, 2000);
        </script>
        <?php
        return $jquery;
    }

}
