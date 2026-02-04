<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
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
                <li class="login"><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="login" style="margin: 30px auto 0 auto; max-width: 500px; width: 100%;">
        <form class="login-form" style="display: flex; flex-direction: column; gap: 10px; width: 100%; margin: 0 auto;">
            <h1>Prijava</h1>
            <label for="username">Korisničko ime:</label>
            <input type="text" id="username" name="username" required style="height: 40px; font-size: 1.1em; width: 100%;">
            <label for="password">Lozinka:</label>
            <input type="password" id="password" name="password" required style="height: 40px; font-size: 1.1em; width: 100%;">
            <button type="submit">Prijavi se</button>
        </form>
    </div>
    <div class="page-content" style="flex:1; display:flex; flex-direction:column; justify-content:center;">
        
    </div>
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