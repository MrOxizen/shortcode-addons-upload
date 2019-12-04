jQuery.noConflict();
(function ($) {
    var styleid = '';
    var childid = '';
    function Oxi_Flip_Admin_Create(functionname, rawdata, styleid, childid, callback) {
        if (functionname !== "") {
            $.ajax({
                url: oxi_flip_box_editor.ajaxurl,
                type: "post",
                data: {
                    action: "oxi_flip_box_data",
                    _wpnonce: oxi_flip_box_editor.nonce,
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
    jQuery(".oxi-addons-addons-template-create").on("click", function (e) {
        e.preventDefault();
        $('#addons-style-name').val('');
        $('#oxistyledata').val($(this).attr('addons-data'));
        jQuery("#oxi-addons-style-create-modal").modal("show");
    });

    jQuery("#oxi-addons-style-modal-form").submit(function (e) {
        e.preventDefault();
        $a = $('#oxistyledata').val() + "-" + $("input[name='flip-box-layouts']:checked").val();
        var data = {
            name: $('#addons-style-name').val(),
            style: JSON.parse($('#' + $a).val()),
        }
        
        var rawdata = JSON.stringify(data);
        var functionname = "create_flip";
        $('.modal-footer').prepend('<span class="spinner sa-spinner-open-left"></span>');
        Oxi_Flip_Admin_Create(functionname, rawdata, styleid, childid, function (callback) {
            console.log(callback);
            setTimeout(function () {
                 document.location.href = callback;
            }, 1000);
        });
    });

    jQuery(".shortcode-addons-template-deactive").submit(function (e) {
        e.preventDefault();
        var $This = $(this);
        var rawdata = $This.serialize();
        var functionname = "shortcode_deactive";
        $(this).append('<span class="spinner sa-spinner-open"></span>');
        Oxi_Flip_Admin_Create(functionname, rawdata, styleid, childid, function (callback) {
            console.log(callback);
            setTimeout(function () {
                if (callback === "done") {
                    $This.parents('.oxi-addons-col-1').remove();
                }
            }, 1000);
        });
        return false;

    });
    jQuery(".OxiAddImportDatacontent").on("click", function () {
        jQuery("#OxiAddImportDatacontent").select();
        document.execCommand("copy");
        alert("Your Style Data Copied");
    });


})(jQuery)