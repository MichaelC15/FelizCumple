<?php
$nombre = "Mi Amochito";
$fecha_nacimiento = new DateTime("2006-06-18");
$hoy = new DateTime("2025-06-17");
$dias_vividos = $hoy->diff($fecha_nacimiento)->days;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>🎂 ¡Feliz Cumpleaños, <?php echo $nombre; ?>!</title>
    <meta http-equiv="refresh" content="16;url=quiz.php">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffccd5, #ffe6f0);
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tarjeta {
            background: white;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            padding: 40px;
            max-width: 600px;
            text-align: center;
            position: relative;
        }

        h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            color: #d6336c;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .corazon {
            font-size: 40px;
            animation: latido 1s infinite;
            color: #ff3366;
        }

        @keyframes latido {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.3); }
        }

        .globo {
            position: absolute;
            top: -40px;
            width: 80px;
            opacity: 0.7;
        }

        .globo.izquierda { left: -30px; transform: rotate(-10deg); }
        .globo.derecha { right: -30px; transform: rotate(10deg); }

        .confeti {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url('https://www.istockphoto.com/es/vector/cintas-festivas-de-fondo-de-confeti-de-fiesta-de-cumplea%C3%B1os-gm2004454055-560393995');
            background-size: cover;
            background-repeat: no-repeat;
            pointer-events: none;
            opacity: 0.3;
            z-index: 0;
        }

    </style>
</head>
<body>
    <div class="confeti"></div>
    <div class="tarjeta">
        <img src="https://i.postimg.cc/f33cmCbC/images.jpg" class="globo izquierda" alt="globo">
        <img src="https://i.postimg.cc/k2YN2z7D/images-1.jpg" class="globo derecha" alt="globo">
        <h1>¡Feliz Cumpleaños, <?php echo $nombre; ?>! 🎉</h1>
        <p>Hoy celebramos el cumpleaños de la persona más hermosa que ha vivido <strong><?php echo $dias_vividos; ?></strong> días maravillosos.</p>
        <p>Gracias por existir, por sonreír, por ser tú. 🥰</p>
        <p class="corazon">❤️</p>
        <p>Espera un momento... se viene algo especial 🎁</p>
    </div>
</body>
</html>
