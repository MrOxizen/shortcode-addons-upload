<?php

namespace SHORTCODE_ADDONS_UPLOAD\Data_table\Templates;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_2
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Templates;

class Style_2 extends Templates
{

    public function public_css()
    {
        wp_enqueue_style('oxi-addons-wrapper-datatable-style-2', SA_ADDONS_UPLOAD_URL . '/Data_table/File/datatables-min.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_style('oxi-addons-wrapper-datatable-style-2', SA_ADDONS_UPLOAD_URL . '/Data_table/File/datatable-style.css', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function default_render($style, $child, $admin)
    {

        echo ' <div class="oxi-addons-wrapper-datatable-style-2">
                <table class="table oxi-addons-datatable-style-2" id="datatables">
                    <thead>
                        <tr>';
        $repeater = [];
        if (array_key_exists('sa_datatable_column_repeater', $style)) :
            foreach ($style['sa_datatable_column_repeater'] as $key => $value) {
                $repeater[$key] = $key;
                foreach ($value as $values) {
                    echo ' <th>' . $this->text_render($values) . '</th>';
                }
            }
        endif;
        if ($admin == 'admin') :
            echo '<th>Manage</th>';
        endif;
        echo '          </tr> 
                    </thead>
                    <tbody>';
        foreach ($child as $v) {
            $val = json_decode(stripcslashes($v['rawdata']), true);
            $val = is_array($val) ? $val : [];
            echo '<tr>';
            foreach ($repeater as $key => $values) {
                $id = 'sa_datatable_modal_' . $key;
                if (array_key_exists($id, $val)) :
                    echo '<td>' . $this->text_render($val[$id]) . '</td>';
                else :
                    echo '<td></td>';
                endif;
            }
            if ($admin == 'admin') :
                echo '  <td>
                                <div class="oxi-addons-admin-absulate-edit datatable_edit_delete">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit datatable_btn " type="button" value="' . $v['id'] . '"><i class="fas fa-edit oxi-icon"></i></button>
                                    <button class="btn btn-danger shortcode-addons-template-item-delete datatable_btn " type="submit" value="' . $v['id'] . '"><i class="fas fa-trash oxi-icon"></i></button>
                                </div>
                            </td>';
            endif;

            echo '</tr>';
        }

        echo '      </tbody>
                 </table>
                 
             </div>';
    }

    public function public_jquery()
    {
        $this->JSHANDLE = 'datatables-min';
        wp_enqueue_script('datatables-min', SA_ADDONS_UPLOAD_URL . '/Data_table/File/datatables-min.js', false, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_css()
    {

        $style = $this->style;
        $icon_weight = $visibility_icon = '';
        $icon_weight .= ($style['sa_datatable_select_icon_type'] == 'regular') ? 'font-weight: 500;' : 'font-weight: 900;';
        $visibility_icon .= ($style['sa_datatable_table_head_asc_desc'] == 'yes') ? 'display: block;' : 'display: none;';


        $css = '.' . $this->WRAPPER . ' .oxi-addons-wrapper-datatable-style-2 .oxi_show_entries_label::before {
            content: "\\' . $this->text_render($this->style['sa_datatable_select_icon'] != '' ? $this->style['sa_datatable_select_icon'] : '') . '" !important;
            ' . $icon_weight . ';
            bottom: ' . (($style['sa_datatable_select_icon_height-size'] / 2) /4) . 'px !important;
            } 
        .' . $this->WRAPPER . ' .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting:after,
        .' . $this->WRAPPER . '   .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_asc:after,
                .' . $this->WRAPPER . '   .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_desc:after,
                .' . $this->WRAPPER . '    .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_desc disabled:after{
            content: "\\' . $this->text_render($this->style['sa_datatable_ascending_icon'] != '' ? $this->style['sa_datatable_ascending_icon'] : '') . '";
          ' . $visibility_icon . '
        }
        .' . $this->WRAPPER . ' .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting:before,
        .' . $this->WRAPPER . '  .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_asc:before,
        .' . $this->WRAPPER . '  .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_desc:before,
        .' . $this->WRAPPER . '    .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_asc disabled:before, 
        .' . $this->WRAPPER . '    .oxi-addons-wrapper-datatable-style-2 table.dataTable .oxi_datatable_thead .sorting_desc disabled:before{
            content: "\\' . $this->text_render($this->style['sa_datatable_desc_icon'] != '' ? $this->style['sa_datatable_desc_icon'] : '') . '";
          ' . $visibility_icon . '
        }';
        return $css;
    }

    public function inline_public_jquery()
    {
        $style = $this->style;
        $jquery = '';
        $jquery .= 'jQuery(".' . $this->WRAPPER . ' .oxi-addons-datatable-style-2").DataTable({
            responsive: true, 
            dom: "lBfrtip", 
            buttons: [';
        if ($style['sa_datatable_export_pdf'] == 'yes') {
            $jquery .= '"pdf",';
        }
        if ($style['sa_datatable_export_excel'] == 'yes') {
            $jquery .= '"excel",';
        }
        if ($style['sa_datatable_export_copy'] == 'yes') {
            $jquery .= '"copy",';
        }
        if ($style['sa_datatable_export_print'] == 'yes') {
            $jquery .= '"print",';
        }
        if ($style['sa_datatable_export_csv'] == 'yes') {
            $jquery .= '"csv",';
        }
        $jquery .= ' ],  ';
        if ($style['sa_datatable_show_entries_item'] == '5') {
            $jquery .= 'pageLength : 5,';
        } elseif ($style['sa_datatable_show_entries_item'] == '10') {
            $jquery .= 'pageLength : 10,';
        } elseif ($style['sa_datatable_show_entries_item'] == '20') {
            $jquery .= 'pageLength : 20,';
        } elseif ($style['sa_datatable_show_entries_item'] == '30') {
            $jquery .= 'pageLength : 30,';
        } elseif ($style['sa_datatable_show_entries_item'] == '50') {
            $jquery .= 'pageLength : 50,';
        } elseif ($style['sa_datatable_show_entries_item'] == '80') {
            $jquery .= 'pageLength : 80,';
        } elseif ($style['sa_datatable_show_entries_item'] == '100') {
            $jquery .= 'pageLength : 100,';
        }
        $jquery .= '  
                lengthMenu: [5, 10, 20, 30, 50, 80, 100], ';
        if ($style['sa_datatable_show_entries_switter'] == 'yes') {
            $jquery .= '"lengthChange": true,';
        } else {
            $jquery .= '"lengthChange": false,';
        }
        if ($style['sa_datatable_search_box_switter'] == 'yes') {
            $jquery .= '"bFilter": true,';
        } else {
            $jquery .= '"bFilter": false,';
        }
        if ($style['sa_datatable_info_show_entries_switter'] == 'yes') {
            $jquery .= '"bInfo": true,';
        } else {
            $jquery .= '"bInfo": false,';
        }
        if ($style['sa_datatable_previous_next_switter'] == 'yes') {
            $jquery .= '"bPaginate": true, ';
        } else {
            $jquery .= '"bPaginate": false, ';
        }
        $jquery .= '});';

        $jquery .= 'jQuery(".oxi-addons-wrapper-datatable-style-2 .dataTables_length").addClass("oxi_datatable_length");
        jQuery(".oxi-addons-wrapper-datatable-style-2 .dataTables_length > label").addClass("oxi_show_entries_label");
        jQuery(".oxi-addons-wrapper-datatable-style-2 .oxi_datatable_length  select").addClass("oxi_datatable_select_box");
        jQuery(".oxi-addons-wrapper-datatable-style-2 .dt-buttons .dt-button").addClass("oxi_export_button");
        jQuery(".oxi-addons-wrapper-datatable-style-2 .dataTables_filter > label ").addClass("oxi_filter_label");
        jQuery(".oxi-addons-wrapper-datatable-style-2 .dataTables_filter input ").addClass("oxi_filter_input");
        jQuery(".oxi-addons-wrapper-datatable-style-2 #datatables_info").addClass("oxi_datatable_info"); 
        jQuery(".oxi-addons-datatable-style-2 > thead").addClass("oxi_datatable_thead");
        jQuery(".oxi-addons-datatable-style-2 > thead > tr").addClass("oxi_datatable_tr");
        jQuery(".oxi-addons-datatable-style-2 > thead > tr > th").addClass("oxi_datatable_th");
        jQuery(".oxi-addons-datatable-style-2 > tbody").addClass("oxi_datatable_body");';

        return $jquery;
    }

    public function old_render()
    {
        $listdata = $this->child;
        $styledata = $this->dbdata;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        wp_enqueue_style('datatables-min-css', SA_ADDONS_UPLOAD_URL . '/Data_table/File/datatables-min.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_style('datatable-style', SA_ADDONS_UPLOAD_URL . '/Data_table/File/datatable-style.css', false, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('datatables-min-js', SA_ADDONS_UPLOAD_URL . '/Data_table/File/datatables-min.js', false, SA_ADDONS_PLUGIN_VERSION);

        $css = '';
        $jquery = $icon_weight = '';
        if ($styledata[463] == 'regular') {
            $icon_weight = 'font-weight: 500;';
        } else {
            $icon_weight = 'font-weight: 900;';
        }
        echo '<div class="oxi-addons-container">
          <div class="oxi-addons-row">
        <div class="oxi-addons-wrapper-' . $oxiid . '">
            <table class="table oxi-addons-datatable-' . $oxiid . '" id="datatables">
                <thead>
                    <tr>';
        $tablehead = explode('{{}}', $stylefiles[2]);
        foreach ($tablehead as $value) {
            echo ' <th>' . OxiAddonsTextConvert($value) . '</th>';
        }
        echo '</tr> 
                </thead>
            <tbody>';
        foreach ($listdata as $value) {
            $listarray = [];
            foreach ($tablehead as $val) {
                $listarray[OxiStringToClassReplacce($val)] = '';
            }
            $listfiles = explode('{{}}', $value['files']);
            foreach ($listfiles as $val) {
                if ($val != '' && $val != '{{}}') {
                    $tdvalue = explode('{{||}}', $val);
                    $listarray[$tdvalue[0]] = $tdvalue[1];
                }
            }
            echo '<tr>';
            foreach ($tablehead as $val) {
                if ($listarray[OxiStringToClassReplacce($val)] != '') {
                    echo '<td>' . OxiAddonsTextConvert($listarray[OxiStringToClassReplacce($val)]) . '</td>';
                } else {
                    echo '<td></td>';
                }
            }

            echo '</tr>';
        }
        echo '</tbody>
            </table>
        </div>
    </div></div>';

        $jquery .= '
        jQuery(".oxi-addons-datatable-' . $oxiid . '").DataTable({
            responsive: true, 
            dom: "lBfrtip",
             buttons: [';

        if ($styledata[233] == 'true') {
            $jquery .= '"pdf",';
        }
        if ($styledata[235] == 'true') {
            $jquery .= '"excel",';
        }
        if ($styledata[237] == 'true') {
            $jquery .= '"copy",';
        }
        if ($styledata[239] == 'true') {
            $jquery .= '"print",';
        }
        if ($styledata[241] == 'true') {
            $jquery .= '"csv",';
        }

        $jquery .= ' ],  ';
        if ($styledata[537] == '5') {
            $jquery .= 'pageLength : 5,';
        } elseif ($styledata[537] == '10') {
            $jquery .= 'pageLength : 10,';
        } elseif ($styledata[537] == '20') {
            $jquery .= 'pageLength : 20,';
        } elseif ($styledata[537] == '30') {
            $jquery .= 'pageLength : 30,';
        } elseif ($styledata[537] == '50') {
            $jquery .= 'pageLength : 50,';
        } elseif ($styledata[537] == '80') {
            $jquery .= 'pageLength : 80,';
        } elseif ($styledata[537] == '100') {
            $jquery .= 'pageLength : 100,';
        }
        $jquery .= '  
            lengthMenu: [5, 10, 20, 30, 50, 80, 100], ';
        if ($styledata[359] == 'true') {
            $jquery .= '"lengthChange": true,';
        } else {
            $jquery .= '"lengthChange": true,';
        }
        if ($styledata[285] == 'true') {
            $jquery .= '"bFilter": true,';
        } else {
            $jquery .= '"bFilter": false,';
        }
        if ($styledata[359] == 'true') {
            $jquery .= '"bInfo": true,';
        } else {
            $jquery .= '"bInfo": false,';
        }
        if ($styledata[389] == 'true') {
            $jquery .= '"bPaginate": true, ';
        } else {
            $jquery .= '"bPaginate": false, ';
        }
        $jquery .= '});';


        $jquery .= '
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' .dataTables_length").addClass("oxi_datatable_length");
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' .dataTables_length > label").addClass("oxi_show_entries_label");
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' .oxi_datatable_length  select").addClass("oxi_datatable_select_box");
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' .dt-buttons .dt-button").addClass("oxi_export_button");
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter > label ").addClass("oxi_filter_label");
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter input ").addClass("oxi_filter_input");
        jQuery(".oxi-addons-wrapper-' . $oxiid . ' #datatables_info").addClass("oxi_datatable_info"); 
        jQuery(".oxi-addons-datatable-' . $oxiid . ' > thead").addClass("oxi_datatable_thead");
        jQuery(".oxi-addons-datatable-' . $oxiid . ' > thead > tr").addClass("oxi_datatable_tr");
        jQuery(".oxi-addons-datatable-' . $oxiid . ' > thead > tr > th").addClass("oxi_datatable_th");
        jQuery(".oxi-addons-datatable-' . $oxiid . ' > tbody").addClass("oxi_datatable_body"); 

    ';
        $css .= '
    .oxi-addons-wrapper-' . $oxiid . '  .datatable_btn{ 
        padding: 2px 10px !important;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .datatable_btn .oxi-icon{ 
       font-size: 12px;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .datatable_edit_delete{ 
       display: flex; 
       justify-content: center;
    }

    .oxi-addons-wrapper-' . $oxiid . '  .datatable_edit_delete form:first-child { 
       margin-right: 5px;
    }
    .oxi-addons-wrapper-' . $oxiid . '{  
        max-width: 100%;
        margin: 0 auto; 
        overflow: hidden;
        display: flex;
        justify-content:center;  
        ' . OxiAddonsBGImage($styledata, 3) . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 11) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 27) . ';
              ' . OxiAddonsBoxShadowSanitize($styledata, 43) . ';
    }
    .oxi-addons-datatable-' . $oxiid . '{
        border-radius: 50px;  
    }
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_wrapper {
        width: ' . $styledata[7] . 'px !important;
        max-width: 100%;
    }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length > .oxi_show_entries_label{ 
        position: relative;
        font-size: ' . $styledata[165] . 'px;
        ' . OxiAddonsFontSettings($styledata, 171) . ';
        color: ' . $styledata[169] . '; 
        display: flex;
        margin-top: 5px;
        margin-bottom: 5px;
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length{
        position: relative;
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 177) . '; 
    }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length .oxi_datatable_select_box{ 
        width: ' . $styledata[195] . 'px !important;
        height: ' . $styledata[199] . 'px !important;
        font-size: ' . $styledata[203] . 'px;
        ' . OxiAddonsFontSettings($styledata, 171) . ';
        color: ' . $styledata[207] . ';
        background: ' . $styledata[209] . '; 
        border:  ' . $styledata[211] . 'px ' . $styledata[212] . '; 
        border-color: ' . $styledata[215] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 217) . ';   
        overflow: hidden; 
        padding: 0px 5px !important;
        box-shadow: none; 
        background-image: none !important;  
        margin: 0 5px;
        -webkit-appearance: none;
       -moz-appearance: none;
        appearance: none;

    } 
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_show_entries_label::before{ 
        content: "\\' . $styledata[193] . '";
        font-family: "Font Awesome\ 5 Free";   
       ' . $icon_weight . '
        position: absolute;
        bottom: ' . (($styledata[199] / 2) - 5) . 'px;
        right: 69px; 
        font-size: 18px;
        z-index: 999;
        line-height: 1;
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length > .oxi_datatable_select_box:focus {
        outline: none;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .oxi_export_button {
        background: ' . $styledata[249] . ';
        color: ' . $styledata[247] . ';
        display: inline-block;
        ' . OxiAddonsFontSettings($styledata, 257) . ';
        font-size: ' . $styledata[243] . 'px;
        border:  ' . $styledata[251] . 'px ' . $styledata[252] . ';
        vertical-align: middle;
        border-color: ' . $styledata[255] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 263) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 465) . ';
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 481) . '; 
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_export_button:hover{
        background: ' . $styledata[281] . ' !important;
        color: ' . $styledata[279] . '  !important; 
        border-color: ' . $styledata[283] . '  !important; 
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter > .oxi_filter_label{ 
        font-size: ' . $styledata[287] . 'px;
        ' . OxiAddonsFontSettings($styledata, 293) . ';
        color: ' . $styledata[291] . '; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 299) . ';
        margin: 0;
        margin-top: 5px;
        }
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter  .oxi_filter_input{ 
        width: ' . $styledata[315] . 'px !important;
        height: ' . $styledata[319] . 'px !important;
        font-size: ' . $styledata[323] . 'px; 
        color: ' . $styledata[327] . ';
        background: ' . $styledata[329] . '; 
        border:  ' . $styledata[331] . 'px ' . $styledata[332] . '; 
        border-color: ' . $styledata[335] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 337) . '; 
        overflow: hidden; 
        padding: 0px 5px !important;
        ' . OxiAddonsBoxShadowSanitize($styledata, 353) . ';
        background-image: none; 
        -webkit-appearance: none;
        line-height: 0 !important    
        }
    .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_info {  
        font-size: ' . $styledata[361] . 'px; 
        color: ' . $styledata[365] . ' !important; 
        ' . OxiAddonsFontSettings($styledata, 367) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 373) . ';  
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.next,
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
                   font-size: ' . $styledata[391] . 'px;  
        ' . OxiAddonsFontSettings($styledata, 397) . ';
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 403) . ';  
        border: none;
        }
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
        color: ' . $styledata[395] . ' !important; 
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_wrapper .dataTables_paginate .paginate_button{
        color: ' . $styledata[395] . ' !important; 
    }  
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover,
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover {
        background: ' . $styledata[531] . ' !important;
        color: ' . $styledata[529] . ' !important; 
            border:none;
    }
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
        background: none !important;
        color: ' . $styledata[395] . ' !important; 
    } 

    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_paginate span .paginate_button{  
        background: ' . $styledata[425] . ' !important;
        color: ' . $styledata[423] . ' !important;
        display: inline-block;
        ' . OxiAddonsFontSettings($styledata, 433) . ' !important;
        font-size: ' . $styledata[419] . 'px !important;
        border:  ' . $styledata[427] . 'px ' . $styledata[428] . ' !important; 
        border-color: ' . $styledata[431] . ';
        border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 439) . ' !important;
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 497) . ' !important;
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 513) . '  !important;  
    } 
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_wrapper .dataTables_paginate span .paginate_button:hover {
        background: ' . $styledata[459] . ' !important;
        color: ' . $styledata[457] . ' !important; 
        border-color: ' . $styledata[461] . ';
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_paginate span .paginate_button.current{   
        background: ' . $styledata[455] . ' !important;
        color: ' . $styledata[533] . ' !important;
    } 
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_paginate span .paginate_button.current:hover{   
        background: ' . $styledata[455] . ' !important;
        color: ' . $styledata[533] . ' !important;
    }   
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th{
           background: ' . $styledata[55] . ' !important; 
        color: ' . $styledata[53] . ' !important;  
        ' . OxiAddonsFontSettings($styledata, 57) . ' ;
        font-size: ' . $styledata[49] . 'px !important; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 63) . ' !important; 
        text-transform: capitalize;
        position: relative;  
         min-width: 35px !important;
    } 
     .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting:after{
         opacity: 0.3;
     }';
        $visibility_icon = '';
        if ($styledata[565] == 'true') {
            $visibility_icon = "display: block;";
        } else {
            $visibility_icon = "display: none;";
        }
        $css .= '  .oxi-addons-wrapper-' . $oxiid . ' .table.dataTable .oxi_datatable_thead .sorting:after, 
   .oxi-addons-wrapper-' . $oxiid . '  table.dataTable .oxi_datatable_thead .sorting_asc:after,
   .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting_desc:after,  
   .oxi-addons-wrapper-' . $oxiid . '  table.dataTable .oxi_datatable_thead .sorting_desc disabled:after{
        content: "\\' . $styledata[79] . '"; 
        font-family: "Font Awesome\ 5 Free";   
        font-weight: 700;
        color: ' . $styledata[85] . ' !important;  
        font-size: ' . $styledata[81] . 'px !important; 
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 89) . ' !important; 
        position: absolute; 
       ' . $visibility_icon . '
        right: 15px; 
         top: ' . ((($styledata[49] + $styledata[63] + $styledata[67]) / 2) - ($styledata[107] / 2)) . 'px;   

    }
     .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting:before{
         opacity: 0.3;
     }
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting:before, 
   .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting_asc:before,
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting_desc:before, 
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting_asc disabled:before,
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting_desc disabled:before {
        content: "\\' . $styledata[105] . '"; 
        font-family: "Font Awesome\ 5 Free";   
        font-weight: 700;
        color: ' . $styledata[111] . ' !important;  
        font-size: ' . $styledata[107] . 'px !important; 
        margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 115) . ' !important; 
        position: absolute; 
         ' . $visibility_icon . '
        right: 7px; 
         top: ' . ((($styledata[49] + $styledata[63] + $styledata[67]) / 2) - ($styledata[107] / 2)) . 'px;   
    }
  
     
    ';

        $border_thead_left = $border_thead_right = $border_thead_top = $border_thead_bottom = '';
        if ($styledata[539] == 0) {
            $border_thead_left = "border-left-width: $styledata[541]px !important;";
        }
        if ($styledata[541] == 0) {
            $border_thead_right = "border-right-width: $styledata[539]px !important;";
        }
        if ($styledata[543] == 0) {
            $border_thead_top = "border-top-width: $styledata[545]px !important;";
        }
        if ($styledata[545] == 0) {
            $border_thead_bottom = "border-bottom-width: $styledata[543]px !important;";
        }

        $border_tbody_left = $border_tbody_right = $border_tbody_top = $border_tbody_bottom = '';
        if ($styledata[550] == 0) {
            $border_tbody_left = "border-left-width: $styledata[552]px !important;";
        }
        if ($styledata[552] == 0) {
            $border_tbody_right = "border-right-width: $styledata[550]px !important;";
        }
        if ($styledata[554] == 0) {
            $border_tbody_top = "border-top-width: $styledata[556]px !important;";
        }
        if ($styledata[556] == 0) {
            $border_tbody_bottom = "border-bottom-width: $styledata[554]px !important;";
        }
        $css .= '
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .sorting_asc,
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .sorting,
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .sorting_desc{
        border: ' . $styledata[547] . ' ' . $styledata[548] . ' !important; 
        border-left-width: ' . $styledata[539] . 'px !important;
        border-right-width: ' . $styledata[541] . 'px !important;
        border-top-width: ' . $styledata[543] . 'px !important;
        border-bottom-width: ' . $styledata[545] . 'px !important; 
    }
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th:first-child{  
         ' . $border_thead_left . ' 
         width: 70px !important;
     }
     .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th:last-child{  
         ' . $border_thead_right . ' 
     }
     .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_tr:first-child .oxi_datatable_th{  
         ' . $border_thead_top . ' 
     }
     .oxi-addons-wrapper-' . $oxiid . '  table.dataTable .oxi_datatable_thead .oxi_datatable_tr:last-child .oxi_datatable_th{  
         ' . $border_thead_bottom . ' 
     } 
    .oxi-addons-wrapper-' . $oxiid . ' .table.dataTable.no-footer{ 
        border:none; 
    }
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body > tr > td{ 
        ' . OxiAddonsFontSettings($styledata, 137) . ';
        font-size: ' . $styledata[131] . 'px !important; 
        padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 143) . '  !important;
        border: ' . $styledata[558] . ' ' . $styledata[559] . ' !important;
         border-left-width: ' . $styledata[550] . 'px !important;
         border-right-width: ' . $styledata[552] . 'px !important;
         border-top-width: ' . $styledata[554] . 'px !important;
         border-bottom-width: ' . $styledata[556] . 'px !important;  
    }
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  td:first-child{  
        ' . $border_tbody_left . ' 
    }
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  td:last-child{  
        ' . $border_tbody_right . ' 
    }
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body tr:first-child  td{  
        ' . $border_tbody_top . ' 
    }
    .oxi-addons-wrapper-' . $oxiid . '  table.dataTable .oxi_datatable_body tr:last-child  td{  
        ' . $border_tbody_bottom . ' 
    } 
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .even td{ 
       color: ' . $styledata[561] . ' !important;
          background: ' . $styledata[159] . ' !important; 
    }  
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .odd td{ 
             color: ' . $styledata[563] . ' !important;
             background: ' . $styledata[161] . ' !important;
    } 
    .oxi-addons-wrapper-' . $oxiid . ' table.dataTable{ 
        width: 99.5% !important; 
    }
    .oxi-addons-wrapper-' . $oxiid . ' .dataTables_wrapper{ 
        width: 100%; 
    }
    
        @media only screen and (min-width : 669px) and (max-width : 993px){ 
                
                .oxi-addons-wrapper-' . $oxiid . '{ 
                    width: ' . $styledata[8] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 12) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 28) . '; 
                }
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length > .oxi_show_entries_label{  
                        font-size: ' . $styledata[166] . 'px; 
                } 
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length{ 
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 178) . '; 
                }
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length .oxi_datatable_select_box{   
                    width: ' . $styledata[196] . 'px !important;
                    height: ' . $styledata[200] . 'px !important;
                    font-size: ' . $styledata[204] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 218) . ';    
                }
                
                .oxi-addons-wrapper-' . $oxiid . ' .oxi_export_button { 
                    font-size: ' . $styledata[244] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 264) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 466) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 482) . '; 
                }  
                .oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter > .oxi_filter_label{ 
                    font-size: ' . $styledata[288] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 300) . ';
                    }
                .oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter  .oxi_filter_input{ 
                    width: ' . $styledata[316] . 'px !important;
                    height: ' . $styledata[320] . 'px !important;
                    font-size: ' . $styledata[324] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 338) . ';  
                    }
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_info {  
                    font-size: ' . $styledata[362] . 'px;  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 374) . ';  
                }
              .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.next,
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
                    font-size: ' . $styledata[392] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 404) . ';  
                } 
                .oxi-addons-wrapper-' . $oxiid . '  .dataTables_paginate span .paginate_button{  
                    font-size: ' . $styledata[420] . 'px !important; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 440) . ' !important;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 498) . ' !important;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 514) . '  !important;  
                }  
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th{ 
                    font-size: ' . $styledata[50] . 'px !important; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 64) . ' !important;  
                } 


                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(1){  
                    ' . $border_tbody_left . ' 
                }
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(2){  
                    ' . $border_tbody_right . ' 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(3){  
                    ' . $border_tbody_right . ' 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(4){  
                    ' . $border_tbody_right . ' 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(5){  
                    ' . $border_tbody_right . ' 
                } 

                .oxi-addons-wrapper-' . $oxiid . ' .table.dataTable .oxi_datatable_thead .sorting:after, 
                table.dataTable .oxi_datatable_thead .sorting_asc:after, table.dataTable .oxi_datatable_thead .sorting_desc:after, 
                table.dataTable .oxi_datatable_thead .sorting_asc_disabled:after, 
                table.dataTable .oxi_datatable_thead .sorting_desc_disabled:after{
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 90) . ' !important; 
                    top: ' . ((($styledata[50] + $styledata[64] + $styledata[68]) / 2) - ($styledata[108] / 2)) . 'px;  
                }
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting:before, 
                table.dataTable .oxi_datatable_thead .sorting_asc:before,
                table.dataTable .oxi_datatable_thead .sorting_desc:before, 
                table.dataTable .oxi_datatable_thead .sorting_asc_disabled:before,
                table.dataTable .oxi_datatable_thead .sorting_desc_disabled:before {
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 116) . ' !important; 
                      top: ' . ((($styledata[50] + $styledata[64] + $styledata[68]) / 2) - ($styledata[108] / 2)) . 'px;   
                }   
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body > tr > td{ 
                    font-size: ' . $styledata[131] . 'px !important; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 144) . '  !important; 
                }

