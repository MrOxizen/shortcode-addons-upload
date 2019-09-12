<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Bullet_list\Admin;

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
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa-bl-g-max-width-control', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'loader' => TRUE,
            'default' => '',
            'options' => [
                'auto' => [
                    'title' => __('Auto', SHORTCODE_ADDOONS),
                ],
                'max-width' => [
                    'title' => __('Daynamic', SHORTCODE_ADDOONS),
                ],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-bl-g-max-width', $this->style, [
            'label' => __('Max Width', SHORTCODE_ADDOONS),
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
                'sa-bl-g-padding', $this->style, [
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
            'label' => esc_html__('List Number', SHORTCODE_ADDOONS),
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
                'sa-bl-n-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => 'color:{{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-bl-n-background', $this->style, [
            'label' => __('Background', SHORTCODE_ADDOONS),
            'oparetor' => 'RGB',
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => 'background:{{VALUE}};',
            ],
                ]
        );
        $this->add_group_control(
                'sa-bl-n-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-n-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-n-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-bl-n-padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa-bl-n-hover-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a:hover.oxi-BL-link:before' => 'color:{{VALUE}};',
            ]
                ]
        );
        $this->add_control(
                'sa-bl-n-hover-bg-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a:hover.oxi-BL-link:before' => 'background:{{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-n-hover-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a:hover.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->start_controls_tab();


        $this->end_controls_tab();
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('List Content', SHORTCODE_ADDOONS),
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
        $this->add_group_control(
                'sa-bl-lc-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
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
            'separator' => TRUE,
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
        $this->add_responsive_control(
                'sa-bl-lc-margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'separator' => TRUE,
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
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-li .oxi-addons-admin-edit-list' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
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
        $this->add_group_control(
                'sa-bl-lc-hover-bg', $this->style, [
            'type' => Controls::BACKGROUND,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-opening-number', $this->style, [
            'label' => __('Scale', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::NUMBER,
            'default' => 10,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-area .oxi-addons-list-type-1 a.oxi-BL-link:hover' => 'transform: scale({{VALUE}});'
            ],
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
