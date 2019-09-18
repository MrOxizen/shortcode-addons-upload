<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Heading\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_8
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_8 extends AdminStyle {

    public function register_controls() {
        $this->start_section_tabs(
                'shortcode-addons-heading-tabs'
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-heading-text', [
            'label' => esc_html__('Text', SHORTCODE_ADDOONS),
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
            'default' => 'Elementor Align Heading',
            'placeholder' => 'This is Heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text' => '',
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
            'default' => 'SUB TITLE HERE',
            'placeholder' => 'This is Sub-heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading .oxi-addons-sub-heading-text' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_sub_head_WM_text', $this->style, [
            'label' => __('Watermark Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'separator' => TRUE,
            'default' => 'ELEMENTOR',
            'placeholder' => 'This is Watermark Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading-WM' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_head_heading_alignment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'loader' => TRUE,
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
                '{{WRAPPER}}  .oxi-addons-heading-container .oxi-addons-heading-text ' => 'text-align:{{VALUE}};',
                '{{WRAPPER}}  .oxi-addons-heading-container .oxi-addons-sub-heading ' => 'text-align:{{VALUE}};',
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
                '{{WRAPPER}} .OxiAddons-Heading ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'default' => '#141414',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->add_group_control(
                'sa_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text ' => '',
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
                '{{WRAPPER}} .oxi-addons-heading .oxi-addons-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'default' => '#333131',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading .oxi-addons-sub-heading-text' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_sub_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-sub-heading .oxi-addons-sub-heading-text ' => '',
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
                '{{WRAPPER}} .oxi-addons-sub-heading .oxi-addons-sub-heading-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-WM-font-settings', [
            'label' => esc_html__('Watermark Typography ', SHORTCODE_ADDOONS),
            'showing' => False,
                ]
        );
        $this->add_control(
                'sa_wm_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => 'rgba(50, 132, 153, 0.2)',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading-WM' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_wm_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading-WM' => '',
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_wm_head_margin', $this->style, [
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
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading-WM' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }



}
