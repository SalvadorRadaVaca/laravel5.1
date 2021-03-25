$(document).ready(function() {
    Carga();
});

function Carga() {
    var dataTable = $("#data");
    var route = "/generos";

    $("#data").empty();
    $.get(route, function(reply) { 
        $(reply).each(function(key, value) {
            dataTable.append("<tr><td>" + value.genre + "</td><td><button value=" + value.id + " OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button value=" + value.id + " OnClick='Eliminar(this);' class='btn btn-danger'>Eliminar</button></td></tr>");
        });
    });
}

function Eliminar(btn) {
    var route = "/genero/" + btn.value + "";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'DELETE',
        dataType: 'json',
        success: function() {
            Carga();
            $("#message-success").fadeIn();
        }
    });
}

function Mostrar(btn) {
    var route = "/genero/"+ btn.value + "/edit";

    $.get(route, function(reply) {
        $("#genre").val(reply.genre);
        $("#id").val(reply.id);
    });
}

$("#update").click(function() {
    var value = $("#id").val();
    var data1 = $("#genre").val();
    var route = "/genero/" + value + "";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: { 'X-CSRF-TOKEN': token },
        type: 'PUT',
        dataType: 'json',
        data: { genre: data1 },
        success: function() {
            Carga();
            $("#myModal").modal('toggle');
            $("#message-success").fadeIn();
        }
    });
});

