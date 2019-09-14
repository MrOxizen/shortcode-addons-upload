<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Info_image_boxes\Admin;

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
                'shortcode-addons-general-settings', [
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_info_image_column', $this->style, [
            'type' => Controls::COLUMN,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_info_image_bg_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading .heading-data' => 'background:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_info_image_border', $this->style, [
            'type' => Controls::BORDER,
                ]
        );

        $this->add_responsive_control(
                'sa_info_image_padding', $this->style, [
            'label' => __('Padding', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                'sa_info_image_margin', $this->style, [
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

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-general-style', [
            'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
//            'showing' => TRUE,
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
        $this->add_group_control(
                'sa_info_image_normal_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_boxes_container' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_normal_border_radius', $this->style, [
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
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_info_image_hover_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_boxes_container' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_info_image_hover_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-info-image-image', [
            'label' => esc_html__('Image', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_info_image_img_width', $this->style, [
            'label' => __('Width', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 10,
                ]
        );
        $this->add_control(
                'sa_info_image_img_height', $this->style, [
            'label' => __('Height', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 10,
                ]
        );
        $this->add_control(
                'sa_info_image_img_alignment', $this->style, [
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
                '{{WRAPPER}}  .oxi-addons-heading-container ' => 'text-align:{{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'sa_info_image_img_bg_color', $this->style, [
            'label' => __('Background ', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#787878',
            'oparetor' => 'RGB',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-ac-template-1-heading .heading-data' => 'background:{{VALUE}};'
            ],
                ]
        );

        $this->add_group_control(
                'sa_info_image_img_bor', $this->style, [
            'type' => Controls::BORDER,
                ]
        );

        $this->add_responsive_control(
                'sa_info_image_img_border_radius', $this->style, [
            'label' => __('Border Radius', SHORTCODE_ADDOONS),
            'type' => Controls::DIMENSIONS,
            'separator' => TRUE,
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
                'sa_info_image_img_padding', $this->style, [
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
        $this->add_group_control(
                'sa_info_image_img_boxshadow',
                $this->style,
                [
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_boxes_container' => ''
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-heading', [
            'label' => esc_html__('Heading Setting', SHORTCODE_ADDOONS),
                ]
        );


        $this->add_control(
                'sa_info_image_head_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#252b25',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_info_image_head_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-heading-span', [
            'label' => esc_html__('Heading Span Setting', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_info_image_head_span_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#252b25',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_info_image_head_span_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-short-details', [
            'label' => esc_html__('Short Details', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_info_image_short_det_color', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'type' => Controls::COLOR,
            'default' => '#252b25',
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => 'color:{{VALUE}};'
            ],
                ]
        );
        $this->add_group_control(
                'sa_info_image_short_det_typo', $this->style, [
            'type' => Controls::TYPOGRAPHY,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-heading-container .oxi-addons-heading' => '',
            ],
                ]
        );
        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Box', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Box Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Info Image Boxes Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';

       
        $this->add_control(
                'sa_info_image_h_text',
                $this->style,
                [
                    'label' => __('Heading', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Lorem Ipsum is simply dummy text',
                    'placeholder' => 'Your Heading Here',
                ]
        );

        $this->add_control(
                'sa_info_image_content_text',
                $this->style,
                [
                    'label' => __('Content', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit.',
                    'placeholder' => 'Your Content Here',
                ]
        );
         $this->add_group_control(
                'sa_info_image_img_src', $this->style, [
            'type' => Controls::MEDIA,
                ]
        );
        $this->add_control(
                'sa_info_image_url_open',
                $this->style,
                [
                    'label' => __('Link Active', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '',
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'link_show',
                ]
        );
        $this->add_group_control(
                'sa_info_image_url',
                $this->style,
                [
                    'type' => Controls::URL,
                    'loader' => TRUE,
                    'condition' => [
                        'sa_info_image_url_open' => 'link_show',
                    ],
                ]
        );
        echo '</div>';
    }

}
