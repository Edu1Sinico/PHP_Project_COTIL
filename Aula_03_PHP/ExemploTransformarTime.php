<?php
$data1 = mktime(0, 0, 0, 16, 04, 2006);
$data2 = mktime(0, 0, 0, 06, 03, 2024);
$difSeconds = ($data2 - $data1);
echo "Diferença em segundos: " . $difSeconds, "<br>";
// Resultado: Diferença em segundos: 1684022400
$difMinutes = ($data2 - $data1) / 60;
echo "Diferença em minutos: " . $difMinutes, "<br>";
// Resultado: Diferença em minutos: 28067040
$difHours = ($data2 - $data1) / 60 / 60;
echo "Diferença em horas: " . $difHours, "<br>";
// Resultado: Diferença em horas: 467784
$difDays = ($data2 - $data1) / 60 / 60 / 24;
echo "Diferença em dias: " . $difDays, "<br>";
// Resultado: Diferença em dias: 19491
