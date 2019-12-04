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
                'sa_gm_latitude', $this->style, [
            'type' => Controls::NUMBER,
            'label' => __('Latitude', SHORTCODE_ADDOONS),
            'default' => '1.361827',
                ]
        );
        $this->add_control(
                'sa_gm_Longitude', $this->style, [
            'type' => Controls::NUMBER,
            'label' => __('Longitude', SHORTCODE_ADDOONS),
            'default' => '103.853342',
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
                '{{WRAPPER}} .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic' => 'max-width:{{SIZE}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic' => 'max-width:{{SIZE}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-align-btn1 .oxi-button-btn1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-align-btn1 .oxi-button-btn1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Map Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_gm_place_title', $this->style, [
            'type' => Controls::NUMBER,
            'label' => __('Zoom Level', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_gm_place_title', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Place Title', SHORTCODE_ADDOONS),
            'placeholder' => __('Place Title', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_group_control(
                'sa_gm_plase_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_1 .oxi_addons_FI_1_T' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gm_markar_location', $this->style, [
            'label' => __('Marker Animation', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        
        $this->end_controls_section();
        
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Info Window', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_gm_place_title', $this->style, [
            'type' => Controls::TEXTAREA,
            'label' => __('Location Information', SHORTCODE_ADDOONS),
            'placeholder' => __('Location Information', SHORTCODE_ADDOONS),
                ]
        );
         $this->add_group_control(
                'sa_gm_Location_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_1 .oxi_addons_FI_1_T' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gm_location_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#dddddd',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_FI_1 .oxi_addons_FI_1_T' => 'color:{{VALUE}};'
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
                '{{WRAPPER}} .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gm_location_height', $this->style, [
            'label' => __('Info Window Height', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-align-btn1 .oxi-button-btn1.sa-width-dymanic' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        
        $this->end_section_tabs();
    }

}
