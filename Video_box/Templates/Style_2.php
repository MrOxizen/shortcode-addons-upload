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

class Style_2 extends Templates
{
    private static $provider_match_masks = [
        'youtube' => '/^.*(?:youtu\.be\/|youtube(?:-nocookie)?\.com\/(?:(?:watch)?\?(?:.*&)?vi?=|(?:embed|v|vi|user)\/))([^\?&\"\'>]+)/',
        'vimeo' => '/^.*vimeo\.com\/(?:[a-z]*\/)*([‌​0-9]{6,11})[?]?.*/',
        'dailymotion' => '/^.*dailymotion.com\/(?:video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/',
    ];
    private static $embed_patterns = [
        'youtube' => 'https://www.youtube{NO_COOKIE}.com/embed/{VIDEO_ID}?feature=oembed',
        'vimeo' => 'https://player.vimeo.com/video/{VIDEO_ID}#t={TIME}',
        'dailymotion' => 'https://dailymotion.com/embed/video/{VIDEO_ID}',
    ];
    public function default_render($style, $child, $admin)
    {
        $video_type = 'vimeo';
        $video_link = $this->text_render($style['sa_video_box_video_link']);
        $data_src =$image = '';
        if ($video_link !== '') {   
            $params     = $this->get_video_params();    
            $thumbnail  = $this->get_video_thumbnail($params['id']);
            $image      = sprintf('url(\'%s\')', $thumbnail);

            $link  = $params['link'];   
            $mute = $style['sa_video_box_mute'];
            $loop = $style['sa_video_box_loop'];
            $controls = $style['sa_video_box_controls'];

            $options = '?rel';
            $options .= '&muted=';
            $options .= 'yes' === $mute ? '1' : '0';
            $options .= '&loop=';
            $options .= 'yes' === $loop ? '1' : '0';
            $options .= '&controls=';
            $options .= 'yes' === $controls ? '1' : '0';

            if ($loop) {
                $options .= '&playlist=' . $params['id'];
            }
            $data_src = $link . $options;

        }
        echo '<div class="sa-video-box-container-style-2">
                <div class="sa-aspect-ratio-' . $style['aspect_ratio'] . '">
                    <div id="sa-video-box-container-' . $this->oxiid . '" class="sa-video-box-container" data-overlay="' . (($style['sa_video_box_image_switcher'] == 'yes') ? 'true' : 'false') . '" data-type="' . $video_type . '">
                        <div class="sa-video-box-video-container" data-src="' . $data_src . '">
                        </div>
                        <div class="sa-video-box-image-container" style="background-image: ' . $image . '">
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
    private function get_video_thumbnail($id = '')
    {
        $settings       = $this->style;
        $video_link = $this->text_render($settings['sa_video_box_video_link']);
        $overlay        = $settings['sa_video_box_image_switcher'];
        if ('yes' !== $overlay) {
            $thumbnail_src  = self::get_video_thumbnail_gen($id, $video_link);
        } else {
            if ($this->media_render('sa_video_box_image', $settings) != '') {
                $thumbnail_src  = $this->media_render('sa_video_box_image', $settings);
            }
        }
        return $thumbnail_src;
    }

    private function get_video_params()
    {
        $settings   = $this->style;
        $type       = 'vimeo';
        $link       = $settings['sa_video_box_video_link'];
        if (!empty($link)) {
            if ('vimeo' === $type) {
                $id = substr($link, strpos($link, '.com/') + 5);
                $link = sprintf('https://player.vimeo.com/video/%s', $id);
            }
        }
        return [
            'link' => $link,
            'id'    => $id
        ];
    }
    public static function get_video_thumbnail_gen($id, $video_link, $size = '')
    {
        if ('' !== $video_link) {
            $vimeo_data         = wp_remote_get('http://www.vimeo.com/api/v2/video/' . intval($id) . '.php');
            if (isset($vimeo_data['response']['code']) && '200' == $vimeo_data['response']['code']) {
                $response       = unserialize($vimeo_data['body']);
                $thumbnail_src  = isset($response[0]['thumbnail_large']) ? $response[0]['thumbnail_large'] : false;
            }
        } else {
            $thumbnail_src = 'transparent';
        }
        return $thumbnail_src;
    }
    public static function get_video_properties($video_url)
    {
        foreach (self::$provider_match_masks as $provider => $match_mask) {
            preg_match($match_mask, $video_url, $matches);

            if ($matches) {
                return [
                    'provider' => $provider,
                    'video_id' => $matches[1],
                ];
            }
        }

        return null;
    }
    public static function get_embed_url($video_url, array $embed_url_params = [], array $options = [])
    {
        $video_properties = self::get_video_properties($video_url);
        if (!$video_properties) {
            return null;
        }
        $embed_pattern = self::$embed_patterns[$video_properties['provider']];
        $replacements = [
            '{VIDEO_ID}' => $video_properties['video_id'],
        ];
        if ('vimeo' === $video_properties['provider']) {
            $time_text = '';

            if (!empty($options['start'])) {
                $time_text = date('H\hi\ms\s', $options['start']);
            }
            $replacements['{TIME}'] = $time_text;
        }
        $embed_pattern = str_replace(array_keys($replacements), $replacements, $embed_pattern);
        return add_query_arg($embed_url_params, $embed_pattern);
    }


    public function inline_public_jquery()
    {
        $jquery = '';
        $jquery .= '
            var videoBoxElement = $(".' . $this->WRAPPER . ' .sa-video-box-container-style-2 .sa-video-box-container"),
            videoContainer = videoBoxElement.find(".sa-video-box-video-container"),
            type = videoBoxElement.data("type"),
            video,
            vidSrc,
            checkRel;
            if (videoContainer.data("src") !="") {
                videoBoxElement.on("click", function() {
                    vidSrc = videoContainer.data("src");
                    vidSrc = vidSrc + "&autoplay=1";
                    var iframe = $("<iframe/>");
                    checkRel = vidSrc.indexOf("rel=0");
                    iframe.attr("src", vidSrc);
                    iframe.attr("frameborder", "0");
                    iframe.attr("allowfullscreen", "1");
                    iframe.attr("allow", "autoplay;encrypted-media;");
                    videoContainer.css("background", "#000");
                    videoContainer.html(iframe);
                    videoBoxElement.find(".sa-video-box-image-container").remove();
                });
            }
        ';
        return $jquery;
    }
}
