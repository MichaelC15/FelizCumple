<?php
$respuesta_correcta = "mi amor";
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = strtolower(trim($_POST['respuesta']));
    if ($respuesta === strtolower($respuesta_correcta)) {
        header("Location: crucigrama.php");
        exit;
    } else {
        $mensaje = "❌ Esa no es la forma más tierna 😢. Inténtalo otra vez, que tú puedes 💖.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>💌 Pregunta para ti</title>
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

        h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 38px;
            color: #d6336c;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 12px;
            font-size: 16px;
            border-radius: 10px;
            border: 2px solid #d6336c;
            width: 80%;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #d6336c;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #ad1457;
        }

        .mensaje {
            color: #b71c1c;
            margin-top: 10px;
            font-weight: bold;
        }

        .corazon {
            font-size: 40px;
            animation: latido 1s infinite;
            color: #ff3366;
        }

        @keyframes latido {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
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
        <h2>💌 ¿Cómo te gusta que te diga Turri?</h2>
        <form method="post">
            <input type="text" name="respuesta" placeholder="Escribe tu respuesta aquí... 💬">
            <br>
            <button type="submit">Responder</button>
        </form>
        <?php if (!empty($mensaje)) echo "<p class='mensaje'>$mensaje</p>"; ?>
        <p class="corazon">💕</p>
    </div>
</body>
</html>
