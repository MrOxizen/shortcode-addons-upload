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


        $this->start_section_tabs(
                'shortcode-addons-start-tabs',
                [
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
                    'loader' => true,
                ]
        );
        $this->add_control(
                'sa_single_post_wrap_max_width',
                $this->style,
                [
                    'label' => __('Max Width', SHORTCODE_ADDOONS),
                    'type' => Controls::SLIDER,
                    'default' => [
                        'unit' => 'px',
                        'size' => 50,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 2000,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 0,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'rem' => [
                            'min' => 0,
                            'max' => 150,
                            'step' => 1,
                        ]
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-position-relative' => 'max-width: {{SIZE}}{{UNIT}}; ',
                    ],
                ]
        );
        $this->add_control(
                'sa_single_post_wrap_set_align',
                $this->style,
                [
                    'label' => __('Set Alignment', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'operator' => Controls::OPERATOR_ICON,
                    'default' => '0 auto',
                    'options' => [
                        '0 auto 0  0' => [
                            'title' => __('Left', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-left',
                        ],
                        ' 0 auto' => [
                            'title' => __('Center', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-center',
                        ],
                        '0 0  0 auto' => [
                            'title' => __('Right', SHORTCODE_ADDOONS),
                            'icon' => 'fas fa-align-right',
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-position-relative' => 'margin: {{VALUE}}; ',
                    ],
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
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post .oxi-single-post-tag-wrap span a' => 'color : {{VALUE}}; '
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
                    'default' => 'rgba(255, 102, 0, 1)',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-single-post-tag-wrap span' => 'background : {{VALUE}}; '
                    ],
                ]
        );
        $this->add_group_control(
                'sa_single_post_tag_border',
                $this->style,
                [
                    'type' => Controls::BORDER,
                    'selector' => [
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-tag-wrap span' => ''
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
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-tag-wrap span' => 'border-radius : {{SIZE}}{{UNIT}}; ',
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
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-tag-wrap span' => '',
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
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-single-post-title' => 'color : {{VALUE}}; '
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
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-title' => '',
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
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-single-post-meta span.oxi-single-post-date' => 'color : {{VALUE}}; '
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
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-meta span.oxi-single-post-date' => '',
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
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-single-post-meta .oxi-single-post-cate' => 'color : {{VALUE}}; '
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
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-meta .oxi-single-post-cate' => '',
                    ],
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'shortcode-addons-tag',
                [
                    'label' => esc_html__('Excerpt', SHORTCODE_ADDOONS),
                    'showing' => FALSE,
                ]
        );
        $this->add_control(
                'sa_single_post_excerpt_color',
                $this->style,
                [
                    'label' => __('Color', SHORTCODE_ADDOONS),
                    'type' => Controls::COLOR,
                    'default' => '#ffffff',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-single-post-excerpt' => 'color : {{VALUE}}; '
                    ],
                ]
        );

        $this->add_control(
                'sa_single_post_excerpt',
                $this->style,
                [
                    'label' => __('Spacer', SHORTCODE_ADDOONS),
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
                            'max' => 15,
                            'step' => 1,
                        ]
                    ],
                    'selector' => [
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-excerpt' => 'margin-top: {{SIZE}}{{UNIT}}; ',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_single_post_excerpt_typo',
                $this->style,
                [
                    'type' => Controls::TYPOGRAPHY,
                    'include' => Controls::ALIGNNORMAL,
                    'selector' => [
                        '{{WRAPPER}} .oxi-single-post-style-1 .oxi-single-post-excerpt' => '',
                    ],
                ]
        );

        $this->end_controls_section();

        //.oxi-single-post-excerpt
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
                    'oparetor' => 'RGB',
                    'default' => 'rgba(34, 34, 34, 0.8)',
                    'selector' => [
                        '{{WRAPPER}}  .oxi-single-post-style-1 .oxi-overlay-primary' => 'background : {{VALUE}}; '
                    ],
                ]
        );



        $this->end_controls_section();


        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
