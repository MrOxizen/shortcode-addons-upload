
jQuery.noConflict();
(function ($) {
    "use strict";
    $(document).on("click", ".oxi-tabs-admin-recommended-dismiss", function (e) {
        e.preventDefault();
        $.ajax({
            url: oxi_tabs_admin_recommended.ajaxurl,
            type: 'post',
            data: {
                action: 'oxi_tabs_admin_recommended',
                _wpnonce: oxi_tabs_admin_recommended.nonce,
                notice: $(this).attr('sup-data'),
            },
            success: function (response) {
                console.log(response);
                $('.shortcode-addons-review-notice').hide();
            },
            error: function (error) {
                console.log('Something went wrong!');
            },
        });
        return false;
    });
})(jQuery);
