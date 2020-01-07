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
                'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'general-settings',
                
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
                '{{WRAPPER}} .sa-el-device' => 'width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa-el-device-wrapper' => 'max-width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .oxi-addons-wrapper-device' => 'max-width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa-el-device-type-laptop .sa-el-device' => 'width:{{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .sa-el-device-type-laptop' => 'width:{{SIZE}}{{UNIT}};'
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
                'sa_video_box_video_link', $this->style, [
            'label' => __('Youtube Video Link', SHORTCODE_ADDOONS),
            'type' => Controls::FILEUPLOAD,
            'select' => Controls::VIDEO,
            'placeholder' => 'www.example.com/video.mp4',
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/videoplayback.mp4',
            ],
                ]
        );

        $this->add_control(
                'sa_video_box_controls', $this->style, [
            'label' => __('Player Controls', SHORTCODE_ADDOONS),
            'description' => __('Show/hide player controls', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_video_box_mute', $this->style, [
            'label' => __('Mute', SHORTCODE_ADDOONS),
            'description' => __('This will play the video muted', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_video_box_self_autoplay', $this->style, [
            'label' => __('Auto Play', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'sa_video_box_loop', $this->style, [
            'label' => __('Loop', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_video_box_start', $this->style, [
            'label' => __('Start Time', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'description' => __('Specify a start time (in seconds)', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_video_box_end', $this->style, [
            'label' => __('End Time', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'description' => __('Specify an end time (in seconds)', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'aspect_ratio', $this->style, [
            'label' => __('Aspect Ratio', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'loader' => TRUE,
            'options' => [
                '11' => '1:1',
                '169' => '16:9',
                '43' => '4:3',
                '32' => '3:2',
                '219' => '21:9',
            ],
            'default' => '169',
                ]
        );
        $this->add_control(
                'sa_video_box_image_switcher', $this->style, [
            'label' => __('Overlay', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'return_value' => 'yes',
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => __('Overlay', SHORTCODE_ADDOONS),
            'condition' => [
                'sa_video_box_image_switcher' => 'yes'
            ],
            'showing' => FALSE,
            'condition' => [
                'sa_devices_media_type' => 'video',
                'sa_video_box_image_switcher' => 'yes',
            ]
                ]
        );
        $this->add_group_control(
                'sa_video_box_image', $this->style, [
            'label' => __('Image', SHORTCODE_ADDOONS),
            'description' => __('Choose an image for the video box', SHORTCODE_ADDOONS),
            'type' => Controls::MEDIA,
            'default' => [
                'type' => 'media-library',
                'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2020/01/placeholder.png',
            ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Play Icon', SHORTCODE_ADDOONS),
            'showing' => FALSE,
            'condition' => [
                'sa_devices_media_type' => 'video',
            ]
                ]
        );

        $this->add_control(
                'sa_video_box_play_icon_switcher', $this->style, [
            'label' => __('Play Icon', SHORTCODE_ADDOONS),
            'type' => Controls::SWITCHER,
            'loader' => TRUE,
            'default' => 'yes',
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        $this->add_responsive_control(
                'sa_video_box_icon_hor_position', $this->style, [
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
                'sa_video_box_play_icon_switcher' => 'yes',
            ],
            'selector' => [
                '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => 'left: {{SIZE}}%;',
            ]
                ]
        );
        $this->add_responsive_control(
                'sa_video_box_icon_ver_position', $this->style, [
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
            'condition' => [
                'sa_video_box_play_icon_switcher' => 'yes',
            ],
            'selector' => [
                '{{WRAPPER}} .sa-video-box-container-style-3  .sa-video-box-play-icon-container' => 'top: {{SIZE}}%;',
            ]
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();

        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'style-settings'
            ]
                ]
        );
        
        $this->start_section_devider();

        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
