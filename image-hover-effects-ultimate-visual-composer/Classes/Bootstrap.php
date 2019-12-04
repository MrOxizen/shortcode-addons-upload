<?php

namespace OXI_FLIP_BOX_PLUGINS\Classes;

if (!defined('ABSPATH'))
    exit;

/**
 * Description of Bootstrap
 *
 * @author biplo
 */
class Bootstrap {

    use \OXI_FLIP_BOX_PLUGINS\Helper\Public_Helper;
    use \OXI_FLIP_BOX_PLUGINS\Helper\Admin_helper;

    // instance container
    private static $instance = null;

    /**
     * Define $wpdb
     *
     * @since 3.1.0
     */
    public $wpdb;

    /**
     * Database Parent Table
     *
     * @since 3.1.0
     */
    public $parent_table;

    /**
     * Database Import Table
     *
     * @since 3.1.0
     */
    public $import_table;

    /**
     * Database Import Table
     *
     * @since 3.1.0
     */
    public $child_table;

    const ADMINMENU = 'get_oxilab_addons_menu';

    public static function instance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function __construct() {
        do_action('oxi-flip-box-plugin/before_init');
        // Load translation
        add_action('init', array($this, 'i18n'));
        $this->Shortcode_loader();
        $this->Public_loader();
        if (is_admin()) {
            $this->Admin_Filters();
            $this->User_Admin();
            $this->User_Reviews();
        }
    }

    /**
     * Load Textdomain
     *
     * @since 3.1.0
     * @access public
     */
    public function i18n() {
        load_plugin_textdomain('oxi-flip-box-plugin');
    }

    /**
     * Shortcode loader
     *
     * @since 3.1.0
     * @access public
     */
    protected function Shortcode_loader() {
        add_shortcode('oxilab_flip_box', [$this, 'wp_shortcode']);
        new \OXI_FLIP_BOX_PLUGINS\Modules\Visual_Composer();
        $Tabs_Widget = new \OXI_FLIP_BOX_PLUGINS\Modules\Widget();
        add_filter('widget_text', 'do_shortcode');
        add_action('widgets_init', array($Tabs_Widget, 'flip_register_flipwidget'));
    }

    /**
     * Execute Shortcode
     *
     * @since 3.1.0
     * @access public
     */
    public function wp_shortcode($atts) {
        extract(shortcode_atts(array('id' => ' ',), $atts));
        $styleid = $atts['id'];
        ob_start();
        $this->shortcode_render($styleid, 'user');
        return ob_get_clean();
    }

    public function Public_loader() {
        global $wpdb;
        $this->wpdb = $wpdb;
        $this->parent_table = $this->wpdb->prefix . 'oxi_div_style';
        $this->child_table = $this->wpdb->prefix . 'oxi_div_list';
        $this->import_table = $this->wpdb->prefix . 'oxi_div_import';
    }

    public function Admin_Filters() {
      //  echo $this->fixed_debug_data('oxi-flip-box-plugin/admin_menu');
        add_filter($this->fixed_data('6f78692d666c69702d626f782d737570706f72742d616e642d636f6d6d656e7473'), array($this, $this->fixed_data('537570706f7274416e64436f6d6d656e7473')));
        add_filter($this->fixed_data('6f78692d666c69702d626f782d706c7567696e2f70726f5f76657273696f6e'), array($this, $this->fixed_data('636865636b5f63757272656e745f74616273')));
        add_filter($this->fixed_data('6f78692d666c69702d626f782d706c7567696e2f61646d696e5f6d656e75'), array($this, $this->fixed_data('6f78696c61625f61646d696e5f6d656e75')));
    }

    public function User_Admin() {
        $this->Admin_Settings();
        add_action('admin_menu', [$this, 'Admin_Menu']);
        add_action('admin_head', [$this, 'Admin_Icon']);
        add_action('wp_ajax_oxi_flip_box_data', array($this, 'data_process'));
        add_action('admin_init', array($this, 'redirect_on_activation'));
        add_action('admin_head', [$this, 'welcome_remove_menus']);
    }

