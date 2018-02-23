(function ($) {
    'use strict'
    window.RemotePal = {
        initialize: function () {
            $('.sb-search, .sb-search-res').on('click', function (e) {
                e.preventDefault();
                $('.masonic-search-toggle').slideToggle('slow');
            });

            $('#copyrightLink, #copyrightPopup').on('click', function (e) {
                e.preventDefault();
                $('#copyrightPopup').toggleClass('show');
            });
        }
    };
})(jQuery);


jQuery(document).ready(function () {
    RemotePal.initialize();
});