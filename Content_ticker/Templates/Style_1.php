<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_ticker\Templates;

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

    public function public_css() {
        wp_enqueue_style('swiper.css', SA_ADDONS_UPLOAD_URL . '/Content_ticker/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery() {
        $this->JSHANDLE = 'swiper.js';
        wp_enqueue_script('swiper.js', SA_ADDONS_UPLOAD_URL . '/Content_ticker/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin) {



        $post_args = [
            'post_type' => $style['sa_display_post_post_type'],
            'posts_per_page' => $style['sa_display_post_per_page'],
            'orderby' => $style['sa_display_post_orderby'],
            'order' => $style['sa_display_post_ordertype'],
            'offset' => $style['sa_display_post_offset'],
            'ignore_sticky_posts' => 1,
            'post_status' => 'publish',
            'tax_query' => []
        ];
        if (array_key_exists('sa_display_post_author', $style)):
            $post_args['author__in'] = $style['sa_display_post_author'];
        endif;
        $key = $style['sa_display_post_post_type'];
        if ($key != 'page'):
            if (array_key_exists('sa_display_post_post_type-cat' . $key, $style)):
                $post_args['tax_query'][] = array(
                    'taxonomy' => $key == 'post' ? 'category' : $key . '_category',
                    'field' => 'term_id',
                    'terms' => $style['sa_display_post_post_type-cat' . $key]
                );
            endif;
            if (array_key_exists('sa_display_post_post_type-tag' . $key, $style)):
                $post_args['tax_query'][] = array(
                    'taxonomy' => $key . '_tag',
                    'field' => 'term_id',
                    'terms' => $style['sa_display_post_post_type-tag' . $key]
                );
            endif;
        endif;
        if (array_key_exists('sa_display_post_post_type-include' . $key, $style)):
            $post_args['post__in'] = $style['sa_display_post_post_type-include' . $key];
        endif;
        if (array_key_exists('sa_display_post_post_type-exclude' . $key, $style)):
            $post_args['post__not_in'] = $style['sa_display_post_post_type-exclude' . $key];
        endif;


        $title = '';

        if ($style['sa_content_ticker_type'] == 'ticker_dynamic') {

            $query = new \WP_Query($post_args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();



                    $title .= ' <div class="oxi_content_ticket_title swiper-slide">
                                    <a class="oxi_content_ticker_text" title=" ' . get_the_title($query->post->ID) . '" href="' . get_permalink($query->post->ID) . '"  target="' . $style['sa_s_image_layout_linke_open'] . '">
                                    ' . get_the_title($query->post->ID) . '
                                    </a>
                                </div> 
                             ';
                }

                wp_reset_postdata();
            }
        }

        if ($style['sa_content_ticker_type'] == 'ticker_custom') {
            $repeater = (array_key_exists('sa_content_ticker_repeater', $style) && is_array($style['sa_content_ticker_repeater'])) ? $style['sa_content_ticker_repeater'] : [];
            foreach ($repeater as $key => $value) {
                if ($value['sa_content_ticker_content'] != '') {
                    $title .= '<div class="oxi_content_ticket_title swiper-slide oxi_content_ticket_title_' . $key . '">
                                <a class ="oxi_content_ticker_text" ' . $this->url_render('sa_content_ticker_content_link', $value) . ' >
                                    ' . $this->text_render($value['sa_content_ticker_content']) . '
                                  </a>
                            </div> ';
                }
            }
        }

        $tag = '';
        if ($style['sa_content_ticker_tag_title'] != '') {
            $tag = '<div class="oxi_content_ticket_tag">
                                ' . $this->text_render($style['sa_content_ticker_tag_title']) . '
                    </div>';
        }
        
       
        
        $rtl = (array_key_exists('sa_content_ticker_silder_direction', $style) && $style['sa_content_ticker_silder_direction'] == 'right') ? 'dir="rtl"' : '';
        $arrow = $arrow_left = $arrow_right = '';
        
        if ($style['arrow_right'] != '') {
            $arrow_left = $this->font_awesome_render($style['arrow_right']);
        }
        if ($style['arrow_left'] != '') {
            $arrow_right = $this->font_awesome_render($style['arrow_left']);
        }
        if (array_key_exists('sa_content_ticker_silder_pause_arrow', $style) && $style['sa_content_ticker_silder_pause_arrow'] == 'yes') {
            $arrow = '
                <div class="swiper-button-next  sa_content_ticker_swiper_button_next_' . $this->oxiid . '">
                    ' . $arrow_left . '
                </div>
                <div class="swiper-button-prev sa_content_ticker_swiper_button_prev_' . $this->oxiid . '">
                    ' . $arrow_right . '
                </div>
            ';
        }
        echo '<div class="oxi_addons_content_ticker_style1">
                        <div class="oxi_content_ticker_main"> 
                           ' . ($style['sa_content_ticker_tag_position'] == "left" ? $tag : "") . '
                           <div class="swiper-container oxi_content_ticket_content" ' . $rtl . '>
                                    <div class="swiper-wrapper">
                                        ' . $title . '
                                    </div>
                            </div>
                            '.$arrow.'
                             ' . ($style['sa_content_ticker_tag_position'] == "right" ? $tag : "") . '
                        </div>
                    </div>';
    }

    public function inline_public_jquery() {
        $style = $this->style;
        $prev = '.sa_content_ticker_swiper_button_next_' . $this->oxiid . '';
        $next = '.sa_content_ticker_swiper_button_prev_' . $this->oxiid . '';
        $speed = $style["sa_content_ticker_silder_slider_speed-size"] != '' ? $style["sa_content_ticker_silder_slider_speed-size"] : 400;
        $autoplay = (array_key_exists('sa_content_ticker_silder_autoplay_switter', $style) && $style['sa_content_ticker_silder_autoplay_switter'] == "yes") ? $style['sa_content_ticker_silder_autoplay_speed-size'] : 999999;
        $pause_on_hover = (array_key_exists('sa_content_ticker_silder_pause_switter', $style) && $style["sa_content_ticker_silder_pause_switter"] == "yes") ? "yes" : "";
        $loop = (array_key_exists('sa_content_ticker_silder_loop_switter', $style) && $style["sa_content_ticker_silder_loop_switter"] == "yes") ? "1" : "0";
        $grab_cursor = (array_key_exists('sa_content_ticker_silder_pause_grab_cursor', $style) && $style["sa_content_ticker_silder_pause_grab_cursor"] == "yes") ? "1" : "0";
        $js = '';
        $js .= 'var sa_content_carousel = $(".' . $this->WRAPPER . ' .oxi_addons_content_ticker_style1 .oxi_content_ticket_content");
            var content_triger = new Swiper(sa_content_carousel, {
                direction: "horizontal",
                speed: ' . $speed . ',
                effect: "slide",
                centeredSlides: false,
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: ' . $grab_cursor . ',
                autoHeight: true,
                loop: ' . $loop . ',
                autoplay: {
                    delay: ' . $autoplay . '
                },
               
                navigation: {
                    nextEl: "' . $next . '",
                    prevEl: "' . $prev . '"
                },
                
               
            });';
        if ($pause_on_hover == 'yes') {
            $js .= '
            var mySwiper = document.querySelector(".' . $this->WRAPPER . ' .oxi_addons_content_ticker_style1 oxi_content_ticket_content").swiper
            $(".swiper-container").mouseenter(function() {
                mySwiper.autoplay.stop();
              });
              $(".swiper-container").mouseleave(function() {
                mySwiper.autoplay.start();
              });';
        }
        return $js;
    }

}
