<?php

namespace SHORTCODE_ADDONS_UPLOAD\Audio_playlist\Admin;

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
                    'style-settings' => esc_html__('Audio Player Settings', SHORTCODE_ADDOONS),
                    'playlist-settings' => esc_html__('Audio PlayList Settings', SHORTCODE_ADDOONS),
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
                'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_repeater_control(
            'sa_ap_list_data',
            $this->style,
            [
                'label' => __('', SHORTCODE_ADDOONS),
                'type' => Controls::REPEATER,
                'fields' => [
                    'sa_addons_ap_list_mp3_url' => [
                        'label' => esc_html__('Audio Url', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'loader' => TRUE,
                        'default' => 'https://www.oxilab.org/wp-content/uploads/2019/03/Vuelve_Intro-632585.mp3',
                    ],
                    'sa_ap_list_album_text' => [
                        'label' => esc_html__('Audio Title', SHORTCODE_ADDOONS),
                        'type' => Controls::TEXT,
                        'loader' => TRUE,
                        'default' => 'Download Despacito Marimba',
                    ],

                ],
                'title_field' => 'sa_ap_list_album_text',
                'button' => 'Add New Audio ',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_w',
            $this->style,
            [
                'label' => __('Max-Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '500',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_main' => 'max-width: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_main' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );

        $this->add_group_control(
            'sa_ap_list_boxshadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_main' => ''
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_animation',
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
                'label' => esc_html__('Image Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_group_control(
            'sa_ap_list_img',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_img' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_img_w',
            $this->style,
            [
                'label' => __('Max Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '250',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_img' => 'height: {{SIZE}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Audio Title', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_control(
            'sa_ap_list_title_text',
            $this->style,
            [
                'label' => __('Title Text', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'default' => 'Miscellaneous Ringtones',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_title' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_title_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_title' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_title_shad',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_title' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_title_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f5f5f5',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_ap_list_title_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_ap_list_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Audio Sub Title', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_ap_list_sub_title_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_album_name' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_sub_title_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_album_name' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_ap_list_sub_title_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .sa_addons_album_name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'label' => esc_html__('Audio All Contorls', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_group_control(
            'sa_ap_list_audio_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'loader' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-interface ' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_all_con_on_off',
            $this->style,
            [
                'label' => __('Player Control', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );;
        $this->add_control(
            'sa_ap_list_main_vol_on_off',
            $this->style,
            [
                'label' => __('Volume Control', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_time_on_off',
            $this->style,
            [
                'label' => __('Time Controls', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'all_control_section',
            $this->style,
            [
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
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-interface' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Time Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_ap_list_time_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Current Time', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Duration Time', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
            'sa_ap_list_curr_time_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-current-time' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_curr_time_shad',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-current-time' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_curr_time_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-current-time' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_curr_time_m',
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
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-current-time' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_group_control(
            'sa_ap_list_dur_time_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-duration' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_dur_time_shad',
            $this->style,
            [
                'type' => Controls::TEXTSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-duration' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_dur_time_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-duration' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_dur_time_m',
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
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-duration' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Audio Progress Bar Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_ap_list_all_con_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_aud_pro_on_off',
            $this->style,
            [
                'label' => __('Progress Bar Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_t_prog_w',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '300',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-progress' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_t_prog_h',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '5',
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
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-progress' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Background Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Loading Color', SHORTCODE_ADDOONS),
                    'Active' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_t_prog_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(217, 217, 217, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-progress' => 'background: {{VALUE}} !important;'
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_t_prog_load_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(255, 255, 255, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-seek-bar' => 'background: {{VALUE}} !important;'
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_t_prog_curr_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#52d1ff',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-play-bar' => 'background: {{VALUE}} !important;'
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_ap_list_audio_t_prog_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-progress' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_t_prog_m',
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
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-progress' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_aud_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Volume Progress Bar Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_ap_list_main_vol_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_vol_pro_on_off',
            $this->style,
            [
                'label' => __('Volume Progress Bar Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_v_prog_w',
            $this->style,
            [
                'label' => __('Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '5',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_v_prog_h',
            $this->style,
            [
                'label' => __('Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '140',
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
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar-value' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Background Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_v_prog_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(252, 252, 252, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar' => 'background: {{VALUE}} !important;'
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_v_prog_curr_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(82, 209, 255, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar-value' => 'background: {{VALUE}} !important;'
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_ap_list_audio_v_prog_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_v_prog_m',
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
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                    'em' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-bar' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_vol_pro_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Previous, Play, Pause, Stop, Next Icon Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_ap_list_all_con_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Previous', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Play', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Pause', SHORTCODE_ADDOONS),
                    'stop' => esc_html__('Stop', SHORTCODE_ADDOONS),
                    'next' => esc_html__('Next', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_pre_on_off',
            $this->style,
            [
                'label' => __('Previous Icon Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_pre_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f04a',
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_pre_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_pre_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Icon Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_pre_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_pre_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#2dbce0',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous:focus::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_ap_list_audio_pre_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous' => 'background: {{VALUE}} !important;',
                ],

                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_pre_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_pre_icon_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_pre_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .mejs-pause button::after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_audio_pre_icon_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-previous' => '',
                ],
                'condition' => [
                    'sa_ap_list_pre_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_play_on_off',
            $this->style,
            [
                'label' => __('Play Icon Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_play_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f04b',
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_play_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_play_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist div.jp-type-playlist .jp-play' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_play_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_play_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play' => 'background: {{VALUE}} !important;',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-playing div.jp-type-playlist .jp-play' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_play_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_play_icon_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-playing div.jp-type-playlist .jp-play' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_play_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-playing div.jp-type-playlist .jp-play' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_audio_play_icon_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-play' => '',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-playing div.jp-type-playlist .jp-play' => '',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_paus_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f04c',
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_paus_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-playing div.jp-type-playlist .jp-play::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_paus_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-playing div.jp-type-playlist .jp-play::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_paus_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_play_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_stop_on_off',
            $this->style,
            [
                'label' => __('Stop Icon Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_stop_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f04d',
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_stop_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop::before' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_stop_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Icon Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_stop_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_stop_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#2dbce0',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_ap_list_audio_stop_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop' => 'background: {{VALUE}} !important;',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_stop_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_stop_icon_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_stop_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_audio_stop_icon_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop' => '',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-stop:focus' => '',
                ],
                'condition' => [
                    'sa_ap_list_stop_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_next_on_off',
            $this->style,
            [
                'label' => __('Next Icon Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_next_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f04e',
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_next_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next::before' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next:focus::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_next_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '50',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next:focus' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Icon Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_next_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_next_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#2dbce0',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next:focus::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_ap_list_audio_next_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next' => 'background: {{VALUE}} !important;',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next:focus' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_next_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_next_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next:focus' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->add_group_control(
            'sa_ap_list_audio_next_icon_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next' => '',
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-type-playlist .jp-next:focus' => '',
                ],
                'condition' => [
                    'sa_ap_list_next_on_off' => 'yes'
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Min, Mute, Max Icon Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_ap_list_main_vol_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'hover' => esc_html__('Min Icon', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Mute Icon', SHORTCODE_ADDOONS),
                    'stop' => esc_html__('Max Icon', SHORTCODE_ADDOONS),
                ]
            ]
        );


        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_min_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f026',
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_min_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-audio .jp-volume-controls .jp-mute::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_min_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '25',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-audio .jp-volume-controls .jp-mute' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_min_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-audio .jp-volume-controls .jp-mute::before' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_min_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-audio .jp-volume-controls .jp-mute' => 'background: {{VALUE}} !important;',
                ],

            ]
        );
        $this->add_control(
            'sa_ap_list_min_vol_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_min_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-audio .jp-volume-controls .jp-mute' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_mut_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f6a9',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_mut_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ff1c1c',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-state-muted .jp-volume-controls .jp-mute::before' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_mut_vol_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_max_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f028',
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_max_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-controls .jp-volume-max::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Icon Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_max_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} ..sa_addons_ap_list_container_style_1 .jp-volume-controls .jp-volume-max::before' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_max_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#50fa7b',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-volume-controls .jp-volume-max:focus::before' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'sa_ap_list_max_vol_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'separator' => TRUE,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
            'shortcode-addons-start-tabs',
            [
                'condition' => [
                    'shortcode-addons-start-tabs' => 'playlist-settings'
                ]
            ]
        );

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Audio Playlist Contorls', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_ap_list_playlist_on_off',
            $this->style,
            [
                'label' => __('Playlist Control', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_shuff_rep_on_off',
            $this->style,
            [
                'label' => __('Shuffle & Repeat', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Audio Repeat Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_ap_list_shuff_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_rep_on_off',
            $this->style,
            [
                'label' => __('Repeat Icon Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_rep_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f2f9',
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_rep_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_rep_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '20',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Icon Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_rep_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_rep_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#52d1ff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat:focus::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_ap_list_audio_rep_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_rep_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_rep_icon_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_rep_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_ap_list_audio_rep_icon_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-repeat' => '',
                ],
                'condition' => [
                    'sa_ap_list_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Audio Shuffle Setting', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_ap_list_shuff_rep_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_shuff_on_off',
            $this->style,
            [
                'label' => __('Shuffle Icon Enable', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'default' => 'yes',
                'loader' => TRUE,
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_ap_list_audio_shuff_icon',
            $this->style,
            [
                'label' => __('Icon', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'loader' => TRUE,
                'default' => 'f074',
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_shuff_icon_s',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '16',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle::before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_shuff_icon_w_h',
            $this->style,
            [
                'label' => __('Width & Height', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '20',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Icon Color', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Active Color', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_shuff_icon_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_audio_shuff_icon_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#52d1ff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle:focus::before' => 'color: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
            'sa_ap_list_audio_shuff_icon_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'oparetor' => 'RGB',
                'separator' => TRUE,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle' => 'background: {{VALUE}} !important;',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_shuff_type',
            $this->style,
            [
                'label' => __('Icon Type', SHORTCODE_ADDOONS),
                'type' => Controls::SELECT,
                'loader' => TRUE,
                'default' => 'solid',
                'options' => [
                    'solid' => __('Solid', SHORTCODE_ADDOONS),
                    'regular' => __('Regular', SHORTCODE_ADDOONS),
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_shuff_icon_b_r',
            $this->style,
            [
                'label' => __('Border Radius', SHORTCODE_ADDOONS),
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_audio_shuff_icon_margin',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_ap_list_audio_shuff_icon_shad',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-shuffle' => '',
                ],
                'condition' => [
                    'sa_ap_list_shuff_on_off' => 'yes'
                ]
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Playlist Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_ap_list_playlist_on_off' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_ap_list_playlist_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-playlist' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_playlist_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-playlist' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Playlist Item Settings', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_ap_list_playlist_on_off' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            'sa_ap_list_playlist_typo',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-playlist li' => ''
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                    'active' => esc_html__('Active', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_playlist_item_c',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#ffffff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-playlist li .jp-playlist-item' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_playlist_item_bg',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(44, 108, 133, 1)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-playlist li' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_playlist_item_c_h',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f5f2f2',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 div.jp-type-playlist div.jp-playlist .jp-playlist-item:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_ap_list_playlist_item_c_a',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '#f8edff',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 div.jp-type-playlist div.jp-playlist li.jp-playlist-current a.jp-playlist-current' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_control(
            'sa_ap_list_playlist_item_bg_a',
            $this->style,
            [
                'label' => __('Background Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => 'rgba(8, 129, 156, 1.00)',
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 div.jp-type-playlist div.jp-playlist li.jp-playlist-current' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'sa_ap_list_playlist_item_padding',
            $this->style,
            [
                'label' => __('Padding', SHORTCODE_ADDOONS),
                'type' => Controls::DIMENSIONS,
                'separator' => TRUE,
                'default' => [
                    'unit' => 'px',
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 .jp-playlist li .jp-playlist-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Playlist Item Line Settings', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition' => [
                    'sa_ap_list_playlist_on_off' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'sa_ap_list_playlist_item_l_c',
            $this->style,
            [
                'label' => __('Line Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => 'rgba(82, 209, 255, 1)',
                'selector' => [
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 div.jp-type-playlist div.jp-playlist li.jp-playlist-current::before' => 'background: {{VALUE}} !important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_ap_list_playlist_item_l_w',
            $this->style,
            [
                'label' => __('Line Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => '6',
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
                    '{{WRAPPER}} .sa_addons_ap_list_container_style_1 div.jp-type-playlist div.jp-playlist li.jp-playlist-current::before' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
