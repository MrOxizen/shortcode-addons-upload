jQuery.noConflict();
(function ($) {
    var styleid = '';
    var childid = '';
    function ShortcodeAddonsFrontendTemplate(functionname, rawdata, styleid, childid, callback) {
        if (functionname !== "") {
            $.ajax({
                url: shortcode_addons_editor.ajaxurl,
                type: "post",
                data: {
                    action: "shortcode_home_data",
                    _wpnonce: shortcode_addons_editor.nonce,
                    functionname: functionname,
                    styleid: styleid,
                    childid: childid,
                    rawdata: rawdata
                },
                success: function (response) {
                    callback(response);
                }
            });
        }
    }
    $(".oxi-addons-addons-template-create").on("click", function () {
        $("#oxi-addons-style-modal-form")[0].reset();
        $("#oxi-addons-data").val('{"style":{"id":"166","type":"Spacer","name":"Name","style_name":"Style_1","rawdata":"","stylesheet":"","font_family":null},"child":[]}');
        $('#oxistyleid').val('');
        $("#oxi-addons-style-create-modal").modal("show");
    });
    $(".oxi-addons-style-export").on("click", function (e) {
        e.preventDefault();
        var rawdata = JSON.stringify($(this).serializeJSON({checkboxUncheckedValue: "0"}));
        var functionname = "elements_template_export";
        $(this).prepend('<span class="spinner sa-spinner-open"></span>');
        ShortcodeAddonsFrontendTemplate(functionname, rawdata, styleid, childid, function (callback) {
            setTimeout(function () {
                $('.sa-spinner-open').remove();
                $("#oxi-addons-style-export-form")[0].reset();
                $("#OxiAddImportDatacontent").val(callback);
                $("#oxi-addons-style-export-modal").modal("show");
            }, 1000);
        });
    });
    $("#oxi-addons-style-modal-form").submit(function (e) {
        e.preventDefault();
        var rawdata = JSON.stringify($(this).serializeJSON({checkboxUncheckedValue: "0"}));
        $('.modal-footer').prepend('<span class="spinner sa-spinner-open-left"></span>');
        var id = $('#oxistyleid').val();
        var $This = $(this);
        if (id === '') {
            var functionname = "elements_template_create";
            ShortcodeAddonsFrontendTemplate(functionname, rawdata, styleid, childid, function (callback) {
                var theArray = callback.split("styleid=");
                var styleid = theArray[1];
                if (styleid > 0) {
                    var functionn = "elements_template_style_data";
                    ShortcodeAddonsFrontendTemplate(functionn, rawdata, styleid, childid, function (callback) {
                        console.log(callback);
                        window.location.reload();
                    });
                }
            });
        } else {
            var raw = JSON.stringify({addonsstylename: $('#addons-style-name').val(), addonsstylenameid: id});
            var functionname = "elements_template_change_name";
            ShortcodeAddonsFrontendTemplate(functionname, raw, styleid, childid, function (callback) {
                var functionn = "elements_template_style_data";
                ShortcodeAddonsFrontendTemplate(functionn, rawdata, id, childid, function (callback) {
                    console.log(rawdata);
                    window.location.reload();
                });
            });
        }

    });
    jQuery(".oxieditid").on("click", function (e) {
        e.preventDefault();
        var styleid = $(this).data('id');
        var functionname = "get_elements_rawdata";
        ShortcodeAddonsFrontendTemplate(functionname, 'nothings', styleid, childid, function (callback) {
            $.each($.parseJSON(callback), function (key, value) {
                var tp = $('input[name="' + key + '"]').attr("type");
                if (typeof tp !== 'undefined') {
                    if (tp === 'radio') {
                        $('input[name=' + key + ']').val([value]);
                    } else if (tp === 'checkbox') {
                        if (value != '0') {
                            $('input[name=' + key + ']').attr('checked', 'true');
                        } else {
                            $('input[name=' + key + ']').prop('checked', false).removeAttr('checked');
                        }
                    } else if (tp === 'hidden') {
                        $('input[name=' + key + ']').val(value);
                        $('input[name=' + key + ']').siblings('.shortcode-addons-media-control').children('.shortcode-addons-media-control-image-load').css({'background-image': 'url(' + value + ')'});
                    } else {
                        $("#" + key).val(value);
                    }
                } else {
                    $("#" + key).val(value);
                }
            });
            $("#oxi-addons-data").val('{"style":{"id":"166","type":"Spacer","name":"Name","style_name":"Style_1","rawdata":"","stylesheet":"","font_family":null},"child":[]}');
            $('#oxistyleid').val(styleid);
            $("#oxi-addons-style-create-modal").modal("show");
        });
    });
    jQuery(".oxi-addons-style-delete").submit(function (e) {
        e.preventDefault();
        var $This = $(this);
        var rawdata = JSON.stringify($(this).serializeJSON({checkboxUncheckedValue: "0"}));
        var functionname = "elements_template_delete";
        $(this).append('<span class="spinner sa-spinner-open"></span>');
        ShortcodeAddonsFrontendTemplate(functionname, rawdata, styleid, childid, function (callback) {
            setTimeout(function () {
                if (callback === "done") {
                    $This.parents('tr').remove();
                }
            }, 1000);
        });

    });
    jQuery(".OxiAddImportDatacontent").on("click", function () {
        jQuery("#OxiAddImportDatacontent").select();
        document.execCommand("copy");
        alert("Your Style Data Copied");
    });


    function ShortCodeFormSliderINT(ID = '') {
        $this = $('.shortcode-form-slider');
        if (ID !== '') {
            $this = ID.find('.shortcode-form-slider');
        }
        $this.each(function (key, value) {
            var _this = $(this);
            if (!_this.parents('.shortcode-addons-form-repeater-store').length) {

                var $input = _this.siblings('.shortcode-form-slider-input').children('input');
                var step = parseFloat($(this).siblings('.shortcode-form-slider-input').children('input').attr('step'));
                var min = parseFloat($(this).siblings('.shortcode-form-slider-input').children('input').attr('min'));
                var max = parseFloat($(this).siblings('.shortcode-form-slider-input').children('input').attr('max'));
                if (step % 1 == 0) {
                    decimals = 0;
                } else if (step % 0.1 == 0) {
                    decimals = 1;
                } else if (step % 0.01 == 0) {
                    decimals = 2;
                } else {
                    decimals = 3;
                }
                noUiSlider.create(value, {
                    animate: true,
                    start: $input.val(),
                    step: step,
                    connect: 'lower',
                    range: {
                        'min': min,
                        'max': max
                    },
                    format: wNumb({
                        decimals: decimals
                    })
                });
                value.noUiSlider.on('slide', function (v) {
                    $input.val(v);
                    $custom = $input.attr("custom");
                });
            }
        });
    }
    ShortCodeFormSliderINT();
    $(".shortcode-form-slider-input input").on("keyup", function () {
        $input = $(this);
        $custom = $input.attr("custom");
        var html5Slider = $(this).parent().siblings('.shortcode-form-slider');
        html5Slider = html5Slider[0];
        var val = $(this).val();
        html5Slider.noUiSlider.set(val);
    });
    $(".shortcode-control-type-slider .shortcode-form-units-choices-label").click(function () {
        var id = "#" + $(this).attr('for');
        var input = $(this).parent().siblings('.shortcode-form-control-input-wrapper').children('.shortcode-form-slider-input').children('input');
        input.attr('min', $(id).attr('min'));
        input.attr('max', $(id).attr('max'));
        input.attr('step', $(id).attr('step'));
        input.attr('unit', $(id).val());
        var step = parseFloat($(id).attr('step'));
        var min = parseFloat($(id).attr('min'));
        var max = parseFloat($(id).attr('max'));
        var start = input.attr('default-value');
        if (step % 1 == 0) {
            decimals = 0;
        } else if (step % 0.1 == 0) {
            decimals = 1;
        } else if (step % 0.01 == 0) {
            decimals = 2;
        } else {
            decimals = 3;
        }

        var html5Slider = $(this).parent().siblings('.shortcode-form-control-input-wrapper').children('.shortcode-form-slider');
        html5Slider = html5Slider[0];
        html5Slider.noUiSlider.updateOptions({
            start: start,
            step: step,
            range: {
                'min': min,
                'max': max
            },
            format: wNumb({
                decimals: decimals
            })
        });
    });

    $(document.body).on("click", ".shortcode-form-responsive-switcher-desktop", function () {
        $("#oxi-addons-style-modal-form").toggleClass('shortcode-responsive-switchers-open');
        $(".shortcode-form-responsive-switcher-tablet").removeClass('active');
        $(".shortcode-form-responsive-switcher-mobile").removeClass('active');
        $(".shortcode-addons-form-responsive-laptop").removeClass('shortcode-addons-responsive-display-none');
        $(".shortcode-addons-form-responsive-tab").addClass('shortcode-addons-responsive-display-none');
        $(".shortcode-addons-form-responsive-mobile").addClass('shortcode-addons-responsive-display-none');
    });
    $(document.body).on("click", ".shortcode-form-responsive-switcher-tablet", function () {
        $(".shortcode-form-responsive-switcher-tablet").addClass('active');
        $(".shortcode-form-responsive-switcher-mobile").removeClass('active');
        $(".shortcode-addons-form-responsive-laptop").addClass('shortcode-addons-responsive-display-none');
        $(".shortcode-addons-form-responsive-tab").removeClass('shortcode-addons-responsive-display-none');
        $(".shortcode-addons-form-responsive-mobile").addClass('shortcode-addons-responsive-display-none');
    });
    $(document.body).on("click", ".shortcode-form-responsive-switcher-mobile", function () {
        $(".shortcode-form-responsive-switcher-tablet").removeClass('active');
        $(".shortcode-form-responsive-switcher-mobile").addClass('active');
        $(".shortcode-addons-form-responsive-laptop").addClass('shortcode-addons-responsive-display-none');
        $(".shortcode-addons-form-responsive-tab").addClass('shortcode-addons-responsive-display-none');
        $(".shortcode-addons-form-responsive-mobile").removeClass('shortcode-addons-responsive-display-none');
    });

})(jQuery)