    public function Admin_Settings() {
        add_action('admin_init', [$this, 'flip_box_settings']);
        add_action('admin_init', [$this, 'register_license']);
        add_action('admin_init', [$this, 'activate_license']);
        add_action('admin_init', [$this, 'deactivate_license']);
    }

    public function flip_box_settings() {
        //register our settings
        register_setting('oxi-flip-box-settings-group', 'oxi_addons_user_permission');
        register_setting('oxi-flip-box-settings-group', 'oxi_addons_font_awesome');
        register_setting('oxi-flip-box-settings-group', 'oxi_addons_font_awesome_version');
    }

    public function register_license() {
        register_setting('oxilab_flip_box_license', 'oxilab_flip_box_license_key', [$this, 'sanitize_license']);
    }

    public function sanitize_license($new) {
        $old = get_option('oxilab_flip_box_license_key');
        if ($old && $old != $new) {
            delete_option('oxilab_flip_box_license_status');
        }
        return $new;
    }

    public function activate_license() {

        if (isset($_POST['oxilab_flip_box_license_activate'])) {


            if (!check_admin_referer('oxilab_flip_box_nonce', 'oxilab_flip_box_nonce'))
                return;
            $license = trim(get_option('oxilab_flip_box_license_key'));

            $api_params = array(
                'edd_action' => 'activate_license',
                'license' => $license,
                'item_name' => urlencode('Flipbox - Image Overlay'),
                'url' => home_url()
            );

            $response = wp_remote_post('https://www.oxilab.org', array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {
                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }
            } else {

                $license_data = json_decode(wp_remote_retrieve_body($response));

                if (false === $license_data->success) {

                    switch ($license_data->error) {

                        case 'expired' :

                            $message = sprintf(
                                    __('Your license key expired on %s.'), date_i18n(get_option('date_format'), strtotime($license_data->expires, current_time('timestamp')))
                            );
                            break;

                        case 'revoked' :

                            $message = __('Your license key has been disabled.');
                            break;

                        case 'missing' :

                            $message = __('Invalid license.');
                            break;

                        case 'invalid' :
                        case 'site_inactive' :

                            $message = __('Your license is not active for this URL.');
                            break;

                        case 'item_name_mismatch' :

                            $message = sprintf(__('This appears to be an invalid license key for %s.'), Responsive_Tabs_with_Accordions);
                            break;

                        case 'no_activations_left':

                            $message = __('Your license key has reached its activation limit.');
                            break;

                        default :

                            $message = __('An error occurred, please try again.');
                            break;
                    }
                }
            }

            if (!empty($message)) {
                $base_url = admin_url('admin.php?page=oxi-flip-box-ultimate-settings');
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }
            update_option('oxilab_flip_box_license_status', $license_data->license);
            wp_redirect(admin_url('admin.php?page=oxi-flip-box-ultimate-settings'));
            exit();
        }
    }

    public function deactivate_license() {
        if (isset($_POST['oxilab_flip_box_license_deactivate'])) {
            if (!check_admin_referer('oxilab_flip_box_nonce', 'oxilab_flip_box_nonce'))
                return;
            $license = trim(get_option('oxilab_flip_box_license_key'));
            $api_params = array(
                'edd_action' => 'deactivate_license',
                'license' => $license,
                'item_name' => urlencode('Flipbox - Image Overlay'),
                'url' => home_url()
            );

            $response = wp_remote_post('https://www.oxilab.org', array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));


            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {

                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }

                $base_url = admin_url('admin.php?page=oxi-flip-box-ultimate-settings');
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }
            $license_data = json_decode(wp_remote_retrieve_body($response));
            if ($license_data->license == 'deactivated') {
                delete_option('oxilab_flip_box_license_status');
            }

            wp_redirect(admin_url('admin.php?page=oxi-flip-box-ultimate-settings'));
            exit();
        }
    }

}
