<?php

namespace SHORTCODE_ADDONS_UPLOAD\Carousel\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle
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
        $this->add_responsive_control(
            'sa_carousel_col',
            $this->style,
            [
                'label' => __('Item Per Rows', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'sa_carousel_show_1',
                'options' => [
                    'sa_carousel_show_1' => __('Single Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_2' => __('2 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_3' => __('3 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_4' => __('4 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_5' => __('5 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_6' => __('6 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_7' => __('7 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_8' => __('8 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_9' => __('9 Item', SHORTCODE_ADDOONS),
                    'sa_carousel_show_10' => __('10 Item', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_repeater_control(
            'sa_carousel_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_carousel_title' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Item 01',
                    ],
                    'sa_carousel_type' => [
                        'label' => __('Carousel Type', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'loader' => TRUE,
                        'default' => 'sa_carousel_shortcode',
                        'options' => [
                            'sa_carousel_shortcode' => __('Shortcode', SHORTCODE_ADDOONS),
                            'sa_carousel_img' => __('Image', SHORTCODE_ADDOONS),
                            'sa_carousel_text' => __('Text', SHORTCODE_ADDOONS),
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_unique_{{KEY}}' => '',
                        ],
                    ],
                    'sa_carousel_item_shortcode' => [
                        'label' => esc_html__('Shortcode', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'placeholder' => 'Enter Your Shortcode Here',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_carousel_type' => 'sa_carousel_shortcode'
                        ]
                    ],
                    'sa_carousel_item_img' => [
                        'label' => esc_html__('Image', SHORTCODE_ADDOONS),
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/cycling-bike-trail-sport-161172-1-1.jpeg',
                        ],
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_carousel_type' => 'sa_carousel_img'
                        ]
                    ],
                    'sa_carousel_item_text' => [
                        'label' => esc_html__('Text', SHORTCODE_ADDOONS),
                        'type' => Controls::WYSIWYG,
                        'placeholder' => 'Enter Your Some Text Here',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_carousel_type' => 'sa_carousel_text'
                        ]
                    ],
                ],
                'title_field' => 'sa_carousel_title',
                'button' => 'Add New Item',
            ]
        );
        $this->add_control(
            'sa_carousel_text_style_on_off',
            $this->style,
            [
                'label' => __('Text Style', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'description' => __('Please Only Switch On When Carousel Type Text', SHORTCODE_ADDOONS),
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'text_style',
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3' => 'padding: 0{{UNIT}} {{RIGHT}}{{UNIT}} 0{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-stage-outer' => 'padding: {{TOP}}{{UNIT}} 0{{UNIT}} {{BOTTOM}}{{UNIT}} 0{{UNIT}};'
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
        $this->add_control(
            'sa_carousel_a_p_on_off',
            $this->style,
            [
                'label' => __('Auto Play', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_a_p_dur',
            $this->style,
            [
                'label' => __('Auto Play Duration', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'loader' => TRUE,
                'default' => '1',
                'condition' => [
                    'sa_carousel_a_p_on_off' => 'true'
                ]
            ]
        );
        $this->add_control(
            'sa_carousel_cen_mod_on_off',
            $this->style,
            [
                'label' => __('Center Mode', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_pau_hov_on_off',
            $this->style,
            [
                'label' => __('Pause in Hover', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_infin_loop_on_off',
            $this->style,
            [
                'label' => __('Infinite Loop', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_mar_on_off',
            $this->style,
            [
                'label' => __('Marge', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_stage_p',
            $this->style,
            [
                'label' => __('Stage padding', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => '0',
                'loader' => TRUE,
            ]
        );

        $this->add_control(
            'sa_carousel_au_hei_on_off',
            $this->style,
            [
                'label' => __('Auto Height', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_posi',
            $this->style,
            [
                'label' => __('Content Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'flex-start',
                'options' => [
                    'flex-start' => __('Top', SHORTCODE_ADDOONS),
                    'center' => __('Center', SHORTCODE_ADDOONS),
                    'flex-end' => __('Bottom', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_carousel_au_hei_on_off' => 'false'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-stage' => 'align-items: {{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_mou_dragg_on_off',
            $this->style,
            [
                'label' => __('Mouse Draggable', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_rig_left_on_off',
            $this->style,
            [
                'label' => __('Right to left', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_on_off',
            $this->style,
            [
                'label' => __('Nav Icon', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'false',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_dot_on_off',
            $this->style,
            [
                'label' => __('Pagination Enable', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'true',
                'options' => [
                    'true' => [
                        'title' => __('True', SHORTCODE_ADDOONS),
                    ],
                    'false' => [
                        'title' => __('False', SHORTCODE_ADDOONS),
                    ]
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_anim_in',
            $this->style,
            [
                'label' => __('Animation In', SHORTCODE_ADDOONS),
                'type' => Controls::ANIMATION,
                'loader' => TRUE,
            ]
        );
        $this->add_control(
            'sa_carousel_anim_out',
            $this->style,
            [
                'label' => __('Animation Out', SHORTCODE_ADDOONS),
                'type' => Controls::ANIMATION,
                'loader' => TRUE,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Text Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_carousel_text_style_on_off' => 'text_style'
                ]
            ]
        );
        $this->add_group_control(
            'sa_tabs_headding_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .sa_addons_carousel_item_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_text_c',
            [
                'label' => esc_html__('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .sa_addons_carousel_item_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_text_padding',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .sa_addons_carousel_item_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Nav icon Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_carousel_nav_on_off' => 'true'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Left Icon', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Right Icon', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_carousel_nav_left',
            $this->style,
            [
                'label' => __('Nav Left Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-angle-left',
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_carousel_nav_right',
            $this->style,
            [
                'label' => __('Nav Right Icon', SHORTCODE_ADDOONS),
                'type' => Controls::ICON,
                'default' => 'fas fa-angle-right',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_carousel_nav_S',
            $this->style,
            [
                'label' => __('Nav Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_style',
            $this->style,
            [
                'label' => __('Nav Style', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'sa_carousel_nav_style_normal',
                'options' => [
                    'sa_carousel_nav_style_normal' => __('Style 01', SHORTCODE_ADDOONS),
                    'sa_carousel_nav_style_inline' => __('Style 02', SHORTCODE_ADDOONS),
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_style_posi',
            $this->style,
            [
                'label' => __('Nav Position', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'sa_carousel_nav_top_left',
                'options' => [
                    'sa_carousel_nav_top_left' => __('Top Left', SHORTCODE_ADDOONS),
                    'sa_carousel_nav_top_midd' => __('Top Middle', SHORTCODE_ADDOONS),
                    'sa_carousel_nav_top_right' => __('Top Right', SHORTCODE_ADDOONS),
                    'sa_carousel_nav_bottom_left' => __('Bottom Left', SHORTCODE_ADDOONS),
                    'sa_carousel_nav_bottom_midd' => __('Bottom Middle', SHORTCODE_ADDOONS),
                    'sa_carousel_nav_bottom_right' => __('Bottom Right', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_carousel_nav_style' => 'sa_carousel_nav_style_inline'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_posi_x',
            $this->style,
            [
                'label' => __('Position X', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_style_normal .oxi-owl-nav .oxi-owl-prev' => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_style_normal .oxi-owl-nav .oxi-owl-next' => 'margin-right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_top_left.sa_carousel_nav_style_inline .oxi-owl-nav' => 'left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_top_right.sa_carousel_nav_style_inline .oxi-owl-nav' => 'right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_bottom_left.sa_carousel_nav_style_inline .oxi-owl-nav' => 'left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_bottom_right.sa_carousel_nav_style_inline .oxi-owl-nav' => 'right: {{SIZE}}{{UNIT}};',

                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_posi_y',
            $this->style,
            [
                'label' => __('Position Y', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_style_normal .oxi-owl-nav' => 'top: {{SIZE}}%; transform:translateY(-{{SIZE}}%)',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_top_left.sa_carousel_nav_style_inline .oxi-owl-nav' => 'top: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_top_midd.sa_carousel_nav_style_inline .oxi-owl-nav' => 'top: {{SIZE}}{{UNIT}}; left: 50%; transform:translateX(-50%);',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_top_right.sa_carousel_nav_style_inline .oxi-owl-nav' => 'top: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_bottom_left.sa_carousel_nav_style_inline .oxi-owl-nav' => 'bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_bottom_midd.sa_carousel_nav_style_inline .oxi-owl-nav' => 'bottom: {{SIZE}}{{UNIT}}; left: 50%; transform:translateX(-50%);',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_nav_bottom_right.sa_carousel_nav_style_inline .oxi-owl-nav' => 'bottom: {{SIZE}}{{UNIT}};',
                ],

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
            'sa_carousel_nav_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev .oxi-icons' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(108, 194, 50, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_nav_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev' => '',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_nav_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev' => '',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_carousel_nav_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev:hover .oxi-icons' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next:hover .oxi-icons' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_nav_bg_h',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(36, 112, 4, 0.99)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev:hover' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_nav_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev:hover' => '',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_nav_shad_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev:hover' => '',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_carousel_nav_b_r',
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_nav_padding',
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_nav_margin',
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-prev' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-nav .oxi-owl-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Pagination Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_carousel_dot_on_off' => 'true'
                ]
            ]
        );
        $this->add_control(
            'sa_carousel_dot_view',
            $this->style,
            [
                'label' => __('Viewing Type', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => '',
                'options' => [
                    '' => [
                        'title' => __('Always', SHORTCODE_ADDOONS),
                    ],
                    'sa_dot_show_on_hover' => [
                        'title' => __('On Hover', SHORTCODE_ADDOONS),
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_carousel_dot_posi',
            $this->style,
            [
                'label' => __('Pagination Style', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'sa_carousel_dot_bottom_midd',
                'options' => [
                    'sa_carousel_dot_top_left' => __('Top Left', SHORTCODE_ADDOONS),
                    'sa_carousel_dot_top_midd' => __('Top Middle', SHORTCODE_ADDOONS),
                    'sa_carousel_dot_top_right' => __('Top Right', SHORTCODE_ADDOONS),
                    'sa_carousel_dot_bottom_left' => __('Bottom Left', SHORTCODE_ADDOONS),
                    'sa_carousel_dot_bottom_midd' => __('Bottom Middle', SHORTCODE_ADDOONS),
                    'sa_carousel_dot_bottom_right' => __('Bottom Right', SHORTCODE_ADDOONS),
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_dot_w',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_dot_h',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'sa_carousel_dot_posi_x',
            $this->style,
            [
                'label' => __('Position X', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '10',
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_top_left .oxi-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_top_right .oxi-owl-dots' => 'right: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_bottom_left .oxi-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_bottom_right .oxi-owl-dots' => 'right: {{SIZE}}{{UNIT}};',

                ],
            ]
        );
        $this->add_control(
            'sa_carousel_dot_posi_y',
            $this->style,
            [
                'label' => __('Position Y', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '10',
                ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_top_left .oxi-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_top_midd .oxi-owl-dots' => 'top: {{SIZE}}{{UNIT}}; left: 50%; transform:translateX(-50%);',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_top_right .oxi-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_bottom_left .oxi-owl-dots' => 'bottom: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_bottom_midd .oxi-owl-dots' => 'bottom: {{SIZE}}{{UNIT}}; left: 50%; transform:translateX(-50%);',
                    '{{WRAPPER}} .sa_addons_carousel_style_3.sa_carousel_dot_bottom_right .oxi-owl-dots' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_carousel_dot_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(194,194,194,1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_dot_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_carousel_dot_bg_h',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(49, 194, 148, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot:hover span' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_dot_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot:hover span' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_dot_scale_h',
            $this->style,
            [
                'label' => __('Scale', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '1',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.01,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot:hover span' => 'transform: scale({{SIZE}}); -webkit-transform: scale({{SIZE}}); -moz-transform: scale({{SIZE}}); -ms-transform: scale({{SIZE}}); -o-transform: scale({{SIZE}});',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_carousel_dot_bg_a',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(49, 194, 148, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot.active span' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_carousel_dot_border_a',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot.active span' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_dot_scale_a',
            $this->style,
            [
                'label' => __('Scale', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '1.05',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.01,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot.active span' => 'transform: scale({{SIZE}}); -webkit-transform: scale({{SIZE}}); -moz-transform: scale({{SIZE}}); -ms-transform: scale({{SIZE}}); -o-transform: scale({{SIZE}});',
                ],

            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_carousel_dot_b_r',
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_dot_padding',
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_carousel_dot_margin',
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
                    '{{WRAPPER}} .sa_addons_carousel_style_3 .oxi-owl-dot span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
