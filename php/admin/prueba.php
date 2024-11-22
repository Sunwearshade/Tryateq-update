<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Google\Client;
use Google\Service\Gmail;

$client = new Client();
echo 'Google Client cargado correctamente.<br>';

$gmailService = new Gmail($client);
echo 'Google Gmail Service cargado correctamente.';
