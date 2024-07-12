<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Pemilihan Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .hero,
        section {
            flex: 1;
        }

        .hero .btn {
            background: #ff5722;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        section {
            padding: 60px 20px;
        }

        section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        section .container {
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>SPK Pemilihan Game</h1>
            <nav>
                <ul>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h2>Temukan Game Terbaik untuk Anda</h2>
            <p>Dengan sistem pendukung keputusan kami, pilihlah game yang sesuai dengan preferensi Anda.</p>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 SPK Pemilihan Game. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
