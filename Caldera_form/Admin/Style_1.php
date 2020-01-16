<?php

namespace SHORTCODE_ADDONS_UPLOAD\Caldera_form\Admin;

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

class Style_1 extends AdminStyle
{

    public function register_controls()
    {
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'form-style' => esc_html__('Form Style', SHORTCODE_ADDOONS), 
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings',
                ],
            ]
        );

        $this->start_section_devider(); 
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
       
        $this->add_group_control(
            'sa_addons_caldera_form_main_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_caldera_form_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_caldera_form_radius',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                        'min' => -100,
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_caldera_form_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_addons_caldera_form_padding',
            $this->style,
            [
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
                        'min' => 0,
                        'max' => 300,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => true,
            ]
        );
        $this->add_responsive_control(
            'sa_addons_caldera_form_margin',
            $this->style,
            [
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section(); 
        $this->end_section_devider();
        $this->start_section_devider();
        
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Caldera Forms', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );  
        $this->add_control(
            'sa_caldera_form_data',
            $this->style,
            [
                'label' => __('Caldera Form', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT, 
                'loader' => TRUE,
                'options' => [
                    'none' => __('None', SHORTCODE_ADDOONS), 
                    'top' => __('Top', SHORTCODE_ADDOONS),  
                    'right' => __('Right', SHORTCODE_ADDOONS),  
                    'bottom' => __('Bottom', SHORTCODE_ADDOONS),  
                    'left' => __('Left', SHORTCODE_ADDOONS),  
                ],  
            ]
        );

        $this->add_control(
            'sa_caldera_form_title_description_switcher',
            $this->style,
            [
                'label' => __('Custom Title & Description', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes', 
            ]
        );
        $this->add_control(
            'sa_caldera_form_heading_text',
            $this->style,
            [
                'label' => __('Heading', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Lorem Ipsum is simply dummy text',
                'placeholder' => 'Lorem Ipsum is simply dummy text',
                'condition' => [
                    'sa_caldera_form_title_description_switcher' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_details_text',
            $this->style,
            [
                'label' => __('Description', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
                'placeholder' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                'condition' => [
                    'sa_caldera_form_title_description_switcher' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__details' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_lebel_switcher',
            $this->style,
            [
                'label' => __('Labels', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('show', SHORTCODE_ADDOONS),
                'label_off' => __('hide', SHORTCODE_ADDOONS),
                'return_value' => 'yes', 
            ]
        );
        $this->add_control(
            'sa_caldera_form_placeholder_switcher',
            $this->style,
            [
                'label' => __('Placeholder', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('show', SHORTCODE_ADDOONS),
                'label_off' => __('hide', SHORTCODE_ADDOONS),
                'return_value' => 'yes', 
            ]
        );
        $this->add_control(
            'sa_caldera_form_errors_switcher',
            $this->style,
            [
                'label' => __('Errors', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('show', SHORTCODE_ADDOONS),
                'label_off' => __('hide', SHORTCODE_ADDOONS),
                'return_value' => 'yes', 
            ]
        );
         
        $this->end_controls_section();  
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
            'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'form-style',
                ],
            ]
        );

        $this->start_section_devider(); 
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );
        
        $this->end_controls_section(); 
        $this->end_section_devider();
        $this->start_section_devider();
        
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Caldera Forms', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );  
        
        $this->end_controls_section();  
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
