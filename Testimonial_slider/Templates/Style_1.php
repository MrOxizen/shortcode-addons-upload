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

class Style_1 extends Swiper_Settings_View
{
    public $testimonial_data;
    public function public_css()
    {
        wp_enqueue_style('swiper.css', SA_ADDONS_UPLOAD_URL . '/Testimonial_slider/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery()
    {
        wp_enqueue_script('swiper.js', SA_ADDONS_UPLOAD_URL . '/Testimonial_slider/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
        $this->JSHANDLE = 'swiper.js';
    }

    public function render_testimonial()
    {
        $style = $this->style;
        $testi_data = (array_key_exists('sa_testimonial_slider_data', $style) && is_array($style['sa_testimonial_slider_data'])) ? $style['sa_testimonial_slider_data'] : [];
        ob_start();
        foreach ($testi_data as $key => $value) {
            $image = $info = $rating = $name = $company = '';
            if ($this->media_render('sa_testi_slider_profile_picture', $value) != '') {
                $image = ' <div class="oxi-testimonials-style-testinew-image">                               
                               <img src="' . $this->media_render('sa_testi_slider_profile_picture', $value) . '"> 
                            </div>';
            }
            if (array_key_exists('sa_testi_slider_profile_description', $value) && $value['sa_testi_slider_profile_description'] != '') {
                $info = '<div class="oxi-testimonials-style-testinew-info">
                           ' . $this->text_render($value['sa_testi_slider_profile_description']) . '
                        </div>';
            }
            if (array_key_exists('sa_testi_slider_profile_rating-size', $value) && $value['sa_testi_slider_profile_rating-size'] != '') {
                $rating = '<div class="oxi-testimonials-style-testinew-rating">
                            ' . $this->public_rating_render($value['sa_testi_slider_profile_rating-size']) . '                            
                         </div> ';
            }
            if (array_key_exists('sa_testi_slider_profile_name', $value) && $value['sa_testi_slider_profile_name'] != '') {
                $name = ' <div class="oxi-testimonials-style-testinew-name" >
                                    ' . $this->text_render($value['sa_testi_slider_profile_name']) . ' 
                              </div>';
            }
            if ((array_key_exists('sa_testi_slider_profile_company', $value) && $value['sa_testi_slider_profile_company'] != '') || (array_key_exists('sa_testi_slider_profile_designation', $value) && $value['sa_testi_slider_profile_designation'] != '')) {
                $company = '<div class="oxi-testimonials-style-testmonialnew-working">
                                    ' . $this->text_render($value['sa_testi_slider_profile_designation']) . '  at <a ' . $this->url_render('sa_testi_slider_profile_company_url', $value) . '>' . $this->text_render($value['sa_testi_slider_profile_company']) . '</a>
                                 </div>';
            }
            echo ' <div class="oxi-testimonials-testinew-padding swiper-slide" >
                    <div class="oxi-testimonials-item-testinew">
                        <div class="oxi-testimonials-style-testinew oxi-testimonials-style-testinew-' . $key . '" > 
                            ' . $info . ' 
                            ' . $rating . '  
                            ' . $name . '  
                            ' . $company . '  
                            ' . $image . '
                        </div>
                    </div>';

            echo '</div>';
        }
        return ob_get_clean();
    }

    public function default_render($style, $child, $admin)
    {
        $this->testimonial_data = $this->render_testimonial();
        $this->slider_default_render('oxi-testimonials-slider-style-1', $this->testimonial_data);
    }

    public function public_rating_render($value = '')
    {
        $ratefull = 'fas fa-star';
        $ratehalf = 'fas fa-star-half-alt';
        $rateO = 'far fa-star';

        if ($value > 4.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull);
        } elseif ($value <= 4.75 && $value > 4.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf);
        } elseif ($value <= 4.25 && $value > 3.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO);
        } elseif ($value <= 3.75 && $value > 3.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO);
        } elseif ($value <= 3.25 && $value > 2.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 2.75 && $value > 2.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 2.25 && $value > 1.75) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 1.75 && $value > 1.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        } elseif ($value <= 1.25) {
            return $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
        }
    }
}
