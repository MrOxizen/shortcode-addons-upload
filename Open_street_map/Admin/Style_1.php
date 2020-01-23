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
            'label' => esc_html__('Open Street Map', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_api', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('API KEY', SHORTCODE_ADDOONS),
            'default' => 'pk.eyJ1IjoiamFiaXI4OCIsImEiOiJjazNudnY0NTUxdXQzM2xzN2cxMDEwbGl3In0.M5CsHDwOIY6Kjzy-5-56Ig',
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
                'oxi_addons_street_map_scroll_wheel_zoom', $this->style, [
            'label' => __('Scroll Wheel Zoom', SHORTCODE_ADDOONS),
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
                'size' => '30',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
            ],
            'condition' => [
                'oxi_addons_street_map_zoom_control' => 'yes'
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_street_map_height', $this->style, [
            'label' => __('Map Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '300',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
            ],
            'selector' => [
                '{{WRAPPER}} .open_street_map_style_1' => 'height:{{SIZE}}px;'
            ],
            'condition' => [
                'oxi_addons_street_map_zoom_control' => 'yes'
            ],
                ]
        );



        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Marker', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'oxi_addons_street_map_marker', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'oxi_addons_street_map_title' => [
                    'type' => Controls::TEXT,
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'default' => 'USA',
                ],
                'oxi_addons_street_map_latitude' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Latitude', SHORTCODE_ADDOONS),
                    'default' => '23.800918',
                    'step' => 0.1111
                ],
                'oxi_addons_street_map_Longitude' => [
                    'type' => Controls::NUMBER,
                    'label' => __('Longitude', SHORTCODE_ADDOONS),
                    'default' => '90.360980',
                    'step' => 0.1111
                ],
                'oxi_addons_street_map_desc' => [
                    'type' => Controls::TEXTAREA,
                    'label' => __('Description', SHORTCODE_ADDOONS),
                    'default' => '12(House), blog D, Losangels',
                ],
                'oxi_addons_street_map_marker_image' => [
                    'type' => Controls::MEDIA,
                    'label' => __('Marker Image', SHORTCODE_ADDOONS),
                    'controller' => 'add_group_control',
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/12/location.svg',
                    ],
                ]
            ],
            'title_field' => 'oxi_addons_street_map_title',
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
                '{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-content' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_close_b_color', $this->style, [
            'label' => __('Close Button Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .leaflet-container a.leaflet-popup-close-button' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_close_bh_color', $this->style, [
            'label' => __('Close Button Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .leaflet-container a.leaflet-popup-close-button:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oxi_addons_street_map_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-content' => '',
            ]
                ]
        );
        $this->add_group_control(
                'oxi_addons_street_map_background', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-content-wrapper,{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-tip' => '',
            ],
                ]
        );
        $this->add_group_control(
                'oxi_addons_street_map_box_shadow', $this->style, [
            'label' => __('BoxShadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-content-wrapper' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_street_map_border_radius', $this->style, [
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
                '{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-content-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_street_map_padding', $this->style, [
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
                '{{WRAPPER}} .open_street_map_style_1 .leaflet-popup-content-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Zoom Control', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'oxi_addons_street_map_zoom_control' => 'yes'
            ]
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .leaflet-bar a.leaflet-disabled, {{WRAPPER}} .leaflet-bar a' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'oxi_addons_street_map_backgrounds', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .leaflet-bar a.leaflet-disabled, {{WRAPPER}} .leaflet-bar a' => '',
            ],
                ]
        );
        $this->add_group_control(
                'oxi_addons_street_map_borders', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .leaflet-bar a.leaflet-disabled, {{WRAPPER}} .leaflet-bar a' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'oxi_addons_street_map_border_radiuss', $this->style, [
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
                '{{WRAPPER}} .leaflet-bar a.leaflet-disabled, {{WRAPPER}} .leaflet-bar a, {{WRAPPER}} .leaflet-bar a:last-child' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_bar_color', $this->style, [
            'label' => __('Bar Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .leaflet-top .leaflet-control' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'oxi_addons_street_map_bar_width', $this->style, [
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
                '{{WRAPPER}} .leaflet-top .leaflet-control' => 'padding: {{SIZE}}px;'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
