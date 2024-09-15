<!DOCTYPE html>
<html>
<head>
<script>
function actualizarHora() {
    var fecha = new Date(); // Obtiene la fecha y hora actual
    var horas = fecha.getHours();
    var minutos = fecha.getMinutes();
    var segundos = fecha.getSeconds();
    var ampm = horas >= 12 ? 'PM' : 'AM';

    // Convierte a formato de 12 horas
    horas = horas % 12;
    horas = horas ? horas : 12; // Si es 0, establece 12

    // Agrega un 0 delante si es menor a 10
    horas = horas < 10 ? '0' + horas : horas;
    minutos = minutos < 10 ? '0' + minutos : minutos;
    segundos = segundos < 10 ? '0' + segundos : segundos;

    var horaActual = horas + ':' + minutos + ':' + segundos + ' ' + ampm;
    document.getElementById('hora').innerHTML = horaActual;
}

// Actualiza la hora cada segundo
setInterval(actualizarHora, 1000);
</script>
</head>
<body>
<p><span id="hora"></span></p>
</body>
</html>