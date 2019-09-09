<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Heading\Admin;

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
                'shortcode-addons-heading-tabs'
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-heading-text', [
            'label' => esc_html__('Heading Text', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );



        $this->add_control(
                'sa_head_text', $this->style, [
            'label' => __('Heading Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXTAREA,
            'default' => 'This is Heading Text',
            'placeholder' => 'This is Heading Text',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container  .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_head_image', $this->style, [
            'type' => Controls::MEDIA,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => '',
            ],
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
                'sa_head_heading_alignment', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'separator' => TRUE,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-up',
                ],
                'center' => [
                    'title' => __('Center', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'right' => [
                    'title' => __('Right', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi-addons-heading-container ' => 'text-align:{{VALUE}};',
            ],
                ]
        );
        $this->end_controls_section();





        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
                'shortcode-addons-font-settings', [
            'label' => esc_html__('Typography ', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#252b25',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->add_group_control(
                'sa_head_border_btm', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => '',
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
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ]
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
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container' => ''
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        return false;
    }

}
