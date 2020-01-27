<?php

namespace SHORTCODE_ADDONS_UPLOAD\Light_box\Admin;

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
                'label' => esc_html__('Feature Content', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_light_box_clickable',
            $this->style,
            [
                'label' => __('Show Clickable Box', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'image',
                'loader' => TRUE,
                'options' => [
                    'image' => __('Image', SHORTCODE_ADDOONS),
                    'button' => __('Button', SHORTCODE_ADDOONS),
                    'icon' => __('Icon', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_separator',
            $this->style,
            [
                'label' => __(' ', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true
            ]
        );
        $this->add_repeater_control(
            'sa_light_box_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'title_field' => 'sa_light_box_title',
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_light_box_select_type' => [
                        'type' => Controls::SELECT,
                        'default' => 'image',
                        'loader' => TRUE,
                        'options' => [
                            'image' => __('Image', SHORTCODE_ADDOONS),
                            'video' => __('Video', SHORTCODE_ADDOONS),
                        ],
                    ],
                    'sa_light_box_image' => [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/animal-bug-butterfly-53957.jpg',
                        ],
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_light_box_select_type' => 'image',
                        ],
                    ],
                    'sa_light_box_video' => [
                        'label' => esc_html__('Youtube Link', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'placeholder' => 'https://www.youtube.com/watch?v=sEWx6H8gZH8',
                        'default' => 'https://www.youtube.com/watch?v=sEWx6H8gZH8',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_light_box_select_type' => 'video',
                        ],
                    ],
                    'sa_light_box_separator' => [
                        'label' => esc_html__('', SHORTCODE_ADDOONS),
                        'type' => Controls::SEPARATOR,
                        Controls::SEPARATOR => TRUE,
                    ],
                    'sa_light_box_button_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-accusoft',
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_light_box_clickable' => 'icon',
                        ],
                    ],
                    'sa_light_box_button_text' => [
                        'label' => esc_html__('Button Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Show Popup', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__light_box_style_1_{{KEY}} .oxi_addons__button' => '',
                        ],
                        'conditional' => Controls::OUTSIDE,
                        'condition' => [
                            'sa_light_box_clickable' => 'button',
                        ],
                    ],
                    'sa_light_box_title' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('What is Lorem Ipsum? ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__light_box_style_1_{{KEY}} .oxi_addons__heading_light_box' => '',
                        ],
                    ],
                    'sa_light_box_desc' => [
                        'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrytandard ', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__light_box_style_1_{{KEY}} .oxi_addons__details_light_box' => '',
                        ],
                    ],
                ],
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' =>   FALSE,
            ]
        );

        $this->add_group_control(
            'sa_light_box_column',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'default' => 'oxi-bt-col-lg-1',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1' => '',
                ],
            ]
        );

        $this->add_group_control(
            'sa_light_box_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1  .oxi_addons__light_box_parent' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_padding',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__light_box_parent' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_margin',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Image box Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_light_box_clickable' => 'image',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 2,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1  .oxi_addons__image_main' => 'width:{{SIZE}}{{UNIT}} !important; max-width: 100%;',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => 70,
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
                        'step' => .1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 2,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1  .oxi_addons__image_main::after' => 'padding-bottom:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_image_width_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__image_main' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_image_width_border_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__image_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__image_main::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_image_width_box_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__image_main' => ''
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_light_box_clickable' => 'icon',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_icon_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '30',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1  .oxi_addons__icon .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_icon_width_height',
            $this->style,
            [
                'label' => __('Height & Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '80',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_icon_color',
            $this->style,
            [
                'label' => __('Icon Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon .oxi-icons' => 'color: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_icon_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_icon_align',
            $this->style,
            [
                'label' => __('Icon Alignment', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__light_box_parent' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_icon_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_icon_border_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
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
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon::after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_btn_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon' => ''
                ],
            ]
        );


        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Light Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_light_box_bg_light_box',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '#000',
                'selector' => [
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .lg' => 'background:{{VALUE}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Details Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_light_box_bg_heading_details',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.64)',
                'selector' => [
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .lg-sub-html' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'heading' => esc_html__('Heading', SHORTCODE_ADDOONS),
                    'description' => esc_html__('Description', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_light_box_tag',
            $this->style,
            [
                'label' => __('Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'h3',
                'loader' => TRUE,
                'options' => [
                    'h1' => __('H1', SHORTCODE_ADDOONS),
                    'h2' => __('H2', SHORTCODE_ADDOONS),
                    'h3' => __('H3', SHORTCODE_ADDOONS),
                    'h4' => __('H4', SHORTCODE_ADDOONS),
                    'h5' => __('H5', SHORTCODE_ADDOONS),
                    'h6' => __('H6', SHORTCODE_ADDOONS),
                    'div' => __('DIV', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_heading_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .oxi_addons__heading_light_box' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_heading_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .oxi_addons__heading_light_box' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_heading_padding',
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
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .oxi_addons__heading_light_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_light_box_desc_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .oxi_addons__details_light_box' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_desc_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .oxi_addons__details_light_box' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_desc_padding',
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
                    '.oxi_____disabled, .oxi_addons_light_box_overlay_' . $this->oxiid . ' .oxi_addons__details_light_box_light_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_light_box_clickable' => 'button',
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_btn_position',
            $this->style,
            [
                'label' => __('Button Position', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'default' => 'center',
                'loader' => TRUE,
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button_main' => 'text-align:{{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_btn_text_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => ''
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_light_box_btn_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => 'color:{{VALUE}};',
                    ],
            ]
        );
        $this->add_control(
            'sa_light_box_btn_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(17, 106, 177, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => 'background-color:{{VALUE}};'
                ],
            ]
        );


        $this->add_group_control(
            'sa_light_box_btn_br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_btn_br_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_light_box_btn_box_shadow_button',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => ''
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_light_box_btn_hover_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button:hover' => 'color:{{VALUE}};',
                    ],
            ]
        );
        $this->add_control(
            'sa_light_box_btn_hover_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(17, 106, 177, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button:hover' => 'background-color:{{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_light_box_btn_h-br',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button:hover' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_btn_hover-br-radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            'sa_light_box_btn_h_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button:hover' => '',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_light_box_btn_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_light_box_btn_margin',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__button_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Overlay Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_light_box_clickable' => 'image',
                ]
            ]
        );
        $this->add_control(
            'sa_light_box_bg_overlay_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-search',
                'placeholder' => 'example:- fas fa-search',
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_icon_size_overlay_icon',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '30',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__overlay .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_bg_overlay_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.64)',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__image_main:hover::after' => 'background:{{VALUE}};',
                  ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Overlay Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_light_box_clickable' => 'icon'
                ]
            ]
        );
        $this->add_control(
            'sa_light_box_bg_overlay_icon_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-search',
                'placeholder' => 'example:- fas fa-search',
            ]
        );

        $this->add_responsive_control(
            'sa_light_box_icon_size_overlay_icon_icon',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '30',
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
                    '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__overlay .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
            'sa_light_box_bg_overlay_bg_icon',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(59, 59, 59, 0.64)',
                'selector' => [
                     '{{WRAPPER}} .oxi_addons__light_box_style_1 .oxi_addons__icon:hover::after' => 'background:{{VALUE}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
