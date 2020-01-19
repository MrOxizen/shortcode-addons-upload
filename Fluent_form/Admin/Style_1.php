<?php

namespace SHORTCODE_ADDONS_UPLOAD\Fluent_form\Admin;

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

    public function sa_addons_get_fluent_form() {
        $options = array();

        if (defined('FLUENTFORM')) {
            global $wpdb;

            $result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}fluentform_forms");
            if ($result) {
                $options[0] = esc_html__('Select a Fluent Form', SA_EL_ADDONS_TEXTDOMAIN);
                foreach ($result as $form) {
                    $options[$form->id] = $form->title;
                }
            } else {
                $options[0] = esc_html__('Create a Form First', SA_EL_ADDONS_TEXTDOMAIN);
            }
        }

        return $options;
    }

    public function register_controls() {

        if (!defined('FLUENTFORM')) {
            $this->start_section_header(
                    'shortcode-addons-start-tabs', [
                'options' => [
                    'warning-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                ]
                    ]
            );
        } else {
            $this->start_section_header(
                    'shortcode-addons-start-tabs', [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'input-settings' => esc_html__('Inputs & Button Settings', SHORTCODE_ADDOONS),
                    'title-description' => esc_html__('Title & Description', SHORTCODE_ADDOONS),
                ]
                    ]
            );
        }
        if (!defined('FLUENTFORM')) {
            $this->start_section_tabs(
                    'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'warning-settings'
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
            echo " <style>
                 .oxi-fluent-form-admin{
                       color: #8a6d3b;
                       background-color: #fcf8e3;
                       border-color: #f9f0c3;
                       padding: 15px;
                       border-left: 5px solid transparent;
                       position: relative;
                       font-size: 12px;
                       line-height: 1.5;
                       text-align: left;
                       font-size: 14px;
                       text-align: center;
                     }    
                 </style>";
            echo '<div class="oxi-fluent-form-admin"><strong>Fluent Form</strong> is not installed/activated on your site. Please install and activate <a href="plugin-install.php?s=fluentform&tab=search&type=term" target="_blank">Fluent Form</a> first </div>';

            $this->end_controls_section();
            $this->end_section_devider();
            $this->end_section_tabs();
        } else {

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
                'label' => esc_html__('Fluent Forms', SHORTCODE_ADDOONS),
                'showing' => true,
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_data',
                    $this->style,
                    [
                        'label' => __('Fluent Form', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'loader' => true,
                        'options' => $this->sa_addons_get_fluent_form(),
                    ]
            );

            $this->add_control(
                    'sa_fluent_form_title_description_switcher',
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
                    'sa_fluent_form_heading_text',
                    $this->style,
                    [
                        'label' => __('Heading', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Form Title',
                        'placeholder' => 'Form Title',
                        'condition' => [
                            'sa_fluent_form_title_description_switcher' => 'yes',
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-title' => '',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_details_text',
                    $this->style,
                    [
                        'label' => __('Description', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
                        'placeholder' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s',
                        'condition' => [
                            'sa_fluent_form_title_description_switcher' => 'yes',
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-description' => '',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_lebel_switcher',
                    $this->style,
                    [
                        'label' => __('Labels', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'yes',
                        'loader' => true,
                        'label_on' => __('show', SHORTCODE_ADDOONS),
                        'label_off' => __('hide', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_placeholder_switcher',
                    $this->style,
                    [
                        'label' => __('Placeholder', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'yes',
                        'loader' => true,
                        'label_on' => __('show', SHORTCODE_ADDOONS),
                        'label_off' => __('hide', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_errors_switcher',
                    $this->style,
                    [
                        'label' => __('Errors', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'yes',
                        'loader' => true,
                        'label_on' => __('show', SHORTCODE_ADDOONS),
                        'label_off' => __('hide', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ]
            );

            $this->end_controls_section();
            $this->end_section_devider();
            $this->start_section_devider();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Form Settings', SHORTCODE_ADDOONS),
                'showing' => true,
                    ]
            );

            $this->add_group_control(
                    'sa_addons_fluent_form_main_background',
                    $this->style,
                    [
                        'type' => Controls::BACKGROUND,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => '',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_addons_fluent_form_main_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#666',
                        'selector' => [
                            '{{WRAPPER}} .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group a' => 'color:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_addons_fluent_form_main_fl_positon',
                    $this->style,
                    [
                        'label' => __('Alignment', SHORTCODE_ADDOONS),
                        'type' => Controls::CHOOSE,
                        'operator' => Controls::OPERATOR_ICON,
                        'default' => '0 auto',
                        'options' => [
                            '0 auto 0 0' => [
                                'title' => __('Left', SHORTCODE_ADDOONS),
                                'icon' => 'fas fa-align-left',
                            ],
                            '0 auto' => [
                                '0 auto' => __('Center', SHORTCODE_ADDOONS),
                                'icon' => 'fas fa-align-center',
                            ],
                            '0 0 0 auto' => [
                                'title' => __('Right', SHORTCODE_ADDOONS),
                                'icon' => 'fas fa-align-right',
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => 'margin: {{VALUE}};',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_form_max_width',
                    $this->style,
                    [
                        'label' => __('Max Width', SHORTCODE_ADDOONS),
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_addons_fluent_form_button_border',
                    $this->style,
                    [
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => '',
                        ],
                    ]
            );

            $this->add_responsive_control(
                    'sa_addons_fluent_form_radius',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_addons_fluent_form_shadow',
                    $this->style,
                    [
                        'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                        'type' => Controls::BOXSHADOW,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => '',
                        ],
                    ]
            );

            $this->add_responsive_control(
                    'sa_addons_fluent_form_padding',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                        'separator' => true,
                    ]
            );
            $this->add_responsive_control(
                    'sa_addons_fluent_form_margin',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->end_controls_section();

            $this->end_section_devider();
            $this->end_section_tabs();
            $this->start_section_tabs(
                    'shortcode-addons-start-tabs', [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'input-settings',
                ],
                    ]
            );

            $this->start_section_devider();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Labels Settings', SHORTCODE_ADDOONS),
                'showing' => true,
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_labels_typo',
                    $this->style,
                    [
                        'label' => __('Typography', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group label' => '',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_labels_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#3d3d3d',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group label' => 'color:{{VALUE}};',
                        ],
                    ]
            );

            $this->end_controls_section();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Input & Textarea Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_inputs_typo',
                    $this->style,
                    [
                        'label' => __('Typography', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            'selector' => [
                                '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
                                '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => '',
                                '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => '',
                            ],
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_inputs_text_position',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'text-align: {{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'text-align: {{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'text-align: {{VALUE}};',
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
                    'sa_fluent_form_inputs_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#3d3d3d',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'color:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_inputs_color_bg',
                    $this->style,
                    [
                        'label' => __('Background Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => 'rgb(235, 235, 235)',
                        'oparetor' => 'RGB',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'background :{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'background :{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'background :{{VALUE}};',
                        ],
                    ]
            );

            $this->end_controls_tab();
            $this->start_controls_tab();
            $this->add_control(
                    'sa_fluent_form_inputs_color_bg_focus',
                    $this->style,
                    [
                        'label' => __('Background Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => 'rgba(240, 251, 255, 1)',
                        'oparetor' => 'RGB',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus' => 'background: {{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea:focus' => 'background: {{VALUE}};',
                        ],
                    ]
            );

            $this->add_group_control(
                    'sa_fluent_form_inputs_color_border_focus',
                    $this->style,
                    [
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus' => '',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea:focus' => '',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_inputs_colorfocus_shadow',
                    $this->style,
                    [
                        'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                        'type' => Controls::BOXSHADOW,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):focus' => '',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea:focus' => '',
                        ],
                    ]
            );
            $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->add_control(
                    'sa_fluent_form_inputs_separtor',
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
                    'sa_fluent_form_input_width',
                    $this->style,
                    [
                        'label' => __('Width', SHORTCODE_ADDOONS),
                        'type' => Controls::SLIDER,
                        'default' => [
                            'unit' => '%',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'width: {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'width: {{SIZE}}{{UNIT}};'
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_input_height',
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
                                'max' => 250,
                                'step' => 1,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 10,
                                'step' => 1,
                            ],
                            'em' => [
                                'min' => 0,
                                'max' => 5,
                                'step' => 0.1,
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'height : {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'height : {{SIZE}}{{UNIT}};'
                        ]
                    ]
            );
            $this->end_controls_tab();
            $this->start_controls_tab();
            $this->add_responsive_control(
                    'sa_fluent_form_textarea_width',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'width : {{SIZE}}{{UNIT}}; ',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_textarea_height',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'height: {{SIZE}}{{UNIT}}; ',
                        ],
                    ]
            );
            $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->add_control(
                    'sa_fluent_form_inputs_separtor',
                    $this->style,
                    [
                        'label' => __('', SHORTCODE_ADDOONS),
                        'type' => Controls::SEPARATOR,
                        Controls::SEPARATOR => true,
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_input_text_indent',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'text-indent: {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'text-indent: {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'text-indent: {{SIZE}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_input_text_spacing',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_inputs_border',
                    $this->style,
                    [
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => '',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => '',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_inputs_border_radius',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_inputs_padding',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_inputs_shadow',
                    $this->style,
                    [
                        'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                        'type' => Controls::BOXSHADOW,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])' => '',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group select' => '',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea' => '',
                        ],
                    ]
            );
            $this->end_controls_section();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Placeholder', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );

            $this->add_control(
                    'sa_fluent_form_placeholder_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#858585',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group input::-webkit-input-placeholder' => 'color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group textarea::-webkit-input-placeholder' => 'color:{{VALUE}};',
                        ],
                    ]
            );
            $this->end_controls_section();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Success Message ', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_success_typo',
                    $this->style,
                    [
                        'label' => __('Typography', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-message-success' => '',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_success_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#2e2e2e',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-message-success' => 'color:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_success_color_bg',
                    $this->style,
                    [
                        'label' => __('Background Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => 'rgba(73, 255, 87, 0.88)',
                        'oparetor' => 'RGB',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-message-success' => 'background-color:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_success_border',
                    $this->style,
                    [
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-message-success' => '',
                        ],
                    ]
            );
            $this->end_controls_section();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Errors', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );

            $this->add_control(
                    'sa_fluent_form_erorr_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#eb1717',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .error.text-danger' => 'color:{{VALUE}}!important;',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_erorr_color_typo',
                    $this->style,
                    [
                        'label' => __('Typography', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .error.text-danger' => '',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_erorr_color_msg_padding',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .error.text-danger' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_erorr_color_msg_margin',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .error.text-danger' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                        ],
                    ]
            );
            $this->end_controls_section();
            $this->end_section_devider();
            $this->start_section_devider();

            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Radio & Checkbox', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_radio_checkbox_swicher',
                    $this->style,
                    [
                        'label' => __('Custom Styles', SHORTCODE_ADDOONS),
                        'type' => Controls::SWITCHER,
                        'default' => 'no',
                        'label_on' => __('Yes', SHORTCODE_ADDOONS),
                        'label_off' => __('No', SHORTCODE_ADDOONS),
                        'return_value' => 'yes',
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_radio_checkbox_size',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="checkbox"]' => 'width : {{SIZE}}{{UNIT}}; height : {{SIZE}}{{UNIT}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="radio"]' => 'width : {{SIZE}}{{UNIT}}; height : {{SIZE}}{{UNIT}};',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );

            $this->start_controls_tabs(
                    'shortcode-addons-start-tabs',
                    [
                        'options' => [
                            'normal' => esc_html__('Radio', SHORTCODE_ADDOONS),
                            'checked' => esc_html__('Checked', SHORTCODE_ADDOONS),
                        ],
                    ]
            );
            $this->start_controls_tab();
            $this->add_control(
                    'sa_fluent_form_radio_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#3d3d3d',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="checkbox"]' => 'color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="radio"]' => 'color:{{VALUE}};',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_radio_border_width',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="checkbox"]' => 'border-width: {{SIZE}}px;',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="radio"]' => 'border-width: {{SIZE}}px;',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_radio_border_color',
                    $this->style,
                    [
                        'label' => __('Border Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#3d3d3d',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="checkbox"]' => 'border-color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="radio"]' => 'border-color:{{VALUE}};',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );

            $this->end_controls_tab();
            $this->start_controls_tab();
            $this->add_control(
                    'sa_fluent_form_checkbox_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#3d3d3d',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1  .oxi-custom-radio-checkbox input[type="checkbox"]:checked:before ' => 'color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1  .oxi-custom-radio-checkbox input[type="radio"]:checked:before' => 'color:{{VALUE}};',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_checkbox_border_width',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="checkbox"]:checked:before' => 'border-width: {{SIZE}}px;',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="radio"]:checked:before' => 'border-width: {{SIZE}}px;',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_checkbox_border_color',
                    $this->style,
                    [
                        'label' => __('Border Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#3d3d3d',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="checkbox"]:checked' => 'border-color:{{VALUE}};',
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-custom-radio-checkbox input[type="radio"]:checked' => 'border-color:{{VALUE}};',
                        ],
                        'condition' => [
                            'sa_fluent_form_radio_checkbox_swicher' => 'yes',
                        ],
                    ]
            );

            $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->end_controls_section();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Address Line Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_address_line_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#242424',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .fluent-address label' => 'color:{{VALUE}};',
                        ],
                    ]
            );

            $this->add_group_control(
                    'sa_fluent_form_address_line_typo',
                    $this->style,
                    [
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .fluent-address label' => '',
                        ],
                    ]
            );
            $this->end_controls_section();
            $this->start_controls_section(
                    'shortcode-addons', [
                'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                    ]
            );

            $this->add_group_control(
                    'sa_fluent_form_button_typo',
                    $this->style,
                    [
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1' => '',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_button_width_true_false',
                    $this->style,
                    [
                        'label' => __('Width', SHORTCODE_ADDOONS),
                        'separator' => true,
                        'type' => Controls::CHOOSE,
                        'operator' => Controls::OPERATOR_TEXT,
                        'default' => 'oxi-fluentform-form-button-full-width',
                        'options' => [
                            'oxi-fluentform-form-button-full-width' => [
                                'title' => __('Full width', SHORTCODE_ADDOONS),
                            ],
                            'oxi-fluentform-form-button-custom' => [
                                'title' => __('Custom', SHORTCODE_ADDOONS),
                            ],
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper ' => '',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_button_align_position',
                    $this->style,
                    [
                        'label' => __('Alignment', SHORTCODE_ADDOONS),
                        'type' => Controls::CHOOSE,
                        'operator' => Controls::OPERATOR_ICON,
                        'default' => 'oxi-fluentform-form-button-left',
                        'options' => [
                            'oxi-fluentform-form-button-left' => [
                                'title' => __('Left', SHORTCODE_ADDOONS),
                                'icon' => 'fas fa-align-left',
                            ],
                            'oxi-fluentform-form-button-center' => [
                                'title' => __('Center', SHORTCODE_ADDOONS),
                                'icon' => 'fas fa-align-center',
                            ],
                            'oxi-fluentform-form-button-right' => [
                                'title' => __('Right', SHORTCODE_ADDOONS),
                                'icon' => 'fas fa-align-right',
                            ],
                        ],
                        'condition' => [
                            'sa_fluent_form_button_width_true_false' => 'oxi-fluentform-form-button-custom',
                        ],
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper ' => '',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_button_width',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1  .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => 'width:{{SIZE}}{{UNIT}};',
                        ],
                        'condition' => [
                            'sa_fluent_form_button_width_true_false' => 'oxi-fluentform-form-button-custom',
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
                    'sa_fluent_form_button_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#fff',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => 'color:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_button_bg_color',
                    $this->style,
                    [
                        'label' => __('Background', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'oparetor' => 'RGB',
                        'default' => 'rgba(95, 61, 153, 1)',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => 'background:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_button_border',
                    $this->style,
                    [
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => '',
                        ],
                    ]
            );

            $this->add_responsive_control(
                    'sa_fluent_form_button_border-radius',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->end_controls_tab();
            $this->start_controls_tab();
            $this->add_control(
                    'sa_fluent_form_button_h_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#fff',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit:hover' => 'color:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_button_bg_h_color',
                    $this->style,
                    [
                        'label' => __('Background', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'oparetor' => 'RGB',
                        'default' => 'rgba(95, 61, 153, 1)',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit:hover' => 'background:{{VALUE}};',
                        ],
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_button_h_border',
                    $this->style,
                    [
                        'type' => Controls::BORDER,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit:hover' => '',
                        ],
                    ]
            );

            $this->add_responsive_control(
                    'sa_fluent_form_button_h_border-radius',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->add_control(
                    'sa_fluent_form_inputs_separator',
                    $this->style,
                    [
                        'label' => __('', SHORTCODE_ADDOONS),
                        'type' => Controls::SEPARATOR,
                        Controls::SEPARATOR => true,
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_button_padding',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_button_margin',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
            );

            $this->add_group_control(
                    'sa_fluent_form_button_box_shadow',
                    $this->style,
                    [
                        'type' => Controls::BOXSHADOW,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper .ff-el-group .ff-btn-submit' => '',
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
                    ]
            );

            $this->add_group_control(
                    'sa_fluent_form_title_typo',
                    $this->style,
                    [
                        'label' => __('Typography', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-title' => ''
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_title_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#2e2e2e',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-title' => 'color:{{VALUE}};'
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_title_padding',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
                    ]
            );
            $this->add_group_control(
                    'sa_fluent_form_description_typo',
                    $this->style,
                    [
                        'label' => __('Typography', SHORTCODE_ADDOONS),
                        'type' => Controls::TYPOGRAPHY,
                        'include' => Controls::ALIGNNORMAL,
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-description' => ''
                        ],
                    ]
            );
            $this->add_control(
                    'sa_fluent_form_description_color',
                    $this->style,
                    [
                        'label' => __('Color', SHORTCODE_ADDOONS),
                        'type' => Controls::COLOR,
                        'default' => '#424242',
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-description' => 'color:{{VALUE}};'
                        ],
                    ]
            );
            $this->add_responsive_control(
                    'sa_fluent_form_description_padding',
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
                            '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluentform-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                        ],
                    ]
            );
            $this->end_controls_section();
            $this->end_section_devider();
            $this->end_section_tabs();
        }
    }

}
