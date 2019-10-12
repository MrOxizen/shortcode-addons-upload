<?php

namespace SHORTCODE_ADDONS_UPLOAD\Accordion\Admin;

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
                'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa-ac-columnds', $this->style, [
            'label' => __('Repeater', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_accordion_tab_title' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'controller'=> 'add_responsive_control',
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
                'sa_accordion_tab_le' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
                'sa_accordion_tab_titlse' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ],
               
                 'sa_accordion_tab_desc' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                ],
                'sa_accordion_tab_cont' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
                'sa-ac-column' => [
                    'label' => esc_html__('Tab URL', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller'=> 'add_group_control',
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
            ],
            'title_field' => 'sa_accordion_tab_le',
            'condition' => ['sa-ac-icon-position' => 'left']
                ]
        );

//        $this->add_group_control(
//                'sa-ac-column', $this->style, [
//            'type' => Controls::URL,
//            'condition' => ['sa-ac-icon-position' => 'left']
//                ]
//        );
        $this->add_control(
                'sa_els_text', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'placeholder' => 'Hi This is text',
            'selector' => [
                '{{WRAPPER}} .heading-data' => 'font-size:{{VALUE}}px',
            ],
                ]
        );

        $this->add_control(
                'sa-ac-openingdd', $this->style, [
            'label' => __('Opening Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'dashed',
            'options' => [
                'block' => __('Block', SHORTCODE_ADDOONS),
                'flex' => __('Flex', SHORTCODE_ADDOONS),
            ],
            'selector' => [
                '{{WRAPPER}} .heading-data' => 'display:{{VALUE}};',
                '{{WRAPPER}} .heading-data ' => ''
            ],
                ]
        );
        $this->add_control(
                'sa-ac-opening', $this->style, [
            'label' => __('Opening Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'one-by-one',
            'loader' => TRUE,
            'options' => [
                'one-by-one' => __('One by One', SHORTCODE_ADDOONS),
                'randomly' => __('Randomly', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_head_heading_alignment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-up',
                ],
                'center' => [
                    'title' => __('Center', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'right' => [
                    'title' => __('Right', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-heading-container ' => 'text-align:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa-ac-icon-position', $this->style, [
            'label' => __('Icon Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            //   'loader' => TRUE,
            'default' => '',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .heading-data' => 'text-align:{{VALUE}};',
                '{{WRAPPER}} .heading-data ' => ''
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
        $this->add_group_control(
                'sa-ac-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_ac_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            //'loader' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-ac-template-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'style-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Title Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-ac-title-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'loader' => FALSE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading .heading-data' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('Active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-title-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            //  'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading .heading-data' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}}' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-co-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}}:hover' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-br', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading' => ''
            ],
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-title-h-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .class2 .class' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-h-BG', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
            // '{{WRAPPER}} .oxi-addons-ac-template-1-heading:hover' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-h-br', $this->style, [
            'type' => Controls::BORDER,
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-title-a-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
                ]
        );
        $this->add_group_control(
                'sa-ac-title-a-bg', $this->style, [
            'type' => Controls::BACKGROUND,
                ]
        );
        $this->add_group_control(
                'sa-ac-title-a-br', $this->style, [
            'type' => Controls::BORDER,
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa-ac-title-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-bx-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}}' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-title-padding', $this->style, [
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
                ]
        );
        $this->add_responsive_control(
                'sa-ac-title-margin', $this->style, [
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
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Opening & Closing Icon', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .class .class' => 'padding-top: {{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('Active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-op-cl-icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fab fa-acquisitions-incorporated',
                ]
        );
        $this->add_control(
                'sa-ac-op-cl-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
                ]
        );
        $this->add_group_control(
                'sa-ac-op-cl-bg', $this->style, [
            'type' => Controls::BACKGROUND,
                ]
        );
        $this->add_group_control(
                'sa-ac-op-cl-bg', $this->style, [
            'type' => Controls::BORDER,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-op-cl-h-icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fab fa-acquisitions-incorporated',
                ]
        );
        $this->add_control(
                'sa-ac-op-cl-h-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
                ]
        );
        $this->add_group_control(
                'sa-ac-op-cl-h-bg', $this->style, [
            'type' => Controls::BACKGROUND,
                ]
        );
        $this->add_group_control(
                'sa-ac-op-cl-h-br', $this->style, [
            'type' => Controls::BORDER,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-h-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
                'sa-ac-op-cl-a-icon', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => '#787878',
                ]
        );
        $this->add_control(
                'sa-ac-op-cl-a-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
                ]
        );
        $this->add_group_control(
                'sa-ac-op-cl-a-bg', $this->style, [
            'type' => Controls::BACKGROUND,
                ]
        );
        $this->add_group_control(
                'sa-ac-op-cl-a-br', $this->style, [
            'type' => Controls::BORDER,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-a-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();



        $this->add_group_control(
                'sa-ac-op-cl-bx-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-margin', $this->style, [
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
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-ac-cont-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
                ]
        );
        $this->add_control(
                'sa-ac-cont-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
                ]
        );
        $this->add_group_control(
                'sa-ac-cont-bg', $this->style, [
            'type' => Controls::BACKGROUND,
                ]
        );
        $this->add_group_control(
                'sa-ac-cont-br', $this->style, [
            'type' => Controls::BORDER,
                ]
        );

        $this->add_responsive_control(
                'sa-ac-cont-br-radius', $this->style, [
            'label' => __('Border radius', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                ]
        );
        $this->add_group_control(
                'sa-ac-cont-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
                ]
        );
        $this->add_group_control(
                'sa-ac-cont-bx-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-cont-padding', $this->style, [
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
                ]
        );
        $this->add_responsive_control(
                'sa-ac-cont-margin', $this->style, [
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
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Accordions', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Accourdions Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Accordions Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';

        $this->add_control(
                'sa_el_initial_open', $this->style, [
            'label' => __('Initial Open?', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => '',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Social Icon Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa-ac_initial_open', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'button' => __('Add Social Icons', SHORTCODE_ADDOONS),
            'title_field' => 'sa-ac_initial_open_title',
            'fields' => [
                'sa-ac_initial_open_title' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
                'sa-ac_initial_open_titlse' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => TRUE,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ],
                'sa-ac_initial_open_desc' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
                'sa-ac_initial_open_cont' => [
                    'label' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => esc_html__('Tab Title', SHORTCODE_ADDOONS),
                ],
            ],
            
                ]
        );
        $this->end_controls_section();
        $this->add_control(
                'sa_el_text', $this->style, [
            'label' => __('Title', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Lorem Ipsum is simply dummy text',
            'placeholder' => 'Lorem Ipsum is simply dummy text',
                ]
        );

        $this->add_control(
                'sa_el_content', $this->style, [
            'label' => __('Content', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'placeholder' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                ]
        );
        echo '</div>';
    }

}
