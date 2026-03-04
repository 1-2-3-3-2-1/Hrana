<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/styles.css">
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
        </ul>
    </nav>
</header>

<!-- LOGIN FORMA -->
<div style="margin:30px auto; max-width:500px; width:100%;">

    <form method="POST" action="{{ route('login') }}"
          style="display:flex; flex-direction:column; gap:10px;">

        @csrf

        <h1>Prijava</h1>

        <label>Email:</label>
        <input type="email"
               name="email"
               required
               style="height:40px; font-size:1.1em; width:100%;">

        <label>Lozinka:</label>
        <input type="password"
               name="password"
               required
               style="height:40px; font-size:1.1em; width:100%;">

        <button type="submit">Prijavi se</button>

        @if($errors->any())
            <p style="color:red;">
                {{ $errors->first() }}
            </p>
        @endif

    </form>

</div>

<footer style="margin-top:50px;">
    <div class="footer-content">

        <p>&copy; 2025 Tradicionalna Kuhinja</p>

        <ul>
            <li><a href="/">Početna</a></li>
            <li><a href="/recepti">Recepti</a></li>
            <li><a href="/o-nama">O nama</a></li>
            <li><a href="/kontakt">Kontakt</a></li>
        </ul>

    </div>
</footer>

</body>
</html>