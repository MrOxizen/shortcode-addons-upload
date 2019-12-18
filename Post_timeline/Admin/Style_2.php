<?php

namespace SHORTCODE_ADDONS_UPLOAD\Post_timeline\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle
{

    use \SHORTCODE_ADDONS_UPLOAD\Post_timeline\Files\Post_Query;

    public function register_controls()
    {
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style', SHORTCODE_ADDOONS),
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
            'sa_display_post_post_type',
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
            'sa_display_post_author',
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
                    'sa_display_post_post_type-cat' . $key,
                    $this->style,
                    [
                        'label' => __(' Category', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'multiple' => true,
                        'loader' => TRUE,
                        'options' => $this->post_category($key),
                        'condition' => [
                            'sa_display_post_post_type' => $key
                        ]
                    ]
                );
                $this->add_control(
                    'sa_display_post_post_type-tag' . $key,
                    $this->style,
                    [
                        'label' => __(' Tags', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'multiple' => true,
                        'loader' => TRUE,
                        'options' => $this->post_tags($key),
                        'condition' => [
                            'sa_display_post_post_type' => $key
                        ]
                    ]
                );
            endif;

            $this->add_control(
                'sa_display_post_post_type-include' . $key,
                $this->style,
                [
                    'label' => __(' Include Post', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'multiple' => true,
                    'loader' => TRUE,
                    'options' => $this->post_include($key),
                    'condition' => [
                        'sa_display_post_post_type' => $key
                    ]
                ]
            );
            $this->add_control(
                'sa_display_post_post_type-exclude' . $key,
                $this->style,
                [
                    'label' => __(' Exclude Post', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'multiple' => true,
                    'loader' => TRUE,
                    'options' => $this->post_exclude($key),
                    'condition' => [
                        'sa_display_post_post_type' => $key
                    ]
                ]
            );
        }
        $this->add_control(
            'sa_display_post_per_page',
            $this->style,
            [
                'label' => __('Post Per Page', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'min' => 1,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-single-image-container-style-2 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
                ]
            ]
        );
        $this->add_control(
            'sa_display_post_offset',
            $this->style,
            [
                'label' => __('Offset', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-single-image-container-style-2 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
                ]
            ]
        );
        $this->add_control(
            'sa_display_post_orderby',
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
            'sa_display_post_ordertype',
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




        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-layout',
            [
                'label' => esc_html__('layout Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
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
            'sa_s_image_layout_show_avater',
            $this->style,
            [
                'label' => __('Show Avater', SHORTCODE_ADDOONS),
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
            'sa_s_image_layout_show_tooltip',
            $this->style,
            [
                'label' => __('Show Tooltip', SHORTCODE_ADDOONS),
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
        $this->add_control(
            'sa_display_post_thumb_sizes',
            $this->style,
            [
                'label' => __('Image Size', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => $this->thumbnail_sizes(),
            ]
        );
        $this->add_responsive_control(
            'sa_display_post_img_height',
            $this->style,
            [
                'label' => __('Image Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => 70,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 2,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-inner::after' => 'padding-bottom:{{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-main' => 'padding-bottom:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_display_post_post_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-inner' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_display_post_post_set_border_r',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_display_post_post_set_padding',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__article' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_display_post_post_set_margin',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_display_post_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-inner' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_display_post_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-arrow',
            [
                'label' => esc_html__('Arrow Setting', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_display_post_arrow_size',
            $this->style,
            [
                'label' => __('Arrow Size', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 15,
                'min' => 0,
                'max' => 100,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-body::after' => 'border-width: {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_arrow_bg_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#58bab0',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-body::after' => 'border-color: transparent transparent transparent {{VALUE}}; ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__post-body::after' => 'border-color: transparent  {{VALUE}} transparent transparent;'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-bullet',
            [
                'label' => esc_html__('Bullet Setting', SHORTCODE_ADDOONS),
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Left Child', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Right Child', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'sa_display_post_bullet_pos_top_bottom',
            $this->style,
            [
                'label' => __('Position Top Bottom', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 100,
                'min' => -1000,
                'max' => 1000,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__timeline-bullet' => 'top: {{VALUE}}px; ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-body::after' => 'top: calc({{VALUE}}px - 5px); ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2::after' => 'top: {{VALUE}}px; ',
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_bullet_pos_left_right',
            $this->style,
            [
                'label' => __('Position Left Right', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => -10,
                'min' => -300,
                'max' => 300,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__timeline-bullet' => 'right: {{VALUE}}px; '
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_display_post_bullet_pos_top_bottom_2nd',
            $this->style,
            [
                'label' => __('Position Top Bottom', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 150,
                'min' => -1000,
                'max' => 1000,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__timeline-bullet' => 'top: {{VALUE}}px !important; ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__post-body::after' => 'top:  calc({{VALUE}}px - 5px) !important; ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:last-child::after' => 'height:  calc({{VALUE}}px - {{sa_display_post_bullet_pos_top_bottom.VALUE}}px) !important;',
                ]
            ]
        );
        $this->add_control(
            'sa_display_post_bullet_pos_left_right_2nd',
            $this->style,
            [
                'label' => __('Position Left Right', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => -10,
                'min' => -300,
                'max' => 300,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__timeline-bullet' => 'left: {{VALUE}}px !important;'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_display_post_bullet_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE
            ]
        );
        $this->add_control(
            'sa_display_post_bullet_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(42, 161, 153, 1)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__timeline-bullet' => 'background : {{VALUE}}; ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__timeline-bullet' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_bullet_width_height',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 25,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2  .oxi-addons__timeline-bullet' => 'width: {{SIZE}}px;  height: {{SIZE}}px;',
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__timeline-bullet' => 'width: {{SIZE}}px;  height: {{SIZE}}px;',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_display_post_bullet_border_radius',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2  .oxi-addons__timeline-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__timeline-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_display_post_bullet_box_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2  .oxi-addons__timeline-bullet' => '',
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2:nth-child(2n) .oxi-addons__timeline-bullet' => ''
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-bullet',
            [
                'label' => esc_html__('Divider Setting', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_display_post_divider_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(42, 161, 153, 1)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2::after' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_divider_width_height',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 2,
                'min' => 0,
                'max' => 20,
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2::after' => 'width : {{VALUE}}px; right : -{{VALUE}}px',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-post-thumbnail-overly',
            [
                'label' => esc_html__('Post Thumbnail Overlay', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_display_post_meta_position_effect',
            $this->style,
            [
                'label' => __('Overlay Effects', SHORTCODE_ADDOONS),
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
            'sa_display_post_icon_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.7)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi-addons__post-main' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_display_post_icon_bg_color_hover',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.7)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2:hover .oxi-addons__post-main' => 'background : {{VALUE}}; '
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-title',
            [
                'label' => esc_html__('Post title', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_s_image_layout_show_title' => 'show'
                ]
            ]
        );

        $this->add_control(
            'sa_display_post_title_tag',
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
        $this->add_group_control(
            'sa_display_post_title_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__title' => '',
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
            'sa_display_post_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#525252',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__title' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_display_post_title_h_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#58bab0',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__title:hover' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_responsive_control(
            'sa_display_post_title_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons-post-excerpt',
            [
                'label' => esc_html__('Excerpt', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_s_image_layout_show_excerpt' => 'show'
                ]
            ]
        );

        $this->add_control(
            'sa_display_post_excerpt_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#9c9c9c',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__details' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_display_post_excerpt_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__details ' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_display_post_excerpt_padding',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-meta',
            [
                'label' => esc_html__('Avater Setting', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_s_image_layout_show_avater' => 'show'
                ]
            ]
        );
        $this->add_control(
            'sa_display_post_meta_avater',
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
            'sa_display_post_meta_avater_img',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/1-1.jpg',
                ],
                'condition' => [
                    'sa_display_post_meta_avater' => 'custom'
                ]
            ]
        );
        $this->add_control(
            'sa_display_post_meta_avater_img_width',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__meta-left > img' => 'width: {{SIZE}}{{UNIT}}; ',
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__meta-left > .oxi-addons__avater' => 'width: {{SIZE}}{{UNIT}}; '
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_meta_avater_img_height',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__meta-left > img' => 'height: {{SIZE}}{{UNIT}}; ',
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__meta-left > .oxi-addons__avater' => 'height: {{SIZE}}{{UNIT}}; '
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_display_post_meta_padding',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi-addons__meta-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-post-meta',
            [
                'label' => esc_html__('Tooltip Setting', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_s_image_layout_show_tooltip' => 'show'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'tooltip' => esc_html__('Tooltip', SHORTCODE_ADDOONS),
                    'text' => esc_html__('Text', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_display_post_tooltip_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.7)',
                'selector' => [
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => 'background: {{VALUE}}; ',
                    '{{WRAPPER}}  .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip::before' => 'border-color: transparent transparent {{VALUE}} transparent;'
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_tooltip_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'range' => [
                    'px' => [
                        'min'   => 0,
                        'max'   => 500,
                        'step'  => 1,
                    ],
                    'em' => [
                        'min'   => 0,
                        'max'   => 50,
                        'step'  => 1,
                    ],
                    '%' => [
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => 'width: {{SIZE}}{{UNIT}}; ',
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_tooltip_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => 'height: {{SIZE}}{{UNIT}}; ',
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_tooltip_position_top_bottom',
            $this->style,
            [
                'label' => __('Top Bottom Position', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => 'top: {{SIZE}}{{UNIT}}; ',
                ],
            ]
        );
        $this->add_control(
            'sa_display_post_tooltip_position_left_right',
            $this->style,
            [
                'label' => __('Left Right Position', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => -40,
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => 'left: {{SIZE}}{{UNIT}}; ',
                ],
            ]
        );

        $this->add_group_control(
            'sa_display_post_tooltip_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_display_post_tooltip_border_radius',
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
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_display_post_tooltip_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2 .oxi_addons__tooltip' => ''
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_display_post_meta_date_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#b0b0b0',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2  .oxi-time' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_display_post_meta_date_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons__main-wrapper-post-style-2  .oxi-time' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
