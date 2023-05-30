var c = /^[A-Za-záéíóúñÑüÜ\s]+$/;
var corre = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
var contra = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,}$/;

for (let index = 1; index <= 30; index++) {
    document.getElementById(
        "sele"
    ).innerHTML += `<option id="${index}">${index} </option>`;
}

function funhh() {
    let x = true;
    var nombre = document.getElementById("nnn").value;
    var apellidos = document.getElementById("ape").value;
    var celf = document.getElementById("telefo").value;
    var cel = document.getElementById("tele").value;
    var correo = document.getElementById("cor").value;
    var tarje = document.getElementById("tarje").value;
    var contraseña = document.getElementById("contraseña").value;
    if (!c.test(nombre)) {
        alert("Por favor ingrese un nombre, sin números");
        x = false;
    } else if (!c.test(apellidos)) {
        alert("Por favor ingrese los apellidos, sin números");
        x = false;
    } else if (celf.length < 7 || celf.length >= 8) {
        alert("El número telefono fijo debe de tener 7 numeros ");
        x = false;
    } else if (cel.length < 10 || cel.length >= 11) {
        alert("El numero telefono  debe de tener 10 numeros ");
        x = false;
    } else if (!corre.test(correo)) {
        alert("Verificar si  el correo es correcto");
        x = false;
    } else if (tarje.length < 16 || tarje.length >= 17) {
        alert("El número de tajeta debe de contener 16 digitos");
        x = false;
    } else if (contraseña.length < 8 || contraseña >= 9) {
        alert("La contraseña debe de tener 6 digitos");
        x = false;
    } else if (contra.test(contraseña)) {
        alert(
            "La contaseña debe de contener: letras mayusculas, minusculas, números y caracteres especiales "
        );
        x = false;
    }
    return x;
}

function funx() {
    if (funhh()) {
        return confirm('¿Registrar?');
    } else {
        return false;
    }
}
