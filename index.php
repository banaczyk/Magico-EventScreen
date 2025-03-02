<!DOCTYPE html>
<html lang="pl">
<head>
    <title>EventScreen - Komunikacja Technika z Muzykami</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <p class="lead">Proste narzędzie do przekazywania komunikatów między realizatorem dźwięku a zespołem na scenie.</p>

        <div class="btn-container">
            <a href="panel.php" class="btn btn-primary btn-lg">Panel Technika</a>
            <a href="screen.php" class="btn btn-dark btn-lg">Ekran Muzyka</a>
        </div>

        <div class="section">
            <h2>Co to za aplikacja?</h2>
            <p><strong>EventScreen</strong> to narzędzie, które umożliwia technikowi realizującemu dźwięk lub światło wysyłanie wiadomości bezpośrednio na ekran widoczny dla muzyków. Dzięki temu można szybko przekazać ważne informacje bez potrzeby podchodzenia do sceny czy przerywania próby.</p>
        </div>

        <div class="section">
            <h2>Jak to działa?</h2>
            <ol>
                <li>Technik otwiera <strong>Panel Technika</strong>.</li>
                <li>Wpisuje komunikat (np. "Strojenie gitary za głośne").</li>
                <li>Wiadomość natychmiast pojawia się na ekranie muzyka z efektem migania, by zwrócić uwagę.</li>
                <li>Muzyk widzi komunikat na dużym czarnym ekranie w czytelnej formie.</li>
            </ol>
        </div>

        <footer>
            © 2025 EventScreen | Prosty system komunikacji dla scen muzycznych
        </footer>
    </div>
</body>
</html>
