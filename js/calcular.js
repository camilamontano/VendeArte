function calcularPrecio() {
    let materiales = document.getElementById("materiales").value;
    let horas = document.getElementById("horas").value;
    let valorHora = document.getElementById("valorHora").value;
    let ganancia = document.getElementById("ganancia").value;

    let base = Number(materiales) + (Number(horas) * Number(valorHora));
    let total = base + (base * (1 +Number(ganancia) / 100));
     
    document.getElementById("resultado").innerHTML = "El precio de venta sugerido es: $" + Math.round(total).toLocaleString('es-CO', { minimumFractionDigits: 2 });
}