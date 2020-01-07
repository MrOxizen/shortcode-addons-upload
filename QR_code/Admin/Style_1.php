<?php

namespace SHORTCODE_ADDONS_UPLOAD\QR_code\Admin;

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
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings'
            ]
                ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => __('QR Code Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );




        $this->add_control(
                'sa_qr_code_content', $this->style, [
            'type' => Controls::TEXTAREA,
            'placeholder' => 'http://oxilab.org',
            'default' => 'http://oxilab.org',
            'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_qr_code_label', $this->style, [
            'label' => __('Label Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'text',
            'options' => [
                'none' => __('None', SHORTCODE_ADDOONS),
                'text' => __('Text', SHORTCODE_ADDOONS),
                'image' => __('Image', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->add_control(
                'sa_qr_code_label_text', $this->style, [
            'label' => __('Text', SHORTCODE_ADDOONS),
            'type' => Controls::TEXT,
            'placeholder' => 'Oxilab',
            'default' => 'Oxilab',
            'condition' => [
                'sa_qr_code_label' => 'text',
            ],
                ]
        );
        $this->add_group_control(
                'sa_qr_code_label_text', $this->style, [
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/08/placeholder-1.png',
            ],
            'condition' => [
                'sa_qr_code_label' => 'image',
            ],
                ]
        );

        $this->add_control(
                'sa_qr_code_mode', $this->style, [
            'label' => __('Mode', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'Box',
            'options' => [
                'Strip' => __('Strip', SHORTCODE_ADDOONS),
                'Box' => __('Box', SHORTCODE_ADDOONS),
            ],
            'condition' => [
                'sa_qr_code_label' => ['text', 'image'],
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_qr_code_align', $this->style, [
            'label' => __('Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_qrcode_style1' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_qr_code_padding', $this->style, [
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
                    'max' => 300,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_qrcode_style1 .oxi_addons_qrcode_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
            'separator' => TRUE
                ]
        );

        $this->add_responsive_control(
                'sa_qr_code_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_qrcode_style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Additional Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_qr_code_color', $this->style, [
            'label' => __('Code Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#808080',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-details' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_color_label', $this->style, [
            'label' => __('Lavel Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#808080',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-parent-wrapper-style-1 .oxi-addons-details' => 'color:{{VALUE}};'
            ],
            'condition' => [
                'sa_qr_code_label' => 'text',
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_redius', $this->style, [
            'label' => __('Code Redius', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '0',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_size', $this->style, [
            'label' => __('Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '350',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_label_size', $this->style, [
            'label' => __('Label Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '0',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
            ],
           'condition' => [
                'sa_qr_code_label' => ['text', 'image'],
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_lx', $this->style, [
            'label' => __('Label POS X', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '50',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'condition' => [
                'sa_qr_code_label' => ['text', 'image'],
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_ly', $this->style, [
            'label' => __('Label POS Y', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '50',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'condition' => [
                'sa_qr_code_label' => ['text', 'image'],
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_mv', $this->style, [
            'label' => __('Min Version', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => TRUE,
            'default' => [
                'unit' => 'px',
                'size' => '0',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 1,
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_qr_code_ecl', $this->style, [
            'label' => __('Error Correction Level', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'L',
            'options' => [
                'L' => __('Low (7%)', SHORTCODE_ADDOONS),
                'M' => __('Medium (15%)', SHORTCODE_ADDOONS),
                'Q' => __('Quartile (25%)', SHORTCODE_ADDOONS),
                'H' => __('High (30%)', SHORTCODE_ADDOONS),
            ],
           
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
