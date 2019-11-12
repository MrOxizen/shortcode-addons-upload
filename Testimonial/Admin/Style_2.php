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

class Style_2 extends AdminStyle {

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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding ' => '',
            ]
                ]
        );
        $this->add_repeater_control(
                'sa_testimonial_data_style_2', $this->style, [
            'label' => __('Testimonial Data', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'separator' => TRUE,
            'button' => 'Add New Testimonial',
            'fields' => [
                'sa_testi_profile_picture' => [
                    'label' => __('URL', SHORTCODE_ADDOONS),
                    'type' => Controls::MEDIA,
                    'controller' => 'add_group_control',
                    'default' => [
                        'type' => 'media-library',
                        'link' => '#asdas',
                    ]
                ],
                'sa_testi_profile_name' => [
                    'label' => __('Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'John Mandis',
                    'placeholder' => 'John Mandis',
                ],
                'sa_testi_profile_designation' => [
                    'label' => __('Designation', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'John Mandis',
                    'placeholder' => 'John Mandis',
                ],
                'sa_testi_profile_company' => [
                    'label' => __('Company Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'John Mandis',
                    'placeholder' => 'John Mandis',
                ],
                'sa_testi_profile_company_url' => [
                    'label' => __('Company URL', SHORTCODE_ADDOONS),
                    'controller' => 'add_group_control',
                    'type' => Controls::URL,
                    'default' => '',
                    'placeholder' => 'https://www.yoururl.com',
                ],
                'sa_testi_profile_rating' => [
                    'label' => __('Rating', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 5,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 5,
                            'step' => 0.5,
                        ],
                    ],
                ],
                'sa_testi_profile_description' => [
                    'label' => __('Short Details', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua dapibus tellus blandit quis. Cras tempor non mi et vestibulum.',
                ]
            ],
            'title_field' => 'sa_testi_profile_name',
                ]
        );

        $this->add_responsive_control(
                'sa-testimonial-body-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-item-testinew' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-testimonial-body-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-body-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew' => '',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa-testimonial-body-border-radius', $this->style, [
            'label' => __('Border Raidus', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-testimonial-body-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-body-margin', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-testimonial-body-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew' => '',
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
            'label' => esc_html__('Profile Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-image-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-image' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-testimonial-profile-image-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-image:after' => 'padding-bottom:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-image-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-image img, {{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-image_alignment', $this->style, [
            'label' => __('Image Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => '85',
            'options' => [
                '18' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                '50' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                '85' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-image' => 'left: {{VALUE}}%;'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-image-border-radius', $this->style, [
            'label' => __('Border Raidus', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-image img' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->add_control(
                'sa-testimonial-profile-name-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-name' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-name-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-name' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-name-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-name' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-name-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-name' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Information', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-Information-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-info' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-Information-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-info' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-Information-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-info' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-Information-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Designation And Company', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-designation-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-company-color', $this->style, [
            'label' => __('Company Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working a' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-company-hover-color', $this->style, [
            'label' => __('Company Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working a:hover' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-company-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working' => '',
            ]
                ]
        );
        
        $this->add_group_control(
                'sa-testimonial-profile-company-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-profile-company-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testmonialnew-working' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Rating', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-rating-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-rating i' => 'font-size:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-testimonial-rating-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-rating i' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-ratting_alignment', $this->style, [
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-rating' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-rating-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-testimonials-testinew-padding .oxi-testimonials-style-testinew-rating i' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
