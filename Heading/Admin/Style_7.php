<?php

namespace SHORTCODE_ADDONS_UPLOAD\Heading\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_7
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_7 extends AdminStyle
{

    public function register_controls()
    {
        $this->start_section_tabs(
            'shortcode-addons-heading-tabs'
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons-heading-text',
            [
                'label' => esc_html__('Text', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_head_text',
            $this->style,
            [
                'label' => __('Heading Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'This is Heading Text',
                'placeholder' => 'This is Heading Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-style-7 .oxi-addons-heading-text' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_sub_head_text',
            $this->style,
            [
                'label' => __('Sub Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'This is Sub-heading Text',
                'placeholder' => 'This is Sub-heading Text',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-sub-heading-style-7 .oxi-addons-sub-heading-text' => '',
                ],
            ]
        );

        $this->add_control(
            'sa_head_heading_tag',
            $this->style,
            [
                'label' => __('Heading Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'separator' => TRUE,
                'default' => 'h2',
                'options' => [
                    'h1' => __('Heading 1', SHORTCODE_ADDOONS),
                    'h2' => __('Heading 2', SHORTCODE_ADDOONS),
                    'h3' => __('Heading 3', SHORTCODE_ADDOONS),
                    'h4' => __('Heading 4', SHORTCODE_ADDOONS),
                    'h5' => __('Heading 5', SHORTCODE_ADDOONS),
                    'h6' => __('Heading 6', SHORTCODE_ADDOONS),
                ],
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-general',
            [
                'label' => esc_html__('General ', SHORTCODE_ADDOONS),
                'showing' => False,
            ]
        );

        $this->add_responsive_control(
            'sa_head_margin',
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
                    '{{WRAPPER}} .oxi-addons-body-container ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_head_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-container' => ''
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
            'shortcode-addons-head-image',
            [
                'label' => esc_html__('Image ', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_head_style',
            $this->style,
            [
                'label' => __('Style', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => '2',
                'loader' => TRUE,
                'options' => [
                    '1' => __('Style 1', SHORTCODE_ADDOONS),
                    '2' => __('Style 2', SHORTCODE_ADDOONS),
                    '3' => __('Style 3', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_group_control(
            'sa_head_image',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.oxilab.org/wp-content/uploads/2019/03/divider-2461548__340.png',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_head_image_margin',
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
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => -10,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-img-body-wrapper-style-7' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-font-settings',
            [
                'label' => esc_html__('Heading Typography ', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_head_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#0f0f0f',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-style-7 .oxi-addons-heading-text' => 'color:{{VALUE}};'
                ],
            ]
        );


        $this->add_group_control(
            'sa_head_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-style-7 .oxi-addons-heading-text ' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_head_padding',
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
                    '{{WRAPPER}} .oxi-addons-heading-style-7 .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-sub-head-font-settings',
            [
                'label' => esc_html__('Sub-Heading Typography ', SHORTCODE_ADDOONS),
                'showing' => False,
            ]
        );
        $this->add_control(
            'sa_sub_head_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#706868',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-sub-heading-style-7 .oxi-addons-sub-heading-text' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_sub_head_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-sub-heading-style-7 .oxi-addons-sub-heading-text ' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_sub_head_padding',
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
                    '{{WRAPPER}} .oxi-addons-sub-heading-style-7 .oxi-addons-sub-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
