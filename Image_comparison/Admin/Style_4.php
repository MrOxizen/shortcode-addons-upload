<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_comparison\Admin;

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

class Style_4 extends AdminStyle {

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
                'size' => 800,
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
                '{{WRAPPER}} .oxi_addons_image_style_4_box_body' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-image-comparison-hover-width', $this->style, [
            'label' => __('Hover Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => TRUE,
            'default' => [
                'unit' => '%',
                'size' => 10,
            ],
            'range' => [
                '%' => [
                    'min' => 1,
                    'max' => 2000,
                    'step' => 1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-main-wrapper-image-comparison-style-2 .oxi-addons-main' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-image-comparison-hover-transition', $this->style, [
            'label' => __('Hover Transition', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'separator' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => 3.5,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 20,
                    'step' => 0.5,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_image_style_4_box .oxi_addons_font_view_img' => 'transition:all {{SIZE}}s ease-in-out;',
            ],
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
                '{{WRAPPER}} .oxi_addons_image_style_4_box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
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
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'before' => esc_html__('Before Image', SHORTCODE_ADDOONS),
                'after' => esc_html__('After Image', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa-image-comparison-image-one', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => '#asdas',
            ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
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

        $this->end_controls_tab();
        $this->end_controls_tabs();
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
