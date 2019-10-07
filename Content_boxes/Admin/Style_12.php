<?php

namespace SHORTCODE_ADDONS_UPLOAD\Content_boxes\Admin;

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

class Style_12 extends AdminStyle {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General', SHORTCODE_ADDOONS),
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

        // start

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Add New Content', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );




        $this->add_repeater_control(
                'sa_icon_effects_data', $this->style, [
            'label' => __('', SHORTCODE_ADDOONS),
            'type' => Controls::REPEATER,
            'fields' => [
                'sa_el_content_box_image_bg' => [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/macbook-apple-imac-computer-39284-1.jpeg',
                    ],
                    'controller' => 'add_group_control',
                ],
                'sa_el_cb_fa_icon' => [
                    'label' => esc_html__('Icon Class', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fab fa-facebook',
                    'selector' => [
                        '{{WRAPPER}} .oxi_cb_temp_12_{{KEY}} .oxi-addons-box-icon' => '',
                    ],
                ],
                'sa_el_cb_title' => [
                    'label' => esc_html__('Heading', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Medical Cannavis',
                    'selector' => [
                        '{{WRAPPER}} .oxi_cb_temp_12_{{KEY}} .oxi-addons-box-name' => '',
                    ],
                ],
                'sa_el_cb_content' => [
                    'label' => esc_html__('Content', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
                    'selector' => [
                        '{{WRAPPER}} .oxi_cb_temp_12_{{KEY}} .oxi-addons-box-desc' => '',
                    ],
                ],
                'sa_el_cb_fa_arrow_icon' => [
                    'label' => esc_html__('Arrow Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'fas fa-angle-right',
                    'selector' => [
                        '{{WRAPPER}} .oxi_cb_temp_12_{{KEY}} .oxi-addons-box-arrow' => '',
                    ],
                ],
                'sa_el_arrow_icon_link' => [
                    'label' => esc_html__('Button Link', SHORTCODE_ADDOONS),
                    'type' => Controls::URL,
                    'default' => 'https://www.example.com',
                    'controller' => 'add_group_control',
                ],
            ],
            'title_field' => 'sa_el_cb_title',
            'button' => 'Add New Item',
                ]
        );

        $this->end_controls_section();













        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_group_control(
                'sa-ac-column', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-admin-edit-list' => '',
            ],
                ]
        );
        $this->add_control(
                'sa-max-width-condition', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'separator' => true,
            'loader' => true,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_TEXT,
            'default' => 'default',
            'options' => [
                'dynamic' => [
                    'title' => __('Dynamic', SHORTCODE_ADDOONS),
                ],
                'default' => [
                    'title' => __('Default', SHORTCODE_ADDOONS),
                ]
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-content-boxes-max-width', $this->style, [
            'label' => __('Max-Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => true,
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
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}}  .oxi_cb_temp_12.sa-max-w-dynamic' => 'max-width:{{SIZE}}{{UNIT}};'
            ],
            'condition' => [
                'sa-max-width-condition' => 'dynamic',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa-cb-box-height', $this->style, [
            'label' => __('Icon Box Height', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'loader' => true,
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
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box' => 'height:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa-ac-hover-background', $this->style, [
            'label' => __('Hover Background', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-inner' => 'background:{{VALUE}};'
            ],
                ]
        );


        $this->add_responsive_control(
                'sa-cbox-box-border-radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-outer' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-content-box-box-shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-outer' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-c-b-box-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa_ac_box_padding', $this->style, [
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-outer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_ac_box_margin', $this->style, [
            'label' => __('Margin', SHORTCODE_ADDOONS),
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-outer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Icon Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa-cb-op-cl-icon-size', $this->style, [
            'label' => __('Icon Size', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 80,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_control(
                'sa-ac-icon-color', $this->style, [
            'label' => __('Icon Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-icon' => 'color:{{VALUE}};'
            ],
                ]
        );


        $this->add_control(
                'sa_icon_box_icon_align', $this->style, [
            'label' => __('Icon Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa-c-b-icon-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-icon-padding', $this->style, [
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Heading Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa-ac-heading-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-name' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-heading-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-name' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-title-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-name' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_heading_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-name' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-heading-padding', $this->style, [
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Content Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa-ac-content-color', $this->style, [
            'label' => __('Font Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-desc' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-content-typho', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-desc' => ''
            ],
                ]
        );
        $this->add_group_control(
                'sa-ac-content-tx-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-desc' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_icon_box_content_align', $this->style, [
            'label' => __('Text Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-desc' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa-ac-content-padding', $this->style, [
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Arrow Settings', SHORTCODE_ADDOONS),
            'showing' => false,
                ]
        );
        $this->add_responsive_control(
                'sa-cb-arrow-font-size', $this->style, [
            'label' => __('Arrow Size', SHORTCODE_ADDOONS),
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
                    'max' => 100,
                    'step' => 0.1,
                ],
                'rem' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-arrow' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );

        $this->add_control(
                'sa-ac-arroww-color', $this->style, [
            'label' => __('Arrow Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#fff',
            'selector' => [
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-icons' => 'color:{{VALUE}};'
            ],
                ]
        );

        $this->add_control(
                'sa_cb_arrow_align', $this->style, [
            'label' => __('Arrow Align', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-arrow' => 'text-align: {{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa-c-b-arrow-animation', $this->style, [
            'type' => Controls::ANIMATION,
                ]
        );
        $this->add_responsive_control(
                'sa-ac-arrow-padding', $this->style, [
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
                '{{WRAPPER}} .oxi_cb_temp_12 .oxi-addons-box-arrow' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();







        $this->end_section_devider();

        $this->end_section_tabs();
    }

}
