<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_boxes\Admin;

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
                'general-settings' => esc_html__('Bullet List Settings', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('Basic Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa-ib-content-position', $this->style, [
            'label' => __('Image and Heading Postion', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'dashed',
            'options' => [
                'heading' => __('Heading -> Image', SHORTCODE_ADDOONS),
                'image' => __('Image -> Heading', SHORTCODE_ADDOONS),
            ],
            'selector' => [
                '{{WRAPPER}} .heading-data' => 'display:{{VALUE}};',
                '{{WRAPPER}} .heading-data ' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ib-content-box-col', $this->style, [
            'type' => Controls::COLUMN,
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
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
                'sa-ib-content-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-ib-content-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa-ib-content-hover-background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-ib-content-hover-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        
        $this->add_responsive_control(
                'sa-ib-content-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 50,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa-bl-g-max-width-control' => 'max-width'
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-ib-content-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 50,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa-bl-g-max-width-control' => 'max-width'
            ]
                ]
        );
        
        $this->add_responsive_control(
                'sa-ib-content-border-radius', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa-ib-content-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ib-content-margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Animation', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa-ib-content-animation', $this->style, [
            'type' => Controls::ANIMATION,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
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
        $this->add_control(
                'sa-bl-lc-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link' => 'color: {{VALUE}}',
            ]
                ]
        );
        
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa-bl-lc-hover-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_group_control(
                'sa-bl-lc-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'separator' => TRUE,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-bl-lc-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa-ib-image-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 50,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ib-image-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 50,
                    'max' => 2000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 5,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Box Shadow', SHORTCODE_ADDOONS),
            'showing' => TRUE,
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
                'sa-ib-content-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa-ib-content-boxshadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Accordions', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Accourdions Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Accordions Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div cecholass="modal-body">';
        $this->add_control(
                'sa_bl_text', $this->style, [
            'label' => __('Title', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Lorem Ipsum is simply dummy text',
            'placeholder' => 'Lorem Ipsum is simply dummy text',
                ]
        );

        $this->add_group_control(
                'sa_bl_url', $this->style, [
            'label' => __('URL', SHORTCODE_ADDOONS),
            'type' => Controls::URL,
            'default' => '',
            'placeholder' => 'https://www.yoururl.com',
                ]
        );
        echo '</div>';
    }

}
