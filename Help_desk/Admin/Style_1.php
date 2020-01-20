<?php

namespace SHORTCODE_ADDONS_UPLOAD\Help_desk\Admin;

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
                'shortcode-addons-help-desk-text',
                [
                    'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_help_desk_align_position',
                $this->style,
                [
                    'label' => __('Position', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => 'left',
                    'options' => [
                        'left' => [
                            'title' => __('Left', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-left',
                        ],
                        'right' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-right',
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__fluent_form_style_1 .oxi-fluent-form.oxi-fluent-form-wrapper ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_main_icon',
                $this->style,
                [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-life-ring',
                ]
        );
        $this->add_responsive_control(
                'sa_help_desk_f_s',
                $this->style,
                [
                    'label' => __('Size', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_effects_style_1 .oxi-icons' => 'font-size: {{SIZE}}px;'
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_help_desk_i_space',
                $this->style,
                [
                    'label' => __('Icon Space', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_effects_style_1 .oxi-icons' => 'font-size: {{SIZE}}px;'
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_main_icon_text',
                $this->style,
                [
                    'label' => __('Main Icon Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Need help? Contact us with your favorite way.',
                    'placeholder' => 'Need help? Contact us with your favorite way.',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_messenger',
                $this->style,
                [
                    'label' => __('Messenger', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'sa_help_desk_sup_whatsapp',
                $this->style,
                [
                    'label' => __('WhatsApp', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_telegram',
                $this->style,
                [
                    'label' => __('Telegram', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_custom',
                $this->style,
                [
                    'label' => __('Custom', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_email',
                $this->style,
                [
                    'label' => __('Email', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_group_control(
                'sa_head_animation',
                $this->style,
                [
                    'type' => Controls::ANIMATION,
                ]
        );
        $this->end_controls_section();



        $this->end_section_devider();
        $this->start_section_devider();


        $this->start_controls_section(
                'shortcode-addons-additional-settings',
                [
                    'label' => esc_html__('Additional', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_help_desk_additional_hori_off',
                $this->style,
                [
                    'label' => __('Horizontal Offset', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_effects_style_1 .oxi-icons' => 'font-size: {{SIZE}}px;'
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_help_desk_additional_vert_off',
                $this->style,
                [
                    'label' => __('Vertical Offset', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
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
                    ],
                    'selector' => [
                        '{{WRAPPER}} .sa_addons_icon_effects_style_1 .oxi-icons' => 'font-size: {{SIZE}}px;'
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_title_as_tooltip',
                $this->style,
                [
                    'label' => __('Title as Tooltip', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'sa_help_desk_title_placement',
                $this->style,
                [
                    'label' => __('Placement', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'top',
                    'options' => [
                        'top' => __('Top', SHORTCODE_ADDOONS),
                        'bottom' => __('Bottom', SHORTCODE_ADDOONS),
                        'left' => __('Left', SHORTCODE_ADDOONS),
                        'righy' => __('Right', SHORTCODE_ADDOONS),
                    ],
                    'condition' => [
                        'sa_help_desk_title_as_tooltip' => 'yes'
                    ]
                ]
        );

        $this->add_control(
                'sa_help_desk_title_animation',
                $this->style,
                [
                    'label' => __('Animation', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'shift-away',
                    'options' => [
                        'shift-away' => __('Shift-Away', SHORTCODE_ADDOONS),
                        'shift-toward' => __('Shift-Toward', SHORTCODE_ADDOONS),
                        'fade' => __('Fade', SHORTCODE_ADDOONS),
                        'scale' => __('Scale', SHORTCODE_ADDOONS),
                        'perspective' => __('Perspective', SHORTCODE_ADDOONS),
                    ],
                    'condition' => [
                        'sa_help_desk_title_as_tooltip' => 'yes'
                    ]
                ]
        );
        $this->add_control(
                'sa_help_desk_title_offset',
                $this->style,
                [
                    'label' => esc_html__('Offset', SHORTCODE_ADDOONS),
                    'type' => Controls::NUMBER,
                    'default' => '0',
                    'condition' => [
                        'sa_help_desk_title_as_tooltip' => 'yes'
                    ]
                ]
        );
        $this->add_control(
                'sa_help_desk_title_distance',
                $this->style,
                [
                    'label' => esc_html__('Distance', SHORTCODE_ADDOONS),
                    'type' => Controls::NUMBER,
                    'default' => '0',
                    'condition' => [
                        'sa_help_desk_title_as_tooltip' => 'yes'
                    ]
                ]
        );
        $this->add_control(
                'sa_help_desk_title_as_tooltip_arrow',
                $this->style,
                [
                    'label' => __('Arrow', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                    'condition' => [
                        'sa_help_desk_title_as_tooltip' => 'yes'
                    ]
                ]
        );
        $this->add_control(
                'sa_help_desk_title_as_tooltip_trigger_on_click',
                $this->style,
                [
                    'label' => __('Trigger on Click', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'description' => "Don't set yes when you set lightbox image with marker.",
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                    'condition' => [
                        'sa_help_desk_title_as_tooltip' => 'yes'
                    ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-font-settings',
                [
                    'label' => esc_html__('Messenger', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_help_desk_messenger_title_text',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Chat on messenger',
                    'placeholder' => 'Chat on messenger',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );


        $this->add_control(
                'sa_help_desk_messenger_title_user_id',
                $this->style,
                [
                    'label' => __('User ID', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'oxilab',
                    'placeholder' => 'oxilab',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_messenger_opening_tab',
                $this->style,
                [
                    'label' => __('Opening New Tab', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '_blank',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => '_blank',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_messenger_icon',
                $this->style,
                [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-life-ring',
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-font-settings',
                [
                    'label' => esc_html__('WhatsApp', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_help_desk_whatsapp_title_text',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Call via whatsapp',
                    'placeholder' => 'Call via whatsapp',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );


        $this->add_control(
                'sa_help_desk_whatsapp_title_number',
                $this->style,
                [
                    'label' => __('Number', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => '+88017200000',
                    'placeholder' => '+88016000000',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_whatsapp_opening_tab',
                $this->style,
                [
                    'label' => __('Opening New Tab', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '_blank',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => '_blank',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_whatsapp_icon',
                $this->style,
                [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-life-ring',
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-telegram-settings',
                [
                    'label' => esc_html__('Telegram', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_help_desk_telegram_title_text',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Call via telegram',
                    'placeholder' => 'Call via telegram',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );


        $this->add_control(
                'sa_help_desk_telegram_title_user_id',
                $this->style,
                [
                    'label' => __('User ID', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'oxilab',
                    'placeholder' => 'oxilab',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_telegram_opening_tab',
                $this->style,
                [
                    'label' => __('Opening New Tab', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '_blank',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => '_blank',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_telegram_icon',
                $this->style,
                [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-life-ring',
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-custom-settings',
                [
                    'label' => esc_html__('Custom', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_help_desk_custom_title_text',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Chat with us',
                    'placeholder' => 'Chat with us',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );


        $this->add_control(
                'sa_help_desk_custom_title_link',
                $this->style,
                [
                    'label' => __('link', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => '',
                    'placeholder' => 'link',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_custom_opening_tab',
                $this->style,
                [
                    'label' => __('Opening New Tab', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '_blank',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => '_blank',
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_custom_icon',
                $this->style,
                [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-life-ring',
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-email-settings',
                [
                    'label' => esc_html__('Email', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_help_desk_email_title_email_us',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Email Us',
                    'placeholder' => 'Email Us',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );

        $default_email = get_bloginfo('admin_email');

        $this->add_control(
                'sa_help_desk_email_title_email_address',
                $this->style,
                [
                    'label' => __('Email Address', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => $default_email,
                    'placeholder' => $default_email,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_email_opening_tab',
                $this->style,
                [
                    'label' => __('Opening New Tab', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => '_blank',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => '_blank',
                ]
        );
        $this->add_control(
                'sa_help_desk_email_title_email_subject',
                $this->style,
                [
                    'label' => __('Subject', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Support related issue',
                    'placeholder' => 'Suject Text',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_email_title_email_body',
                $this->style,
                [
                    'label' => __('Body Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXTAREA,
                    'default' => 'Hello, I am contact with you because ',
                    'placeholder' => 'Body Text',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-heading-style-10 .oxi-addons-heading-text' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_help_desk_sup_email_icon',
                $this->style,
                [
                    'label' => esc_html__('Icon', SHORTCODE_ADDOONS),
                    'type' => Controls::ICON,
                    'default' => 'far fa-life-ring',
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
                'shortcode-addons-help-desk-text',
                [
                    'label' => esc_html__('Main Icons', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
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
                'sa_help_desk_main_icon_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left .oxi-icons' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_help_desk_main_icon_background',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_help_desk_main_icon_h_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left .oxi-icons' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_help_desk_main_icon_h_background',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-help-desk-text',
                [
                    'label' => esc_html__('Icons Style', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
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
                'sa_help_desk_ic_icon_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left .oxi-icons' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_help_desk_ic_icon_background',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_help_desk_ic_icon_h_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left' => 'color:{{VALUE}};',
                        '{{WRAPPER}} .oxi_addons__banner_style_1 .oxi_addons__button_left .oxi-icons' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_help_desk_ic_icon_h_background',
                $this->style,
                [
                    'type' => Controls::BACKGROUND,
                    'selector' => [
                        '{{WRAPPER}} .oxi_addons__banner_style_1' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-help-desk-text',
                [
                    'label' => esc_html__('Icons Style', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
