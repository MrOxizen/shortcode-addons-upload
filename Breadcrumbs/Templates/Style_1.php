<?php

namespace SHORTCODE_ADDONS_UPLOAD\Breadcrumbs\Templates;

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

        $_query = $this->get_query();

        $this->set_separator();
        echo '<div class="sa_breadcrumbs_container_style_1 ">
                <div class="sa_breadcrumbs_main">
                ';
        if ($_query) {
            if ($_query->have_posts()) {

                // Setup post
                $_query->the_post();

                // Render using the new query
                $this->render_breadcrumbs($_query);

                // Reset post data to original query
                wp_reset_postdata();
                wp_reset_query();
            } else {

                _e('Post or page not found', SHORTCODE_ADDOONS);
            }
        } else {
            // Render using the original query
            $this->render_breadcrumbs();
        }
        echo '</div>
        </div>';
    }
    protected function get_query()
    {
        global $post;
        $settings = $this->style;
        $_id = null;
        $_post_type = 'post';
        if ('id' === $settings['sa_breadcrumbs_source'] && '' !== $settings['sa_breadcrumbs_source_id']) {
            $_id = $settings['sa_breadcrumbs_source_id'];
            $_post_type = 'any';

            $_args = array(
                'p' => $_id,
                'post_type' => $_post_type,
            );
            // Create custom query
            $_post_query = new \WP_Query($_args);

            return $_post_query;
        }
        return false;
    }
    protected function set_separator()
    {
        $settings = $this->style;
        if ('icon' === $settings['sa_breadcrumbs_separator_type']) {
            $separator = $this->font_awesome_render($settings['sa_breadcrumbs_separator_icon']);
        } else {
            $separator = '<span class="sa_breadcrumbs__separator__text">' . $this->text_render($settings['sa_breadcrumbs_separator_text']) . '</span>';
        }
        $this->_separator = $separator;
    }

    protected function get_separator()
    {
        return $this->_separator;
    }

    protected function render_separator($output = true)
    {
        $markup = '<li class="sa_breadcrumbs__separator">';
        $markup .= $this->get_separator();
        $markup .= '</li>';
        if ($output === true) {
            echo $markup;
            return;
        }
        return $markup;
    }
    protected function render_home_link()
    {
        $settings = $this->style;
?>
        <li class="sa_breadcrumbs__item sa_breadcrumbs__item--home">
            <a class="sa_breadcrumbs__crumb--link sa_breadcrumbs__crumb--home" href="<?php echo get_home_url(); ?>" title="<?php echo $this->text_render($settings["sa_breadcrumbs_home_text"]); ?>">
                <?php echo $this->text_render($settings["sa_breadcrumbs_home_text"]); ?>
            </a>
        </li>
        <?php
        $this->render_separator();
    }
    protected function render_breadcrumbs($query = false)
    {
        $settings = $this->style;

        global $post, $wp_query;

        if ($query === false) {
            // Reset post data to parent query
            $wp_query->reset_postdata();
            // Set active query to native query
            $query = $wp_query;
        }
        $separator = $this->get_separator();

        $custom_taxonomy = 'product_cat';

        if (!$query->is_front_page()) {
        ?>

            <ul class="sa_breadcrumbs">

    <?php
            if ('yes' === $settings['sa_breadcrumbs_show_home']) {
                $this->render_home_link();
            }

            if ($query->is_archive() && !$query->is_tax() && !$query->is_category() && !$query->is_tag()) {

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--archive"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--archive">' . post_type_archive_title(false) . '</strong></li>';
            } else if ($query->is_archive() && $query->is_tax() && !$query->is_category() && !$query->is_tag()) {
                $post_type = get_post_type();
                if ($post_type != 'post') {
                    $post_type_object = get_post_type_object($post_type);
                    $post_type_archive = get_post_type_archive_link($post_type);
                    echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--cat sa_breadcrumbs__item--custom-post-type-' . $post_type . '"><a class="sa_breadcrumbs__crumb--cat sa_breadcrumbs__crumb--custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                    $this->render_separator();
                }
                $custom_tax_name = get_queried_object()->name;
                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--archive"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--archive">' . $custom_tax_name . '</strong></li>';
            } else if ($query->is_single()) {

                $post_type = get_post_type();

                if ($post_type != 'post') {
                    $post_type_object = get_post_type_object($post_type);
                    $post_type_archive = get_post_type_archive_link($post_type);
                    echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--cat sa_breadcrumbs__item--custom-post-type-' . $post_type . '"><a class="sa_breadcrumbs__crumb--cat sa_breadcrumbs__crumb--custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                    $this->render_separator();
                }

                $category = get_the_category();

                if (!empty($category)) {

                    $values = array_values($category);

                    $last_category = end($values);

                    $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','), ',');
                    $cat_parents = explode(',', $get_cat_parents);

                    $cat_display = '';

                    foreach ($cat_parents as $parents) {
                        $cat_display .= '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--cat">' . $parents . '</li>';
                        $cat_display .= $this->render_separator(false);
                    }
                }

                $taxonomy_exists = taxonomy_exists($custom_taxonomy);

                if (empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                    $taxonomy_terms = get_the_terms($post->ID, $custom_taxonomy);

                    if ($taxonomy_terms) {
                        $cat_id = $taxonomy_terms[0]->term_id;
                        $cat_nicename = $taxonomy_terms[0]->slug;
                        $cat_link = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                        $cat_name = $taxonomy_terms[0]->name;
                    }
                }
                if (!empty($last_category)) {

                    echo $cat_display;

                    echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--' . $post->ID . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                } else if (!empty($cat_id)) {
                    echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--cat sa_breadcrumbs__item--cat-' . $cat_id . ' sa_breadcrumbs__item--cat-' . $cat_nicename . '"><a class="sa_breadcrumbs__crumb--cat sa_breadcrumbs__crumb--cat-' . $cat_id . ' sa_breadcrumbs__crumb--cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';

                    $this->render_separator();

                    echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--' . $post->ID . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                } else {
                    echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--' . $post->ID . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                }
            } else if ($query->is_category()) {

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--cat"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--cat">' . single_cat_title('', false) . '</strong></li>';
            } else if ($query->is_page()) {

                if ($post->post_parent) {

                    $anc = get_post_ancestors($post->ID);

                    $anc = array_reverse($anc);

                    if (!isset($parents))
                        $parents = null;

                    foreach ($anc as $ancestor) {

                        $parents .= '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--parent sa_breadcrumbs__item--parent-' . $ancestor . '"><a class="sa_breadcrumbs__crumb--parent sa_breadcrumbs__crumb--parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';

                        $parents .= $this->render_separator(false);
                    }
                    echo $parents;
                }
                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--' . $post->ID . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
            } else if ($query->is_tag()) {
                $term_id = get_query_var('tag_id');
                $taxonomy = 'post_tag';
                $args = 'include=' . $term_id;
                $terms = get_terms($taxonomy, $args);
                $get_term_id = $terms[0]->term_id;
                $get_term_slug = $terms[0]->slug;
                $get_term_name = $terms[0]->name;

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--tag-' . $get_term_id . ' sa_breadcrumbs__item--tag-' . $get_term_slug . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--tag-' . $get_term_id . ' sa_breadcrumbs__crumb--tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
            } elseif ($query->is_day()) {
                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--year sa_breadcrumbs__item--year-' . get_the_time('Y') . '"><a class="sa_breadcrumbs__crumb--year sa_breadcrumbs__crumb--year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';

                $this->render_separator();

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--month sa_breadcrumbs__item--month-' . get_the_time('m') . '"><a class="sa_breadcrumbs__crumb--month sa_breadcrumbs__crumb--month-' . get_the_time('m') . '" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';

                $this->render_separator();

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--' . get_the_time('j') . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
            } else if ($query->is_month()) {

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--year sa_breadcrumbs__item--year-' . get_the_time('Y') . '"><a class="sa_breadcrumbs__crumb--year sa_breadcrumbs__crumb--year-' . get_the_time('Y') . '" href="' . get_year_link(get_the_time('Y')) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';

                $this->render_separator();

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--month sa_breadcrumbs__item--month-' . get_the_time('m') . '"><strong class="sa_breadcrumbs__crumb--month sa_breadcrumbs__crumb--month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
            } else if ($query->is_year()) {

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--current-' . get_the_time('Y') . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
            } else if ($query->is_author()) {

                global $author;
                $userdata = get_userdata($author);

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--current-' . $userdata->user_nicename . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
            } else if (get_query_var('paged')) {

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--current-' . get_query_var('paged') . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">' . __('Page') . ' ' . get_query_var('paged') . '</strong></li>';
            } else if ($query->is_search()) {

                echo '<li class="sa_breadcrumbs__item sa_breadcrumbs__item--current sa_breadcrumbs__item--current-' . get_search_query() . '"><strong class="sa_breadcrumbs__crumb--current sa_breadcrumbs__crumb--current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
            } elseif ($query->is_404()) {

                echo '<li>' . 'Error 404' . '</li>';
            }

            echo '</ul>';
        }
    }
}
