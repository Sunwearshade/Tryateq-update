<?php
require_once __DIR__ . '/../../vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig( __DIR__ . '/../../credentials.json');
$client->setAccessType('offline');
$client->addScope(Google_Service_Gmail::GMAIL_SEND);

if (!isset($_GET['code'])) {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit();
} else {
    $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (isset($accessToken['error'])) {
        echo 'Error al obtener el token: ' . $accessToken['error'];
        exit();
    }
    $_SESSION['access_token'] = $accessToken;
    header('Location: http://localhost/mtec-update/Admin/ConsultarRegistrosdeContacto.php'); 
    exit();
}
