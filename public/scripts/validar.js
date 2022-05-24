// ============= VALIDAÇÃO DE TIPOS

function Carga(tipo) {
    if (tipo=="entrada") {
    document.getElementById("entrada").style.display = "inline";
    document.getElementById("saida").style.display = "none";
    } else {
    document.getElementById("entrada").style.display = "none";
    document.getElementById("saida").style.display = "inline";
    }
}
