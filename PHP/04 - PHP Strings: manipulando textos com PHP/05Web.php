<?php

$nome = "campo";
?>

// adiciona barra invertida, fazendo o html não interpretar
<input type="text" name="<?= addslashes($nome); ?>"/>

// converter os caracteres para código
<input type="text" name="<?= htmlentities($nome); ?>"/>




