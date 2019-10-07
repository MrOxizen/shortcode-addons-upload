<?php

namespace SHORTCODE_ADDONS_UPLOAD\Testimonial\Admin;

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

class Style_15 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('Testimonial Settings', SHORTCODE_ADDOONS),
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
        $this->add_group_control(
                'sa-testimonial-body-col', $this->style, [
            'type' => Controls::COLUMN,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding ' => '',
            ]
                ]
        );
        $this->add_repeater_control(
                'sa_image_accordion_data_style_15', $this->style, [
            'label' => __('Testimonial Data', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'separator' => TRUE,
            'button' => 'Add New Testimonial',
            'fields' => [
                'sa_testi_profile_icon' => [
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-globe',
                    'placeholder' => 'fas fa-globe',
                    'selector' => [
                        '{{WRAPPER}} .oxi-before-{{KEY}}' => '',
                    ]
                ],
                'sa_testi_profile_name' => [
                    'label' => __('Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'John Mandis',
                    'placeholder' => 'John Mandis',
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-fifteen-name-{{KEY}}' => '',
                    ]
                ],
                'sa_testi_profile_company_url' => [
                    'label' => __('Company URL', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                    'default' => '',
                    'placeholder' => 'https://www.yoururl.com',
                ],
                'sa_testi_profile_company' => [
                    'label' => __('Designation', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Graphics designer',
                    'placeholder' => 'Graphics designer',
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-fifteen-working-{{KEY}}' => '',
                    ]
                ],
                'sa_testi_profile_description' => [
                    'label' => __('Short Details', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua dapibus tellus blandit quis. Cras tempor non mi et vestibulum.',
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-fifteen-info-{{KEY}}' => '',
                    ]
                ],
            ],
            'title_field' => 'sa_testi_profile_name',
                ]
        );

        $this->add_responsive_control(
                'sa-testimonial-body-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 450,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-item-fifteen' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );


        $this->add_responsive_control(
                'sa-testimonial-body-margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-testimonial-body-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-body-animation', $this->style, [
            'type' => Controls::ANIMATION,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testi-padding .oxi-testimonials-style-testi' => '',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();

        
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Information', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-Information-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-Information-background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before' => 'border-top-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-after' => 'border-top-color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-Information-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => 'color: {{VALUE}};',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-Information-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-Information-border-radius', $this->style, [
            'label' => __('Border Raidus', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-testimonial-Information-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => .1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-Information-margin', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-icon-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 70,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-icon-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 70,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-icon-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-icon-background-color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before' => 'background-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before .oxi-before-before' => 'border-bottom-color: {{VALUE}};',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-icon-top-arrow', $this->style, [
            'label' => __('Top Arrow', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 70,
            ],
            'range' => [
                'px' => [
                    'min' => -100,
                    'max' => 2000,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-info .oxi-before' => 'left:{{SIZE}}{{UNIT}};',
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Name', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-name-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-name' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-name-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-name' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-company-hover-color', $this->style, [
            'label' => __('Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-name:hover' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-name-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-name' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-name-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-name' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Designation', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-company-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-working' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-company-color', $this->style, [
            'label' => __('Designation Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-working' => 'color: {{VALUE}};',
            ]
                ]
        );



        $this->add_group_control(
                'sa-testimonial-profile-company-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-working' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-company-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-fifteen-padding .oxi-testimonials-style-fifteen-working' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();



        $this->end_section_devider();
        $this->end_section_tabs();
    }

//    public function modal_opener() {
//        
//        $this->add_substitute_control('', [], [
//            'type' => Controls::MODALOPENER,
//            'title' => __('Add New Testimonial', SHORTCODE_ADDOONS),
//            'sub-title' => __('Open Testimonial Form', SHORTCODE_ADDOONS),
//            'showing' => TRUE,
//        ]);
//    }
//
//    public function modal_form_data() {
//        echo '<div class="modal-header">                    
//                    <h4 class="modal-title">Testimonial Form</h4>
//                    <button type="button" class="close" data-dismiss="modal">&times;</button>
//                </div>
//                <div class="modal-body">';
//        $this->add_control(
//                'sa_testi_profile_icon', $this->style, [
//            'label' => __('Icon', SHORTCODE_ADDOONS),
//            'type' => Controls::ICON,
//            'default' => 'fas fa-globe',
//            'placeholder' => 'fas fa-globe',
//                ]
//        );
//        $this->add_control(
//                'sa_testi_profile_name', $this->style, [
//            'label' => __('Name', SHORTCODE_ADDOONS),
//            'type' => Controls::TEXT,
//            'default' => 'John Mandis',
//            'placeholder' => 'John Mandis',
//                ]
//        );
//        $this->add_group_control(
//                'sa_testi_profile_company_url', $this->style, [
//            'label' => __('Company URL', SHORTCODE_ADDOONS),
//            'type' => Controls::URL,
//            'default' => '',
//            'placeholder' => 'https://www.yoururl.com',
//                ]
//        );
//        $this->add_control(
//                'sa_testi_profile_company', $this->style, [
//            'label' => __('Designation', SHORTCODE_ADDOONS),
//            'type' => Controls::TEXT,
//            'default' => 'Graphics designer',
//            'placeholder' => 'Graphics designer',
//                ]
//        );
//        
//        
//        $this->add_control(
//                'sa_testi_profile_description', $this->style, [
//            'label' => __('Short Details', SHORTCODE_ADDOONS),
//            'type' => Controls::TEXTAREA,
//            'default' => 'Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua dapibus tellus blandit quis. Cras tempor non mi et vestibulum.',
//                ]
//        );
//        echo '</div>';
//    }
}
