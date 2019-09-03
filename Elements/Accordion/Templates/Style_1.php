<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Accordion\Templates;

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

class Style_1 extends Templates {

    public function default_render($style, $child, $admin) {

        foreach ($child as $v) {
            $value = json_decode($v['rawdata'], true);
            echo '  <div class="oxi-addons-AC-style-1 oxi-addons-admin-edit-list">
                        <div class="oxi-addons-AC-style-1-heading active" ref="#oxi-addons-AC-style-1-heading-id-25">
                            <div class="span-active"><i class="fas fa-arrow-down oxi-icons"></i></div>
                            <div class="span-deactive"><i class="fas fa-arrow-right oxi-icons"></i></div>
                            <div class="heading-data">' . $value['sa_el_text'] . '</div>
                        </div>
                        <div class="oxi-addons-ac-C-9" id="oxi-addons-AC-style-1-heading-id-25" style="display: block;">
                            <div class="oxi-addons-ac-C-9-b">
                               ' . $value['sa_el_content'] . '
                            </div>
                        </div> ';
            if ($admin == 'admin'):
                echo '  <div class="oxi-addons-admin-absulote">
                            <div class="oxi-addons-admin-absulate-edit">
                                <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                            </div>
                            <div class="oxi-addons-admin-absulate-delete">
                               <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                             </div>
                        </div>';
            endif;
            echo ' </div>';
        }
    }

}

new Style_1();
