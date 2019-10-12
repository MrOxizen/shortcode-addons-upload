<?php

namespace SHORTCODE_ADDONS_UPLOAD\Button_effects\Admin;

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

class Style_10 extends AdminStyle {

    public function register_controls() {

        
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            
                ]
        );

        $this->start_section_devider();

        // start

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Add New Content', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_repeater_control(
                'sa_icon_effects_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_el_button_effect_image' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/animal-bug-butterfly-53957.jpg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_el_be_first_icon' => [
                    'label' => esc_html__('First Icon Class', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook',
                    'selector' => [
                        '{{WRAPPER}} .sa_button_effect_temp_10_{{KEY}} .oxi-button-info' => '',
                    ],
                ],
                'sa_el_be_first_url' => [
                    'label' => esc_html__('First Url', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'default' => 'https://www.example.com',
                    'controller' => 'add_group_control',
                ],
                'sa_el_be_second_icon' => [
                    'label' => esc_html__('Second Icon Class', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook',
                    'selector' => [
                        '{{WRAPPER}} .sa_button_effect_temp_10_{{KEY}} .oxi-button-info' => '',
                    ],
                ],
                'sa_el_be_second_url' => [
                    'label' => esc_html__('Second Url', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'default' => 'https://www.example.com',
                    'controller' => 'add_group_control',
                ],
            ],
            'title_field' => 'sa_el_be_first_icon',
            'button' => 'Add New Item',
                ]
        );

        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_group_control(
                'sa-ac-column', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_alignments_select', $this->style, [
            'label' => __('Alignments', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'mm',
            'loader' => TRUE,
            'separator' => TRUE,
            'options' => [
                'tl' => __('Top Left', SHORTCODE_ADDOONS),
                'tm' => __('Top Middle', SHORTCODE_ADDOONS),
                'tr' => __('Top Right', SHORTCODE_ADDOONS),
                'ml' => __('Middle Left', SHORTCODE_ADDOONS),
                'mm' => __('Middle Middle', SHORTCODE_ADDOONS),
                'mr' => __('Middle Right', SHORTCODE_ADDOONS),
                'bl' => __('Bottom Left', SHORTCODE_ADDOONS),
                'bm' => __('Bottom Middle', SHORTCODE_ADDOONS),
                'br' => __('Bottom Right', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_effects_select_icon', $this->style, [
            'label' => __('Effects', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'oxi-button-right-to-left',
            'loader' => TRUE,
            'options' => [
                'oxi-button-right-to-left' => __('Horizontal In Out', SHORTCODE_ADDOONS),
                'oxi-button-left-to-right' => __('Vertical In Out', SHORTCODE_ADDOONS),
                'oxi-button-top-to-bottom' => __('Horizontal In', SHORTCODE_ADDOONS),
                'oxi-button-bottom-to-top' => __('Vertical In', SHORTCODE_ADDOONS),
            ],
                ]
        );

         $this->add_control(
                'sa-be-link-opening', $this->style, [
            'label' => __('Link Opening', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
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
        //normal
        $this->add_group_control(
                'sa-be-main-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );

        $this->end_controls_tab();


        $this->start_controls_tab();
        //hover
        $this->add_group_control(
                'sa-be-main-hover-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover:hover' => 'box-shadow:{{VALUE}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();


        $this->add_group_control(
                'sa-be-main-box-animation', $this->style, [
            'type' => Controls::ANIMATION,
            'separator' => true,
                ]
        );
        $this->add_responsive_control(
                'sa_be_box_main_padding', $this->style, [
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
                '{{WRAPPER}} .sa_button_effect_temp_10' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_be_box_main_margin', $this->style, [
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover-map' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );



        $this->end_controls_section();


        $this->end_section_devider();





        //start devider
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_responsive_control(
                'sa-be-background-image-height', $this->style, [
            'label' => __('Image Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 300,
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
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-be-background-image-width', $this->style, [
            'label' => __('Image Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 300,
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
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-be-main-box-background-color', $this->style, [
            'type' => Controls::BACKGROUND,
            'loader' => true,
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-info' => ''
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
        //normal
        $this->add_responsive_control(
                'sa-be-main-box-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();


        $this->start_controls_tab();
        //hover
        $this->add_responsive_control(
                'sa-be-main-box-border-hover-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa-be-inner-icon-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 80,
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-op-cl-image-height', $this->style, [
            'label' => __('Height Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 150,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 80,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 80,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => 'height:{{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};',
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
        //normal
        $this->add_control(
                'sa-be-icon-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-be-icon-background-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-be-icon-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-box-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_tab();


        $this->start_controls_tab();
        //hover
        $this->add_control(
                'sa-be-hover-icon-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover:hover a .oxi-icons:hover' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-be-hover-icon-background-color', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover:hover a .oxi-icons:hover' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa-be-hover-icon-border-color', $this->style, [
            'label' => __('Border Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover:hover a .oxi-icons:hover' => 'border-color:{{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-be-box-icon-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover:hover a .oxi-icons:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_ac_box_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => true,
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
                '{{WRAPPER}} .sa_button_effect_temp_10 .oxi-button-hover a .oxi-icons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
