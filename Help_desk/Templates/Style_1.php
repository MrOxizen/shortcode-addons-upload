<?php

namespace SHORTCODE_ADDONS_UPLOAD\Help_desk\Templates;

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

class Style_1 extends Templates {

//    public function public_css() {
//        
//    }
    public function inline_public_jquery() {
        $arrow = $animation = $distance = $place = "";

        $settings = $this->style;
        if ($settings['sa_help_desk_title_as_tooltip_arrow'] == 'yes') {
            $arrow = ' arrow : true,';
        } else {
            $arrow = ' arrow : false,';
        }

        if ($settings['sa_help_desk_title_animation'] != '') {
            $animation = 'animation : "' . $settings['sa_help_desk_title_animation'] . '",';
        }
        if ($settings['sa_help_desk_title_distance'] != '') {
            $distance = 'distance : ' . $settings['sa_help_desk_title_distance'] . ',';
        }
        if ($settings['sa_help_desk_title_placement'] != '') {
            $place = 'side : "' . $settings['sa_help_desk_title_placement'] . '",';
        }
        $js = 'setTimeout(function(){
            $(".tooltipster-base").addClass("oxi-tippy-tooltip-' . $this->oxiid . '");
                 var $helpdesk = $(".' . $this->WRAPPER . ' .oxi-helpdesk"),
                        $helpdeskTooltip = $helpdesk.find(".oxi-helpdesk-icons");

                if (!$helpdesk.length) {
                    return;
                }
                $(".' . $this->WRAPPER . ' .oxi-tippy-tooltip").tooltipster({
                    theme: ["tooltipster-noir", "tooltipster-noir-customized"],
                   ' . $place . '
                    ' . $distance . '
                    ' . $animation . '
                   ' . $arrow . '

                 });
                 
                },1000);';
