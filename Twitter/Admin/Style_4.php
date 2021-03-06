<?php

namespace SHORTCODE_ADDONS_UPLOAD\Twitter\Admin;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\AdminStyle;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Style_4 extends AdminStyle
{

    public function register_controls()
    {
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
        $this->add_control(
            'sa_twitter_url_moments',
            $this->style,
            [
                'label' => __('Enter URL', SHORTCODE_ADDOONS),
                'type' => Controls::TEXT,
                'description' => 'This fields work after saving and reloading',
                'placeholder' => __('https://twitter.com/webtechhardik', SHORTCODE_ADDOONS),
                'default'     => 'https://twitter.com/i/moments/625792726546558977',
                'condition'   => [
                    'sa_twitter_embed_type' => 'moments'
                ]
            ]
        );
        $this->add_control(
            'sa_twitter_no_of_tweets',
            $this->style,
            [
                'label'     => __('Display No of Tweets', SHORTCODE_ADDOONS),
                'type'      => Controls::NUMBER,
                'description' => 'This fields work after saving and reloading',
                'default'   => 2,
                'min'       => '1',
                'max'       => '50',
                'step'      => '1',
            ]
        );
        $this->add_control(
            'sa_twitter_language',
            $this->style,
            [
                'label'   => __('Language', SHORTCODE_ADDOONS),
                'type'    => Controls::SELECT,
                'loader' => TRUE,
                'options' => $this->languages(),
                'default' => ''
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
            'shortcode-addons',
            [
                'label' => esc_html__('General Style', SHORTCODE_ADDOONS),
                'showing' => TRUE,
            ]
        );
        $this->add_control(
            'sa_twitter_box_align',
            $this->style,
            [
                'label' => __('Align', SHORTCODE_ADDOONS),
                'type' => Controls::CHOOSE,
                'operator' => 'icon',
                'default' => 'sa_twitter_align_center',
                'options' => [
                    'sa_twitter_align_left' => [
                        'title' => __('Left', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-left',
                    ],
                    'sa_twitter_align_center' => [
                        'title' => __('Center', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-center',
                    ],
                    'sa_twitter_align_right' => [
                        'title' => __('Right', SHORTCODE_ADDOONS),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_twitter_container_style_4' => '',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_twitter_width',
            $this->style,
            [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => Controls::SLIDER,
                'default' => [
                    'unit' => '%',
                    'size' => '',
                ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 1200,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selector' => [
                    '{{WRAPPER}} .sa_twitter_container_style_4' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            'sa_twitter_bg',
            $this->style,
            [
                'type' => Controls::BACKGROUND,
                'selector' => [
                    '{{WRAPPER}} .sa_twitter_container_style_4 .sa_twitter_main' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_twitter_border',
            $this->style,
            [
                'type' => Controls::BORDER,
                'selector' => [
                    '{{WRAPPER}} .sa_twitter_container_style_4 .sa_twitter_main' => '',
                ],
            ]
        );
        $this->add_group_control(
            'sa_twitter_box_shadow',
            $this->style,
            [
                'type' => Controls::BOXSHADOW,
                'selector' => [
                    '{{WRAPPER}} .sa_twitter_container_style_4 .sa_twitter_main' => ''
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_twitter_b_r',
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
                    '{{WRAPPER}} .sa_twitter_container_style_4 .sa_twitter_main' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .sa_twitter_container_style_4 .sa_twitter_main iframe' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_twitter_padding',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_twitter_container_style_4 .sa_twitter_main' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_twitter_margin',
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
                        'max' => 100,
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
                    '{{WRAPPER}} .sa_twitter_container_style_4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }
    public function languages()
    {
        $languages = [
            ''      => __('Automatic', SHORTCODE_ADDOONS),
            'en'    => __('English', SHORTCODE_ADDOONS),
            'ar'    => __('Arabic', SHORTCODE_ADDOONS),
            'bn'    => __('Bengali', SHORTCODE_ADDOONS),
            'cs'    => __('Czech', SHORTCODE_ADDOONS),
            'da'    => __('Danish', SHORTCODE_ADDOONS),
            'de'    => __('German', SHORTCODE_ADDOONS),
            'el'    => __('Greek', SHORTCODE_ADDOONS),
            'es'    => __('Spanish', SHORTCODE_ADDOONS),
            'fa'    => __('Persian', SHORTCODE_ADDOONS),
            'fi'    => __('Finnish', SHORTCODE_ADDOONS),
            'fil'   => __('Filipino', SHORTCODE_ADDOONS),
            'fr'    => __('French', SHORTCODE_ADDOONS),
            'he'    => __('Hebrew', SHORTCODE_ADDOONS),
            'hi'    => __('Hindi', SHORTCODE_ADDOONS),
            'hu'    => __('Hungarian', SHORTCODE_ADDOONS),
            'id'    => __('Indonesian', SHORTCODE_ADDOONS),
            'it'    => __('Italian', SHORTCODE_ADDOONS),
            'ja'    => __('Japanese', SHORTCODE_ADDOONS),
            'ko'    => __('Korean', SHORTCODE_ADDOONS),
            'msa'   => __('Malay', SHORTCODE_ADDOONS),
            'nl'    => __('Dutch', SHORTCODE_ADDOONS),
            'no'    => __('Norwegian', SHORTCODE_ADDOONS),
            'pl'    => __('Polish', SHORTCODE_ADDOONS),
            'pt'    => __('Portuguese', SHORTCODE_ADDOONS),
            'ro'    => __('Romania', SHORTCODE_ADDOONS),
            'ru'    => __('Rus', SHORTCODE_ADDOONS),
            'sv'    => __('Swedish', SHORTCODE_ADDOONS),
            'th'    => __('Thai', SHORTCODE_ADDOONS),
            'tr'    => __('Turkish', SHORTCODE_ADDOONS),
            'uk'    => __('Ukrainian', SHORTCODE_ADDOONS),
            'ur'    => __('Urdu', SHORTCODE_ADDOONS),
            'vi'    => __('Vietnamese', SHORTCODE_ADDOONS),
            'zh-cn' => __('Chinese (Simplified)', SHORTCODE_ADDOONS),
            'zh-tw' => __('Chinese (Traditional)', SHORTCODE_ADDOONS),
        ];

        return $languages;
    }
}
