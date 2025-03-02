function getRoomCode() {
    const urlParams = new URLSearchParams(window.location.search);
    let room = urlParams.get('room');
    if (!room) {
        room = localStorage.getItem('eventscreen_room');
    }
    if (!room) {
        alert('Brak kodu pokoju!');
        throw new Error('Brak kodu pokoju');
    }
    return room;
}

function checkRoomCode() {
    let room = new URLSearchParams(window.location.search).get('room') || localStorage.getItem('eventscreen_room');

    if (!room || !/^\d{4}$/.test(room)) {
        document.getElementById('roomModal').style.display = 'block';
    } else {
        localStorage.setItem('eventscreen_room', room);
        document.getElementById('roomModal').style.display = 'none';
        initAfterRoomSet();
    }
}



function setRoomCode() {
    const room = document.getElementById('roomCodeInput').value;
    if (/^\d{4}$/.test(room)) {
        localStorage.setItem('eventscreen_room', room);
        window.location.search = '?room=' + room;  // przekierowanie z kodem w URL
    } else {
        alert('Podaj poprawny 4-cyfrowy kod.');
    }
}



function sendMessage() {
    const message = document.getElementById('messageInput').value;
    fetch(`action.php?room=${getRoomCode()}`, {
        method: 'POST',
        body: new URLSearchParams({action: 'send', message})
    }).then(fetchMessage);
}

function clearMessage() {
    fetch(`action.php?room=${getRoomCode()}`, {
        method: 'POST',
        body: new URLSearchParams({action: 'clear'})
    }).then(fetchMessage);
}



function fetchMessage() {
    fetch(`action.php?room=${getRoomCode()}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('currentMessage').innerText = data.message || 'Brak komunikatu';
            updateFlashIndicator(data.flash);
        });
}

function pollMessage() {
    fetch(`action.php?room=${getRoomCode()}`)
        .then(response => response.json())
        .then(data => {
            const display = document.getElementById('messageDisplay');
            if (data.message) {
                display.innerText = data.message;
                display.style.display = 'block';
                if (data.flash) {
                    flashScreen();
                    clearFlash(); // natychmiast zerujemy flagę flash, bez ruszania wiadomości
                }
            } else {
                display.style.display = 'none';
            }
        })
        .finally(() => setTimeout(pollMessage, 1000));  // co sekundę sprawdzamy
}

function flashScreen() {
    let flashes = 0;
    const interval = setInterval(() => {
        document.body.classList.toggle('flash');
        flashes++;
        if (flashes >= 4) {  // 4 mignięcia = 2 sekundy
            clearInterval(interval);
            document.body.classList.remove('flash'); // dla pewności
        }
    }, 500);
}

function clearFlash() {
    fetch(`action.php?room=${getRoomCode()}`, {
        method: 'POST',
        body: new URLSearchParams({action: 'clearFlash'})
    });
}

function triggerManualFlash() {
    fetch(`action.php?room=${getRoomCode()}`, {
        method: 'POST',
        body: new URLSearchParams({action: 'flash'})
    });
}



let flashInterval = null;

function updateFlashIndicator(isFlashing) {
    const indicator = document.getElementById('flashIndicator');
    if (!indicator) return; // zabezpieczenie dla screen.php, gdzie nie ma flashIndicator

    if (isFlashing) {
        if (!flashInterval) {
            flashInterval = setInterval(() => {
                indicator.style.backgroundColor = (indicator.style.backgroundColor === 'red') ? 'grey' : 'red';
            }, 500);
        }
    } else {
        if (flashInterval) {
            clearInterval(flashInterval);
            flashInterval = null;
        }
        indicator.style.backgroundColor = 'grey';
    }
}

