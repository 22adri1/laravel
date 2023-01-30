<?php
    // Ejecutar el comando systeminfo y guardar el resultado en una variable
    $output = shell_exec('systeminfo');
    // Buscar la línea que contiene "Total Physical Memory" y guardar el resultado en una variable
    preg_match('/Total Physical Memory:.*/', $output, $matches);
    // Extraer solo el valor de la memoria RAM
    preg_match('/[0-9]+/', $matches[0], $memoria_ram);
    echo "Memoria RAM: " . $memoria_ram[0] . " MB <br>";
    // Buscar la línea que contiene "Processor(s)" y guardar el resultado en una variable
    preg_match('/Processor\(s\).*/', $output, $matches);
    // Extraer solo el valor del procesador
    preg_match('/:.*/', $matches[0], $procesador);
    $procesador = preg_replace('/:/', '', $procesador[0]);
    echo "Procesador: " . $procesador;
?>