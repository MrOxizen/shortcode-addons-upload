<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Image_comparison;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Image_comparison extends Elements_Frontend {

    public function pre_active() {
        return array('style-1');
    }

    public function templates() {
        return array(
            'Style 01OXIIMPORTimage_comparisonOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG ||OxiAddonsImageComparison-G-W |800|800|800|OxiAddonsImageComparison-G-margin-top |0|0|0|OxiAddonsImageComparison-G-margin-bottom |0|0|0|OxiAddonsImageComparison-G-margin-left |0|0|0|OxiAddonsImageComparison-G-margin-right |0|0|0| OxiAddonsImageComparison-G-offset |0.5| OxiAddonsImageComparison-HS-C |#ffffff| OxiAddonsImageComparison-overlay |true| OxiAddonsImageComparison-move |false| OxiAddonsImageComparison-position |true| OxiAddonsImageComparison-hover |false|OxiAddonsImageComparison-B-FS |16|16|16| OxiAddonsImageComparison-B-TC |#ffffff| OxiAddonsImageComparison-B-BG |rgba(158,9,9,0.44)|OxiAddonsImageComparison-B-B |1|none|| OxiAddonsImageComparison-B-BC |#707070|OxiAddonsImageComparison-B-F-family |Crate+Round|100|OxiAddonsImageComparison-B-F-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddonsImageComparison-B-BR-top |5|5|5|OxiAddonsImageComparison-B-BR-bottom |5|5|5|OxiAddonsImageComparison-B-BR-left |5|5|5|OxiAddonsImageComparison-B-BR-right |5|5|5|OxiAddonsImageComparison-B-P-top |5|5|5|OxiAddonsImageComparison-B-P-bottom |5|5|5|OxiAddonsImageComparison-B-P-left |15|15|15|OxiAddonsImageComparison-B-P-right |15|15|15|||#|| OxiAddonsImageComparison-B-text-before ||#||Before||#|| OxiAddonsImageComparison-B-text-after ||#||After||#|| OxiAddonsImageComparison-IMG-Before ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-210019-1.png||#|| OxiAddonsImageComparison-IMG-After ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-210019.png||#|| ||#||',
            'Style 02OXIIMPORTimage_comparisonOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG ||OxiAddonsImageComparison-G-W |800|800|800|OxiAddonsImageComparison-G-margin-top |0|0|0|OxiAddonsImageComparison-G-margin-bottom |0|0|0|OxiAddonsImageComparison-G-margin-left |0|0|0|OxiAddonsImageComparison-G-margin-right |0|0|0| OxiAddonsImageComparison-G-offset |50| OxiAddonsImageComparison-HS-bg || OxiAddonsImageComparison-arrow-C |#5e5e5e|||||||OxiAddonsImageComparison-B-FS |16|16|16| OxiAddonsImageComparison-B-TC |#ffffff| OxiAddonsImageComparison-B-BG |rgba(255,64,96,0.78)|OxiAddonsImageComparison-B-B |1|none|| OxiAddonsImageComparison-B-BC |#707070|OxiAddonsImageComparison-B-F-family |Crate+Round|100|OxiAddonsImageComparison-B-F-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddonsImageComparison-B-BR-top |2|2|2|OxiAddonsImageComparison-B-BR-bottom |2|2|2|OxiAddonsImageComparison-B-BR-left |2|2|2|OxiAddonsImageComparison-B-BR-right |2|2|2|OxiAddonsImageComparison-B-P-top |5|5|5|OxiAddonsImageComparison-B-P-bottom |5|5|5|OxiAddonsImageComparison-B-P-left |15|15|15|OxiAddonsImageComparison-B-P-right |15|15|15|OxiAddonsImageComparison-handle-width |50|50|50|OxiAddonsImageComparison-handle-height |50|50|50|OxiAddonsImageComparison-handle-radius-top |50|50|50|OxiAddonsImageComparison-handle-radius-bottom |50|50|50|OxiAddonsImageComparison-handle-radius-left |50|50|50|OxiAddonsImageComparison-handle-radius-right |50|50|50|||#|| OxiAddonsImageComparison-B-text-before ||#||Before||#|| OxiAddonsImageComparison-B-text-after ||#||After||#|| OxiAddonsImageComparison-IMG-Before ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-210019-3.png||#|| OxiAddonsImageComparison-IMG-After ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-210019-2.png||#|| ||#||',
            'Style 03OXIIMPORTimage_comparisonOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG ||OxiAddonsImageComparison-G-W |600|600|600|OxiAddonsImageComparison-G-margin-top |0|0|0|OxiAddonsImageComparison-G-margin-bottom |0|0|0|OxiAddonsImageComparison-G-margin-left |0|0|0|OxiAddonsImageComparison-G-margin-right |0|0|0| OxiAddonsImageComparison-G-offset |50|||#|| OxiAddonsImageComparison-IMG-one ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-712618-3.png||#|| OxiAddonsImageComparison-IMG-two ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-712618-2.png||#|| OxiAddonsImageComparison-IMG-three ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-712618-1.png||#|| OxiAddonsImageComparison-IMG-four ||#||https://www.oxilab.org/wp-content/uploads/2019/04/pexels-photo-712618.png||#|| ||#||',
            'Style 04OXIIMPORTimage_comparisonOXIIMPORTstyle-4OXIIMPORToxi-addons-preview-BG ||OxiAddonsImageComparison-G-W |800|800|800|OxiAddonsImageComparison-H-W |35|35|35|OxiAddonsImageComparison-G-margin-top |0|0|0|OxiAddonsImageComparison-G-margin-bottom |0|0|0|OxiAddonsImageComparison-G-margin-left |0|0|0|OxiAddonsImageComparison-G-margin-right |0|0|0|OxiAddonsImageComparison_H_transition |3.5|3.5|3.5|||#||oxi_addons_font_view_img ||#||https://images.pexels.com/photos/237018/pexels-photo-237018.jpeg?cs=srgb&dl=asphalt-beauty-colorful-237018.jpg&fm=jpg||#|| oxi_addons_hover_view_img ||#||https://s3-ap-northeast-1.amazonaws.com/cdn.travel-star.jp/production/imgs/images/000/200/994/original.?1548999161||#|| ||#||',
        );
    }

}
