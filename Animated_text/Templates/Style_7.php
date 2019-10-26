<?php

namespace SHORTCODE_ADDONS_UPLOAD\Animated_text\Templates;

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

class Style_7 extends Templates {

//    public function public_css() {
//        wp_enqueue_style('oxi-addons-main-wrapper-image-comparison-style-1', SA_ADDONS_UPLOAD_URL . '/Image_comparison/File/twentytwenty.css', false, SA_ADDONS_PLUGIN_VERSION);
//    }

    public function default_render($style, $child, $admin) {

        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        echo '<div class="oxi-addons-AT-P-style-1">
                    <span class="oxi-animated-style-1">' . $this->text_render($style['sa_animated_text']) . '</span>
            </div>';
    }

    public function public_jquery() {
        $this->JSHANDLE = 'jquery-saanimatedtext-js';
        wp_enqueue_script('jquery-saanimatedtext-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/jquery.bubble.text.js', true, SA_ADDONS_PLUGIN_VERSION);
    }

    public function inline_public_jquery() {
        $jquery = '';
        $styledata = $this->style;
        $id = $styledata['shortcode-addons-elements-id'];
        $txtdata = '';
        foreach ($styledata['sa_animated_text_data'] as $key => $values) {
            foreach ($values as $value) {
                if (!empty($value)) {
                    $txtdata .= "'$value',";
                }
            }
        }
        $id = $this->WRAPPER;
        $id = str_replace('-', "_", $id);
        $jquery .= '
            jQuery(function (){   
                $("#oxi-addons-select-in-animation").attr("data-key","effect");
                $("#oxi-addons-select-in-animation").attr("data-type","in");
                  var $form = jQuery("#oxi-addons-form-submit");
                  var  $viewport = jQuery(".oxi-addons-wrapper-' . $id . '"); 
                  var getFormData = function () {
                    var data = {
                      loop: true,
                      in: { },
                      out: { }
                    }; 
                    $form.find("[data-key=\'effect\']").each(function () {
                      var $this = jQuery(this);
                      var key = $this.data("key");
                      var type = $this.data("type"); 
                      data[type][key] = $this.val(); 
                    });
  
                    $form.find("[data-key=\'type\']").each(function () {
                      var $this = jQuery(this);
                      var key = $this.data("key");
                      var type = $this.data("type");
                      var val = $this.val(); 
                        data[type].shuffle = (val === "shuffle");
                        data[type].reverse = (val === "reverse");
                        data[type].sync = (val === "sync");
                    });
  
                    return data;
                  };
  
                  jQuery.each(animateClasses.split(" "), function (i, value) {
                    var type = "[data-type]"; 
                    if (/Out/.test(value) || value === "hinge") {
                      type = "[data-type=\'out\']";
                    } else if (/In/.test(value)) {
                      type = "[data-type=\'in\']";
                    } 
                     
                  }); 
                  $form.find("[data-key=\'effect\'][data-type=\'in\']").val("");
                  $form.find("[data-key=\'effect\'][data-type=\'out\']").val(""); 
                  
                  var $tlt = $viewport.find(".oxi-addons-tlt"); 
                  $form.on( "change", function () {
                    var obj = getFormData();
                    $tlt.textillate(obj);
                  }).trigger("change"); 
                  
                  var obj = getFormData();
                    $tlt.textillate(obj); 
              });';
        return $jquery;
    }

