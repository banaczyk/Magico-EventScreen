<?php

$room = $_GET['room'] ?? $_POST['room'] ?? null;

if (!$room || !preg_match('/^\d{4}$/', $room)) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Nieprawidłowy kod pokoju']);
    exit;
}

$dir = 'messages';

// Upewnij się, że katalog messages istnieje
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// Plik dla tej konkretnej grupy
$file = "$dir/message_$room.json";


// Tworzenie pliku jeśli nie istnieje
if (!file_exists($file)) {
    file_put_contents($file, json_encode(['message' => '', 'flash' => false]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'send') {
        $message = $_POST['message'] ?? '';

        // Sanityzacja: usuwamy tagi HTML i konwertujemy specjalne znaki
        $message = strip_tags($message);
        $message = htmlspecialchars($message, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        file_put_contents($file, json_encode(['message' => $message, 'flash' => true]));  // flash = true przy nowej wiadomości
        echo 'OK';

    } elseif ($action === 'clear') {
        file_put_contents($file, json_encode(['message' => '', 'flash' => false]));
        echo 'OK';

    } elseif ($action === 'flash') {
        $data = json_decode(file_get_contents($file), true);
        $data['flash'] = true;
        file_put_contents($file, json_encode($data));
        echo 'OK';

    } elseif ($action === 'clearFlash') {
        $data = json_decode(file_get_contents($file), true);
        $data['flash'] = false;
        file_put_contents($file, json_encode($data));
        echo 'OK';
    }
} else {
    header('Content-Type: application/json');
    echo file_get_contents($file);
}
