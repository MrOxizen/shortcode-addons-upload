<?php

namespace SHORTCODE_ADDONS_UPLOAD\Cookie_consent\Admin;

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

class Style_1 extends AdminStyle
{


    public function register_controls()
    {
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            []
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
            'sa_cookie_consent_mess',
            $this->style,
            [
                'label' => __('Message', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'This website uses cookies to ensure you get the best experience on our website.',
                'selector' => [
                    '{{WRAPPER}} .sa_cookie_consent_container_style_1 .protected_content' => ''
                ],
            ]
        );

        $this->add_control(
            'sa_cookie_consent_button_text',
            $this->style,
            [
                'label' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => esc_html__('Got it!', SHORTCODE_ADDOONS),
                'selector' => [
                    '{{WRAPPER}} .sa_cookie_consent_container_style_1 .sa_cookie_consent_message_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_learn_more_text',
            $this->style,
            [
                'label' => esc_html__('Learn More Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => esc_html__('Learn more', SHORTCODE_ADDOONS),
                'selector' => [
                    '{{WRAPPER}} .sa_cookie_consent_container_style_1 .sa_cookie_consent_message_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_link',
            $this->style,
            [
                'label' => esc_html__('Link', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => esc_html__('http://cookiesandyou.com/', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'position',
            $this->style,
            [
                'label' => __('Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'bottom' => esc_html__('Bottom', SHORTCODE_ADDOONS),
                    'bottom-left' => esc_html__('Bottom Left', SHORTCODE_ADDOONS),
                    'bottom-right' => esc_html__('Bottom Right', SHORTCODE_ADDOONS),
                    'top' => esc_html__('Top', SHORTCODE_ADDOONS),
                ],
                'default' => 'bottom'
            ]
        );
        $this->add_control(
            'pushdown',
            $this->style,
            [
                'label' => esc_html__('Show Title', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'position' => 'top',
                ]
            ]
        );
        $this->add_control(
            'sa_cookie_consent_days',
            $this->style,
            [
                'label' => __('Expiry Days', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '365',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_cookie_consent_container_style_1' => 'max-width: {{SIZE}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
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
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    'body .cc-window.cc-banner' => 'max-width: {{SIZE}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ff56c6',
                'selector' => [
                    'body .cc-window' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_group_control(
            'sa_cookie_consent_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    'body .cc-window.cc-banner' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_b_r',
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    'body .cc-window.cc-banner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_padding',
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
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    'body .cc-window.cc-banner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Text Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_cookie_consent_text_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    'body .cc-window *' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_text_c',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    'body .cc-window' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_learn_c',
            $this->style,
            [
                'label' => __('Learn More Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f9ff4c',
                'selector' => [
                    'body .cc-window .cc-link' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
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
            'sa_cookie_consent_button_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    'body .cc-window .cc-btn.cc-dismiss' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_button_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '#8e0077',
                'selector' => [
                    'body .cc-window .cc-btn.cc-dismiss' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_button_border',
            $this->style,
            [
                'label' => __('Border Style', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'none',
                    'options' => [
                        'none' => __('None', SHORTCODE_ADDOONS),
                        'solid' => __('Solid', SHORTCODE_ADDOONS),
                        'double' => __('Double', SHORTCODE_ADDOONS),
                        'dotted' => __('Dotted', SHORTCODE_ADDOONS),
                        'dashed' => __('Dashed', SHORTCODE_ADDOONS),
                        'groove' => __('Groove', SHORTCODE_ADDOONS),
                    ],
                    'selectors' => [
                        'body .cc-window .cc-btn.cc-dismiss' => 'border-style: {{VALUE}} !important;',
                    ],
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_button_size',
            $this->style,
            [
                'label' => __('Border Width', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '0',
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
                    'body .cc-window .cc-btn.cc-dismiss' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_button_size',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ccc',
                    'selectors' => [
                        'body .cc-window .cc-btn.cc-dismiss' => 'border-color: {{VALUE}} !important;',
                    ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_cookie_consent_button_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    'body .cc-window .cc-btn.cc-dismiss:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_cookie_consent_button_bg_h',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    'body .cc-window .cc-btn.cc-dismiss:hover' => 'background: {{VALUE}} !important;',
                ],
            ]
        );

        $this->add_control(
            'sa_cookie_consent_button_border_h',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparator' => 'RGB',
                'default' => '',
                'selector' => [
                    'body .cc-window .cc-btn.cc-dismiss:hover' => 'border-color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_cookie_consent_button_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                    'body .cc-window .cc-btn.cc-dismiss' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_button_padding',
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
                    'body .cc-window .cc-btn.cc-dismiss' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_cookie_consent_button_margin',
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
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -15,
                        'max' => 15,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    'body .cc-window .cc-btn.cc-dismiss' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
