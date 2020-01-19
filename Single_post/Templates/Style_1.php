<?php

namespace SHORTCODE_ADDONS_UPLOAD\Single_post\Templates;

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

        $id = $this->oxiid;
        $single_post = get_post($style['sa_single_post_post_list']);


        if ($single_post) {

            $placeholder_image_src = 'https://www.shortcode-addons.com/wp-content/uploads/2019/07/placeholder4-1.png';
            $image_src = wp_get_attachment_image_src(get_post_thumbnail_id($single_post->ID), 'large');

            if (!$image_src) {
                $image_src = $placeholder_image_src;
            } else {
                $image_src = $image_src[0];
            }
            ?>
            <div id="oxi-single-post-<?php echo esc_attr($id); ?>" class="oxi-single-post oxi-single-post-style-1">
                <div class="oxi-single-post-item">
                    <div class="oxi-single-post-thumbnail-wrap oxi-position-relative">
                        <div class="oxi-single-post-thumbnail">
                            <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo $this->text_render(esc_html($single_post->post_title)); ?>">
                                <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo $this->text_render(esc_html($single_post->post_title)); ?>">
                            </a>
                        </div>
                        <div class="oxi-overlay-primary oxi-position-cover"></div>
                        <div class="oxi-single-post-desc oxi-text-center oxi-position-center oxi-position-medium oxi-position-z-index">
                            <?php if ($style['sa_single_post_post_tag']) : ?>
                                <div class="oxi-single-post-tag-wrap">
                                    <?php
                                    $tags_list = get_the_tag_list('<span class="oxi-background-primary">', '</span> <span class="oxi-background-primary">', '</span>', $single_post->ID);
                                    if ($tags_list) :
                                        echo $this->text_render(wp_kses_post($tags_list));
                                    endif;
                                    ?>
                                </div>
                            <?php endif ?>

                            <?php if ($style['sa_single_post_post_title']) : ?>

                                <?php if ($style['sa_single_post_post_link_title']) : ?>
                                    <a href="<?php echo esc_url(get_permalink($single_post->ID)); ?>" class="oxi-single-post-link" title="<?php echo $this->text_render(esc_html($single_post->post_title)); ?>">
                                    <?php endif; ?>									

                                    <h2 class="oxi-single-post-title oxi-margin-small-top oxi-margin-remove-bottom"><?php echo $this->text_render(esc_html($single_post->post_title)); ?></h2>

                                    <?php if ($style['sa_single_post_post_link_title']) : ?>									
                                    </a>
                                <?php endif; ?>		

                            <?php endif ?>

                            <?php if ($style['sa_single_post_post_category'] or $style['sa_single_post_post_date']) : ?>
                                <div class="oxi-single-post-meta oxi-flex-center oxi-subnav oxi-flex-middle oxi-margin-small-top">
                                    <?php if ($style['sa_single_post_post_category']) : ?>
                                        <?php echo '<span class="oxi-single-post-cate">' . $this->text_render(get_the_category_list(', ', '', $single_post->ID)) . '</span>'; ?>
                                    <?php endif ?>

                                    <?php if ($style['sa_single_post_post_date']) : ?>
                                        <?php echo '<span class="oxi-single-post-date">' . $this->text_render(esc_attr(get_the_date('d F Y', $single_post->ID))) . '</span>'; ?>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>

                            <div class="oxi-single-post-excerpt">
                                <?php echo $this->text_render($single_post->post_excerpt); ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <?php
        } else {
            echo '<div class="oxi-alert-warning" oxi-alert>Oops! You did not select any post from settings.</div>';
        }
    }

}
