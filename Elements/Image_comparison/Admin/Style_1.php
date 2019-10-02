<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_comparison\Admin;

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

        $this->add_responsive_control(
                'sa-image-comparison-body-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 1000,
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .oxi-addons-main' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-image-comparison-body-offset', $this->style, [
            'label' => __('Coparison Offset', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 0.5,
            
                ]
        );

        $this->add_responsive_control(
                'sa_image-comparison_margin', $this->style, [
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


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Comparison Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_image-comparison_click', $this->style, [
            'label' => __('Click To Move', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'loader' => TRUE,
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn1' => 'text-align:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_image-comparison_position', $this->style, [
            'label' => __('Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'true',
            'loader' => TRUE,
            'options' => [
                'true' => [
                    'title' => __('Horizontal', SHORTCODE_ADDOONS),
                ],
                'false ' => [
                    'title' => __('Vertical ', SHORTCODE_ADDOONS),
                ],
            ],
            
                ]
        );
        $this->add_control(
                'sa_image-comparison-hover', $this->style, [
            'label' => __('Hover To Move', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'center',
            'loader' => TRUE,
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-align-btn1' => 'text-align:{{VALUE}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Handle Setting', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa-image-comparison-handle-color', $this->style, [
            'label' => __('Handle Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-handle' => 'border-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-up-arrow' => 'border-bottom-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-down-arrow' => 'border-top-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-left-arrow' => 'border-right-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-right-arrow' => 'border-left-color: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-horizontal .twentytwenty-handle::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-horizontal .twentytwenty-handle::after, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-vertical .twentytwenty-handle::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-vertical .twentytwenty-handle::after' => 'background: {{VALUE}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Upload Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_group_control(
                'sa-image-comparison-image-one', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => '#asdas',
            ]
                ]
        );
        $this->add_group_control(
            'sa-image-comparison-image-two', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => '#asdas',
            ]
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Overlay Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_image_compersion_overlay_controler', $this->style, [
            'label' => __('Overlay', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'default' => 'true',
            'loader' => TRUE,
            'options' => [
                'true' => [
                    'title' => __('True', SHORTCODE_ADDOONS),
                ],
                'false' => [
                    'title' => __('False', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_control(
                'sa-image-comparison-before-text', $this->style, [
            'label' => __('Before Button Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Heading',
            'placeholder' => 'Heading',
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ]
                ]
        );
        $this->add_control(
                'sa-image-comparison-after-text', $this->style, [
            'label' => __('After Button Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Heading',
            'placeholder' => 'Heading',
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ]
                ]
        );
        $this->add_group_control(
                'sa-image-comparison-typograpy', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'separator' => TRUE,
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-image-comparison-text-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'color: {{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-image-comparison-overlay-bg-color', $this->style, [
            'label' => __('Background Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'background: {{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-image-comparison-overlay-text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => '',
            ]
                ]
        );
        
        $this->add_responsive_control(
                'sa-image-comparison-overlay-button-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before, {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-before-label::before,  {{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-1 .twentytwenty-after-label::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-image-comparison-overlay-button-padding', $this->style, [
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
            'condition' => [
                'sa_image_compersion_overlay_controler' => 'true'
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
