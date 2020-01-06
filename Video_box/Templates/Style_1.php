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

class Style_1 extends Templates
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
        $video_link = $this->text_render($style['sa_video_box_video_link']);
        $type = 'youtube';
        $data_src = $image = '';
        if ($video_link !== '') {
            $params     = $this->get_video_params();

            $thumbnail  = $this->get_video_thumbnail($params['id']);

            $image      = sprintf('url(\'%s\')', $thumbnail);


            $link  = $params['link'];

            $related = $style['sa_video_box_suggested_videos'];

            $mute = $style['sa_video_box_mute'];

            $loop = $style['sa_video_box_loop'];

            $controls = $style['sa_video_box_controls'];

            $options = 'youtube' === $type ? '&rel=' : '?rel';
            $options .= 'yes' === $related ? '1' : '0';
            $options .= 'youtube' === $type ? '&mute=' : '&muted=';
            $options .= 'yes' === $mute ? '1' : '0';
            $options .= '&loop=';
            $options .= 'yes' === $loop ? '1' : '0';
            $options .= '&controls=';
            $options .= 'yes' === $controls ? '1' : '0';

            if ($style['sa_video_box_start'] || $style['sa_video_box_end']) {

                if ($video_link !== '') {

                    if ($style['sa_video_box_start']) {
                        $options .= '&start=' . $style['sa_video_box_start'];
                    }

                    if ($style['sa_video_box_end']) {
                        $options .= '&end=' . $style['sa_video_box_end'];
                    }
                }
            }

            if ($loop) {
                $options .= '&playlist=' . $params['id'];
            }


            if ('' !== $video_link) {
                $data_src = $link . $options;
            }
        }
        echo '<div class="sa-video-box-container-style-1">
                <div class="sa-aspect-ratio-' . $style['aspect_ratio'] . '">
                    <div id="sa-video-box-container-' . $this->oxiid . '" class="sa-video-box-container" data-overlay="' . (($style['sa_video_box_image_switcher'] == 'yes') ? 'true' : 'false') . '" data-type="' . $type . '">
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

        $type           = 'youtube';

        $overlay        = $settings['sa_video_box_image_switcher'];

        if ('yes' !== $overlay) {
            $size           = '';
            if ('youtube' === $type) {
                $size = $settings['sa_video_box_yt_thumbnail_size'];
            }
            $thumbnail_src  = self::get_video_thumbnail_gen($id, $type, $size);
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

        $type       = 'youtube';

        $link       = $settings['sa_video_box_video_link'];

        if (!empty($link)) {
            if ('youtube' === $type) {
                $video_props    = self::get_video_properties($link);
                $link           = self::get_embed_url($link);
                $id       = $video_props['video_id'];
            }
        }

        return [
            'link' => $link,
            'id'    => $id
        ];
    }
    public static function get_video_thumbnail_gen($id, $type, $size = '')
    {

        if ('youtube' === $type) {
            if ('' === $size) {
                $size = 'maxresdefault';
            }
            $thumbnail_src = sprintf('https://i.ytimg.com/vi/%s/%s.jpg', $id, $size);
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

        if ('youtube' === $video_properties['provider']) {
            $replacements['{NO_COOKIE}'] = !empty($options['privacy']) ? '-nocookie' : '';
        }

        $embed_pattern = str_replace(array_keys($replacements), $replacements, $embed_pattern);

        return add_query_arg($embed_url_params, $embed_pattern);
    }


    public function inline_public_jquery()
    {
        $jquery = '';
        $jquery .= '
            var videoBoxElement = $(".' . $this->WRAPPER . ' .sa-video-box-container-style-1 .sa-video-box-container"),
            videoContainer = videoBoxElement.find(".sa-video-box-video-container"),
            type = videoBoxElement.data("type"),
            video,
            vidSrc,
            checkRel;
            if (videoContainer.data("src") !== "") {
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
