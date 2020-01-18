<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_ticker\Admin;

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

    use \SHORTCODE_ADDONS_UPLOAD\Content_ticker\File\Post_Query;

    public function register_controls() {


        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'slider-settings' => esc_html__('Slider Settings', SHORTCODE_ADDOONS),
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
                'shortcode-addons-gen', [
            'label' => esc_html__('Ticker Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_content_ticker_type', $this->style, [
            'label' => __('Ticker Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'ticker_dynamic',
            'loader' => TRUE,
            'options' => [
                'ticker_dynamic' => __('Dynamic', SHORTCODE_ADDOONS),
                'ticker_custom' => __('Custom', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_content_ticker_tag_title', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Tag Title', SHORTCODE_ADDOONS),
            'placeholder' => __('Tag Title', SHORTCODE_ADDOONS),
            'default' => 'News Hightlights',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => ''
            ],
                ]
        );
        $this->add_repeater_control(
                'sa_content_ticker_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_content_ticker_content' => [
                    'type' => Controls::TEXTAREA,
                    'label' => __('Content', SHORTCODE_ADDOONS),
                    'placeholder' => __('Content', SHORTCODE_ADDOONS),
                    'default' => 'Ticker Custom Content',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_title_{{KEY}}' => ''
                    ],
                ],
                'sa_content_ticker_content_link' => [
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                ],
            ],
            'title_field' => 'sa_content_ticker_content',
            'condition' => [
                'sa_content_ticker_type' => 'ticker_custom',
            ]
                ]
        );
        $this->add_control(
                'sa_content_ticker_tag_position', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'separator' => TRUE,
            'loader' => TRUE,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_content_ticker_style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-gen', [
            'label' => esc_html__('Post Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_content_ticker_type' => 'ticker_dynamic',
            ]
                ]
        );
        $this->post_type();
        $this->add_control(
                'sa_display_post_post_type', $this->style, [
            'label' => __('Post Type', SHORTCODE_ADDOONS),
            'loader' => TRUE,
            'type' => Controls::SELECT,
            'default' => 'post',
            'options' => $this->post_type(),
                ]
        );
        $this->add_control(
                'sa_display_post_author', $this->style, [
            'label' => __('Author', SHORTCODE_ADDOONS),
            'loader' => TRUE,
            'type' => Controls::SELECT,
            'multiple' => true,
            'options' => $this->post_author(),
                ]
        );
        foreach ($this->post_type() as $key => $value) {
            if ($key != 'page') :
                $this->add_control(
                        'sa_display_post_post_type-cat' . $key, $this->style, [
                    'label' => __(' Category', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'multiple' => true,
                    'loader' => TRUE,
                    'options' => $this->post_category($key),
                    'condition' => [
                        'sa_display_post_post_type' => $key
                    ]
                        ]
                );
                $this->add_control(
                        'sa_display_post_post_type-tag' . $key, $this->style, [
                    'label' => __(' Tags', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'multiple' => true,
                    'loader' => TRUE,
                    'options' => $this->post_tags($key),
                    'condition' => [
                        'sa_display_post_post_type' => $key
                    ]
                        ]
                );
            endif;

            $this->add_control(
                    'sa_display_post_post_type-include' . $key, $this->style, [
                'label' => __(' Include Post', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'multiple' => true,
                'loader' => TRUE,
                'options' => $this->post_include($key),
                'condition' => [
                    'sa_display_post_post_type' => $key
                ]
                    ]
            );
            $this->add_control(
                    'sa_display_post_post_type-exclude' . $key, $this->style, [
                'label' => __(' Exclude Post', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'multiple' => true,
                'loader' => TRUE,
                'options' => $this->post_exclude($key),
                'condition' => [
                    'sa_display_post_post_type' => $key
                ]
                    ]
            );
        }
        $this->add_control(
                'sa_display_post_per_page', $this->style, [
            'label' => __('Post Per Page', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'loader' => TRUE,
            'min' => 1,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-1 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
            ]
                ]
        );
        $this->add_control(
                'sa_display_post_offset', $this->style, [
            'label' => __('Offset', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-1 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
            ]
                ]
        );
        $this->add_control(
                'sa_display_post_orderby', $this->style, [
            'label' => __(' Order By', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'ID',
            'loader' => TRUE,
            'options' => [
                'ID' => 'Post ID',
                'author' => 'Post Author',
                'title' => 'Title',
                'date' => 'Date',
                'modified' => 'Last Modified Date',
                'parent' => 'Parent Id',
                'rand' => 'Random',
                'comment_count' => 'Comment Count',
                'menu_order' => 'Menu Order',
            ],
                ]
        );

        $this->add_control(
                'sa_display_post_ordertype', $this->style, [
            'label' => __(' Order Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'options' => [
                'asc' => 'Ascending',
                'desc' => 'Descending',
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_layout_linke_open', $this->style, [
            'label' => __('Link Opening', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'loader' => TRUE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => '_blank',
            'options' => [
                '' => [
                    'title' => __('Current Tab', SHORTCODE_ADDOONS),
                ],
                '_blank' => [
                    'title' => __('New Tab', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );



        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Ticker Content Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_content_ticker_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticker_text' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_content_ticker_typo_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal ', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();

        $this->add_control(
                'sa_counter_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticker_text' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->end_controls_tab();
        $this->start_controls_tab();


        $this->add_control(
                'sa_content_ticker_color_hover', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticker_text:hover' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa_content_ticker_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_content_ticker_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_text_br_r', $this->style, [
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
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_content_ticker_bx_s', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_text_padding', $this->style, [
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
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_text_margin', $this->style, [
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
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Ticker Tag Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );

        $this->add_group_control(
                'sa_content_ticker_teg_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => ''
            ],
                ]
        );



        $this->add_control(
                'sa_counter_title_color_h', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => 'color:{{VALUE}};'
            ],
                ]
        );



        $this->add_group_control(
                'sa_content_ticker_teg_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_content_ticker_teg_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_teg_text_br_r', $this->style, [
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
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_content_ticker_teg_bx_s', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_teg_text_padding', $this->style, [
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
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_content_ticker_teg_text_margin', $this->style, [
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
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();


        $this->end_section_devider();

        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'slider-settings'
            ]
                ]
        );

        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-layout', [
            'label' => esc_html__('Carousel Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );


        
        $this->add_control(
                'sa_content_ticker_silder_slider_speed', $this->style, [
            'label' => __('Slider Speed', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 500,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 3000,
                    'step' => 50,
                ],
            ],
                ]
        );

        $this->add_control(
                'sa_content_ticker_silder_autoplay_switter', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'separator' => TRUE,
            'default' => 'yes',
            'loader' => true,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_content_ticker_silder_autoplay_speed', $this->style, [
            'label' => __('Autoplay Speed  ', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 2000,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 5000,
                    'step' => 50,
                ],
            ],
            'condition' => [
                'sa_content_ticker_silder_autoplay_switter' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_content_ticker_silder_loop_switter', $this->style, [
            'label' => __('Infinite Loop', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'separator' => TRUE,
            'default' => 'yes',
            'loader' => true,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'sa_content_ticker_silder_pause_switter', $this->style, [
            'label' => __('Pause On Hover', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'no',
            'loader' => true,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );


        $this->add_control(
                'sa_content_ticker_silder_pause_grab_cursor', $this->style, [
            'label' => __('Grab Cursor', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'separator' => TRUE,
            'default' => 'no',
            'loader' => true,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_content_ticker_silder_list_main_navigator', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::SEPARATOR,
            Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_content_ticker_slider_nav_on_off', $this->style, [
            'label' => __('Navigation', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'separator' => TRUE,
                ]
        );
        $this->add_control(
                'sa_content_ticker_silder_pause_arrow', $this->style, [
            'label' => __('Arrows', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => true,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );


        $this->add_control(
                'sa_content_ticker_silder_list_main_direction', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::SEPARATOR,
            Controls::SEPARATOR => true,
                ]
        );
        $this->add_control(
                'sa_content_ticker_silder_direction', $this->style, [
            'label' => __('Direction', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'left',
            'loader' => true,
            'options' => [
                'left' => __('Left', SHORTCODE_ADDOONS),
                'right' => __('Right', SHORTCODE_ADDOONS),
            ],
                ]
        );


        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Arrows Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_content_ticker_silder_pause_arrow' => 'yes'
            ],
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Arrow Left', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Arrow Right', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'arrow_left', $this->style, [
            'label' => __('Arrow Left', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-arrow-left',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'arrows_left_position', $this->style, [
            'label' => __('Arrow Position', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.5,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => 'left: {{SIZE}}%;',
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();

        $this->add_control(
                'arrow_right', $this->style, [
            'label' => __('Arrow Right', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-arrow-right',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'arrows_Right_position', $this->style, [
            'label' => __('Arrow Position', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.5,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => 'right: {{SIZE}}%;',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'arrows_width_height', $this->style, [
            'label' => __('Width Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => TRUE,
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
                    'max' => 50,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'arrows_size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
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
                    'max' => 50,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
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
                'arrows_color_normal', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '',
            'selector' => [
                ' {{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next .oxi-icons' => 'color: {{VALUE}};',
                ' {{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev .oxi-icons' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'arrows_bg_color_normal', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparator' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => 'background: {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'arrows_border_normal', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => '',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => '',
            ]
                ]
        );
        $this->add_group_control(
                'arrows_boxsha_normal', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => '',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => '',
            ]
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'arrows_color_hover', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev:hover .oxi-icons' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next:hover .oxi-icons' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'arrows_bg_color_hover', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparator' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev:hover' => 'background: {{VALUE}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next:hover' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'arrows_border_hover', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev:hover' => '',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next:hover' => '',
            ]
                ]
        );
        $this->add_group_control(
                'arrows_boxsha_hover', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev:hover' => '',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next:hover' => '',
            ]
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'arrows_border_radius_normal', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'arrows_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .swiper-button-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->end_section_tabs();
    }

}
