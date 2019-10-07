<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Info_image_boxes\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-general-settings', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_info_image_column', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3' => '',
            ],
                ]
        );
$this->add_repeater_control(
                'sa_Info_image_boxes_data',
                $this->style,
                [
                    'label' => __('', SHORTCODE_ADDOONS),
                    'type' => Controls::REPEATER,
                    'fields' => [
                        'sa_info_image_h_text' => [
                            'label' => __('Heading', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXT,
                            'placeholder' => 'Your Heading Here',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3.oxi-addons-main-wrapper-style-3-{{KEY}} .oxi-addons-main-content .oxi-addons-heading' => '',
                            ],
                        ],
                        'sa_info_image_content_text' => [
                            'label' => __('Content', SHORTCODE_ADDOONS),
                            'type' => Controls::TEXTAREA,
                            'placeholder' => 'Your Content Here',
                            'selector' => [
                                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3-{{KEY}}   .oxi-addons-main-content .oxi-addons-details' => '',
                            ],
                        ],
                        'sa_info_image_img_src' => [
                            'type' => Controls::MEDIA,
                            'default' => [
                                'type' => 'media-library',
                                'link' => '',
                            ],
                            'loader' => TRUE,
                            'controller' => 'add_group_control',
                        ],
                        'sa_info_image_url_open' => [
                            'label' => __('Link Active', SHORTCODE_ADDOONS),
                            'type' => Controls::SWITCHER,
                            'default' => '',
                            'label_on' => __('Yes', SHORTCODE_ADDOONS),
                            'label_off' => __('No', SHORTCODE_ADDOONS),
                            'return_value' => 'link_show',
                        ],
                        'sa_info_image_url' => [
                            'type' => Controls::URL,
                            'loader' => TRUE,
                            'conditional' => Controls::INSIDE,
                            'condition' => [
                                'sa_info_image_url_open' => 'link_show',
                            ],
                            'controller' => 'add_group_control',
                        ],
                    ],
                    'title_field' => 'sa_info_image_h_text',
                    'button' => 'Add New Boxes',
                ]
        );
        $this->add_group_control(
                'sa_info_image_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-main-wrapper-style-3' => ''
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

        $this->add_group_control(
                'sa_info_image_bg_color',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-main-wrapper-style-3' => ''
                    ],
                ]
        );
        $this->add_group_control(
                'sa_info_image_normal_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_normal_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_group_control(
                'sa_info_image_bg_hover_color',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-main-wrapper-style-3:hover' => ''
                    ],
                ]
        );
        $this->add_group_control(
                'sa_info_image_hover_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3:hover' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_hover_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_info_image_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_margin', $this->style, [
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
                    'min' => -200,
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
                '{{WRAPPER}}.oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-info-image-parent-wrapper-style-3 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->add_group_control(
                'sa_head_animation', $this->style, [
            'type' => Controls::ANIMATION,
            'selector' => [
                '{{WRAPPER}}.oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-heading-container' => ''
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-info-image-image', [
            'label' => esc_html__('Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_info_image_img_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 100,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-image-main .oxi-addons-img' => 'width: {{VALUE}}px;',
            ]
                ]
        );
        $this->add_control(
                'sa_info_image_img_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 100,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-image-main .oxi-addons-img' => 'height: {{VALUE}}px;',
            ]
                ]
        );
        $this->add_control(
                'sa_info_image_img_alignment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'flex-start' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-image-main ' => 'justify-content:{{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_info_image_img_bor', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-image-main .oxi-addons-img' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_info_image_img_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-image-main .oxi-addons-img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_img_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-image-main  .oxi-addons-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_info_image_img_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-image-main .oxi-addons-img' => ''
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-heading', [
            'label' => esc_html__('Heading Setting', SHORTCODE_ADDOONS),
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-h-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_info_image_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-content .oxi-addons-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_info_image_head_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3:hover .oxi-addons-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_info_image_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-content .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_heading_padding', $this->style, [
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
                '{{WRAPPER}}.oxi-addons-info-image-parent-wrapper-style-3  .oxi-addons-main-content .oxi-addons-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons-short-details', [
            'label' => esc_html__('Short Details', SHORTCODE_ADDOONS),
                ]
        );
        $this->start_controls_tabs(
                'sa_info_image_short_det_tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();

        $this->add_control(
                'sa_info_image_short_det_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-content .oxi-addons-details' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_info_image_short_det_H_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-wrapper-style-3:hover .oxi-addons-details' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_info_image_short_det_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'separator' => TRUE,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-content .oxi-addons-details' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_short_det_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-info-image-parent-wrapper-style-3 .oxi-addons-main-content .oxi-addons-details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
