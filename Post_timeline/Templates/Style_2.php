<?php

namespace SHORTCODE_ADDONS_UPLOAD\Post_timeline\Templates;

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

        echo '<div class="oxi-addons-parent-post-style-2">';
        $query = new \WP_Query($post_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                $image = $title = $content_excerpt = $image_url = '';

                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), $style['sa_display_post_thumb_sizes']);
                if ($image_url[0] != '') {
                    $image = ' background-image: url(' . $image_url[0] . ')';
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
                    </p>';
                }


                if ($style['sa_s_image_layout_show_title'] == 'show') {
                    $title = '<a class="oxi-link" title=" ' . get_the_title($query->post->ID) . '" href="' . get_permalink($query->post->ID) . '"  target="' . $style['sa_s_image_layout_linke_open'] . '">
                                <' . $style['sa_display_post_title_tag'] . ' class="oxi-addons__title">
                                     ' . get_the_title($query->post->ID) . '
                                </' . $style['sa_display_post_title_tag'] . '> 
                            </a>';
                }

                $avater = $meta = $date = '';
                $avater = get_avatar(get_the_author_meta('ID'));
                if ($style['sa_s_image_layout_show_avater'] == 'show') {

                    if ($style['sa_display_post_meta_avater'] == 'custom') {
                        $avater = '<img alt="" src="' . $this->media_render('sa_display_post_meta_avater_img', $style) . '" class="avatar">';
                    }
                    $meta = '<div class="oxi-addons__meta-button"> 
                                <div class="oxi-addons__meta-info">
                                    <div class="oxi-addons__meta-left"> 
                                            ' . $avater . '
                                    </div> 
                                </div> 
                            </div>';
                }
                if ($style['sa_s_image_layout_show_tooltip'] == 'show') {

                    $date = '<div class="oxi_addons__tooltip">
                                <time class="oxi-time" datetime="' . get_the_date('M d, Y') . '" >' . get_the_date('M d, Y') . '</time>
                         </div>';
                }



                echo '<div class="oxi-addons__main-wrapper-post-style-2">
                    <div class="oxi-addons__timeline-bullet"> 
                            ' . $date . ' 
                    </div> 
                      <div class="oxi-addons__post-body" ' . $this->animation_render('sa_display_post_animation', $style) . ' >
                        <div class="oxi-addons__post-inner" style="' . $image . '">  
                           <div class="oxi-addons__post-main"> 
                                <div class="oxi-addons__article">
                                ' . $this->text_render($content_excerpt) . '
                                    <div class="oxi_addons__avater_title">
                                        ' . $title . '
                                        ' . $meta . '
                                    </div>
                                </div> 
                           </div> 
                        </div>
                    </div>
                </div>';
            }
            wp_reset_postdata();
        }
        echo '</div>';
    }


    function inline_public_css()
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
        $final .= ' .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-post-style-2 .oxi-addons__details{
                       ' . $css_inline . '
                   }
                   .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-post-style-2:hover .oxi-addons__details{
                       ' . $hoverData . '
                   }';
        return $final;
    }
}
