<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Footer_info\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle {

    public function register_controls() {


        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'content-settings' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'icon-settings' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_fi_content_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_fi_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_fi_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->add_responsive_control(
                'sa_fi_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi_addons_FI_3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();


        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_fi_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_row' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_fi_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );



        $this->add_responsive_control(
                'sa_fi_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 20,
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );




        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'content-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Body Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_fi_content_align', $this->style, [
            'label' => __('Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_contact' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_address' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_phone' => 'text-align: {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_email' => 'text-align: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_fi_content_header', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Header Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Header Text', SHORTCODE_ADDOONS),
            'default' => 'Contact Us',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_fi_content_address', $this->style, [
            'type' => Controls::TEXTAREA,
            'label' => __('Address', SHORTCODE_ADDOONS),
            'placeholder' => __('Address', SHORTCODE_ADDOONS),
            'default' => 'Dhaka, Bangladesh',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_fi_content_mobile', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Phone Number', SHORTCODE_ADDOONS),
            'placeholder' => __('Mobile', SHORTCODE_ADDOONS),
            'default' => '+121 125478541',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_fi_content_email', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Email Address', SHORTCODE_ADDOONS),
            'placeholder' => __('example@mail.com', SHORTCODE_ADDOONS),
            'default' => 'contactinfo@oxilab.org',
            'loader' => TRUE,
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Text Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'header_text' => esc_html__('Header', SHORTCODE_ADDOONS),
                'addresss' => esc_html__('Address', SHORTCODE_ADDOONS),
                'mobile' => esc_html__('Mobile', SHORTCODE_ADDOONS),
                'email' => esc_html__('Email', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_header_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_contact' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_header_color', $this->style, [
            'label' => __('Header Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_contact' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_header_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_contact' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_header_padding', $this->style, [
            'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_contact' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_address_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_address' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_address_color', $this->style, [
            'label' => __('Address Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_address' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_address_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_address' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_address_padding', $this->style, [
            'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_address' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_phone_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_phone' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_phone_color', $this->style, [
            'label' => __('Phone Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_phone' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_phone_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_phone' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_phone_padding', $this->style, [
            'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_phone' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_email_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_email' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_email_color', $this->style, [
            'label' => __('Email Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_email' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_email_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_email' => ''
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_email_padding', $this->style, [
            'label' => __('Text Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_email' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'icon-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icons Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_fi_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_repeater_control(
                'sa_fi_icon_repeater', $this->style, [
            'label' => __('Icon Repeater', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_fi_icon_icon' => [
                    'type' => Controls::ICON,
                    'label' => __('Icon Class', SHORTCODE_ADDOONS),
                    'default' => 'fas fa-envelope',
                    'loader' => TRUE,
                ],
                'sa_fi_icon_url' => [
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
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
                'sa_fi_repeater_color' => [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_FI_3 .sa_FI_3_icon_repeater_{{KEY}} .oxi-icons' => 'color:{{VALUE}};',
                    ],
                ],
                'shortcode-addons-start-tab1-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tab2' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_fi_repeater_color_hover' => [
                    'label' => __('Hover Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_FI_3 .sa_FI_3_icon_repeater_{{KEY}} .oxi-icons:hover' => 'color:{{VALUE}};',
                    ],
                ],
                'shortcode-addons-start-tab2-end' => [
                    'controller' => 'end_controls_tab',
                ],
                'shortcode-addons-start-tabs-end' => [
                    'controller' => 'end_controls_tabs',
                ],
            ],
            'title_field' => 'sa_fi_icon_icon',
            'condition' => [
                'sa_fi_icon' => 'yes',
            ],
                ]
        );



        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_fi_icon' => 'yes',
            ],
                ]
        );
        $this->add_control(
                'sa_fi_icon_align', $this->style, [
            'label' => __('Icon Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_icon-area' => 'text-align: {{VALUE}};',
            ],
            'condition' => [
                'sa_fi_icon' => 'yes',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_fi_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 40,
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_icon .oxi-icons-area .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        



        $this->add_responsive_control(
                'sa_fi_icon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_FI_3 .oxi_addons_FI_3_icon-area .oxi-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
