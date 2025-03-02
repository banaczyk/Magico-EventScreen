<?php
function cleanOldFiles($folder, $maxAgeInSeconds = 7 * 24 * 60 * 60) {
    $files = glob($folder . '/message_*.json');
    $now = time();

    foreach ($files as $file) {
        if (filemtime($file) < ($now - $maxAgeInSeconds)) {
            unlink($file);
        }
    }
}

// Uruchamiamy czyszczenie
cleanOldFiles(__DIR__ . '/messages');
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <title>EventScreen - Komunikacja Technika z Muzykami</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 50px;
            text-align: center;
        }

        .btn-container {
            margin: 30px 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .section {
            margin: 50px 0;
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: left;
        }

        footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">EventScreen - Komunikacja Technika z Muzykami</h1>
        <p class="lead">Proste narzędzie do przekazywania komunikatów między realizatorem dźwięku a zespołem na scenie.
        </p>

        <div class="btn-container">
            <a href="panel.php" class="btn btn-primary btn-lg">Panel Technika</a>
            <a href="screen.php" class="btn btn-dark btn-lg">Ekran Muzyka</a>
        </div>

        <div class="section">
            <h2>Co to za aplikacja?</h2>
            <p><strong>EventScreen</strong> to narzędzie, które umożliwia technikowi realizującemu dźwięk lub światło
                wysyłanie wiadomości bezpośrednio na ekran widoczny dla muzyków. Dzięki temu można szybko przekazać
                ważne informacje bez potrzeby podchodzenia do sceny czy przerywania próby.</p>
        </div>

        <div class="section">
            <h2>Jak używać aplikację?</h2>
            <p>Aby korzystać z <strong>EventScreen</strong>, potrzebujesz dwóch urządzeń – jednego dla technika i
                drugiego dla muzyków.</p>
            <ol>
                <li>Technik otwiera <strong>Panel Technika</strong> na swoim komputerze lub tablecie.</li>
                <li>Muzycy na scenie uruchamiają <strong>Ekran Muzyka</strong> na innym urządzeniu – może to być tablet,
                    laptop lub nawet telefon.</li>
                <li>Po uruchomieniu oba urządzenia proszą o podanie wspólnego 4-cyfrowego numeru pokoju. Może to być
                    dowolny wymyślony numer, np. 1234.</li>
                <li>Wpisanie tego samego numeru w obu urządzeniach łączy je w jednej, wspólnej przestrzeni do
                    przesyłania komunikatów.</li>
                <li>Technik wpisuje wiadomość w panelu, a ta natychmiast pojawia się na ekranie muzyków. Przy każdej
                    nowej wiadomości ekran dodatkowo miga, by zwrócić uwagę.</li>
            </ol>
            <p>Taka forma komunikacji sprawia, że wszelkie ważne informacje mogą być przekazywane błyskawicznie i bez
                zakłócania prób czy koncertu.</p>
        </div>

        <div class="section">
            <h2>Kod źródłowy</h2>
            <p>Projekt <strong>EventScreen</strong> jest rozwijany jako otwarte oprogramowanie na platformie GitHub. Możesz go pobrać, modyfikować i dostosowywać do własnych potrzeb.</p>
            <p>
                Zobacz repozytorium na GitHub:<br>
                <a href="https://github.com/banaczyk/Magico-EventScreen" target="_blank" class="btn btn-dark">
                    <i class="fab fa-github"></i> Magico-EventScreen
                </a>
            </p>
        </div>
        


        <footer>
            © 2025 EventScreen | Prosty system komunikacji dla scen muzycznych
        </footer>
    </div>
</body>

</html>