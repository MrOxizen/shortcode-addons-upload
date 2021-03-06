<?php

namespace SHORTCODE_ADDONS_UPLOAD\Single_image\Admin;

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

class Style_3 extends AdminStyle {

    public function register_controls() {
        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs-general', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
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
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/asdasdasd.jpeg',
            ],
                ]
        );

        $this->add_control(
                'sa_s_image_ribbon', $this->style, [
            'label' => __('Ribbon', SHORTCODE_ADDOONS),
            'description' => __('Are you want ribbon?', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'ribbon_on',
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-row  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'size' => 100,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image img' => '-webkit-filter : grayscale( {{SIZE}}% ); filter : grayscale( {{SIZE}}% ); '
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255, 255, 255, 0)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon' => 'background : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_s_image_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image ' => ''
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_s_image_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon' => ''
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
                    'max' => 100,
                    'step' => 1,
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image:hover img ' => '-webkit-filter : grayscale( {{SIZE}}% ); filter : grayscale( {{SIZE}}% );'
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(255, 255, 255, 0)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3:hover .oxi-addons-single-image-icon' => 'background : {{VALUE}}; '
            ],
                ]
        );

        $this->add_group_control(
                'sa_s_image_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image:hover  ' => ''
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image:hover ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_s_image_h_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-single-image-container-style-3:hover .oxi-addons-single-image-icon' => ''
                    ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons-si-ribbon', [
            'label' => esc_html__('Ribbon ', SHORTCODE_ADDOONS),
            'condition' => [
                'sa_s_image_ribbon' => 'ribbon_on'
            ]
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_text', $this->style, [
            'label' => __('Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Ribbon text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon-content' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_pos', $this->style, [
            'label' => __('Ribbon Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'loader' => TRUE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'sa_info_image_img_alignment_left',
            'options' => [
                'sa_info_image_img_alignment_left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-long-arrow-alt-left',
                ],
                'sa_info_image_img_alignment_right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-long-arrow-alt-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-image-main ' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 205,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 600,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon ' => 'width : {{SIZE}}{{UNIT}}; '
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_top', $this->style, [
            'label' => __('Top', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 37,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
            ]
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_left', $this->style, [
            'label' => __('Left', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => -43,
            'loader' => TRUE,
//            'selector' => [
//                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon' => 'left: {{VALUE}}px;',
//            ],
            'condition' => [
                'sa_s_image_ribbon_pos' => 'sa_info_image_img_alignment_left'
            ]
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_right', $this->style, [
            'label' => __('Right', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => -43,
            'loader' => TRUE,
//            'selector' => [
//                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon' => 'right: {{VALUE}}px;',
//            ],
            'condition' => [
                'sa_s_image_ribbon_pos' => 'sa_info_image_img_alignment_right'
            ]
                ]
        );
        $this->add_control(
                'sa_s_image_ribbon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'separator' => TRUE,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon-content' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_ribbo_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(125, 68, 163, 1)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon-content' => 'background:{{VALUE}};',
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon:after' => 'border-color:{{VALUE}};',
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon:before' => 'border-color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_s_image_ribbon_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon-content' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_s_image_ribbon_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-ribbon-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );



        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs-style', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'style-settings'
            ]
                ]
        );

        /*
         * 
         * Button Section
         * 
         */

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-font-sec', [
            'label' => esc_html__('Button', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_s_image_button', $this->style, [
            'label' => __('Button text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Button text',
                    'loader'=>TRUE,
            'placeholder' => 'Button text',
                ]
        );
         $this->add_group_control(
                'sa_s_image_button_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data' => '',
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
                'sa_s_image_button_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}   .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data ' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_button_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(44, 38, 153, 0.51)',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_s_image_button__border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_s_image_button_border_radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_s_image_button_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_button_h_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(23, 118, 166, 1)',
            'selector' => [
                '{{WRAPPER}}   .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data:hover' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_s_image_button_h_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data:hover ' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_s_image_button_h_border_radius', $this->style, [
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
                '{{WRAPPER}}  .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_tab();
           $this->add_responsive_control(
                'sa_s_image_button_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-single-image-container-style-3 .oxi-addons-single-image-icon-data ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_tabs();

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        /*
         * 
         * Lightbox or Link  Section
         * 
         */
        $this->start_controls_section(
                'shortcode-addons-light-link', [
            'label' => esc_html__('Lightbox or Link', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_s_image_light_or_link', $this->style, [
            'label' => __('Lightbox or Link', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'link',
            'loader' => TRUE,
            'options' => [
                'lightbox' => [
                    'title' => __('Lightbox', SHORTCODE_ADDOONS),
                ],
                'link' => [
                    'title' => __('Link', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-lightbox', [
            'label' => esc_html__('Lightbox ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_s_image_light_or_link' => 'lightbox'
            ]
                ]
        );

        $this->add_group_control(
                'sa_s_image_light_img', $this->style, [
            'type' => Controls::MEDIA,
                    'default' => [
                'type' => 'media-library',
                'link' => 'https://www.oxilab.org/wp-content/uploads/2019/01/asdasdasd.jpeg',
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_light_z_ind', $this->style, [
            'label' => __('Z-index', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 9999,
            'loader' => TRUE,
          
                ]
        );
        $this->add_control(
                'sa_s_image_light_bg_color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(68, 161, 86,1.00)',
            'selector' => [
                '{{WRAPPER}}.Oximfp-bg' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_s_image_light_cls_clr', $this->style, [
            'label' => __('Closing Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_s_image_light_pre_clr', $this->style, [
            'label' => __('Preloader Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'loader' => TRUE,
                ]
        );
    

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-link', [
            'label' => esc_html__('Link ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_s_image_light_or_link' => 'link'
            ]
                ]
        );
        $this->add_group_control(
                'sa_s_image_link_url',
                $this->style,
                [
                    'type' => Controls::URL,
                    'loader' => TRUE,
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
