<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Count_down\Admin;

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

class Style_1 extends AdminStyle
{

    public function register_controls()
    {

        $this->start_section_header(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'general-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cd_date_time',
            $this->style,
            [
                'label' => __('Date', SHORTCODE_ADDOONS),
                'type' => Controls::DATE_TIME,
                'time' => TRUE,
            ]
        );

        $this->add_responsive_control(
            'sa_cd_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .class .class' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_cd_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Number Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_cd_num_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
            ]
        );
        $this->add_group_control(
            'sa_cd_num_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
            ]
        );
        $this->add_responsive_control(
            'sa_cd_num_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .class .class' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Text Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cd_txt_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
            ]
        );
        $this->add_group_control(
            'sa_cd_txt_typho',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
            ]
        );
        $this->add_responsive_control(
            'sa_cd_txt_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .class .class' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->end_section_devider();

        $this->end_section_tabs();


        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'style-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Days Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_cd_d_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'Days',
            ]
        );
        $this->add_control(
            'sa_cd_d_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'no',
                'options' => [
                    'yes' => [
                        'title' => __('Yes', SHORTCODE_ADDOONS),
                    ],
                    'no' => [
                        'title' => __('No', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .class .class' => 'text-align:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_d_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_d_txt_sps' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_cd_d_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_d_txt_sps' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Hours Settings', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_cd_hours_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'Hours',
            ]
        );
        $this->add_control(
            'sa_cd_hours_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'no',
                'options' => [
                    'yes' => [
                        'title' => __('Yes', SHORTCODE_ADDOONS),
                    ],
                    'no' => [
                        'title' => __('No', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .class .class' => 'text-align:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_hours_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_hours_txt_sps' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_cd_hours_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_hours_txt_sps' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Minutes Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_cd_min_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'Minutes',
            ]
        );
        $this->add_control(
            'sa_cd_min_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'no',
                'options' => [
                    'yes' => [
                        'title' => __('Yes', SHORTCODE_ADDOONS),
                    ],
                    'no' => [
                        'title' => __('No', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .class .class' => 'text-align:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_min_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_min_txt_sps' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_cd_min_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_min_txt_sps' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Seconds Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_cd_seco_txt',
            $this->style,
            [
                'label' => __('Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'placeholder' => 'Seconds',
            ]
        );
        $this->add_control(
            'sa_cd_seco_txt_sps',
            $this->style,
            [
                'label' => __('Separate Settings', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => Controls::OPERATOR_TEXT,
                'default' => 'no',
                'options' => [
                    'yes' => [
                        'title' => __('Yes', SHORTCODE_ADDOONS),
                    ],
                    'no' => [
                        'title' => __('No', SHORTCODE_ADDOONS),
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .class .class' => 'text-align:{{VALUE}};'
                ],
            ]
        );
        $this->add_control(
            'sa_cd_seco_num_color',
            $this->style,
            [
                'label' => __('Number Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_seco_txt_sps' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_cd_seco_txt_color',
            $this->style,
            [
                'label' => __('Text Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#787878',
                'condition' => [
                    'sa_cd_seco_txt_sps' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener()
    {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Accordions', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Accourdions Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data()
    {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Accordions Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div cecholass="modal-body">';
        $this->add_control(
            'sa_el_text',
            $this->style,
            [
                'label' => __('Title', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Lorem Ipsum is simply dummy text',
                'placeholder' => 'Lorem Ipsum is simply dummy text',
            ]
        );

        $this->add_control(
            'sa_el_content',
            $this->style,
            [
                'label' => __('Content', SHORTCODE_ADDOONS),
                'type' => Controls::TEXTAREA,
                'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'placeholder' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            ]
        );
        echo '</div>';
    }
}
