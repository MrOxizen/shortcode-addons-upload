<?php

namespace OXI_FLIP_BOX_PLUGINS\Classes;

/**
 * Description of Admin_Ajax
 *
 * @author biplo
 */
class Admin_Ajax {

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

    /**
     * Constructor of plugin class
     *
     * @since 3.1.0
     */
    public function __construct($type = '', $data = '', $styleid = '', $itemid = '') {
        if (!empty($type) && !empty($data)):
            global $wpdb;
            $this->wpdb = $wpdb;
            $this->parent_table = $this->wpdb->prefix . 'oxi_div_style';
            $this->child_table = $this->wpdb->prefix . 'oxi_div_list';
            $this->import_table = $this->wpdb->prefix . 'oxi_div_import';
            $this->$type($data, $styleid, $itemid);
        endif;
    }

    public function array_replace($arr = [], $search = '', $replace = '') {
        array_walk($arr, function (&$v) use ($search, $replace) {
            $v = str_replace($search, $replace, $v);
        });
        return $arr;
    }

    public function create_flip($data = '', $styleid = '', $itemid = '') {
        if (!empty($styleid)):
            $styleid = (int) $styleid;
            $newdata = $this->wpdb->get_row($this->wpdb->prepare('SELECT * FROM ' . $this->parent_table . ' WHERE id = %d ', $styleid), ARRAY_A);
            $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->parent_table} (name, type, style_name, rawdata) VALUES ( %s, %s, %s, %s)", array($data, 'flip', $newdata['style_name'], $newdata['rawdata'])));
            $redirect_id = $this->wpdb->insert_id;
            if ($redirect_id > 0):
                $raw = json_decode(stripslashes($newdata['rawdata']), true);
                $raw['oxi-addons-flip-elements-id'] = $redirect_id;
                $cls = '\OXI_FLIP_BOX_PLUGINS\Admin\\' . ucfirst($newdata['style_name']) . '';
                $CLASS = new $cls('admin');
                $f = $CLASS->template_css_render($raw);
                $child = $this->wpdb->get_results($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE styleid = %d ORDER by id ASC", $styleid), ARRAY_A);
                foreach ($child as $value) {
                    $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->child_table} (styleid, type, rawdata) VALUES (%d, %s, %s)", array($redirect_id, 'flip', $value['rawdata'])));
                }
                echo admin_url("admin.php?page=oxi-flip-box-ultimate-new&styleid=$redirect_id");
            endif;
        else:
            $params = json_decode(stripslashes($data), true);
            $newname = $params['name'];
            $rawdata = $params['style'];
            $style = $rawdata['style'];
            $child = $rawdata['child'];
            $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->parent_table} (name, type, style_name, rawdata) VALUES ( %s, %s, %s, %s)", array($newname, 'flip', $style['style_name'], $style['rawdata'])));
            $redirect_id = $this->wpdb->insert_id;
            if ($redirect_id > 0):
                $raw = json_decode(stripslashes($style['rawdata']), true);
                $raw['oxi-addons-flip-elements-id'] = $redirect_id;
                $cls = '\OXI_FLIP_BOX_PLUGINS\Admin\\' . ucfirst($style['style_name']) . '';
                $CLASS = new $cls('admin');
                $f = $CLASS->template_css_render($raw);
                foreach ($child as $value) {
                    $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->child_table} (styleid, type, rawdata) VALUES (%d, %s, %s)", array($redirect_id, 'flip', $value['rawdata'])));
                }
                echo admin_url("admin.php?page=oxi-flip-box-ultimate-new&styleid=$redirect_id");
            endif;
        endif;
    }

    public function shortcode_delete($data = '', $styleid = '', $itemid = '') {
        $styleid = (int) $styleid;
        if ($styleid):
            $this->wpdb->query($this->wpdb->prepare("DELETE FROM {$this->parent_table} WHERE id = %d", $styleid));
            $this->wpdb->query($this->wpdb->prepare("DELETE FROM {$this->child_table} WHERE styleid = %d", $styleid));
            echo 'done';
        else:
            echo 'Silence is Golden';
        endif;
    }

    public function shortcode_export($data = '', $styleid = '', $itemid = '') {
        $styleid = (int) $styleid;
        if ($styleid):
            $st = $this->wpdb->get_row($this->wpdb->prepare("SELECT * FROM $this->parent_table WHERE id = %d", $styleid), ARRAY_A);
            $c = $this->wpdb->get_results($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE styleid = %d ORDER by id ASC", $styleid), ARRAY_A);
            $style = [
                'id' => $st['id'],
                'type' => ucfirst($st['type']),
                'name' => $st['name'],
                'style_name' => $st['style_name'],
                'rawdata' => json_encode($this->array_replace(json_decode(stripslashes($st['rawdata']), true), '"', '&quot;')),
                'stylesheet' => htmlentities($st['stylesheet']),
                'font_family' => $st['font_family'],
            ];
            $child = [];
            foreach ($c as $value) {
                $child[] = [
                    'id' => $value['id'],
                    'styleid' => $value['styleid'],
                    'rawdata' => json_encode($this->array_replace(json_decode(stripslashes($value['rawdata']), true), '"', '&quot;')),
                    'stylesheet' => htmlentities($value['stylesheet'])
                ];
            }
            $newdata = ['plugin' => 'flipbox', 'style' => $style, 'child' => $child];
            echo json_encode($newdata);
        else:
            echo 'Silence is Golden';
        endif;
    }

    public function shortcode_deactive($data = '', $styleid = '', $itemid = '') {
        parse_str($data, $params);
        $styleid = (int) $params['oxideletestyle'];
        if ($styleid):
            $this->wpdb->query($this->wpdb->prepare("DELETE FROM {$this->import_table} WHERE name = %d", $styleid));
            echo 'done';
        else:
            echo 'Silence is Golden';
        endif;
    }

    public function shortcode_active($data = '', $styleid = '', $itemid = '') {
        parse_str($data, $params);
        $styleid = (int) $params['oxiimportstyle'];
        if ($styleid):
            $flip = 'flip';
            $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->import_table} (type, name) VALUES (%s, %d)", array($flip, $styleid)));
            echo admin_url("admin.php?page=oxi-flip-box-ultimate-new#Style" . $styleid);
        else:
            echo 'Silence is Golden';
        endif;
    }

    public function addons_rearrange($data = '', $styleid = '', $itemid = '') {
        $list = explode(',', $data);
        foreach ($list as $value) {
            $data = $this->wpdb->get_row($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE id = %d ", $value), ARRAY_A);
            $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->child_table} (styleid, files, css) VALUES (%d, %s, %s)", array($data['styleid'], $data['files'], $data['css'])));
            $redirect_id = $this->wpdb->insert_id;
            if ($redirect_id == 0) {
                return;
            }
            if ($redirect_id != 0) {
                $this->wpdb->query($this->wpdb->prepare("DELETE FROM $this->child_table WHERE id = %d", $value));
            }
        }
        echo 'ajshdjsad';
        return;
    }

    /**
     * Template Style Data
     *
     * @since 2.0.0
     */
    public function elements_template_style_data($rawdata = '', $styleid = '') {
        $settings = json_decode(stripslashes($rawdata), true);
        $StyleName = sanitize_text_field($settings['oxi-addons-flip-elements-template']);
        $stylesheet = '';
        if ((int) $styleid):
            $this->wpdb->query($this->wpdb->prepare("UPDATE {$this->parent_table} SET rawdata = %s, stylesheet = %s WHERE id = %d", $rawdata, $stylesheet, $styleid));
            $cls = '\OXI_FLIP_BOX_PLUGINS\Admin\\' . $StyleName . '';
            $CLASS = new $cls('admin');
            echo $CLASS->template_css_render($settings);
        endif;
    }

    /**
     * Template Style Data
     *
     * @since 2.0.0
     */
    public function elements_template_old_version($rawdata = '', $styleid = '') {
        $stylesheet = $rawdata = '';
        if ((int) $styleid):
            $this->wpdb->query($this->wpdb->prepare("UPDATE {$this->parent_table} SET rawdata = %s, stylesheet = %s WHERE id = %d", $rawdata, $stylesheet, $styleid));
            echo 'success';
        endif;
    }

    /**
     * Template Name Change
     *
     * @since 2.0.0
     */
    public function elements_template_change_name($rawdata = '') {
        $settings = json_decode(stripslashes($rawdata), true);
        $name = sanitize_text_field($settings['addonsstylename']);
        $id = $settings['addonsstylenameid'];
        if ((int) $id):
            $this->wpdb->query($this->wpdb->prepare("UPDATE {$this->parent_table} SET name = %s WHERE id = %d", $name, $id));
            echo 'success';
        endif;
    }

    /**
     * Template Name Change
     *
     * @since 2.0.0
     */
    public function elements_rearrange_modal_data($rawdata = '', $styleid = '', $childid) {
        if ((int) $styleid):
            $child = $this->wpdb->get_results($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE styleid = %d ORDER by id ASC", $styleid), ARRAY_A);
            $render = [];
            foreach ($child as $key => $value) {
                $data = json_decode(stripcslashes($value['rawdata']));
                $render[$value['id']] = $data;
            }
            echo json_encode($render);
        endif;
    }

    /**
     * Template Name Change
     *
     * @since 2.0.0
     */
    public function elements_template_rearrange_save_data($rawdata = '', $styleid = '', $childid) {
        $params = explode(',', $rawdata);
        foreach ($params as $value) {
            if ((int) $value):
                $data = $this->wpdb->get_row($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE id = %d ", $value), ARRAY_A);
                $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->child_table} (styleid, rawdata, stylesheet) VALUES (%d, %s, %s)", array($data['styleid'], $data['rawdata'], $data['stylesheet'])));
                $redirect_id = $this->wpdb->insert_id;
                if ($redirect_id == 0) {
                    return;
                }
                if ($redirect_id != 0) {
                    $this->wpdb->query($this->wpdb->prepare("DELETE FROM $this->child_table WHERE id = %d", $value));
                }
            endif;
        }
        echo 'success';
    }

    /**
     * Template Modal Data
     *
     * @since 2.0.0
     */
    public function elements_template_modal_data($rawdata = '', $styleid = '', $childid) {
        if ((int) $styleid):
            $type = 'flip';
            if ((int) $childid):
                $this->wpdb->query($this->wpdb->prepare("UPDATE {$this->child_table} SET rawdata = %s WHERE id = %d", $rawdata, $childid));
            else:
                $this->wpdb->query($this->wpdb->prepare("INSERT INTO {$this->child_table} (styleid, type, rawdata) VALUES (%d, %s, %s )", array($styleid, $type, $rawdata)));
            endif;
        endif;
    }

    /**
     * Template Template Render
     *
     * @since 2.0.0
     */
    public function elements_template_render_data($rawdata = '', $styleid = '') {
        $settings = json_decode(stripslashes($rawdata), true);
        $child = $this->wpdb->get_results($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE styleid = %d ORDER by id ASC", $styleid), ARRAY_A);
        $StyleName = $settings['oxi-addons-flip-elements-template'];
        $cls = '\OXI_FLIP_BOX_PLUGINS\Public_Render\\' . $StyleName . '';
        $CLASS = new $cls;
        $styledata = ['rawdata' => $rawdata, 'id' => $styleid, 'style_name' => $StyleName, 'stylesheet' => ''];
        $CLASS->__construct($styledata, $child, 'admin');
    }

    /**
     * Template Modal Data Edit Form 
     *
     * @since 2.0.0
     */
    public function elements_template_modal_data_edit($rawdata = '', $styleid = '', $childid) {
        if ((int) $childid):
            $listdata = $this->wpdb->get_row($this->wpdb->prepare("SELECT * FROM {$this->child_table} WHERE id = %d ", $childid), ARRAY_A);
            $returnfile = json_decode(stripslashes($listdata['rawdata']), true);
            $returnfile['shortcodeitemid'] = $childid;
            echo json_encode($returnfile);
        else:
            echo 'Silence is Golden';
        endif;
    }

    /**
     * Template Child Delete Data
     *
     * @since 2.0.0
     */
    public function elements_template_modal_data_delete($rawdata = '', $styleid = '', $childid) {
        if ((int) $childid):
            $this->wpdb->query($this->wpdb->prepare("DELETE FROM {$this->child_table} WHERE id = %d ", $childid));
            echo 'done';
        else:
            echo 'Silence is Golden';
        endif;
    }

}
