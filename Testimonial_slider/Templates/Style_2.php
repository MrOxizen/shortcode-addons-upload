<?php

namespace SHORTCODE_ADDONS_UPLOAD\Testimonial_slider\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS_UPLOAD\Logo_carousel\File\Swiper_Settings_View;

class Style_2 extends Swiper_Settings_View
{
    public $testimonial_data;
    public function public_css()
    {
        wp_enqueue_style('swiper.css', SA_ADDONS_UPLOAD_URL . '/Testimonial_slider/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'swiper.js';
        wp_enqueue_script('swiper.js', SA_ADDONS_UPLOAD_URL . '/Testimonial_slider/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function render_testimonial()
    {
        $style = $this->style;
        $testi_data = (array_key_exists('sa_testimonial_slider_data', $style) && is_array($style['sa_testimonial_slider_data'])) ? $style['sa_testimonial_slider_data'] : [];
        ob_start();
        foreach ($testi_data as $key => $value) {
            $image = $info  = $name = $company = '';
            if ($this->media_render('sa_testi_slider_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-six-image">                               
                               <img src="' . $this->media_render('sa_testi_slider_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_slider_profile_description', $value) && $value['sa_testi_slider_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-six-info">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                ' . $this->text_render($value['sa_testi_slider_profile_description']) . '
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                           
                        </div>';
            }

            if (array_key_exists('sa_testi_slider_profile_name', $value) && $value['sa_testi_slider_profile_name'] != '') {
                $name = ' <div class="oxi-testimonials-style-six-name" >
                                    ' . $this->text_render($value['sa_testi_slider_profile_name']) . ' 
                              </div>';
            }
            if (array_key_exists('sa_testi_slider_profile_company', $value) && $value['sa_testi_slider_profile_company'] != '') {
                $company = '<div class="oxi-testimonials-style-six-working">
                                    <a ' . $this->url_render('sa_testi_slider_profile_company_url', $value) . '>' . $this->text_render($value['sa_testi_slider_profile_company']) . '</a>
                                 </div>';
            }

            if ($style['sa-testimonial-profile-body_alignment'] == 'left') {
                $class = "sa-testimonial-profile-body-six-left";
            } elseif ($style['sa-testimonial-profile-body_alignment'] == 'right') {
                $class = "sa-testimonial-profile-body-six-right";
            } else {
                $class = "sa-testimonial-profile-body-six-center";
            }

            echo ' <div class="oxi-testimonials-six-padding swiper-slide" >
                    <div class="oxi-testimonials-item-six oxi-testimonials-item-' . $key . '">
                        <div class="oxi-testimonials-style-six ' . $class . '"> 
                                ' . $info . '
                            <div class="oxi-testimonials-style-six-image-area">
                                <div class="oxi-testimonials-style-six-left">
                                ' . $image . '
                                </div>
                                <div class="oxi-testimonials-style-six-right">
                                ' . $name . ' 
                                ' . $company . ' 
                                </div> 
                            </div> 
                        </div>
                    </div>';

            echo '</div>';
        }
        return ob_get_clean();
    }
    public function default_render($style, $child, $admin)
    {
        $this->testimonial_data = $this->render_testimonial();
        $this->slider_default_render('oxi-testimonials-slider-style-2', $this->testimonial_data);
    }
}
