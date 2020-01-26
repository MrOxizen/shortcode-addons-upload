<?php

namespace SHORTCODE_ADDONS_UPLOAD\Preview_window\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_1 extends AdminStyle
{

    public function register_controls()
    {
        $id = $this->oxiid;
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
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
                'label' => esc_html__('Trigger Image Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_preview_window_trigger_image',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_trigger_alt',
            $this->style,
            [
                'label' => __('Alt', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => __('Preview Window', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_preview_window_trigger_caption',
            $this->style,
            [
                'label' => __('Caption', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => __('Preview Window', SHORTCODE_ADDOONS),
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_trigger_link_switcher',
            $this->style,
            [
                'label' => __('Link', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_preview_window_trigger_link_selection',
            $this->style,
            [
                'label' => __('Link Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'url' => __('URL', SHORTCODE_ADDOONS),
                    'link' => __('Existing Page', SHORTCODE_ADDOONS),
                ],
                'default' => 'url',
                'condition' => [
                    'sa_preview_window_trigger_link_switcher' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_preview_window_image_link',
            $this->style,
            [
                'type' => Controls::URL,
                'condition' => [
                    'sa_preview_window_trigger_link_switcher' => 'yes',
                    'sa_preview_window_trigger_link_selection' => 'url',
                ]
            ]
        );
        $this->add_control(
            'sa_preview_window_image_existing_link',
            $this->style,
            [
                'label' => __('Link Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => $this->sa_get_all_post(),
                'condition' => [
                    'sa_preview_window_trigger_link_switcher' => 'yes',
                    'sa_preview_window_trigger_link_selection' => 'link',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_image_align',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trig_img_wrap' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Preview Window Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_preview_window_tootle_note',
            $this->style,
            [
                'label' => __('Note', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'description' => 'Some fields work after saving and reloading',
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_type',
            $this->style,
            [
                'label'         => __('Content Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'custom',
                'options' => [
                    'custom' => 'Custom',
                    'shortcode' => 'Shortcode',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_shortcode',
            $this->style,
            [
                'label' => __('Shortcode', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'placeholder' => __('Enter Your Shortcode', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_preview_window_tooltip_type' => 'shortcode',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__image__disable, .sa_prev_img_tooltip_wrap_' . $id . '' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_img_switcher',
            $this->style,
            [
                'label' => __('Image', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_image',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                ],
                'condition' => [
                    'sa_preview_window_tooltip_img_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ]
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_alt',
            $this->style,
            [
                'label' => __('Alt', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => __('Preview Window', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_preview_window_tooltip_img_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_img_align',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'condition' => [
                    'sa_preview_window_tooltip_img_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__image__disable, .sa_prev_img_tooltip_wrap_' . $id . '' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_title_switcher',
            $this->style,
            [
                'label'         => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_title',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => __('Preview Image', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_preview_window_tooltip_title_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__image__disable, .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_title_heading',
            $this->style,
            [
                'label'         => __('Title Heading', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'h3',
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                    'h5' => 'H5',
                    'h6' => 'H6',
                ],
                'condition' => [
                    'sa_preview_window_tooltip_title_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_title_align',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'condition' => [
                    'sa_preview_window_tooltip_title_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__image__disable, .sa_prev_img_tooltip_title_wrap_' . $id . '' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_desc_switcher',
            $this->style,
            [
                'label'         => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
                'condition' => [
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_desc',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit', SHORTCODE_ADDOONS),
                'condition' => [
                    'sa_preview_window_tooltip_desc_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__image__disable, .sa_prev_img_tooltip_desc_wrap_' . $id . '' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_desc_align',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'center',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Top', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'condition' => [
                    'sa_preview_window_tooltip_desc_switcher' => 'yes',
                    'sa_preview_window_tooltip_type' => 'custom',
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__image__disable, .sa_prev_img_tooltip_desc_wrap_' . $id . '' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Advanced Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_preview_window_note',
            $this->style,
            [
                'label' => __('Note', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
                'description' => 'Some fields work after saving and reloading',
            ]
        );
        $this->add_control(
            'sa_preview_window_image_interactive',
            $this->style,
            [
                'label' => __('Interactive', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
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
            'sa_preview_window_image_responsive',
            $this->style,
            [
                'label' => __('Responsive', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
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
            'sa_preview_window_image_anim',
            $this->style,
            [
                'label' => __('Animation', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'options' => [
                    'fade' => __('Fade', SHORTCODE_ADDOONS),
                    'grow' => __('Grow', SHORTCODE_ADDOONS),
                    'swing' => __('Swing', SHORTCODE_ADDOONS),
                    'slide' => __('Slide', SHORTCODE_ADDOONS),
                    'fall' => __('Fall', SHORTCODE_ADDOONS),
                ],
                'default' => 'fade',
            ]
        );
        $this->add_control(
            'sa_preview_window_image_anim_dur',
            $this->style,
            [
                'label' => __('Animation Duration', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 350,
            ]
        );
        $this->add_control(
            'sa_preview_window_image_delay',
            $this->style,
            [
                'label' => __('Delay', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 10,
            ]
        );
        $this->add_control(
            'sa_preview_window_image_arrow',
            $this->style,
            [
                'label' => __('Arrow', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
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
            'sa_preview_window_image_distance',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 6,
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_image_min_width',
            $this->style,
            [
                'label' => __('Min Width', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_image_max_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
            ]
        );
        $this->add_control(
            'sa_preview_window_image_custom_height_switcher',
            $this->style,
            [
                'label' => __('Custom Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_image_custom_height',
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
                        'max' => 150,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    'sa_preview_window_image_custom_height_switcher' => 'yes'
                ],
                'selector' => [
                    '.sa_prev_img_tooltip_wrap_' . $id . '' => 'height: {{SIZE}}{{UNIT}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_image_side',
            $this->style,
            [
                'label' => __('Side', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'multiple' => true,
                'options' => [
                    'top' => __('Top', SHORTCODE_ADDOONS),
                    'right' => __('Right', SHORTCODE_ADDOONS),
                    'bottom' => __('Bottom', SHORTCODE_ADDOONS),
                    'left' => __('Left', SHORTCODE_ADDOONS),
                ],
                'default' => ['right', 'left'],
            ]
        );
        $this->add_control(
            'sa_preview_window_image_hide',
            $this->style,
            [
                'label' => __('Hide on Mobiles', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
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
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Trigger Image Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_box_width',
            $this->style,
            [
                'label' => __('Max Widht', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '600',
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
                    '{{WRAPPER}} .sa_preview_image_container_style_1' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_box_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trigger' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_box_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trigger' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_preview_window_box_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trigger' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_box_b_r',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trigger' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_box_padding',
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
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trigger' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_box_margin',
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
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_trigger' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Trigger Image Caption Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_preview_window_caption_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_caption_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_caption_tex_sha',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_caption_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => 'background:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_caption_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_caption_b_r',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_caption_padding',
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
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_caption_margin',
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
                    '{{WRAPPER}} .sa_preview_image_container_style_1 .sa_preview_image_figcap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Preview Window Content Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_group_control(
            'sa_preview_window_tooltip_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . '' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . '' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . '' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_b_r',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . '' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_padding',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . '' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_margin',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . '' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Preview Window Image Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_preview_window_tooltip_image_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_img_wrap_' . $id . ' .sa_preview_image_tooltips_img' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_image_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_img_wrap_' . $id . ' .sa_preview_image_tooltips_img' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_image_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_img_wrap_' . $id . ' .sa_preview_image_tooltips_img' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_image_b_r',
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
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_img_wrap_' . $id . ' .sa_preview_image_tooltips_img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_image_padding',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_img_wrap_' . $id . ' .sa_preview_image_tooltips_img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_image_margin',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_img_wrap_' . $id . ' .sa_preview_image_tooltips_img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Preview Window Title Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_preview_window_tooltip_title_switcher' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_title_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_title_tex_sha',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_title_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_title_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_title_b_r',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_title_padding',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_title_margin',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_title_wrap_' . $id . ' .sa_previmg_tooltip_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Preview Window Description Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_preview_window_tooltip_desc_switcher' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_desc_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_desc_typ',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_desc_bg',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_desc_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_desc_b_r',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_desc_padding',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_desc_margin',
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
                    '{{WRAPPER}} .sa__prev___imag, .sa_prev_img_tooltip_wrap_' . $id . ' .sa_prev_img_tooltip_desc_wrap_' . $id . '' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Preview Window Container Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_preview_window_tooltip_outer_bg',
            $this->style,
            [
                'label' => __('Inner Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .tooltipster-sidetip div.tooltipster-box-' . $id . ' .tooltipster-content' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_preview_window_tooltip_container_bg',
            $this->style,
            [
                'label' => __('Outer Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::GRADIENT,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .tooltipster-sidetip div.tooltipster-box-' . $id . '' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_container_box_sha',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .tooltipster-sidetip div.tooltipster-box-' . $id . '' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_preview_window_tooltip_container_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa__prev___imag, .tooltipster-sidetip div.tooltipster-box-' . $id . '' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_container_b_r',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa__prev___imag, .tooltipster-sidetip div.tooltipster-box-' . $id . '' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_preview_window_tooltip_container_padding',
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
                    '{{WRAPPER}} .sa__prev___imag, .tooltipster-sidetip div.tooltipster-box-' . $id . '' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function sa_get_all_post()
    {

        $post_types = get_post_types();
        $post_type_not__in = array('attachment', 'revision', 'nav_menu_item', 'custom_css', 'customize_changeset', 'elementor_library', 'post');

        foreach ($post_type_not__in as $post_type_not) {
            unset($post_types[$post_type_not]);
        }
        $post_type = array_values($post_types);
        $all_posts = get_posts(
            array(
                'posts_per_page' => -1,
                'post_type' => 'page',
            )
        );
        if (!empty($all_posts) && !is_wp_error($all_posts)) {
            foreach ($all_posts as $post) {
                $this->options[$post->ID] = strlen($post->post_title) > 20 ? substr($post->post_title, 0, 20) . '...' : $post->post_title;
            }
        }
        return $this->options;
    }
}
