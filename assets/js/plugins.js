// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

$(window).load(function() {
    $("#sticker").sticky({ topSpacing: 0, center:true, className:"main" });
});

$(window).load(function() {
    $(function() {
        $('#tabs').tabs({
            show: function(event, ui) {
            window.location.hash = ui.panel.id;
            }
        });
    });
});

$(document).ready(function () {
    $('#signup_form').h5Validate();
    $('#login_form').h5Validate();
});