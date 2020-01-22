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

class Style_4 extends Templates
{

    public function default_render($style, $child, $admin)
    {
?>
        <div class="sa_twitter_container_style_4 <?php echo $style['sa_twitter_box_align']; ?>">
            <div class="sa_twitter_main">
                <a href="<?php echo $this->text_render($style['sa_twitter_url_moments']); ?>" data-limit="<?php echo $style['sa_twitter_no_of_tweets']; ?>" class="twitter-moment" data-lang="<?php echo $style['sa_twitter_language']; ?>" data-partner="twitter-deck"></a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
<?php

    }
}
