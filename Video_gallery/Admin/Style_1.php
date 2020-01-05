<?php

namespace SHORTCODE_ADDONS_UPLOAD\Video_gallery\Admin;

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

class Style_1 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                        'video-settings' => esc_html__('Video Gallery Settings', SHORTCODE_ADDOONS),
                        'thumbnail-settings' => esc_html__('Thumbnail Settings', SHORTCODE_ADDOONS),
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
                'shortcode-addons',
                [
                    'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_video_gellery_temp_type',
                $this->style,
                [
                    'label' => __('Template Type', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'vertical',
                    'loader' => TRUE,
                    'options' => [
                        'vertical' => __('Vertical', SHORTCODE_ADDOONS),
                        'horizontal' => __('Horizontal', SHORTCODE_ADDOONS),
                    ],
                ]
        );

        $this->add_repeater_control(
                'sa_video_gellery_data',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'fields' => [
                        'shortcode-addons-start-tabs' => [
                            'controller' => 'start_controls_tabs',
                            'options' => [
                                'source' => esc_html__('Source', SHORTCODE_ADDOONS),
                                'description' => esc_html__('Description', SHORTCODE_ADDOONS),
                                'poster' => esc_html__('Poster', SHORTCODE_ADDOONS),
                            ]
                        ],
                        'shortcode-addons-start-tab1' => [
                            'controller' => 'start_controls_tab',
                        ],
                        'sa_video_gellery_video_type' => [
                            'label' => __('Video Type', SHORTCODE_ADDOONS),
                            'type' => Controls::SELECT,
                            'default' => 'sa_effects_inside',
                            'options' => [
                                'remote_url' => __('Remote Video', SHORTCODE_ADDOONS),
                                'local' => __('Local Video', SHORTCODE_ADDOONS),
                            ],
                        ],
                        'sa_video_gellery_local_vdo' => [
                            'label' => esc_html__('Local Video', SHORTCODE_ADDOONS),
                            'type' => Controls::FILEUPLOAD,
                            'select' => Controls::VIDEO,
                            'controller' => 'add_group_control',
                            'conditional' => Controls::INSIDE,
                            'condition' => [
                                'sa_video_gellery_video_type' => 'local'
                            ]
                        ],
                        'sa_video_gellery_source' => [
                            'label' => esc_html__('Video Source', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'loader' => TRUE,
                            'default' => 'https://youtu.be/3M6jrL_Ytes',
                            'conditional' => Controls::INSIDE,
                            'condition' => [
                                'sa_video_gellery_video_type' => 'remote_url'
                            ]
                        ],
                        'shortcode-addons-start-tab1-end' => [
                            'controller' => 'end_controls_tab',
                        ],
                        'shortcode-addons-start-tab2' => [
                            'controller' => 'start_controls_tab',
                        ],
                        'sa_video_gellery_title' => [
                            'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'loader' => TRUE,
                            'default' => 'Video Title',
                            'selector' => [
                                '{{WRAPPER}} .sa_addons_tooltip_container_style_1 .sa_addons_tooltip_style_1 .sa_addons_tooltip_text' => '',
                            ],
                        ],
                        'sa_video_gellery_des' => [
                            'label' => __('Description', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXTAREA,
                            'default' => 'Elementor Addons Video',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-C-text' => '',
                            ],
                        ],
                        'shortcode-addons-start-tab2-end' => [
                            'controller' => 'end_controls_tab',
                        ],
                        'shortcode-addons-start-tab3' => [
                            'controller' => 'start_controls_tab',
                        ],
                        'sa_video_gellery_poster_media' => [
                            'type' => Controls::MEDIA,
                            'default' => [
                                'type' => 'media-library',
                                'link' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/12/placeholder-img.jpg',
                            ],
                            'controller' => 'add_group_control',
                        ],
                        'shortcode-addons-start-tab3-end' => [
                            'controller' => 'end_controls_tab',
                        ],
                        'shortcode-addons-start-tabs-end' => [
                            'controller' => 'end_controls_tabs',
                        ],
                    ],
                    'title_field' => 'sa_video_gellery_title',
                    'button' => 'Add Video',
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Video', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_video_gellery_title_on_off',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'loader' => TRUE,
                    'default' => 'yes',
                    'yes' => __('Yes', SHORTCODE_ADDOONS),
                    'no' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_video_gellery_description_on_off',
                $this->style,
                [
                    'label' => __('Description', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'loader' => TRUE,
                    'default' => 'yes',
                    'yes' => __('Yes', SHORTCODE_ADDOONS),
                    'no' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_video_gellery_play_btn_on_off',
                $this->style,
                [
                    'label' => __('Play Button on Hover', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'loader' => TRUE,
                    'default' => 'no',
                    'yes' => __('Yes', SHORTCODE_ADDOONS),
                    'no' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_video_gellery_continuous_play',
                $this->style,
                [
                    'label' => __('Play when Navigate', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'loader' => TRUE,
                    'default' => 'no',
                    'yes' => __('Yes', SHORTCODE_ADDOONS),
                    'no' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                [
                    'condition' => [
                        'shortcode-addons-start-tabs' => 'video-settings'
                    ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Video Title', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_video_gellery_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .rvs-item-text h2 ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_video_gellery_title_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .rvs-item-text h2' => '',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Play/Pause Button', SHORTCODE_ADDOONS),
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_play_btn_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-play-video ' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_video_gellery_play_btn_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#1e87f0',
            'oparetor' => 'RGB',
            'default' => '#1E87F0',
            'selector' => [
                '{{WRAPPER}} .rvs-play-video ' => 'background : {{VALUE}}; '
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_video_gellery_play_btn_WH',
                $this->style,
                [
                    'label' => __('Spacer', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '50',
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
                            'max' => 5,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .rvs-play-video' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_play_btn_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .rvs-play-video' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_video_gellery_play_btn_border_radius', $this->style, [
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
                '{{WRAPPER}} .rvs-play-video' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_video_gellery_play_border_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .rvs-play-video' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_video_gellery_play_h_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-play-video:hover ' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_video_gellery_play_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#1e87f0',
            'oparetor' => 'RGB',
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-play-video:hover ' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_play_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .rvs-play-video:hover' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_play_h_border_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .rvs-play-video:hover' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Video Description', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_video_gellery_description_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .sa-vg-video-desc' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_description_spacer',
                $this->style,
                [
                    'label' => __('Spacer', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '50',
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
                            'max' => 5,
                            'step' => .1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa-vg-video-desc' => 'margin-top : {{SIZE}}{{UNIT}};'
                    ],
                ]
        );

        $this->add_group_control(
                'sa_video_gellery_description_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa-vg-video-desc ' => '',
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
                        'shortcode-addons-start-tabs' => 'thumbnail-settings'
                    ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Thumb Item', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('Active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thumbnail_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#151515',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item ' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_thumbnail_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .rvs-nav-item' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_padding', $this->style, [
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
                '{{WRAPPER}} .rvs-nav-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_margin', $this->style, [
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
                '{{WRAPPER}} .rvs-nav-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_border_radius', $this->style, [
            'label' => __('Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .rvs-nav-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_video_gellery_thumbnail_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .rvs-nav-item' => ''
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thumbnail_hover_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#0F6ECD',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item:hover ' => 'background : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_video_gellery_thumbnail_hover_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .rvs-nav-item:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_hover_border_radius', $this->style, [
            'label' => __('Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .rvs-nav-item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_thumbnail_hover_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .rvs-nav-item:hover' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thumbnail_active_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#151515',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item.rvs-active ' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_thumbnail_active_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .rvs-nav-item.rvs-active' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_tabs();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Thumbnail', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_img_width',
                $this->style,
                [
                    'label' => __('Width (px)', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '80',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .rvs-nav-item span' => 'width : {{SIZE}}px;'
                    ],
                ]
        );

        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_img_padding', $this->style, [
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
                '{{WRAPPER}} .rvs-nav-item span' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_img_margin', $this->style, [
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
                '{{WRAPPER}} .rvs-nav-item span' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_img_opacity',
                $this->style,
                [
                    'label' => __('Opacity', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => '%',
                        'size' => '1',
                    ],
                    'range' => [
                        '%' => [
                            'min' => 0,
                            'max' => 1,
                            'step' => 0.1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .rvs-nav-item span:hover' => 'opacity : {{SIZE}} !important;'
                    ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_img_h_opacity',
                $this->style,
                [
                    'label' => __('Opacity', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => '%',
                        'size' => '1',
                    ],
                    'range' => [
                        '%' => [
                            'min' => 0,
                            'max' => 1,
                            'step' => 0.1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .rvs-nav-item span:hover' => 'opacity : {{SIZE}} !important;'
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_video_gellery_thumbnail_img_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .rvs-nav-item span' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_thumbnail_img_BR', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .rvs-nav-item span' => 'border-radius : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_video_gellery_thumbnail_img_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}}  .rvs-nav-item span' => ''
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thum_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item-title ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thum_title_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item-title:hover ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_video_gellery_thum_title_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item-title ' => '',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );

        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thum_descrip_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item-credits ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_video_gellery_thum_descrip_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item-credits:hover ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_video_gellery_thum_descrip_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .rvs-nav-item-credits ' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_video_gellery_thum_descrip_spacer',
                $this->style,
                [
                    'label' => __('Spacer', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '50',
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .rvs-nav-item-credits' => 'margin-top : {{SIZE}}px;'
                    ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_devider();
    }

}
