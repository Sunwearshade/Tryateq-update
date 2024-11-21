<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/vendor/autoload.php';

function sendEmail($to, $subject, $messageBody) {
    $client = new Google_Client();
    $client->setApplicationName('Gmail API PHP');
    $client->setScopes(Google_Service_Gmail::GMAIL_SEND);
    $client->setAuthConfig(__DIR__ . '/../../credentials.json');
    $client->setAccessType('offline');

    // Verifica si existe un token almacenado
    $tokenPath = __DIR__ . '/token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // Si el token ha expirado, pide uno nuevo
    if ($client->isAccessTokenExpired()) {
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            $authUrl = $client->createAuthUrl();
            printf("Abre este enlace en tu navegador:\n%s\n", $authUrl);
            print 'Ingresa el código de autorización: ';
            $authCode = trim(fgets(STDIN));
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Guarda el token para futuros usos
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($accessToken));
        }
    }

    $service = new Google_Service_Gmail($client);

    $strRawMessage = "From: Your Name <your-email@gmail.com>\r\n";
    $strRawMessage .= "To: $to\r\n";
    $strRawMessage .= "Subject: $subject\r\n\r\n";
    $strRawMessage .= $messageBody;

    $mime = rtrim(strtr(base64_encode($strRawMessage), '+/', '-_'), '=');

    $message = new Google_Service_Gmail_Message();
    $message->setRaw($mime);

    try {
        $service->users_messages->send('me', $message);
        return ['status' => 'success', 'message' => 'Correo enviado exitosamente.'];
    } catch (Exception $e) {
        return ['status' => 'error', 'message' => $e->getMessage()];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Mensaje para $name";
    $messageBody = "Hola $name,\n\nEste es un mensaje automático de Tryateq.\n\nGracias por contactarnos.";

    $response = sendEmail($to, $subject, $messageBody);
    echo json_encode($response);
}
