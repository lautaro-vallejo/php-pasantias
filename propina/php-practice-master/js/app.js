$(document).ready(function() {
    $("#formPropina").submit(function(event) {
        event.preventDefault();
        let monto = $("#monto").val();
        let porcentaje = $("#porcentaje").val();
        $.post("calcular.php", { monto: monto, porcentaje: porcentaje }, function(respuesta) {
            $("#resultado").html(respuesta);
        });
    });
});
