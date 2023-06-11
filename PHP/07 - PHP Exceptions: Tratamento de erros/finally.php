<?php

try {
    echo "executando..." . PHP_EOL;
    throw new Exception("Exceção");
    return 0;
} catch (Exception $exception) {
    echo "caindo no catch" . PHP_EOL;
    return 1;
} finally {
    echo "Ainda chega no Finally" . PHP_EOL;
}