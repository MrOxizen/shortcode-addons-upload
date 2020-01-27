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



                    $title .= ' <div class="oxi_content_ticket_title">
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
                    $title .= '<div class="oxi_content_ticket_title oxi_content_ticket_title_' . $key . '">
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




        echo '<div class="oxi_addons_content_ticker_style1">
                        <div class="oxi_content_ticker_main"> 
                           ' . ($style['sa_content_ticker_tag_position'] == "left" ? $tag : "") . '
                                <div class="oxi_content_ticket_content ">
                                    <div class="sa_addons_carousel_style_1 sa_addons_carousel_style_1_' . $this->oxiid . ' ' . $style['sa_content_ticker_arrow_pos'] . '">
                                     ' . $title . '
                                     </div>
                                </div>
                             ' . ($style['sa_content_ticker_tag_position'] == "right" ? $tag : "") . '
                        </div>
                    </div>';
    }

    public function public_jquery() {
        $this->JSHANDLE = 'owl.carousel';
        wp_enqueue_script('owl.carousel', SA_ADDONS_UPLOAD_URL . '/Content_ticker/File/owl.carousel.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $jquery = $navtext = '';
        $styledata = $this->style;
        $oxiid = $this->oxiid;
        $navtext .= '[\'' . $this->font_awesome_render($styledata['sa_carousel_nav_left'] != '' ? $styledata['sa_carousel_nav_left'] : '') . '\', \'' . $this->font_awesome_render($styledata['sa_carousel_nav_right'] != '' ? $styledata['sa_carousel_nav_right'] : '') . '\' ]';
        $jquery = 'jQuery(".sa_addons_carousel_style_1_' . $oxiid . '").OxiAddowlCarousel({
            loop: ' . $styledata['sa_carousel_infin_loop_on_off'] . ',
            margin:0,
            autoplay:' . $styledata['sa_carousel_a_p_on_off'] . ',
            autoplayTimeout: ' . ($styledata['sa_carousel_a_p_dur'] * 1000) . ',
            center: false,
            autoplayHoverPause:' . $styledata['sa_carousel_pau_hov_on_off'] . ',
            mouseDrag:' . $styledata['sa_carousel_mou_dragg_on_off'] . ',
            rtl:' . $styledata['sa_carousel_rig_left_on_off'] . ',
            stagePadding: 0,
            merge:false,
            autoHeight: false,
            autoHeightClass: "oxi-owl-height",
            nav: ' . $styledata['sa_carousel_nav_on_off'] . ',
            navText: ' . $navtext . ',
            dots: false,
            responsive: {
                0: {
                    merge:false,
                    items: 1,
                },
                668: {
                    merge:false,
                    items: 1,
                },
                1000: {
                    merge:true,
                    items: 1,
                },
            },
        });';
        return $jquery;
    }

}
