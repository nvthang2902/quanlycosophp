$(document).ready(function () {
    $('#drop-menu').click(function () {
        $('#ddmenu').css("display", "block");
        $('#close-menu').css("display", "block");
    });
    $('#close-menu').click(function () {
        $('#ddmenu').css("display", "none");
        $('#close-menu').css("display", "none");
    });
});