<?php

namespace SHORTCODE_ADDONS_UPLOAD\Smooth_scroll\Admin;

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
                'shortcode-addons-general'
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-general-sec', [
            'label' => esc_html__('Scrolling Core', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );



        $this->add_control(
                'sa_ss_frame_rate', $this->style, [
            'label' => __('Frame Rate', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 100,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_ss_anitmation_time', $this->style, [
            'label' => __('Animation Time', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 100,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 10000,
                    'step' => 1,
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_ss_step_size', $this->style, [
            'label' => __('Step Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 100,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-image', [
            'label' => esc_html__('Pulse ratio of "tail" to "acceleration', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_ss_pa', $this->style, [
            'label' => __('Plus Algorithm', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('YES', SHORTCODE_ADDOONS),
            'label_off' => __('NO', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ss_ps', $this->style, [
            'label' => __('Plus Scale', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 4,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_ss_pn', $this->style, [
            'label' => __('Plus Normalize', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 1,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ]
            ],
                ]
        );



        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-image', [
            'label' => esc_html__('Acceleration', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ss_ad', $this->style, [
            'label' => __('Acceleration Delta', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ]
            ],
                ]
        );
        $this->add_control(
                'sa_ss_am', $this->style, [
            'label' => __('Acceleration Max', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 3,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ]
            ],
                ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-image', [
            'label' => esc_html__('Keyboard Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_ss_ke', $this->style, [
            'label' => __('Keyboard Enable', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('YES', SHORTCODE_ADDOONS),
            'label_off' => __('NO', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ss_as', $this->style, [
            'label' => __('Arrow Scroll', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ]
            ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-image', [
            'label' => esc_html__('Other Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_ss_tps', $this->style, [
            'label' => __('Touch pad Support', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('YES', SHORTCODE_ADDOONS),
            'label_off' => __('NO', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_ss_fs', $this->style, [
            'label' => __('Fixed Support', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('YES', SHORTCODE_ADDOONS),
            'label_off' => __('NO', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->end_controls_section();
        
        
        
          $this->start_controls_section(
                'shortcode-addons-image', [
            'label' => esc_html__('Responsive', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
           $this->add_control(
                'sa_ss_rss', $this->style, [
            'label' => __('Tablet/Mobile Smooth Scroll', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('YES', SHORTCODE_ADDOONS),
            'label_off' => __('NO', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->end_controls_section();




        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
