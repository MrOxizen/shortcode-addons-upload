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
     
                          

//        if ('yes' == $settings['allowfullscreen']) {
//            $this->add_render_attribute('iframe', 'allowfullscreen');
//        } else {
//            $this->add_render_attribute('iframe', 'donotallowfullscreen');
//        }
        ?>
        <article class="sa-el-ct-wrapper">
            <?php
            foreach ($child as $key => $v) {
                $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
//                echo '<pre>';
//                print_r($value);
//                echo '</pre>';
                 

                if (array_key_exists('sa_comparison_table_ribbon_on_off', $value) && $value['sa_comparison_table_ribbon_on_off'] == 'yes') {
                    echo '<li class="sa-el-ct-heading sa-el-table-' . $key . ' sa-el-ct-ribbons-yes sa-el-ct-ribbons-h-' . $value['sa_comparison_table_feature_ribbon_position'] . '">';
                    if ($value['sa_comparison_table_feature_ribbon_position'] == 'top') {
//                            
                        ?>
                        <div class="sa-el-ct-ribbons-wrapper-top">
                            <span class="sa-el-ct-ribbons-inner-top">
                                <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                            </span>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="sa-el-ct-ribbons-wrapper">
                            <span class="sa-el-ct-ribbons-inner">
                                <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                            </span>
                        </div>

                        <?php
                    }
                } else {
                    echo '<li class="sa-el-ct-heading sa-el-table-' . $i . '">';
                }
                echo '<div class="sa-el-ct-heading-inner">';
                echo $this->text_render($value['sa_comparison_table_feature_modal_text']);
                echo '</div>';
                echo '</li>';
                
            }
           
            ?>
            <ul>
                <table>
                    <thead>
                        <tr>
                            <th class="hide"></th>
                            <?php
                               
                            foreach ($child as $key => $v) {
                                $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
                             

                                if ($value['sa_comparison_table_ribbon_on_off'] == 'yes') {
                                    echo '<th class="sa-el-ct-heading sa-el-ct-ribbons-yes sa-el-ct-ribbons-h-' . $value['sa_comparison_table_feature_ribbon_position'] . ' sa-el-table-' . $key . ' ">';
                                    if ($value['sa_comparison_table_feature_ribbon_position'] == 'top') {
                                        ?>
                                <div class="sa-el-ct-ribbons-wrapper-top">
                                    <span class="sa-el-ct-ribbons-inner-top">
                                        <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']) ?>
                                    </span>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="sa-el-ct-ribbons-wrapper">
                                    <span class="sa-el-ct-ribbons-inner">
                                        <?php echo $this->text_render($value['sa_comparison_table_feature_ribbon_text']); ?>
                                    </span>
                                </div>

                                <?php
                            }
                        } else {
                            echo '<th class="sa-el-ct-heading sa-el-table-' . $key . '">';
                        }
                        echo $this->text_render($value['sa_comparison_table_feature_modal_text']);
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

                            echo '<td class="sa-el-ct-plan sa-el-table-' . $k . '"><div class="sa-el-ct-price-wrapper">';

                            if ($value['sa_comparison_table_offer_dis_on_off'] == 'yes') {
                                echo '<span class="sa-el-ct-original-price">';
                                echo $this->text_render($value['sa_comparison_table_feature_modal_original_price']) . $this->text_render($value['sa_comparison_table_feature_modal_original_price']);
                                echo '</span>';
                            }
                            $price_full = $this->text_render($value['sa_comparison_table_feature_modal_price']);
                            $price = explode('.', $price_full);
                            $fractional_price = '';
                            if (count($price) > 1) {
                                $fractional_price = '<span class="sa-el-ct-fractional-price">' . $price[1] . '</span>';
                            }
                            echo '<span class="sa-el-ct-currency">' . $value['sa_comparison_table_feature_modal_currency'] . '</span>';
                            echo '<span class="sa-el-ct-price">' . $price[0] . '</span>';
                            echo $fractional_price;
                            echo '</div>';
                            echo '<span class="sa-el-ct-duration">' . $this->text_render($value['sa_comparison_table_feature_modal_duration']) . '</span>';
                            echo '</td>';
                        }
                        echo '</tr>';

                        $all_data = (array_key_exists('sa_comparison_table_feature_data', $style) && is_array($style['sa_comparison_table_feature_data'])) ? $style['sa_comparison_table_feature_data'] : [];

                        foreach ($all_data as $key => $data) {
                            echo '<tr>';
                            echo '<td  class="sa-el-ct-feature">';

                            if ($data['sa_comparison_table_feature_tooltip_text'] !== '' && $data['sa_comparison_table_tooltip_on_off'] == 'yes') {

                                echo '<div class="tooltip">';
                                echo '<span class="sa-el-ct-heading-tooltip">';
                                if ($data['sa_comparison_table_feature_text'] != ''):

                                    echo $this->text_render($data['sa_comparison_table_feature_text']);
                                endif;
                                echo '</span>';
                                ?>
                            <span class="tooltiptext">
                                <?php
                                echo $this->text_render($data['sa_comparison_table_feature_tooltip_text']);
                                ?>
                            </span>
                            </div>
                            <?php
                        } else {
                            echo $this->text_render($data['sa_comparison_table_feature_text']);
                        }
                        echo '</td>';

                        foreach ($child as $key => $v) {
                            $value = ($v['rawdata'] != '' ? json_decode(stripcslashes($v['rawdata']), true) : []);
                           
                            $md_rep_data = (array_key_exists('sa_comparison_table_features_modal_data', $style) && is_array($style['sa_comparison_table_features_modal_data'])) ? $style['sa_comparison_table_features_modal_data'] : [];

///////////////BAKII ASE
//                            foreach ($md_rep_data as $k => $data) {
//                                echo '<td class="sa-el-ct-txt sa-el-table-' . $k . '">';
//                                if (count($settings['feature_items_' . $j]) >= $x) {
//                                    if ($settings['feature_items_' . $j][$x - 1]['table_content_type'] !== 'text') {
//                                        echo '<i class="' . $settings['feature_items_' . $j][$x - 1]['table_content_type'] . '"></i>';
//                                    } else {
//                                        echo $settings['feature_items_' . $j][$x - 1]['feature_text'];
//                                    }
//                                } else {
//                                    echo '';
//                                }
//                                echo '</td>';
//                            }
                        }
                        echo '</tr>';
                    }
                    echo '<td></td>';
                    for ($j = 1; $j <= $settings['table_count']; $j ++) {
                        $this->add_render_attribute('button_' . $j . '-link-attributes', 'href', $settings['item_link_' . $j]['url']);
                        $this->add_render_attribute('button_' . $j . '-link-attributes', 'class', 'sa-el-ct-btn');

                        if ($settings['item_link_' . $j]['is_external'] == 'on') {
                            $this->add_render_attribute('button_' . $j . '-link-attributes', 'target', '_blank');
                        }
                        if ($settings['item_link_' . $j]['nofollow']) {
                            $this->add_render_attribute('button_' . $j . '-link-attributes', 'rel', 'nofollow');
                        }

                        echo '<td class="sa-el-table-' . $j . '">';
                        if ($settings['button_text_' . $j] !== '') {
                            echo '<a ' . $this->get_render_attribute_string('button_' . $j . '-link-attributes') . '>' . $settings['button_text_' . $j] . '</a>';
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
