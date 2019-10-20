<?php

namespace SHORTCODE_ADDONS_UPLOAD\Category\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle
{


    public function register_controls()
    {

        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            []
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Category Menu', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $styledata = $this->style;

        $all_category_data = (array_key_exists('sa_category_add_data', $styledata) && is_array($styledata['sa_category_add_data'])) ? $styledata['sa_category_add_data'] : [];
        $all_category = [];
        foreach ($all_category_data as $value) :
            $all_category[$value['sa_category_item_text']] =  $value['sa_category_item_text'];
        endforeach;
        $this->add_control(
            'sa_category_parent_cat',
            $this->style,
            [
                'label' => __('Parent Category', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'description' => __('New date show after save and reload', SHORTCODE_ADDOONS),
                'loader' => TRUE,
                'default' => array_key_first($all_category),
                'options' => $all_category,
            ]
        );
        $this->add_repeater_control(
            'sa_category_add_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_category_item_text' => [
                        'label' => esc_html__('Add Category', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'placeholder' => 'Add New Category',
                    ],
                ],
                'title_field' => 'sa_category_item_text',
                'button' => 'Add New Category',
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Item Data Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_category_col',
            $this->style,
            [
                'label' => __('Item Per Rows', SHORTCODE_ADDOONS),
                'type' => Controls::COLUMN,
                'loader' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_category_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_category_title' => [
                        'label' => __('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => 'Item 01',
                    ],
                    'sa_category_type' => [
                        'label' => __('Category Type', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'loader' => TRUE,
                        'default' => 'sa_category_shortcode',
                        'options' => [
                            'sa_category_shortcode' => __('Shortcode', SHORTCODE_ADDOONS),
                            'sa_category_img' => __('Image', SHORTCODE_ADDOONS),
                            'sa_category_text' => __('Text', SHORTCODE_ADDOONS),
                        ],

                    ],
                    'sa_category_item_shortcode' => [
                        'label' => esc_html__('Shortcode', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXTAREA,
                        'placeholder' => 'Enter Your Shortcode Here',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_category_type' => 'sa_category_shortcode'
                        ]
                    ],
                    'sa_category_item_img' => [
                        'label' => esc_html__('Image', SHORTCODE_ADDOONS),
                        'type' => Controls::MEDIA,
                        'default' => [
                            'type' => 'media-library',
                            'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/cycling-bike-trail-sport-161172-1-1.jpeg',
                        ],
                        'controller' => 'add_group_control',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_category_type' => 'sa_category_img'
                        ]
                    ],
                    'sa_category_item_text' => [
                        'label' => esc_html__('Text', SHORTCODE_ADDOONS),
                        'type' => Controls::WYSIWYG,
                        'placeholder' => 'Enter Your Some Text Here',
                        'conditional' => Controls::INSIDE,
                        'condition' => [
                            'sa_category_type' => 'sa_category_text'
                        ]
                    ],
                    'sa_category_item_width' => [
                        'label' => __('Item Width', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'controller' => 'add_responsive_control',
                        'loader' => TRUE,
                        'default' => '',
                        'options' => [
                            '' => 'Same Width',
                            'grid_item_width_2' => 'Width_2',
                            'grid_item_width_3' => 'Width_3',
                            'grid_item_width_4' => 'Width_4',
                        ],
                        'selector' => [
                            '{{WRAPPER}} .sa_addons_category_item_show.sa_addons_width_{{KEY}}' => '',
                        ],
                    ],
                    'sa_category_select' => [
                        'label' => __('Category Select', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'description' => __('New date show after save and reload', SHORTCODE_ADDOONS),
                        'multiple' => TRUE,
                        'loader' => TRUE,
                        'default' => [],
                        'options' => $all_category,
                    ],
                ],
                'title_field' => 'sa_category_title',
                'button' => 'Add New Item',
            ]
        );
        $this->add_control(
            'sa_category_text_style_on_off',
            $this->style,
            [
                'label' => __('Text Style', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'description' => __('Please Only Switch On When Carousel Type Text', SHORTCODE_ADDOONS),
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'text_style',
            ]
        );
        $this->add_responsive_control(
            'sa_category_menu_item_padding',
            $this->style,
            [
                'label' => __('Menu Body Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
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
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_category_data_body_padding',
            $this->style,
            [
                'label' => __('Data Body Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
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
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Category Menu Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_category_menu_align',
            $this->style,
            [
                'label' => __('Menu Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'toggle' => TRUE,
                'default' => 'center',
                'options' => [
                    'flex-start' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'flex-end' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_category_menu_w_type',
            $this->style,
            [
                'label' => __('Width Mode', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'toggle' => TRUE,
                'loader' => TRUE,
                'default' => 'dynamic',
                'options' => [
                    'sa_category_fix_width' => [
                        'title' => __('Static', SHORTCODE_ADDOONS),
                    ],
                    'dynamic' => [
                        'title' => __('Dynamic', SHORTCODE_ADDOONS),
                    ]
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_category_menu_item_w_s',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '120',
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
                'condition' => [
                    'sa_category_menu_w_type' => 'sa_category_fix_width'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item.sa_category_fix_width' => 'width: {{SIZE}}{{UNIT}};',
                ]
            ]
        );


        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_category_menu_item_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#8d8d8d',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_category_menu_item_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_category_menu_item_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_category_menu_item_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_category_menu_item_bg_h',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(71, 201, 229, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item:hover' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_border_h',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item:hover' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_shad_h',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item:hover' => '',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_category_menu_item_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item.sa_active' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_category_menu_item_bg_a',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(71, 201, 229, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item.sa_active' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_border_a',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item.sa_active' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_menu_item_shad_a',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item.sa_active' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_category_menu_item_b_r_a',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item.sa_active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_category_menu_item_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
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
                'condition' => [
                    'sa_category_menu_w_type' => 'dynamic'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_category_menu_item_margin',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_menu_item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Item Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_category_item_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_files' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_category_item_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_files' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_category_data_item',
            $this->style,
            [
                'label' => __('Item Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
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
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_item_show' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_item_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_files' => '',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Text Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_category_text_style_on_off' => 'text_style'
                ]
            ]
        );
        $this->add_group_control(
            'sa_category_text_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_item_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_category_text_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#000000',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_item_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            'sa_category_text_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_item_text' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_category_text_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
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
                    '%' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 2,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_category_container_style_2 .sa_addons_category_item_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
