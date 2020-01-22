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

class Style_5 extends Templates
{

    public function default_render($style, $child, $admin)
    {
        $collectiondata = '';
        $collectiondata = '
                data-height="' . $style['sa_twitter_height_list-size'] . '" 
                data-theme="' . $style['sa_twitter_theme_list'] . '"
                data-link-color="' . $style['sa_twitter_link_color_list'] . '"
            ';
?>
        <div class="sa_twitter_container_style_5 <?php echo $style['sa_twitter_box_align']; ?>">
            <div class="sa_twitter_main">
            <a href="<?php echo $this->text_render($style['sa_twitter_url_likes']); ?>" class="twitter-timeline" data-lang="<?php echo $style['sa_twitter_language']; ?>" data-partner="twitter-deck" <?php echo $collectiondata; ?>></a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
    <?php

    }

    
}
