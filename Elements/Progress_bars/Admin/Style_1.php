<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Progress_bars\Admin;

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
                'sa-ib-content-box-col', $this->style, [
            'type' => Controls::COLUMN,
            'loader' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-icon-boxes-main' => '',
            ]
                ]
        );
        $this->add_repeater_control(
                'sa_image_progress_bar_data', $this->style, [
            'label' => __('Image Accordion Data', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'button' => 'Add New Accordion',
            'fields' => [
                'sa_image_progress_bar_data_parcent' => [
                    'label' => esc_html__('Percent', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 100,
                            'step' => 1,
                        ],
                    ],
                ],
                'sa_image_progress_bar_data_name' => [
                    'label' => esc_html__('Progress Name', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Progress Name',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-background-image-{{KEY}}' => '',
                    ],
                ],
                'sa_image_progress_bar_data_back-color' => [
                    'label' => esc_html__('Back Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#e000be',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-background-image-{{KEY}}' => '',
                    ],
                ],
                'sa_image_progress_bar_data_front-color' => [
                    'label' => esc_html__('Front Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#82e2ff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-background-image-{{KEY}}' => '',
                    ],
                ],
                'sa_image_progress_bar_data_animate_speed' => [
                    'label' => esc_html__('Animate Speed', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 100,
                            'step' => 1,
                        ],
                    ],
                ],
            ],
            'title_field' => 'sa_image_progress_bar_data_name',
                ]
        );
        $this->add_control(
                'sa_image_progress_bar_background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'separator' => TRUE,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-handle' => 'background: {{VALUE}};',
            ]
                ]
        );

        $this->add_responsive_control(
                'sa_image_progress_bar_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_image_progress_bar_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_image_progress_bar_boxshadow', $this->style, [
            'label' => __('Boxshadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'separator' => TRUE,
            'default' => '',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-handle' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_image_progress_bar_animation', $this->style, [
            'label' => __('Animation', SHORTCODE_ADDOONS),
            'type' => Controls::ANIMATION,
            'default' => '',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-handle' => 'background: {{VALUE}};',
            ]
                ]
        );


        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Progress Bar Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-progress-bar-back-max-height', $this->style, [
            'label' => __('Back Max Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 300,
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
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-link' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-progress-bar-font-max-height', $this->style, [
            'label' => __('Font Max Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 300,
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
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion .oxi-addons-accordion .oxi-link' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-progress-bar-back-border-radius', $this->style, [
            'label' => __('Back Border radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-progress-bar-font-border-radius', $this->style, [
            'label' => __('Font Border radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
            'sa_image_progress_bar_inside_boxshadow', $this->style, [
            'label' => __('Progress Bar Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'separator' => TRUE,
            'default' => '',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-handle' => 'background: {{VALUE}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Progress Name', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        
        $this->add_group_control(
                'sa-progress-bar-name-typograpy', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-progress-bar-name-text-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-progress-bar-name-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-progress-bar-name-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Progress Percent Setting', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        
        $this->add_group_control(
                'sa-progress-bar-percent-typograpy', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-progress-bar-percent-text-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-progress-bar-percent-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-progress-bar-percent-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => -200,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    // public function modal_opener()
    // {
    //     $this->add_substitute_control('', [], [
    //         'type' => Controls::MODALOPENER,
    //         'title' => __('Add New Icon Box', SHORTCODE_ADDOONS),
    //         'sub-title' => __('Open Icon Box Form', SHORTCODE_ADDOONS),
    //         'showing' => TRUE,
    //     ]);
    // }
    // public function modal_form_data()
    // {
    //     echo '<div class="modal-header">                    
    //                 <h4 class="modal-title">Icon Boxes Form</h4>
    //                 <button type="button" class="close" data-dismiss="modal">&times;</button>
    //             </div>
    //             <div class="modal-body">';
    //     $this->add_control(
    //         'sa_icon_effects_icon',
    //         $this->style,
    //         [
    //             'label' => __('Icon', SHORTCODE_ADDOONS),
    //             'type' => Controls::ICON,
    //             'default' => 'fas fa-apple-alt',
    //         ]
    //     );
    //     $this->add_control(
    //         'sa_icon_effects_h_text',
    //         $this->style,
    //         [
    //             'label' => __('Heading', SHORTCODE_ADDOONS),
    //             'type' => Controls::TEXT,
    //             'default' => 'Lorem Ipsum is simply dummy text',
    //             'placeholder' => 'Your Heading Here',
    //         ]
    //     );
    //     $this->add_control(
    //         'sa_icon_effects_content',
    //         $this->style,
    //         [
    //             'label' => __('Content', SHORTCODE_ADDOONS),
    //             'type' => Controls::TEXTAREA,
    //             'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.',
    //             'placeholder' => 'Your Content Here',
    //         ]
    //     );
    //     $this->add_control(
    //         'sa_icon_effects_url_open',
    //         $this->style,
    //         [
    //             'label' => __('Link Active', SHORTCODE_ADDOONS),
    //             'type' => Controls::SWITCHER,
    //             'default' => '',
    //             'label_on' => __('Yes', SHORTCODE_ADDOONS),
    //             'label_off' => __('No', SHORTCODE_ADDOONS),
    //             'return_value' => 'link_show',
    //         ]
    //     );
    //     $this->add_group_control(
    //         'sa_icon_effects_url',
    //         $this->style,
    //         [
    //             'type' => Controls::URL,
    //             'loader' => TRUE,
    //             'condition' => [
    //                 'sa_icon_effects_url_open' => 'link_show',
    //             ],
    //         ]
    //     );
    //     echo '</div>';
    // }
}
