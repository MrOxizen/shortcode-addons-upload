<?php

namespace Shortcode_Addons_Uploads\Elements\Button\Templates;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Templates;
use SHORTCODE_ADDONS\Core\Admin\Controls as Controls;

class Button_Style1 extends Templates {

    public function register_controls() {

        $this->start_section_header(
                'shortcode-addons-start-tabs', [
            'options' => [
                'general-settings' => esc_html__('General Settings', SHORTCODE_ADDOONS),
                'style-settings' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
                'advanced-settings' => esc_html__('Advanced Settings', SHORTCODE_ADDOONS),
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
            'label' => esc_html__('General Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa-ac-opening', $this->style, [
            'label' => __('Opening Type', SHORTCODE_ADDOONS),
            'type' => Controls::SELECT,
            'default' => 'dashed',
            'options' => [
                'one-by-one' => __('One by One', SHORTCODE_ADDOONS),
                'randomly' => __('Randomly', SHORTCODE_ADDOONS),
            ],
                ]
        );
         $this->add_control(
                'sa_el_pricing_select-choose', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'default' => 'dashed',
            'options' => [
                'left' => [
                    'title' => __('Left', 'plugin-domain'),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', 'plugin-domain'),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', 'plugin-domain'),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        
        $this->add_control(
                'sa_el_true_false', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => FALSE,
            'type' => Controls::SWITCHER,
            'default' => 'yes',
            'loader' => TRUE,
            'label_on' => __('Yes', SHORTCODE_ADDOONS),
            'label_off' => __('No', SHORTCODE_ADDOONS),
            'return_value' => 'yes',
                ]
        );
        /*
         * $this->add_control(
          'sa_el_pricing_table_title', $this->style, [
          'label' => __('Autoplay', SHORTCODE_ADDOONS),
          'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
          'separator' => TRUE,
          'type' => Controls::TEXT,

          'default' => '10',
          'condition' => [
          'autoplay' => 'yes',
          ],
          ]
          );
         */

        $this->add_control(
                'sa_el_text', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::TEXT,
            'default' => '10',
            'placeholder' => '10',
            'condition' => [
                'sa_el_true_false' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_el_pric_title', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::TEXTAREA,
            'default' => 'Typography – Font size, font family, font weight, text transform, font style, line hadUK LADAUVFAUDFAOU VFDVAFVAUFVAL KNKJBHKJ LHNKJLHNJK HKLHKL OIJIOJUIO UJUIOUIO PUJIOPUPO IUJPOIUIU OUOIUIO PUIOP,.SREJLKSDLKFJK JDSHZFeight and letter sp acing.',
            'placeholder' => '10',
            'condition' => [
                'sa_el_text' => '',
            ],
                ]
        );
        $this->add_control(
                'sa_el_pricing_table_title', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::WYSIWYG,
            'default' => 'Typography – Font size, font family, font weight, text transform, font style, line height and letter spacing.',
            'placeholder' => '10',
                ]
        );
        $this->add_control(
                'sa_el_pricing_table_title', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'type' => Controls::HIDDEN,
            'default' => 10,
                ]
        );

        /*
          $this->add_control(
          'sa_el_pricing_table_title', $this->style, [
          'label' => __('Autoplay', SHORTCODE_ADDOONS),
          'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
          'separator' => TRUE,
          'type' => Controls::NUMBER,
          'min' => 5,
          'max' => 100,
          'step' => 5,
          'default' => 10,
          'condition' => [
          'autoplay' => 'yes',
          ],
          ]
          );
         * 
         */
        $this->add_control(
                'sa_el_pricing_table_title', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::NUMBER,
            'default' => 10,
                ]
        );


        /*
          $this->add_control(
          'sa_el_pricing_table_title', $this->style, [
          'label' => __('Autoplay', SHORTCODE_ADDOONS),
          'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
          'separator' => TRUE,
          'type' => Controls::SLIDER,
          'default' => [
          'unit' => '%',
          'size' => 50,
          ],
          'range' => [
          'px' => [
          'min' => 500,
          'max' => 5000,
          'step' => 1,
          ],
          ],
          'size_units' => '',
          'condition' => [
          'autoplay' => 'yes',
          ],
          ]
          );
          );
         * 
         */
        $this->add_control(
                'sa_el_pricing_table_title', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => '%',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => -100,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 10,
                    'max' => 200,
                    'step' => 2,
                ],
                'rem' => [
                    'min' => 20,
                    'max' => 250,
                    'step' => 3,
                ],
                '%' => [
                    'min' => 40,
                    'max' => 400,
                    'step' => 4,
                ],
            ],
                ]
        );

        $this->add_control(
                'sa_el_pricing_table_tssitle', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::SLIDER,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => 500,
                    'max' => 5000,
                    'step' => 1,
                ],
            ],
                ]
        );
