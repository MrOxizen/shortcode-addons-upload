<?php

namespace SHORTCODE_ADDONS_UPLOAD\Display_post\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates
{

    public function inline_public_css()
    {
        $style = $this->style;
        $hoverData = $css_inline = $final = '';
        if ($style['sa_display_post_meta_position_effect'] == 'left') {
            $css_inline = 'transform: translateX(-100%)';
            $hoverData = 'transform: translateX(0)';
        } elseif ($style['sa_display_post_meta_position_effect'] == 'top') {
            $css_inline = 'transform: translateY(-100%)';
            $hoverData = 'transform: translateY(0)';
        } elseif ($style['sa_display_post_meta_position_effect'] == 'right') {
            $css_inline = 'transform: translateX(100%)';
            $hoverData = 'transform: translateX(0)';
        } elseif ($style['sa_display_post_meta_position_effect'] == 'bottom') {
            $css_inline = 'transform: translateY(100%)';
            $hoverData = 'transform: translateY(0)';
        }  
        $final = ' .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-style-2 .oxi-addons__article_main{
                        ' . $css_inline . '
                    }
                    .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-style-2:hover .oxi-addons__article_main{
                        ' . $hoverData . '
                    }';
        return $final;
    }
    public function default_render($style, $child, $admin)
    {
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
        if (array_key_exists('sa_display_post_author', $style)) :
            $post_args['author__in'] = $style['sa_display_post_author'];
        endif;
        $key = $style['sa_display_post_post_type'];
        if ($key != 'page') :
            if (array_key_exists('sa_display_post_post_type-cat' . $key, $style)) :
                $post_args['tax_query'][] = array(
                    'taxonomy' => $key == 'post' ? 'category' : $key . '_category',
                    'field' => 'term_id',
                    'terms' => $style['sa_display_post_post_type-cat' . $key]
                );
            endif;
            if (array_key_exists('sa_display_post_post_type-tag' . $key, $style)) :
                $post_args['tax_query'][] = array(
                    'taxonomy' => $key . '_tag',
                    'field' => 'term_id',
                    'terms' => $style['sa_display_post_post_type-tag' . $key]
                );
            endif;
        endif;
        if (array_key_exists('sa_display_post_post_type-include' . $key, $style)) :
            $post_args['post__in'] = $style['sa_display_post_post_type-include' . $key];
        endif;
        if (array_key_exists('sa_display_post_post_type-exclude' . $key, $style)) :
            $post_args['post__not_in'] = $style['sa_display_post_post_type-exclude' . $key];
        endif;

        $query = new \WP_Query($post_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $main_content = $title = $content_excerpt = $image_url = $button = '';
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), $style['sa_display_post_thumb_sizes']);

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
                                </p>';
                }
                if ($style['sa_s_image_layout_show_title'] == 'show') {
                    $title = '
                        <a class="oxi-link" title=" ' . get_the_title($query->post->ID) . '" href="' . get_permalink($query->post->ID) . '"  target="' . $style['sa_s_image_layout_linke_open'] . '">
                            <' . $style['sa_display_post_title_tag'] . ' class="oxi-addons__title">
                            ' . get_the_title($query->post->ID) . '
                            </' . $style['sa_display_post_title_tag'] . '> 
                        </a>  
                    ';
                }
                $avater = $meta = $button = $image = '';
                $avater = get_avatar(get_the_author_meta('ID'));
                if ($style['sa_display_post_button_show'] == 'show') {
                    $button = '<div class="oxi-addons__button-main">
                                <a href="' . get_permalink($query->post->ID) . '" class="oxi-addons__btn-link"  target="' . $style['sa_display_post_button_url'] . '">
                                    ' . $this->text_render($style['sa_display_post_button_text']) . '
                                </a>
                            </div>';
                }

                if ($style['sa_s_image_layout_show_meta'] == 'show') {
                    if ($style['sa_display_post_meta_avater'] == 'custom') {
                        $avater = '<img alt="" src="' . $this->media_render('sa_display_post_meta_avater_img', $style) . '" class="avatar">';
                    }
                    $meta = '<div class="oxi-addons__meta-button">
                                ' . $button . '
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
                            </div>';
                }

                if ($style['sa_s_image_layout_show_image'] == 'show') {
                    if ($image_url[0] != '') {
                        $image = ' background-image: url(' . $image_url[0] . ')';
                    }
                }

                echo '<div class="oxi-addons-parent ' . $this->column_render('sa_s_image_layout_col', $style) . ' ">
                        <div class="oxi-addons__main-wrapper-style-2"  ' . $this->animation_render('sa_display_post_animation', $style) . '>
                             <div class="oxi-addons__wrapper" style="' . $image . '"> 
                                <div class="oxi-addons__article_main">
                                    <div class="oxi-addons__article">
                                       ' . $title . '
                                       ' . $this->text_render($content_excerpt) . '
                                       ' . $meta . '
                                    </div>
                                </div>
                        </div> 
                    </div>
                </div>';
            }
            wp_reset_postdata();
        }
    }
}
