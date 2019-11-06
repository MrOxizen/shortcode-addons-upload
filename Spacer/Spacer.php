<?php

namespace SHORTCODE_ADDONS_UPLOAD\Spacer;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Icon_boxes
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Spacer extends Elements_Frontend {

    use \SHORTCODE_ADDONS\Support\Sanitization;

    public function pre_created_templates() {
        $return = _(' <div class="oxi-addons-row table-responsive abop" style="margin-bottom: 20px; opacity: 0; height: 0px">
                        <table class="table table-hover widefat oxi_addons_table_data" style="background-color: #fff; border: 1px solid #ccc">
                            <thead>
                                <tr>
                                    <th style="width: 10%">ID</th>
                                    <th style="width: 15%">Name</th>
                                    <th style="width: 30%">Shortcode</th>
                                    <th style="width: 30%">Edit Delete</th>
                                </tr>
                            </thead>
                            <tbody>');
        foreach ($this->database_data() as $value) {
            $id = $value['id'];
            $return .= _('<tr>');
            $return .= _('<td>' . $id . '</td>');
            $return .= _('<td>' . $this->admin_name_validation($value['name']) . '</td>');
            $return .= _('<td><span>Shortcode &nbsp;&nbsp;<input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="[oxi_addons id=&quot;' . $id . '&quot;]"></span> <br>'
                    . '<span>Php Code &nbsp;&nbsp; <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[oxi_addons  id=&quot;' . $id . '&quot;]&#039;); ?&gt;"></span></td>');
            $return .= _('<td> 
                       <a href="#" data-id="' . $id . '" title="Edit"  class="btn btn-info oxieditid" style="float:left; margin-right: 5px; margin-left: 5px;">Edit</a>
                       <form method="post" class="oxi-addons-style-delete">
                               <input type="hidden" name="oxideleteid" value="' . $id . '">
                               <button class="btn btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="addonsdatadelete">Delete</button>  
                       </form>
                       <form method="post" class="oxi-addons-style-export">
                               <input type="hidden" name="oxiexportid" value="' . $id . '">
                               <button class="btn btn-info" style="float:left; margin-left: 5px;"  title="Export"  type="submit" value="export" name="export">Export</button>  
                       </form>
                </td>');
            $return .= _(' </tr>');
        }
        $return .= _('      </tbody>
                </table>
            </div>
            <br>
            <br>');
        return $return;
    }

    public function rander() {
        ?>
        <div class="wrap">  
            <div class="oxi-addons-wrapper">
                <?php
                apply_filters('shortcode-addons/admin_nav_menu', false);
                $this->elements_home();
                ?>
            </div>
        </div>
        <?php
    }

    public function elements_home() {
        echo _('<div class="oxi-addons-row">
                    <div class="oxi-addons-wrapper">
                        <div class="oxi-addons-import-layouts">
                            <h1>Shortcode Addons ›
                                ' . $this->admin_name_validation($this->oxitype) . '
                            </h1>
                            <p> View our  ' . $this->admin_name_validation($this->oxitype) . ' from Demo and select Which one You Want</p>
                        </div>
                    </div>');
        echo $this->pre_created_templates();
        echo _(' </div>');
        ?>

        <div class="oxi-addons-row">
            <?php
            echo _('<div class="oxi-addons-col-1 oxi-import">
                        <div class="oxi-addons-style-preview">
                            <div class="oxilab-admin-style-preview-top">
                                <a href="#" class="oxi-addons-addons-template-create">
                                    <div class="oxilab-admin-add-new-item">
                                        <span>
                                            <i class="fas fa-plus-circle oxi-icons"></i>  
                                            Add New Spacer
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>');

            echo _('<div class="modal fade" id="oxi-addons-style-create-modal" >
                        <form method="post" id="oxi-addons-style-modal-form">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">                    
                                        <h4 class="modal-title">' . $this->admin_name_validation($this->oxitype) . ' Settings</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="padding: 1em 0 0;">');

            $this->add_control(
                    'addons-style-name', [], [
                'type' => 'text',
                'label' => __('Name', SHORTCODE_ADDOONS),
                'placeholder' => __('Shortcode Name', SHORTCODE_ADDOONS),
                'default' => '',
                    ]
            );

            $this->add_responsive_control(
                    'sa_spacer_size', [], [
                'label' => __('Max Width', SHORTCODE_ADDOONS),
                'type' => 'slider',
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                ],
                    ]
            );
            echo _('                </div>
                                    <div class="modal-footer">
                                        <input type="hidden" id="addons-oxi-type" name="addons-oxi-type" value="Spacer">
                                        <input type="hidden" id="shortcode-addons-elements-name" name="shortcode-addons-elements-name" value="Spacer">
                                        <input type="hidden" id="shortcode-addons-elements-template" name="shortcode-addons-elements-template" value="Style_1">
                                        <input type="hidden" id="oxi-addons-data" name="oxi-addons-data" value="">
                                        <input type="hidden" id="oxistyleid" name="oxistyleid" value="">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-success" name="addonsdatasubmit" id="addonsdatasubmit" value="Save">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade" id="oxi-addons-style-export-modal" >
                        <form method="post" id="oxi-addons-style-export-form">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">                    
                                        <h4 class="modal-title">Export Data</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <textarea id="OxiAddImportDatacontent" class="oxi-addons-export-data-code"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-info OxiAddImportDatacontent">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>');
            ?>

        </div>

        <?php
    }

    /**
     * Admin Notice JS file loader
     * @return void
     */
    public function admin_ajax_load() {
        wp_enqueue_script('shortcode-addons-spacer', SA_ADDONS_UPLOAD_URL . '/Spacer/files/admin.js', true, SA_ADDONS_PLUGIN_VERSION);
        wp_localize_script('shortcode-addons-spacer', 'shortcode_addons_editor', array('ajaxurl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('shortcode-addons-editor')));
    }

}
