<?php

namespace SHORTCODE_ADDONS_UPLOAD\Section_divider\Admin;

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

class Style_4 extends AdminStyle {

    public function register_controls() {

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_sd_align', $this->style, [
            'label' => __('Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'sa_sd_bottom',
            'options' => [
                'sa_sd_top' => [
                    'title' => __('Top', SHORTCODE_ADDOONS),
                ],
                'sa_sd_bottom' => [
                    'title' => __('Bottom', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_sd_Z-index', $this->style, [
            'type' => Controls::NUMBER,
            'label' => __('Z-Index', SHORTCODE_ADDOONS),
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-divider-sd4' => 'z-index:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_sd_scroll', $this->style, [
            'label' => __('Scrolling', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'sa_sd_scrolling',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'sa_sd_scrolling',
                ]
        );





        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Divider Style', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_responsive_control(
                'sa_sd_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'description' => 'Set your Section Width based on percentise',
            'default' => [
                'unit' => '%',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-divider-sd4' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_sd_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader'=> TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 120,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-divider-sd4' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control(
                'sa_sd_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'loader' => TRUE,
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
