<?php

namespace SHORTCODE_ADDONS_UPLOAD\Image_accordion\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_3
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle{

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

        $this->add_repeater_control(
                'sa_image_accordion_data', $this->style, [
            'label' => __('Image Accordion Data', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'button' => 'Add New Accordion',
            'fields' => [
                'sa_image_accordion_image_1' => [
                    'label' => esc_html__('First Image', SHORTCODE_ADDOONS),
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => '#asdas',
                    ],
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-item-img-1' => '',
                    ],
                ],
                'sa_image_accordion_image_2' => [
                    'label' => esc_html__('Second Image', SHORTCODE_ADDOONS),
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => '#asdas',
                    ],
                    'controller' => 'add_group_control',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-item-img-2' => '',
                    ],
                ],
                'sa_image_accordion_item_title' => [
                    'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Accordion Item Title',
                ],
            ],
            'title_field' => 'sa_image_accordion_item_title',
                ]
        );
        $this->add_responsive_control(
                'sa-image_accordion-body-width', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three .oxi-addons-accordion' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-image_accordion-body-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 500,
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
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three #oxi-addons-slider' => 'height:{{SIZE}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_image_accordion_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );


        $this->end_controls_section();
        
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-image_accordion-heading-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three .oxi-addons-accordion .oxi-addons-heading' => '',
            ]
                ]
        );
        $this->add_control(
                'sa-image_accordion-heading-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three .oxi-addons-accordion .oxi-addons-heading' => 'color: {{VALUE}};',
            ]
                ]
        );

        $this->add_group_control(
                'sa-image_accordion-heading-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three .oxi-addons-accordion .oxi-addons-heading' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-image_accordion-heading-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-wrapper-image-accordion-three .oxi-addons-accordion .oxi-addons-heading' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
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
}

