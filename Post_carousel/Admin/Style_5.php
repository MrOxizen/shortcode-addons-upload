<?php

namespace SHORTCODE_ADDONS_UPLOAD\Post_carousel\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_5 extends AdminStyle
{

    use \SHORTCODE_ADDONS_UPLOAD\Post_carousel\Files\Post_Query;

    public function register_controls()
    {
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style', SHORTCODE_ADDOONS),
                    'button-settings' => esc_html__('Button / Arrows', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-gen',
            [
                'label' => esc_html__('General', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->post_type();
        $this->add_control(
            'sa_post_carousel_post_type',
            $this->style,
            [
                'label' => __('Post Type', SHORTCODE_ADDOONS),
                'loader' => TRUE,
                'type' => Controls::SELECT,
                'default' => 'post',
                'options' => $this->post_type(),
            ]
        );
        $this->add_control(
            'sa_post_carousel_author',
            $this->style,
            [
                'label' => __('Author', SHORTCODE_ADDOONS),
                'loader' => TRUE,
                'type' => Controls::SELECT,
                'multiple' => true,
                'options' => $this->post_author(),
            ]
        );
        foreach ($this->post_type() as $key => $value) {
            if ($key != 'page') :
                $this->add_control(
                    'sa_post_carousel_post_type-cat' . $key,
                    $this->style,
                    [
                        'label' => __(' Category', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'multiple' => true,
                        'loader' => TRUE,
                        'options' => $this->post_category($key),
                        'condition' => [
                            'sa_post_carousel_post_type' => $key
                        ]
                    ]
                );
                $this->add_control(
                    'sa_post_carousel_post_type-tag' . $key,
                    $this->style,
                    [
                        'label' => __(' Tags', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'multiple' => true,
                        'loader' => TRUE,
                        'options' => $this->post_tags($key),
                        'condition' => [
                            'sa_post_carousel_post_type' => $key
                        ]
                    ]
                );
            endif;

            $this->add_control(
                'sa_post_carousel_post_type-include' . $key,
                $this->style,
                [
                    'label' => __(' Include Post', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'multiple' => true,
                    'loader' => TRUE,
                    'options' => $this->post_include($key),
                    'condition' => [
                        'sa_post_carousel_post_type' => $key
                    ]
                ]
            );
            $this->add_control(
                'sa_post_carousel_post_type-exclude' . $key,
                $this->style,
                [
                    'label' => __(' Exclude Post', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'multiple' => true,
                    'loader' => TRUE,
                    'options' => $this->post_exclude($key),
                    'condition' => [
                        'sa_post_carousel_post_type' => $key
                    ]
                ]
            );
        }
        $this->add_control(
            'sa_post_carousel_per_page',
            $this->style,
            [
                'label' => __('Post Per Page', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'default' => 3,
                'min' => 1,
            ]
        );
        $this->add_control(
            'sa_post_carousel_offset',
            $this->style,
            [
                'label' => __('Offset', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
            ]
        );
        $this->add_control(
            'sa_post_carousel_orderby',
            $this->style,
            [
                'label' => __(' Order By', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'ID',
                'loader' => TRUE,
                'options' => [
                    'ID' => 'Post ID',
                    'author' => 'Post Author',
                    'title' => 'Title',
                    'date' => 'Date',
                    'modified' => 'Last Modified Date',
                    'parent' => 'Parent Id',
                    'rand' => 'Random',
                    'comment_count' => 'Comment Count',
                    'menu_order' => 'Menu Order',
                ],
            ]
        );

        $this->add_control(
            'sa_post_carousel_ordertype',
            $this->style,
            [
                'label' => __(' Order Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending',
                ],
            ]
        );

        $this->start_controls_section(
            'shortcode-addons-layout',
            [
                'label' => esc_html__('layout Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_s_image_layout_linke_open',
            $this->style,
            [
                'label' => __('Link Style', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => '_blank',
                'options' => [
                    '' => [
                        'title' => __('Current Tab', SHORTCODE_ADDOONS),
                    ],
                    '_blank' => [
                        'title' => __('New Tab', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_s_image_layout_show_image',
            $this->style,
            [
                'label' => __('Show Image', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'show',
                'options' => [
                    'show' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'hide' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_thumb_sizes',
            $this->style,
            [
                'label' => __('Image Size', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => $this->thumbnail_sizes(),
                'condition' => [
                    'sa_s_image_layout_show_image' => 'show'
                ]
            ]
        );

        $this->add_control(
            'sa_s_image_layout_show_title',
            $this->style,
            [
                'label' => __('Show Title', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'show',
                'options' => [
                    'show' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'hide' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_s_image_layout_show_excerpt',
            $this->style,
            [
                'label' => __('Show Excerpt', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'show',
                'options' => [
                    'show' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'hide' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_s_image_excerpt_word',
            $this->style,
            [
                'label' => __('Excerpt Word', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'default' => 20,
                'min' => 0,
                'condition' => [
                    'sa_s_image_layout_show_excerpt' => 'show'
                ]
            ]
        );
        $this->add_control(
            'sa_s_image_layout_show_meta',
            $this->style,
            [
                'label' => __('Show Meta', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'show',
                'options' => [
                    'show' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'hide' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_meta_position',
            $this->style,
            [
                'label' => __('Meta Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'footer',
                'loader' => TRUE,
                'options' => [
                    'header' => 'Entry Header',
                    'footer' => 'Entry Footer',
                ],
                'condition' => [
                    'sa_s_image_layout_show_meta' => 'show'
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_controls_section();
        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-layout',
            [
                'label' => esc_html__('Carousel Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_post_carousel_image_switcher',
            $this->style,
            [
                'label' => __('Custom Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'post_carousel_height_width',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'post_carousel_height_width', 
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_post_carousel_image_switcher' => 'post_carousel_height_width', 
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => '800',
                ],
                'range' => [
                    '%' => [
                        'min' => 50,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 100,
                        'max' => 1500,
                        'step' => 10,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .post_carousel_height_width' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .post_carousel_height_width' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_post_carousel_image_switcher' => 'post_carousel_height_width', 
                ],
            ]
        );
        
        $this->add_control(
            'sa_post_carousel_slider_speed',
            $this->style,
            [
                'label' => __('Slider Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 500,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 3000,
                        'step' => 50,
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_autoplay_switter',
            $this->style,
            [
                'label' => __('Autoplay', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_post_carousel_autoplay_speed',
            $this->style,
            [
                'label' => __('Autoplay Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 1500,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5000,
                        'step' => 50,
                    ],
                ],
                'condition' => [
                    'sa_post_carousel_autoplay_switter' => 'yes',
                ],
            ]
        );
    
        $this->add_control(
            'sa_post_carousel_pause_switter',
            $this->style,
            [
                'label' => __('Pause On Hover', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => true,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_loop_switter',
            $this->style,
            [
                'label' => __('Infinite Loop', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_post_carousel_grab_cursor',
            $this->style,
            [
                'label' => __('Grab Cursor', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_post_carousel_arrow',
            $this->style,
            [
                'label' => __('Arrows', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_post_carousel_dots',
            $this->style,
            [
                'label' => __('Dots', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => '',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_post_carousel_auto_height',
            $this->style,
            [
                'label' => __('Auto Height', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => true,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_direction',
            $this->style,
            [
                'label' => __('Direction', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'left',
                'loader' => true,
                'options' => [
                    'left' => __('Left', SHORTCODE_ADDOONS),
                    'right' => __('Right', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-layout',
            [
                'label' => esc_html__('layout Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_meta_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__wrapper' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_post_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__wrapper' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_post_set_border_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_post_set_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__article' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_post_carousel_post_set_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__wrapper' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-thumbnail',
            [
                'label' => esc_html__('Post Thumbnail', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_post_carousel_img_eq_height',
            $this->style,
            [
                'label' => __('Image Equal Height', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_thumbnail_height',
            $this->style,
            [
                'label' => __('Thumbnail Height', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 55,
                'min' => 0,
                'max' => 100,
                'loader' => TRUE,
                'condition' => [
                    'sa_post_carousel_img_eq_height' => 'true'
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-thumbnail-overly',
            [
                'label' => esc_html__('Post Thumbnail Overlay', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_post_carousel_icon',
            $this->style,
            [
                'type' => Controls::ICON,
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'default' => 'fas fa-long-arrow-alt-right',
                'loader' => TRUE,
            ]
        );
        $this->add_control(
            'sa_post_carousel_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 22,
                'min' => 0,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__overlay .oxi-icons' => 'font-size: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__post-carousel-style-5 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_icon_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.7)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__post-carousel-style-5 .oxi-addons__overlay' => 'background : {{VALUE}}; '
                ],
            ]
        );

        $this->add_control(
            'sa_post_carousel_meta_position_effect',
            $this->style,
            [
                'label' => __('Meta Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'fade',
                'loader' => true,
                'options' => [
                    'fade' => 'Fade In',
                    'left' => 'Left to Right',
                    'top' => 'Top to Bottom',
                    'right' => 'Right to Left',
                    'bottom' => 'Bottom to top',
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-post-title',
            [
                'label' => esc_html__('Post title', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_s_image_layout_show_title' => 'show',
                ]
            ]
        );
        $this->add_control(
            'sa_post_carousel_title_tag',
            $this->style,
            [
                'label' => __('Select Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'h2',
                'options' => [
                    'h1' => __('Heading 1', SHORTCODE_ADDOONS),
                    'h2' => __('Heading 2', SHORTCODE_ADDOONS),
                    'h3' => __('Heading 3', SHORTCODE_ADDOONS),
                    'h4' => __('Heading 4', SHORTCODE_ADDOONS),
                    'h5' => __('Heading 5', SHORTCODE_ADDOONS),
                    'h6' => __('Heading 6', SHORTCODE_ADDOONS),
                ],
                'loader' => TRUE,
            ]
        );
        $this->add_control(
            'sa_post_carousel_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#252b25',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__title' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_post_carousel_title_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__title' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_title_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons-post-excerpt',
            [
                'label' => esc_html__('Excerpt', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_s_image_layout_show_excerpt' => 'show',
                ]
            ]
        );

        $this->add_control(
            'sa_post_carousel_excerpt_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#252b25',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__details' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_post_carousel_excerpt_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__details ' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_excerpt_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-meta',
            [
                'label' => esc_html__('Meta Setting', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_s_image_layout_show_meta' => 'show',
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'meta_name' => esc_html__('Meta Name', SHORTCODE_ADDOONS),
                    'meta_date' => esc_html__('Meta Date', SHORTCODE_ADDOONS),
                    'meta_avater' => esc_html__('Meta Avater', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_post_carousel_meta_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-name .oxi-name' => '',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_post_carousel_meta_name_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#2ba5ba',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-name > .oxi-name' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_post_carousel_meta_h_name',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#1cbfa4',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-name:hover > .oxi-name' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_post_carousel_meta_name_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-name ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_post_carousel_meta_date_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#252b25',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-date > .oxi-time' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_post_carousel_meta_date_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-date > .oxi-time ' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_meta_date_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-date > .oxi-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
            'sa_post_carousel_meta_avater',
            $this->style,
            [
                'label' => __('Avatars Type', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => '',
                'options' => [
                    '' => [
                        'title' => __('Auto', SHORTCODE_ADDOONS),
                    ],
                    'custom' => [
                        'title' => __('Common', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_meta_avater_img',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/1-1.jpg',
                ],
                'condition' => [
                    'sa_post_carousel_meta_avater' => 'custom'
                ]
            ]
        );
        $this->add_control(
            'sa_post_carousel_meta_avater_img_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 1,
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-left > img' => 'width: {{SIZE}}{{UNIT}}; ',
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-left > .oxi-addons__avater' => 'width: {{SIZE}}{{UNIT}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_meta_avater_img_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 1,
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-left > img' => 'height: {{SIZE}}{{UNIT}}; ',
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-left > .oxi-addons__avater' => 'height: {{SIZE}}{{UNIT}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_post_carousel_meta_separator',
            $this->style,
            [
                'label' => __(' ', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_meta_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__meta-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'button-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-post-button',
            [
                'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_post_carousel_button_align',
            $this->style,
            [
                'label' => __('Button Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'right',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],

                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'loader' => true,
            ]
        );
        $this->add_control(
            'sa_post_carousel_button_show',
            $this->style,
            [
                'label' => __('Button Show', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'show',
                'options' => [
                    'show' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'hide' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ],
                ],
                'loader' => true,
            ]
        );

        $this->add_control(
            'sa_post_carousel_button_text',
            $this->style,
            [
                'label' => __('Button Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Read More..',
                'placeholder' => 'Button Text..',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_post_carousel_button_url',
            $this->style,
            [
                'label' => __('Link Opening', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'loader' => TRUE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => '_blank',
                'options' => [
                    '' => [
                        'title' => __('Current Tab', SHORTCODE_ADDOONS),
                    ],
                    '_blank' => [
                        'title' => __('New Tab', SHORTCODE_ADDOONS),
                    ],
                ],

            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_button_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_button_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Arrows', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition'     => [
                    'sa_post_carousel_arrow' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'arrow_left',
            $this->style,
            [
                'label' => __('Arrow Left', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-left',

            ]
        );
        $this->add_control(
            'arrow_right',
            $this->style,
            [
                'label' => __('Arrow Right', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-arrow-right',

            ]
        );
        $this->add_responsive_control(
            'arrows_width_height',
            $this->style,
            [
                'label' => __('Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ', {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ' .oxi-icons, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ' .oxi-icons' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'arrows_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 22,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ' .oxi-icons, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ' .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'arrows_position',
            $this->style,
            [
                'label' => __('Align Arrows', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 220,
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 400,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . '' => 'right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'arrows_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ' .oxi-icons, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ' .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrows_bg_color_normal',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#44bbed',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ', {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'arrows_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ', {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => '',
                ]
            ]
        );
        $this->add_group_control(
            'arrows_boxsha_normal',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ', {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'arrows_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ':hover .oxi-icons, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ':hover .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'arrows_bg_color_hover',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ':hover, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ':hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'arrows_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ':hover, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ':hover' => '',
                ]
            ]
        );
        $this->add_group_control(
            'arrows_boxsha_hover',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ':hover, {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . ':hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'arrows_border_radius_normal',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ', {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'arrows_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_next_' . $this->oxiid . ', {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_prev_' . $this->oxiid . '' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-post-button-settings',
            [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_button_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => ' ',
                ],
            ]
        );


        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_post_carousel_button_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_button_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(62, 156, 214, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => 'background :{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_button_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -100,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_button_sadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_post_carousel_button_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link:hover' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_post_carousel_button_hover_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(67, 143, 191, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link:hover' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_button_hover_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link:hover' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_post_carousel_button_hover_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -100,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_post_carousel_button_hover_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .oxi-addons__btn-link:hover' => ''
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Dots', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition'     => [
                    'sa_post_carousel_dots' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'dots_position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'inside' => __('Inside', SHORTCODE_ADDOONS),
                    'outside' => __('Outside', SHORTCODE_ADDOONS),
                ],
                'default' => 'outside',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'dots_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '10',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dots_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '3',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 5,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'dots_bg_color_normal',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgb(119, 119, 119)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border_normal',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet' => '',
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'dots_bg_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#44bbed',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border_hover',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet:hover' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'dots_bg_color_active',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#44bbed',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet-active' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'dots_border_active',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet-active' => '',
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'dots_border_radius_normal',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . ' .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dots_margin',
            $this->style,
            [
                'label' => __('margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} {{WRAPPER}} .oxi-addons__post-carousel-style-5 .sa_post_carousel_pagination_' . $this->oxiid . '' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
