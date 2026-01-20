<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Gdje kušati Crni rižot</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>

<header>
    <h1>Gdje kušati Crni Rižot</h1>
    <nav>
        <ul>
            <li><a href="index.html">Početna</a></li>
            <li><a href="recepti.html">Recepti</a></li>
            <li><a href="#">O nama</a></li>
            <li><a href="kontakt.html">Kontakt</a></li> 
        </ul>
        <ul class="nav-right">
            <li class="login"><a href="login.html">Login</a></li>
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
            <option value="Dubrovnik">Dubrovnik</option>
            <option value="Rijeka">Rijeka</option>
        </select>
        <button id="confirmCity">Potvrdi</button>
    </div>
</div>

<section class="page-section">
    <h2>Preporučeni restorani</h2>
   <ul class="restaurants">
    <li>Restoran Dalmacija - Split</li>
    <li>Konoba Kaleta - Dubrovnik</li>
    <li>Restoran Riva - Rijeka</li>
    <li>Konoba Fetivi - Split</li>
    <li>Restoran Proto - Dubrovnik</li>
    <li>Konoba Kod Joze - Split</li>
    <li>Restoran Mornar - Rijeka</li>
</ul>
</section>
<footer>
        <div class="footer-content">
            <p>&copy; 2025 Tradicionalna Kuhinja. Sva prava pridržana.</p>
            <ul class="footer-nav">
                <li><a href="index.html">Početna</a></li>
                <li><a href="recepti.html">Recepti</a></li>
                <li><a href="about.html">O nama</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>