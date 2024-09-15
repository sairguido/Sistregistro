<?php
date_default_timezone_set('America/Lima'); // Establecer la zona horaria a Perú

$diaSemana = date('l'); // Día de la semana en inglés (ejemplo: Monday)
$fecha = date('d'); // Día del mes (ejemplo: 17)
$mes = date('F'); // Mes en inglés completo (ejemplo: August)
$anio = date('Y'); // Año (ejemplo: 2023)

// Traducir el día de la semana y el mes al español
$diaSemana_es = [
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes',
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo'
];

$mes_es = [
    'January' => 'Enero',
    'February' => 'Febrero',
    'March' => 'Marzo',
    'April' => 'Abril',
    'May' => 'Mayo',
    'June' => 'Junio',
    'July' => 'Julio',
    'August' => 'Agosto',
    'September' => 'Septiembre',
    'October' => 'Octubre',
    'November' => 'Noviembre',
    'December' => 'Diciembre'
];

$diaSemana = $diaSemana_es[$diaSemana];
$mes = $mes_es[$mes];

echo "$diaSemana, $fecha de $mes del $anio.";
?>