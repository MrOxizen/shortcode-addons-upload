<?php

namespace SHORTCODE_ADDONS_UPLOAD\Justified_gallery\Admin;

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
            'label' => esc_html__('Feature Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_repeater_control(
                'sa_jg_reapeter', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_jg_image' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/10/cycling-bike-trail-sport-161172-1-1-2-1-768x511.jpeg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_jg_title' => [
                    'label' => esc_html__('Hover Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Image 01',
                    'loader' => TRUE,
                ],
            ],
            'title_field' => 'sa_jg_title',
                ]
        );




        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa_jg_main_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_jg_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_jg_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    'min' => -100,
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
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_jg_bx_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1' => ''
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_jg_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->add_responsive_control(
                'sa_jg_margin', $this->style, [
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
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Image Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_jg_image_height', $this->style, [
            'label' => __('Image Row Hight', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'loader' => TRUE,
            'default' => '150',
                ]
        );
        $this->add_group_control(
                'sa_jg_image_main_background', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_img' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa_jg_image_button_border', $this->style, [
            'type' => Controls::BORDER,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_img' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_jg_image_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    'min' => -100,
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
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_jg_image_bx_shadow', $this->style, [
            'label' => __('Box Shadow', SHORTCODE_ADDOONS),
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_img' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_jg_imag_padding', $this->style, [
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
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_item .caption' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; margin-bottom: calc({{BOTTOM}}{{UNIT}} - 1px) !important;',
            ],
                ]
        );

        $this->add_control(
                'sa_jg_image_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'loader' => TRUE,
            'default' => '10',
            
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Hover Text Settings', SHORTCODE_ADDOONS),
            'showing' => FALSE,
                ]
        );
        $this->add_group_control(
                'sa_justified_gallery_hover_text_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'include' => Controls::ALIGNNORMAL,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_item .caption' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_justified_gallery_hover_text_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#ffffff',
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_item .caption' => 'color: {{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_justified_gallery_hover_text_bg', $this->style, [
            'type' => Controls::BACKGROUND,
            'selector' => [
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_item .caption' => ''
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_justified_gallery_hover_text_p', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
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
                '{{WRAPPER}} .oxi_addons_justified_gallery_style1 .oxi_addons_justified_gallery_item .caption' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons-lightbox',
            [
                'label' => esc_html__('Lightbox Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE, 
            ]
        ); 
       
        $this->add_control(
            'sa_justified_gallery_light_z_ind',
            $this->style,
            [
                'label' => __('Z-index', SHORTCODE_ADDOONS),
                'type' => Controls::NUMBER,
                'default' => 9999,
                'loader' => TRUE,

            ]
        );
        $this->add_control(
            'sa_justified_gallery_light_bg_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'loader' => TRUE,
                'default' => 'rgba(68, 161, 86,1.00)',
                'selector' => [
                    '{{WRAPPER}}.Oximfp-bg' => 'background:{{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_justified_gallery_light_cls_clr',
            $this->style,
            [
                'label' => __('Closing Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'loader' => TRUE,
            ]
        );
        $this->add_control(
            'sa_justified_gallery_light_pre_clr',
            $this->style,
            [
                'label' => __('Preloader Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'loader' => TRUE,
            ]
        ); 

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
