<?php

namespace OXI_FLIP_BOX_PLUGINS\Page;

/**
 * Description of Welcome
 *
 * @author biplo
 */
class Welcome {

    public function __construct() {
        $this->admin_css();
        $this->Public_Render();
    }

    public function admin_css() {
        wp_enqueue_style('flip-box-admin-welcome', OXI_FLIP_BOX_URL . '/Assets/Backend/css/admin-welcome.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
    }

    public function Public_Render() {
        ?>
        <div class="wrap about-wrap">

            <h1>Welcome to Flipbox - Awesomes Flip Boxes Image Overlay</h1>
            <div class="about-text">
                Thank you for choosing Flipbox - Awesomes Flip Boxes Image Overlay - the most friendly WordPress FLip Box Or Image Overlay  Plugins. Here's how to get started.
            </div>
            <h2 class="nav-tab-wrapper">
                <a class="nav-tab nav-tab-active">
                    Getting Started		
                </a>
            </h2>
            <p class="about-description">
                Use the tips below to get started using Responsive Tabs with  Accordions. You will be up and running in no time.	
            </p>    
            <div class="feature-section">
                <h3>Creating Your Tabs</h3>
                <p>Responsive Tabs with  Accordions makes it easy to create Jquery Tabs in WordPress. You can follow the video tutorial on the right or read our how to 
                    <a href="https://www.oxilab.org/docs/responsive-tabs-with-accordions/getting-started/" target="_blank" rel="noopener">Create your Tabs guide</a>.					</p>
                <p>But in reality, the process is so intuitive that you can just start by going to <a href="<?php echo admin_url(); ?>admin.php?page=oxi-tabs-ultimate">New Tabs</a>.				</p>
                </br>
                </br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-42zCmS2p6c" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="feature-section">
                <h3>See all Responsive Tabs with  Accordions Features</h3>
                <p>Responsive Tabs with  Accordions is both easy to use and extremely powerful. We have tons of helpful features that allows us to give you everything you need on Tabs.</p>
                <p>1. Awesome Live Preview Panel</p>
                <p>1. Can Customize with Our Settings</p>
                <p>1. Easy to USE & Builtin Integration for popular Page Builder</p>
                <p><a href="https://www.oxilab.org/downloads/responsive-tabs-with-accordions/" target="_blank" rel="noopener" class="iheu-image-features-button button button-primary">See all Features</a></p>

            </div>
            <div class="feature-section">
                <h3>Have any Bugs or Suggestion</h3>
                <p>Your suggestions will make this plugin even better, Even if you get any bugs on Image Hover Effects with Carousel so let us to know, We will try to solved within few hours</p>
                <p><a href="https://www.oxilab.org/contact-us" target="_blank" rel="noopener" class="image-features-button button button-primary">Contact Us</a>
                    <a href="https://wordpress.org/support/plugin/vc-tabs" target="_blank" rel="noopener" class="image-features-button button button-primary">Support Forum</a></p>

            </div>

        </div>
        <?php
    }

}
