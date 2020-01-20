<?php
namespace SHORTCODE_ADDONS_UPLOAD\User_register\Files;

if (!defined('ABSPATH')) {
    exit;
}

class UserRegister
{
    public function sa_user_register_ajax($rawdata)
    {
        parse_str($rawdata, $access_info);

        if (!get_option('users_can_register')) {
            echo wp_json_encode(['registered' => false, 'message' => __('Registering new users is currently not allowed.', SHORTCODE_ADDOONS)]);
        } else {
            $email      = $access_info['user_email'];
            $first_name = sanitize_text_field($access_info['first_name']);
            $last_name  = sanitize_text_field($access_info['last_name']);
            $result     = self::sa_register_user($email, $first_name, $last_name);
            if (is_wp_error($result)) {
                $errors  = $result->get_error_message();
                echo wp_json_encode(['registered' => false, 'message' => $errors]);
            } else {
                $message = sprintf(__('You have successfully registered to <strong>%s</strong>. We have emailed your password to the email address you entered.', SHORTCODE_ADDOONS), get_bloginfo('name'));
                echo wp_json_encode(['registered' => true, 'message' => $message]);
            }
        }
        exit;
    }
    public static function sa_register_user($email, $first_name, $last_name)
    {
        $errors = new \WP_Error();
        if (!is_email($email)) {
            $errors->add('email', __('The email address you entered is not valid.', SHORTCODE_ADDOONS));
            return $errors;
        }
        if (username_exists($email) || email_exists($email)) {
            $errors->add('email_exists', __('An account exists with this email address.', SHORTCODE_ADDOONS));
            return $errors;
        }
        $password = wp_generate_password(12, false);

        $user_data = array(
            'user_login'    => $email,
            'user_email'    => $email,
            'user_pass'     => $password,
            'first_name'    => $first_name,
            'last_name'     => $last_name,
            'nickname'      => $first_name,
        );
        $user_id = wp_insert_user($user_data);
        wp_new_user_notification($user_id, null, 'both');
        return $user_id;
    }
}

