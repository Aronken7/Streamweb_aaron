function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var email = document.getElementById("email").value;
    var edad = document.getElementById("edad").value;
    var plan = document.getElementById("plan").value;
    var paquete = document.getElementById("paquete").value;
    var duracion = document.getElementById("duracion").value;

    if (nombre == "" || apellido == "" || email == "" || edad == "" || plan == "" || paquete == "" || duracion == "") {
        alert("Por favor completa todos los campos");
        return false;
    }

    if (edad < 18 && paquete != "Infantil") {
        alert("Los menores de 18 años solo pueden contratar el Pack Infantil.");
        return false;
    }

    if (plan == "Básico" && paquete != "" && paquete != "Infantil") {
        alert("Los usuarios del Plan Básico solo pueden seleccionar un paquete adicional.");
        return false;
    }

    if (paquete == "Deporte" && duracion != "Anual") {
        alert("El Pack Deporte solo puede ser contratado con suscripción anual.");
        return false;
    }

    return true; 
}
