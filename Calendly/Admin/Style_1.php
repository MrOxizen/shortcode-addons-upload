<?php

namespace SHORTCODE_ADDONS_UPLOAD\Calendly\Admin;

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
                'sa_calendly_username', $this->style, [
            'label' => __('User Name', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'loader' => TRUE,
            'default' => '',
            'placeholder' => 'UserName',
           
                ]
        );
        $this->add_control(
                'sa_calendly_time', $this->style, [
            'label' => __('Time Slot', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => '15min',
            'loader' => TRUE,
            'options' => [
                '15min' => __('15 Minute', SHORTCODE_ADDOONS),
                '30min' => __('30 Minute', SHORTCODE_ADDOONS),
                '60min' => __('60 Minute', SHORTCODE_ADDOONS),
                'All' => __('All', SHORTCODE_ADDOONS),
            ],
            
                ]
        );
        $this->add_control(
                'sa_calendly_details', $this->style, [
            'label' => __('Hide Event Type Details?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_calendly_padding', $this->style, [
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
                    'step' => 1,
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
                '{{WRAPPER}} .oxi_addons_calendly .calendly-inline-widget' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_calendly_margin', $this->style, [
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
                    'step' => 1,
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
                '{{WRAPPER}} .oxi_addons_calendly' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_calendly_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
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
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_calendly .calendly-inline-widget' => 'height: {{SIZE}}{{UNIT}};'
            ],
                ]
        );





        $this->add_control(
                'sa_calendly_text_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_calendly_button_color', $this->style, [
            'label' => __('Button & Link Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_calendly_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'loader' => TRUE,
                ]
        );



        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
