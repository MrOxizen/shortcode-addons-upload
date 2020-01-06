<?php

namespace SHORTCODE_ADDONS_UPLOAD\Inline_svg\Admin;

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

        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                []
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'oxi_inline_svg_svg', $this->style, [
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/fireworks-846063_1920.jpg',
            ],
                ]
        );
        $this->add_group_control(
                'oxi_inline_svg_link', $this->style, [
            'type' => Controls::URL,
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_inline_svg_alignment', $this->style, [
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
                '{{WRAPPER}} .oxi-inline-svg__wrapper' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oxi_inline_svg_animation',
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
                    'label' => esc_html__('Style Setting', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_inline_svg_custom_width',
                $this->style,
                [
                    'label' => __('Use Custom Width', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'description' => 'Makes SVG responsive and allows to change its width.',
                    'default' => 'no',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'oxi_inline_svg_aspect_ratio',
                $this->style,
                [
                    'label' => __('Use Aspect Ratio', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'description' => 'This option allows your SVG item to be scaled up exactly as your bitmap image, at the same time saving its width compared to the height.',
                    'default' => 'yes',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                    'condition' => [
                        'oxi_inline_svg_custom_width' => 'yes'
                    ]
                ]
        );


        $this->add_responsive_control(
                'oxi_inline_svg_max_width',
                $this->style,
                [
                    'label' => __('Max Width', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 150,
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
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 80,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-inline-svg' => 'max-width: {{SIZE}}{{UNIT}};',
                    ],
                    'condition' => [
                        'oxi_inline_svg_custom_width' => 'yes'
                    ]
                ]
        );
        $this->add_responsive_control(
                'oxi_inline_svg_height',
                $this->style,
                [
                    'label' => __('Height', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => '150',
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
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 80,
                            'step' => 1,
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-inline-svg svg' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                    'condition' => [
                        '! oxi_inline_svg_aspect_ratio' => '',
                        'oxi_inline_svg_custom_width' => 'yes'
                    ]
                ]
        );


        $this->add_control(
                'oxi_inline_svg_custom_color',
                $this->style,
                [
                    'label' => __('Use Custom Color', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'description' => 'Specifies color of all SVG elements that have a fill or stroke color set.',
                    'default' => '',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'oxi_inline_svg_inline_css',
                $this->style,
                [
                    'label' => __('Remove Inline CSS', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'description' => 'Use this option to delete the inline styles in the loaded SVG.',
                    'default' => '',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons',
                [
                    'label' => esc_html__('Color', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                    'condition' => [
                        'oxi_inline_svg_custom_color' => 'yes'
                    ]
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
                'oxi_inline_svg_inline_css_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-inline-svg' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'oxi_inline_svg_inline_css_h_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-inline-svg:hover' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
