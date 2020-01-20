<?php

namespace SHORTCODE_ADDONS_UPLOAD\User_register\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $label_first = $label_last = $label_email = $current_details = '';
        $id = $this->oxiid;

        $current_url = remove_query_arg('fake_arg');

        if (array_key_exists('redirect_after_login', $style) && $style['redirect_after_login'] && !empty($style['redirect_url'])) {
            $redirect_url = $this->text_render($style['redirect_url']);
        } else {
            $redirect_url = $current_url;
        }
        $current_user = wp_get_current_user();
        $current_details = '
                <div class="sa_user_message_show sa_user_error">' .
            sprintf(__('You are Logged in as %1$s (<a href="%2$s">Logout</a>)', SHORTCODE_ADDOONS), $current_user->display_name, wp_logout_url($current_url)) .
            '</div>
        ';
        if (array_key_exists('show_labels', $style) && $style['show_labels'] == 'yes') {
            if ($style['first_name_label'] != '') {
                $label_first = '
                    <label class="sa_user_register_label sa_user_register_label_first" for="first_name' . $id . '">' . $this->text_render($style['first_name_label']) . '</label>
            ';
            }
            if ($style['last_name_label'] != '') {
                $label_last = '
                    <label class="sa_user_register_label sa_user_register_label_last" for="last_name' . $id . '">' . $this->text_render($style['last_name_label']) . '</label>
                ';
            }
            if ($style['email_label'] != '') {
                $label_email = '
                    <label class="sa_user_register_label sa_user_register_label_email" for="user_email' . $id . '">' . $this->text_render($style['email_label']) . '</label>
                ';
            }
        }

?>
        <div class="sa_user_register_container_style_1 sa_user_register_align_<?php echo $style['box_align']; ?>">
            <div class="sa_user_register_main">
                <div class="sa_user_login">
                    <?php
                    if (is_user_logged_in() && $this->admin != 'admin') {
                        if (array_key_exists('show_logged_in_message', $style) && $style['show_logged_in_message'] == 'yes') {
                            echo $current_details;
                        }
                        return;
                    } elseif (!get_option('users_can_register')) {
                    ?>
                        <div class="sa_user_message_show sa_user_error">
                            <p><?php esc_html_e('Registration option not enbled in your general settings.', SHORTCODE_ADDOONS); ?></p>
                        </div>
                    <?php
                        return;
                    }
                    ?>
                    <form id="sa_user_register_form_<?php echo $id; ?>" action="<?php echo wp_registration_url(); ?>" method="post" class="sa_user_register_form" data-class="SHORTCODE_ADDONS_UPLOAD\User_register\Files\UserRegister" data-function="sa_user_register_ajax">
                        <div class="sa_user_register_field">
                            <?php
                            echo $label_first;
                            ?>
                            <div class="sa_user_register_form_controls">
                                <input class="sa_user_register_input" type="text" name="first_name" id="first_name<?php echo $id ?>" placeholder="<?php echo $this->text_render($style['first_name_placeholder']); ?>" required>
                            </div>
                        </div>
                        <div class="sa_user_register_field">
                            <?php
                            echo $label_last;
                            ?>
                            <div class="sa_user_register_form_controls">
                                <input class="sa_user_register_input" type="text" name="last_name" id="last_name<?php echo $id ?>" placeholder="<?php echo $this->text_render($style['last_name_placeholder']); ?>" required>
                            </div>
                        </div>
                        <div class="sa_user_register_field">
                            <?php
                            echo $label_email;
                            ?>
                            <div class="sa_user_register_form_controls">
                                <input class="sa_user_register_input" type="email" name="user_email" id="user_email<?php echo $id ?>" placeholder="<?php echo $this->text_render($style['email_placeholder']); ?>" required>
                            </div>
                        </div>
                        <?php if (array_key_exists('show_additional_message', $style) && $style['show_additional_message'] == 'yes') : ?>
                            <div class="sa_user_register_field">
                                <span class="sa_register_additional_message"><?php echo $this->text_render($style['additional_message']); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="sa_user_register_button_content">
                            <button type="submit" name="wp-submit" class="sa_user_register_button">
                                <?php if (!empty($style['button_text'])) : ?>
                                    <span><?php echo $this->text_render($style['button_text']); ?></span>
                                <?php endif; ?>
                            </button>
                        </div>
                        <?php
                        $show_lost_password = $style['show_lost_password'] == 'yes';
                        $show_login      = $style['show_login'] == 'yes';
                        if ($show_lost_password || $show_login) : ?>
                            <div class="sa_user_register_field sa_user_register_password">

                                <?php if ($show_lost_password) : ?>
                                    <a class="sa_user_lost_password" href="<?php echo wp_lostpassword_url($redirect_url); ?>">
                                        <?php esc_html_e('Lost your password?', SHORTCODE_ADDOONS); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if ($show_login) : ?>
                                    <a class="sa_user_login" href="<?php echo wp_login_url(); ?>">
                                        <?php esc_html_e('Login', SHORTCODE_ADDOONS); ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>


                        <?php wp_nonce_field('ajax-login-nonce', 'sa_user_register_nonce'); ?>
                        <div class="sa_user_message_show"></div>
                    </form>
                </div>
            </div>
        </div>
    <?php
        $this->user_register_ajax_script();
    }

    public function user_register_ajax_script()
    {
        $style    = $this->style;
        $id          = $this->oxiid;
    ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                "use strict";
                var register_form = 'form#sa_user_register_form_<?php echo $id; ?>';
                $(register_form).on('submit', function(e) {
                    e.preventDefault();
                    var $This = $(this);
                    var args = $This.serialize();
                    var classs = $This.data("class");
                    var functions = $This.data("function");
                    $.ajax({
                        url: shortcode_addons_data.ajaxurl,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: "shortcode_addons_data",
                            _wpnonce: shortcode_addons_data.nonce,
                            classname: classs,
                            functionname: functions,
                            rawdata: args
                        },
                        success: function(data) {
                            if (data.registered == true) {
                                $($This).children('.sa_user_message_show').removeClass('sa_user_error').addClass('sa_user_success').html(data.message);
                                <?php if (array_key_exists('redirect_after_register', $style) && $style['redirect_after_register'] == 'yes' && !empty($style['redirect_url'])) : ?>
                                    <?php $redirect_url = $this->text_render($style['redirect_url']); ?>
                                    document.location.href = '<?php echo esc_url($redirect_url); ?>';
                                <?php endif; ?>
                            } else {
                                $($This).children('.sa_user_message_show').removeClass('sa_user_success').addClass('sa_user_error').html(data.message);
                            }
                        },
                    });
                });

            });
        </script>
<?php
    }
}
