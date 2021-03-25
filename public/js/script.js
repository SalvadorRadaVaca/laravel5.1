$("#register").click(function() {
    var data1 = $("#genre").val();
    var route = "/genero";
    var token = $("#token").val();

    $.ajax({
        url: route,
        type: 'POST',
        headers: { 'X-CSRF-TOKEN': token },
        dataType: 'json',
        data: { genre: data1 },

        success:function() {
            $("#message-success").fadeIn();
        },
        error:function(message) {
            $("#message").html(message.responseJSON.genre);
            $("#message-error").fadeIn();
        }
    });
});