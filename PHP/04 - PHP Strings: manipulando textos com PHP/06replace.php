<?php

$texto = "Texto com qualquer poxa e caramba";

// Troca as strings pelo passado no replace
echo str_replace(["poxa", "caramba"], "***", $texto);

// Troca palavras por caracteres
echo strtr($texto, ['poxa' => 'p', "caramba" => 'c']);
