<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_4
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_4 extends AdminStyle {

    public function register_controls() {


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', []
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_repeater_control(
                'sa_event_widgets_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'title_field' => 'sa_event_t_title',
            'button' => 'Add New Event',
            'fields' => [
                'sa_event_t_media' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'http://logichunt.net/demo/wordpress/emeet/wp-content/uploads/2018/07/speaker3-150x150.jpg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_event_t_time' => [
                    'label' => __('Time', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-4.oxi-addons-EW-wrapper-style-4-{{KEY}} .oxi-addons-EW-body-time' => '',
                    ],
                ],
                'sa_event_t_title' => [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-4.oxi-addons-EW-wrapper-style-4-{{KEY}} .oxi-addons-EW-body-time' => '',
                    ],
                ],
                'sa_event_t_Author' => [
                    'label' => __('Author', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-4.oxi-addons-EW-wrapper-style-4-{{KEY}} .oxi-addons-EW-image-overlay-heading' => '',
                    ],
                ],
                'sa_event_t_location' => [
                    'label' => __('Location', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-4.oxi-addons-EW-wrapper-style-4-{{KEY}} .oxi-addons-EW-image-overlay-price' => '',
                    ],
                ],
                'sa_event_t_info_text' => [
                    'label' => __('Info text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-wrapper-style-4.oxi-addons-EW-wrapper-style-4-{{KEY}} .oxi-addons-EW-image-overlay-details' => '',
                    ],
                ],
            ],
                ]
        );

        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'Info-Body' => esc_html__('Info Body', SHORTCODE_ADDOONS),
                'Main-Body' => esc_html__('Main Body', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_event_widgets_info_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-head' => '',
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-head.oxi-active .oxi-addons-EV-title' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_info_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-title' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_event_widgets_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-row' => '',
            ],
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-row' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control('sa-ac-gen-sep', $this->style, [
            'type' => Controls::SEPARATOR,
            'label' => esc_html__('', SHORTCODE_ADDOONS),
            Controls::SEPARATOR => TRUE,
                ]
        );
        $this->add_control(
                'sa_event_widgets_opening', $this->style, [
            'label' => __('Opening Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => ':first',
            'options' => [
                ':first' => __('1st', SHORTCODE_ADDOONS),
                ':eq(1)' => __('2nd', SHORTCODE_ADDOONS),
                ':eq(2)' => __('3rd', SHORTCODE_ADDOONS),
                ':eq(3)' => __('4th', SHORTCODE_ADDOONS),
                ':eq(4)' => __('5th', SHORTCODE_ADDOONS),
                ':eq(5)' => __('6th', SHORTCODE_ADDOONS),
                ':eq(6)' => __('7th', SHORTCODE_ADDOONS),
                ':eq(7)' => __('8th', SHORTCODE_ADDOONS),
                ':eq(8)' => __('9th', SHORTCODE_ADDOONS),
                ':eq(9)' => __('10th', SHORTCODE_ADDOONS),
                'none' => __('None', SHORTCODE_ADDOONS),
            ],
            'loader' => true,
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
                '{{WRAPPER}} .oxi-addons-EW-wrapper-style-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .shortcode-addons-wrapper-179 .oxi-addons-EV-style-4 .oxi-addons-EV-row' => ''
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
            'label' => esc_html__('Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_event_widgets_img_pos', $this->style, [
            'label' => __('Button Position ', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'right',
            'loader' => TRUE,
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );

        $this->add_control(
                'sa_event_widgets_img_h', $this->style, [
            'label' => __('Width & Height', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 70,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-image .oxiimage' => 'width : {{VALUE}}px;height : {{VALUE}}px;',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_img_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EV-style-4 .oxi-addons-EV-image .oxiimage' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_img_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-image .oxiimage' => 'border-radius : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_img_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-image' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-box-title', [
            'label' => esc_html__('Time', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_time_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-time-body' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_time_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#525252',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EV-style-4 .oxi-addons-EV-time-body' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_time_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-time-body' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_time_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-time-body' => 'border-radius : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_time_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-time-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_time_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-time-body' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-box-title', [
            'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#525252',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EV-style-4 .oxi-addons-EV-title-text' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_title_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-title-text' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_title_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-title-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-author', [
            'label' => esc_html__('Author', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_author_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#424242',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EV-style-4 .oxi-addons-EV-title-author-info' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_author_2nd_color', $this->style, [
            'label' => __('Span Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#6a00c7',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EV-style-4 .oxi-addons-EV-title-author-info span' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_author_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-title-author-info' => '',
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-title-author-info span' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_author_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-title-author-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-ei-info', [
            'label' => esc_html__('Info Text', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_info_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#525252',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EV-style-4 .oxi-addons-EV-info-body' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_info_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-body' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_event_widgets_info_text_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-ei-location', [
            'label' => esc_html__('Location', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_event_widgets_location_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#424242',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-location' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_event_widgets_location_2nd_color', $this->style, [
            'label' => __('Span Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#6a00c7',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-location span' => 'color : {{VALUE}}; '
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_location_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-location' => '',
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-location span' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_location_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EV-style-4 .oxi-addons-EV-info-location' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
