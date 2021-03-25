$(document).on('click', '.pagination a', function(e) {
    e.preventDefault();
    var page1 = $(this).attr('href').split('page=')[1];
    var route = "/usuario";

    $.ajax({
        url: route,
        data: {page: page1},
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $(".users").html(data);
        }
    });
});