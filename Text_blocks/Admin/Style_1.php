<?php

namespace SHORTCODE_ADDONS_UPLOAD\Text_blocks\Admin;

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
        $this->start_section_tabs(
                'shortcode-addons-text-blocks-tabs'
        );
        $this->start_section_devider();

        $this->start_controls_section(
                'shortcode-addons-text-blocks-text', [
            'label' => esc_html__('Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_t_b_1st_text', $this->style, [
            'label' => __('First Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is First Text',
            'default' => 'FUSION',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_t_b_2n_text', $this->style, [
            'label' => __('Second Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is Second Text',
            'default' => 'BUILDER',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_t_b_3rd_text', $this->style, [
            'label' => __('Third Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            Controls::SEPARATOR => true,
            'placeholder' => 'This is Third Text',
            'default' => 'DRAG & DROP TO <span style="color: #ff8293; font-family: Roboto;"> EASILY </span> CREATE CUSTOM PAGE',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body' => '',
            ],
                ]
        );


        $this->add_control(
                'sa_t_b_alignment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body,'
                . '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body, '
                . '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body ' => 'text-align:{{VALUE}};',
            ],
                ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons-general', [
            'label' => esc_html__('General ', SHORTCODE_ADDOONS),
                ]
        );

        $this->add_responsive_control(
                'sa_t_b_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_t_b_animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
                'shortcode-addons-first-font-settings', [
            'label' => esc_html__('First Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_t_b_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#949494',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_text_sha', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_t_b_padding', $this->style, [
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
                    'min' => 0,
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-1st-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-sec-font-settings', [
            'label' => esc_html__('Second Text', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_t_b_2_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ff8293',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_2_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_2_text_sha', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_t_b_2_padding', $this->style, [
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
                    'min' => 0,
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-2nd-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-third-font-settings', [
            'label' => esc_html__('Third Text', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_t_b_3_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#6e6e6e',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_3_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_3_text_sha', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_t_b_3_padding', $this->style, [
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
                    'min' => 0,
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-1 .oxi-addons-text-blocks-3rd-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
