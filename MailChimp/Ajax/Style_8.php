<?php

namespace SHORTCODE_ADDONS_UPLOAD\MailChimp\Ajax;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_8
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
class Style_8
{

    /**
     * load constructor
     *
     * @since 2.0.0
     */
    public function __construct()
    { }

    public function ajax_loader($rawdata = '', $optional, $optional2)
    {

        parse_str($rawdata, $style);
        $api_key = $optional['api'];
        $list_id = $optional['id'];
        $email =  $style['oxi-addons-mailchimp-email'];

        $data_center = substr($api_key, strpos($api_key, '-') + 1);
        $url = 'https://' . $data_center . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members';

        $json = json_encode([
            'email_address' => $email,
            'status' => 'subscribed',
            'merge_fields' =>
            [
                'FNAME' => '',
                'LNAME' => '',
            ]
        ]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($status_code == '200') {
            echo "success";
        } elseif ($status_code == '400') {
            echo "error";
        } else {
            echo "api_error";
        }
    }
}
