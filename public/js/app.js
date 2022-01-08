$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    $("p").slideUp();

    $('#sidebar-menu .nav-link a').click(function () {
        $(this).parents('li').children('.sub-menu').slideToggle();
        $(this).parents('li').toggleClass('fa-angle-right fa-angle-down');
    });

    // $('#sidebar-menu>li>a').click(function () {
    //     // $('#sidebar-menu i.arrow').addClass('deg');
    //     if (!$(this).parent('li').hasClass('deg')) {
    //         $(this).parent('li').addClass('deg');
    //     }
    //     return false;
    // });

    $("input[name='checkall']").click(function () {
        var checked = $(this).is(':checked');
        $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
    });

});