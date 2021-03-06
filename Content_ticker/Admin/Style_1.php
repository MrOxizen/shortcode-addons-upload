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
            'label' => __('Tag Alignment', SHORTCODE_ADDOONS),
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


        $this->add_responsive_control(
                'sa_content_ticker_teg_width', $this->style, [
            'label' => __('Tag Width', SHORTCODE_ADDOONS),
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
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_tag' => 'width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_content_ticker_style1 .oxi_content_ticket_content' => 'width: calc(100% - {{SIZE}}{{UNIT}});',
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
                'shortcode-addons', [
            'label' => esc_html__('Carousel Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_carousel_a_p_on_off', $this->style, [
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
                'sa_carousel_a_p_dur', $this->style, [
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
                'sa_carousel_pau_hov_on_off', $this->style, [
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
                'sa_carousel_infin_loop_on_off', $this->style, [
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
                'sa_carousel_mou_dragg_on_off', $this->style, [
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
                'sa_carousel_rig_left_on_off', $this->style, [
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
                'sa_carousel_nav_on_off', $this->style, [
            'label' => __('Nav Icon', SHORTCODE_ADDOONS),
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

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Nav icon Style', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'sa_carousel_nav_on_off' => 'true'
            ]
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Left Icon', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Right Icon', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_nav_left', $this->style, [
            'label' => __('Nav Left Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-angle-left',
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_nav_right', $this->style, [
            'label' => __('Nav Right Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'separator' => TRUE,
            'default' => 'fas fa-angle-right',
                ]
        );
        
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        $this->add_responsive_control(
                'sa_carousel_nav_S', $this->style, [
            'label' => __('Nav Size', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next .oxi-icons' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_content_ticker_arrow_pos', $this->style, [
            'label' => __('Arrow Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'separator' => TRUE,
            'loader' => TRUE,
            'options' => [
                'arrow_left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'arrow_right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
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
                'sa_carousel_nav_c', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev .oxi-icons' => 'color: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next .oxi-icons' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_nav_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(108, 194, 50, 1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev' => 'background: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_shad', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next' => '',
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_carousel_nav_c_h', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev:hover .oxi-icons' => 'color: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next:hover .oxi-icons' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_carousel_nav_bg_h', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(36, 112, 4, 0.99)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev:hover' => 'background: {{VALUE}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next:hover' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_border_h', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev:hover' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next:hover' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_carousel_nav_shad_h', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev:hover' => '',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next:hover' => '',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_carousel_nav_b_r', $this->style, [
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
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_nav_padding', $this->style, [
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
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_carousel_nav_margin', $this->style, [
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
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-prev' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .sa_addons_carousel_style_1 .oxi-owl-nav .oxi-owl-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();


        $this->end_section_tabs();
    }

}
