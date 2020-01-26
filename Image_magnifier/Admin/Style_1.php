<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_magnifier\Admin;

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
            'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings',
                ],
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_repeater_control(
            'sa_addons_image_magnifier_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'title_field' => 'sa_addons_image_magnifier_title',
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_addons_image_magnifier_title' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Manifier 01', SHORTCODE_ADDOONS),
                    ],
                    'sa_addons_image_magnifier_img' => [
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/11/222783-scaled.jpg',
                        ],
                        'loader' => true,
                        'controller' => 'add_group_control',
                    ],
                    'sa_image_magnifier_magnifi_position' => [
                        'label' => __('Magnifi Position', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'default' => 'right',
                        'loader' => true,
                        'options' => [
                            'none' => __('None', SHORTCODE_ADDOONS),
                            'top' => __('Top', SHORTCODE_ADDOONS),
                            'right' => __('Right', SHORTCODE_ADDOONS),
                            'bottom' => __('Bottom', SHORTCODE_ADDOONS),
                            'left' => __('Left', SHORTCODE_ADDOONS),
                        ],
                    ],

                    'sa_image_magnifier_magnifi_position_top' => [
                        'label' => __('Top Position', SHORTCODE_ADDOONS),
                        'description' => 'After save You will show the changes',
                        'type' => Controls::SLIDER,
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_image_magnifier_magnifi_position' => 'top',
                        ],
                        'default' => [
                            'unit' => 'px',
                            'size' => '',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -500,
                                'max' => 500,
                                'step' => 2,
                            ],
                        ],
                    ],
                    'sa_image_magnifier_magnifi_position_right' => [
                        'label' => __('Right Position', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'description' => 'After save You will show the changes',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_image_magnifier_magnifi_position' => 'right',
                        ],
                        'default' => [
                            'unit' => 'px',
                            'size' => '',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -500,
                                'max' => 500,
                                'step' => 2,
                            ],
                        ],
                    ],
                    'sa_image_magnifier_magnifi_position_bottom' => [
                        'label' => __('Bottom Position', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'conditional' => Controls::INSIDE,
                        'description' => 'After save You will show the changes',
                        'condition' => [
                            'sa_image_magnifier_magnifi_position' => 'bottom',
                        ],
                        'default' => [
                            'unit' => 'px',
                            'size' => '',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -500,
                                'max' => 500,
                                'step' => 2,
                            ],
                        ],
                    ],
                    'sa_image_magnifier_magnifi_position_left' => [
                        'label' => __('Left Position', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_image_magnifier_magnifi_position' => 'left',
                        ],
                        'description' => 'After save You will show the changes',
                        'default' => [
                            'unit' => 'px',
                            'size' => '',
                        ],
                        'range' => [
                            'px' => [
                                'min' => -500,
                                'max' => 500,
                                'step' => 2,
                            ],
                        ],
                    ],

                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_group_control(
            'sa_addons_image_magnifier_column', $this->style, [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_column' => '',
                ],
            ]
        );
 
        $this->add_group_control(
            'sa_addons_image_magnifier_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 .oxi_addons__image' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_image_magnifier_radius',
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
                        'min' => -100,
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
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 .oxi_addons__image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_image_magnifier_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 .oxi_addons__image' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_addons_image_magnifier_padding',
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
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => true,
            ]
        );
        $this->add_responsive_control(
            'sa_addons_image_magnifier_margin',
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
                    '{{WRAPPER}} .oxi_addons__image_magnifier_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        $this->add_responsive_control(
            'sa_image_magnifier_image_position',
            $this->style,
            [
                'label' => __('Image Postion', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'default' => 'center',
                'operator' => Controls::OPERATOR_ICON,
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
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 ' => 'justify-content: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa_image_magnifier_image_switcher',
            $this->style,
            [
                'label' => __('Custom Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'oxi__image_height_width',
            ]
        );
        $this->add_responsive_control(
            'sa_image_magnifier_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_image_magnifier_image_switcher' => 'oxi__image_height_width',
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 50,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 100,
                        'max' => 1500,
                        'step' => 10,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 .oxi_addons__image.oxi__image_height_width' => 'max-width: {{SIZE}}{{UNIT}};', 
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_image_magnifier_height',
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
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 .oxi_addons__image.oxi__image_height_width' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1.oxi__image_height_width' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_image_magnifier_image_switcher' => 'oxi__image_height_width',
                ],
            ]
        );
        $this->add_control(
            'sa_image_magnifier_grayscale_switter',
            $this->style,
            [
                'label' => __('Grayscale', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'oxi_addons_grayscale',
            ]
        );
        $this->add_responsive_control(
            'sa_image_magnifier_line_width',
            $this->style,
            [
                'label' => __('Opacity', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__image_magnifier_style_1 .oxi_addons__image' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Magnifi Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
            'sa_image_magnifier_magnifi_zoom',
            $this->style,
            [
                'label' => __('Zoom', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 2,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
            ]
        );

        $this->add_control(
            'sa_image_magnifier_magnifi_switcher',
            $this->style,
            [
                'label' => __('Magnifi Width Height', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'sa_image_magnifier_magnifi_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'condition' => [
                    'sa_image_magnifier_magnifi_switcher' => 'yes',
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 1500,
                        'step' => 10,
                    ],
                ],
            ]
        );
        $this->add_control(
            'sa_image_magnifier_magnifi_height',
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
                ],
                'condition' => [
                    'sa_image_magnifier_magnifi_switcher' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
