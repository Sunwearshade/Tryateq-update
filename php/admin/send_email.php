<?php
require_once __DIR__ . '/../../vendor/autoload.php';

session_start();

function sendGmail($to, $subject, $body)
{
    $client = new Google_Client();
    $client->setAuthConfig(__DIR__ . '/../../credentials.json'); 
    $client->setAccessType('offline');
    $client->addScope(Google_Service_Gmail::GMAIL_SEND);

    if (!isset($_SESSION['access_token'])) {
        header('Location: authorize.php');
        exit();
    }

    $client->setAccessToken($_SESSION['access_token']);

    if ($client->isAccessTokenExpired()) {
        $refreshToken = $client->getRefreshToken();
        if (!$refreshToken) {
            header('Location: authorize.php');
            exit();
        }
        $client->fetchAccessTokenWithRefreshToken($refreshToken);
        $_SESSION['access_token'] = $client->getAccessToken();
    }

    $service = new Google_Service_Gmail($client);

    $message = new Google_Service_Gmail_Message();
    $rawMessage = "From: armandocandelasalvarado@gmail.com\r\n"; 
    $rawMessage .= "To: $to\r\n";
    $rawMessage .= "Subject: $subject\r\n";
    $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n\r\n";
    $rawMessage .= $body;
    $rawMessage = base64_encode($rawMessage);
    $rawMessage = str_replace(['+', '/', '='], ['-', '_', ''], $rawMessage);
    $message->setRaw($rawMessage);

    try {
        $service->users_messages->send('me', $message);
        return 'Correo enviado con éxito.';
    } catch (Exception $e) {
        return 'Error enviando correo: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['email'];
    $name = $_POST['name'];

    $subject = "Hola, $name";
    $body = "<p>Estimado/a $name,</p><p>Gracias por contactarnos.</p>";

    echo sendGmail($to, $subject, $body);
}
