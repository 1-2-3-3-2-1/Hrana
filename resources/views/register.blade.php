<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija - Tradicionalna Kuhinja</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Tradicionalna Kuhinja</h1>
    <nav>
        <ul>
            <li><a href="/">Početna</a></li>
            <li><a href="/recepti">Recepti</a></li>
            <li><a href="/o-nama">O nama</a></li>
            <li><a href="/kontakt">Kontakt</a></li>
        </ul>

        <ul class="nav-right">
            <li><a href="/login">Login</a></li>
            <li><a href="/register" class="register-btn">Registracija</a></li>
        </ul>
    </nav>
</header>

<main class="auth-container">
    <div class="auth-box">
        <h2>Registracija</h2>

        <form action="/register" method="POST">
            
            <div class="form-group">
                <label for="name">Ime i prezime</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email adresa</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Lozinka</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Potvrdi lozinku</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit" class="auth-button">Registriraj se</button>

            <p class="switch-auth">
                Već imaš račun? <a href="/login">Prijavi se</a>
            </p>

        </form>
    </div>
</main>

<footer>
    <div class="footer-content">
        <p>&copy; 2025 Tradicionalna Kuhinja. Sva prava pridržana.</p>
    </div>
</footer>

</body>
</html>
