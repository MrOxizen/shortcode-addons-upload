<?php

namespace OXI_FLIP_BOX_PLUGINS\Helper;

trait Admin_helper {

    /**
     * Plugin fixed
     *
     * @since 3.1.0
     */
    public function fixed_data($agr) {
        return hex2bin($agr);
    }

    /**
     * Plugin fixed debugging data
     *
     * @since 3.1.0
     */
    public function fixed_debug_data($str) {
        return bin2hex($str);
    }

    public function Admin_Icon() {
        ?>
        <style type='text/css' media='screen'>
            #adminmenu #toplevel_page_oxi-flip-box-ultimate  div.wp-menu-image:before {
                content: "\f169";
            }
        </style>
        <?php

    }

    /**
     * Plugin check Current Tabs
     *
     * @since 2.0.0
     */
    public function check_current_tabs($agr) {
        $vs = get_option($this->fixed_data('726573706f6e736976655f746162735f776974685f6163636f7264696f6e735f6c6963656e73655f737461747573'));
        if ($vs == $this->fixed_data('76616c6964')) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function admin_url_convert($agr) {
        return admin_url(strpos($agr, 'edit') !== false ? $agr : 'admin.php?page=' . $agr);
    }

    public function SupportAndComments($agr) {
        echo '  <div class="oxi-addons-admin-notifications">
                    <h3>
                        <span class="dashicons dashicons-flag"></span> 
                        Notifications
                    </h3>
                    <p></p>
                    <div class="oxi-addons-admin-notifications-holder">
                        <div class="oxi-addons-admin-notifications-alert">
                            <p>Thank you for using my Flipbox - Awesomes Flip Boxes Image Overlay. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/image-hover-effects-ultimate-visual-composer#new-post">file a bug report</a>. </p>
                            ' . (apply_filters('oxi-flip-box-plugin/pro_version', false) ? '' : '<p>By the way, did you know we also have a <a href="https://www.oxilab.org/downloads/flipbox-image-overlay/">Premium Version</a>? It offers lots of options with automatic update. It also comes with 16/5 personal support.</p>') . '
                            <p>Thanks Again!</p>
                            <p></p>
                        </div>                     
                    </div>
                    <p></p>
                </div>';
    }

    /**
     * Plugin Admin Top Menu
     *
     * @since 2.0.0
     */
    public function oxilab_admin_menu($agr) {
        $response = !empty(get_transient(self::ADMINMENU)) ? get_transient(self::ADMINMENU) : [];
        if (!array_key_exists('Flip Box', $response)):
            $response['Flip Box']['Flip Box'] = [
                'name' => 'Flip Box',
                'homepage' => 'oxi-flip-box-ultimate'
            ];
            $response['Flip Box']['Create New'] = [
                'name' => 'Create New',
                'homepage' => 'oxi-flip-box-ultimate-new'
            ];
            $response['Flip Box']['Import Templates'] = [
                'name' => 'Import Templates',
                'homepage' => 'oxi-flip-box-ultimate-import'
            ];
            $response['Flip Box']['Addons'] = [
                'name' => 'Addons',
                'homepage' => 'oxi-flip-box-ultimate-addons'
            ];
            set_transient(self::ADMINMENU, $response, 10 * DAY_IN_SECONDS);
        endif;
        $bgimage = OXI_FLIP_BOX_URL . 'Assets/Image/sa-logo.png';
        $sub = '';

        $menu = '<div class="oxi-addons-wrapper">
                    <div class="oxilab-new-admin-menu">
                        <div class="oxi-site-logo">
                            <a href="' . $this->admin_url_convert('oxi-flip-box-ultimate') . '" class="header-logo" style=" background-image: url(' . $bgimage . ');">
                            </a>
                        </div>
                        <nav class="oxilab-sa-admin-nav">
                            <ul class="oxilab-sa-admin-menu">';


        $GETPage = sanitize_text_field($_GET['page']);
        if (count($response) == 1):
            foreach ($response['Flip Box'] as $key => $value) {
                $active = ($GETPage == $value['homepage'] ? ' class="active" ' : '');
                $menu .= '<li ' . $active . '><a href="' . $this->admin_url_convert($value['homepage']) . '">' . $this->name_converter($value['name']) . '</a></li>';
            }
        else:
            foreach ($response as $key => $value) {
                $active = ($key == 'Flip Box' ? 'active' : '');
                $menu .= '<li class="' . $active . '"><a class="oxi-nev-drop-menu" href="#">' . $this->name_converter($key) . '</a>';
                $menu .= '   <div class="oxi-nev-d-menu">
                                    <div class="oxi-nev-drop-menu-li">';
                foreach ($value as $key2 => $submenu) {
                    $menu .= '<a href="' . $this->admin_url_convert($submenu['homepage']) . '">' . $this->name_converter($submenu['name']) . '</a>';
                }
                $menu .= '</div>';
                $menu .= '</li>';
            }
            if ($GETPage == 'oxi-flip-box-ultimate' || $GETPage == 'oxi-flip-box-ultimate-new' || $GETPage == 'oxi-flip-box-ultimate-import' || $GETPage == 'oxi-flip-box-ultimate-addons'):
                $sub .= '<div class="shortcode-addons-main-tab-header">';
                foreach ($response['Flip Box'] as $key => $value) {
                    $active = ($GETPage == $value['homepage'] ? 'oxi-active' : '');
                    $sub .= '<a href="' . $this->admin_url_convert($value['homepage']) . '">
                                <div class="shortcode-addons-header ' . $active . '">' . $this->name_converter($value['name']) . '</div>
                              </a>';
                }
                $sub .= '</div>';
            endif;
        endif;
        $menu .= '              </ul>
                            <ul class="oxilab-sa-admin-menu2">
                               ' . (apply_filters('oxi-flip-box-plugin/pro_version', false) == FALSE ? ' <li class="fazil-class" ><a target="_blank" href="https://www.oxilab.org/downloads/flipbox-image-overlay/">Upgrade</a></li>' : '') . '
                               <li class="saadmin-doc"><a target="_black" href="https://www.oxilab.org/docs/flipbox-image-overlay/getting-started/installing-for-the-first-time/">Docs</a></li>
                               <li class="saadmin-doc"><a target="_black" href="https://wordpress.org/support/plugin/image-hover-effects-ultimate-visual-composer/">Support</a></li>
                               <li class="saadmin-set"><a href="' . admin_url('admin.php?page=oxi-tabs-ultimate-settings') . '"><span class="dashicons dashicons-admin-generic"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                ' . $sub;
        echo __($menu, OXI_FLIP_BOX_TEXTDOMAIN);
    }

    public function Admin_Menu() {
        $user_role = get_option('oxi_addons_user_permission');
        $role_object = get_role($user_role);
        $first_key = '';
        if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
            reset($role_object->capabilities);
            $first_key = key($role_object->capabilities);
        } else {
            $first_key = 'manage_options';
        }
        add_menu_page('Flip Box', 'Flip Box', $first_key, 'oxi-flip-box-ultimate', [$this, 'Flip_Home']);
        add_submenu_page('oxi-flip-box-ultimate', 'Flip Box', 'Content Tabs', $first_key, 'oxi-flip-box-ultimate', [$this, 'Flip_Home']);
        add_submenu_page('oxi-flip-box-ultimate', 'Create New', 'Create New', $first_key, 'oxi-flip-box-ultimate-new', [$this, 'Flip_Create']);
        add_submenu_page('oxi-flip-box-ultimate', 'Import Templates', 'Import Templates', $first_key, 'oxi-flip-box-ultimate-import', [$this, 'Flip_Import']);
        add_submenu_page('oxi-flip-box-ultimate', 'Oxilab Addons', 'Oxilab Addons', $first_key, 'oxi-flip-box-ultimate-addons', [$this, 'Flip_Addons']);
        add_submenu_page('oxi-flip-box-ultimate', 'Settings', 'Settings', $first_key, 'oxi-flip-box-ultimate-settings', [$this, 'Flip_Settings']);
        add_dashboard_page('Welcome To Flipbox - Awesomes Flip Boxes Image Overlay', 'Welcome To Flipbox - Awesomes Flip Boxes Image Overlay', 'read', 'oxi-flip-box-activation', [$this, 'oxi_flip_box_activation']);
    }

    public function Flip_Home() {
        new \OXI_FLIP_BOX_PLUGINS\Page\Home();
    }

    public function Flip_Create() {
        $styleid = (!empty($_GET['styleid']) ? (int) $_GET['styleid'] : '');
        if (!empty($styleid) && $styleid > 0):
            $style = $this->wpdb->get_row($this->wpdb->prepare('SELECT style_name FROM ' . $this->parent_table . ' WHERE id = %d ', $styleid), ARRAY_A);
            $style = ucfirst($style['style_name']);
            $cls = '\OXI_FLIP_BOX_PLUGINS\Admin\\' . $style;
            new $cls();
        else:
            new \OXI_FLIP_BOX_PLUGINS\Page\Create();
        endif;
    }

    public function Flip_Import() {
        new \OXI_FLIP_BOX_PLUGINS\Page\Import();
    }

    public function Flip_Addons() {
        new \OXI_FLIP_BOX_PLUGINS\Page\Addons();
    }

    public function Flip_Settings() {
        new \OXI_FLIP_BOX_PLUGINS\Page\Settings();
    }

    public function oxi_flip_box_activation() {
        new \OXI_FLIP_BOX_PLUGINS\Page\Welcome();
    }

    public function data_process() {
        if (isset($_POST['_wpnonce']) && wp_verify_nonce(sanitize_key(wp_unslash($_POST['_wpnonce'])), 'oxi-flip-box-editor')):
            $functionname = isset($_POST['functionname']) ? sanitize_text_field($_POST['functionname']) : '';
            $rawdata = isset($_POST['rawdata']) ? sanitize_post($_POST['rawdata']) : '';
            $styleid = isset($_POST['styleid']) ? (int) $_POST['styleid'] : '';
            $childid = isset($_POST['childid']) ? (int) $_POST['childid'] : '';
            if (!empty($functionname) && !empty($rawdata)):
                new \OXI_FLIP_BOX_PLUGINS\Classes\Admin_Ajax($functionname, $rawdata, $styleid, $childid);
            endif;
        else:
            return;
        endif;
        die();
    }

    /**
     * Admin Notice Check
     *
     * @since 2.0.0
     */
    public function admin_notice_status() {
        $data = get_option('oxilab_flip_box_nobug');
        return $data;
    }

    /**
     * Admin Install date Check
     *
     * @since 2.0.0
     */
    public function installation_date() {
        $data = get_option('oxilab_flip_box_activation_date');
        if (empty($data)):
            $data = strtotime("now");
            update_option('oxilab_flip_box_activation_date', $data);
        endif;
        return $data;
    }

    public function User_Reviews() {
        $this->admin_recommended();
        $this->admin_notice();
    }

    /**
     * Admin Notice Check
     *
     * @since 2.0.0
     */
    public function admin_recommended_status() {
        $data = get_option('oxilab_flip_box_recommended');
        return $data;
    }

    public function admin_recommended() {
        if (!empty($this->admin_recommended_status())):
            return;
        endif;
        if (strtotime('-30 minute') < $this->installation_date()):
            return;
        endif;
        new \OXI_FLIP_BOX_PLUGINS\Classes\Support_Recommended();
    }

    public function admin_notice() {
        if (!empty($this->admin_notice_status())):
            return;
        endif;
        if (strtotime('-7 days') < $this->installation_date()):
            return;
        endif;
        new \OXI_FLIP_BOX_PLUGINS\Classes\Support_Reviews();
    }

    public function redirect_on_activation() {
        if (get_transient('oxi_flip_box_activation_redirect')):
            delete_transient('oxi_flip_box_activation_redirect');
            if (is_network_admin() || isset($_GET['activate-multi'])):
                return;
            endif;
            wp_safe_redirect(admin_url("admin.php?page=oxi-flip-box-activation"));
        endif;
    }

    public function welcome_remove_menus() {
        remove_submenu_page('index.php', 'oxi-flip-box-activation');
    }

}
