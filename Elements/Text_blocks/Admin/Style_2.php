<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Text_blocks\Admin;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_2 extends AdminStyle {

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
                'sa_t_b_1st_style', $this->style, [
            'label' => __('Blocks Style', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'contentborderheading',
            'loader' => true,
            'options' => [
                'headingbordercontent' => __('Heading > Border > Content', SHORTCODE_ADDOONS),
                'contentborderheading' => __('Content > Border > Heading', SHORTCODE_ADDOONS),
                'headingcontentborder' => __('Heading > Content > Border', SHORTCODE_ADDOONS),
                'contentheadingborder' => __('Content > Heading >Border', SHORTCODE_ADDOONS),
            ],
                ]
        );

        $this->add_control(
                'sa_t_b_1st_text', $this->style, [
            'label' => __('First Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'This is First Text',
            'default' => 'We are<br>Web design <span style=" color: #ed7e4e; font-weight: bold; "> Agency </span>',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading' => '',
            ],
                ]
        );

        $this->add_control(
                'sa_t_b_3rd_text', $this->style, [
            'label' => __('Content', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            Controls::SEPARATOR => true,
            'placeholder' => 'This is Content Text',
            'default' => '19 years of Experience',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content' => '',
            ],
                ]
        );


        $this->add_control(
                'sa_t_b_alignment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'left',
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
                '{{WRAPPER}}  .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading ' => 'text-align:{{VALUE}};',
                '{{WRAPPER}}  .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content ' => 'text-align:{{VALUE}};',
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_t_b_max_width', $this->style, [
            'label' => __('Max-Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 600,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-body' => 'width:{{SIZE}}{{UNIT}};'
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_text_sha', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading' => '',
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-third-font-settings', [
            'label' => esc_html__('Content Text', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_t_b_3_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#6e6e6e',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_3_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_t_b_3_text_sha', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content' => '',
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-text-blocks-border', [
            'label' => esc_html__('Border', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_responsive_control(
                'sa_t_b_br_width', $this->style, [
            'label' => __('Max-Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 500,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => .1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-block-border' => 'width:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_btn_br_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-block-border' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_t_b_br_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 6,
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
                '{{WRAPPER}} .oxi-addons-text-blocks-style-2 .oxi-addons-text-blocks-border' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
