<?php

require_once "app/vendor/autoload.php";

use generator\Generate;

echo "Iniciando geração do projeto... \n";
$result = Generate::start();

echo $result[1];
