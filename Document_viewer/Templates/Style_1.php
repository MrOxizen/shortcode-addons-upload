<?php

namespace SHORTCODE_ADDONS_UPLOAD\Document_viewer\Templates;

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

class Style_1 extends Templates
{

    public function default_render($style, $child, $admin)
    {

        $datas = (array_key_exists('sa_document_viewer_repeater', $style) && is_array($style['sa_document_viewer_repeater']) ? $style['sa_document_viewer_repeater'] : []);
        foreach ($datas as $key => $value) {
            $final_url =  ''; 
            $final_url = ($this->file_render('sa_document_viewer_link', $value) != '') ? '//docs.google.com/viewer?embedded=true&amp;url=' . esc_url($this->media_render('sa_document_viewer_link', $value)) : false;

            echo '<div class="oxi_addons__document_viewer_content_style_1 ' . $this->column_render('sa_addons_document_viewer_column', $style) . '" >
                    <div class="oxi_addons__document_viewer_main">';
            if ($final_url) {
                echo '<div class="oxi_addons__document_viewer">
                                <iframe src="' . esc_url($final_url) . '" class="oxi_addons__document"></iframe>
                              </div>';
            } else {
                echo '<div class="oxi_addons__document_viewer"><div class="oxi_addons__document_warning">
                                <p>Please enter correct URL of your document</p>
                              </div></div>';
            }
            echo '</div></div>';
        }
    }
}
