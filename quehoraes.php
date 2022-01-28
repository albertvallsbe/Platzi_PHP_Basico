<?php

$segundos = readline("Ingresa el tiempo en segundos");
$segundos = 3661;
echo  $segundos;

echo nl2br(" \n");


$horas = (int)($segundos / 3600);
$segundos = (int)($segundos % 3600);


$minutos = (int)($segundos / 60);
$segundos = (int)($segundos % 60);


echo $horas . " horas " . $minutos . " minutos " . $segundos . " segundos";
echo nl2br(" \n");
echo "----------------------------";
echo nl2br(" \n");

$horas_reverse = 1;
$minutos_reverse = 1;
$segundos_reverse = 1;

echo $horas_reverse . " horas " . $minutos_reverse . " minutos " . $segundos_reverse . " segundos";
$result = ($segundos_reverse + ($minutos_reverse * 60) + ($horas_reverse * 60 * 60));

echo nl2br(" \n");
echo $result;



echo "\n";
