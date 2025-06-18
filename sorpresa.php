<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sorpresa</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: radial-gradient(circle at center, #ffeaf6 0%, #ffd6e0 100%);
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    h2 {
      font-family: 'Great Vibes', cursive;
      font-size: 36px;
      color: #d6336c;
      margin-bottom: 20px;
    }

    button {
      padding: 12px 25px;
      background-color: #d6336c;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #b02958;
    }
  </style>
</head>
<body>

  <h2>Esto que viene lo hice con mucho amor para ti,<br> espero te guste amor de mi vida.</h2>

  <button onclick="mostrarSorpresa()">🎁 Sorpresa</button>

  <script>
    function mostrarSorpresa() {
      window.location.href = "video.php";
    }
  </script>

</body>
</html>
