<?php

namespace SHORTCODE_ADDONS_UPLOAD\Flip_carousel\Admin;

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
                'general-settings' => esc_html__('General', SHORTCODE_ADDOONS),
                'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings',
            ]
                ]
        );

        $this->start_section_devider();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Flip Carousel Sliders', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_repeater_control(
                'oxi_addons_flipbox_style_1', $this->style, [
            'label' => __('Sliders', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'oxi_addons_slider_image' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                    ],
                    'loader' => TRUE,
                    'controller' => 'add_group_control',
                ],
                'oxi_addons_slider_text' => [
                    'label' => esc_html__('Slider Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Lorem Ipsum is simply dummy',
                    'selector' => [
                        '{{WRAPPER}} .oa_ac_style_' . $this->oxiid . '_{{KEY}} .heading-data' => '',
                    ],
                ],
                'oxi_addons_slider_e_link' => [
                    'label' => __('Enable Slide Link', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'loader' => TRUE,
                    'yes' => __('Yes', SHORTCODE_ADDOONS),
                    'no' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                    'conditional' => Controls::INSIDE,
                ],
                'oxi_addons_slider_link' => [
                    'label' => esc_html__('Link', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}}  .oxi_addons__card_content_style_{{KEY}} .oxi-addons-button-link' => '',
                    ],
                    'conditional' => Controls::INSIDE,
                    'condition' => [
                        'oxi_addons_slider_e_link' => 'yes',
                    ],
                ],
            ],
            'title_field' => 'oxi_addons_slider_text',
            'button' => 'Add New Slider',
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Flip Carousel Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_addons_slider_type', $this->style, [
            'label' => __('Carousel Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'options' => [
                'coverflow' => 'Cover-Flow',
                'carousel' => 'Carousel',
                'flat' => 'Flat',
                'wheel' => 'Wheel'
            ],
            'default' => 'coverflow',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_fade_in', $this->style, [
            'label' => __('Fade In (ms)', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
                ]
        );
        $this->add_control(
                'oxi_addons_slider_start_from', $this->style, [
            'label' => __('Item Starts From Center?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'center',
            'center' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'center',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_str_number', $this->style, [
            'label' => __('Enter Starts Number', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'condition' => [
                '! oxi_addons_slider_start_from' => '',
            ]
                ]
        );
        $this->add_control(
                'oxi_addons_slider_loop', $this->style, [
            'label' => __('Loop', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'true',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_autoplay', $this->style, [
            'label' => __('Auto Play', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'false',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_timeout', $this->style, [
            'label' => __('Autoplay Timeout (ms)', SHORTCODE_ADDOONS),
            'default' => 500,
            'type' => Controls::NUMBER,
            'condition' => [
                'oxi_addons_slider_autoplay' => 'true',
            ]
                ]
        );
        $this->add_control(
                'oxi_addons_slider_puse_hover', $this->style, [
            'label' => __('Pause On Hover', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'true',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_cl_play', $this->style, [
            'label' => __('On Click Play?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'true',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_on_scroll', $this->style, [
            'label' => __('On Scroll Wheel Play?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'true',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_on_touch', $this->style, [
            'label' => __('On Touch Play?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'true',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
                'oxi_addons_slider_cas_navi', $this->style, [
            'label' => __('Carousel Navigator', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'true',
            'true' => __('Yes', SHORTCODE_ADDOONS),
            'false' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
                ]
        );
        $this->add_control(
            'oxi_addons_slider_spacing', $this->style,[
                'label' => __('Slide Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => -1,
                        'max' => 1,
                        'step' => .1,
                    ],
                ]
            ]
        );
        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'style-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Flip Carousel Stye', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_addons_slider_item_width', $this->style, [
            'label' => __('Item Width', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
         $this->add_control(
            'oxi_addons_slider_bg_color', $this->style, [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'selector' => [
                '{{WRAPPER}} .sa-el-device-wrapper svg .back-shape, {{WRAPPER}} .sa-el-device-skin-black svg .side-shape' => 'fill:{{VALUE}}',
            ],
                ]
        );
         $this->add_group_control(
            'oxi_addons_slider_bg_color', $this->style, [
                'label' => __('Border', SHORTCODE_ADDOONS),
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa-el-device-wrapper svg .back-shape, {{WRAPPER}} .sa-el-device-skin-black svg .side-shape' => 'fill:{{VALUE}}',
            ],
                ]
        );
         $this->add_group_control(
            'oxi_addons_slider_box_shadow', $this->style, [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-el-device-wrapper svg .back-shape, {{WRAPPER}} .sa-el-device-skin-black svg .side-shape' => 'fill:{{VALUE}}',
            ],
                ]
        );
         $this->add_responsive_control(
            'oxi_addons_slider_br_radius',
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
                    '{{WRAPPER}} .oxi_addons__card_content_style_1 .oxi_addons__image_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
         $this->add_responsive_control(
            'oxi_addons_slider_padding',
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
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__card_content_style_1 .oxi_addons__image_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
         $this->add_responsive_control(
            'oxi_addons_slider_margin',
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
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__card_content_style_1 .oxi_addons__image_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Color & Typography', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
            'oxi_addons_slider_content_color', $this->style, [
            'label' => __('Content Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'oxi_addons_slider_content_color_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
             'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-flip-box-style-1 .oxi-addons-flip-box-front-heading-data' => '',
            ]
                ]
        );
        
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Navigator Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_video_box_play_icon_switcher' => 'yes'
            ]
                ]
        );
        $this->add_control(
            'oxi_addons_slider_navigator', $this->style, [
            'label' => __('Navigator', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
            'oxi_addons_slider_prev_icon', $this->style, [
                        'label' => esc_html__('Previous Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fa fa-arrow-left',
                        'condition' => [
                            'oxi_addons_slider_navigator' => 'yes'
                        ]
                ]
        );
        $this->add_control(
            'oxi_addons_slider_next_icon', $this->style, [
                        'label' => esc_html__('Next Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fa fa-arrow-right',
                        'condition' => [
                            'oxi_addons_slider_navigator' => 'yes'
                        ]
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_slider_icon_size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_slider_bg_size', $this->style, [
            'label' => __('Background Size', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
            'oxi_addons_slider_icon_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::GRADIENT,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
            'oxi_addons_slider_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'color:{{VALUE}};',
            ],
                ]
        );
         $this->add_group_control(
            'oxi_addons_slider_icon_border', $this->style, [
                'label' => __('Border', SHORTCODE_ADDOONS),
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa-el-device-wrapper svg .back-shape, {{WRAPPER}} .sa-el-device-skin-black svg .side-shape' => 'fill:{{VALUE}}',
            ],
                ]
        );
         $this->add_group_control(
            'oxi_addons_slider_icon_box_shadow', $this->style, [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa-el-device-wrapper svg .back-shape, {{WRAPPER}} .sa-el-device-skin-black svg .side-shape' => 'fill:{{VALUE}}',
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_slider_icon_border_radius', $this->style, [
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
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_slider_icon_margin', $this->style, [
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
                    'max' => 50,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-device-container-style-3 .oxi-addons-device-play-icon-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
