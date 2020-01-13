<?php

namespace SHORTCODE_ADDONS_UPLOAD\Open_street_map\Admin;

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
                'shortcode-addons-start-tabs'
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
            'oxi_addons_street_map_api', $this->style, [
                    'type' => Controls::TEXT,
                    'label' => __('API KEY', SHORTCODE_ADDOONS),
                ] 
        );
        $this->add_repeater_control(
                'oxi_addons_street_map_style_1', $this->style, [
            'label' => __('Marker', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'separator' => true,
            'fields' => [
                'oxi_addons_street_map_title' => [
                    'type' => Controls::TEXT,
                    'label' => __('Title', SHORTCODE_ADDOONS),
                ],
                'oxi_addons_street_map_latitude' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Latitude', SHORTCODE_ADDOONS),
                    'default' => '1.361827',
                    'step' => 0.1111
                ],
                'oxi_addons_street_map_Longitude' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Longitude', SHORTCODE_ADDOONS),
                    'default' => '103.853342',
                    'step' => 0.1111
                ],
                'oxi_addons_street_map_content' => [
                    'type' => Controls::TEXTAREA,
                    'label' => __('Content', SHORTCODE_ADDOONS),
                ],
                'oxi_addons_street_map_content' => [
                    'type' => Controls::MEDIA,
                    'label' => __('Content', SHORTCODE_ADDOONS),
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                    ],
                    'controller' => 'add_group_control',
                ],
                
            ],
            'title_field' => 'oxi_addons_slider_text',
            'button' => 'Add New Marker',
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Map Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_zoom_control', $this->style, [
            'label' => __('Zoom Control', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_zoom', $this->style, [
            'label' => __('Zoom', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
                
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info-style1' => 'width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'oxi_addons_street_map_zoom_control' => 'yes',
            ]
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_street_map_zoom', $this->style, [
            'label' => __('Map Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
                
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info-style1' => 'width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'oxi_addons_street_map_zoom_control' => 'yes',
            ]
                ]
        );


        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Tooltip', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_text_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info_body-style1' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_close_b_color', $this->style, [
            'label' => __('Close Button Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info_body-style1' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_close_bh_color', $this->style, [
            'label' => __('Close Button Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info_body-style1' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oxi_addons_street_map_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
             'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .flipster__nav__item a' => '',
            ]
                ]
        );
        $this->add_group_control(
            'oxi_addons_street_map_background', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1 .flip-custom-nav' => '',
            ],
                ]
        );
        $this->add_group_control(
            'oxi_addons_street_map_border', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1 .flip-custom-nav' => '',
            ],
                ]
        );
        $this->add_group_control(
            'oxi_addons_street_map_box_shadow', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1 .flip-custom-nav' => '',
            ],
                ]
        );
        $this->add_responsive_control(
            'oxi_addons_street_map_border_radius',
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
                    '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'oxi_addons_street_map_padding',
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
                    '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
         $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Zoom Control', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'oxi_addons_street_map_zoom_control' => 'yes',
            ]
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info_body-style1' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
            'oxi_addons_street_map_background', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1 .flip-custom-nav' => '',
            ],
                ]
        );
        $this->add_group_control(
            'oxi_addons_street_map_border', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1 .flip-custom-nav' => '',
            ],
                ]
        );
        $this->add_responsive_control(
            'oxi_addons_street_map_border_radius',
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
                    '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_control(
                'oxi_addons_street_map_bar_color', $this->style, [
            'label' => __('Bar Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .oxi_add_gmap_location_info_body-style1' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
            'oxi_addons_street_map_bar_width',
            $this->style,
            [
                'label' => __('Bar Width', SHORTCODE_ADDOONS),
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
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-wrapper-flip-carousel-style-1' => 'width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
