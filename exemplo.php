<?php
require_once"vendor/autoload.php";

use \ismar\consultaCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('43700000');

print_r($resultado);