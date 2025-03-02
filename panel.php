<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Panel Technika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="container py-5">

<div class="modal" id="roomModal" tabindex="-1" role="dialog" style="display:block; background-color:rgba(0,0,0,0.8); position:fixed; top:0; left:0; width:100%; height:100%; z-index:1050;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Podaj numer grupy</h5>
            </div>
            <div class="modal-body">
                <p>Jeśli nie znasz numeru – wymyśl nowy, 4-cyfrowy kod i udostępnij go muzykom.</p>
                <input type="text" id="roomCodeInput" class="form-control" maxlength="4" pattern="[0-9]{4}" placeholder="Podaj 4 cyfry" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="setRoomCode()">Wejdź</button>
            </div>
        </div>
    </div>
</div>


    <h1 class="mb-4">Panel Technika</h1>
    <p class="text-muted">
    Aktualny pokój: <span id="currentRoom"></span> |
    <a href="#" onclick="changeRoom()">Zmień pokój</a>
</p>


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
    function initAfterRoomSet() {
        fetchMessage();
        setInterval(fetchMessage, 1000); // Auto-odświeżanie co sekundę
    }
    checkRoomCode();
</script>

</body>
</html>
