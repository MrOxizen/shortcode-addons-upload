<?php

namespace OXI_FLIP_BOX_PLUGINS\Page;

/**
 * Description of Public
 *
 * @author biplo
 */
class Public_Render {

    /**
     * Current Elements id
     *
     * @since 2.0.0
     */
    public $oxiid;

    /**
     * Current Elements Style Data
     *
     * @since 2.0.0
     */
    public $style = [];

    /**
     * Current Elements Style Full
     *
     * @since 2.0.0
     */
    public $dbdata = [];

    /**
     * Current Elements multiple list data
     *
     * @since 2.0.0
     */
    public $child = [];

    /**
     * Current Elements Global CSS Data
     *
     * @since 2.0.0
     */
    public $CSSDATA = [];

    /**
     * Current Elements Global CSS Data
     *
     * @since 2.0.0
     */
    public $inline_css;

    /**
     * Current Elements Global JS Handle
     *
     * @since 2.0.0
     */
    public $JSHANDLE = 'shortcode-addons-jquery';

    /**
     * Current Elements Global DATA WRAPPER
     *
     * @since 2.0.0
     */
    public $WRAPPER;

    /**
     * Current Elements Admin Control
     *
     * @since 2.0.0
     */
    public $admin;

    /**
     * load constructor
     *
     * @since 2.0.0
     */

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

    public function __construct(array $dbdata = [], array $child = [], $admin = 'user') {
        if (count($dbdata) > 0):
            global $wpdb;
            $this->dbdata = $dbdata;
            $this->child = $child;
            $this->admin = $admin;
            $this->wpdb = $wpdb;
            $this->parent_table = $this->wpdb->prefix . 'oxi_div_style';
            $this->child_table = $this->wpdb->prefix . 'oxi_div_list';
            $this->import_table = $this->wpdb->prefix . 'oxi_div_import';
            if (!empty($dbdata['rawdata'])):
                $this->loader();
            else:
                $this->old_loader();
            endif;

        endif;
    }

    /**
     * Current element loader
     *
     * @since 2.0.0
     */
    public function loader() {
        $this->style = json_decode(stripslashes($this->dbdata['rawdata']), true);
        if (array_key_exists('id', $this->dbdata)):
            $this->oxiid = $this->dbdata['id'];
        else:
            $this->oxiid = rand(100000, 200000);
        endif;
        $this->CSSDATA = $this->dbdata['stylesheet'];
        $this->WRAPPER = 'oxi-addons-flip-wrapper-' . $this->dbdata['id'];
        $this->hooks();
    }

    /**
     * load old data since 1.7
     *
     * @since 2.0.0
     */
    public function old_loader() {
        $this->public_old_loader();
        $this->old_render();
    }

