<?php

namespace SHORTCODE_ADDONS_UPLOAD\Video_box\Templates;

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

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
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
        echo '<div class="sa-video-box-container-style-3">
                <div class="sa-aspect-ratio-' . $style['aspect_ratio'] . '">
                    <div id="sa-video-box-container-' . $this->oxiid . '" class="sa-video-box-container" data-overlay="' . (($style['sa_video_box_image_switcher'] == 'yes') ? 'true' : 'false') . '" data-type="' . $video_type . '">
                        <div class="sa-video-box-video-container" >
                            <video src="' . $hosted_url . '"  ' . $video_params . '></video>
                        </div>
                        <div class="sa-video-box-image-container" style="background-image: url(' . $image . ')">
                        </div>';
        if ($style['sa_video_box_play_icon_switcher'] == 'yes') :
            echo '
                        <div class="sa-video-box-play-icon-container">
                            <i class="sa-video-box-play-icon fa fa-play fa-lg"></i>
                        </div>';
        endif;
        if ($style['sa_video_box_video_text_switcher'] == 'yes' && !empty($style['sa_video_box_description_text'])) :
            echo '
                        <div class="sa-video-box-description-container">
                            <p class="sa-video-box-text"><span>' . $this->text_render($style['sa_video_box_description_text']) . '</span></p>
                        </div>';
        endif;
        echo '
                    </div>
                </div>
            </div>';
    }

    public function inline_public_jquery()
    {
        $jquery = '';
        $jquery .= '
            var videoBoxElement = $(".' . $this->WRAPPER . ' .sa-video-box-container-style-3 .sa-video-box-container"),
            videoContainer = videoBoxElement.find(".sa-video-box-video-container"),
            type = videoBoxElement.data("type"),
            video = videoContainer.find("video"),
            vidSrc = video.attr("src");
            if (vidSrc != "") {
                videoBoxElement.on("click", function() {
                    $(video)
                        .get(0)
                        .play();
                    videoContainer.css({
                        opacity: "1",
                        visibility: "visible"
                    });
                    videoBoxElement.find(".sa-video-box-image-container").remove();
                });
            }
        ';
        return $jquery;
    }
}
