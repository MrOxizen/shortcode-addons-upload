<?php

namespace SHORTCODE_ADDONS_UPLOAD\Elements\Offcanvas_content;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Offcanvas_content
 * Content of Shortcode Addons Plugins
 *
 * @author $biplob018
 */

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class Offcanvas_content extends Elements_Frontend
{

    public function pre_active()
    {
        return array('Style_1');
    }

    public function templates()
    {
        return array(
            'Button To OffCanvasOXIIMPORToffcanvas_contentOXIIMPORTstyle-1OXIIMPORToxi-addons-preview-BG || OxiAddonsOC-SB-BG |rgba(255,255,255,1.00)|OxiAddonsOC-SB-W |350|350|350|OxiAddonsOC-SB-P-top |20|20|20|OxiAddonsOC-SB-P-bottom |20|20|20|OxiAddonsOC-SB-P-left |20|20|20|OxiAddonsOC-SB-P-right |20|20|20| OxiAddonsOC-FW-BG |rgba(0,0,0,0.41)|OxiAddonsOC-CI-FS |20|20|20| OxiAddonsOC-CI-C |#000000|OxiAddonsOC-CI-P-top |20|20|20|OxiAddonsOC-CI-P-bottom |20|20|20|OxiAddonsOC-CI-P-left |20|20|20|OxiAddonsOC-CI-P-right |20|20|20| OxiAddonsOC-C-TA |right| OxiAddonsOC-C-tab |left| |||||||||||||||| ||||||||||||||||OxiAddonsOC-B-FS |20|20|20| OxiAddonsOC-B-C |#000000| OxiAddonsOC-B-BG |rgba(240,9,9,0.00)| OxiAddonsOC-B-H-C |#ffffff| OxiAddonsOC-B-H-BG |rgba(252,0,0,1.00)|OxiAddonsOC-B-family |ABeeZee|100|OxiAddonsOC-B-style |normal:1.3|center:0()0()0()#ffffff:|OxiAddonsOC-B-B |2|solid|| OxiAddonsOC-B-BC |#0534f2| OxiAddonsOC-B-BC-H |#09cf02|OxiAddonsOC-B-BR-top |50|50|50|OxiAddonsOC-B-BR-bottom |50|50|50|OxiAddonsOC-B-BR-left |50|50|50|OxiAddonsOC-B-BR-right |50|50|50|OxiAddonsOC-B-P-top |10|10|10|OxiAddonsOC-B-P-bottom |10|10|10|OxiAddonsOC-B-P-left |30|30|30|OxiAddonsOC-B-P-right |30|30|30|OxiAddonsOC-B-M-top |0|0|0|OxiAddonsOC-B-M-bottom |0|0|0|OxiAddonsOC-B-M-left |0|0|0|OxiAddonsOC-B-M-right |0|0|0|OxiAddonsOC-BI-FS |20|20|20| OxiAddonsOC-BI-C |#000000|OxiAddonsOC-BI-P-top |5|5|5|OxiAddonsOC-BI-P-bottom |5|5|5|OxiAddonsOC-BI-P-left |5|5|5|OxiAddonsOC-BI-P-right |5|5|5|||#|| OxiAddonsOC-BT-O ||#||Click Here||#|| OxiAddonsOC-BT-T ||#||fas fa-clock||#|| OxiAddonsOC-BT-TH ||#||Please Insert Shortcode Here and Make a Nice Design......||#|| OxiAddonsOC-CI ||#||fas fa-times||#|| ||#||',
            'Image To OffCanvasOXIIMPORToffcanvas_contentOXIIMPORTstyle-2OXIIMPORToxi-addons-preview-BG || OxiAddonsOC-T-SB-BG |rgba(255,255,255,1.00)|OxiAddonsOC-T-SB-W |300|300|300|OxiAddonsOC-T-SB-P-top |20|20|20|OxiAddonsOC-T-SB-P-bottom |20|20|20|OxiAddonsOC-T-SB-P-left |20|20|20|OxiAddonsOC-T-SB-P-right |20|20|20| OxiAddonsOC-T-FW-BG |rgba(0,0,0,0.41)|OxiAddonsOC-T-CI-FS |20|20|20| OxiAddonsOC-T-CI-C |#000000|OxiAddonsOC-T-CI-P-top |20|20|20|OxiAddonsOC-T-CI-P-bottom |20|20|20|OxiAddonsOC-T-CI-P-left |20|20|20|OxiAddonsOC-T-CI-P-right |20|20|20| OxiAddonsOC-T-C-TA |right| OxiAddonsOC-T-C-tab |left| |||||||||||||||| ||||||||||||||||OxiAddonsOC-T-B-B |5|solid|| OxiAddonsOC-T-B-BC |#ffffff|OxiAddonsOC-T-B-BR-top |5|5|5|OxiAddonsOC-T-B-BR-bottom |5|5|5|OxiAddonsOC-T-B-BR-left |5|5|5|OxiAddonsOC-T-B-BR-right |5|5|5|OxiAddonsOC-T-B-P-top |0|0|0|OxiAddonsOC-T-B-P-bottom |0|0|0|OxiAddonsOC-T-B-P-left |0|0|0|OxiAddonsOC-T-B-P-right |0|0|0|OxiAddonsOC-T-B-M-top |0|0|0|OxiAddonsOC-T-B-M-bottom |0|0|0|OxiAddonsOC-T-B-M-left |0|0|0|OxiAddonsOC-T-B-M-right |0|0|0|OxiAddonsOC-T-CI-MW |300|300|300|OxiAddonsOC-T-B-Shadow |rgba(189, 174, 174, 1)|1|1|15|2|OxiAddonsOC-T-animation||2:false:false:500:10:0.2|0//|||#|| OxiAddonsOC-T-BT-O ||#||https://www.oxilab.org/wp-content/uploads/2019/03/arcteck.jpg||#|| OxiAddonsOC-T-BT-TH ||#||Insert Short Code Here and Make A Nice Design.....||#|| OxiAddonsOC-T-C-T ||#||fas fa-times||#|| ||#||',
            'Shortcode To OffCanvasOXIIMPORToffcanvas_contentOXIIMPORTstyle-3OXIIMPORToxi-addons-preview-BG || OxiAddonsOC-SB-BG |rgba(255,255,255,1.00)|OxiAddonsOC-SB-W |300|300|300|OxiAddonsOC-SB-P-top |20|20|20|OxiAddonsOC-SB-P-bottom |20|20|20|OxiAddonsOC-SB-P-left |20|20|20|OxiAddonsOC-SB-P-right |20|20|20| OxiAddonsOC-FW-BG |rgba(255,10,10,0.41)|OxiAddonsOC-CI-FS |20|20|20| OxiAddonsOC-CI-C |#000000|OxiAddonsOC-CI-P-top |20|20|20|OxiAddonsOC-CI-P-bottom |20|20|20|OxiAddonsOC-CI-P-left |20|20|20|OxiAddonsOC-CI-P-right |20|20|20| OxiAddonsOC-C-TA |right| OxiAddonsOC-C-tab |left| |||||||||||||||| ||||||||||||||||||#|| OxiAddonsOC-BT-O ||#||<span style="font-size:24px;color:green">Please insert a Shortcode or text here...</span>||#|| OxiAddonsOC-BT-TH ||#||Insert Short Code Here and Make A Nice Design.....||#|| OxiAddonsOC-C-T ||#||fas fa-times||#|| ||#||',            
        );
    }
}
