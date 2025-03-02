<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Panel Technika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="container py-5">
    <h1 class="mb-4">Panel Technika</h1>
    <textarea id="messageInput" class="form-control mb-3" rows="4" placeholder="Wpisz wiadomość"></textarea>
    <div class="mb-3">
        <button class="btn btn-primary mr-2" onclick="sendMessage()">Wyślij</button>
        <button class="btn btn-warning mr-2" onclick="clearMessage()">Usuń wiadomość</button>
        <button class="btn btn-danger" onclick="triggerManualFlash()">Zamigaj ekranem</button>
    </div>
    <h2 class="mt-4">Aktualny komunikat:</h2>
<div class="d-flex align-items-center">
    <div id="flashIndicator" style="
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: grey;
        margin-right: 10px;
    "></div>
    <div id="currentMessage" class="alert alert-info m-0">Brak komunikatu</div>
</div>

    <script>
        fetchMessage(); // Załaduj aktualną wiadomość po załadowaniu strony
    </script>
</body>
</html>
