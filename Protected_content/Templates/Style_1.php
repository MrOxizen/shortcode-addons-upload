<?php

namespace SHORTCODE_ADDONS_UPLOAD\Protected_content\Templates;

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
        $message = $protected_content = '';
        if (!empty($style['sa_protected_content_message_text'])) :
            $message = '<div class="sa_protected_content_message">
                            <div class="sa_protected_content_message_text">
                                ' . $this->text_render($style['sa_protected_content_message_text']) . '
                            </div>
                        </div>
            ';
        endif;
        if (!empty($style['sa_protected_content_field'])) :
            $protected_content = '<div class="protected_content">
                                    ' . $this->text_render($style['sa_protected_content_field']) . '
                                </div>
            ';
        endif;

        echo '<div class="sa_protected_content_container_style_1">
                <div class="sa_protected_content" ' . $this->animation_render('sa_protected_content_animation', $style) . '>';
        if ('role' == $style['sa_protected_content_protection_type']) :
            if (true === $this->current_user_privileges()) :
                echo '' . $protected_content . '';
            else :
                echo '' . $message . '';
            endif;

            if ('yes' == $style['sa_show_fallback_message']) :
                echo '' . $message . '';
            endif;
        else :
            if (!empty($style['sa_protection_password'])) {
                if (!session_status()) {
                    session_start();
                }

                if (isset($_POST['sa_protection_password']) && ($style['sa_protection_password'] === sanitize_text_field($_POST['sa_protection_password']))) {
                    $_SESSION['sa_protection_password'] = true;
                }
                if (!isset($_SESSION['sa_protection_password'])) {
                    if ('yes' !== $style['sa_show_content']) {
                        echo '' . $message . '';
                        $this->sa_get_block_pass_protected_form($style);
                        return;
                    }
                }
                echo '' . $protected_content . '';
            }
        endif;

        echo '
                </div>
            </div>';
    }

    public function inline_public_jquery()
    {
    }

    /** Check current user role exists inside of the roles array. * */
    protected function current_user_privileges()
    {
        if (!is_user_logged_in()) :
            return;
        endif;
        $user_role = reset(wp_get_current_user()->roles);
        if (empty($this->style['sa_protected_content_role'])) :
            echo '<p class="protected_content_error_msg">Please Setup User Role First</p>';
        else :
            return in_array($user_role, $this->style['sa_protected_content_role']);
        endif;
    }
    public function sa_get_block_pass_protected_form($settings)
    {
        echo '<div class="sa_password_protected_content_fields">';
        echo '<form method="post">';
        echo '<input type="password" name="sa_protection_password" class="sa_password" placeholder="' . $this->text_render($settings['sa_protection_password_placeholder']) . '">';
        echo '<input type="submit" value="' . $this->text_render($settings['sa_protection_password_submit_btn_txt']) . '" class="sa_submit">';
        echo '</form>';
        if (isset($_POST['sa_protection_password']) && ($settings['sa_protection_password'] !== sanitize_text_field($_POST['sa_protection_password']))) {
            echo sprintf(__('<p class="protected_content_error_msg">Password does not match.</p>', SHORTCODE_ADDOONS));
        }
        echo '</div>';
    }
}
