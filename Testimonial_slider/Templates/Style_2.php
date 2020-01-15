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
use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates {

    public function public_css() {
        wp_enqueue_style('swiper.css', SA_ADDONS_UPLOAD_URL . '/Testimonial_slider/File/swiper.min.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function public_jquery() {
        $this->JSHANDLE = 'swiper.js';
        wp_enqueue_script('swiper.js', SA_ADDONS_UPLOAD_URL . '/Testimonial_slider/File/swiper.min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $style = $this->style;

        $effect = $speed = $items = $jquery = '';
        $effect = $style['sa_testi_silder_effect'] != '' ? $style['sa_testi_silder_effect'] : 'slide';
        $speed = $style['sa_testi_silder_slider_speed-size'] != '' ? $style['sa_testi_silder_slider_speed-size'] : 400;
        $items = $style['sa_testi_silder_visible_items-lap-size'] != '' ? $style['sa_testi_silder_visible_items-lap-size'] : 3;
        $items_tablet = $style['sa_testi_silder_visible_items-tab-size'] != '' ? $style['sa_testi_silder_visible_items-tab-size'] : 3;
        $items_mobile = $style['sa_testi_silder_visible_items-mob-size'] != '' ? $style['sa_testi_silder_visible_items-mob-size'] : 3;
        $margin = $style['sa_testi_silder_items_gap-lap-size'] != '' ? $style['sa_testi_silder_items_gap-lap-size'] : 10;
        $margin_tablet = $style['sa_testi_silder_items_gap-tab-size'] != '' ? $style['sa_testi_silder_items_gap-tab-size'] : 10;
        $margin_mobile = $style['sa_testi_silder_items_gap-mob-size'] != '' ? $style['sa_testi_silder_items_gap-mob-size'] : 10;
        $autoplay = (array_key_exists('sa_testi_silder_autoplay_switter', $style) && $style['sa_testi_silder_autoplay_switter'] == 'yes') ? $style['sa_testi_silder_autoplay_speed-size'] : 999999;
        $loop = (array_key_exists('sa_testi_silder_loop_switter', $style) && $style['sa_testi_silder_loop_switter'] == 'yes') ? '1' : '0';
        $grab_cursor = (array_key_exists('sa_testi_silder_pause_grab_cursor', $style) && $style['sa_testi_silder_pause_grab_cursor'] == 'yes') ? '1' : '0';
        $pause_on_hover = (array_key_exists('sa_testi_silder_pause_switter', $style) && $style['sa_testi_silder_pause_switter'] == 'yes') ? 'true' : 'false';

        $jquery .= ' var TestiCarousel = new Swiper(".' . $this->WRAPPER . '   .swiper-container-' . $this->oxiid . '", {
            direction: "horizontal",
            speed: ' . $speed . ',
            effect: "slide",
            paginationClickable: true,
            autoHeight: true,
            grabCursor: ' . $grab_cursor . ',
            loop: ' . $loop . ',
            autoplay: {
                delay: ' . $autoplay . '
            },
            pagination: {
                el: ".swiper__pagination_' . $this->oxiid . '",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-prev-' . $this->oxiid . '",
                prevEl: ".swiper-button-next-' . $this->oxiid . '"
            },
            spaceBetween: ' . $margin . ',
            slidesPerView: ' . $items . ',
            breakpoints: {
                960: {
                    slidesPerView: ' . $items . ',
                    spaceBetween:  ' . $margin . '
                },
                600 : {
                    slidesPerView: ' . $items_tablet . ',
                    spaceBetween:  ' . $margin_tablet . '
                },
                480: {
                    slidesPerView: ' . $items_mobile . ',
                    spaceBetween:  ' . $margin_mobile . '
                }
            },
        }); ';
        if ($pause_on_hover) {
            $jquery .= '
            var mySwiper = document.querySelector(".' . $this->WRAPPER . ' .swiper-container-' . $this->oxiid . '").swiper
            $(".swiper-container").mouseenter(function() {
                mySwiper.autoplay.stop();
              });
              $(".swiper-container").mouseleave(function() {
                mySwiper.autoplay.start();
              });';
        }
        return $jquery;
    }

    protected function _render_user_ratings($item) {

        if ($item['sa_testi_silder_rating_on_off'] != 'yes') {
            return;
        }
        ob_start();
        ?>
        <ul class="testimonial-star-rating">
            <li><i class="fa fa-star oxi-icons" aria-hidden="true"></i></li>
            <li><i class="fa fa-star oxi-icons" aria-hidden="true"></i></li>
            <li><i class="fa fa-star oxi-icons" aria-hidden="true"></i></li>
            <li><i class="fa fa-star oxi-icons" aria-hidden="true"></i></li>
            <li><i class="fa fa-star oxi-icons" aria-hidden="true"></i></li>
        </ul>
        <?php
        echo ob_get_clean();
    }

    public function default_render($style, $child, $admin) {
        $rtl = (array_key_exists('sa_testi_silder_direction', $style) && $style['sa_testi_silder_direction'] == 'right') ? 'dir="rtl"' : '';
        ?>
        <div class="oxi_addons_testi_slider_style_2_full_wrap <?php echo $this->animation_render('sa_testi_silder_body_animation', $style); ?>">
            <div class="oxi_addons_testi_slider_style_2 swiper-container-wrap  ">


                <div class="default-style  swiper-container oxi-testimonial-slider-main  swiper-container-<?php echo $this->oxiid; ?> "     <?php echo $rtl; ?>
                     >

                    <div class="swiper-wrapper">
                        <?php
                        $repeater = (array_key_exists('sa_testi_silder_style_2', $style) && is_array($style['sa_testi_silder_style_2'])) ? $style['sa_testi_silder_style_2'] : [];

                        foreach ($repeater as $key => $item) :
//                            echo '<pre>';
//                            print_r($item);
//                            echo '</pre>';
//                            .oxi-testimonial-content .oxi-testimonial-user
                            ?>
                            <div class="oxi-testimonial-item  clearfix swiper-slide <?php echo $style['sa_testi_silder_set_line_position']; ?>  <?php echo ' oxi_addons_testi_slider_style_' . $key; ?>">

                                <div class="oxi-testimonial-content <?php echo $item['sa_testi_silder_profile_rating']; ?>" style="width: 100%;">
                                    <?php //$this->_render_quote();       ?>
                                    <div class="testimonial-classic-style-content">
                                        <?php
                                        $this->_render_user_description($item);
                                        $this->_render_user_ratings($item);
                                        $this->_render_user_meta($item);
                                        ?>
                                    </div>
                                    <?php $this->_render_user_avatar($item); ?>
                                </div>
                            </div>


                            <?php
                        endforeach;
                        ?>
                    </div>
                    <?php
                    $pa_next_arrow = $pa_prev_arrow = "";
                    if (array_key_exists('sa_testi_silder_pause_arrow', $style) && $style['sa_testi_silder_pause_arrow'] == 'yes') {
                        if ($style['sa_testi_silder_icon_right'] != '' && $style['sa_testi_silder_icon_left'] != '') {
                            $pa_next_arrow = $this->font_awesome_render($style['sa_testi_silder_icon_right']);
                            $pa_prev_arrow = $this->font_awesome_render($style['sa_testi_silder_icon_left']);
                        } else {
                            $pa_next_arrow = '<i class="' . esc_attr('fa fa-angle-right') . '></i>';
                            $pa_prev_arrow = '<i class="' . esc_attr('fa fa-angle-left') . '"></i>';
                        }
                        ?>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-next-<?php echo $this->oxiid; ?>">
                            <?php echo $pa_next_arrow; ?>
                        </div>
                        <div class="swiper-button-prev swiper-button-prev-<?php echo $this->oxiid; ?>">
                            <?php echo $pa_prev_arrow; ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
                if (array_key_exists('sa_testi_silder_pause_dots', $style) && $style['sa_testi_silder_pause_dots'] == 'yes') {

                    echo '
                                <div class="swiper-pagination swiper__pagination_' . $this->oxiid . ' oxi_addons__dot ">
                                </div>
                           
                            ';

                    // <div class = "swiper-pagination swiper-pagination-<?php echo $this->oxiid; "></div> 
                }
                ?>
            </div>
        </div>
        <?php
    }

    protected function _render_user_description($item) {
        echo '<div class="oxi-testimonial-text">' . wpautop($item["sa_testi_silder_profile_description"]) . '</div>';
    }

    protected function _render_user_meta($item) {
        ob_start();
        ?>
        <p class="oxi-testimonial-user" <?php if (!empty($style['sa_testi_silder_display_user'])) : ?> style="display: block; float: none;"<?php endif; ?>><?php echo $this->text_render($item['sa_testi_silder_profile_name']); ?></p>
        <p class="oxi-testimonial-user-company"><?php echo $this->text_render($item['sa_testi_silder_company_name']); ?></p>
        <?php
        echo ob_get_clean();
    }

    protected function _render_user_avatar($item) {
        if (array_key_exists('sa_testi_silder_profile_picture_on_off', $item) && $item['sa_testi_silder_profile_picture_on_off'] != 'yes')
            return;

        ob_start();
        $img = '';
        $img = $this->media_render('sa_testi_silder_profile_picture_img', $item);
        ?>
        <div class="oxi-testimonial-image">
            <span class="oxi-testimonial-quote"></span>
            <figure>
                <img src="<?php echo $img; ?>" alt="<?php echo $img; ?>">
            </figure>
        </div>
        <?php
        echo ob_get_clean();
    }

//    public function public_rating_render($value = '') {
//            $ratefull = 'fas fa-star';
//            $ratehalf = 'fas fa-star-half-alt';
//            $rateO = 'far fa-star';
//
//            if ($value > 4.75) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull);
//            } elseif ($value <= 4.75 && $value > 4.25) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf);
//            } elseif ($value <= 4.25 && $value > 3.75) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO);
//            } elseif ($value <= 3.75 && $value > 3.25) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO);
//            } elseif ($value <= 3.25 && $value > 2.75) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
//            } elseif ($value <= 2.75 && $value > 2.25) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
//            } elseif ($value <= 2.25 && $value > 1.75) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
//            } elseif ($value <= 1.75 && $value > 1.25) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($ratehalf) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
//            } elseif ($value <= 1.25) {
//                return $this->font_awesome_render($ratefull) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO) . $this->font_awesome_render($rateO);
//            }
//        }
}
