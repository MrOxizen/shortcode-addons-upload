<?php

namespace SHORTCODE_ADDONS_UPLOAD\Video_box\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_3 extends AdminStyle
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
                'label' => esc_html__('General Setting', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
       
        $this->add_group_control(
            'sa_video_box_video_link',
            $this->style,
            [
                'label'         => __('Youtube Video Link', SHORTCODE_ADDOONS),
                'type'          => Controls::FILEUPLOAD,
                'select'          => Controls::VIDEO,
                'placeholder'  => 'www.example.com/video.mp4',
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/videoplayback.mp4',
                ],
            ]
        );

        $this->add_control(
            'sa_video_box_controls',
            $this->style,
            [
                'label'         => __('Player Controls', SHORTCODE_ADDOONS),
                'description'   => __('Show/hide player controls', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_video_box_mute',
            $this->style,
            [
                'label'         => __('Mute', SHORTCODE_ADDOONS),
                'description'   => __('This will play the video muted', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_video_box_self_autoplay',
            $this->style,
            [
                'label'         => __('Auto Play', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'sa_video_box_loop',
            $this->style,
            [
                'label'         => __('Loop', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_video_box_start',
            $this->style,
            [
                'label'       => __('Start Time', SHORTCODE_ADDOONS),
                'type'        => Controls::NUMBER,
                'description' => __('Specify a start time (in seconds)', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'sa_video_box_end',
            $this->style,
            [
                'label'       => __('End Time', SHORTCODE_ADDOONS),
                'type'        => Controls::NUMBER,
                'description' => __('Specify an end time (in seconds)', SHORTCODE_ADDOONS),
            ]
        );
        $this->add_control(
            'aspect_ratio',
            $this->style,
            [
                'label'         => __('Aspect Ratio', SHORTCODE_ADDOONS),
                'type'          => Controls::SELECT,
                'loader' => TRUE,
                'options'       => [
                    '11'    => '1:1',
                    '169'   => '16:9',
                    '43'    => '4:3',
                    '32'    => '3:2',
                    '219'   => '21:9',
                ],
                'default'       => '169',
            ]
        );
        $this->add_control(
            'sa_video_box_image_switcher',
            $this->style,
            [
                'label'         => __('Overlay', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default'       => 'yes',
                'return_value' => 'yes',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label'         => __('Overlay', SHORTCODE_ADDOONS),
                'condition'     => [
                    'sa_video_box_image_switcher'  => 'yes'
                ],
                'showing' => FALSE,
            ]
        );
        $this->add_group_control(
            'sa_video_box_image',
            $this->style,
            [
                'label'         => __('Image', SHORTCODE_ADDOONS),
                'description'   => __('Choose an image for the video box', SHORTCODE_ADDOONS),
                'type' => Controls::MEDIA,
                'default' => [
                    'type' => 'media-library',
                    'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
                ]
            ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Play Icon', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );

        $this->add_control(
            'sa_video_box_play_icon_switcher',
            $this->style,
            [
                'label'         => __('Play Icon', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => 'yes',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_icon_hor_position',
            $this->style,
            [
                'label' => __('Horizontal Position (%)', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'condition'     => [
                    'sa_video_box_play_icon_switcher'  => 'yes',
                ],
                'selector'     => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => 'left: {{SIZE}}%;',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_icon_ver_position',
            $this->style,
            [
                'label' => __('Vertical Position (%)', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'condition'     => [
                    'sa_video_box_play_icon_switcher'  => 'yes',
                ],
                'selector'     => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => 'top: {{SIZE}}%;',
                ]
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Description', SHORTCODE_ADDOONS),
                'showing' => FALSE,
            ]
        );

        $this->add_control(
            'sa_video_box_video_text_switcher',
            $this->style,
            [
                'label'         => __('Video Text', SHORTCODE_ADDOONS),
                'type' => Controls::SWITCHER,
                'loader' => TRUE,
                'default' => '',
                'label_on' => __('Yes', SHORTCODE_ADDOONS),
                'label_off' => __('No', SHORTCODE_ADDOONS),
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'sa_video_box_description_text',
            $this->style,
            [
                'label'         => __('Text', SHORTCODE_ADDOONS),
                'type'          => Controls::TEXTAREA,
                'default'       => __('Play Video', SHORTCODE_ADDOONS),
                'condition'     => [
                    'sa_video_box_video_text_switcher' => 'yes'
                ],
                'selector'     => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-text span' => '',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_description_hor_position',
            $this->style,
            [
                'label' => __('Horizontal Position (%)', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    'sa_video_box_video_text_switcher' => 'yes'
                ],
                'selector'     => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-description-container' => 'left: {{SIZE}}%;',
                ]
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_description_ver_position',
            $this->style,
            [
                'label' => __('Vertical Position (%)', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'condition'     => [
                    'sa_video_box_video_text_switcher' => 'yes'
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-description-container' => 'top: {{SIZE}}%;',
                ]
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
                'label' => esc_html__('Video Box', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_max_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 600,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'image_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-image-container, {{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-video-container' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_image_border_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => FALSE,
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
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-image-container, {{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-video-container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_group_control(
            'box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-image-container' => ''
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Play Icon', SHORTCODE_ADDOONS),
                'showing' => FALSE,
                'condition'     => [
                    'sa_video_box_play_icon_switcher'  => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_play_icon_size',
            $this->style,
            [
                'label' => __('Size', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => 'px',
                    'size' => 10,
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'shortcode-addons-start-tabs',
            [
                'options' => [
                    'normal' => esc_html__('Normal', SHORTCODE_ADDOONS),
                    'hover' => esc_html__('Hover', SHORTCODE_ADDOONS),
                ]
            ]
        );
        $this->start_controls_tab();

        $this->add_control(
            'sa_video_box_play_icon_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            'sa_video_box_play_icon_background_color',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => '',
                ],
            ]
        );
        $this->add_group_control(
            'icon_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => '',
                ]
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab();
        $this->add_control(
            'sa_video_box_play_icon_color_hover',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-container:hover .sa-video-box-play-icon' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_video_box_play_icon_background_color_hover',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-container:hover .sa-video-box-play-icon-container' => '',
                ],
            ]
        );
        $this->add_control(
            'icon_border_color_hover',
            $this->style,
            [
                'label' => __('Border Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'default' => '',
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-container:hover .sa-video-box-play-icon-container' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'sa_video_box_icon_border_radius',
            $this->style,
            [
                'label' => __('Border radius', SHORTCODE_ADDOONS),
                'separator' => TRUE,
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
                        'max' => 500,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => .1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_icon_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('Video Text', SHORTCODE_ADDOONS),
                'showing' => TRUE,
                'condition' => [
                    'sa_video_box_video_text_switcher' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            'text_typography',
            $this->style,
            [
                'type' => Controls::TYPOGRAPHY,
                'include' => Controls::ALIGNNORMAL,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-text' => '',
                ],
            ]
        );
        $this->add_control(
            'sa_video_box_text_color',
            $this->style,
            [
                'label' => __('Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sa_video_box_text_color_hover',
            $this->style,
            [
                'label' => __('Hover Color', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-container:hover .sa-video-box-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sa_video_box_text_background_color',
            $this->style,
            [
                'label' => __('Background', SHORTCODE_ADDOONS),
                'type' => Controls::COLOR,
                'oparetor' => 'RGB',
                'selector' => [
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-description-container' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_video_box_text_padding',
            $this->style,
            [
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
                    '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-description-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
}
