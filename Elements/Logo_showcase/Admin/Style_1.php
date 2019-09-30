<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Logo_showcase\Admin;

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

        $this->add_group_control(
            'sa_logo_showcase_col',
            $this->style,
            [
                'type' => Controls::COLUMN,
                'selector' => [
                    '{{WRAPPER}} .oxi-addons-admin-edit-list' => ''
                ],
            ]
        );
        
        $this->add_responsive_control(
            'sa_logo_showcase_margin',
            $this->style,
            [
                'label' => __('Margin', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => -200,
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_container' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_logo_showcase_animation',
            $this->style,
            [
                'type' => Controls::ANIMATION,
            ]
        );

        $this->end_controls_section();

        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Logo Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_logo_showcase_logo_w',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '200',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_1' => 'width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_logo_showcase_logo_h',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => '40',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_1:after' => 'padding-bottom: {{SIZE}}{{UNIT}};'
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_logo_showcase_logo_p',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '15',
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
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_1 .sa_addons_img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_logo_showcase_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_logo_showcase_style_1' => ''
                ],
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
            'title' => __('Add New Logo Showcase', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Logo Showcase Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data()
    {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Logo Showcase Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">';

        $this->add_group_control(
            'sa_logo_showcase_img',
            $this->style,
            [
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_logo_showcase_url_open',
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
            'sa_logo_showcase_url',
            $this->style,
            [
                'type' => Controls::URL,
                'loader' => TRUE,
                'condition' => [
                    'sa_logo_showcase_url_open' => 'link_show',
                ],
            ]
        );
        echo '</div>';
    }
}
