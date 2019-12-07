<?php

namespace OXI_FLIP_BOX_PLUGINS\Classes;

/**
 * Description of Support_Recommended
 *
 * @author biplo
 */
class Support_Recommended {
    /**
     * Revoke this function when the object is created.
     *
     */
    public function __construct() {
        require_once(ABSPATH . 'wp-admin/includes/screen.php');
        if (!current_user_can('install_plugins')):
            return;
        endif;
        $screen = get_current_screen();
        if (isset($screen->parent_file) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id) {
            return;
        }
        add_action('admin_notices', array($this, 'first_install'));
        add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts'));
        add_action('wp_ajax_oxi_tabs_admin_recommended', array($this, 'notice_dissmiss'));
        add_action('admin_notices', array($this, 'dismiss_button_scripts'));
    }

    /**
     * First Installation Track
     * @return void
     */
    public function first_install() {
        $installed_plugins = get_plugins();
        $plugin = '';
        if (isset($installed_plugins['elementor/elementor.php'])):
            if (!isset($installed_plugins['sb-image-hover-effects/index.php'])):
                $plugin = 'sb-image-hover-effects';
            endif;
        elseif (!isset($installed_plugins['shortcode-addons/index.php'])):
            $plugin = 'shortcode-addons';
        endif;
        if (!empty($plugin)):
            if ($plugin == 'sb-image-hover-effects'):
                $massage = '<p>Thank you for using <strong>Elementor Page Builder</strong>. We suggest you to use our <a href="https://wordpress.org/support/plugin/vc-tabs#new-post">Elementor Addons</a> - Premuim Elementor Addons comes with 100+ Elements and Elementor Template Library. Header Footer Builder and Menu Builder also Included with this Mega Addons</p>';
            else:
                $massage = '<p>Thank you for using my Responsive Tabs with Accordions.  We suggest you to use our <a href="https://wordpress.org/support/plugin/vc-tabs#new-post">Shortcode Addons</a>, The most Easiest Shortcode Builder with 70+ Elements. Create your wonderful website with most Flexible, Creative and Mordern Elements .</p>';
            endif;
            $install_url = wp_nonce_url(add_query_arg(array('action' => 'install-plugin', 'plugin' => $plugin), admin_url('update.php')), 'install-plugin' . '_' . $plugin);
            echo '<div class="oxi-addons-admin-notifications" style=" width: auto;">
                        <h3>
                            <span class="dashicons dashicons-flag"></span> 
                            Notifications
                        </h3>
                        <p></p>
                        <div class="oxi-addons-admin-notifications-holder">
                            <div class="oxi-addons-admin-notifications-alert">
                                ' . $massage . '
                                <p>' . sprintf('<a href="%s" class="button button-large button-primary">%s</a>', $install_url, __('Install Now', OXI_FLIP_BOX_TEXTDOMAIN)) . ' &nbsp;&nbsp;<a href="#" class="button button-large button-secondary oxi-tabs-admin-recommended-dismiss">No, Thanks</a></p>
                            </div>                     
                        </div>
                        <p></p>
                    </div>';
        endif;
    }

    /**
     * Admin Notice CSS file loader
     * @return void
     */
    public function admin_enqueue_scripts() {
        wp_enqueue_script("jquery");
        wp_enqueue_style('oxilab_tabs-admin-notice-css', OXI_FLIP_BOX_URL . '/Assets/Backend/css/notice.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        $this->dismiss_button_scripts();
    }

    /**
     * Admin Notice JS file loader
     * @return void
     */
    public function dismiss_button_scripts() {
        wp_enqueue_script('oxi_tabs-admin-recommended', OXI_FLIP_BOX_URL . '/Assets/Backend/js/admin-recommended.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_localize_script('oxi_tabs-admin-recommended', 'oxi_tabs_admin_recommended', array('ajaxurl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('oxi_tabs_admin_recommended')));
    }

    /**
     * Admin Notice Ajax  loader
     * @return void
     */
    public function notice_dissmiss() {
        if (isset($_POST['_wpnonce']) || wp_verify_nonce(sanitize_key(wp_unslash($_POST['_wpnonce'])), 'oxi_tabs_admin_recommended')):
            $data = 'done';
            update_option('responsive_tabs_with_accordions_recommended', $data);
            echo 'done';
        else:
            return;
        endif;

        die();
    }

}