            .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th:first-child{  
                ' . $border_thead_left . ' 
                width: 120px !important;
            }
               
        }
        @media only screen and (max-width : 668px){ 

            .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(1){  
                    ' . $border_tbody_left . ' 
                }
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(2){  
                    ' . $border_tbody_right . ' 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(3){  
                    ' . $border_tbody_right . ' 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(4){  
                    ' . $border_tbody_right . ' 
                } 
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body  tr td:nth-child(5){  
                    ' . $border_tbody_right . ' 
                } 

             .oxi-addons-wrapper-' . $oxiid . '{ 
                    width: ' . $styledata[9] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 13) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 29) . '; 
                }
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length > .oxi_show_entries_label{  
                        font-size: ' . $styledata[167] . 'px; 
                } 
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length{ 
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 179) . '; 
                }
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_length .oxi_datatable_select_box{   
                    width: 100% !important;
                    height: ' . $styledata[201] . 'px !important;
                    font-size: ' . $styledata[205] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 219) . ';    
                }
                
                .oxi-addons-wrapper-' . $oxiid . ' .oxi_export_button { 
                    font-size: ' . $styledata[245] . 'px; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 265) . ';
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 467) . ';
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 483) . '; 
                }  
                .oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter > .oxi_filter_label{ 
                    font-size: ' . $styledata[289] . 'px; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 301) . ';
                    }
                .oxi-addons-wrapper-' . $oxiid . ' .dataTables_filter  .oxi_filter_input{ 
                    width: ' . $styledata[317] . 'px !important;
                    height: ' . $styledata[321] . 'px !important;
                    font-size: ' . $styledata[325] . 'px;  
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 339) . ';  
                    }
                .oxi-addons-wrapper-' . $oxiid . '  .oxi_datatable_info {  
                    font-size: ' . $styledata[363] . 'px;  
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 375) . ';  
                }
                .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.next,
    .oxi-addons-wrapper-' . $oxiid . '  .dataTables_wrapper .dataTables_paginate .paginate_button.previous {
                    font-size: ' . $styledata[393] . 'px;   
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 405) . ';  
                } 
                .oxi-addons-wrapper-' . $oxiid . '  .dataTables_paginate span .paginate_button{  
                    font-size: ' . $styledata[421] . 'px !important; 
                    border-radius: ' . OxiAddonsPaddingMarginSanitize($styledata, 441) . ' !important;
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 499) . ' !important;
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 515) . '  !important;  
                }  
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th{ 
                    font-size: ' . $styledata[51] . 'px !important; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 65) . ' !important;  
                } 
                .oxi-addons-wrapper-' . $oxiid . ' .table.dataTable .oxi_datatable_thead .sorting:after, 
                table.dataTable .oxi_datatable_thead .sorting_asc:after, table.dataTable .oxi_datatable_thead .sorting_desc:after, 
                table.dataTable .oxi_datatable_thead .sorting_asc_disabled:after, 
                table.dataTable .oxi_datatable_thead .sorting_desc_disabled:after{
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 91) . ' !important; 
                           top: ' . ((($styledata[51] + $styledata[65] + $styledata[69]) / 2) - ($styledata[109] / 2)) . 'px;  
                }
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .sorting:before, 
                table.dataTable .oxi_datatable_thead .sorting_asc:before,
                table.dataTable .oxi_datatable_thead .sorting_desc:before, 
                table.dataTable .oxi_datatable_thead .sorting_asc_disabled:before,
                table.dataTable .oxi_datatable_thead .sorting_desc_disabled:before {
                    margin: ' . OxiAddonsPaddingMarginSanitize($styledata, 117) . ' !important; 
                       top: ' . ((($styledata[51] + $styledata[65] + $styledata[69]) / 2) - ($styledata[109] / 2)) . 'px;   
                }   
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_body > tr > td{ 
                    font-size: ' . $styledata[132] . 'px !important; 
                    padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 145) . '  !important; 
                }
                .oxi-addons-wrapper-' . $oxiid . ' table.dataTable .oxi_datatable_thead .oxi_datatable_th:first-child{  
                ' . $border_thead_left . ' 
                width: 180px !important;
            }
        }';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('datatables-min-js', $jquery);
    }
}
