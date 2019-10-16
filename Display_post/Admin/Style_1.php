<?php

namespace SHORTCODE_ADDONS_UPLOAD\Display_post\Admin;

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

    public function register_controls() {
        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'style-settings' => esc_html__('Style', SHORTCODE_ADDOONS),
                'button-settings' => esc_html__('Button', SHORTCODE_ADDOONS),
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
                'shortcode-addons-gen', [
            'label' => esc_html__('General', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->post_type();
        $this->add_control(
                'sa_display_post_post_type',
                $this->style,
                [
                    'label' => __('Post Type', SHORTCODE_ADDOONS),
                    'loader' => TRUE,
                    'type' => Controls::SELECT,
                    'default' => 'post',
                    'options' => $this->post_type(),
                ]
        );
        $this->add_control(
                'sa_display_post_author',
                $this->style, [
            'label' => __('Author', SHORTCODE_ADDOONS),
            'loader' => TRUE,
            'type' => Controls::SELECT,
            'multiple' => true,
            'options' => $this->post_author(),
                ]
        );
        foreach ($this->post_type() as $key => $value) {
            if ($key != 'page'):
                $this->add_control(
                        'sa_display_post_post_type-cat' . $key,
                        $this->style,
                        [
                            'label' => __(' Category', SHORTCODE_ADDOONS),
                            'type' => Controls::SELECT,
                            'multiple' => true,
                            'options' => $this->post_category($key),
                            'condition' => [
                                'sa_display_post_post_type' => $key
                            ]
                        ]
                );
                $this->add_control(
                        'sa_display_post_post_type-tag' . $key,
                        $this->style,
                        [
                            'label' => __(' Tags', SHORTCODE_ADDOONS),
                            'type' => Controls::SELECT,
                            'multiple' => true,
                            'options' => $this->post_tags($key),
                            'condition' => [
                                'sa_display_post_post_type' => $key
                            ]
                        ]
                );
            endif;

            $this->add_control(
                    'sa_display_post_post_type-include' . $key,
                    $this->style,
                    [
                        'label' => __(' Include Post', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'multiple' => true,
                        'options' => $this->post_include($key),
                        'condition' => [
                            'sa_display_post_post_type' => $key
                        ]
                    ]
            );
            $this->add_control(
                    'sa_display_post_post_type-exclude' . $key,
                    $this->style,
                    [
                        'label' => __(' Exclude Post', SHORTCODE_ADDOONS),
                        'type' => Controls::SELECT,
                        'multiple' => true,
                        'options' => $this->post_exclude($key),
                        'condition' => [
                            'sa_display_post_post_type' => $key
                        ]
                    ]
            );
        }
        $this->add_control(
                'sa_display_post_offset',
                $this->style, [
            'label' => __('Offset', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'max' => 18,
            'min' => 1,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-1 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
            ]
                ]
        );
        $this->add_control(
                'sa_display_post_orderby' . $key,
                $this->style,
                [
                    'label' => __(' Order By', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'options' => [
                        'ID' => 'Post ID',
                        'author' => 'Post Author',
                        'title' => 'Title',
                        'date' => 'Date',
                        'modified' => 'Last Modified Date',
                        'parent' => 'Parent Id',
                        'rand' => 'Random',
                        'comment_count' => 'Comment Count',
                        'menu_order' => 'Menu Order',
                    ],
                ]
        );

        $this->add_control(
                'sa_display_post_ordertype' . $key,
                $this->style,
                [
                    'label' => __(' Order Type', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'options' => [
                        'asc' => 'Ascending',
                        'desc' => 'Descending',
                    ],
                ]
        );




        $this->end_controls_section();

        $this->end_section_devider();
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons-layout', [
            'label' => esc_html__('layout Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

        $this->add_control(
                'sa_s_image_layout_type',
                $this->style,
                [
                    'label' => __('Layout Type', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
                    'operator' => Controls::OPERATOR_TEXT,
                    'default' => '',
                    'options' => [
                        '' => [
                            'title' => __('Normal', SHORTCODE_ADDOONS),
                        ],
                        'Masonry' => [
                            'title' => __('Masonry', SHORTCODE_ADDOONS),
                        ],
                    ],
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_s_image_layout_linke_open',
                $this->style,
                [
                    'label' => __('Link Style', SHORTCODE_ADDOONS),
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
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_group_control(
                'sa_s_image_layout_col',
                $this->style,
                [
                    'type' => Controls::COLUMN,
                    'selector' => [
                        '{{WRAPPER}} .oxi-addons-EW-col' => ''
                    ],
                ]
        );

        $this->add_control(
                'sa_s_image_layout_linke_open',
                $this->style,
                [
                    'label' => __('Show Image', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
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
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_thumb_sizes',
                $this->style,
                [
                    'label' => __('Image Size', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'loader' => TRUE,
                    'options' => $this->thumbnail_sizes(),
                    'condition' => [
                        'sa_s_image_layout_linke_open' => 'show'
                    ]
                ]
        );

        $this->add_control(
                'sa_s_image_layout_show_title',
                $this->style,
                [
                    'label' => __('Show Title', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
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
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_s_image_layout_show_excerpt',
                $this->style,
                [
                    'label' => __('Show Excerpt', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
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
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_s_image_excerpt_word', $this->style, [
            'label' => __('Excerpt Word', SHORTCODE_ADDOONS),
            'type' => Controls::NUMBER,
            'default' => 20,
            'min' => 0,
            'selector' => [
                '{{WRAPPER}} .oxi-addons-single-image-container-style-1 .oxi-addons-single-image-ribbon' => 'top: {{VALUE}}px;',
            ],
            'condition' => [
                'sa_s_image_layout_show_excerpt' => 'show'
            ]
                ]
        );
        $this->add_control(
                'sa_s_image_layout_show_meta',
                $this->style,
                [
                    'label' => __('Show Meta', SHORTCODE_ADDOONS),
                    'type' => Controls::CHOOSE,
                    'loader' => TRUE,
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
                    'selector' => [
                        '{{WRAPPER}}  .oxi-addons-image-main ' => '',
                    ],
                ]
        );
        $this->add_control(
                'sa_display_post_meta_position',
                $this->style,
                [
                    'label' => __('Meta Position', SHORTCODE_ADDOONS),
                    'type' => Controls::SELECT,
                    'default' => 'footer',
                    'loader' => TRUE,
                    'options' => [
                        'header' => 'Entry Header',
                        'footer' => 'Entry Footer',
                    ],
                    'condition' => [
                        'sa_s_image_layout_show_meta' => 'show'
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
        $this->start_controls_section(
                'shortcode-addons-layout', [
            'label' => esc_html__('layout Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );

       
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

}
