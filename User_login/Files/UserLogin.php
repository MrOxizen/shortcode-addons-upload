<?php
namespace SHORTCODE_ADDONS_UPLOAD\User_login\Files;

if (!defined('ABSPATH')) {
    exit;
}

class UserLogin
{
    public function sa_user_login_ajax($rawdata)
    {
        parse_str($rawdata, $access_info);
        wp_verify_nonce('ajax-login-nonce', $access_info['sa_user_login_nonce']);
        $access = [];
        $access['user_login']    = !empty($access_info['log']) ? $access_info['log'] : "";
        $access['user_password'] = !empty($access_info['pwd']) ? $access_info['pwd'] : "";
        $access['rememberme']    = true;
        $user_signon = wp_signon($access, false);
        if (!is_wp_error($user_signon)) {
            echo wp_json_encode(['loggedin' => true, 'message' => esc_html__('Login successful, Redirecting...', SA_EL_ADDONS_TEXTDOMAIN)]);
        } else {
            echo wp_json_encode(['loggedin' => false, 'message' => esc_html__('Ops! Wrong username or password!', SA_EL_ADDONS_TEXTDOMAIN)]);
        }

        die();
    }
}

