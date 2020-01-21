<?php

namespace SHORTCODE_ADDONS_UPLOAD\Twitter\Templates;

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
?>
        <div class="sa_twitter_container_style_1 <?php echo $style['sa_twitter_box_align']; ?>">
            <div class="sa_twitter_main">
                <?php
                $this->get_collection_html($style);
                ?>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
    <?php

    }

    public function get_collection_html($settings)
    {
        $collectiondata = '';
        if ($settings['sa_twitter_display_mode_collection'] == 'grid') {
            $collectiondata = 'data-limit="' . $settings['sa_twitter_no_of_tweets'] . '"';
        } elseif ($settings['sa_twitter_display_mode_collection'] == 'timeline') {
            $collectiondata = '
                data-height="' . $settings['sa_twitter_height_collection_timeline-size'] . '" 
                data-theme="' . $settings['sa_twitter_theme_collection_timeline'] . '"
                data-link-color="' . $settings['sa_twitter_link_color_collection'] . '"
            ';
        }
    ?>
        <a href="<?php echo $this->text_render($settings['sa_twitter_url_collection']); ?>" class="twitter-<?php echo $settings['sa_twitter_display_mode_collection']; ?>" data-lang="<?php echo $settings['sa_twitter_language']; ?>" data-partner="twitter-deck" <?php echo $collectiondata; ?>></a>
<?php
    }
}
