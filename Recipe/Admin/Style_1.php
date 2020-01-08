<?php

namespace SHORTCODE_ADDONS_UPLOAD\Recipe\Admin;

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
                    'content-settings' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS), 
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'content-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Recipe Info', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_recipe_heading_text',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Fudgy Chocolate Brownies​',
                'placeholder' => 'Lorem Ipsum is simply dummy text',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_desc_text',
            $this->style,
            [
                'label' => __('Descriptions', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'These heavenly brownies are pure chocolate overload, featuring a fudgy center, slightly crusty top and layers of decadence. It doesn\'t get better than this.​',
                'placeholder' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__details' => ''
                    ],
            ]
        );
        $this->add_group_control(
            'sa_recipe_image',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_title_separator',
            $this->style,
            [
                'label' => __('Title Separator', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'oxi_heading__separator',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Recipe Meta', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_recipe_author_switter',
            $this->style,
            [
                'label' => __('Meta Switcher', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'no',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_recipe_author_text',
            $this->style,
            [
                'label' => __('Author Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Mr. John​',
                'placeholder' => 'Lorem Ipsum is simply dummy text',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__author' => ''
                ],
                'condition' => [
                    'sa_recipe_author_switter' => 'yes'
                ] 
            ]
        );
        
        $this->add_control(
            'sa_recipe_date_text',
            $this->style,
            [
                'label' => __('Date', SHORTCODE_ADDOONS),
                'type' => Controls::DATE_TIME,
                'default' => '2022-01-01',
                'condition' => [
                    'sa_recipe_author_switter' => 'yes'
                ] 
            ]
        );
  
        $this->end_controls_section(); 
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Recipe Details', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_recipe_details_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [ 
                    'sa_recipe_details_text' => [
                        'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('Prep Time', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__recipe_style_{{KEY}} .oxi_addons__list_title' => '',
                        ],
                    ], 
                    'sa_recipe_details_minute' => [
                        'label' => esc_html__('Minute', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__('15 Minutes', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__recipe_style_{{KEY}} .oxi_addons__list_minute' => '',
                        ],
                    ], 
                    'sa_recipe_details_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-leaf'
                    ],
                ],
                'title_field' => 'sa_recipe_details_text',
            ]
        );

        $this->end_controls_section(); 
        
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Ingredients', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_recipe_ingredients_title',
            $this->style,
            [
                'label' => __('Ingredient Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Ingredients',
                'placeholder' => 'Ingredients',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_title' => ''
                ], 
            ]
        );
        $this->add_repeater_control(
            'sa_recipe_ingredients_repeater',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [ 
                    'sa_recipe_ingredients_text' => [
                        'label' => esc_html__('Text', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'default' => esc_html__(' 1/2 Kg Basmati rice', SHORTCODE_ADDOONS),
                        'selector' => [
                            '{{WRAPPER}} .oxi_addons__recipe_style_{{KEY}} .oxi_addons__ingredients_text' => '',
                        ],
                    ], 
                    'sa_recipe_ingredients_icon' => [
                        'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                        'type' => Controls::ICON,
                        'default' => 'fas fa-square-o'
                    ], 
                ],

                'title_field' => 'sa_recipe_ingredients_text',
            ]
        );

        $this->end_controls_section(); 
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Instructions', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_recipe_instructions_title',
            $this->style,
            [
                'label' => __('Ingredient Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Instructions',
                'placeholder' => 'Instructions',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_title' => ''
                ], 
            ]
        ); 
        $this->add_control(
            'sa_recipe_instructions_text',
            $this->style,
            [
                'label' => __('Descriptions', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => '1. Soak the basmati rice in water for 20 minutes to half an hour.',
                'placeholder' => '1. Soak the basmati rice in water for 20 minutes to half an hour.',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_text' => ''
                    ],
            ]
        );
        $this->end_controls_section(); 
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Notes', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_recipe_notes_title', 
            $this->style,
            [
                'label' => __('Notes', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'placeholder' => 'Write A Notes',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__notes' => ''
                    ],
            ]
        ); 
        $this->end_controls_section(); 
        $this->end_section_devider();   
        $this->end_section_tabs();  
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings',
                ],  
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
        $this->add_group_control(
            'sa_addons_recipe_main_background',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_recipe_button_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_addons_recipe_radius',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_recipe_shadow',
            $this->style,
            [
                'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1' => ''
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_addons_recipe_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
                'separator' => TRUE
            ]
        );
        $this->add_responsive_control(
            'sa_addons_recipe_margin',
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
                    '{{WRAPPER}} .oxi_addons__recipe_wrapper_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_addons_recipe_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Recipe Info', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'title' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'description' => esc_html__('Description', SHORTCODE_ADDOONS),
                    'image' => esc_html__('image', SHORTCODE_ADDOONS),
                ]
            ]
        );


        $this->start_controls_tab();
        $this->add_control(
            'sa_recipe_title_tag',
            $this->style,
            [
                'label' => __('Tag', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'default' => 'h3',
                'loader' => TRUE,
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
            'sa_recipe_heading_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__heading' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_heading_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f93e70',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__heading' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_recipe_heading_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_description_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__details' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_description_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__details' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_recipe_description_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_responsive_control(
            'sa_recipe_image_width',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER, 
                'default' => [
                    'unit' => 'px',
                    'size' => 300,
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 5,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__image' => 'max-width: {{SIZE}}{{UNIT}};  width: 100%;',
                ],
            ]
        );
        $this->end_controls_tab();


        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Recipe Meta', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_recipe_author_switter' => 'yes'
                ] 
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'author' => esc_html__('Author', SHORTCODE_ADDOONS),
                    'date' => esc_html__('Date', SHORTCODE_ADDOONS), 
                ]
            ]
        );


        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_author_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__author' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_author_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__author' => 'color:{{VALUE}};'
                ],
            ]
        );
 
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_date_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__date' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_date_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__date' => 'color:{{VALUE}};'
                ],
            ]
        );
 
        $this->end_controls_tab(); 
        $this->end_controls_tabs();
        $this->add_control(
            'sa_recipe_list_main_meta',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE ,
                
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_author_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__author_date_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section(); 
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Heading Separetor Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_recipe_title_separator' => 'oxi_heading__separator'
                ],
            ]
        ); 
        $this->add_responsive_control(
            'sa_recipe_line_position',
            $this->style,
            [
                'label' => __('Postion', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE, 
                'default' => 'left',
                'loader' => true,
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_heading__separator::before' => '{{VALUE}}: 0;'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_line_width',
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
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_heading__separator::before' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_line_height',
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
                        'max' => 20,
                        'step' =>  1,
                    ], 
                ], 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_heading__separator::before' => 'height: {{SIZE}}px;',
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_line_bg_color',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#28a745',
                'oparetor' => 'RGB', 
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_heading__separator::before' => 'background-color:{{VALUE}};'
                ],
            ]
        ); 
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Recipe Details', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        ); 
        $this->add_responsive_control(
            'sa_recipe_list_main_position',
            $this->style,
            [
                'label' => __('Postion', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_ICON,
                'default' => 'center',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__recipe_list_main' => 'justify-content: {{VALUE}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_recipe_list_main_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__recipe_list_main' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_recipe_list_main_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__recipe_list_main' => ''
                ],
            ]
        );
        
        
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'title' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'minute' => esc_html__('minute', SHORTCODE_ADDOONS), 
                    'icon' => esc_html__('icon', SHORTCODE_ADDOONS), 
                ]
            ]
        );


        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_list_title_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_title' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_list_title_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_title' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_recipe_list_title_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_list_minutes_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_minutes' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_list_minutes_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_minutes' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_recipe_list_minutes_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_minutes' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab(); 
        $this->add_responsive_control(
            'sa_recipe_list_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 200,
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_icon' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_list_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_icon' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_list_icon_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__list_icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->end_controls_tabs();
        
        $this->add_control(
            'sa_recipe_list_main_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE ,
                
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_list_main_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__recipe_list_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();  
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('
                Ingredients
                ', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        ); 

        $this->add_group_control(
            'sa_recipe_ingredients_main_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_main' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_recipe_ingredients_main_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_main' => ''
                ],
            ]
        );
        
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'text' => esc_html__('Text', SHORTCODE_ADDOONS), 
                    'icon' => esc_html__('icon', SHORTCODE_ADDOONS), 
                ]
            ]
        );


        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_ingredients_text_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_ingredients_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_text' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_recipe_ingredients_text_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->start_controls_tab(); 
        $this->add_responsive_control(
            'sa_recipe_ingredients_icon_size',
            $this->style,
            [
                'label' => __('Icon Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 200,
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_icon' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_ingredients_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_icon' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_ingredients_icon_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab(); 
        $this->end_controls_tabs();
        $this->add_control(
            'sa_recipe_ingredients_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE ,
                
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_ingredients_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__ingredients_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();  
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('
                Instructions
                ', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        ); 

        $this->add_group_control(
            'sa_recipe_instructions_main_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_main' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_recipe_instructions_main_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_main' => ''
                ],
            ]
        );
        
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'text' => esc_html__('Text', SHORTCODE_ADDOONS),   
                ]
            ]
        );


        $this->start_controls_tab();
        $this->add_group_control(
            'sa_recipe_instructions_text_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_text' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_instructions_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_text' => 'color:{{VALUE}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_recipe_instructions_text_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_tab();  
        $this->end_controls_tabs();
        $this->add_control(
            'sa_recipe_instructions_separator',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::SEPARATOR,
                Controls::SEPARATOR => TRUE ,
                
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_instructions_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__instructions_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();  
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('
                Notes
                ', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        ); 
        $this->add_group_control(
            'sa_recipe_notes_typo',
            $this->style,
            [
                'label' => __('Typography', SHORTCODE_ADDOONS),
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__notes' => ''
                ],
            ]
        );
        $this->add_control(
            'sa_recipe_notes_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#111',
                'selector' => [
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__notes' => 'color:{{VALUE}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_recipe_notes_padding',
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
                    '{{WRAPPER}} .oxi_addons__recipe_style_1 .oxi_addons__notes' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();  
        $this->end_section_devider();   
        $this->end_section_tabs();
    }
}
