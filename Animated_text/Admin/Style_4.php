<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text\Admin;

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

class Style_4 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
       
        $this->add_control(
            'sa-animated_text_speed',
            $this->style,
            [
                'label' => __('Speed', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => .5,
                ],
                'range' => [
                    'px' => [
                        'min' => 0.1,
                        'max' => 10,
                        'step' => .1,
                    ],
                    
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-4 .oxi-text-hidden' => 'transition: {{SIZE}}s ease-in;',
                 ]
            ]
        );

        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Second Text Information', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_animated_text',
            $this->style,
            [
                'type' => Controls::TEXT,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-4 .oxi-text-text' => '',
                ]
            ]
        );
        $this->add_group_control(
            'sa_animated_text_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-4 .oxi-text-text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_animated_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-4 .oxi-text-text' => 'color: {{VALUE}};',
                ]
            ]
        );
        $this->add_group_control(
            'sa_animated_text_shadow',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-animet-text-style-4 .oxi-text-text' => '',
                ]
            ]
        );
        

        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
