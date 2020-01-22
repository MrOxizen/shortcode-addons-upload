<?php

namespace SHORTCODE_ADDONS_UPLOAD\Video_gallery\Templates;

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
        $this->JSHANDLE = 'rvslider.min,js';
        wp_enqueue_script('rvslider.min,js', SA_ADDONS_UPLOAD_URL . '/Video_gallery/file/rvslider.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $jquery = "var video_gallery = jQuery('.rvs-container');
                   if (!video_gallery.length) {
                       return;
                   }
                   jQuery(video_gallery).rvslider();";

        return $jquery;
    }

    public function default_render($style, $child, $admin) {
        $styledata = $this->style;
        $all_data = (array_key_exists('sa_video_gellery_data', $styledata) && is_array($styledata['sa_video_gellery_data'])) ? $styledata['sa_video_gellery_data'] : [];
        $video_poster = $video_source = "";
        $continuous_play = $showonoff = $onHover = $horizontal = "";
        if (array_key_exists('sa_video_gellery_play_btn_on_off', $style) && $style['sa_video_gellery_play_btn_on_off'] == 'yes') {
            $onHover = 'rvs-show-play-on-hover';
        }

        if (array_key_exists('sa_video_gellery_play_btn_on_off', $style) && $style['sa_video_gellery_play_btn_on_off'] == 'yes') {
            $showonoff = 'rvs-show-play-on-hover';
        }
        if (array_key_exists('sa_video_gellery_continuous_play', $style) && $style['sa_video_gellery_continuous_play'] == 'yes') {

            $continuous_play = 'rvs-continuous-play';
        }
         if ( $style['sa_video_gellery_temp_type'] == 'horizontal') {

            $horizontal = 'rvs-horizontal';
        }
        ?>
        <div class="sa-video-gallery oxi-transition-none rvs-container rvs-flat-circle-play <?php echo $showonoff; ?> <?php echo $continuous_play; ?>  <?php echo $onHover; ?>  <?php echo $horizontal; ?> ">
            <div class="rvs-item-container">
                <div class="rvs-item-stage"> <?php
                    foreach ($all_data as $key => $value) {
                        $video_poster = ( $value['sa_video_gellery_poster_media'] != '' ) ? $this.media_render('sa_video_gellery_poster_media',$value) : 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/12/placeholder-img.jpg';
                        $video_source = $value['sa_video_gellery_source'];

                        if ('local' == $value['sa_video_gellery_video_type']) {
                            $video_source = $this->file_render('sa_video_gellery_local_vdo', $value);
                        } else {
                            $youtube_id = (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $value['sa_video_gellery_source'], $match) ) ? $match[1] : false;

                            $vimeo_id = ( preg_match('%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $value['sa_video_gellery_source'], $match) ) ? $match[3] : false;

                            if ($youtube_id) {
                                $video_source = 'https://www.youtube.com/watch?v=' . $youtube_id;
                                $video_poster = ( $value['sa_video_gellery_poster_media'] ) ? $value['sa_video_gellery_poster_media'] : 'https://img.youtube.com/vi/' . $youtube_id . '/maxresdefault.jpg';
                            } elseif ($vimeo_id) {
                                $video_source = 'https://vimeo.com/' . $vimeo_id;
                                $video_poster = ( $value['sa_video_gellery_poster_media'] ) ? $value['sa_video_gellery_poster_media'] : 'https://i.vimeocdn.com/video/' . $vimeo_id . '.webp?mw=960&mh=540';
                            }
                        }
                        ?>
                        <div class="rvs-item" style="background-image: url(<?php echo esc_url($video_poster); ?>)">


                            <?php if ($value['sa_video_gellery_title'] or $value['sa_video_gellery_des']) : ?>
                                <div class="rvs-item-text">

                                    <?php if (array_key_exists('sa_video_gellery_title_on_off', $style) && $style['sa_video_gellery_title_on_off'] == 'yes') : ?>
                                        <h2 class="sa-vg-video-title"><?php echo $this->text_render(esc_html($value['sa_video_gellery_title'])); ?></h2>
                                    <?php endif; ?>

                                    <?php if (array_key_exists('sa_video_gellery_description_on_off', $style) && $style['sa_video_gellery_description_on_off'] == 'yes') : ?>

                                        <div class="sa-vg-video-desc"><?php echo $this->text_render(wp_kses_post($value['sa_video_gellery_des'])); ?></div>
                                    <?php endif; ?>

                                </div>
                            <?php endif; ?>

                            <a href="<?php echo esc_url($video_source); ?>" class="rvs-play-video"></a>
                        </div>

                        <?php
//                        echo esc_url($video_source);
                    }
                    ?>
                </div>
            </div>
            <div class="rvs-nav-container">
                <a class="rvs-nav-prev"></a>
                <div class="rvs-nav-stage">

                    <?php
                    foreach ($all_data as $key => $value) :
                        $video_thumbnail = "";
                        $video_thumbnail = ( $value['sa_video_gellery_poster_media'] ) ? $value['sa_video_gellery_poster_media'] : 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/12/placeholder-img.jpg';

                        $youtube_id = (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $value['sa_video_gellery_source'], $match) ) ? $match[1] : false;

                        $vimeo_id = ( preg_match('%^https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)(?:[?]?.*)$%im', $value['sa_video_gellery_source'], $match) ) ? $match[3] : false;

                        if ($youtube_id) {
                            $video_thumbnail = ( $value['sa_video_gellery_poster_media'] ) ? $value['sa_video_gellery_poster_media'] : 'https://img.youtube.com/vi/' . $youtube_id . '/default.jpg';
                        } elseif ($vimeo_id) {
                            $video_thumbnail = ( $value['sa_video_gellery_poster_media'] ) ? $value['sa_video_gellery_poster_media'] : 'https://i.vimeocdn.com/video/' . $vimeo_id . '.webp?mw=60&mh=60';
                        }
                        ?>
                        <!-- nav items go here -->
                        <a class="rvs-nav-item">



                            <span class="rvs-nav-item-thumb" style="background-image: url(<?php echo esc_url($video_thumbnail); ?>)"></span>


                            <h4 class="rvs-nav-item-title" title="<?php echo $this->text_render(esc_html($value['sa_video_gellery_title'])); ?>"><?php echo $this->text_render(esc_html($value['sa_video_gellery_title'])); ?></h4>



                            <div class="rvs-nav-item-credits" title="<?php echo wp_kses_post($value['sa_video_gellery_des']); ?>"><?php echo wp_kses_post($value['sa_video_gellery_des']); ?></div>

                        </a>

                    <?php endforeach; ?>


                </div>
                <a class="rvs-nav-next"></a>
            </div>
        </div> <?php
    }

}
