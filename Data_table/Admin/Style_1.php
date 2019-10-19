<?php

namespace SHORTCODE_ADDONS_UPLOAD\Data_table\Admin;

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
                'body-settings' => esc_html__('Table Body Setting', SHORTCODE_ADDOONS),
                'input-button' => esc_html__('Input and button', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('Column Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa_datatable_column_repeater', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_datatable_head' => [
                    'label' => __('Column Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'ID',
                ],
            ],
            'title_field' => 'sa_datatable_head',
            'button' => 'Add Column',
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_datatable_bg_color', $this->style, [
            'type' => Controls::BACKGROUND,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => '',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_max_width', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '1100',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1800,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper ' => 'max-width: {{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_datatable_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_datatable_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => ''
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'body-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Table Head Setting ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_datatable_table_head_asc_desc', $this->style, [
            'label' => __('ASC DESC Visibility', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_datatable_table_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .oxi_datatable_th' => ''
            ],
                ]
        );
        $this->add_control(
            'sa_datatable_table_head_color', $this->style, [
        'label' => __('Color', SHORTCODE_ADDOONS),
        'type' => Controls::COLOR,
        'default' => '#ffffff',
        'selector' => [
            '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .oxi_datatable_th' => 'color: {{VALUE}} !important;',
        ],
            ]
    );
        $this->add_control(
                'sa_datatable_table_head_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(79, 173, 255, 1)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .oxi_datatable_th' => 'background-color: {{VALUE}} !important;',
            ],
                ]
        );

        $this->add_group_control(
                'sa_datatable_table_head_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .oxi_datatable_th' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_table_head_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .oxi_datatable_th' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Ascending/Descending Icon Setting ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'sa_datatable_table_head_asc_desc' => 'yes'
            ]
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Ascending', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Descending', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_ascending_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'loader' => TRUE,
            'default' => 'f30c',
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_ascending_icon_size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '16',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_asc:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_ascending_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_asc:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after' => 'color: {{VALUE}};',
      
                 ],
            ]
        );
        $this->add_responsive_control(
                'sa_datatable_ascending_icon_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_asc:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};', 
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_desc_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'loader' => TRUE,
            'default' => 'f30c',
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_desc_icon_size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '16',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_asc:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:before' => 'font-size: {{SIZE}}{{UNIT}};',
           ],
                ]
        );
        $this->add_control(
                'sa_datatable_desc_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_asc:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after' => 'color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:before' => 'color: {{VALUE}};',
        ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_desc_icon_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_asc:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};', 
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .oxi_datatable_thead .sorting_desc disabled:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};', 
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
            'label' => esc_html__('Table Body Setting ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_datatable_table_body_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .table.dataTable .oxi_datatable_body > tr > td' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_table_body_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .table.dataTable .oxi_datatable_body > tr > td' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_table_body_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .table.dataTable .oxi_datatable_body > tr > td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Even Odd Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Even', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Odd', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();

        $this->add_control(
                'sa_datatable_even_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .even td' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_even_icon_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(83,181,184,1.00)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .even td' => 'background-color: {{VALUE}} !important;',
            ],
                ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_datatable_odd_icon_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .odd td' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_odd_icon_bg_color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(83,181,184,1.00)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 table.dataTable .odd td' => 'background-color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();

        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'input-button'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Show and Entries Setting ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_datatable_show_entries_switter', $this->style, [
            'label' => __('Show Entries', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_datatable_show_entries_item', $this->style, [
            'label' => __('Item\'s Show', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => '5',
            'loader' => TRUE,
            'condition' => [
                'sa_datatable_show_entries_switter' => 'yes'
            ],
            'options' => [
                '5' => __('5', SHORTCODE_ADDOONS),
                '10' => __('10', SHORTCODE_ADDOONS),
                '20' => __('20', SHORTCODE_ADDOONS),
                '30' => __('30', SHORTCODE_ADDOONS),
                '50' => __('50', SHORTCODE_ADDOONS),
                '80' => __('80', SHORTCODE_ADDOONS),
                '100' => __('100', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_show_entries_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'condition' => [
                'sa_datatable_show_entries_switter' => 'yes'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length > .oxi_show_entries_label' => '',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_show_entries_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'condition' => [
                'sa_datatable_show_entries_switter' => 'yes'
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length > .oxi_show_entries_label' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_show_entries_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'condition' => [
                'sa_datatable_show_entries_switter' => 'yes'
            ],
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Select Box Setting ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_datatable_select_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'loader' => TRUE,
            'default' => 'f30c',
                ]
        );

        $this->add_control(
                'sa_datatable_select_icon_type', $this->style, [
            'label' => __('Icon type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'solid',
            'loader' => TRUE,
            'options' => [
                'solid' => __('Solid', SHORTCODE_ADDOONS),
                'regular' => __('Regular', SHORTCODE_ADDOONS),
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_datatable_select_icon_size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '16',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_select_icon_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '80',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_select_icon_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '30',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control(
                'sa_datatable_select_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#949494',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_select_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255,255,255,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => 'background: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_select_head_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_select_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_length .oxi_datatable_select_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Export Button Setting ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_datatable_export_pdf', $this->style, [
            'label' => __('PDF Button', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_datatable_export_excel', $this->style, [
            'label' => __('EXCEL Button', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_datatable_export_copy', $this->style, [
            'label' => __('COPY Button', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_datatable_export_print', $this->style, [
            'label' => __('PRINT Button', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_datatable_export_csv', $this->style, [
            'label' => __('CSV Button', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa_datatable_button_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_button_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_button_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255,255,255,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_button_hover_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#f7f7f7',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button:hover' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_button_hover_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(90,186,189,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => 'background-color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_button_hover_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
                'sa_datatable_button_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_button_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_button_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_export_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Show Datatable Info ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_datatable_info_show_entries_switter', $this->style, [
            'label' => __('Show Entries', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_datatable_info_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_info' => ''
            ],
                ]
        );

        $this->add_control(
                'sa_datatable_info_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_info' => 'color: {{VALUE}} !important;',
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_datatable_info_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .oxi_datatable_info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Search Box Setting ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_datatable_search_box_switter', $this->style, [
            'label' => __('Show Search box', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_datatable_search_box_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter > .oxi_filter_label' => ''
            ],
                ]
        );

        $this->add_control(
                'sa_datatable_search_box_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter > .oxi_filter_label' => 'color: {{VALUE}} !important;',
            ],
                ]
        );


        $this->add_responsive_control(
                'sa_datatable_search_box_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter > .oxi_filter_label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Input Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_input_icon_size', $this->style, [
            'label' => __('Font Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '16',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_input_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '80',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_input_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '30',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_input_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#9e9e9e',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_input_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255,255,255,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => 'background-color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_input_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_datatable_input_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_input_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_filter  .oxi_filter_input' => ''
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Pagination Setting ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_datatable_previous_next_switter', $this->style, [
            'label' => __('Pagination', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_datatable_previous_next_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.next' => '',
                '{{WRAPPER}}  .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.previous' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_previous_next_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled' => 'color: {{VALUE}} !important;',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover' => 'color: {{VALUE}} !important;',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active' => 'color: {{VALUE}} !important;',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover' => 'color: {{VALUE}} !important;',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_previous_next_color_hover', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4a4a4a',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover' => 'color: {{VALUE}} !important;',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover' => 'color: {{VALUE}} !important;',
             ],
                ]
        );
        $this->add_control(
                'sa_datatable_previous_next_bg_hover', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(255,255,255,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover' => 'background-color: {{VALUE}} !important;',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover' => 'background-color: {{VALUE}} !important;',
             ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_datatable_previous_next_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}}  .oxi-addons-wrapper-datatable-style-1 .dataTables_wrapper .dataTables_paginate .paginate_button.previous' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Pagination Button Setting ', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );

        $this->add_group_control(
                'sa_datatable_pagination_button_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button' => ''
            ],
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                'active' => esc_html__('active', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_pagination_button_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#969696',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button' => 'color: {{VALUE}} ;',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_pagination_button_bg', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(235,235,235,1.00)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button' => 'background-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_pagination_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_pagination_button_color_hover', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button:hover' => 'color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_pagination_button_bg_hover', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(79, 173, 255, 1)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button:hover' => 'background-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa_datatable_pagination_button_border_hover', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button:hover' => ''
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_datatable_pagination_button_color_active', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button.current' => 'color: {{VALUE}} ',
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button.current:hover' => 'color: {{VALUE}} ',
            ],
                ]
        );
        $this->add_control(
                'sa_datatable_pagination_button_bg_active', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(79, 173, 255, 1)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button.current' => 'background-color: {{VALUE}} ',
                '{{WRAPPER}}  .oxi-addons-wrapper-datatable-style-1 .dataTables_paginate span .paginate_button.current:hover' => 'background-color: {{VALUE}} ',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
                'sa_datatable_pagination_button_border', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::SEPARATOR,
            Controls::SEPARATOR => TRUE
                ]
        );




        $this->add_responsive_control(
                'sa_datatable_pagination_button_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_pagination_button_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_datatable_pagination_button_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
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
                    'max' => 50,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-datatable-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
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
            'title' => __('Add New Rows', SHORTCODE_ADDOONS),
            'sub-title' => __('Add New Rows', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Price Table Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';
        if (array_key_exists('sa_datatable_column_repeater', $this->style)):
            foreach ($this->style['sa_datatable_column_repeater'] as $key => $value) {
                foreach ($value as $keys => $values) {
                    $this->add_control(
                            'sa_datatable_modal_' . $key, [], [
                        'label' => __($values, SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => '',
                            ]
                    );
                }
            }
        endif;

        echo '</div>';
    }

}
