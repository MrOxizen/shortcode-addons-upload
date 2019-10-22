<?php

namespace SHORTCODE_ADDONS_UPLOAD\Event_widgets\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_9
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_9 extends AdminStyle {

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
            'title_field' => 'sa_event_t_heading',
            'button' => 'Add New Event',
            'fields' => [
                'sa_event_t_media' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/pexels-photo-167589.jpeg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_event_t_heading' => [
                    'label' => __('Heading', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9.oxi-addons-EW-9-wrapper-style-9-{{KEY}} .oxi-addons-EW-9-H-text' => '',
                    ],
                ],
                'sa_event_t_heading_icon' => [
                    'label' => esc_html__('Heading Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-calendar-alt',
                ],
                'sa_event_t_sub_description' => [
                    'label' => __('Description', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9.oxi-addons-EW-9-wrapper-style-9-{{KEY}} .oxi-addons-EW-9-content-text' => '',
                    ],
                ],
                 'sa_event_d_m_bg' => [
                    'type' => Controls::BACKGROUND,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9.oxi-addons-EW-9-wrapper-style-9-{{KEY}} .oxi-addons-EW-9-content-body ' => '',
                        '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9.oxi-addons-EW-9-wrapper-style-9-{{KEY}} .oxi-addons-EW-9-header' => '',
                    ],
                ],
                 'sa_event_widgets_border' => [
                    'type' => Controls::BORDER,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9.oxi-addons-EW-9-wrapper-style-9-{{KEY}} .oxi-addons-EW-9-body ' => ''
                    ],
                ],
            ],
                ]
        );
        $this->end_controls_section();
       $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_event_widgets_img_max_width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 500,
            'min' => 0,
            'max' => 1000,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9' => 'max-width : {{VALUE}}px;',
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
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-body' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-content-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_event_widgets_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-body' => ''
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
                'shortcode-addons-ei-heading', [
            'label' => esc_html__('Text Setting', SHORTCODE_ADDOONS),
            'showing' => True,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Heading', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Description', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-HI' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_heading_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-HI' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_heading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-HI' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_event_widgets_sub_heading_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-content-text' => 'color : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_event_widgets_sub_heading_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-content-text' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_event_widgets_sub_heading_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-EW-9-wrapper-style-9 .oxi-addons-EW-9-content-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
