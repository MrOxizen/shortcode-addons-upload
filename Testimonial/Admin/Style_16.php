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

class Style_16 extends AdminStyle {

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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding ' => '',
            ]
                ]
        );
        $this->add_repeater_control(
                'sa_image_accordion_data_style_16', $this->style, [
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-sixteen-image-{{KEY}}' => '',
                    ]
                ],
                'sa_testi_profile_name' => [
                    'label' => __('Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'John Mandis',
                    'placeholder' => 'John Mandis',
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-sixteen-name-{{KEY}}' => '',
                    ]
                ],
                'sa_testi_profile_name_url' => [
                    'label' => __('Company URL', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'controller' => 'add_group_control',
                    'default' => '',
                    'placeholder' => 'https://www.yoururl.com',
                ],
                'sa_testi_profile_company' => [
                    'label' => __('Destination', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Web Designer',
                    'placeholder' => 'Web Designer',
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-sixteen-working-{{KEY}}' => '',
                    ]
                ],
                'sa_testi_profile_description' => [
                    'label' => __('Short Details', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua dapibus tellus blandit quis. Cras tempor non mi et vestibulum.',
                    'selector' => [
                        '{{WRAPPER}} .oxi-testimonials-style-sixteen-info-{{KEY}}' => '',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-item-sixteen' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-testimonial-body-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen' => '',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->add_group_control(
                'sa-testimonial-body-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa-testimonial-body-boxshadow_hover', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen:hover' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-image-parent' => 'max-width:{{SIZE}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-image img, {{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-image' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-image-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-image img' => '',
            ]
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-image img' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Border Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-border-left-size', $this->style, [
            'label' => __('Border Left Size', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen' => 'border-left-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-testimonial-border-bottom-size', $this->style, [
            'label' => __('Border Bottom Size', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen .oxi-before ' => 'border-bottom-width:{{SIZE}}{{UNIT}}; border-left-width:{{SIZE}}{{UNIT}}',
            ],
                ]
        );
        $this->add_control(
                'sa-testimonial-border-color', $this->style, [
            'label' => __('Border Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen' => 'border-left-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen .oxi-before' => 'border-bottom-color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-border-hover-color', $this->style, [
            'label' => __('Border Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen:hover' => 'border-left-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen:hover .oxi-before' => 'border-bottom-color: {{VALUE}};',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-info' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-Information-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-info' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-Information-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-info' => '',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-name' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-testimonial-profile-company-hover-color', $this->style, [
            'label' => __('Company Hover Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-name:hover' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-testimonial-profile-name-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-name' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-name-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-name' => '',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-name' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->add_control(
                'sa-testimonial-profile-company-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-working' => 'color: {{VALUE}};',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-company-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-working' => '',
            ]
                ]
        );

        $this->add_group_control(
                'sa-testimonial-profile-company-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-working' => '',
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
                '{{WRAPPER}} .oxi-testimonials-sixteen-padding .oxi-testimonials-style-sixteen-working' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );


        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
