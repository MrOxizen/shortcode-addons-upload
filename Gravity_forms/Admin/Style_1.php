<?php

namespace SHORTCODE_ADDONS_UPLOAD\Gravity_forms\Admin;

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
        
        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'button-settings' => esc_html__('Inputs & Button Settings', SHORTCODE_ADDOONS),
                'others-settings' => esc_html__('Others Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
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
                'sa_gf_id', $this->style, [
            'type' => Controls::NUMBER,
            'label' => __('Gravity Form ID', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_gf_title', $this->style, [
            'label' => __('Gravity Form Title', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'true',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_gf_description', $this->style, [
            'label' => __('Gravity Form Description', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'true',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_gf_ajax', $this->style, [
            'label' => __('Gravity Form Ajax', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'true',
            'loader' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_gf_width', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 600,
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
                '$' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-gf-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_gf_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_error_alert_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Title & Description Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'title' => esc_html__('Title', SHORTCODE_ADDOONS),
                'des' => esc_html__('Description', SHORTCODE_ADDOONS),
                'lebel' => esc_html__('Label Description', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                's_gf_title_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_title' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_title_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_title' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_title_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_title' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_title_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_group_control(
                's_gf_description_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_wrapper span.gform_description' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_description_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_wrapper span.gform_description' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_description_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_wrapper span.gform_description' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_description_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .oxi-addons-gravity-form .gform_wrapper span.gform_description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_group_control(
                'sa_gf_lebel_description_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_description_below .gfield_description' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_lebel_description_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label' => 'color:{{VALUE}}',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label' => 'color:{{VALUE}}',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_description_below .gfield_description' => 'color:{{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_lebel_description_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_description_below .gfield_description' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_lebel_description_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .field_description_below .gfield_description' => '',
            ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('All Label Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_gf_label_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_label_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_gf_requard_label_color', $this->style, [
            'label' => __('Required Lebel Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_required' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_label_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_label_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .top_label .gfield_label, .gform_wrapper legend.gfield_label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'button-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Input & TextArea Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_gf_input_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_input_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_gf_input_text_color', $this->style, [
            'label' => __('Placeholder Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea::placeholder' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_input_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_input_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_input_error_br_clr', $this->style, [
            'label' => __('Error Border Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), ' => 'border-color:{{VALUE}};',
                '{{WRAPPER}} .gform_wrapper li.gfield_error textarea' => 'border-color:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_input_focus_br_color', $this->style, [
            'label' => __('Focus Border Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'separator' => TRUE,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus' => 'border-color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea:focus' => 'border-color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_input_focus_br', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus' => 'border-color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea:focus' => 'border-color:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_input_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_input_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_input_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_input_width', $this->style, [
            'label' => __('Text Area Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 220,
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
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea.medium' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_input_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 10,
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_gf_btn_fullwidth', $this->style, [
            'label' => __('Button Width', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'loader' => TRUE,
            'default' => 'full',
            'options' => [
                'standard' => [
                    'title' => __('Standard', SHORTCODE_ADDOONS),
                ],
                'full' => [
                    'title' => __('Full Width', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_btn_link', $this->style, [
            'type' => Controls::URL
                ]
        );
        $this->add_control(
                'sa_gf_btn_position', $this->style, [
            'label' => __('Button Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer' => 'text-align:{{VALUE}};'
            ],
                ]
        );



        $this->add_group_control(
                'sa_gf_btn_text_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => '',
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal View', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover View', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_gf_btn_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_btn_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => '',
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_btn_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_gf_btn_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_btn_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_btn_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => '',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa_gf_btn_text-h-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button:hover' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]:hover' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_btn_h-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]:hover' => '',
            ],]
        );

        $this->add_group_control(
                'sa_gf_btn_h-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]:hover' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_gf_btn_hover-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],]
        );
        $this->add_group_control(
                'sa_gf_btn_h-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]:hover' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_btn_h_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button:hover' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]:hover' => '',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_gf_btn_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 10,
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input.button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer input[type=submit]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input.button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_page_footer input[type=submit]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_btn_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 10,
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gform_footer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'others-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Alert & Error Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'des' => esc_html__('Error Massage', SHORTCODE_ADDOONS),
                'title' => esc_html__('Error Alert', SHORTCODE_ADDOONS),
                'lebel' => esc_html__('Success Alert', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                's_gf_error_massage_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn2 .oxi-button-btn2' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_error_massage_lbl_color', $this->style, [
            'label' => __('Lebel Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_error .gfield_label' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_gf_error_massage_msg_color', $this->style, [
            'label' => __('Massage Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .validation_message' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_error_massage_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .validation_message' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_group_control(
                's_gf_error_alert_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_error_alert_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#000000',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_error_alert_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => ''
            ],]
        );
        $this->add_group_control(
                'sa_gf_error_alert_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_gf_error_alert_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_gf_error_alert_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_error_alert_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_error_alert_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_error_alert_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper div.validation_error' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_group_control(
                's_gf_success_alert_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_success_alert_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_success_alert_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => ''
            ],]
        );
        $this->add_group_control(
                'sa_gf_success_alert_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_gf_success_alert_br_radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => FALSE,
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],]
        );
        $this->add_group_control(
                'sa_gf_success_alert_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_success_alert_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_success_alert_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_success_alert_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_confirmation_wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('CheckBox Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_gf_checkbox_width', $this->style, [
            'label' => __('CheckBox Hight & Width', SHORTCODE_ADDOONS),
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
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
             'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label:before' => 'height:{{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label:before' => 'height:{{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_checkbox_icon_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label:before' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label:before' => '',
            ],]
        );
        $this->add_responsive_control(
                'sa_gf_checkbox_icon_width', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
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
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_checkbox input[type=checkbox]:checked + label:before' => 'font-size:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent input[type=checkbox]:checked + label:before' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_checkbox_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_checkbox input[type=checkbox]:checked + label:before' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent input[type=checkbox]:checked + label:before' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_checkbox_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_checkbox_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label' => 'color:{{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_checkbox_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label:before' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label:before' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_checkbox_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_checkbox_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper ul.gfield_checkbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_checkbox_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_consent .gfield_consent_label:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Radio Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_gf_radio_width', $this->style, [
            'label' => __('Radio Hight & Width', SHORTCODE_ADDOONS),
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
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label:before' => 'height:{{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_gf_radio_icon_bg', $this->style, [
            'type' => Controls::COLOR,
            'label' => __('Radio Background', SHORTCODE_ADDOONS),
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label:before' => 'background:{{VALUE}};'
            ],]
        );
        $this->add_responsive_control(
                'sa_gf_radio_icon_width', $this->style, [
            'label' => __('Icon border', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-gr-form-sagf .ginput_container_radio .gfield_radio input[type=radio]:checked + label:before' => 'box-shadow: inset 0px 0px 0px {{SIZE}}px {{sa_gf_radio_icon_bg.VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_gf_radio_icon_color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .ginput_container_radio .gfield_radio input[type=radio]:checked + label:before' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_radio_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label:before' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_gf_radio_color', $this->style, [
            'label' => __('Text Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_checkbox li label' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label' => 'color:{{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                'sa_gf_radio_br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label:before' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_radio_tx_shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label:before' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_radio_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper ul.gfield_radio' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_gf_radio_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper .gfield_radio li label:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Select Box Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_gf_select_typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_gf_select_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio]' => 'color:{{VALUE}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select' => 'color:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_select_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select' => '',
            ],]
        );
        $this->add_control(
                'sa_gf_select_option_color', $this->style, [
            'label' => __('Option Color', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper select option' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_gf_select_option_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper select option' => ''
            ],]
        );

        $this->add_group_control(
                'sa_gf_select_br', $this->style, [
            'type' => Controls::BORDER,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_gf_select_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper select option' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_left select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield div.ginput_complex span.ginput_right select' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio]' => '',
                '{{WRAPPER}} .oxi-addons-gr-form-sagf .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield select' => '',
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
