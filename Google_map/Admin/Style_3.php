<?php

namespace SHORTCODE_ADDONS_UPLOAD\Google_map\Admin;

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

class Style_3 extends AdminStyle {

    public function register_controls() {

        $this->start_section_tabs(
                'shortcode-addons-start-tabs'
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Maps information', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa_gm_repeater', $this->style, [
            'label' => __('Edit or Delete your Maps information', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'button' => 'Add Location',
            'fields' => [
                'sa_gm_latitude' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Latitude', SHORTCODE_ADDOONS),
                    'default' => '1.361827',
                    'step' => 0.1111
                ],
                'sa_gm_Longitude' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Longitude', SHORTCODE_ADDOONS),
                    'default' => '103.853342',
                    'step' => 0.1111
                ],
                'sa_gm_name' => [
                    'type' => Controls::TEXT,
                    'label' => __('Name', SHORTCODE_ADDOONS),
                    'placeholder' => __('Enter A name', SHORTCODE_ADDOONS),
                    'default' => 'Location 01',
                ],
                'sa_gm_locatio_title' => [
                    'type' => Controls::TEXT,
                    'label' => __('Location Title', SHORTCODE_ADDOONS),
                    'placeholder' => __('Location Title', SHORTCODE_ADDOONS),
                    'default' => 'Title 01',
                ],
                'sa_gm_locatio_info' => [
                    'type' => Controls::TEXTAREA,
                    'label' => __('Location Information', SHORTCODE_ADDOONS),
                    'placeholder' => __('Location Information', SHORTCODE_ADDOONS),
                    'default' => '<h4>Google Map</h4> <hr> A very powerful Google Map implementation for Elementor with 8+ Map Types including Basic with Marker, Multiple Markers, Static, Polylines, Polygons, Overlay.',
                ],
                'sa_oh_start_tabs' => [
                    'controller' => 'start_controls_tabs',
                    'options' => [
                        'title' => esc_html__('Icon Image', SHORTCODE_ADDOONS),
                    ]
                ],
                'sa_oh_start_tab_1' => [
                    'controller' => 'start_controls_tab',
                ],
                'sa_gm_icon_media' => [
                    'label' => __('Icon Image', SHORTCODE_ADDOONS),
                    'type' => Controls::MEDIA,
                    'controller' => 'add_group_control',
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.oxilab.org/wp-content/uploads/2019/06/pointer-cross-christian-sign-map-place-church-512-e1561014250852.png',
                    ],
                ],
                'sa_oh_end_tab_3' => [
                    'controller' => 'end_controls_tab',
                ],
                'sa_oh_end_tabs' => [
                    'controller' => 'end_controls_tabs',
                ],
            ],
            'title_field' => 'sa_gm_name',
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Info Window', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_gm_Location_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .gm-style .gm-style-iw-d' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gm_location_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .gm-style .gm-style-iw-d' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gm_location_width', $this->style, [
            'label' => __('Info Window Width', SHORTCODE_ADDOONS),
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
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .gm-style .gm-style-iw-d' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_gm_api', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('API Key', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_responsive_control(
                'sa_gm_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
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
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .map-style3' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gm_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .map-style3' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_gm_place_zoom', $this->style, [
            'type' => Controls::NUMBER,
            'label' => __('Zoom Level', SHORTCODE_ADDOONS),
            'loader' => TRUE,
            'default' => 14,
                ]
        );
        $this->add_control(
                'sa_gm_map_ui', $this->style, [
            'label' => __('Default Map UI', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'sa_gm_color_theme', $this->style, [
            'label' => __('Color Themes', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => '3',
            'loader' => TRUE,
            'options' => [
                '1' => __('Standard', SHORTCODE_ADDOONS),
                '2' => __('Silver', SHORTCODE_ADDOONS),
                '3' => __('Retro', SHORTCODE_ADDOONS),
                '4' => __('Dark', SHORTCODE_ADDOONS),
                '5' => __('Night', SHORTCODE_ADDOONS),
                '6' => __('Aubergine', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gm_padding', $this->style, [
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
                '{{WRAPPER}} .map-position-style3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gm_margin', $this->style, [
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
                '{{WRAPPER}} .map-position-style3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_gm_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );

        $this->end_controls_section();




        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
