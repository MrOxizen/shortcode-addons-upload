<?php

namespace SHORTCODE_ADDONS_UPLOAD\Logo_showcase\Admin;

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

class Style_5 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'tooltip-settings' => esc_html__('Tooltip Settings', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_logo_showcase_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
            ],
                ]
        );
        $this->add_repeater_control(
                'sa_logo_showcase_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_logo_showcase_tooltip' => [
                    'label' => esc_html__('Tooltip Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Git',
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_logo_showcase_style_5.sa_addons_logo_showcase_style_5_{{KEY}} .sa_addons_logo_showcase_tooltip' => ''
                    ],
                ],
                'sa_logo_showcase_img' => [
                    'type' => Controls::MEDIA,
                    'controller' => 'add_group_control',
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/logo-5.png',
                    ],
                ],
                'sa_logo_showcase_url_open' => [
                    'label' => esc_html__('Link Enable', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '',
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'link_show',
                ],
                'sa_logo_showcase_url' => [
                    'label' => esc_html__('Url', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'sa_logo_showcase_url_open' => 'link_show'
                    ]
                ],
            ],
            'title_field' => 'sa_logo_showcase_tooltip',
            'button' => 'Add New Logo',
                ]
        );
        $this->add_responsive_control(
                'sa_logo_showcase_logo_w', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
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
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5' => 'max-width: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_logo_showcase_logo_h', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5:after' => 'padding-bottom: {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_logo_showcase_margin', $this->style, [
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
                '{{WRAPPER}} .sa_addons_logo_showcase_container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_logo_showcase_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Logo Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
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
                'sa_logo_showcase_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_logo_showcase_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5' => ''
            ],
                ]
        );
         $this->add_responsive_control(
                'sa_logo_showcase_border_r', $this->style, [
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
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_logo_showcase_boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5' => ''
            ],
                ]
        );


        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_logo_showcase_bg_hover', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5:hover' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_logo_showcase_border_hover', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5:hover' => ''
            ],
                ]
        );
         $this->add_responsive_control(
                'sa_logo_showcase_border_r_hover', $this->style, [
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
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_logo_showcase_boxshadow_hover', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5:hover' => ''
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

       
        $this->add_responsive_control(
                'sa_logo_showcase_logo_p', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'tooltip-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Tooltip Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_logo_showcase_tooltip_posi', $this->style, [
            'label' => __('Tooltip Position', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'default' => 'sa_tooltip_top',
            'options' => [
                'sa_tooltip_top' => __('Top', SHORTCODE_ADDOONS),
                'sa_tooltip_bottom' => __('Bottom', SHORTCODE_ADDOONS),
                'sa_tooltip_left' => __('Left', SHORTCODE_ADDOONS),
                'sa_tooltip_right' => __('Right', SHORTCODE_ADDOONS),
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_logo_showcase_tooltip_p', $this->style, [
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
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_logo_showcase_tooltip_m', $this->style, [
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
                    'min' => -10,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Tooltip Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_logo_showcase_tooltip_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_logo_showcase_tooltip_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip' => 'color: {{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_logo_showcase_tooltip_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_logo_showcase_tooltip_b_r', $this->style, [
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
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_logo_showcase_tooltip_arr_size', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5 .sa_addons_logo_showcase_tooltip:after ' => 'border-width: {{SIZE}}px;'
            ],
                ]
        );
        $this->add_control(
                'sa_logo_showcase_tooltip_arr_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#3b4ee3',
            'selector' => [
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5.sa_tooltip_top .sa_addons_logo_showcase_tooltip:after' => 'border-color: {{VALUE}} transparent transparent transparent;',
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5.sa_tooltip_bottom .sa_addons_logo_showcase_tooltip:after' => 'border-color: transparent transparent {{VALUE}} transparent;',
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5.sa_tooltip_left .sa_addons_logo_showcase_tooltip:after' => 'border-color: transparent transparent transparent {{VALUE}};',
                '{{WRAPPER}} .sa_addons_logo_showcase_style_5.sa_tooltip_right .sa_addons_logo_showcase_tooltip:after' => 'border-color: transparent {{VALUE}} transparent transparent;',
            ],
                ]
        );



        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