//        echo $place;
        return $js;
    }

    public function default_render($style, $child, $admin) {
        wp_enqueue_script("tooltipster-bundle-min", SA_ADDONS_UPLOAD_URL . 'Help_desk/File/tooltipster.bundle.min.js', ['jquery'], '', true);
        wp_enqueue_style("tooltipster-bundle-min-css", SA_ADDONS_UPLOAD_URL . 'Help_desk/File/tooltipster.bundle.min.css', null, '', FALSE);

        $arrow = '';
        $settings = $style;
        if ($settings['sa_help_desk_title_as_tooltip_arrow'] == 'yes') {
            $arrow = 'true';
        }

        $id = 'oxi-helpdesk-icons-' . $this->oxiid;
        ?>

        <div class="oxi-helpdesk-style-1">
            <div class="oxi-helpdesk">
                <nav class="oxi-helpdesk-icons <?php echo $settings['sa_help_desk_align_position']; ?>">
                    <input type="checkbox" href="#" class="oxi-helpdesk-icons-open" name="oxi-helpdesk-icons-open" id="<?php echo $id; ?>"/>
                    <label class="oxi-helpdesk-icons-open-button" for="<?php echo $id; ?>" title="<?php echo $this->text_render($settings['sa_help_desk_main_icon_text']); ?>">
                        <i class="<?php echo esc_attr($settings['sa_help_desk_main_icon']); ?>" aria-hidden="true"></i>
                    </label>
                    <?php $this->oxi_messenger(); ?>
                    <?php $this->oxi_whatsapp(); ?>
                    <?php $this->oxi_telegram(); ?>
                    <?php $this->oxi_mailto(); ?>
                    <?php $this->oxi_custom(); ?>
                </nav>


                <!-- filters -->
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="oxi-hidden">
                    <defs>
                        <filter id="oxi-helpdesk-icon-wrapper">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                            <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                            <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 0 -0.2" result="shadow" />
                            <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                            <feComposite in2="shadow" in="goo" result="goo" />
                            <feComposite in2="goo" in="SourceGraphic" result="mix" />
                        </filter>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                            <feComposite in2="goo" in="SourceGraphic" result="mix" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>

        <?php
    }

    protected function oxi_messenger() {
        $settings = $this->style;
        $msg_target = $msg_link = '';
        if ('yes' != $settings['sa_help_desk_sup_messenger']) {
            return;
        }

//        $this->add_render_attribute('messenger', 'class', ['oxi-helpdesk-icons-item', 'oxi-hdi-messenger']);

        if (!empty($settings['sa_help_desk_messenger_title_user_id'])) {

            $msg_link = 'https://m.me/' . $settings['sa_help_desk_messenger_title_user_id'];



            if ($settings['sa_help_desk_sup_messenger_opening_tab'] != '') {
                $msg_target = $settings['sa_help_desk_sup_messenger_opening_tab'];
            }
        }
        ?>


        <a class="oxi-helpdesk-icons-item oxi-hdi-messenger oxi-tippy-tooltip" data-tooltip-content="<?php echo $this->oxiid . '-idnum'; ?>" title="<?php echo $this->text_render($settings['sa_help_desk_messenger_title_text']); ?>"
           target="<?php echo $custom_target; ?>"
           href="<?php echo $custom_link; ?>"
           >
               <?php // echo  $this->font_awesome_render($settings['sa_help_desk_sup_messenger_icon']);   ?>
            <i class="<?php echo esc_attr($settings['sa_help_desk_sup_messenger_icon']); ?>" aria-hidden="true"></i>

        </a>		

        <?php
    }

    protected function oxi_whatsapp() {
        $settings = $this->style;
        $whatsapp_target = $whatsapp_link = '';

        if ('yes' != $settings['sa_help_desk_sup_whatsapp']) {
            return;
        }
        if (!empty($settings['sa_help_desk_whatsapp_title_number'])) {

            $whatsapp_link = 'https://wa.me/' . $settings['sa_help_desk_whatsapp_title_number'];




            if ($settings['sa_help_desk_sup_whatsapp_opening_tab'] != '') {
                $whatsapp_target = $settings['sa_help_desk_sup_whatsapp_opening_tab'];
            }
        }
        ?>


        <a class="oxi-helpdesk-icons-item oxi-hdi-whatsapp oxi-tippy-tooltip" title="<?php echo $this->text_render($settings['sa_help_desk_whatsapp_title_text']); ?>"

           target="<?php echo $whatsapp_target; ?>"
           href="<?php echo $whatsapp_link; ?>"
           >

            <i class="<?php echo esc_attr($settings['sa_help_desk_sup_whatsapp_icon']); ?>" aria-hidden="true"></i>

        </a>	

        <?php
    }

    protected function oxi_telegram() {
        $settings = $this->style;
        $telegram_link = $telegram_target = '';
        $arrow = $tigger = '';

        if ('yes' != $settings['sa_help_desk_sup_telegram']) {
            return;
        }
        if (!empty($settings['sa_help_desk_telegram_title_user_id'])) {

            $telegram_link = 'https://telegram.me/' . $settings['sa_help_desk_telegram_title_user_id'];



            if ($settings['sa_help_desk_sup_telegram_opening_tab'] != '') {
                $telegram_target = $settings['sa_help_desk_sup_telegram_opening_tab'];
            }
        }
        ?>


        <a class="oxi-helpdesk-icons-item oxi-hdi-telegram oxi-tippy-tooltip" title="<?php echo $this->text_render($settings['sa_help_desk_telegram_title_text']); ?>"

           target="<?php echo $telegram_target; ?>"
           href="<?php echo $telegram_link; ?>"
           >

            <i class="<?php echo esc_attr($settings['sa_help_desk_sup_telegram_icon']); ?>" aria-hidden="true"></i>

        </a>

        <?php
    }

    protected function oxi_mailto() {
        $settings = $this->style;
        $email_link = $email_target = '';


        if ('yes' != $settings['sa_help_desk_sup_email']) {
            return;
        }
        if (!empty($settings['sa_help_desk_email_title_email_address'])) {

            $email_link = 'mailto:';
            $email_link .= $settings['sa_help_desk_email_title_email_address'];

            if ($settings['sa_help_desk_email_title_email_subject']) {

                $email_link .= '?subject=' . $settings['sa_help_desk_email_title_email_subject'];

                if ($settings['sa_help_desk_email_title_email_body']) {
                    $email_link .= '&amp;body=' . $settings['sa_help_desk_email_title_email_body'];
                }
            }


            if ($settings['sa_help_desk_sup_email_opening_tab'] != '') {
                $email_target = $settings['sa_help_desk_sup_email_opening_tab'];
            }
        }
        ?>


        <a class="oxi-helpdesk-icons-item oxi-hdi-email oxi-tippy-tooltip" title="<?php echo $this->text_render($settings['sa_help_desk_email_title_email_us']); ?>"
           target="<?php echo $email_target; ?>"
           href="<?php echo $email_link; ?>"
           >

            <i class="<?php echo esc_attr($settings['sa_help_desk_sup_email_icon']); ?>" aria-hidden="true"></i>

        </a>

        <?php
    }

    protected function oxi_custom() {
        $settings = $this->style;
        $custom_link = $custom_target = '';

        if ('yes' != $settings['sa_help_desk_sup_custom']) {
            return;
        }
        if (!empty($settings['sa_help_desk_custom_title_link'])) {

            $custom_link = $settings['sa_help_desk_custom_title_link'];



            if ($settings['sa_help_desk_sup_custom_opening_tab'] != '') {
                $custom_target = $settings['sa_help_desk_sup_custom_opening_tab'];
            }
        }
        ?>


        <a class="oxi-helpdesk-icons-item oxi-hdi-custom oxi-tippy-tooltip" title="<?php echo $this->text_render($settings['sa_help_desk_custom_title_text']); ?>"

           target="<?php echo $custom_target; ?>"
           href="<?php echo $custom_link; ?>"
           >

            <i class="<?php echo esc_attr($settings['sa_help_desk_sup_custom_icon']); ?>" aria-hidden="true"></i>

        </a>

        <?php
    }

//    public function oxi_tooltip($icon) {
//        $settings = $this->style;
//
//        if ('yes' != $settings['sa_help_desk_title_as_tooltip']) {
//            return;
//        }
//
//        // Tooltip settings
//        $this->add_render_attribute($icon, 'class', 'oxi-tippy-tooltip');
//        $this->add_render_attribute($icon, 'data-tippy', '');
//
//        if ($settings['helpdesk_tooltip_placement']) {
//            $this->add_render_attribute($icon, 'data-tippy-placement', $settings['helpdesk_tooltip_placement']);
//        }
//
//        if ($settings['helpdesk_tooltip_animation']) {
//            $this->add_render_attribute($icon, 'data-tippy-animation', $settings['helpdesk_tooltip_animation']);
//        }
//
//        if ($settings['helpdesk_tooltip_x_offset']['size'] or $settings['helpdesk_tooltip_y_offset']['size']) {
//            $this->add_render_attribute($icon, 'data-tippy-offset', $settings['helpdesk_tooltip_x_offset']['size'] . ',' . $settings['helpdesk_tooltip_y_offset']['size']);
//        }
//
//        if ('yes' == $settings['helpdesk_tooltip_arrow']) {
//            $this->add_render_attribute($icon, 'data-tippy-arrow', 'true');
//        }
//
//        if ('yes' == $settings['helpdesk_tooltip_trigger']) {
//            $this->add_render_attribute($icon, 'data-tippy-trigger', 'click');
//        }
//    }
}
