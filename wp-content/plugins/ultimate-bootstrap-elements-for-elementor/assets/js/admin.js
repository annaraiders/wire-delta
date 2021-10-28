(function ($) {
    var UBE_ADMIN = {
        init: function () {
            this.setupSelect2();
            this.setupColorPicker();
        },
        setupSelect2: function () {
            $('.ube-select2').select2();
        },
        setupColorPicker: function () {
            $('.ube-admin-color').spectrum({
                type: "component"
            });
        }
    };
})(jQuery);