    /**
     * load css and js hooks
     *
     * @since 2.0.0
     */
    public function hooks() {
        $this->public_jquery();
        $this->public_css();
        $this->public_frontend_loader();
        $this->render();
        $inlinecss = $this->inline_public_css() . $this->inline_css;
        $inlinejs = $this->inline_public_jquery();
        wp_enqueue_style('shortcode-addons-' . $this->dbdata['style_name'], OXI_FLIP_BOX_URL . '/Assets/Frontend/css/' . ucfirst($this->dbdata['style_name']) . '.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        if ($this->CSSDATA == '' && $this->admin == 'admin') {
            $cls = '\OXI_FLIP_BOX_PLUGINS\Admin\\' . ucfirst($this->dbdata['style_name']) . '';
            $CLASS = new $cls('admin');
            $inlinecss .= $CLASS->inline_template_css_render($this->style);
        } else {
            $inlinecss .= $this->CSSDATA;
        }
        echo $this->font_familly_validation(json_decode(($this->dbdata['font_family'] != '' ? $this->dbdata['font_family'] : "[]"), true));

        if ($inlinejs != ''):
            if ($this->admin == 'admin'):
                //only load while ajax called
                echo _('<script>
                        (function ($) {
                            setTimeout(function () {');
                echo $inlinejs;
                echo _('    }, 2000);
                        })(jQuery)</script>');
            else:
                $jquery = '(function ($) {' . $inlinejs . '})(jQuery);';
                wp_add_inline_script($this->JSHANDLE, $jquery);
            endif;

        endif;
        if ($inlinecss != ''):
            $inlinecss = html_entity_decode($inlinecss);
            if ($this->admin == 'admin'):
                //only load while ajax called
                echo _('<style>');
                echo $inlinecss;
                echo _('</style>');
            else:
                wp_add_inline_style('shortcode-addons-style', $inlinecss);
            endif;
        endif;
    }

    /**
     * front end loader css and js
     *
     * @since 2.0.0
     */
    public function public_frontend_loader() {
        wp_enqueue_script("jquery");
        wp_enqueue_style('oxi-addons-flip-boxes-css', OXI_FLIP_BOX_URL . '/Assets/Frontend/css/flip-boxes.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_style('oxi-animation', OXI_FLIP_BOX_URL . '/Assets/Frontend/css/animation.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_style('shortcode-addons-style', OXI_FLIP_BOX_URL . '/Assets/Frontend/css/style.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_script('waypoints.min', OXI_FLIP_BOX_URL . '/Assets/Frontend/js/waypoints.min.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_script('shortcode-addons-jquery', OXI_FLIP_BOX_URL . '/Assets/Frontend/js/jquery.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
    }

    /**
     * front end loader css and js
     *
     * @since 2.0.0
     */
    public function public_old_loader() {
        wp_enqueue_script("jquery");
        wp_enqueue_style('oxi-animation', OXI_FLIP_BOX_URL . '/Assets/Frontend/css/animation.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_style('flip-box-addons-style', OXI_FLIP_BOX_URL . '/Assets/Frontend/css/old-style.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_script('waypoints.min', OXI_FLIP_BOX_URL . '/Assets/Frontend/js/waypoints.min.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_script('shortcode-addons-jquery', OXI_FLIP_BOX_URL . '/Assets/Frontend/js/jquery.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
    }

    /**
     * old empty old render
     *
     * @since 2.0.0
     */
    public function old_render() {
        echo '';
    }

    /**
     * load current element render since 2.0.0
     *
     * @since 2.0.0
     */
    public function render() {
        echo '<div class="oxi-addons-container ' . $this->WRAPPER . '">
                 <div class="oxi-addons-row">';
        $this->default_render($this->style, $this->child, $this->admin);
        echo '   </div>
              </div>';
    }

    /**
     * load public jquery
     *
     * @since 2.0.0
     */
    public function public_jquery() {
        echo '';
    }

    /**
     * load public css
     *
     * @since 2.0.0
     */
    public function public_css() {
        echo '';
    }

    /**
     * load inline public jquery
     *
     * @since 2.0.0
     */
    public function inline_public_jquery() {
        echo '';
    }

    /**
     * load inline public css
     *
     * @since 2.0.0
     */
    public function inline_public_css() {
        echo '';
    }

    /**
     * load old public frontend loader
     *
     * @since 2.0.0
     */
    public function public_frontend_old_loader() {
        echo '';
    }

    /**
     * load default render
     *
     * @since 2.0.0
     */
    public function default_render($style, $child, $admin) {
        echo '';
    }

    /**
     * load default render
     *
     * @since 2.0.0
     */
    public function Json_Decode($rawdata) {
        return $rawdata != '' ? json_decode(stripcslashes($rawdata), true) : [];
    }

    public function name_converter($data) {
        $data = str_replace('_', ' ', $data);
        $data = str_replace('-', ' ', $data);
        $data = str_replace('+', ' ', $data);
        return ucwords($data);
    }

    public function font_familly_validation($data = []) {
        foreach ($data as $value) {
            wp_enqueue_style('' . $value . '', 'https://fonts.googleapis.com/css?family=' . $value . '');
        }
    }

    public function font_familly($data = '') {
        wp_enqueue_style('' . $data . '', 'https://fonts.googleapis.com/css?family=' . $data . '');
        $data = str_replace('+', ' ', $data);
        $data = explode(':', $data);
        return '"' . $data[0] . '"';
    }

    public function admin_name_validation($data) {
        $data = str_replace('_', ' ', $data);
        $data = str_replace('-', ' ', $data);
        $data = str_replace('+', ' ', $data);
        return ucwords($data);
    }

    public function array_render($id, $style) {
        if (array_key_exists($id, $style)):
            return $style[$id];
        endif;
    }

    public function media_render($id, $style) {
        $url = '';
        if (array_key_exists($id . '-select', $style)):
            if ($style[$id . '-select'] == 'media-library'):
                return $style[$id . '-image'];
            else:
                return $style[$id . '-url'];
            endif;
        endif;
    }

    public function text_render($data) {
        return do_shortcode(str_replace('spTac', '&nbsp;', str_replace('spBac', '<br>', html_entity_decode($data))), $ignore_html = false);
    }

    public function font_awesome_render($data) {
        $fadata = get_option('oxi_addons_font_awesome');
        if ($fadata == 'yes'):
            wp_enqueue_style('font-awsome.min', OXI_FLIP_BOX_URL . '/Assets/Frontend/css/font-awsome.min.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        endif;
        $files = '<i class="' . $data . ' oxi-icons"></i>';
        return $files;
    }

    public function column_render($id, $style) {
        $file = $style[$id . '-lap'] . ' ';
        $file .= $style[$id . '-tab'] . ' ';
        $file .= $style[$id . '-mob'] . ' ';
        return $file;
    }

    public function url_render($id, $style) {
        $link = '';
        if (array_key_exists($id . '-url', $style) && $style[$id . '-url'] != ''):
            $link .= ' href="' . $style[$id . '-url'] . '"';
            if (array_key_exists($id . '-target', $style) && $style[$id . '-target'] != '0'):
                $link .= ' target="_blank"';
            endif;
            if (array_key_exists($id . '-follow', $style) && $style[$id . '-follow'] != '0'):
                $link .= ' rel="nofollow"';
            endif;
            if (array_key_exists($id . '-id', $style) && $style[$id . '-id']):
                $link .= ($style[$id . '-id'] != '' ? ' id="' . $style[$id . '-id'] . '"' : '');
            endif;
        endif;

        return $link;
    }

    public function animation_render($id, $style) {
        $return = (array_key_exists($id . '-type', $style) && $style[$id . '-type'] != '' ? ' sa-data-animation="' . $style[$id . '-type'] . ' ' . (array_key_exists($id . '-looping', $style) && $style[$id . '-looping'] != '0' ? 'infinite' : '') . '"' : '');
        if ($return != ''):
            $return .= (array_key_exists($id . '-offset-size', $style) ? ' sa-data-animation-offset="' . $style[$id . '-offset-size'] . '%"' : '');
            $return .= (array_key_exists($id . '-delay-size', $style) ? ' sa-data-animation-delay="' . $style[$id . '-delay-size'] . 'ms"' : '');
            $return .= (array_key_exists($id . '-duration-size', $style) ? ' sa-data-animation-duration="' . $style[$id . '-duration-size'] . 'ms"' : '');
            return $return;
        endif;
    }

    public function background_render($id, $style, $class) {
        $backround = '';
        if (array_key_exists($id . '-color', $style)):
            $color = $style[$id . '-color'];
            if (array_key_exists($id . '-img', $style) && $style[$id . '-img'] != '0'):
                if (strpos(strtolower($color), 'gradient') === FALSE):
                    $color = 'linear-gradient(0deg, ' . $color . ' 0%, ' . $color . ' 100%)';
                endif;
                if ($style[$id . '-select'] == 'media-library'):
                    $backround .= $class . '{background: ' . $color . ', url(\'' . $style[$id . '-image'] . '\') ' . $style[$id . '-repeat'] . ' ' . $style[$id . '-position'] . ';
                                           background-attachment: ' . $style[$id . '-attachment'] . ';
                                           background-size:  ' . $style[$id . '-size-lap'] . ';}';
                    $backround .= '@media only screen and (min-width : 669px) and (max-width : 993px){';
                    $backround .= $class . '{background-size:  ' . $style[$id . '-size-tab'] . ';}';
                    $backround .= '}';
                    $backround .= '@media only screen and (max-width : 668px){';
                    $backround .= $class . '{background-size:  ' . $style[$id . '-size-mob'] . ';}';
                    $backround .= '}';
                else:
                    $backround .= $class . '{background: ' . $color . ', url(\'' . $style[$id . '-url'] . '\') ' . $style[$id . '-repeat'] . ' ' . $style[$id . '-position'] . '; 
                                           background-attachment: ' . $style[$id . '-attachment'] . ';
                                           background-size:  ' . $style[$id . '-size-lap'] . ';}';
                    $backround .= '@media only screen and (min-width : 669px) and (max-width : 993px){';
                    $backround .= $class . '{background-size:  ' . $style[$id . '-size-tab'] . ';}';
                    $backround .= '}';
                    $backround .= '@media only screen and (max-width : 668px){';
                    $backround .= $class . '{background-size:  ' . $style[$id . '-size-mob'] . ';}';
                    $backround .= '}';
                endif;
            else:
                $backround .= $class . '{background: ' . $color . ';}';
            endif;
        endif;
        return $backround;
    }

    public function CatStringToClassReplacce($string, $number = '000') {
        $entities = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', "t");
        $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]", " ");
        return 'sa_STCR_' . str_replace($replacements, $entities, urlencode($string)) . $number;
    }

}
