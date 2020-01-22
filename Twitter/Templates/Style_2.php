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

class Style_2 extends Templates
{

    public function default_render($style, $child, $admin)
    {
?>
        <div class="sa_twitter_container_style_2 <?php echo $style['sa_twitter_box_align']; ?>">
            <div class="sa_twitter_main">
                <?php
                $this->get_profile_html($style);
                ?>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
    <?php

    }

    public function get_profile_html($settings)
    {
        $profiledata = $button_size = $url = $show_screen = $show_count = '';
        if ($settings['sa_twitter_display_mode_profile'] == 'button') {
            $url = '
                ' . $this->text_render($settings['sa_twitter_url_profile']) . '?screen_name="' . $this->text_render($settings['sa_twitter_screen_name']) . '"
            ';
        } else {
            $url = '' . $this->text_render($settings['sa_twitter_url_profile']) . '';
        }
        if ($settings['sa_twitter_large_button'] == 'yes') {
            $button_size = 'data-size="large" ';
        }
        if ($settings['sa_twitter_display_mode_profile'] == 'timeline') {
            $profiledata = '
            class="twitter-' . $settings['sa_twitter_display_mode_profile'] . '" 
            data-height="' . $settings['sa_twitter_height_profile_timeline-size'] . '" 
            data-theme="' . $settings['sa_twitter_theme_profile_timeline'] . '" 
            data-link-color="' . $settings['sa_twitter_link_color_profile'] . '" 
            ';
        }
        if ($settings['sa_twitter_display_mode_profile'] == 'button'  && $settings['sa_twitter_button_type'] == 'follow-button') {
            if (array_key_exists('sa_twitter_hide_name', $settings) && $settings['sa_twitter_hide_name'] == 'yes') {
                $show_screen = 'data-show-screen-name="false" ';
            }
            if (array_key_exists('sa_twitter_show_count', $settings) && $settings['sa_twitter_show_count'] != 'yes') {
                $show_count = 'data-show-count="false" ';
            }
            $profiledata = '
            class="twitter-' . $settings['sa_twitter_button_type'] . '" 
            ' . $show_screen . ' 
            ' . $show_count . ' 
            ';
        }
        if ($settings['sa_twitter_display_mode_profile'] == 'button' && $settings['sa_twitter_button_type'] == 'mention-button') {
            $profiledata = '
            class="twitter-' . $settings['sa_twitter_button_type'] . '" 
            data-text="' . $this->text_render($settings['sa_twitter_prefill_text']) . '" 
            ';
        }
    ?>
        <a href="<?php echo $url; ?>" data-lang="<?php echo $settings['sa_twitter_language']; ?>" <?php echo $profiledata; ?> <?php echo $button_size; ?>></a>
<?php
    }
}
