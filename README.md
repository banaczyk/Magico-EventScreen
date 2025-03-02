# EventScreen - Komunikacja Technika z Muzykami

## Co to jest EventScreen?

**EventScreen** to lekkie, webowe narzędzie stworzone z myślą o szybkiej komunikacji pomiędzy technikiem realizującym dźwięk lub światło a zespołem muzycznym na scenie. Umożliwia ono natychmiastowe przekazywanie komunikatów w formie dużego, czytelnego tekstu na dedykowany ekran dla muzyków.

[![ZOBACZ ONLINE](https://img.shields.io/badge/ZOBACZ%20ONLINE-muzyczni.com%2Feventscreen-blue?style=for-the-badge)](https://muzyczni.com/eventscreen)

---

## Funkcje

✅ Panel technika do wpisywania komunikatów  
✅ Ekran muzyka, który wyświetla wiadomość w dużym formacie  
✅ Miganie ekranu przy nowym komunikacie, aby zwrócić uwagę  
✅ Możliwość ręcznego wywołania migania  
✅ Status flash widoczny na panelu technika  

---

## Jak to działa?

1. Technik otwiera **Panel Technika**.
2. Wpisuje treść komunikatu.
3. Kliknięcie „Wyślij” powoduje wyświetlenie wiadomości na ekranie muzyka.
4. Ekran muzyka miga, aby zwrócić uwagę.
5. Komunikat pozostaje widoczny do momentu jego usunięcia lub zmiany.

---

## Struktura plików

```
.
├── index.php        // Strona startowa z wyborem ekranu
├── panel.php        // Panel Technika
├── screen.php       // Ekran Muzyka
├── action.php       // API do zapisu i odczytu wiadomości
├── message.json     // Plik przechowujący wiadomość
├── script.js        // Logika działania na froncie
├── .htaccess        // Blokada dostępu do message.json
└── README.md        // Dokumentacja projektu
```

---

## Bezpieczeństwo

Aplikacja została zabezpieczona przed:

- Bezpośrednim dostępem do `message.json` przez `.htaccess`
- Wstrzykiwaniem HTML i JS (sanityzacja treści w `action.php`)
- Możliwość dodania PINu lub hasła do panelu technika w przyszłości

---

## Wymagania

- PHP 7.4 lub nowsze
- Serwer WWW (Apache, Nginx)
- Możliwość zapisu pliku `message.json`

---

## Autorzy

Projekt stworzony przez:

✨ [Magico Software](https://magico.pl)  
🎶 [Zespół Muzyczni.com](https://muzyczni.com)

---

## Licencja

Projekt dostępny na licencji MIT — możesz go dowolnie modyfikować, rozwijać i używać zarówno komercyjnie, jak i prywatnie.

---

## Kontakt

- Magico Software: [https://magico.pl](https://magico.pl)
- Muzyczni.com: [https://muzyczni.com](https://muzyczni.com)