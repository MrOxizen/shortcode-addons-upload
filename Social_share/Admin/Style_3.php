<?php

namespace SHORTCODE_ADDONS_UPLOAD\Social_share\Admin;

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

class Style_3 extends AdminStyle {

    public function register_controls() {

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_ss_icon_align', $this->style, [
            'label' => __('Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-wrapper-ss3' => 'justify-content: {{VALUE}};',
            ],
                ]
        );
        $this->add_repeater_control(
                'sa_ss_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'button' => 'Add New Icon',
            'fields' => [
                'sa_ss_social_media' => [
                    'label' => __('Social Share Choose', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'facebook', 
                    'options' => [
                        'facebook' => __('Facebook', SHORTCODE_ADDOONS),
                        'twitter' => __('Twitter', SHORTCODE_ADDOONS),
                        'google' => __('Google+', SHORTCODE_ADDOONS),
                        'linkedin' => __('Linkedin', SHORTCODE_ADDOONS),
                        'pinterest' => __('Pinterest', SHORTCODE_ADDOONS),
                    ],
                ],
               'sa_ss_icon_icon' => [
                    'type' => Controls::ICON,
                    'label' => __('Icon Class', SHORTCODE_ADDOONS),
                    'default' => 'fab fa-facebook-f', 
                ],
                'shortcode-addons-start-tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                        'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    ]
                ],
                'shortcode-addons-start-tab1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_ss_icon_color' => [
                    'label' => __('Icon & Text Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR, 
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest' => 'color: {{VALUE}};',
                    ],
                ],
                'sa_ss_repeater_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest' => '',
                    ], 
                ],
                'sa_ss_border_color' => [
                    'label' => __('Border Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR, 
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest' => 'border-color: {{VALUE}};',
                    ],
                ],
                'sa_ss_repeater_box' => [
                    'type' => Controls::BOXSHADOW,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest' => '',
                    ],
                ],
                'shortcode-addons-start-tab1-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tab2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_ss_icon_text_hover' => [
                    'label' => __('Hover Icon & Text Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR, 
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook:hover' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter:hover' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin:hover' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google:hover' => 'color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest:hover' => 'color: {{VALUE}};',
                    ],
                ],
                'sa_ss_repeater_bg_hover' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest:hover' => '',
                    ],
                ],
                'sa_ss_br_color_hover' => [
                    'label' => __('Hover Border Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR, 
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook:hover' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter:hover' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin:hover' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google:hover' => 'border-color: {{VALUE}};',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest:hover' => 'border-color: {{VALUE}};',
                    ],
                ],
                'sa_ss_repeater_box_hover' => [
                    'type' => Controls::BOXSHADOW, 
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-facebook:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-twitter:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-linkedin:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-google:hover' => '',
                        '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-soical-share-{{KEY}} .oxi-addons-pinterest:hover' => '',
                    ],
                ],
                'shortcode-addons-start-tab2-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tabs-end' => [
                    'controller' => 'end_controls_tabs',
                ],
            ],
            'title_field' => 'sa_ss_social_media',
                ]
        );


        $this->add_responsive_control(
                'sa_ss_icon_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-wrapper-ss3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_ss_width_height', $this->style, [
            'label' => __('Height & Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-addons-main-share-circle' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_ss_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-ss3  .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
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
                'sa_ss_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-addons-main-share-circle' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ss_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-addons-main-share-circle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();


        $this->add_group_control(
                'sa_ss_h_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-addons-main-share-circle:hover' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_ss_h_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-addons-main-share-circle:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_ss_icon_box_padding', $this->style, [
            'label' => __('Icon Box Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-wrapper-ss3 .oxi-addons-social' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_ss_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
