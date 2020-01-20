<?php

namespace SHORTCODE_ADDONS_UPLOAD\User_login\Templates;

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
        $label = $pass_label = $current_details = '';
        $id = $this->oxiid;

        $current_url = remove_query_arg('fake_arg');

        if (array_key_exists('redirect_after_login', $style) && $style['redirect_after_login'] && !empty($style['redirect_url'])) {
            $redirect_url = $this->text_render($style['redirect_url']);
        } else {
            $redirect_url = $current_url;
        }
        $current_user = wp_get_current_user();
        $current_details = '
                    <ul class="sa_user_login_details_content">
                        <li class="sa_user_login_avatar">' . get_avatar($current_user->user_email, 128) . '</li>
                        <li>
                            Name: 
                            <a href="' . get_edit_user_link() . '">' . $current_user->display_name . '</a>
                        </li>
                        <li>
                            Description: 
                            <a href="' . $current_user->user_url . '" target="_blank">' . $current_user->user_url . '</a>
                        </li>
                        <li>
                            Website: ' . $current_user->user_description . '
                        </li>
                        <li class="sa_user_login_logout">
                            <a href="' . wp_logout_url($current_url) . '" target="_blank">Logout</a>
                        </li>
                    </ul>
        ';
        if (array_key_exists('show_labels', $style) && $style['show_labels'] == 'yes') {
            if ($style['user_label'] != '') {
                $label = '
                    <label class="sa_user_login_label sa_user_login_label_user" for="user' . $id . '">' . $this->text_render($style['user_label']) . '</label>
            ';
            }
            if ($style['password_label'] != '') {
                $pass_label = '
                    <label class="sa_user_login_label sa_user_login_label_pass" for="password' . $id . '">' . $this->text_render($style['password_label']) . '</label>
                ';;
            }
        }

?>
        <div class="sa_user_login_container_style_1 sa_user_login_align_<?php echo $style['box_align']; ?>">
            <div class="sa_user_login_main">
                <div class="sa_user_login">
                    <?php
                    if (is_user_logged_in() && $this->admin != 'admin') {
                        if (array_key_exists('show_logged_in_message', $style) && $style['show_logged_in_message'] == 'yes') {
                            echo $current_details;
                        }
                        return;
                    }
                    ?>
                    <form id="sa_user_login_form_<?php echo $id; ?>" action="login" method="post" class="sa_user_login_form" data-class="SHORTCODE_ADDONS_UPLOAD\User_login\Files\UserLogin" data-function="sa_user_login_ajax">
                        <div class="sa_user_login_field">
                            <?php
                            echo $label;
                            ?>
                            <div class="sa_user_login_form_controls">
                                <input class="sa_user_login_input" type="text" name="log" id="user<?php echo $id ?>" placeholder="<?php echo $this->text_render($style['user_placeholder']); ?>" required>
                            </div>
                        </div>
                        <div class="sa_user_login_field">
                            <?php
                            echo $pass_label;
                            ?>
                            <div class="sa_user_login_form_controls">
                                <input class="sa_user_login_input" type="password" name="pwd" id="password<?php echo $id ?>" placeholder="<?php echo $this->text_render($style['password_placeholder']); ?>" required>
                            </div>
                        </div>
                        <?php if (array_key_exists('show_remember_me', $style) && $style['show_remember_me'] == 'yes') : ?>
                            <div class="sa_user_login_field">
                                <label for="remember-me-<?php echo $id; ?>" class="sa_user_login_label">
                                    <input type="checkbox" id="remember-me-<?php echo $id; ?>" name="rememberme" value="forever" class="sa_user_login_checkbox">
                                    <?php esc_html_e('Remember Me', SHORTCODE_ADDOONS); ?>
                                </label>
                            </div>
                        <?php endif; ?>
                        <div class="sa_user_login_button_content">
                            <button type="submit" name="wp-submit" class="sa_user_login_button">
                                <?php if (!empty($style['button_text'])) : ?>
                                    <span><?php echo $this->text_render($style['button_text']); ?></span>
                                <?php endif; ?>
                            </button>
                        </div>
                        <?php
                        $show_lost_password = $style['show_lost_password'];
                        $show_register      = get_option('users_can_register') && $style['show_register'];
                        if ($show_lost_password || $show_register) : ?>
                            <div class="sa_user_login_field sa_user_login_password">
                                <?php if ($show_lost_password) : ?>
                                    <a class="sa_user_lost_password" href="<?php echo wp_lostpassword_url($redirect_url); ?>">
                                        <?php esc_html_e('Lost password?', SHORTCODE_ADDOONS); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if ($show_register) : ?>
                                    <a class="sa_user_register" href="<?php echo wp_registration_url(); ?>">
                                        <?php esc_html_e('Register', SHORTCODE_ADDOONS); ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>


                        <?php wp_nonce_field('ajax-login-nonce', 'sa_user_login_nonce'); ?>
                        <div class="sa_user_message_show"></div>
                    </form>
                </div>
            </div>
        </div>
    <?php
        $this->user_login_ajax_script();
    }

    public function user_login_ajax_script()
    {
        $style    = $this->style;
        $current_url = remove_query_arg('fake_arg');
        $id          = $this->oxiid;
        if (array_key_exists('redirect_after_login', $style) && $style['redirect_after_login'] && !empty($style['redirect_url'])) {
            $redirect_url = $this->text_render($style['redirect_url']);
        } else {
            $redirect_url = $current_url;
        }

    ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                "use strict";
                var login_form = 'form#sa_user_login_form_<?php echo $id; ?>';
                $(login_form).on('submit', function(e) {
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
                            console.log(data);
                            if (data.loggedin == true) {
                                $($This).children('.sa_user_message_show').removeClass('sa_user_error').addClass('sa_user_success').html(data.message);
                                document.location.href = '<?php echo esc_url($redirect_url); ?>';
                            } else {
                                $($This).children('.sa_user_message_show').removeClass('sa_user_success').addClass('sa_user_error').html(data.message);
                            }

                        },
                        error: function(data) {
                            $($This).children('.sa_user_message_show').removeClass('sa_user_success').addClass('sa_user_error').html('Unknown error, make sure access is correct!');
                        }
                    });
                });

            });
        </script>
<?php
    }
}
