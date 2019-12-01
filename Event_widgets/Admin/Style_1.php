<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

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
                'content-settings' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
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
                'sa_event_widgets_col', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-col' => ''
            ],
                ]
        );
        $this->add_repeater_control(
                'sa_event_widgets_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'title_field' => 'sa_event_t_head',
            'button' => 'Add New Event',
            'fields' => [
                
                'sa_event_t_media' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.oxilab.org/wp-content/uploads/2019/04/beautiful-beauty-blue-414612.jpg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_event_t_date' => [
                    'label' => __('Date', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-D-date' => '',
                    ],
                ],
                'sa_event_t_month' => [
                    'label' => __('Month', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-D-month' => '',
                    ],
                ],
                'sa_event-widgets_date_and_month_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-image-date ' => ''
            ],
                ],
                'sa_event_t_head' => [
                    'label' => __('Heading Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Contrary to Popular',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-C-heading' => '',
                    ],
                ],
                'sa_event_t_info_text' => [
                    'label' => __('Info text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet dolor sit amet consectetur adipiscing.',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-C-text' => '',
                    ],
                ],
                'sa_event_t_button' => [
                    'label' => __('Button Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Click Here',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-C-button-link' => '',
                    ],
                ],
                'sa_event_t_button_link' => [
                    'label' => __('Button Url', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                ],
                 'sa_event-widgets_content_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-content' => '',
                    ],
                ],
                'sa_event_widgets_br' => [
                    'type' => Controls::BORDER,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1.oxi-addons-EW-wrapper-style-1-{{KEY}} .oxi-addons-EW-row' => '',
                    ],
                ],
            ],
                ]
        );
         
       

        $this->add_responsive_control(
                'sa_event_widgets_border_r', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-row' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        
        $this->add_responsive_control(
                'sa_event_widgets_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-row' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Image Section', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_event_widgets_img_h', $this->style, [
            'label' => __('Image Height Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 60,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-image:after' => 'padding-bottom : {{VALUE}}%;',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event-widgets_date_and_month_w', $this->style, [
            'label' => __('Date Time Box Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 80,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 25,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-image-date' => ' width : {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event-widgets_date_and_month_H', $this->style, [
            'label' => __('Date Time Box Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 80,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 400,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 25,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-image-date' => 'height : {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_event-widgets_date_and_month_pos', $this->style, [
            'label' => __('Position ', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'right',
            'loader' => TRUE,
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
             ]
        );
      
        $this->add_group_control(
                'sa_event-widgets_date_and_month_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-image-date' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'widgets_date_and_month_border-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-image-date ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'widgets_date_and_month_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => -10,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => -200,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => -10,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-image-date ' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-date', [
            'label' => esc_html__('Date Time Text', SHORTCODE_ADDOONS),
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Date Text', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Time Text', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_date_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-D-date ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_date_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-D-date ' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_date_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-D-date ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_ei_month_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-D-month ' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_month_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-D-month ' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_month_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-D-month ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
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
                'shortcode-addons-start-tabs' => 'content-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-ei-head', [
            'label' => esc_html__('Content Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
       

        $this->add_responsive_control(
                'sa_event_widgets_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-content' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-details', [
            'label' => esc_html__('Content Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Header Text', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Info Text', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-heading' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-heading' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_details_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-text' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_details_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-text' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_details_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-back-button', [
            'label' => esc_html__('Button', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_event-widgets_btn_pos', $this->style, [
            'label' => __('Button Position ', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'loader' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button' => 'text-align:{{VALUE}}',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_btn_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => '',
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
                'sa_event_widgets_btn_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_btn_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(20, 179, 179, 1)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_btn_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_btn_border_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_event_widgets_btn_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link:hover' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_btn_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(22, 172, 227, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link:hover' => 'background : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_btn_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link:hover' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_btn_h_border_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_event_widgets_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            Controls::SEPARATOR => TRUE,
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
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_btn_margin', $this->style, [
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
                '{{WRAPPER}}  .oxi-addons-EW-wrapper-style-1 .oxi-addons-EW-C-button-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
