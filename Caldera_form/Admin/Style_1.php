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

/**
 * Get a list of all WPForms
 *
 * @return array
 */
    public function sa_get_caldera_form()
    {
        $options = array();

        if (class_exists('Caldera_Forms')) {
            $contact_forms = \Caldera_Forms_Forms::get_forms(true, true);

            if (!empty($contact_forms) && !is_wp_error($contact_forms)) {
                $options[0] = esc_html__('Select Caldera Form', SA_EL_ADDONS_TEXTDOMAIN);
                foreach ($contact_forms as $form) {
                    $options[$form['ID']] = $form['name'];
                }
            }
        } else {
            $options[0] = esc_html__('Create a Form First', SA_EL_ADDONS_TEXTDOMAIN);
        }
        return $options;
    }

    public function register_controls()
    {
        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'form-style' => esc_html__('Form Settings', SHORTCODE_ADDOONS),
                    'title-description' => esc_html__('Title & Description', SHORTCODE_ADDOONS),
                ],
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
                'loader' => true,
                'options' => $this->sa_get_caldera_form(),
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
                    'sa_caldera_form_title_description_switcher' => 'yes',
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__heading' => '',
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
                    'sa_caldera_form_title_description_switcher' => 'yes',
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__details' => '',
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
                'return_value' => 'oxi-labels-yes',
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
                'return_value' => 'placeholder-hide',
            ]
        );

        $this->add_control(
            'sa_caldera_form_errors_switcher',
            $this->style,
            [
                'label' => __('Error Messages', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'show',
                'options' => [
                    'error-message-show' => __('Show', SHORTCODE_ADDOONS),
                    'error-message-hide' => __('Hide', SHORTCODE_ADDOONS),
                ],

                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .has-error .parsley-required' => 'display: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );

        $this->add_responsive_control(
            'sa_caldera_form_main_position',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'flex-start',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}}  .oxi_addons__caldera_form_wrapper' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_position_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 5,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
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
                'label' => esc_html__('Labels Settings', SHORTCODE_ADDOONS),
                'showing' => true,
                'condition' => [
                    'sa_caldera_form_lebel_switcher' => 'oxi-labels-yes',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_labels_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group label' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_labels_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#666',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group label' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Input & Textarea Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_inputs_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_inputs_text_position',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'left',
                'options' => [
                    'left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'text-align: {{VALUE}};',
                ],
            ]
        ); 
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'focus' => esc_html__('Focus', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_caldera_form_inputs_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 ' => 'color:{{VALUE}};',
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_inputs_color_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_inputs_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_inputs_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => '',
                ],

            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_caldera_form_inputs_color_bg_hover',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea:focus' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_inputs_border_focus',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea:focus' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_inputs_shadow_focus',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea:focus' => '',
                ],

            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_caldera_form_inputs_separtor',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'input' => esc_html__('Input', SHORTCODE_ADDOONS),
                    'textarea' => esc_html__('Textarea', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_responsive_control(
            'sa_caldera_form_input_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
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
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'width: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_input_height',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 70,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'height: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
            'sa_caldera_form_textarea_width',
            $this->style,
            [
                'label' => __('Textarea Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
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
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_textarea_height',
            $this->style,
            [
                'label' => __('Textarea Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
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
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea' => 'height: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_caldera_form_inputs_separtor',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_input_text_indent',
            $this->style,
            [
                'label' => __('Text Indent', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 70,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'text-indent: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_input_text_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
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
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_caldera_form_inputs_border_radius',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_inputs_padding',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Placeholder', SHORTCODE_ADDOONS),
                'showing' => false,
                'condition' => [
                    'sa_caldera_form_placeholder_switcher' => 'placeholder-hide',
                ],

            ]
        );

        $this->add_control(
            'sa_caldera_form_placeholder_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input::-webkit-input-placeholder, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group textarea::-webkit-input-placeholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Success Message ', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_success_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .caldera-grid .alert-success' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_success_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .caldera-grid .alert-success' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_success_color_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .caldera-grid .alert-success' => 'background-color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_success_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .caldera-grid .alert-success' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Errors', SHORTCODE_ADDOONS),
                'showing' => false,

                'condition' => [
                    'sa_caldera_form_errors_switcher' => 'error-message-show',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_errors_heading', $this->style, [
                'label' => __('Error Messages', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'sa_caldera_form_erorr_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .has-error .help-block' => 'color:{{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa_caldera_form_errors_heading', $this->style, [
                'label' => __('Error Fields', SHORTCODE_ADDOONS),
                'type' => Controls::HEADING,
            ]
        );
        $this->add_control(
            'sa_caldera_form_errors_label_color',
            $this->style,
            [
                'label' => __('Label Color ', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .has-error .control-label' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_error_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .has-error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), {{WRAPPER}} .oxi_addons__caldera_form_style_1 .has-error textarea' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();

        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Field Description', SHORTCODE_ADDOONS),
                'showing' => true,
            ]
        );

        $this->add_group_control(
            'sa_caldera_form_field_description_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .help-block' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_field_description_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .help-block' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_field_description_spacing',
            $this->style,
            [
                'label' => __('Spacing', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .help-block' => 'padding-top: {{SIZE}}{{UNIT}};  width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Radio & Checkbox', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
        $this->add_control(
            'sa_caldera_form_radio_checkbox_swicher',
            $this->style,
            [
                'label' => __('Custom Styles', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => true,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'oxi-addons-custom-radio-checkbox',
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_radio_checkbox_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 1,
                        'max' => 20,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="checkbox"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 input[type="radio"]' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_caldera_form_radio_checkbox_swicher' => 'oxi-addons-custom-radio-checkbox',
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'checked' => esc_html__('Checked', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_caldera_form_radio_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="checkbox"], {{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="radio"]' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'sa_caldera_form_radio_checkbox_swicher' => 'oxi-addons-custom-radio-checkbox',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_radio_border_width',
            $this->style,
            [
                'label' => __('Border Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="checkbox"], {{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="radio"]' => 'border-width: {{SIZE}}px;',
                ],
                'condition' => [
                    'sa_caldera_form_radio_checkbox_swicher' => 'oxi-addons-custom-radio-checkbox',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_radio_border_color',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="checkbox"], {{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="radio"]' => 'border-color:{{VALUE}};',
                ],
                'condition' => [
                    'sa_caldera_form_radio_checkbox_swicher' => 'oxi-addons-custom-radio-checkbox',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_radio_border_radius',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="checkbox"], {{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="radio"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_caldera_form_radio_checkbox_swicher' => 'oxi-addons-custom-radio-checkbox',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_caldera_form_checkbox_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="checkbox"]:checked::before, {{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-addons-custom-radio-checkbox input[type="radio"]:checked::before' => 'background-color:{{VALUE}};',
                ],
                'condition' => [
                    'sa_caldera_form_radio_checkbox_swicher' => 'oxi-addons-custom-radio-checkbox',
                ],
            ]
        ); 
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => false,
            ]
        );
       
        $this->add_group_control(
            'sa_caldera_form_button_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_button_width_true_false',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'loader' => true,
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'oxi-button-full-width',
                'options' => [
                    'oxi-button-full-width' => [
                        'title' => __('Full width', SHORTCODE_ADDOONS),
                    ],
                    'oxi-button-custom-width' => [
                        'title' => __('Custom', SHORTCODE_ADDOONS),
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_button_position',
            $this->style,
            [
                'label' => __('Alignment', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'flex-start',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fas fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-button-custom-width .oxi-addons-button-position' => 'justify-content: {{VALUE}};',
                ],
                'condition' => [
                    'sa_caldera_form_button_width_true_false' => 'oxi-button-custom-width',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_button_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 300,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                    'rem' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 0.1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1.oxi-button-custom-width .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => 'width:{{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_caldera_form_button_width_true_false' => 'oxi-button-custom-width',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_caldera_form_button_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_button_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(95, 61, 153, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => 'background:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_caldera_form_button_border-radius',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_caldera_form_button_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#fff',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"]:hover, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]:hover' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_button_bg_color_hover',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(95, 61, 153, 1)',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"]:hover, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]:hover' => 'background:{{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_button_border_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"]:hover, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]:hover' => '',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_caldera_form_button_border-radius_hover',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"]:hover, {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_caldera_form_inputs_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => true,
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_button_padding',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_button_margin',
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
                        'min' => -300,
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            'sa_caldera_form_button_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="submit"], {{WRAPPER}} .oxi_addons__caldera_form_style_1 .form-group input[type="button"]' => '',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
        $this->start_section_tabs(
            'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'title-description',
                ],
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Title Settings', SHORTCODE_ADDOONS),
                'showing' => true,
                'condition' => [
                    'sa_caldera_form_title_description_switcher' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_title_tag',
            $this->style,
            [
                'label' => __('Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'h3',
                'loader' => true,
                'options' => [
                    'h1' => __('H1', SHORTCODE_ADDOONS),
                    'h2' => __('H2', SHORTCODE_ADDOONS),
                    'h3' => __('H3', SHORTCODE_ADDOONS),
                    'h4' => __('H4', SHORTCODE_ADDOONS),
                    'h5' => __('H5', SHORTCODE_ADDOONS),
                    'h6' => __('H6', SHORTCODE_ADDOONS),
                    'div' => __('DIV', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_title_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__heading' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#6e6e6e',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__heading' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_title_padding',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons', [
                'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                'showing' => true,
                'condition' => [
                    'sa_caldera_form_title_description_switcher' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            'sa_caldera_form_description_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__details' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_caldera_form_description_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#828282',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__details' => 'color:{{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_caldera_form_description_padding',
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
                    '{{WRAPPER}} .oxi_addons__caldera_form_style_1 .oxi_addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
