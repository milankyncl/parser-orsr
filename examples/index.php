<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use MilanKyncl\ORSRApi;

require_once '../vendor/autoload.php';

$orsr = new ORSRApi(__DIR__ . '/temp');

echo '<pre>';

print_r($orsr->findByIN(36854590));