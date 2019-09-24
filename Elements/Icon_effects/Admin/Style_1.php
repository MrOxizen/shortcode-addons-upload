<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Icon_effects\Admin;

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

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                ]
            ]
        );
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
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_icon_effects_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_icon_effects_data',
            $this->style,
            [
                'label' => __('Icon Data', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_icon_effects_icon' => [
                        'label' => esc_html__('Icon', SA_ELEMENTOR_TEXTDOMAIN),
                        'type' => Controls::ICON,
                        'default' => 'fab fa-linkedin-in',
                    ],
                    'sa_ico  lor' => [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                    ],
                    'sa_icon_effects_colort' => [
                        'label' => __('TEXT', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                    ],
                    'sa_icon_effects_colorts' => [
                        'label' => __('TEXTAREA', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                    ],
                    'sa_icon_effects_colortsWYSIWYG' => [
                        'label' => __('WYSIWYG', SHORTCODE_ADDOONS),
                        'type' => Controls::WYSIWYG,
                    ],
                    'sa_icon_effects_color-NUMBER' => [
                        'label' => __('NUMBER', SHORTCODE_ADDOONS),
                        'type' => Controls::NUMBER,
                    ],
                    'sa_icon_effects_color-SLIDER' => [
                        'label' => __('SLIDER', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
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
                    ],
                    'sa_icon_effects_color-CHOOSE' => [
                        'label' => __('CHOOSE', SHORTCODE_ADDOONS),
                        'type' => Controls::CHOOSE,
                        'operator' => Controls::OPERATOR_ICON,
                        'default' => 'center',
                        'options' => [
                            'left' => [
                                'title' => __('H1', 'plugin-domain'),
                                'icon' => 'fas fa-sort-amount-up',
                            ],
                            'center' => [
                                'title' => __('H2', 'plugin-domain'),
                                'icon' => 'fas fa-exchange-alt',
                            ],
                            'right' => [
                                'title' => __('H4', 'plugin-domain'),
                                'icon' => 'fas fa-sort-amount-down',
                            ],
                        ],
                    ],
                    'sa_icon_effects_color-BOXSHADOW' => [
                        'label' => __('BOXSHADOW', SHORTCODE_ADDOONS),
                        'type' => Controls::BOXSHADOW,
                        'controller' => 'add_group_control'
                    ],
                    'sa_icon_effects_color-TEXTSHADOW' => [
                        'label' => __('TEXTSHADOW', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTSHADOW,
                        'controller' => 'add_group_control'
                    ],
                    'sa_icon_effects_color-BORDER' => [
                        'label' => __('BORDER', SHORTCODE_ADDOONS),
                        'type' => Controls::BORDER,
                        'controller' => 'add_group_control'
                    ],
                    'sa_icon_effects_color-MEDIA' => [
                        'label' => __('MEDIA', SHORTCODE_ADDOONS),
                        'type' => Controls::MEDIA,
                        'controller' => 'add_group_control'
                    ],
                    'sa_icon_effects_color-BACKGROUND' => [
                        'label' => __('BACKGROUND', SHORTCODE_ADDOONS),
                        'type' => Controls::BACKGROUND,
                        'controller' => 'add_group_control'
                    ],
                    'sa_icon_effects_color-TYPOGRAPHY' => [
                        'label' => __('TYPOGRAPHY', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'controller' => 'add_group_control'
                    ],
                    // 'sa_icon_effects_bg' => [
                    //     'label' => __('Background', SHORTCODE_ADDOONS),
                    //     'type' => Controls::COLOR,
                    //     'oparetor' => 'RGB',
                    // ],
                    // 'sa_icon_effects_color_hover' => [
                    //     'label' => __('Hover Color', SHORTCODE_ADDOONS),
                    //     'type' => Controls::COLOR,
                    // ],
                    // 'sa_icon_effects_bg_hover' => [
                    //     'label' => __('Hover Background', SHORTCODE_ADDOONS),
                    //     'type' => Controls::COLOR,
                    //     'oparetor' => 'RGB',
                    // ],
                    'sa_icon_effects_type' => [
                        'label' => __('Icon Effects Type', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'default' => 'sa_effects_inside',
                        'options' => [
                            'sa_effects_inside' => __('Inside', SHORTCODE_ADDOONS),
                            'sa_effects_outside' => __('Outside', SHORTCODE_ADDOONS),

                        ],
                    ],
                    'sa_icon_effects_url_open' => [
                        'label' => esc_html__('Link Enable', SA_ELEMENTOR_TEXTDOMAIN),
                        'type' => Controls::SWITCHER,
                        'default' => '',
                        'loader' => TRUE,
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ],

                    'sa_icon_effects_url' => [
                        'label' => esc_html__('Url', SA_ELEMENTOR_TEXTDOMAIN),
                        'type' => Controls::URL,
                        'controller' => 'add_group_control'
                    ],
                ],
                'title_field' => 'sa_icon_effects_icon',
            ]
        );

        $this->add_responsive_control(
            'sa_icon_effects_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                    '{{WRAPPER}} .sa_addons_icon_effectses_container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_icon_effects_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_icon_effects_f_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
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
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_boxes_style_1 .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_effects_w_hei',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '100',
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
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_effects_style_1' => 'max-width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_icon_effects_style_1 .oxi-icons' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sa_icon_effects_border_w',
            $this->style,
            [
                'label' => __('Border Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '5',
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
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                // 'selector' => [
                //     '{{WRAPPER}} .sa_addons_icon_effects_style_1' => 'max-width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};'
                // ],
            ]
        );

        $this->add_responsive_control(
            'sa_icon_effects_border_r',
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
                    '{{WRAPPER}} .sa_addons_icon_effects_style_1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_effects_w_hei',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '5',
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
                        'max' => 5,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_icon_effects_style_1:after' => 'padding: {{SIZE}}{{UNIT}}; top: -{{SIZE}}{{UNIT}}; left: -{{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_icon_effects_padding',
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
                    '{{WRAPPER}} .sa_addons_icon_effects_style_1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
    // public function modal_opener()
    // {
    //     $this->add_substitute_control('', [], [
    //         'type' => Controls::MODALOPENER,
    //         'title' => __('Add New Icon Box', SHORTCODE_ADDOONS),
    //         'sub-title' => __('Open Icon Box Form', SHORTCODE_ADDOONS),
    //         'showing' => TRUE,
    //     ]);
    // }

    // public function modal_form_data()
    // {
    //     echo '<div class="modal-header">                    
    //                 <h4 class="modal-title">Icon Boxes Form</h4>
    //                 <button type="button" class="close" data-dismiss="modal">&times;</button>
    //             </div>
    //             <div class="modal-body">';

    //     $this->add_control(
    //         'sa_icon_effects_icon',
    //         $this->style,
    //         [
    //             'label' => __('Icon', SHORTCODE_ADDOONS),
    //             'type' => Controls::ICON,
    //             'default' => 'fas fa-apple-alt',
    //         ]
    //     );

    //     $this->add_control(
    //         'sa_icon_effects_h_text',
    //         $this->style,
    //         [
    //             'label' => __('Heading', SHORTCODE_ADDOONS),
    //             'type' => Controls::TEXT,
    //             'default' => 'Lorem Ipsum is simply dummy text',
    //             'placeholder' => 'Your Heading Here',
    //         ]
    //     );

    //     $this->add_control(
    //         'sa_icon_effects_content',
    //         $this->style,
    //         [
    //             'label' => __('Content', SHORTCODE_ADDOONS),
    //             'type' => Controls::TEXTAREA,
    //             'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.',
    //             'placeholder' => 'Your Content Here',
    //         ]
    //     );
    //     $this->add_control(
    //         'sa_icon_effects_url_open',
    //         $this->style,
    //         [
    //             'label' => __('Link Active', SHORTCODE_ADDOONS),
    //             'type' => Controls::SWITCHER,
    //             'default' => '',
    //             'label_on' => __('Yes', SHORTCODE_ADDOONS),
    //             'label_off' => __('No', SHORTCODE_ADDOONS),
    //             'return_value' => 'link_show',
    //         ]
    //     );
    //     $this->add_group_control(
    //         'sa_icon_effects_url',
    //         $this->style,
    //         [
    //             'type' => Controls::URL,
    //             'loader' => TRUE,
    //             'condition' => [
    //                 'sa_icon_effects_url_open' => 'link_show',
    //             ],
    //         ]
    //     );
    //     echo '</div>';
    // }
}
