<?php

namespace SHORTCODE_ADDONS_UPLOAD\Heading\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_5
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_5 extends AdminStyle {

    public function register_controls() {
        $this->start_section_tabs(
                'shortcode-addons-heading-tabs'
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-heading-text', [
            'label' => esc_html__('Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_head_text', $this->style, [
            'label' => __('Heading Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'This is Heading Text',
            'placeholder' => 'This is Heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-5 .oxi-addons-heading-text' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_sub_head_text', $this->style, [
            'label' => __('Sub Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'This is Sub-heading Text',
            'placeholder' => 'This is Sub-heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-5 .oxi-addons-sub-heading-text' => '',
            ],
                ]
        );

        $this->add_control(
                'sa_head_heading_tag', $this->style, [
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
            'shortcode-addons',
            [
                'label' => esc_html__('Divider Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_divider_switter',
            $this->style,
            [
                'label' => __('Divider', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_divider_alignment',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'separator' => TRUE,
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
                'default' => 'center',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-container-style-5 .heading-divider-main' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_heading_divider_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 250,
                ],
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 250,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-container-style-5 .heading-divider' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_divider_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-container-style-5 .heading-divider' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_heading_divider_padding',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'condition' => [
                    'sa_divider_switter' => 'yes'
                ],
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
                    '{{WRAPPER}} .oxi-addons-heading-container-style-5 .heading-divider' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
                'shortcode-addons-font-settings', [
            'label' => esc_html__('Heading Typography ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#0f0f0f',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-5 .oxi-addons-heading-text' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_head_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(118, 240, 142, 0.34)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-5 .oxi-addons-heading-text' => 'background-color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
            'sa_heading_header_position',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS), 
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-heading-style-5 ' => 'justify-content: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
                'sa_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY, 
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-5 .oxi-addons-heading-text ' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_head_border_btm', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-5 .oxi-addons-heading-text' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading-style-5 .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_head_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-sub-head-font-settings', [
            'label' => esc_html__('Sub-Heading Typography ', SHORTCODE_ADDOONS),
            'showing' => False,
                ]
        );
        $this->add_control(
                'sa_sub_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#706868',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-5 .oxi-addons-sub-heading-text' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_sub_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-5 .oxi-addons-sub-heading-text ' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_sub_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-sub-heading-style-5 .oxi-addons-sub-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
