<?php
    // 1. Seconds to Hours, Minutes and Seconds
    $segundos   = readline("Ingresa el tiempo en segundos: "); 

    $horas      = (int) ($segundos / 3600);
    $segundos   = (int) ($segundos % 3600); 
    $minutos    = (int) ($segundos / 60); 
    $segundos   = (int) ($segundos % 60); 

    echo "Son $horas horas, $minutos minutos y $segundos segundos."; 
    echo "\n\n";

    // 2. Hours, Minutes and Seconds to Seconds
    $horas      = readline("Por favor, ingresa el numero de horas: ");
    $minutos    = readline("Por favor, ingresa los minutos: ");
    $segundos   = readline("Por favor, ingresa los segundos: ");

    $tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

    echo "Este tiempo equivale a $tiempo_en_segundos segundos. \n";
?>