//        $this->add_control(
//                'sa_el_pricing_select', $this->style, [
//            'label' => __('Autoplay', SHORTCODE_ADDOONS),
//            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
//            'separator' => TRUE,
//            'type' => Controls::SELECT,
//            'default' => 'dashed',
//            'options' => [
//                'solid' => __('Solid', 'plugin-domain'),
//                'dashed' => __('Dashed', 'plugin-domain'),
//                'dotted' => __('Dotted', 'plugin-domain'),
//                'double' => __('Double', 'plugin-domain'),
//                'none' => __('None', 'plugin-domain'),
//            ],
//                ]
//        );

        $this->add_control(
                'sa_el_pricing_select-select', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::SELECT,
            'default' => 'dashed',
            'options' => [
                'solid' => __('Solid', 'plugin-domain'),
                'dashed' => __('Dashed', 'plugin-domain'),
                'dotted' => __('Dotted', 'plugin-domain'),
                'double' => __('Double', 'plugin-domain'),
                'none' => __('None', 'plugin-domain'),
            ],
                ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Layouts Settings', SHORTCODE_ADDOONS),
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();

        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('G Settings', SHORTCODE_ADDOONS),
            'showing' => TRUE,
                ]
        );
        $this->add_control(
                'sa_el_pricing_select-choose', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::CHOOSE,
            'toggle' => TRUE,
            'default' => 'dashed',
            'options' => [
                'left' => [
                    'title' => __('Left', 'plugin-domain'),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', 'plugin-domain'),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', 'plugin-domain'),
                    'icon' => 'fa fa-align-right',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_el_pricing_selects', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'dashed',
            'options' => [
                'left' => [
                    'title' => __('H1', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-up',
                ],
                'center' => [
                    'title' => __('H2', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'centers' => [
                    'title' => __('H3', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'right' => [
                    'title' => __('H4', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-down',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'dashed',
                ]
        );

        $this->start_controls_tabs(
                'shortcode-addons-start-tabs', [
            'options' => [
                'normal' => esc_html__('NORMAL', SHORTCODE_ADDOONS),
                'hover' => esc_html__('HOVER', SHORTCODE_ADDOONS),
            ]
                ]
        );
        $this->start_controls_tab();

        $this->add_control(
                'sa_el_pricing_selects', $this->style, [
            'label' => __('First Content', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'dashed',
            'options' => [
                'left' => [
                    'title' => __('H1', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-up',
                ],
                'center' => [
                    'title' => __('H2', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'centers' => [
                    'title' => __('H3', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'right' => [
                    'title' => __('H4', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-down',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'dashed',
                ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab();
        $this->add_control(
                'sa_el_pricing_selects', $this->style, [
            'label' => __('2nd Content', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'type' => Controls::CHOOSE,
            'operator' => Controls::OPERATOR_ICON,
            'default' => 'dashed',
            'options' => [
                'left' => [
                    'title' => __('H1', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-up',
                ],
                'center' => [
                    'title' => __('H2', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'centers' => [
                    'title' => __('H3', 'plugin-domain'),
                    'icon' => 'fas fa-exchange-alt',
                ],
                'right' => [
                    'title' => __('H4', 'plugin-domain'),
                    'icon' => 'fas fa-sort-amount-down',
                ],
            ],
                ]
        );
        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'dashed',
                ]
        );
        $this->end_controls_tab();

        $this->close_controls_tabs();
        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::ICON,
            'default' => 'fab fa-github',
                ]
        );
        $this->add_control(
                'sa_el_pricing_icon', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::FONT,
            'default' => 'fas fa-address-book',
                ]
        );
        $this->add_control(
                'sa_el_pricing_select', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::SELECT,
            'default' => 'dashed',
            'options' => [
                'solid' => __('Solid', SHORTCODE_ADDOONS),
                'dashed' => __('Dashed', SHORTCODE_ADDOONS),
                'dotted' => __('Dotted', SHORTCODE_ADDOONS),
                'double' => __('Double', SHORTCODE_ADDOONS),
                'none' => __('None', SHORTCODE_ADDOONS),
            ],
                ]
        );
        $this->add_group_control(
                'sa_el_p_box_shadow', $this->style, [
            'type' => Controls::BOXSHADOW,
                ]
        );
        $this->add_group_control(
                'sa_el_p_box_shadow', $this->style, [
            'type' => Controls::TYPOGRAPHY,
                ]
        );
        $this->add_group_control(
                'sa_el_p_text-shadow', $this->style, [
            'type' => Controls::TEXTSHADOW,
                ]
        );
        $this->add_group_control(
                'sa_el_p_bor', $this->style, [
            'type' => Controls::BORDER,
                ]
        );

        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'type' => Controls::GRADIENT,
            'separator' => TRUE,
            'default' => 'rgba(47,0,186,1.01)',
                ]
        );
        $this->add_responsive_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'type' => Controls::DIMENSIONS,
            'default' => [
                'unit' => 'px',
                'size' => 50,
            ],
            'range' => [
                'px' => [
                    'min' => -100,
                    'max' => 100,
                    'step' => 1,
                ],
                'em' => [
                    'min' => 10,
                    'max' => 200,
                    'step' => 2,
                ],
            ],
                ]
        );
        $this->start_popover_control(
                'shortcode-addons-start-tabs', [
            'label' => __('Offset', SHORTCODE_ADDOONS),
                ]
        );
        $this->add_control(
                'sa_el_pricing_icon', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::ICON,
            'default' => 'fas fa-address-book',
                ]
        );
        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'dashed',
                ]
        );
        $this->add_control(
                'sa_el_pricing_selectw', $this->style, [
            'label' => __('Color', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::COLOR,
            'oparetor' => 'RGB',
            'default' => 'dashed',
                ]
        );

        $this->end_popover_control();

        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Style Settings', SHORTCODE_ADDOONS),
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();


        $this->start_section_tabs(
                'shortcode-addons-start-tabs', [
            'condition' => [
                'shortcode-addons-start-tabs' => 'button-settings'
            ]
                ]
        );
        $this->start_section_devider();
        $this->start_controls_section(
                'shortcode-addons', [
            'label' => esc_html__('Button Settings', SHORTCODE_ADDOONS),
                ]
        );
        $this->end_controls_section();
        $this->end_section_devider();
        $this->end_section_tabs();
    }

    public function modal_opener() {
        $this->add_substitute_control('', [], [
            'type' => Controls::MODALOPENER,
            'title' => __('Add New Form', SHORTCODE_ADDOONS),
            'sub-title' => __('Open Data Form', SHORTCODE_ADDOONS),
            'showing' => TRUE,
        ]);
    }

    public function modal_form_data() {
        echo '<div class="modal-header">                    
                    <h4 class="modal-title">Carousel Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div cecholass="modal-body">';
        $this->add_control(
                'sa_el_text', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::TEXT,
            'default' => '10',
            'placeholder' => '10',
            'condition' => [
                'sa_el_true_false' => 'yes',
            ],
                ]
        );

        $this->add_control(
                'sa_el_pric_title', $this->style, [
            'label' => __('Autoplay', SHORTCODE_ADDOONS),
            'description' => __('Duration of transition between slides (in ms)', SA_ELEMENTOR_TEXTDOMAIN),
            'separator' => TRUE,
            'type' => Controls::TEXTAREA,
            'default' => 'Typography – Font size, font family, font weight, text transform, font style, line hadUK LADAUVFAUDFAOU VFDVAFVAUFVAL KNKJBHKJ LHNKJLHNJK HKLHKL OIJIOJUIO UJUIOUIO PUJIOPUPO IUJPOIUIU OUOIUIO PUIOP,.SREJLKSDLKFJK JDSHZFeight and letter sp acing.',
            'placeholder' => '10',
            'condition' => [
                'sa_el_text' => '',
            ],
                ]
        );
        echo '</div>';
    }

}

new Button_Style1();
