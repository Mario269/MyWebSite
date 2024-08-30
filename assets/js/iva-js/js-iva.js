
function calcularIva() {

    let cantidad = Number(document.getElementById("txtIvas").value);

    let cantidadf = cantidad * 0.22;

    document.getElementById("spnRespuestaIvas").innerHTML = "el valor del IVA es " + cantidadf;

}

document.getElementById("btnCalcularIvas").addEventListener("click", calcularIva);