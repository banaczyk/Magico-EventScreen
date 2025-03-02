<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Ekran Muzyka</title>
    <script src="script.js"></script>
    <style>
        body {
            background: black;
            color: white;
            font-size: 100px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        body.flash {
            animation: flash 0.5s 2;
        }
        @keyframes flash {
            0%, 100% { background-color: black; }
            50% { background-color: red; }
        }
    </style>
</head>
<body>
<div class="modal" id="roomModal" tabindex="-1" role="dialog" style="display:block; background-color:rgba(0,0,0,0.8); position:fixed; top:0; left:0; width:100%; height:100%; z-index:1050;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Podaj numer grupy</h5>
            </div>
            <div class="modal-body">
                <p>Jeśli nie znasz numeru – wymyśl nowy, 4-cyfrowy kod i udostępnij go technikowi.</p>
                <input type="text" id="roomCodeInput" class="form-control" maxlength="4" pattern="[0-9]{4}" placeholder="Podaj 4 cyfry" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="setRoomCode()">Wejdź</button>
            </div>
        </div>
    </div>
</div>


    <div id="messageDisplay"></div>

    <script>
    function initAfterRoomSet() {
        pollMessage();
    }
    checkRoomCode();
</script>

</body>
</html>