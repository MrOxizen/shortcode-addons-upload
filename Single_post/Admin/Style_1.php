<?php

namespace SHORTCODE_ADDONS_UPLOAD\Single_post\Admin;

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

    use \SHORTCODE_ADDONS_UPLOAD\Display_post\Files\Post_Query;

    public function shortcode_addons_get_my_post() {

        $post_types = get_post_types();
        $post_type_not__in = array('attachment', 'revision', 'nav_menu_item', 'custom_css', 'customize_changeset', 'elementor_library', 'post');

        foreach ($post_type_not__in as $post_type_not) {
            unset($post_types[$post_type_not]);
        }
        $post_type = array_values($post_types);


        $all_posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'post',
                )
        );
        if (!empty($all_posts) && !is_wp_error($all_posts)) {
            foreach ($all_posts as $post) {
                $this->options[$post->ID] = strlen($post->post_title) > 20 ? substr($post->post_title, 0, 20) . '...' : $post->post_title;
            }
        }
        return $this->options;
    }

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                        'style-settings' => esc_html__('Style', SHORTCODE_ADDOONS),
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
                'shortcode-addons-gen',
                [
                    'label' => esc_html__('General', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_single_post_post_list',
                $this->style,
                [
                    'type' => Controls::SELECT,
                    'label' => __('Content', SHORTCODE_ADDOONS),
                    'description' => __('Elementor Template is a template which you can choose from Elementor Templates library', SHORTCODE_ADDOONS),
                    'options' => $this->shortcode_addons_get_my_post(),
                ]
        );


        $this->add_control(
                'sa_single_post_post_tag',
                $this->style,
                [
                    'label' => __('Tag', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_single_post_post_tag',
                $this->style,
                [
                    'label' => __('Tag', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_single_post_post_title',
                $this->style,
                [
                    'label' => __('Title', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'sa_single_post_post_link_title',
                $this->style,
                [
                    'label' => __('Link Title', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_single_post_post_date',
                $this->style,
                [
                    'label' => __('Date', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_single_post_post_category',
                $this->style,
                [
                    'label' => __('Category', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'yes',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );
        $this->add_control(
                'sa_single_post_post_excerpt',
                $this->style,
                [
                    'label' => __('Excerpt', SHORTCODE_ADDOONS),
                    'type' => Controls::SWITCHER,
                    'default' => 'no',
                    'loader' => true,
                    'label_on' => __('Yes', SHORTCODE_ADDOONS),
                    'label_off' => __('No', SHORTCODE_ADDOONS),
                    'return_value' => 'yes',
                ]
        );

        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-tag',
                [
                    'label' => esc_html__('Tag', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_single_post_tag_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                    ],
                ]
        );
        $this->add_control(
                'sa_single_post_tag_bg_color',
                $this->style,
                [
                    'label' => __('Background', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'oparetor' => 'RGB',
                    'default' => 'rgba(59, 59, 59, 0.7)',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay' => 'background : {{VALUE}}; '
                    ],
                ]
        );
        $this->add_group_control(
                'sa_single_post_tag_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__wrapper' => ''
                    ],
                ]
        );

        $this->add_control(
                'sa_single_post_tag_set_border_r',
                $this->style,
                [
                    'label' => __('Border Radius', SHORTCODE_ADDOONS),
                    'separator' => TRUE,
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 20,
                            'step' => 1,
                        ],
                        'rem' => [
                            'min' => 0,
                            'max' => 20,
                            'step' => 1,
                        ]
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-left > img' => 'border-radius : {{SIZE}}{{UNIT}}; ',
                    ],
                ]
        );

        $this->add_group_control(
                'sa_single_post_tag_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__title' => '',
                    ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-tag',
                [
                    'label' => esc_html__('Title', SHORTCODE_ADDOONS),
                    'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_single_post_title_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                    ],
                ]
        );

        $this->add_group_control(
                'sa_single_post_title_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__title' => '',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-tag',
                [
                    'label' => esc_html__('Date', SHORTCODE_ADDOONS),
                    'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_single_post_date_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                    ],
                ]
        );

        $this->add_group_control(
                'sa_single_post_date_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__title' => '',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-tag',
                [
                    'label' => esc_html__('Category', SHORTCODE_ADDOONS),
                    'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_single_post_cate_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                    ],
                ]
        );


        $this->add_group_control(
                'sa_single_post_cate_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__title' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_single_post_meta_sep_color',
                $this->style,
                [
                    'label' => __('Meta Separator Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-tag',
                [
                    'label' => esc_html__('Overlay', SHORTCODE_ADDOONS),
                    'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_single_post_overlay_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
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
                'shortcode-addons-post-thumbnail',
                [
                    'label' => esc_html__('Post Thumbnail', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_display_post_img_eq_height',
                $this->style,
                [
                    'label' => __('Image Equal Height', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
                    'operator' => Controls::OPERATOR_TEXT,
                    'default' => 'true',
                    'options' => [
                        'true' => [
                            'title' => __('True', SHORTCODE_ADDOONS),
                        ],
                        'false' => [
                            'title' => __('False', SHORTCODE_ADDOONS),
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_thumbnail_height',
                $this->style,
                [
                    'label' => __('Thumbnail Height', SHORTCODE_ADDOONS),
                    'type' => Controls::NUMBER,
                    'default' => 78,
                    'min' => 0,
                    'max' => 100,
                    'loader' => TRUE,
                    'condition' => [
                        'sa_display_post_img_eq_height' => 'true'
                    ]
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-post-thumbnail-overly',
                [
                    'label' => esc_html__('Post Thumbnail Overlay', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_display_post_icon',
                $this->style,
                [
                    'type' => Controls::ICON,
                    'label' => __('Icon', SHORTCODE_ADDOONS),
                    'default' => 'fas fa-long-arrow-alt-right',
                    'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_display_post_icon_size',
                $this->style,
                [
                    'label' => __('Icon Size', SHORTCODE_ADDOONS),
                    'type' => Controls::NUMBER,
                    'default' => 22,
                    'min' => 0,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'font-size: {{VALUE}}px;',
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_icon_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay .oxi-icons' => 'color : {{VALUE}}; '
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_icon_bg_color',
                $this->style,
                [
                    'label' => __('Background', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'oparetor' => 'RGB',
                    'default' => 'rgba(59, 59, 59, 0.7)',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__overlay' => 'background : {{VALUE}}; '
                    ],
                ]
        );

        $this->add_control(
                'sa_display_post_meta_position_effect',
                $this->style,
                [
                    'label' => __('Meta Position', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'fade',
                    'loader' => true,
                    'options' => [
                        'fade' => 'Fade In',
                        'left' => 'Left to Right',
                        'top' => 'Top to Bottom',
                        'right' => 'Right to Left',
                        'bottom' => 'Bottom to top',
                    ],
                ]
        );

        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-post-title',
                [
                    'label' => esc_html__('Post title', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                    'condition' => [
                        'sa_s_image_layout_show_title' => 'show',
                    ]
                ]
        );
        $this->add_control(
                'sa_display_post_title_tag',
                $this->style,
                [
                    'label' => __('Select Tag', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'h2',
                    'options' => [
                        'h1' => __('Heading 1', SHORTCODE_ADDOONS),
                        'h2' => __('Heading 2', SHORTCODE_ADDOONS),
                        'h3' => __('Heading 3', SHORTCODE_ADDOONS),
                        'h4' => __('Heading 4', SHORTCODE_ADDOONS),
                        'h5' => __('Heading 5', SHORTCODE_ADDOONS),
                        'h6' => __('Heading 6', SHORTCODE_ADDOONS),
                    ],
                    'loader' => TRUE,
                ]
        );
        $this->add_control(
                'sa_display_post_title_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#252b25',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__title' => 'color:{{VALUE}};'
                    ],
                ]
        );

        $this->add_group_control(
                'sa_display_post_title_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__title' => '',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_title_padding',
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons-post-excerpt',
                [
                    'label' => esc_html__('Excerpt', SHORTCODE_ADDOONS),
                    'condition' => [
                        'sa_s_image_layout_show_excerpt' => 'show',
                    ]
                ]
        );

        $this->add_control(
                'sa_display_post_excerpt_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#252b25',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__details' => 'color:{{VALUE}};'
                    ],
                ]
        );

        $this->add_group_control(
                'sa_display_post_excerpt_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__details ' => '',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_excerpt_padding',
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__details' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-post-meta',
                [
                    'label' => esc_html__('Meta Setting', SHORTCODE_ADDOONS),
                    'condition' => [
                        'sa_s_image_layout_show_meta' => 'show',
                    ]
                ]
        );
        $this->start_controls_tabs(
                'shortcode-addons-start-tabs',
                [
                    'options' => [
                        'meta_name' => esc_html__('Meta Name', SHORTCODE_ADDOONS),
                        'meta_date' => esc_html__('Meta Date', SHORTCODE_ADDOONS),
                        'meta_avater' => esc_html__('Meta Avater', SHORTCODE_ADDOONS),
                    ]
                ]
        );
        $this->start_controls_tab();
        $this->add_group_control(
                'sa_display_post_meta_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-name .oxi-name' => '',
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
                'sa_display_post_meta_name_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#2ba5ba',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-name > .oxi-name' => 'color:{{VALUE}};'
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_display_post_meta_h_name',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#1cbfa4',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-name:hover > .oxi-name' => 'color:{{VALUE}};'
                    ],
                ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
                'sa_display_post_meta_name_padding',
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-name ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_display_post_meta_date_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#252b25',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-date > .oxi-time' => 'color:{{VALUE}};'
                    ],
                ]
        );

        $this->add_group_control(
                'sa_display_post_meta_date_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-date > .oxi-time ' => '',
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_meta_date_padding',
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-date > .oxi-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();

        $this->add_control(
                'sa_display_post_meta_avater',
                $this->style,
                [
                    'label' => __('Avatars Type', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
                    'operator' => Controls::OPERATOR_TEXT,
                    'default' => '',
                    'options' => [
                        '' => [
                            'title' => __('Auto', SHORTCODE_ADDOONS),
                        ],
                        'custom' => [
                            'title' => __('Common', SHORTCODE_ADDOONS),
                        ],
                    ],
                ]
        );
        $this->add_group_control(
                'sa_display_post_meta_avater_img',
                $this->style,
                [
                    'type' => Controls::MEDIA,
                    'default' => [
                        'type' => 'media-library',
                        'link' => 'https://www.shortcode-addons.com/wp-content/uploads/2019/06/1-1.jpg',
                    ],
                    'condition' => [
                        'sa_display_post_meta_avater' => 'custom'
                    ]
                ]
        );
        $this->add_control(
                'sa_display_post_meta_avater_img_width',
                $this->style,
                [
                    'label' => __('Width', SHORTCODE_ADDOONS),
                    'separator' => TRUE,
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 20,
                            'step' => 1,
                        ],
                        'rem' => [
                            'min' => 0,
                            'max' => 20,
                            'step' => 1,
                        ]
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-left > img' => 'width: {{SIZE}}{{UNIT}}; ',
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-left > .oxi-addons__avater' => 'width: {{SIZE}}{{UNIT}}; '
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_meta_avater_img_height',
                $this->style,
                [
                    'label' => __('Height', SHORTCODE_ADDOONS),
                    'separator' => TRUE,
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 20,
                            'step' => 1,
                        ],
                        'rem' => [
                            'min' => 0,
                            'max' => 20,
                            'step' => 1,
                        ]
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-left > img' => 'height: {{SIZE}}{{UNIT}}; ',
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-left > .oxi-addons__avater' => 'height: {{SIZE}}{{UNIT}}; '
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_control(
                'sa_display_post_meta_separator',
                $this->style,
                [
                    'label' => __(' ', SHORTCODE_ADDOONS),
                    'type' => Controls::SEPARATOR,
                    Controls::SEPARATOR => TRUE,
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_meta_padding',
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__meta-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        'shortcode-addons-start-tabs' => 'button-settings'
                    ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-post-button',
                [
                    'label' => esc_html__('Button', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_display_post_button_align',
                $this->style,
                [
                    'label' => __('Button Align', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => 'right',
                    'options' => [
                        'left' => [
                            'title' => __('Left', SHORTCODE_ADDOONS),
                            'icon' => 'fa fa-align-left',
                        ],
                        'right' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fa fa-align-right',
                        ],
                    ],
                    'loader' => true,
                ]
        );
        $this->add_control(
                'sa_display_post_button_show',
                $this->style,
                [
                    'label' => __('Button Show', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_TEXT,
                    'default' => 'show',
                    'options' => [
                        'show' => [
                            'title' => __('True', SHORTCODE_ADDOONS),
                        ],
                        'hide' => [
                            'title' => __('False', SHORTCODE_ADDOONS),
                        ],
                    ],
                    'loader' => true,
                ]
        );

        $this->add_control(
                'sa_display_post_button_text',
                $this->style,
                [
                    'label' => __('Button Text', SHORTCODE_ADDOONS),
                    'type' => Controls::TEXT,
                    'default' => 'Read More..',
                    'placeholder' => 'Button Text..',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => '',
                    ],
                ]
        );

        $this->add_control(
                'sa_display_post_button_url',
                $this->style,
                [
                    'label' => __('Link Opening', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
                    'operator' => Controls::OPERATOR_TEXT,
                    'default' => '_blank',
                    'options' => [
                        '' => [
                            'title' => __('Current Tab', SHORTCODE_ADDOONS),
                        ],
                        '_blank' => [
                            'title' => __('New Tab', SHORTCODE_ADDOONS),
                        ],
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_button_padding',
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_button_margin',
                $this->style,
                [
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
                        '{{WRAPPER}}  .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ]
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-post-button-settings',
                [
                    'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                    'showing' => TRUE,
                ]
        );
        $this->add_group_control(
                'sa_display_post_button_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => ' ',
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
                'sa_display_post_button_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_button_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(62, 156, 214, 1)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => 'background :{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_display_post_button_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_button_radius',
                $this->style,
                [
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
                            'min' => -100,
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_display_post_button_sadow',
                $this->style,
                [
                    'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_display_post_button_hover_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#fff',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link:hover' => 'color:{{VALUE}};',
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_button_hover_bg_color',
                $this->style,
                [
                    'label' => __('Background Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => 'rgba(67, 143, 191, 1)',
                    'oparetor' => 'RGB',
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link:hover' => 'background:{{VALUE}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_display_post_button_hover_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link:hover' => ''
                    ],
                ]
        );
        $this->add_responsive_control(
                'sa_display_post_button_hover_radius',
                $this->style,
                [
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
                            'min' => -100,
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
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                    ],
                ]
        );
        $this->add_group_control(
                'sa_display_post_button_hover_shadow',
                $this->style,
                [
                    'label' => __('Box Shadow', SHORTCODE_ADDOONS),
                    'type' => Controls::BOXSHADOW,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons__main-wrapper-style-1 .oxi-addons__btn-link:hover' => ''
                    ],
                ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}