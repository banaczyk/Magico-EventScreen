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
✅ Obsługa wielu niezależnych grup/pokoi z unikalnym numerem  
✅ Każda grupa/pokój ma swój własny zestaw wiadomości

---

## Jak to działa?

1. Technik otwiera **Panel Technika**.
2. Muzycy otwierają **Ekran Muzyka** na osobnym urządzeniu (tablet, laptop, telefon).
3. Oba urządzenia (technik i muzycy) wpisują ten sam 4-cyfrowy numer pokoju — dzięki temu trafiają do wspólnej przestrzeni komunikacyjnej.
4. Technik wpisuje treść komunikatu.
5. Kliknięcie „Wyślij” powoduje wyświetlenie wiadomości na ekranie muzyka.
6. Ekran muzyka miga, aby zwrócić uwagę.
7. Komunikat pozostaje widoczny do momentu jego usunięcia lub zmiany.
8. W dowolnym momencie można zmienić numer pokoju, aby przełączyć się do innej grupy.

---

## Struktura plików

```
.
.
├── index.php        // Strona startowa z wyborem ekranu
├── panel.php        // Panel Technika - wpisywanie komunikatów
├── screen.php       // Ekran Muzyka - wyświetlanie komunikatów
├── action.php       // Logika zapisu/odczytu wiadomości (API)
├── script.js        // Skrypt JS obsługujący komunikację i logikę frontendu
├── messages/        // Folder na pliki wiadomości (jeden plik na każdy pokój)
│   ├── message_1234.json  // Przykładowy plik dla pokoju 1234
│   ├── message_5678.json  // Przykładowy plik dla pokoju 5678
├── .htaccess        // Zabezpieczenie katalogu messages przed bezpośrednim dostępem
├── README.md        // Dokumentacja projektu

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