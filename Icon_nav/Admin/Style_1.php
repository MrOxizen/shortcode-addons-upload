<?php

namespace SHORTCODE_ADDONS_UPLOAD\Icon_nav\Admin;

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
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'style-settings' => esc_html__('Style', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('Icon Nav', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_repeater_control(
                'sa_icon_nav_data_style_1', $this->style, [
            'label' => __('Icon Nav Items', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'separator' => TRUE,
            'button' => 'Add New Item',
            'fields' => [
                'sa_icon_nav_icon' => [
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-home',
                ],
                'sa_icon_nav_title' => [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Home',
                    'placeholder' => 'Home',
                ],
                'sa_icon_nav_url' => [
                    'label' => __('URL', SHORTCODE_ADDOONS),
                    'controller' => 'add_group_control',
                    'type' => Controls::URL,
                    'default' => '',
                    'placeholder' => 'https://www.yoururl.com',
                ],
            ],
            'title_field' => 'sa_icon_nav_title',
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Branding', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_icon_nav_branding', $this->style, [
            'label' => __('Show Branding', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_branding_image', $this->style, [
            'type' => Controls::MEDIA,
            'selector' => [
                '{{WRAPPER}} .oa_ac_style_1 .oxi-addons-ac-H .heading-data' => ''
            ],
            'condition' => [
                'sa_icon_nav_branding' => 'yes',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_branding_padding', $this->style, [
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_branding' => 'Padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Additional Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_icon_nav_menu_text', $this->style, [
            'label' => __('Menu Text', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'options' => [
                'show_as_tooltip' => 'Show Tooltip',
                'show_under_icon' => 'Show Text',
            ],
            'default' => 'show_as_tooltip',
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_menu_width', $this->style, [
            'label' => __('Icon Nav Width', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1' => 'width: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_icon_nav_icon_nav_position', $this->style, [
            'label' => __('Icon Nav Position', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'options' => [
                'sa_icon_nav_icon_left' => 'Left',
                'sa_icon_nav_icon_right' => 'Right',
            ],
            'default' => 'sa_icon_nav_icon_right',
                ]
        );

        $this->add_responsive_control(
                'sa_icon_nav_menu_icon_gap', $this->style, [
            'label' => __('Icon Gap', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li' => 'margin-bottom: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'style-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Nav', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_icon_nav_bar_bg', $this->style, [
            'label' => esc_html__('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_border', $this->style, [
            'type' => Controls::BORDER,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1' => 'border-radius: {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
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
                'sa_icon_nav_icon_backgroudn_color', $this->style, [
            'label' => esc_html__('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_icon_nav_icon_color', $this->style, [
            'label' => esc_html__('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li .oxi-icons' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_icon_nav_icon_hover_backgroudn_color', $this->style, [
            'label' => esc_html__('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li:hover' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_icon_nav_icon_hover_color', $this->style, [
            'label' => esc_html__('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li .oxi-icons:hover' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_icon_nav_icon_active_backgroudn_color', $this->style, [
            'label' => esc_html__('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li:active' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_icon_nav_icon_active_color', $this->style, [
            'label' => esc_html__('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li .oxi-icons:active' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_icon_nav_bar_icon_size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'separator' => true,
            'type' => Controls::SLIDER,
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_icon_border', $this->style, [
            'type' => Controls::BORDER,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_icon_boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} ' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_icon_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_icon_padding', $this->style, [
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu li' => 'Padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_icon_margin', $this->style, [
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_menu' => 'Padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Menu Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_text_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_text' => '',
            ]
                ]
        );
        $this->add_control(
                'sa_icon_nav_bar_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_text' => 'color: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_menu_text_space', $this->style, [
            'label' => __('Space', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_text' => 'margin-top: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Branding', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_icon_nav_bar_brand_background', $this->style, [
            'label' => __('Bacnground', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_logo' => 'background: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_brand_border', $this->style, [
            'type' => Controls::BORDER,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_logo' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_icon_nav_bar_brand_boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_logo' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_brand_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_logo, {{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_logo img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_icon_nav_bar_brand_padding', $this->style, [
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_icon_nav_style_1 .sa_icon_nav_logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Tooltip', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition'     => [
                    'sa_icon_nav_menu_text' => 'show_as_tooltip'
                ],
            ]
        );
        $this->add_control(
                'sa_icon_nav_icon_tooltip_bg', $this->style, [
            'label' => esc_html__('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'loader' => TRUE,
            'selector' => [
                '.tooltipster-sidetip.tooltipster-noir.tooltipster-noir-customized .tooltipster-box ' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_icon_nav_icon_tooltip_color', $this->style, [
            'label' => esc_html__('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .tooltipster-sidetip.tooltipster-noir.tooltipster-noir-customized .tooltipster-content' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_icon_nav_icon_tooltip_br', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                ]
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
