<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija - Tradicionalna Kuhinja</title>
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
            <li><a href="/register">Registracija</a></li>
        </ul>
    </nav>
</header>

<!-- REGISTRACIJA -->
<main style="display:flex; justify-content:center; margin-top:40px;">

<div style="width:100%; max-width:500px;">

<h2>Registracija</h2>

<form method="POST" action="{{ route('register') }}"
      style="display:flex; flex-direction:column; gap:15px;">

@csrf

<div>
<label>Ime i prezime</label>
<input type="text" name="name" required
style="height:40px; width:100%;">
</div>

<div>
<label>Email</label>
<input type="email" name="email" required
style="height:40px; width:100%;">
</div>

<div>
<label>Lozinka</label>
<input type="password" name="password" required
style="height:40px; width:100%;">
</div>

<div>
<label>Potvrdi lozinku</label>
<input type="password" name="password_confirmation" required
style="height:40px; width:100%;">
</div>

<button type="submit" style="height:45px;">Registriraj se</button>

@if($errors->any())
    <div style="color:red;">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<p>
Već imaš račun? <a href="/login">Prijavi se</a>
</p>

</form>

</div>
</main>

<footer style="margin-top:50px;">
<div class="footer-content">
<p>&copy; 2025 Tradicionalna Kuhinja</p>
</div>
</footer>

</body>
</html>