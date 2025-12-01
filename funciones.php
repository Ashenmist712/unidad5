<?php

function obtenerElemento($anio) {
    
    $ajuste = $anio - 4;
    $residuo = $ajuste % 10;

    if ($residuo == 0 || $residuo == 1) {
        return "Madera";
    } elseif ($residuo == 2 || $residuo == 3) {
        return "Fuego";
    } elseif ($residuo == 4 || $residuo == 5) {
        return "Tierra";
    } elseif ($residuo == 6 || $residuo == 7) {
        return "Metal";
    } else {
        return "Agua";
    }
}
