<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carta para Ti</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: radial-gradient(circle at center, #ffeaf6 0%, #ffd6e0 100%);
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .envoltorio {
      position: relative;
      width: 500px;
      height: 350px;
      perspective: 1000px;
    }

    .sobre-realista {
      width: 100%;
      height: 100%;
      background: #d6336c;
      border-radius: 10px;
      position: relative;
      box-shadow: 0 10px 30px rgba(214, 51, 108, 0.5);
      transform-style: preserve-3d;
      cursor: pointer;
    }

    .solapa {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 50%;
      background: #e85d8c;
      clip-path: polygon(0 0, 50% 100%, 100% 0);
      transform-origin: top;
      transition: transform 1s ease;
      z-index: 2;
    }

    .papel {
      position: absolute;
      top: 20%;
      left: 5%;
      width: 90%;
      height: 0;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: height 1s ease;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .papel.mostrar {
      height: 270px;
    }

    .solapa.abierta {
      transform: rotateX(-140deg);
    }

    .contenido-carta {
      opacity: 0;
      padding: 25px;
      transition: opacity 1s ease 0.5s;
      height: 100%;
      overflow-y: auto;
      box-sizing: border-box;
    }

    .contenido-carta.mostrar {
      opacity: 1;
    }

    .contenido-carta h2 {
      font-family: 'Great Vibes', cursive;
      font-size: 34px;
      color: #d6336c;
      margin: 0 0 15px;
      text-align: center;
    }

    .contenido-carta p {
      font-size: 16px;
      line-height: 1.7;
      color: #333;
      margin: 8px 0;
      text-align: justify;
    }

    @keyframes corazones {
      0% { transform: translateY(0) scale(1); opacity: 1; }
      100% { transform: translateY(-150px) scale(1.5); opacity: 0; }
    }

    .corazon {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #ff4d88;
      transform: rotate(45deg);
      animation: corazones 5s infinite ease-in;
    }

    .corazon::before,
    .corazon::after {
      content: "";
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #ff4d88;
      border-radius: 50%;
    }

    .corazon::before {
      top: -10px;
      left: 0;
    }

    .corazon::after {
      top: 0;
      left: -10px;
    }

    .corazon:nth-child(1) { left: 10%; animation-delay: 0s; }
    .corazon:nth-child(2) { left: 20%; animation-delay: 1s; }
    .corazon:nth-child(3) { left: 30%; animation-delay: 2s; }
    .corazon:nth-child(4) { left: 40%; animation-delay: 3s; }
    .corazon:nth-child(5) { left: 50%; animation-delay: 4s; }
    .corazon:nth-child(6) { left: 60%; animation-delay: 2.5s; }
    .corazon:nth-child(7) { left: 70%; animation-delay: 1.5s; }
    .corazon:nth-child(8) { left: 80%; animation-delay: 3.5s; }
    .corazon:nth-child(9) { left: 90%; animation-delay: 0.5s; }
    .corazon:nth-child(10) { left: 95%; animation-delay: 4.5s; }

  </style>
</head>
<body>

  <!-- Corazones flotantes -->
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>
  <div class="corazon"></div>

  <div class="envoltorio" onclick="abrirSobre()">
    <div class="sobre-realista">
      <div class="solapa" id="solapa"></div>
      <div class="papel" id="papel">
        <div class="contenido-carta" id="contenido">
          <h2>Mi conejita hermosa 💌</h2>
          <p>Hoy es un gran día para ti y muy especial, el día en que el amor de mi vida nacio. y vino a este mundo para ser mia, para ser mi novia, mi futura esposa y la madre de mis hijos pase lo que pase.</p>
             <p>Cada tiempo que paso contigo, cada momento, aunque sea en la distancia, es lo mas maravilloso del mundo mi amor.🌸 ❤️</p>
        <p>Eres lo mejor que me ha pasado y lo mas bonito, te adoro con todas mis fuerzas y tu sabes que te amo muchisisisisimo.💕 Eres mi todo, mi bebe preciosa y ahora que has vuelto a ser mi novia me siento mejor muchisimo mejor.</p>
        <p>Me haces sonreír, soñar y sentirme amado. Esta carta no es solo un mensaje, ya que te escribo esto con el corazón cada palabra es lo que nace del amor que te tengo y de como me haces sentir. ❤️</p>  
        <p>No quiero hacer muy largo todo asi solo te quiero decir TE AMOOOO y se que con eso no es suficiente tampoco. Solo me queda decirte...❤️</p>
          <p>¡Feliz cumpleaños, mi amor! Espero que la pases muy bien con tu familia, que disfrutes, te diviertas y comas muy rico, que te mejores en tu salud y salgas mas fuerte que se que sera asi y que vengaan muchos años mas viejita. Obviamente a mi lado.</p>
          <p>Espero que esta pequeña sorpresa te guste y toque tu corazoncito como tú has tocado el mío bebe.</p>
          <p>Y en este día tan especial, quiero recordarte lo importante que eres para mí. Obviamente te debere tu regalo preciosa. MUAAAAAAAAA, te amo muchoo y gracias por existir mi reyna.</p>
          <p style="font-weight: bold; text-align: center;">Te amo con todo mi ser.<br> Tu Turri 💕</p>
        </div>
      </div>
    </div>
  </div>

  <div style="position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); text-align: center;">
  <a href="sorpresa.php" style="text-decoration: none;">
    <button style="padding: 12px 25px; background-color: #d6336c; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: background 0.3s ease;">
      ➡️ Siguiente
    </button>
  </a>
</div>

  <script>
    function abrirSobre() {
      document.getElementById('solapa').classList.add('abierta');
      document.getElementById('papel').classList.add('mostrar');
      document.getElementById('contenido').classList.add('mostrar');
    }
  </script>
</body>
</html>
