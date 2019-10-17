<?php

namespace SHORTCODE_ADDONS_UPLOAD\Contact_form\Admin;

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
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_btn_icon_view', $this->style, [
            'label' => __('Form Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'sa_style1',
            'loader' => TRUE,
            'options' => [
                'sa_style1' => __('Style 01', SHORTCODE_ADDOONS),
                'sa_style2' => __('Style 02', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Admin Email', SHORTCODE_ADDOONS),
            'placeholder' => __('Admin Email', SHORTCODE_ADDOONS),
            'loader' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
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
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_btn_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Titles Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'title' => esc_html__('Title', SHORTCODE_ADDOONS),
                'hover' => esc_html__('SubTitle', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Title Text', SHORTCODE_ADDOONS),
            'placeholder' => __('Title Text', SHORTCODE_ADDOONS),
            'default' => 'Title Text',
            'loader' => TRUE,
                ]
        );
        $this->add_group_control(
                's_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_btn_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_btn_h_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 15,
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
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('SubTitle Text', SHORTCODE_ADDOONS),
            'placeholder' => __('SubTitle Text', SHORTCODE_ADDOONS),
            'default' => 'SubTitle Text',
            'loader' => TRUE,
                ]
        );
        $this->add_group_control(
                's_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_btn_text_h_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2:hover' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_btn_h_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2:hover' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 15,
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
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Input Field Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'name' => esc_html__('Name', SHORTCODE_ADDOONS),
                'email' => esc_html__('Email', SHORTCODE_ADDOONS),
                'massage' => esc_html__('Massage', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Name Title', SHORTCODE_ADDOONS),
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Name Error', SHORTCODE_ADDOONS),
            'loader' => TRUE,
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Email Title', SHORTCODE_ADDOONS),
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Email Error', SHORTCODE_ADDOONS),
             'loader' => TRUE,
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Massage Title', SHORTCODE_ADDOONS),
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_btn_text', $this->style, [
            'type' => Controls::TEXT,
            'label' => __('Massage Error', SHORTCODE_ADDOONS),
             'loader' => TRUE,
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_group_control(
                's_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
                    'separator'=> TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_btn_text_h_color', $this->style, [
            'label' => __('Title Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2:hover' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
