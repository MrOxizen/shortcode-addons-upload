<?php

namespace SHORTCODE_ADDONS_UPLOAD\Single_image\Admin;

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
                'shortcode-addons-general'
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-general-sec', [
            'label' => esc_html__('General', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa_s_image_img', $this->style, [
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/cold-dark-eerie-414144.jpg',
            ],
                ]
        );

        $this->add_control(
                'sa_s_image_ID',
                $this->style,
                [
                    'label' => __('ID', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                ]
        );
        $this->add_responsive_control(
                'sa_s_image_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image-row  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_s_image_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_s_image_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-image', [
            'label' => esc_html__('Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
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
                'sa_s_image_gray', $this->style, [
            'label' => __('Grayscale', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => 30,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image img' => '-webkit-filter : grayscale( {{SIZE}}% ); filter : grayscale( {{SIZE}}% ); '
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_scale', $this->style, [
            'label' => __('Scale', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 1,
            'max' => 10,
            'min' => 0,
            'step' => '0.1',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4  .oxi-addons-single-image img' => 'transform:scale({{VALUE}});',
            ]
                ]
        );
        $this->add_control(
                'sa_s_image_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255, 255, 255, 0)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image::before' => 'background : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_s_image_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_s_image_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_s_image_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-single-image-container-style-4  .oxi-addons-single-image::before' => ''
                    ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_s_image_h_gray', $this->style, [
            'label' => __('Grayscale', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => 0,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 60,
                    'step' => 1,
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image:hover img ' => '-webkit-filter : grayscale( {{SIZE}}% ); filter : grayscale( {{SIZE}}% );'
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_h_scale', $this->style, [
            'label' => __('Scale', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 1.5,
            'max' => 10,
            'min' => 0,
            'step' => '0.1',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4  .oxi-addons-single-image:hover img' => 'transform:scale({{VALUE}});',
            ]
                ]
        );

        $this->add_control(
                'sa_s_image_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255, 255, 255, 0)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image:hover::before' => 'background : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_s_image_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image:hover  ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_s_image_h_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image:hover ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_s_image_h_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-single-image-container-style-4  .oxi-addons-single-image:hover::before' => ''
                    ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_control(
                'sa_s_image_animation_dur', $this->style, [
            'label' => __('Animation Duration', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            Controls::SEPARATOR,
            'default' => 5,
            'max' => 10,
            'min' => 0,
            'step' => '0.1',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-4 .oxi-addons-single-image-ribbon' => 'transition: transform {{VALUE}}s;',
            ]
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
