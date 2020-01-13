<?php

namespace SHORTCODE_ADDONS_UPLOAD\Unfold\Templates;

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




        $title = $content = $button = $sep_height = $unfold_data = '';
        if ($style['sa_unfold_fold_height_select'] == 'percent') {
            $fold_height = $style['sa_unfold_fold_height'];
        } else {
            $fold_height = $style['sa_unfold_fold_height_pix'];
        }
        if ($style['sa_unfold_fold_dur_select'] == 'custom') {
            $fold_dur = $style['sa_unfold_fold_dur'] * 1000;
        } else {
            $fold_dur = $style['sa_unfold_fold_dur_select'];
        }

        if ($style['sa_unfold_unfold_dur_select'] == 'custom') {
            $unfold_dur = $style['sa_unfold_unfold_dur'] * 1000;
        } else {
            $unfold_dur = $style['sa_unfold_unfold_dur_select'];
        }

        $fold_ease = $style['sa_unfold_fold_easing'];
        $unfold_ease = $style['sa_unfold_unfold_easing'];

        $unfold_data = wp_json_encode(array_filter([
            'buttonIcon' => $style['sa_unfold_button_fold_icon'],
            'buttonUnfoldIcon' => $style['sa_unfold_button_unfold_icon'],
            'foldSelect' => $style['sa_unfold_fold_height_select'],
            'foldHeight' => $fold_height,
            'foldDur' => $fold_dur,
            'unfoldDur' => $unfold_dur,
            'foldEase' => $fold_ease,
            'unfoldEase' => $unfold_ease,
            'foldText' => $this->text_render($style['sa_unfold_button_unfold_text']),
            'unfoldText' => $this->text_render($style['sa_unfold_button_fold_text']),
        ]));

        if ((array_key_exists('sa_unfold_title_on_off', $style) && $style['sa_unfold_title_on_off'] === 'yes') && $style['sa_unfold_title'] !== '') {
            $title = '
                <' . $style['sa_unfold_title_heading'] . ' class="sa_unfold_heading" >
                    ' . $this->text_render($style['sa_unfold_title']) . '
                </' . $style['sa_unfold_title_heading'] . '>
            ';
        }
        if (array_key_exists('sa_unfold_content', $style) && $style['sa_unfold_content'] !== '') {
            $content = '
            <div id="sa_unfold_content_' . $this->oxiid . '" class="sa_unfold_content toggled">
                <div class="sa_unfold_editor_content">
                    ' . $this->text_render($style['sa_unfold_content']) . '
                </div>
            </div>
            ';
        }

        echo '<div class="sa_unfold_container_style_1">
                <div class="sa_unfold_wrap" data-settings=\'' . $unfold_data . '\'>
                    <div class="sa_unfold_container">
                        <div class="sa_unfold_folder">
                        
                        ' . $title . '
                        ' . $content . '
                        ';

        if (array_key_exists('sa_unfold_fade_effect', $style) && $style['sa_unfold_fade_effect'] === 'yes') :
            echo '
                            <div id="sa_unfold_gradient_' . $this->oxiid . '" class="sa_unfold_gradient toggled" >
                            </div>';
        endif;
        echo '
                        </div>';
        if ($style['sa_unfold_button_position'] == 'inside') {
            echo '<div class="sa_unfold_button_container">
                <a id="sa_unfold_button_' . $this->oxiid . '" class="sa_unfold_button ' . $style['sa_unfold_button_size'] . '">';
            if ((array_key_exists('sa_unfold_button_icon', $style) && $style['sa_unfold_button_icon'] == 'yes') && $style['sa_unfold_button_icon_position'] == 'before') :
                echo '
                    <span class="sa_unfold_icon sa_unfold_before"></span>';
            endif;
            echo '
                    <span id="sa_unfold_button_text_' . $this->oxiid . '" class="sa_unfold_button_text"></span>';
            if ((array_key_exists('sa_unfold_button_icon', $style) && $style['sa_unfold_button_icon'] == 'yes') && $style['sa_unfold_button_icon_position'] == 'after') :
                echo '
                    <span class="sa_unfold_icon sa_unfold_after"></span>';
            endif;
            echo '
                </a>
            </div>';
        }
        echo '
                    </div>';
        if ($style['sa_unfold_button_position'] == 'outside') {
            echo '<div class="sa_unfold_button_container">
            <a id="sa_unfold_button_' . $this->oxiid . '" class="sa_unfold_button ' . $style['sa_unfold_button_size'] . '">';
            if ((array_key_exists('sa_unfold_button_icon', $style) && $style['sa_unfold_button_icon'] == 'yes') && $style['sa_unfold_button_icon_position'] == 'before') :
                echo '
                <span class="sa_unfold_icon sa_unfold_before"></span>';
            endif;
            echo '
                <span id="sa_unfold_button_text_' . $this->oxiid . '" class="sa_unfold_button_text"></span>';
            if ((array_key_exists('sa_unfold_button_icon', $style) && $style['sa_unfold_button_icon'] == 'yes') && $style['sa_unfold_button_icon_position'] == 'after') :
                echo '
                <span class="sa_unfold_icon sa_unfold_after"></span>';
            endif;
            echo '
            </a>
        </div>';
        }
        echo '
                </div>
            </div>
    ';
    }

    public function inline_public_jquery()
    {
        $jquery = '';

        $jquery = '
        var sa_unfold_wrap = $(" .' . $this->WRAPPER . ' .sa_unfold_container_style_1 .sa_unfold_wrap"),
            unfoldSettings = sa_unfold_wrap.data("settings"),
            contentHeight = parseInt(
                    sa_unfold_wrap.find(".sa_unfold_editor_content").outerHeight()
                    );
        if (unfoldSettings["foldSelect"] == "percent") {
            var foldHeight = (unfoldSettings["foldHeight"] / 100) * contentHeight;
        } else if (unfoldSettings["foldSelect"] == "pixel") {
            var foldHeight = unfoldSettings["foldHeight"];
        }
        sa_unfold_wrap
                .find(".sa_unfold_button_text")
                .text(unfoldSettings["foldText"]);
        sa_unfold_wrap.find(".sa_unfold_content").css({height: foldHeight});
        sa_unfold_wrap
                .find(".sa_unfold_button .sa_unfold_icon")
                .addClass(unfoldSettings["buttonUnfoldIcon"]);

        sa_unfold_wrap.find(".sa_unfold_button").click(function (e) {
            e.preventDefault();
            if (sa_unfold_wrap.find(".sa_unfold_content").hasClass("toggled")) {
                contentHeight = parseInt(
                        sa_unfold_wrap.find(".sa_unfold_editor_content").outerHeight()
                        );
                sa_unfold_wrap
                        .find(".sa_unfold_button_text")
                        .text(unfoldSettings["unfoldText"]);
                sa_unfold_wrap
                        .find(".sa_unfold_content")
                        .animate(
                                {height: contentHeight},
                                unfoldSettings["unfoldDur"],
                                unfoldSettings["unfoldEase"]
                                )
                        .removeClass("toggled");
                sa_unfold_wrap.find(".sa_unfold_gradient").toggleClass("toggled");
                sa_unfold_wrap
                        .find(".sa_unfold_button .sa_unfold_icon")
                        .removeClass(unfoldSettings["buttonUnfoldIcon"])
                        .addClass(unfoldSettings["buttonIcon"]);
            } else {
                sa_unfold_wrap
                        .find(".sa_unfold_button_text")
                        .text(unfoldSettings["foldText"]);
                sa_unfold_wrap
                        .find(".sa_unfold_content")
                        .animate(
                                {height: foldHeight},
                                unfoldSettings["foldDur"],
                                unfoldSettings["foldEase"]
                                )
                        .addClass("toggled");
                sa_unfold_wrap.find(".sa_unfold_gradient").toggleClass("toggled");
                sa_unfold_wrap
                        .find(".sa_unfold_button .sa_unfold_icon")
                        .removeClass(unfoldSettings["buttonIcon"])
                        .addClass(unfoldSettings["buttonUnfoldIcon"]);
            }
        });
        ';
        return $jquery;
    }
}
