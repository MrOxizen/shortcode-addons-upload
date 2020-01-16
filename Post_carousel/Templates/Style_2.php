<?php

namespace SHORTCODE_ADDONS_UPLOAD\Post_carousel\Templates;

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

    public function public_css()
    {

        wp_enqueue_style('swiper.min.css', SA_ADDONS_UPLOAD_URL . '/Post_carousel/Files/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }
    public function public_jquery()
    {
        wp_enqueue_script('swiper.min.js', SA_ADDONS_UPLOAD_URL . '/Post_carousel/Files/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'swiper.min.js';
    }


    function inline_public_css()
    {
        $style = $this->style;
        $hoverData = $css_inline = $final = '';
        if ($style['sa_post_carousel_meta_position_effect'] == 'left') {
            $css_inline = 'transform: translateX(-100%)';
            $hoverData = 'transform: translateX(0)';
        } elseif ($style['sa_post_carousel_meta_position_effect'] == 'top') {
            $css_inline = 'transform: translateY(-100%)';
            $hoverData = 'transform: translateY(0)';
        } elseif ($style['sa_post_carousel_meta_position_effect'] == 'right') {
            $css_inline = 'transform: translateX(100%)';
            $hoverData = 'transform: translateX(0)';
        } elseif ($style['sa_post_carousel_meta_position_effect'] == 'bottom') {
            $css_inline = 'transform: translateY(100%)';
            $hoverData = 'transform: translateY(0)';
        }
        $final = ' .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-style-2 .oxi-addons__overlay{
                        ' . $css_inline . '
                    }
                    .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-style-2 .oxi-addons__main-img:hover .oxi-addons__overlay{
                        ' . $hoverData . '
                    }';
        return $final;
    }
    public function post_render()
    {
        $style = $this->style;
        $button = $leftbutton = $rightbutton = '';
        $ssstyle = '';

        $post_args = [
            'post_type' => $style['sa_post_carousel_post_type'],
            'posts_per_page' => $style['sa_post_carousel_per_page'],
            'orderby' => $style['sa_post_carousel_orderby'],
            'order' => $style['sa_post_carousel_ordertype'],
            'offset' => $style['sa_post_carousel_offset'],
            'ignore_sticky_posts' => 1,
            'post_status' => 'publish',
            'tax_query' => []
        ];
        if (array_key_exists('sa_post_carousel_author', $style)) :
            $post_args['author__in'] = $style['sa_post_carousel_author'];
        endif;
        $key = $style['sa_post_carousel_post_type'];
        if ($key != 'page') :
            if (array_key_exists('sa_post_carousel_post_type-cat' . $key, $style)) :
                $post_args['tax_query'][] = array(
                    'taxonomy' => $key == 'post' ? 'category' : $key . '_category',
                    'field' => 'term_id',
                    'terms' => $style['sa_post_carousel_post_type-cat' . $key]
                );
            endif;
            if (array_key_exists('sa_post_carousel_post_type-tag' . $key, $style)) :
                $post_args['tax_query'][] = array(
                    'taxonomy' => $key . '_tag',
                    'field' => 'term_id',
                    'terms' => $style['sa_post_carousel_post_type-tag' . $key]
                );
            endif;
        endif;
        if (array_key_exists('sa_post_carousel_post_type-include' . $key, $style)) :
            $post_args['post__in'] = $style['sa_post_carousel_post_type-include' . $key];
        endif;
        if (array_key_exists('sa_post_carousel_post_type-exclude' . $key, $style)) :
            $post_args['post__not_in'] = $style['sa_post_carousel_post_type-exclude' . $key];
        endif;

        $query = new \WP_Query($post_args);
        ob_start();
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo ' <div class="swiper-slide">';
                $img = $title = $content_excerpt = $image_url = '';
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), $style['sa_post_carousel_thumb_sizes']);

                if ($style['sa_s_image_layout_show_image'] == 'show') {
                    if ($image_url[0] != '') {
                        if ($style['sa_post_carousel_img_eq_height'] == 'true') {
                            $ssstyle .= '
                                    background-position: center center;
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    padding-bottom:' . $style['sa_post_carousel_thumbnail_height'] . '%;';
                        }
                        $img = ' <a class="oxi-addons__post-link" href="' . get_permalink($query->post->ID) . '"  target="' . $style['sa_s_image_layout_linke_open'] . '">
                                <div class="oxi-addons__main-img oxi-addons__main-img_' . $query->post->ID . '" style=" background-image: url(' . $image_url[0] . '); ' . $ssstyle . '">';

                        if ($style['sa_post_carousel_img_eq_height'] != 'true') {
                            $img .= '<img class="oxi-image" src="' . $image_url[0] . '">';
                        }
                        $img .= ' <div class="oxi-addons__overlay">
                                        ' . $this->font_awesome_render($style['sa_post_carousel_icon']) . '
                                    </div>
                                </div>
                            </a>
                        ';
                    }
                }
                if ($style['sa_s_image_layout_show_excerpt'] == 'show') {
                    $excerpt = str_word_count(strip_tags(get_the_excerpt()));
                    if ($excerpt == 0) {
                        $posts = explode(' ', get_the_content(), $style['sa_s_image_excerpt_word']);
                    } else {
                        $posts = explode(' ', get_the_excerpt(), $style['sa_s_image_excerpt_word']);
                    }
                    if (count($posts) >= $style['sa_s_image_excerpt_word']) {
                        array_pop($posts);
                        $posts = implode(" ", $posts) . '...';
                    } else {
                        $posts = implode(" ", $posts);
                    }
                    $posts = preg_replace('/\[.+\]/', '', $posts);

                    $content_excerpt = '  
                 <p class="oxi-addons__details">
                     ' . $posts . '
                 </p> 
            ';
                }
                if ($style['sa_s_image_layout_show_title'] == 'show') {
                    $title = '
                  <a class="oxi-link" title=" ' . get_the_title($query->post->ID) . '" href="' . get_permalink($query->post->ID) . '"  target="' . $style['sa_s_image_layout_linke_open'] . '">
                    <' . $style['sa_post_carousel_title_tag'] . ' class="oxi-addons__title">
                    ' . get_the_title($query->post->ID) . '
                    </' . $style['sa_post_carousel_title_tag'] . '> 
                </a>  
            ';
                }
                $avater = $meta = $align = $header_footer = $button = '';
                $avater = get_avatar(get_the_author_meta('ID'));
                if ($style['sa_post_carousel_button_show'] == 'show') {
                    $button = '<div class="oxi-addons__button-main">
                                <a href="' . get_permalink($query->post->ID) . '" class="oxi-addons__btn-link"  target="' . $style['sa_post_carousel_button_url'] . '">
                                    ' . $this->text_render($style['sa_post_carousel_button_text']) . '
                                </a>
                            </div>';
                }
                if ($style['sa_post_carousel_button_align'] == 'left') {
                    $leftbutton = $button;
                } else {
                    $rightbutton = $button;
                }
                if ($style['sa_s_image_layout_show_meta'] == 'show') {
                    if ($style['sa_post_carousel_meta_avater'] == 'custom') {
                        $avater = '<img alt="" src="' . $this->media_render('sa_post_carousel_meta_avater_img', $style) . '" class="avatar">';
                    }
                    $meta = '<div class="oxi-addons__meta-button">
                                ' . $leftbutton . '
                                <div class="oxi-addons__meta-info">
                                    <div class="oxi-addons__meta-left"> 
                                            ' . $avater . '
                                    </div>
                                    <div class="oxi-addons__meta-right">
                                        <div class="oxi-addons__meta-name">
                                            <a class="oxi-name" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="Post By ' . get_the_author_meta('display_name') . '" rel="' . get_the_author_meta('display_name') . '">' . get_the_author_meta('display_name') . '</a>
                                        </div>
                                        <div class="oxi-addons__meta-date" >
                                            <time class="oxi-time" datetime="' . get_the_date('M d, Y') . '" >' . get_the_date('M d, Y') . '</time>
                                        </div>
                                    </div>
                                </div>
                                ' . $rightbutton . '
                            </div>';
                } else {
                    $meta = ' ' . $button . '';
                }

                if ($style['sa_post_carousel_meta_position'] == 'footer') {
                    $header_footer = '' . $title . '
                                 ' . $this->text_render($content_excerpt) . '
                                 ' . $meta . '';
                } else {
                    $header_footer = '' . $meta . '
                                 ' . $title . '
                                 ' . $this->text_render($content_excerpt) . ' ';
                }
                echo '
                        <div class="oxi-addons__wrapper" > 
                        ' . $img . '
                            <div class="oxi-addons__article">
                                ' . $header_footer . '
                            </div>
                        </div>
                ';
                echo ' </div>';
            }
        } else {
            _e('<p class="no-posts-found">No posts found!</p>', SHORTCODE_ADDOONS);
        }
        wp_reset_postdata();

        return ob_get_clean();
    }
    public function default_render($style, $child, $admin)
    {
        $arrow = $arrow_left = $arrow_right = $rtl = '';
        if ($style['arrow_right'] != '') {
            $arrow_left = $this->font_awesome_render($style['arrow_right']);
        }
        if ($style['arrow_left'] != '') {
            $arrow_right = $this->font_awesome_render($style['arrow_left']);
        }
        if (array_key_exists('sa_post_carousel_arrow', $style) && $style['sa_post_carousel_arrow'] == 'yes') {
            $arrow = '
                <div class="swiper-button-next  sa_post_carousel_next_' . $this->oxiid . '">
                    ' . $arrow_left . '
                </div>
                <div class="swiper-button-prev sa_post_carousel_prev_' . $this->oxiid . '">
                    ' . $arrow_right . '
                </div>
            ';
        }
        $rtl = (array_key_exists('sa_post_carousel_direction', $style) && $style['sa_post_carousel_direction'] == 'right') ? 'dir="rtl"' : '';
        echo '<div class="oxi-addons__post-carousel-style-2 swiper-container-wrap-dots-' . $style['dots_position'] . '">
                    <div class="swiper-container oxi-addons__post-carousel-wrap ' . $style['sa_post_carousel_image_switcher'] . '" ' . $rtl . '>
                        <div class="swiper-wrapper">
                            ' . $this->post_render() . '
                        </div>
                    </div>';
        if (array_key_exists('sa_post_carousel_dots', $style) && $style['sa_post_carousel_dots'] == 'yes') :
            echo '<div class="swiper-pagination sa_post_carousel_pagination_' . $this->oxiid . '"></div>';
        endif;
        echo $arrow;
        echo '</div>
            ';
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $prev = '.sa_post_carousel_next_' . $this->oxiid . '';
        $next = '.sa_post_carousel_prev_' . $this->oxiid . '';
        $pagin = '.sa_post_carousel_pagination_' . $this->oxiid . '';
        $items = $style["sa_post_carousel_visible_items-lap-size"] != '' ? $style["sa_post_carousel_visible_items-lap-size"] : 3;
        $items_tablet = $style["sa_post_carousel_visible_items-tab-size"] != '' ? $style["sa_post_carousel_visible_items-tab-size"] : 2;
        $items_mobile = $style["sa_post_carousel_visible_items-mob-size"] != '' ? $style["sa_post_carousel_visible_items-mob-size"] : 1;
        $margin = $style["sa_post_carousel_items_gap-lap-size"] != '' ? $style["sa_post_carousel_items_gap-lap-size"] : 10;
        $margin_tablet = $style["sa_post_carousel_items_gap-tab-size"] != '' ? $style["sa_post_carousel_items_gap-tab-size"] : 10;
        $margin_mobile = $style["sa_post_carousel_items_gap-mob-size"] != '' ? $style["sa_post_carousel_items_gap-mob-size"] : 10;
        $speed = $style["sa_post_carousel_slider_speed-size"] != '' ? $style["sa_post_carousel_slider_speed-size"] : 400;
        $autoplay = (array_key_exists('sa_post_carousel_autoplay_switter', $style) && $style['sa_post_carousel_autoplay_switter'] == "yes") ? $style['sa_post_carousel_autoplay_speed-size'] : 999999;
        $pause_on_hover = $style["sa_post_carousel_pause_switter"];
        $loop = (array_key_exists('sa_post_carousel_loop_switter', $style) && $style["sa_post_carousel_loop_switter"] == "yes") ? "1" : "0";
        $grab_cursor = (array_key_exists('sa_post_carousel_grab_cursor', $style) && $style["sa_post_carousel_grab_cursor"] == "yes") ? "1" : "0";
        $auto_height = $style["sa_post_carousel_auto_height"];
        $js = '';
        $js = 'var sa_post_carousel = $(".' . $this->WRAPPER . ' .oxi-addons__post-carousel-style-2 .oxi-addons__post-carousel-wrap");
            
            var saPostCarousel = new Swiper(sa_post_carousel, {
                direction: "horizontal",
                speed: ' . $speed . ',
                effect: "fade",
                centeredSlides: false,
                slidesPerView: ' . $items . ',
                spaceBetween: ' . $margin . ',
                grabCursor: ' . $grab_cursor . ',
                autoHeight: ' . $auto_height . ',
                loop: ' . $loop . ',
                observer: true,
                observeParents: true,
                autoplay: {
                    delay: ' . $autoplay . '
                },
                pagination: {
                    el: "' . $pagin . '",
                    clickable: true
                },
                navigation: {
                    nextEl: "' . $prev . '",
                    prevEl: "' . $next . '"
                },
                
            });

            if (' . $autoplay . ' === 0) {
                saPostCarousel.autoplay.stop();
            }
        
            if (' . $pause_on_hover . ' == true) {
                sa_post_carousel.on("mouseenter", function() {
                    saPostCarousel.autoplay.stop();
                });
                sa_post_carousel.on("mouseleave", function() {
                    saPostCarousel.autoplay.start();
                });
            }
            ';
        return $js;
    }
}
