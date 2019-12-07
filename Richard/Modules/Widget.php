<?php

namespace OXI_FLIP_BOX_PLUGINS\Modules;

class Widget extends \WP_Widget {

    function __construct() {
        parent::__construct(
                'oxi_flip_box_widget', __('Flipbox - Awesomes Flip Boxes Image Overlay', 'oxi_Flio_box_widget_widget'), array('description' => __('Flipbox - Awesomes Flip Boxes Image Overlay', 'oxi_flip_box_widget_widget'),)
        );
    }

    public function flip_register_flipwidget() {
        register_widget($this);
    }

    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        echo \OXI_FLIP_BOX_PLUGINS\Classes\Bootstrap::instance()->shortcode_render($title, 'user');
        echo $args['after_widget'];
    }

    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('1', 'oxi_flip_box_widget_widget');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Style ID:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

}
