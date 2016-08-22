$(function() {
    $.material.init();
    $("#menu-toggle").click(function(e) {
        e.preventDefault(), $("#wrapper").toggleClass("toggled")
    });
    $('.password-strength').pwstrength({
        ui: {
            showProgressBar: true,
            showVerdicts: false
        },
        common: {
            onKeyUp: function(evt, data) {
                $(".password-status").text(data.verdictText);
            }
        }
    });
});

//# sourceMappingURL=app.js.map
