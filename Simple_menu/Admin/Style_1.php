<?php

namespace SHORTCODE_ADDONS_UPLOAD\Simple_menu\Admin;

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

    public function sa_get_menus() {
        $menus = wp_get_nav_menus();
        $options = [];

        if (empty($menus)) {
            return $options;
        }
        $options[0] = esc_html__('Select Menu', SHORTCODE_ADDOONS);
        foreach ($menus as $menu) {
            $options[$menu->term_id] = $menu->name;
        }

        return $options;
    }

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-gen', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_simple_menu_menu', $this->style, [
            'label' => esc_html__('Select Menu', SHORTCODE_ADDOONS),
            'description' => sprintf(__('Go to the <a href="%s" target="_blank">Menu screen</a> to manage your menus.', SHORTCODE_ADDOONS), admin_url('nav-menus.php')),
            'type' => Controls::SELECT,
            'default' => '0',
            'loader' => TRUE,
            'options' => $this->sa_get_menus(),
                ]
        );
        $this->add_control(
                'sa_simple_menu_layout', $this->style, [
            'label' => esc_html__('Layout', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'horizontal',
            'loader' => TRUE,
            'options' => [
                'horizontal' => __('Horizontal', SHORTCODE_ADDOONS),
                'vertical' => __('Vertical', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_simple_menu_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'sa_menu_align_left',
            'operator' => Controls::OPERATOR_ICON,
            'loader' => TRUE,
            'options' => [
                'sa_menu_align_left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'sa_menu_align_center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'sa_menu_align_right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
                ]
        );
        $this->add_group_control(
                'sa_simple_menu_main_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1' => '',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_horizontal' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_simple_menu_main_box_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1' => '',
                '{{WRAPPER}} .oxi_simple_menu.sa_menu_horizontal.oxi_simple_menu_responsive' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_simple_menu_main_box_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .oxi_simple_menu_style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_simple_menu_main_box_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .oxi_simple_menu_style1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();


        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-gen', [
            'label' => esc_html__('Top Level Item', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_simple_menu_text_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li > a' => '',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu_toggle_text' => '',
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


        $this->add_control(
                'sa_simple_menu_text_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li > a' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu_toggle_text' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_simple_menu_text_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li > a' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();


        $this->add_control(
                'sa_simple_menu_text_h_color', $this->style, [
            'label' => __('Text Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li:hover > a' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li.current-menu-item > a' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li.current-menu-ancestor > a' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_simple_menu_text_h_bg_color', $this->style, [
            'label' => __('Background Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li:hover > a' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li.current-menu-item > a' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li.current-menu-ancestor > a' => 'background-color: {{VALUE}};',
            ],
                ]
        );



        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
                'sa_simple_menu_text_border', $this->style, [
            'label' => __('Divider Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_horizontal:not(.oxi_simple_menu_responsive) > li > a' => 'border-right: 1px solid {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1.sa_menu_align_center .oxi_simple_menu.sa_menu_horizontal:not(.oxi_simple_menu_responsive) > li:first-child > a' => 'border-left: 1px solid {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1.sa_menu_align_right .oxi_simple_menu.sa_menu_horizontal:not(.oxi_simple_menu_responsive) > li:first-child > a' => 'border-left: 1px solid {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_horizontal.oxi_simple_menu_responsive > li:not(:last-child) > a' => 'border-bottom: 1px solid {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_vertical > li:not(:last-child) > a' => 'border-bottom: 1px solid {{VALUE}};',
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_simple_menu_text_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li a' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_horizontal  li ul li a' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_simple_menu_icon1', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_simple_menu_icon1_cls', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-angle-double-down',
            'condition' => [
                'sa_simple_menu_icon1' => 'yes',
            ],
                ]
        );



        $this->add_responsive_control(
                'sa_simple_menu_icon1_padding', $this->style, [
            'label' => __('Icon Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_horizontal li a span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'condition' => [
                'sa_simple_menu_icon1' => 'yes',
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-gen', [
            'label' => esc_html__('Dropdown Menu', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_simple_manu_drpdn_view', $this->style, [
            'label' => __('Viewing Animaton', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'sa_animation_fade',
            'loader' => TRUE,
            'options' => [
                'sa_animation_fade' => __('Fade', SHORTCODE_ADDOONS),
                'sa_animation_top' => __('To Top', SHORTCODE_ADDOONS),
                'sa_animation_zin' => __('ZoomIn', SHORTCODE_ADDOONS),
                'sa_animation_zout' => __('ZoomOut', SHORTCODE_ADDOONS),
            ],
                ]
        );

        $this->add_group_control(
                'sa_simple_menu_drp_typography', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li > a' => '',
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


        $this->add_control(
                'sa_simple_menu_drpdn_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li > a' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_simple_menu_drpdn_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li > a' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();


        $this->add_control(
                'sa_simple_menu_drpdn_hover_cl', $this->style, [
            'label' => __('Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#5c5c5c',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li:hover > a' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li.current-menu-item > a' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li.current-menu-ancestor > a' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_simple_menu_drpdn_hover_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li:hover > a' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li.current-menu-item > a' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul li.current-menu-ancestor > a' => 'background-color: {{VALUE}};',
            ],
                ]
        );



        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_simple_menu_drpdn_br', $this->style, [
            'type' => Controls::BORDER,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu li ul' => ''
            ],
                ]
        );




        $this->add_control(
                'sa_simple_menu_icon2', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_simple_menu_icon2_cls', $this->style, [
            'type' => Controls::ICON,
            'label' => __('Icon Class', SHORTCODE_ADDOONS),
            'placeholder' => __('Icon Class', SHORTCODE_ADDOONS),
            'default' => 'fas fa-angle-double-right',
            'condition' => [
                'sa_simple_menu_icon2' => 'yes',
            ],
                ]
        );


       




        $this->add_responsive_control(
                'sa_simple_menu_icon2_pading', $this->style, [
            'label' => __('Icon Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
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
                '{{WRAPPER}} .oxi_simple_menu_style1 .oxi_simple_menu.sa_menu_horizontal li a span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'condition' => [
                'sa_simple_menu_icon2' => 'yes',
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
