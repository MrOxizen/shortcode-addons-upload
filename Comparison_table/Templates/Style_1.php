<?php

namespace SHORTCODE_ADDONS_UPLOAD\Comparison_table\Templates;

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
//        echo '<pre>';
//        print_r($child);
//        echo '</pre>';
        ?>
        <article class="oxi-ct-wrapper">

            <ul>
                <?php
                foreach ($child as $key => $v) {
                    $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);



                    if (array_key_exists('sa_comparison_table_ribbon_on_off', $value) && $value['sa_comparison_table_ribbon_on_off'] == 'yes') {
                        echo '<li class="oxi-ct-heading oxi-table-' . $key . ' oxi-ct-ribbons-yes oxi-ct-ribbons-h-' . $value['sa_comparison_table_feature_ribbon_position'] . '">';
                        if ($value['sa_comparison_table_feature_ribbon_position'] == 'top') {
                            ?>
                            <div class="oxi-ct-ribbons-wrapper-top">
                                <span class="oxi-ct-ribbons-inner-top">
                                    <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                                </span>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="oxi-ct-ribbons-wrapper">
                                <span class="oxi-ct-ribbons-inner">
                                    <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                                </span>
                            </div>

                            <?php
                        }
                    } else {
                        echo '<li class="oxi-ct-heading oxi-table-' . $key . '">';
                    }
                    echo '<div class="oxi-ct-heading-inner">';
                    echo $this->text_render($value['sa_comparison_table_feature_modal_text']);
                    echo '</div>';

                    echo '</li>';
                }
                ?>
            </ul>

            <table>
                <thead>
                    <tr>
                        <th class="hide"></th>
                        <?php
                        foreach ($child as $key => $v) {

                            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

                            if ($value['sa_comparison_table_ribbon_on_off'] == 'yes') {
                                echo '<th class="oxi-ct-heading ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . '  oxi-ct-ribbons-yes oxi-ct-ribbons-h-' . $value['sa_comparison_table_feature_ribbon_position'] . ' oxi-table-' . $key . ' ">';
                                if ($value['sa_comparison_table_feature_ribbon_position'] == 'top') {
                                    ?>
                            <div class="oxi-ct-ribbons-wrapper-top">
                                <span class="oxi-ct-ribbons-inner-top">
                                    <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                                </span>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="oxi-ct-ribbons-wrapper">
                                <span class="oxi-ct-ribbons-inner">
                                    <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                                </span>
                            </div>
                            <?php
                        }
                    } else {
                        echo '<th class="oxi-ct-heading ' . ($admin == "admin" ? 'oxi-addons-admin-edit-list' : '') . '  oxi-table-' . $key . '">';
                    }
                    echo $this->text_render($value['sa_comparison_table_feature_modal_text']);
                    if ($admin == 'admin') :
                        echo '  <div class="oxi-addons-admin-absulote">
                                <div class="oxi-addons-admin-absulate-edit">
                                    <button class="btn btn-primary shortcode-addons-template-item-edit" type="button" value="' . $v['id'] . '">Edit</button>
                                </div>
                                <div class="oxi-addons-admin-absulate-delete">
                                <button class="btn btn-danger shortcode-addons-template-item-delete" type="submit" value="' . $v['id'] . '">Delete</button>
                                </div>
                            </div>';
                    endif;
                    echo '</th>';
                }
                ?>
                </tr>
                </thead>
                <tbody>
                    <?php
                    echo '<tr>';
                    echo '<td class="hide"></td>';
                    foreach ($child as $key => $v) {
                        $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

                        echo '<td class="oxi-ct-plan oxi-table-' . $k . '"><div class="oxi-ct-price-wrapper">';

                        if ($value['sa_comparison_table_offer_dis_on_off'] == 'yes') {
                            echo '<span class="oxi-ct-original-price">';
                            echo $this->text_render($value['sa_comparison_table_feature_modal_original_price']) ;
                            echo '</span>';
                        }
                        $price_full = $this->text_render($value['sa_comparison_table_feature_modal_price']);
                        $price = explode('.', $price_full);
                        $fractional_price = '';
                        if (count($price) > 1) {
                            $fractional_price = '<span class="oxi-ct-fractional-price">' . $price[1] . '</span>';
                        }
                        echo '<span class="oxi-ct-currency">' . $value['sa_comparison_table_feature_modal_currency'] . '</span>';
                        echo '<span class="oxi-ct-price">' . $price[0] . '</span>';
                        echo $fractional_price;
                        echo '</div>';
                        echo '<span class="oxi-ct-duration">' . $this->text_render($value['sa_comparison_table_feature_modal_duration']) . '</span>';
                        echo '</td>';
                    }
                    echo '</tr>';

                    $all_data = (array_key_exists('sa_comparison_table_feature_data', $style) && is_array($style['sa_comparison_table_feature_data'])) ? $style['sa_comparison_table_feature_data'] : [];


                    $store = [];
                    $count = count($all_data);

                    $i = 1;
                    foreach ($all_data as $key => $value) {
                        $store[$i][0] = $value;
                        $i++;
                    }
                    $i = 1;
                    foreach ($child as $key => $v) {
                        $j = 1;
                        $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
                        $md_rep_data = array_values((array_key_exists('sa_comparison_table_features_modal_data', $value) && is_array($value['sa_comparison_table_features_modal_data'])) ? $value['sa_comparison_table_features_modal_data'] : []);
                        $c = count($md_rep_data);
                        if ($c < $count):
                            for ($a = $count; $a > $c; $a--) {
                                $store[$a][0]['inner_td'][$i] = [];
                            }
                        endif;
                        foreach ($md_rep_data as $k => $data) {

                            $store[$j][0]['inner_td'][$i] = $data;
                            $j++;
                            if ($j > $count):
                                break;
                            endif;
                        }
                        $i++;
                    }

                   
                    foreach ($store as $key => $data) {
                     
                        echo '<tr>';
                        echo '<td  class="oxi-ct-feature">';

                        if ($data[0]['sa_comparison_table_feature_tooltip_text'] !== '' && $style['sa_comparison_table_tooltip_on_off'] == 'yes') {
                          
                            echo '<div class="tooltip">';
                            echo '<span class="oxi-ct-heading-tooltip">';
                            if ($data[0]['sa_comparison_table_feature_text'] != ''):
                                echo $this->text_render($data[0]['sa_comparison_table_feature_text']);
                            endif;
                            echo '</span>';
                            ?>
                        <span class="tooltiptext">
                            <?php
                            echo $this->text_render($data[0]['sa_comparison_table_feature_tooltip_text']);
                            ?>
                        </span>
                        </div>
                        <?php
                    } else {
                        echo $this->text_render($data[0]['sa_comparison_table_feature_text']);
                    }
                    echo '</td>';
                    
                    foreach ($data[0]['inner_td'] as $key => $v) {

//                        echo '<pre>';
//                        print_r($v);
//                        echo '</pre>';

//
                    
//                            
                            echo '<td class="oxi-ct-txt oxi-table-' . $key . '">';
//                                if (count($settings['feature_items_' . $j]) >= $x) {
                            if ($v['sa_comparison_table_feature_tooltip_type'] !== 'text') {
                                echo '<i class="' . $v['sa_comparison_table_feature_tooltip_type'] . '"></i>';
                            } else {
                                echo $this->text_render($v['sa_comparison_table_feature_feature_text']);
                            }
//                               
                            echo '</td>';
                     
                    }
                    echo '</tr>';
                }
                echo '<td></td>';
                foreach ($child as $key => $v) {
                    $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);

                    if ($value['sa_comparison_table_feature_button_link-url']) {
                        $btn_link = $this->url_render('sa_comparison_table_feature_button_link', $value);
                    }
                    echo '<td class="oxi-table-' . $key . '">';
                    if ($value['sa_comparison_table_feature_button_text'] !== '') {
                        echo '<a ' . $btn_link . '>' . $value['sa_comparison_table_feature_button_text'] . '</a>';
                    }
                    echo '</td>';
                }
                ?>
                </tbody>
            </table>
        </article>


        <?php
    }

}
