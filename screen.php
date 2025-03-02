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
    <div id="messageDisplay"></div>
    <script>
        pollMessage(); // Start sprawdzania wiadomości
    </script>
</body>
</html>