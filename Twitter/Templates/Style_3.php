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

class Style_3 extends Templates
{

    public function default_render($style, $child, $admin)
    {
?>
        <div class="sa_twitter_container_style_3 <?php echo $style['sa_twitter_box_align']; ?>">
            <div class="sa_twitter_main">
                <?php
                $this->get_list_html($style);
                ?>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
    <?php

    }

    public function get_list_html($settings)
    {
    ?>
        <a href="<?php echo $this->text_render($settings['sa_twitter_url_list']); ?>" class="twitter-timeline" data-lang="<?php echo $settings['sa_twitter_language']; ?>" data-partner="twitter-deck" data-height="<?php echo $settings['sa_twitter_height_list-size']; ?>" data-theme="<?php echo $settings['sa_twitter_theme_list']; ?>" data-link-color="<?php echo $settings['sa_twitter_link_color_list']; ?>"></a>
<?php
    }
}
