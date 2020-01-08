<?php

namespace SHORTCODE_ADDONS_UPLOAD\Recipe\Templates;

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
        $heading = $details = $image = $author = $date = $notes = $ingredient_title = $instruction_title = $notes_title= '';

        if (array_key_exists('sa_recipe_heading_text', $style) && $style['sa_recipe_heading_text'] != '') {
            $heading = '<' . $style['sa_recipe_title_tag'] . ' class="oxi_addons__heading '. $style['sa_recipe_title_separator'].'">' . $this->text_render($style['sa_recipe_heading_text']) . '</' . $style['sa_recipe_title_tag'] . '>';
        }

        if (
            (array_key_exists('sa_recipe_line_position-mob', $style) && $style['sa_recipe_line_position-mob'] == 'center')
            || 
            (array_key_exists('sa_recipe_line_position-lap', $style) && $style['sa_recipe_line_position-lap'] == 'center')
            || 
            (array_key_exists('sa_recipe_line_position-tab', $style) && $style['sa_recipe_line_position-tab'] == 'center')
         ) {
            $this->inline_css .= '.'.$this->WRAPPER.' .oxi_addons__recipe_style_1 .oxi_heading__separator::before{
                left: 50% !important;
                transform: translateX(-50%) !important;
            }';
        }
       

        if (array_key_exists('sa_recipe_desc_text', $style) && $style['sa_recipe_desc_text'] != '') {
            $details = '<div class="oxi_addons__details"> ' . $this->text_render($style['sa_recipe_desc_text']) . ' </div>';
        }
     

        if (array_key_exists('sa_recipe_author_switter', $style) && $style['sa_recipe_author_switter'] == 'yes') {
            if (array_key_exists('sa_recipe_author_text', $style) && $style['sa_recipe_author_text'] != '') {
                $author = '<div class="oxi_addons__author"> ' . $this->text_render($style['sa_recipe_author_text']) . ' </div>';
            }
            if (array_key_exists('sa_recipe_date_text', $style) && $style['sa_recipe_date_text'] != '') {
                $date = '<div class="oxi_addons__date"> ' . $this->text_render($style['sa_recipe_date_text']) . ' </div>';
            }
        } 
        if ($this->media_render('sa_recipe_image', $style) != '') {
            $image = '<div  class="oxi_addons_image_main">
                    <img  src="' . $this->media_render('sa_recipe_image', $style) . '" class="oxi_addons__image" alt="Recipe image"/>
                </div>';
        }

        if (array_key_exists('sa_recipe_notes_title', $style) && $style['sa_recipe_notes_title'] != '') {
            $notes_title = '<div class="oxi_addons__notes_title"> ' . $this->text_render($style['sa_recipe_notes_title']) . ' </div>';
        }
        if (array_key_exists('sa_recipe_notes_title_text', $style) && $style['sa_recipe_notes_title_text'] != '') {
            $notes = '<div class="oxi_addons__notes_text"> ' . $this->text_render($style['sa_recipe_notes_title_text']) . ' </div>';
        }
        if (array_key_exists('sa_recipe_ingredients_title', $style) && $style['sa_recipe_ingredients_title'] != '') {
            $ingredient_title = '<div class="oxi_addons_ingredients_title"> ' . $this->text_render($style['sa_recipe_ingredients_title']) . ' </div>';
        }
        if (array_key_exists('sa_recipe_instructions_title', $style) && $style['sa_recipe_instructions_title'] != '') {
            $instruction_title = '<div class="oxi_addons_instructions_title"> ' . $this->text_render($style['sa_recipe_instructions_title']) . ' </div>';
        }
        if (array_key_exists('sa_recipe_instructions_text', $style) && $style['sa_recipe_instructions_text'] != '') {
            $instruction_text = '<div class="oxi_addons__instructions_text"> ' . $this->text_render($style['sa_recipe_instructions_text']) . ' </div>';
        } 

        $recipe_lists = (array_key_exists('sa_recipe_details_repeater', $style) && is_array($style['sa_recipe_details_repeater']) ? $style['sa_recipe_details_repeater'] : []);
        $ingredients = (array_key_exists('sa_recipe_ingredients_repeater', $style) && is_array($style['sa_recipe_ingredients_repeater']) ? $style['sa_recipe_ingredients_repeater'] : []);
        $instructions = (array_key_exists('sa_recipe_instructions_repeater', $style) && is_array($style['sa_recipe_instructions_repeater']) ? $style['sa_recipe_instructions_repeater'] : []);
     
        echo '<div class="oxi_addons__recipe_wrapper oxi_addons__recipe_wrapper_style_1">
                    <div class="oxi_addons__recipe_style_1 oxi_addons__recipe_style_'. $this->oxiid .'">
                         <div class="oxi_addons__recipe_header">
                            <div class="oxi_addons__header_left">
                                ' . $heading . '
                                <div class="oxi_addons__author_date_main">
                                    ' . $author . '
                                    ' . $date . '
                                </div>
                                ' . $details . '
                            </div>
                            <div class="oxi_addons__header_right">' . $image . ' </div>
                         </div>
                        <div class="oxi_addons__list_main">';
                        foreach ($recipe_lists as $key => $recipe_list) {
                            $list_icon = $list_title  = $list_minute = '';
                            if ($recipe_list['sa_recipe_details_icon']) {
                                $list_icon = '<div class="oxi_addons__list_icon">'.$this->font_awesome_render($recipe_list['sa_recipe_details_icon']).'</div>';
                            }
                            if (array_key_exists('sa_recipe_details_text', $recipe_list) && $recipe_list['sa_recipe_details_text'] != '') {
                                $list_title = '<div class="oxi_addons__list_title"> ' . $this->text_render($recipe_list['sa_recipe_details_text']) . ' </div>';
                            }
                            if (array_key_exists('sa_recipe_details_minute', $recipe_list) && $recipe_list['sa_recipe_details_minute'] != '') {
                                $list_minute = '<div class="oxi_addons__list_minute"> ' . $this->text_render($recipe_list['sa_recipe_details_minute']) . ' </div>';
                            }
                            echo '<div class="oxi_addons__list">
                                    '. $list_icon .' 
                                    <div class="oxi_addons__title_minute">
                                        '. $list_title .'
                                        '. $list_minute .' 
                                    </div>
                                </div>';
                        } 
                        echo '</div>
                        <div class="oxi_addons__ingredients_main">
                            '. $ingredient_title .'';
                         foreach ($ingredients as $ing_key => $ingredient) {
                            $ingredient_text = $ingredient_icon = '';
                            if (array_key_exists('sa_recipe_ingredients_text', $ingredient) && $ingredient['sa_recipe_ingredients_text'] != '') {
                                $ingredient_text = '<div class="oxi_addons__ingredients_text"> ' . $this->text_render($ingredient['sa_recipe_ingredients_text']) . ' </div>';
                            }
                            if ($ingredient['sa_recipe_ingredients_icon']) {
                                $ingredient_icon = '<div class="oxi_addons__ingredients_icon">'.$this->font_awesome_render($ingredient['sa_recipe_ingredients_icon']).'</div>';
                            }
                            echo ' <div class="oxi_addons__ingredients">
                                        '. $ingredient_text .'
                                        '. $ingredient_icon .' 
                                    </div>';
                        } 
                        echo '</div>
                        <div class="oxi_addons__instructions_main">
                            '. $instruction_title .' 
                        <div class="oxi_addons__instructions">
                            '. $instruction_text .' 
                        </div>
                        </div>
                        <div class="oxi_addons__notes_main"> 
                            '. $notes_title .' 
                            <div class="oxi_addons__notes">
                                '. $notes .' 
                            </div>
                        </div>
                    </div>';
        echo ' </div>';
    }
 

}
