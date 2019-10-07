<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Heading\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_10
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_10 extends AdminStyle {

    public function register_controls() {
        $this->start_section_tabs(
                'shortcode-addons-heading-tabs'
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-heading-text', [
            'label' => esc_html__('Text & Line', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
     
        $this->add_control(
                'sa_head_heading_tag', $this->style, [
            'label' => __('Heading Tag', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'h2',
            'options' => [
                'h1' => __('Heading 1', SHORTCODE_ADDOONS),
                'h2' => __('Heading 2', SHORTCODE_ADDOONS),
                'h3' => __('Heading 3', SHORTCODE_ADDOONS),
                'h4' => __('Heading 4', SHORTCODE_ADDOONS),
                'h5' => __('Heading 5', SHORTCODE_ADDOONS),
                'h6' => __('Heading 6', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_head_text', $this->style, [
            'label' => __('Heading Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'Middle Align Heading',
            'placeholder' => 'This is Heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_sub_heading_tag', $this->style, [
            'label' => __('Sub Tag', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'h4',
            'separator' => TRUE,
            'options' => [
                'h1' => __('Heading 1', SHORTCODE_ADDOONS),
                'h2' => __('Heading 2', SHORTCODE_ADDOONS),
                'h3' => __('Heading 3', SHORTCODE_ADDOONS),
                'h4' => __('Heading 4', SHORTCODE_ADDOONS),
                'h5' => __('Heading 5', SHORTCODE_ADDOONS),
                'h6' => __('Heading 6', SHORTCODE_ADDOONS),
                'p' => __('Paragraph', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_sub_head_text', $this->style, [
            'label' => __('Sub Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'SUBTITLE HERE',
            'placeholder' => 'This is Sub-heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10 .oxi-addons-sub-heading-text' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_head_line_style', $this->style, [
            'label' => __('Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'oxi_line_mid_center',
            'separator' => TRUE,
            'loader' =>TRUE,
            'options' => [
                'oxi_line_top_left' => __('Style 1', SHORTCODE_ADDOONS),
                'oxi_line_top_right' => __('Style 2', SHORTCODE_ADDOONS),
                'oxi_line_mid_center' => __('Style 3', SHORTCODE_ADDOONS),
                'oxi_line_btm_left' => __('Style 4', SHORTCODE_ADDOONS),
                'oxi_line_btm_right' => __('Style 5', SHORTCODE_ADDOONS),
            ],
              ]
        );
        $this->start_popover_control(
                'shortcode-addons-line', [
            'label' => __('Line', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_responsive_control(
                'shortcode-addons-line-height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '3',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 5,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 5,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_top_left::before' => 'height: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_top_right::before' => 'height: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_mid_center::after' => 'height: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_btm_left::after' => 'height: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_btm_right::after' => 'height: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'shortcode-addons-line-width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '130',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 250,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 15,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
               '{{WRAPPER}} .oxi-addons-sub-heading-style-10   .oxi-addons-sub-heading-text.oxi_line_top_left::before' => 'width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10   .oxi-addons-sub-heading-text.oxi_line_top_right::before' => 'width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10   .oxi-addons-sub-heading-text.oxi_line_mid_center::after' => 'width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10   .oxi-addons-sub-heading-text.oxi_line_btm_left::after' => 'width: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10   .oxi-addons-sub-heading-text.oxi_line_btm_right::after' => 'width: {{SIZE}}{{UNIT}};',
            ],
                ]
        );
        $this->add_control(
                'sa_head_line_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'rgba(212, 55, 55, 1)',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_top_left::before' => 'background: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_top_right::before' => 'background: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_mid_center::after' => 'background: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_btm_left::after' => 'background: {{VALUE}};',
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10  .oxi-addons-sub-heading-text.oxi_line_btm_right::after' => 'background: {{VALUE}};',
            ],
                ]
        );
        $this->end_popover_control();
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-general', [
            'label' => esc_html__('General', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_responsive_control(
                'sa_head_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading-container ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );
        $this->add_group_control(
                'sa_head_animation', $this->style, [
            'type' => Controls::ANIMATION,
        
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
                'shortcode-addons-font-settings', [
            'label' => esc_html__('Heading Typography ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#1f0c0c',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text ' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );



        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-sub-head-font-settings', [
            'label' => esc_html__('Sub-Heading Typography ', SHORTCODE_ADDOONS),
            'showing' => False,
                ]
        );
        $this->add_control(
                'sa_sub_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#4d4d4d',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10 .oxi-addons-sub-heading-text' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_sub_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10 .oxi-addons-sub-heading-text ' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_sub_head_padding', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-sub-heading-style-10 .oxi-addons-sub-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
