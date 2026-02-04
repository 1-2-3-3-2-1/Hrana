<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Gdje kušati Pašticadu</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>

<header>
    <h1>Gdje kušati Pašticadu</h1>
    <nav>
        <ul>
            <li><a href="/">Početna</a></li>
            <li><a href="/recepti">Recepti</a></li>
            <li><a href="/o-nama">O nama</a></li>
            <li><a href="/kontakt">Kontakt</a></li>
        </ul>
        <ul class="nav-right">
            <li class="login"><a href="/login">Login</a></li>
        </ul>
    </nav>
</header>

<!-- Modal za odabir grada -->
<div id="cityModal" class="modal">
    <div class="modal-content">
        <h2>Odaberite grad</h2>
        <select id="citySelectModal">
            <option value="">-- Odaberite grad --</option>
            <option value="Split">Split</option>
            <option value="Zadar">Zadar</option>
            <option value="Dubrovnik">Dubrovnik</option>
        </select>
        <button id="confirmCity">Potvrdi</button>
    </div>
</div>

<section class="page-section">
    <h2>Preporučeni restorani</h2>
   <ul class="restaurants">
    <li>Restoran Kod Mare - Split</li>
    <li>Konoba Baka - Zadar</li>
    <li>Restoran Pašticada - Dubrovnik</li>
    <li>Konoba Varoš - Split</li>
    <li>Restoran Bruschetta - Zadar</li>
    <li>Konoba Nikola - Split</li>
    <li>Restoran Nautika - Dubrovnik</li>
</ul>
</section>
<footer>
        <div class="footer-content">
            <p>&copy; 2025 Tradicionalna Kuhinja. Sva prava pridržana.</p>
            <ul class="footer-nav">
                <li><a href="/">Početna</a></li>
                <li><a href="/recepti">Recepti</a></li>
                <li><a href="/o-nama">O nama</a></li>
                <li><a href="/kontakt">Kontakt</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>