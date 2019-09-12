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

class Style_4 extends AdminStyle {

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
                'sa-bl-g-arrow-position', $this->style, [
            'label' => __('Arrow Position', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            //   'loader' => TRUE,
            'default' => '0',
            'options' => [
                '0' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                ],
                '1' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-content-boxes-icon' => 'order:{{VALUE}};',

            ],
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
                    'title' => __('Dynamic', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-main-wrapper-full-area .sa-bl-width-auto' => 'max-width:{{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sa-bl-g-max-width-control' => 'max-width'
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-g-full-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-bl-g-padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-bl-g-margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 ol.oxi-addons-list-ol' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
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
        $this->add_responsive_control(
                'sa-bl-arrow-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0.1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0.1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-main-area .oxi-addons-list-li-icon i' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-bl-arrow-width', $this->style, [
            'label' => __('Arrow Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0.1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0.1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-main-area .oxi-addons-list-li-icon i' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-bl-arrow-height', $this->style, [
            'label' => __('Arrow Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 20,
            ],
            'range' => [
                'px' => [
                    'min' => 1,
                    'max' => 200,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0.1,
                    'max' => 20,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0.1,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-main-area .oxi-addons-list-li-icon i' => 'width:{{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa-bl-n-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => 'color:{{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-arrow-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-n-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-n-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => '',
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
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link:before' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
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
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a:hover.oxi-BL-link:before' => 'color:{{VALUE}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-arrow-hover-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-n-hover-border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a:hover.oxi-BL-link:before' => '',
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
            'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        
        $this->add_control(
                'sa-bl-lc-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => 'color: {{VALUE}}',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
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
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Description Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa-bl-lc-color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => 'color: {{VALUE}}',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
            ]
                ]
        );
        $this->add_group_control(
                'sa-bl-lc-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => '',
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
                '{{WRAPPER}} .oxi-addons-bullet-list-full-area .oxi-addons-list-type-1 a.oxi-BL-link' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
            ]
                ]
        );
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
                'sa_bl_four_icon', $this->style, [
            'label' => __('Icon', SHORTCODE_ADDOONS),
            'type' => Controls::ICON,
            'default' => 'fas fa-brain',
            'placeholder' => '',
                ]
        );
        $this->add_control(
                'sa_bl_four_text', $this->style, [
            'label' => __('Title', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'default' => 'Heading Text',
            'placeholder' => 'Heading Text',
                ]
        );

        $this->add_control(
                'sa_bl_four_textarea', $this->style, [
            'label' => __('Short Details', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'When you visit our site, pre-selected companies may access',
            'placeholder' => '',
                ]
        );
        echo '</div>';
    }

}
