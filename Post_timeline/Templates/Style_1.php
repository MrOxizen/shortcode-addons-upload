<?php

namespace SHORTCODE_ADDONS_UPLOAD\Post_timeline\Templates;

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

    public function inline_public_jquery()
    {
        $style = $this->style;
        $js = '';
        $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons__main-wrapper-post-style-1 .oxi-addons__post-inner"));}, 500);';

        return $js;
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
        $final .= ' .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-post-style-1 .oxi-addons__overlay{
                       ' . $css_inline . '
                   }
                   .' . $this->WRAPPER . ' .oxi-addons__main-wrapper-post-style-1 .oxi-addons__main-img:hover .oxi-addons__overlay{
                       ' . $hoverData . '
                   }';

        $poss = $style['sa_display_post_bullet_pos'];
        $div_wid = $style['sa_display_post_divider_width_height'];
        $arr_size = $style['sa_display_post_arrow_size'];
        $br_clr = $style['sa_display_post_post_border-color'];
        $bullet_wid = $style['sa_display_post_bullet_width_height'];
 
        return $final;
    }

    public function default_render($style, $child, $admin)
    {
        $button = $leftbutton = $rightbutton = '';
        $ssstyle = '';

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

        echo '<div class="oxi-addons-parent-post-style-1">';

        $query = new \WP_Query($post_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $img = $title = $content_excerpt = $image_url = '';
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), $style['sa_display_post_thumb_sizes']);

                if ($style['sa_s_image_layout_show_image'] == 'show') {
                    if ($image_url[0] != '') {
                        if ($style['sa_display_post_img_eq_height'] == 'true') {
                            $ssstyle .= '
                                    background-position: center center;
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    padding-bottom:' . $style['sa_display_post_thumbnail_height'] . '%;';
                        }
                        $img = ' <a class="oxi-addons__post-link" href="' . get_permalink($query->post->ID) . '"  target="' . $style['sa_s_image_layout_linke_open'] . '">
                                <div class="oxi-addons__main-img oxi-addons__main-img_' . $query->post->ID . '" style=" background-image: url(' . $image_url[0] . '); ' . $ssstyle . '">';

                        if ($style['sa_display_post_img_eq_height'] != 'true') {
                            $img .= '<img class="oxi-image" src="' . $image_url[0] . '">';
                        }
                        $img .= ' <div class="oxi-addons__overlay" >
                                        ' . $this->font_awesome_render($style['sa_display_post_icon']) . '
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
                    <' . $style['sa_display_post_title_tag'] . ' class="oxi-addons__title">
                    ' . get_the_title($query->post->ID) . '
                    </' . $style['sa_display_post_title_tag'] . '> 
                </a>  
            ';
                }
                $avater = $meta = $align = $header_footer = $button = '';
                $avater = get_avatar(get_the_author_meta('ID'));
                if ($style['sa_display_post_button_show'] == 'show') {
                    $button = '<div class="oxi-addons__button-main">
                                <a href="' . get_permalink($query->post->ID) . '" class="oxi-addons__btn-link"  target="' . $style['sa_display_post_button_url'] . '">
                                    ' . $this->text_render($style['sa_display_post_button_text']) . '
                                </a>
                            </div>';
                }
                if ($style['sa_display_post_button_align'] == 'left') {
                    $leftbutton = $button;
                } else {
                    $rightbutton = $button;
                }
                if ($style['sa_s_image_layout_show_meta'] == 'show') {
                    if ($style['sa_display_post_meta_avater'] == 'custom') {
                        $avater = '<img alt="" src="' . $this->media_render('sa_display_post_meta_avater_img', $style) . '" class="avatar">';
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

                if ($style['sa_display_post_meta_position'] == 'footer') {
                    $header_footer = '' . $title . '
                                 ' . $this->text_render($content_excerpt) . '
                                 ' . $meta . '';
                } else {
                    $header_footer = '' . $meta . '
                                 ' . $title . '
                                 ' . $this->text_render($content_excerpt) . ' ';
                }

                echo '<div class="oxi-addons__main-wrapper-post-style-1">
                    <div class="oxi-addons__timeline-bullet"></div> 
                      <div class="oxi-addons__post-body"  ' . $this->animation_render('sa_display_post_animation', $style) . '>
                        <div class="oxi-addons__post-inner">  
                           <div class="oxi-addons__post-main">
                                 ' . $img . '
                                <div class="oxi-addons__article">
                                    ' . $header_footer . '
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















    public function old_render()
    {
        $style = $this->dbdata;
        $child = $this->child;
        $oxiid = $style['id'];
        $stylefiles = explode('||#||', $style['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = '';
        $post_args = [
            'post_type' => $stylefiles[1],
            'posts_per_page' => $stylefiles[11],
            'orderby' => $stylefiles[15],
            'order' => $stylefiles[17],
            'offset' => $stylefiles[13],
            'ignore_sticky_posts' => 1,
            'post_status' => 'publish',
            'tax_query' => []
        ];
        if ($stylefiles[3] != '') {
            $post_args['author__in'] = explode('{|}{|}', $stylefiles[3]);
        }
        if ($stylefiles[5] != '') {
            $post_args['tax_query'][] = array(
                'taxonomy' => $stylefiles[1] == 'post' ? 'category' : $stylefiles[1] . '_category',
                'field' => 'term_id',
                'terms' => explode('{|}{|}', $stylefiles[5])
            );
        }
        if ($stylefiles[7] != '') {
            $post_args['tax_query'][] = array(
                'taxonomy' => $stylefiles[1] . '_tag',
                'field' => 'term_id',
                'terms' => explode('{|}{|}', $stylefiles[7])
            );
        }
        if ($stylefiles[9] != '') {
            $post_args['post__not_in'] = explode('{|}{|}', $stylefiles[9]);
        }
        if ($stylefiles[19] != '') {
            $post_args['post__in'] = explode('{|}{|}', $stylefiles[19]);
        }
        echo '<div class="oxi-addons-container"><div class="oxi-addons-parent-' . $oxiid . '">';

        $query = new \WP_Query($post_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $img = $title = $content_excerpt = $image_url = '';
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), $stylefiles[21]);
                if ($styledata[7] == 'show') {
                    if ($image_url[0] != '') {
                        $img = ' <a class="oxi-addons__post-link" href="' . get_permalink($query->post->ID) . '"  target="' . $styledata[207] . '">
                                <div class="oxi-addons__main-img oxi-addons__main-img_' . $query->post->ID . '">';
                        if ($styledata[203] == 'true') {
                            $css .= ' .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__main-img_' . $query->post->ID . '{
                                    background-image: url(' . $image_url[0] . ');
                                    background-position: center center;
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    padding-bottom:' . $styledata[249] . '%;
                                }';
                        } else {
                            $img .= '<img class="oxi-image" src="' . $image_url[0] . '">';
                        }
                        $img .= ' <div class="oxi-addons__overlay">
                                        ' . oxi_addons_font_awesome('' . $stylefiles[27] . '') . '
                                    </div>
                                </div>
                            </a>
                        ';
                    }
                }
                if ($styledata[11] == 'show') {
                    $excerpt = str_word_count(strip_tags(get_the_excerpt()));
                    if ($excerpt == 0) {
                        $posts = explode(' ', get_the_content(), $styledata[13]);
                    } else {
                        $posts = explode(' ', get_the_excerpt(), $styledata[13]);
                    }
                    if (count($posts) >= $styledata[13]) {
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
                if ($styledata[9] == 'show') {
                    $title = '
                  <a class="oxi-link" title=" ' . get_the_title($query->post->ID) . '" href="' . get_permalink($query->post->ID) . '"  target="' . $styledata[207] . '">
                    <' . $styledata[343] . ' class="oxi-addons__title">
                    ' . get_the_title($query->post->ID) . '
                    </' . $styledata[343] . '> 
                </a>  
            ';
                }
                $avater = $meta = $align = $header_footer = $button = '';
                $avater = get_avatar(get_the_author_meta('ID'));
                if ($styledata[339] == 'show') {
                    $button = '<div class="oxi-addons__button-main">
                                <a href="' . get_permalink($query->post->ID) . '" class="oxi-addons__btn-link"  target="' . $styledata[251] . '">
                                    ' . OxiAddonsTextConvert($stylefiles[35]) . '
                                </a>
                            </div>';
                }
                if ($styledata[15] == 'show') {
                    if ($stylefiles[31] == 'custom') {
                        $avater = '<img alt="" src="' . OxiAddonsUrlConvert($stylefiles[33]) . '" class="avatar">';
                    }
                    $meta = '<div class="oxi-addons__meta-button">
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
                            ' . $button . '
                        </div>';
                } else {
                    $meta = ' ' . $button . '';
                }

                if ($styledata[17] == 'footer') {
                    $header_footer = '' . $title . '
                                 ' . OxiAddonsTextConvert($content_excerpt) . '
                                 ' . $meta . '';
                } else {
                    $header_footer = '' . $meta . '
                                 ' . $title . '
                                 ' . OxiAddonsTextConvert($content_excerpt) . ' ';
                }

                echo '<div class="oxi-addons__main-wrapper-' . $oxiid . '">
                    <div class="oxi-addons__timeline-bullet"></div> 
                      <div class="oxi-addons__post-body"  ' . OxiAddonsAnimation($styledata, 81) . '>
                        <div class="oxi-addons__post-inner">  
                           <div class="oxi-addons__post-main">
                                 ' . $img . '
                                <div class="oxi-addons__article">
                                    ' . $header_footer . '
                                </div> 
                           </div> 
                        </div>
                    </div>
                </div>';
                $hoverData = $style = '';
                if ($stylefiles[29] == 'left') {
                    $style = 'transform: translateX(-100%)';
                    $hoverData = 'transform: translateX(0)';
                } elseif ($stylefiles[29] == 'top') {
                    $style = 'transform: translateY(-100%)';
                    $hoverData = 'transform: translateY(0)';
                } elseif ($stylefiles[29] == 'right') {
                    $style = 'transform: translateX(100%)';
                    $hoverData = 'transform: translateX(0)';
                } elseif ($stylefiles[29] == 'bottom') {
                    $style = 'transform: translateY(100%)';
                    $hoverData = 'transform: translateY(0)';
                }
            }
            wp_reset_postdata();
        }

        echo '</div>
    </div>';
        if ($stylefiles[23] == '') {
            $js = 'setTimeout(function () {oxiequalHeight(jQuery(".oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-inner"));}, 500);';
            wp_add_inline_script('shortcode-addons-jquery', $js);
        } else {
            echo 'pore dimo pari na';
        }

        $css .= '
            .oxi-addons-container *{
                transition: none;
            }
            .oxi-addons-parent-' . $oxiid . '{
                display: flex;
                flex-wrap: wrap;
                position: relative;
                overflow: hidden;
            } 
            .oxi-addons__main-wrapper-' . $oxiid . '{
                width: 50%;
                display: flex;  
                position: relative;
            }  
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-body{
                width: 100%;
                 position: relative;
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 59) . ';  
            }  
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-inner{
                width: 100%; 
                display: flex;
                flex-direction: column;
                background: ' . $styledata[19] . ';
                border:  ' . $styledata[21] . 'px ' . $styledata[22] . ';  
                border-color: ' . $styledata[25] . '; 
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 75) . ';
                overflow: hidden; 
            }   
            .oxi-addons__main-wrapper-' . $oxiid . ':after{
                background-color: ' . $styledata[375] . ';
                content: "";
                width: ' . $styledata[377] . 'px;
                height: ' . ((($styledata[347] * 4) / 2) + ($styledata[347] * 2)) . 'px;
                position: absolute;
                right: 0;
                top: ' . $styledata[347] . 'px;
            }  
             .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(even)::after{
               display: none;
            } 
            .oxi-addons__main-wrapper-' . $oxiid . ':after{
                height: 100%;
            }  
            .oxi-addons__main-wrapper-' . $oxiid . ':nth-last-child(2)::after{
                height: ' . (((($styledata[347] * 4) / 2) + ($styledata[347] * 2)) - $styledata[347]) . 'px;
            }   
            .oxi-addons__main-wrapper-' . $oxiid . ':last-child::after{
                height: ' . ((($styledata[347] * 4) / 2) + ($styledata[347] * 2)) . 'px;
            }   
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-body::after{
                border-color: transparent transparent transparent ' . $styledata[25] . ';
                border-style: solid;
                border-width: ' . $styledata[345] . 'px;
                content: "";
                height: 0;
                position: absolute;
                right: ' . ($styledata[67] - ($styledata[345] * 2) + 1) . 'px;
                top: ' . ($styledata[347] + ($styledata[351] / 2) - $styledata[345]) . 'px;
                width: 0;
            }  
            .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__post-body::after{
                border-color: transparent ' . $styledata[25] . ' transparent transparent;
                border-style: solid;
                border-width: ' . $styledata[345] . 'px;
                content: "";
                height: 0;
                left: ' . ($styledata[67] - ($styledata[345] * 2) + 1) . 'px;
                position: absolute;
                top: ' . (((($styledata[347] * 4) / 2) + ($styledata[347] * 2)) + ($styledata[351] / 2) - $styledata[345]) . 'px;
                width: 0;
            } 
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-link:hover{
               cursor: pointer;
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__timeline-bullet{   
                content: ""; 
                position: absolute;
                right: -' . (($styledata[351] - $styledata[377]) / 2) . 'px;
                top: ' . $styledata[347] . 'px;
                width: ' . $styledata[351] . 'px;
                height: ' . $styledata[351] . 'px;
                z-index: 3;
                cursor: pointer; 
                background: ' . $styledata[349] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 353) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 369) . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__timeline-bullet{ 
                left: -' . ((($styledata[351] - $styledata[377]) / 2) + 2) . 'px;  
                content: ""; 
                position: absolute; 
                top: ' . ((($styledata[347] * 4) / 2) + ($styledata[347] * 2)) . 'px;
                width: ' . $styledata[351] . 'px;
                height: ' . $styledata[351] . 'px;
                z-index: 3;
                cursor: pointer; 
                background: ' . $styledata[349] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 353) . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 369) . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__main-img{
                position: relative;
                display: flex;
                width: 100%;
                overflow: hidden;
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__main-img .oxi-image{
                width: 100%;
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__overlay{ 
                display: flex;
                justify-content:center;
                align-items: center;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background: ' . $styledata[241] . ';
                visibility: hidden;
                opacity: 0;
                transition: all .5s ease; 
                ' . $style . '
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__overlay .oxi-icons{ 
                font-size: ' . $styledata[245] . 'px;
                color: ' . $styledata[243] . '; 
            } 
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__main-img:hover .oxi-addons__overlay{
                visibility: visible;
                opacity: 1; 
                ' . $hoverData . '
            }  
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__article{ 
                width: 100%;
                display: flex;
                flex-direction: column; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 43) . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__title{  
                 display: flex;
                 width: 100%;
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-link{  
                font-size: ' . $styledata[85] . 'px;
                color: ' . $styledata[89] . ';
                ' . OxiAddonsFontSettings($styledata, 91) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 97) . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-link:hover{   
                color: ' . $styledata[205] . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__details{  
                font-size: ' . $styledata[113] . 'px;
                color: ' . $styledata[117] . ';
                ' . OxiAddonsFontSettings($styledata, 119) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 125) . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-info{  
                display: flex; 
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 149) . '; 
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left{  
               display: flex;
            }
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left > img,
            .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left > .oxi-addons__avater{  
                  border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 187) . ';
                  width: ' . $styledata[179] . 'px;
                  max-width: 100%;
                  height: ' . $styledata[183] . 'px;
            } 
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-right{  
               display: flex;
               flex-direction: column;
               justify-content: center;
            } 
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name{  
                 padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 209) . '; 
                  line-height: 1;
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name > .oxi-name{  
                font-size: ' . $styledata[165] . 'px;
                color: ' . $styledata[169] . ';
                ' . OxiAddonsFontSettings($styledata, 143) . ';  
                text-align: left;
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name > .oxi-name:hover{   
                color: ' . $styledata[171] . '; 
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-date{  
                   padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 225) . '; 
                   line-height: 1;
            }
            
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-date > .oxi-time{  
                font-size: ' . $styledata[173] . 'px;
                color: ' . $styledata[177] . ';
                ' . OxiAddonsFontSettings($styledata, 143) . '; 
                text-align: left;
            } 
            
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-button{  
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-button{  
                display: flex;
                justify-content: space-between;
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__button-main{   
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 269) . ';
                text-align: ' . $styledata[341] . ';
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__btn-link{  
                background: ' . $styledata[291] . ';
                color: ' . $styledata[289] . ';
                display: inline-block;
                ' . OxiAddonsFontSettings($styledata, 299) . ';
                font-size: ' . $styledata[285] . 'px;
                border:  ' . $styledata[293] . 'px ' . $styledata[294] . ';
                border-color: ' . $styledata[297] . ';
                border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 305) . ';
                padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 253) . '; 
                ' . OxiAddonsBoxShadowSanitize($styledata, 321) . ';
                transition: all .5s ease;
            }
             .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__btn-link:hover{  
                background: ' . $styledata[335] . ';
                color: ' . $styledata[333] . ';
                ' . OxiAddonsBoxShadowSanitize($styledata, 327) . ';
                border-color: ' . $styledata[337] . ';
            } 
            
            @media only screen and (min-width : 669px) and (max-width : 993px){  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-body{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 60) . ';  
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-inner{ ; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . '; 
                }   
                .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__timeline-bullet{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 354) . '; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__overlay .oxi-icons{ 
                    font-size: ' . $styledata[246] . 'px; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__article{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 44) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-link{  
                    font-size: ' . $styledata[85] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 98) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__details{  
                    font-size: ' . $styledata[114] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 126) . '; 
                }
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-info{   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 150) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left > img,
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left > .oxi-addons__avater{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 188) . ';
                    width: ' . $styledata[180] . 'px; 
                    height: ' . $styledata[184] . 'px;
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 210) . '; 
                }
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name > .oxi-name{  
                    font-size: ' . $styledata[166] . 'px; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-date{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 226) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-date > .oxi-time{  
                    font-size: ' . $styledata[174] . 'px; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__button-main{   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 270) . '; 
                }
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__btn-link{   
                    font-size: ' . $styledata[286] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 306) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 254) . ';  
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ':after{
                    display: none;
                }    
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-body::after{
                    display: none;
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__post-body::after{
                    display: none;
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__timeline-bullet{   
                    display: none;
                }
                .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__timeline-bullet{ 
                    display: none;
                }
            }
            @media only screen and (max-width : 668px){
                .oxi-addons-parent-' . $oxiid . '{
                   flex-direction: column;
                } 
                .oxi-addons__main-wrapper-' . $oxiid . '{
                    width: 100%; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-body{ 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 61) . ';  
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-inner{ ; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . '; 
                }   
                .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__timeline-bullet{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 355) . '; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__overlay .oxi-icons{ 
                    font-size: ' . $styledata[247] . 'px; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__article{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 45) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-link{  
                    font-size: ' . $styledata[86] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 99) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__details{  
                    font-size: ' . $styledata[115] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 127) . '; 
                }
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-info{   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 151) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left > img,
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-left > .oxi-addons__avater{  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 189) . ';
                    width: ' . $styledata[181] . 'px; 
                    height: ' . $styledata[185] . 'px;
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 211) . '; 
                }
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-name > .oxi-name{  
                    font-size: ' . $styledata[167] . 'px; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-date{  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 227) . '; 
                } 
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__meta-date > .oxi-time{  
                    font-size: ' . $styledata[175] . 'px; 
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__button-main{   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 271) . '; 
                }
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__btn-link{   
                    font-size: ' . $styledata[287] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 307) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 255) . ';  
                }   
                .oxi-addons__main-wrapper-' . $oxiid . ':after{
                    display: none;
                }    
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__post-body::after{
                    display: none;
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__post-body::after{
                    display: none;
                }  
                .oxi-addons__main-wrapper-' . $oxiid . ' .oxi-addons__timeline-bullet{   
                    display: none;
                }
                .oxi-addons__main-wrapper-' . $oxiid . ':nth-child(2n) .oxi-addons__timeline-bullet{ 
                    display: none;
                }

            } 
        ';
        wp_add_inline_style('shortcode-addons-style', $css);
        $jquery = "
            jQuery(function () {
                setTimeout(function() {
                    var selector = document.querySelector('.oxi-addons__meta-left');
                    selector.children[0].classList.add('oxi-addons__avater');
                }, 100)
            });";
        wp_add_inline_script('shortcode-addons-jquery', $jquery);
    }
}
