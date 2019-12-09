<?php

namespace SHORTCODE_ADDONS_UPLOAD\Interactive_cards\Admin;

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

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-general-setting', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_mw', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 600,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 900,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 25,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1' => 'max-width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_control(
                'sa_interactive_cards_loader', $this->style, [
            'label' => __('Loader', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('On', SHORTCODE_ADDOONS),
            'label_off' => __('Off', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-addons-IC' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->add_group_control(
                'sa_interactive_cards_bx-shadow', $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-IC' => '',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-cross-icon', [
            'label' => esc_html__('Cross Icon', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-times',
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'right',
            'loader' => true,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_cl_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 25,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon' => ' width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_interactive_cards_cl_h', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 25,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon' => 'height : {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255,255,255,0.00)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_interactive_cards_cl_i_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 18,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon' => 'font-size:{{VALUE}}px',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_cl_br', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_cl_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1 .oxi-close-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-front-part', [
            'label' => esc_html__('Front Part', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_interactive_cards_fp_img', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/04/my_logo.png',
            ]
                ]
        );

        $this->add_control(
                'sa_interactive_cards_fp_bg', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(13, 13, 13, 1.00)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-1  .oxi-addons-ICfull-content' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_interactive_cards_fp_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 250,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-Interactive-card-style-1  .oxi-addons-image .oxi-addons-img' => 'width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_interactive_cards_fp_h', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 250,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1   .oxi-addons-image .oxi-addons-img' => 'height : {{SIZE}}{{UNIT}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_interactive_cards_fp_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1   .oxi-addons-ICfull-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-back-part', [
            'label' => esc_html__('Back Part', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_interactive_cards_bp_shortcode', $this->style, [
            'label' => __('Shortcode', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'placeholder' => 'Place Your Shortcode Here.',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-Interactive-card-style-1   .oxi-addons-back-content-inner' => '',
            ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-font-settings', [
            'label' => esc_html__('Loader', SHORTCODE_ADDOONS),
            'condition' => [
                'sa_interactive_cards_loader' => 'yes'
            ]
                ]
        );
        $this->add_control(
                'sa_interactive_cards_loader_style', $this->style, [
            'label' => __('Loader Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'style-3',
            'options' => [
                'style-1' => __('Styke 1', SHORTCODE_ADDOONS),
                'style-2' => __('Styke 2', SHORTCODE_ADDOONS),
                'style-3' => __('Styke 3', SHORTCODE_ADDOONS),
                'style-4' => __('Styke 4', SHORTCODE_ADDOONS),
            ],
            'loader' => true,
                ]
        );
        $this->add_control(
                'sa_interactive_cards_loader_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff6600',
            'loader' => true,
                ]
        );

        $this->add_control(
                'sa_interactive_cards_loader_dur', $this->style, [
            'label' => __('Loading Duration (ms)', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 3000,
            'description' => '',
            'max' => 10000,
            'min' => 0,
            'step' => 50,
            'loader' => true,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
