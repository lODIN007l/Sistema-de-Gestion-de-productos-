$(document).ready(function () {
    $('#btnGuardar').click(function () {
        var datos = $('#frmAjax').serialize();
        $.ajax({
            type: "POST",
            url: "../Modelo/insertarProductos.php",
            data: datos,
            success: function (p) {
                if (p != 1) {
                    alert("Agregado con éxito");
                } else {
                    alert("Fallo el server");
                }
            }
        });
        return false;
    });
});