    public function old_render() {
        $styledata = $this->dbdata;
        $listdata = $this->child;
        $oxiid = $styledata['id'];
        $stylefiles = explode('||#||', $styledata['css']);
        $styledata = explode('|', $stylefiles[0]);
        $css = $jquery = '';

        wp_enqueue_style('jquery-saanimatedtext-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/animate.css', true, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery-fittext-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/jquery-fittext.js', true, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery-lettering-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/jquery-lettering.js', true, SA_ADDONS_PLUGIN_VERSION);
        wp_enqueue_script('jquery-textillate-js', SA_ADDONS_UPLOAD_URL . '/Animated_text/File/jquery-textillate.js', true, SA_ADDONS_PLUGIN_VERSION);

        echo '  <div class="oxi-addons-container">
                <div class="oxi-addons-row">
                      <div class="oxi-addons-wrapper-' . $oxiid . '">
                         <div class="oxi-addons-tlt">
                            <ul class="texts" style="display: none"> ';
                                if ($stylefiles[3] != '') {
                                    $serialize = explode('{{}}', $stylefiles[3]);
                                    foreach ($serialize as $key => $value) {
                                        echo '<li data-id="oxi-' . $key . '">' . $value . '</li>';
                                    }
                                }
                                echo '</ul>
                          </div>
                      </div>
                </div>
            </div>';
        $jquery .= '
            jQuery(function (){   
                var animateClasses = "flash bounce shake tada swing wobble pulse flip flipInX flipOutX flipInY flipOutY fadeIn fadeInUp fadeInDown fadeInLeft fadeInRight fadeInUpBig fadeInDownBig fadeInLeftBig fadeInRightBig fadeOut fadeOutUp fadeOutDown fadeOutLeft fadeOutRight fadeOutUpBig fadeOutDownBig fadeOutLeftBig fadeOutRightBig bounceIn bounceInDown bounceInUp bounceInLeft bounceInRight bounceOut bounceOutDown bounceOutUp bounceOutLeft bounceOutRight rotateIn rotateInDownLeft rotateInDownRight rotateInUpLeft rotateInUpRight rotateOut rotateOutDownLeft rotateOutDownRight rotateOutUpLeft rotateOutUpRight hinge rollIn rollOut";
                var $form = jQuery("#oxi-addons-form-submit");
                var  $viewport = jQuery(".oxi-addons-wrapper-' . $oxiid . '"); 
                var getFormData = function () {
                  var data = {
                    loop: true,
                    in: { },
                    out: { }
                  }; 
                  $form.find("[data-key=\'effect\']").each(function () {
                    var $this = jQuery(this);
                    var key = $this.data("key");
                    var type = $this.data("type"); 
                    data[type][key] = $this.val(); 
                  });

                  $form.find("[data-key=\'type\']").each(function () {
                    var $this = jQuery(this);
                    var key = $this.data("key");
                    var type = $this.data("type");
                    var val = $this.val(); 
                      data[type].shuffle = (val === "shuffle");
                      data[type].reverse = (val === "reverse");
                      data[type].sync = (val === "sync");
                  });

                  return data;
                };

                jQuery.each(animateClasses.split(" "), function (i, value) {
                  var type = "[data-type]";
                  var option = "<option value=\'"+value+"\'>"+value+"</option>"; 
                  if (/Out/.test(value) || value === "hinge") {
                    type = "[data-type=\'out\']";
                  } else if (/In/.test(value)) {
                    type = "[data-type=\'in\']";
                  } 
                  if (type) {
                    $form.find("[data-key=\'effect\']" + type).append(option);
                  }
                }); 
                $form.find("[data-key=\'effect\'][data-type=\'in\']").val("' . $styledata[35] . '");
                $form.find("[data-key=\'effect\'][data-type=\'out\']").val("' . $styledata[39] . '"); 
                
                var $tlt = $viewport.find(".oxi-addons-tlt"); 
                $form.on( "change", function () {
                  var obj = getFormData();
                  $tlt.textillate(obj);
                }).trigger("change"); 
                
                var obj = getFormData();
                  $tlt.textillate(obj);
              });
    ';
        $aling = '';
        $ex = explode(':', $styledata[33]);
        if ($ex[0] === 'center') {
            $aling = 'justify-content: center;';
        } elseif ($ex[0] === 'left') {
            $aling = 'justify-content: flex-start;';
        } elseif ($ex[0] === 'right') {
            $aling = 'justify-content: flex-end;';
        }
        $css .= ' 
      .oxi-addons-wrapper-' . $oxiid . '{
          width: 100%;
          display: flex; 
          overflow: hidden; 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 7) . '; 
      } 
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-tlt{ 
          width: 100%;
          display: flex;  
          ' . $aling . '
      } 
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-tlt *{ 
           font-size: ' . $styledata[23] . 'px;
          ' . OxiAddonsFontSettings($styledata, 29) . ';
          color: ' . $styledata[27] . '; 
      }  
    @media only screen and (min-width : 669px) and (max-width : 993px){
        .oxi-addons-wrapper-' . $oxiid . '{ 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 8) . '; 
      }  
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-tlt *{ 
           font-size: ' . $styledata[24] . 'px; 
      } 
    }
    @media only screen and (max-width : 668px){
      .oxi-addons-wrapper-' . $oxiid . '{ 
          padding: ' . OxiAddonsPaddingMarginSanitize($styledata, 9) . '; 
      }  
      .oxi-addons-wrapper-' . $oxiid . ' .oxi-addons-tlt *{ 
           font-size: ' . $styledata[25] . 'px; 
      } 
    }';
        wp_add_inline_style('shortcode-addons-style', $css);
        wp_add_inline_script('jquery-textillate-js', $jquery);
    }

}
