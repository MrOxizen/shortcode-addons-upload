<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Text_blocks;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Text blocks
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */
use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Text_blocks extends Elements_Frontend {

    public function pre_active() {
        return array('style-1');
    }

    public function templates() {
        return array(
            'Style 1OXIIMPORTtext_blocksOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG |rgba(255, 255, 255, 1)|OxiAddTextBlocks-margin-top |0|0|0|OxiAddTextBlocks-margin-bottom |0|0|0|OxiAddTextBlocks-margin-left |0|0|0|OxiAddTextBlocks-margin-right |0|0|0|OxiAddTextBlocks-animation||3:false:false:500:10:0.2|0//|OxiAddTextBlocks-1st-font-size|40|40|40| OxiAddTextBlocks-1st-color |#949494|OxiAddTextBlocks-1st-family |Ubuntu|300|OxiAddTextBlocks-1st-style |normal:1|center:0()0()0()rgba(255, 255, 255, 0):|OxiAddTextBlocks-1st-padding-top |0|0|0|OxiAddTextBlocks-1st-padding-bottom |0|0|0|OxiAddTextBlocks-1st-padding-left |0|0|0|OxiAddTextBlocks-1st-padding-right |0|0|0|OxiAddTextBlocks-2nd-font-size|80|50|50| OxiAddTextBlocks-2nd-color |#ff8293|OxiAddTextBlocks-2nd-family |Ubuntu|100|OxiAddTextBlocks-2nd-style |normal:1.3|center:0()0()0()rgba(255, 255, 255, 0):|OxiAddTextBlocks-2nd-padding-top |0|0|0|OxiAddTextBlocks-2nd-padding-bottom |0|0|0|OxiAddTextBlocks-2nd-padding-left |0|0|0|OxiAddTextBlocks-2nd-padding-right |0|0|0|OxiAddTextBlocks-3rd-font-size|30|30|30| OxiAddTextBlocks-3rd-color |#6e6e6e|OxiAddTextBlocks-3rd-family |Ubuntu|300|OxiAddTextBlocks-3rd-style |normal:1.3|center:0()0()0()rgba(255, 255, 255, 0):|OxiAddTextBlocks-3rd-padding-top |0|0|0|OxiAddTextBlocks-3rd-padding-bottom |0|0|0|OxiAddTextBlocks-3rd-padding-left |0|0|0|OxiAddTextBlocks-3rd-padding-right |0|0|0|||#|| ||#||OxiAddTextBlocks-1st-text ||#||FUSION||#||OxiAddTextBlocks-2nd-text ||#||BUILDER||#||OxiAddTextBlocks-3rd-text ||#||DRAG & DROP TO <span style="color: #ff8293; font-family: Roboto;"> EASILY </span> CREATE CUSTOM PAGE||#|||',
       'Style 2OXIIMPORTtext_blocksOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG |rgba(255,255,255,0.75)|OxiAddTextBlocks-margin-top |0|0|0|OxiAddTextBlocks-margin-bottom |0|0|0|OxiAddTextBlocks-margin-left |0|0|0|OxiAddTextBlocks-margin-right |0|0|0|OxiAddTextBlocks-animation||10:false:false:500:10:0.2|10//|OxiAddTextBlocks-1st-font-size|50|50|50| OxiAddTextBlocks-1st-color |#737373|OxiAddTextBlocks-1st-family |Ubuntu|400|OxiAddTextBlocks-1st-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0):|OxiAddTextBlocks-1st-padding-top |0|0|0|OxiAddTextBlocks-1st-padding-bottom |0|0|0|OxiAddTextBlocks-1st-padding-left |0|0|0|OxiAddTextBlocks-1st-padding-right |0|0|0|OxiAddTextBlocks-2nd-font-size|18|18|18| OxiAddTextBlocks-2nd-color |#ed7e4e|OxiAddTextBlocks-2nd-family |Roboto|400|OxiAddTextBlocks-2nd-style |normal:1.3|left:0()0()0()rgba(255, 255, 255, 0):|OxiAddTextBlocks-2nd-padding-top |0|0|0|OxiAddTextBlocks-2nd-padding-bottom |0|0|0|OxiAddTextBlocks-2nd-padding-left |0|0|0|OxiAddTextBlocks-2nd-padding-right |0|0|0|OxiAddTextBlocks-border-width|50|50|50|OxiAddTextBlocks-border |solid|#ed7e4e|2|OxiAddTextBlocks-border-padding-top |6|6|6|OxiAddTextBlocks-border-padding-bottom |6|6|6|OxiAddTextBlocks-border-padding-left |3|3|3|OxiAddTextBlocks-border-padding-right |0|0|0|||||OxiAddTextBlocks-max-width|600|600|600|||#|| ||#||OxiAddTextBlocks-1st-text ||#||We are<br>Web design <span style=" color: #ed7e4e; font-weight: bold; "> Agency </span>||#||OxiAddTextBlocks-2nd-text ||#||19 years of Experience||#||OxiAddTextBlocks-style ||#||contentborderheading||#|||',
      );
    }

}
