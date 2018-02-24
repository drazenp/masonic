(function ($) {
    'use strict'
    window.RemotePal = {
        initialize: function () {
            $('.sb-search, .sb-search-res').on('click', function (e) {
                $('.masonic-search-toggle').slideToggle('slow');
            });

            $('#copyrightLink').popup({
                content: $('#copyrightPopup')
            });
        }
    };
})(jQuery);


jQuery(document).ready(function () {
    RemotePal.initialize();
});
    