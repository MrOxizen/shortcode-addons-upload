jQuery.noConflict();
(function ($) {
    var styleid = '';
    var childid = '';
    function Oxi_Flip_Admin_Home(functionname, rawdata, styleid, childid, callback) {
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
                    console.log(response);
                    callback(response);
                }
            });
        }
    }
    jQuery(".oxi-addons-style-clone").on("click", function () {
        $("#oxi-addons-style-modal-form")[0].reset();
        var dataid = jQuery(this).attr('oxiaddonsdataid');
        jQuery('#oxistyleid').val(dataid);
        jQuery("#oxi-addons-style-create-modal").modal("show");
    });
    jQuery(".oxi-addons-style-export").submit(function (e) {
        e.preventDefault();
        var rawdata = 'export';
        var styleid = $(this).children('#oxiexportid').val();
        console.log(styleid);
        var functionname = "shortcode_export";
        $(this).prepend('<span class="spinner sa-spinner-open"></span>');
        Oxi_Flip_Admin_Home(functionname, rawdata, styleid, childid, function (callback) {
            setTimeout(function () {
                $('.sa-spinner-open').remove();
                $("#oxi-addons-style-export-form")[0].reset();
                jQuery("#OxiAddImportDatacontent").val(callback);
                jQuery("#oxi-addons-style-export-modal").modal("show");
            }, 1000);
        });
    });
    jQuery("#oxi-addons-style-modal-form").submit(function (e) {
        e.preventDefault();
        var rawdata = $('#addons-style-name').val();
        var styleid = $('#oxistyleid').val();
        var functionname = "create_flip";
        $('.modal-footer').prepend('<span class="spinner sa-spinner-open-left"></span>');
        Oxi_Flip_Admin_Home(functionname, rawdata, styleid, childid, function (callback) {
            console.log(callback);
            setTimeout(function () {
                document.location.href = callback;
            }, 1000);
        });
    });

    jQuery(".oxi-addons-style-delete").submit(function (e) {
        e.preventDefault();
        var $This = $(this);
        var rawdata = 'deleting';
        var styleid = $This.children('#oxideleteid').val();
        var functionname = "shortcode_delete";
        $(this).append('<span class="spinner sa-spinner-open"></span>');
        Oxi_Flip_Admin_Home(functionname, rawdata, styleid, childid, function (callback) {
            console.log(callback);
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
    setTimeout(function () {
        if (jQuery(".table").hasClass("oxi_addons_table_data")) {
            jQuery(".oxi_addons_table_data").DataTable({
                "aLengthMenu": [[7, 25, 50, -1], [7, 25, 50, "All"]],
                "initComplete": function (settings, json) {
                    jQuery(".oxi-addons-row.table-responsive").css("opacity", "1").animate({height: jQuery(".oxi-addons-row.table-responsive").get(0).scrollHeight}, 1000);
                    ;
                }
            });
        }
    }, 500);
    jQuery(".oxi-addons-style-delete .btn.btn-danger").on("click", function () {
        var status = confirm("Do you want to Delete this Shortcode? Before delete kindly confirm that you don't use or already replaced this Shortcode. If deleted will never Restored.");
        if (status == false) {
            return false;
        } else {
            return true;
        }
    });
})(jQuery)