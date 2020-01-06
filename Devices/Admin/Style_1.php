<?php

namespace SHORTCODE_ADDONS_UPLOAD\Devices\Admin;

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



        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Device Settings', SHORTCODE_ADDOONS),
            'showing' => true,
                ]
        );
        $this->add_control(
                'sa_devices_type', $this->style, [
            'label' => __('Type', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'loader' => TRUE,
            'default' => 'phone',
            'options' => [
                'phone' => [
                    'title' => __('Phone', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-mobile-alt',
                ],
                'tablet' => [
                    'title' => __('Tablet', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-tablet-alt',
                ],
                'laptop' => [
                    'title' => __('Laptop', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-laptop',
                ],
                'desktop' => [
                    'title' => __('Desktop', SHORTCODE_ADDOONS),
                    'icon' => 'fa fa-desktop',
                ],
                'windows' => [
                    'title' => __('Windows', SHORTCODE_ADDOONS),
                    'icon' => 'far fa-window-maximize',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_number_style_1 .sa_addons_number_icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_control(
                'sa_devices_media_type', $this->style, [
            'label' => __('Media', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'iamge',
            'loader' => TRUE,
            'options' => [
                'image' => __('Image', SHORTCODE_ADDOONS),
                'video' => __('Video', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_control(
                'sa_devices_orientation', $this->style, [
            'label' => __('Orientation', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'loader' => TRUE,
            'default' => 'sa-el-device-orientation-landscape',
            'options' => [
                '' => [
                    'title' => __('Portarait', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-mobile-alt',
                ],
                'sa-el-device-orientation-landscape' => [
                    'title' => __('Landscape', SHORTCODE_ADDOONS),
                    'icon' => 'fas fa-tablet-alt',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_number_style_1 .sa_addons_number_icon' => 'text-align: {{VALUE}};'
            ],
            'condition' => [
                'sa_devices_media_type' => 'image',
                'sa_devices_type' => ['phone', 'tablet'],
            ]
                ]
        );
        $this->add_control(
                'sa_devices_orientation_control', $this->style, [
            'label' => __('Orientation Control', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'description' => 'Show Orientation control on frontend',
            'condition' => [
                'sa_devices_media_type' => 'image',
                'sa_devices_type' => ['phone', 'tablet'],
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_devices_alignment', $this->style, [
            'label' => __('Alignment', SHORTCODE_ADDOONS),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'toggle' => TRUE,
            'default' => 'center',
            'options' => [
                'left' => [
                    'title' => __('Left', SHORTCODE_ADDOONS),
                    'icon' => 'eicon-h-align-left',
                ],
                'center' => [
                    'title' => __('Center', SHORTCODE_ADDOONS),
                    'icon' => 'eicon-h-align-center',
                ],
                'right' => [
                    'title' => __('Right', SHORTCODE_ADDOONS),
                    'icon' => 'eicon-h-align-right',
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .sa_addons_number_style_1 .sa_addons_number_icon' => 'text-align: {{VALUE}};'
            ],
                ]
        );
        $this->add_responsive_control(
                'sa_devices_max_width', $this->style, [
            'label' => __('Maximum Width', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => '',
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1500,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 200,
                    'step' => 0.1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-F-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();


        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Screen', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_devices_media_type' => 'image',
            ]
                ]
        );
        $this->add_group_control(
                'sa_devices_image', $this->style, [
            'type' => Controls::MEDIA,
            'selector' => [
                '{{WRAPPER}} .oa_ac_style_1 .oxi-addons-ac-H .heading-data' => ''
            ],
                ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Video', SHORTCODE_ADDOONS),
            'showing' => TRUE,
            'condition' => [
                'sa_devices_media_type' => 'video',
            ]
                ]
        );
        $this->add_group_control(
                'sa_devices_video', $this->style, [
            'type' => Controls::FILEUPLOAD,
            'select' => Controls::VIDEO,
            'placeholder' => 'www.example.com/video/video.mp4',
            'selector' => [
                '{{WRAPPER}} .oa_ac_style_1 .oxi-addons-ac-H .heading-data' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_devices_ch_cover', $this->style, [
            'label' => __('Choose Cover', SHORTCODE_ADDOONS),
            'separator' => true,
            'type' => Controls::HEADING,
                ]
        );
        $this->add_group_control(
                'sa_devices_cover_photo', $this->style, [
            'label' => esc_html__('Video', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'placeholder' => 'www.example.com/image/image.jpg',
            'selector' => [
                '{{WRAPPER}} .oa_ac_style_1 .oxi-addons-ac-H .heading-data' => ''
            ],
                ]
        );
        $this->add_control(
                'sa_devices_behaviour', $this->style, [
            'label' => __('Behaviour', SHORTCODE_ADDOONS),
            'separator' => true,
            'type' => Controls::HEADING,
                ]
        );
        $this->add_control(
                'sa_devices_video_autoplay', $this->style, [
            'label' => __('Auto Play', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_devices_autoplay_desc', $this->style, [
            'label' => __('Many browsers don\'t allow videos with sound to autoplay without user interaction. To avoid this, enable the Start Muted control to disable sound so that the video autoplays correctly.', SHORTCODE_ADDOONS),
            'type' => Controls::HEADING,
            'condition' => [
                'sa_devices_video_autoplay' => 'yes',
            ]
                ]
        );
        $this->add_control(
                'sa_devices_video_stop', $this->style, [
            'label' => __('Stop Others', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'description' => 'Stop all other videos on page when this video is played.'
                ]
        );
        $this->add_control(
                'sa_devices_video_veiwport', $this->style, [
            'label' => __('Play in Viewport', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'condition' => [
                'sa_devices_video_autoplay' => 'yes',
            ]
                ]
        );
        $this->add_control(
                'sa_devices_video_stop_leave', $this->style, [
            'label' => __('Stop on Leave', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'condition' => [
                'sa_devices_video_veiwport' => 'yes',
            ]
                ]
        );
        $this->add_control(
                'sa_devices_video_restart', $this->style, [
            'label' => __('Restart on pause', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_devices_video_loop', $this->style, [
            'label' => __('Loop', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_devices_video_last_frame', $this->style, [
            'label' => __('End at last frame', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'description' => 'Stop all other videos on page when this video is played.',
            'condition' => [
                '! sa_devices_video_loop' => '',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_devices_video_pb_speed', $this->style, [
            'label' => __('Playback Speed', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 5,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-F-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                ]
        );
        $this->add_control(
                'sa_devices_display', $this->style, [
            'label' => __('Display', SHORTCODE_ADDOONS),
            'separator' => true,
            'type' => Controls::HEADING,
                ]
        );
        $this->add_control(
                'sa_devices_video_btn', $this->style, [
            'label' => __('Show Buttons', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_devices_video_bar', $this->style, [
            'label' => __('Show Bar', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_devices_video_rewind', $this->style, [
            'label' => __('Show Rewind', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            'condition' => [
                'sa_devices_video_restart' => 'yes',
            ]
                ]
        );
        $this->add_control(
                'sa_devices_video_volume', $this->style, [
            'label' => __('Volume', SHORTCODE_ADDOONS),
            'separator' => true,
            'type' => Controls::HEADING,
                ]
        );
        $this->add_control(
                'sa_devices_video_muted', $this->style, [
            'label' => __('Start Muted', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'yes' => __('Yes', SHORTCODE_ADDOONS),
            'no' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
            
                ]
        );
        $this->add_responsive_control(
                'sa_devices_video_in_volume', $this->style, [
            'label' => __('Initial Volume', SHORTCODE_ADDOONS),
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => '',
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 5,
                    'step' => .1,
                ],
            ],
            'selector' => [
                '{{WRAPPER}} .oxi-addons-AL-SE-7 .oxi-addonsAL-SE-F-icon' => 'font-size:{{SIZE}}{{UNIT}};'
            ],
                    'condition' => [
                '! sa_devices_video_muted' => '',
            ]
                ]
        );
        $this->end_controls_section();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
