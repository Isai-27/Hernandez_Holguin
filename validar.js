function validar_producto() {
    var cod_producto = document.getElementById("cod_producto").value;
    var nom_producto = document.getElementById("nom_producto").value;
    var precio = document.getElementById("precio").value;
    var cantidad = document.getElementById("cantidad").value;
    var cod_categoria = document.getElementById("cod_categoria").value;
    var fecha_elab = document.getElementById("fecha_elab").value;
    var fecha_cad = document.getElementById("fecha_cad").value;

    if (cod_producto == "" || nom_producto == "" || precio == "" || cantidad == "" || cod_categoria == "" || fecha_elab == "" || fecha_cad == "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    if (isNaN(precio) || isNaN(cantidad)) {
        alert("El precio y la cantidad deben ser números");
        return false;
    }

    if (new Date(fecha_elab) > new Date(fecha_cad)) {
        alert("La fecha de elaboración no puede ser posterior a la fecha de caducidad");
        return false;
    }

    document.getElementById("registro_productos").submit();
}